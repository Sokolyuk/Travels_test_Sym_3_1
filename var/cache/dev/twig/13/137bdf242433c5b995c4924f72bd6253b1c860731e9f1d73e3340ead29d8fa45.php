<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f908301b2069e837dab0691212de9ae0f4f1a5071a5e0827099d93defcef79dd extends Twig_Template
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
        $__internal_e0970dba225f339852dcbf2f5ccdf2e6712a7e66549f5a58ace349b97abe52d4 = $this->env->getExtension("native_profiler");
        $__internal_e0970dba225f339852dcbf2f5ccdf2e6712a7e66549f5a58ace349b97abe52d4->enter($__internal_e0970dba225f339852dcbf2f5ccdf2e6712a7e66549f5a58ace349b97abe52d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e0970dba225f339852dcbf2f5ccdf2e6712a7e66549f5a58ace349b97abe52d4->leave($__internal_e0970dba225f339852dcbf2f5ccdf2e6712a7e66549f5a58ace349b97abe52d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
