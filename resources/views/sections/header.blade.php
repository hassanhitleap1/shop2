<?php
use App\Category;
$collection=Category::all();
?>
      <div class="container">
         <div class="pb-2 mt-4 mb-2 border-bottom">
            <div class="row justify-content-md-center">
               <div class="col col-lg-4">
                  <div class="input-group mb-1">
                     <input type="text" class="form-control" placeholder="search" aria-label="Recipient's username"
                        aria-describedby="basic-addon2">
                     <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i> </span>
                     </div>
                  </div>
               </div>
               <div class="col-md-auto">
                  <img src="logo-1.png" class="rounded mx-auto d-block" >
               </div>
               <div class="col col-lg-4">
                  <ul class="float-right list-inline">
                     <a id="loginClick">
                        <li class="list-inline-item fas fa-sign-in-alt"></li>
                        Login
                     </a>
                     <a>
                        <li class="list-inline-item fas fa-user-plus"></li>
                        Regidter
                     </a>
                  </ul>
               </div>
            </div>
         </div>
      </div>
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
                  <a class="nav-link" style="color: black !important ;" href="#">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item" style="background: #d06503  ;">
                  <div align="center" >
                    <span class="fas fa-mars fa-2x mt-2"></span>
                  </div>
                  <a class="nav-link" href="#">Link</a>
               </li>
               <li class="nav-item" style="background: #e9931a;  ;">
                    <div align="center">
                      <span class="fas fa-gift fa-2x mt-2"></span>
                    </div>
                    <a class="nav-link" href="#">Link</a>
                 </li>
               <li class="nav-item" style="    background: #1691be;">
                  <div align="center">
                        <span class="fas fa-tv fa-2x mt-2"></span>
                  </div>
                  <a class="nav-link disabled" href="#">Disabled</a>
               </li>
               <li class="nav-item" style="    background: #166ba2;">
                    <div align="center">
                          <span class="fas fa-glass-martini-alt fa-2x mt-2"></span>
                    </div>
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                <li class="nav-item" style="    background: #1b3647;">
                        <div align="center">
                              <span class="fas fa-dollar-sign fa-2x mt-2"></span>
                        </div>
                        <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                <li class="nav-item dropdown" style="background: #152836;">
                        <div align="center">
                           <a class="fas fa-gift fa-2x mt-2 "></a>
                        </div>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="#">Action</a>
                           <a class="dropdown-item" href="#">Another action</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                     </li>
            </ul>
         </div>
      </nav>
      <!-- bigian slider -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="d-block w-100" src="slide-1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="slide-2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="slide-3.jpg" alt="Third slide">
            </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
      <!-- end slider -->