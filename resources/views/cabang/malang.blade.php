<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cabang Malang — Mitra Oke</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col items-center justify-center bg-[#f8f8f8] text-[#1a1a1a] antialiased">

<div class="max-w-[560px] w-[calc(100%-48px)] bg-white rounded-[28px] px-11 pt-14 pb-12 shadow-[0_12px_60px_rgba(0,0,0,0.10)] text-center max-[480px]:px-6 max-[480px]:pt-9 max-[480px]:pb-8">
    <img
        class="w-[120px] h-[120px] object-contain rounded-2xl mx-auto mb-6 block p-[10px] border border-black/[0.07] bg-[#fafafa]"
        src="{{ asset('img/logo/malang.jpeg') }}"
        alt="Logo Malang"
    >
    <div class="inline-block bg-[#fff0f1] text-[#e63946] text-xs font-bold tracking-[0.08em] uppercase px-[14px] py-[5px] rounded-full mb-[18px]">
        Cabang Aktif
    </div>
    <h1 class="text-[2rem] font-extrabold text-[#1a1a1a] mb-[10px] leading-[1.2] max-[480px]:text-[1.5rem]">
        Cabang <em class="text-[#e63946] not-italic">Malang</em>
    </h1>
    <p class="text-[0.95rem] text-[#666] leading-[1.7] mb-9">
        Selamat datang di halaman cabang Mitra Oke Malang. Kami siap melayani kebutuhan peralatan kantor premium Anda di Kota Apel.
    </p>

    <div class="grid grid-cols-2 gap-4 mb-9 max-[480px]:grid-cols-1">
        <div class="bg-[#f8f8f8] rounded-[14px] px-[14px] py-[18px] text-left">
            <div class="text-[1.4rem] mb-2">📍</div>
            <h4 class="text-xs font-bold text-[#999] uppercase tracking-[0.06em] mb-1">Alamat</h4>
            <p class="text-sm font-semibold text-[#1a1a1a] leading-[1.5]">Malang, Jawa Timur</p>
        </div>
        <div class="bg-[#f8f8f8] rounded-[14px] px-[14px] py-[18px] text-left">
            <div class="text-[1.4rem] mb-2">📞</div>
            <h4 class="text-xs font-bold text-[#999] uppercase tracking-[0.06em] mb-1">Kontak</h4>
            <p class="text-sm font-semibold text-[#1a1a1a] leading-[1.5]">+62 812 5214 1397</p>
        </div>
        <div class="bg-[#f8f8f8] rounded-[14px] px-[14px] py-[18px] text-left">
            <div class="text-[1.4rem] mb-2">🕐</div>
            <h4 class="text-xs font-bold text-[#999] uppercase tracking-[0.06em] mb-1">Jam Operasional</h4>
            <p class="text-sm font-semibold text-[#1a1a1a] leading-[1.5]">Sen–Sab, 08.00–17.00</p>
        </div>
        <div class="bg-[#f8f8f8] rounded-[14px] px-[14px] py-[18px] text-left">
            <div class="text-[1.4rem] mb-2">📦</div>
            <h4 class="text-xs font-bold text-[#999] uppercase tracking-[0.06em] mb-1">Layanan</h4>
            <p class="text-sm font-semibold text-[#1a1a1a] leading-[1.5]">Penjualan & Konsultasi</p>
        </div>
    </div>

    <div class="flex gap-3 max-[480px]:flex-col">
        <a
            href="https://wa.me/6281252141397?text=Halo%20Mitra%20Oke%2C%20saya%20ingin%20bertanya%20mengenai%20produk%20di%20cabang%20Malang."
            target="_blank"
            class="flex-1 py-[14px] px-5 bg-[#e63946] hover:bg-[#c1121f] text-white rounded-full font-bold text-sm transition-colors duration-150 inline-flex items-center justify-center gap-2"
        >
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M20.52 3.48A11.83 11.83 0 0012 0C5.37 0 0 5.37 0 12a11.9 11.9 0 001.64 6.06L0 24l6.1-1.6A11.93 11.93 0 0012 24c6.63 0 12-5.37 12-12a11.83 11.83 0 00-3.48-8.52zM12 22a9.9 9.9 0 01-5.04-1.38l-.36-.21-3.72.98.99-3.63-.24-.37A9.92 9.92 0 012 12C2 6.48 6.48 2 12 2a9.94 9.94 0 017.07 2.93A9.94 9.94 0 0122 12c0 5.52-4.48 10-10 10zm5.44-7.4c-.3-.15-1.76-.87-2.03-.97s-.47-.15-.67.15-.77.97-.94 1.17-.35.22-.65.07a8.18 8.18 0 01-2.42-1.5 9.08 9.08 0 01-1.67-2.09c-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52s.2-.3.3-.5.05-.37-.02-.52-.67-1.62-.92-2.22c-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37s-1.04 1.02-1.04 2.48 1.06 2.88 1.21 3.08c.15.2 2.09 3.19 5.07 4.48.71.31 1.26.49 1.69.62.71.22 1.35.19 1.86.12.57-.08 1.76-.72 2.01-1.42s.25-1.3.17-1.42c-.08-.12-.27-.2-.57-.35z"/></svg>
            Hubungi Kami
        </a>
        <a
            href="{{ route('landing') }}"
            class="flex-1 py-[14px] px-5 bg-[#f0f0f0] hover:bg-[#e2e2e2] text-[#555] rounded-full font-semibold text-sm transition-colors duration-150 inline-flex items-center justify-center"
        >
            ← Kembali
        </a>
    </div>
</div>

</body>
</html>
