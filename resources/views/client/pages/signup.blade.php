@extends('client.layouts.main')
@section('content')
    <section class="login signup text-center">
        <div class="container">
            <div class="login-block">
                <div class="login-content">
                    <img src="assets/media/icon/user.png" alt="" class="user-icon">
                    <h3>Sign up</h3>
                    <form action="https://uiparadox.co.uk/public/templates/animeloop/v2/demo/signup.html"
                        class="form-validator">
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" required
                                placeholder="username or email address">
                        </div>
                        <div class="form-group password-type-field mb-0">
                            <input class="form-control" type="password" id="password-field" name="password" required
                                placeholder="enter password">
                            <span class="text-end toggle-password" toggle="#password-field"> <i
                                    class="fal fa-eye-slash field-icon toggle-password"></i></span>
                        </div>
                        <div class="form-group password-type-field mb-0">
                            <input class="form-control" type="password" id="confirm-password" name="confirm-password"
                                required placeholder="confirm password">
                            <span class="text-end toggle-password" toggle="#confirm-password"> <i
                                    class="fal fa-eye-slash field-icon toggle-password"></i></span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="check">
                            <label class="custom-control-label" for="check">Lưu mật khẩu</label>
                        </div>
                        <button type="submit" class="anime-btn btn-dark border-change">
                            SIGN UP
                        </button>
                    </form>
                    <p class="guide">Already have an account? <a href="login.html">Log in</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
