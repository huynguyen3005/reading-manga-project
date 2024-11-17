@extends('client.pages.blog')
@section('content')
 <!--=====================================-->
        <!--=      Breadcrumb Area Start        =-->
        <!--=====================================-->
        <section class="breadcrumb ">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="home.html">Anime</a></li>
                        <li><a class="active">Blogs </a></li>
                    </ul>
                </div>
            </div>
        </section>
          <!--=====================================-->
        <!--=           Blog Area Start         =-->
        <!--=====================================-->

        <section class="blog style-1 sec-mar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6 col-md-6col-12 mb-4">
                                <a href="blog-detail.html" class="inner-box">
                                    <div class="image-box">
                                        <img src="assets/media/blog/blog-img-1.png" alt="" class="w-100 attachment-full size-full">
                                    </div>
                                    <div class="author-box text-start">
                                        <div class="detail d-flex align-items-center justify-content-between">
                                            <p>28 NOV 2022</p>
                                            <p>Anime</p>
                                        </div>
                                        <h4>Why One piece’s 948th Episode </h4>
                                        <div class="d-flex align-items-center">
                                            <img src="assets/media/comment/comment-img.png" class="w-auto" alt="">
                                            <h5>Author’s Name</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6col-12 mb-4">
                                <a href="blog-detail.html" class="inner-box">
                                    <div class="image-box">
                                        <img src="assets/media/blog/blog-img-2.png" alt="" class="attachment-full size-full w-100">
                                    </div>
                                    <div class="author-box text-start">
                                        <div class="detail d-flex align-items-center justify-content-between">
                                            <p>28 NOV 2022</p>
                                            <p>Manga</p>
                                        </div>
                                        <h4>ANime Community Is Going mad </h4>
                                        <div class="d-flex align-items-center">
                                            <img src="assets/media/comment/comment-img-6.png" class="w-auto" alt="">
                                            <h5>Author’s Name</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6col-12 mb-4">
                                <a href="blog-detail.html" class="inner-box">
                                    <div class="image-box">
                                        <img src="assets/media/blog/blog-img-3.png" alt="" class="attachment-full size-full w-100">
                                    </div>
                                    <div class="author-box text-start">
                                        <div class="detail d-flex align-items-center justify-content-between">
                                            <p>28 NOV 2022</p>
                                            <p>Light Novel</p>
                                        </div>
                                        <h4>Tokyo Ghoul 2nd Season Review</h4>
                                        <div class="d-flex align-items-center">
                                            <img src="assets/media/comment/comment-img-2.png" class="w-auto" alt="">
                                            <h5>Author’s Name</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6col-12 mb-4">
                                <a href="blog-detail.html" class="inner-box">
                                    <div class="image-box">
                                        <img src="assets/media/blog/blog-img-2.png" alt="" class="attachment-full size-full w-100">
                                    </div>
                                    <div class="author-box text-start">
                                        <div class="detail d-flex align-items-center justify-content-between">
                                            <p>28 NOV 2022</p>
                                            <p>Manga</p>
                                        </div>
                                        <h4>ANime Community Is Going mad </h4>
                                        <div class="d-flex align-items-center">
                                            <img src="assets/media/comment/comment-img-3.png" class="w-auto" alt="">
                                            <h5>Author’s Name</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6col-12 mb-4">
                                <a href="blog-detail.html" class="inner-box">
                                    <div class="image-box">
                                        <img src="assets/media/blog/blog-img-1.png" alt="" class="attachment-full size-full w-100">
                                    </div>
                                    <div class="author-box text-start">
                                        <div class="detail d-flex align-items-center justify-content-between">
                                            <p>28 NOV 2022</p>
                                            <p>Community</p>
                                        </div>
                                        <h4>Why One piece’s 948th Episode  </h4>
                                        <div class="d-flex align-items-center">
                                            <img src="assets/media/comment/comment-img-4.png" class="w-auto" alt="">
                                            <h5>Author’s Name</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6col-12 mb-4">
                                <a href="blog-detail.html" class="inner-box">
                                    <div class="image-box">
                                        <img src="assets/media/blog/blog-img-3.png" alt="" class="attachment-full size-full w-100">
                                    </div>
                                    <div class="author-box text-start">
                                        <div class="detail d-flex align-items-center justify-content-between">
                                            <p>28 NOV 2022</p>
                                            <p>Light Novel</p>
                                        </div>
                                        <h4>ANime Community IS Going mad </h4>
                                        <div class="d-flex align-items-center">
                                            <img src="assets/media/comment/comment-img-5.png" class="w-auto" alt="">
                                            <h5>Author’s Name</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-search bg-color-black">
                            <form action="https://uiparadox.co.uk/public/templates/animeloop/v2/demo/blog.html">
                                <div class="input-group form-group">
                                    <input class="form-control" type="text" name="query" placeholder="Search">
                                    <button class="input-group-text anime-btn" type="submit"><i
                                            class="fal fa-search"></i></button>
                                </div>
                            </form>
                            <h5 class="mb-3 mt-4">Tags</h5>
                            <ul class="tags">
                                <li><a href="#">Anime</a></li>
                                <li><a href="#">Shounen</a></li>
                                <li><a href="#">Super Hero</a></li>
                                <li><a href="#">Fantasy</a></li>
                            </ul>
                            <h5 class="mb-3 mt-4">Categories</h5>
                            <ul class="categories list-style">
                                <li><a href="#">Anime</a></li>
                                <li><a href="#">Manga</a></li>
                                <li><a href="#">Cosplay</a></li>
                                <li><a href="#">Light Novel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="pagination-wrape">
                    <ul class="pagination">
                        <li class="page-item">
                            <a href="#" class="page-link arrow" aria-label="Previous">
                                <i class="fa fa-chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link current">1</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">3</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">4</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link arrow" aria-label="next">
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                
                
            </div>
        </section>
@endsection
