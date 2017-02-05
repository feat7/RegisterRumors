<!DOCTYPE html>
<html>
<head>
	<title>Register Disease Rumors in Your area</title>
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/codevector.css">
	<script type="text/javascript" src="assets/vendor/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">
		body {padding-top:20px;}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">Register Rumor in your area</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
</body>
</html>