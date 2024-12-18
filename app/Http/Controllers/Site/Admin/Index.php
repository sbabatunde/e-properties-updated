<?php

namespace App\Http\Controllers\Site\Admin;

use App\Models\Property;
use App\Models\ProfMessages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Interactions\ProfessionalViews;

class Index extends Controller
{
    public function adminIndex()
    {
        return view('admin.index');
    }

    public function adminDashboard()
    {
         $userID = Auth::id();
         // Sample data; replace this with your data source
         $interactions = $this->propertyInteractionsStats($userID);
         
        // Call the private function to get stats
        $stats = $this->calculateListingStats($userID);
        $reqStats = $this->calculateRequesttats($userID);
        $dealsStats = $this->calculateDoneDeals($userID);
        $reachedAudience =  $this->showAudienceReports($userID);
        $targetData = $this->targetReport($userID);
        $target = json_decode($targetData['targetData'], true);
         // Get profile visits data
        $profileVisitsData = $this->profileVisits($userID);
        // Decode the JSON string to an array
        $profileVisits = json_decode($profileVisitsData['profileVisits'], true);
        // Encode the data to JSON format to be used in JavaScript
        return view('admin.dashboard.index', compact('stats','reqStats','dealsStats','profileVisits','interactions',
                        'reachedAudience','target'));
    }

    //Private Function to calculate the listings and compare with previous month
    private function calculateListingStats($userID)
    {
        // Get current month listings
        $totalListings = Property::where('agent_id', $userID)->count();
        $currentMonthListings = Property::where('agent_id', $userID)
            ->whereMonth('created_at', now())->whereYear('created_at', now())
            ->count();

        // Get previous month listings
        $previousMonthListings = Property::where('agent_id', $userID)
            ->whereMonth('created_at', now()->subMonth()->month)
            ->whereYear('created_at', now()->subMonth()->year)
            ->count();

        // Calculate percentage change
        if ($previousMonthListings > 0) {
            $percentageChange = (($currentMonthListings - $previousMonthListings) / $previousMonthListings) * 100;
        } else {
            $percentageChange = $currentMonthListings > 0 ? 100 : 0;
        }

        // Return the data as an array
        return [
            'currentMonthListings' => $currentMonthListings,
            'previousMonthListings' => $previousMonthListings,
            'totalListings'=>$totalListings,
            'percentageChange' => number_format($percentageChange, 2). '%',
        ];
    }

    //Private Function to calculate the Requests and compare with previous month
    private function calculateRequesttats($userID)
    {
        // Get current month Requests
        $totalRequests = ProfMessages::where('agent_id', $userID)->count();
        $currentMonthRequests = ProfMessages::where('agent_id', $userID)
            ->whereMonth('created_at', now())->whereYear('created_at', now())
            ->count();

        // Get previous month Requests
        $previousMonthRequests = ProfMessages::where('agent_id', $userID)
            ->whereMonth('created_at', now()->subMonth()->month)
            ->whereYear('created_at', now()->subMonth()->year)
            ->count();

        // Calculate percentage change
        if ($previousMonthRequests > 0) {
            $percentageChange = (($currentMonthRequests - $previousMonthRequests) / $previousMonthRequests) * 100;
        } else {
            $percentageChange = $currentMonthRequests > 0 ? 100 : 0;
        }

        // Return the data as an array
        return [
            'currentMonthRequests' => $currentMonthRequests,
            'previousMonthRequests' => $previousMonthRequests,
            'totalRequests'=>$totalRequests,
            'percentageChange' => number_format($percentageChange, 2). '%',
        ];
    }

    //Private Function to calculate the Requests and compare with previous month
    private function calculateDoneDeals($userID)
    {
        // Get current month Requests
        $totalDoneDeals = Property::where('agent_id', $userID)->where('status','Sold')->count();
        $currentMonthDoneDeals = Property::where('agent_id', $userID)->where('status','Sold')
            ->whereMonth('created_at', now())->whereYear('created_at', now())
            ->count();

        // Get previous month Requests
        $previousMonthDoneDeals = Property::where('agent_id', $userID)->where('status','Sold')
            ->whereMonth('created_at', now()->subMonth()->month)
            ->whereYear('created_at', now()->subMonth()->year)
            ->count();

        // Calculate percentage change
        if ($previousMonthDoneDeals > 0) {
            $percentageChange = (($currentMonthDoneDeals - $previousMonthDoneDeals) / $previousMonthDoneDeals) * 100;
        } else {
            $percentageChange = $currentMonthDoneDeals > 0 ? 100 : 0;
        }

        // Return the data as an array
        return [
            'currentMonthDoneDeals' => $currentMonthDoneDeals,
            'previousMonthDoneDeals' => $previousMonthDoneDeals,
            'totalDoneDeals'=>$totalDoneDeals,
            'percentageChange' => number_format($percentageChange, 2). '%',
        ];
    }

    //Private Function to get profile visits data
    private function profileVisits($userID)
    {
        // Get monthly views for the professional
        $monthlyViews = ProfessionalViews::where('professional_id', $userID)
        ->select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as views'))
        ->groupBy('month')
        ->pluck('views', 'month');

        // Initialize an array for all 12 months with zero views
        $viewsData = array_fill(1, 12, 0); // Keys 1 to 12 represent Jan to Dec

        // Populate viewsData with actual data from the query
        foreach ($monthlyViews as $month => $views) {
        $viewsData[$month] = $views;
        }

        // Convert the array to a JSON-friendly format
        $profileVisits = array_values($viewsData);

        return [
            'profileVisits' => json_encode($profileVisits),
        ];
    }

    //Private Function to get property interactions statistics data
    private function propertyInteractionsStats($userID)
    {
        // Get the first and last day of the previous month
        $firstDayOfLastMonth = now()->subMonth()->startOfMonth();
        $lastDayOfLastMonth = now()->subMonth()->endOfMonth();

        $totalLikes = 0;
        $totalViews = 0;
        $totalShares = 0;
        $totalReviews = 0;

        // Get interactions for the previous month
        $interactions = Property::with('likes', 'views', 'shares', 'reviews')
            ->where('agent_id', $userID)
            ->whereBetween('created_at', [$firstDayOfLastMonth, $lastDayOfLastMonth])
            ->get();

        foreach ($interactions as $property) {
            $totalLikes += $property->likes->count();
            $totalViews += $property->views->count();
            $totalShares += $property->shares->count();
            $totalReviews += $property->reviews->count();
        }
        $totalEngagements = $totalLikes + $totalViews + $totalViews + $totalReviews;

        return [
            'totalLikes' => $totalLikes,
            'totalViews' => $totalViews,            
            'totalShares' => $totalShares,
            'totalReviews' => $totalReviews,
            'totalEngagements' => $totalEngagements,
        ];    
    }

    public function showAudienceReports($userID)
    {
        // Get total views for all months this year
        $regularAudience = ProfessionalViews::where('professional_id', $userID)
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as views'))
            ->whereYear('created_at', now()->year) // Ensure you're only getting this year's data
            ->groupBy('month')
            ->pluck('views', 'month');

        // Calculate total views for this year
        $totalViews = $regularAudience->sum(); // Sum of all views

        // Get total messages (target audience)
        $targetAudience = ProfMessages::where('agent_id', $userID)->count();

        // Pass the data to the view
        return  [
            'totalViews' => $totalViews,
            'targetAudience' => $targetAudience,
        ];
    }

    public function targetReport($userID)
    {
        // Get total views for all months this year
        $monthlyViews = ProfessionalViews::where('professional_id', $userID)
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as views'))
            ->whereYear('created_at', now()->year) // Ensure you're only getting this year's data
            ->groupBy('month')
            ->pluck('views', 'month');

        // Initialize an array for all 12 months with zero views
        $viewsData = array_fill(1, 12, 0); // Keys 1 to 12 represent Jan to Dec

        // Populate viewsData with actual data from the query
        foreach ($monthlyViews as $month => $views) {
            $viewsData[$month] = $views;
        }

        // Get total messages (target audience) per month
        $messagesData = array_fill(1, 12, 0); // Initialize messages data

        for ($month = 1; $month <= 12; $month++) {
            $messagesCount = ProfMessages::where('agent_id', $userID)
                ->whereMonth('created_at', $month)
                ->whereYear('created_at', now()->year)
                ->count();
            $messagesData[$month] = $messagesCount;
        }

        // Sum total views and messages for each month
        $combinedData = [];
        for ($i = 1; $i <= 12; $i++) {
            $combinedData[] = ($viewsData[$i] ?? 0) + ($messagesData[$i] ?? 0);
        }

        return ['targetData' => json_encode($combinedData)];
    }

}
