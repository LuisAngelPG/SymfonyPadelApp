<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8253ca4f6e2a5141f9a58cb6d150dc4f122a118c659efc5ae96606b4a78e1fc5 extends Twig_Template
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
        $__internal_6a3924ee28dffff75b5a23b7efbbc66e0923082baf0ea8775952227a759652cc = $this->env->getExtension("native_profiler");
        $__internal_6a3924ee28dffff75b5a23b7efbbc66e0923082baf0ea8775952227a759652cc->enter($__internal_6a3924ee28dffff75b5a23b7efbbc66e0923082baf0ea8775952227a759652cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6a3924ee28dffff75b5a23b7efbbc66e0923082baf0ea8775952227a759652cc->leave($__internal_6a3924ee28dffff75b5a23b7efbbc66e0923082baf0ea8775952227a759652cc_prof);

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
