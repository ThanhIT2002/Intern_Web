<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dịch Vụ Spa - Grooming - Kiyomi</title>
    <style>
        .spa_main {
            text-align: center;
            max-width: 800px;
            margin: 20px auto;
        }

        .section {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .section h2 {
            color: #64bbb6;
        }

        .service-details {
            margin-top: 20px;
        }

        .service-details h2 {
            color: #64bbb6;
        }

        .service-details p {
            margin: 10px 0;
        }

        .image-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .image-container img {
            max-width: 800px;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            cursor: pointer;
        }

        .image-container img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="spa_main">
        <h1>Dịch Vụ Spa - Grooming - Kiyomi</h1>

        <div class="section service-details">
            <h2>Gói Tắm Vệ Sinh Cho Chó</h2>
            <p>Đã bao gồm cắt móng, mài móng, cạo lông đệm chân, vệ sinh tai, vắt tuyến hôi và tắm.</p>
        </div>

        <div class="section service-details">
            <h2>Gói Tắm Vệ Sinh Cho Mèo</h2>
            <p>Đã bao gồm cắt móng, cạo lông đệm chân, vệ sinh tai và tắm.</p>
        </div>

        <div class="section image-container">
            <img src="{{ asset('images/banner/Spa.jpg') }}" alt="Dog Grooming">
        </div>
    </div>
</body>
</html>
