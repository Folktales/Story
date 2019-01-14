@extends('layouts.app')
<style type="text/css">
	
 

 .add-more
 {
 	width: 10%;
 	height: 70px;
  margin-left: 10%; 		
 }

 .image
 {
  width: 20%;
  height: 25%;
 }

 #edit{
  padding-left: 4%;
  text-align: center;
 } 

 .border
 {
    border-width: 2px;    
 }

 .text-view
 {
   font-size: 20px;
   font-family: serif;
 }

 .back
 {
   width: 3%;
   height: 3%;
  margin-left: 90%;
 }
 
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">FOLKTALES</div>

                <div class="card-body">  

                <div class="text-view">                  
                            
                          @foreach ($users as $user)                          

                          <img src="{{ $user->image  }}" alt="photo unavaible" class="image">
                          <br>                         

                           <b>སྲུང་མིང་ ༔</b>&nbsp;&nbsp;{{ $user->title }} <br>

                           <b>བཅུ་དོན  ༔</b>&nbsp;&nbsp;{{ $user->overview }} <br>
                              
                           <b>རྩོམ་པ་པོ ༔</b>&nbsp;&nbsp;{{ $user->author }} <br>

                          <a href="{{action('FileController@edit',$user->id)}}" class="btn btn-primary" id="edit">Edit</a>  <br><br>

                          <form action="{{action('FileController@destroy', $user->id)}}" method="post">
                             {{csrf_field()}}
                          <input name="_method" type="hidden" value="DELETE">
                           
                          <button class="btn btn-danger" type="submit">Delete</button>
                          </form> 

                          <hr class="border">

                         @endforeach           	
                 </div>

              <a href="{{ url('/text') }}"> <input  type="image" name="submit" src="{{ url('images/addmore.jpg') }}" class="add-more"/> </a><br>
               <b class="add-more"> Add More </b>

              <a href="{{ url('/home') }}">
              <input  type="image" name="submit" src="{{ url('images/back.png') }}" class="back"/>  </a>
              <b class="back">Back </b>

              </div>
                              
            </div>
        </div>
    </div>
</div>

@include('includes.footer')      
@endsection
