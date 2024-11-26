<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="margin-top:15%;">
  <center><h2><b>USER LOGIN</b></h2></center>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="email" class="form-control" id="email" placeholder="Masukan username" name="username" style="height: 56px; width: 620.41px;">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Masukan password" name="password" style="height: 56px; width: 620.41px;">
    </div>
      <div class="d-flex justify-content-center">
            <center><button class="btn" style="background-color:#1A5319; color: white; height: 50px; width: 150px; border-radius: 17px; font-size: 15px;">
                <b>LOGIN</b>
            </button><center>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </form>
</div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    .login-container {
      display: flex;
      height: 100vh;
      margin: 0;
    }
    .login-image {
      flex: 1;
      background-image: url({{ asset('asset/login.jpg') }}); /* Ganti dengan path gambar kamu */
      background-size: cover;
      background-position: center;
    }
    .login-form {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }
  </style>
</head>
<body>


<div class="login-container"> <!-- Gambar -->
  <div class="login-image"></div> 

  <!-- login -->
  <div class="login-form"> 
    <div class="container" style="max-width: 500px;">
      <center><h2><b>USER LOGIN</b></h2></center>
      <form action="/action_page.php">
        <div class="form-group">
          <label for="email">Username:</label>
          <input type="email" class="form-control" id="email" placeholder="Masukan username" name="username" style="height: 56px;">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" placeholder="Masukan password" name="password" style="height: 56px; ">
        </div>
        <div class="text-center">
          <button type="submit" class="btn" style="background-color:#1A5319; color: white; height: 40px; width: 150px; border-radius: 17px; font-size: 15px;">
            <b>LOGIN</b>
          </button> 
        </div>
      </form>
    </div>
  </div> 
</div> 
</body>
</html>

