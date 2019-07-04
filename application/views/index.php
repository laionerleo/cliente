<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>PROYECTO BASE</p>
  
      <p><?=@$_GET['m']?></p>
      <form method="post" action="<?=$url?>login">
       
        <div class="form-group">
          <label class="sr-only" for="inputEmail">Email</label>
          <input type="email" class="form-control" id="inp_email" name="inp_email" placeholder="Email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="inputPassword">Password</label>
          <input type="password" class="form-control" id="inp_password" name="inp_password"
            placeholder="Password">
        </div>

        <label for=""><?=$url?>login</label>
        <div class="form-group clearfix" style="display: none;">
          <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
            <input type="checkbox" id="inputCheckbox" name="remember">
            <label for="inputCheckbox">Remember me</label>
          </div>
          <a class="float-right" href="forgot-password.html">Forgot password?</a>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Iniciar session</button>
      </form>
      

    </div>
  </div>
</body>
</html>