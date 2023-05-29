@extends('admin.layout.appadmin')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>Form Edit Pegawai</h1>
<form  action="" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="form-group row mt-4">
    <label for="text" class="col-4 col-form-label">nip</label> 
    <div class="col-8">
      <input id="text" name="nip" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">nama</label> 
    <div class="col-8">
      <input id="text1" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Jabatan</label> 
    <div class="col-8">
      <select id="select" name="jabatan" class="custom-select">
        @foreach($jabatan as $p)
        <option value="{{$p->id}}">{{$p->nama}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="select1" class="col-4 col-form-label">Divisi</label> 
    <div class="col-8">
      <select id="select1" name="divisi" class="custom-select">
        @foreach($divisi as $p)
        <option value="{{$p->id}}">{{$p->nama}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Gender</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="radio_0" type="radio" class="custom-control-input" value="L"> 
        <label for="radio_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="radio_1" type="radio" class="custom-control-input" value="P"> 
        <label for="radio_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="text2" name="tmp_lahir" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="text3" name="tgl_lahir" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="textarea" name="alamat" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      <input id="text4" name="foto" type="file" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

@endsection