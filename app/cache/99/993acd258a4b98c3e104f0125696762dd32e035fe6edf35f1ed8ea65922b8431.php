<?php

/* homepage/rumor_register_new.tpl */
class __TwigTemplate_d5e7bee0927401b0042e21d73b5a0e261e287191bd05cb35cfcf964727f389cc extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>Register Disease Rumors in Your area</title>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/vendor/bootstrap/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/vendor/font-awesome/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/codevector.css\">
\t<script type=\"text/javascript\" src=\"assets/vendor/jquery/jquery.min.js\"></script>
\t<script type=\"text/javascript\" src=\"assets/vendor/bootstrap/js/bootstrap.min.js\"></script>
\t<style type=\"text/css\">
\t\tbody {padding-top:20px;}
\t</style>
</head>
<body>
<div class=\"container\">
\t<div class=\"row\">
      <div class=\"col-md-6 col-md-offset-3\">
        <div class=\"well well-sm\">
          <form class=\"form-horizontal\" action=\"\" method=\"post\">
          <fieldset>
            <legend class=\"text-center\">Register Rumor in your area</legend>
    
            <!-- Name input-->
            <div class=\"form-group\">
              <label class=\"col-md-3 control-label\" for=\"name\">Name</label>
              <div class=\"col-md-9\">
                <input id=\"name\" name=\"name\" type=\"text\" placeholder=\"Your name\" class=\"form-control\">
              </div>
            </div>
    
            <!-- Email input-->
            <div class=\"form-group\">
              <label class=\"col-md-3 control-label\" for=\"email\">Your E-mail</label>
              <div class=\"col-md-9\">
                <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Your email\" class=\"form-control\">
              </div>
            </div>
    
            <!-- Message body -->
            <div class=\"form-group\">
              <label class=\"col-md-3 control-label\" for=\"message\">Your message</label>
              <div class=\"col-md-9\">
                <textarea class=\"form-control\" id=\"message\" name=\"message\" placeholder=\"Please enter your message here...\" rows=\"5\"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class=\"form-group\">
              <div class=\"col-md-12 text-right\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
\t</div>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "homepage/rumor_register_new.tpl";
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
        return new Twig_Source("", "homepage/rumor_register_new.tpl", "C:\\xampp\\htdocs\\app\\views\\homepage\\rumor_register_new.tpl");
    }
}
