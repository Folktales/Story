@extends('layouts.app')
<style type="text/css">
  #update{
       margin-left: 47%;
  }
   .card-body
 {
   font-size: 20px;
 }

</style>


@section('content')
<div class="container">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif

    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Updating Folks....</div>
            <div class="card-body">                  
              <form method="post" enctype="multipart/form-data" action="{{ action('FileController@update', $User->id) }}">
                     {{csrf_field()}}

                <div class="form-group">                      
                       <label for="title"><b>སྲུང་མིང་ ༔</b></label>
                       <input type="text" class="form-control" value="{{ $User->title }}" name="title"/>                 
                </div>

               <div class="form-group">
                      <label for="overview"><b>བཅུ་དོན ༔</b></label>
                      <input type="text" class="form-control" value="{{ $User->overview }}" name="overview"/>
               </div>

               <div class="form-group">
                     <label for="details"><b>སྲུང་ ༔</b></label>                     
                     <textarea cols="5" rows="5" class="form-control" name="story">
                       {{ $User->story }}
                     </textarea>
              </div>

        <div class="form-group">
            <label for="author"><b>བཅུ་དོན ༔</b></label>
             <input type="text" class="form-control" value="{{ $User->author }}" name="author"/>    
        </div>

        <div class="form-group">
              <label for="image"><b>པར ༔</b></label>                            
              <input type="file" name="image-folktales">
        </div>                   
                        

        <button type="submit" class="btn btn-primary" id="update">Update</button>
        </form>          
                                                                   

                </div>
            </div>
        </div>
    </div>       
</div>

        @include('includes.footer')
      
@endsection
