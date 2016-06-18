<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_46b2ee1da09e8cb26885d5bc7d1951319bc6aeb5365282c70dda6d9846f7ec14 extends Twig_Template
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
        $__internal_d051cb0f8a3f14a09b984cf7f2ced2818671890095071f1cd53a04543389d165 = $this->env->getExtension("native_profiler");
        $__internal_d051cb0f8a3f14a09b984cf7f2ced2818671890095071f1cd53a04543389d165->enter($__internal_d051cb0f8a3f14a09b984cf7f2ced2818671890095071f1cd53a04543389d165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d051cb0f8a3f14a09b984cf7f2ced2818671890095071f1cd53a04543389d165->leave($__internal_d051cb0f8a3f14a09b984cf7f2ced2818671890095071f1cd53a04543389d165_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
