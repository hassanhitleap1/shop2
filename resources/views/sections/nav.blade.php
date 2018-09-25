<nav class="navbar navbar-expand-lg navbar-light bg-light pb-2 ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mx-auto">
              <li {{$counter=1}} class="nav-item active" style="background:#ededed; color: black;">
                 <div align="center ">
                    <span class="fas fa-home fa-2x mt-2"></span>
                 </div>
                 <a class="nav-link" style="color: black !important ;" href="{{url('')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              @foreach ($categories as $category) 
                  @if ($counter>5) @break; @endif 
                   <li   {{++$counter}} class="nav-item" style="background: {{$category->color}};">
                        <div align="center" >
                          <span class="{{$category->classes}} fa-2x mt-2"></span>
                        </div>
                        <a class="nav-link" href="{{url('?category='.$category->name)}}">{{$category->name}}</a>
                     </li>
               @endforeach
               <li class="nav-item dropdown" style="background: #152836;">
                       <div align="center">
                          <a class="fas fa-align-justify fa-2x mt-2 "></a>
                       </div>
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       More Category
                       </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              @foreach ($categories as $category) 
                              <a class="dropdown-item" href="{{url('/?category='.$category->name)}}">{{$category->name}}</a> 
                               @endforeach
                       </div>
                    </li>
           </ul>
        </div>
     </nav>