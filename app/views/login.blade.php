<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Inventory System</title>

    <!-- STYLES START -->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!-- STYLES END -->
  </head>
  <body>
    <div class="card-panel login-panel">
      <div class="login-logo">
        <img src="img/logo_1.jpg" class="responsive-img circle" />
      </div>
      <div class="app-name center-align">"You're one click online gadget store!"</div>

      <form class="login-form" action="/login" method="post">
        <div class="input-field">
          <i class="prefix mdi-social-person"></i>
          <input id="username" type="text" name="username">
          <label for="username">Username</label>
        </div>
        <div class="input-field">
          <i class="prefix mdi-action-lock"></i>
          <input id="password" type="password" name="password">
          <label for="password">Password</label>
        </div>
          <div class="center-btn">
            <button class="btn waves-effect waves-light blue" type="submit" name="action" >Login</button>
          </div>
      </form>
    </div>

    <!-- SCRIPTS START -->
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/materialize.min.js" type="text/javascript"></script>
    <!-- SCRIPTS END -->
  </body>
</html>
