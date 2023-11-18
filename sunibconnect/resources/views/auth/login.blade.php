<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUNIBCONNECT| Login</title>

    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
<nav>
        <a href="login.html"><img src="{{asset('images/logo.png')}}" ></a>
            <ul class="navbar">
                <li><a href="{{url('/')}}">Discover</a></li>
                <li><a href="{{url('/')}}">Friend</a></li>
                <li><a href="{{url('/')}}">Profile</a></li>
                <li><a class="active" href="{{url('login')}}">Login</a></li>
            </ul>
    </nav>
    
    <main>
        <form action="{{ route('login') }}" id="logForm" method="POST">
            @csrf
            <div class="box-back">
                <div class="form">
        
                    <div class="input-area">
                        <input type="text" class="text-area" placeholder="Email" id="email" name="email" required autofocus>
                    </div>
        
                    <div class="input-area">
        
                        <input type="password" class="text-area" placeholder="Password" id="password" name="password" required>
                    </div>
        
                    <div class="input-area">
                        <button type="submit" class="reg" value="register">Log In</button>                    
                    </div>
        
                    <div class="input-area-line">
                        <p>Or</p>
                    </div>
                    
                    <div class="input-area">
                        <button type="button" class="reg2" value="register" onclick="window.location='{{url('signup')}}'">Sign Up</button>
                    </div>
        
        
                </div>
            </div>
        </form>
    </main>

</body>
</html>