<header class="header-area parallax-bg" id="home-page"
    @if($hero)
        style="background: url('{{ asset($hero->image) }}') center center no-repeat; background-size: cover;"
    @endif
>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="header-text">
                    <h3 class="typer-title" data-wow-delay="0.2s">Halo, perkenalkan nama saya</h3>
                    <h1 class="title wow fadeInUp" data-wow-delay="0.3s">{{ $hero->title ?? 'MUHAMMAD ADI KURNIANTO' }}</h1>
                    <div class="desc" data-wow-delay="0.4s">
                        <p id="typed-text"></p>
                    </div>
                    @if ($hero && $hero->btn_text)
                        <a href="{{ $hero->btn_text }}" class="button-dark mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">{{ $hero->btn_text }}
                            <span class="dir-part"></span>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>

@push('styles')
    <style>
        #typed-text {
            display: inline-block;
            white-space: nowrap;
        }
    </style>
@endpush

@push('scripts')
    <!-- Include typed.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        $(document).ready(function() {
            console.log('Initializing typer with default title');
            $('.header-area .typer-title').typer(["Halo, perkenalkan nama saya"]);

            // Initialize typed.js for the sub_title
            var options = {
                strings: ["UI/UX", "Mobile Development"],
                typeSpeed: 50,
                backSpeed: 50,
                backDelay: 2000,
                loop: true,
                showCursor: false // Hide the blinking cursor
            };

            var typed = new Typed("#typed-text", options);
        });
    </script>
@endpush