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
        $__internal_2820d2e1c9e999e32c30d3f103a3acf7a795c846ea521ee139695f4911b1ab1d = $this->env->getExtension("native_profiler");
        $__internal_2820d2e1c9e999e32c30d3f103a3acf7a795c846ea521ee139695f4911b1ab1d->enter($__internal_2820d2e1c9e999e32c30d3f103a3acf7a795c846ea521ee139695f4911b1ab1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TravelsMainBundle::base.html.twig"));

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
        
        $__internal_2820d2e1c9e999e32c30d3f103a3acf7a795c846ea521ee139695f4911b1ab1d->leave($__internal_2820d2e1c9e999e32c30d3f103a3acf7a795c846ea521ee139695f4911b1ab1d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e3ed7b0caa0865e7392cb35c2b4cf407dda672a63f9a06b46f1db0e58878ad8 = $this->env->getExtension("native_profiler");
        $__internal_2e3ed7b0caa0865e7392cb35c2b4cf407dda672a63f9a06b46f1db0e58878ad8->enter($__internal_2e3ed7b0caa0865e7392cb35c2b4cf407dda672a63f9a06b46f1db0e58878ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2e3ed7b0caa0865e7392cb35c2b4cf407dda672a63f9a06b46f1db0e58878ad8->leave($__internal_2e3ed7b0caa0865e7392cb35c2b4cf407dda672a63f9a06b46f1db0e58878ad8_prof);

    }

    // line 7
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_059e63dcbc9136980a12e2856a1df930117a979b8f3fc18b7e5b2522f5d2d2c1 = $this->env->getExtension("native_profiler");
        $__internal_059e63dcbc9136980a12e2856a1df930117a979b8f3fc18b7e5b2522f5d2d2c1->enter($__internal_059e63dcbc9136980a12e2856a1df930117a979b8f3fc18b7e5b2522f5d2d2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        
        $__internal_059e63dcbc9136980a12e2856a1df930117a979b8f3fc18b7e5b2522f5d2d2c1->leave($__internal_059e63dcbc9136980a12e2856a1df930117a979b8f3fc18b7e5b2522f5d2d2c1_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f0e97a2648102807847794f95e6cda7c942edaf135250c8cabec99efadfb4f40 = $this->env->getExtension("native_profiler");
        $__internal_f0e97a2648102807847794f95e6cda7c942edaf135250c8cabec99efadfb4f40->enter($__internal_f0e97a2648102807847794f95e6cda7c942edaf135250c8cabec99efadfb4f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f0e97a2648102807847794f95e6cda7c942edaf135250c8cabec99efadfb4f40->leave($__internal_f0e97a2648102807847794f95e6cda7c942edaf135250c8cabec99efadfb4f40_prof);

    }

    // line 11
    public function block_layout($context, array $blocks = array())
    {
        $__internal_c7334508293666794a59a591d6e2024d0bc895cf7a5a0fe0fe389ce4de39d446 = $this->env->getExtension("native_profiler");
        $__internal_c7334508293666794a59a591d6e2024d0bc895cf7a5a0fe0fe389ce4de39d446->enter($__internal_c7334508293666794a59a591d6e2024d0bc895cf7a5a0fe0fe389ce4de39d446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        
        $__internal_c7334508293666794a59a591d6e2024d0bc895cf7a5a0fe0fe389ce4de39d446->leave($__internal_c7334508293666794a59a591d6e2024d0bc895cf7a5a0fe0fe389ce4de39d446_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_396e046bd45dff2dcc4d7bb60f6534db0c45ee6fc3a679791b605e9528224bee = $this->env->getExtension("native_profiler");
        $__internal_396e046bd45dff2dcc4d7bb60f6534db0c45ee6fc3a679791b605e9528224bee->enter($__internal_396e046bd45dff2dcc4d7bb60f6534db0c45ee6fc3a679791b605e9528224bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        
        $__internal_396e046bd45dff2dcc4d7bb60f6534db0c45ee6fc3a679791b605e9528224bee->leave($__internal_396e046bd45dff2dcc4d7bb60f6534db0c45ee6fc3a679791b605e9528224bee_prof);

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
