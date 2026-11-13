@extends('layouts.generic')

@section('head')
    @if ($page->title ?? '')
        <title>
            {{ $page->title ?: $keyword->name ?? 'Guru Les CPNS Berpengalaman | Privat Nusantara' }}
        </title>
        <link rel="canonical" href="{{ url()->current() }}" />
        <meta name="description"
            content="{{ $page->meta_description ?: $keyword->name ?: 'Kursus CPNS Privat Nusantara membantu persiapan SKD dan SKB melalui tutor personal, latihan soal, serta pilihan belajar online dan tatap muka.' }}" />
        <meta name="keywords" content="{{ $keyword->name ?: '' }} {{ $region->name ?? '' }}">
        <meta property="og:locale" content="id" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="{{ $page->title ?: $keyword->name ?: '' }}" />
        <meta property="og:description"
            content="{{ $page->meta_description ?: $keyword->name ?: 'Kursus CPNS Privat Nusantara membantu persiapan SKD dan SKB melalui tutor personal, latihan soal, serta pilihan belajar online dan tatap muka.' }}" />
        <meta property="og:site_name" content="{{ $keyword->name ?? '' }}" />
        <meta property="og:image" content="{{ asset('images/hero-cpns.webp') }}" />
        <meta property="og:image:width" content="1280" />
        <meta property="og:image:height" content="720" />
        <meta property="og:image:type" content="image/webp" />
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $page->title ?? ($keyword->name ?? '') }}">
        <meta name="twitter:description"
            content="{{ $page->meta_description ?: $keyword->name ?: 'Kursus CPNS Privat Nusantara membantu persiapan SKD dan SKB melalui tutor personal, latihan soal, serta pilihan belajar online dan tatap muka.' }}">
        <meta name="twitter:image" content="{{ asset('images/hero-cpns.webp') }}">
        <meta name="twitter:url" content="{{ url()->current() }}">
    @else
        <title>
            {{ $page->title ?: $keyword->name ?? 'Guru Les CPNS Berpengalaman | Privat Nusantara' }}
            di
            {{ $region->name ?? '' }}</title>
        <link rel="canonical" href="{{ url()->current() }}" />
        <meta name="description"
            content="{{ $page->meta_description ?: $keyword->name ?: 'Kursus CPNS Privat Nusantara membantu persiapan SKD dan SKB melalui tutor personal, latihan soal, serta pilihan belajar online dan tatap muka.' }} di {{ $region->name ?? '' }}" />
        <meta name="keywords" content="{{ $keyword->name ?? '' }} di {{ $region->name ?? '' }}">
        <meta property="og:locale" content="id" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="{{ $page->title ?: $keyword->name ?: '' }} di {{ $region->name ?? '' }}" />
        <meta property="og:description"
            content="{{ $page->meta_description ?: $keyword->name ?: 'Kursus CPNS Privat Nusantara membantu persiapan SKD dan SKB melalui tutor personal, latihan soal, serta pilihan belajar online dan tatap muka.' }} di {{ $region->name ?? '' }}" />
        <meta property="og:site_name" content="{{ $keyword->name ?? '' }}" />
        <meta property="og:image" content="{{ asset('images/hero-cpns.webp') }}" />
        <meta property="og:image:width" content="1280" />
        <meta property="og:image:height" content="720" />
        <meta property="og:image:type" content="image/webp" />
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $page->title ?? ($keyword->name ?? '') }} di {{ $region->name ?? '' }}">
        <meta name="twitter:description"
            content="{{ $page->meta_description ?: $keyword->name ?: 'Kursus CPNS Privat Nusantara membantu persiapan SKD dan SKB melalui tutor personal, latihan soal, serta pilihan belajar online dan tatap muka.' }} di {{ $region->name ?? '' }}">
        <meta name="twitter:image" content="{{ asset('images/hero-cpns.webp') }}">
        <meta name="twitter:url" content="{{ url()->current() }}">
    @endif
@endsection

@php
    $tutorQualityIcons = ['1.webp', '2.webp', '3.webp', '4.webp'];

    $benefitIcons = [
        '<svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M3 5.5C6.5 4.5 9.5 5.3 12 7v13
                C9.5 18.3 6.5 17.5 3 18.5z" />
            <path d="M21 5.5C17.5 4.5 14.5 5.3 12 7v13
                C14.5 18.3 17.5 17.5 21 18.5z" />
            <path d="M6 9l3 .5M6 12l3 .5M15 9l3-.5M15 12l3-.5" />
        </svg>',
        '<svg viewBox="0 0 24 24" aria-hidden="true">
            <circle cx="12" cy="12" r="9" />
            <circle cx="12" cy="12" r="5.5" />
            <circle cx="12" cy="12" r="2" />
            <path d="M15.5 8.5L21 3M16 3h5v5" />
        </svg>',
        '<svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M12 2.8l2.8 5.7 6.3.9-4.6 4.5
                1.1 6.3-5.6-3-5.6 3 1.1-6.3
                -4.6-4.5 6.3-.9z" />
        </svg>',
        '<svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M6 3h8l5 5v13H6z" />
            <path d="M14 3v5h5M9 12h7M9 15h7M9 18h4" />
        </svg>',
    ];

    $subjectIcons = [
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="42"
            height="42" fill="none" stroke="#045323" stroke-width="3.5"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M8 38V28H18V38" />
            <path d="M18 38V20H28V38" />
            <path d="M28 38V11H38V38" />
            <path d="M6 38H42" />
        </svg>',
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="42"
            height="42" fill="none" stroke="#045323" stroke-width="3.3"
            stroke-linecap="round" stroke-linejoin="round">
            <circle cx="22" cy="27" r="15" />
            <circle cx="22" cy="27" r="9" />
            <circle cx="22" cy="27" r="3" />
            <path d="M24 25L39 10" />
            <path d="M30 10H39V19" />
        </svg>',
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="42"
            height="42" fill="none" stroke="#045323" stroke-width="3.3"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M24 15C19 10 12 10 6 12V34C13 32 19 33 24 38" />
            <path d="M24 15C29 10 36 10 42 12V34C35 32 29 33 24 38" />
            <path d="M24 15V38" />
            <path d="M11 18C15 17 18 18 20 20" />
            <path d="M11 24C15 23 18 24 20 26" />
            <path d="M37 18C33 17 30 18 28 20" />
            <path d="M37 24C33 23 30 24 28 26" />
        </svg>',
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="42"
            height="42" fill="none" stroke="#045323" stroke-width="3.3"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M8 8H27" />
            <path d="M8 15H20" />
            <path d="M8 22H17" />
            <path d="M25 31L36 20L41 25L30 36L23 38Z" />
            <path d="M25 31L30 36" />
            <path d="M8 38H18" />
        </svg>',
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="42"
            height="42" fill="none" stroke="#045323" stroke-width="3.3"
            stroke-linecap="round" stroke-linejoin="round">
            <rect x="9" y="6" width="30" height="36" rx="3" />
            <path d="M17 16L20 19L25 13" />
            <path d="M29 17H33" />
            <path d="M17 27L20 30L25 24" />
            <path d="M29 28H33" />
            <path d="M17 36H33" />
        </svg>',
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="42"
            height="42" fill="none" stroke="#045323" stroke-width="3.3"
            stroke-linecap="round" stroke-linejoin="round">
            <rect x="4" y="7" width="25" height="19" rx="2" />
            <path d="M10 32H23L27 26H7L10 32Z" />
            <rect x="31" y="17" width="13" height="23" rx="2" />
            <path d="M35 35H40" />
        </svg>',
    ];

    $learningIcons = ['profile.webp', 'chart.webp'];
@endphp

@section('content')
    @if ($data['hero'] ?? '')
        <div class="header-beranda">
            <div class="container d-lg-flex align-items-lg-center justify-content-between">
                <div class="text-header text-center">
                    <div class="text-center">
                        <h1 class="fw-bold mb-4">{{ $data['hero']['title'] ?? '' }}</h1>
                    </div>
                    {!! $data['hero']['content'] ?? '' !!}
                    <a href="https://wa.privat-nusantara.com/?kebutuhan={{ $keyword->name ?: '' }} {{ $region->name ?? '' }}"
                        class="btn fw-bold">
                        Konsultasi Gratis
                    </a>
                </div>

                <div class="image-header mb-3 mb-lg-0">
                    <div>
                        <img src="{{ asset('images/hero-cpns.webp') }}" id="header-image-beranda" class="d-block m-auto"
                            alt="{{ $data['hero']['title'] ?? '' }}">
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($data['quality'] ?? '')
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
                <div class="list-keunggulan d-lg-flex align-items-center">
                    <div class="ps-lg-3">
                        <h2 class="mt-4 mt-lg-0 text-center fw-bold">{{ $data['quality']['title'] ?? '' }}</h2>
                        <div class="text-center mb-3">{!! $data['quality']['content'] ?? '' !!}</div>
                        <div class="d-flex">
                            @foreach (array_values($data['quality']['items']) as $i => $item_tutor_quality)
                                <div class="card-section">
                                    @php
                                        $iconIndex = $i % count($tutorQualityIcons);
                                        $iconPath = asset('images/icon/benefit/' . $tutorQualityIcons[$iconIndex]);
                                    @endphp

                                    <img src="{{ $iconPath }}" alt="Icon {{ $item_tutor_quality['title'] ?? '' }}">

                                    <h3 class="mt-3 fw-bold fs-lg-4 title">
                                        {{ $item_tutor_quality['title'] ?? '' }}
                                    </h3>

                                    <div>{!! $item_tutor_quality['description'] !!}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($region ?? '')
        <div class="container">
            <p>Melayani {{ $page->title ?? '' }} di {{ $region->name ?? '' }} dengan bimbingan belajar yang fleksibel dan berkualitas. Kami melayani peserta di kawasan
                {{ $region->address ?? '' }} serta berbagai wilayah di sekitarnya.</p>
        </div>
    @endif

    @if ($data['description'] ?? '')
        <div class="py-5" style="background-color: #fcf9e9;">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-5">
                        <div>
                            <img src="{{ asset('images/cpns-image.webp') }}" style="border-radius: 20px; width: 100%"
                                alt="{{ $data['description']['title'] ?? '' }}">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h2 class="text-center fw-bold">{{ $data['description']['title'] ?? '' }}</h2>
                        {!! $data['description']['content'] ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($data['information'] ?? '')
        <div style="background-color: rgba(215, 232, 248, 0.171);">
            <div class="container py-5">
                <h2 class="text-center fw-bold">{{ $data['information']['title'] ?? '' }}</h2>
                <div class="description-section">
                    {!! $data['information']['content'] ?? '' !!}
                </div>
            </div>
        </div>
    @endif

    @if ($data['curriculum'] ?? '')
        <div class="kurikulum">
            <div class="container">
                <h2 class="text-center fw-bold">{{ $data['curriculum']['title'] ?? '' }}</h2>
                <div class="text-center mt-3">{!! $data['curriculum']['content'] ?? '' !!}</div>
                <div class="list-kurikulum">
                    <div class="d-grid text-center">
                        @foreach (array_values($data['curriculum']['items'] ?? []) as $i => $item_curriculum)
                            <div class="card-section">
                                <h3 class="fw-bold title">{{ $item_curriculum['title'] }}</h3>
                                @if (!empty($item_curriculum['title']))
                                    <div class="mt-3 text-start">
                                        {!! $item_curriculum['description'] !!}
                                    </div>
                                @endif

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($data['information2'] ?? '')
        <div>
            <div class="container py-5">
                <h2 class="text-center fw-bold">{{ $data['information2']['title'] ?? '' }}</h2>
                <div>
                    {!! $data['information2']['content'] ?? '' !!}
                </div>
            </div>
        </div>
    @endif

    @if ($data['subject'] ?? '')
        <div class="subject-section">
            <div class="subject-container">
                <img src="{{ asset('images/book.webp') }}" alt="{{ $data['subject']['title'] ?? '' }}"
                    class="subject-book-image">
                <div class="subject-content">
                    <h2 class="fw-bold">{{ $data['subject']['title'] ?? '' }}</h2>
                    {!! $data['subject']['content'] ?? '' !!}
                    <div class="subject-materials mt-3">
                        <div class="subject-column">
                            @foreach (array_values($data['subject']['items'] ?? []) as $i => $item)
                                @if ($i % 2 === 0)
                                    @php
                                        $iconIndex = $i % count($subjectIcons);
                                    @endphp
                                    <div class="subject-item">
                                        <div class="subject-icon">
                                            {!! $subjectIcons[$iconIndex] ?? '' !!}
                                        </div>
                                        <div class="subject-text">
                                            <span><strong>{{ $item['title'] ?? '' }}</strong></span>
                                            {!! $item['description'] ?? '' !!}
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        <div class="subject-column">
                            @foreach (array_values($data['subject']['items'] ?? []) as $i => $item)
                                @if ($i % 2 === 1)
                                    @php
                                        $iconIndex = $i % count($subjectIcons);
                                    @endphp
                                    <div class="subject-item">
                                        <div class="subject-icon">
                                            {!! $subjectIcons[$iconIndex] ?? '' !!}
                                        </div>
                                        <div class="subject-text">
                                            <span><strong>{{ $item['title'] ?? '' }}</strong></span>
                                            {!! $item['description'] ?? '' !!}
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($data['learning-section'] ?? '')
        <div class="learning-section py-lg-5 py-4">
            <div class="container">
                <div class="learning-section-header">
                    <h2 class="text-center fw-bold">
                        {{ $data['learning-section']['title'] ?? '' }}
                    </h2>
                    {!! $data['learning-section']['content'] ?? '' !!}
                </div>
                <div class="learning-section-content">
                    <div class="learning-section-cards">
                        @foreach (array_values($data['learning-section']['items']) as $i => $item)
                            @php
                                $iconIndex = $i % count($learningIcons);
                                $iconPath = asset('images/icon/' . $learningIcons[$iconIndex]);
                            @endphp

                            <div class="learning-section-card">
                                <div class="learning-section-icon">
                                    <img src="{{ $iconPath }}" alt="{{ $item['title'] ?? '' }}" loading="lazy">
                                </div>
                                <div class="learning-section-card-body">
                                    <p class="fw-bold mb-0">
                                        {{ $item['title'] ?? '' }}
                                    </p>
                                    {!! $item['description'] !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="learning-section-visual">
                        <div class="learning-section-image-accent"></div>
                        <div class="learning-section-image">
                            <img src="{{ asset('images/lesson.webp') }}"
                                alt="{{ $data['learning-section']['title'] ?? '' }}" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($data['description2'] ?? '')
        <div style="background: #fffdf3;">
            <div class="container pt-5 pb-3">
                <h2 class="text-center fw-bold">{{ $data['description2']['title'] ?? '' }}</h2>
                <div>
                    {!! $data['description2']['content'] ?? '' !!}
                </div>
            </div>
        </div>
    @endif

    <div id="produk" class="list-produk text-center">
        <div class="container">
            <h2 class="text-center fw-bold mb-lg-3">Produk Les Privat di Privat Nusantara</h2>
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

    <div class="list-kota my-lg-5 my-4">
        <div class="container">
            @if ($data['coverage-area'] ?? '')
                <h2 class="text-center fw-bold">{{ $data['coverage-area']['title'] ?? '' }}</h2>
            @else
                <h2 class="text-center fw-bold">Layanan Les Privat CPNS di Berbagai Kota</h2>
            @endif
            <div class="text-center">{!! $data['coverage-area']['content'] ?? '' !!}</div>
            <div class="col-12 mt-4">
                <div class="d-grid">

                    @php
                        $keywordSlug = $keyword->slug ?? '';
                        $list = collect();
                        $urlPrefix = $keywordSlug;

                        if ($regionType === 'kota') {
                            $list = \App\Models\Region::where('type', 'kota')
                                ->where('id', '!=', $region->id)
                                ->limit(24)
                                ->get();
                            $urlPrefix .= '/kota';
                        } elseif ($regionType === 'kota-besar') {
                            $list = \App\Models\Region::where('type', 'kota-besar')
                                ->where('id', '!=', $region->id)
                                ->limit(24)
                                ->get();
                            $urlPrefix .= '/kota-besar';
                        } elseif ($regionType === 'kecamatan') {
                            if ($region->parent) {
                                $list = \App\Models\Region::where('type', 'kecamatan')
                                    ->where('parent_id', $region->parent_id)
                                    ->where('id', '!=', $region->id)
                                    ->limit(24)
                                    ->get();
                                $urlPrefix .= '/kecamatan';
                            }

                            if ($list->isEmpty()) {
                                $list = \App\Models\Region::where('type', 'kota')->limit(32)->get();
                                $urlPrefix = $keywordSlug . '/kota';
                            }
                        } elseif (in_array($regionType, ['kelurahan', 'desa'])) {
                            $city = $region->parent?->parent;

                            if ($city) {
                                $list = \App\Models\Region::where('type', 'kecamatan')
                                    ->where('parent_id', $city->id)
                                    ->limit(24)
                                    ->get();
                                $urlPrefix .= '/kecamatan';
                            }

                            if ($list->isEmpty()) {
                                $list = \App\Models\Region::where('type', 'kota')->limit(32)->get();
                                $urlPrefix = $keywordSlug . '/kota';
                            }
                        } else {
                            $list = \App\Models\Region::where('type', 'kota')->limit(32)->get();
                            $urlPrefix .= '/kota';
                        }

                        $list = $list->take(24);
                    @endphp


                    @if ($list->count())
                        @foreach ($list as $item)
                            <p>
                                <a class="text-decoration-none d-block m-auto text-start"
                                    href="{{ url($urlPrefix . '/' . $item->slug . '/terbaik') }}">
                                    {{ $item->name ?? 'Nama tidak ditemukan' }}
                                </a>
                            </p>
                        @endforeach
                    @else
                        <p>Data tidak ditemukan</p>
                    @endif

                </div>
            </div>
        </div>
    </div>

    @if ($region ?? null)
        @php
            $specificAddress = $region->specificAddresses->where('category', 'sd_negeri')->first();
        @endphp

        @if ($specificAddress)
            <div class="container py-5">
                <h2 class="text-center fw-bold">
                    Alamat SD Negeri di wilayah {{ $region->name }}
                </h2>
                <ol style="font-family: Poppins" class="mt-4" type="1">
                    @forelse ($specificAddress->schoolAddresses as $school)
                        <li><strong>{{ $school->school_name }}</strong> - {{ $school->address }}</li>
                    @empty
                        <p class="text-center">
                            Belum ada alamat SD Negeri yang tersedia di wilayah ini.
                        </p>
                    @endforelse
                </ol>
            </div>
        @endif
    @endif

    @if ($data['faq'] ?? '')
        <div class="faq-section">
            <div class="faq-section-container">

                <div class="faq-section-header">
                    <h2>{{ $data['faq']['title'] ?? 'Pertanyaan yang Sering Diajukan' }}</h2>
                    <p>{!! $data['faq']['content'] ??
                        'Temukan jawaban seputar layanan les privat, proses belajar, tutor, dan pilihan jadwal untuk anak Anda.' !!}
                    </p>
                </div>

                <div class="faq-section-content">

                    <div class="faq-section-list">
                        @foreach (array_values($data['faq']['items']) as $i => $item_faq)
                            <div class="faq-section-item {{ $i === 0 ? 'active' : '' }}">
                                <button class="faq-section-question" type="button"
                                    aria-expanded="{{ $i === 0 ? 'true' : 'false' }}">
                                    <span class="faq-section-number">
                                        {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
                                    </span>

                                    <span class="faq-section-question-text">
                                        {{ $item_faq['question'] ?? ($item_faq['title'] ?? '') }}
                                    </span>

                                    <span class="faq-section-arrow" aria-hidden="true"></span>
                                </button>

                                <div class="faq-section-answer">
                                    <div class="faq-section-answer-inner">
                                        <p>{!! $item_faq['description'] ?? '' !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    <div class="faq-section-visual">
                        <div class="faq-section-image">
                            <img src="{{ asset('images/image-faq.webp') }}"
                                alt="{{ $data['faq']['title'] ?? 'Pertanyaan yang Sering Diajukan' }}" loading="lazy"
                                decoding="async">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endif

    @if ($data['cta'] ?? '')
        <div class="cta-section text-center">
            <div class="container p-lg-5 px-2 py-4" style="background-color: rgba(255, 255, 255, 0.7); border-radius: 16px">
                <h2 class="text-center fw-bold">{{ $data['cta']['title'] ?? '' }}</h2>
                {!! $data['cta']['content'] ?? '' !!}
                <a href="https://wa.privat-nusantara.com/?kebutuhan={{ $keyword->name ?: '' }} {{ $region->name ?? '' }}"
                    style="background-color: #045323; color: #fff; border-radius: 30px" class="btn fw-bold">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    @endif
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
