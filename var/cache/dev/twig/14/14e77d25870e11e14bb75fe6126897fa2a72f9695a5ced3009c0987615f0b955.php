<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a9c19cc241a5af5d4fe0f1e43c1b350e62da13ce2b6a39193959199ddc5e49ab extends Twig_Template
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
        $__internal_624cd666117380e341b72530d944c30008b2ea3c9ae4cd73530a7f1c41bcf5b4 = $this->env->getExtension("native_profiler");
        $__internal_624cd666117380e341b72530d944c30008b2ea3c9ae4cd73530a7f1c41bcf5b4->enter($__internal_624cd666117380e341b72530d944c30008b2ea3c9ae4cd73530a7f1c41bcf5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_624cd666117380e341b72530d944c30008b2ea3c9ae4cd73530a7f1c41bcf5b4->leave($__internal_624cd666117380e341b72530d944c30008b2ea3c9ae4cd73530a7f1c41bcf5b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
