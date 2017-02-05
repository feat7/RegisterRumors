<?php

/* auth/register.tpl */
class __TwigTemplate_711f1a9581d101c97c6d8bd09cf88ddc00baa184d5726e6eda758a6f57d5d883 extends Twig_Template
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
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>Register - Doctors</title>
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/framework/bulma-0.2.3/css/bulma.css\">
  <script type=\"text/javascript\" src=\"/assets/js/jquery.js\"></script>
  <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js\"></script>
  <style type=\"text/css\">
    .error {
      color: red;
    }
  </style>
</head>
<body>
  <section class=\"hero is-fullheight is-dark is-bold\">
    <div class=\"hero-body\">
      <div class=\"container\">
        <div class=\"columns is-vcentered\">
          <div class=\"column is-4 is-offset-4\">
            <h1 class=\"title\">
              Register an Account
            </h1>
            <div class=\"box\">
            <form id=\"signupForm\" method=\"post\" action=\"/register\">
              <label class=\"label\">Name</label>
              <p class=\"control\">
                <input id=\"name\" class=\"input\" type=\"text\" name=\"name\" placeholder=\"John Smith\">
              </p>
              <label class=\"label\">Doctor Registration Id</label>
              <p class=\"control\">
                <input id=\"reg-id\" class=\"input\" type=\"text\" name=\"reg_id\" placeholder=\"eg. 123D4\">
              </p>
              <label class=\"label\">ZIP Code:</label>
              <p class=\"control\">
                <input id=\"zipcode\" class=\"input\" type=\"text\" name=\"zipcode\" placeholder=\"eg. 492010\">
              </p>
              <label class=\"label\">Email</label>
              <p class=\"control\">
                <input id=\"email\" class=\"input\" type=\"text\" name=\"email\" placeholder=\"jsmith@example.org\">
              </p>
              <hr>
              <label class=\"label\">Password</label>
              <p class=\"control\">
                <input id=\"password\" class=\"input\" type=\"password\" name=\"password\" placeholder=\"●●●●●●●\">
              </p>
              <label class=\"label\">Confirm Password</label>
              <p class=\"control\">
                <input id=\"password_confirm\" class=\"input\" type=\"password\" name=\"password_confirm\" placeholder=\"●●●●●●●\">
              </p>
              <hr>
              <p class=\"control\">
                <button id=\"submit\" type=\"submit\" class=\"button is-primary\">Register</button>
                <button id=\"cancel\" class=\"button is-default\">Cancel</button>
              </p>
            </form>
            </div>
            <p class=\"has-text-centered\">
              <a href=\"/login\">Login</a>
              | 
              <a href=\"#\">Need help?</a>
            </p>
          </div>
        </div>
      </div>
    </div>

  </section>
<script type=\"text/javascript\" src=\"/assets/js/CodeReactive-validate.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "auth/register.tpl";
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
        return new Twig_Source("", "auth/register.tpl", "C:\\xampp\\htdocs\\app\\views\\auth\\register.tpl");
    }
}
