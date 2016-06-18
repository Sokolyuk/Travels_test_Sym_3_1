<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_571f7a9fdf996ba1ce6d4695fee741fb564826470faa9b695989292daa43ac33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_4db6df7d130e404013678d063524549c520f990153c54604d15d8d2f92ef090a = $this->env->getExtension("native_profiler");
        $__internal_4db6df7d130e404013678d063524549c520f990153c54604d15d8d2f92ef090a->enter($__internal_4db6df7d130e404013678d063524549c520f990153c54604d15d8d2f92ef090a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4db6df7d130e404013678d063524549c520f990153c54604d15d8d2f92ef090a->leave($__internal_4db6df7d130e404013678d063524549c520f990153c54604d15d8d2f92ef090a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cf56a63ff302557969ba72fe086ae390d7a03c77e9c6721ce40c7ce08249c5a6 = $this->env->getExtension("native_profiler");
        $__internal_cf56a63ff302557969ba72fe086ae390d7a03c77e9c6721ce40c7ce08249c5a6->enter($__internal_cf56a63ff302557969ba72fe086ae390d7a03c77e9c6721ce40c7ce08249c5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cf56a63ff302557969ba72fe086ae390d7a03c77e9c6721ce40c7ce08249c5a6->leave($__internal_cf56a63ff302557969ba72fe086ae390d7a03c77e9c6721ce40c7ce08249c5a6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_73954d9b9431ef5452ecc77d26b128aac943893efcb1e452c22da7171a9b862d = $this->env->getExtension("native_profiler");
        $__internal_73954d9b9431ef5452ecc77d26b128aac943893efcb1e452c22da7171a9b862d->enter($__internal_73954d9b9431ef5452ecc77d26b128aac943893efcb1e452c22da7171a9b862d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_73954d9b9431ef5452ecc77d26b128aac943893efcb1e452c22da7171a9b862d->leave($__internal_73954d9b9431ef5452ecc77d26b128aac943893efcb1e452c22da7171a9b862d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_56afd3de61b43de6746feade877048be4feb9074d58e7e6d9a441aea4ab3b491 = $this->env->getExtension("native_profiler");
        $__internal_56afd3de61b43de6746feade877048be4feb9074d58e7e6d9a441aea4ab3b491->enter($__internal_56afd3de61b43de6746feade877048be4feb9074d58e7e6d9a441aea4ab3b491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_56afd3de61b43de6746feade877048be4feb9074d58e7e6d9a441aea4ab3b491->leave($__internal_56afd3de61b43de6746feade877048be4feb9074d58e7e6d9a441aea4ab3b491_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
