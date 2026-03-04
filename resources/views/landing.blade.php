<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mitra Oke — Peralatan Kantor Premium</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<!-- navbar -->
<div class="fixed inset-x-0 top-0 z-[9999] pt-[18px] px-6 flex flex-col items-center pointer-events-none gap-2" id="navbarWrap">
    <nav class="pointer-events-auto flex items-center bg-[rgba(255,255,255,0.88)] backdrop-saturate-[200%] backdrop-blur-[24px] border border-[rgba(0,0,0,0.08)] rounded-[980px] p-[6px] h-[52px] max-w-[860px] w-full gap-1 transition-shadow duration-300 shadow-[0_4px_24px_rgba(0,0,0,0.08)]" id="navbar">
        <ul class="navbar-left-links">
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#categories">Kategori</a></li>
            <li><a href="#products">Produk</a></li>
        </ul>

        <a href="/" class="px-4 shrink-0 flex items-center">
            <img src="{{ asset('img/logo/mitraoke-removebg-preview.png') }}" alt="MitraOke" class="h-[52px] w-auto block object-contain max-[480px]:h-[38px]">
        </a>

        <ul class="navbar-right-links">
            <li><a href="#blog">Blog</a></li>
            <li><a href="#reviews">Testimoni</a></li>
            <li><a href="#about">Tentang</a></li>
        </ul>

        <a href="https://wa.me/6281252141397" class="inline-flex items-center bg-[#e63946] text-white text-[12px] font-bold py-2 px-5 rounded-[980px] transition-[background,transform] duration-200 whitespace-nowrap shrink-0 ml-1 hover:bg-[rgba(193,18,31,0.65)] hover:scale-[1.03]" target="_blank">Hubungi Kami</a>

        <button class="nav-hamburger" id="navHamburger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </nav>

    <!-- pilih cabang kota -->
    <div class="flex gap-2 items-center pointer-events-auto pb-[10px]">
        <div class="city-item" id="cityItemJogja">
            <button class="inline-flex items-center gap-[5px] py-[5px] px-[10px] bg-[rgba(230,57,70,0.07)] border-[1.5px] border-[rgba(230,57,70,0.2)] rounded-[980px] cursor-pointer font-[Montserrat,sans-serif] text-[12px] font-semibold text-[#e63946] leading-none transition-[background,border-color] duration-150 whitespace-nowrap hover:bg-[rgba(230,57,70,0.12)]" onclick="toggleCity(event,this)">
                📍 Yogyakarta
                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="city-card">
                <div class="p-3 pb-[10px] flex items-center gap-[9px]">
                    <img src="{{ asset('img/logo/jogja.jpeg') }}" alt="Jogja" class="w-[30px] h-[30px] object-contain rounded-[4px] shrink-0 block">
                    <div>
                        <div class="text-[13px] font-bold text-[#202124] leading-[1.2]">Cabang Yogyakarta</div>
                        <span class="text-[11px] text-[#9aa0a6] block mt-[1px]">Mitra Oke</span>
                    </div>
                </div>
                <div class="h-px bg-[#f1f3f4]"></div>
                <div class="flex justify-end py-1 px-[6px] gap-0.5">
                    <button class="py-[6px] px-2 bg-transparent text-[#5f6368] border-none text-[12px] font-semibold cursor-pointer rounded-[4px] font-[Montserrat,sans-serif] transition-colors duration-100 hover:bg-[#f1f3f4]" onclick="closeCity(event)">Batal</button>
                    <a href="{{ route('cabang.jogja') }}" class="py-[6px] px-2 bg-transparent text-[#1a73e8] border-none text-[12px] font-bold cursor-pointer rounded-[4px] font-[Montserrat,sans-serif] transition-colors duration-100 hover:bg-[#e8f0fe] inline-block no-underline">Kunjungi →</a>
                </div>
            </div>
        </div>

        <div class="city-item" id="cityItemMalang">
            <button class="inline-flex items-center gap-[5px] py-[5px] px-[10px] bg-[rgba(230,57,70,0.07)] border-[1.5px] border-[rgba(230,57,70,0.2)] rounded-[980px] cursor-pointer font-[Montserrat,sans-serif] text-[12px] font-semibold text-[#e63946] leading-none transition-[background,border-color] duration-150 whitespace-nowrap hover:bg-[rgba(230,57,70,0.12)]" onclick="toggleCity(event,this)">
                📍 Malang
                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            <div class="city-card">
                <div class="p-3 pb-[10px] flex items-center gap-[9px]">
                    <img src="{{ asset('img/logo/malang.jpeg') }}" alt="Malang" class="w-[30px] h-[30px] object-contain rounded-[4px] shrink-0 block">
                    <div>
                        <div class="text-[13px] font-bold text-[#202124] leading-[1.2]">Cabang Malang</div>
                        <span class="text-[11px] text-[#9aa0a6] block mt-[1px]">Mitra Oke</span>
                    </div>
                </div>
                <div class="h-px bg-[#f1f3f4]"></div>
                <div class="flex justify-end py-1 px-[6px] gap-0.5">
                    <button class="py-[6px] px-2 bg-transparent text-[#5f6368] border-none text-[12px] font-semibold cursor-pointer rounded-[4px] font-[Montserrat,sans-serif] transition-colors duration-100 hover:bg-[#f1f3f4]" onclick="closeCity(event)">Batal</button>
                    <a href="{{ route('cabang.malang') }}" class="py-[6px] px-2 bg-transparent text-[#1a73e8] border-none text-[12px] font-bold cursor-pointer rounded-[4px] font-[Montserrat,sans-serif] transition-colors duration-100 hover:bg-[#e8f0fe] inline-block no-underline">Kunjungi →</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- menu mobile layar penuh -->
<div class="nav-mobile-menu" id="navMobileMenu">
    <a href="#hero" onclick="closeMobileMenu()">Home</a>
    <a href="#categories" onclick="closeMobileMenu()">Kategori</a>
    <a href="#products" onclick="closeMobileMenu()">Produk</a>
    <a href="#reviews" onclick="closeMobileMenu()">Testimoni</a>
    <a href="#blog" onclick="closeMobileMenu()">Blog</a>
    <a href="#about" onclick="closeMobileMenu()">Tentang</a>
    <a href="https://wa.me/6281252141397" class="nav-mobile-cta" target="_blank">Hubungi Kami</a>
</div>

<!-- hero -->
<section class="min-h-screen pt-[130px] overflow-hidden relative flex items-center max-md:pt-[120px] max-md:min-h-0 max-[480px]:pt-[120px]" id="hero">
    <div class="container">
        <div class="relative w-full py-8 pb-14 max-md:py-2 max-md:pb-4 max-md:flex max-md:flex-col max-md:items-center max-md:gap-0">

            <!-- judul baris 1 -->
            <div class="text-center relative z-[2]">
                <h1 class="text-[clamp(2.6rem,6vw,5.2rem)] font-black tracking-[-0.04em] leading-[1.02] text-[#111] max-[900px]:text-[clamp(2rem,7vw,3.2rem)] max-md:text-[clamp(2rem,8vw,2.8rem)] max-[480px]:text-[clamp(1.8rem,9vw,2.4rem)]">Solusi Peralatan<br>Kantor <em class="not-italic text-[#e63946]">Premium</em></h1>
            </div>

            <!-- tengah: info kiri | gambar | statistik kanan -->
            <div class="relative max-w-[900px] mx-auto -my-4 flex items-center justify-center max-[900px]:flex-col max-[900px]:gap-0 max-md:max-w-full">
                <!-- dekorasi -->
                <div class="absolute z-[4] top-[18px] left-0 max-[900px]:hidden"><span class="inline-block leading-[1] text-[#e63946] select-none spin-slow text-[2.8rem]">✦</span></div>
                <div class="absolute z-[4] top-[18px] right-0 max-[900px]:hidden"><span class="inline-block leading-[1] text-[#e63946] select-none spin-slow text-[1.2rem]">✦</span></div>
                <div class="absolute z-[4] bottom-[20px] left-[20px] max-[900px]:hidden"><span class="inline-block leading-[1] text-[#e63946] select-none spin-slow text-[1.2rem]">✦</span></div>

                <!-- teks kiri -->
                <div class="absolute left-0 top-1/2 -translate-y-1/2 max-w-[210px] z-[3] max-[900px]:static max-[900px]:translate-y-0 max-[900px]:max-w-full max-[900px]:text-center max-[900px]:px-4 max-[900px]:mt-2 max-md:order-2 max-md:mt-1 max-md:px-3 max-md:max-w-full max-md:text-center">
                    <p class="text-[13px] text-[#777] leading-[1.7] max-md:text-[12px] max-md:text-[#666] max-md:leading-[1.4]">Dari sistem konferensi hingga furnitur kantor, kami menghadirkan solusi terpadu bersertifikasi TKDN untuk instansi &amp; korporasi Indonesia.</p>
                </div>

                <!-- slider gambar tengah -->
                <div class="flex justify-center items-center max-md:order-1">
                    <div class="relative w-[360px] shrink-0 flex flex-col items-center gap-[14px] max-[900px]:w-[180px] max-md:w-[180px] max-[480px]:w-[160px]">
                        <div class="w-[360px] h-[360px] relative overflow-hidden bg-transparent max-[900px]:w-[180px] max-[900px]:h-[180px] max-md:w-[180px] max-md:h-[180px] max-[480px]:w-[160px] max-[480px]:h-[160px]">
                            <div class="hero-slide active">
                                <img src="{{ asset('img/logo/jogja.jpeg') }}" alt="Jogja" class="brightness-[1.05] contrast-[1.05]">
                            </div>
                            <div class="hero-slide">
                                <img src="{{ asset('img/hero/kamera-removebg-preview.png') }}" alt="Produk Kamera">
                            </div>
                            <div class="hero-slide">
                                <img src="{{ asset('img/logo/malang.jpeg') }}" alt="Malang" class="brightness-[1.05] contrast-[1.05]">
                            </div>
                            <div class="hero-slide">
                                <img src="{{ asset('img/hero/streaming-removebg-preview.png') }}" alt="Produk Streaming">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- statistik kanan -->
                <div class="absolute right-0 top-1/2 -translate-y-1/2 text-right z-[3] max-[900px]:hidden">
                    <div class="inline-flex flex-col items-end">
                        <span class="text-[#fbbf24] text-[14px] tracking-[3px] mb-[2px]">★★★★★</span>
                        <strong class="text-[2.2rem] font-black text-[#111] leading-[1] tracking-[-0.04em] block">15 Tahun</strong>
                        <small class="text-[12px] text-[#999] mt-[2px]">Pengalaman</small>
                    </div>
                </div>
            </div>

            <!-- judul baris 2 -->
            <div class="text-center relative z-[2] max-[900px]:hidden">
                <h1 class="text-[clamp(2.6rem,6vw,5.2rem)] font-black tracking-[-0.04em] leading-[1.02] text-[#111]">Terlengkap &amp; <em class="not-italic text-[#e63946]">Terpercaya</em></h1>
            </div>

            <!-- tombol CTA -->
            <div class="flex justify-center items-center gap-3 mt-10 flex-wrap max-[900px]:mt-5 max-md:mt-[10px] max-md:gap-2 max-md:w-full max-md:flex-col max-md:items-stretch max-md:order-3">
                <a href="#products" class="inline-flex items-center gap-2 bg-[#e63946] text-white text-[14px] font-bold py-[14px] px-7 rounded-[980px] transition-[transform,box-shadow] duration-200 shadow-[0_4px_24px_rgba(230,57,70,0.28)] hover:-translate-y-[2px] hover:shadow-[0_8px_36px_rgba(230,57,70,0.38)] hover:bg-[#c1121f] max-md:w-full max-md:justify-center max-md:py-3 max-md:px-5 max-[480px]:py-[13px] max-[480px]:px-[18px]">
                    Lihat Produk
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="https://wa.me/6281252141397" class="inline-flex items-center gap-2 bg-white border-[1.5px] border-[rgba(0,0,0,0.12)] text-[#333] text-[14px] font-semibold py-[14px] px-7 rounded-[980px] transition-[background,border-color,transform] duration-200 shadow-[0_2px_12px_rgba(0,0,0,0.06)] hover:bg-[#f8f8f8] hover:border-[rgba(0,0,0,0.18)] hover:-translate-y-[1px] max-md:w-full max-md:justify-center max-md:py-3 max-md:px-5 max-[480px]:py-[13px] max-[480px]:px-[18px]" target="_blank">
                    Mari Berkolaborasi
                </a>
            </div>

        </div>
    </div>
</section>

<!-- bar fitur -->
<div class="bg-white border-t border-b border-[#f0f0f0]">
    <div class="container">
        <div class="flex justify-center flex-wrap max-md:flex-col">
            <div class="reveal reveal-d1 flex items-center gap-[14px] py-[22px] px-9 border-r border-[#f0f0f0] max-md:py-4 max-md:px-5 max-md:border-r-0 max-md:border-b max-md:border-[#f0f0f0]">
                <div class="w-[44px] h-[44px] shrink-0 bg-[#f8f8f8] rounded-[12px] flex items-center justify-center text-[22px]">🔒</div>
                <div>
                    <h5 class="text-[13px] font-bold text-[#111]">Garansi Resmi</h5>
                    <p class="text-[11px] text-[#999] mt-[2px] leading-[1.4]">Garansi produk 1–3 tahun</p>
                </div>
            </div>
            <div class="reveal reveal-d2 flex items-center gap-[14px] py-[22px] px-9 max-md:py-4 max-md:px-5">
                <div class="w-[44px] h-[44px] shrink-0 bg-[#f8f8f8] rounded-[12px] flex items-center justify-center text-[22px]">💬</div>
                <div>
                    <h5 class="text-[13px] font-bold text-[#111]">Support 24/7</h5>
                    <p class="text-[11px] text-[#999] mt-[2px] leading-[1.4]">Siap bantu kapan pun</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- kategori -->
<section class="py-20 bg-[#f8f8f8] max-md:py-14" id="categories">
    <div class="container">
        <div class="reveal text-center mb-12 max-md:mb-8">
            <div class="inline-block bg-[rgba(230,57,70,0.07)] text-[#e63946] text-[11px] font-bold tracking-[0.08em] uppercase py-[5px] px-[14px] rounded-[980px] mb-3">Kategori</div>
            <h2 class="text-[clamp(1.8rem,3vw,2.6rem)] font-extrabold tracking-[-0.03em] text-[#111] mb-[10px] max-md:text-[clamp(1.5rem,6vw,2rem)]">Temukan sesuai kebutuhan.</h2>
            <p class="text-[15px] text-[#888] max-w-[520px] mx-auto leading-[1.6]">Pilih dari berbagai kategori produk kantor yang lengkap dan terpercaya.</p>
        </div>

        <div class="grid grid-cols-3 gap-4 max-[900px]:grid-cols-2 max-md:gap-3 max-[500px]:grid-cols-1">
            <div class="group reveal reveal-d1 rounded-[24px] overflow-hidden min-h-[320px] flex flex-col relative cursor-pointer transition-[transform,box-shadow] duration-[350ms] ease-[cubic-bezier(.4,0,.2,1)] shadow-[0_4px_20px_rgba(0,0,0,0.10)] bg-gradient-to-br from-[#e63946] to-[#c1121f] text-white hover:-translate-y-2 hover:scale-[1.01] hover:shadow-[0_24px_56px_rgba(0,0,0,0.18)] max-md:min-h-[220px] max-md:rounded-[18px] max-[480px]:min-h-[200px]">
                <div class="absolute inset-0 z-[1]">
                    <img class="w-full h-full object-contain object-bottom px-4 pt-6 pb-0 drop-shadow-[0_-4px_24px_rgba(0,0,0,0.15)] transition-transform duration-500 ease-[cubic-bezier(.4,0,.2,1)] group-hover:scale-[1.08] group-hover:-translate-y-[6px]" src="{{ asset('img/kategori/atk-removebg-preview.png') }}" alt="ATK">
                </div>
                <div class="relative z-[2] mt-auto px-[22px] pb-[22px] pt-20 bg-gradient-to-t from-[rgba(0,0,0,0.55)] to-transparent">
                    <div class="text-[10px] font-bold tracking-[0.1em] uppercase opacity-85 mb-1">Perlengkapan Kantor</div>
                    <div class="text-[clamp(1.1rem,1.8vw,1.4rem)] font-extrabold tracking-[-0.02em] leading-[1.2] mb-3 max-md:text-[1rem]">Alat Tulis<br>Kantor</div>
                    <a href="/peralatan-kantor" class="inline-flex items-center gap-[6px] bg-[rgba(255,255,255,0.22)] backdrop-blur-[8px] border border-[rgba(255,255,255,0.35)] text-white text-[11px] font-semibold py-[6px] px-[14px] rounded-[980px] w-fit transition-colors duration-200 hover:bg-[rgba(255,255,255,0.42)]">Browse ›</a>
                </div>
            </div>

            <div class="group reveal reveal-d2 rounded-[24px] overflow-hidden min-h-[320px] flex flex-col relative cursor-pointer transition-[transform,box-shadow] duration-[350ms] ease-[cubic-bezier(.4,0,.2,1)] shadow-[0_4px_20px_rgba(0,0,0,0.10)] bg-gradient-to-br from-[#ffbe0b] to-[#fb5607] text-white hover:-translate-y-2 hover:scale-[1.01] hover:shadow-[0_24px_56px_rgba(0,0,0,0.18)] max-md:min-h-[220px] max-md:rounded-[18px] max-[480px]:min-h-[200px]">
                <div class="absolute inset-0 z-[1]">
                    <img class="w-full h-full object-contain object-bottom px-4 pt-6 pb-0 drop-shadow-[0_-4px_24px_rgba(0,0,0,0.15)] transition-transform duration-500 ease-[cubic-bezier(.4,0,.2,1)] group-hover:scale-[1.08] group-hover:-translate-y-[6px]" src="{{ asset('img/kategori/Alat_Kebersihan-removebg-preview.png') }}" alt="Kebersihan">
                </div>
                <div class="relative z-[2] mt-auto px-[22px] pb-[22px] pt-20 bg-gradient-to-t from-[rgba(0,0,0,0.55)] to-transparent">
                    <div class="text-[10px] font-bold tracking-[0.1em] uppercase opacity-85 mb-1">Kebersihan</div>
                    <div class="text-[clamp(1.1rem,1.8vw,1.4rem)] font-extrabold tracking-[-0.02em] leading-[1.2] mb-3 max-md:text-[1rem]">Alat<br>Kebersihan</div>
                    <a href="/peralatan-kantor" class="inline-flex items-center gap-[6px] bg-[rgba(255,255,255,0.22)] backdrop-blur-[8px] border border-[rgba(255,255,255,0.35)] text-white text-[11px] font-semibold py-[6px] px-[14px] rounded-[980px] w-fit transition-colors duration-200 hover:bg-[rgba(255,255,255,0.42)]">Browse ›</a>
                </div>
            </div>

            <div class="group reveal reveal-d3 rounded-[24px] overflow-hidden min-h-[320px] flex flex-col relative cursor-pointer transition-[transform,box-shadow] duration-[350ms] ease-[cubic-bezier(.4,0,.2,1)] shadow-[0_4px_20px_rgba(0,0,0,0.10)] bg-gradient-to-br from-[#3a86ff] to-[#0043ce] text-white hover:-translate-y-2 hover:scale-[1.01] hover:shadow-[0_24px_56px_rgba(0,0,0,0.18)] max-md:min-h-[220px] max-md:rounded-[18px] max-[480px]:min-h-[200px]">
                <div class="absolute inset-0 z-[1]">
                    <img class="w-full h-full object-contain object-bottom px-4 pt-6 pb-0 drop-shadow-[0_-4px_24px_rgba(0,0,0,0.15)] transition-transform duration-500 ease-[cubic-bezier(.4,0,.2,1)] group-hover:scale-[1.08] group-hover:-translate-y-[6px]" src="{{ asset('img/kategori/Alat_Kesehatan-removebg-preview.png') }}" alt="Kesehatan">
                </div>
                <div class="relative z-[2] mt-auto px-[22px] pb-[22px] pt-20 bg-gradient-to-t from-[rgba(0,0,0,0.55)] to-transparent">
                    <div class="text-[10px] font-bold tracking-[0.1em] uppercase opacity-85 mb-1">Kesehatan</div>
                    <div class="text-[clamp(1.1rem,1.8vw,1.4rem)] font-extrabold tracking-[-0.02em] leading-[1.2] mb-3 max-md:text-[1rem]">Alat<br>Kesehatan</div>
                    <a href="/peralatan-kantor" class="inline-flex items-center gap-[6px] bg-[rgba(255,255,255,0.22)] backdrop-blur-[8px] border border-[rgba(255,255,255,0.35)] text-white text-[11px] font-semibold py-[6px] px-[14px] rounded-[980px] w-fit transition-colors duration-200 hover:bg-[rgba(255,255,255,0.42)]">Browse ›</a>
                </div>
            </div>

            <div class="group reveal reveal-d4 rounded-[24px] overflow-hidden min-h-[320px] flex flex-col relative cursor-pointer transition-[transform,box-shadow] duration-[350ms] ease-[cubic-bezier(.4,0,.2,1)] shadow-[0_4px_20px_rgba(0,0,0,0.10)] bg-gradient-to-br from-[#4cc9f0] to-[#4361ee] text-white hover:-translate-y-2 hover:scale-[1.01] hover:shadow-[0_24px_56px_rgba(0,0,0,0.18)] max-md:min-h-[220px] max-md:rounded-[18px] max-[480px]:min-h-[200px]">
                <div class="absolute inset-0 z-[1]">
                    <img class="w-full h-full object-contain object-bottom px-4 pt-6 pb-0 drop-shadow-[0_-4px_24px_rgba(0,0,0,0.15)] transition-transform duration-500 ease-[cubic-bezier(.4,0,.2,1)] group-hover:scale-[1.08] group-hover:-translate-y-[6px]" src="{{ asset('img/kategori/Home_-removebg-preview.png') }}" alt="Home Appliances">
                </div>
                <div class="relative z-[2] mt-auto px-[22px] pb-[22px] pt-20 bg-gradient-to-t from-[rgba(0,0,0,0.55)] to-transparent">
                    <div class="text-[10px] font-bold tracking-[0.1em] uppercase opacity-85 mb-1">Peralatan Rumah</div>
                    <div class="text-[clamp(1.1rem,1.8vw,1.4rem)] font-extrabold tracking-[-0.02em] leading-[1.2] mb-3 max-md:text-[1rem]">Home<br>Appliances</div>
                    <a href="/peralatan-kantor" class="inline-flex items-center gap-[6px] bg-[rgba(255,255,255,0.22)] backdrop-blur-[8px] border border-[rgba(255,255,255,0.35)] text-white text-[11px] font-semibold py-[6px] px-[14px] rounded-[980px] w-fit transition-colors duration-200 hover:bg-[rgba(255,255,255,0.42)]">Browse ›</a>
                </div>
            </div>

            <div class="group reveal reveal-d5 rounded-[24px] overflow-hidden min-h-[320px] flex flex-col relative cursor-pointer transition-[transform,box-shadow] duration-[350ms] ease-[cubic-bezier(.4,0,.2,1)] shadow-[0_4px_20px_rgba(0,0,0,0.10)] bg-gradient-to-br from-[#2b2d42] to-[#1a1a2e] text-white hover:-translate-y-2 hover:scale-[1.01] hover:shadow-[0_24px_56px_rgba(0,0,0,0.18)] max-md:min-h-[220px] max-md:rounded-[18px] max-[480px]:min-h-[200px]">
                <div class="absolute inset-0 z-[1]">
                    <img class="w-full h-full object-contain object-bottom px-4 pt-6 pb-0 drop-shadow-[0_-4px_24px_rgba(0,0,0,0.15)] transition-transform duration-500 ease-[cubic-bezier(.4,0,.2,1)] group-hover:scale-[1.08] group-hover:-translate-y-[6px]" src="{{ asset('img/kategori/roombooking-removebg-preview.png') }}" alt="Furniture">
                </div>
                <div class="relative z-[2] mt-auto px-[22px] pb-[22px] pt-20 bg-gradient-to-t from-[rgba(0,0,0,0.55)] to-transparent">
                    <div class="text-[10px] font-bold tracking-[0.1em] uppercase opacity-85 mb-1">Interior Kantor</div>
                    <div class="text-[clamp(1.1rem,1.8vw,1.4rem)] font-extrabold tracking-[-0.02em] leading-[1.2] mb-3 max-md:text-[1rem]">Furniture<br>Kantor</div>
                    <a href="/peralatan-kantor" class="inline-flex items-center gap-[6px] bg-[rgba(255,255,255,0.22)] backdrop-blur-[8px] border border-[rgba(255,255,255,0.35)] text-white text-[11px] font-semibold py-[6px] px-[14px] rounded-[980px] w-fit transition-colors duration-200 hover:bg-[rgba(255,255,255,0.42)]">Browse ›</a>
                </div>
            </div>

            <div class="group reveal reveal-d6 rounded-[24px] overflow-hidden min-h-[320px] flex flex-col relative cursor-pointer transition-[transform,box-shadow] duration-[350ms] ease-[cubic-bezier(.4,0,.2,1)] shadow-[0_4px_20px_rgba(0,0,0,0.10)] bg-gradient-to-br from-[#7b2d8b] to-[#560bad] text-white hover:-translate-y-2 hover:scale-[1.01] hover:shadow-[0_24px_56px_rgba(0,0,0,0.18)] max-md:min-h-[220px] max-md:rounded-[18px] max-[480px]:min-h-[200px]">
                <div class="absolute inset-0 z-[1]">
                    <img class="w-full h-full object-contain object-bottom px-4 pt-6 pb-0 drop-shadow-[0_-4px_24px_rgba(0,0,0,0.15)] transition-transform duration-500 ease-[cubic-bezier(.4,0,.2,1)] group-hover:scale-[1.08] group-hover:-translate-y-[6px]" src="{{ asset('img/kategori/IT_Hardware-removebg-preview.png') }}" alt="IT Hardware">
                </div>
                <div class="relative z-[2] mt-auto px-[22px] pb-[22px] pt-20 bg-gradient-to-t from-[rgba(0,0,0,0.55)] to-transparent">
                    <div class="text-[10px] font-bold tracking-[0.1em] uppercase opacity-85 mb-1">Teknologi</div>
                    <div class="text-[clamp(1.1rem,1.8vw,1.4rem)] font-extrabold tracking-[-0.02em] leading-[1.2] mb-3 max-md:text-[1rem]">IT Hardware<br>&amp; Software</div>
                    <a href="/peralatan-kantor" class="inline-flex items-center gap-[6px] bg-[rgba(255,255,255,0.22)] backdrop-blur-[8px] border border-[rgba(255,255,255,0.35)] text-white text-[11px] font-semibold py-[6px] px-[14px] rounded-[980px] w-fit transition-colors duration-200 hover:bg-[rgba(255,255,255,0.42)]">Browse ›</a>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- testimoni -->
<section class="py-20 bg-white max-md:py-14" id="reviews">
    <div class="container">
        <div class="reveal flex items-start justify-between mb-10 flex-wrap gap-5 max-md:mb-8">
            <div>
                <p class="text-[11px] font-bold tracking-[0.12em] uppercase text-[#999] mb-[10px]">Our Reviews</p>
                <h2 class="text-[clamp(2rem,4vw,3rem)] font-extrabold tracking-[-0.04em] leading-[1.1] text-[#111] max-md:text-[clamp(1.6rem,6vw,2.2rem)]">What Our <span class="text-[#bbb] font-normal">Clients</span> Say</h2>
            </div>
            <div class="flex gap-[10px] items-center pt-2 shrink-0">
                <button class="w-[50px] h-[50px] rounded-full bg-[#888] border-none cursor-pointer flex items-center justify-center text-white text-[20px] transition-[background,transform] duration-200 shrink-0 hover:bg-[rgba(192,57,43,0.65)] hover:scale-[1.05]" onclick="testiScroll(-1)" aria-label="Sebelumnya">&#8592;</button>
                <button class="w-[50px] h-[50px] rounded-full bg-[#888] border-none cursor-pointer flex items-center justify-center text-white text-[20px] transition-[background,transform] duration-200 shrink-0 hover:bg-[rgba(192,57,43,0.65)] hover:scale-[1.05]" onclick="testiScroll(1)" aria-label="Berikutnya">&#8594;</button>
            </div>
        </div>

        <div class="overflow-hidden cursor-grab active:cursor-grabbing select-none" id="testiWrap">
            <div class="flex gap-6 transition-transform duration-500 ease-[cubic-bezier(.4,0,.2,1)] will-change-transform" id="testiTrack">

                <div class="bg-[#f5f5f7] rounded-[20px] p-8 min-w-[calc(33.333%-16px)] w-[calc(33.333%-16px)] shrink-0 flex flex-col justify-between box-border min-h-[400px] max-lg:min-w-[calc(50%-12px)] max-lg:w-[calc(50%-12px)] max-md:min-w-full max-md:w-full max-md:p-6 max-md:min-h-0">
                    <div>
                        <div class="flex items-center justify-between gap-3 mb-7">
                            <img class="w-[60px] h-[60px] rounded-full object-cover shrink-0 block" src="https://i.pravatar.cc/120?img=11" alt="Budi Santoso">
                            <div class="flex items-center gap-2 border-[1.5px] border-[#ddd] rounded-[980px] py-[7px] pl-[10px] pr-4 text-[12px] font-bold text-[#333] bg-white whitespace-nowrap">
                                <span class="w-6 h-6 rounded-full bg-[#111] text-white text-[11px] font-extrabold flex items-center justify-center shrink-0 uppercase">KK</span>
                                Kemenkeu
                            </div>
                        </div>
                        <span class="text-[44px] text-[#4361ee] leading-[1] font-[Georgia,serif] mb-4 block">&#10077;</span>
                        <p class="text-[clamp(16px,1.6vw,20px)] font-bold leading-[1.5] text-[#111] mb-8 max-md:text-[15px]">Mereka menyesuaikan solusinya dengan kebutuhan dan tujuan spesifik instansi kami dengan sangat baik.</p>
                    </div>
                    <div class="border-l-[3px] border-[#cdcdcd] pl-[14px] mt-auto">
                        <div class="text-[14px] font-bold text-[#111]">Budi Santoso</div>
                        <div class="text-[12px] text-[#999] mt-[3px] leading-[1.4]">Kepala IT, Kementerian Keuangan<br>Jakarta, Indonesia</div>
                    </div>
                </div>

                <div class="bg-[#f5f5f7] rounded-[20px] p-8 min-w-[calc(33.333%-16px)] w-[calc(33.333%-16px)] shrink-0 flex flex-col justify-between box-border min-h-[400px] max-lg:min-w-[calc(50%-12px)] max-lg:w-[calc(50%-12px)] max-md:min-w-full max-md:w-full max-md:p-6 max-md:min-h-0">
                    <div>
                        <div class="flex items-center justify-between gap-3 mb-7">
                            <img class="w-[60px] h-[60px] rounded-full object-cover shrink-0 block" src="https://i.pravatar.cc/120?img=32" alt="Dian Rahayu">
                            <div class="flex items-center gap-2 border-[1.5px] border-[#ddd] rounded-[980px] py-[7px] pl-[10px] pr-4 text-[12px] font-bold text-[#333] bg-white whitespace-nowrap">
                                <span class="w-6 h-6 rounded-full bg-[#111] text-white text-[11px] font-extrabold flex items-center justify-center shrink-0 uppercase">WK</span>
                                Wijaya Karya
                            </div>
                        </div>
                        <span class="text-[44px] text-[#4361ee] leading-[1] font-[Georgia,serif] mb-4 block">&#10077;</span>
                        <p class="text-[clamp(16px,1.6vw,20px)] font-bold leading-[1.5] text-[#111] mb-8 max-md:text-[15px]">Mereka mengorganisir pekerjaan dan manajemen internal proyek kami dengan sangat outstanding.</p>
                    </div>
                    <div class="border-l-[3px] border-[#cdcdcd] pl-[14px] mt-auto">
                        <div class="text-[14px] font-bold text-[#111]">Dian Rahayu</div>
                        <div class="text-[12px] text-[#999] mt-[3px] leading-[1.4]">Project Manager, PT Wijaya Karya<br>Surabaya, Jawa Timur</div>
                    </div>
                </div>

                <div class="bg-[#f5f5f7] rounded-[20px] p-8 min-w-[calc(33.333%-16px)] w-[calc(33.333%-16px)] shrink-0 flex flex-col justify-between box-border min-h-[400px] max-lg:min-w-[calc(50%-12px)] max-lg:w-[calc(50%-12px)] max-md:min-w-full max-md:w-full max-md:p-6 max-md:min-h-0">
                    <div>
                        <div class="flex items-center justify-between gap-3 mb-7">
                            <img class="w-[60px] h-[60px] rounded-full object-cover shrink-0 block" src="https://i.pravatar.cc/120?img=53" alt="Ahmad Fauzy">
                            <div class="flex items-center gap-2 border-[1.5px] border-[#ddd] rounded-[980px] py-[7px] pl-[10px] pr-4 text-[12px] font-bold text-[#333] bg-white whitespace-nowrap">
                                <span class="w-6 h-6 rounded-full bg-[#111] text-white text-[11px] font-extrabold flex items-center justify-center shrink-0 uppercase">IH</span>
                                InHive Space
                            </div>
                        </div>
                        <span class="text-[44px] text-[#4361ee] leading-[1] font-[Georgia,serif] mb-4 block">&#10077;</span>
                        <p class="text-[clamp(16px,1.6vw,20px)] font-bold leading-[1.5] text-[#111] mb-8 max-md:text-[15px]">Bekerja sama dengan mereka adalah pengalaman yang luar biasa dan sangat memuaskan.</p>
                    </div>
                    <div class="border-l-[3px] border-[#cdcdcd] pl-[14px] mt-auto">
                        <div class="text-[14px] font-bold text-[#111]">Ahmad Fauzy</div>
                        <div class="text-[12px] text-[#999] mt-[3px] leading-[1.4]">Lead Engineering, InHive Space<br>Bandung, Jawa Barat</div>
                    </div>
                </div>

                <div class="bg-[#f5f5f7] rounded-[20px] p-8 min-w-[calc(33.333%-16px)] w-[calc(33.333%-16px)] shrink-0 flex flex-col justify-between box-border min-h-[400px] max-lg:min-w-[calc(50%-12px)] max-lg:w-[calc(50%-12px)] max-md:min-w-full max-md:w-full max-md:p-6 max-md:min-h-0">
                    <div>
                        <div class="flex items-center justify-between gap-3 mb-7">
                            <img class="w-[60px] h-[60px] rounded-full object-cover shrink-0 block" src="https://i.pravatar.cc/120?img=25" alt="Siti Nurhaliza">
                            <div class="flex items-center gap-2 border-[1.5px] border-[#ddd] rounded-[980px] py-[7px] pl-[10px] pr-4 text-[12px] font-bold text-[#333] bg-white whitespace-nowrap">
                                <span class="w-6 h-6 rounded-full bg-[#111] text-white text-[11px] font-extrabold flex items-center justify-center shrink-0 uppercase">BM</span>
                                Bank Mandiri
                            </div>
                        </div>
                        <span class="text-[44px] text-[#4361ee] leading-[1] font-[Georgia,serif] mb-4 block">&#10077;</span>
                        <p class="text-[clamp(16px,1.6vw,20px)] font-bold leading-[1.5] text-[#111] mb-8 max-md:text-[15px]">Produk berkualitas tinggi dengan layanan purna jual yang sangat responsif dan profesional.</p>
                    </div>
                    <div class="border-l-[3px] border-[#cdcdcd] pl-[14px] mt-auto">
                        <div class="text-[14px] font-bold text-[#111]">Siti Nurhaliza</div>
                        <div class="text-[12px] text-[#999] mt-[3px] leading-[1.4]">CTO, Bank Mandiri<br>Jakarta, Indonesia</div>
                    </div>
                </div>

                <div class="bg-[#f5f5f7] rounded-[20px] p-8 min-w-[calc(33.333%-16px)] w-[calc(33.333%-16px)] shrink-0 flex flex-col justify-between box-border min-h-[400px] max-lg:min-w-[calc(50%-12px)] max-lg:w-[calc(50%-12px)] max-md:min-w-full max-md:w-full max-md:p-6 max-md:min-h-0">
                    <div>
                        <div class="flex items-center justify-between gap-3 mb-7">
                            <img class="w-[60px] h-[60px] rounded-full object-cover shrink-0 block" src="https://i.pravatar.cc/120?img=44" alt="Rahmat Hidayat">
                            <div class="flex items-center gap-2 border-[1.5px] border-[#ddd] rounded-[980px] py-[7px] pl-[10px] pr-4 text-[12px] font-bold text-[#333] bg-white whitespace-nowrap">
                                <span class="w-6 h-6 rounded-full bg-[#111] text-white text-[11px] font-extrabold flex items-center justify-center shrink-0 uppercase">PS</span>
                                Pemprov Sumut
                            </div>
                        </div>
                        <span class="text-[44px] text-[#4361ee] leading-[1] font-[Georgia,serif] mb-4 block">&#10077;</span>
                        <p class="text-[clamp(16px,1.6vw,20px)] font-bold leading-[1.5] text-[#111] mb-8 max-md:text-[15px]">Tim MitraOKE sangat membantu dalam proses pengadaan dan instalasi perangkat rapat hybrid kami.</p>
                    </div>
                    <div class="border-l-[3px] border-[#cdcdcd] pl-[14px] mt-auto">
                        <div class="text-[14px] font-bold text-[#111]">Rahmat Hidayat</div>
                        <div class="text-[12px] text-[#999] mt-[3px] leading-[1.4]">Direktur IT, Pemprov Sumut<br>Medan, Sumatera Utara</div>
                    </div>
                </div>

            </div>
        </div>

        {{-- titik navigasi: 5 kartu - 3 tampil = posisi 0,1,2 --}}
        <div class="flex justify-center gap-2 mt-7" id="testiDots">
            <button class="testi-dot active" onclick="testiGoto(0)"></button>
            <button class="testi-dot" onclick="testiGoto(1)"></button>
            <button class="testi-dot" onclick="testiGoto(2)"></button>
        </div>
    </div>
</section>

<!-- blog -->
<section class="py-24 bg-[#f8f8f8] max-md:py-14" id="blog">
    <div class="container">
        <div class="reveal flex items-end justify-between gap-6 mb-12 flex-wrap max-md:flex-col max-md:items-start max-md:gap-4 max-md:mb-8">
            <div>
                <p class="text-[11px] font-bold tracking-[0.12em] uppercase text-[#999] mb-[10px]">Insight &amp; Tips</p>
                <h2 class="text-[clamp(1.8rem,3.2vw,2.4rem)] font-extrabold tracking-[-0.04em] text-[#111] leading-[1.15]">Artikel Terbaru</h2>
            </div>
            <a href="https://mitraoke.com/" target="_blank" class="inline-flex items-center gap-2 bg-[#888] text-white text-[13px] font-bold py-3 px-[22px] rounded-[980px] whitespace-nowrap shrink-0 self-end tracking-[0.01em] transition-[background,transform] duration-200 hover:bg-[rgba(192,57,43,0.65)] hover:-translate-y-[2px] [&:hover_svg]:translate-x-[3px]">
                Lihat Semua
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="transition-transform duration-200"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>

        <div class="grid grid-cols-[1.1fr_0.9fr] gap-7 items-stretch max-[900px]:grid-cols-1">

            {{-- artikel utama --}}
            <a href="https://mitraoke.com/" target="_blank" class="group reveal flex flex-col bg-white rounded-[20px] overflow-hidden transition-[box-shadow,transform] duration-300 text-inherit hover:shadow-[0_16px_56px_rgba(0,0,0,0.10)] hover:-translate-y-1">
                <div class="w-full aspect-[16/10] overflow-hidden relative shrink-0">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=900&q=80" alt="Solusi Rapat Hybrid" class="w-full h-full object-cover block transition-transform duration-500 ease-[cubic-bezier(.4,0,.2,1)] group-hover:scale-[1.04]">
                    <span class="absolute top-[14px] left-[14px] bg-[#111] text-white text-[10px] font-bold tracking-[0.08em] uppercase py-[5px] px-3 rounded-[980px] pointer-events-none">Teknologi</span>
                </div>
                <div class="p-7 pb-6 flex flex-col flex-1">
                    <h3 class="text-[clamp(17px,1.8vw,21px)] font-extrabold tracking-[-0.03em] text-[#111] leading-[1.35] mb-[10px]">Memilih Kamera Konferensi yang Tepat untuk Rapat Hybrid di Instansi Pemerintah</h3>
                    <p class="text-[13px] text-[#888] leading-[1.7] mb-6 line-clamp-2 flex-1">Panduan lengkap memilih kamera UHD 4K untuk rapat hybrid — mulai resolusi, sudut pandang, hingga kompatibilitas dengan platform video conference populer.</p>
                    <div class="flex items-center justify-between gap-[10px] pt-4 border-t border-[#f0f0f0]">
                        <div class="flex items-center gap-2">
                            <img class="w-[30px] h-[30px] rounded-full object-cover shrink-0" src="https://i.pravatar.cc/60?img=7" alt="Admin MitraOKE">
                            <span class="text-[12px] font-semibold text-[#555]">Admin MitraOKE</span>
                        </div>
                        <span class="text-[11px] text-[#bbb] font-medium">20 Feb 2026</span>
                    </div>
                </div>
            </a>

            {{-- daftar artikel --}}
            <div class="reveal reveal-d2 flex flex-col gap-3 h-full">

                <a href="https://mitraoke.com/" target="_blank" class="group flex flex-1 gap-4 items-center p-4 bg-white rounded-[14px] cursor-pointer transition-[box-shadow,transform] duration-[250ms] text-inherit hover:shadow-[0_8px_32px_rgba(0,0,0,0.08)] hover:-translate-y-[2px] max-[480px]:flex-col max-[480px]:items-start">
                    <div class="w-[100px] h-[72px] rounded-[10px] overflow-hidden shrink-0 max-md:w-[80px] max-md:h-[60px] max-[480px]:w-full max-[480px]:h-[160px] max-[480px]:rounded-[10px]">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=400&q=80" alt="E-Katalog" class="w-full h-full object-cover block transition-transform duration-[400ms] ease-[cubic-bezier(.4,0,.2,1)] group-hover:scale-[1.08]">
                    </div>
                    <div class="flex-1 flex flex-col gap-2">
                        <span class="text-[10px] font-bold tracking-[0.08em] uppercase text-[#e63946]">Pengadaan</span>
                        <p class="text-[13px] font-bold text-[#111] leading-[1.45] tracking-[-0.01em] line-clamp-2">Cara Pengadaan Peralatan Kantor Lewat E-Katalog LKPP dengan Mudah</p>
                        <span class="text-[11px] text-[#bbb] font-medium">Rina Wati &middot; 15 Feb 2026</span>
                    </div>
                </a>

                <a href="https://mitraoke.com/" target="_blank" class="group flex flex-1 gap-4 items-center p-4 bg-white rounded-[14px] cursor-pointer transition-[box-shadow,transform] duration-[250ms] text-inherit hover:shadow-[0_8px_32px_rgba(0,0,0,0.08)] hover:-translate-y-[2px] max-[480px]:flex-col max-[480px]:items-start">
                    <div class="w-[100px] h-[72px] rounded-[10px] overflow-hidden shrink-0 max-md:w-[80px] max-md:h-[60px] max-[480px]:w-full max-[480px]:h-[160px] max-[480px]:rounded-[10px]">
                        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=400&q=80" alt="ATEN Control System" class="w-full h-full object-cover block transition-transform duration-[400ms] ease-[cubic-bezier(.4,0,.2,1)] group-hover:scale-[1.08]">
                    </div>
                    <div class="flex-1 flex flex-col gap-2">
                        <span class="text-[10px] font-bold tracking-[0.08em] uppercase text-[#e63946]">Tutorial</span>
                        <p class="text-[13px] font-bold text-[#111] leading-[1.45] tracking-[-0.01em] line-clamp-2">Mengenal ATEN Control System: Solusi Kendali Ruang Rapat Modern</p>
                        <span class="text-[11px] text-[#bbb] font-medium">Budi Prasetyo &middot; 10 Feb 2026</span>
                    </div>
                </a>

                <a href="https://mitraoke.com/" target="_blank" class="group flex flex-1 gap-4 items-center p-4 bg-white rounded-[14px] cursor-pointer transition-[box-shadow,transform] duration-[250ms] text-inherit hover:shadow-[0_8px_32px_rgba(0,0,0,0.08)] hover:-translate-y-[2px] max-[480px]:flex-col max-[480px]:items-start">
                    <div class="w-[100px] h-[72px] rounded-[10px] overflow-hidden shrink-0 max-md:w-[80px] max-md:h-[60px] max-[480px]:w-full max-[480px]:h-[160px] max-[480px]:rounded-[10px]">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=400&q=80" alt="ATK Kantor" class="w-full h-full object-cover block transition-transform duration-[400ms] ease-[cubic-bezier(.4,0,.2,1)] group-hover:scale-[1.08]">
                    </div>
                    <div class="flex-1 flex flex-col gap-2">
                        <span class="text-[10px] font-bold tracking-[0.08em] uppercase text-[#e63946]">Tips</span>
                        <p class="text-[13px] font-bold text-[#111] leading-[1.45] tracking-[-0.01em] line-clamp-2">5 Alat Tulis Kantor Wajib yang Harus Ada di Setiap Meja Kerja</p>
                        <span class="text-[11px] text-[#bbb] font-medium">Sari Dewi &middot; 5 Feb 2026</span>
                    </div>
                </a>

                <a href="https://mitraoke.com/" target="_blank" class="group flex flex-1 gap-4 items-center p-4 bg-white rounded-[14px] cursor-pointer transition-[box-shadow,transform] duration-[250ms] text-inherit hover:shadow-[0_8px_32px_rgba(0,0,0,0.08)] hover:-translate-y-[2px] max-[480px]:flex-col max-[480px]:items-start">
                    <div class="w-[100px] h-[72px] rounded-[10px] overflow-hidden shrink-0 max-md:w-[80px] max-md:h-[60px] max-[480px]:w-full max-[480px]:h-[160px] max-[480px]:rounded-[10px]">
                        <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=400&q=80" alt="Kursi Ergonomis" class="w-full h-full object-cover block transition-transform duration-[400ms] ease-[cubic-bezier(.4,0,.2,1)] group-hover:scale-[1.08]">
                    </div>
                    <div class="flex-1 flex flex-col gap-2">
                        <span class="text-[10px] font-bold tracking-[0.08em] uppercase text-[#e63946]">Furnitur</span>
                        <p class="text-[13px] font-bold text-[#111] leading-[1.45] tracking-[-0.01em] line-clamp-2">Kursi Ergonomis vs Kursi Biasa: Mana yang Lebih Nyaman untuk Kerja?</p>
                        <span class="text-[11px] text-[#bbb] font-medium">Imam Sutrisno &middot; 1 Feb 2026</span>
                    </div>
                </a>

                <a href="https://mitraoke.com/" target="_blank" class="group flex flex-1 gap-4 items-center p-4 bg-white rounded-[14px] cursor-pointer transition-[box-shadow,transform] duration-[250ms] text-inherit hover:shadow-[0_8px_32px_rgba(0,0,0,0.08)] hover:-translate-y-[2px] max-[480px]:flex-col max-[480px]:items-start">
                    <div class="w-[100px] h-[72px] rounded-[10px] overflow-hidden shrink-0 max-md:w-[80px] max-md:h-[60px] max-[480px]:w-full max-[480px]:h-[160px] max-[480px]:rounded-[10px]">
                        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=400&q=80" alt="Proyektor Kantor" class="w-full h-full object-cover block transition-transform duration-[400ms] ease-[cubic-bezier(.4,0,.2,1)] group-hover:scale-[1.08]">
                    </div>
                    <div class="flex-1 flex flex-col gap-2">
                        <span class="text-[10px] font-bold tracking-[0.08em] uppercase text-[#e63946]">Teknologi</span>
                        <p class="text-[13px] font-bold text-[#111] leading-[1.45] tracking-[-0.01em] line-clamp-2">Tips Memilih Proyektor untuk Ruang Rapat Agar Presentasi Makin Profesional</p>
                        <span class="text-[11px] text-[#bbb] font-medium">Dewi Lestari &middot; 28 Jan 2026</span>
                    </div>
                </a>

            </div>
        </div>
    </div>
</section>

<!-- newsletter -->
<section class="py-20 bg-white border-b border-[#ebebeb] max-md:py-12" id="contact">
    <div class="container">
        <div class="newsletter-card reveal flex items-center justify-between gap-12 flex-wrap relative bg-[#111] rounded-[28px] py-14 px-[52px] overflow-hidden shadow-[0_24px_64px_rgba(0,0,0,0.14)] max-md:py-9 max-md:px-6 max-md:rounded-[20px] max-md:flex-col max-md:gap-7">
            <div class="flex-1 min-w-[280px]">
                <span class="inline-block text-[11px] font-bold tracking-[0.12em] uppercase text-[#e63946] mb-[14px]">&#9679; Info Produk TKDN</span>
                <h3 class="text-[clamp(1.8rem,3.5vw,2.8rem)] font-black text-white tracking-[-0.04em] leading-[1.1] mb-3 max-md:text-[clamp(1.5rem,6vw,2rem)]">Ingin tahu barang<br><em class="not-italic text-[#e63946]">TKDN</em> kami?</h3>
                <p class="text-[14px] text-[rgba(255,255,255,0.45)] leading-[1.65] max-w-[420px]">Subscribe dan dapatkan update produk terbaru, harga spesial, serta katalog eksklusif langsung di email Anda.</p>
            </div>
            <form class="flex flex-col gap-3 shrink-0 w-[340px] max-[768px]:w-full" onsubmit="return false;">
                <input
                    type="email"
                    class="py-[15px] px-5 rounded-[14px] border border-[rgba(255,255,255,0.1)] bg-[rgba(255,255,255,0.06)] text-white text-[14px] font-[inherit] outline-none transition-[border-color,background] duration-200 placeholder:text-[rgba(255,255,255,0.3)] focus:border-[#e63946] focus:bg-[rgba(255,255,255,0.09)]"
                    placeholder="Masukkan email Anda..."
                >
                <button class="py-[15px] px-7 rounded-[14px] bg-[#e63946] text-white text-[14px] font-bold border-none cursor-pointer font-[inherit] flex items-center justify-center gap-2 transition-[background,transform] duration-200 tracking-[-0.01em] hover:bg-[rgba(193,18,31,0.65)] hover:-translate-y-[2px]" type="submit">
                    Subscribe Sekarang
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
                <span class="text-[11px] text-[rgba(255,255,255,0.25)] text-center">Tidak ada spam. Bisa unsubscribe kapan saja.</span>
            </form>
        </div>
    </div>
</section>

<!-- footer -->
<footer class="bg-[#1a1a1a] text-[rgba(255,255,255,0.65)] pt-16 pb-8 border-t-[3px] border-[#e63946] max-md:pt-12 max-md:pb-6" id="about">
    <div class="container">
        <div class="grid grid-cols-[2fr_1fr_1fr_1fr] gap-10 mb-14 max-md:grid-cols-2 max-md:gap-7 max-md:mb-9 max-[480px]:grid-cols-1 max-[480px]:gap-6">
            <div>
                <div class="inline-flex items-center mb-5">
                    <img src="{{ asset('img/logo/mitraoke-removebg-preview.png') }}" alt="MitraOke" class="h-[40px] w-auto block object-contain [filter:invert(1)_hue-rotate(180deg)]">
                </div>
                <p class="text-[13px] leading-[1.65] max-w-[300px] mb-6">Distributor resmi peralatan kantor premium bersertifikasi TKDN. Melayani instansi pemerintah dan korporasi di seluruh Indonesia.</p>
                <div class="flex gap-[10px]">
                    <a href="https://mitraoke.com/" class="w-[38px] h-[38px] rounded-[10px] bg-[rgba(255,255,255,0.07)] border border-[rgba(255,255,255,0.1)] flex items-center justify-center text-[16px] text-[rgba(255,255,255,0.7)] cursor-pointer transition-[background,color] duration-200 hover:bg-[rgba(230,57,70,0.65)] hover:text-white hover:border-transparent" target="_blank">📷</a>
                    <a href="https://mitraoke.com/" class="w-[38px] h-[38px] rounded-[10px] bg-[rgba(255,255,255,0.07)] border border-[rgba(255,255,255,0.1)] flex items-center justify-center text-[16px] text-[rgba(255,255,255,0.7)] cursor-pointer transition-[background,color] duration-200 hover:bg-[rgba(230,57,70,0.65)] hover:text-white hover:border-transparent" target="_blank">▶️</a>
                    <a href="https://wa.me/6281252141397" class="w-[38px] h-[38px] rounded-[10px] bg-[rgba(255,255,255,0.07)] border border-[rgba(255,255,255,0.1)] flex items-center justify-center text-[16px] text-[rgba(255,255,255,0.7)] cursor-pointer transition-[background,color] duration-200 hover:bg-[rgba(230,57,70,0.65)] hover:text-white hover:border-transparent" target="_blank">💬</a>
                </div>
            </div>

            <div>
                <h5 class="text-[13px] font-bold text-white mb-[18px] tracking-[0.01em]">Produk</h5>
                <ul>
                    <li class="mb-[10px]"><a href="/peralatan-kantor" class="text-[13px] text-[rgba(255,255,255,0.55)] transition-colors duration-150 hover:text-white">ATEN Control System</a></li>
                    <li class="mb-[10px]"><a href="/peralatan-kantor" class="text-[13px] text-[rgba(255,255,255,0.55)] transition-colors duration-150 hover:text-white">AREC Media Station</a></li>
                    <li class="mb-[10px]"><a href="/peralatan-kantor" class="text-[13px] text-[rgba(255,255,255,0.55)] transition-colors duration-150 hover:text-white">IPEVO Camera</a></li>
                    <li class="mb-[10px]"><a href="/peralatan-kantor" class="text-[13px] text-[rgba(255,255,255,0.55)] transition-colors duration-150 hover:text-white">Wharfedale Audio</a></li>
                    <li class="mb-[10px]"><a href="/peralatan-kantor" class="text-[13px] text-[rgba(255,255,255,0.55)] transition-colors duration-150 hover:text-white">ATK Perkantoran</a></li>
                </ul>
            </div>

            <div>
                <h5 class="text-[13px] font-bold text-white mb-[18px] tracking-[0.01em]">Layanan</h5>
                <ul>
                    <li class="mb-[10px]"><a href="https://mitraoke.com/index.html" target="_blank" class="text-[13px] text-[rgba(255,255,255,0.55)] transition-colors duration-150 hover:text-white">E-Katalog Resmi</a></li>
                    <li class="mb-[10px]"><a href="https://www.mbizmarket.co.id/p/mitracom" target="_blank" class="text-[13px] text-[rgba(255,255,255,0.55)] transition-colors duration-150 hover:text-white">Mbizmarket</a></li>
                    <li class="mb-[10px]"><a href="https://mitraoke.com/contact.html" target="_blank" class="text-[13px] text-[rgba(255,255,255,0.55)] transition-colors duration-150 hover:text-white">Konsultasi Gratis</a></li>
                    <li class="mb-[10px]"><a href="https://mitraoke.com/" target="_blank" class="text-[13px] text-[rgba(255,255,255,0.55)] transition-colors duration-150 hover:text-white">Pengadaan Pemerintah</a></li>
                </ul>
            </div>

            <div>
                <h5 class="text-[13px] font-bold text-white mb-[18px] tracking-[0.01em]">Hubungi</h5>
                <ul>
                    <li class="mb-[10px]"><a href="https://mitraoke.com/" target="_blank" class="text-[13px] text-[rgba(255,255,255,0.55)] transition-colors duration-150 hover:text-white">mitraoke.com</a></li>
                    <li class="mb-[10px]"><a href="https://wa.me/6281252141397" target="_blank" class="text-[13px] text-[rgba(255,255,255,0.55)] transition-colors duration-150 hover:text-white">+62 812-5214-1397</a></li>
                    <li class="mb-[10px]"><a href="https://mitraoke.com/contact.html" target="_blank" class="text-[13px] text-[rgba(255,255,255,0.55)] transition-colors duration-150 hover:text-white">Form Kontak</a></li>
                    <li class="mb-[10px]"><a href="https://mitraoke.com/services.html" target="_blank" class="text-[13px] text-[rgba(255,255,255,0.55)] transition-colors duration-150 hover:text-white">Instagram</a></li>
                </ul>
            </div>
        </div>

        <div class="pt-7 border-t border-[rgba(255,255,255,0.08)] flex items-center justify-between flex-wrap gap-3 max-md:flex-col max-md:items-start max-md:gap-[10px]">
            <p class="text-[12px]">© {{ date('Y') }} MitraOke. Seluruh hak cipta dilindungi undang-undang.</p>
            <div class="flex gap-5 flex-wrap max-md:gap-3">
                <a href="#" class="text-[12px] text-[rgba(255,255,255,0.4)] transition-colors duration-150 hover:text-white">Kebijakan Privasi</a>
                <a href="#" class="text-[12px] text-[rgba(255,255,255,0.4)] transition-colors duration-150 hover:text-white">Ketentuan Layanan</a>
                <a href="https://mitraoke.com/contact.html" target="_blank" class="text-[12px] text-[rgba(255,255,255,0.4)] transition-colors duration-150 hover:text-white">Legal</a>
            </div>
        </div>
    </div>
</footer>

<!-- skrip -->
<script>
// hamburger menu mobile
const navHamburger = document.getElementById('navHamburger');
const navMobileMenu = document.getElementById('navMobileMenu');
function closeMobileMenu() {
    navHamburger.classList.remove('open');
    navMobileMenu.classList.remove('open');
    document.body.style.overflow = '';
}
navHamburger.addEventListener('click', () => {
    const isOpen = navHamburger.classList.toggle('open');
    navMobileMenu.classList.toggle('open', isOpen);
    document.body.style.overflow = isOpen ? 'hidden' : '';
});

// efek scroll navbar
(function() {
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 10);
    }, { passive: true });
})();

// animasi fade-up saat scroll
(function() {
    const els = document.querySelectorAll('.reveal');
    const io = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('visible');
                io.unobserve(e.target);
            }
        });
    }, { threshold: 0.12 });
    els.forEach(el => io.observe(el));
})();

// slider gambar hero
(function() {
    const slides = document.querySelectorAll('.hero-slide');
    if (!slides.length) return;
    let cur = 0, timer;

    function goTo(n) {
        slides[cur].classList.remove('active');
        cur = (n + slides.length) % slides.length;
        slides[cur].classList.add('active');
    }

    function start() { timer = setInterval(() => goTo(cur + 1), 3500); }

    start();
})();

// slider testimoni 3 kartu
(function() {
    const track = document.getElementById('testiTrack');
    const wrap  = document.getElementById('testiWrap');
    const dots  = document.querySelectorAll('.testi-dot');
    const TOTAL = track ? track.children.length : 0;
    let current = 0;
    let startX  = 0;
    let isDrag  = false;

    function getVisible() {
        const w = window.innerWidth;
        if (w <= 640)  return 1;
        if (w <= 1024) return 2;
        return 3;
    }

    function getMax() { return Math.max(0, TOTAL - getVisible()); }

    function getCardWidth() {
        if (!track || !track.children.length) return 0;
        const style = getComputedStyle(track);
        const gap = parseFloat(style.gap) || 24;
        return track.children[0].getBoundingClientRect().width + gap;
    }

    function goto(idx) {
        if (!track) return;
        current = Math.max(0, Math.min(idx, getMax()));
        track.style.transform = 'translateX(' + (-current * getCardWidth()) + 'px)';
        dots.forEach((d, i) => d.classList.toggle('active', i === current));
    }

    window.testiScroll = function(dir) { goto(current + dir); };
    window.testiGoto   = function(idx) { goto(idx); };

    window.addEventListener('resize', function() { goto(Math.min(current, getMax())); });

    // putar otomatis tiap 6 detik
    let timer = setInterval(function() {
        goto(current < getMax() ? current + 1 : 0);
    }, 6000);
    function resetTimer() {
        clearInterval(timer);
        timer = setInterval(function() { goto(current < getMax() ? current + 1 : 0); }, 6000);
    }

    // geser sentuh & mouse
    if (wrap) {
        wrap.addEventListener('touchstart', function(e) { startX = e.touches[0].clientX; isDrag = true; }, { passive: true });
        wrap.addEventListener('touchend',   function(e) {
            if (!isDrag) return; isDrag = false;
            const dx = e.changedTouches[0].clientX - startX;
            if (Math.abs(dx) > 50) { goto(dx < 0 ? current + 1 : current - 1); resetTimer(); }
        });
        wrap.addEventListener('mousedown',  function(e) { startX = e.clientX; isDrag = true; });
        wrap.addEventListener('mouseup',    function(e) {
            if (!isDrag) return; isDrag = false;
            const dx = e.clientX - startX;
            if (Math.abs(dx) > 50) { goto(dx < 0 ? current + 1 : current - 1); resetTimer(); }
        });
        wrap.addEventListener('mouseleave', function() { isDrag = false; });
    }
})();

// ===== Popover Kota =====
function toggleCity(e, btn) {
    e.stopPropagation();
    const item = btn.closest('.city-item');
    const wasOpen = item.classList.contains('open');
    document.querySelectorAll('.city-item.open').forEach(i => i.classList.remove('open'));
    if (!wasOpen) item.classList.add('open');
}
function closeCity(e) {
    e.stopPropagation();
    e.target.closest('.city-item').classList.remove('open');
}
document.addEventListener('click', function() {
    document.querySelectorAll('.city-item.open').forEach(i => i.classList.remove('open'));
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') document.querySelectorAll('.city-item.open').forEach(i => i.classList.remove('open'));
});

// link aktif navbar saat scroll
(function() {
    const sections = document.querySelectorAll('section[id], div[id]');
    const links    = document.querySelectorAll('.navbar-left-links li a, .navbar-right-links li a');
    const io = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                const id = e.target.id;
                links.forEach(a => {
                    a.classList.toggle('active', a.getAttribute('href') === '#' + id);
                });
            }
        });
    }, { threshold: 0.4 });
    sections.forEach(s => io.observe(s));
})();
</script>

</body>
</html>
