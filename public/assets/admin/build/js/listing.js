$(document).ready(function(){
    $('#category-type').change(function (){
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        var slug = $(this).val();
        if(slug != '')
        {
            var _token = $('input[name="_token"]').val();
        }
        $.ajax({
            type: "GET",
            url:"/get/listing/category/type/"+slug,
            dataType:'json',
            success:function(data)
            { 
                //to get current date
                $('#property_type').html(''); //Clear existing data
                //Get Client's data
                console.log(data);
                $('#property_type').append('<option value"' + ''+ '">' + '---Select Property Type ---' + '</option>');
                $.each(data,function(index,value){
                    $('#property_type').append('<option value ="' + value.id + '">' + value.property_type + '</option>');
                });
                // catType = data.

            }

        })
    });
});