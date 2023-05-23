@extends('admin.layout.appadmin')
@section('content')
    <h1 class="mt-4">Data Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Produk</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
            <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
            .
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <!-- <i class="fas fa-table me-1"></i>
            DataTable Example -->
            <!-- membuat tombol mengarahkan ke file produk_form.php -->
            <a href="#" class="btn btn-primary btn-sm">Tambah</a>
            
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Divisi</th>
                        <th>Stok</th>
                        <th>Gender</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Divisi</th>
                        <th>Stok</th>
                        <th>Gender</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                    $no = 1;   
                    @endphp
                    @foreach($pegawai as $pgw)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$pgw->nip}}</td>
                        <td>{{$pgw->nama}}</td>
                        <td>{{$pgw->jabatan}}</td>
                        <td>{{$pgw->divisi}}</td>
                        <td>{{$pgw->gender}}</td>
                        <td>{{$pgw->tmp_lahir}}</td>
                        <td>{{$pgw->tgl_lahir}}</td>
                        <td>{{$pgw->alamat}}</td>
                        <td>{{$pgw->foto}}</td>
                        <td>
                            <form action="#" method="POST">
                            
                                <a class="btn btn-info btn-sm" href="#">Detail</a>
                                
                                <a class="btn btn-warning btn-sm" href="#">Ubah</a>
                                <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="confirm('Apakah anda yakin ingin menghapus?')">Hapus</button>
                                <input type="hidden" name="idx" value="">
                                
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection