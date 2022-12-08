@extends('master')
@section('content')
    @section('title','Services')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp
     <!-- -----------breadcame-section-------- -->
     <section class="breadcame-section">
        <div class="container">
            <h2>SERVICES</h2>
            <p style="color:black;"><a style="color:black;" href="{{url('/')}}">Home</a> / <a style="color:black;" href="{{url('/services/')}}">Our Services</a></p>
        </div>
    </section>
    <section class="service-section">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-md-6 col-12">
                    <div class="about-img">
                        <img class="img-fluid" src="{{asset('frontend/assets/images/s_money_transfer.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class=" service-content-one service-content">
                        <h2>MONEY TRANSFER</h2>
                        <p>You can easily transfer money by using an app or website. You will receive your money within short time and it will cost you a relatively low amount. They have a website in over 90 countries where you can transfer money.</p>  
                    </div>
                </div>
               
            </div>
            <div class="row align-items-center gy-4">
                <div class="col-md-6 col-12 order-2 order-md-1">
                    <div class=" service-content-two service-content">
                        <h2>CASH PICKUP</h2>
                        <p>"Cash pickups" is a most popular method for you to get money shortly and it is no different than getting your money over the traditional ways like the ones that you'll send.</p>
                    </div>
                </div>
                <div class=" col-md-6 col-12 ps-lg-5 ps-0 order-1 order-md-2">
                    <div class="about-img">
                        <img class="img-fluid"  src="{{asset('frontend/assets/images/s_cash_pickup.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row align-items-center gy-4">
                <div class="col-md-6 col-12">
                    <div class="about-img">
                        <img class="img-fluid" src="{{asset('frontend/assets/images/s_mobile_wallet.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class=" service-content-one service-content">
                        <h2>MOBILE WALLET</h2>
                        <p>Instantly, you can store money and using mobile money is a great way to store and transact money is because it is the ability to send money directly to a mobile wallet.</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
   
   

@endsection
