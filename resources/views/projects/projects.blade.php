@extends('layouts.app')

@section('styles')
    <style>
    .our-blog {
        margin: 60px 0; /* Margin on top and bottom */
    }
    .container {
        max-width: 1200px; /* Adjust as needed */
        margin: 0 auto;
        padding: 0 15px;
    }
    .row {
        display: flex;
        flex-wrap: wrap;
        margin: -15px;
    }
    .column {
        flex: 0 0 50%;
        max-width: 50%;
        padding: 15px;
    }
    .post-large {
        display: flex;
        flex-direction: column;
        height: 100%;
        border: 1px solid #e0e0e0;
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    .img-container {
        width: 100%;
        padding-top: 66.67%; /* 3:2 Aspect Ratio */
        position: relative;
        overflow: hidden;
    }
    .img-container img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    .post {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        padding: 20px;
    }
    .post h5 {
        margin-top: 0;
        margin-bottom: 15px;
    }
    .post p {
        flex-grow: 1;
        margin-bottom: 15px;
    }
    .read {
        align-self: flex-start;
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
    }
    /* Pagination Styles */
    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 40px;
        list-style: none;
        padding: 0;
    }
    .pagination li {
        margin: 0 5px;
    }
    .pagination a, .pagination span {
        padding: 10px 15px;
        border: 1px solid #e0e0e0;
        text-decoration: none;
        color: #333;
        border-radius: 4px;
    }
    .pagination a:hover {
        background-color: #f0f0f0;
    }
    .pagination .active span {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }
    </style>
@endsection

@section('content')
    <!-- ======================== Inner Page Banner ================= -->
    <div class="inner-banner">
        <div class="opacity">
            <div class="container">
                <h3 class="float-left">News & Stories</h3>
                <ul class="float-right">
                    <li><a href="index.html" class="tran3s">Stories</a></li>
                    <li>/</li>
                    <li>Projects</li>
                </ul>
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div> <!-- /.inner-banner -->

    <!-- News/Blog -->
    <div class="our-blog">
        <div class="container">
            <div class="row">
                @foreach($projects->take(4) as $project)
                    <div class="column">
                        <div class="post-large">
                            <div class="img-container">
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                            </div>
                            <div class="post">
                                <h5><a href="{{ route('projects.show', $project->id) }}" class="tran3s">{{ $project->title }}</a></h5>
                                <p>{{ $project->description}}</p>
                                <a href="{{ route('projects.show', $project->id) }}" class="read">Read Continue <span>&rarr;</span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Pagination Links -->
        @if($projects->hasPages())
            <div class="pagination">
                {{ $projects->links() }}
            </div>
        @endif
    </div> <!-- /.our-blog -->

@endsection