<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_4f03ff510aa50a66ed6736cb8af6bb6f6f269e9300577f98337ce03fa26cbce6 extends Twig_Template
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
        $__internal_6397a4c5c5d04aa6b8430516d77e36dec41beb5d0899c2f625d5e61486c7870d = $this->env->getExtension("native_profiler");
        $__internal_6397a4c5c5d04aa6b8430516d77e36dec41beb5d0899c2f625d5e61486c7870d->enter($__internal_6397a4c5c5d04aa6b8430516d77e36dec41beb5d0899c2f625d5e61486c7870d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6397a4c5c5d04aa6b8430516d77e36dec41beb5d0899c2f625d5e61486c7870d->leave($__internal_6397a4c5c5d04aa6b8430516d77e36dec41beb5d0899c2f625d5e61486c7870d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
