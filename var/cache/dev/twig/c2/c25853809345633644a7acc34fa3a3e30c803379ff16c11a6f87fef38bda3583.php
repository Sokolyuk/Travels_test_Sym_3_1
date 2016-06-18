<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1e4c9fca1312d54ea02427b01be9ca8d2f2d84242b52e57c6353e2504a3432ef extends Twig_Template
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
        $__internal_328ff1bc723a2087524857026b2c99040e9f0fa96f792c3b1c9b66b7e4b61f34 = $this->env->getExtension("native_profiler");
        $__internal_328ff1bc723a2087524857026b2c99040e9f0fa96f792c3b1c9b66b7e4b61f34->enter($__internal_328ff1bc723a2087524857026b2c99040e9f0fa96f792c3b1c9b66b7e4b61f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_328ff1bc723a2087524857026b2c99040e9f0fa96f792c3b1c9b66b7e4b61f34->leave($__internal_328ff1bc723a2087524857026b2c99040e9f0fa96f792c3b1c9b66b7e4b61f34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
