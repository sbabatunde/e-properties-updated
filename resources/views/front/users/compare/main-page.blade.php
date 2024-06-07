@extends('layouts.front.login-site')
@section('content')
    <div   style="background:#394293;height:30vh">
    </div>

<div class="compare-header">
    <div class="comp-add-more">
        <div class="add-comp border-md shadow-gray-400 shadow-md" style="color: brown;font-size:50px;text-align:center">
            <span class="comp-plus mb-2" style="font-size: 20px;color:brown">&#10133</span>
        </div> 
        <div style="color: black;font-weight:550;margin-top:20px;font-size:18px" class="text-center">Add More</div>
    </div>
    
   
    <div class="comp-prop-1">
        <div class="comp-image-box">
            <img class="comp-img" src="{{ asset('../assets/images/houses/residential/res-1.png') }}" alt="">
            <span class="comp-price">Price: <span style="font:bolder;color:#fff"># 1,930,000</span></span>
            <i class="fa fa-user comp-user-icon"></i>
        </div>
        <div class="comp-desc-box">
            <p>
                <span> 3 Bedroom Office Space</span><br>
                Lagos,Nigeria
            </p>
            <a href="">View</a>
        </div>
    </div>
    <div class="comp-prop-1">
        <div class="comp-image-box">
            <img class="comp-img" src="{{ asset('../assets/images/houses/residential/res-2.png') }}" alt="">
            <span class="comp-price">Price: <span style="font:bolder;color:#fff"># 1,930,000</span></span>
            <i class="fa fa-user comp-user-icon"></i>
        </div>
        <div class="comp-desc-box">
            <p>
                <span> 3 Bedroom Office Space</span><br>
                Lagos,Nigeria
            </p>
            <a href="">View</a>
        </div>
    </div>
</div>
{{-- <div class="compare-table">
    <table class="compare-table">
        <thead>
            <tr>
                <th>Property ID</th>
                <th>Price</th>
                <th>Payment Method</th>
                <th>Status</th>
                <th>Region</th>
                <th>Neighborhood</th>
                <th>Date Posted</th>
                <th>Documentation</th>
                <th>Essential Verification</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Property ID</th>
                <th>Price</th>
                <th>Payment Method</th>
                <th>Status</th>
                <th>Region</th>
                <th>Neighborhood</th>
                <th>Date Posted</th>
                <th>Documentation</th>
                <th>Essential Verification</th>
            </tr>
            <tr>
                <td>EP3145</td>
                <td># 1,745,000</td>
                <td>Annually</td>
                <td>For Sale</td>
                <td>Ikeja Lagos</td>
                <td>Shoprite</td>
                <td>20/10/2023</td>
                <td>100% Complete</td>
                <td>Verified</td>
            </tr>
            <tr>
                <td>EP5467</td>
                <td># 1,925,000</td>
                <td>6 Months</td>
                <td>For Rent</td>
                <td>Ikeja Lagos</td>
                <td>Underbridge</td>
                <td>3/11/2023</td>
                <td>70% Complete</td>
                <td>Not Verified</td>
            </tr>
        </tbody>
    </table>
</div> --}}

<div class="comp-tab-body">
    <div class="compare-table">
        <div class="commp-row">
            <div class="comp-cell head">Property ID</div>
            <div class="comp-cell head">Price</div>
            <div class="comp-cell head">Payment Method</div>
            <div class="comp-cell head">Status</div>
            <div class="comp-cell head">Region</div>
            <div class="comp-cell head">Neighborhood</div>
            <div class="comp-cell head">Date Posted</div>
            <div class="comp-cell head">Documentation</div>
            <div class="comp-cell head">Essential Verification</div>
        </div>
        <div class="commp-row">
            <div class="comp-cell">EP3145</div>
            <div class="comp-cell"># 1,745,000</div>
            <div class="comp-cell">Annually</div>
            <div class="comp-cell">For Sale</div>
            <div class="comp-cell">Ikeja Lagos</div>
            <div class="comp-cell">Shoprite</div>
            <div class="comp-cell">20/10/2023</div>
            <div class="comp-cell">100% Complete</div>
            <div class="comp-cell">Verified</div>
        </div>
        <div class="commp-row">
            <div class="comp-cell">EP5467</div>
            <div class="comp-cell"># 1,925,000</div>
            <div class="comp-cell">6 Months</div>
            <div class="comp-cell">For Rent</div>
            <div class="comp-cell">Ikeja Lagos</div>
            <div class="comp-cell">Underbridge</div>
            <div class="comp-cell">3/11/2023</div>
            <div class="comp-cell">70% Complete</div>
            <div class="comp-cell">Not Verified</div>
        </div>
    </div>
 </div>

@endsection