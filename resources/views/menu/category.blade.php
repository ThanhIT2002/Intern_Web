<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .category-container {
            margin-top: 20px;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
        }
        .category-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .category-item {
            padding: 12px;
            transition: background-color 0.3s;
            border: none; 
            position: relative; 
            border-bottom: 1px solid #dee2e6;
        }

        .category-link {
            color: #28a745;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            transition: color 0.3s;
        }

        .category-item:hover {
            background-color: #e8f5e9;
        }

        .category-item:hover .category-link {
            color: #218838;
        }
    </style>
</head>
<body>
   <div class="category-container">
        <ul class="category-list">
            @foreach($categories as $category)
                <li class="category-item">
                    <a class="category-link" href="{{ $category->Link_CG }}">{{ $category->Name_CG }}</a>
                </li>
            @endforeach
        </ul>
   </div>
</body>
</html>
