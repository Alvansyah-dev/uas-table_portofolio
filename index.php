<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="style.css">
    <title>My Portofolio</title>
</head>
<body>
    <!-- Header design -->
    <header Class="header">
        <a href="#" Class="logo">Portfolio</a>

        <i class="fa-solid fa-bars" id="menu-icon"></i>

        <nav Class="navbar">
            <a href="#home" Class="active">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#portofolio">Portofolio</a>
            <a href="#table">Table</a>
            <a href="#contact">Contact</a> 
        </nav>
    </header>

    <!-- HOME SECTION DESIGN-->
    <section Class="home" id="home">
        <div Class="home-content"> 
            <h3>Hi, Myself</h3>
            <h1>Alvansyah</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p>Saya adalah mahasiswa yang sedang mendalami dunia pengembangan web dan bersemangat mengasah kemampuan di bidang teknologi digital. Melalui berbagai proyek pribadi dan kolaborasi, saya terus belajar membangun website yang responsif, fungsional, dan menarik secara visual.</p>
            <div Class="social-media">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-github"></i></a>
            </div>
            <a href="#" Class="btn">Download CV</a>
        </div> 

        <div Class="home-img">
            <img src="Gambar/G1.png" alt=>
        </div>
    </section>


    <!-- ABOUT SECTION DESIGN-->
     <section Class="about" id="about">
        <div Class="about-img">
            <img src="Gambar/G3.jpg" alt=>
        </div>

        <div Class="about-content">
            <h2 Class="heading">About <span>Me</span></h2>
            <h3>Halo! Nama saya Gilang Ilham Alvansyah, seorang mahasiswa Teknik Informatika di Universitas Nahdhotul Ulama' Sunan Giri Bojonegoro, yang sedang menekuni dunia pengembangan teknologi. </h3>
            <p>Ketertarikan saya terhadap teknologi dan desain digital mendorong saya untuk terus belajar, bereksperimen, dan menciptakan berbagai proyek web secara mandiri maupun dalam tim. Saya percaya bahwa pembelajaran terbaik datang dari praktik langsung. Karena itu, saya aktif mengikuti pelatihan, mengerjakan proyek-proyek pribadi, dan sesekali mengambil pekerjaan freelance untuk memperluas pengalaman saya. Saat ini, saya fokus mengembangkan kemampuan dalam HTML, CSS, JavaScript, serta framework seperti React dan Laravel.</p>
            <a href="#" Class="btn">Read More</a>
        </div>
     </section>

     <!-- SKILLS SECTION DESIGN-->
    <section Class="skills" id="skills">
        <h2 Class="heading">My <span>Skills</span></h2>
        <div Class="skills-container">
            <div Class="skills-box">
                <i class="fa-solid fa-code"></i>
                <h3>Web Developer</h3>
                <p>HTML, CSS, JavaScript</p>
                <a href="#" Class="btn">Read More</a>
                </div>

            <div Class="skills-box">
                <i class="fa-solid fa-palette"></i>
                <h3>UI/UX Design</h3>
                <p>Figma & Adobe XD</p>
                <a href="#" Class="btn">Read More</a>
                </div>
                    
            <div Class="skills-box">
                <i Class="fa-brands fa-android"></i>
                <h3>App Development</h3>
                <p>HTML, CSS, JavaScript</p>
                <a href="#" Class="btn">Read More</a>
                </div>
            </div>
    </section>

    <!-- PORTOFOLIO SECTION DESIGN-->
    <section Class="portofolio" id="portofolio">
        <h2 class="heading">Latest <span>Portfolio</span></h2>

        <div Class="portofolio-container">
            <div Class="portofolio-box">
                <img src="Gambar/G2.jpg" alt="">
                <div Class="portofolio-layer">
                    <h4>WORKSHOP</h4>
                    <p>Pemanfaatan TIK Dalam Pembelajaran Jenjang Sekolah Dasar</p>
                    <i class="fa-solid fa-up-right-from-square"></i>
                </div>
            </div>

            <div Class="portofolio-box">
                <img src="Gambar/G6.jpg" alt="">
                <div Class="portofolio-layer">
                    <h4>NGODING</h4>
                    <p>Mengerjakan tugas membuat WEB Portofolio sambil ngopi di Warkop</p>
                    <i class="fa-solid fa-up-right-from-square"></i>
                </div>
            </div>

            <div Class="portofolio-box">
                <img src="Gambar/G7.jpg" alt="">
                <div Class="portofolio-layer">
                    <h4>W3SCOOLS</h4>
                    <p>Belajar dan mengarjakan tugas w3shools</p>
                    <i class="fa-solid fa-up-right-from-square"></i>
                </div>
            </div>

        </div>
    </section>

    <!-- TABLE SECTION DESIGN-->
    <section Class="table" id="table">
        <h2 Class="heading">Table <span>Portofolio</span></h2>
        <div Class="table-container">
            <!-- Tambah tombol -->
            <a href="tambah.php" class="btn">Tambah Kegiatan</a>
            
            <table>
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Kegiatan</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                <?php include 'tampil.php'; ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- CONTACT SECTION DESIGN -->
    <section Class="contact" id="contact">
        <h2 Class="heading">Contact <span>Me</span></h2>

        <form action="#">
            <div Class="input-box">
                <input type="text" placeholder="Full Name">
                <input type="email" placeholder="Email Address">
            </div>

            <div Class="input-box">
                <input type="number" placeholder="Mobile Number">
                <input type="text" placeholder="Email Subject">
            </div>
            <textarea name="" id="" cols="30" rows="10"  placeholder="Your Message"></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>
    </section>

     <!-- FOOTER DESIGN  -->

    <footer Class="footer">
        <div Class="footer-text">
            <p>Copyright &copy; 2025 by @alvansyah | All Right Reserved</p>
        </div>

        <div Class="footer-iconTop">
            <a href="#home"><i Class="fa-solid fa-angle-up"></i></a>
        </div>
    </footer>

    <!-- SCROLL REVEAL JS -->
      <script src="https://unpkg.com/scrollreveal"></script>

    <!-- TYPED JS -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <!-- JS FILE -->
    <script src="main.js"></script>
</body>
</html>