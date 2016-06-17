<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_fe13c1eb7e6bd762c3ad361b3a0657c98bd17488f8bd0511e05cea409824ef8d extends Twig_Template
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
        $__internal_7d8d4c297908624217d4cd3d4686f40c81d0bda5151cd5799e4f2435736f11f2 = $this->env->getExtension("native_profiler");
        $__internal_7d8d4c297908624217d4cd3d4686f40c81d0bda5151cd5799e4f2435736f11f2->enter($__internal_7d8d4c297908624217d4cd3d4686f40c81d0bda5151cd5799e4f2435736f11f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7d8d4c297908624217d4cd3d4686f40c81d0bda5151cd5799e4f2435736f11f2->leave($__internal_7d8d4c297908624217d4cd3d4686f40c81d0bda5151cd5799e4f2435736f11f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
