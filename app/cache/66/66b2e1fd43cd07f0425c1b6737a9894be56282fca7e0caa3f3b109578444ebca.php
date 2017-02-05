<?php

/* homepage/index.tpl */
class __TwigTemplate_24033b0e1ebbef2c5ae0b152532005f8dddbe42f3284a1906d75c85f78afe7a2 extends Twig_Template
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
\t<title>Rumour Registration</title>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/vendor/bootstrap/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/vendor/font-awesome/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/codevector.css\">
\t<script type=\"text/javascript\" src=\"assets/vendor/jquery/jquery.min.js\"></script>
\t<script type=\"text/javascript\" src=\"assets/vendor/bootstrap/js/bootstrap.min.js\"></script>
</head>
<body data-spy=\"scroll\" data-target=\".navbar\" data-offset=\"50\" id=\"page-top\" class=\"index\">
\t<nav class=\"navbar navbar-default navbar-fixed-top\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-toggle\"><span class=\"sr-only\">Toggle navigation</span><i class=\"fa fa-bars\"></i> Menu</button>
\t\t\t\t<a href=\"#page-top\" class=\"navbar-brand\">Rumour Registration</a>
\t\t\t</div>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar-toggle\">
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li class=\"page-scroll\"><a href=\"/register\">Sign Up</a></li>
\t\t\t\t<li class=\"page-scroll\"><a href=\"/login\">Login</a></li>
\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t<!-- Main Header -->

\t<header class=\"jumbotron hero\" style=\"min-height: 220%;\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<div class=\"text-center\" style=\"padding-top: 90px;\">
                        <a href=\"#register-rumor\" style=\"text-decoration:none; color:white;\">
                        <i class=\"glyphicon glyphicon-fire\" style=\"font-size: 190px; color: #fb7304;\"></a></i>
                        <h2 class=\"header-heading\"><a href=\"#register-rumor\" style=\"text-decoration:none;color:white;\">Register A Rumour</a></h2>
\t\t\t\t\t\t<h2><small>Save valuable lives.</small></h2>
\t\t\t\t\t\t<br/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center\" style=\"display:inline-grid;\">
\t\t\t\t\t\t<h3><i class=\"glyphicon glyphicon-phone\" style=\"color: black;\"></i> From Anywhere<i class=\"glyphicon glyphicon-magnet\" style=\"color: #cc0000;\"></i> Sort out Rumours form Truth.<i class=\"glyphicon glyphicon-leaf\" style=\"color: #005500;\"></i> Less Paperwork.<i class=\"glyphicon glyphicon-map-marker\" style=\"color: #800000;\"></i>Around You.</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>

\t<section id=\"result-holder\">
\t<h2>Recently registered Rumors</h2><hr/>
\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rumors"]) ? $context["rumors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rumor"]) {
            // line 52
            echo "\t\t\t<br>
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-6 col-md-offset-3\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["rumor"], "subject", array()), "html", null, true);
            echo "</h3>
                
                </div>
                <div class=\"panel-body\">
                    ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["rumor"], "message", array()), "html", null, true);
            echo "<br/>
                    Address: ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["rumor"], "address", array()), "html", null, true);
            echo "<br/>
                    Pin Code: ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["rumor"], "zipcode", array()), "html", null, true);
            echo "<br/>
                    Count Yes: ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["rumor"], "count_yes", array()), "html", null, true);
            echo "<br/>
                    Count No: ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["rumor"], "count_no", array()), "html", null, true);
            echo "
                </div>

                
            </div>
        </div>
\t</div>
</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rumor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t</section>

\t<section id=\"register-rumor\">
\t<hr/>
\t\t<div class=\"container\">
\t<div class=\"row\">
      <div class=\"col-md-6 col-md-offset-3\">
        <div class=\"well well-sm\">
          <form class=\"form-horizontal\" action=\"/register-rumor\" method=\"post\">
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

            <!-- Subject input-->
            <div class=\"form-group\">
              <label class=\"col-md-3 control-label\" for=\"email\">Rumour Subject</label>
              <div class=\"col-md-9\">
                <input id=\"subject\" name=\"subject\" type=\"text\" placeholder=\"Rumour Subject\" class=\"form-control\">
              </div>
            </div>

            <!-- postal code input-->
            <div class=\"form-group\">
              <label class=\"col-md-3 control-label\" for=\"email\">ZIP Code</label>
              <div class=\"col-md-9\">
                <input id=\"zipcode\" name=\"zipcode\" type=\"text\" placeholder=\"ZIP Code\" class=\"form-control\">
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
\t</section>

\t<!-- clients section -->

\t<section id=\"clients\">
\t\t<div class=\"container\">
\t\t\t<h2>Know the Truth</h2>
\t\t\t<hr/>
\t\t\t<div class=\"text-center\">
\t\t\t\t<h1 style=\"font-size: 150px;\"><i class=\"glyphicon glyphicon-briefcase\"></i></h1>
\t\t\t\t<h3>Are you tired of Rumours around you?</h3>
\t\t\t\t<br/>
\t\t\t\t<p>Some people enjoy spreading rumours about Diseases that are affecting lives around the globe and You are also in danger.<br>Don't mind if these are mere rumours as we will dig the truth for you.</p>
\t\t\t</div>\t\t\t
\t\t</div>
\t</section>
\t<section class=\"about-us\" id=\"aboutUs\">
\t\t<div class=\"container\">
\t\t\t<h2>About Us</h2>
\t\t\t<br/>
\t\t\t<div class=\"text-center\">
\t\t\t\t<h1 style=\"font-size: 100px;\"><i class=\"glyphicon glyphicon-send\"></i></h1>We are here to help.<br>
\t\t\t\tYour rumours can harm others and registrating them for evaluation will help to eliminate them.
\t\t\t</div>
\t\t</div>
\t</section>
    <h4>Rumors Registration copyright@2017</h4>

<script type=\"text/javascript\" src=\"js/codevector.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "homepage/index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 75,  106 => 66,  102 => 65,  98 => 64,  94 => 63,  90 => 62,  83 => 58,  75 => 52,  71 => 51,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "homepage/index.tpl", "C:\\xampp\\htdocs\\app\\views\\homepage\\index.tpl");
    }
}
