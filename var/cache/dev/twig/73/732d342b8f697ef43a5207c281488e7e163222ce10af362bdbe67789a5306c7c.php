<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9deb89270795afe35782fa315eaa8a9b128366f2083734e7af0777cee6eb560f extends Twig_Template
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
        $__internal_d50d3c7f0d44d8e782e1c7a69d46ea865fd8e605df0a12e91ea5d2f57e92ddfb = $this->env->getExtension("native_profiler");
        $__internal_d50d3c7f0d44d8e782e1c7a69d46ea865fd8e605df0a12e91ea5d2f57e92ddfb->enter($__internal_d50d3c7f0d44d8e782e1c7a69d46ea865fd8e605df0a12e91ea5d2f57e92ddfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d50d3c7f0d44d8e782e1c7a69d46ea865fd8e605df0a12e91ea5d2f57e92ddfb->leave($__internal_d50d3c7f0d44d8e782e1c7a69d46ea865fd8e605df0a12e91ea5d2f57e92ddfb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
