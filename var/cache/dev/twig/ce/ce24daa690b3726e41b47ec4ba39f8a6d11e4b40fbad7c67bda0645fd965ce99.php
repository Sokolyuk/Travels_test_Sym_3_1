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
        $__internal_1a9aa449dc9b37f3f23a80611ac0cdd3eef8d8f0202c2143984e03f35e759809 = $this->env->getExtension("native_profiler");
        $__internal_1a9aa449dc9b37f3f23a80611ac0cdd3eef8d8f0202c2143984e03f35e759809->enter($__internal_1a9aa449dc9b37f3f23a80611ac0cdd3eef8d8f0202c2143984e03f35e759809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1a9aa449dc9b37f3f23a80611ac0cdd3eef8d8f0202c2143984e03f35e759809->leave($__internal_1a9aa449dc9b37f3f23a80611ac0cdd3eef8d8f0202c2143984e03f35e759809_prof);

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
