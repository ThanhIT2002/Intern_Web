<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Trang chủ</title>
</head>
<body>
    <div class="container">
            <header>
                @yield('header')
            </header>
            <main class="row">
                <article>
                    <div class="row">
                        <div class="col-md-12">
                            @yield('banner','Quảng cáo')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @yield('newProduct','Sản phẩm mới')
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-12">
                            @yield('bestseller','Sản phẩm bán chạy nhất')
                        </div>
                    </div>
                </article>
            </main>
            <footer>
                @yield('footer')
            </footer>
    </div>
</body>
</html>