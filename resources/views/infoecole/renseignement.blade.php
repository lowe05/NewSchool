@extends('welcome')

@section('add')

{{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/styles/core.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/styles/icon-font.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/styles/style.css')}}">








<div class="blog-wrap">
    <div class="container pd-10">
        <div class="row">
            <div class="col-md-20 col-sm-30">
                <div class="blog-list">
                    <ul>
                        <li>
                            <div class="row no-gutters">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="blog-img">
                                        <img src="{{asset('assets/vendors/images/img2.jpg')}}" alt="" class="bg_img">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <div class="blog-caption">
                                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                        <div class="blog-by">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                            <div class="pt-10">
                                                <a href="#" class="btn btn-outline-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row no-gutters">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="blog-img">
                                        <img src="{{asset('assets/vendors/images/img3.jpg')}}" alt="" class="bg_img">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <div class="blog-caption">
                                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                        <div class="blog-by">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                            <div class="pt-10">
                                                <a href="#" class="btn btn-outline-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row no-gutters">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="blog-img">
                                        <img src="{{asset('assets/vendors/images/img4.jpg')}}" alt="" class="bg_img">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <div class="blog-caption">
                                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                        <div class="blog-by">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                            <div class="pt-10">
                                                <a href="#" class="btn btn-outline-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row no-gutters">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="blog-img">
                                        <img src="{{asset('assets/vendors/images/img5.jpg')}}" alt="" class="bg_img">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <div class="blog-caption">
                                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                        <div class="blog-by">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                            <div class="pt-10">
                                                <a href="#" class="btn btn-outline-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
               
            </div>
            
        </div>
    </div>


</div>
    <script src="{{asset('assets/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('assets/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('assets/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('assets/vendors/scripts/layout-settings.js')}}"></script>
@endsection