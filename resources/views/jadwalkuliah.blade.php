@extends('layouts.main')
@section('body')
</br>
</br>
</br>
    <div class="container">
      <div class="jadwalkuliah">
        <h1>Class Schedule</h1>
      </div>
    </br>
  </br>
        <p>Pradita University - Semester V</p>            
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Day</th>
              <th>Time</th>
              <th>Subject</th>
              <th>SKS</th>
              <th>Lecturer</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Monday</td>
              <td>15.45 - 18.25</td>
              <td>Sistem Cerdas</td>
              <td>3</td>
              <td>Master Edison Siregar, ST, M.Kom</td>
            </tr>
            <tr>
              <td>Tuesday</td>
              <td>10.15 - 12.55</td>
              <td>Penambangan Data & Analitik Bisnis</td>
              <td>3</td>
              <td>Erick Dazki, S.Kom., M.Kom</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>13.00 - 15.40</td>
                <td>Pemograman Web</td>
                <td>3</td>
                <td>Hendra Mayatopani, M.M.Si</td>
              </tr>
              <tr>
                <td>Wednesday</td>
                <td>07.30 - 10.10</td>
                <td>Pengambilan, Penyimpanan & Analisis Data Spa</td>
                <td>3</td>
                <td>Belsana Butar Butar, S.Kom., M.Kom</td>
              </tr>
              <tr>
                <td>Thursday</td>
                <td>10.15 - 12.55</td>
                <td>Rekayasa Inovasi & Technopreneurship</td>
                <td>3</td>
                <td>Syamsu Alang, S.Sos, M.Si</td>
              </tr>
              <tr>
                <td>Thursday</td>
                <td>13.00 - 15.40</td>
                <td>Manajemen Risiko TI</td>
                <td>3</td>
                <td>Rintho Rante Rerung, S.Kom., M.Kom</td>
              </tr>
              <tr>
                <td>Friday</td>
                <td>13.00 - 15.40</td>
                <td>Analisa Media Sosial</td>
                <td>3</td>
                <td>Erick Dazki, S.Kom., M.Kom</td>
              </tr>
          </tbody>
        </table>
      </br>
      </br>
      <div class="tombol">
        <a href="/pendidikan" class="btn btn-info" role="button">Previous</a>
        <a href="/aktivitas" class="btn btn-info" role="button">Next</a>
      </div>

</div>
</br>
<style type="text/css">

.jadwalkuliah{
  padding: 0px 0px 0px 430px;
}

.tombol{
  padding: 0px 0px 0px 485px;
}
body {
  background-image: url('images/bg6.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
    </style>

@endsection