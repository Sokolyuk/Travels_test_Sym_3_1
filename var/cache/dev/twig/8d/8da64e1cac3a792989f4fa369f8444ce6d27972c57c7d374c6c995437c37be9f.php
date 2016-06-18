<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ce53694f36c7a020161a91b392a14577950e39346fb11902942678faae2c1267 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5be53224ef7526827a029df232ec89ec7de940ed455471c8ca4937f82aa426c = $this->env->getExtension("native_profiler");
        $__internal_c5be53224ef7526827a029df232ec89ec7de940ed455471c8ca4937f82aa426c->enter($__internal_c5be53224ef7526827a029df232ec89ec7de940ed455471c8ca4937f82aa426c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5be53224ef7526827a029df232ec89ec7de940ed455471c8ca4937f82aa426c->leave($__internal_c5be53224ef7526827a029df232ec89ec7de940ed455471c8ca4937f82aa426c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8a42f0ff9ec9ee6778045479a526d28349c83a9b0931152fd252c571ce2057e = $this->env->getExtension("native_profiler");
        $__internal_c8a42f0ff9ec9ee6778045479a526d28349c83a9b0931152fd252c571ce2057e->enter($__internal_c8a42f0ff9ec9ee6778045479a526d28349c83a9b0931152fd252c571ce2057e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c8a42f0ff9ec9ee6778045479a526d28349c83a9b0931152fd252c571ce2057e->leave($__internal_c8a42f0ff9ec9ee6778045479a526d28349c83a9b0931152fd252c571ce2057e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e47b44f9eba2e9f897b5de0693c9bacd13b482b7d13a57cd7c9e2cfaecfe9e0d = $this->env->getExtension("native_profiler");
        $__internal_e47b44f9eba2e9f897b5de0693c9bacd13b482b7d13a57cd7c9e2cfaecfe9e0d->enter($__internal_e47b44f9eba2e9f897b5de0693c9bacd13b482b7d13a57cd7c9e2cfaecfe9e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e47b44f9eba2e9f897b5de0693c9bacd13b482b7d13a57cd7c9e2cfaecfe9e0d->leave($__internal_e47b44f9eba2e9f897b5de0693c9bacd13b482b7d13a57cd7c9e2cfaecfe9e0d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dc92ea611640e489acbcc8266e240f49257682774d9307db4e07fdf25a832e4 = $this->env->getExtension("native_profiler");
        $__internal_6dc92ea611640e489acbcc8266e240f49257682774d9307db4e07fdf25a832e4->enter($__internal_6dc92ea611640e489acbcc8266e240f49257682774d9307db4e07fdf25a832e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6dc92ea611640e489acbcc8266e240f49257682774d9307db4e07fdf25a832e4->leave($__internal_6dc92ea611640e489acbcc8266e240f49257682774d9307db4e07fdf25a832e4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
