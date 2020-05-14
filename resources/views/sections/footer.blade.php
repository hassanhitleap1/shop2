<section id="footer">
        <div class="container">
           <div class="row text-center text-xs-center text-sm-left text-md-left">
              <div class="col-xs-12 col-sm-4 col-md-4">
                 <h5>{{__('lang.Menu')}}</h5>
                 <ul class="list-unstyled quick-links">
                    <li><a href="{{url('/home')}}"><i class="fa fa-angle-double-right"></i>{{__('lang.Home')}}</a></li>
                    <li><a href="{{url('/contact')}}"><i class="fa fa-angle-double-right"></i>{{__('lang.Connect_Us')}}</a></li>
                    @guest
                    <li><a href="{{url('/login')}}"><i class="fa fa-angle-double-right"></i>{{__('lang.Login')}}</a></li>
                    <li><a href="{{url('/register')}}"><i class="fa fa-angle-double-right"></i>{{__('lang.Register')}}</a></li>
                    @endguest
                 </ul>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                 <h5>{{__('lang.Category')}}</h5>
                 <ul class="list-unstyled quick-links">
                   <?php
                        use App\Category;

                        $categories = Category::all();; ?>
                    @foreach ($categories as $category)
                    <li><a href="{{url('?category='. $category->name)}}"><i class="fa fa-angle-double-right"></i>{{$category->name}}</a></li>
                    @endforeach
                 </ul>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                 <h5>{{__('lang.Social_Media')}}</h5>
                 <ul class="list-unstyled quick-links">
                    <li><a href="javascript:void();"><i class="fab fa-facebook-square fa-2x "></i>facebook</a></li>
                    <li><a href="javascript:void();"><i class="fab fa-twitter fa-2x"></i></i>Twitter</a></li>
                    <li><a href="javascript:void();"><i class="fab fa-youtube fa-2x"></i>Youtube</a></li>
                    <li><a href="javascript:void();"><i class="fab fa-instagram fa-2x"></i>Instagram</a></li>
                 </ul>
              </div>
           </div>
           <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                 <p class="h6">&copy     <a class="text-green ml-2" href="{{url('/')}}" target="_blank">{{config('app.name')}}</a>  {{__('lang.All_Right_Reversed')}}</p>
              </div>
              </hr>
           </div>
        </div>
     </section>
