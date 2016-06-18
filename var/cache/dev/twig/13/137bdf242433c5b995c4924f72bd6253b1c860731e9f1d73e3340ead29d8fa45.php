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
        $__internal_cc6ba11ad5d2b74529e35bcf651e3ce6670d62b218c9478ee6fa020dff652bbc = $this->env->getExtension("native_profiler");
        $__internal_cc6ba11ad5d2b74529e35bcf651e3ce6670d62b218c9478ee6fa020dff652bbc->enter($__internal_cc6ba11ad5d2b74529e35bcf651e3ce6670d62b218c9478ee6fa020dff652bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cc6ba11ad5d2b74529e35bcf651e3ce6670d62b218c9478ee6fa020dff652bbc->leave($__internal_cc6ba11ad5d2b74529e35bcf651e3ce6670d62b218c9478ee6fa020dff652bbc_prof);

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
