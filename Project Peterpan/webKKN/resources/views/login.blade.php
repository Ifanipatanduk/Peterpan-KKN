<!DOCTYPE html>
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

<div class="container">
  <center><h2><b>USER LOGIN</b></h2></center>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="email" class="form-control" id="email" placeholder="Masukan username" name="username">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Masukan password" name="password">
    </div>
      <div class="d-flex justify-content-center">
            <center><button class="btn" style="background-color:#1A5319; color: white; height: 50px; width: 150px; border-radius: 17px; font-size: 15px;">
                <b>LOGIN</b>
            </button><center>
        </div>
  </form>
</div>
</body>
</html>
