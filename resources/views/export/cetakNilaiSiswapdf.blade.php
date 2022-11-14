<!doctype html>
<html lang="en">
    <?php
        $bg = storage_path("app/public/assets/gallery/background.jpg");
    ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <style>
        @page {
            margin: 0px;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: url({{$bg}});
            background-size: cover;
            background-repeat: no-repeat;
            /* margin: 0px; */
        }

        header {
            height: 155px;
            /* padding: 10px; */
            margin: 0;
            /* background-color: #3366cc; */
        }

        header .logo {
            width: 50px;
            margin-top: 10px;
        }
        
        img {
            /* line-height: 100px; */
            width: 100px;
            max-width: 100px;
            /* margin-top: -10px; */
        }

        @font-face {
            font-family: tulisan;
            src: url('popp/Poppins-Black.ttf')
        }

        .text-head-title {
            color: #000;
            font-weight: bold;
            margin-top: -15px;
            font-size: 10px;
            /* font-family: tulisan; */
        }

        .text-head {
            /* margin-top: ; */
            color: #000;
        }

        .text-head .unit {
            font-size: 16px;
            margin-top: -18px;
            font-weight: lighter;
        }

        .text-head .unit-text {
            font-size: 12px;
            margin-top: -29px;
            font-weight: lighter;
        }

        h3 {
            font-size: 18px;
            text-align: center;
        }

        .soft{
            text-align: left;
        }

        .soft .p {
            margin-top: -50px;
        }

        .sfp{
            width: 95%;
            margin-left: auto;
            margin-right: auto;
        }

        .sfp td {
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            line-height: 1;
        }

        .sfp th {
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            line-height: 1;
        }

        .sp{
            width: 95%;
            margin-left: auto;
            margin-right: auto;
        }

        .sp th {
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            line-height: 1;
        }

        .sp td {
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            line-height: 1;
        }

        .sfp tbody{
            font-size: 14px;
        }

        .sp tbody {
            font-size: 14px;
        }
    </style>

    <title>Data Nilai Siswa</title>
  </head>
  <body>
      <header>
        <center>
            <?php
                // $foto = storage_path("app/public/" . Auth::user()->guru->ttd);
                $logos = storage_path("app/public/assets/gallery/logo-putih.png")
            ?>
            <img class="logo" src="{{$logos}}" alt="">
        </center>
        <center>
            <div class="text-head-title" style="font-family: 'Poppins', sans-serif;">
                <h2 style="font-size: 24px">Project Based Report</h2>
            </div>
        </center>
        <center>
            <div class="text-head">
                @if ($item->unit === 'K1')
                    <div class="unit">
                        PG TK Kristen 1 YSKI Semarang
                    </div>
                    <br>
                    <div class="unit-text">
                        Jl. Kompol Maksum No. 280 Semarang
                    </div>
                @elseif($item->unit === 'K2')
                    <div class="unit">
                        PG TK Kristen 2 YSKI Semarang
                    </div>
                    <br>
                    <div class="unit-text">
                        Jl. dr. Cipto No. 109 Semarang
                    </div>
                @elseif($item->unit === 'K3')
                    <div class="unit">
                        PG TK Kristen 3 YSKI Semarang
                    </div>
                    <br>
                    <div class="unit-text">
                        Jl. Tanjung No. 14 Semarang
                    </div>
                @endif
            </div>
        </center>
      </header>
      <table style="margin-top:-18px; margin-left: 30px; font-family: 'Poppins', sans-serif; line-height: 0.8; font-size: 14px">
            <tr>
                <td style="font-weight: bold">Student Name</td>
                <td style="font-weight: bold">:</td>
                <td style="font-weight: bold">{{$item->nama}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold">Student ID Number</td>
                <td style="font-weight: bold">:</td>
                <td style="font-weight: bold">{{$item->nisn}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold">Academic Year</td>
                <td style="font-weight: bold">:</td>
                <td style="font-weight: bold">2021 / 2022 Genap</td>
                {{-- @foreach ($thnakademiks as $akdm)
                    @if ($akdm->status == 'Aktif')
                        <td style="font-weight: bold">Academic Year</td>
                        <td style="font-weight: bold">:</td>
                        <td style="font-weight: bold">{{$akdm->tahun_akademik}} {{$akdm->semester}}</td>
                    @endif
                @endforeach --}}
            </tr>
      </table>
    <h3 class="soft" style="font-weight: bold; text-align:center; font-size: 14px;">Soft Skills Project</h3>
    <table height="100px" class="table sfp table-striped table-bordered text-center table-sm mt-1">
        <thead>
            <tr class="bg-primary text-white">
                <th width="4%">No</th> 
                <th width="13%">Soft Skills</th>
                <th width="20%">Deskripsi</th>
                <th width="5%">Nilai</th>
                <th width="45%">Indikator Umum</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mapel as $m)
                            <tr>
                              <td align="center">{{$loop->iteration}}</td>
                              <td>
                                    {{$m->nama_mapel}}
                              </td>
                              <td>
                                @if ($m->nama_mapel === 'Critical Thinking')
                                    Kemampuan memecahkan masalah dan kedalaman berpikir
                                @elseif ($m->nama_mapel === 'Creativity')
                                    Kemampuan menghasilkan karya yang autentik / orisinal
                                @elseif ($m->nama_mapel === 'Communication')
                                    Kemampuan dan Kejelasan menyampaikan pesan
                                @elseif ($m->nama_mapel === 'Collaboration')
                                    Kerjasama dan Kemampuan beradaptasi dalam tim
                                @elseif ($m->nama_mapel === 'Leadership')
                                    Sikap Tanggung Jawab dan Kedisiplinan
                                @endif
                              </td>
                              <td>
                                @foreach ($item->mapel as $ma)
                                    @if ($m->id === $ma->pivot->mapel_id)
                                      @if ($ma->pivot->nilai >= 90)
                                          A
                                      @elseif ($ma->pivot->nilai >= 80)
                                          AB
                                      @elseif ($ma->pivot->nilai >= 70)
                                          B
                                      @elseif ($ma->pivot->nilai <=69)
                                          C
                                      @endif
                                        {{-- {{$ma->pivot->nilai}} --}}
                                    {{-- @elseif ($m->id === $ma->pivot->mapel_id)
                                        {{$ma->pivot->nilai}}
                                    @elseif ($m->id === $ma->pivot->mapel_id)
                                        {{$ma->pivot->nilai}}
                                    @elseif ($m->id === $ma->pivot->mapel_id)
                                        {{$ma->pivot->nilai}}
                                    @elseif ($m->id === $ma->pivot->mapel_id)
                                        {{$ma->pivot->nilai}} --}}
                                    @endif
                                @endforeach
                              </td>
                              <td>
                                @foreach ($item->mapel as $ma)
                                    @if($m->id === $ma->pivot->mapel_id)
                                      @if ($ma->pivot->nilai >= '90' && $m->nama_mapel === 'Critical Thinking')
                                          Sangat Baik dalam menjawab pertanyaan dan dalam menjelaskan alasan yang logis tentang pilihan yang dibuat
                                      @elseif($ma->pivot->nilai >= '90' && $m->nama_mapel === 'Creativity')
                                          Sangat Baik dalam menghasilkan karya yang autentik / orisinal dan menarik
                                      @elseif($ma->pivot->nilai >= '90' && $m->nama_mapel === 'Communication')
                                          Sangat Baik dalam menyampaikan pesan / proses berkomunikasi
                                      @elseif($ma->pivot->nilai >= '90' && $m->nama_mapel === 'Collaboration')
                                          Sangat baik dalam bekerjasama dan beradaptasi dalam tim
                                      @elseif($ma->pivot->nilai >= '90' && $m->nama_mapel === 'Leadership')
                                          Sangat Baik dalam hal tanggung jawab dan kedisiplinan pribadi
                                      @elseif ($ma->pivot->nilai >= '80' && $m->nama_mapel === 'Critical Thinking')
                                          Baik dalam menjawab pertanyaan dan dalam menjelaskan alasan yang logis tentang pilihan yang dibuat
                                      @elseif($ma->pivot->nilai >= '80' && $m->nama_mapel === 'Creativity')
                                          Baik dalam menghasilkan karya yang autentik / orisinal dan menarik
                                      @elseif($ma->pivot->nilai >= '80' && $m->nama_mapel === 'Communication')
                                          Baik dalam menyampaikan pesan / proses berkomunikasi
                                      @elseif($ma->pivot->nilai >= '80' && $m->nama_mapel === 'Collaboration')
                                          Baik dalam bekerjasama dan beradaptasi dalam tim
                                      @elseif($ma->pivot->nilai >= '80' && $m->nama_mapel === 'Leadership')
                                          Baik dalam hal tanggung jawab dan kedisiplinan pribadi
                                      @elseif ($ma->pivot->nilai >= '70' && $m->nama_mapel === 'Critical Thinking')
                                          Cukup dalam menjawab pertanyaan dan dalam menjelaskan alasan yang logis tentang pilihan yang dibuat
                                      @elseif($ma->pivot->nilai >= '70' && $m->nama_mapel === 'Creativity')
                                          Cukup dalam menghasilkan karya yang autentik / orisinal
                                      @elseif($ma->pivot->nilai >= '70' && $m->nama_mapel === 'Communication')
                                          Cukup dalam menyampaikan pesan / proses berkomunikasi
                                      @elseif($ma->pivot->nilai >= '70' && $m->nama_mapel === 'Collaboration')
                                          Cukup dalam bekerjasama dan beradaptasi dalam tim
                                      @elseif($ma->pivot->nilai >= '70' && $m->nama_mapel === 'Leadership')
                                          Cukup dalam hal tanggung jawab dan kedisiplinan pribadi
                                      @elseif ($ma->pivot->nilai <= '69' && $m->nama_mapel === 'Critical Thinking')
                                          Kurang dalam menjawab pertanyaan dan dalam menjelaskan alasan yang logis tentang pilihan yang dibuat
                                      @elseif($ma->pivot->nilai <= '69' && $m->nama_mapel === 'Creativity')
                                          Kurang dalam menghasilkan karya yang autentik / orisinal
                                      @elseif($ma->pivot->nilai <= '69' && $m->nama_mapel === 'Communication')
                                          Kurang dalam menyampaikan pesan / proses berkomunikasi
                                      @elseif($ma->pivot->nilai <= '69' && $m->nama_mapel === 'Collaboration')
                                          Kurang dalam bekerjasama dan beradaptasi dalam tim
                                      @elseif($ma->pivot->nilai <= '69' && $m->nama_mapel === 'Leadership')
                                          Kurang dalam hal tanggung jawab dan kedisiplinan pribadi
                                      @endif
                                    @endif
                                @endforeach
                              </td>
                            </tr>
                            @endforeach
        </tbody>
    </table>
    <h3 class="soft p" style="font-weight: bold; text-align:center; margin-top: -12px; font-size: 14px;">Project</h3>
    <table class="table sp table-striped table-horvered table-bordered text-center table-sm mt-1">
        <thead>
            <tr class="bg-primary text-white">
                <th width="4%">No</th>
                <th width="15%">Project</th>
                <th width="5%">Nilai</th>
                <th width="30%">Pengerjaan Project</th>
                <th>Hasil</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $p)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                    {{$p->nama}}
                    </td>
                    <td>
                    @foreach ($item->project as $pro)
                        @if ($p->id === $pro->pivot->project_id)
                            {{$pro->pivot->nilai}}
                            {{-- {{$ma->pivot->nilai}} --}}
                        {{-- @elseif ($m->id === $ma->pivot->mapel_id)
                            {{$ma->pivot->nilai}}
                        @elseif ($m->id === $ma->pivot->mapel_id)
                            {{$ma->pivot->nilai}}
                        @elseif ($m->id === $ma->pivot->mapel_id)
                            {{$ma->pivot->nilai}}
                        @elseif ($m->id === $ma->pivot->mapel_id)
                            {{$ma->pivot->nilai}} --}}
                        @endif
                    @endforeach
                    </td>
                    <td>
                    @foreach ($item->project as $pro)
                        {{$pro->pivot->task}}
                    @endforeach
                    </td>
                    <td>
                    @foreach ($item->project as $pro)
                        <a href="{{$pro->pivot->hasil}}">Klik Untuk Melihat Hasil</a>
                    @endforeach
                    </td>
                </tr>                  
            @endforeach
        </tbody>
    </table>   

    <footer>
        <div class="ttd" style="text-align: right">
            <p style="margin-right: 110px; margin-top: -10px">Semarang, {{$tanggal}}</p>
            <?php
                // $j = ;
                $foto = storage_path("app/public/" . Auth::user()->guru->ttd);
            ?>
            <p style="margin-right: 150px; margin-top: -25px"><img src="{{$foto}}" alt=""></p>
            <p style="margin-top: -40px; margin-right: 90px">{{Auth::user()->name}}</p>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>