<?php

/* @TravelsMain/base.html.twig */
class __TwigTemplate_cba0bd42c6565ae8cbadcc77c551aa26fd53f13be9c5d66ca6020e1e468fe8d3 extends Twig_Template
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
        $__internal_53a5d77496625f7884d45e7542b434b10d7b7c62e913b0fa13619006bdaaac24 = $this->env->getExtension("native_profiler");
        $__internal_53a5d77496625f7884d45e7542b434b10d7b7c62e913b0fa13619006bdaaac24->enter($__internal_53a5d77496625f7884d45e7542b434b10d7b7c62e913b0fa13619006bdaaac24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TravelsMain/base.html.twig"));

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
        
        $__internal_53a5d77496625f7884d45e7542b434b10d7b7c62e913b0fa13619006bdaaac24->leave($__internal_53a5d77496625f7884d45e7542b434b10d7b7c62e913b0fa13619006bdaaac24_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e73cbf6bbd9678e85763290d88053bcdae200e0e8898a6540e485cd5273a9a9f = $this->env->getExtension("native_profiler");
        $__internal_e73cbf6bbd9678e85763290d88053bcdae200e0e8898a6540e485cd5273a9a9f->enter($__internal_e73cbf6bbd9678e85763290d88053bcdae200e0e8898a6540e485cd5273a9a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e73cbf6bbd9678e85763290d88053bcdae200e0e8898a6540e485cd5273a9a9f->leave($__internal_e73cbf6bbd9678e85763290d88053bcdae200e0e8898a6540e485cd5273a9a9f_prof);

    }

    // line 7
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_2692b6ec69c87fb8e9c806ed6c41f213a51b3a945fde97a6374ffd0a338a1ddd = $this->env->getExtension("native_profiler");
        $__internal_2692b6ec69c87fb8e9c806ed6c41f213a51b3a945fde97a6374ffd0a338a1ddd->enter($__internal_2692b6ec69c87fb8e9c806ed6c41f213a51b3a945fde97a6374ffd0a338a1ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        
        $__internal_2692b6ec69c87fb8e9c806ed6c41f213a51b3a945fde97a6374ffd0a338a1ddd->leave($__internal_2692b6ec69c87fb8e9c806ed6c41f213a51b3a945fde97a6374ffd0a338a1ddd_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1ff6ebef99783f85cbec5120ee02b355fb528d4c960987f8b386df97eae58ae5 = $this->env->getExtension("native_profiler");
        $__internal_1ff6ebef99783f85cbec5120ee02b355fb528d4c960987f8b386df97eae58ae5->enter($__internal_1ff6ebef99783f85cbec5120ee02b355fb528d4c960987f8b386df97eae58ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1ff6ebef99783f85cbec5120ee02b355fb528d4c960987f8b386df97eae58ae5->leave($__internal_1ff6ebef99783f85cbec5120ee02b355fb528d4c960987f8b386df97eae58ae5_prof);

    }

    // line 11
    public function block_layout($context, array $blocks = array())
    {
        $__internal_3f234cd7a402a3ce6f6c8c9f3aac26ced8e4a5e4cede485839f04a0e81420dba = $this->env->getExtension("native_profiler");
        $__internal_3f234cd7a402a3ce6f6c8c9f3aac26ced8e4a5e4cede485839f04a0e81420dba->enter($__internal_3f234cd7a402a3ce6f6c8c9f3aac26ced8e4a5e4cede485839f04a0e81420dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        
        $__internal_3f234cd7a402a3ce6f6c8c9f3aac26ced8e4a5e4cede485839f04a0e81420dba->leave($__internal_3f234cd7a402a3ce6f6c8c9f3aac26ced8e4a5e4cede485839f04a0e81420dba_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_28acd2bd71a390b386e9dd0af0e08468511312c13ce3fd01bd781c0362e20efa = $this->env->getExtension("native_profiler");
        $__internal_28acd2bd71a390b386e9dd0af0e08468511312c13ce3fd01bd781c0362e20efa->enter($__internal_28acd2bd71a390b386e9dd0af0e08468511312c13ce3fd01bd781c0362e20efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        
        $__internal_28acd2bd71a390b386e9dd0af0e08468511312c13ce3fd01bd781c0362e20efa->leave($__internal_28acd2bd71a390b386e9dd0af0e08468511312c13ce3fd01bd781c0362e20efa_prof);

    }

    public function getTemplateName()
    {
        return "@TravelsMain/base.html.twig";
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
