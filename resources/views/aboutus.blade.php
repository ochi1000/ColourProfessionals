@extends('layouts.app')

@section('content')
    <div class="about-us">
        <h2>About Us</h2>
        <div>
            <img src="{{ asset('images/rooms.jpg') }}" alt="" >
        </div>

        <div class="about-us-text">
            <p>Colour Professionals was born to solve the challenges experienced by the conventional and indigenous paint and coating industries, as well as to lead the future of coating and paint manufacturing with better intriguing and sustainable concepts.</p>

            <p><span>Our objective</span> as Colour Professionals is to achieve optimal quality in our products by embedding the features of decorations, reproducibility, protection and longevity which make it the best today as well as in the future through research.</p>

            <h3>ColourPro Simulation Experience</h3>
            <p>This is a novel and modern concept we have introduced and champion in the paint and coating industries. It involves using our software application to simulate the final look of our painting job, therefore you can see the final look of your rooms and spaces even before the job is started, therefore you get the choice of adjustments.</p>
        </div>
        
    </div>
@endsection
