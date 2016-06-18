<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a48b5fb29372b8ef6778523ca4876155d7024227a02851cdfc2d36f64cd7aaeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5863b27170ada8653b65ab13ec93642b722f86d28b2f48041ef9be36c06e315 = $this->env->getExtension("native_profiler");
        $__internal_f5863b27170ada8653b65ab13ec93642b722f86d28b2f48041ef9be36c06e315->enter($__internal_f5863b27170ada8653b65ab13ec93642b722f86d28b2f48041ef9be36c06e315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5863b27170ada8653b65ab13ec93642b722f86d28b2f48041ef9be36c06e315->leave($__internal_f5863b27170ada8653b65ab13ec93642b722f86d28b2f48041ef9be36c06e315_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2cef23fe7ca535099b538c15501fa73c46781fddbd8326e580e94a66a52f021f = $this->env->getExtension("native_profiler");
        $__internal_2cef23fe7ca535099b538c15501fa73c46781fddbd8326e580e94a66a52f021f->enter($__internal_2cef23fe7ca535099b538c15501fa73c46781fddbd8326e580e94a66a52f021f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2cef23fe7ca535099b538c15501fa73c46781fddbd8326e580e94a66a52f021f->leave($__internal_2cef23fe7ca535099b538c15501fa73c46781fddbd8326e580e94a66a52f021f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aded96f7d695cf1acde332617e490b9f7cf0a0c84dc7e56b63b5f00b6700a824 = $this->env->getExtension("native_profiler");
        $__internal_aded96f7d695cf1acde332617e490b9f7cf0a0c84dc7e56b63b5f00b6700a824->enter($__internal_aded96f7d695cf1acde332617e490b9f7cf0a0c84dc7e56b63b5f00b6700a824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_aded96f7d695cf1acde332617e490b9f7cf0a0c84dc7e56b63b5f00b6700a824->leave($__internal_aded96f7d695cf1acde332617e490b9f7cf0a0c84dc7e56b63b5f00b6700a824_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ca7e072c68082831138b5e8ed47d14799410d387eec28e86e310d280f8e3c2d = $this->env->getExtension("native_profiler");
        $__internal_4ca7e072c68082831138b5e8ed47d14799410d387eec28e86e310d280f8e3c2d->enter($__internal_4ca7e072c68082831138b5e8ed47d14799410d387eec28e86e310d280f8e3c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4ca7e072c68082831138b5e8ed47d14799410d387eec28e86e310d280f8e3c2d->leave($__internal_4ca7e072c68082831138b5e8ed47d14799410d387eec28e86e310d280f8e3c2d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
