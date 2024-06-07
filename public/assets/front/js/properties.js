  function addToCompareResidential(property_id){
     $.ajax({
         type: "POST",
         dataType: 'json',
         url: "/add-property-to-compare/"+property_id,
         success:function(data){
            
             // Start Message 
             console.log(data);

         const Toast = Swal.mixin({
               toast: true,
               position: 'top-end',
               
               showConfirmButton: false,
               timer: 3000 
         })
         if ($.isEmptyObject(data.error)) {
                 
                 Toast.fire({
                 type: 'success',
                 icon: 'success', 
                 title: data.success, 
                 })

         }else{
            
        Toast.fire({
                 type: 'error',
                 icon: 'error', 
                 title: data.error, 
                 })
             }

           // End Message  

         }
     })

 }
 

 function compareRemove(id){
    $.ajax({
        type: "GET",
        dataType: 'json',
        url: "/remove-property-compare/"+id,
        success:function(data){
            compare();

             // Start Message 

        const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              
              showConfirmButton: false,
              timer: 3000 
        })
        if ($.isEmptyObject(data.error)) {
                
                Toast.fire({
                type: 'success',
                icon: 'success', 
                title: data.success, 
                })

        }else{
           
       Toast.fire({
                type: 'error',
                icon: 'error', 
                title: data.error, 
                })
            }

          // End Message  


        }
    })

}
