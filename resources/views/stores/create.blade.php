@extends('layouts.main')
<meta name="_token" content="{{ csrf_token() }}">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous" /> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha256-WqU1JavFxSAMcLP2WIOI+GB2zWmShMI82mTpLDcqFUg=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js" integrity="sha256-CgvH7sz3tHhkiVKh05kSUgG97YtzYNnWt6OXcmYzqHY=" crossorigin="anonymous"></script>
<style type="text/css">

img {

display: block;

max-width: 100%;

}

.preview {

overflow: hidden;

width: 160px;

height: 160px;

margin: 10px;

border: 1px solid red;

}

.modal-lg{

max-width: 1000px !important;

}

</style>
@section('content')

<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<div class="pcoded-content">

<div class="card">
<div class="card-header">
<h5>Create Store</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
<form  method="post" action="{{ route('stores.store')}}" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group row">

<label class="col-sm-2 col-form-label">Store Name</label>
 <div class="col-sm-4">
<input type="text" name="store_name" class="form-control form-control-normal" placeholder="store name">
</div>


<label class="col-sm-2 col-form-label">Store Owner</label>
 <div class="col-sm-4">
 <select name="store_owner" class="form-control form-control-inverse">
<option value="opt1">Select Owner</option>
@foreach ($sellers as $seller)
<option value="{{$seller->id}}">{{ $seller->name}}</option>
@endforeach
</select>
</div>

</div>

<div class="form-group row">

<label class="col-sm-2 col-form-label">Promo</label>
 <div class="col-sm-4">
<input type="text"  name="promo" class="form-control form-control-normal" placeholder="Promo description">
</div>


<label class="col-sm-2 col-form-label">Store Phone #</label>
 <div class="col-sm-4">
<input type="text" name="phone_number"  class="form-control form-control-normal" placeholder="phone number">
</div>

</div>


<div class="form-group row">

<label class="col-sm-2 col-form-label">Store Email</label>
 <div class="col-sm-4">
<input type="text"  name="email" class="form-control form-control-normal" placeholder="store email">
</div>

<label class="col-sm-2 col-form-label">Cover Image</label>
<div class="col-sm-4">
<input type="file"  name="images" class="image">
</div>

</div>

<div class="form-group row">


<label class="col-sm-2 col-form-label">Store Address</label>
<div class="col-sm-10">
<textarea rows="5" cols="5" class="form-control" name="address" placeholder="Address"></textarea>
</div>

</div>


<div style="margin-left:780px;">
<button type="submit" class="btn waves-effect waves-light btn-primary btn-outline-primary"><i class="icofont icofont-user-alt-3"></i>Create Store</button>
<button class="btn waves-effect waves-light btn-inverse btn-outline-inverse"><i class="icofont icofont-exchange"></i>Reset</button>
</div>
</div>
</form>
</div>
</div>


</div>

</div>
</div>

<!-- Jcropper -->

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">

<div class="modal-dialog modal-lg" role="document">

<div class="modal-content">

<div class="modal-header">

<h5 class="modal-title" id="modalLabel">Crop your image</h5>

<button type="button" class="close" data-dismiss="modal" aria-label="Close">

<span aria-hidden="true">×</span>

</button>

</div>

<div class="modal-body">

<div class="img-container">

<div class="row">

<div class="col-md-8">

<img id="image" src="https://avatars0.githubusercontent.com/u/3456749">

</div>

<div class="col-md-4">

<div class="preview"></div>

</div>

</div>

</div>

</div>

<div class="modal-footer">

<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

<button type="button" class="btn btn-primary" id="crop">Crop</button>

</div>

</div>

</div>

</div>


</div>

</div>

<script>


var $modal = $('#modal');

var image = document.getElementById('image');

var cropper;


$("body").on("change", ".image", function(e){

var files = e.target.files;

var done = function (url) {

image.src = url;

$modal.modal('show');

};

var reader;

var file;

var url;


if (files && files.length > 0) {

file = files[0];


if (URL) {

done(URL.createObjectURL(file));

} else if (FileReader) {

reader = new FileReader();

reader.onload = function (e) {

done(reader.result);

};

reader.readAsDataURL(file);

}

}

});


$modal.on('shown.bs.modal', function () {

cropper = new Cropper(image, {

aspectRatio: 1,

viewMode: 3,

preview: '.preview'

});

}).on('hidden.bs.modal', function () {

cropper.destroy();

cropper = null;

});


$("#crop").click(function(){

canvas = cropper.getCroppedCanvas({

width: 160,

height: 160,

});


canvas.toBlob(function(blob) {

url = URL.createObjectURL(blob);

var reader = new FileReader();

reader.readAsDataURL(blob);

reader.onloadend = function() {

var base64data = reader.result;


$.ajax({

type: "POST",

dataType: "json",

url: "/image-cropper/upload",

data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data},

success: function(data){

$modal.modal('hide');


swal("success deleting!", "Please try again", "success");

}

});

}

});

})


</script>

<!--  -->

@endsection
