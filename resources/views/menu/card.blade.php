<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Agbalumo&family=Lalezar&family=Quicksand:wght@700&family=Roboto:wght@400;700&display=swap');
  
        .card_main {
            padding: 10px;
        }
        .card {
            width: calc(25% - 20px); 
            height: 380px; 
            transition: transform 0.2s;
            margin: 10px;
            font-family: 'Quicksand', sans-serif !important;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card img {
            object-fit: cover;
            height: 50%;
        }

        .card-body {
            height: 50%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-title {
            font-size: 1rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #333;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            -webkit-line-clamp: 3;
        }

        .card-text {
            color: #c52424;
            margin-bottom: 8px; 
        }

        .btn-primary {
            background-color: #e53737;
            border-color: #e53737;
            color: #fff; 
            padding: 10px 20px; 
            border-radius: 5px;
            transition: background-color 0.3s; 
        }

        .btn-primary:hover {
            background-color: #c52424;
            border-color: #c52424;
        }
    </style>
</head>
<body>
    <div class="card_main">
        <div class="row">
            @foreach ($products as $pro)
                <div class="card">
                    <img src="{{ $pro->Link_PD }}" class="card-img-top" alt="{{ $pro->Name_PD }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pro->Name_PD }}</h5>
                        <p class="card-text">Giá: {{ $pro->Price_updated }} VNĐ</p>
                        <a href="#" class="btn btn-primary">Mua ngay</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
