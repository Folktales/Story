@extends('layouts.app')
<style type="text/css">
.back
 {
   width: 3%;
   height: 3%;
  margin-left: 5%;
 }

 .card-body
 {
   font-size: 20px;
 }

 .updated
 {
   margin-left:55%; 
 }
 
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">FOLKTALES</div>

                <div class="card-body">            
                                                     
                    <img src="{{ $User->image  }}" alt="photo unavaible" class="add-more"> <br>                         
                          <b>སྲུང་མིང་  ༔</b> {{ $User->title }} <br>

                           <b>རྩོམ་པ་པོ ༔</b> {{ $User->author }} <br> 

                          <b>བཅུ་དོན   ༔ </b>{{ $User->overview }} <br>

                          <b>སྲུང་    ༔</b><br> {{ $User->story }}

                         <p class="updated"> Uploaded:{{ $User->created_at}}  </p>                                                     
                       	<hr>   
            <a href="{{ url('/view') }}">
            <input  type="image" name="submit" src="{{ url('images/back.png') }}" class="back"/></a><br>
            <b class="back">Back </b>                                    

                </div>
            </div>
        </div>
    </div>
       
</div>

        @include('includes.footer')
      
@endsection
