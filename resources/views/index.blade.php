<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouch-勤怠をスマートに-</title>
    <style>
        body {
            background-color: #74EBA4;
        }

        h1 {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #FAFBCA;
            font-size: 7rem;
        }


        .login-box {
            position: absolute;
            top: 65%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            flex-direction: row;
        }

        .login-box a {
            font-family: Times New Roman;
            display: block;
            color: #FFF9BF;
            font-size: 1.2rem;
            border: none;
            border-radius: 2rem;
            cursor: pointer;
            text-decoration: none;
            margin: 5px;
        }

        @media (max-width: 351px) {
            h1 {
                position: absolute;
                top: 30%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-family: Times New Roman;
                color: white;
                font-size: 0.9rem;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 80vh;
                margin-top: 70px;
            }

            .login-box a {
                font-family: Times New Roman;
                display: block;
                color: #FFF9BF;
                font-size: 1rem;
                border: none;
                border-radius: 2rem;
                cursor: pointer;
                text-decoration: none;
                margin: 5px;
            }
        }
    </style>
</head>

<body>
    <h1>Nouch</h1>

    <div class="login-box">
        @guest
        <a href="{{ route('register') }}">新規登録 </a>
        <a href="{{ route('login') }}">ログイン</a>
        @else
        <a href="{{ route('dashboard') }}">マイページへ移動する</a>
        @endguest
    </div>

</body>

</html>