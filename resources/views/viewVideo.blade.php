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

                          <video width="400" controls>
                          <!-- <source src=" {{ url('videos/Acho Tsagay.MP4') }}" type="video/mp4"> -->

                            <source src= " /videos/{{ $user->video }} }}" type="video/mp4">



                          Your browser does not support HTML5 video.
                          </video>

                        @endforeach


                    </div>
                    <a href="{{ url('/video') }}"> <input  type="image" name="submit" src="{{ url('images/addmore.jpg') }}" class="add-more"/> </a>                               
                  </div>
            </div>
        </div>
    </div>
       
</div>

        @include('includes.footer')
      
@endsection
