@extends('layout/aplikasi')

@section('konten')
    <div>
        <a href='/layanan' class="btn btn-secondary"> << Kembali </a>
        <h1>{{ $data->nama }}</h1>
        <p>
            <b>Kode layanan</b> {{ $data->kode_layanan}}
        </p>
        <p>
            <b>Nama layanan</b> {{ $data->nama_layanan}}
        </p>
        <p>
            <b>Deskripsi</b> {{ $data->deskripsi}}
        </p>
        <p>
            <b>Biaya layanan</b> {{ $data->biaya_layanan}}
        </p>
        <p>
            <b>Durasi layanan</b> {{ $data->durasi_layanan}}
        </p>
        <p>
            <b>Kategori layanan</b> {{ $data->kategori_layanan}}
        </p>
    </div>

@endsection
