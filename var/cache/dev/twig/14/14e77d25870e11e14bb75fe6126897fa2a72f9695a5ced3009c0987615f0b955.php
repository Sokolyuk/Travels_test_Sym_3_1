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
        $__internal_4c2178d10f84fa5a726d5c3efdcb51a05bca0534dbff1f90d8f782d1d789f8b5 = $this->env->getExtension("native_profiler");
        $__internal_4c2178d10f84fa5a726d5c3efdcb51a05bca0534dbff1f90d8f782d1d789f8b5->enter($__internal_4c2178d10f84fa5a726d5c3efdcb51a05bca0534dbff1f90d8f782d1d789f8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_4c2178d10f84fa5a726d5c3efdcb51a05bca0534dbff1f90d8f782d1d789f8b5->leave($__internal_4c2178d10f84fa5a726d5c3efdcb51a05bca0534dbff1f90d8f782d1d789f8b5_prof);

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
