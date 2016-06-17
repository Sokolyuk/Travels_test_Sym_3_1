<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3b7c23339d8532910c7b172f53a0a16962a7ca42b53ed0a0ce33e4f2bfe57c33 extends Twig_Template
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
        $__internal_0bfc7099f1a4158b074e8407ded0683c6f456e7324dfaccb69fff3a67b90f96f = $this->env->getExtension("native_profiler");
        $__internal_0bfc7099f1a4158b074e8407ded0683c6f456e7324dfaccb69fff3a67b90f96f->enter($__internal_0bfc7099f1a4158b074e8407ded0683c6f456e7324dfaccb69fff3a67b90f96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_0bfc7099f1a4158b074e8407ded0683c6f456e7324dfaccb69fff3a67b90f96f->leave($__internal_0bfc7099f1a4158b074e8407ded0683c6f456e7324dfaccb69fff3a67b90f96f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
