@extends('layouts.main')

@section('title', 'About')

@section('head')
    <!-- Tambahkan CSS atau meta tag tambahan di sini -->
    {{-- <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"> --}}
@endsection

@section('content')
{{-- @extends('layouts.navbar') --}}
<div class="about">
 <div class="container">
    <div class="row">
       <dir class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <div class="about_box">
             <figure><img src="images/skinker.jpeg"/></figure>
          </div>
       </dir>
        <dir class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <div class="about_box">
             <h3>Lorem</h3>
             <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas animi saepe, voluptatibus vero aspernatur sint fuga, ullam amet tempore, nam neque nulla ad.</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit reiciendis, fugit tempore explicabo illo sit consequatur in deleniti adipisci. Ut modi velit quam mollitia eos accusantium aperiam, vitae incidunt distinctio.</p>
       </div>
       </dir> 
    </div>
 </div>
</div>

<!-- CHOOSE  -->
    <div class="whyschose">
       <div class="container">

          <div class="row">
             <div class="col-md-7 offset-md-3">
                <div class="title">
                   <!-- <h2>Why <strong class="black">choose us</strong></h2> -->
                   <span>Kenapa Memilih Kami?</span>
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
                   <i><img src="images/mask (1).png"/></i>
                   <h3>Lorem, ipsum.</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, et?</p>
                </div>
             </dir>
             <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="for_box">
                   <i><img src="images/mask (2).png"/></i>
                   <h3>Lorem, ipsum.</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, et?</p>
                </div>
             </dir>
             <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="for_box">
                   <i><img src="images/mask (3).png"/></i>
                   <h3>Lorem, ipsum.</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, et?</p>
                </div>
             </dir>
             <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="for_box">
                   <i><img src="images/cushion.png"/></i>
                   <h3>Network solutions</h3>
                   <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                </div>
                </dir>
                </div>
          </div>
       </div>
     </div>
    </div>
@endsection