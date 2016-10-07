<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2c06bb5ab0c1bf9e699a9d78d63400849a300ee6f288151c2592ec7c78103789 extends Twig_Template
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
        $__internal_efd2d6d16ab8b848fa1908b772f4de9fd5bd067931d905f30e8da83593d62172 = $this->env->getExtension("native_profiler");
        $__internal_efd2d6d16ab8b848fa1908b772f4de9fd5bd067931d905f30e8da83593d62172->enter($__internal_efd2d6d16ab8b848fa1908b772f4de9fd5bd067931d905f30e8da83593d62172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_efd2d6d16ab8b848fa1908b772f4de9fd5bd067931d905f30e8da83593d62172->leave($__internal_efd2d6d16ab8b848fa1908b772f4de9fd5bd067931d905f30e8da83593d62172_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
