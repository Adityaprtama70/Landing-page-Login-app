@extends('master')

@section('content')
<div class="box ">
    <div class="inner-box">
        <div class="forms-wrap">
            <form action="index.html" autocomplete="off" class="sign-in-from">
            <div class="logo">
                <img src="{{ asset("img/logo.png") }}" alt="easyclass">
                <h4>easyclass</h4>
            </div>
        
            <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not register yet?</h6>
                <a href="#" class="toggle">Sign Up</a>
            </div>

            <div class="actual-form">
                <div class="input-wrap">
                    <input 
                    type="text" 
                    minlength="4" 
                    class="input-field"
                    autocomplete="off"
                    required 
                    />
                    <label>Name</label>
                </div>

                <div class="input-wrap">
                    <input 
                    type="password" 
                    minlength="4" 
                    class="input-field"
                    autocomplete="off"
                    required 
                    />
                    <label>Password</label>
                </div>

                <div class="captcha">
                    <div class="spinner" id="btn-spinner">
                        <label>
                            <input type="checkbox" onclick="$(this).attr('disabled','disabled');">
                            <span class="checkmark"><span>&nbsp;</span></span>
                        </label>
                    </div>
                    <div class="text">
                        I'm not a robot
                    </div>
                    <div class="picture">
                        <img src="https://forum.nox.tv/core/index.php?media/9-recaptcha-png/"/>
                        <p>reCAPTCHA</p>
                        <small>Privacy - Terms</small>
                    </div>
                </div>

                <input type="submit" value="Sign In" class="sign-btn" />
                
                <p class="text">
                    Forgotten your password or you login details?
                    <a href="#">Forgot Password?</a> signing in
                  </p>
                </div>
            </form>

            <form action="index.html" autocomplete="off" class="sign-up-from">
                <div class="logo">
                    <img src="{{ asset('img/logo.png') }}" alt="easyclass">
                    <h4>easyclass</h4>
                </div>
            
                <div class="heading">
                    <h2>Get Started</h2>
                    <h6>Already have an account?</h6>
                    <a href="#" class="toggle">Sign In</a>
                </div>

                <div class="actual-form">
                    <div class="input-wrap">
                        <input 
                        type="text" 
                        minlength="4" 
                        class="input-field"
                        autocomplete="off"
                        required 
                        />
                        <label>Name</label>
                    </div>

                    <div class="input-wrap">
                        <input 
                        type="email"
                        class="input-field"
                        autocomplete="off"
                        required 
                        />
                        <label>Email</label>
                    </div>

                    <div class="input-wrap">
                        <input 
                        type="password" 
                        minlength="4" 
                        class="input-field"
                        autocomplete="off"
                        required 
                        />
                        <label>Password</label>
                    </div>

                    <input type="submit" value="Sign Up" class="sign-btn" />
                    
                    <p class="text">
                        By signing up, I agree to the 
                        <a href="#">Term of Services</a> and
                        <a href="#">Privacy Policy</a>
                      </p>
                    </div>
                </form>
        </div>

        <div class="carousel">
            <div class="images-wrapper">
                <img src="{{ asset('img/image1.png') }}" class="image img-1 show" alt="" />
                <img src="{{ asset('img/image2.png') }}" class="image img-2" alt="" />
                <img src="{{ asset('img/image3.png') }}" class="image img-3" alt="" />
            </div>
            
            <div class="text-slider">

                <div class="text-wrap">
                    <div class="text-group">
                        <h2>Create your own courses</h2>
                        <h2>Customize as you like</h2>
                        <h2>Invite student your class</h2>
                    </div>
                </div>

                <div class="bullets">
                    <span class="active" data-value="1"></span>
                    <span data-value="2"></span>
                    <span data-value="3"></span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection