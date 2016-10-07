<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_849a7dc55d9c37b03784088acc79b720b8f9fcfc32c951595e502e9473185958 extends Twig_Template
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
        $__internal_d940b0c227c1ba668c7330b7422935245109a4f72359a510c906ecd0911b5833 = $this->env->getExtension("native_profiler");
        $__internal_d940b0c227c1ba668c7330b7422935245109a4f72359a510c906ecd0911b5833->enter($__internal_d940b0c227c1ba668c7330b7422935245109a4f72359a510c906ecd0911b5833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d940b0c227c1ba668c7330b7422935245109a4f72359a510c906ecd0911b5833->leave($__internal_d940b0c227c1ba668c7330b7422935245109a4f72359a510c906ecd0911b5833_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
