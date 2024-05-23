<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Dosis:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Tac+One&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height: 90px;
            background: #0A101E;
            color: white;
            padding: 10px 170px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .navbar .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
        }

        .navbar .logo h1 {
            font-size: 30px;
        }

        .navbar .logo h1 span {
            color: #FEC544;
        }

        .navbar .menu {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .navbar .menu ul {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .navbar .menu ul li {
            list-style: none;
        }

        .navbar .menu ul li a {
            text-decoration: none;
            color: white;
            padding: 15px;
            transition: 0.5s ease-in-out;
            font-size: 18px;
        }

        .navbar .menu ul li a:hover {
            color: #FEC544;
        }

        .navbar .authenticationbtn {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .navbar .authenticationbtn li {
            list-style: none;
        }

        .navbar .authenticationbtn li a {
            text-decoration: none;
            color: white;
            padding: 10px 25px;
            transition: 0.5s ease-in-out;
            font-size: 18px;
        }

        .navbar .authenticationbtn li .loginbtn {
            border: 1px solid white;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            transition: 0.5s ease-in-out;
        }

        .navbar .authenticationbtn li .loginbtn:hover {
            color: #FEC544;
        }

        .navbar .authenticationbtn li .registerbtn {
            background: #FEC544;
            color: black;
            border: 1px solid #FEC544;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            border-left: none;
            transition: 0.5s ease-in-out;
        }

        .navbar .authenticationbtn li .registerbtn:hover {
            color: white;
        }

        .navbar .authenticationbtn li .logoutbtn {
            background: #FEC544;
            color: black;
            border: 1px solid #FEC544;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            border-left: none;
            transition: 0.5s ease-in-out;
            padding: 10px 25px;
            font-size: 18px;
        }

        .navbar .authenticationbtn li .logoutbtn:hover {
            color: white;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .hamburger div {
            width: 25px;
            height: 3px;
            background-color: white;
            margin: 4px;
            transition: 0.4s;
        }

        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #0A101E;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            z-index: 1001;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
            padding-left: 70px;
        }

        .sidebar a:hover {
            color: #FEC544;
        }

        .sidebar .loginbtn {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
            background: transparent;
            padding-left: 70px;
        }

        .sidebar .logoutbtn {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
            background: transparent;
            margin-left: 70px;
        }

        .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 48px;
            margin-left: 50px;
            cursor: pointer;
        }

        @media screen and (max-width: 968px) {
            .navbar {
                padding: 10px 20px;
            }

            .navbar .menu,
            .navbar .authenticationbtn {
                display: none;
            }

            .hamburger {
                display: flex;
            }
        }

        @media screen and (max-width: 1608px) {
            .navbar{
                padding: 10px 110px;
            }

            .navbar .logo h1 {
                font-size: 25px;
            }

            .navbar .menu ul li a {
                text-decoration: none;
                color: white;
                padding: 13px;
                transition: 0.5s ease-in-out;
                font-size: 18px;
            }

            .navbar .authenticationbtn li a {
                text-decoration: none;
                color: white;
                padding: 10px 25px;
                transition: 0.5s ease-in-out;
                font-size: 14px;
            }


        }

        @media screen and (max-width: 1408px) {
            .navbar{
                padding: 10px 80px;
            }

            .navbar .logo h1 {
                font-size: 25px;
            }

            .navbar .menu ul li a {
                text-decoration: none;
                color: white;
                padding: 13px;
                transition: 0.5s ease-in-out;
                font-size: 18px;
            }

            .navbar .authenticationbtn li a {
                text-decoration: none;
                color: white;
                padding: 10px 25px;
                transition: 0.5s ease-in-out;
                font-size: 14px;
            }


        }

        @media screen and (max-width: 1308px) {
            .navbar{
                padding: 10px 60px;
            }

            .navbar .logo h1 {
                font-size: 25px;
            }

            .navbar .menu ul li a {
                text-decoration: none;
                color: white;
                padding: 13px;
                transition: 0.5s ease-in-out;
                font-size: 18px;
            }

            .navbar .authenticationbtn li a {
                text-decoration: none;
                color: white;
                padding: 10px 25px;
                transition: 0.5s ease-in-out;
                font-size: 14px;
            }


        }

        @media screen and (max-width: 1208px) {
            .navbar{
                padding: 10px 40px;
            }

            .navbar .logo h1 {
                font-size: 25px;
            }

            .navbar .menu ul li a {
                text-decoration: none;
                color: white;
                padding: 13px;
                transition: 0.5s ease-in-out;
                font-size: 18px;
            }

            .navbar .authenticationbtn li a {
                text-decoration: none;
                color: white;
                padding: 10px 25px;
                transition: 0.5s ease-in-out;
                font-size: 14px;
            }


        }

        @media screen and (max-width: 1108px) {
            .navbar{
                padding: 10px 20px;
            }

            .navbar .logo h1 {
                font-size: 25px;
            }

            .navbar .menu ul li a {
                text-decoration: none;
                color: white;
                padding: 13px;
                transition: 0.5s ease-in-out;
                font-size: 18px;
            }

            .navbar .authenticationbtn li a {
                text-decoration: none;
                color: white;
                padding: 10px 25px;
                transition: 0.5s ease-in-out;
                font-size: 14px;
            }


        }
    </style>
</head>

<body>

    <div class="navbar">
        <div class="logo">
            <h1>FunMAX <span>Technology</span></h1>
        </div>
        <div class="hamburger" onclick="toggleSidebar()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('review') }}">Reviews</a></li>
                <li><a href="{{ route('Experties') }}">Experties</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('career') }}">Career</a></li>
            </ul>
        </div>
        <div class="authenticationbtn">
            @guest
                <li>
                    <a class="loginbtn" href="{{ route('login') }}">Login</a>
                </li>
                <li>
                    <a class="registerbtn" href="{{ route('register') }}">Register</a>
                </li>
            @endguest
            @auth
                <li>
                    <a class="loginbtn">
                        {{ Auth::user()->name }}
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="logoutbtn" type="submit">Logout</button>
                    </form>
                </li>
            @endauth
        </div>
    </div>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeSidebar()">&times;</a>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('services') }}">Services</a>
        <a href="{{ route('review') }}">Reviews</a>
        <a href="{{ route('Experties') }}">Experties</a>
        <a href="#">Blog</a>
        <a href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('career') }}">Career</a>
        @guest
            <a class="loginbtn" href="{{ route('login') }}">Login</a>
            <a class="registerbtn" href="{{ route('register') }}">Register</a>
        @endguest
        @auth
            <a class="loginbtn">
                {{ Auth::user()->name }}
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="logoutbtn" type="submit">Logout</button>
            </form>
        @endauth
    </div>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("mySidebar");
            if (sidebar.style.width === "0px" || sidebar.style.width === "") {
                sidebar.style.width = "250px";
            } else {
                sidebar.style.width = "0px";
            }
        }

        function closeSidebar() {
            document.getElementById("mySidebar").style.width = "0px";
        }
    </script>

</body>

</html>
