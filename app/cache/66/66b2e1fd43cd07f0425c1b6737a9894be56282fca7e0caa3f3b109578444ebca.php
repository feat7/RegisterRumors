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
        echo "Coming Soon..";
    }

    public function getTemplateName()
    {
        return "homepage/index.tpl";
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
        return new Twig_Source("", "homepage/index.tpl", "C:\\xampp\\htdocs\\app\\views\\homepage\\index.tpl");
    }
}
