<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LogIn</title>
</head>
<body>
 @extends('master.master')
    @section('content')
      <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col col-sm-5 col-sm-offset-8">
                <form action= "login" method="POST" class="row g-3">
                    @csrf


                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" name ="email" class="form-control" id="inputEmail4">
                      </div>
                      <div class="col-md-12">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword4">
                      </div>


                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                  </form>
            </div>
        </div>
      </div>
    @endsection

</body>
</html>
