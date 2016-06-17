<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c197e81ca8ddbe0228b546c405c81227a01d479c855e3c09bd981a6cc3824ce4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_4580eea363b23fffa00255c5e76d40c3e33918effa3ef5052cce56c3d9fd3968 = $this->env->getExtension("native_profiler");
        $__internal_4580eea363b23fffa00255c5e76d40c3e33918effa3ef5052cce56c3d9fd3968->enter($__internal_4580eea363b23fffa00255c5e76d40c3e33918effa3ef5052cce56c3d9fd3968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4580eea363b23fffa00255c5e76d40c3e33918effa3ef5052cce56c3d9fd3968->leave($__internal_4580eea363b23fffa00255c5e76d40c3e33918effa3ef5052cce56c3d9fd3968_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a66486af876b267231d420a0bfdb505e8be2295ac5d884a32c59a9a5d9984390 = $this->env->getExtension("native_profiler");
        $__internal_a66486af876b267231d420a0bfdb505e8be2295ac5d884a32c59a9a5d9984390->enter($__internal_a66486af876b267231d420a0bfdb505e8be2295ac5d884a32c59a9a5d9984390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a66486af876b267231d420a0bfdb505e8be2295ac5d884a32c59a9a5d9984390->leave($__internal_a66486af876b267231d420a0bfdb505e8be2295ac5d884a32c59a9a5d9984390_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5f4415e7c5a5e87e6718d25b8d215d9af4614b7dee2c4bf8fd66032c6db496ee = $this->env->getExtension("native_profiler");
        $__internal_5f4415e7c5a5e87e6718d25b8d215d9af4614b7dee2c4bf8fd66032c6db496ee->enter($__internal_5f4415e7c5a5e87e6718d25b8d215d9af4614b7dee2c4bf8fd66032c6db496ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5f4415e7c5a5e87e6718d25b8d215d9af4614b7dee2c4bf8fd66032c6db496ee->leave($__internal_5f4415e7c5a5e87e6718d25b8d215d9af4614b7dee2c4bf8fd66032c6db496ee_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f3dc77c61185e1f6bd32ba474dbdf72904dd6243821d07a0c8efe7794d70f8a3 = $this->env->getExtension("native_profiler");
        $__internal_f3dc77c61185e1f6bd32ba474dbdf72904dd6243821d07a0c8efe7794d70f8a3->enter($__internal_f3dc77c61185e1f6bd32ba474dbdf72904dd6243821d07a0c8efe7794d70f8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f3dc77c61185e1f6bd32ba474dbdf72904dd6243821d07a0c8efe7794d70f8a3->leave($__internal_f3dc77c61185e1f6bd32ba474dbdf72904dd6243821d07a0c8efe7794d70f8a3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
