<?php

namespace App\Http\Controllers\Site\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function adminIndex()
    {
        return view('admin.index');
    }

    public function adminDashboard()
    {
         // Sample data; replace this with your data source
         $data = [
            ['task' => 'Likes', 'hours' => 20],
            ['task' => 'Views', 'hours' => 45],
            ['task' => 'Shares', 'hours' => 10],
            ['task' => 'Reviews', 'hours' => 25],
        ];

        // Encode the data to JSON format to be used in JavaScript
        $chartData = json_encode($data);
        return view('admin.dashboard.index', compact('chartData'));
    }
}
