<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DevBuddy</title>
    <link href="MainTemp.css" rel="stylesheet" type="text/css" />
    <link href="LogIn.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <!-- ====== nav bar ====== -->
           <nav id="navbar">
      <a href="Home.html"><img src="images/DevBuddy.png" class="logo" /></a>

      <!-- left list in nav bar-->
      <ul class="list-design">
        <li>
          <div class="dropdown">
            <a>Tutorials ⬇️ </a>
            <div class="dropdown-content">
              <a href="HtmlTutorials.html">HTML </a>
              <a href="CSSTutorials.html">CSS </a>
              <a href="JavaScriptTutorials.html">javaScript </a>
            </div>
          </div>
        </li>

        <li>
          <div class="dropdown">
            <a>Exercises ⬇️ </a>
            <div class="dropdown-content">
              <a href="HtmlExe.html">HTML </a>
              <a href="CssExe.html">CSS </a>
              <a href="JavaScriptExe.html">javaScript </a>
            </div>
          </div>
        </li>

        <li>
          <a href="ContactUs.html">CONTACT US</a>
        </li>
      </ul>

      <!-- Right list in nav bar-->
      <ul class="list-design" id="right-nav-list">
        <li>
          <a id="Login" href="#"> <img src="images/user.png" /> Log in</a>
        </li>
        <li>
          <a id="go-pro" href="goPro.html">Go pro </a>
        </li>
      </ul>
    </nav>

    <!-- ====== form-section ====== -->

    <div id="form-section">
      <div id="Login-section" style="height: 80%">
        <form action="Includes/signUp.inc.php" method="post" class="login-form" >
          <p class="namelabel"><label for="Username"> Username: </label></p>
          
          
          <input id="Username" name="username" type="text" placeholder="username" autofocus />

          <p class="passlabel"><label for="mail"> Email: </label></p>

          <input
            id="mail"
            type="email"
            name="email"
            placeholder="youremail@example.com"
            required
          />

          <p class="passlabel"><label for="password"> Password: </label></p>

          <input
            id="password"
            type="password"
            name="password"
            placeholder="password"
            required
          />
          <p class="passlabel">
            <label for="password2"> Verify Password: </label>
          </p>
          <input
            id="password2"
            type="password"
            name="password2"
            placeholder="verify password"
            required
          />

          <button type="submit" name="submit"  style="width: 40%; font-size: 0.8em" id="create">
            Create Account
          </button>
          <p class="message">
            Have an account? <a href="LogIn.html">Log In</a>
          </p>
        </form>
      </div>
    </div>

    <!-- ====== footer section ====== -->
    <footer>
      <div id="contact">
        <h2>Contact us</h2>
        <address><br />makkah, alzahar<br /></address>
        <a id="email" href="mailto:mkd1433@gmail.com">Email Us</a>
      </div>

      <dev class="about">
        <p>
          The DevBuddy website is a learning platform for web developers to
          <br />
          learn web-based programming languages. like: HTML, CSS, and <br />
          JavaScript.<br />© Created with love ❤️
        </p>
      </dev>

      <div id="website-content">
        <ul class="list1">
          <li>Toutorials</li>
          <li>Html Tutorial</li>
          <li>CSS Tutorial</li>
          <li>JavaScript Tutorial</li>
        </ul>

        <ul class="list2">
          <li>Exercises</li>
          <li>Html Exercises</li>
          <li>CSS Exercises</li>
          <li>JavaScript Exercises</li>
        </ul>

        <ul class="list3">
          <li>Go Pro</li>
        </ul>
      </div>

      <div class="social-media">
        <a href="#" title="go facebook page"
          ><img src="images/facebook2.png"
        /></a>
        <a href="#" title="go twitter page"
          ><img src="images/twitter2.png"
        /></a>
        <a href="#" title="go instagram page"
          ><img src="images/instagram2.png"
        /></a>
      </div>
    </footer>
    <script src="passwordChecker.js"></script>
  </body>
</html>
