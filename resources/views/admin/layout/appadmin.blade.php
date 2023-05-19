@include('admin.layout.top')
@include('admin.layout.menu')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            @yield('content')
            <!-- yield adalah mendeklarasi yang akan diisi konten ketika yieldnya dipanggil dudalam konten masing-masing, contoh yield yang diatas menggunakan value content -->
            
        </div>
    </main>



@include('admin.layout.bottom')