@extends('layouts.main')

@section('title', 'Contact')

@section('head')
    <!-- Tambahkan CSS atau meta tag tambahan di sini -->
    {{-- <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"> --}}
@endsection

@section('content')
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">             
                                <form class="main_form">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                            <input class="form-control" placeholder="Your name" type="text" name="Your Name">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                            <input class="form-control" placeholder="Email" type="text" name="Email">
                                        </div>
                                        <div class=" col-md-12">
                                            <input class="form-control" placeholder="Phone" type="text" name="Phone">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="textarea" placeholder="Message"></textarea>
                                            <a class="button" href="mailto:nafifazillah@gmail.com">
                                            <!-- <button class="btn-submit">Kirim Pesan</button> -->
                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                                <li><a class="buy" href="#">Kirim pesan</a></li>
                                            </div>  
                                        </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                            <a href="https://api.whatsapp.com/send?phone=6285776125559" target="_blank">
                            <button class="btn-floating whatsapp">
                                <!-- <img src="images/wa.png" alt="">  -->
                                <!-- <p>+62 857-7612-5559</p> <img src="icon/calll.png"/>  -->
                                <i class="fi fi-brands-whatsapp"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection