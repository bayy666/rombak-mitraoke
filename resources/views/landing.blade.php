<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mitra Oke — Peralatan Kantor Premium</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
/* reset & dasar */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; font-size: 16px; }
body {
    font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, sans-serif;
    background: #f8f8f8;
    color: #1a1a1a;
    -webkit-font-smoothing: antialiased;
    overflow-x: hidden;
}
a { text-decoration: none; color: inherit; }
img { display: block; max-width: 100%; }
ul { list-style: none; }

/* utilitas */
.container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }

/* animasi fade-up */
.reveal {
    opacity: 0;
    transform: translateY(32px);
    transition: opacity 0.6s cubic-bezier(.4,0,.2,1), transform 0.6s cubic-bezier(.4,0,.2,1);
}
.reveal.visible { opacity: 1; transform: translateY(0); }
.reveal-d1 { transition-delay: 0.05s; }
.reveal-d2 { transition-delay: 0.12s; }
.reveal-d3 { transition-delay: 0.19s; }
.reveal-d4 { transition-delay: 0.26s; }
.reveal-d5 { transition-delay: 0.33s; }
.reveal-d6 { transition-delay: 0.40s; }

/* navbar */
.navbar-wrap {
    position: fixed;
    inset: 0 0 auto 0;
    z-index: 9999;
    padding: 18px 24px;
    display: flex;
    justify-content: center;
    pointer-events: none;
}
.navbar {
    pointer-events: auto;
    display: flex;
    align-items: center;
    background: rgba(255,255,255,0.88);
    backdrop-filter: saturate(200%) blur(24px);
    -webkit-backdrop-filter: saturate(200%) blur(24px);
    border: 1px solid rgba(0,0,0,0.08);
    border-radius: 980px;
    padding: 6px 6px 6px 6px;
    height: 52px;
    max-width: 860px;
    width: 100%;
    gap: 4px;
    transition: box-shadow 0.3s;
    box-shadow: 0 4px 24px rgba(0,0,0,0.08);
}
.navbar.scrolled {
    box-shadow: 0 8px 40px rgba(0,0,0,0.13);
    background: rgba(255,255,255,0.97);
}
.navbar-left-links,
.navbar-right-links {
    display: flex; gap: 2px; align-items: center; flex: 1;
}
.navbar-right-links { justify-content: flex-end; }
.navbar-logo {
    padding: 0 16px; flex-shrink: 0;
    display: flex; align-items: center;
    text-decoration: none;
}
.navbar-logo img {
    height: 52px; width: auto;
    display: block; object-fit: contain;
}
.navbar-left-links li a,
.navbar-right-links li a {
    display: block; padding: 7px 14px;
    font-size: 13px; font-weight: 500;
    color: #555;
    border-radius: 980px;
    transition: background 0.15s, color 0.15s;
    white-space: nowrap;
}
.navbar-left-links li a:hover,
.navbar-right-links li a:hover,
.navbar-left-links li a.active,
.navbar-right-links li a.active {
    background: rgba(0,0,0,0.05);
    color: #111;
}
.navbar-cta {
    display: inline-flex; align-items: center;
    background: #e63946; color: #fff;
    font-size: 12px; font-weight: 700;
    padding: 8px 20px; border-radius: 980px;
    transition: background 0.2s, transform 0.15s;
    white-space: nowrap; flex-shrink: 0;
    margin-left: 4px;
}
.navbar-cta:hover { background: rgba(193,18,31,0.65); transform: scale(1.03); }

/* hero */
@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-14px); }
}
@keyframes blink {
    0%, 100% { opacity: 1; } 50% { opacity: 0.3; }
}
@keyframes spin-slow {
    from { transform: rotate(0deg); }
    to   { transform: rotate(360deg); }
}
.hero {
    min-height: 100vh;
    padding-top: 88px;
    overflow: hidden;
    position: relative;
    display: flex;
    align-items: center;
}
.hero-inner {
    position: relative;
    width: 100%;
    padding: 32px 0 56px;
}
.hero-headline {
    text-align: center;
    position: relative;
    z-index: 2;
}
.hero-headline h1 {
    font-size: clamp(2.6rem, 6vw, 5.2rem);
    font-weight: 900;
    letter-spacing: -0.04em;
    line-height: 1.02;
    color: #111;
}
.hero-headline h1 em { font-style: normal; color: #e63946; }

/* baris tengah */
.hero-mid {
    position: relative;
    max-width: 900px;
    margin: -16px auto -16px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.hero-info-left {
    position: absolute; left: 0; top: 50%;
    transform: translateY(-50%);
    max-width: 210px;
    z-index: 3;
}
.hero-info-left p {
    font-size: 13px; color: #777;
    line-height: 1.7;
}
.hero-info-right {
    position: absolute; right: 0; top: 50%;
    transform: translateY(-50%);
    text-align: right;
    z-index: 3;
}
.hero-years { display: inline-flex; flex-direction: column; align-items: flex-end; }
.hero-years .stars { color: #fbbf24; font-size: 14px; letter-spacing: 3px; margin-bottom: 2px; }
.hero-years strong { font-size: 2.2rem; font-weight: 900; color: #111; line-height: 1; letter-spacing: -0.04em; display: block; }
.hero-years small { font-size: 12px; color: #999; margin-top: 2px; }

/* slider hero */
.hero-center { display: flex; justify-content: center; align-items: center; }
.hero-slider-wrap {
    position: relative;
    width: 360px;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 14px;
}
.hero-slider {
    width: 360px; height: 360px;
    position: relative;
    overflow: hidden;
    background: transparent;
}
.hero-slide {
    position: absolute; inset: 0;
    opacity: 0;
    transition: opacity 0.6s ease;
}
.hero-slide.active { opacity: 1; }
.hero-slide img {
    position: absolute; inset: 0;
    width: 100%; height: 100%;
    object-fit: contain;
    padding: 24px;
    box-sizing: border-box;
    mix-blend-mode: multiply;
}
.hero-slide-jogja img,
.hero-slide-malang img {
    filter: brightness(1.05) contrast(1.05);
}

/* dekorasi bintang */
.asterisk {
    display: inline-block; line-height: 1;
    color: #e63946; user-select: none;
    animation: spin-slow 9s linear infinite;
}
.asterisk-lg { font-size: 2.8rem; }
.asterisk-sm { font-size: 1.2rem; }
.hero-deco {
    position: absolute; z-index: 4;
}
.hero-deco-tl { top: 18px;  left: 0; }
.hero-deco-tr { top: 18px;  right: 0; }
.hero-deco-bl { bottom: 20px; left: 20px; }
.hero-deco-br { bottom: 20px; right: 20px; }

/* tombol CTA */
.hero-bottom {
    display: flex; justify-content: center;
    align-items: center; gap: 12px;
    margin-top: 40px; flex-wrap: wrap;
}
.btn-hero-primary {
    display: inline-flex; align-items: center; gap: 8px;
    background: #e63946; color: #fff;
    font-size: 14px; font-weight: 700;
    padding: 14px 28px; border-radius: 980px;
    transition: transform 0.2s, box-shadow 0.2s;
    box-shadow: 0 4px 24px rgba(230,57,70,0.28);
}
.btn-hero-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 36px rgba(230,57,70,0.38);
    background: #c1121f;
}
.btn-hero-secondary {
    display: inline-flex; align-items: center; gap: 8px;
    background: #fff;
    border: 1.5px solid rgba(0,0,0,0.12);
    color: #333;
    font-size: 14px; font-weight: 600;
    padding: 14px 28px; border-radius: 980px;
    transition: background 0.2s, border-color 0.2s, transform 0.2s;
    box-shadow: 0 2px 12px rgba(0,0,0,0.06);
}
.btn-hero-secondary:hover {
    background: #f8f8f8;
    border-color: rgba(0,0,0,0.18);
    transform: translateY(-1px);
}
@media (max-width: 900px) {
    .hero-info-left, .hero-info-right,
    .hero-deco-tl, .hero-deco-tr,
    .hero-deco-bl, .hero-deco-br { display: none; }
    .hero-slider, .hero-slider-wrap { width: 260px !important; }
    .hero-slider { height: 260px !important; }
    .hero-headline h1 { font-size: clamp(2rem, 7vw, 3.2rem); }
}

/* bar fitur */
.features-bar {
    background: #fff;
    border-top: 1px solid #f0f0f0;
    border-bottom: 1px solid #f0f0f0;
    padding: 0;
}
.features-bar-inner {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}
@media (max-width: 640px) { .features-bar-inner { flex-direction: column; } }
.feature-item {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 22px 36px;
    border-right: 1px solid #f0f0f0;
}
.feature-item:last-child { border-right: none; }
.feature-icon {
    width: 44px; height: 44px; flex-shrink: 0;
    background: #f8f8f8;
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    font-size: 22px;
}
.feature-text h5 { font-size: 13px; font-weight: 700; color: #111; }
.feature-text p { font-size: 11px; color: #999; margin-top: 2px; line-height: 1.4; }

/* judul section */
.section-heading {
    text-align: center;
    margin-bottom: 48px;
}
.section-pill {
    display: inline-block;
    background: rgba(230,57,70,0.07);
    color: #e63946;
    font-size: 11px; font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    padding: 5px 14px;
    border-radius: 980px;
    margin-bottom: 12px;
}
.section-title {
    font-size: clamp(1.8rem, 3vw, 2.6rem);
    font-weight: 800;
    letter-spacing: -0.03em;
    color: #111;
    margin-bottom: 10px;
}
.section-sub {
    font-size: 15px;
    color: #888;
    max-width: 520px;
    margin: 0 auto;
    line-height: 1.6;
}

/* grid kategori */
.categories-section { padding: 80px 0; background: #f8f8f8; }
.categories-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
}
@media (max-width: 900px) { .categories-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 500px)  { .categories-grid { grid-template-columns: 1fr; } }

.cat-card {
    border-radius: 24px;
    overflow: hidden;
    min-height: 320px;
    display: flex;
    flex-direction: column;
    position: relative;
    cursor: pointer;
    transition: transform 0.35s cubic-bezier(.4,0,.2,1),
                box-shadow 0.35s cubic-bezier(.4,0,.2,1);
    box-shadow: 0 4px 20px rgba(0,0,0,0.10);
}
.cat-card:hover {
    transform: translateY(-8px) scale(1.01);
    box-shadow: 0 24px 56px rgba(0,0,0,0.18);
}
.cat-card--red    { background: linear-gradient(135deg, #e63946 0%, #c1121f 100%); color: #fff; }
.cat-card--yellow { background: linear-gradient(135deg, #ffbe0b 0%, #fb5607 100%); color: #fff; }
.cat-card--blue   { background: linear-gradient(135deg, #3a86ff 0%, #0043ce 100%); color: #fff; }
.cat-card--green  { background: linear-gradient(135deg, #4cc9f0 0%, #4361ee 100%); color: #fff; }
.cat-card--dark   { background: linear-gradient(135deg, #2b2d42 0%, #1a1a2e 100%); color: #fff; }
.cat-card--purple { background: linear-gradient(135deg, #7b2d8b 0%, #560bad 100%); color: #fff; }

/* foto mengisi seluruh kartu */
.cat-img-wrap {
    position: absolute;
    inset: 0;
    z-index: 1;
}
.cat-img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: center bottom;
    padding: 24px 16px 0;
    filter: drop-shadow(0 -4px 24px rgba(0,0,0,0.15));
    transition: transform 0.5s cubic-bezier(.4,0,.2,1);
}
.cat-img[src=""] { display: none; }
.cat-card:hover .cat-img { transform: scale(1.08) translateY(-6px); }

/* overlay gradient bawah untuk teks */
.cat-card-text {
    position: relative;
    z-index: 2;
    margin-top: auto;
    padding: 80px 22px 22px;
    background: linear-gradient(to top, rgba(0,0,0,0.55) 0%, transparent 100%);
}
.cat-label {
    font-size: 10px; font-weight: 700;
    letter-spacing: 0.1em; text-transform: uppercase;
    opacity: 0.85; margin-bottom: 4px;
}
.cat-title {
    font-size: clamp(1.1rem, 1.8vw, 1.4rem);
    font-weight: 800;
    letter-spacing: -0.02em;
    line-height: 1.2;
    margin-bottom: 12px;
}
.btn-browse {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(255,255,255,0.22);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255,255,255,0.35);
    color: #fff;
    font-size: 11px; font-weight: 600;
    padding: 6px 14px;
    border-radius: 980px;
    width: fit-content;
    transition: background 0.2s;
}
.btn-browse:hover { background: rgba(255,255,255,0.42); }

/* testimoni */
.testimonials-section { padding: 80px 0; background: #fff; }
.testimonials-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 40px;
    flex-wrap: wrap;
    gap: 20px;
}
.testimonials-eyebrow {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #999;
    margin-bottom: 10px;
}
.testimonials-title {
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 800;
    letter-spacing: -0.04em;
    line-height: 1.1;
    color: #111;
}
.testimonials-title span { color: #bbb; font-weight: 400; }
.testimonials-nav { display: flex; gap: 10px; align-items: center; padding-top: 8px; flex-shrink: 0; }
.testi-nav-btn {
    width: 50px; height: 50px;
    border-radius: 50%;
    background: #888;
    border: none; cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    color: #fff; font-size: 20px;
    transition: background 0.2s, transform 0.2s;
    flex-shrink: 0;
}
.testi-nav-btn:hover { background: rgba(192,57,43,0.65); transform: scale(1.05); }
/* slider 3 kartu */
.testimonials-track-wrap {
    overflow: hidden;
    cursor: grab;
    user-select: none;
}
.testimonials-track-wrap:active { cursor: grabbing; }
.testimonials-track {
    display: flex;
    gap: 24px;
    transition: transform 0.5s cubic-bezier(.4,0,.2,1);
    will-change: transform;
}
.testi-card {
    background: #f5f5f7;
    border-radius: 20px;
    padding: 32px;
    /* 3 cards with 2x24px gap: (100% - 48px) / 3 */
    min-width: calc(33.333% - 16px);
    width: calc(33.333% - 16px);
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-sizing: border-box;
    min-height: 400px;
}
@media (max-width: 1024px) {
    .testi-card { min-width: calc(50% - 12px); width: calc(50% - 12px); }
}
@media (max-width: 640px) {
    .testi-card { min-width: 100%; width: 100%; }
}
.testi-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 28px;
}
.testi-avatar {
    width: 60px; height: 60px;
    border-radius: 50%;
    object-fit: cover;
    flex-shrink: 0;
    display: block;
    background: transparent;
}
.testi-company-badge {
    display: flex; align-items: center; gap: 8px;
    border: 1.5px solid #ddd;
    border-radius: 980px;
    padding: 7px 16px 7px 10px;
    font-size: 12px; font-weight: 700; color: #333;
    background: #fff;
    white-space: nowrap;
}
.testi-badge-icon {
    width: 24px; height: 24px;
    border-radius: 50%;
    background: #111;
    color: #fff;
    font-size: 11px; font-weight: 800;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
    text-transform: uppercase;
    letter-spacing: 0;
}
.testi-quote-mark {
    font-size: 44px;
    color: #4361ee;
    line-height: 1;
    font-family: Georgia, serif;
    margin-bottom: 16px;
    display: block;
}
.testi-text {
    font-size: clamp(16px, 1.6vw, 20px);
    font-weight: 700;
    line-height: 1.5;
    color: #111;
    margin-bottom: 32px;
}
.testi-footer {
    border-left: 3px solid #cdcdcd;
    padding-left: 14px;
    margin-top: auto;
}
.testi-name { font-size: 14px; font-weight: 700; color: #111; }
.testi-role { font-size: 12px; color: #999; margin-top: 3px; line-height: 1.4; }
/* indikator titik */
.testi-dots {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 28px;
}
.testi-dot {
    width: 8px; height: 8px;
    border-radius: 50%;
    background: #ddd;
    border: none; cursor: pointer;
    padding: 0;
    transition: background 0.25s, transform 0.25s;
    flex-shrink: 0;
}
.testi-dot.active { background: #111; transform: scale(1.3); }
.testi-dot:hover { background: #aaa; }

.product-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid #f0f0f0;
    cursor: pointer;
    transition: transform 0.3s cubic-bezier(.4,0,.2,1),
                box-shadow 0.3s cubic-bezier(.4,0,.2,1),
                border-color 0.3s;
}
.product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 56px rgba(0,0,0,0.10);
    border-color: transparent;
}
.product-img-wrap {
    background: #f8f8f8;
    position: relative;
    aspect-ratio: 1;
    overflow: hidden;
}
.product-img-wrap img {
    width: 100%; height: 100%;
    object-fit: contain;
    padding: 20px;
    transition: transform 0.4s cubic-bezier(.4,0,.2,1);
}
.product-card:hover .product-img-wrap img { transform: scale(1.06); }
.product-badge {
    position: absolute;
    top: 12px; left: 12px;
    font-size: 10px; font-weight: 700;
    padding: 4px 10px; border-radius: 980px;
    letter-spacing: 0.04em; text-transform: uppercase;
}
.badge-bestseller { background: #111; color: #fff; }
.badge-sale       { background: #e63946; color: #fff; }
.badge-new        { background: #4cc9f0; color: #fff; }
.badge-hot        { background: #fb5607; color: #fff; }
.product-body { padding: 16px 18px 20px; }
.product-category {
    font-size: 11px; font-weight: 600;
    color: #aaa; text-transform: uppercase;
    letter-spacing: 0.05em; margin-bottom: 4px;
}
.product-name {
    font-size: 14px; font-weight: 700;
    color: #111; line-height: 1.35;
    margin-bottom: 10px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.product-price-row {
    display: flex; align-items: center; justify-content: space-between;
    margin-top: 14px;
}
.product-price {
    font-size: 17px; font-weight: 800;
    color: #111; letter-spacing: -0.02em;
}
.product-price-old {
    font-size: 12px; color: #bbb;
    text-decoration: line-through;
    margin-left: 6px;
    font-weight: 400;
}
.product-price-wrap { display: flex; align-items: baseline; gap: 4px; }
.btn-add-cart {
    width: 36px; height: 36px;
    border-radius: 10px;
    background: #111;
    border: none; cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    color: #fff; font-size: 18px;
    transition: background 0.2s, transform 0.2s;
    flex-shrink: 0;
}
.btn-add-cart:hover { background: rgba(230,57,70,0.65); transform: scale(1.08); }
.product-rating {
    display: flex; align-items: center; gap: 4px;
    margin-bottom: 2px;
}
.stars { color: #fbbf24; font-size: 12px; letter-spacing: 1px; }
.review-count { font-size: 11px; color: #bbb; }

/* blog */
.blog-section { padding: 96px 0; background: #f8f8f8; }
.blog-header {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 24px;
    margin-bottom: 48px;
    flex-wrap: wrap;
}
.blog-header-left .blog-eyebrow {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #999;
    margin-bottom: 10px;
}
.blog-header-left h2 {
    font-size: clamp(1.8rem, 3.2vw, 2.4rem);
    font-weight: 800;
    letter-spacing: -0.04em;
    color: #111;
    margin-bottom: 0;
    line-height: 1.15;
}
.btn-blog-all {
    display: inline-flex; align-items: center; gap: 8px;
    background: #888;
    color: #fff;{{--    --}}
    font-size: 13px; font-weight: 700;
    padding: 12px 22px;
    border-radius: 980px;
    white-space: nowrap;
    flex-shrink: 0;
    align-self: flex-end;
    letter-spacing: 0.01em;
    transition: background 0.2s, transform 0.2s;
}
.btn-blog-all svg { transition: transform 0.2s; }
.btn-blog-all:hover { background: rgba(192,57,43,0.65); transform: translateY(-2px); }
.btn-blog-all:hover svg { transform: translateX(3px); }
/* grid blog */
.blog-grid {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 28px;
    align-items: stretch;
}
@media (max-width: 900px) { .blog-grid { grid-template-columns: 1fr; } }
/* kartu utama */
.blog-featured {
    display: flex;
    flex-direction: column;
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    transition: box-shadow 0.3s, transform 0.3s;
    color: inherit;
}
.blog-featured:hover {
    box-shadow: 0 16px 56px rgba(0,0,0,0.10);
    transform: translateY(-4px);
}
.blog-featured-img {
    width: 100%;
    aspect-ratio: 16/10;
    overflow: hidden;
    position: relative;
    flex-shrink: 0;
}
.blog-featured-img img {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.5s cubic-bezier(.4,0,.2,1);
}
.blog-featured:hover .blog-featured-img img { transform: scale(1.04); }
.blog-cat-pill {
    position: absolute;
    top: 14px; left: 14px;
    background: #111;
    color: #fff;
    font-size: 10px; font-weight: 700;
    letter-spacing: 0.08em; text-transform: uppercase;
    padding: 5px 12px;
    border-radius: 980px;
    pointer-events: none;
}
.blog-featured-body {
    padding: 28px 28px 24px;
    display: flex;
    flex-direction: column;
    flex: 1;
}
.blog-featured-title {
    font-size: clamp(17px, 1.8vw, 21px);
    font-weight: 800;
    letter-spacing: -0.03em;
    color: #111;
    line-height: 1.35;
    margin-bottom: 10px;
}
.blog-featured-excerpt {
    font-size: 13px;
    color: #888;
    line-height: 1.7;
    margin-bottom: 24px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    flex: 1;
}
.blog-featured-meta {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    padding-top: 16px;
    border-top: 1px solid #f0f0f0;
}
.blog-meta-author { display: flex; align-items: center; gap: 8px; }
.blog-author-avatar {
    width: 30px; height: 30px;
    border-radius: 50%;
    object-fit: cover;
    flex-shrink: 0;
}
.blog-author-name { font-size: 12px; font-weight: 600; color: #555; }
.blog-date { font-size: 11px; color: #bbb; font-weight: 500; }
/* daftar artikel */
.blog-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
    height: 100%;
}
.blog-list-item {
    display: flex;
    flex: 1;
    gap: 16px;
    align-items: center;
    padding: 16px;
    background: #fff;
    border-radius: 14px;
    cursor: pointer;
    transition: box-shadow 0.25s, transform 0.25s;
    color: inherit;
}
.blog-list-item:hover {
    box-shadow: 0 8px 32px rgba(0,0,0,0.08);
    transform: translateY(-2px);
}
.blog-list-thumb {
    width: 100px;
    height: 72px;
    border-radius: 10px;
    overflow: hidden;
    flex-shrink: 0;
}
.blog-list-thumb img {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.4s cubic-bezier(.4,0,.2,1);
}
.blog-list-item:hover .blog-list-thumb img { transform: scale(1.08); }
.blog-list-body { flex: 1; display: flex; flex-direction: column; gap: 8px; }
.blog-list-cat {
    font-size: 10px; font-weight: 700;
    letter-spacing: 0.08em; text-transform: uppercase;
    color: #e63946;
}
.blog-list-title {
    font-size: 13px;
    font-weight: 700;
    color: #111;
    line-height: 1.45;
    letter-spacing: -0.01em;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.blog-list-author { font-size: 11px; color: #bbb; font-weight: 500; }

/* newsletter */
.newsletter-section {
    padding: 80px 0;
    background: #fff;
    border-bottom: 1px solid #ebebeb;
}
.newsletter-card {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 48px;
    flex-wrap: wrap;
    position: relative;
    background: #111;
    border-radius: 28px;
    padding: 56px 52px;
    overflow: hidden;
    box-shadow: 0 24px 64px rgba(0,0,0,0.14);
}
.newsletter-card::after {
    content: 'TKDN';
    position: absolute;
    right: -10px; top: 50%;
    transform: translateY(-50%);
    font-size: clamp(80px, 12vw, 140px);
    font-weight: 900;
    letter-spacing: -0.06em;
    color: rgba(255,255,255,0.04);
    pointer-events: none;
    user-select: none;
    line-height: 1;
}
.newsletter-text {
    flex: 1;
    min-width: 280px;
}
.newsletter-eyebrow {
    display: inline-block;
    font-size: 11px; font-weight: 700;
    letter-spacing: 0.12em; text-transform: uppercase;
    color: #e63946;
    margin-bottom: 14px;
}
.newsletter-text h3 {
    font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 900; color: #fff;
    letter-spacing: -0.04em;
    line-height: 1.1;
    margin-bottom: 12px;
}
.newsletter-text h3 em {
    font-style: normal;
    color: #e63946;
}
.newsletter-text p {
    font-size: 14px;
    color: rgba(255,255,255,0.45);
    line-height: 1.65;
    max-width: 420px;
}
.newsletter-form {
    display: flex;
    flex-direction: column;
    gap: 12px;
    flex-shrink: 0;
    width: 340px;
}
@media (max-width: 700px) { .newsletter-form { width: 100%; } }
.newsletter-input {
    padding: 15px 20px;
    border-radius: 14px;
    border: 1px solid rgba(255,255,255,0.1);
    background: rgba(255,255,255,0.06);
    color: #fff;
    font-size: 14px; font-family: inherit;
    outline: none;
    transition: border-color 0.2s, background 0.2s;
}
.newsletter-input::placeholder { color: rgba(255,255,255,0.3); }
.newsletter-input:focus {
    border-color: #e63946;
    background: rgba(255,255,255,0.09);
}
.btn-subscribe {
    padding: 15px 28px;
    border-radius: 14px;
    background: #e63946; color: #fff;
    font-size: 14px; font-weight: 700;
    border: none; cursor: pointer; font-family: inherit;
    display: flex; align-items: center; justify-content: center; gap: 8px;
    transition: background 0.2s, transform 0.2s;
    letter-spacing: -0.01em;
}
.btn-subscribe:hover { background: rgba(193,18,31,0.65); transform: translateY(-2px); }
.newsletter-note {
    font-size: 11px;
    color: rgba(255,255,255,0.25);
    text-align: center;
}

/* footer */
.footer {
    background: #1a1a1a;
    color: rgba(255,255,255,0.65);
    padding: 64px 0 32px;
    border-top: 3px solid #e63946;
}
.footer-grid {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1fr;
    gap: 40px;
    margin-bottom: 56px;
}
.footer-brand p { font-size: 13px; line-height: 1.65; max-width: 300px; margin-bottom: 24px; }
.footer-logo-wrap {
    display: inline-flex;
    align-items: center;
    margin-bottom: 20px;
}
.footer-logo-wrap img {
    height: 40px; width: auto;
    display: block; object-fit: contain;
    filter: invert(1) hue-rotate(180deg);
}
.footer-social { display: flex; gap: 10px; }
.social-btn {
    width: 38px; height: 38px;
    border-radius: 10px;
    background: rgba(255,255,255,0.07);
    border: 1px solid rgba(255,255,255,0.1);
    display: flex; align-items: center; justify-content: center;
    font-size: 16px; color: rgba(255,255,255,0.7);
    cursor: pointer;
    transition: background 0.2s, color 0.2s;
}
.social-btn:hover { background: rgba(230,57,70,0.65); color: #fff; border-color: transparent; }
.footer-col h5 {
    font-size: 13px; font-weight: 700;
    color: #fff; margin-bottom: 18px;
    letter-spacing: 0.01em;
}
.footer-col ul li { margin-bottom: 10px; }
.footer-col ul li a { font-size: 13px; color: rgba(255,255,255,0.55); transition: color 0.15s; }
.footer-col ul li a:hover { color: #fff; }
.footer-bottom {
    padding-top: 28px;
    border-top: 1px solid rgba(255,255,255,0.08);
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 12px;
}
.footer-bottom p { font-size: 12px; }
.footer-bottom-links { display: flex; gap: 20px; }
.footer-bottom-links a { font-size: 12px; color: rgba(255,255,255,0.4); transition: color 0.15s; }
.footer-bottom-links a:hover { color: #fff; }

/* hamburger & menu mobile */
.nav-hamburger {
    display: none;
    background: none;
    border: none;
    cursor: pointer;
    padding: 6px;
    flex-direction: column;
    gap: 5px;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    transition: background 0.2s;
    flex-shrink: 0;
}
.nav-hamburger:hover { background: rgba(0,0,0,0.06); }
.nav-hamburger span {
    display: block;
    width: 22px; height: 2px;
    background: #111;
    border-radius: 2px;
    transition: transform 0.3s, opacity 0.3s;
    transform-origin: center;
}
.nav-hamburger.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
.nav-hamburger.open span:nth-child(2) { opacity: 0; }
.nav-hamburger.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

.nav-mobile-menu {
    display: none;
    position: fixed;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(255,255,255,0.98);
    backdrop-filter: blur(20px);
    z-index: 9998;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 0;
    padding: 80px 24px 40px;
    overflow-y: auto;
}
.nav-mobile-menu.open { display: flex; }
.nav-mobile-menu a {
    display: block;
    width: 100%;
    text-align: center;
    padding: 16px 20px;
    font-size: 22px;
    font-weight: 700;
    color: #111;
    border-bottom: 1px solid #f0f0f0;
    letter-spacing: -0.02em;
    transition: color 0.15s;
}
.nav-mobile-menu a:last-child { border-bottom: none; }
.nav-mobile-menu a:hover { color: #e63946; }
.nav-mobile-cta {
    margin-top: 24px;
    display: inline-flex;
    align-items: center;
    background: #e63946;
    color: #fff !important;
    border-radius: 980px;
    padding: 14px 36px !important;
    font-size: 16px !important;
    border-bottom: none !important;
    width: auto !important;
}

/* responsif mobile */
@media (max-width: 768px) {
    /* Container */
    .container { padding: 0 16px; }

    /* Navbar */
    .navbar-wrap { padding: 12px 16px; }
    .navbar {
        max-width: 100%;
        border-radius: 16px;
        height: 52px;
        padding: 6px 10px;
        justify-content: space-between;
    }
    .navbar-left-links,
    .navbar-right-links,
    .navbar-cta { display: none !important; }
    .nav-hamburger { display: flex; }
    .navbar-logo { padding: 0 8px; }

    /* Hero */
    .hero { padding-top: 72px; min-height: 100svh; }
    .hero-inner {
        padding: 32px 0 52px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0;
    }
    /* Urutan konten yang logis: judul 1 → judul 2 → gambar → deskripsi → tombol */
    .hero-inner > .hero-headline:nth-child(1) { order: 1; width: 100%; }
    .hero-inner > .hero-headline:nth-child(3) { order: 2; width: 100%; margin-bottom: 24px; }
    .hero-inner > .hero-mid              { order: 3; }
    .hero-inner > .hero-bottom           { order: 4; }
    .hero-headline h1 {
        font-size: clamp(2rem, 8vw, 2.8rem);
        line-height: 1.06;
        margin-bottom: 2px;
    }
    /* Dekorasi bintang animasi disembunyikan */
    .hero-deco-tl, .hero-deco-tr,
    .hero-deco-bl, .hero-deco-br { display: none !important; }
    /* Hero-mid jadi kolom: gambar di atas, deskripsi di bawah */
    .hero-mid {
        max-width: 100%;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0;
    }
    .hero-center { order: 1; }
    /* Tampilkan deskripsi perusahaan di mobile (sebelumnya hidden) */
    .hero-info-left {
        order: 2;
        position: static !important;
        transform: none !important;
        max-width: 100%;
        text-align: center;
        display: block !important;
        margin-top: 16px;
        padding: 0 12px;
    }
    .hero-info-left p { font-size: 14px; color: #666; }
    .hero-info-right { display: none !important; }
    /* Gambar slider ukuran layak */
    .hero-slider-wrap, .hero-slider {
        width: 280px !important;
        height: 280px !important;
    }
    /* Tombol CTA full-width agar mudah dipencet */
    .hero-bottom {
        margin-top: 32px;
        gap: 12px;
        width: 100%;
        flex-direction: column;
        align-items: stretch;
    }
    .btn-hero-primary, .btn-hero-secondary {
        width: 100%;
        justify-content: center;
        font-size: 15px;
        padding: 15px 20px;
    }

    /* Features bar */
    .features-bar-inner { flex-direction: column; }
    .feature-item {
        padding: 16px 20px;
        border-right: none;
        border-bottom: 1px solid #f0f0f0;
    }
    .feature-item:last-child { border-bottom: none; }

    /* Section heading */
    .section-heading { margin-bottom: 32px; }
    .section-title { font-size: clamp(1.5rem, 6vw, 2rem); }

    /* Categories */
    .categories-section { padding: 56px 0; }
    .categories-grid { grid-template-columns: repeat(2, 1fr); gap: 12px; }
    .cat-card { min-height: 220px; border-radius: 18px; }
    .cat-title { font-size: 1rem; }

    /* Testimonials */
    .testimonials-section { padding: 56px 0; }
    .testimonials-title { font-size: clamp(1.6rem, 6vw, 2.2rem); }
    .testi-card { min-width: 100%; width: 100%; padding: 24px; min-height: unset; }
    .testi-text { font-size: 15px; }

    /* Products */
    .products-grid { grid-template-columns: repeat(2, 1fr) !important; gap: 12px !important; }
    .product-body { padding: 12px 14px 16px; }
    .product-price { font-size: 15px; }

    /* Blog */
    .blog-section { padding: 56px 0; }
    .blog-grid { grid-template-columns: 1fr; }
    .blog-header { flex-direction: column; align-items: flex-start; gap: 16px; }
    .blog-list-thumb { width: 80px; height: 60px; }

    /* Newsletter */
    .newsletter-section { padding: 48px 0; }
    .newsletter-card {
        padding: 36px 24px;
        border-radius: 20px;
        flex-direction: column;
        gap: 28px;
    }
    .newsletter-form { width: 100%; }
    .newsletter-text h3 { font-size: clamp(1.5rem, 6vw, 2rem); }

    /* Footer */
    .footer { padding: 48px 0 24px; }
    .footer-grid {
        grid-template-columns: 1fr 1fr;
        gap: 28px;
        margin-bottom: 36px;
    }
    .footer-bottom {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
    .footer-bottom-links { flex-wrap: wrap; gap: 12px; }
}

@media (max-width: 480px) {
    /* Navbar */
    .navbar-logo img { height: 38px; }

    /* Hero */
    .hero { padding-top: 64px; }
    .hero-headline h1 { font-size: clamp(1.8rem, 9vw, 2.4rem); }
    .hero-slider-wrap, .hero-slider {
        width: 240px !important;
        height: 240px !important;
    }
    .btn-hero-primary, .btn-hero-secondary { font-size: 14px; padding: 13px 18px; }

    /* Categories */
    .categories-grid { grid-template-columns: 1fr; }
    .cat-card { min-height: 200px; }

    /* Blog list */
    .blog-list-item { flex-direction: column; align-items: flex-start; }
    .blog-list-thumb { width: 100%; height: 160px; border-radius: 10px; }

    /* Footer */
    .footer-grid { grid-template-columns: 1fr; gap: 24px; }
    .footer-bottom-links { gap: 10px; }
}
</style>
</head>
<body>

<!-- navbar -->
<div class="navbar-wrap" id="navbarWrap">
    <nav class="navbar" id="navbar">
        <ul class="navbar-left-links">
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#categories">Kategori</a></li>
            <li><a href="#products">Produk</a></li>
        </ul>

        <a href="/" class="navbar-logo">
            <img src="{{ asset('img/logo/mitraoke-removebg-preview.png') }}" alt="MitraOke">
        </a>

        <ul class="navbar-right-links">
            <li><a href="#blog">Blog</a></li>
            <li><a href="#reviews">Testimoni</a></li>
            <li><a href="#about">Tentang</a></li>
        </ul>

        <a href="https://wa.me/6281252141397" class="navbar-cta" target="_blank">Hubungi Kami</a>
        <button class="nav-hamburger" id="navHamburger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </nav>
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
<section class="hero" id="hero">
    <div class="container">
        <div class="hero-inner">

            <!-- judul baris 1 -->
            <div class="hero-headline">
                <h1>Solusi Peralatan<br>Kantor <em>Premium</em></h1>
            </div>

            <!-- tengah: info kiri | gambar | statistik kanan -->
            <div class="hero-mid">
                <!-- dekorasi -->
                <div class="hero-deco hero-deco-tl"><span class="asterisk asterisk-lg">✦</span></div>
                <div class="hero-deco hero-deco-tr"><span class="asterisk asterisk-sm">✦</span></div>
                <div class="hero-deco hero-deco-bl"><span class="asterisk asterisk-sm">✦</span></div>

                <!-- teks kiri -->
                <div class="hero-info-left">
                    <p>Dari sistem konferensi hingga furnitur kantor, kami menghadirkan solusi terpadu bersertifikasi TKDN untuk instansi &amp; korporasi Indonesia.</p>
                </div>

                <!-- slider gambar tengah -->
                <div class="hero-center">
                    <div class="hero-slider-wrap">
                        <div class="hero-slider">
                            <div class="hero-slide hero-slide-jogja active">
                                <img src="{{ asset('img/logo/jogja.jpeg') }}" alt="Jogja">
                            </div>
                            <div class="hero-slide hero-slide-foto">
                                <img src="{{ asset('img/hero/kamera-removebg-preview.png') }}" alt="Produk Kamera">
                            </div>
                            <div class="hero-slide hero-slide-malang">
                                <img src="{{ asset('img/logo/malang.jpeg') }}" alt="Malang">
                            </div>
                            <div class="hero-slide hero-slide-foto">
                                <img src="{{ asset('img/hero/streaming-removebg-preview.png') }}" alt="Produk Streaming">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- statistik kanan -->
                <div class="hero-info-right">
                    <div class="hero-years">
                        <span class="stars">★★★★★</span>
                        <strong>15 Tahun</strong>
                        <small>Pengalaman</small>
                    </div>
                </div>
            </div>

            <!-- judul baris 2 -->
            <div class="hero-headline">
                <h1>Terlengkap &amp; <em>Terpercaya</em></h1>
            </div>

            <!-- tombol CTA -->
            <div class="hero-bottom">
                <a href="#products" class="btn-hero-primary">
                    Lihat Produk
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="https://wa.me/6281252141397" class="btn-hero-secondary" target="_blank">
                    Mari Berkolaborasi
                </a>
            </div>

        </div>
    </div>
</section>

<!-- bar fitur -->
<div class="features-bar">
    <div class="container">
        <div class="features-bar-inner">
            <div class="feature-item reveal reveal-d1">
                <div class="feature-icon">🔒</div>
                <div class="feature-text">
                    <h5>Garansi Resmi</h5>
                    <p>Garansi produk 1–3 tahun</p>
                </div>
            </div>
            <div class="feature-item reveal reveal-d2">
                <div class="feature-icon">💬</div>
                <div class="feature-text">
                    <h5>Support 24/7</h5>
                    <p>Siap bantu kapan pun</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- kategori -->
<section class="categories-section" id="categories">
    <div class="container">
        <div class="section-heading reveal">
            <div class="section-pill">Kategori</div>
            <h2 class="section-title">Temukan sesuai kebutuhan.</h2>
            <p class="section-sub">Pilih dari berbagai kategori produk kantor yang lengkap dan terpercaya.</p>
        </div>

        <div class="categories-grid">
            <div class="cat-card cat-card--red reveal reveal-d1">
                <div class="cat-card-text">
                    <div class="cat-label">Perlengkapan Kantor</div>
                    <div class="cat-title">Alat Tulis<br>Kantor</div>
                    <a href="/peralatan-kantor" class="btn-browse">Browse ›</a>
                </div>
                <div class="cat-img-wrap">
                    <img class="cat-img" src="{{ asset('img/kategori/atk-removebg-preview.png') }}" alt="ATK">
                </div>
            </div>

            <div class="cat-card cat-card--yellow reveal reveal-d2">
                <div class="cat-card-text">
                    <div class="cat-label">Kebersihan</div>
                    <div class="cat-title">Alat<br>Kebersihan</div>
                    <a href="/peralatan-kantor" class="btn-browse">Browse ›</a>
                </div>
                <div class="cat-img-wrap">
                    <img class="cat-img" src="{{ asset('img/kategori/Alat_Kebersihan-removebg-preview.png') }}" alt="Kebersihan">
                </div>
            </div>

            <div class="cat-card cat-card--blue reveal reveal-d3">
                <div class="cat-card-text">
                    <div class="cat-label">Kesehatan</div>
                    <div class="cat-title">Alat<br>Kesehatan</div>
                    <a href="/peralatan-kantor" class="btn-browse">Browse ›</a>
                </div>
                <div class="cat-img-wrap">
                    <img class="cat-img" src="{{ asset('img/kategori/Alat_Kesehatan-removebg-preview.png') }}" alt="Kesehatan">
                </div>
            </div>

            <div class="cat-card cat-card--green reveal reveal-d4">
                <div class="cat-card-text">
                    <div class="cat-label">Peralatan Rumah</div>
                    <div class="cat-title">Home<br>Appliances</div>
                    <a href="/peralatan-kantor" class="btn-browse">Browse ›</a>
                </div>
                <div class="cat-img-wrap">
                    <img class="cat-img" src="{{ asset('img/kategori/Home_-removebg-preview.png') }}" alt="Home Appliances">
                </div>
            </div>

            <div class="cat-card cat-card--dark reveal reveal-d5">
                <div class="cat-card-text">
                    <div class="cat-label">Interior Kantor</div>
                    <div class="cat-title">Furniture<br>Kantor</div>
                    <a href="/peralatan-kantor" class="btn-browse">Browse ›</a>
                </div>
                <div class="cat-img-wrap">
                    <img class="cat-img" src="{{ asset('img/kategori/roombooking-removebg-preview.png') }}" alt="Furniture">
                </div>
            </div>

            <div class="cat-card cat-card--purple reveal reveal-d6">
                <div class="cat-card-text">
                    <div class="cat-label">Teknologi</div>
                    <div class="cat-title">IT Hardware<br>&amp; Software</div>
                    <a href="/peralatan-kantor" class="btn-browse">Browse ›</a>
                </div>
                <div class="cat-img-wrap">
                    <img class="cat-img" src="{{ asset('img/kategori/IT_Hardware-removebg-preview.png') }}" alt="IT Hardware">
                </div>
            </div>
        </div>
    </div>
</section>



<!-- testimoni -->
<section class="testimonials-section" id="reviews">
    <div class="container">
        <div class="testimonials-header reveal">
            <div>
                <p class="testimonials-eyebrow">Our Reviews</p>
                <h2 class="testimonials-title">What Our <span>Clients</span> Say</h2>
            </div>
            <div class="testimonials-nav">
                <button class="testi-nav-btn" onclick="testiScroll(-1)" aria-label="Sebelumnya">&#8592;</button>
                <button class="testi-nav-btn" onclick="testiScroll(1)" aria-label="Berikutnya">&#8594;</button>
            </div>
        </div>

        <div class="testimonials-track-wrap" id="testiWrap">
            <div class="testimonials-track" id="testiTrack">

                <div class="testi-card">
                    <div>
                        <div class="testi-top">
                            <img class="testi-avatar" src="https://i.pravatar.cc/120?img=11" alt="Budi Santoso">
                            <div class="testi-company-badge">
                                <span class="testi-badge-icon">KK</span>
                                Kemenkeu
                            </div>
                        </div>
                        <span class="testi-quote-mark">&#10077;</span>
                        <p class="testi-text">Mereka menyesuaikan solusinya dengan kebutuhan dan tujuan spesifik instansi kami dengan sangat baik.</p>
                    </div>
                    <div class="testi-footer">
                        <div class="testi-name">Budi Santoso</div>
                        <div class="testi-role">Kepala IT, Kementerian Keuangan<br>Jakarta, Indonesia</div>
                    </div>
                </div>

                <div class="testi-card">
                    <div>
                        <div class="testi-top">
                            <img class="testi-avatar" src="https://i.pravatar.cc/120?img=32" alt="Dian Rahayu">
                            <div class="testi-company-badge">
                                <span class="testi-badge-icon">WK</span>
                                Wijaya Karya
                            </div>
                        </div>
                        <span class="testi-quote-mark">&#10077;</span>
                        <p class="testi-text">Mereka mengorganisir pekerjaan dan manajemen internal proyek kami dengan sangat outstanding.</p>
                    </div>
                    <div class="testi-footer">
                        <div class="testi-name">Dian Rahayu</div>
                        <div class="testi-role">Project Manager, PT Wijaya Karya<br>Surabaya, Jawa Timur</div>
                    </div>
                </div>

                <div class="testi-card">
                    <div>
                        <div class="testi-top">
                            <img class="testi-avatar" src="https://i.pravatar.cc/120?img=53" alt="Ahmad Fauzy">
                            <div class="testi-company-badge">
                                <span class="testi-badge-icon">IH</span>
                                InHive Space
                            </div>
                        </div>
                        <span class="testi-quote-mark">&#10077;</span>
                        <p class="testi-text">Bekerja sama dengan mereka adalah pengalaman yang luar biasa dan sangat memuaskan.</p>
                    </div>
                    <div class="testi-footer">
                        <div class="testi-name">Ahmad Fauzy</div>
                        <div class="testi-role">Lead Engineering, InHive Space<br>Bandung, Jawa Barat</div>
                    </div>
                </div>

                <div class="testi-card">
                    <div>
                        <div class="testi-top">
                            <img class="testi-avatar" src="https://i.pravatar.cc/120?img=25" alt="Siti Nurhaliza">
                            <div class="testi-company-badge">
                                <span class="testi-badge-icon">BM</span>
                                Bank Mandiri
                            </div>
                        </div>
                        <span class="testi-quote-mark">&#10077;</span>
                        <p class="testi-text">Produk berkualitas tinggi dengan layanan purna jual yang sangat responsif dan profesional.</p>
                    </div>
                    <div class="testi-footer">
                        <div class="testi-name">Siti Nurhaliza</div>
                        <div class="testi-role">CTO, Bank Mandiri<br>Jakarta, Indonesia</div>
                    </div>
                </div>

                <div class="testi-card">
                    <div>
                        <div class="testi-top">
                            <img class="testi-avatar" src="https://i.pravatar.cc/120?img=44" alt="Rahmat Hidayat">
                            <div class="testi-company-badge">
                                <span class="testi-badge-icon">PS</span>
                                Pemprov Sumut
                            </div>
                        </div>
                        <span class="testi-quote-mark">&#10077;</span>
                        <p class="testi-text">Tim MitraOKE sangat membantu dalam proses pengadaan dan instalasi perangkat rapat hybrid kami.</p>
                    </div>
                    <div class="testi-footer">
                        <div class="testi-name">Rahmat Hidayat</div>
                        <div class="testi-role">Direktur IT, Pemprov Sumut<br>Medan, Sumatera Utara</div>
                    </div>
                </div>

            </div>
        </div>

        {{-- titik navigasi: 5 kartu - 3 tampil = posisi 0,1,2 --}}
        <div class="testi-dots" id="testiDots">
            <button class="testi-dot active" onclick="testiGoto(0)"></button>
            <button class="testi-dot" onclick="testiGoto(1)"></button>
            <button class="testi-dot" onclick="testiGoto(2)"></button>
        </div>
    </div>
</section>

<!-- blog -->
<section class="blog-section" id="blog">
    <div class="container">
        <div class="blog-header reveal">
            <div class="blog-header-left">
                <p class="blog-eyebrow">Insight &amp; Tips</p>
                <h2>Artikel Terbaru</h2>
            </div>
            <a href="https://mitraoke.com/" target="_blank" class="btn-blog-all">
                Lihat Semua
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>

        <div class="blog-grid">

            {{-- artikel utama --}}
            <a href="https://mitraoke.com/" target="_blank" class="blog-featured reveal">
                <div class="blog-featured-img">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=900&q=80" alt="Solusi Rapat Hybrid">
                    <span class="blog-cat-pill">Teknologi</span>
                </div>
                <div class="blog-featured-body">
                    <h3 class="blog-featured-title">Memilih Kamera Konferensi yang Tepat untuk Rapat Hybrid di Instansi Pemerintah</h3>
                    <p class="blog-featured-excerpt">Panduan lengkap memilih kamera UHD 4K untuk rapat hybrid — mulai resolusi, sudut pandang, hingga kompatibilitas dengan platform video conference populer.</p>
                    <div class="blog-featured-meta">
                        <div class="blog-meta-author">
                            <img class="blog-author-avatar" src="https://i.pravatar.cc/60?img=7" alt="Admin MitraOKE">
                            <span class="blog-author-name">Admin MitraOKE</span>
                        </div>
                        <span class="blog-date">20 Feb 2026</span>
                    </div>
                </div>
            </a>

            {{-- daftar artikel --}}
            <div class="blog-list reveal reveal-d2">

                <a href="https://mitraoke.com/" target="_blank" class="blog-list-item">
                    <div class="blog-list-thumb">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=400&q=80" alt="E-Katalog">
                    </div>
                    <div class="blog-list-body">
                        <span class="blog-list-cat">Pengadaan</span>
                        <p class="blog-list-title">Cara Pengadaan Peralatan Kantor Lewat E-Katalog LKPP dengan Mudah</p>
                        <span class="blog-list-author">Rina Wati &middot; 15 Feb 2026</span>
                    </div>
                </a>

                <a href="https://mitraoke.com/" target="_blank" class="blog-list-item">
                    <div class="blog-list-thumb">
                        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=400&q=80" alt="ATEN Control System">
                    </div>
                    <div class="blog-list-body">
                        <span class="blog-list-cat">Tutorial</span>
                        <p class="blog-list-title">Mengenal ATEN Control System: Solusi Kendali Ruang Rapat Modern</p>
                        <span class="blog-list-author">Budi Prasetyo &middot; 10 Feb 2026</span>
                    </div>
                </a>

                <a href="https://mitraoke.com/" target="_blank" class="blog-list-item">
                    <div class="blog-list-thumb">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=400&q=80" alt="ATK Kantor">
                    </div>
                    <div class="blog-list-body">
                        <span class="blog-list-cat">Tips</span>
                        <p class="blog-list-title">5 Alat Tulis Kantor Wajib yang Harus Ada di Setiap Meja Kerja</p>
                        <span class="blog-list-author">Sari Dewi &middot; 5 Feb 2026</span>
                    </div>
                </a>

                <a href="https://mitraoke.com/" target="_blank" class="blog-list-item">
                    <div class="blog-list-thumb">
                        <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=400&q=80" alt="Kursi Ergonomis">
                    </div>
                    <div class="blog-list-body">
                        <span class="blog-list-cat">Furnitur</span>
                        <p class="blog-list-title">Kursi Ergonomis vs Kursi Biasa: Mana yang Lebih Nyaman untuk Kerja?</p>
                        <span class="blog-list-author">Imam Sutrisno &middot; 1 Feb 2026</span>
                    </div>
                </a>

                <a href="https://mitraoke.com/" target="_blank" class="blog-list-item">
                    <div class="blog-list-thumb">
                        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=400&q=80" alt="Proyektor Kantor">
                    </div>
                    <div class="blog-list-body">
                        <span class="blog-list-cat">Teknologi</span>
                        <p class="blog-list-title">Tips Memilih Proyektor untuk Ruang Rapat Agar Presentasi Makin Profesional</p>
                        <span class="blog-list-author">Dewi Lestari &middot; 28 Jan 2026</span>
                    </div>
                </a>

            </div>
        </div>
    </div>
</section>

<!-- newsletter -->
<section class="newsletter-section" id="contact">
    <div class="container">
        <div class="newsletter-card reveal">
            <div class="newsletter-text">
                <span class="newsletter-eyebrow">&#9679; Info Produk TKDN</span>
                <h3>Ingin tahu barang<br><em>TKDN</em> kami?</h3>
                <p>Subscribe dan dapatkan update produk terbaru, harga spesial, serta katalog eksklusif langsung di email Anda.</p>
            </div>
            <form class="newsletter-form" onsubmit="return false;">
                <input
                    type="email"
                    class="newsletter-input"
                    placeholder="Masukkan email Anda..."
                >
                <button class="btn-subscribe" type="submit">
                    Subscribe Sekarang
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
                <span class="newsletter-note">Tidak ada spam. Bisa unsubscribe kapan saja.</span>
            </form>
        </div>
    </div>
</section>

<!-- footer -->
<footer class="footer" id="about">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <div class="footer-logo-wrap">
                    <img src="{{ asset('img/logo/mitraoke-removebg-preview.png') }}" alt="MitraOke">
                </div>
                <p>Distributor resmi peralatan kantor premium bersertifikasi TKDN. Melayani instansi pemerintah dan korporasi di seluruh Indonesia.</p>
                <div class="footer-social">
                    <a href="https://mitraoke.com/" class="social-btn" target="_blank">📷</a>
                    <a href="https://mitraoke.com/" class="social-btn" target="_blank">▶️</a>
                    <a href="https://wa.me/6281252141397" class="social-btn" target="_blank">💬</a>
                </div>
            </div>

            <div class="footer-col">
                <h5>Produk</h5>
                <ul>
                    <li><a href="/peralatan-kantor">ATEN Control System</a></li>
                    <li><a href="/peralatan-kantor">AREC Media Station</a></li>
                    <li><a href="/peralatan-kantor">IPEVO Camera</a></li>
                    <li><a href="/peralatan-kantor">Wharfedale Audio</a></li>
                    <li><a href="/peralatan-kantor">ATK Perkantoran</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h5>Layanan</h5>
                <ul>
                    <li><a href="https://mitraoke.com/index.html" target="_blank">E-Katalog Resmi</a></li>
                    <li><a href="https://www.mbizmarket.co.id/p/mitracom" target="_blank">Mbizmarket</a></li>
                    <li><a href="https://mitraoke.com/contact.html" target="_blank">Konsultasi Gratis</a></li>
                    <li><a href="https://mitraoke.com/" target="_blank">Pengadaan Pemerintah</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h5>Hubungi</h5>
                <ul>
                    <li><a href="https://mitraoke.com/" target="_blank">mitraoke.com</a></li>
                    <li><a href="https://wa.me/6281252141397" target="_blank">+62 812-5214-1397</a></li>
                    <li><a href="https://mitraoke.com/contact.html" target="_blank">Form Kontak</a></li>
                    <li><a href="https://mitraoke.com/services.html" target="_blank">Instagram</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© {{ date('Y') }} MitraOke. Seluruh hak cipta dilindungi undang-undang.</p>
            <div class="footer-bottom-links">
                <a href="#">Kebijakan Privasi</a>
                <a href="#">Ketentuan Layanan</a>
                <a href="https://mitraoke.com/contact.html" target="_blank">Legal</a>
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

