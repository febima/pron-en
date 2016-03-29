<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forum | Testing Portal</title>
  <link rel="stylesheet" href="css/lr.css">
  <link rel="stylesheet" href="min/css/bootstrap.min.css">
  <script src="min/js/jquery-1.12.1.min.js"></script>
  <script src="min/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url('images/action-bg.jpg');">
    <div class="col-md-12" style="width: 100%; height: 100%; position: absolute; background:rgba(33, 32, 72, 0.53);">
        <div class="container" style="text-align: center;">
            <h1 class="page-title">Welcome in Forum !</h1>
            <div class="slize" style="margin-bottom: 30px;"></div>
            <button class="btn-lr" type="button" data-toggle="modal" data-target="#login">Login</button>
              <!-- Modal Login-->
                  <div class="modal fade" id="login" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Login</h4>
                        </div>
                        <div class="modal-body" style="text-align: left;">
                            <label>NIS</label>
                            <input type="number" class="form-control">
                            <label>Username</label>
                            <input type="text" class="form-control">
                            <label>Password</label>
                            <input type="password" class="form-control">
                            <input type="submit" class="button-lr" value="Login">
                            Not Have Account? 
                            <a href="" data-toggle="modal" data-target="#register">Register</a>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                          <h4 style="color: #E8E0E0; padding-top: 20px;">Or</h4>
            <button class="btn-lr" type="button" data-toggle="modal" data-target="#register">Register</button>
              <!-- Modal Login-->
                  <div class="modal fade" id="register" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Register</h4>
                        </div>
                        <div class="modal-body" style="text-align: left;">
                          <label>Username</label>
                          <input type="text" class="form-control">
                          <label>NIS</label>
                          <input type="number" class="form-control">
                          <label>Email</label>
                          <input type="email" class="form-control">
                          <label>Alamat</label>
                          <input type="text" class="form-control">
                          <label>Password</label>
                          <input type="password" class="form-control">
                          <input type="submit" class="button-lr" value="Register">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      
                    </div>
                  </div>

        </div>
    </div>
</body>
</html>