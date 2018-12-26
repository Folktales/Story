@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">FOLKTALES</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                 
               
                     <a href="{{ url('/view') }}">Text</a>
                     <hr>

                     <a href="{{ url('/audio') }}">Audio</a>
                     <hr>

                      <a href="{{ url('/video') }}">Video</a>
                      <hr>                    

                </div>
            </div>
        </div>
    </div>
       
</div>

        @include('includes.footer')
      
@endsection
