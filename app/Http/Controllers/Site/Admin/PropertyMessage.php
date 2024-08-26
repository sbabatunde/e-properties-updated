<?php

namespace App\Http\Controllers\Site\Admin;

use App\Models\User;
use App\Models\ProfMessages;
use App\Models\site\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;

class PropertyMessage extends Controller
{
    public function propertyMessage()
    {
        // Retrieve the paginated messages
        $myMessages = Message::where('agent_id', Auth::id())->with(['property', 'client'])->paginate(10);
        $myMessages2 = ProfMessages::where('agent_id', Auth::id())->with('client')->paginate(10);
        
        // Convert paginated items to collections
        $myMessagesCollection = $myMessages->getCollection();
        $myMessages2Collection = $myMessages2->getCollection();
        
        // Add a unique identifier to distinguish between message types
        $myMessagesCollection->transform(function($item) {
            $item->type = 'message';
            return $item;
        });
        
        $myMessages2Collection->transform(function($item) {
            $item->type = 'prof_message';
            return $item;
        });
        
        // Combine collections
        $combinedCollection = $myMessagesCollection->concat($myMessages2Collection);
        
        // Get the current page number
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 10; // Number of items per page
        
        // Calculate the total number of items
        $total = $combinedCollection->count();
        
        // Slice the collection to get items for the current page
        $items = $combinedCollection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        
        // Create a new LengthAwarePaginator instance for the merged collection
        $paginator = new LengthAwarePaginator($items, $total, $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
            'pageName' => 'page',
        ]);
        
        // Retrieve user data
        $user = User::find(Auth::id());
        
        // Count messages
        $inbox = $total;
        
        return view('admin.property-messages.main', compact('paginator', 'user', 'inbox'))
            ->with('viewName', 'vendor.pagination.custom');
    }
}
