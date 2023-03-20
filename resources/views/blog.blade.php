@extends('layout')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 position-relative overlay-bottom" style="z-index: -1;">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Blog</h1>
        <div class="d-inline-flex mb-lg-5">
            <p class="m-0 text-white"><a class="text-white" href="">Home / About us</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Blog</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Content Start -->
<div class="container blog px-5 py-4">
    <div class="row">
        <span class="blog-author"><i class="fas fa-pencil-alt"></i>{{$blogs->blog_author}}</span>
        <span class="blog-date"><i class="fas fa-clock"></i>20/11/2023</span>
    </div>
    <div class="row blog-title">
        <h1>{{$blogs->blog_title}}</h1>
    </div>
    <div class="row blog-content">
        <img class="blog-image" src="/img/{{$blogs->blog_img}}" alt="">
        <p>{{$blogs->blog_description}}</p>
    </div>
</div>
<div class="container py-3 related-post">
    <div class="row related-post-title py-3">
        <h1>Related Posts</h1>
    </div>
    <div class="row related-post-content">
        <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
            <div class="card" style="width: 18rem;">
                <img src="/img/product-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page Content End -->



@endsection