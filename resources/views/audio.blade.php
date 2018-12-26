@extends('layouts.app')

<style type="text/css">
    .btn{
        margin-left: 40%;
        padding: 1%;
    }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Audio for Bhutanese Folktales</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif   

            <form method="POST" action="{{ route('audio') }}" aria-label="{{ __('Upload') }}">
                      @csrf
                      <div class="form-group row ">
                        <label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Upload Audio') }}</label>
                        <div class="col-md-6">
                          <div id="file" class="dropzone"></div>
                        </div>    
                      </div>

                        <div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Title') }}</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus />
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                         <div class="form-group row">
                            <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('author') }}</label>
                            <div class="col-md-6">
                                <input id="author" type="text" class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}" name="author" required>
                                @if ($errors->has('author'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('author') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="audio" class="col-md-4 col-form-label text-md-right">{{ __('Audio') }}</label>
                            <div class="col-md-6">
                               <input type="file" name="audio">                               
                            </div>                            
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Upload') }}
                                </button>
                            </div>
                        </div>
                    </form>


                   <!-- <form action="/audio" method="post"   enctype="multipart/form-data">
                        
                        {{ csrf_field()}}

                   <table>
                       
                       <tr>
                           <td>Title : </td>
                           <td> <input type="text" name="title"></td>
                       </tr>
                           
                       <tr>
                           <td>Author:</td>
                           <td><input type="text" name="author"></td>
                       </tr>
                        
                       <tr>
                           <td> Upload Audio:</td>
                           <td><input type="file" name="file"/></td>
                       </tr>

                   </table>                       

                   <button type="submit" class="btn"> Upload</button>
                   <input type="hidden" value="{{ Session::token() }}" name="_token">

                   </form> -->

                </div>
            </div>
        </div>
    </div>
</div>

 @include('includes.footer')          

@endsection
