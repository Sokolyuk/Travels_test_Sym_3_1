<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8606405b22c43d3cd70a9c8684390ed65161c4b02b0c0d523309a9ad90905586 extends Twig_Template
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
        $__internal_b4ba5c421896227f4898995c94b4ceb143d5c5afceb26a8d9112c964b9dc2668 = $this->env->getExtension("native_profiler");
        $__internal_b4ba5c421896227f4898995c94b4ceb143d5c5afceb26a8d9112c964b9dc2668->enter($__internal_b4ba5c421896227f4898995c94b4ceb143d5c5afceb26a8d9112c964b9dc2668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b4ba5c421896227f4898995c94b4ceb143d5c5afceb26a8d9112c964b9dc2668->leave($__internal_b4ba5c421896227f4898995c94b4ceb143d5c5afceb26a8d9112c964b9dc2668_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
