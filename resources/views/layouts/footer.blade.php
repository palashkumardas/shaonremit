    @php $contact = App\Models\Contact::get()->first() @endphp
  <!-- -------footer----------- -->
  <footer class="footer">
    <div class="container">
        <div class="row justify-content-center g-4 px-lg-5 px-md-0">
            <div class="col-lg-3 col-md-5 col-11">
                <div class="footer-content">
                    <img src="{{asset('frontend/assets/images/logo.png')}}" alt="" class="img-fluid" width="80%" height="">
                </div>
            </div>
            <div class="col-lg-3 col-md-5 col-11">
                <div class="footer-content">
                    <h6>USEFUL LINKS</h6>
                    <a href="{{url('/')}}">HOME</a>
                    <a href="{{url('/about/')}}">ABOUT US</a>
                    <a href="{{url('/terms')}}">TEARMS & CONDITIONS</a>
                    <a href="{{url('/privacy')}}">PRIVACY POLICY</a>
                    <a href="{{url('/cookies')}}">COOKIES POLICY</a>
                </div>
            </div>
            <div class="col-lg-2 col-md-5 col-11">
                <div class="footer-content">
                    <h6>OUR SERVICES</h6>
                    <a href="{{url('/services/')}}">BANK TRANSFER</a>
                    <a href="{{url('/services/')}}">CASH PICKUP</a>
                    <a href="{{url('/services/')}}">MOBILE WALLET</a>
                </div>
            </div>
            <div class="col-lg-2 col-md-5 col-11">
                <div class="footer-content m-0">
                    <h6>POWERED BY</h6>
                    <img src="{{asset('frontend/assets/images/power.png')}}" alt="">
                </div>
            </div>
            <div class="col-10 p-0">
                <p class="footer-bottom-content">"SHAON TRADERS LIMITED, a company incorporated in England with registered number 09344014 at 80 Queens Crescent, London, United Kingdom, NW5 4EB.The Shaon Traders Limited is registered with FCA as PSD agent, FRN 802320 under Worldwide West 2 East services Limited, trading as WORLDWIDE SERVICES (The Principal). Worldwide Services FRN in FCA register is 563795 with company registration no 07684314 at Midsummer Court, 314 Midsummer Boulevard, 203-5, Central Milton Keynes, Milton Keynes, MK9 2UB."</p>
            </div>
        </div>

    </div>
</footer>
<div class="footer-condition">
    <div class="container">
        <p>Copyright Shaon Trander Ltd @ All Rights Reserved</p>
    </div>
</div>

{{-- back top --}}
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="fas fa-long-arrow-alt-up"></i></a>
<!--Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- custom JS code after importing jquery and owl -->

<script src="frontend/assets/js/main.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel();
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            991: {
                items: 2
            }
        }
    })

</script>
<!-- loader -->
<script>
    var preloader = document.getElementById('loader');
        setTimeout( function preLoaderHandler(){
        preloader.style.display = 'none';
        }, 
    1000);
</script>
</body>

</html>