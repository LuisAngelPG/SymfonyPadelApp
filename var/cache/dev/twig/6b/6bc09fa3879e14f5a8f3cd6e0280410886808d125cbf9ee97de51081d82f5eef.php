<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c2ebaa2a1795a358b3ef0091632414ff7c9ba65d4d54b6e320c40a509f9ebe2c extends Twig_Template
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
        $__internal_0ad264de09581f2521e6308ea66c2f12bc81e09cbabd3c4d844cbfd310578bad = $this->env->getExtension("native_profiler");
        $__internal_0ad264de09581f2521e6308ea66c2f12bc81e09cbabd3c4d844cbfd310578bad->enter($__internal_0ad264de09581f2521e6308ea66c2f12bc81e09cbabd3c4d844cbfd310578bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0ad264de09581f2521e6308ea66c2f12bc81e09cbabd3c4d844cbfd310578bad->leave($__internal_0ad264de09581f2521e6308ea66c2f12bc81e09cbabd3c4d844cbfd310578bad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
