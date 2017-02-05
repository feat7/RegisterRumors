<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Doctors</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/framework/bulma-0.2.3/css/bulma.css">
 
</head>
<body>
  <section class="hero is-fullheight is-bold" style="background-color: #305070;">

    <div class="hero-body">
      <div class="container">
        <div class="columns is-vcentered">
          <div class="column is-4 is-offset-4">
            <h1 class="title">
              Login
            </h1>
            <div class="box">
            <form id="loginForm" method="post" action="/login">
              <label class="label">Email</label>
              <p class="control">
                <input name="email" class="input" type="text" placeholder="jsmith@example.org">
              </p>
              <label class="label">Password</label>
              <p class="control">
                <input name="password" class="input" type="password" placeholder="●●●●●●●">
              </p>
              <hr>
              <p class="control">
                <button class="button is-primary">Login</button>
                <button class="button is-default">Cancel</button>
              </p>
            </div>
            <p class="has-text-centered">
              <a href="/register">Register an Account</a>
              | 
              <a href="#">Forgot password</a>
              | 
              <a href="#">Need help?</a>
            </p>
          </form>
          </div>
        </div>
      </div>
    </div>

  </section>
</body>
</html>
