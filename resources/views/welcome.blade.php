<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Terkini</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .article {
      margin-bottom: 20px;
    }
    .article img {
      max-width: 100%;
    }
    .article h2 {
      margin-bottom: 10px;
    }
    .article p {
      margin-bottom: 10px;
    }
    </style>
</head>
<body>

    {{-- navbar --}}
    @include('layouts.navbar')
    {{-- /navbar --}}


    <!-- Content -->

    <br>
    <marquee>
      Selamat datang di website kami!
      Gelandang Persib Bandung, Marc Klok, mengakui bahwa dia merasa stres karena absen
      membela tim di leg pertama final Championship Series Liga 1 2023-2024 melawan Madura
      United.
    </marquee>
    <marquee behavior="" direction=""></marquee>
    <br>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-8">
      <div class="mb-3">
        <div class="row g-0">
            <h2>Marc Klok Buka Suara soal Absen di Laga Leg Pertama Persib Vs Madura United, Akui Sampai Stres</h2>
          <div class="col-md-4">
            <img src="https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2024/05/18/20240518_195340jpg-20240518075557.jpg" alt="..." class="" style="width: 300%";>
          </div>
          <p style="font-size: 70%;"><i>
            UsepNews.COM - Marc Klok sedang memeluk Febri Hariyadi yang mampu mencetak gol dalam laga leg kedua
            Championship Series Liga 1 2023 antara Persib Bandung versus Bali
            United di Stadion Si Jalak Harupat, Bandung, Jawa Barat, Sabtu (18/5/2024).
          </i></p>
          <br>
          <br>
          <p>
              UsepNews.COM - Gelandang Persib Bandung, Marc Klok, mengakui bahwa dia merasa stres karena absen
              membela tim di leg pertama final Championship Series Liga 1 2023-2024 melawan Madura
              United. Seperti diketahui, Marc Klok menghilang dari daftar susunan pemain Persib
              Bandung di leg pertama melawan Madura United. Dalam laga yang berlangsung di Stadion
              Si Jalak harupat, Bandung, Minggu (26/5/2024), Persib memang menang 3-0 atas Madura
              United. Namun, hilangnya Marc Klok dari skuad membuat banyak pihak bertanya-tanya.
          </p>
          <br>
          <p>
            Pemain andalan Bojan Hodak ini tak ada dalam daftar pemain.Bojan Hodak memilih
            menurunkan trio Dedi Kusnandar, Rachmat Irianto, dan Stefano Beltrame untuk mengisi
            lini tengah. Padahal, selama ini Marc Klok selalu menjadi salah satu andalan di
            lini tengah Maung Bandung. Namun, namanya tiba-tiba tak ada dalam daftar susunan
            pemain. Pelatih asal Kroasia sebelumnya telah mengungkapkan bahwa pemain berusia
            31 tahun tersebut memang tengah mengalami cedera.
          </p>
        </div>
      </div>
      <!-- More articles... -->
    </div>
    <div class="col-md-4">
      <h4 style="color: blue;">Berita Terpopuler</h4>
      <ul class="list-group">
        <a href="#" class="text-decoration-none"><li class="list-group-item">Menangkap Keindahan Waisak Borobudur Pakai Iphone
            <p style="font-size: 60%;">UsepNews | 0 menit yang lalu</p></li></a>
        <a href="#" class="text-decoration-none"><li class="list-group-item">Ramai-ramai Pesepakbola Top Dunia Serukan All Eyes On Rafah
            <p style="font-size: 60%;">UsepNews | 0 menit yang lalu</p></li></a>
        <a href="#" class="text-decoration-none"><li class="list-group-item">Analisis Bos PPI soal Peluang PKS-NasDem-PKB Usung Anies di Jakarta
            <p style="font-size: 60%;">UsepNews | 0 menit yang lalu</p></li></a>
        <a href="#" class="text-decoration-none"><li class="list-group-item">Senangnya Cak Imin Jika Anies Maju Pilgub DKI, tapi...
            <p style="font-size: 60%;">UsepNews | 0 menit yang lalu</p></li></a>
        <a href="#" class="text-decoration-none"><li class="list-group-item">Contoh Soal Fungsi Kuadrat Lengkap dengan Pembahasan
            <p style="font-size: 60%;">UsepNews | 0 menit yang lalu</p></li></a>
      </ul>
    </div>
  </div>
</div>

@section('content')
    <div class="container mt-4">
        <h2>Berita Terbaru</h2>
        <br>
        <div class="row">
            @foreach ($artikel as $data)
            <div class="col-md-4">
            <div class="card mb-3">
                <a href="{{route('artikel.show', $data->id)}}" class="text-decoration-none text-dark nav-link">
                    <img src="{{ asset('/storage/artikels/'. $data->image ) }}" alt="{{$data->judul}}" class="card-img-top" alt="">
                </a>
                <div class="card-body">
                    <a href="{{ route('artikel.show', $data->id) }}"
                        class="text-decoration-none text-dark nav-link">
                        <h7 class="text-title fw-bold">{{ $data->judul }}</h7>
                    </a>
                    <p class="card-text" style="font-size: 70%;">{{ $data->ringkasan }}</p>
                </div>
            </div>
            </div>
            @endforeach
        </div>
    </div>
<!-- /Content -->


    {{-- footer --}}
    @include('layouts.footer')
    {{-- /footer --}}

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
