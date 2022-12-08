@extends('master')
@section('content')
    @section('title','About')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp

   
    <!-- -----------breadcame-section-------- -->
<section class="breadcame-section">
    <div class="container">
        <h2>About</h2>
        <p style="color:black;" ><a style="color:black;" href="{{url('/')}}">Home</a> / <a style="color:black;" href="{{url('/about/')}}">About</a></p>
    </div>
</section>
<!-- ---------------about-section----------------- -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-6 col-12">
                <div class="about-content about-content-one">
                    <p>At Shaon Traders Limited, our mission is to provide reliable online money transfer services to all. Shaon Traders Ltd is a money transfer service based in London with the aim of providing an amazing customer experience. We ensure affordable prices and competitive rates. We also ensure less costly costs and aggressive rates. Our purpose is to create a dependable cash switch commercial enterprise that allows you contend with your own circle of relatives and pals across the world.</p>  
                </div>
              
            </div>
            <div class="col-md-6 col-12">
                <div class="about-img">
                    <img class="img-fluid" src="{{asset('frontend/assets/images/about1.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-12 order-2 order-md-2">
                <div class="about-content about-content-two">
                    <p>We are presented to imparting you with quick and comfort cash transaction by the usage of the extra-ordinarily technology. We provide our service with very carefully and easilyto the customers with a full security process. Your cash switch specialist, own circle of relatives Renit, has masses of places round the sector in which you could withdraw cash or deposit cash right into a financial institution account. Sending cash has by no means been easier!</p>
                </div>
            
                </div>
            <div class="col-lg-7 col-md-6 col-12  order-1 order-md-1">
                <div class="about-img">
                    <img class="img-fluid"  src="{{asset('frontend/assets/images/about2.png')}}" alt="">
                </div>
               
            </div>
            </div>
        </div>
    </div>
</section>
  
@endsection
