<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0405916d420250e2115df3961528df142c25330fa1e94dbb2e27ab5e201c1d6c extends Twig_Template
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
        $__internal_61e36bbcb49e64befddfa4cd4e88e016770fa9011dc8c3f6ae070e3f70dbe9af = $this->env->getExtension("native_profiler");
        $__internal_61e36bbcb49e64befddfa4cd4e88e016770fa9011dc8c3f6ae070e3f70dbe9af->enter($__internal_61e36bbcb49e64befddfa4cd4e88e016770fa9011dc8c3f6ae070e3f70dbe9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_61e36bbcb49e64befddfa4cd4e88e016770fa9011dc8c3f6ae070e3f70dbe9af->leave($__internal_61e36bbcb49e64befddfa4cd4e88e016770fa9011dc8c3f6ae070e3f70dbe9af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
