<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div style="padding-top: 15%;padding-right: 30%;padding-bottom: 15%;padding-left: 30%;">
        <h3>Đăng nhập</h3>
        <form method="post" action="{{ route('login') }}">
            @csrf
            <label>Email:</label>
            <input name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @if ($errors->has('email'))
                {{ $errors->first('email') }}<br>
            @endif
            <label>Password</label>
            <input name="password" class="form-control" id="exampleInputPassword1">
            @if ($errors->has('email'))
                {{ $errors->first('email') }}<br>
            @endif
            <label>Password<input type="checkbox" name="remember"></label>
            <input type="submit">
        </form>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
