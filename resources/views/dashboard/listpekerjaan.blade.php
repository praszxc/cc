@extends('dashboard.index')

@section('konten')
      <div class="table-responsive">
        <table class="table table-hover table-sm table align-middle">
          <thead class="vertical align-bottom table table-bordered">
            <tr>
              <th scope="col">Kecamatan</th>
              <th scope="col">Kelurahan</th>
              <th scope="col">ASN</th>
              <th scope="col">Pengajar</th>
              <th scope="col">Wiraswasta</th>
              <th scope="col">Pertanian dan Peternakan</th>
              <th scope="col">Nelayan</th>
              <th scope="col">Agama dan Kepercayaan</th>
              <th scope="col">Pelajar dan Mahasiswa</th>
              <th scope="col">Tenaga Kesehatan</th>
              <th scope="col">Pensiunan</th>
              <th scope="col">Pekerjaan Lainnya</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            @foreach ($sebaranpekerjaan as $sp)
            <tr>
              <td>{{$sp['Kecamatan']}}</td>
              <td>{{$sp['Kelurahan']}}</td>
              <td>{{$sp['Aparatur Pejabat Negara']}}</td>
              <td>{{$sp['Tenaga Pengajar']}}</td>
              <td>{{$sp['Wiraswasta']}}</td>
              <td>{{$sp['Pertanian dan Peternakan']}}</td>
              <td>{{$sp['Nelayan']}}</td>
              <td>{{$sp['Agama dan Kepercayaan']}}</td>
              <td>{{$sp['Pelajar dan Mahasiswa']}}</td>
              <td>{{$sp['Tenaga Kesehatan']}}</td>
              <td>{{$sp['Pensiunan']}}</td>
              <td>{{$sp['Pekerjaan Lainnya']}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection