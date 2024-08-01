@extends("layout.master")
@section('content')

<link rel="stylesheet" href="/css/style.css">
<link rel="shourtcut icon" type="x-icon" href="/foto/t.png">

<!-- main content -->
<main>
    <!-- about section -->
    <section id = "about" class = "about py-7">
        <div class = "container">
            <div class = "about-content grid">
                <div class = "about-left">
                    <img src = "foto/OCEAN/o2.jpg" alt = "">
                </div>
                <div class = "about-right">
                    <div class = "title">
                        <h2>About the developer</h2>
                    </div>
                    <p class = "lead">We are students who work in the field of multimedia broadband telecommunications from the Jakarta State Polytechnic campus. We created this website to make it easier for users to find interesting photos.</p>
                    <p class = "lead">Some of the photos that we have displayed below can be downloaded for free and can be an inspiration for users.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end of about section -->

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
                    <img src = "foto/WILD/w8.jpg" alt = "contact image">
                </div>
            </div>
        </div>
    </section>
    <!-- end of contact section -->
</main>
<!-- end of main content -->

@stop