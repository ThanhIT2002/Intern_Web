<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>menu</title>
</head>
<body>
    <div class="container">
            <header>
                @yield('header')
            </header>
            <nav class="row"> </nav>
            <main class="row">
                <aside class="col-md-2">
                    {{-- cú pháp tạo ra 1 vùng trong trong layout 
                        mà các view con theo đó sẽ đưa nội dung vào. --}}
                    @section('sidebar')
                    
                    @show
                </aside>
                <article class="col-md-10">
                    {{-- dùng để đặt tên cho 1 vị trí trong layout. 
                        View con sẽ dựa theo tên yield để đưa nội dung vào layout. --}}
                    @yield('content','Nội dung chính')
                </article>
               
            </main>
            <footer>
                @yield('footer')
            </footer>
    </div>
</body>
</html>