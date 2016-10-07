<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b5bbc01adf1a7ce19a5e402545bfbb2e275723022f4c52499ef6f975ccd4c129 extends Twig_Template
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
        $__internal_b80cb1ed225f3309cac09f883bfdea41c77520e3a0100805d3590b4c6d38ee52 = $this->env->getExtension("native_profiler");
        $__internal_b80cb1ed225f3309cac09f883bfdea41c77520e3a0100805d3590b4c6d38ee52->enter($__internal_b80cb1ed225f3309cac09f883bfdea41c77520e3a0100805d3590b4c6d38ee52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_b80cb1ed225f3309cac09f883bfdea41c77520e3a0100805d3590b4c6d38ee52->leave($__internal_b80cb1ed225f3309cac09f883bfdea41c77520e3a0100805d3590b4c6d38ee52_prof);

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
