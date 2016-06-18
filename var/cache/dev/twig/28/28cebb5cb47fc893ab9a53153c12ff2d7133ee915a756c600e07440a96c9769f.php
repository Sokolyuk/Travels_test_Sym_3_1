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
        $__internal_1c29ee18d16d96ae2da798956bc73bd2354f15eb3c096e4e69f65482de61592f = $this->env->getExtension("native_profiler");
        $__internal_1c29ee18d16d96ae2da798956bc73bd2354f15eb3c096e4e69f65482de61592f->enter($__internal_1c29ee18d16d96ae2da798956bc73bd2354f15eb3c096e4e69f65482de61592f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1c29ee18d16d96ae2da798956bc73bd2354f15eb3c096e4e69f65482de61592f->leave($__internal_1c29ee18d16d96ae2da798956bc73bd2354f15eb3c096e4e69f65482de61592f_prof);

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
