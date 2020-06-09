@extends('mainLayout')

@section('main-content')

    <div class="carousel-container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <h2>Hello from Laravel</h2>
            </div>
            <div class="carousel-item">
                <h2>Hello from PHP</h2>
            </div>
            <div class="carousel-item">
                <h2>Hello from About</h2>
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
        
    </div>

    
@endsection