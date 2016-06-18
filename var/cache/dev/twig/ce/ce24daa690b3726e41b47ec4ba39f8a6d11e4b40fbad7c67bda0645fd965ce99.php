<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a3493ad47cc69f4f68757089d2fdb9629287cc3817eeae9e9337074d61f52f48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e9058af596b16319a1987340f95c484954bff59f3a44a80a1d7c020724a1489 = $this->env->getExtension("native_profiler");
        $__internal_1e9058af596b16319a1987340f95c484954bff59f3a44a80a1d7c020724a1489->enter($__internal_1e9058af596b16319a1987340f95c484954bff59f3a44a80a1d7c020724a1489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1e9058af596b16319a1987340f95c484954bff59f3a44a80a1d7c020724a1489->leave($__internal_1e9058af596b16319a1987340f95c484954bff59f3a44a80a1d7c020724a1489_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
