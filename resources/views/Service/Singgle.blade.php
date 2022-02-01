@extends('Layout/v_master')
@section('content')

<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <!-- section begin -->
    <section id="subheader" data-bgimage="url(images/background/5.png) bottom">
        <div class="center-y relative text-center" data-scroll-speed="4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action='blank.php' class="row" id='form_subscribe' method="post" name="myForm">
                            <div class="col-md-12 text-center">
                                <h1>Our Services</h1>
                                <p>Awsome Page Teaser Here</p>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <section class="no-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-6 mb30">
                    <div class="fp-wrap f-invert mb20">
                        <div class="fp-icon"><i class="fa fa-desktop"></i></div>
                        <img src="images/services/1.jpg" class="fp-image img-fluid" alt="">
                    </div>

                    <h4>Website Design</h4>
                    <p>Jika saat ini Anda membutuhkan sebuah website yang mengutamakan kualitas, Anda sudah berada di
                        tempat yang tepat. Karena kami membuat website Anda semenarik mungkin sesuai dengan kebutuhan
                        promosi produk atau bisinis Anda</p>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 mb30">
                    <div class="fp-wrap f-invert mb20">
                        <div class="fp-icon"><i class="fa fa-paper-plane-o"></i></div>
                        <img src="images/services/2.jpg" class="fp-image img-fluid" alt="">
                    </div>
                    <h4>Pengelolaan Content Website</h4>
                    <p>Kami mempunyai misi dan visi untuk selalu membantu klien kami dalam mempromosikan produknya
                        melalui website yang kami buat. Setelah website selesai, support untuk pengelolaan content
                        website akan selalu kami berikan demi kepuasan Anda</p>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 mb30">
                    <div class="fp-wrap f-invert mb20">
                        <div class="fp-icon"><i class="fa fa-line-chart"></i></div>
                        <img src="images/services/3.jpg" class="fp-image img-fluid" alt="">
                    </div>

                    <h4>SEO dengan Google AdWords</h4>
                    <p>Sebuah strategi pemasaran periklanan yang menggunakan mesin pencari google sebagai sarana
                        beriklan, dengan menggunakan layanan ini iklan website anda akan dibaca oleh banyak orang
                        diseluruh dunia. Jadi akan banyak pengunjung ke website anda nantinya..</p>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb30">
                    <div class="fp-wrap f-invert mb20">
                        <div class="fp-icon"><i class="fa fa-hdd-o"></i></div>
                        <img src="images/services/foto2.jpg" class="fp-image img-fluid" alt="">
                    </div>

                    <h4>IT Konsultasi</h4>
                    <p>Diskusi tentang website sangat dibutuhkan untuk menunjang bisnis yang sedang atau akan Anda
                        lakukan. kami bisa membantu anda memberikan ide terkait dengan promosi produk atau bisnis anda.
                    </p>

                </div>



                <div>
                </div>
    </section>
</div>
<!-- content close -->

@endsection
