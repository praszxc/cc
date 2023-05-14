@extends('dashboard.index')

@section('kontennn')
      <div class="table-responsive">
        <table class="table table-hover table-sm table align-middle">
          <thead class="vertical align-bottom table table-bordered">
            <tr>
              <th scope="col">Kecamatan</th>
              <th scope="col">Kelurahan</th>
              <th scope="col">Belum Sekolah</th>
              <th scope="col">Belum/Tidak Tamat SD</th>
              <th scope="col">Tamat SD</th>
              <th scope="col">SMP</th>
              <th scope="col">SMA</th>
              <th scope="col">Diploma I & II</th>
              <th scope="col">Diploma III</th>
              <th scope="col">Strata 1</th>
              <th scope="col">Strata 2</th>
              <th scope="col">Strata 3</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            @foreach ($sebaranpendidikan as $sp)
            <tr>
              <td>{{$sp['Kecamatan']}}</td>
              <td>{{$sp['Kelurahan']}}</td>
              <td>{{$sp['Belum Sekolah']}}</td>
              <td>{{$sp['Belum/Tidak Tamat SD']}}</td>
              <td>{{$sp['Tamat SD']}}</td>
              <td>{{$sp['SMP']}}</td>
              <td>{{$sp['SMA']}}</td>
              <td>{{$sp['Diploma I & II']}}</td>
              <td>{{$sp['Diploma III']}}</td>
              <td>{{$sp['Strata 1']}}</td>
              <td>{{$sp['Strata 2']}}</td>
              <td>{{$sp['Strata 3']}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection