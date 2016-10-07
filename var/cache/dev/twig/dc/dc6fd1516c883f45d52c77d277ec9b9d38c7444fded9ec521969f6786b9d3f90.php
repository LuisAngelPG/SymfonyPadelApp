<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5ff6da10ec9a60154955c9e0188090521d00cdb794a6bf120ae965d92c488803 extends Twig_Template
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
        $__internal_e15ce6cf5d23acb83e7bf06d105ad093b37697bcd6d3b5c16dca36bf5c5e731c = $this->env->getExtension("native_profiler");
        $__internal_e15ce6cf5d23acb83e7bf06d105ad093b37697bcd6d3b5c16dca36bf5c5e731c->enter($__internal_e15ce6cf5d23acb83e7bf06d105ad093b37697bcd6d3b5c16dca36bf5c5e731c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e15ce6cf5d23acb83e7bf06d105ad093b37697bcd6d3b5c16dca36bf5c5e731c->leave($__internal_e15ce6cf5d23acb83e7bf06d105ad093b37697bcd6d3b5c16dca36bf5c5e731c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
