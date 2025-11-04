<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>judul halaman</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Ini header</h1>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigasion">
            &#9776;
        </button>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <h2>Selamat datang</h2>
            <?php
            echo "halo dunia!<br>";
            echo "halo nama saya Deskia";
            ?>
            <p>Ini contoh paragraf HMTL.</p>
        </section>

        <section id="about">
            <?php
            $nim = 2511500003;
            $NIM = 2412062004;
            $nama = "Deskia Adminitasari &#9787";
            $NAMA = "Kiaa";
            $tempattanggallahir = "Pangkal Niur,24 Desember 2006";
            $TEMPATTANGGALLAHIR = "Bernai,20 April 2004";
            $hobi = "Memasak, make up";
            $HOBI = "Tidur";
            $namaorangtua = "Bapak Sukardi & Ibu Karmila";
            $NAMAORANGTUA = " Bapak Irwan & Ibu Mila";
            $alamat = "Desa BERBURA kecamatan Riau Silip";
            $SELAMAT = "Bernai";
            $anakke = "1 dari 3 bersaudara";
            $ANAKKE = " 2 DARI 3 BERSAUDARA";
            $namasaudara = "Ramdani Adita ke-2 & Afia Savitri ke-3";
            $NAMASAUDARA = "Rama & Fia";
            $namapasangan = "siapa?";
            $NAMAPASANGAN = "Gatau!";
            $pekerjaan = "Mahasiswa Atma Luhur";
            $PEKERJAAN = "Pengangguran";
            ?>
            <h2>Tentang saya</h2>
            <p><strong>Nama Lengkap:</strong>
            <?php
            echo$nama;
            ?>
            </p>

            <p><strong>NIM:</strong> 
            <?php
            echo $nim;
            ?>
            </p>

            <p><strong>Tempat Tanggal Lahir:</strong>
            <?php
            echo$tempattanggallahir;
            ?>
            </p>

            <p><strong>Hobi:</strong>
            <?php
            echo$hobi;
            ?>
            </p>

            <p><strong>Nama Orang tua:</strong>
            <?php
            echo$namaorangtua;
            ?>
            </p>

            <p><strong>Alamat:</strong>
            <?php
            echo$alamat;
            ?>
            </p>

            <p><strong>Anak ke:</strong>
            <?php
            echo$anakke;
            ?>
            </p>

            <p><strong>Nama saudara:</strong>
            <?php
            echo$namasaudara; 
            ?>
            </p>

            <p><strong>Nama Pasangan:</strong>
            <?php
            echo$namapasangan;
            ?>
            </p>

            <p><strong>Pekerjaan:</strong>
            <?php
            echo$pekerjaan; 
            ?>
            </p>
            
        </section>

        <section id="contact">
            <h2>Kontak kami</h2>
            <form action="" method="GET">
                <label for="txtNama"> <span>Nama</span>
                    <input maxlength="20" type="text" id="txtNama" name="txtNama" placeholder="Masukkan Nama" required
                        autocomplate="name">
                </label>

                <label for="txtEmail">
                    <span>Email:</span>
                    <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan Email" required
                        autocomplete="email">
                </label>

                <label for="TxtPesan">
                    <span>Pesan:</span>
                    <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..."
                        required></textarea></strong>
                    <small id="charCount">0/200 karakter</small>

                </label>

                <button type="submit">Kirim</button>
                <button type="reset">Batal</button>

            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Deskia Adminitasari [2511500003] &#128525;</p>
    </footer>

    <script src="script.js"></script>
    
</body>

</html>