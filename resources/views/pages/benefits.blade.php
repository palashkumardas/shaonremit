@extends('master')
@section('content')
    @section('title','Benefits')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp

 <!-- -----------breadcame-section-------- -->
 <section class="breadcame-section">
    <div class="container">
        <h2>BENEFITS</h2>
        <p style="color:black;"><a style="color:black;" href="{{url('/')}}">Home</a> / <a style="color:black;" href="{{url('/benefits/')}}">Benefits</a></p>
    </div>
</section>
<section class="benefit-section">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-md-12 col-12 benefit-top">
                <p>WE ARE OFFERING A MODERN AND ULTA DIGITAL TRANSFORMATION  </p>

            </div>
            <div class="col-md-6 col-12">
                <div class=" benefit-content-one benefit-content">
                    <h2>MOBILE APP</h2>
                    <p>We developed a mobile app that will allow you to send money in the comfort of your own home.
                    </p> 
                    <p>
                    The interface is user-friendly which will allow you to navigate the features withease. The goal is to help you execute tasks or enjoy our services remotely and conveniently.</p> 
                    <p><a href="#" target="_blank"><img src="frontend/assets/images/google.png" alt="" srcset="" width="49%"></a>
                     <a href="#" target="_blank"><img src="frontend/assets/images/app.png" alt="" srcset="" width="49%"></a> 
                    </p> 
                </div>
               
            </div>
            <div class="col-md-6 col-12">
                 <div class="benefit-img">
                    <img class="img-fluid" src="{{asset('frontend/assets/images/mobile.png')}}" alt="" >
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="benefit-img">
                    <img class="img-fluid"  src="{{asset('frontend/assets/images/website.png')}}" alt="">
                </div>
               
                </div>
            <div class=" col-md-6 col-12 ps-lg-5 ps-0">
                 <div class=" benefit-content-two benefit-content">
                    <h2>WEBSITE</h2>
                    <p>We created an interactive and dynamic website where you can make transactions locally and internationally. We also customize the website design to cater to your specific needs and requirements. The aim is to fuse aesthetics and functionality in one.</p>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class=" benefit-content-one benefit-content">
                    <h2>SHOP</h2>
                    <p>Some customers might not be comfortable making the transaction themselves, so we also set up an Agent Portal Shop where we can process the transaction on the customer’s behalf and their beneficiary will receive the payment in real-time. </p> 
                    <p>
                    The goal of these 3 platforms – mobile app, website, and Agent Portal Shop is to provide top-rate service and convenience to our customers.</p> 
                </div>
                
            </div>
            <div class="col-md-6 col-12">
               <div class="benefitt-img">
                    <img class="img-fluid" src="{{asset('frontend/assets/images/shop.png')}}" alt="">
                </div>
            </div>
            </div>
        </div>
    </div>
</section>  
 
@endsection
