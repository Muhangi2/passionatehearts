@extends('layouts.app')

@section('styles')
<style>
    .img-container {
        width: 100%;
        height: 200px; /* Adjust the height as needed */
        overflow: hidden;
        position: relative;
    }

    .img-container img {
        width: 130%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    
</style>
@endsection

@section('content')
<div class="inner-banner">
            <div class="opacity">
                <div class="container">
                    <h3 class="float-left">Gallery</h3>
                    <ul class="float-right">
                        <li><a href="index.html" class="tran3s">Home</a></li>
                        <li>/</li>
                        <li>Gallery</li>
                    </ul>
                </div> <!-- /.container -->
            </div> <!-- /.opacity -->
        </div>

<div class="our-gallery home-gallery">
    <div class="container ">
            <!-- /.col- -->
            
                        <div class="gallery-main-img-wrapper row">
                            @foreach ($galleries as $gallery)
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="single-img-wrapper">
                                        <div class="img">
                                            <div class="img-container">
                                                <img src="{{ asset('storage/' . $gallery->photo) }}" alt="Image" class="img-fluid">
                                            </div>
                                        </div> <!-- /.img -->
                                    </div> <!-- /.single-img-wrapper -->
                                </div> <!-- /.col- -->
                            @endforeach
                        </div> <!-- /.gallery-main-img-wrapper -->
                    <!-- End of #all -->
              
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div>

@endsection