<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Password Indicator in PHP</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
</head>

<body>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
      <div class="card-header bg">
        <h1>Password Indicator in PHP</h1>
      </div>
          <div class="card-body">
            <form method="post">
              <input type="text" name="pwd" class="form-control" placeholder="Enter password"><br>
              <input type="submit" name="submit" class="btn btn-primary" value="Check Password">
            </form><br>
            <?php
            if(isset($_POST['submit'])){
              $password = $_POST['pwd'];
              //validate password
              $uppercase = preg_match('@[A-Z]@',$password);
              $lowercase = preg_match('@[a-z]@',$password);
              $number = preg_match('@[0-9]@',$password);
              $specialChars = preg_match('@[^\w]@',$password);
              
            if(!$uppercase){
              echo '<p class="badge fa fa-exclamation-triangle text-danger"> Password must contain Uppercase</p>';
            }
            elseif(!$lowercase){
              echo '<p class="badge fa fa-exclamation-triangle text-danger"> Password must contain Lowercase</p>';
            }
            elseif(!$number){
              echo '<p class="badge fa fa-exclamation-triangle text-danger"> Password must contain Number</p>';
            }
            elseif(!$specialChars){
              echo '<p class="badge fa fa-exclamation-triangle text-danger"> Password must contain Special Characters</p>';
            }
            elseif(strlen($password) < 8 ){
              echo '<p class="badge fa fa-exclamation-triangle text-danger"> Password must contain 8 Characters long</p>';
            }
            else{
              echo '<p class="badge fa fa-lock text-success"> Password is Strong</p>';
            }
            }
            ?>
          </div>
      </div>
    </div>
  </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>