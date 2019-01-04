@extends('layouts.app')
<style type="text/css">  
 .add-more
 {
  width: 10%;
  height: 70px;
  vertical-align: middle;   
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

                    <div>
                      
                       @foreach ($users as $user)                          

                          {{ $user->title }}  <br>                       

                          {{ $user->author }}  <br>

                          <audio src="/audios/{{ $user->audio  }}" controls>
                            
                          </audio> 

                          <!-- <audio width="400" controls src="/audios/{{ $user->audio }}" type="audio/mp3/ogg">
                          Your browser does not support HTML5 video.
                          </audio>  --> 



                          <!-- <audio controls>
                            <source src="/audios/<?php echo $user->audio; ?>" type="audio/mp3">
                          </audio> -->
                          
                          <br>

                          

                          @endforeach

                    </div> 
                    <hr>   

                    <a href="{{ url('/audio') }}">
                    <input  type="image" name="submit" src="{{ url('images/addmore.jpg') }}" class="add-more"/>  </a>                      
                </div>
            </div>
        </div>
    </div>       
</div>

        @include('includes.footer')
      
@endsection
