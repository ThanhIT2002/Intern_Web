<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Mục</title>
    <style>
        .cate_main {
            max-width: 800px;
            margin-top: 85px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
        }

        .category_ {
            margin-top: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
            transition: box-shadow 0.3s;
        }

        .category_:hover {
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.2);
        }

        .category_ h3 {
            color: #64bbb6;
            margin: 10px;
            font-size: 18px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .subcategory_ ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .subcategory_ li {
            border-bottom: 1px solid #ddd;
            padding: 15px;
            transition: background-color 0.3s;
        }

        .subcategory_ li:last-child {
            border-bottom: none;
        }

        .subcategory_ li:hover {
            background-color: #f9f9f9;
        }

        .subcategory_ li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="cate_main">
        <div class="category_">
            <h3>Khách Sạn Mèo</h3>
            <div class="subcategory_">
                <ul>
                    <li><a href="/catHotel">Phòng thường</a></li>
                    <li><a href="/catHotel">Phòng VIP</a></li>
                    <li><a href="/catHotel">Phòng VVIP</a></li>
                </ul>
            </div>
        </div>

        <div class="category_">
            <h3>Spa-Grooming</h3>
            <div class="subcategory_">
                <ul>
                    <li><a href="/SpaGrooming">Tắm và Chải Lông</a></li>
                    <li><a href="/SpaGrooming">Cắt Tỉa Móng</a></li>
                    <li><a href="/SpaGrooming">Dịch Vụ Spa</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
