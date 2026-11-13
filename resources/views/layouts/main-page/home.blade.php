@extends('layouts.generic')

@section('head')
    <title>Kursus CPNS, Persiapan SKD dan SKB Terarah | Privat Nusantara</title>
    <link rel="canonical" href="{{ url('/') }}" />
    <meta name="description"
        content="Kursus CPNS Privat Nusantara membantu persiapan SKD dan SKB melalui tutor personal, latihan soal, serta pilihan belajar online dan tatap muka." />
    <meta name="keywords" content="Kursus CPNS, Persiapan SKD dan SKB Terarah | Privat Nusantara">
    <meta property="og:locale" content="id" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Kursus CPNS, Persiapan SKD dan SKB Terarah | Privat Nusantara" />                                   
    <meta property="og:description"
        content="Kursus CPNS Privat Nusantara membantu persiapan SKD dan SKB melalui tutor personal, latihan soal, serta pilihan belajar online dan tatap muka." />
    <meta property="og:site_name" content="Privat Nusantara" />
    <meta property="og:image" content="{{ asset('images/hero-cpns.webp') }}" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="720" />
    <meta property="og:image:typeoffline" content="image/webp" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Kursus CPNS, Persiapan SKD dan SKB Terarah | Privat Nusantara">
    <meta name="twitter:description"
        content="Kursus CPNS Privat Nusantara membantu persiapan SKD dan SKB melalui tutor personal, latihan soal, serta pilihan belajar online dan tatap muka.">
    <meta name="twitter:image" content="{{ asset('images/hero-cpns.webp') }}">
    <meta name="twitter:url" content="{{ url('/') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection

@section('content')
    <div class="header-beranda">
        <div class="container d-lg-flex align-items-lg-center justify-content-between">
            <div class="text-header text-center">
                <div class="text-center">
                    <h1 class="fw-bold mb-4">Kursus CPNS untuk Persiapan SKD dan SKB Secara Terarah
                    </h1>
                </div>
                <p>Menghadapi seleksi Calon Pegawai Negeri Sipil (CPNS) membutuhkan persiapan yang matang, mulai dari
                    memahami materi ujian hingga melatih kemampuan menyelesaikan soal. Privat Nusantara menghadirkan Kursus
                    CPNS dengan sistem pembelajaran personal untuk membantu peserta mempersiapkan diri menghadapi tahapan
                    seleksi secara lebih terstruktur.</p>
                <p>Melalui pendampingan tutor, peserta dapat mempelajari materi yang relevan dengan kebutuhan seleksi,
                    mengidentifikasi kelemahan dalam penguasaan soal, serta mengembangkan strategi pengerjaan yang lebih
                    efektif. Program pembelajaran dapat disesuaikan dengan kemampuan awal dan target persiapan masing-masing
                    peserta.</p>
                <p>Tersedia pilihan kursus CPNS online melalui Zoom atau Google Meet maupun pembelajaran tatap muka dengan
                    tutor ke lokasi yang disepakati. Dengan demikian, peserta dapat menentukan metode belajar sesuai
                    kebutuhan dan ketersediaan waktu.</p>
                <ul>
                    <li>Konsultasi Program Belajar Gratis</li>
                    <li>Materi Seleksi Terarah</li>
                    <li>Pendampingan Bersama Tutor Berpengalaman</li>
                    <li>Latihan Soal & Evaluasi Berkala</li>
                </ul>
                <a href="https://wa.privat-nusantara.com/?kebutuhan=Les Privat CPNS" class="btn fw-bold">
                    Konsultasi Gratis
                </a>
            </div>

            <div class="image-header">
                <div>
                    <img src="{{ asset('images/hero-cpns.webp') }}" id="header-image-beranda" class="d-block m-auto"
                        alt="Kursus CPNS untuk Persiapan SKD dan SKB Secara Terarah">
                </div>
            </div>
        </div>
    </div>

    <div class="keunggulan">
        <div class="container">
            <div class="count d-lg-flex justify-content-evenly align-items-center text-center">
                <div>
                    <span class="angka" id="kepuasan"></span><span>/10</span>
                    <p class="fw-bold">Rating Kepuasan Siswa</p>
                </div>
                <div>
                    <span class="angka" id="tutor"></span><span>+</span>
                    <p class="fw-bold">Guru Privat</p>
                </div>
                <div>
                    <span class="angka" id="siswa_berhasil"></span><span>%</span>
                    <p class="fw-bold">Tingkat Keberhasilan Siswa</p>
                </div>
                <div>
                    <span class="angka" id="layanan_kota"></span>
                    <p class="fw-bold">Kota Layanan di Indonesia</p>
                </div>
            </div>
        </div>
    </div>


    <section class="learning-section">
        <div class="container">

            <div class="learning-section-header">
                <h2>Program Bimbel CPNS, PPPK & BUMN dengan Strategi Belajar yang Terarah</h2>
                <p>
                    Persaingan dalam seleksi CPNS, PPPK, dan BUMN semakin tinggi sehingga peserta membutuhkan persiapan yang sistematis. Privat Nusantara membantu peserta membangun kemampuan melalui program belajar yang dirancang berdasarkan kebutuhan seleksi.
                </p>
                <p>
                    Kami mendampingi peserta dalam memahami pola ujian, memperkuat materi yang diperlukan, serta meningkatkan kemampuan menyelesaikan soal dengan lebih cepat dan tepat.
                </p>
            </div>

            <div class="learning-section-content">
                <div class="learning-section-cards">

                    <div class="learning-section-card">
                        <div class="learning-section-icon">
                            <img src="{{ asset('images/icon/profile.webp') }}" alt="Bimbel Tatap Muka" loading="lazy">
                        </div>
                        <div class="learning-section-card-body">
                            <p class="learning-section-card-title">Bimbel Tatap Muka {region}</p>
                            <p>Pembelajaran langsung bersama tutor dengan pendampingan yang lebih personal.</p>
                        </div>
                    </div>

                    <div class="learning-section-card">
                        <div class="learning-section-icon">
                            <img src="{{ asset('images/icon/chart.webp') }}" alt="Bimbel Online" loading="lazy">
                        </div>
                        <div class="learning-section-card-body">
                            <p class="learning-section-card-title">Bimbel Online</p>
                            <p>Kelas fleksibel melalui Zoom/Google Meet yang dapat diikuti dari berbagai lokasi.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="learning-section-footer">
                <p>Program bimbel kami mendukung persiapan berbagai seleksi, termasuk:</p>
                <ul>
                    <li>CPNS</li>
                    <li>PPPK</li>
                    <li>BUMN</li>
                    <li>Seleksi kerja dan ujian kompetensi lainnya</li>
                </ul>
                <p>
                    Dengan metode belajar yang terstruktur dan pengajar yang kompeten, Privat Nusantara membantu peserta mempersiapkan diri secara lebih percaya diri untuk menghadapi proses seleksi.
                </p>
            </div>

        </div>
    </section>

    <section class="preparation-section">
        <div class="container">

            <!-- JUDUL -->
            <div class="preparation-header">
                <span class="preparation-label">
                    PERSIAPAN LEBIH TERARAH
                </span>

                <h2>
                    Tingkatkan Peluang Lolos dengan Persiapan yang Lebih Terarah
                </h2>
            </div>

            <!-- KONTEN -->
            <div class="preparation-wrapper">

                <!-- GAMBAR KIRI -->
                <div class="preparation-image">
                    <img
                        src="{{ asset('images/final.webp') }}"
                        alt="Persiapan belajar Privat Nusantara"
                        loading="lazy"
                    >
                </div>

                <!-- DESKRIPSI KANAN -->
                <div class="preparation-content">

                    <p>
                        Banyak peserta gagal bukan karena kurang kemampuan,
                        tetapi karena belum memiliki strategi belajar yang
                        sesuai dengan pola seleksi.
                    </p>

                    <p>
                        Privat Nusantara membantu peserta mempersiapkan ujian
                        melalui pendekatan belajar yang lebih terencana. Tutor
                        membantu mengidentifikasi kelemahan, memperkuat pemahaman
                        materi, dan memberikan latihan yang relevan dengan
                        kebutuhan tes.
                    </p>

                    <p>
                        Mulai dari peserta yang baru memulai persiapan hingga
                        yang ingin meningkatkan hasil latihan, program bimbel
                        dirancang agar proses belajar menjadi lebih fokus
                        dan terukur.
                    </p>

                    <!-- CHECKLIST -->
                    <div class="preparation-list">

                        <div class="preparation-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Materi disesuaikan dengan kebutuhan seleksi</span>
                        </div>

                        <div class="preparation-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Tutor membantu memahami pola dan strategi pengerjaan soal</span>
                        </div>

                        <div class="preparation-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Evaluasi belajar untuk melihat perkembangan peserta</span>
                        </div>

                        <div class="preparation-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Pendampingan hingga lebih siap menghadapi ujian</span>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- <div class="material-section">
        <div class="container">
            <div class="material-header">
                <h2>Materi yang Dipelajari dalam Kursus CPNS</h2>
                <p>
                    Materi pembelajaran menjadi salah satu bagian penting dalam persiapan seleksi CPNS. Peserta perlu
                    memahami konsep dasar sekaligus membiasakan diri menghadapi variasi soal yang mungkin muncul dalam
                    ujian.
                </p>
                <p>
                    Pada persiapan SKD, terdapat tiga kelompok materi utama yang menjadi fokus pembelajaran berikut.
                </p>
            </div>

            <div class="material-grid">

                <div class="material-card material-card-twk">
                    <div class="material-card-header">
                        <div class="material-icon">
                            <img src="{{ asset('images/icon/kurikulum/1.webp') }}" alt="Ikon Tes Wawasan Kebangsaan"
                                loading="lazy">
                        </div>
                        <h3>
                            Tes Wawasan Kebangsaan (TWK)
                        </h3>
                    </div>
                    <p>Tes Wawasan Kebangsaan mengukur pemahaman peserta mengenai nilai kebangsaan, kehidupan bernegara,
                        serta dasar-dasar berbangsa dan bernegara. <br>Materi yang dapat dipelajari meliputi:</p>
                    <ul class="material-list">
                        <li>Pancasila dan penerapannya dalam kehidupan berbangsa</li>
                        <li>Undang-Undang Dasar Negara Republik Indonesia Tahun 1945</li>
                        <li>Negara Kesatuan Republik Indonesia (NKRI)</li>
                        <li>Bhinneka Tunggal Ika dan keberagaman bangsa</li>
                        <li>Nasionalisme dan bela negara</li>
                        <li>Integritas serta pemahaman wawasan kebangsaan</li>
                    </ul>
                </div>

                <div class="material-card material-card-tiu">
                    <div class="material-card-header">
                        <div class="material-icon">
                            <img src="{{ asset('images/icon/kurikulum/2.webp') }}" alt="Ikon Tes Intelegensia Umum"
                                loading="lazy">
                        </div>
                        <h3>
                            Tes Intelegensia Umum (TIU)
                        </h3>
                    </div>
                    <p>Tes Intelegensia Umum mengukur kemampuan berpikir logis, analitis, numerik, dan verbal. Penguasaan
                        materi ini membutuhkan latihan yang konsisten agar peserta semakin terbiasa mengenali pola soal dan
                        menentukan strategi penyelesaian. <br>Fokus pembelajaran TIU dapat mencakup:</p>
                    <ul class="material-list">
                        <li>Kemampuan verbal, seperti analogi, silogisme, dan analisis pernyataan</li>
                        <li>Kemampuan numerik, termasuk operasi hitung dan pemecahan masalah matematika</li>
                        <li>Kemampuan figural, seperti pola gambar, hubungan bentuk, dan penalaran visual</li>
                        <li>Logika dan penalaran untuk menyelesaikan persoalan secara sistematis</li>
                    </ul>
                </div>

                <div class="material-card material-card-tkp">
                    <div class="material-card-header">
                        <div class="material-icon">
                            <img src="{{ asset('images/icon/kurikulum/3.webp') }}" alt="Ikon Tes Karakteristik Pribadi"
                                loading="lazy">
                        </div>
                        <h3>
                            Tes Karakteristik Pribadi (TKP)
                        </h3>
                    </div>
                    <p>Tes Karakteristik Pribadi mengukur kecenderungan perilaku peserta dalam menghadapi berbagai situasi
                        yang berkaitan dengan lingkungan kerja dan pelayanan publik. <br>Pokok pembelajaran dapat mencakup:
                    </p>
                    <ul class="material-list">
                        <li>Pelayanan publik dan orientasi pada masyarakat</li>
                        <li>Jejaring kerja dan kemampuan berkolaborasi</li>
                        <li>Sosial budaya dan kemampuan beradaptasi</li>
                        <li>Teknologi informasi dan komunikasi</li>
                        <li>Profesionalisme dan pengembangan diri</li>
                        <li>Integritas serta tanggung jawab dalam bekerja</li>
                    </ul>
                </div>

            </div>
        </div>
    </div> -->

    
    <section class="material-section">
        <div class="container">

            <div class="material-header">
                <span class="material-label">PROGRAM PEMBELAJARAN</span>
                <h2>Lorem Ipsum Dolor Sit Amet</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>

            <div class="material-grid">

                <!-- CARD 1 -->
                <div class="material-card material-card-twk">
                    <div class="material-icon">
                        <i class="bi bi-book"></i>
                    </div>

                    <h3>Lorem Ipsum Dolor</h3>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Integer posuere erat a ante venenatis dapibus posuere velit.
                    </p>
                </div>

                <!-- CARD 2 -->
                <div class="material-card material-card-tiu">
                    <div class="material-icon">
                        <i class="bi bi-lightbulb"></i>
                    </div>

                    <h3>Consectetur Adipiscing Elit</h3>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Duis aute irure dolor in reprehenderit in voluptate velit.
                    </p>
                </div>

                <!-- CARD 3 -->
                <div class="material-card material-card-tkp">
                    <div class="material-icon">
                        <i class="bi bi-person-check"></i>
                    </div>

                    <h3>Sed Do Eiusmod Tempor</h3>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
                    </p>
                </div>

            </div>
        </div>
    </section>
    
    <section class="tutor-section" id="tutor">
        <div class="container tutor-container">

            <div class="tutor-layout">

                <!-- KOLOM KIRI: GAMBAR -->
                <div class="tutor-visual">
                    <div class="tutor-image-frame">
                        <img
                            src="{{ asset('images/cpns-image.webp') }}"
                            alt="Tutor Privat Nusantara"
                            loading="lazy"
                        >
                    </div>

                    <div class="tutor-image-accent"></div>

                    <div class="tutor-image-caption">
                        <span class="tutor-caption-icon">
                            <i class="bi bi-mortarboard-fill"></i>
                        </span>
                        <div>
                            <strong>Tim Pengajar</strong>
                            <span>Berpengalaman dan kompeten</span>
                        </div>
                    </div>
                </div>

                <!-- KOLOM KANAN: KONTEN -->
                <div class="tutor-content">

                    <span class="tutor-label">
                        TUTOR PRIVAT NUSANTARA
                    </span>

                    <h2>
                        Tutor Berpengalaman untuk Mendukung Persiapan Seleksi Anda
                    </h2>

                    <div class="tutor-description">
                        <p>
                            Memilih pendamping belajar yang tepat dapat membantu peserta memahami materi secara lebih efektif. Privat Nusantara bekerja sama dengan pengajar yang memiliki pengalaman akademik dan kemampuan mengajar sesuai bidang masing-masing.
                        </p>

                        <p>
                            Tim tutor kami terdiri dari guru berpengalaman, dosen, asisten dosen, mahasiswa berprestasi, serta alumni dari berbagai perguruan tinggi ternama seperti UI, UGM, ITB, IPB, STAN, STIS, UNJ, SSE, UIN, dan universitas unggulan lainnya.
                        </p>

                        <p>
                            Setiap pengajar melalui proses seleksi untuk memastikan kemampuan akademik dan kualitas penyampaian materi. Tutor membantu peserta memahami konsep, membahas latihan soal, serta menyusun strategi belajar yang lebih efektif.
                        </p>

                        <p>
                            Privat Nusantara membantu peserta mendapatkan bimbingan yang tepat untuk menghadapi seleksi CPNS, PPPK, dan BUMN di {region}.
                        </p>
                    </div>

                    <a href="#kontak" class="tutor-button">
                        Konsultasi Sekarang
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>
        </div>
    </section>


    
    <div class="advantage-section">
        <div class="advantage-container container">

            <div class="advantage-header">
                <span class="advantage-label">KEUNGGULAN KAMI</span>
                <h2>
                    Alasan Memilih Privat Nusantara untuk Persiapan CPNS, PPPK & BUMN
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Persiapan lebih terarah bersama pendampingan belajar yang tepat.
                </p>
            </div>

            <div class="advantage-grid">

                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <div class="advantage-content">
                        <span class="advantage-number">01</span>
                        <p class="title">Pendampingan Belajar Sesuai Target Seleksi</p>
                        <p>
                            Setiap peserta memiliki tujuan dan tingkat persiapan yang berbeda.
                            Privat Nusantara membantu menyusun proses belajar yang lebih
                            terarah agar peserta dapat fokus pada materi yang dibutuhkan
                            untuk menghadapi seleksi CPNS, PPPK, maupun BUMN.
                        </p>
                    </div>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="bi bi-person-video3"></i>
                    </div>
                    <div class="advantage-content">
                        <span class="advantage-number">02</span>
                        <p class="title">Pengajar dengan Pengalaman Membimbing Peserta Ujian</p>
                        <p>
                            Kami menghadirkan tutor yang memahami kebutuhan persiapan tes
                            dan mampu membantu peserta mempelajari materi secara lebih
                            sistematis. Setiap sesi dirancang agar peserta memahami teori
                            dan mampu menerapkannya dalam latihan soal.
                        </p>
                    </div>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="bi bi-person-check"></i>
                    </div>
                    <div class="advantage-content">
                        <span class="advantage-number">03</span>
                        <p class="title">Pembelajaran Personal dan Lebih Fokus</p>
                        <p>
                            Melalui sistem bimbel privat, peserta mendapatkan ruang belajar
                            yang lebih nyaman untuk bertanya, berdiskusi, dan memperdalam
                            materi yang masih belum dikuasai.
                        </p>
                    </div>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="bi bi-journal-check"></i>
                    </div>
                    <div class="advantage-content">
                        <span class="advantage-number">04</span>
                        <p class="title">Latihan Soal dan Analisis Perkembangan</p>
                        <p>
                            Persiapan seleksi membutuhkan latihan yang konsisten.
                            Peserta mendapatkan pembahasan soal dan evaluasi untuk
                            mengetahui perkembangan kemampuan serta memperbaiki
                            strategi belajar.
                        </p>
                    </div>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="bi bi-laptop"></i>
                    </div>
                    <div class="advantage-content">
                        <span class="advantage-number">05</span>
                        <p class="title">Pilihan Belajar Fleksibel Sesuai Kebutuhan</p>
                        <p>
                            Privat Nusantara menyediakan metode pembelajaran yang dapat
                            disesuaikan dengan aktivitas peserta, baik melalui
                            pertemuan langsung maupun kelas online.
                        </p>
                    </div>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="bi bi-calendar2-check"></i>
                    </div>
                    <div class="advantage-content">
                        <span class="advantage-number">06</span>
                        <p class="title">Program Belajar dengan Sistem yang Praktis</p>
                        <p>
                            Mulai dari konsultasi awal hingga proses pembelajaran,
                            Privat Nusantara membantu peserta mendapatkan program
                            yang sesuai dengan kebutuhan persiapan seleksi.
                        </p>
                    </div>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="bi bi-headset"></i>
                    </div>
                    <div class="advantage-content">
                        <span class="advantage-number">07</span>
                        <p class="title">Tim Support yang Siap Mendampingi</p>
                        <p>
                            Tim kami siap memberikan informasi mengenai program,
                            pilihan tutor, sistem belajar, dan rekomendasi persiapan
                            yang sesuai dengan target peserta.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div style="background: #f4fdff80;">
        <div class="container pt-5 pb-3">
            <h2 class="text-center fw-bold">Lorem Ipsum Dolor Sit Amet</h2>
            <div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                    posuere erat a ante venenatis dapibus posuere velit aliquet.
                    Maecenas faucibus mollis interdum.
                </p>

                <p>
                    Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur.
                    Vestibulum id ligula porta felis euismod semper. Curabitur blandit
                    tempus porttitor.
                </p>

                <p>
                    Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur
                    purus sit amet fermentum. Sed posuere consectetur est at lobortis.
                </p>
            </div>
        </div>
    </div>

    <div id="produk" class="list-produk text-center">
        <div class="container">
            <h2 class="text-center fw-bold mb-lg-3">Produk di Privat Nusantara</h2>
            <div class="card-wrap">
                <div class="card-wrap">
                    <div class="card-section">
                        <img src="{{ asset('images/produk/versi-baru/16.webp') }}" alt="Les Privat CPNS">
                        <div class="button-produk">
                            <div class="button text-center">
                                <a href="https://wa.privat-nusantara.com/?kebutuhan=Les Privat CPNS"
                                    class="btn d-inline-block m-auto" aria-label="Les Privat CPNS">
                                    Konsultasi CPNS
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-section">
                        <img src="{{ asset('images/produk/versi-baru/20.webp') }}" alt="Les Privat PPPK">
                        <div class="button-produk">
                            <div class="button text-center">
                                <a href="https://wa.privat-nusantara.com/?kebutuhan=Les Privat PPPK"
                                    class="btn d-inline-block m-auto" aria-label="Les Privat PPPK">
                                    Konsultasi PPPK
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-section">
                        <img src="{{ asset('images/produk/versi-baru/14.webp') }}" alt="Les Privat Akmil">
                        <div class="button-produk">
                            <div class="button text-center">
                                <a href="https://wa.privat-nusantara.com/?kebutuhan=Les Privat Akmil"
                                    class="btn d-inline-block m-auto" aria-label="Les Privat Akmil">
                                    Konsultasi Akmil
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-section">
                        <img src="{{ asset('images/produk/versi-baru/13.webp') }}" alt="Les Privat Akpol">
                        <div class="button-produk">
                            <div class="button text-center">
                                <a href="https://wa.privat-nusantara.com/?kebutuhan=Les Privat Akpol"
                                    class="btn d-inline-block m-auto" aria-label="Les Privat Akpol">
                                    Konsultasi Akpol
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-section">
                        <img src="{{ asset('images/produk/versi-baru/15.webp') }}" alt="Les Privat Kedinasan">
                        <div class="button-produk">
                            <div class="button text-center">
                                <a href="https://wa.privat-nusantara.com/?kebutuhan=Les Privat Kedinasan"
                                    class="btn d-inline-block m-auto" aria-label="Les Privat Kedinasan">
                                    Konsultasi Kedinasan
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-section">
                        <img src="{{ asset('images/produk/versi-baru/19.webp') }}" alt="Les Privat BUMN">
                        <div class="button-produk">
                            <div class="button text-center">
                                <a href="https://wa.privat-nusantara.com/?kebutuhan=Les Privat BUMN"
                                    class="btn d-inline-block m-auto" aria-label="Les Privat BUMN">
                                    Konsultasi BUMN
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="https://privatnusantara.com/detail-produk" class="btn mt-lg-4 text-white" id="button-lihat-produk">
            Lihat Semua Produk
        </a>
    </div>

    
    <section class="testimonial-section" id="testimoni">
        <div class="testimonial-container">

            <div class="testimonial-header">
                <div class="testimonial-heading">
                    <span class="testimonial-label">TESTIMONI PESERTA</span>
                    <h2>
                        Cerita Peserta yang Mempersiapkan Target Karier Bersama Privat Nusantara
                    </h2>
                </div>

                <div class="testimonial-header-decoration">
                    <i class="bi bi-chat-quote-fill"></i>
                </div>
            </div>

            <div class="testimonial-grid">

                <!-- TESTIMONI 1 -->
                <article class="testimonial-card">
                    <div class="testimonial-card-top">
                        <span class="testimonial-number">01</span>
                        <i class="bi bi-quote testimonial-quote"></i>
                    </div>

                    <p class="testimonial-text">
                        "Sebelum mengikuti bimbingan, saya masih kesulitan memahami pola soal seleksi. Bersama tutor Privat Nusantara, saya mendapatkan arahan belajar yang lebih terstruktur dan lebih percaya diri menghadapi ujian."
                    </p>

                    <div class="testimonial-author">
                        <div class="testimonial-author-image">
                            <img
                                src="{{ asset('images/testimoni-1.webp') }}"
                                alt="Testimoni Angga"
                                loading="lazy"
                            >
                        </div>
                        <div class="testimonial-author-info">
                            <h3>Angga</h3>
                            <span>Peserta Privat Nusantara</span>
                        </div>
                        <i class="bi bi-check-circle-fill testimonial-check"></i>
                    </div>
                </article>

                <!-- TESTIMONI 2 -->
                <article class="testimonial-card testimonial-card-highlight">
                    <div class="testimonial-card-top">
                        <span class="testimonial-number">02</span>
                        <i class="bi bi-quote testimonial-quote"></i>
                    </div>

                    <p class="testimonial-text">
                        "Program belajar Privat Nusantara membantu anak saya mempersiapkan ujian dengan lebih disiplin. Materi dijelaskan dengan baik dan latihan soal membuat persiapannya semakin matang."
                    </p>

                    <div class="testimonial-author">
                        <div class="testimonial-author-image">
                            <img
                                src="{{ asset('images/testimoni-2.webp') }}"
                                alt="Testimoni Bapak Edo"
                                loading="lazy"
                            >
                        </div>
                        <div class="testimonial-author-info">
                            <h3>Bapak Edo</h3>
                            <span>Orang Tua Peserta</span>
                        </div>
                        <i class="bi bi-check-circle-fill testimonial-check"></i>
                    </div>
                </article>

                <!-- TESTIMONI 3 -->
                <article class="testimonial-card">
                    <div class="testimonial-card-top">
                        <span class="testimonial-number">03</span>
                        <i class="bi bi-quote testimonial-quote"></i>
                    </div>

                    <p class="testimonial-text">
                        "Metode belajar yang diberikan tutor sangat membantu. Pembahasan soal menjadi lebih mudah dipahami dan saya jadi mengetahui strategi yang tepat dalam menghadapi tes."
                    </p>

                    <div class="testimonial-author">
                        <div class="testimonial-author-image">
                            <img
                                src="{{ asset('images/testimoni-3.webp') }}"
                                alt="Testimoni Niko"
                                loading="lazy"
                            >
                        </div>
                        <div class="testimonial-author-info">
                            <h3>Niko</h3>
                            <span>Peserta Privat Nusantara</span>
                        </div>
                        <i class="bi bi-check-circle-fill testimonial-check"></i>
                    </div>
                </article>

            </div>
        </div>
    </section>

    
    
<section class="career-section">
    <div class="career-container container">

        <div class="career-header">
            <span class="career-label">PERSIAPAN KARIER</span>
            <h2>Persiapkan Masa Depan Karier dengan Bimbingan yang Tepat</h2>
        </div>

        <div class="career-main">

            <!-- LEFT CONTENT -->
            <div class="career-content">

                <div class="career-content-top">
                    <span class="career-content-label">PENDAMPINGAN BELAJAR</span>
                </div>

                <div class="career-description">
                    <p>
                        Seleksi CPNS, PPPK, dan BUMN menjadi kesempatan besar bagi banyak peserta untuk membangun karier. Namun, persaingan yang tinggi membuat persiapan yang matang menjadi hal penting.
                    </p>
                    <p>
                        Privat Nusantara menghadirkan layanan bimbel {region} untuk membantu peserta memahami materi seleksi, meningkatkan kemampuan mengerjakan soal, serta belajar dengan strategi yang lebih terarah.
                    </p>

                    <p>
                        Dengan dukungan tutor berpengalaman dan pilihan pembelajaran fleksibel, peserta dapat mempersiapkan diri sesuai target tanpa harus terbatas oleh waktu dan lokasi.
                    </p>

                    <p>
                        Baik melalui bimbel ke rumah {region} maupun kelas online, Privat Nusantara siap mendampingi proses belajar Anda agar lebih fokus dan optimal.
                    </p>
                </div>

                <div class="career-closing">
                    <i class="bi bi-check-circle-fill"></i>
                    <p>
                        Mulai persiapan lebih awal dan tingkatkan kesiapan menghadapi seleksi CPNS, PPPK, dan BUMN bersama Privat Nusantara.
                    </p>
                </div>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="career-visual">
                <img
                    src="{{ asset('images/guru.webp') }}"
                    alt="Guru dan tutor Privat Nusantara"
                    class="career-image"
                >

                <div class="career-image-caption">
                    <span class="career-caption-line"></span>
                    <span>Privat Nusantara</span>
                </div>
            </div>

        </div>

    </div>
</section>

<div class="list-kota my-lg-5 my-4">
        <div class="container">
            <h2 class="text-center fw-bold">Jangkauan Layanan Kursus CPNS di Berbagai Kota</h2>
            <p class="text-center">Privat Nusantara menyediakan layanan kursus CPNS dengan pilihan pembelajaran online dan
                tatap muka di berbagai wilayah Indonesia.</p>
            <div class="col-12 mt-4">
                <div class="d-grid">
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Surabaya</a>
                    </p>
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Medan</a>
                    </p>
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Jakarta</a>
                    </p>
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Bandung</a>
                    </p>
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Semarang</a>
                    </p>
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Malang</a>
                    </p>
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Solo</a>
                    </p>
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Makassar</a>
                    </p>
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Batam</a>
                    </p>
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Bekasi</a>
                    </p>
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Kediri</a>
                    </p>
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Pekanbaru</a>
                    </p>
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Balikpapan</a>
                    </p>
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Bontang</a>
                    </p>
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Kutai
                            Kartanegara</a></p>
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Cilegon</a>
                    </p>
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Sidoarjo</a>
                    </p>
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Palembang</a>
                    </p>
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Gresik</a>
                    </p>
                    <p><a class="text-decoration-none d-block m-auto text-start"
                            href="https://cpns-pn.lesnusantara.com/">Banyuwangi</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

<section class="faq-section">
    <div class="faq-section-container">

        <div class="faq-section-layout">

            <!-- LEFT CONTENT -->
            <div class="faq-section-sidebar">
                <span class="faq-section-label">FAQ</span>

                <h2>
                    FAQ – Pertanyaan Seputar Program Bimbel CPNS, PPPK & BUMN Privat Nusantara
                </h2>

                <div class="faq-section-image">
                    <img
                        src="{{ asset('images/image-faq.webp') }}"
                        alt="FAQ Program Bimbel CPNS, PPPK dan BUMN Privat Nusantara"
                    >
                </div>

                <div class="faq-section-sidebar-bottom">
                    <div class="faq-section-sidebar-icon">
                        <i class="bi bi-patch-question"></i>
                    </div>
                    <span>11 Pertanyaan Umum</span>
                </div>

                <div class="faq-section-decoration faq-decoration-one"></div>
                <div class="faq-section-decoration faq-decoration-two"></div>
            </div>

            <!-- RIGHT FAQ -->
            <div class="faq-section-list">

                <div class="faq-section-item active">
                    <button class="faq-section-question" type="button" aria-expanded="true">
                        <span class="faq-section-number">01</span>
                        <span class="faq-section-question-text">Apa saja program bimbel yang tersedia di Privat Nusantara?</span>
                        <span class="faq-section-arrow"><i class="bi bi-plus-lg"></i></span>
                    </button>
                    <div class="faq-section-answer">
                        <div class="faq-section-answer-inner">
                            <p>Privat Nusantara menyediakan program bimbel {region} untuk membantu peserta mempersiapkan berbagai seleksi seperti CPNS, PPPK, dan BUMN. Program belajar dirancang untuk membantu peserta memahami materi, meningkatkan kemampuan mengerjakan soal, serta mempersiapkan diri menghadapi ujian.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-section-item">
                    <button class="faq-section-question" type="button" aria-expanded="false">
                        <span class="faq-section-number">02</span>
                        <span class="faq-section-question-text">Apakah tersedia bimbel ke rumah dan online?</span>
                        <span class="faq-section-arrow"><i class="bi bi-plus-lg"></i></span>
                    </button>
                    <div class="faq-section-answer">
                        <div class="faq-section-answer-inner">
                            <p>Ya. Peserta dapat memilih layanan bimbel ke rumah {region} dengan tutor yang datang langsung atau mengikuti pembelajaran online melalui Zoom/Google Meet. Metode belajar dapat disesuaikan dengan kebutuhan dan kondisi peserta.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-section-item">
                    <button class="faq-section-question" type="button" aria-expanded="false">
                        <span class="faq-section-number">03</span>
                        <span class="faq-section-question-text">Materi apa saja yang dipelajari dalam program bimbel?</span>
                        <span class="faq-section-arrow"><i class="bi bi-plus-lg"></i></span>
                    </button>
                    <div class="faq-section-answer">
                        <div class="faq-section-answer-inner">
                            <p>Materi pembelajaran disesuaikan dengan jenis seleksi yang dipersiapkan. Peserta mendapatkan pendampingan untuk memahami konsep, membahas latihan soal, serta mempelajari strategi pengerjaan agar lebih siap menghadapi ujian.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-section-item">
                    <button class="faq-section-question" type="button" aria-expanded="false">
                        <span class="faq-section-number">04</span>
                        <span class="faq-section-question-text">Bagaimana cara memilih program bimbel yang sesuai?</span>
                        <span class="faq-section-arrow"><i class="bi bi-plus-lg"></i></span>
                    </button>
                    <div class="faq-section-answer">
                        <div class="faq-section-answer-inner">
                            <p>Tim Privat Nusantara akan membantu menentukan program berdasarkan target seleksi, tingkat persiapan peserta, kebutuhan materi, serta metode belajar yang paling sesuai.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-section-item">
                    <button class="faq-section-question" type="button" aria-expanded="false">
                        <span class="faq-section-number">05</span>
                        <span class="faq-section-question-text">Apakah bisa konsultasi sebelum mendaftar?</span>
                        <span class="faq-section-arrow"><i class="bi bi-plus-lg"></i></span>
                    </button>
                    <div class="faq-section-answer">
                        <div class="faq-section-answer-inner">
                            <p>Tentu. Kami menyediakan konsultasi gratis untuk membantu peserta memahami program yang tersedia dan mendapatkan rekomendasi pembelajaran sesuai tujuan seleksi.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-section-item">
                    <button class="faq-section-question" type="button" aria-expanded="false">
                        <span class="faq-section-number">06</span>
                        <span class="faq-section-question-text">Apakah jadwal belajar dapat disesuaikan?</span>
                        <span class="faq-section-arrow"><i class="bi bi-plus-lg"></i></span>
                    </button>
                    <div class="faq-section-answer">
                        <div class="faq-section-answer-inner">
                            <p>Bisa. Jadwal pembelajaran dapat diatur secara fleksibel berdasarkan kesepakatan antara peserta dan tutor agar proses belajar tetap nyaman dilakukan di tengah aktivitas lainnya.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-section-item">
                    <button class="faq-section-question" type="button" aria-expanded="false">
                        <span class="faq-section-number">07</span>
                        <span class="faq-section-question-text">Berapa biaya program bimbel CPNS, PPPK, dan BUMN?</span>
                        <span class="faq-section-arrow"><i class="bi bi-plus-lg"></i></span>
                    </button>
                    <div class="faq-section-answer">
                        <div class="faq-section-answer-inner">
                            <p>Biaya program menyesuaikan kebutuhan peserta, seperti jumlah pertemuan, metode pembelajaran, dan program yang dipilih. Hubungi tim Privat Nusantara untuk mendapatkan informasi paket yang sesuai.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-section-item">
                    <button class="faq-section-question" type="button" aria-expanded="false">
                        <span class="faq-section-number">08</span>
                        <span class="faq-section-question-text">Apakah tersedia latihan soal untuk persiapan seleksi?</span>
                        <span class="faq-section-arrow"><i class="bi bi-plus-lg"></i></span>
                    </button>
                    <div class="faq-section-answer">
                        <div class="faq-section-answer-inner">
                            <p>Ya. Program bimbel mencakup latihan dan pembahasan soal untuk membantu peserta memahami pola ujian, meningkatkan kecepatan pengerjaan, serta mengevaluasi kemampuan secara berkala.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-section-item">
                    <button class="faq-section-question" type="button" aria-expanded="false">
                        <span class="faq-section-number">09</span>
                        <span class="faq-section-question-text">Bagaimana perkembangan belajar peserta dipantau?</span>
                        <span class="faq-section-arrow"><i class="bi bi-plus-lg"></i></span>
                    </button>
                    <div class="faq-section-answer">
                        <div class="faq-section-answer-inner">
                            <p>Tutor membantu melihat perkembangan peserta melalui proses evaluasi dan pembahasan hasil latihan. Hal ini membantu menentukan materi yang masih perlu diperkuat sebelum menghadapi seleksi.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-section-item">
                    <button class="faq-section-question" type="button" aria-expanded="false">
                        <span class="faq-section-number">10</span>
                        <span class="faq-section-question-text">Apakah tutor dapat datang langsung ke lokasi peserta?</span>
                        <span class="faq-section-arrow"><i class="bi bi-plus-lg"></i></span>
                    </button>
                    <div class="faq-section-answer">
                        <div class="faq-section-answer-inner">
                            <p>Ya. Layanan bimbel ke rumah {region} tersedia bagi peserta yang membutuhkan pendampingan tatap muka bersama tutor secara lebih personal.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-section-item">
                    <button class="faq-section-question" type="button" aria-expanded="false">
                        <span class="faq-section-number">11</span>
                        <span class="faq-section-question-text">Bagaimana cara mendaftar program bimbel Privat Nusantara?</span>
                        <span class="faq-section-arrow"><i class="bi bi-plus-lg"></i></span>
                    </button>
                    <div class="faq-section-answer">
                        <div class="faq-section-answer-inner">
                            <p>Hubungi tim Privat Nusantara untuk melakukan konsultasi awal. Kami akan membantu menentukan kebutuhan belajar, memilih program yang tepat, serta mengatur jadwal pembelajaran bersama tutor.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>



    <div id="kontak-kami" class="cta-section text-center">
        <div class="container p-lg-5 px-2 py-4" style="background-color: rgba(255, 255, 255, 0.7); border-radius: 16px">
            <h2 class="text-center fw-bold">Mulai Persiapan CPNS Bersama Privat Nusantara</h2>
            <p>Persiapan seleksi CPNS membutuhkan proses belajar yang konsisten dan strategi yang sesuai dengan kebutuhan.
                Dengan mengikuti Kursus CPNS di Privat Nusantara, peserta dapat memperoleh pendampingan untuk memahami
                materi, berlatih mengerjakan soal, dan mengevaluasi kemampuan secara bertahap.</p>
            <p>Pilih metode pembelajaran online atau tatap muka sesuai kebutuhan Anda. Konsultasikan target seleksi dan
                materi yang ingin dipelajari bersama tim Privat Nusantara untuk mendapatkan rekomendasi program yang sesuai.
            </p>
            <p>Hubungi Privat Nusantara sekarang dan mulai persiapkan diri menghadapi seleksi CPNS</p>
            <a href="https://wa.privat-nusantara.com/?kebutuhan=Les Privat CPNS"
                style="background-color: #045323; color: #fff; border-radius: 30px" class="btn fw-bold">
                Konsultasi Gratis
            </a>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function bukaListSekolah() {
            const button = document.getElementById("sekolah-button");
            const sekolah = document.getElementById("semua-sekolah");
            button.style.display = "none";
            sekolah.style.display = "block";
        }
    </script>

    <script>
        function animateValue(obj, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                obj.innerHTML = Math.floor(progress * (end - start) + start);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        const kepuasan = document.getElementById("kepuasan");
        const tutor = document.getElementById("tutor");
        const siswa_berhasil = document.getElementById("siswa_berhasil");
        const layanan_kota = document.getElementById("layanan_kota");
        animateValue(kepuasan, 0, 9, 1500);
        animateValue(tutor, 0, 5000, 4000);
        animateValue(siswa_berhasil, 0, 90, 3000);
        animateValue(layanan_kota, 0, 99, 3000);

        document.querySelectorAll('.faq-section').forEach((section) => {
            const items = Array.from(
                section.querySelectorAll('.faq-section-item')
            );

            items.forEach((item) => {
                const button = item.querySelector('.faq-section-question');
                if (!button) return;
                button.setAttribute(
                    'aria-expanded',
                    item.classList.contains('active') ? 'true' : 'false'
                );

                button.addEventListener('click', () => {
                    const shouldOpen = !item.classList.contains('active');
                    items.forEach((otherItem) => {
                        otherItem.classList.remove('active');
                        const otherButton = otherItem.querySelector(
                            '.faq-section-question'
                        );
                        if (otherButton) {
                            otherButton.setAttribute('aria-expanded', 'false');
                        }
                    });

                    if (shouldOpen) {
                        item.classList.add('active');
                        button.setAttribute('aria-expanded', 'true');
                    }
                });
            });
        });
    </script>
@endpush
