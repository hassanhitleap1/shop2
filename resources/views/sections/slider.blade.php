<?php 
   $imagesSlider = \App\Slider::where('published', \App\Slider::Published)->get();
   $count=$imagesSlider->count();
   ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
      @for ($i = 0; $i < $count; $i++)
      <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="{{(!$i)?'active':''}}"></li>
      @endfor  
   </ol>
   <div class="carousel-inner">
      <?php $i=0?>
      @foreach($imagesSlider as $image)
      <a class="carousel-item {{(!$i)?'active':''}}" href="{{$image->link}}">
      <img class="d-block w-100" src="{{$image->image_path}}" alt="Second slide">
      </a>
      <?php $i++?>
      @endforeach
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