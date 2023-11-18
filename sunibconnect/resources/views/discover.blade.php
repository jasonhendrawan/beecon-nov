<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    </link>
    <link rel="stylesheet" href="{{asset('css/discover.css')}}">
    <title>SUNIBCONNECT| Discover</title>
</head>
<body>
        <!--HEADER-->
        <nav>
            <a href="{{url('/discover')}}"><img src="{{asset('images/logo.png')}}" ></a>
                <ul class="navbar">
                    <li><a class = "active" href="{{url('/discover')}}">Discover</a></li>
                    <li><a href="friend.html">Friend</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="/">Logout</a></li>
                    <br><br> 
                </ul>
        </nav>  
        <!--HEADER-->
        <!--ISI-->
            <!-- search bar -->
            <div class="searchbar">
                <table class="elements">
                    <tr>
                        <td>
                            <input type="text" placeholder="Search" class="search">
                        </td>
                        <td>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- search bar -->

            <!-- filter -->
            <div class="filterbox">
                <div class="filtertag">
                       <a href="discoverFilter.html">
                        <span class="tag2">Add Filter</span>
                       </a>
                </div>
            </div>
            <!-- filter -->


<div class="profiles">
    @foreach ($usertes as $item)
    <div class="profile">
        <img src="{{ $item->image  }}" class="editprof">
        <div class="details">   
            <div class="namefollow">
                <div class="namegender">
                    <div class="names">
                        <h4>{{ $item->first_name }}</h4>
                    </div>
                    <div class="hiddennames">
                        <h4>{{ $item->first_name }} {{ $item->last_name}}</h4>
                    </div>
                    @if($item->gender == 'male')
                                <img src="{{asset('images\mars.png')}}" width="25px" height="25px" alt="">
                    @elseif($item->gender == 'female')
                                <img src="{{asset('images\female.png')}}" alt="" width="50px" height="50px">
                    @endif
                </div>
                    <a href="friend.html">
                        <img src="{{asset('images\add.png')}}" height="25px" width="25px">
                    </a> 
            </div>   
            <div class="bottom">
                <div class="tags">
                    <span class="tag">B22</span>
                    <span class="tag">{{ $item->major }}</span>
                    <div class="hiddentags">
                        <span class="tag">Binus {{ $item->region}}</span>
                        <span class="tag">Singing</span>
                        @if ($item->created_at != NULL)
                            
                        <span class="tag">{{ $item->created_at }}</span>  
                        
                        @endif
            
                        <span class="tag">Music</span>
                    </div>
                </div>
            <div class="location">
                <img src="{{asset('images\location.png')}}" alt="" width="15px" height="15px">
                <span class="locationname">{{ $item->region }}</span>
            </div>
        </div>
    </div>
    </div>
    @endforeach
</div>
            <!-- profiles -->
        <!-- profiles -->

</body>
</html>