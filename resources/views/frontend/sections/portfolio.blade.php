<section class="portfolio-area section-padding-top" id="portfolio-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">Portofolio Terbaru</h3>
                    <div class="desc">
                        <p>Selamat datang di portofolio terbaru kami. Di sini, Anda dapat melihat berbagai proyek yang telah kami kerjakan, mulai dari desain branding, antarmuka pengguna, pengalaman pengguna, hingga pengembangan web. Setiap proyek mencerminkan dedikasi kami terhadap kualitas dan inovasi. Jelajahi karya kami dan temukan bagaimana kami dapat membantu Anda mencapai tujuan Anda.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <ul class="filter-menu">
                    <li class="active" data-filter="*">All Projects</li>
                    <li data-filter=".mobile">Mobile Development</li>
                    <li data-filter=".development">Web Development</li>
                </ul>
            </div>
        </div>
        <div class="portfolio-wrapper">
            <div class="row portfolios">
                <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item mobile">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="images/portfolio-1.jpg" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <h4 class="title"><a href="{{ route('portfolio.details', ['id' => 1]) }}">Recyclerview App</a></h4>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.4s" class="col-md-6 col-lg-4 filter-item mobile">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="images/portfolio-2.jpg" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <h4 class="title"><a href="{{ route('portfolio.details', ['id' => 2]) }}">Github App</a></h4>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.5s" class="col-md-6 col-lg-4 filter-item mobile">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="images/portfolio-3.jpg" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <h4 class="title"><a href="{{ route('portfolio.details', ['id' => 3]) }}">Cancer Scan</a></h4>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item mobile">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="images/portfolio-4.jpg" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <h4 class="title"><a href="{{ route('portfolio.details', ['id' => 4]) }}">Story Scape</a></h4>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.4s" class="col-md-6 col-lg-4 filter-item mobile">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="images/portfolio-5.jpg" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <h4 class="title"><a href="{{ route('portfolio.details', ['id' => 5]) }}">Rukun Warga Bersatu</a></h4>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item development">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="images/portfolio-7.jpg" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <h4 class="title"><a href="{{ route('portfolio.details', ['id' => 6]) }}">Infinity Tech</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>