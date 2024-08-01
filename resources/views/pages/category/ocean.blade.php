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
                        <div><a href="foto/OCEAN/o1.jpg" data-lightbox="ocean"><img src="foto/OCEAN/o1.jpg"></a></div>
                        <div><a href="foto/OCEAN/o2.jpg" data-lightbox="ocean"><img src="foto/OCEAN/o2.jpg"></a></div>
                        <div><a href="foto/OCEAN/o3.jpg" data-lightbox="ocean"><img src="foto/OCEAN/o3.jpg"></a></div>
                        <div><a href="foto/OCEAN/o4.jpg" data-lightbox="ocean"><img src="foto/OCEAN/o4.jpg"></a></div>
                        <div><a href="foto/OCEAN/o5.jpg" data-lightbox="ocean"><img src="foto/OCEAN/o5.jpg"></a></div>
                        <div><a href="foto/OCEAN/o6.jpg" data-lightbox="ocean"><img src="foto/OCEAN/o6.jpg"></a></div>
                        <div><a href="foto/OCEAN/o7.jpg" data-lightbox="ocean"><img src="foto/OCEAN/o7.jpg"></a></div>
                        <div><a href="foto/OCEAN/o8.jpg" data-lightbox="ocean"><img src="foto/OCEAN/o8.jpg"></a></div>
                        <div><a href="foto/OCEAN/o9.jpg" data-lightbox="ocean"><img src="foto/OCEAN/o9.jpg"></a></div>
                        <div><a href="foto/OCEAN/o10.jpg" data-lightbox="ocean"><img src="foto/OCEAN/o10.jpg"></a></div>
                        <div><a href="foto/OCEAN/o11.jpg" data-lightbox="ocean"><img src="foto/OCEAN/o11.jpg"></a></div>
                        <div><a href="foto/OCEAN/o12.jpg" data-lightbox="ocean"><img src="foto/OCEAN/o12.jpg"></a></div>
                        <div><a href="foto/OCEAN/o13.jpg" data-lightbox="ocean"><img src="foto/OCEAN/o13.jpg"></a></div>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
                </div>
            </div>
        </section>
        <!-- end of portfolio section -->
        
@stop