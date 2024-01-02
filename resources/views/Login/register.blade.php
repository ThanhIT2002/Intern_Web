<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .registration-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .registration-form {
            max-width: 400px;
            width: 100%;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .registration-form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-label {
            color: #555;
        }

        .form-control {
            height: 45px;
        }

        .btn-primary {
            background-color: #64bbb6;
            border-color: #64bbb6;
            height: 45px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <div class="registration-form">
            <h2>Đăng Ký</h2>
            <form>
                <div class="mb-3">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Nhập địa chỉ email" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Nhập mật khẩu" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Xác nhận mật khẩu" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="fullName" placeholder="Nhập họ và tên" required>
                </div>
                <div class="mb-3">
                    <input type="tel" class="form-control" id="phoneNumber" placeholder="Nhập số điện thoại" required>
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control" id="dob" required>
                </div>
                <div class="mb-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                        <label class="form-check-label" for="male">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">Nữ</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Đăng Ký</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
