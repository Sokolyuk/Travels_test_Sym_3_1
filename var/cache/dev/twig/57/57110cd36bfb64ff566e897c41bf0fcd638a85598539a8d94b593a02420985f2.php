<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b9d5aeadaad7bfff1759131fa7ea152d2d13ac717392c349187d5860961b5cbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_12121fcab55026b4182efab9835e3fb9a8114c713cc5f2b5fb190b5919681ff5 = $this->env->getExtension("native_profiler");
        $__internal_12121fcab55026b4182efab9835e3fb9a8114c713cc5f2b5fb190b5919681ff5->enter($__internal_12121fcab55026b4182efab9835e3fb9a8114c713cc5f2b5fb190b5919681ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12121fcab55026b4182efab9835e3fb9a8114c713cc5f2b5fb190b5919681ff5->leave($__internal_12121fcab55026b4182efab9835e3fb9a8114c713cc5f2b5fb190b5919681ff5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c148a2eb11fd2a6c3386a2c03fb127d37ce9b9d9d8432d13e5b0525954b5ea26 = $this->env->getExtension("native_profiler");
        $__internal_c148a2eb11fd2a6c3386a2c03fb127d37ce9b9d9d8432d13e5b0525954b5ea26->enter($__internal_c148a2eb11fd2a6c3386a2c03fb127d37ce9b9d9d8432d13e5b0525954b5ea26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c148a2eb11fd2a6c3386a2c03fb127d37ce9b9d9d8432d13e5b0525954b5ea26->leave($__internal_c148a2eb11fd2a6c3386a2c03fb127d37ce9b9d9d8432d13e5b0525954b5ea26_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_52f8c95f109fdd6164a59356ff9ea09bbd95f99c5f4ab6e93c5f86f74b16b28f = $this->env->getExtension("native_profiler");
        $__internal_52f8c95f109fdd6164a59356ff9ea09bbd95f99c5f4ab6e93c5f86f74b16b28f->enter($__internal_52f8c95f109fdd6164a59356ff9ea09bbd95f99c5f4ab6e93c5f86f74b16b28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_52f8c95f109fdd6164a59356ff9ea09bbd95f99c5f4ab6e93c5f86f74b16b28f->leave($__internal_52f8c95f109fdd6164a59356ff9ea09bbd95f99c5f4ab6e93c5f86f74b16b28f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
