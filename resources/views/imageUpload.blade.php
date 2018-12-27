<!DOCTYPE html>
<html>
    <head>
        <title>Learn Infinity - Image uploading using dropzone js in laravel</title>
 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
    </head>
    <body>
        <h3>Image Uploading using dropzone js in laravel</h3>
        
        {{ Form::open(array('url' => 'imageUpload', 'method' => 'PUT', 'name'=>'product_images', 'id'=>'myImageDropzone', 'class'=>'dropzone', 'files' => true)) }}
 
        {{ Form::close() }}
    </body>
</html>