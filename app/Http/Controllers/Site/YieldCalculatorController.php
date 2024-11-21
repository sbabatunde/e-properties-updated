<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Flasher\Toastr\Laravel\Facade\Toastr;
use Illuminate\Http\Request;

class YieldCalculatorController extends Controller
{
     // Show the Yield Calculator Form
     public function showForm()
     {
         return view('front.users.landlord.pages.yield-calculator');
     }
 
     // Calculate the Rental Yield
     public function calculateYield(Request $request)
     {
         // Sanitize input: remove commas from purchase price and monthly rent
         $purchasePrice = str_replace(',', '', $request->input('purchase_price'));
         $monthlyRent = str_replace(',', '', $request->input('monthly_rent'));
     
         // Manually set the sanitized inputs back to the request
         $request->merge([
             'purchase_price' => $purchasePrice,
             'monthly_rent' => $monthlyRent
         ]);
     
         // Validate after sanitization
         $request->validate([
             'purchase_price' => 'required|numeric|min:0',
             'monthly_rent' => 'required|numeric|min:0',
         ]);
     
         // Convert sanitized values to float for calculations
         $purchasePrice = (float)$purchasePrice;
         $monthlyRent = (float)$monthlyRent;
     
         // Calculate the annual rent
         $annualRent = $monthlyRent * 12;
     
         // Calculate the rental yield
         $yield = ($annualRent / $purchasePrice) * 100;
     
         // Pass the results to the view
         Toastr::success('Here is your result', 'Success!');
     
         return view('front.users.landlord.pages.yield-calculator', compact('yield', 'purchasePrice', 'monthlyRent'));
     }
     
}
