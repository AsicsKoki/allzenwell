<header class="main_header">
    <div class="main_header_top cf"> 
        <a href="{{ URL::to('/')}}" class="logo_header_holder animated bounceInLeft">
            <img src="{{ URL::to('/')}}/photos/naposaologo.png" alt="">
        </a>
    </div>

    <div class="main_header_bottom cf">
        <div class="main_header_bottom_left">
            <p>
                <a href="{{ route('getRegister') }}">Register/Login</a>
            </p>
        </div>
    </div>
</header>