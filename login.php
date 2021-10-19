<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <title>Multi auth login portal</title>
  </head>
  <body>
    <nav class="navbar navbar-light "style="background-color:#04AA6D;">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1 text-light">Login</span>
  </div>
</nav>
<div class="row m-0">
    <div class="col-12">
    <div class="row">
    <div class="col-2">
    </div>
    <div class="col-8">
    <div class="card">
      <div class="card-body text-center">
        <form action="backend/loginroute.php" method="POST">
        <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        <label for="email">Your Email</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="password" name="password" placeholder="******">
        <label for="password">Your Password</label>
      </div>
      <div style="float:left">
      <input class="form-check-input" type="checkbox" onclick="showPass()">Show Password
      </div><br>
  <div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit" id="login" name="login">Login</button>
</div>
</form>
<hr>
<div class="d-grid gap-2">
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  No account?Signup Now
</button>
</div>
      </div>
    </div>
    </div>
    <div class="col-2">

    </div>
  </div>
    </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Signup for:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <button type="button" class="btn btn-info text-light" data-bs-toggle="modal" data-bs-target="#moderatormodal">
        Signup for Moderator
     </button>
     <button type="button" class="btn btn-primary text-light" data-bs-toggle="modal" data-bs-target="#visitormodal">
        Signup for Visitor
     </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <!--Modarator Modal -->
  <div class="modal fade" id="moderatormodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info text-light">
        <h5 class="modal-title " id="exampleModalLabel">Moderator</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
  <!--Visitor Modal -->
  <div class="modal fade" id="visitormodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-light">
        <h5 class="modal-title " id="exampleModalLabel">Visitor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
    <script src="assets/js/bootstrap.bundle.min.js" ></script>
    <script>
      function showPass(){
        var p = document.getElementById("password");
        if(p.type==="password"){
          p.type="text";
        }else{
          p.type="password";
        }
      }
    </script>
  </body>
</html>