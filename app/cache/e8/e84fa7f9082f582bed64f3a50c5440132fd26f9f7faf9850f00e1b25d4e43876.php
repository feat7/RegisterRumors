<?php

/* rumor/success.tpl */
class __TwigTemplate_c19ad05e2c2d1438e8be6fb423527eb542ae93bc9666f13a5ed600bc6d2e0109 extends Twig_Template
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
    <head><title>Success!</title></head>
    <body bgcolor=\"black\">
    <div id=\"form\">
    \t<a href=\"/\" style=\"font-size: 20px; color: #fff;\">Home</a>

    </div>
    <p style=\"margin-left:20%; margin-top:20%;color:white; font-size:80px; text-align:centre;\">Your query successfully sent!</p>
    
    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "rumor/success.tpl";
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
        return new Twig_Source("", "rumor/success.tpl", "C:\\xampp\\htdocs\\app\\views\\rumor\\success.tpl");
    }
}
