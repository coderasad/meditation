<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Meditation') }} - Signup</title>
    <!------- FONTS ------->
    <link rel="stylesheet" href="{{ asset('') }}asset/frontend/fonts/fonts.css">
    <!----- CSS HERE ----->
    <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/bootstrap-grid.min.css"/>
    <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/style.css"/>
    <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/reuseble-code.css"/>
    <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/responsive.css"/>
</head>

<body>

<main>

    <section class="fixed-height">
        <div class="container-fluid px-sm-0">
            <div class="row g-5">
                <div class="col-xl-5 col-lg-6 order-2 order-sm-1">
                    <div class="sign-img vh-100 p-relative">
                        <img src="{{ asset('') }}asset/frontend/images/reg.png" alt="Sign In"
                             class="img sign-img-main signup-img-main d-block">
                        {{--							<img src="{{ asset('') }}asset/frontend/images/reg-logo.png" alt="reg-logo" class="reg-logo">--}}
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 order-1 order-sm-2 s-column">

                    <div class="align-items-lg-center d-flex h-100 justify-content-center p-relative">
                        <a href="{{ url('') }}" class="ps-700 c86 s16 back-link d-flex align-items-lg-center">
                            <img src="{{ asset('') }}asset/frontend/svg-icon/arrow_back.svg" alt="arrow_back"> <span>Back</span>
                        </a>
                        <div class="sign-content mx-auto">
                            <h2 class="ps-700 c00 s30 reg-title my-5">Register Individual Account!</h2>
                            <form action="javascript:void(0)">
                                <div class="sign-form">
                                    <label for="email" class="c69 ps-400 s16">
                                        Email address*
                                    </label>
                                    <input type="email" id="email" placeholder="Enter email address"
                                           class="s14 c869 w-100">
                                </div>
                                <div class="sign-form">
                                    <label for="pass" class="c69 ps-400 s16">
                                        Create password*
                                    </label>
                                    <input type="password" name="" id="pass" placeholder="Password"
                                           class="s14 c869 w-100">
                                </div>
                                <div class="sign-form">
                                    <label for="pass" class="c69 ps-400 s16">
                                        Repeat password*
                                    </label>
                                    <input type="password" name="" id="pass" placeholder="Repeat password"
                                           class="s14 c869 w-100">
                                </div>
                                <div class="sign-form d-flex align-items-end">
                                    <label class="check__main ps-400 c69 s16">I agree to terms & conditions
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="sign-btn sign-form">
                                    <input type="submit" value="Register Account" class="submit-button">
                                </div>
                            </form>
                            <div class="tc or-text">
                                <p class="ps-400 cba s14 p-relative">Or</p>
                            </div>
                            <div class="d-flex justify-content-center mb-5 social-icon">
                                <a href="">
                                    <img class="w-100 h-100" src="{{ asset('') }}asset/frontend/svg-icon/reg-google.svg" alt="google">
                                </a>
                                <a href="">
                                    <img class="w-100 h-100" src="{{ asset('') }}asset/frontend/svg-icon/reg-apple.svg" alt="apple">
                                </a>
                                <a href="">
                                    <img class="w-100 h-100" src="{{ asset('') }}asset/frontend/svg-icon/reg-fb.svg" alt="fb" >
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>

</body>

</html>
