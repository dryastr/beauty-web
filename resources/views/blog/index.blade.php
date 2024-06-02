@extends('layouts.main')

@section('title', 'Blog')

@section('head')
    <!-- Tambahkan CSS atau meta tag tambahan di sini -->
    {{-- <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"> --}}
@endsection

@section('content')
<div class="Lastestnews blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">

                    <span>It is a long established fact that a reader will be distracted by the readable <br>content of a page when looking at its layout. The point of using Lorem </span>
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
</div>
@endsection