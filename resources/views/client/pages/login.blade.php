@extends('client.layouts.main')
@section('content')
    <section class="login text-center">
        <div class="container">
            <div class="login-block">
                <div class="login-content">
                    <img src="assets/media/icon/user.png" alt="" class="user-icon">
                    <h3>Log in</h3>
                    <button class="hide-link"><img src="assets/media/login/google.png" alt=""> Continue with
                        Google</button>
                    <button class="hide-link"><img src="assets/media/login/facebook-icon.png" alt=""> Continue with
                        Facebook</button>
                    <button id="continue-email" class="hide-link"><img src="assets/media/login/email-icon.png"
                            alt=""> Continue with email</button>
                    <div class="login-sec" style="display: none;">
                        <form action="https://uiparadox.co.uk/public/templates/animeloop/v2/demo/home.html"
                            class="form-validator">
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" required
                                    placeholder="username or email address">
                            </div>
                            <div class="form-group password-type-field mb-0">
                                <input class="form-control" type="password" id="password-field" name="password" required
                                    placeholder="enter password">
                                <span class="text-end toggle-password" toggle="#password-field"> <i
                                        class="fal fa-eye field-icon toggle-password"></i></span>
                            </div>
                            <button type="submit" class="anime-btn btn-dark border-change">
                                Log In
                            </button>
                        </form>
                        <p><a href="reset-password.html">Quên mật khẩu</a></p>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="check">
                        <label class="custom-control-label" for="check">Lưu mật khẩu</label>
                    </div>
                    <p class="guide">Create an account? <a href="{{ route('signup') }}">Sign Up</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
