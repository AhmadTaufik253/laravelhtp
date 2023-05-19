@php 
$nama = "budi";
$nilai = 60.00;
@endphp
{{-- struktur kendali if --}}
<!-- struktur kendali if -->
@if ($nilai >= 60)

@php $ket = "Lulus"; @endphp
@else
@php #ket ="gagal"; @endphp
@endif
<p>Siswa {{$nama}} dengan nilai {{$nilai}}</p>
<h1>dinyatakan {{$ket}}</h1>