<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0aac27057c0ffd136dcadcfb1371a2a92931caa7c36e113adba5d73a62bf0120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_0fbe8913d28aa767d3f8d6bf01c48ffcc53c8687111a23a07244573e347344fa = $this->env->getExtension("native_profiler");
        $__internal_0fbe8913d28aa767d3f8d6bf01c48ffcc53c8687111a23a07244573e347344fa->enter($__internal_0fbe8913d28aa767d3f8d6bf01c48ffcc53c8687111a23a07244573e347344fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fbe8913d28aa767d3f8d6bf01c48ffcc53c8687111a23a07244573e347344fa->leave($__internal_0fbe8913d28aa767d3f8d6bf01c48ffcc53c8687111a23a07244573e347344fa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2b7aa1cf719ef8c7a66b2f0bf862d936094af4607fd5778bd316838ca190750e = $this->env->getExtension("native_profiler");
        $__internal_2b7aa1cf719ef8c7a66b2f0bf862d936094af4607fd5778bd316838ca190750e->enter($__internal_2b7aa1cf719ef8c7a66b2f0bf862d936094af4607fd5778bd316838ca190750e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2b7aa1cf719ef8c7a66b2f0bf862d936094af4607fd5778bd316838ca190750e->leave($__internal_2b7aa1cf719ef8c7a66b2f0bf862d936094af4607fd5778bd316838ca190750e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_785c132a06bf4404b02e4097069d3377a76327f7e3b4beb03ab78abb7218c48a = $this->env->getExtension("native_profiler");
        $__internal_785c132a06bf4404b02e4097069d3377a76327f7e3b4beb03ab78abb7218c48a->enter($__internal_785c132a06bf4404b02e4097069d3377a76327f7e3b4beb03ab78abb7218c48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_785c132a06bf4404b02e4097069d3377a76327f7e3b4beb03ab78abb7218c48a->leave($__internal_785c132a06bf4404b02e4097069d3377a76327f7e3b4beb03ab78abb7218c48a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef97341b2100a4017a78339762d4c14cc541ae356fa7593595f0d1a3a68424e6 = $this->env->getExtension("native_profiler");
        $__internal_ef97341b2100a4017a78339762d4c14cc541ae356fa7593595f0d1a3a68424e6->enter($__internal_ef97341b2100a4017a78339762d4c14cc541ae356fa7593595f0d1a3a68424e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ef97341b2100a4017a78339762d4c14cc541ae356fa7593595f0d1a3a68424e6->leave($__internal_ef97341b2100a4017a78339762d4c14cc541ae356fa7593595f0d1a3a68424e6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
