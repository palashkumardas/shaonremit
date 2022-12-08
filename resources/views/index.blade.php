@extends('master')
@section('content')
    @section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp

    <!-- ----hero-section----------- -->
    <section class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-9 col-sm-10 col-10">
                    <div class="hero-content">
                        <h2 style="color:#00000;">Send Money To Your Loved <br>Ones Around The World</h2>
                        <p>Need to transfer money to your friends & family<br> wherever in the world,<strong style="color:#5B86B9"> Shaon Remit</strong> <br>is available everytime.</p>
                        <a href="#" class="btn hero-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -----------info-section--------- -->
    <section class="info-section">
        <div class="container">
            <div class="row info-cover g-4">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="info-content">
                        <i class="fas fa-vector-square fa-2x"></i>
                        <!-- <img class="img-fluid" src="./img/icon 1.svg" alt=""> -->
                        <h6>CHECK FOR BEST RATES</h6>
                        <p>By using our calculator you can get a quote instantly and easily.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="info-content">
                        <i class="fas fa-cogs fa-2x"></i>
                        <!-- <img class="img-fluid" src="./img/icon 2.svg" alt=""> -->
                        <h6>SAFE & SECURE</h6>
                        <p>By using your email-address or your phone-number as an identity you can prove yourself.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="info-content">
                        <i class="fas fa-shipping-fast fa-2x"></i>
                        <!-- <img class="img-fluid" src="./img/icon 3.svg" alt=""> -->
                        <h6>FAST TRANSFER </h6>
                        <p>You just need to go through the official portal on the website.If you need to check in advance of receiving your cash next day,then you can do it easily.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="info-content">
                        <i class="fas fa-envelope-square fa-2x"></i>
                        <!-- <img class="img-fluid" src="./img/icon 4.svg" alt=""> -->
                        <h6>PAYOUT NOTIFICATIONS</h6>
                        <p>The sender of the transaction will get be notified when receiver get transcation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------payment-section----------- -->
    <section class="payment-section">
        <div class="container">
            <div class="payment-title text-center">
                <h2>RECEIVE PAYMENTS</h2>
                <p>There are many ways to make online payments.Among them Shaon Remit <br>is use easily and secured online payment systems.</p>
            </div>
            <div class="row g-4 payment-row">
                <div class="col-lg-4 col-md-6 col-12 p-one">
                    <div class="payment-top-content  h-100">
                        <div class="payment-img">
                            <img src="{{asset('frontend/assets/images/small_mobile.png')}}" alt="" height="60" width="40" class="img-fluid">
                        </div>
                        <h5>MOBILE APP</h5>
                        <p>We provide our app so you can allow to transfer money at your home.</p>
                    </div>
                    <a href="{{url('/benefits/')}}" class=" btn payment-btn">LEARN MORE <i class="fas fa-arrow-right fa-lg"></i></a>
                </div>
                <div class="col-lg-4 col-md-6 col-12 p-one p-two ">
                    <div class="payment-top-content h-100">
                        <div class="payment-img">
                            <img src="{{asset('frontend/assets/images/small_laptop.png')}}" alt="">
                        </div>
                        <h5>WEBSITE</h5>
                        <p>We developed an interactive and responsive website for locally and globally transactions.</p>
                    </div>
                    <a href="{{url('/benefits/')}}" class=" btn payment-btn">LEARN MORE <i class="fas fa-arrow-right fa-lg"></i></a>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="payment-top-content h-100">
                        <div class="payment-img">
                            <img src="{{asset('frontend/assets/images/small_shop.png')}}" alt="">
                        </div>
                        <h5>SHOP</h5>
                        <p>We also set up  an Agent Portal Shop where customers send money to their beneficiaries in real time.</p>
                    </div>
                    <a href="{{url('/benefits/')}}" class="btn payment-btn">LEARN MORE <i class="fas fa-arrow-right fa-lg"></i></a>
                </div>
            </div>
           <!--  <div class="payment-bottom">
                <div class="row g-4 align-items-start">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="payment-bottom-content">
                            <div class="d-flex quick-img align-items-end">
                                <i class="far fa-clock fa-2x"></i> -->
                                <!-- <img src="./img/time icon.svg" alt=""> -->
                            <!--     <h6 class="ps-3"> QUICK RESOLVING</h6>
                            </div> -->
                            <!-- --------========---------------- -->
                        <!--     <div class="d-flex">
                                <li></li>
                                <p>Quick Resolving is a mobile app that allows users to quickly resolve issues with
                                    their finances</p>
                            </div> -->
                            <!-- --------========---------------- -->
                          <!--   <div class="d-flex">
                                <li></li>
                                <p>The app allows users to track their make payments and transfers between bank
                                    accounts.</p>
                            </div> -->
                            <!-- --------========---------------- -->
                          <!--   <div class="d-flex">
                                <li></li>
                                <p>The app also allows users to receive notifications about payments and transfers, and
                                    to access their account information. The app is available for iOS and Android
                                    devices.</p>
                            </div>
                        </div>
                        <div class="payment-bottom-content mt-lg-0 mt-md-0 pt-lg-5 pt-0">
                            <div class="d-flex quick-img align-items-end"> -->
                                <!-- <img src="./img/Net icon.svg" alt=""> -->
                            <!--     <i class="fas fa-chart-bar fa-2x"></i>
                                <h6 class="ps-3"> GET YOU COVERED</h6>
                            </div> -->
                            <!-- --------========---------------- -->
                            <!-- <div class="d-flex">
                                <li></li>
                                <p>Money Transfer to Flat on the flay exchange</p>
                            </div> -->
                            <!-- --------========---------------- -->
                          <!--   <div class="d-flex">
                                <li></li>
                                <p>Flexible payment settings</p>
                            </div> -->
                            <!-- --------========---------------- -->
                       <!--      <div class="d-flex">
                                <li></li>
                                <p>No rolling reserves</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12 d-none d-lg-block">
                        <img class="w-75 d-block m-auto img-fluid" src="{{asset('frontend/assets/img/PHONE.svg')}}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6 col-12  ">
                        <div class="payment-bottom-content mb-lg-5 mb-md-0 pb-lg-0 pb-lg-5">
                            <div class="d-flex quick-img align-items-end">
                                <i class="fa fa-desktop fa-2x"></i> -->
                                <!-- <img src="./img/PC icon.svg" alt=""> -->
                             <!--    <h6 class="ps-3"> SCALABLE DESING</h6>
                            </div> -->
                            <!-- --------========---------------- -->
                           <!--  <div class="d-flex">
                                <li></li>
                                <p>Security is proven by external audit</p>
                            </div> -->
                            <!-- --------========---------------- -->
                           <!--  <div class="d-flex">
                                <li></li>
                                <p>Flexible payment settings</p>
                            </div> -->
                            <!-- --------========---------------- -->
                       <!--      <div class="d-flex">
                                <li></li>
                                <p>No rolling reserves</p>
                            </div>
                        </div>
                        <div class="payment-bottom-content mt-lg-5 mt-0  pt-lg-5 pt-0">
                            <div class="d-flex quick-img align-items-end">
                                <i class="fas fa-balance-scale-right fa-2x"></i> -->
                                <!-- <img src="./img/scale icon.svg" alt=""> -->
                              <!--   <h6 class="ps-3"> HUGE ADVENTAGES</h6>
                            </div> -->
                            <!-- --------========---------------- -->
                           <!--  <div class="d-flex">
                                <li></li>
                                <p>24/7 business and tech support</p>
                            </div> -->
                            <!-- --------========---------------- -->
                           <!--  <div class="d-flex">
                                <li></li>
                                <p>Feature request capabilities</p>
                            </div> -->
                            <!-- --------========---------------- -->
                            <!-- <div class="d-flex">
                                <li></li>
                                <p>Training Materials for agent's team</p>
                            </div>
                        </div>
                    </div>
                </div> -->
    </section>
    <!-- -------transfer-money-------------- -->
    <section class="transfer-money-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <h6>The popular way to transfer money over the Internet</h6>
                    <p>Just pressing a button or tapping your keyboard,<br>You can transfer money with one click.</p>
                    <h6>transfer of remittance to anyone</h6>
                    <p>They will send you a direct transfer from your family account,<br> whatever account they have. Even if they don't have a family account yet.</p>
                    <h6>Secure payment methods</h6>
                    <p>We use industry-leading secure payment systems for our money transfer.<br>We also recommend that you use our money transfer service.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- -----------review-section----------- -->
    <!-- <section class="carusel">
        <div class="container">
            <div class="carusel_section">
                <img class="shape-one" src="{{asset('frontend/assets/img/Shape (1)bg.png')}}" alt="">
                <img class="shape-two" src="{{asset('frontend/assets/img/Shape (2)bg.png')}}" alt="">
                <div class="owl-carousel owl-theme px-5 pt-4">
                    <div class="item carusel-item ">
                        <img class="oval" src="{{asset('frontend/assets/img/Oval.png')}}" alt="">
                        <h6>Abdus Salam</h6>
                        <p>Banker</p>
                        <img class="qutation" src="{{asset('frontend/assets/img/qutation.png')}}" alt="">
                        <h5>We are very impressed with the service you provide</h5>
                    </div>
                    <div class="item carusel-item ">
                        <img class="oval" src="{{asset('frontend/assets/img/Oval.png')}}" alt="">
                        <h6>Mahfuz</h6>
                        <p>Client</p>
                        <img class="qutation" src="{{asset('frontend/assets/img/qutation.png')}}" alt="">
                        <h5>I easily made 10 transactions through your website or app. I am happy to have your service.</h5>
                    </div>
                    <div class="item carusel-item ">
                        <img class="oval" src="{{asset('frontend/assets/img/Oval.png')}}" alt="">
                        <h6>Mahfuz</h6>
                        <p>Client</p>
                        <img class="qutation" src="{{asset('frontend/assets/img/qutation.png')}}" alt="">
                        <h5>I easily made 10 transactions through your website or app. I am happy to have your service.</h5>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    
 

@endsection
