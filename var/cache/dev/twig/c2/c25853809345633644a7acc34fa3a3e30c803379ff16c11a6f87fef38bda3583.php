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
        $__internal_cb6ebcc10ad28c24f1a8036a3875f06228f5953b670d84211fbe44f5ad5e6e8e = $this->env->getExtension("native_profiler");
        $__internal_cb6ebcc10ad28c24f1a8036a3875f06228f5953b670d84211fbe44f5ad5e6e8e->enter($__internal_cb6ebcc10ad28c24f1a8036a3875f06228f5953b670d84211fbe44f5ad5e6e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_cb6ebcc10ad28c24f1a8036a3875f06228f5953b670d84211fbe44f5ad5e6e8e->leave($__internal_cb6ebcc10ad28c24f1a8036a3875f06228f5953b670d84211fbe44f5ad5e6e8e_prof);

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
