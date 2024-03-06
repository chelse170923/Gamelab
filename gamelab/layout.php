<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="layout.css" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <!-- hero  -->
    <div class="hero">
      <div class="upper-nav">
        <div>
          <img src="asset/Logo_GameLab_Landscape_White.png" height="20px" srcset="" />
        </div>
        <div class="nav-links">
          <a href="#program" class="nav1">Program</a>
          <a href="#solusi_sekolah" class="nav1">Solusi Sekolah &Perusahaan</a>
          <a href="#kelas" class="nav1">Kelas</a>
          <a href="nav1 search">
            <i href="fa-solid fa-magnifying-glass" style="color: #ffffff"></i>
          </a>
          <?php

          // periksa apakah ada sesi usename
          if (isset($_SESSION['email'])) {
            // jika ada, tampilkan logo logout
            echo '<a href="logout.php" class="btn btn-light nav1" onclick="confirmLogout()">Logout</a>';
          } else {
            // jika tidak ada, tampilkan tombol login
            echo '<a href="login-modal.php" class="btn btn-light nav1">Login</a>';
          }
          ?>
          <a href="#pertanyaan" class="nav1">pertanyaan</a>
        </div>
        <button class="nav-button" onclick="toggleDropdown()">
          <i class="fa-solid fa-bars"></i>
        </button>
        
          
          
      </div>
      <div class="bottom-nav hide-nav" id="bottom-nav">
        <span>Program</span>
        <span>Program</span>
        <span>Program</span>
        <span>Program</span>
        <span>Program</span>
      </div>
      <!-- header  -->
      <div class="header">
        <div class="paragraf">
          <h1>Raih Masa Depan Brilian<br />dengan Optimasi Skill Digital</h1>
          <p>
            GAMELAB.ID membantumu mengoptimalkan skill agar siap kerja melalui
            <br />
            program pelatihan, magang online, dan kelas intensif yang diampu
            oleh para <br />
            profesional di bidangnya.
          </p>
          <h3>
            Segera daftar dan dapatkan voucher khusus senilai Rp50.000 bagi
            <br />
            pendaftar baru GAMELAB.ID
          </h3>
        </div>
        <div class="paragraf1">
          <img src="asset/new-banner.png" alt="" srcset="" />
        </div>
      </div>
    </div>
    <!-- content  -->
    <!-- section 1  -->
    <div class="section" id="program">
      <h2>Program Unggulan GAMELAB</h2>
      <p>Program Lengkap SIAP KERJA dan SIAP WIRAUSAHA</p>
      <div class="section1">
        <div class="sec1">
          <img src="asset/UpSkill FIXXX bgt t_t.png" height="150px" alt="" srcset="" />
          <h4>Kursus UpSkill</h4>
          <p>
            Upgrade skill secara intensif sesuai <br />
            dengan kebutuhan industri. Didukung <br />
            dengan kurikulum berbasis industri dan <br />
            para trainer expert. <br />
          </p>
          <button class="nav2">Info lengkap</button>
        </div>
      <div class="sec1">
        <img
        src="asset/icon-magang-v3-landscape.png"
        height="150px"
        alt=""
        srcset=""
        />
        <h4>Magang Bersertifikat</h4>
        <p>
          Cocok buat kamu siswa SMK, <br />
          mahasiswa, dan guru yang ingin <br />
          magang untuk tujuan akademis. Bisa <br />
          pilih durasi dan konsentrasi <br />
        </p>
        <button class="nav2">Info lengkap</button>
      </div>
      <div class="sec1">
        <img
        src="asset/icon-kelas-industri-v3-landscape.png"
        height="150px"
        alt=""
        srcset=""
        />
        <h4>Karir Bootcamp</h4>
        <p>
          Cocok buat kamu yang ingin <br />
          mengoptimalkan skill secara penuh dan <br />
          intensif Plus dibantu Penyaluran Kerja <br />
          ke Hiring Partner Gamelab <br />
        </p>
        <button class="nav2">Info lengkap</button>
      </div>
    </div>
    </div>

    <div class="section" id="solusi_sekolah">
      <div class="section2">
        <h2>Solusi untuk Sekolah & Kampus</h2>
        <p>Temukan solusi untuk sekolah dan kampusmuk</p>
        <div class="box">
          <div class="sec2">
            <img src="asset/Kelas_Industri.png" height="150px" alt="" srcset="" />
            <h4>Kelas industri</h4>
            <button class="nav3">Info lengkap</button>
          </div>
          <div class="sec2">
            <img src="asset/Ekskul.png" height="150px" alt="" srcset="" />
            <h4>Ekskul</h4>
            <button class="nav3">Info lengkap</button>
          </div>
          <div class="sec2">
            <img src="asset/SMK_Binaan.png" height="150px" alt="" srcset="" />
            <h4>SMK Binaan</h4>
            <button class="nav3">Info lengkap</button>
          </div>
          <div class="sec2">
            <img src="asset/Kampus_Mitra.png" height="150px" alt="" srcset="" />
            <h4>Kampus Mitra</h4>
            <button class="nav3">Info lengkap</button>
          </div>
        </div>
      </div>
    </div>
    <div class="section3" id="solusi_perusahaan">
      <div class="section33">
        <h2>Solusi untuk Perusahaan</h2>
        <p2>Temukan solusi untuk perusahaan dan startupmu</p2>
        <div class="box">
          <div class="sec3">
            <img src="asset/Gamification.png" height="150px" alt="" srcset="" />
            <h4>Gamification</h4>
            <button class="nav4">Info Lengkap</button>
          </div>
          <div class="sec3">
            <img src="asset/Talent_Hiring.png" height="150px" alt="" srcset="" />
            <h4>Talent Hiring</h4>
            <button class="nav4">Info Lengkap</button>
          </div>
          <div class="sec3">
            <img src="asset/Corporate_Training.png" height="150px" alt="" srcset="" />
            <h4>Corporate Training</h4>
            <button class="nav4">Info Lengkap</button>
          </div>
          <div class="sec3">
            <img src="asset/Job_Portal.png" height="150px" alt="" srcset="" />
            <h4>Job Portal</h4>
            <button class="nav4">Info Lengkap</button>
          </div>
        </div>
      </div>
    </div>
    <div class="section7" id="kelas">
      <div class="section77">
        <h2>Bisa Mulai dengan Coba Kelas GRATIS!</h2>
        <p>
          Tingkatkan skill, ikuti kelas gratis dari para profesional di
          bidangnya
        </p>
        <div class="box">
          <div class="sec7">
            <img
              src="asset/kelas-152-belajar-dan-berkarir-sebagai-programmer-thumb-20220914111658.png"
              height="150px"
              alt=""
              srcset=""
            />
            <h4>
              Belajar dan berkarir <br />
              sebagai programmer
            </h4>
          </div>
          <div class="sec7">
            <img
              src="asset/kelas-151-critical-thinking-meningkatkan-kualitas-hidup-dengan-berpikir-kritis-thumb-20220913151448.png"
              height="150px"
              alt=""
              srcset=""
            />
            <h4>
              Critical thinking <br />
              Meningkatkan kualitas hidup
            </h4>
          </div>
          <div class="sec7">
            <img
              src="asset/kelas-153-belajar-bahasa-inggris-dasar-thumb-20220913151501.png"
              height="150px"
              alt=""
              srcset=""
            />
            <h4>Belajar bahasa inggris dasar</h4>
          </div>
          <div class="sec7">
            <img
              src="asset/kelas-136-belajar-git-untuk-programmer-pemula-thumb-20220912184005.png"
              height="150px"
              alt=""
              srcset=""
            />
            <h4>
              Belajar git untuk programmer <br />
              pemula
            </h4>
          </div>
        </div>
      </div>
    </div>
    <div class="section8" id="pertanyaan">
      <div class="section88">
        <h2>Pertanyaan Seputar GAMELAB.ID</h2>
        <div class="image">
          <img src="asset/icon-faq-v2.png" alt="" srcset="" />
        </div>
        <div class="sec8">Apa itu Gamelab?</div>
        <div class="sec8">
          Apa saja program-program yang tersedia di Gamelab?
        </div>
        <div class="sec8">Apakah pelatihan dan magang di Gamelab gratis?</div>
        <div class="sec8">
          Apakah belajar di Gamelab dilakukan secara online?
        </div>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>
