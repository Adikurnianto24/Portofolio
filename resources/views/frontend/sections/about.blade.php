<section class="about-area section-padding-top">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <figure class="about-image">
                    @if($about)
                        <img src="{{ asset($about->image) }}" alt="" class="wow fadeInUp" data-wow-delay="0.3s">
                    @else
                        <img src="{{ asset('frontend/assets/images/profile_about.png') }}" alt="" class="wow fadeInUp" data-wow-delay="0.3s">
                    @endif
                </figure>
            </div>
            <div class="col-lg-6">
                <div class="about-text">
                    <h3 class="title wow fadeInUp" data-wow-delay="0.3s">{{ $about->title ?? 'Deskripsi diri saya' }}</h3>
                    <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                        {!! $about->description ?? 'Mahasiswa Teknik Informatika Universitas Gunadarma yang memiliki minat dalam pemrograman, pemahaman tentang keamanan sistem, aplikasi, pengembangan web dan 
manajemen basis data. Terampil dalam bahasa pemrograman Golang, Kotlin, Java, Python, C++, akrab dengan HTML, CSS, JavaScript dan 
SQL. Memiliki pengalaman aktif dalam proyek pembuatan dan pengembangan (UI/UX) untuk situs web dan aplikasi. Berkomitmen untuk terus 
belajar dan berkontribusi pada tim yang inovatif.' !!}
                    </div>
                    <a href="{{ asset('resume/MUHAMMAD ADI KURNIANTO-resume.pdf') }}" class="button-primary-trans mouse-dir wow fadeInUp"
                        data-wow-delay="0.5s" download>
                        <span class="icon"><i class="fal fa-download"></i></span>
                        <span class="text">Download CV</span>
                        <span class="dir-part"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>