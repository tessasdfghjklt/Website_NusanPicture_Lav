@extends("layout.master")
@section('content')

<link rel="stylesheet" href="/css/style.css">
<link rel="shourtcut icon" type="x-icon" href="/foto/t.png">
    
    <!-- header -->
    <header id="header" class="vh-100 flex">
        <div class="container">
            <div class="header-content">
                <li><a href="\">
                <h1>Nusanpicture<br><span class="typewrite" data-loop="yes" data-speed="100" data-delay="2000" data-words='["ocean", "mountain", "city", "Pople"]'></span></h1></a></li>
                <h3>Indonesia Picture Gallery</h3>

                <ul class="social-links">
                    <li>
                        <a href="https://www.facebook.com/PoliteknikNegeriJakartaOfficial/?locale=id_ID" class="flex">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/humaspnj?lang=en" class="flex">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/politekniknegerijakarta/" class="flex">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://pnj.ac.id/" class="flex">
                            <i class="fa-solid fa-globe"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <!-- main content -->
    <main>
        <!-- about section -->
        <section id="about" class="about py-7">
            <div class="container">
                <div class="about-content grid">
                    <div class="about-left">
                        <img src="foto/PEOPLE/p5.jpg" alt="">
                    </div>
                    <div class="about-right">
                        <div class="title">
                            <h2>About the developer</h2>
                        </div>
                        <p class="lead">We are students who work in the field of multimedia broadband telecommunications from the Jakarta State Polytechnic campus. We created this website to make it easier for users to find interesting photos of Indonesia.</p>
                        <p class="lead">Some of the photos that we have displayed below can be downloaded for free and can be an inspiration for users.</p>
                        <a href="#work" class="btn-down">
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->

        <!-- work section -->
        <section id="work" class="vh-100 flex py-7">
            <div class="container">
                <div class="work-content">
                    <div class="title">
                        <h2>here in Indonesia.</h2>
                    </div>
                    <ul class="work-top grid">
                        <li>
                        <p>Indonesia has an abundant cultural heritage. The region covering many islands from Sabang to Merauke creates cultural diversity originating from various ethnic groups. This diversity is the inspiration for the motto Bhinneka Tunggal Ika, which means that even though we are different, we are still one. This motto emphasizes that the diversity that exists in our country is a unique richness and beauty, which other countries do not have.</p>
                        <p>We are rich because we have everything we need, not everything that we want.</p>
                        </li>
                    </ul>

                    <div class="work-bottom grid">
                        <div>
                            <span class="icon"><i class="fa-solid fa-tree"></i><a href="\wild"></span>
                            <h3>Wildlife</h3>
                        </div>
                        <div>
                            <span class="icon"><i class="fa-solid fa-city"></i><a href="\city"></span>
                            <h3>City</h3>
                        </div>
                        <div>
                            <span class="icon"><i class="fa-solid fa-water"></i><a href="\ocean"></span>
                            <h3>Ocean</h3>
                        </div>
                        <div>
                            <span class="icon"><i class="fa-solid fa-person"></i><a href="\people"></span>
                            <h3>People</h3>
                        </div>
                    </div>
                    <a href="#portfolio" class="btn-down btn-down-white">
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </div>
            </div>
        </section>
        <!-- end of work section -->

        <!-- portfolio section -->
        <section id="portfolio" class="vh-100 py-7">
            <div class="container">
                <div class="portfolio-content">
                    <div class="title">
                        <h2>our Gallery</h2>
                        <a href="#contact" class="btn-down">
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>

                    <div class="portfolio-grid grid">
                        <div><a href="foto/CITY/c1.jpg" data-lightbox="portfolio"><img src="foto/CITY/c1.jpg"></a></div>
                        <div><a href="foto/WILD/w1.jpeg" data-lightbox="portfolio"><img src="foto/WILD/w1.jpeg"></a></div>
                        <div><a href="foto/PEOPLE/p1.jpg" data-lightbox="portfolio"><img src="foto/PEOPLE/p1.jpg"></a></div>
                        <div><a href="foto/OCEAN/o1.jpg" data-lightbox="portfolio"><img src="foto/OCEAN/o1.jpg"></a></div>
                        <div><a href="foto/CITY/c2.jpg" data-lightbox="portfolio"><img src="foto/CITY/c2.jpg"></a></div>
                        <div><a href="foto/WILD/w2.jpeg" data-lightbox="portfolio"><img src="foto/WILD/w2.jpeg"></a></div>
                        <div><a href="foto/PEOPLE/p2.jpg" data-lightbox="portfolio"><img src="foto/PEOPLE/p2.jpg"></a></div>
                        <div><a href="foto/OCEAN/o2.jpg" data-lightbox="portfolio"><img src="foto/OCEAN/o2.jpg"></a></div>
                    </div>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
                    <a href="\loadmore" class="load-more">Load More</a>
                </div>
            </div>
        </section>
        <!-- end of portfolio section -->

        <!-- contact section -->
        <section id="contact" class="py-7">
            <div class="container">
                <div class="contact-content flex">
                    <div class="contact-left">
                        <div class="title">
                            <h2>contact with Us</h2>
                        </div>
                        <p class="lead"><i class="fas fa-phone-alt"></i> +62 858-111-72639 (Rafa Banafsaj)</p>
                        <p class="lead"><i class="fas fa-phone-alt"></i> +62 813-8873-5633 (Tessa Monica)</p>
                        <p class="lead"><i class="fas fa-envelope"></i> tessa.monica.te22@mhsw.pnj.ac.id</p>
                        <p class="lead"><i class="fas fa-envelope"></i> rafa.banafsaj.maulana.te22@mhsw.pnj.ac.id</p>
                        <form action="">
                            <input type="text" class="form-control" placeholder="Your name here ...">
                            <input type="email" class="form-control" placeholder="Your email here">
                            <input type="submit" class="btn-submit btn" value="Submit">
                        </form>
                    </div>

                    <div class="contact-right">
                        <img src="foto/WILD/w8.jpg" alt="contact image">
                    </div>
                </div>
            </div>
        </section>
        <!-- end of contact section -->
    </main>
    <!-- end of main content -->

@stop