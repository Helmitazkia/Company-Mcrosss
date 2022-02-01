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
                            <div class="col text-center">
                                <div class="spacer-single"></div>
                                <h1>Tentang Kami</h1>
                                <p>
                                    Penggoda Halaman Luar Biasa Di Sini</p>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->


    <section class="no-top" data-bgimage="url(images/background/6.png) center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 ">
                    <img src="images/misc/1.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 offset-md-1">
                    <h3>Apa yang membuat kita berbeda?</h3>
                    <p>M-Crosss Kami adalah perusahaan yang bergerak di bidang Web Development atau developer
                        website. Dengan pengalaman kami yang sudah lama dalam bidang ini ( 2019 ), kami siap
                        membangun sebuah website dengan standart yang tinggi serta dapat menciptakan identitas
                        visual dan pemasaran online dari perusahaan atau bisnis Anda...</p>
                    <p>Hadir sejak tahun 2019 sebagai Developer M-Crosss, saat ini sudah menjadi team
                        sebagai M-Crosss group,Pekerjaan kami berhubungan dengan penemuan & inovasi teknologi
                        sistem informasi, dimana proses tersebut membawa ide dari hipotesis menjadi produk yang
                        dapat digunakan atau dikembangkan.
                        Kami bekerjasama dengan para software engineer dan programmer di bidang information
                        systems, machine learning, natural language processing, expert system & robotics digital
                        automation tools..</p>
                </div>
            </div>
            <div class="spacer-double"></div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3>Detail Sistem Toko</h3>
                    <p>Toko online produk virtual kami didukung platform cloud sebagai penyimpanan file,
                        diantaranya Dropbox, Google Drive dan disk Yandex.</p>
                    <p>Untuk metode pembayaran, kami menggunakan PayPal, Stripe, Iyzico, Razorpay, Skrill, Bank
                        & Midtrans sebagai pemroses pembayaran secara otomatis..</p>
                    <p>Pengguna dapat dengan mudah masuk ke sistem dengan menggunakan akun sosial, seperti
                        Gmail, Linkedin, Vkontakte, Facebook, Twitter dan Github..</p>
                </div>
                <div class="col-md-5  offset-md-1">
                    <img src="images/misc/5.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="spacer-double"></div>
            <div class="row align-items-center">
                <div class="col-md-5 ">
                    <img src="images/misc/4.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="spacer-double"></div>
                    <h3>Kategori Dan produk</h3>
                    <p>1. Desain
                        Spanduk, Logo, Kartu, Dokumen, Undangan, Curriculum Vitae, Wallpaper, Kalender,
                        Template, Fonts</p>
                    <p>2. Pemrograman
                        Script PHP, Visual Basic 6, Visual Basic Net, Aplikasi Android, Game Android, Aplikasi iOS, Game
                        iOS, Arduino</p>
                    <p>3. Website
                        Template Backend, Template Frontend, Template HTML5, Template CMS, Themes CMS, Plugins CMS,
                        Widgets CMS</p>
                    <p>4. Jasa
                        Desainer, Penulis, Programmer, Sosial Media, Pemasaran</p>
                </div>
            </div>
            <div class="spacer-double"></div>
            <div class="spacer-double"></div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3>Metode Pembayaran</h3>
                    <p>1. Offline Payment - Bank transfer , Paypal</p>
                    <h4>Mata Uang Yang di Dukung</h4>
                    <p>2. Dollar,Rupiah</p>
                    <h4>Hubungi Kami</h4>
                    <p>Email : Mcrosss9091@gmail.com <br>Whatsapp : 085773474149</p>

                </div>
                <div class="col-md-5  offset-md-1">
                    <img src="images/misc/2.png" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section>
</div>
<!-- content close -->
@endsection
