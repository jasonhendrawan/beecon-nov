<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUNIB CONNECT| Discover</title>

    <link rel="stylesheet" href="discover.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <nav>
        <a href="{{url('discover')}}"><img src="{{asset('images/logo.png')}}" ></a>
            <ul class="navbar">
                <li><a class="active" href="{{url('discover')}}">Discover</a></li>
                <li><a href="friend.html">Friend</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="login.html">SignOut</a></li>
            </ul>
    </nav>

    <main>
        <div class="search-container">
            <form class="search-form" action="/search" method="GET">
                <input type="text" name="query" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </div>
        
        <div class="card-grid">
            <div class="card">
              <img src="user1.jpg" alt="User 1">
              <h3>User 1</h3>
              <p>Email: user1@example.com</p>
            </div>
            <div class="card">
              <img src="user2.jpg" alt="User 2">
              <h3>User 2</h3>
              <p>Email: user2@example.com</p>
            </div>
            <!-- Add more card elements as needed -->
          </div>

          <div class="banner left-banner">
            <img src="left-banner-image.jpg" alt="Left Banner Image">
          </div>
          
          <div class="banner right-banner">
            <img src="right-banner-image.jpg" alt="Right Banner Image">
          </div>

    </main>
</body>

</html>