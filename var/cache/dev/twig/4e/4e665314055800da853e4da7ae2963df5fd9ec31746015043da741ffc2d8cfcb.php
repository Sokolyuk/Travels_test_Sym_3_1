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
        $__internal_699cc7036041656fa117f43e71a0c487a9e56c1dfaad8b214d87b87cff656064 = $this->env->getExtension("native_profiler");
        $__internal_699cc7036041656fa117f43e71a0c487a9e56c1dfaad8b214d87b87cff656064->enter($__internal_699cc7036041656fa117f43e71a0c487a9e56c1dfaad8b214d87b87cff656064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_699cc7036041656fa117f43e71a0c487a9e56c1dfaad8b214d87b87cff656064->leave($__internal_699cc7036041656fa117f43e71a0c487a9e56c1dfaad8b214d87b87cff656064_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d03aeeb2d2fecabb3e669b0bca16fdafed94089e6e09d7a373249c53f36e1085 = $this->env->getExtension("native_profiler");
        $__internal_d03aeeb2d2fecabb3e669b0bca16fdafed94089e6e09d7a373249c53f36e1085->enter($__internal_d03aeeb2d2fecabb3e669b0bca16fdafed94089e6e09d7a373249c53f36e1085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d03aeeb2d2fecabb3e669b0bca16fdafed94089e6e09d7a373249c53f36e1085->leave($__internal_d03aeeb2d2fecabb3e669b0bca16fdafed94089e6e09d7a373249c53f36e1085_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf7f37d83a0eb9b674bc1e66285ff3654384663a2ac745a1b642031e7574f4c1 = $this->env->getExtension("native_profiler");
        $__internal_cf7f37d83a0eb9b674bc1e66285ff3654384663a2ac745a1b642031e7574f4c1->enter($__internal_cf7f37d83a0eb9b674bc1e66285ff3654384663a2ac745a1b642031e7574f4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cf7f37d83a0eb9b674bc1e66285ff3654384663a2ac745a1b642031e7574f4c1->leave($__internal_cf7f37d83a0eb9b674bc1e66285ff3654384663a2ac745a1b642031e7574f4c1_prof);

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
