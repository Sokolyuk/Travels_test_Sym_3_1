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
        $__internal_fc35b7db14eeb84e430bf9fb915ae52fbe082621316c104c4904bba5f1b89d1c = $this->env->getExtension("native_profiler");
        $__internal_fc35b7db14eeb84e430bf9fb915ae52fbe082621316c104c4904bba5f1b89d1c->enter($__internal_fc35b7db14eeb84e430bf9fb915ae52fbe082621316c104c4904bba5f1b89d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fc35b7db14eeb84e430bf9fb915ae52fbe082621316c104c4904bba5f1b89d1c->leave($__internal_fc35b7db14eeb84e430bf9fb915ae52fbe082621316c104c4904bba5f1b89d1c_prof);

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
