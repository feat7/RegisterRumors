<!DOCTYPE html>
<html>
<head>
	<title>Rumor {{data.subject}}</title>
		<link rel="stylesheet" type="text/css" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/codevector.css">
	<script type="text/javascript" src="assets/vendor/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{data.subject}}</h3>
                
                </div>
                <div class="panel-body">
                    {{data.message}}<br/>
                    Address: {{rumordata.state}}<br/>
                    Pin Code: {{rumordata.zipcode}}<br/>
                    Count Yes: {{count_yes}}<br/>
                    Count No: {{count_no}}<br/>
                </div>

                
            </div>
        </div>
	</div>
</div>
</body>
</html>