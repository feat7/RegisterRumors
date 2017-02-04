<?php

/* auth/login.html */
class __TwigTemplate_8311689d510e56f51796d088e9cd687523beadb49888194e065c91b608312147 extends Twig_Template
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
  <title>Login - Free Bulma template</title>
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/framework/bulma-0.2.3/css/bulma.css\">
 
</head>
<body>
  <section class=\"hero is-fullheight is-dark is-bold\">

    <div class=\"hero-body\">
      <div class=\"container\">
        <div class=\"columns is-vcentered\">
          <div class=\"column is-4 is-offset-4\">
            <h1 class=\"title\">
              Login
            </h1>
            <div class=\"box\">
            <form id=\"loginForm\" method=\"post\" action=\"/login\">
              <label class=\"label\">Email</label>
              <p class=\"control\">
                <input name=\"email\" class=\"input\" type=\"text\" placeholder=\"jsmith@example.org\">
              </p>
              <label class=\"label\">Password</label>
              <p class=\"control\">
                <input name=\"password\" class=\"input\" type=\"password\" placeholder=\"●●●●●●●\">
              </p>
              <hr>
              <p class=\"control\">
                <button class=\"button is-primary\">Login</button>
                <button class=\"button is-default\">Cancel</button>
              </p>
            </div>
            <p class=\"has-text-centered\">
              <a href=\"/register\">Register an Account</a>
              | 
              <a href=\"#\">Forgot password</a>
              | 
              <a href=\"#\">Need help?</a>
            </p>
          </form>
          </div>
        </div>
      </div>
    </div>

  </section>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "auth/login.html";
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
        return new Twig_Source("", "auth/login.html", "C:\\xampp\\htdocs\\app\\views\\auth\\login.html");
    }
}
