@extends('master')
@section('content')
    @section('title','Contact')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp

     <!-- -----------breadcame-section-------- -->
     <section class="breadcame-section">
        <div class="container">
            <h2>CONTACT</h2>
            <p style="color:black;"><a style="color:black;" href="{{url('/')}}">Home</a> / <a style="color:black;" href="{{url('/contact/')}}">Contact</a></p>
        </div>
    </section>
   <!-- ------------map-section------- -->
   <section>
    <div class="mapouter">
        <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.0113646391405!2d-0.15395168479787397!3d51.54969061543207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761afa661bedf5%3A0xf137a62b19e6c15f!2zODAgUXVlZW5zIENyZXMsIExvbmRvbiBOVzUgNEVCLCDgpq_gp4HgppXgp43gpqTgprDgpr7gppzgp43gpq8!5e0!3m2!1sbn!2sbd!4v1667757212781!5m2!1sbn!2sbd"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                href="https://fmovies-online.net"></a><br>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    height: 500px;
                    width: 100%;
                }
            </style><a href="https://www.embedgooglemap.net">embed map</a>
            <style>
                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 500px;
                    width: 100%;
                }
            </style>
        </div>
    </div>
</section>
<!-- --------contact-info-------- -->
<section class="contact-info">
<div class="container">
    <div class="row justify-content-center g-4">
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="info-card h-100">
                <div class="contact-img">
                    <img src="{{asset('frontend/assets/images/contact-1.png')}}" alt="">
                </div>
                <h5>PHONE </h5>
                <p><a style="color:black;" href="callto:+4407456737300">+4407456737300</a></p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="info-card h-100">
                <div class="contact-img">
                    <img src="{{asset('frontend/assets/images/contact-2.png')}}" alt="">
                </div>
                <h5>EMAIL </h5>
                <p ><a style="color:black;" href="mailto:sofir_38@hotmail.com">sofir_38@hotmail.com</a></p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="info-card h-100">
                <div class="contact-img">
                    <img src="{{asset('frontend/assets/images/contact-3.png')}}" alt="">
                </div>
                <h5>ADDRESS</h5>
                <p>Unit-1 323 SOHO Road,</p>
                <p> Birmingham,</p>
                <p> B21 9SD</p>
                <p>United Kingdom</p>
            </div>
        </div>
    </div>
</div>
</section>
<section class="contact-form">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-11 col-12">
            <h2>TYPE US A WORD</h2>
            <form action="">
                <!-- --------======---------- -->
                <div class="contact-input me-md-4 me-0">
                    <label for="">Your name</label>
                    <input type="text" name="" id="">
                </div>
                <!-- --------======---------- -->
                <div class="contact-input ">
                    <label for="">Website URL</label>
                    <input type="email" name="" id="">
                </div>
                <!-- --------======---------- -->
                <div class="contact-input me-md-4 me-0">
                    <label for="">Email address</label>
                    <input type="text" name="" id="">
                </div>
                <!-- --------======---------- -->
                <div class="contact-input ">
                    <label for="">Telegrem, Skype or phone</label>
                    <input type="text" name="" id="">
                </div>
                <div class="contact-input w-100">
                    <label for="">Your message</label>
                    <textarea name="" id="" cols="" rows="3"></textarea>
                </div>
                <div class=" pt-4 text-center">
                    <a class="contact-btn" href="#">SEND MESSAGE </a>
                </div>
            </form>
        </div>
    </div>
</div>
</section> 

@endsection
