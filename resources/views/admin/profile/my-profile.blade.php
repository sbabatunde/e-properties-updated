<div class="pl-5 " id="myProfile" style="display:block;border: 2px solid #e1e3f0;border-radius:15px;background-color: #edeef5;padding:3vw 0vw 0vw 0vw">
    <form class="form" action="{{ route('admin.profile.edit.additional',$user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="col-md-12">
                                <div class="row mr-5" style="border-top: 2px solid #e1e3f0;border-bottom: 2px solid #e1e3f0">
                                    <div class="col-md-10">
                                        <h4 class="pt-3 pb-0" >
                                            <strong  style="color:black;">
                                                Personal Details
                                            </strong>
                                        </h4>
                                    </div>
                                    <div class="col-md-2 pt-2  pb-1" >
                                        <button type="submit" class="btn ml-5 mb-0" 
                                        style="margin; 0px;color:white;background-color:#394293;border: 1px solid #394293;
                                        border-radius:10px; width:6em; ">Submit</button>
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-12">
                                        <span>
                                            <p style="color: black;font-weight: 600 bold;font-size:1.2rem">
                                                Michael Alele
                                            </p>
                                         </span>
                                    </div>
                                    <div class="col-md-12 ">
                                        <span >
                                            <p style="color: black;font-weight: 600 bold;font-size:1.2rem">
                                                Phone
                                            </p>
                                         </span>
                                    </div>
                                    <div class="col-md-12">
                                        <span>
                                            <p style="color: black;font-weight: 600 bold;font-size:1.2rem">
                                                Dial Code:
                                            </p>
                                         </span>
                                    </div>
                                    <div class="col-md-12">
                                        <span>
                                            <p style="color: black;font-weight: 600 bold;font-size:1.2rem">
                                                Email:
                                            </p>
                                         </span>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <span class="profile-span">
                                            <i class="fa fa-user 2x " style="color: black;font-weight: 600 bold;font-size:3rem">
                                            </i>
                                         </span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-3">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>