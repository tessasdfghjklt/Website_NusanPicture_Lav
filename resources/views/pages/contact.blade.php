@extends("layout.master")
@section('content')

<link rel="stylesheet" href="/css/style.css">
<link rel="shourtcut icon" type="x-icon" href="/foto/t.png">

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
                    <img src = "foto/WILD/w5.jpg" alt = "contact image">
                </div>
            </div>
        </div>
    </section>
    <!-- end of contact section -->
</main>
<!-- end of main content -->

@stop