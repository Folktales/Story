@extends('layouts.app')
<style type="text/css">  
 .add-more
 {
  width: 10%;
  height: 70px;
  margin-left: 10%;   
 }

 #delete
 {
   margin-left: 40%; 
 }

 .audio-view
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
                <div class="card-header">Audios of Bhutanese Folktales</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  

                    <div class="audio-view">
                      
                       @foreach ($users as $user)  

                          <audio src="\audios\{{ $user->audio  }}" controls>
                            
                          </audio>  <br>                      

                        <b>སྲུང་མིང་ ༔</b>&nbsp;&nbsp;{{ $user->title }}  <br>                       

                        <b>རྩོམ་པ་པོ ༔</b>&nbsp;&nbsp; {{ $user->author }}  <br>                         

                          <form action="{{action('VideoController@destroy', $user->id)}}" method="post">
                             {{csrf_field()}}
                          <input name="_method" type="hidden" value="DELETE">
                           
                          <button class="btn btn-danger" type="submit" id="delete">Delete</button>
                          </form>                          

                           <hr>

                           @endforeach

                    </div> 
                      

                    <a href="{{ url('/audio') }}">
                    <input  type="image" name="submit" src="{{ url('images/addmore.jpg') }}" class="add-more"/>  </a> 
                    <br>
                    <b class="add-more"> Add More </b>  
                    <a href="{{ url('/home') }}">
                    <input  type="image" name="submit" src="{{ url('images/back.png') }}" class="back"/>  </a><b class="back">Back </b>                      
                </div>
                
            </div>
        </div>
    </div>       
</div>

        @include('includes.footer')
      
@endsection
