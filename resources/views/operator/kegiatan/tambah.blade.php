@extends('layout.operator')
@section('table')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Kegiatan</h4>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="forms-sample" action="{{ route('kegiatan.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="kegiatan">Kegiatan</label>
                    <input type="text" class="form-control" name="kegiatan" id="kegiatan" placeholder="Nama Kegiatan">
                </div>
                <div class="form-group">
                    <label for="waktu" class="col-sm-3 col-form-label">Waktu</label>
                    <div class="">
                        <input type="date" class="form-control" id="waktu" name="waktu" placeholder="Waktu">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi</label>
                    <input type="text" class="form-control" name="lokasi" id="lokasi"   placeholder="Masukkan Lokasi">
                </div>
                {{-- <div class="form-group">
                    <label for="media" class="font-weight-bold">Media</label>
                    <input type="file" class="form-control" name="media" id="media">
                </div> --}}
                <div class="form-group">
                    <label for="media">Choose Media:</label>
                    <input type="file" class="form-control-file" id="media" name="media" required>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Masukkan Keterangan">
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
@endsection
