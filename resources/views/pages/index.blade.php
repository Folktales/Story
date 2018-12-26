@extends('layouts.app')
<style type="text/css">
	
 .folktales{
 	border-radius: 100%;
 	max-width: 100px;
 }

 
</style>


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">FOLKTALES</div>

                <div class="card-body">

                	
                		<a href="{!! route('pages.index') !!}"><img src=" {{ url('images/127690564.png') }} " alt="no photos" class="folktales">
                		 མི་ལས་ལྷག་པའི་བྱི་ལི།      	
                   

                   
                		<img src=" {{ url('images/127690564.png') }} " alt="no photos" class="folktales">
                		  མི་ལས་ལྷག་པའི་བྱི་ལི། 
                	


                  		<img src=" {{ url('images/127690564.png') }} " alt="no photos" class="folktales">
                		 མི་ལས་ལྷག་པའི་བྱི་ལི། 
                	
                    

                    <table border = "1">
						   
							@foreach ($users as $user)
							<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->body }}</td>
							</tr>

							@endforeach
					</table>          

                </div>
            </div>
        </div>
    </div>
       
</div>

        @include('includes.footer')
      
@endsection








