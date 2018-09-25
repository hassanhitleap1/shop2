<nav class="navbar navbar-expand-lg navbar-light bg-light pb-2 ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mx-auto">
              <li class="nav-item active" style="background:#ededed; color: black;">
                 <div align="center ">
                    <span class="fas fa-home fa-2x mt-2"></span>
                 </div>
                 <a class="nav-link" style="color: black !important ;" href="{{url('')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item" style="background: #d06503  ;">
                 <div align="center" >
                   <span class="fas fa-mars fa-2x mt-2"></span>
                 </div>
                 <a class="nav-link" href="{{url('/gifts-for-man')}}">Gifts For Men</a>
              </li>
              <li class="nav-item" style="background: #e9931a;  ;">
                   <div align="center">
                     <span class="fas fa-venus  fa-2x mt-2"></span>
                   </div>
                   <a class="nav-link" href="{{url('/gifts-for-women')}}">Gifts For Women</a>
                </li>
              <li class="nav-item" style="background: #1691be;">
                 <div align="center">
                       <span class="fas fa-tv fa-2x mt-2"></span>
                 </div>
                 <a class="nav-link disabled" href="{{url('/geeky-stuff')}}">Geeky Stuff</a>
              </li>
              <li class="nav-item" style="    background: #166ba2;">
                   <div align="center">
                         <span class="fas fa-dollar-sign fa-2x mt-2"></span>
                   </div>
                   <a class="nav-link disabled" href="{{url('/gifts-under-20')}}">Gifts Under $20</a>
               </li>
               <li class="nav-item" style="    background: #1b3647;">
                       <div align="center">
                             <span class="fas fa-gift fa-2x mt-2"></span>
                       </div>
                       <a class="nav-link disabled" href="{{url('/giveaways')}}">Giveaways</a>
               </li>
               <li class="nav-item dropdown" style="background: #152836;">
                       <div align="center">
                          <a class="fas fa-align-justify fa-2x mt-2 "></a>
                       </div>
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       More Category
                       </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <?php $categories=\App\Category::all();?>
                              @foreach ($categories as $category) 
                              <a class="dropdown-item" href="{{url('/?category='.$category->name)}}">{{$category->name}}</a> 
                               @endforeach
                       </div>
                    </li>
           </ul>
        </div>
     </nav>