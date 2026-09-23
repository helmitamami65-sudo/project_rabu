<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Digital</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>


    <header class="navbar">
        <div class="logo">
            <span class="dot"></span>Kyuuin<span class="dot-blue">.</span>
        </div>
        <ul class="nav-links">
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="#keahlian">Keahlian</a></li>
            <li><a href="#proyek">Proyek</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>
    </header>

    <section class="intro-section" id="tentang">
        <div class="intro-content">
            <h1>Welcome To My Portofolio Digital</h1>
            <hr>
            <div class="profile-container">
                <img src="{{ asset('image/Kyuuin.jpeg') }}" alt="Foto Profil">
                <br>
                <span class="badge-tag">Siswa SMKN 1 Bantul</span>
            </div>
            
            <h1>Halo, Saya <span class="highlight">Kyuuin</span></h1>
            <p>
                Saya adalah seorang pemula yang sedang mendalami pemrograman web, dengan fokus pada pembuatan tampilan web menggunakan HTML, CSS, dan framework Laravel.
                Saya tertarik untuk membuat web yang responsif, bersih, dan nyaman untuk para pengguna.
            </p>
    
            <div class="btn-group">
                <a href="#proyek" class="btn">Lihat Proyek Saya</a>
                <a href="#kontak" class="btn btn-secondary">Hubungi Saya</a>
            </div>
        </div>
    </section>

    <hr>
    
   
    <section class="skils-section" id="keahlian">
        <div class="skills-header">
            <h2>Teknologi & Keahlian</h2>
            <p>Teknologi Yang Sedang Saya Pelajari Dan Gunakan Untuk Membuat Website</p>
        </div>
        <div class="container-kartu">
            <div class="kartu">
                <div class="kotak-icon html">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5">
                </div>
                <h3>HTML5</h3>
                <p>Struktur Web</p>
            </div>
            <div class="kartu">
                <div class="kotak-icon css">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3">
                </div>
                <h3>CSS3</h3>
                <p>Styling Website</p>
            </div>
            <div class="kartu">
                <div class="kotak-icon js">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript">
                </div>
                <h3>JavaScript</h3>
                <p>Interaksi Website</p>
            </div>
            <div class="kartu">
                <div class="kotak-icon laravel">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel">
                </div>
                <h3>Laravel</h3>
                <p>Framework Backend</p>
            </div>
        </div>
    </section>

    <hr>

   
    <section class="proyek-section" id="proyek">
        <div class="proyek-header">
            <h2>Proyek HTML Pertama</h2>
            <p class="sub-judul">Proyek Yang Hanya Untuk Belajar Aja Kok, Hehe :D</p>
        </div>
        <div class="wadah-kartu">
            <div class="kartu-proyek">
                <div class="banner-proyek">
                    <h3>Latihan HTML</h3>
                </div>
                <div class="isi-proyek">
                    <div class="kelompok-tag">
                        <span class="tag tag-merah">Hiburan Aja</span>
                        <span class="tag tag-biru">Sama Kesenangan :D</span>
                    </div>
                    <h4>Masih Belajar HTML</h4>
                    <p>Berisi code pemula yang saya coba di HTML.</p>
                    <a href="http://127.0.0.1:5501/Latihan_Gwejh/Latihan_HTML_To_FrontEndDev.html" class="tombol-link">Klik sini kalau lihat &gt;</a>
                </div>
            </div>

            <div class="kartu-proyek">
                <div class="banner-proyek">
                    <h3>Latihan HTML dan CSS</h3>
                </div>
                <div class="isi-proyek">
                    <div class="kelompok-tag">
                        <span class="tag tag-kuning">Date A Live</span>
                        <span class="tag tag-biru">Kesenangan</span>
                    </div>
                    <h4>Web Char Date A Live</h4>
                    <p>Berisi HTML dan CSS yang saya gunakan dalam proyek saya.</p>
                    <a href="http://127.0.0.1:5501/Float.html" class="tombol-link">Klik sini kalau lihat &gt;</a>
                </div>
            </div>
        </div>
    </section>

    <hr>

    
    <section class="area-kontak" id="kontak">
        <h2>Kontak Saya</h2>
        <p>Saya selalu terbuka untuk diskusi, belajar hal baru, atau berkolaborasi dalam proyek pemula.</p>

        <div class="wadah-sosmed">
            <a href="https://github.com/helmitamami65-sudo" target="_blank" class="tombol-sosmed" aria-label="GitHub">
                <img src="https://api.iconify.design/lucide:github.svg?color=%23ffffff" alt="GitHub">
            </a>
            <a href="https://www.instagram.com/kyuuinitsme/" target="_blank" class="tombol-sosmed" aria-label="Instagram">
                <img src="https://api.iconify.design/lucide:instagram.svg?color=%23ffffff" alt="Instagram">
            </a>
            <a href="https://wa.me/6285643173661" target="_blank" class="tombol-sosmed" aria-label="WhatsApp">
                <img src="https://api.iconify.design/lucide:phone.svg?color=%23ffffff" alt="WhatsApp">
            </a>
        </div>
    </section>

    <hr>

    
    <footer class="area-footer">
        <p>&copy; 2026 Kyuuin. Siswa SMKN 1 Bantul. Dibuat dengan HTML &amp; CSS.</p>
    </footer>

</body>
</html>