@extends('dashboard.index')

@section('kontenzz')
      <div class="table-responsive">
        <table class="table table-hover table-sm table align-middle">
          <thead class="vertical align-bottom table table-bordered">
            <tr>
              <th scope="col">Kecamatan</th>
              <th scope="col">Kelurahan</th>
              <th scope="col">Wajib KTP</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            @foreach ($profilpenduduk as $pp)
            <tr>
              <td>{{$pp['Kecamatan']}}</td>
              <td>{{$pp['Kelurahan']}}</td>
              <td>{{$pp['Wajib KTP']}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection