@extends('component.layout')

@section('title','Tentang Kami - GoGreen')

@section('body')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

    <div class="d-flex justify-content-between align-items-center">
        <h2>Tentang Kami</h2>
        <ol>
        <li><a href="{{ url('/') }}">Beranda</a></li>
        <li>Tentang Kami</li>
        </ol>
    </div>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Inner-page ======= -->
<section class="inner-page">
    <div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
        <img src="{{ asset('assets/img/about_us.jpeg') }}" class="img-fluid rounded img-cropped-about" alt="">
        </div>
    </div>
    <div class="row d-flex align-items-center justify-content-center text-center">
        <div class="col-lg-8 mt-5 section-title">
        <h2>Go<span class="green">Green</span>, Mengubah Dunia , Satu Langkah Sekali</h2>
        <p>Selamat datang di GoGreen, organisasi mahasiswa yang berdedikasi untuk menciptakan perubahan 
            positif bagi lingkungan. Kami adalah komunitas yang terdiri dari mahasiswa-mahasiswa yang peduli 
            akan kelestarian bumi dan berkomitmen untuk mengambil tindakan nyata dalam menghadapi tantangan lingkungan.</p>
        </div>
    </div>
    <div class="row d-flex align-items-center justify-content-center text-center">
        <div class="col-lg-8 mt-4 section-title">
        <h2>Visi</h2>
        <p>Visi kami adalah menciptakan dunia yang lebih hijau dan berkelanjutan. Kami percaya bahwa 
            setiap individu memiliki peran penting dalam menjaga kelestarian alam. Melalui kolaborasi, 
            pendidikan, dan aksi nyata, kami berupaya mewujudkan lingkungan yang sehat dan lestari untuk generasi mendatang.</p>
        </div>
    </div>
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-8 mt-4 section-title">
        <h2>Misi</h2>
        <p>
            <ul>
            <li>Menyebarkan informasi dan meningkatkan kesadaran tentang isu-isu lingkungan melalui seminar, workshop, dan kampanye.</li>
            <li>Melaksanakan kegiatan nyata seperti penanaman pohon, pembersihan pantai, dan proyek daur ulang untuk memberikan dampak langsung pada lingkungan sekitar</li>
            <li>Bekerja sama dengan berbagai pihak, termasuk pemerintah, organisasi non-profit, dan masyarakat umum, untuk memperluas jangkauan dan efektivitas program kami.</li>
            <li>Mendorong inovasi dalam teknologi hijau dan solusi berkelanjutan untuk mengatasi masalah lingkungan.</li>
            <li>Membangun komunitas yang solid di antara anggota, dimana setiap orang dapat saling mendukung dan berkontribusi dalam berbagai inisiatif lingkungan.</li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</section> <!-- End Inner-page -->  
<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container">

        <div class="section-title">
            <h2>Struktur</h2>
        </div>

        <div class="row align-items-center justify-content-center">
            @foreach ($pengurus as $data)
                <div class="col-lg-3 col-md-4 d-flex align-items-stretch">
                    <div class="member">
                        <img src="{{ asset('storage/'.$data->foto) }}" alt="">
                        <h4>{{ $data->nama_lengkap }}</h4>
                        <span>{{ $data->jabatan->jabatan }}</span>
                        <div class="social">
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section><!-- End Team Section -->
@endsection