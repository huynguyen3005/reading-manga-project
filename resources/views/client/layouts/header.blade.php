<header class="header style-1">
    <div class="container">
        <!-- Start Mainmenu Nav -->
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="home.html"><img src="{{ LOGO_LINK }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ms-auto mainmenu">
                    <li class="menu-item-has-children">
                        <a href="{{ route('home') }}" class="active">Trang chủ</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#Pages" class="dropdown-toggle" id="pages" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" aria-expanded="false">Thể loại</a>
                        <ul class="dropdown-menu" aria-labelledby="pages">
                            <li>
                                <a href="home.html" class="active">Anime</a>
                            </li>
                            <li>
                                <a href="home-2.html">Movie</a>
                            </li>
                            <li>
                                <a href="home-3.html">Manga</a>
                            </li>
                            <li>
                                <a href="streaming-season.html">Streaming Season</a>
                            </li>
                            <li>
                                <a href="streaming-movie.html">Streaming Movie</a>
                            </li>
                            <li>
                                <a href="manga-detail.html">Manga Detail</a>
                            </li>
                            <li>
                                <a href="manga-content.html">Manga Content </a>
                            </li>
                            <li>
                                <a href="list-view.html">List View</a>
                            </li>
                            <li>
                                <a href="grid-view.html">Grid View</a>
                            </li>
                            <li>
                                <a href="blog.html">Blog</a>
                            </li>
                            <li>
                                <a href="blog-detail.html">Blog Detail</a>
                            </li>
                            <li>
                                <a href="privacy.html"> Privacy Policy</a>
                            </li>
                            <li>
                                <a href="comments.html"> Comments Policy </a>
                            </li>
                            <li>
                                <a href="profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="edit-profile.html"> Edit Profile</a>
                            </li>
                            <li>
                                <a href="watch-history.html">Watch History</a>
                            </li>
                            <li>
                                <a href="playlist.html">Playlist</a>
                            </li>
                            <li>
                                <a href="login.html">Log In</a>
                            </li>
                            <li>
                                <a href="signup.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="reset-password.html">Reset Password</a>
                            </li>
                            <li>
                                <a href="404.html">404</a>
                            </li>
                            <li>
                                <a href="coming-soon.html"> Coming Soon</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="home-2.html">Top truyện</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="home-3.html">Blogs</a>
                    </li>
                </ul>
                <form action="https://uiparadox.co.uk/public/templates/animeloop/v2/demo/list-view.html">
                    <div class="input-group form-group header-search-box">
                        <button class="input-group-text anime-btn" type="submit"><i class="fal fa-search"></i></button>
                        <input class="form-control" name="search" type="text" placeholder="Search">
                    </div>
                </form>
                <div class="d-flex right-nav">
                    <a href="signup.html" class="anime-btn2 light me-3">SIGN UP</a>
                    <a href="login.html" class="anime-btn2 dark">LOG IN</a>
                </div>
            </div>
        </nav>
    </div>
</header>
