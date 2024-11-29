@extends('client.layouts.main')
@section('content')
    <section class="blog-detail sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <img alt="" src="{{ asset('assets/media/blog-detail/blog-img-1.jpg') }}">
                    <div class="text-details">
                        <p class="text-end author pt-3"><b>Anime-</b> 16 Oct 2023</p>
                        <h4>One piece’s 948th Episode </h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                            occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                            mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                            expedita distinctio. </p>
                        <p class="mb-4">
                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus
                            id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor
                            repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                            saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque
                            earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores
                            alias consequatur aut perferendis doloribus asperiores repellat.
                        </p>
                        <div class="text-box mb-4 text-center">
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis <br>
                            praesentium voluptatum deleniti atque corrupti quos dolores et quas.
                        </div>
                        <p class="m-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                            sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                            mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                            expedita distinctio. </p>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <img src="{{ asset('assets/media/blog-detail/blog-img-2.png') }}" class="blog-detail-img"
                                    alt="">
                            </div>
                            <div class="col-lg-6 col-12">
                                <img src="{{ asset('assets/media/blog-detail/blog-img-3.png') }}" class="blog-detail-img"
                                    alt="">
                            </div>
                        </div>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
                            quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor
                            repellendus. </p>
                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet
                            ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic
                            tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur
                            aut perferendis doloribus asperiores repellat.</p>
                        <p class="m-0">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
                            quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis
                            dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum
                            necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non
                            recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                            voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card blog-sidebar">
                        <div class="card-body bg-color-black">
                            <form method="get"
                                action="https://uiparadox.co.uk/public/templates/animeloop/v2/demo/blogs.html">
                                <div class="input-group form-group mb-4">
                                    <input class="form-control" name="query" placeholder="Search">
                                    <button class="input-group-text promee-btn btn-fill-primary  ps-3 pe-3"
                                        type="submit"><i class="fal fa-search"></i></button>
                                </div>
                            </form>
                            <h5 class="mb-3">Tags</h5>
                            <ul class="tags">
                                <li><a href="#">Anime</a></li>
                                <li><a href="#">Shounen</a></li>
                                <li><a href="#">Super Hero</a></li>
                                <li><a href="#">Fantasy</a></li>
                            </ul>
                            <h5 class="mb-2 mt-4">Popular Blogs</h5>
                            <ul class="popular-blogs">
                                <li>
                                    <a href="#">
                                        <div class="row align-items-center">
                                            <div class="col-5">
                                                <img alt=""
                                                    src="{{ asset('assets/media/blog-detail/blog-img-4.jpg') }}">
                                            </div>
                                            <div class="col-7 ps-0">
                                                <p class="date">10 Nov 2023</p>
                                                <h6 class="mb-0">Transparent Fashion Making Ways</h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="row align-items-center">
                                            <div class="col-5">
                                                <img alt=""
                                                    src="{{ asset('assets/media/blog-detail/blog-img-5.png') }}">
                                            </div>
                                            <div class="col-7 ps-0">
                                                <p class="date">10 Nov 2023</p>
                                                <h6 class="mb-0">New Wave of Fashion Trends</h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="row align-items-center">
                                            <div class="col-5">
                                                <img alt=""
                                                    src="{{ asset('assets/media/blog-detail/blog-img-6.png') }}">
                                            </div>
                                            <div class="col-7 ps-0">
                                                <p class="date">10 Nov 2023</p>
                                                <h6 class="mb-0">Sports Trends that are Making Waves</h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <h5 class="mb-2 mt-5">Categories</h5>
                            <ul class="small-tag">
                                <li><a href="list-view.html"> Anime</a></li>
                                <li><a href="list-view.html"> Cosplay</a></li>
                                <li><a href="list-view.html"> Manga</a></li>
                                <li><a href="list-view.html"> Light Novel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
