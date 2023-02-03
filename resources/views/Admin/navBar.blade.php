<?php
if (Session::has('firebaseUserId') && Session::has('idToken')) 
{
    // dd("User masih login.");
} else {
    dd("User sudah logout.");
}
?>

{{-- navigation bar --}}
@include('Admin.navBarCss')

<!-- Navbar  -->
<div class="header-top">
    <div class="header-bar header-white header-wide header-padding header-card">
        <a href="adminHome" class="header-bar-item header-button"><b>Book Centre</a>
        <!-- Float links to the right. Hide them on small screens -->
        <div class="header-right header-bar-hide-small">

            <ul>
                <li><a href="logout">Logout</a></li>
                <li><a href="userRegister">Bookstore</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Book</a></li>
        </div>
        </li>
        </ul>

    </div>
</div>
</div>

{{-- <!-- Header -->
<header class="header-container header-content header-wide" style="max-width:1500px;" id="home">
    <img class="header-image" src="images/book1.jpeg" alt="Header" width="1500" height="800">
    <div class="header-display-middle header-margin-top header-center">
        <h1 class="header-xxlarge header-text-color">
            <span class="header-padding header-black header-opacity-min"><b>BC</b></span>
            <span class="header-bar-hide-small header-text-light-grey">Book Centre</span>
        </h1>
    </div>
</header> --}}
