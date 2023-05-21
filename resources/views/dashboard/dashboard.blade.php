@extends('dashboard.index')

@section('kontenes')
<div class="cards">
    <div class="card">
        <div class="card-content">
            <div class="number">30</div>
            <div class="card-name">Kecamatan</div>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <div class="number">151</div>
            <div class="card-name">Kelurahan</div>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <div class="number">2.527.854</div>
            <div class="card-name">Penduduk</div>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <div class="number">167.67 km2</div>
            <div class="card-name">Luas Wilayah</div>
        </div>
    </div>
  </div>
  <div class="charts">
    <div class="chart">
        <h2>Laju Pertumbuhan Penduduk</h2>
        <div>
            <canvas id="lineChart"></canvas>
        </div>
    </div>
    <div class="chart doughnut-chart">
        <h3>Sebaran Pekerjaan</h3>
        <div>
            <canvas id="doughnut"></canvas>
        </div>
    </div>
</div>
<div class="chartss">
    <div class="chart doughnut-chart">
        <h4>Sebaran Pendidikan</h4>
        <div>
        <canvas id="doughnut2"></canvas>
        </div>
    </div>
    <div class="chart doughnut-chart">
        <h4>Sebaran Penduduk</h4>
        <img src="/img/penduduk berdasarkan ktp.png" alt="" width="280px" height="300px">
    </div>
    <div class="chart doughnut-chart">
        <h4>Sebaran Penghasilan</h4>
        <img src="/img/penghasilan.png" alt="" width="280px" height="350px">
    </div>
</div>
</div>
@endsection