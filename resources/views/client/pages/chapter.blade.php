@extends('client.layouts.main')
@section('content')
    <!--=====================================-->
    <!--=        Chapter Area Start       	=-->
    <!--=====================================-->
    <section class="chapter sec-mar">
        <div class="container">
            <div class="heading style-1">
                <h2>Solo Leveling</h2>
                <span>Chapter 179</span>
            </div>
            <div class="d-flex justify-content-between mb-4">
                <div class="left position-relative">
                    <a href="#" class="anime-btn btn-dark border-change dropdown-toggle" id="country"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">CHAPTER 1
                        <span><i class="fa fa-chevron-down"></i></span></a>
                    <ul class="dropdown-menu" aria-labelledby="country" t>
                        <li><a href="#"> chapter 1 </a></li>
                        <li><a href="#"> chapter 2 </a></li>
                        <li><a href="#"> chapter 3 </a></li>
                        <li><a href="#"> chapter 4 </a></li>
                        <li><a href="#"> chapter 5 </a></li>
                    </ul>
                </div>
                <div class="right">
                    <a href="#" class="anime-btn btn-dark">PREVIOUS</a>
                    <a href="#" class="anime-btn btn-dark border-change ms-1">NEXT</a>
                </div>
            </div>
            <div class="row pt-4">
                <div class="chapter-image col-lg-10 offset-lg-1 col-12 offset-0">
                    <img src="assets/media/chapter/image-1.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=         Comment Area Start        =-->
    <!--=====================================-->
    <section class="comment sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="comment-block">
                        <div class="heading style-1 m-0">
                            <h2>COMMENTS</h2>
                        </div>
                        <p>We hope you have a good time browsing the comment section! <br>
                            Please read our <a href="comments.html">Comment Policy</a> before commenting.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-2">
                            <a href="profile.html"><img src="assets/media/comment/comment-img.png" alt=""></a>
                        </div>
                        <div class="col-lg-11 col-10">
                            <form action="https://uiparadox.co.uk/public/templates/animeloop/v2/demo/streaming-movie.html">
                                <div class="input-group form-group footer-email-box">
                                    <input class="form-control" type="text" name="post"
                                        placeholder="Join the discussion">
                                    <button class="input-group-text post-btn" type="submit">Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="site-comment">
                        <div class="row">
                            <div class="col-lg-1 col-2">
                                <a href="profile.html"><img src="assets/media/comment/comment-img-2.png" alt=""></a>
                            </div>
                            <div class="col-lg-11 col-10">
                                <h5><a href="profile.html">@username</a><b>5 minutes ago</b></h5>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias.
                                </p>
                                <a href="#" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                <a href="#" class="comment-btn"><i class="fa fa-thumbs-down"></i></a>
                                <button class=" accordion-button comment-btn" data-bs-toggle="collapse"
                                    data-bs-target="#reply1" aria-expanded="true">Reply</button>
                                <div id="reply1" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                                    <div class="card card-body">
                                        <div class="d-flex pt-3">
                                            <a href="profile.html"><img src="assets/media/comment/comment-img-sm-2.png"
                                                    alt=""></a>
                                            <input type="text" placeholder="Add a reply">
                                        </div>
                                        <div class="text-end">
                                            <button class="comment-btn">Cencel</button>
                                            <button class="comment-btn active">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 col-2">
                                <a href="profile.html"><img src="assets/media/comment/comment-img-3.png" alt=""></a>
                            </div>

                            <div class="col-lg-11 col-10">
                                <h5><a href="profile.html">@username</a> <b>5 minutes ago</b></h5>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias.
                                </p>
                                <a href="#" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                <a href="#" class="comment-btn"><i class="fa fa-thumbs-down"></i></a>
                                <button class=" accordion-button comment-btn" data-bs-toggle="collapse"
                                    data-bs-target="#reply2" aria-expanded="true">Reply</button>
                                <div id="reply2" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="card card-body">
                                        <div class="d-flex pt-3">
                                            <a href="profile.html"><img src="assets/media/comment/comment-img-sm-1.png"
                                                    alt=""></a>
                                            <input type="text" placeholder="Add a reply">
                                        </div>
                                        <div class="text-end">
                                            <button class="comment-btn">Cencel</button>
                                            <button class="comment-btn active">Reply</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <a href="#" class="accordion-button comment-btn active" data-bs-toggle="collapse"
                            data-bs-target="#reply" aria-expanded="true" aria-controls="reply"><i
                                class="fa fa-chevron-up"></i> 40 Replies</a>
                        <div id="reply" class="accordion-collapse collapse show " data-bs-parent="#accordionExample">
                            <div class="card card-body">
                                <div class="row pt-3">
                                    <div class="col-lg-11 offset-lg-1 offset-2 col-10 pb-4">
                                        <div class="d-inline-flex align-items-start">

                                            <a href="profile.html"><img src="assets/media/comment/comment-img-sm-1.png"
                                                    alt=""></a>
                                            <div class="replies">
                                                <h5><a href="profile.html">@username</a> <b>5 minutes ago</b></h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                    blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                    dolores et quas molestias.</p>
                                                <a href="#" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                                <a href="#" class="comment-btn"><i
                                                        class="fa fa-thumbs-down"></i></a>
                                                <button class=" accordion-button comment-btn" data-bs-toggle="collapse"
                                                    data-bs-target="#reply30" aria-expanded="true">Reply</button>
                                                <div id="reply30" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="card card-body">
                                                        <div class="d-flex pt-3">
                                                            <img src="assets/media/comment/comment-img-sm-2.png"
                                                                alt="">
                                                            <input type="text" placeholder="Add a reply">
                                                        </div>
                                                        <div class="text-end">
                                                            <button class="comment-btn">Cencel</button>
                                                            <button class="comment-btn active">Reply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 offset-lg-1 offset-2 col-10 pb-4">
                                        <div class="d-inline-flex align-items-start">
                                            <a href="profile.html"><img src="assets/media/comment/comment-img-sm-3.png"
                                                    alt=""></a>
                                            <div class="replies">
                                                <h5><a href="profile.html">@username</a> <b>5 minutes ago</b></h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                    blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                    dolores et quas molestias.</p>
                                                <a href="#" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                                <a href="#" class="comment-btn"><i
                                                        class="fa fa-thumbs-down"></i></a>
                                                <button class=" accordion-button comment-btn" data-bs-toggle="collapse"
                                                    data-bs-target="#reply60" aria-expanded="true">Reply</button>
                                                <div id="reply60" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="card card-body">
                                                        <div class="d-flex pt-3">
                                                            <img src="assets/media/comment/comment-img-sm-1.png"
                                                                alt="">
                                                            <input type="text" placeholder="Add a reply">
                                                        </div>
                                                        <div class="text-end">
                                                            <button class="comment-btn">Cencel</button>
                                                            <button class="comment-btn active">Reply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 offset-lg-1 offset-2 col-10 pb-4">
                                        <div class="d-inline-flex align-items-start">
                                            <a href="profile.html"><img src="assets/media/comment/comment-img-sm-4.png"
                                                    alt=""></a>
                                            <div class="replies">
                                                <h5><a href="profile.html">@username</a> <b>5 minutes ago</b></h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                    blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                    dolores et quas molestias.</p>
                                                <a href="#" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                                <a href="#" class="comment-btn"><i
                                                        class="fa fa-thumbs-down"></i></a>
                                                <button class=" accordion-button comment-btn" data-bs-toggle="collapse"
                                                    data-bs-target="#reply7" aria-expanded="true">Reply</button>
                                                <div id="reply7" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="card card-body">
                                                        <div class="d-flex pt-3">
                                                            <img src="assets/media/comment/comment-img-sm-3.png"
                                                                alt="">
                                                            <input type="text" placeholder="Add a reply">
                                                        </div>
                                                        <div class="text-end">
                                                            <button class="comment-btn">Cencel</button>
                                                            <button class="comment-btn active">Reply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 offset-lg-1 offset-2 col-10 pb-4">

                                        <div id="more" class="accordion-collapse collapse "
                                            data-bs-parent="#accordionExample">
                                            <div class="card card-body">
                                                <div class="d-inline-flex align-items-start">
                                                    <a href="profile.html"><img
                                                            src="assets/media/comment/comment-img-sm-2.png"
                                                            alt=""></a>
                                                    <div class="replies">
                                                        <h5><a href="profile.html">@username</a> <b>5 minutes
                                                                ago</b></h5>
                                                        <p>At vero eos et accusamus et iusto odio dignissimos
                                                            ducimus qui
                                                            blanditiis praesentium voluptatum deleniti atque
                                                            corrupti quos
                                                            dolores et quas molestias.</p>
                                                        <button class="comment-btn"><i
                                                                class="fa fa-thumbs-up"></i></button>
                                                        <button class="comment-btn"><i
                                                                class="fa fa-thumbs-down"></i></button>
                                                        <button class=" accordion-button comment-btn"
                                                            data-bs-toggle="collapse" data-bs-target="#reply9"
                                                            aria-expanded="true">Reply</button>
                                                        <div id="reply9" class="accordion-collapse collapse "
                                                            data-bs-parent="#accordionExample">
                                                            <div class="card card-body">
                                                                <div class="d-flex pt-3">
                                                                    <img src="assets/media/comment/comment-img-sm-1.png"
                                                                        alt="">
                                                                    <input type="text" placeholder="Add a reply">
                                                                </div>
                                                                <div class="text-end">
                                                                    <button class="comment-btn">Cencel</button>
                                                                    <button class="comment-btn active">Reply</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="accordion-button comment-btn active"
                                            data-bs-toggle="collapse" data-bs-target="#more" aria-expanded="true"
                                            aria-controls="more"><i class="fa fa-chevron-down"></i> Show More
                                            Replies</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 col-2">
                                <a href="profile.html"><img src="assets/media/comment/comment-img-4.png"
                                        alt=""></a>
                            </div>
                            <div class="col-lg-11 col-10">
                                <h5><a href="profile.html">@username</a> <b>5 minutes ago</b></h5>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias.
                                </p>
                                <a href="#" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                <a href="#" class="comment-btn"><i class="fa fa-thumbs-down"></i></a>
                                <button class=" accordion-button comment-btn" data-bs-toggle="collapse"
                                    data-bs-target="#reply3" aria-expanded="true">Reply</button>
                                <div id="reply3" class="accordion-collapse collapse "
                                    data-bs-parent="#accordionExample">
                                    <div class="card card-body">
                                        <div class="d-flex pt-3">
                                            <a href="profile.html"><img src="assets/media/comment/comment-img-sm-1.png"
                                                    alt=""></a>
                                            <input type="text" placeholder="Add a reply">
                                        </div>
                                        <div class="text-end">
                                            <button class="comment-btn">Cencel</button>
                                            <button class="comment-btn active">Reply</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <a href="#" class="accordion-button comment-btn active" data-bs-toggle="collapse"
                            data-bs-target="#reply20" aria-expanded="true"><i class="fa fa-chevron-down"></i> 40
                            Replies</a>
                        <div id="reply20" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="card card-body">
                                <div class="row pt-3">
                                    <div class="col-lg-11 offset-lg-1 offset-2 col-10 pb-4">
                                        <div class="d-inline-flex align-items-start">
                                            <a href="profile.html"><img src="assets/media/comment/comment-img-sm-3.png"
                                                    alt=""></a>
                                            <div class="replies">
                                                <h5><a href="profile.html">@username</a> <b>5 minutes ago</b></h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                    blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                    dolores et quas molestias.</p>
                                                <a href="#" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                                <a href="#" class="comment-btn"><i
                                                        class="fa fa-thumbs-down"></i></a>
                                                <button class=" accordion-button comment-btn" data-bs-toggle="collapse"
                                                    data-bs-target="#reply4" aria-expanded="true"
                                                    aria-controls="reply">Reply</button>
                                                <div id="reply4" class="accordion-collapse collapse  "
                                                    data-bs-parent="#accordionExample">
                                                    <div class="card card-body">
                                                        <div class="d-flex pt-3">
                                                            <img src="assets/media/comment/comment-img-sm-2.png"
                                                                alt="">
                                                            <input type="text" placeholder="Add a reply">
                                                        </div>
                                                        <div class="text-end">
                                                            <button class="comment-btn">Cencel</button>
                                                            <button class="comment-btn active">Reply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 offset-lg-1 offset-2 col-10 pb-4">
                                        <div class="d-inline-flex align-items-start">
                                            <a href="profile.html"><img src="assets/media/comment/comment-img-sm-1.png"
                                                    alt=""></a>
                                            <div class="replies">
                                                <h5><a href="profile.html">@username</a> <b>5 minutes ago</b></h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                    blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                    dolores et quas molestias.</p>
                                                <a href="#" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                                <a href="#" class="comment-btn"><i
                                                        class="fa fa-thumbs-down"></i></a>
                                                <button class=" accordion-button comment-btn" data-bs-toggle="collapse"
                                                    data-bs-target="#reply5" aria-expanded="true"
                                                    aria-controls="reply">Reply</button>
                                                <div id="reply5" class="accordion-collapse collapse  "
                                                    data-bs-parent="#accordionExample">
                                                    <div class="card card-body">
                                                        <div class="d-flex pt-3">
                                                            <img src="assets/media/comment/comment-img-sm-1.png"
                                                                alt="">
                                                            <input type="text" placeholder="Add a reply">
                                                        </div>
                                                        <div class="text-end">
                                                            <button class="comment-btn">Cencel</button>
                                                            <button class="comment-btn active">Reply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 offset-lg-1 offset-2 col-10 pb-4">
                                        <div class="d-inline-flex align-items-start">
                                            <a href="profile.html"><img src="assets/media/comment/comment-img-sm-3.png"
                                                    alt=""></a>
                                            <div class="replies">
                                                <h5><a href="profile.html">@username</a> <b>5 minutes ago</b></h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                    blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                    dolores et quas molestias.</p>
                                                <a href="#" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                                <a href="#" class="comment-btn"><i
                                                        class="fa fa-thumbs-down"></i></a>
                                                <button class=" accordion-button comment-btn" data-bs-toggle="collapse"
                                                    data-bs-target="#reply6" aria-expanded="true"
                                                    aria-controls="reply">Reply</button>
                                                <div id="reply6" class="accordion-collapse collapse  "
                                                    data-bs-parent="#accordionExample">
                                                    <div class="card card-body">
                                                        <div class="d-flex pt-3">
                                                            <img src="assets/media/comment/comment-img-sm-2.png"
                                                                alt="">
                                                            <input type="text" placeholder="Add a reply">
                                                        </div>
                                                        <div class="text-end">
                                                            <button class="comment-btn">Cencel</button>
                                                            <button class="comment-btn active">Reply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="text-center">
                            <a href="#" class="accordion-button comment-btn" data-bs-toggle="collapse"
                                data-bs-target="#loadmore" aria-expanded="true" aria-controls="loadmore">Load More
                                Comment</a>
                            <hr>
                        </div>
                        <div id="loadmore" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="row pt-3">
                                <div class="col-lg-11 offset-lg-1 offset-2 col-10 pb-4">
                                    <div class="d-inline-flex align-items-start">
                                        <a href="profile.html"><img src="assets/media/comment/comment-img-sm-3.png"
                                                alt=""></a>
                                        <div class="replies">
                                            <h5><a href="profile.html">@username</a> <b>5 minutes ago</b></h5>
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                dolores et quas molestias.</p>
                                            <a href="#" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                            <a href="#" class="comment-btn"><i class="fa fa-thumbs-down"></i></a>
                                            <button class=" accordion-button comment-btn" data-bs-toggle="collapse"
                                                data-bs-target="#reply4" aria-expanded="true"
                                                aria-controls="reply">Reply</button>
                                            <div id="reply4" class="accordion-collapse collapse  "
                                                data-bs-parent="#accordionExample">
                                                <div class="card card-body">
                                                    <div class="d-flex pt-3">
                                                        <img src="assets/media/comment/comment-img-sm-2.png"
                                                            alt="">
                                                        <input type="text" placeholder="Add a reply">
                                                    </div>
                                                    <div class="text-end">
                                                        <button class="comment-btn">Cencel</button>
                                                        <button class="comment-btn active">Reply</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-11 offset-lg-1 offset-2 col-10 pb-4">
                                    <div class="d-inline-flex align-items-start">
                                        <a href="profile.html"><img src="assets/media/comment/comment-img-sm-1.png"
                                                alt=""></a>
                                        <div class="replies">
                                            <h5><a href="profile.html">@username</a> <b>5 minutes ago</b></h5>
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                dolores et quas molestias.</p>
                                            <a href="#" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                            <a href="#" class="comment-btn"><i class="fa fa-thumbs-down"></i></a>
                                            <button class=" accordion-button comment-btn" data-bs-toggle="collapse"
                                                data-bs-target="#reply5" aria-expanded="true"
                                                aria-controls="reply">Reply</button>
                                            <div id="reply5" class="accordion-collapse collapse  "
                                                data-bs-parent="#accordionExample">
                                                <div class="card card-body">
                                                    <div class="d-flex pt-3">
                                                        <img src="assets/media/comment/comment-img-sm-1.png"
                                                            alt="">
                                                        <input type="text" placeholder="Add a reply">
                                                    </div>
                                                    <div class="text-end">
                                                        <button class="comment-btn">Cencel</button>
                                                        <button class="comment-btn active">Reply</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-11 offset-lg-1 offset-2 col-10 pb-4">
                                    <div class="d-inline-flex align-items-start">
                                        <a href="profile.html"><img src="assets/media/comment/comment-img-sm-3.png"
                                                alt=""></a>
                                        <div class="replies">
                                            <h5><a href="profile.html">@username</a> <b>5 minutes ago</b></h5>
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                dolores et quas molestias.</p>
                                            <a href="#" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                            <a href="#" class="comment-btn"><i class="fa fa-thumbs-down"></i></a>
                                            <button class=" accordion-button comment-btn" data-bs-toggle="collapse"
                                                data-bs-target="#reply6" aria-expanded="true"
                                                aria-controls="reply">Reply</button>
                                            <div id="reply6" class="accordion-collapse collapse  "
                                                data-bs-parent="#accordionExample">
                                                <div class="card card-body">
                                                    <div class="d-flex pt-3">
                                                        <img src="assets/media/comment/comment-img-sm-2.png"
                                                            alt="">
                                                        <input type="text" placeholder="Add a reply">
                                                    </div>
                                                    <div class="text-end">
                                                        <button class="comment-btn">Cencel</button>
                                                        <button class="comment-btn active">Reply</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 offset-lg-0 offset-md-3 offset-sm-2 mt-lg-0 mt-3">
                    <h3 class="small-title">SIMILAR</h3>
                    <div class="anime-box bg-color-black">
                        <a href="streaming-season.html">
                            <div class="row m-0">
                                <div class="p-0 col-2">
                                    <img src="assets/media/anime-sm-img/anime-img-7.png" alt="">
                                </div>
                                <div class="p-0 col-9">
                                    <div class="anime-blog">
                                        <p>86</p>
                                        <p class="text-box">dub 8</p>
                                        <p class="text-box">sub 12</p>
                                    </div>
                                </div>
                                <div class="p-0 col-1 show-type">
                                    <span class="show-type">TV</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="anime-box bg-color-black">
                        <a href="streaming-season.html">
                            <div class="row m-0">
                                <div class="p-0 col-2">
                                    <img src="assets/media/anime-sm-img/anime-img-8.png" alt="">
                                </div>
                                <div class="p-0 col-9">
                                    <div class="anime-blog">
                                        <p>Re-Zero</p>
                                        <p class="text-box">dub 8</p>
                                        <p class="text-box">sub 12</p>
                                        <p class="text-box active">18+</p>
                                    </div>
                                </div>
                                <div class="p-0 col-1 show-type">
                                    <span class="show-type">TV</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="anime-box bg-color-black">
                        <a href="streaming-season.html">
                            <div class="row m-0">
                                <div class="p-0 col-2">
                                    <img src="assets/media/anime-sm-img/anime-img-9.png" alt="">
                                </div>
                                <div class="p-0 col-9">
                                    <div class="anime-blog">
                                        <p>Tokyo Ghoul</p>
                                        <p class="text-box">dub 8</p>
                                        <p class="text-box">sub 12</p>
                                    </div>
                                </div>
                                <div class="p-0 col-1 show-type">
                                    <span class="show-type">TV</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="anime-box bg-color-black">
                        <a href="streaming-season.html">
                            <div class="row m-0">
                                <div class="p-0 col-2">
                                    <img src="assets/media/anime-sm-img/anime-img-10.png" alt="">
                                </div>
                                <div class="p-0 col-9">
                                    <div class="anime-blog">
                                        <p>Sword Art Online</p>
                                        <p class="text-box">dub 8</p>
                                        <p class="text-box">sub 12</p>
                                    </div>
                                </div>
                                <div class="p-0 col-1 show-type">
                                    <span class="show-type">TV</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="anime-box bg-color-black">
                        <a href="streaming-season.html">
                            <div class="row m-0">
                                <div class="p-0 col-2">
                                    <img src="assets/media/anime-sm-img/anime-img-11.png" alt="">
                                </div>
                                <div class="p-0 col-9">
                                    <div class="anime-blog">
                                        <p>Sword Alicization</p>
                                        <p class="text-box">dub 8</p>
                                        <p class="text-box">sub 12</p>
                                    </div>
                                </div>
                                <div class="p-0 col-1 show-type">
                                    <span class="show-type">TV</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="anime-box bg-color-black">
                        <a href="streaming-season.html">
                            <div class="row m-0">
                                <div class="p-0 col-2">
                                    <img src="assets/media/anime-sm-img/anime-img-12.png" alt="">
                                </div>
                                <div class="p-0 col-9">
                                    <div class="anime-blog">
                                        <p>One Piece</p>
                                        <p class="text-box">dub 8</p>
                                        <p class="text-box">sub 12</p>
                                    </div>
                                </div>
                                <div class="p-0 col-1 show-type">
                                    <span class="show-type">TV</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
