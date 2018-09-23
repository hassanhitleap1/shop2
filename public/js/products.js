$siteURL="http://localhost/shop/public";
$(document).ready(function(){
    $("#delete-iamge").click(function(){
        id=$("#delete-iamge").attr("model-id");
        URL=$siteURL+"/admin/products/"+id+"/delete-image";
       $.ajax({
            method: "Get",
            url: URL,
        })
            .done(function(msg) {
            alert( 'susefuli deleate date ' );
            $(".rounded").css("display","none");
            $("#delete-iamge").css("display","none");
        });
    });
   
  
});




