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
        $__internal_193e7aca7b530bf5b33db8bdae8cc6053d62c1d50ebbac66338baf1eef3f55a4 = $this->env->getExtension("native_profiler");
        $__internal_193e7aca7b530bf5b33db8bdae8cc6053d62c1d50ebbac66338baf1eef3f55a4->enter($__internal_193e7aca7b530bf5b33db8bdae8cc6053d62c1d50ebbac66338baf1eef3f55a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_193e7aca7b530bf5b33db8bdae8cc6053d62c1d50ebbac66338baf1eef3f55a4->leave($__internal_193e7aca7b530bf5b33db8bdae8cc6053d62c1d50ebbac66338baf1eef3f55a4_prof);

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
