<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       
        .login-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 70vh;
        }

        .login-form {
            max-width: 400px;
            width: 100%;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .login-form h2 {
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
    <div class="login-container">
        <div class="login-form">
            <h2>Đăng Nhập</h2>
            <form>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Nhập địa chỉ email" required>
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Mật Khẩu</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Nhập mật khẩu" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Đăng Nhập</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
