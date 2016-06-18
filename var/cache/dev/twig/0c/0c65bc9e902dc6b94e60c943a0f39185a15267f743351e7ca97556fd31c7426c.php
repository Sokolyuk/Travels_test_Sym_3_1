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
        $__internal_13e1ea6a185dd296c815837e7bc6d29f9ba8bc053bc0dc5038062db851658996 = $this->env->getExtension("native_profiler");
        $__internal_13e1ea6a185dd296c815837e7bc6d29f9ba8bc053bc0dc5038062db851658996->enter($__internal_13e1ea6a185dd296c815837e7bc6d29f9ba8bc053bc0dc5038062db851658996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TravelsMainBundle::base.html.twig"));

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
        
        $__internal_13e1ea6a185dd296c815837e7bc6d29f9ba8bc053bc0dc5038062db851658996->leave($__internal_13e1ea6a185dd296c815837e7bc6d29f9ba8bc053bc0dc5038062db851658996_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3d631f54a2b9229cda30eef9441df3602de45a192d01308b7a8fb8e3d2599c9 = $this->env->getExtension("native_profiler");
        $__internal_a3d631f54a2b9229cda30eef9441df3602de45a192d01308b7a8fb8e3d2599c9->enter($__internal_a3d631f54a2b9229cda30eef9441df3602de45a192d01308b7a8fb8e3d2599c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a3d631f54a2b9229cda30eef9441df3602de45a192d01308b7a8fb8e3d2599c9->leave($__internal_a3d631f54a2b9229cda30eef9441df3602de45a192d01308b7a8fb8e3d2599c9_prof);

    }

    // line 7
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_31ff2c0daa4efe136d135a73ce75bf3bf209e81b3a5abe3e49d32830cf4c8a57 = $this->env->getExtension("native_profiler");
        $__internal_31ff2c0daa4efe136d135a73ce75bf3bf209e81b3a5abe3e49d32830cf4c8a57->enter($__internal_31ff2c0daa4efe136d135a73ce75bf3bf209e81b3a5abe3e49d32830cf4c8a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        
        $__internal_31ff2c0daa4efe136d135a73ce75bf3bf209e81b3a5abe3e49d32830cf4c8a57->leave($__internal_31ff2c0daa4efe136d135a73ce75bf3bf209e81b3a5abe3e49d32830cf4c8a57_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0f613d4eca167b6d4d2ae95a77bb94f6607ef9d663df0ac82594702847021dfc = $this->env->getExtension("native_profiler");
        $__internal_0f613d4eca167b6d4d2ae95a77bb94f6607ef9d663df0ac82594702847021dfc->enter($__internal_0f613d4eca167b6d4d2ae95a77bb94f6607ef9d663df0ac82594702847021dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0f613d4eca167b6d4d2ae95a77bb94f6607ef9d663df0ac82594702847021dfc->leave($__internal_0f613d4eca167b6d4d2ae95a77bb94f6607ef9d663df0ac82594702847021dfc_prof);

    }

    // line 11
    public function block_layout($context, array $blocks = array())
    {
        $__internal_0dbf70915d15bc0faf2dc24f60d367401db11c104d183742e76a9ea9c08cac64 = $this->env->getExtension("native_profiler");
        $__internal_0dbf70915d15bc0faf2dc24f60d367401db11c104d183742e76a9ea9c08cac64->enter($__internal_0dbf70915d15bc0faf2dc24f60d367401db11c104d183742e76a9ea9c08cac64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        
        $__internal_0dbf70915d15bc0faf2dc24f60d367401db11c104d183742e76a9ea9c08cac64->leave($__internal_0dbf70915d15bc0faf2dc24f60d367401db11c104d183742e76a9ea9c08cac64_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_533c56f22a90fe7473a77b12e4af2bdb84f838bbea193c0fc0b6e1c994e55b96 = $this->env->getExtension("native_profiler");
        $__internal_533c56f22a90fe7473a77b12e4af2bdb84f838bbea193c0fc0b6e1c994e55b96->enter($__internal_533c56f22a90fe7473a77b12e4af2bdb84f838bbea193c0fc0b6e1c994e55b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        
        $__internal_533c56f22a90fe7473a77b12e4af2bdb84f838bbea193c0fc0b6e1c994e55b96->leave($__internal_533c56f22a90fe7473a77b12e4af2bdb84f838bbea193c0fc0b6e1c994e55b96_prof);

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
