
function userType(id){
    const type = document.querySelector('#bname' + id);
    const bID = document.querySelector('#bID' + id);
    const service = document.querySelector('#sType' + id);
    var typeSelect = document.querySelector('#typeSelect' + id);

    if(typeSelect.value == "agent" || typeSelect.value == "landlord")
    {
        bID.style.display  = "block";
        type.style.display = "block";
    }
    else if(typeSelect.value == "service_provider")
    {
        type.style.display = "block";
        bID.style.display  = "block";
        service.style.display  = "block";

    }
    else{
        type.style.display = "none";
        bID.style.display = "none";
        service.style.display = "none";
    }
}


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
