@extends("layout.master")
@section('content')

<link rel="stylesheet" href="/css/style.css">
<link rel="shourtcut icon" type="x-icon" href="/foto/t.png">

    <!-- work section -->
    <section id = "work" class = "vh-100 flex py-7">
        <div class = "container">
            <div class = "work-content">
                <div class = "title">
                    <h2>Our Campus</h2>
                </div>
                <ul class = "work-top grid">
                    <li>
                    <p>Politeknik negeri jakarta</p>
                    </li>
                </ul>
                <div id="map"></div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31721.43819999433!2d106.78556177431643!3d-6.3707761999999954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec1cabb59bdf%3A0x28b4f84e4677f329!2sJakarta%20State%20Polytechnic!5e0!3m2!1sen!2sid!4v1715167366065!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <div class = "work-bottom grid">
                    <div>
                        <span class = "icon"><i class="fa-solid fa-tree"></i><a href = "\wild"></span>
                        <h3>Wildlife</h3>
                    </div>
                    <div>
                        <span class = "icon"><i class="fa-solid fa-city"></i><a href = "\city"></span>
                        <h3>City</h3>
                    </div>
                    <div>
                        <span class = "icon"><i class="fa-solid fa-water"></i><a href = "\ocean"></span>
                        <h3>Ocean</h3>
                    </div>
                    <div>
                        <span class = "icon"><i class="fa-solid fa-person"></i><a href = "\people"></span>
                        <h3>People</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of work section -->

    <!-- contact section -->
    <section id = "contact" class = "py-7">
        <div class = "container">
            <div class = "contact-content flex">
                <div class = "contact-left">
                    <div class="title">
                        <h2>contact with Us</h2>
                    </div>
                    <p class = "lead"><i class = "fas fa-phone-alt"></i> +62 858-111-72639 (Rafa Banafsaj)</p>
                    <p class = "lead"><i class = "fas fa-phone-alt"></i> +62 813-8873-5633 (Tessa Monica)</p>
                    <p class = "lead"><i class = "fas fa-envelope"></i> tessa.monica.te22@mhsw.pnj.ac.id</p>
                    <p class = "lead"><i class = "fas fa-envelope"></i> rafa.banafsaj.maulana.te22@mhsw.pnj.ac.id</p>
                    <form action="">
                        <input type = "text" class = "form-control" placeholder="Your name here ...">
                        <input type = "email" class = "form-control" placeholder="Your email here">
                        <input type = "submit" class = "btn-submit btn" value = "Submit">
                    </form>
                </div>

                <div class = "contact-right">
                    <img src = "foto/PEOPLE/p11.jpg" alt = "contact image">
                </div>
            </div>
        </div>
    </section>
    <!-- end of contact section -->
</main>
<!-- end of main content -->
@stop