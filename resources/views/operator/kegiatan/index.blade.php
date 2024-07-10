
@extends('layout.operator')
@section('table')

    <div class="row">
        <div class="col-md-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Kegiatan</p>
              <a href="{{ route('tambah-kegiatan') }}" class="btn btn-primary btn-rounded btn-sm">Tambah Data
              </a>
              <div class="table-responsive">
                <div id="recent-purchases-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="recent-purchases-listing" class="table dataTable no-footer" role="grid">
                  <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="recent-purchases-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 135.703px;">No</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="recent-purchases-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 135.703px;">Kegiatan</th>
                        <th class="sorting" tabindex="0" aria-controls="recent-purchases-listing" rowspan="1" colspan="1" aria-label="Status report: activate to sort column ascending" style="width: 177.453px;">Waktu</th>
                        <th class="sorting" tabindex="0" aria-controls="recent-purchases-listing" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 124.656px;">Lokasi</th>
                        <th class="sorting" tabindex="0" aria-controls="recent-purchases-listing" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 55.9062px;">Media</th>
                        <th class="sorting" tabindex="0" aria-controls="recent-purchases-listing" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 91.5px;">Keterangan</th>
                        <th class="sorting" tabindex="0" aria-controls="recent-purchases-listing" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 91.5px;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php $i = 0; ?>
                      @foreach ($kegiatan as $item)
                      <tr role="row" class="odd">
                        <td>{{ ++$i}}</td>
                        <td>{{ $item->kegiatan }}</td>
                        <td>{{ $item->waktu }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td><img src="{{ asset('storage/media-kegiatan/'.$item->media) }}" alt=""></td>
                        <td>{{ $item->keterangan }}</td>
                        <td>
                            <form action="{{ route('kegiatan.destroy',['id'=> $item->id]) }}" method="POST">
                                @csrf
                            @method('DELETE')
                                <input type="submit" name="id" value="Hapus" class="btn btn-danger  btn-sm mb-1">
                            </form>
                            <form >
                                <a action="{{ route('k') }}" class="btn btn-primary btn-sm mb-1">
                                   Ubah
                                </a>
                            </form>
                        </td>
                        @endforeach
                </tr>
                </tbody>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"></div><div class="col-sm-12 col-md-7"></div></div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
