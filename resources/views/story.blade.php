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
                                <h1>Sejarah Kita</h1>
                                <p>Our Story Kami</p>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <section class="no-top pos-top relative">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <ul class="timeline">
                        <li>
                            <div class="timeline-badge"></div>
                            <div class="timeline-panel">
                                <div class="timeline-body">
                                    <div class="row">
                                        <div class="col-md-6 timeline-pic" data-bgimage="url(images/history/1.jpg)">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="timeline-story">
                                                <h5>2019-02-08</h5>
                                                <div class="clearfix"></div>
                                                <h4>
                                                    Mulailah dengan ide</h4>
                                                <p>
                                                    Disini saya Helmi Tazkia Sebagai CEO M-crosss mempunyai Ide untuk
                                                    membangun jasa pembuatan website.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge"></div>
                            <div class="timeline-panel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="timeline-story">
                                            <h5>2019-03-09
                                            </h5>
                                            <div class="clearfix"></div>
                                            <h4>Mulai Terbentuk</h4>
                                            <p>
                                                Hadir sejak tahun 2019 sebagai Developer M-Crosss, saat ini sudah
                                                menjadi team sebagai M-Crosss group
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 timeline-pic" data-bgimage="url(images/history/2.jpg)">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge"></div>
                            <div class="timeline-panel">
                                <div class="timeline-body">
                                    <div class="row">
                                        <div class="col-md-6 timeline-pic" data-bgimage="url(images/history/3.jpg)">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="timeline-story">
                                                <h5>2020-04-10</h5>
                                                <div class="clearfix"></div>
                                                <h4>Bekerjasama</h4>
                                                <p>
                                                    Kami bekerjasama dengan para software engineer dan programmer di
                                                    bidang information systems, machine learning, natural language
                                                    processing, expert system & robotics digital automation tools
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge"></div>
                            <div class="timeline-panel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="timeline-story">
                                            <h5>2022</h5>
                                            <div class="clearfix"></div>
                                            <h4>sekarang</h4>
                                            <p>
                                                Pekerjaan kami berhubungan dengan penemuan & inovasi teknologi sistem
                                                informasi
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 timeline-pic" data-bgimage="url(images/history/4.jpg)">
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

  

</div>
<!-- content close -->

@endsection
