+@extends('user.index')

@section('content')
<div class="padding" style="margin-left:21%">
 @foreach ($anc as $a)
 <div class="instagram-card">
  <div class="instagram-card-header">
    <img src="{{url('/images/admin_icon.png')}}" class="instagram-card-user-image"/>
    <a class="instagram-card-user-name" href="">ADMIN</a>
    <div class="instagram-card-time">{{ $a->start_date}}</div>
  </div>

  <div class="instagram-card-content">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner">
      @php
      $image =  explode('|',$a->file);
      @endphp
        @foreach($image as $key => $image)
        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
         
          <img class="imagedone" width=100% height=100% src="{{ URL::to($image)}}" >
        </div>
        
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
   

  </div>

  <div class="instagram-card-content">
  <p class="likes"><b>Title :</b>{{ $a->title }}
  <p><b>Content :</b>{{ $a->content }}
    
     
        <p><b>End :</b>{{ $a->end_date}}
  </div>
  {{-- <div class="instagram-card-footer">
    <a class="footer-action-icons" href="#"><i class="fa fa-heart-o"></i></a>
    <input class="comments-input" type="text" placeholder="Leave a comment..."/>
    <a class="footer-action-icons" href="#"><i class="fa fa-ellipsis-h"></i></a>
  </div> --}}
  <br>
  <br>
@endforeach
  </div>
</div>
  
  
  
@endsection