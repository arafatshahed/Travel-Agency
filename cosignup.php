<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Sign up</title>
    <meta name="viewport" content="width = device-width" />
    <link rel="stylesheet" type="text/css" href="signstyle.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Permanent+Marker"
      rel="stylesheet"
      <link
      href="https://fonts.googleapis.com/css?family=Fjalla+One"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="packimstyle.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
  </head>
  <body>
    
      <a href="index.php"><img src="images/homepage.png" width="5%" alt="home"></a>
    <div class="sign">
      <form class="" action="cosignupback.php" method="post">
        <h1>Sign Up</h1>

        <input
          type="text"
          placeholder="Username"
          name="username"
          class="txtb"
        />
        <input
          type="password"
          placeholder="Password"
          name="password"
          class="txtb"
        />
        <input
          type="password"
          placeholder="Repeat The Password"
          name="rpassword"
          class="txtb"
        />
        <input
          type="text"
          placeholder="Phone Number"
          name="c_ph"
          class="txtb"
        />
        <input type="email" placeholder="Email" name="email" class="txtb" />
        <input type="text" placeholder="Address" name="address" class="txtb" />

        <input type="submit" value="Sign Up" class="sign-btn" />
        <a href="cosignin.php">Already Have one ?</a>
      </form>
    </div>
  </body>
</html>
