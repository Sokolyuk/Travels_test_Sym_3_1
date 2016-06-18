<?php

/* TravelsMainBundle::base.html.twig */
class __TwigTemplate_d969a8466b68ac3926a31d1c4b635d5f4dccd32712881b5a5d6eb33dbdc47285 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3b85109bffdb1453bc5b1550280b8ffc5eb66e36a8d6b0881e671f3fa981cf8 = $this->env->getExtension("native_profiler");
        $__internal_b3b85109bffdb1453bc5b1550280b8ffc5eb66e36a8d6b0881e671f3fa981cf8->enter($__internal_b3b85109bffdb1453bc5b1550280b8ffc5eb66e36a8d6b0881e671f3fa981cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TravelsMainBundle::base.html.twig"));

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
        // line 7
        $this->displayBlock('metatags', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('layout', $context, $blocks);
        // line 12
        echo "    </body>
    ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "</html>
";
        
        $__internal_b3b85109bffdb1453bc5b1550280b8ffc5eb66e36a8d6b0881e671f3fa981cf8->leave($__internal_b3b85109bffdb1453bc5b1550280b8ffc5eb66e36a8d6b0881e671f3fa981cf8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_05fa39987ded2acf9b37a03ac7d289f58add0eb52aa0bcab1424bfd5d0b8a10f = $this->env->getExtension("native_profiler");
        $__internal_05fa39987ded2acf9b37a03ac7d289f58add0eb52aa0bcab1424bfd5d0b8a10f->enter($__internal_05fa39987ded2acf9b37a03ac7d289f58add0eb52aa0bcab1424bfd5d0b8a10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_05fa39987ded2acf9b37a03ac7d289f58add0eb52aa0bcab1424bfd5d0b8a10f->leave($__internal_05fa39987ded2acf9b37a03ac7d289f58add0eb52aa0bcab1424bfd5d0b8a10f_prof);

    }

    // line 7
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_cb55cd3965f7f6023808b37a2ee559b25b69b8f3c3047a2e03027c020f907232 = $this->env->getExtension("native_profiler");
        $__internal_cb55cd3965f7f6023808b37a2ee559b25b69b8f3c3047a2e03027c020f907232->enter($__internal_cb55cd3965f7f6023808b37a2ee559b25b69b8f3c3047a2e03027c020f907232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        
        $__internal_cb55cd3965f7f6023808b37a2ee559b25b69b8f3c3047a2e03027c020f907232->leave($__internal_cb55cd3965f7f6023808b37a2ee559b25b69b8f3c3047a2e03027c020f907232_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ef7d593ebb5201e46ed06d0064047cf9dc30ff16e045b7fc1f77ccb502b287f = $this->env->getExtension("native_profiler");
        $__internal_3ef7d593ebb5201e46ed06d0064047cf9dc30ff16e045b7fc1f77ccb502b287f->enter($__internal_3ef7d593ebb5201e46ed06d0064047cf9dc30ff16e045b7fc1f77ccb502b287f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3ef7d593ebb5201e46ed06d0064047cf9dc30ff16e045b7fc1f77ccb502b287f->leave($__internal_3ef7d593ebb5201e46ed06d0064047cf9dc30ff16e045b7fc1f77ccb502b287f_prof);

    }

    // line 11
    public function block_layout($context, array $blocks = array())
    {
        $__internal_61b007bc779c412785f59416352ab25d760af82fc51d75ab4410b147c6880c7b = $this->env->getExtension("native_profiler");
        $__internal_61b007bc779c412785f59416352ab25d760af82fc51d75ab4410b147c6880c7b->enter($__internal_61b007bc779c412785f59416352ab25d760af82fc51d75ab4410b147c6880c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        
        $__internal_61b007bc779c412785f59416352ab25d760af82fc51d75ab4410b147c6880c7b->leave($__internal_61b007bc779c412785f59416352ab25d760af82fc51d75ab4410b147c6880c7b_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c1e05208bbc2af9d97fed29e8f605756c5afeb2f6f415e3b4d4ae8442ca4ef7 = $this->env->getExtension("native_profiler");
        $__internal_1c1e05208bbc2af9d97fed29e8f605756c5afeb2f6f415e3b4d4ae8442ca4ef7->enter($__internal_1c1e05208bbc2af9d97fed29e8f605756c5afeb2f6f415e3b4d4ae8442ca4ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        
        $__internal_1c1e05208bbc2af9d97fed29e8f605756c5afeb2f6f415e3b4d4ae8442ca4ef7->leave($__internal_1c1e05208bbc2af9d97fed29e8f605756c5afeb2f6f415e3b4d4ae8442ca4ef7_prof);

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
        return array (  109 => 13,  98 => 11,  87 => 8,  76 => 7,  65 => 5,  57 => 14,  55 => 13,  52 => 12,  50 => 11,  46 => 9,  43 => 8,  41 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>{% block title %}{% endblock title %}</title>*/
/*         <link rel="shortcut icon" href="{{ asset('bundles/travelsmain/images/favicon.ico') }}" />*/
/*         {% block metatags %}{% endblock metatags %}*/
/*         {% block stylesheets %}{% endblock stylesheets %}*/
/*     </head>*/
/*     <body>*/
/*         {% block layout %}{% endblock layout %}*/
/*     </body>*/
/*     {% block javascripts %} {% endblock javascripts %}*/
/* </html>*/
/* */
