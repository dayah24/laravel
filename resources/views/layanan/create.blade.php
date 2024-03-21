@extends('layout.aplikasi')

@section('konten')
<form method="post" action="/layanan">
    @csrf
    <div class="mb-3">
        <label for="kode_layanan" class="form-label">Kode layanan</label>
        <input type="text" class="form-control" name='kode_layanan' id="kode_layanan"
            value="{{ Session::get('kode_layanan') }}">
    </div>
    
    <div class="mb-3">
        <label for="nama_layanan" class="form-label">Nama layanan</label>
        <input type="text" class="form-control" name='nama_layanan' id="nama_layanan"
            value="{{ Session::get('nama_layanan') }}">
    </div>
    
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea class="form-control" name='deskripsi' id="deskripsi">{{ Session::get('deskripsi') }}</textarea>
    </div>
    
    <div class="mb-3">
        <label for="biaya_layanan" class="form-label">Biaya layanan</label>
        <input type="text" class="form-control" name='biaya_layanan' id="biaya_layanan"
            value="{{ Session::get('biaya_layanan') }}">
    </div>
    
    <div class="mb-3">
        <label for="durasi_layanan" class="form-label">Durasi layanan</label>
        <input type="text" class="form-control" name='durasi_layanan' id="durasi_layanan"
            value="{{ Session::get('durasi_layanan') }}">
    </div>

    <div class="mb-3">
        <label for="kategori_layanan" class="form-label">Kategori layanan</label>
        <input type="text" class="form-control" name='kategori_layanan' id="kategori_layanan"
            value="{{ Session::get('kategori_layanan') }}">
    </div>
    
    <div class="mb-3 d-none">
    <label for="created_at" class="form-label">Created At</label>
    <input type="text" class="form-control" name='created_at' id="created_at"
        value="{{ \Carbon\Carbon::parse(Session::get('created_at'))->format('Y-m-d H:i:s') }}" readonly>
    </div>
      
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </div>
</form>
@endsection
