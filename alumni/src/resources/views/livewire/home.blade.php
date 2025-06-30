<main class="main">
    <!--? slider Area Start-->
    <section="home" id="home" class="home section">
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9">
                                <div class="hero__caption">
                                    <h1>Alumni Information Manager <span>Metro Rajeg</span> University</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? our info Start -->
        <div class="our-info-area pt-70 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-info mb-30">
                            <div class="info-icon">
                                <span class="flaticon-support"></span>
                            </div>
                            <div class="info-caption">
                                <p>Call Us Anytime</p>
                                <span>+ (62) 811-8336-311</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-info mb-30">
                            <div class="info-icon">
                                <span class="flaticon-clock"></span>
                            </div>
                            <div class="info-caption">
                                <p>Operating Hours</p>
                                <span>Mon - Sat 8.00 - 18.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-info mb-30">
                            <div class="info-icon">
                                <span class="flaticon-place"></span>
                            </div>
                            <div class="info-caption">
                                <p>Rajeg, C 15540</p>
                                <span>Indonesia, Rajeg - 15540</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our info End -->
        <!--? Categories Area Start -->
        <div class="categories-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <section id="tools" class="tools section">
                        <div class="section-tittle text-center mb-80">
                            <h2>TOOLS WE USED</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                            <img src="front/assetss/img/vscode.png" alt="" style="width: 100px; height: auto;">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">VScode</a></h5>
                                <p>A lightweight and flexible code editor used to write, edit and manage all project files efficiently.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                            <img src="front/assetss/img/docker-mark-blue.png" alt="" style="width: 100px; height: auto;">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Docker</a></h5>
                                <p>Enables us to develop and deploy in a consistent environment using container-based infrastructure for smooth collaboration.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                            <img src="front/assetss/img/Laravel.png" alt="" style="width: 100px; height: auto;">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">laravel</a></h5>
                                <p>A modern PHP framework that we used to build a full-featured, secure, and easy-to-develop alumni system.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        </section>
        <!-- Categories Area End -->
        <!--? About Area Start -->
        <section id="about" class="about section">
            <div class="about-low-area padding-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="about-caption mb-50">
                                <!-- Section Tittle -->
                                <div class="section-tittle mb-35">
                                    <span>About Our System</span>
                                    <h2>An Integrated Alumni Management Solution for Metro Rajeg University</h2>
                                </div>
                                <p>The Alumni Information Manager Metro Rajeg University is designed to strengthen the connection between the university and its graduates through a modern, efficient, and sustainable platform. It provides a seamless experience for tracking alumni data, sharing information, and fostering professional networking that benefits both the institution and its alumni.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <!-- about-img -->
                            <div class="about-img ">
                                <div class="about-font-img">
                                    <img src="front/assetss/img/gallery/about2.png" alt="">
                                </div>
                                <div class="about-back-img d-none d-lg-block">
                                    <img src="front/assetss/img/gallery/about1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--Team Ara Start -->
        <section id="alumni" class="Alumni List section ">
            <div class="team-area section-padding30">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="cl-xl-7 col-lg-8 col-md-10">
                            <!-- Section Tittle -->
                            <div class="section-tittle text-center mb-70">
                                <span></span>
                                <h2>Alumni List</h2>
                            </div>
                        </div>
                    </div>
                    @php
                    use App\Models\Alumni;
                    $Alumni = Alumni::all();
                    @endphp
                    <div class="row">
                        @foreach ($Alumni as $alumni)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-team mb-30 text-center">
                                <div class="team-img">
                                    <img src="{{ Storage::url($alumni->image ?? 'default.jpg') }}" alt="">
                                    <div class="team-caption">
                                        <h3><a href="#">{{ $alumni->nama }}</a></h3>
                                        <p>{{ $alumni->nim }}</p>
                                        <!-- Blog Social -->
                                        <div class="team-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <!-- Team Ara End -->
        </section>

</main>