<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>

    <link rel="stylesheet" href="{{asset('css/signup.css')}}">
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
        <form class="form" id="form" action="{{route('signup')}}" method="POST">
        @csrf    
        <h3>Sign Up</h3>
            <div class="form-control">
                <input type="text" name="name" placeholder="Name" id="name">
            </div>
            <div class="form-control">
                <input type="text" name="studentId" placeholder="Student ID" id="studentId">
            </div>
            <div class="form-control">
                <input type="email" name="email" placeholder="Email" id="email">
            </div>
            <div class="form-control">
                <input type="password" name="password" placeholder="Password" id="password">
            </div>
            <div class="form-control">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation">
            </div>
            <div class="form-control">
                <select name="gender" id="gender">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-control">
                <select name="major" id="major">
                    <option value="">Select Major</option>
                    <option value="computer_science">Computer Science</option>
                    <option value="engineering">Engineering</option>
                    <option value="business">Business</option>
                </select>
            </div>
            <div class="form-control">
                <select name="region" id="region">
                    <option value="">Select Region</option>
                    <option value="alsut">Alsut</option>
                    <option value="bandung">Bandung</option>
                    <option value="bekasi">Bekasi</option>
                    <option value="kemanggisan">Kemanggisan</option>
                    <option value="malang">Malang</option>
                    <option value="semarang">Semarang</option>
                </select>
            </div>
            <button type="submit" id="signup-btn">Sign Up</button>
            
            <button type="button" id="login-btn" onclick="window.location='{{url('/')}}'">Log in</button>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </main>
</body>
</html>