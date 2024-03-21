@extends('layout.aplikasi')

@section('konten')
<a href='/layanan' class="btn btn-secondary"> >>Kembali</a>
<form method="post" action="{{ '/layanan/'.$data->kode_layanan }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <h1>Kode layanan: {{ $data->kode_layanan }}</h1>
    </div>
    
    <div class="mb-3">
        <label for="nama_layanan" class="form-label">Nama layanan</label>
        <input type="text" class="form-control" name='nama_layanan' id="nama_layanan"
            value="{{ $data->nama_layanan }}">
    </div>
    
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea class="form-control" name='deskripsi' id="deskripsi">{{ $data->deskripsi }}</textarea>
    </div>
    
    <div class="mb-3">
        <label for="biaya_layanan" class="form-label">Biaya layanan</label>
        <input type="text" class="form-control" name='biaya_layanan' id="biaya_layanan"
            value="{{ $data->biaya_layanan }}">
    </div>
    
    <div class="mb-3">
        <label for="durasi_layanan" class="form-label">Durasi layanan</label>
        <input type="text" class="form-control" name='durasi_layanan' id="durasi_layanan"
            value="{{ $data->durasi_layanan }}">
    </div>

    <div class="mb-3">
        <label for="kategori_layanan" class="form-label">Kategori layanan</label>
        <input type="text" class="form-control" name='kategori_layanan' id="kategori_layanan"
            value="{{ $data->kategori_layanan }}">
    </div>
    
    <div class="mb-3 d-none">
    <label for="created_at" class="form-label">Created At</label>
    <input type="text" class="form-control" name='created_at' id="created_at"
        value="{{ \Carbon\Carbon::parse(Session::get('created_at'))->format('Y-m-d H:i:s') }}" readonly>
    </div>
           
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">UPDATE</button>
    </div>
</form>
@endsection
