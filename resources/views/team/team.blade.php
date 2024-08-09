@extends('layouts.app')

@section('styles')
<style>
    .our-staff .single-staff {
        margin-bottom: 30px;
    }
    .our-staff .img-container {
        position: relative;
        width: 100%;
        padding-top: 100%; /* 1:1 Aspect Ratio */
        overflow: hidden;
    }
    .our-staff .img-container img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .our-staff .opacity {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .our-staff .img-container:hover .opacity {
        opacity: 1;
    }
    .our-staff .opacity a {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 24px;
    }

    /* Pagination Styles */
    .pagination-container {
        display: flex;
        justify-content: flex-end; /* Align pagination to the right */
        margin-top: 20px;
        margin-bottom:20px;
        padding:12px;
    }
    .pagination {
        list-style-type: none;
        display: flex;
        padding: 0;
        margin: 0;
    }
    .pagination li {
        margin: 0 5px;
    }
    .pagination .page-link {
        border-radius: 50%;
        background-color: #333;
        color: #fff;
        border: none;
        width: 50px; /* Increase button size */
        height: 50px; /* Increase button size */
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px; /* Increase font size */
        transition: background-color 0.3s ease, transform 0.3s ease;
    }
    .pagination .page-link:hover {
        background-color: #555;
        transform: scale(1.1); /* Add a slight scale effect on hover */
    }
    .pagination .active .page-link {
        background-color: #007bff;
        border-color: #007bff;
    }
</style>
@endsection

@section('content')

<!-- Inner Page Banner -->
<div class="inner-banner">
    <div class="opacity">
        <div class="container">
            <h3 class="float-left">Our team</h3>
            <ul class="float-right">
                <li><a href="{{ route('home') }}" class="tran3s">Home</a></li>
                <li>/</li>
                <li>team</li>
            </ul>
        </div>
    </div>
</div>

<!-- Short banner -->
<div class="short-banner Mfix">
    <div class="container">
        <div class="bg">
            <div class="opacity top-text clear-fix">
                <div class="float-left">
                    <p>We are a group of pastors driven by a desire to spread the gospel of God's love and create a transformed society.</p>
                    <p>Our vision is to see the disadvantaged transformed, their spirits renewed, souls nourished, and bodies strengthened. We work relentlessly to create a world in which improved standards of living are a reality, reflecting the wholeness God desires for all.</p>
                </div>
                <a href="{{ route('contact') }}" class="tran3s float-right hvr-bounce-to-right">Join Us</a>
            </div>
        </div>
    </div>
</div>

<!-- Our Staff -->
<div class="our-staff" style="margin-top: 5%;">
    <div class="container">
        <div class="theme-title">
            <h2>Our team</h2>
            <p>We have a big team working dedicatedly to save the child. Staff work 24 hours for emergency injured patients.</p>
            <span></span>
        </div>

        <div class="row">
            @foreach ($teams as $team)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="single-staff">
                    <div class="img">
                        <img src="{{ asset('storage/' . $team->photo) }}" alt="{{ $team->name }}" style="width: 400px; height: 300px; object-fit: cover;">
                        <div class="opacity tran3s">
                            <div>
                                <a href="{{ route('singleteam', $team->id) }}"><span><i class="fa fa-location-arrow" aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <h6><a href="{{ route('singleteam', $team->id) }}">{{ $team->name }}</a></h6>
                    <span>{{ $team->position }}</span>
                    
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="pagination-container">
            {{ $teams->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>

@endsection
