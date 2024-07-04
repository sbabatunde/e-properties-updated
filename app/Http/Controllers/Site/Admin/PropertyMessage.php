<?php

namespace App\Http\Controllers\Site\Admin;

use App\Http\Controllers\Controller;
use App\Models\site\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyMessage extends Controller
{
    public function propertyMessage()
    {
        $myMessages = Message::where('agent_id',Auth::id())->with(['property','client'])->paginate(10);
        $user = User::where('id',Auth::id())->first();
        $inbox = count($myMessages);
        
        return view('admin.property-messages.main',compact('myMessages','user','inbox'))->withViewName('vendor.pagination.custom');
    }
}
