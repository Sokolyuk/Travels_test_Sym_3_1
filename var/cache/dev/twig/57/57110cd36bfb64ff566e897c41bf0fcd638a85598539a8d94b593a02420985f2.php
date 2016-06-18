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
        $__internal_d8f6f23451653cbf4cb4d0fb6aea507c97945a5cdb7c9fcc9349efd966039937 = $this->env->getExtension("native_profiler");
        $__internal_d8f6f23451653cbf4cb4d0fb6aea507c97945a5cdb7c9fcc9349efd966039937->enter($__internal_d8f6f23451653cbf4cb4d0fb6aea507c97945a5cdb7c9fcc9349efd966039937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8f6f23451653cbf4cb4d0fb6aea507c97945a5cdb7c9fcc9349efd966039937->leave($__internal_d8f6f23451653cbf4cb4d0fb6aea507c97945a5cdb7c9fcc9349efd966039937_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_54ab44cef19f7c1e9eba4b1bab52434d64a1dd6c4a61b91c4f9bb28bec290a0b = $this->env->getExtension("native_profiler");
        $__internal_54ab44cef19f7c1e9eba4b1bab52434d64a1dd6c4a61b91c4f9bb28bec290a0b->enter($__internal_54ab44cef19f7c1e9eba4b1bab52434d64a1dd6c4a61b91c4f9bb28bec290a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_54ab44cef19f7c1e9eba4b1bab52434d64a1dd6c4a61b91c4f9bb28bec290a0b->leave($__internal_54ab44cef19f7c1e9eba4b1bab52434d64a1dd6c4a61b91c4f9bb28bec290a0b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_16a2bb460d19b6d215f0d95cccaed2dbee145e75878ee6d8c82a8070601edb3b = $this->env->getExtension("native_profiler");
        $__internal_16a2bb460d19b6d215f0d95cccaed2dbee145e75878ee6d8c82a8070601edb3b->enter($__internal_16a2bb460d19b6d215f0d95cccaed2dbee145e75878ee6d8c82a8070601edb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_16a2bb460d19b6d215f0d95cccaed2dbee145e75878ee6d8c82a8070601edb3b->leave($__internal_16a2bb460d19b6d215f0d95cccaed2dbee145e75878ee6d8c82a8070601edb3b_prof);

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
