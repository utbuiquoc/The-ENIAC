@assets
<link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
<script src="{{ asset('js/swiper-bundle.min.js' )}}"></script>
@endassets

<div class="">
    <h1 class="text-5xl text-center mt-16 mb-32">CÁC CÂU LẠC BỘ</h1>
    <section class="collection">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="content swiper-slide">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                    <div class="text-content">
                        <h3>Photography</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque,
                            dolores vel
                            culpa debitis officia expedita unde?</p>
                    </div>
                </div>
                <div class="content swiper-slide">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                    <div class="text-content">
                        <h3>Photography</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque,
                            dolores vel
                            culpa debitis officia expedita unde?</p>
                    </div>
                </div>
                <div class="content swiper-slide">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                    <div class="text-content">
                        <h3>Photography</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque,
                            dolores vel
                            culpa debitis officia expedita unde?</p>
                    </div>
                </div>
                <div class="content swiper-slide">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                    <div class="text-content">
                        <h3>Photography</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque,
                            dolores vel
                            culpa debitis officia expedita unde?</p>
                    </div>
                </div>
                <div class="content swiper-slide">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                    <div class="text-content">
                        <h3>Photography</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque,
                            dolores vel
                            culpa debitis officia expedita unde?</p>
                    </div>
                </div>
                <div class="content swiper-slide">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                    <div class="text-content">
                        <h3>Photography</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus ratione nesciunt atque,
                            dolores vel
                            culpa debitis officia expedita unde?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@script
<script>
    new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        loop:true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 150,
            modifier: 2.5,
            slideShadows: true,
        }, autoplay: {
            delay:3000,
            disableOnInteraction:false,
        }
    });
</script>
@endscript