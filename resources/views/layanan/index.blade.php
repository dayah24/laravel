@extends('layout/aplikasi')

@section('konten')
<a href="/layanan/create" class="btn btn-primary">+Tambah Data</a>
<table class="table">
    <thead>
        <tr>
            <th style="font-size: 12px; text-align: center;">Kode layanan</th>
            <th style="font-size: 12px; text-align: center;">Nama layanan</th>
            <th style="font-size: 12px; text-align: center;">Deskripsi</th>
            <th style="font-size: 12px; text-align: center;">Biaya layanan</th>
            <th style="font-size: 12px; text-align: center;">Durasi layanan</th>
            <th style="font-size: 12px; text-align: center;">Kategori layanan</th>
            <th style="font-size: 12px; text-align: center;">Created at</th>
            <th style="font-size: 12px; text-align: center;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td style="font-size: 12px; text-align: center;">{{ $item->kode_layanan }}</td>
            <td style="font-size: 12px; text-align: center;">{{ $item->nama_layanan }}</td>
            <td style="font-size: 12px; text-align: center;">{{ $item->deskripsi }}</td>
            <td style="font-size: 12px; text-align: center;">{{ $item->biaya_layanan }}</td>
            <td style="font-size: 12px; text-align: center;">{{ $item->durasi_layanan }}</td>
            <td style="font-size: 12px; text-align: center;">{{ $item->kategori_layanan }}</td>
            <td>{{ \Carbon\Carbon::parse($data['created_at'])->format('Y-m-d H:i:s') }}</td>
            <td style="font-size: 12px; text-align: center;">
                <a class='btn btn-secondary btn-sm' href='{{ url('/layanan/'.$item->kode_layanan) }}'>Detail</a>
                <a class='btn btn-warning btn-sm' href='{{ url('/layanan/'.$item->kode_layanan.'/edit') }}'>Edit</a>
                <form onsubmit="return confirm('Hapus data?')" class='d-inline' action="{{ '/layanan/'.$item->kode_layanan }}" method='post'>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                </form>      
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $data->links() }}
@endsection
