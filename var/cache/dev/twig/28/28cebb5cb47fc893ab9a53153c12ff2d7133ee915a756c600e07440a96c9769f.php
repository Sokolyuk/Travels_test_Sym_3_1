<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c02de53a3ab2ce0c5fc64218d95784bb002c4a2cd8aebf0f315ceede29f882d3 extends Twig_Template
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
        $__internal_d0978a7b653a00c321b2e9f5de8c4ae897c971483dc593d4307dea74c7b08d33 = $this->env->getExtension("native_profiler");
        $__internal_d0978a7b653a00c321b2e9f5de8c4ae897c971483dc593d4307dea74c7b08d33->enter($__internal_d0978a7b653a00c321b2e9f5de8c4ae897c971483dc593d4307dea74c7b08d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d0978a7b653a00c321b2e9f5de8c4ae897c971483dc593d4307dea74c7b08d33->leave($__internal_d0978a7b653a00c321b2e9f5de8c4ae897c971483dc593d4307dea74c7b08d33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
