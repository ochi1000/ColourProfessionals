@extends('layouts.app')

@section('content')
    <div>
        <div class="banner">
            <div class="banner-text">
                <h2>Get Premium Quality Paints<span class="large-screen">, Finishes and Services</span></h2>
                <h4>Get a price list of your prefered paint</h4>
                <a href="/quotation" class="btn btn-warning">here</a>
            </div>
        </div>

        <div class="products-div container">
            <h1>Products</h1>
            <p>Select from a range of our quality paints and finishes for your desired purpose</p>
            <div class="product-images">

                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="images/epoxy.jpeg" class="card-img-top" alt="...">
                            <p>Epoxy Varnishes</p>
                        </div>
                        <div class="col-sm-4">
                            <img src="images/silkpaint.jpg" class="card-img-top" alt="...">
                            <p>Silk Paint</p>
                        </div>
                        <div class="col-sm-4">
                            <img src="images/mattpaint.jpg" class="card-img-top" alt="...">
                            <p>Matt Paint</p>
                        </div>
                    </div>
                    <a href="/products" class="btn btn-outline-primary">See more</a>
                </div>
            </div>
        </div>

        <div class="color-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="color-world-image"> </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="color-world-text">
                            <h1>Welcome to our Colour World</h1>
                            <p>Select from a wide range of colours to suite your personality, emotions, and tone of your environment. With our quality and durable paint, you get the best paints and finishes.</p>
                            <a href="/" class="btn btn-outline-primary">Discover</a>
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
