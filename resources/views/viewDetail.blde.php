@extends('layouts.app')
<style type="text/css">
	
 .folktales{
 	border-radius: 100%;
 	max-width: 100px;
 }

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
                <div class="card-header">FOLKTALES</div>

                <div class="card-body">               
                            
                                                 

                          <img src="{{ $user->image  }}" alt="photo unavaible" class="add-more"> <br>                         

                           {{ $users->title }} <br>

                           {{ $users->author }} <br> 

                           {{ $users->overview }} <br>

                           {{ $users->story }}<br>

                  Uploaded:{{$users->created_at }}                                                      
                 
                 	<hr>   

                    <a href="{{ url('/view') }}"> <input  type="image" name="submit" src="{{ url('images/back.png') }}" class="add-more"/>  </a>
                    <br>
                    <b> Add More </b>                                                   

                </div>
            </div>
        </div>
    </div>
       
</div>

        @include('includes.footer')
      
@endsection
