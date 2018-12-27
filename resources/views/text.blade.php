@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session()->get('message'))
            <div class="alert alert-success">
              {{ session()->get('message') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header">Texts folktales Only</div>
                <div class="card-body">
                <form method="POST" action="{{ route('file.upload') }}" aria-label="{{ __('Upload') }}">
                      @csrf
                      <div class="form-group row ">
                        <label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('File Upload') }}</label>
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
                            <label for="overview" class="col-sm-4 col-form-label text-md-right">{{ __('Overview') }}</label>
                            <div class="col-md-6">
                                <textarea id="overview" cols="5" rows="5" class="form-control{{ $errors->has('overview') ? ' is-invalid' : '' }}" name="overview" value="{{ old('overview') }}" required autofocus></textarea>
                                @if ($errors->has('overview'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('overview') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                 


                        <div class="form-group row">
                            <label for="story" class="col-md-4 col-form-label text-md-right">{{ __('Detail story') }}</label>
                            <div class="col-md-6">
                               <textarea id="story" cols="10" rows="10" class="form-control{{ $errors->has('story') ? ' is-invalid' : '' }}" name="story" value="{{ old('story') }}" required autofocus></textarea>
                                @if ($errors->has('story'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('story') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('Author') }}</label>
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
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
                            <div class="col-md-6">
                               <input type="file" name="image">
                               
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
                </div>
            </div>
        </div>
    </div>
</div>

 @include('includes.footer')          

@endsection

@section('scripts')
  <script>
    var drop = new Dropzone('#file', {
      url: "{{ route('upload') }}"
    });
  </script>
@endsection