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
                    $(".saved[item='"+data.item+"']").removeClass( "btn-primary" ).addClass( "btn-danger" );
                    $(".saved[item='"+data.item+"']>span").removeClass( "far fa-save" ).addClass( "fas fa-trash-alt" );
                    $(".saved[item='"+data.item+"']").text('UnSaved');
                    $('#addToFavirate').modal('show');   
                
                }else if(data.saved==2){
                    $(".saved[item='"+data.item+"']").removeClass( "btn-danger" ).addClass( "btn-primary" );
                    $(".saved[item='"+data.item+"']>span").removeClass( "fas fa-trash-alt" ).addClass( "far fa-save" );
                    $(".saved[item='"+data.item+"']").text('Saved');
                    $('#trashFromFavirate').modal('show'); 
                }else{
                    $( ".modal-content" ).load( "user/login" , function() {
                        $('#model').modal('show');   
                    }); 
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
       var category= $('#more').attr('category');
      var   search= $('#more').attr('search');
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
        var buttonSave='';
        $.each(data, function( index, value ) {
            buttonSave =(value.is_saved == null)?'<button type="button"  item="'+value.id+'" class="btn  btn-primary  float-right button-save saved" > <span class="far fa-save fa-btn-save"></span>Saved</button>':'<button type="button"  item="'+value.id+'" class="btn btn-danger  float-right button-save saved" > <span class="fas fa-trash-alt fa-btn-save"></span>UnSaved</button>';
            content += '            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 pb-2" id="' + value.id + '">\n' +
            '               <div class="card">\n' +
            buttonSave+
            '<a href="'+value.link+'" target="_blank"><img class="card-img-top" src="'+value.image_path+'" alt="Card image cap" > </a> \n' +
            '                  <div class="card-body">\n' +
            '                     <h4 class="float-right"><i class="fas fa-dollar-sign"></i>'+value.price+'</h4>\n' +
            '                     <h4 class="card-title">'+value.name+'</h4>\n' +
                '                     <p class="card-text">' + value.description.substring(0, 100)+'.</p>\n' +
            '                  </div>\n' +
            '                  <div class="card-footer">\n' +
                '                     <i class="far fa-heart"></i> <small class="text-muted">' + (Math.floor(Math.random() * 1000) + 200) +' love this </small>\n' +
            '                     <a href="'+value.link+'" class="btn btn-primary btn-sm float-right " target="_blank">Check out</a>\n' +
            '                  </div>\n' +
            '               </div>\n' +
            '            </div>';
                    
        });
        $("#products").append(content);

    }