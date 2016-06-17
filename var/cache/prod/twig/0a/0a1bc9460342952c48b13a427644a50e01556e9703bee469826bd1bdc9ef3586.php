<?php

/* @TravelsMain/layout.html.twig */
class __TwigTemplate_0b5e7b8fbf0c4f6133c5e1e3bad704b2208ec965b6a86b860dac27e7822c8567 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TravelsMainBundle::base.html.twig", "@TravelsMain/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'layout' => array($this, 'block_layout'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TravelsMainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/css/travels.css"), "html", null, true);
        echo "\" />
\t<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/js/jquery-3.0.0.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/js/travels.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 13
    public function block_layout($context, array $blocks = array())
    {
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('footer', $context, $blocks);
        // line 25
        echo "
";
    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        // line 16
        echo "\t\t";
        $this->loadTemplate("TravelsMainBundle::layout/header.html.twig", "@TravelsMain/layout.html.twig", 16)->display($context);
        // line 17
        echo "    ";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "    ";
    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        // line 23
        echo "        ";
        $this->loadTemplate("TravelsMainBundle::layout/footer.html.twig", "@TravelsMain/layout.html.twig", 23)->display($context);
        // line 24
        echo "    ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@TravelsMain/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 28,  107 => 24,  104 => 23,  101 => 22,  97 => 20,  94 => 19,  90 => 17,  87 => 16,  84 => 15,  79 => 25,  77 => 22,  74 => 21,  72 => 19,  69 => 18,  67 => 15,  64 => 14,  61 => 13,  55 => 10,  51 => 9,  47 => 8,  42 => 7,  39 => 6,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'TravelsMainBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/* {% endblock title %}*/
/* */
/* {% block stylesheets %}*/
/* 	<link rel="stylesheet" href="{{ asset('bundles/travelsmain/css/travels.css') }}" />*/
/* 	<script src="{{ asset('bundles/travelsmain/js/jquery-3.0.0.min.js') }}"></script>*/
/* 	<script src="{{ asset('bundles/travelsmain/js/jquery-ui.min.js') }}"></script>*/
/* 	<script src="{{ asset('bundles/travelsmain/js/travels.js') }}"></script>*/
/* {% endblock stylesheets %}*/
/* */
/* {% block layout %}*/
/* */
/*     {% block header %}*/
/* 		{% include 'TravelsMainBundle::layout/header.html.twig' %}*/
/*     {% endblock header %}*/
/* */
/*     {% block content %}*/
/*     {% endblock content %}*/
/* */
/*     {% block footer %}*/
/*         {% include 'TravelsMainBundle::layout/footer.html.twig' %}*/
/*     {% endblock footer %}*/
/* */
/* {% endblock layout %}*/
/* */
/* {% block javascripts %}*/
/* {% endblock javascripts %}*/
/* */
