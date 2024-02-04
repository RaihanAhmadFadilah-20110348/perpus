@if (session('sukses'))
    <div class="alert alert-success alert-dismissible fade show">
        {{session('sukses')}}
    </div>
@endif
@if (session('gagal'))
    <div class="alert alert-danger alert-dismissible fade show">
        {{session('gagal')}}
    </div>
@endif