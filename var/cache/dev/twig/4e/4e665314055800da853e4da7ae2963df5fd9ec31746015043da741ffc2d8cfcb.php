<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_19e24b0a0e7d61971d83043d81d30fae094a062750b29035224647e0c086c057 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_751fbd7c65a8ae5c442ac7643747c2971864dce53a6a9604493e1496e0841c39 = $this->env->getExtension("native_profiler");
        $__internal_751fbd7c65a8ae5c442ac7643747c2971864dce53a6a9604493e1496e0841c39->enter($__internal_751fbd7c65a8ae5c442ac7643747c2971864dce53a6a9604493e1496e0841c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_751fbd7c65a8ae5c442ac7643747c2971864dce53a6a9604493e1496e0841c39->leave($__internal_751fbd7c65a8ae5c442ac7643747c2971864dce53a6a9604493e1496e0841c39_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a47012767396b70fe87a32f7a0608a3cccfeb3c5c4c185e2f1ad63ddde945bf4 = $this->env->getExtension("native_profiler");
        $__internal_a47012767396b70fe87a32f7a0608a3cccfeb3c5c4c185e2f1ad63ddde945bf4->enter($__internal_a47012767396b70fe87a32f7a0608a3cccfeb3c5c4c185e2f1ad63ddde945bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a47012767396b70fe87a32f7a0608a3cccfeb3c5c4c185e2f1ad63ddde945bf4->leave($__internal_a47012767396b70fe87a32f7a0608a3cccfeb3c5c4c185e2f1ad63ddde945bf4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d88fa05ea75466aa4d5ba9e7f92c7e0d776045e34db367ab7ee955dea7c07d9b = $this->env->getExtension("native_profiler");
        $__internal_d88fa05ea75466aa4d5ba9e7f92c7e0d776045e34db367ab7ee955dea7c07d9b->enter($__internal_d88fa05ea75466aa4d5ba9e7f92c7e0d776045e34db367ab7ee955dea7c07d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d88fa05ea75466aa4d5ba9e7f92c7e0d776045e34db367ab7ee955dea7c07d9b->leave($__internal_d88fa05ea75466aa4d5ba9e7f92c7e0d776045e34db367ab7ee955dea7c07d9b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
