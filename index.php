<?php
$source = "C:\\Users\\Lenovo\\.gemini\\antigravity\\brain\\269cc3b0-93c6-45bf-a6a0-363a6db35e21\\service_providers_bg_1782378595499.png";
$dest = __DIR__ . '/images/login_bg.png';
if (file_exists($source) && !file_exists($dest)) {
    @copy($source, $dest);
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Workman24-7 - Admin Login</title>
    <meta name="description" content="Workman24-7 - Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/logo.png">
    <link rel="shortcut icon" href="images/logo.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <style>
        body.bg-dark {
            background-image: url('images/login_bg.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 19, 48, 0.7) 0%, rgba(0, 114, 255, 0.4) 100%);
            z-index: 1;
        }

        .sufee-login {
            width: 100%;
            z-index: 2;
            position: relative;
        }

        .login-content {
            max-width: 480px;
            margin: 0 auto;
        }

        .login-form {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 45px 40px;
            border-radius: 24px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2), inset 0 0 0 1px rgba(255, 255, 255, 0.1);
        }

        .login-logo h2 {
            color: #ffffff;
            font-weight: 800;
            text-shadow: 0 4px 10px rgba(0,0,0,0.3);
            margin-bottom: 35px;
            text-align: center;
            font-size: 36px;
            letter-spacing: -1px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            color: rgba(255, 255, 255, 0.9);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 1px;
            margin-bottom: 8px;
            display: block;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.9);
            border: 2px solid transparent;
            border-radius: 12px;
            padding: 15px 20px;
            height: 55px;
            font-size: 16px;
            color: #333;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .form-control:focus {
            background: #ffffff;
            border-color: #00c6ff;
            box-shadow: 0 0 20px rgba(0, 198, 255, 0.4);
            transform: translateY(-2px);
            outline: none;
        }

        .btn-success {
            background: linear-gradient(135deg, #00c6ff 0%, #0072ff 100%);
            border: none;
            border-radius: 12px;
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            box-shadow: 0 8px 20px rgba(0, 114, 255, 0.3);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            width: 100%;
            margin-top: 15px;
        }

        .btn-success:hover {
            background: linear-gradient(135deg, #0072ff 0%, #00c6ff 100%);
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 12px 25px rgba(0, 114, 255, 0.4);
        }

        .btn-success:active {
            transform: translateY(1px);
        }
        
        .login-icon {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .login-icon i {
            font-size: 48px;
            color: #00c6ff;
            text-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body class="bg-dark">
    <div class="overlay"></div>
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-form">
                    <div class="login-logo">
                        <div class="login-icon"><i class="fa fa-shield"></i></div>
                        <h2>Workman24-7</h2>
                    </div>
                    <form action="admin_login.php" method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Enter your username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter your password">
                        </div>
                        <button type="submit" class="btn btn-success btn-flat">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
