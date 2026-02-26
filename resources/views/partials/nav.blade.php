<nav class="globalnav" id="globalnav">
    <div class="globalnav-inner">
        <a href="/" class="globalnav-logo">Mitra<span>OKE</span></a>
        <ul class="globalnav-list">

            {{-- Produk dengan mega dropdown --}}
            <li class="globalnav-item has-dropdown" id="navProduk">
                <a href="#produk" class="globalnav-link">Produk</a>

                <div class="globalnav-dropdown" id="dropdownProduk">
                    <div class="globalnav-dropdown-inner">
                        <div class="gnd-col gnd-col--explore">
                            <p class="gnd-heading">Jelajahi Produk</p>
                            <ul class="gnd-links-big">
                                <li><a href="/peralatan-kantor">Semua Peralatan Kantor</a></li>
                                <li><a href="/peralatan-kantor">ATEN Control System</a></li>
                                <li><a href="/peralatan-kantor">AREC Media Station</a></li>
                                <li><a href="/peralatan-kantor">IPEVO Camera</a></li>
                                <li><a href="/peralatan-kantor">Wharfedale Audio</a></li>
                                <li><a href="/peralatan-kantor">ATK Perkantoran</a></li>
                                <li><a href="/peralatan-kantor">Furnitur Kantor</a></li>
                            </ul>
                            <ul class="gnd-links-small">
                                <li><a href="/peralatan-kantor">Bandingkan Produk</a></li>
                                <li><a href="/peralatan-kantor">Beralih ke MitraOKE</a></li>
                            </ul>
                        </div>
                        <div class="gnd-col gnd-col--more">
                            <p class="gnd-heading">Lainnya dari MitraOKE</p>
                            <ul class="gnd-links-small">
                                <li><a href="https://mitraoke.com/contact.html" target="_blank">Dukungan MitraOKE</a></li>
                                <li><a href="https://mitraoke.com/index.html" target="_blank">E-Katalog Resmi</a></li>
                                <li><a href="https://www.mbizmarket.co.id/p/mitracom" target="_blank">Mbizmarket</a></li>
                                <li><a href="https://mitraoke.com/" target="_blank">Sertifikasi TKDN</a></li>
                                <li><a href="https://mitraoke.com/" target="_blank">Produk Ramah Lingkungan</a></li>
                                <li><a href="https://mitraoke.com/contact.html" target="_blank">MitraOKE untuk Bisnis</a></li>
                                <li><a href="https://mitraoke.com/contact.html" target="_blank">Untuk Pendidikan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>

            <li><a href="#atk">ATK</a></li>
            <li><a href="#furnitur">Furnitur</a></li>
            <li><a href="#elektronik">Elektronik</a></li>
            <li><a href="#ekatalog">E-Katalog</a></li>
            <li><a href="#mbizmarket">Mbizmarket</a></li>
            <li><a href="#kontak">Kontak</a></li>
            <li><a href="https://mitraoke.com/contact.html" target="_blank">Temukan Retailer</a></li>
        </ul>
        <div class="globalnav-actions">
            <a href="https://mitraoke.com/" target="_blank" title="Cari">&#9906;</a>
            <a href="https://wa.me/6281252141397" target="_blank" title="Hubungi WA">&#9783;</a>
        </div>
    </div>

    {{-- Backdrop --}}
    <div class="globalnav-backdrop" id="navBackdrop"></div>
</nav>

<script>
(function () {
    const nav      = document.getElementById('globalnav');
    const item     = document.getElementById('navProduk');
    const dropdown = document.getElementById('dropdownProduk');
    const backdrop = document.getElementById('navBackdrop');
    let closeTimer;

    function open() {
        clearTimeout(closeTimer);
        nav.classList.add('nav-open');
        item.classList.add('is-open');
        backdrop.classList.add('is-visible');
    }

    function close() {
        closeTimer = setTimeout(() => {
            nav.classList.remove('nav-open');
            item.classList.remove('is-open');
            backdrop.classList.remove('is-visible');
        }, 80);
    }

    item.addEventListener('mouseenter', open);
    item.addEventListener('mouseleave', close);
    dropdown.addEventListener('mouseenter', () => clearTimeout(closeTimer));
    dropdown.addEventListener('mouseleave', close);
    backdrop.addEventListener('mouseenter', close);
})();
</script>
