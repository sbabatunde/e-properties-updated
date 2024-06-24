//Service Providers Registration Form Categories Begins

$(document).ready(function(){
    $('#service_category').change(function (){
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        var slug = $(this).val();
        var slug = $(this).val();
        if(slug != '')
        {
            var _token = $('input[name="_token"]').val();
        }
        $.ajax({
            type: "GET",
            url:"/get/service/category/type/"+slug,
            dataType:'json',
            success:function(data)
            { 
                //to get current date
                $('#service_type').html(''); //Clear existing data
                $('#enclosure').attr('style','display:block');
                //Get Client's data
                console.log(data);
                $('#service_type').append('<option value"' + ''+ '">' + '---Select Property Type ---' + '</option>');
                $.each(data,function(index,value){
                    $('#service_type').append('<option value ="' + value.id + '">' + value.service + '</option>');
                });
                // catType = data.

            }

        })
    });
});
//


//Begin Custom Registration Form
const tenantContainer = document.querySelector('#tenantForm');
const landlordContainer = document.querySelector('#landlordForm');
const agentContainer = document.querySelector('#servProvForm');

    let showTenant = function(){
        tenantContainer.style.display = "block";
        landlordContainer.style.display = "none";
        agentContainer.style.display = "none";
    }

    let showLandlord= function(){
        tenantContainer.style.display = "none";
        landlordContainer.style.display = "block";
        agentContainer.style.display = "none";

    }

    let showAgent = function(){
        tenantContainer.style.display = "none";
        landlordContainer.style.display = "none";
        agentContainer.style.display = "block";
    }
//End Custom Registration Form

//Begin Maintenance Page Show/Hide
    const maintenanceContainer = document.querySelector('#maintenanceView');
    const legalContainer = document.querySelector('#legalView');
    const bdevContainer = document.querySelector('#bdevView');
    const propertyContainer = document.querySelector('#propertyView');

    let maintenance = function(){
        maintenanceContainer.style.display = "block";
        legalContainer.style.display = "none";
        bdevContainer.style.display = "none";
        propertyContainer.style.display = "none";
        console.log('Test');
    }

    let property = function(){
        maintenanceContainer.style.display = "none";
        legalContainer.style.display = "none";
        bdevContainer.style.display = "none";
        propertyContainer.style.display = "block";
    }

    let b_development = function(){
        maintenanceContainer.style.display = "none";
        legalContainer.style.display = "none";
        bdevContainer.style.display = "block";
        propertyContainer.style.display = "none";
    }

    let legal = function(){
        maintenanceContainer.style.display = "none";
        legalContainer.style.display = "block";
        bdevContainer.style.display = "none";
        propertyContainer.style.display = "none";
    }
//End Maintenance Page Show/Hide

//Begin Request Form Show/Hide
    const landReq = document.querySelector('#landRequest');
    const letsReq = document.querySelector('#letsRequest');
    const salesReq = document.querySelector('#salesRequest');
    const rentReq = document.querySelector('#rentRequest');

    let landRequest = function(){
        landReq.style.display = "block";
        letsReq.style.display = "none";
        salesReq.style.display = "none";
        
    }

    let rentRequest = function(){
        landReq.style.display = "none";
        letsReq.style.display = "none";
        salesReq.style.display = "none";
        rentReq.style.display = "block";
    }

    let salesRequest = function(){
        landReq.style.display = "none";
        letsReq.style.display = "none";
        salesReq.style.display = "block";
        rentReq.style.display = "none";
    }

    let letsRequest = function(){
        landReq.style.display = "none";
        letsReq.style.display = "block";
        salesReq.style.display = "none";
        rentReq.style.display = "none";
    }
//End Request Form Show/Hide

//Begin Custom Registration Form
    const resSales = document.querySelector('#residentialSales');
    const resRents = document.querySelector('#residentialRents');
    const resLets = document.querySelector('#residentialLets');

    let showResSales = function(){
        resSales.style.display = "block";
        resRents.style.display = "none";
        resLets.style.display = "none";
    }

    let showResRents= function(){
        resSales.style.display = "none";
        resRents.style.display = "block";
        resLets.style.display = "none";

    }

    let showResLets = function(){
        resSales.style.display = "none";
        resRents.style.display = "none";
        resLets.style.display = "block";
    }
//End Custom Registration Form

//Begin Group Post Show/Hide
    document.addEventListener('DOMContentLoaded', function() {
        var toggleButtons = document.querySelectorAll('.toggleButton');
        var containers = document.querySelectorAll('.group-content');
    
        toggleButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var targetId = button.getAttribute('data-target');
            var targetDiv = document.getElementById(targetId);
    
            // Hide all divs
            containers.forEach(function(container) {
            container.classList.add('hidden');
            });
    
            // Show the target div
            targetDiv.classList.remove('hidden');
        });
        });
    });
//End Group Post Show/Hide

// Begin keep button Group active on click
    const btnFocus = document.querySelectorAll('.active-btn-group');

    btnFocus.forEach(btnGroup => {
        btnGroup.addEventListener('click', () => {
            document.querySelector('.req-target')?.classList.remove('req-target');
            btnGroup.classList.add('req-target');
        });
    });
// Begin keep button group active on click


//Tenant Comment Slide Begins
    //grab the comments wrapper
    const tenantComments = document.querySelector('.tenant-comment-cards');
    //grab the dots
    const tenantCommentDots = document.querySelectorAll('.tenant-dots');
    let activeDotNum = 0;

    tenantCommentDots.forEach((comDot,idx) =>{
        comDot.setAttribute('data-num',idx);

        comDot.addEventListener('click', e => {
            let clickedDotNum = e.target.dataset.num;
            if(clickedDotNum == activeDotNum) return;
            else{
                let displayAreaWidth = document.querySelector('.display-area').clientWidth;
                console.log(displayAreaWidth);

                let pixelsToMove = -displayAreaWidth * clickedDotNum; 
                // to move the slide
                tenantComments.style.transform = 'translateX('+ pixelsToMove +'px)';
                tenantCommentDots[activeDotNum].classList.remove('active');
                tenantCommentDots[clickedDotNum].classList.add('active');
                //to give it the current dot number
                activeDotNum = clickedDotNum;
            }
        });
    });    
//Tenant Comment Slide Ends


//Show/Hide Property Type By Status Begins
const TypeLet = document.querySelector('#TypeLet');
const TypeSales = document.querySelector('#TypeSales');
const TypeRent = document.querySelector('#TypeRent');

    let showTypeSales = function(){
        TypeLet.style.display = "none";
        TypeSales.style.display = "block";
        TypeRent.style.display = "none";
    }

    let showTypeRents= function(){
        TypeLet.style.display = "none";
        TypeSales.style.display = "none";
        TypeRent.style.display = "block";

    }

    let showTypeLets = function(){
        TypeLet.style.display = "block";
        TypeSales.style.display = "none";
        TypeRent.style.display = "none";
    }

//Show/Hide Property Type By Status Ends


