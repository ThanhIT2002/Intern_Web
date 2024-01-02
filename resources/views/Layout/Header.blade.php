<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Header</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Agbalumo&family=Lalezar&family=Quicksand:wght@700&family=Roboto:wght@400;700&display=swap');
        body {
            margin: 0;
            padding: 0;
            font-family: 'Quicksand', sans-serif!important;
        }

        .header_main {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            width: 23%;
        }

        .logo a {
            display: flex;
        }

        .logo img {
            width: 100px;
            height: 100px;
        }

        .search {
            display: flex;
            align-items: center;
        }

        .search input[type="text"] {
            width: 350px;
            padding: 10px;
            border: 1px solid #c0eaf9;
            border-radius: 5px;
            margin-right: 10px;
            font-size: 14px;
        }

        .search input[type="submit"] {
            border: 2px solid #64bbb6;
            background-color: #64bbb6;
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s, border-color 0.3s, color 0.3s;
        }

        .search input[type="submit"]:hover {
            background-color: #fff;
            border-color: #fff;
            color: #64bbb6;
            border: 2px solid #64bbb6;
        }

        .login-cart {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .login-cart a {
            text-decoration: none;
            color: #64bbb6;
            font-weight: bold;
            font-size: 14px;
            transition: color 0.3s;
            font-size: 15px; 
        }

        .login-cart a:hover {
            color: #c0eaf9;
        }

        .login-cart .cart-icon {
            font-size: 18px;
            color: #64bbb6;
            transition: color 0.3s;
        }

        .login-cart a:nth-child(2) {
            margin-right: 10px;
        }

        .navbar_main {
            background-color: #64bbb6;
            padding: 10px 0;
            display: flex;
            justify-content: center;
        }

        .navbar_li {
            position: relative;
            display: inline-block;
        }

        .navbar_li:hover .submenu {
            visibility: visible;
            opacity: 1;
        }

        .navbar_main ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar_main li {
            margin-right: 20px;
        }

        .navbar_main a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
            transition: color 0.3s;
        }

        .navbar_main a:hover {
            color: #c0eaf9;
        }

        .submenu {
            visibility: hidden;
            opacity: 0;
            position: absolute;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
            transition: visibility 0.3s, opacity 0.3s;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            background-color: #fff; 
            border-top:1px solid black;
        }

        .submenu a {
            color: #64bbb6;
            margin-bottom: 10px;
            text-decoration: none;
        }
        .submenu a:hover {
            color: #c0eaf9;
        }
        .submenu ul {
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .submenu li {
        margin-right: 0;
        margin-top: 5px;
        font-size: 20px;
        border-bottom:1px solid #eeeeee;
        }
    </style>
</head>
<body>
    <div class="header_main">
        <div class="logo">
            <a href="/home">
                <img src="{{ asset('../images/logo/Logo5.png') }}" alt="">
            </a>
        </div>
        <div class="search">
            <input type="text">
            <input type="submit" value="Tìm kiếm">
        </div>
        <div class="login-cart">
            <a href="/login">Đăng nhập</a> |  <a href="/register">Đăng ký</a> |<a href="#"><i class="fas fa-shopping-cart"></i> Giỏ hàng</a>
        </div>
    </div>
    <nav class="navbar_main">
        <ul>
            <div class="navbar_li">
                <li><a href="/menu">Sản phẩm cho chó</a>
                  <div class="submenu">
                    <ul>
                        @foreach($categories as $category)
                        <li>
                            <a href="{{ $category->Link_CG }}">{{ $category->Name_CG }}</a>
                        </li>
                    @endforeach
                    </ul>
                  </div>
                </li>    
            </div>
            <div class="navbar_li">
                <li><a href="#">Sản phẩm cho mèo</a>
                  <div class="submenu">
                    <ul>
                        @foreach($categoriesCat as $category)
                        <li>
                            <a href="{{ $category->Link_CG }}">{{ $category->Name_CG }}</a>
                        </li>
                    @endforeach
                    </ul>
                  </div>
                </li>    
            </div>
            <li><a href="/catHotel">Dịch vụ</a></li>
            <li><a href="#">Tài khoản của bạn</a></li>
        </ul>
    </nav>
</body>
</html>
