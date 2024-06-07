<div class="col-md-12 mt-2">
    <div class="col-md-12">
    <h5>
        <strong style="color:black">
        Property Auction details
        </strong>
    </h5>
    </div>
    <div class="form-group col-md-5 mr-5">
        <label for="">Start Date</label>
        <input type="date" placeholder="Start Date" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        name="start_date">
        @error("start_date")
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group col-md-5 ml-5">
        <label for="">Start Time</label>
        <input type="time"  placeholder="Start Time" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        name="start_time">
        @error("start_time")
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group col-md-5 mr-5">
        <label for="">End Date</label>
        <input type="date" placeholder="End Date" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        name="end_date">
        @error("end_date")
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group col-md-5 ml-5">
        <label for="">End Time</label>
        <input type="time"  placeholder="End Time" style="border: 1px solid rgb(224, 223, 223);border-radius:7px"
            class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm 
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        name="end_time">
        @error("end_time")
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>
