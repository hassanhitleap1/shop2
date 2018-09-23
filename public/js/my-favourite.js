var page = 1; //track user scroll as page number, right now page number is 1

    // event on scroll window
    $(window).scroll(function () {
        clearTimeout($.data(this, 'scrollTimer'));
        $.data(this, 'scrollTimer', setTimeout(function () {
            page++; //page number increment
            load_more(page); //load content  

        }, 250));
    }); 
    // event ckick more loader 
    $("#more").click(function (e) { 
        e.preventDefault();
            page++; //page number increment
            load_more(page); //load content  
    }); 

    // load more product 
    function load_more(page){
    $.ajax({
                url: 'my-favorite?page=' + page,
                type: "get",
                dataType: 'json',
                beforeSend: function()
                {
                    $('.ajax-load').show();
                }
            }).done(function(data){
                var data = jQuery.parseJSON(JSON.stringify(data));
                if(data.savedProducts.data.length == 0){
                    //notify user if nothing to load
                    $('.more').hide();
                    $('.ajax-load').html("No more records!");
                    return;
                }
                printProduct(data.savedProducts.data);
                $('.ajax-load').hide(); //hide loading animation once data is received
                // $("#results").append(data); //append data into #results element 
                    
            }).fail(function(jqXHR, ajaxOptions, thrownError){
                alert('No response from server');
            });
    }


    // print product 
    function printProduct(data) {
        var content='';
        $.each(data, function( index, value ) {
            content+='<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"  id="'+value.product.id+'">\n'+
                        '<div class="item">\n'+
                            '<div class="product-extra-link">\n'+
                                '<a href="'+value.product.link+'" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye fa-2x" aria-hidden="true"></i><span>Quick View</span></a>\n'+
                                '<a item="'+value.product.id+'" class="box-hidden wishlist saved"><i class="fa fa-trash fa-2x" aria-hidden="true" style="color: red;"></i><span>Save to favorite Product</span></a>\n'+
                            '</div>\n'+
                            '<div class="thumb-product">\n'+
                                '<a href="'+value.link+'"><img src="'+value.product.image_path+'" alt="" /></a>\n'+
                            '</div>\n'+
                            '<div class="name-product">\n'+
                                '<h3><a href="'+value.product.link+'">Click here to go product</a></h3>\n'+
                            '</div>\n'+
                            '<div class="box-cart">\n'+
                                '<a href="'+value.product.link+'" class="cart">Buy product <i class="fa " aria-hidden="true"></i></a>\n'+
                                '<ins class="price"><sup>$</sup>'+Math.floor(value.product.price)+'<sup>'+String(value.product.price.toFixed(2)).slice(String(value.product.price.toFixed(2)).indexOf('.')) +'</sup></ins>\n'+
                            '</div>\n'+
                            '<div class="customize various" > '+value.product.description+'</div>\n'+
                        '</div>\n'+
                    '</div>';
        });
        $("#products").append(content);
        
    }


        // click save event 
    $(document).on('click', ".saved", function() {
        var item=$(this).attr('item');
        $.ajax({
                url: 'saved',
                type: "get",
                data:{item:item},
                dataType: 'json',
                beforeSend: function()
                {
                    $('.ajax-load').show();
                }
            }).done(function(data){
                $('.ajax-load').hide(); //hide loading animation once data is received 
                if(data.saved==1){
                    alert('Add to favourite');  
                
                }else if(data.saved==2){
                    $( "#"+data.item ).remove();
                    alert('trash from favourite'); 
                }else{
                    alert('Must be login'); 
                }
                
            }).fail(function(jqXHR, ajaxOptions, thrownError){
                alert('No response from server');
            });
    }); 
