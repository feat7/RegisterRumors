<?php

/* dashboard/home.tpl */
class __TwigTemplate_08a03fefcf74660acada6c11241e713b8ce32eebd5c4ca72639f87de6c26026c extends Twig_Template
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
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dashboard\">
    <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href=\"assets/css/bootstrap.css\" rel=\"stylesheet\">
    <!--external css-->
    <link href=\"assets/font-awesome/css/font-awesome.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/zabuto_calendar.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/js/gritter/css/jquery.gritter.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/lineicons/style.css\">    
    
    <!-- Custom styles for this template -->
    <link href=\"assets/css/style.css\" rel=\"stylesheet\">
    <link href=\"assets/css/style-responsive.css\" rel=\"stylesheet\">

    <script src=\"assets/js/chart-master/Chart.js\"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body>

  <section id=\"container\" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class=\"header black-bg\" style=\"border:none;background-color:#305070;\">
              <div class=\"sidebar-toggle-box\">
                  <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
              </div>
            <!--logo start-->
            <a href=\"index.html\" class=\"logo\"><b>Welcome Doctor</b></a>
            <!--logo end-->
    
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\" id=\"nav-accordion\">
              
              \t  <p class=\"centered\"><a href=\"profile.html\"><img src=\"assets/img/ui-sam.jpg\" class=\"img-circle\" width=\"60\"></a></p>
              \t  <h5 class=\"centered\">";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
        echo "</h5>
              \t  \t
                  <li class=\"mt\">
                      <a class=\"active\" href=\"index.html\">
                          <i class=\"fa fa-dashboard\"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" >
                          <i class=\"fa fa-desktop\"></i>
                          <span>Rumours for Review</span>
                      </a>
                      
                  </li>

                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" >
                          <i class=\"fa fa-cogs\"></i>
                          <span>Previous Results</span>
                      </a>
                      
                  </li>
                  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id=\"main-content\">
          <section class=\"wrapper\">
          <h3><a href=\"/logout\"><i class=\"glyphicon glyphicon-log-out\"></i> Logout</a></h3>

          ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rumors"]) ? $context["rumors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rumor"]) {
            // line 102
            echo "
          <br>
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-6 col-md-offset-3\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["rumor"], "subject", array()), "html", null, true);
            echo "</h3>
                    
                </div>
                <div class=\"panel-body\">

                    ";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["rumor"], "message", array()), "html", null, true);
            echo "
                </div>

                
                  <div class=\"panel-bottom\">
                    <a href=\"/rumor-add-yes-count/";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["rumor"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">Correct</a>
                    <a href=\"/rumor-add-no-count/";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["rumor"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Incorrect</a>
                    <a class=\"btn btn-info\" href=\"/rumor/";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["rumor"], "id", array()), "html", null, true);
            echo "\">Details</a>
                  </div>
               
            </div>
        </div>
  </div>
</div>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rumor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "          </section></section></section>
     <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
   
    <!-- js placed at the end of the document so the pages load faster -->
    <script src=\"assets/js/jquery.js\"></script>
    <script src=\"assets/js/jquery-1.8.3.min.js\"></script>
    <script src=\"assets/js/bootstrap.min.js\"></script>
    <script class=\"include\" type=\"text/javascript\" src=\"assets/js/jquery.dcjqaccordion.2.7.js\"></script>
    <script src=\"assets/js/jquery.scrollTo.min.js\"></script>
    <script src=\"assets/js/jquery.nicescroll.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/jquery.sparkline.js\"></script>


    <!--common script for all pages-->
    <script src=\"assets/js/common-scripts.js\"></script>
    
    <script type=\"text/javascript\" src=\"assets/js/gritter/js/jquery.gritter.js\"></script>
    <script type=\"text/javascript\" src=\"assets/js/gritter-conf.js\"></script>

    <!--script for this page-->
    <script src=\"assets/js/sparkline-chart.js\"></script>    
\t<script src=\"assets/js/zabuto_calendar.js\"></script>\t
\t
\t<script type=\"text/javascript\">
        \$(document).ready(function () {
        var unique_id = \$.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to your Dashboard!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can review current News and sort them accordingly as Rumours or Truth.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
\t</script>
\t
\t<script type=\"application/javascript\">
        \$(document).ready(function () {
            \$(\"#date-popover\").popover({html: true, trigger: \"manual\"});
            \$(\"#date-popover\").hide();
            \$(\"#date-popover\").click(function (e) {
                \$(this).hide();
            });
        
            \$(\"#my-calendar\").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: \"show_data.php?action=1\",
                    modal: true
                },
                legend: [
                    {type: \"text\", label: \"Special event\", badge: \"00\"},
                    {type: \"block\", label: \"Regular event\", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            \$(\"#date-popover\").hide();
            var nav = \$(\"#\" + id).data(\"navigation\");
            var to = \$(\"#\" + id).data(\"to\");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  
        
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "dashboard/home.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 130,  161 => 121,  157 => 120,  153 => 119,  145 => 114,  137 => 109,  128 => 102,  124 => 101,  81 => 61,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dashboard/home.tpl", "C:\\xampp\\htdocs\\app\\views\\dashboard\\home.tpl");
    }
}
