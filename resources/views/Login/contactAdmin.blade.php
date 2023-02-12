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
            <h4><span>System Service Provider Administrator</span></h4>
            
            <h4>systemadmin@app.com</h4>
            <h5>Email</h5>
            
            <h4>+03-895712376</h4>
            <h5>Phone Number</h5>

        </form>

        {{-- <a href="#" class="dnthave">Don’t have an account? Sign up</a> --}}
    </div>

    {{-- --------------------footer -------------------- --}}
    <div class="footer">
        <span>Account <br><i class="fa fa-heart pulse"></i> <a
                href="https://www.google.de/maps/place/Augsburger+Puppenkiste/@48.360357,10.903245,17z/data=!3m1!4b1!4m2!3m1!1s0x479e98006610a511:0x73ac6b9f80c4048f"><a
                    href="/">Login</a></span>
    </div>
</div>

</body>

</html>
