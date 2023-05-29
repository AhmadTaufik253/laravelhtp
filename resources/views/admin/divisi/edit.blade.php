@extends('admin.layout.appadmin')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

@foreach($divisi as $d)
<form action="{{ url('divisi/update', $d->id) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="form-group row mt-5">
    <input type="hidden" name="id" value="{{ $d->id }}">
    <label for="text" class="col-2 col-form-label">Divisi</label> 
    <div class="col-10">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="nama" type="text" class="form-control" placeholder="Masukan Nama Divisi" value="{{ $d->nama }}">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endforeach
@endsection