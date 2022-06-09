<!doctype html>
<html lang="en">
    <?php
        $bg = storage_path("app/public/assets/gallery/background.jpg");
    ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> --}}
    <style>
        @page {
            margin: 0px;
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
            width: 150px;
        }
        
        img {
            /* line-height: 100px; */
            width: 75px;
            margin-top: -10px;
        }

        @font-face {
            font-family: tulisan;
            src: url('popp/Poppins-Black.ttf')
        }

        .text-head-title {
            color: #000;
            font-weight: bold;
            margin-top: -40px;
            /* font-family: tulisan; */
        }

        .text-head {
            /* margin-top: ; */
            color: #000;
        }

        .text-head .unit {
            font-size: 18px;
            font-weight: lighter;
        }

        .text-head .unit-text {
            font-size: 12px;
            margin-top: -27px;
            font-weight: lighter;
        }

        h3 {
            font-size: 18px;
            text-align: center;
        }

        .soft{
            text-align: left;
        }

        .sfp{
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            height: 10px;
        }

        .sp{
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            height: 10px;
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
            <div class="text-head-title">
                <h2>Project Based Report</h2>
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
      <table style="margin-top: 4px; margin-left: 120px">
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
    <h3 class="mt-4 soft" style="font-weight: bold; text-align:center">Soft Skills Project</h3>
    <table height="10px" class="table sfp table-striped table-bordered text-center table-sm mt-1">
        <thead>
            <tr class="bg-primary text-white">
                <th width="4%">No</th> 
                <th width="15%">Aspek</th>
                <th width="5%">Nilai</th>
                <th width="45%">Deskripsi</th>
                <th>Rekomendasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mapel as $m)
                            <tr>
                              <td>{{$loop->iteration}}</td>
                              <td>
                                {{$m->nama_mapel}}
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
                                @if ($m->nama_mapel === 'Critical Thinking')
                                    Kemampuan memecahkan masalah dan kedalaman berpikir
                                @elseif ($m->nama_mapel === 'Creativity')
                                    Kemampuan menghasilkan karya yang autentik / orisinal
                                @elseif ($m->nama_mapel === 'Communication')
                                    Kemampuan dan Kejelasan menyampaikan pesan
                                @elseif ($m->nama_mapel === 'Collaboration')
                                    Kerjasama dan Kemampuan beradaptasi
                                @elseif ($m->nama_mapel === 'Leadership')
                                    Sikap Tanggung Jawab dan Kedisiplinan
                                @endif
                              </td>
                              <td>
                                @foreach ($item->mapel as $ma)
                                    @if ($m->id === $ma->pivot->mapel_id)
                                        {{$ma->pivot->rekomendasi}}
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
                            </tr>
                            @endforeach
        </tbody>
    </table>
    <h3 class="soft" style="font-weight: bold; text-align:center">Project</h3>
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
            <p style="margin-top: -40px; margin-right: 110px">{{Auth::user()->name}}</p>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>