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

                        <table>
                            
                          @foreach ($users as $user)

                          <!-- <img src=" {{ url('images/$user->image') }} " alt="no photos" class="folktales"> -->

                          <img src="/images/{{ $user->image  }}">

                          <tr><td> {{ $user->image }} </td></tr>

                          <tr><td> {{ $user->title }} </td></tr>

                          <tr><td> {{ $user->overview }} </td></tr>

                          <tr><td> {{ $user->author }} </td></tr>



                          @endforeach

                        </table>

                	
                		<img src=" {{ url('images/logo.png') }} " alt="no photos" class="folktales">
                		 མི་ལས་ལྷག་པའི་བྱི་ལི། 

                		 <button value="View"> View </button> 
                		 <button value="View"> Edit </button> 
                		 <button value="View"> Delete </button>    	
                   
                        <hr>
                   
                		<img src=" {{ url('images/logo.png') }} " alt="no photos" class="folktales">
                		  མི་ལས་ལྷག་པའི་བྱི་ལི། 
                	     <button value="View"> View </button> 
                		 <button value="View"> Edit </button> 
                		 <button value="View"> Delete </button>  

                		 <hr>  	
                   


                  		<img src=" {{ url('images/logo.png') }} " alt="no photos" class="folktales">
                		 མི་ལས་ལྷག་པའི་བྱི་ལི། 
                	
                         <button value="View"> View </button> 
                		 <button value="View"> Edit </button> 
                		 <button value="View"> Delete </button> 

                		 <hr>   

                    <a href="{{ url('/text') }}"> <input  type="image" name="submit" src="{{ url('images/addmore.jpg') }}" class="add-more"/>  </a>                                                   

                </div>
            </div>
        </div>
    </div>
       
</div>

        @include('includes.footer')
      
@endsection
