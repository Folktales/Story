@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TEXTs</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                                


                   <p> Write your Story below </p>
                   <form action="{{ route('post.create') }}" method="post">

                    
                   
                    <textarea name="body" style="width: 100%; height: 300px;" class="textarea">  </textarea> </br>

                    <button type="submit" class="btn"> Post Story</button>

                   <input type="hidden" value="{{ Session::token() }}" name="_token">

                   </form>


                </div>
            </div>
        </div>
    </div>
</div>

 @include('includes.footer')          

@endsection
