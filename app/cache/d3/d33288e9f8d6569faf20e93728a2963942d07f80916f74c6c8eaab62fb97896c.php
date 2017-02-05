<?php

/* rumor/showrumor.tpl */
class __TwigTemplate_324db615d2bec2f528e3d199d5fa6d2b6e01440d2e9477ff607634dc86658953 extends Twig_Template
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
\t<title>Rumor ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "subject", array()), "html", null, true);
        echo "</title>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/vendor/bootstrap/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/vendor/font-awesome/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/codevector.css\">
\t<script type=\"text/javascript\" src=\"assets/vendor/jquery/jquery.min.js\"></script>
\t<script type=\"text/javascript\" src=\"assets/vendor/bootstrap/js/bootstrap.min.js\"></script>
</head>
<body>
<br>
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-6 col-md-offset-3\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "subject", array()), "html", null, true);
        echo "</h3>
                
                </div>
                <div class=\"panel-body\">
                    ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "message", array()), "html", null, true);
        echo "<br/>
                    Address: ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rumordata"]) ? $context["rumordata"] : null), "state", array()), "html", null, true);
        echo "<br/>
                    Pin Code: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rumordata"]) ? $context["rumordata"] : null), "zipcode", array()), "html", null, true);
        echo "<br/>
                    Count Yes: ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["count_yes"]) ? $context["count_yes"] : null), "html", null, true);
        echo "<br/>
                    Count No: ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["count_no"]) ? $context["count_no"] : null), "html", null, true);
        echo "<br/>
                </div>

                
            </div>
        </div>
\t</div>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "rumor/showrumor.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 26,  60 => 25,  56 => 24,  52 => 23,  48 => 22,  41 => 18,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rumor/showrumor.tpl", "C:\\xampp\\htdocs\\app\\views\\rumor\\showrumor.tpl");
    }
}
