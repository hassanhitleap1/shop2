    var page = 1; //track user scroll as page number, right now page number is 1
    var category=$("#more").attr('category');
    var search = $(this).attr('search');

    // scroll event 
    $(window).scroll(function () {
        clearTimeout($.data(this, 'scrollTimer'));
        $.data(this, 'scrollTimer', setTimeout(function () {
            page++; //page number increment
            load_more(page); //load content  

        }, 250));
    }); 

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
                    $(".saved[item='"+data.item+"']").css({"color": ""});
                    $(".saved[item='"+data.item+"']").css({"color": "red"});
                    $("a[item='"+data.item+"']>i").removeClass( "fa fa-save fa-2x" ).addClass( "fa fa-trash fa-2x" );
                    alert('Add to favourite');  
                
                }else if(data.saved==2){
                    $(".saved[item='"+data.item+"']").css({"color": ""});
                    $(".saved[item='"+data.item+"']").css({"color": "black"});
                    $("a[item='"+data.item+"']>i").removeClass( "fa fa-trash fa-2x" ).addClass( "fa fa-save fa-2x" );
                    alert('trash from favourite'); 
                }else{
                    alert('Must be login'); 
                }
                
            }).fail(function(jqXHR, ajaxOptions, thrownError){
                alert('No response from server');
            });
    }); 
    
    // more event 
    $("#more").click(function (e) { 
        e.preventDefault();
            page++; //page number increment
            load_more(page); //load content  
    }); 

    // load more products
    function load_more(page){
        $.ajax({
                url: '?page=' + page,
                type: "get",
                data: { category: category, search:search},
                dataType: 'json',
                beforeSend: function()
                {
                    $('.ajax-load').show();
                }
            }).done(function(data){
                var data = jQuery.parseJSON(JSON.stringify(data));
                if(data.products.data.length == 0){
                    //notify user if nothing to load
                    $('.more').hide();
                    $('.ajax-load').html("No more records!");
                    return;
                }
                printProduct(data.products.data);
                $('.ajax-load').hide(); //hide loading animation once data is received
                // $("#results").append(data); //append data into #results element 
                    
            }).fail(function(jqXHR, ajaxOptions, thrownError){
                alert('No response from server');
            });
    }

    // print products when load more 
    function printProduct(data) {
        var content='';
        $.each(data, function( index, value ) {
            content+='<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">\n'+
                        '<div class="item">\n'+
                            '<div class="product-extra-link">\n'+
                                '<a href="'+value.link+'" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye fa-2x" aria-hidden="true"></i><span>Quick View</span></a>\n'+
                                '<a item="'+value.id+'" class="box-hidden wishlist saved"><i class="'+((value.is_saved == null) ? 'fa fa-save fa-2x' : 'fa fa-trash fa-2x')+'" aria-hidden="true" style="' +((value.is_saved == null) ? 'color:black' : 'color:red')+';"></i><span>Save to favorite Product</span></a>\n'+
                            '</div>\n'+
                            '<div class="thumb-product">\n'+
                                '<a href="'+value.link+'"><img src="'+value.image_path+'" alt="" /></a>\n'+
                            '</div>\n'+
                            '<div class="name-product">\n'+
                                '<h3><a href="'+value.link+'">Click here to go product</a></h3>\n'+
                            '</div>\n'+
                            '<div class="box-cart">\n'+
                                '<a href="'+value.link+'" class="cart">Buy product <i class="fa " aria-hidden="true"></i></a>\n'+
                                '<ins class="price"><sup>$</sup>'+Math.floor(value.price)+'<sup>'+String(value.price.toFixed(2)).slice(String(value.price.toFixed(2)).indexOf('.')) +'</sup></ins>\n'+
                            '</div>\n'+
                            '<div class="customize various" > '+value.description+'</div>\n'+
                        '</div>\n'+
                    '</div>';
        });
        $("#products").append(content);
        
    }