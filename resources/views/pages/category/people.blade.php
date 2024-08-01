@extends("layout.master")
@section('content')

<link rel="stylesheet" href="/css/style.css">
<link rel="shourtcut icon" type="x-icon" href="/foto/t.png">

    <!-- header -->
    <header id = "header" class = "vh-100 flex">
        <div class = "container">
            <div class = "header-content">
                <li><a href="\">
                <h1>Nusanpicture<br><span class = "typewrite" data-loop = "yes" data-speed = "100" data-delay = "2000" data-words = '["ocean", "mountain", "city", "PEOPLE"]'></span></h1></a></li>
                <h3>Indonesia Picture gallery</h3>

                <ul class = "social-links">
                    <li>
                        <a href = "https://www.facebook.com/PoliteknikNegeriJakartaOfficial/?locale=id_ID" class = "flex">
                            <i class = "fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href = "https://twitter.com/humaspnj?lang=en" class = "flex">
                            <i class = "fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href = "https://www.instagram.com/politekniknegerijakarta/" class = "flex">
                            <i class = "fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href = "https://pnj.ac.id/" class = "flex">
                            <i class="fa-solid fa-globe"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- end of header -->

        <!-- portfolio section -->
        <section id = "portfolio" class = "vh-100 py-7">
            <div class = "container">
                <div class = "portfolio-content">
                    <div class = "title">
                        <h2>our Gallery</h2>
                    </div>
                    <div class="portfolio-grid grid">
                        <div><a href="foto/PEOPLE/p1.jpg" data-lightbox="people"><img src="foto/PEOPLE/p1.jpg"></a></div>
                        <div><a href="foto/PEOPLE/p2.jpg" data-lightbox="people"><img src="foto/PEOPLE/p2.jpg"></a></div>
                        <div><a href="foto/PEOPLE/p3.jpg" data-lightbox="people"><img src="foto/PEOPLE/p3.jpg"></a></div>
                        <div><a href="foto/PEOPLE/p4.jpg" data-lightbox="people"><img src="foto/PEOPLE/p4.jpg"></a></div>
                        <div><a href="foto/PEOPLE/p5.jpg" data-lightbox="people"><img src="foto/PEOPLE/p5.jpg"></a></div>
                        <div><a href="foto/PEOPLE/p6.jpg" data-lightbox="people"><img src="foto/PEOPLE/p6.jpg"></a></div>
                        <div><a href="foto/PEOPLE/p7.jpg" data-lightbox="people"><img src="foto/PEOPLE/p7.jpg"></a></div>
                        <div><a href="foto/PEOPLE/p8.jpg" data-lightbox="people"><img src="foto/PEOPLE/p8.jpg"></a></div>
                        <div><a href="foto/PEOPLE/p9.jpg" data-lightbox="people"><img src="foto/PEOPLE/p9.jpg"></a></div>
                        <div><a href="foto/PEOPLE/p10.jpg" data-lightbox="people"><img src="foto/PEOPLE/p10.jpg"></a></div>
                    </div>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
                </div>
            </div>
        </section>
        <!-- end of portfolio section -->

    </main>
    <!-- end of main content -->
    
@stop