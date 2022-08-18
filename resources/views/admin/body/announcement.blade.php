@extends('admin.index')

@section('content')
{{-- <button class="button-29" role="button">Create Announcement</button> --}}
<div class="space">
    space
</div>

<div class="create-announcement">
  @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <div class="row">
    <div class="col-sm-12" style="text-align: center; font-size:30px">
      <label>Create Announcement</label>
    </div>
  </div>
 <!-- --> 
 <form method="post" action="{{ route('upload-announce')}}" enctype="multipart/form-data">
  @csrf
  <div class="row">
   
 <!-- --> 
    <div class="col-sm-1" style="text-align:center;font-size:20px;margin-top:5px" >
      <label for='title'>Title</label>
    </div>
    <div class="col-sm-11" style="margin-top:5px">
      <input type='text' id='title' name="title" style="width:100%;" value="{{ old('title') }}"/> 
    </div>

  </div>
  <div class="row" style="text-align: center">
    <div class="col-sm-6">
      <label>Start Date</label>
      <input style="width:70%" type="date" name="start_date">
    </div>
    <div class="col-sm-6">
      <label>End Date</label>
      <input style="width:70%" type="date" name="end_date">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12" style="font-size:20px;margin-left:20px;">
      <label>Content</label>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12" style="margin-left:20px;">
      <textarea style=" width:98%;height:100px;" name='content' >{{ old('content')}}</textarea>
    </div>
  </div>

  <div class="input-group control-group increment" style="margin-top:10px;" >
    <input type="file" name="filename[]" multiple class="form-control">
    <div class="input-group-btn"> 
      {{-- <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button> --}}
    </div>
  </div>

<!-- HIDDEN CLONE -->

 {{-- <div class="clone hide">
  <div class="control-group input-group" style="margin-top:10px">
    <input type="file" name="filename[]" class="form-control">
    <div class="input-group-btn"> 
      <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
    </div>
  </div>
</div>  --}}

<!-- -->

  <div class="row">
    <div class="col-sm-12" style="text-align: center;margin-top:20px;">
      <button type='submit' class='btn-dark' style="width:100%; cursor: pointer;">Submit</button>
    </div>
  </div>

</form>
  
</div>

<div class="padding" style="margin-top: 2%;margin-left:21%">
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
   <p class="likes"><b>Title :</b>   {{ $a->title }}
   <p><b>Content :</b>        {{ $a->content }}
      <p><b>End :</b>        {{ $a->end_date}}
      <p> 
          <a class='btn btn-primary' id='edit-annc' href={{ url("/admin/editannouncement/".$a['id']) }}>Edit</a>
          <button class='btn btn-danger' action={{ "/admin/deleteAnnouncement/".$a['id'] }} onclick="destroyData(this)">Delete</button>
   
        
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

<!-- DISPLAY ANNOUNCEMENTS -->


@endsection