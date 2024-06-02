<div class="testimonial-section">
    <h2 class="testimonial-title">Umpan Balik</h2>
    <p class="testimonial-desc">Umpan balik berdasarkan oleh teman dan rekan kerja saya tentang pengalaman bekerja bersama saya. Mereka berbagi pandangan mereka tentang profesionalisme, keterampilan, dan dedikasi saya dalam setiap proyek yang saya kerjakan.</p>
    <div class="testimonial-slider">
        <div class="single-testimonial">
            <div class="quote">“</div>
            <div class="testimonial-header">
                <h4 class="title">Ferdinand Andhika Widiyan</h4>
            </div>
            <div class="content">
                <p>Adi adalah rekan kerja yang sangat berdedikasi dan profesional. Selama bekerja di lab, dia selalu siap membantu dan memberikan solusi atas setiap masalah yang muncul. Adi memiliki kemampuan teknis yang sangat baik dan selalu berusaha untuk meningkatkan keterampilannya. Dia juga sangat kooperatif dan mampu bekerja sama dengan baik dalam tim. Saya sangat merekomendasikan Adi untuk setiap proyek yang membutuhkan keahlian teknis dan kerja sama tim yang solid.</p>
            </div>
        </div>
        <div class="single-testimonial">
            <div class="quote">“</div>
            <div class="testimonial-header">
                <h4 class="title">Ariiq Maulana Guawijaya</h4>
            </div>
            <div class="content">
                <p>Saya sangat merekomendasikan Adi sebagai backend developer dan ingin sekali bekerja sama lagi. Adi adalah backend developer yang sudah terverifikasi, terutama dalam menggunakan Laravel. Adi dapat menyelesaikan tugas dengan cepat. Dia pekerja tim yang baik, dan pendengar yang baik. Ketika ada kendala dalam code saya, Adi dengan sigap memperbaikinya.</p>
            </div>
        </div>
        <div class="single-testimonial">
            <div class="quote">“</div>
            <div class="testimonial-header">
                <h4 class="title">Muhammad Farhan Faturrahman</h4>
            </div>
            <div class="content">
                <p>Selama asisten lab teamworknya udah cukup bagus bisa saling handle dan backup satu sama lain saat terjadi problem.</p>
            </div>
        </div>
        <div class="single-testimonial">
            <div class="quote">“</div>
            <div class="testimonial-header">
                <h4 class="title">Gede Putu Adyatma</h4>
            </div>
            <div class="content">
                <p>Selama saya bekerja sama membuat suatu project kuliah bersama Muhammad Adi Kurnianto, dia dapat bekerja sama dengan baik dengan saya dan bisa memberikan masukan dan informasi kepada rekan setimnya tentang project yang akan kita buat.</p>
            </div>
        </div>
    </div>
</div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        // Inisialisasi slider
        $('.testimonial-slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            adaptiveHeight: true,
            arrows: false, // Nonaktifkan navigasi panah
            autoplay: true, // Aktifkan autoplay
            autoplaySpeed: 3000 // Kecepatan autoplay dalam milidetik (3 detik)
        });

        // Setel tinggi yang sama untuk semua kotak testimonial
        function setEqualHeight() {
            var maxHeight = 0;
            $('.single-testimonial').each(function() {
                var thisHeight = $(this).outerHeight();
                if (thisHeight > maxHeight) {
                    maxHeight = thisHeight;
                }
            });
            $('.single-testimonial').css('height', maxHeight);
        }

        // Panggil fungsi setEqualHeight saat dokumen siap dan saat ukuran jendela diubah
        setEqualHeight();
        $(window).resize(function() {
            setEqualHeight();
        });
    });
</script>
</body>
</html>
