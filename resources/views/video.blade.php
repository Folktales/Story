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
                <div class="card-header">Videos for Bhutanese Folktales</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                                

                   <form action="/store" method="post"   enctype="multipart/form-data">
                        
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
                           <td> Choose Video:</td>
                           <td><input type="file" name="file"/></td>
                       </tr>

                   </table>                       

                   <button type="submit" class="btn"> Upload</button>
                   <input type="hidden" value="{{ Session::token() }}" name="_token">

                   </form>

                </div>
            </div>
        </div>
    </div>
</div>

 @include('includes.footer')          

@endsection
