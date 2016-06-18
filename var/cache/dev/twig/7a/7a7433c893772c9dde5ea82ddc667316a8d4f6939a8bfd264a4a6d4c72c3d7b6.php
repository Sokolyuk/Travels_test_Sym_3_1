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
        $__internal_eb9f1966a5d788ac4f4a5c740d39ae3420e2c39cb915bb5904d069e7fe0cb7b3 = $this->env->getExtension("native_profiler");
        $__internal_eb9f1966a5d788ac4f4a5c740d39ae3420e2c39cb915bb5904d069e7fe0cb7b3->enter($__internal_eb9f1966a5d788ac4f4a5c740d39ae3420e2c39cb915bb5904d069e7fe0cb7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_eb9f1966a5d788ac4f4a5c740d39ae3420e2c39cb915bb5904d069e7fe0cb7b3->leave($__internal_eb9f1966a5d788ac4f4a5c740d39ae3420e2c39cb915bb5904d069e7fe0cb7b3_prof);

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
