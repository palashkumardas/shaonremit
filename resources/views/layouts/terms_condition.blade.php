@extends('master')
@section('content')
@section('title','Terms & Conditions')
 
 <!-- -----------breadcame-section-------- -->
 <section class="breadcame-section">
  <div class="container">
      <h2>Terms and Conditions</h2>
      <p style="color:black;"><a  style="color:black;" href="{{url('/')}}">Home</a> / <a style="color:black;" href="{{url('/terms')}}">Terms and Conditions</a></p>
  </div>
</section>

<!-- --------contact-info-------- -->
<section class="contact-info">
<div class="container">
<div class="row justify-content-center g-4 bg-light border">
  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
    {!!$terms->description!!}
  </div>
</div>
</section>
    

@endsection