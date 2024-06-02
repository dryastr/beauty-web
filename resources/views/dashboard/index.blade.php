@extends('layouts.main')

@section('title', 'Dashboard')

@section('head')
    <!-- Tambahkan CSS atau meta tag tambahan di sini -->
    {{-- <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"> --}}
@endsection

@section('content')
{{-- @extends('layouts.navbar') --}}
       <!-- end header inner --> 
    </header>
    <!-- end header -->
    <section class="slider_section">
       <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">

          <div class="carousel-inner">
             <div class="carousel-item active">
                <img class="first-slide" src="images/konrol.png" alt="First slide">
                <div class="container">
                   <div class="carousel-caption relative">
                      <!-- <h3>Our <br> <strong class="black_bold">Latest </strong><br> -->
                         <strong class="yellow_bold">WAN Care Beauty & Healty </strong></h3>
                      <h3>Thing Can You Do If You Love Our Life Is Using A Skincare </h3>
                      <br>
                      <a  href="#">see more Products</a>
                      <img src="images/glasskin.png" alt="Gambar Bergerak" class="gambar-bergerak">
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <img class="first-slide" src="images/konrol.png" alt="First slide">
                <div class="container">
                   <div class="carousel-caption relative">
                      <!-- <h3>Our <br> <strong class="black_bold">Latest </strong><br> -->
                         <strong class="yellow_bold">WAN Care Beauty & Healty </strong></h3>
                      <h3>Thing Can You Do If You Love Our Life Is Using A Skincare </h3>
                      <br>
                      <a  href="product.html">see more Products</a>
                      <img src="images/glasskin.png" alt="Gambar Bergerak" class="gambar-bergerak">
                   </div>
                </div>
             </div>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <img class="third-slide" src="images/banner2.jpg" alt="Third slide">
                <div class="container">
                   <div class="carousel-caption relative">
                      <h1>Our <br> <strong class="black_bold">Latest </strong><br>
                         <strong class="yellow_bold">Product </strong></h1>
                      <p>It is a long established fact that a r <br>
                        eader will be distracted by the readable content of a page </p>
                      <a  href="#">see more Products</a>
                   </div>
                </div>
             </div> 

         </div>
          <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
          <i class='fa fa-angle-right'></i>
          </a>
          <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
          <i class='fa fa-angle-left'></i>
          </a>
          
       </div>

    </section>



<!-- CHOOSE  -->
    <!-- <div class="whyschose">
       <div class="container">

          <div class="row">
             <div class="col-md-7 offset-md-3">
                <div class="title">
                   <h2>Why <strong class="black">choose us</strong></h2>
                   <span>Fastest repair service with best price!</span>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="choose_bg">
       <div class="container">
          <div class="white_bg">
          <div class="row">
             <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="for_box">
                   <i><img src="icon/1.png"/></i>
                   <h3>Data recovery</h3>
                   <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                </div>
             </dir>
             <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="for_box">
                   <i><img src="icon/2.png"/></i>
                   <h3>Computer repair</h3>
                   <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                </div>
             </dir>
             <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="for_box">
                   <i><img src="icon/3.png"/></i>
                   <h3>Mobile service</h3>
                   <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                </div>
             </dir>
             <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="for_box">
                   <i><img src="icon/4.png"/></i>
                   <h3>Network solutions</h3>
                   <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                </div>
             </dir>
             <div class="col-md-12">
                <a class="read-more">Read More</a>
             </div>
          </div>
       </div>
     </div>
    </div> -->
<!-- end CHOOSE -->

    <!-- service --> 
    <!-- <div class="service">
       <div class="container">
          <div class="row">
             <div class="col-md-8 offset-md-2">
                <div class="title">
                   <h2>Service <strong class="black">Process</strong></h2>
                   <span>Easy and effective way to get your device repair</span>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="service-box">
                   <i><img src="icon/service1.png"/></i>
                   <h3>Fast service</h3>
                   <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                </div>
             </div>
             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="service-box">
                   <i><img src="icon/service2.png"/></i>
                   <h3>Secure payments</h3>
                   <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                </div>
             </div>
             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="service-box">
                   <i><img src="icon/service3.png"/></i>
                   <h3>Expert team</h3>
                   <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                </div>
             </div>
             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="service-box">
                   <i><img src="icon/service4.png"/></i>
                   <h3>Affordable services</h3>
                   <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                </div>
             </div>
             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="service-box">
                   <i><img src="icon/service5.png"/></i>
                   <h3>90 Days warranty</h3>
                   <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                </div>
             </div>
             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="service-box">
                   <i><img src="icon/service6.png"/></i>
                   <h3>Award winning</h3>
                   <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                </div>
             </div>
          </div>
       </div>
    </div> -->
    <!-- end service -->

    <!-- our product -->
    <div class="product">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="title">
                   <h2>our <strong class="black">products</strong></h2>
                   <span>We package the products with best services to make you a happy customer.</span>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="product-bg">
       <div class="product-bg-white">
       <div class="container">
          <div class="row">
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="product-box">
                   <i><img src="images/fw.jpeg"/></i>
                   <h3>Lorem</h3>
                   <span>Lorem, ipsum.</span>
                </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="product-box">
                   <i><img src="images/cushion.png"/></i>
                   <h3>Lorem</h3>
                   <span>Lorem, ipsum.</span>
                </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="product-box">
                   <i><img src="images/jar.png"/></i>
                   <h3>Lorem</h3>
                   <span>Lorem, ipsum.</span>
                </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="product-box">
                   <i><img src="images/vs.png"/></i>
               <h3>Lorem</h3>
                   <span>Lorem, ipsum.</span>
             </div>
             <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="product-box">
                   <i><img src="icon/p5.png"/></i>
                   <h3>Norton Internet Security</h3>
                   <span>$25.00</span>
                </div>
             </div> -->
             <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="product-box">
                   <i><img src="icon/p2.png"/></i>
                   <h3>Norton Internet Security</h3>
                   <span>$25.00</span>
                </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="product-box">
                   <i><img src="icon/p6.png"/></i>
                   <h3>Norton Internet Security</h3>
                   <span>$25.00</span>
                </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="product-box">
                   <i><img src="icon/p7.png"/></i>
                   <h3>Norton Internet Security</h3>
                   <span>$25.00</span>
                </div>
             </div>
             -->
            
            </div>
             </div>
             </div>
          </div>
       </div>
       <div class="Lastestnews blog">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="titlepage">
  
                          <span><h1><b>Article</b></h1> <br>content of a page when looking at its layout. The point of using Lorem </span>
                      </div>
                  </div>
                </div>
                
       <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
              <div class="news-box">
                  <figure><img src="images/mask (1).png" alt="img" /></figure>
                  <h3>Lorem, ipsum.</h3>
                  <span> lorem/span><span>lorem</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, omnis. Velit ipsum, recusandae maxime minima ea facilis ducimus nemo at culpa illo sequi atque? Nulla amet deleniti officia veritatis? Exercitationem!</p>
              </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
              <div class="news-box">
                  <figure><img src="images/mask (2).png" alt="img" /></figure>
                  <h3>Best Music</h3>
                  <span> March 20</span><span>Comment</span>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
              </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
              <div class="news-box">
                  <figure><img src="images/mask (3).png" alt="img" /></figure>
                  <h3>Live With Music</h3>
                  <span> March 20</span><span>Comment</span>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
              </div>
    </div>

          </div>
       </div>

       <!-- <div class="container">
          <div class="yellow_bg">
          <div class="row">
             <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                <div class="yellow-box">
                   <h3>REQUEST A FREE QUOTE<i><img src="icon/calll.png"/></i></h3>
                   
                   <p>Get answers and advice from people you want it from.</p>
                </div>
             </div>
              <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                <div class="yellow-box">
                   <a href="#">Get  Quote</a>
                </div>
             </div>
          </div> -->
       </div>
       </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Dashboard is loaded!');
        });
    </script>
@endsection
