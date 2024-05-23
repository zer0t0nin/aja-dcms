<?php include 'includes/ajadcmsDB.php'; ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="assets/css/clindex.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <title>AJA BioDentrics | Client Page</title>
  </head>


  <div class="container">
    <div class="row mgTp">
        <form class="col-md-6 offset-md-3" action="includes/login.inc.php" method="post" class="needs-validation" required>
            <h1 class="title">AJA BioDentrics Client Login</h1>
            <hr class="divisor">
            <div class="form-group">
                <label for="exampleInputEmail1">Enter E-mail</label>
                <input type="username" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="E-mail" required/>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Enter Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required/>
            </div>
            
            <button type="submit" class="btn btn-dark" value="Login"></i> Sign in</button>
        </form>
    </div>
</div>

</body>
</html>