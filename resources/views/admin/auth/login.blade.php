<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<!doctype html>
<html lang="en">
<head>
    <title>Login 08</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    <div class="container m-5 p-5">
        @include('admin.inc.errors')
        <form method="POST" action="{{ route('admin.doLogin') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" name="email" class="form-control rounded-left" placeholder="Email address" ><br>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">password</label>
                <input type="password" name="password" class="form-control rounded-left" placeholder="password">
            </div>
            <div class="form-group">
                <button type="submit" >Submit</button>
            </div>
        </form>
    </div>
</body>
</html>


