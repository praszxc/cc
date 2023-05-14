@extends('dashboard.index')

@section('kontenz')
      <div class="table-responsive">
        <table class="table table-hover table-sm table align-middle">
          <thead class="vertical align-bottom table table-bordered">
            <tr>
              <th scope="col">Jenis Pekerjaan</th>
              <th scope="col">Gaji Perbulan</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            @foreach ($penghasilan as $p)
            <tr>
              <td>{{$p['Jenis Pekerjaan']}}</td>
              <td>{{$p['Gaji Perbulan']}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection