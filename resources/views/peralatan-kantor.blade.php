@extends('layouts.app')

@push('styles')
<style>
/* ── PRODUCT PAGE — Peralatan Kantor ── */
.pk-body { background: #fff; }

/* ── SUB-NAV ── */
.pk-subnav {
    background: #fff;
    border-bottom: 1px solid #d2d2d7;
    position: sticky;
    top: 44px;
    z-index: 900;
    padding: 0 22px;
}
.pk-subnav-inner {
    max-width: 1080px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    gap: 0;
    overflow-x: auto;
    scrollbar-width: none;
}
.pk-subnav-inner::-webkit-scrollbar { display: none; }
.pk-subnav-title {
    font-size: 21px;
    font-weight: 700;
    color: #1d1d1f;
    padding: 14px 24px 14px 0;
    white-space: nowrap;
    flex-shrink: 0;
}
.pk-subnav-items {
    display: flex;
    gap: 0;
    list-style: none;
    align-items: center;
    padding: 0;
    margin: 0;
}
.pk-subnav-items li a {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 4px;
    padding: 10px 14px;
    font-size: 11px;
    color: #1d1d1f;
    text-decoration: none;
    white-space: nowrap;
    transition: color 0.2s;
}
.pk-subnav-items li a:hover { color: #0071e3; }
.pk-subnav-items li a img {
    width: 40px;
    height: 40px;
    object-fit: contain;
}

/* ── SECTION GENERIC ── */
.pk-section {
    max-width: 1080px;
    margin: 0 auto;
    padding: 52px 22px 0;
}
.pk-section-title {
    font-size: clamp(1.6rem, 3vw, 2.2rem);
    font-weight: 700;
    letter-spacing: -0.022em;
    color: #1d1d1f;
    margin-bottom: 6px;
}
.pk-section-subtitle {
    font-size: 15px;
    color: #6e6e73;
    margin-bottom: 24px;
}
.pk-section-head-row {
    display: flex;
    align-items: baseline;
    justify-content: space-between;
    margin-bottom: 24px;
    flex-wrap: wrap;
    gap: 8px;
}
.pk-section-link {
    font-size: 14px;
    color: #0071e3;
    text-decoration: none;
    white-space: nowrap;
}
.pk-section-link:hover { text-decoration: underline; }

/* ── LINEUP SCROLL ── */
.pk-lineup-track-wrap {
    overflow-x: auto;
    scrollbar-width: none;
    padding-bottom: 16px;
}
.pk-lineup-track-wrap::-webkit-scrollbar { display: none; }
.pk-lineup-track {
    display: flex;
    gap: 14px;
    width: max-content;
}
.pk-lineup-card {
    width: 200px;
    flex-shrink: 0;
}
.pk-lineup-img {
    width: 100%;
    aspect-ratio: 3/4;
    object-fit: cover;
    border-radius: 14px;
    display: block;
    background: #f5f5f7;
}
.pk-lineup-card h3 {
    font-size: 15px;
    font-weight: 700;
    color: #1d1d1f;
    margin: 10px 0 4px;
}
.pk-lineup-card p {
    font-size: 12px;
    color: #6e6e73;
    line-height: 1.4;
    margin-bottom: 10px;
}
.pk-lineup-card-btns {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
}
.pk-lineup-card-btns a {
    font-size: 12px;
    font-weight: 500;
    text-decoration: none;
    padding: 6px 14px;
    border-radius: 980px;
    white-space: nowrap;
}
.pk-lineup-card-btns a.blue { background: #0071e3; color: #fff; }
.pk-lineup-card-btns a.outline { border: 1.5px solid rgba(0,0,0,0.2); color: #1d1d1f; }

/* ── SCROLL DOTS ── */
.pk-scroll-dots {
    display: flex;
    justify-content: center;
    gap: 6px;
    margin: 18px 0 0;
}
.pk-scroll-dots span {
    width: 6px; height: 6px;
    border-radius: 50%;
    background: #d2d2d7;
    display: inline-block;
}
.pk-scroll-dots span.active { background: #6e6e73; }

/* ── FEATURE CARDS (dark) ── */
.pk-features-wrap {
    background: #f5f5f7;
    padding: 52px 22px 52px;
}
.pk-features-inner {
    max-width: 1080px;
    margin: 0 auto;
}
.pk-features-track-wrap {
    overflow-x: auto;
    scrollbar-width: none;
    padding-bottom: 16px;
}
.pk-features-track-wrap::-webkit-scrollbar { display: none; }
.pk-features-track {
    display: flex;
    gap: 12px;
    width: max-content;
}
.pk-feat-card {
    width: 200px;
    height: 320px;
    border-radius: 18px;
    overflow: hidden;
    position: relative;
    background: #1d1d1f;
    flex-shrink: 0;
    cursor: default;
}
.pk-feat-card img {
    width: 100%; height: 100%;
    object-fit: cover;
    opacity: 0.7;
}
.pk-feat-card-body {
    position: absolute;
    top: 0; left: 0; right: 0;
    padding: 18px 16px;
}
.pk-feat-card-body .badge {
    font-size: 10px; font-weight: 700;
    letter-spacing: 0.06em; text-transform: uppercase;
    color: rgba(255,255,255,0.55);
    margin-bottom: 8px;
}
.pk-feat-card-body h4 {
    font-size: 16px; font-weight: 700;
    color: #fff; line-height: 1.2;
}
.pk-feat-card-plus {
    position: absolute;
    bottom: 14px; right: 14px;
    width: 24px; height: 24px;
    border-radius: 50%;
    border: 1.5px solid rgba(255,255,255,0.4);
    color: rgba(255,255,255,0.7);
    display: flex; align-items: center; justify-content: center;
    font-size: 16px; line-height: 1;
}
.pk-feat-nav {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 20px;
}
.pk-feat-nav button {
    width: 28px; height: 28px;
    border-radius: 50%;
    border: 1.5px solid #d2d2d7;
    background: #fff;
    cursor: pointer;
    font-size: 13px;
    display: flex; align-items: center; justify-content: center;
    color: #1d1d1f;
    transition: background 0.2s;
}
.pk-feat-nav button:hover { background: #f0f0f0; }

/* ── ACCESSORIES 2-COL ── */
.pk-accessories-wrap {
    padding: 52px 22px;
}
.pk-accessories-inner {
    max-width: 1080px;
    margin: 0 auto;
}
.pk-acc-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-top: 24px;
}
@media (max-width: 600px) { .pk-acc-grid { grid-template-columns: 1fr; } }
.pk-acc-card {
    background: #f5f5f7;
    border-radius: 18px;
    overflow: hidden;
    padding: 32px 28px 0;
    min-height: 320px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.pk-acc-card h3 {
    font-size: 18px; font-weight: 700;
    color: #1d1d1f; margin-bottom: 8px;
}
.pk-acc-card p {
    font-size: 13px; color: #6e6e73;
    line-height: 1.5; margin-bottom: 0;
    max-width: 280px;
}
.pk-acc-img {
    margin-top: auto;
    width: 100%;
    max-height: 200px;
    object-fit: contain;
    object-position: center bottom;
    display: block;
}

/* ── ACCORDION ── */
.pk-accordion-wrap {
    background: #f5f5f7;
    padding: 52px 22px 52px;
}
.pk-accordion-inner {
    max-width: 1080px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 32px;
    align-items: start;
}
@media (max-width: 768px) { .pk-accordion-inner { grid-template-columns: 1fr; } }
.pk-accordion-items { display: flex; flex-direction: column; gap: 0; }
.pk-accordion-item {
    border-top: 1px solid #d2d2d7;
    padding: 14px 0;
}
.pk-accordion-item:last-child { border-bottom: 1px solid #d2d2d7; }
.pk-accordion-trigger {
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    gap: 12px;
}
.pk-accordion-trigger h4 {
    font-size: 16px; font-weight: 600;
    color: #0071e3; line-height: 1.3;
}
.pk-accordion-trigger span {
    font-size: 18px; color: #6e6e73;
    transition: transform 0.25s;
    flex-shrink: 0;
}
.pk-accordion-item.open .pk-accordion-trigger span { transform: rotate(45deg); }
.pk-accordion-body {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
}
.pk-accordion-body p {
    font-size: 14px; color: #6e6e73;
    line-height: 1.6; padding-top: 10px;
}
.pk-accordion-preview {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    aspect-ratio: 4/3;
    display: flex;
    align-items: center;
    justify-content: center;
}
.pk-accordion-preview img {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
}

/* ── SITE FOOTER LINKS (sitemap-style) ── */
.pk-sitemap {
    border-top: 1px solid #d2d2d7;
    padding: 32px 22px 12px;
    background: #fff;
}
.pk-sitemap-inner {
    max-width: 1080px;
    margin: 0 auto;
}
.pk-sitemap h2 {
    font-size: 21px; font-weight: 700;
    color: #1d1d1f; margin-bottom: 20px;
}
.pk-sitemap-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 8px 24px;
}
@media (max-width: 600px) { .pk-sitemap-grid { grid-template-columns: 1fr; } }
.pk-sitemap-col h5 {
    font-size: 11px; font-weight: 600;
    color: #6e6e73; text-transform: uppercase;
    letter-spacing: 0.04em; margin-bottom: 10px;
    margin-top: 8px;
}
.pk-sitemap-col ul { list-style: none; }
.pk-sitemap-col ul li { margin-bottom: 7px; }
.pk-sitemap-col ul li a {
    font-size: 13px; color: #1d1d1f;
    text-decoration: none;
}
.pk-sitemap-col ul li a:hover { color: #0071e3; }

/* ── BACK TO HOME ── */
.pk-breadcrumb {
    max-width: 1080px;
    margin: 0 auto;
    padding: 16px 22px 0;
    font-size: 13px;
    color: #6e6e73;
}
.pk-breadcrumb a { color: #0071e3; text-decoration: none; }
.pk-breadcrumb a:hover { text-decoration: underline; }
</style>
@endpush

@section('content')

@include('partials.nav')

<div class="pk-body">

    {{-- ── BREADCRUMB ── --}}
    <div class="pk-breadcrumb">
        <a href="/">&#8249; Beranda</a>
    </div>

    {{-- ── SUB-NAV ── --}}
    <div class="pk-subnav">
        <div class="pk-subnav-inner">
            <div class="pk-subnav-title">Peralatan Kantor</div>
            <ul class="pk-subnav-items">
                <li>
                    <a href="#">
                        <img src="https://mitraoke.com/img/gallery/aten.png" alt="ATEN">
                        ATEN Control
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="https://mitraoke.com/img/gallery/Media.jpg" alt="AREC">
                        AREC
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="https://mitraoke.com/img/gallery/VC-Z4K-1.jpg" alt="IPEVO">
                        IPEVO
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="https://mitraoke.com/img/gallery/microphone.webp" alt="Wharfedale">
                        Wharfedale
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=80&q=60" alt="ATK">
                        ATK
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="https://mitraoke.com/img/gallery/rbs.jpg" alt="Bandingkan">
                        Bandingkan
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- ── JELAJAHI JAJARANNYA ── --}}
    <div class="pk-section" style="padding-bottom: 40px;">
        <div class="pk-section-head-row">
            <h2 class="pk-section-title">Jelajahi jajarannya.</h2>
            <a href="https://mitraoke.com/" class="pk-section-link" target="_blank">Bandingkan semua produk ›</a>
        </div>
        <div class="pk-lineup-track-wrap" id="lineupWrap">
            <div class="pk-lineup-track">
                <div class="pk-lineup-card">
                    <img class="pk-lineup-img" src="https://mitraoke.com/img/gallery/aten.png" alt="ATEN VK1100A">
                    <h3>ATEN VK1100A</h3>
                    <p>Control System kompak untuk ruang rapat kecil hingga menengah.</p>
                    <div class="pk-lineup-card-btns">
                        <a href="https://mitraoke.com/blog.html" class="outline" target="_blank">Selengkapnya</a>
                        <a href="https://www.mbizmarket.co.id/p/mitracom" class="blue" target="_blank">Beli ›</a>
                    </div>
                </div>
                <div class="pk-lineup-card">
                    <img class="pk-lineup-img" src="https://mitraoke.com/img/gallery/Media.jpg" alt="AREC LS-300">
                    <h3>AREC LS-300</h3>
                    <p>Media Station dengan dual-streaming ke 2 platform sekaligus.</p>
                    <div class="pk-lineup-card-btns">
                        <a href="https://mitraoke.com/blog.html" class="outline" target="_blank">Selengkapnya</a>
                        <a href="https://www.mbizmarket.co.id/p/mitracom" class="blue" target="_blank">Beli ›</a>
                    </div>
                </div>
                <div class="pk-lineup-card">
                    <img class="pk-lineup-img" src="https://mitraoke.com/img/gallery/VC-Z4K-1.jpg" alt="IPEVO VC-Z4K">
                    <h3>IPEVO VC-Z4K</h3>
                    <p>Kamera konferensi 4K PTZ untuk ruang rapat profesional.</p>
                    <div class="pk-lineup-card-btns">
                        <a href="https://mitraoke.com/blog.html" class="outline" target="_blank">Selengkapnya</a>
                        <a href="https://www.mbizmarket.co.id/p/mitracom" class="blue" target="_blank">Beli ›</a>
                    </div>
                </div>
                <div class="pk-lineup-card">
                    <img class="pk-lineup-img" src="https://mitraoke.com/img/gallery/microphone.webp" alt="Wharfedale WF-300">
                    <h3>Wharfedale WF-300</h3>
                    <p>Wireless Mic dual kanal transmisi digital berkualitas tinggi.</p>
                    <div class="pk-lineup-card-btns">
                        <a href="https://mitraoke.com/blog.html" class="outline" target="_blank">Selengkapnya</a>
                        <a href="https://www.mbizmarket.co.id/p/mitracom" class="blue" target="_blank">Beli ›</a>
                    </div>
                </div>
                <div class="pk-lineup-card">
                    <img class="pk-lineup-img" src="https://mitraoke.com/img/gallery/rbs.jpg" alt="ATEN VK430">
                    <h3>ATEN VK430</h3>
                    <p>Room Booking System terintegrasi Microsoft 365 & Google Workspace.</p>
                    <div class="pk-lineup-card-btns">
                        <a href="https://mitraoke.com/blog.html" class="outline" target="_blank">Selengkapnya</a>
                        <a href="https://www.mbizmarket.co.id/p/mitracom" class="blue" target="_blank">Beli ›</a>
                    </div>
                </div>
                <div class="pk-lineup-card">
                    <img class="pk-lineup-img" src="https://mitraoke.com/img/gallery/Aten.jpg" alt="ATEN VK330">
                    <h3>ATEN VK330</h3>
                    <p>KVM Switch 4-port HDMI untuk manajemen multi-display di kantor.</p>
                    <div class="pk-lineup-card-btns">
                        <a href="https://mitraoke.com/blog.html" class="outline" target="_blank">Selengkapnya</a>
                        <a href="https://www.mbizmarket.co.id/p/mitracom" class="blue" target="_blank">Beli ›</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="pk-scroll-dots">
            <span class="active"></span><span></span><span></span>
        </div>
    </div>

    {{-- ── KENALI LEBIH DALAM ── --}}
    <div class="pk-features-wrap">
        <div class="pk-features-inner">
            <div class="pk-section-head-row" style="margin-bottom:24px">
                <h2 class="pk-section-title">Kenali produk lebih dalam.</h2>
            </div>
            <div class="pk-features-track-wrap">
                <div class="pk-features-track">
                    <div class="pk-feat-card">
                        <img src="https://mitraoke.com/img/gallery/VC-Z4K-1.jpg" alt="Kamera 4K">
                        <div class="pk-feat-card-body">
                            <div class="badge">Kamera Canggih</div>
                            <h4>Resolusi 4K. Setiap detail terlihat jelas.</h4>
                        </div>
                        <div class="pk-feat-card-plus">+</div>
                    </div>
                    <div class="pk-feat-card">
                        <img src="https://mitraoke.com/img/gallery/microphone.webp" alt="Audio HD">
                        <div class="pk-feat-card-body">
                            <div class="badge">Audio Profesional</div>
                            <h4>Suara jernih. Rapat tanpa gangguan.</h4>
                        </div>
                        <div class="pk-feat-card-plus">+</div>
                    </div>
                    <div class="pk-feat-card">
                        <img src="https://mitraoke.com/img/gallery/aten.png" alt="Kontrol Otomatis">
                        <div class="pk-feat-card-body">
                            <div class="badge">Sistem Kontrol</div>
                            <h4>Otomatisasi ruang rapat dalam satu sentuhan.</h4>
                        </div>
                        <div class="pk-feat-card-plus">+</div>
                    </div>
                    <div class="pk-feat-card">
                        <img src="https://mitraoke.com/img/gallery/Media.jpg" alt="Streaming">
                        <div class="pk-feat-card-body">
                            <div class="badge">Streaming & Recording</div>
                            <h4>Live ke 2 platform sekaligus.</h4>
                        </div>
                        <div class="pk-feat-card-plus">+</div>
                    </div>
                    <div class="pk-feat-card">
                        <img src="https://mitraoke.com/img/gallery/rbs.jpg" alt="TKDN">
                        <div class="pk-feat-card-body">
                            <div class="badge">Sertifikasi TKDN</div>
                            <h4>Terdaftar E-Katalog. Siap pengadaan pemerintah.</h4>
                        </div>
                        <div class="pk-feat-card-plus">+</div>
                    </div>
                    <div class="pk-feat-card">
                        <img src="https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=400&q=80" alt="ATK Lengkap">
                        <div class="pk-feat-card-body">
                            <div class="badge">ATK Perkantoran</div>
                            <h4>Semua kebutuhan kantor dalam satu sumber.</h4>
                        </div>
                        <div class="pk-feat-card-plus">+</div>
                    </div>
                    <div class="pk-feat-card">
                        <img src="https://mitraoke.com/img/gallery/Aten.jpg" alt="Privasi Data">
                        <div class="pk-feat-card-body">
                            <div class="badge">Keamanan Jaringan</div>
                            <h4>Infrastruktur IT yang aman dan andal.</h4>
                        </div>
                        <div class="pk-feat-card-plus">+</div>
                    </div>
                </div>
            </div>
            <div class="pk-feat-nav">
                <button id="featPrev">&#8249;</button>
                <button id="featNext">&#8250;</button>
            </div>
        </div>
    </div>

    {{-- ── YANG PENTING ── --}}
    <div class="pk-accessories-wrap">
        <div class="pk-accessories-inner">
            <h2 class="pk-section-title">Yang penting untuk kantor Anda.</h2>
            <div class="pk-acc-grid">
                <div class="pk-acc-card">
                    <h3>Aksesoris & Kabel</h3>
                    <p>Lengkapi setup kantor Anda dengan kabel HDMI, USB-C, adaptor, dan aksesoris lainnya.</p>
                    <img class="pk-acc-img" src="https://mitraoke.com/img/gallery/hdmi.jpg" alt="Kabel & Aksesoris">
                </div>
                <div class="pk-acc-card">
                    <h3>Manajemen Daya</h3>
                    <p>PDU & UPS ATEN untuk keandalan daya perangkat kantor Anda sepanjang waktu.</p>
                    <img class="pk-acc-img" src="https://mitraoke.com/img/gallery/pdu.jpg" alt="PDU ATEN">
                </div>
            </div>
        </div>
    </div>

    {{-- ── PASANGAN SEMPURNA (ACCORDION) ── --}}
    <div class="pk-accordion-wrap">
        <div style="max-width:1080px;margin:0 auto;padding:0 0 8px;">
            <h2 class="pk-section-title">Pasangan sempurna.</h2>
        </div>
        <div class="pk-accordion-inner">
            <div class="pk-accordion-items" id="accordionList">

                <div class="pk-accordion-item open">
                    <div class="pk-accordion-trigger">
                        <h4>Peralatan Kantor dan AREC LS-300</h4>
                        <span>+</span>
                    </div>
                    <div class="pk-accordion-body" style="max-height:200px">
                        <p>Padukan kamera IPEVO dengan AREC LS-300 untuk pengalaman rapat hybrid yang mulus. Rekam dan streaming ke YouTube atau platform lain langsung dari ruang rapat Anda — tanpa laptop tambahan.</p>
                    </div>
                </div>

                <div class="pk-accordion-item">
                    <div class="pk-accordion-trigger">
                        <h4>Peralatan Kantor dan ATEN Control</h4>
                        <span>+</span>
                    </div>
                    <div class="pk-accordion-body">
                        <p>Integrasikan semua perangkat — lampu, layar, kamera, mikrofon — dalam satu sistem kontrol ATEN. Cukup tekan satu tombol untuk mengatur seluruh ruangan.</p>
                    </div>
                </div>

                <div class="pk-accordion-item">
                    <div class="pk-accordion-trigger">
                        <h4>Peralatan Kantor dan Wharfedale</h4>
                        <span>+</span>
                    </div>
                    <div class="pk-accordion-body">
                        <p>Sistem mikrofon wireless Wharfedale bekerja sempurna dengan kamera dan media station MitraOKE untuk audio jernih di setiap sesi presentasi.</p>
                    </div>
                </div>

            </div>

            <div class="pk-accordion-preview">
                <img id="accordionImg"
                    src="https://mitraoke.com/img/gallery/Media.jpg"
                    alt="Preview">
            </div>
        </div>
    </div>

    {{-- ── SITEMAP ── --}}
    <div class="pk-sitemap">
        <div class="pk-sitemap-inner">
            <h2>Peralatan Kantor</h2>
            <div class="pk-sitemap-grid">
                <div class="pk-sitemap-col">
                    <h5>Jelajahi Produk</h5>
                    <ul>
                        <li><a href="#">Semua Produk</a></li>
                        <li><a href="#">ATEN Control System</a></li>
                        <li><a href="#">AREC Media Station</a></li>
                        <li><a href="#">IPEVO Camera</a></li>
                        <li><a href="#">Wharfedale Audio</a></li>
                        <li><a href="#">ATK Perkantoran</a></li>
                        <li><a href="#">Bandingkan Produk</a></li>
                    </ul>
                </div>
                <div class="pk-sitemap-col">
                    <h5>Lainnya</h5>
                    <ul>
                        <li><a href="https://mitraoke.com/" target="_blank">Dukungan MitraOKE</a></li>
                        <li><a href="https://mitraoke.com/index.html" target="_blank">E-Katalog Resmi</a></li>
                        <li><a href="https://www.mbizmarket.co.id/p/mitracom" target="_blank">Mbizmarket</a></li>
                        <li><a href="https://mitraoke.com/contact.html" target="_blank">Konsultasi Gratis</a></li>
                        <li><a href="https://mitraoke.com/" target="_blank">Pengadaan Pemerintah</a></li>
                    </ul>
                </div>
                <div class="pk-sitemap-col">
                    <h5>Tentang MitraOKE</h5>
                    <ul>
                        <li><a href="https://mitraoke.com/" target="_blank">Tentang Kami</a></li>
                        <li><a href="https://wa.me/6281252141397" target="_blank">Hubungi Kami</a></li>
                        <li><a href="https://mitraoke.com/services.html" target="_blank">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')

</div>

@endsection

@push('scripts')
<script>
// ── Accordion ──
const accordionImgMap = [
    'https://mitraoke.com/img/gallery/Media.jpg',
    'https://mitraoke.com/img/gallery/aten.png',
    'https://mitraoke.com/img/gallery/microphone.webp',
];
document.querySelectorAll('.pk-accordion-item').forEach((item, i) => {
    item.querySelector('.pk-accordion-trigger').addEventListener('click', () => {
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.pk-accordion-item').forEach(el => {
            el.classList.remove('open');
            el.querySelector('.pk-accordion-body').style.maxHeight = '0';
        });
        if (!isOpen) {
            item.classList.add('open');
            item.querySelector('.pk-accordion-body').style.maxHeight = '200px';
            document.getElementById('accordionImg').src = accordionImgMap[i] || accordionImgMap[0];
        }
    });
});

// ── Feature cards nav ──
const featWrap = document.querySelector('.pk-features-track-wrap');
document.getElementById('featNext').addEventListener('click', () => {
    featWrap.scrollBy({ left: 220, behavior: 'smooth' });
});
document.getElementById('featPrev').addEventListener('click', () => {
    featWrap.scrollBy({ left: -220, behavior: 'smooth' });
});
</script>
@endpush
