<!DOCTYPE HTML>
<html>
    <head>
    <title>Register Rumour</title>
    <script type="text/javascript" src="assets/vendor/jquery/jquery.min.js"></script>
<style>
    @import "compass/css3";

@import url(http://fonts.googleapis.com/css?family=Merriweather);
$red: #e74c3c;

*, 
*:before, 
*:after {
   @include box-sizing(border-box); 
}

html, body {
  background: #f1f1f1;
  font-family: 'Merriweather', sans-serif;
  padding: 1em;
}

h1 {
   text-align: center;
   color: #a8a8a8;
   @include text-shadow(1px 1px 0 rgba(white, 1));
}

form {
   max-width: 600px;
   text-align: center;
   margin: 20px auto;
        }
  input, textarea {
     border:1px solid #999;
     outline:0;
     padding: 1em;
     @include border-radius(8px);
     display: block;
     width: 100%;
     margin-top: 1em;
     font-family: 'Merriweather', sans-serif;
     @include box-shadow(0 1px 1px rgba(black, 0.1));
     resize: none;
    
    &:focus {
       @include box-shadow(0 0px 2px rgba($red, 1)!important);
    }
  }
  
  #input-submit {
     color: white; 
     background:#008877;
     cursor: pointer;
    
    &:hover {
       @include box-shadow(0 1px 1px 1px rgba(#aaa, 0.6)); 
    }
  }
  
  textarea {
      height: 126px;
  }
}
.half {
  float: left;
  width: 48%;
  margin-bottom: 1em;
}
.right { width: 50%; }
.left {
     margin-right: 2%; 
}
@media (max-width: 480px) {
  .half {
     width: 100%; 
     float: none;
     margin-bottom: 0; 
  }
}
/* Clearfix */
.cf:before,
.cf:after {
    content: " "; /* 1 */
    display: table; /* 2 */
}
.cf:after {
    clear: both;
}    
    </style>
    </head>
<body>
<h1>Rumour Registration Form</h1>
<!--Form Starts -->
    <form class="cf" action="#" method="POST">
  <div class="half left cf">
    <input type="text" id="input-name" placeholder="Name">
    <input type="email" id="input-email" placeholder="Email address">
    <input type="text" id="input-subject" placeholder="Subject">
  </div>
  <div class="half right cf">
    <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
  </div>  
  <input type="submit" value="Submit" id="input-submit" onclick="myLocation()">
        <button type="submit" value="Submit" id="input-submit" onclick="myLocation()">Submit</button></form>
    <p id="loc"></p>  
     <script>

     $('#input-submit').click(function(e) {
        e.preventDefault();
     });
var loc= document.getElementById("loc");
        function myLocation(){
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showPosition);
            }
            else{
                loc.innerHTML = "Sorry. Some Error has occurred.";
            }
        }
        
        function showPosition(position){
            loc.innerHTML ="Longitude : " + position.coords.longitude + "Latitude : " + position.coords.latitude;    
            console.log(position.coords.longitude)
        }
         
    </script>
         
</body>
</html>