@extends('admin.index')

@section('content')
    <!-- EDIT ANNOUNCEMENT FORM -->
    
<div class="edit-announcement">
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
        <label>Edit Announcement</label>
      </div>
    </div>
  
    <form method="post" action="{{ url('/admin/updateannouncement/'.$edit['id'])}}" enctype="multipart/form-data">
      @csrf
    
    <div class="col-sm-1" style="text-align:center;font-size:20px;margin-top:5px" >
      <label for='title'>Title</label>
    </div>
    <div class="col-sm-11" style="margin-top:5px">
      <input type='text' id='title' name="title" style="width:100%;" value="{{ $edit['title'] }}"/> 
    </div>
    <div class="row" style="text-align: center">
      <div class="col-sm-6">
        <label>Start Date</label>
        <input style="width:70%" type="date" name="start_date" value="{{ $edit['start_date']}}">
      </div>
      <div class="col-sm-6">
        <label>End Date</label>
        <input style="width:70%" type="date" name="end_date" value="{{ $edit['end_date']}}">
      </div>
    </div>
  
  <div class="row">
    <div class="col-sm-12" style="font-size:20px;margin-left:20px;">
      <label>Content</label>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12" style="margin-left:20px;">
      <textarea style=" width:98%;height:100px;" name='content'>{{ $edit['content'] }}</textarea>
    </div>
  </div>
  
   <div class="input-group control-group increment" style="margin-top:10px;" >
    <input type="file" name="filename[]" multiple class="form-control">
    <div class="input-group-btn"> 
      {{-- <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button> --}}
    </div>
  </div> 
  
  
   
    <div class="row">
      <div class="col-sm-6" style="text-align: center;margin-top:20px;">
        <button type='submit' class='btn btn-dark' style="width:100%; cursor: pointer; color:white;">Submit</button>
      </form>
      </div>
      <div class="col-sm-6" style="text-align: center;margin-top:20px;">
        <a class='btn btn-danger' style="width:100%; cursor: pointer;" href={{ url("/admin/announcement") }}>Cancel</a>
      </div>
   
    </div>
   <!-- DISPLAYING IMAGES -->
   <div class="container" >
    <div class="display-images" style="display:inline-block;">
      @php
          $converted = explode(',',$edit['file']);
          $many =   explode('|',$edit['file']);
          $newlink = str_replace('images','',$edit['file']);
      @endphp
      @foreach ($many as $item)
          
        @php
             $image = str_replace('images/','',$item);
        @endphp
       @if ($item == "")
           
       @else
       <button class='remove' style="cursor: pointer;" action={{ '/admin/deleteimage/'.$edit['id'].'/'.$image}} onclick="deleteimage(this)">X  </button>
       <img src='{{ "/".$item }}' width="20%" alt="Image" style="margin-top:2%;"> 
       @endif
       
        @endforeach
    </div>
   
</div>

</div>
  
  
@endsection