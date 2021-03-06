<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Twitter - Sign up</title>
  </head>
  <body>
    <div class="header__signup">
      <div class="header__signup--logo center__content">
        <image
          class="signup__page--logo"
          xlink:href="images/svg/twitter.svg"
          src="images/svg/twitter.svg"
        />
      </div>
      <h4 class="heading-h5 margin__top--small margin__bottom--small">Create your account</h4>
      <form action="#" class="header__signup--form">
        <input type="text" name="fname" id="fname" placeholder="First Name" />
        <input type="text" name="lname" id="lname" placeholder="Last Name" />
        <input
          type="text"
          name="username"
          id="username"
          placeholder="Username"
        />
        <input type="email" name="email" id="email" placeholder="Email" />
        <input
          type="number"
          name="number"
          id="number"
          placeholder="Phone Number"
        />
        <input type="date" name="date" id="date" placeholder="Date of Birth" />
        <input
          type="password"
          name="password"
          id="password_1"
          placeholder="Password"
        />
        <input
          type="password"
          name="password"
          id="password_2"
          placeholder="Confirm Password"
        />
        <button class="btn signup__page--btn signup__btn--color">Sign Up</button>
      </form>
      <a id="have__ac" href="login.html">Have an account. Log in</a>
    </div>
  </body>
</html>
