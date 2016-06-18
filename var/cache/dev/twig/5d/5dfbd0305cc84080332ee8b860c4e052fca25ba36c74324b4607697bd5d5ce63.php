<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e0a36222681cefea8003549f76ff73a98dd81c838c53f0680a7a11c1d6b381fc extends Twig_Template
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
        $__internal_7e981eda336c4407eeca65e83c0f204370c953b77457e71b6cdc9e1315049eb8 = $this->env->getExtension("native_profiler");
        $__internal_7e981eda336c4407eeca65e83c0f204370c953b77457e71b6cdc9e1315049eb8->enter($__internal_7e981eda336c4407eeca65e83c0f204370c953b77457e71b6cdc9e1315049eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7e981eda336c4407eeca65e83c0f204370c953b77457e71b6cdc9e1315049eb8->leave($__internal_7e981eda336c4407eeca65e83c0f204370c953b77457e71b6cdc9e1315049eb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
