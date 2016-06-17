<?php

/* TravelsMainBundle::base.html.twig */
class __TwigTemplate_c959e22c20e862254448b830c817523472a802144d3fa294f9b9056de73634e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metatags' => array($this, 'block_metatags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'layout' => array($this, 'block_layout'),
            'appData' => array($this, 'block_appData'),
            'jsTemplates' => array($this, 'block_jsTemplates'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/images/favicon.ico"), "html", null, true);
        echo "\" />

        ";
        // line 8
        $this->displayBlock('metatags', $context, $blocks);
        // line 9
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('layout', $context, $blocks);
        // line 13
        echo "    </body>
    ";
        // line 14
        $this->displayBlock('appData', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('jsTemplates', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_metatags($context, array $blocks = array())
    {
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 12
    public function block_layout($context, array $blocks = array())
    {
    }

    // line 14
    public function block_appData($context, array $blocks = array())
    {
    }

    // line 15
    public function block_jsTemplates($context, array $blocks = array())
    {
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "TravelsMainBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 16,  93 => 15,  88 => 14,  83 => 12,  78 => 9,  73 => 8,  68 => 5,  63 => 17,  60 => 16,  57 => 15,  55 => 14,  52 => 13,  50 => 12,  46 => 10,  43 => 9,  41 => 8,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>{% block title %}{% endblock title %}</title>*/
/*         <link rel="shortcut icon" href="{{ asset('bundles/travelsmain/images/favicon.ico') }}" />*/
/* */
/*         {% block metatags %}{% endblock metatags %}*/
/*         {% block stylesheets %}{% endblock stylesheets %}*/
/*     </head>*/
/*     <body>*/
/*         {% block layout %}{% endblock layout %}*/
/*     </body>*/
/*     {% block appData %}{% endblock appData %}*/
/*     {% block jsTemplates %}{% endblock jsTemplates %}*/
/*     {% block javascripts %} {% endblock javascripts %}*/
/* </html>*/
/* */
