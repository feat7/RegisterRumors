<?php

/* homepage/rumor_register.tpl */
class __TwigTemplate_b415d99295a8554873f99c23a0f2f9f9e1536fdef845a058aa138d4e6f9c4977 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <head>
    <title>Register Rumour</title>
    <script type=\"text/javascript\" src=\"assets/vendor/jquery/jquery.min.js\"></script>
<style>
    @import \"compass/css3\";

@import url(http://fonts.googleapis.com/css?family=Merriweather);
\$red: #e74c3c;

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
       @include box-shadow(0 0px 2px rgba(\$red, 1)!important);
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
    content: \" \"; /* 1 */
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
    <form class=\"cf\" action=\"#\" method=\"POST\">
  <div class=\"half left cf\">
    <input type=\"text\" id=\"input-name\" placeholder=\"Name\">
    <input type=\"email\" id=\"input-email\" placeholder=\"Email address\">
    <input type=\"text\" id=\"input-subject\" placeholder=\"Subject\">
  </div>
  <div class=\"half right cf\">
    <textarea name=\"message\" type=\"text\" id=\"input-message\" placeholder=\"Message\"></textarea>
  </div>  
  <input type=\"submit\" value=\"Submit\" id=\"input-submit\" onclick=\"myLocation()\">
        <button type=\"submit\" value=\"Submit\" id=\"input-submit\" onclick=\"myLocation()\">Submit</button></form>
    <p id=\"loc\"></p>  
     <script>

     \$('#input-submit').click(function(e) {
        e.preventDefault();
     });
var loc= document.getElementById(\"loc\");
        function myLocation(){
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showPosition);
            }
            else{
                loc.innerHTML = \"Sorry. Some Error has occurred.\";
            }
        }
        
        function showPosition(position){
            loc.innerHTML =\"Longitude : \" + position.coords.longitude + \"Latitude : \" + position.coords.latitude;    
            console.log(position.coords.longitude)
        }
         
    </script>
         
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "homepage/rumor_register.tpl";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "homepage/rumor_register.tpl", "C:\\xampp\\htdocs\\app\\views\\homepage\\rumor_register.tpl");
    }
}
