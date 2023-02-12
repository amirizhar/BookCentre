<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Book Centre | Login
    </title>

    @include('Login.loginCss')
    @include('Login.loginScript')

</head>

<body id="particles-js"></body>
<div class="animated bounceInDown">
    <div  class="container">
        <span class="error animated tada" id="msg"></span>
        <form action="/login" method="post" class="box">
            @csrf
            <h4><span>Book Centre</span></h4>
            <h5>Sign in to your account.</h5>

            <input type="email" name="email" placeholder="Email">
            <i class="typcn typcn-eye" id="eye"></i>

            <input type="password" name="password" placeholder="Passsword" id="pwd">
            <label>
                <input type="checkbox">
                <span></span>
                <small class="rmb">Remember me</small>
            </label>

            {{-- <a href="#" class="forgetpass">Forget Password?</a> --}}

            <input type="submit" value="Sign in" class="btn1">
        </form>

        {{-- <a href="#" class="dnthave">Don’t have an account? Sign up</a> --}}
    </div>

    {{-- --------------------footer -------------------- --}}
    <div class="footer">
        <span>Contact <br><i class="fa fa-heart pulse"></i> <a href="https://www.google.de/maps/place/Augsburger+Puppenkiste/@48.360357,10.903245,17z/data=!3m1!4b1!4m2!3m1!1s0x479e98006610a511:0x73ac6b9f80c4048f"><a
        href="contact-admin">System Sevice Provider Administrator</a></span>
    </div>
</div>

</body>

</html>
