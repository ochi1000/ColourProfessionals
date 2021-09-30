@extends('layouts.app')

@section('content')
    <div>
        <div class="banner">
            <div class="banner-text">
                <h2>See New Looks for Your Space</h2>
                <!-- <h2>Get Premium Quality Paints<span class="large-screen">, Finishes and Services</span></h2>
                <h4>Get a price list of your prefered paint</h4> -->
                <a href="https://wa.me/2349068919746?text=Hello, I want new looks for my space" class="btn btn-warning">Here</a>
            </div>
        </div>

        <div class="products-div">
            
            <div class="product-images container">
                <div class="">
                    <div>
                        <h2 class="head-title">Do More With ColourPro</h2>
                    </div>
                    <p>At ColourPro we simulate the final look of your space, giving you the power of choice. 
                    
                    <!-- <div class="col-sm-7">
                        <div class="row">
                            <div class="col-6">
                                <div>
                                    <img src="images/epoxy.jpeg" class="card-img-top" alt="...">
                                    <p>Epoxy Varnishes</p>
                                </div>
                                <div>
                                    <img src="images/silkpaint.jpg" class="card-img-top" alt="...">
                                    <p>Silk Paint</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <img src="images/mattpaint.jpg" class="card-img-top" alt="...">
                                    <p>Matt Paint</p>
                                </div>
                            </div>
                        </div>
                    </div>                         -->
                    <!-- <a href="/products" class="btn btn-outline-primary">See more</a> -->
                </div>
            </div>
        </div>

        <div class="color-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="color-world-image"> </div>
                    </div>
                    <div class="col-sm-6 color-world-div">
                        <div class="color-world-text">
                            <h1>Discover our Colour World</h1>
                            <p>Select from a wide range of colours and products to suite your personality, emotions, and tone of your environment. With our quality and durable paint, you get the best paints and finishes.</p>
                            <a href="https://wa.me/2349068919746?text=Hello, I want to see your catalog" class="btn btn-outline-primary">Discover</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="about-us-div">
            <h2>Why us?</h2>
            <img src="images/handshake.png" width="60px" alt="">
            <p>We prioritize your need to have quality and a variety of colours</p>
        </div>
    </div>
@endsection
