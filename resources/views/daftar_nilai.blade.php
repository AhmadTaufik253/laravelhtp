@php 
$no = 1;
$s1 = ['nama'=>'ahmad', 'nilai'=>'85'];
$s2 = ['nama'=>'taufik', 'nilai'=>'90'];
$s3 = ['nama'=>'aurahman', 'nilai'=>'60'];
$s4 = ['nama'=>'lilis', 'nilai'=>'90'];
$s5 = ['nama'=>'utami', 'nilai'=>'70'];

$judul = ['No', 'Nama', 'Keterangan'];
$siswa = [$s1,$s2,$s3,$s4,$s5];

@endphp
<table border="1" align="center" cellpadding="10">
    <thead>
        <tr>@foreach($judul as $jdl)
            <th>{{$jdl}}</th>
            @endforeach
        </tr>
        
    </thead>
    <tbody>
        @foreach($siswa as $s )
        @php
        $ket = ($s['nilai'] >= 60 ? "Lulus" : "Gagal")
        @endphp
        <tr>
            <td>{{$no++}}</td>
            <td>{{$s['nama']}}</td>
            <td>{{$ket}}</td>
        </tr>
        @endforeach
    </tbody>

</table>