<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4b8cea51323d20af4622fdfb5517a62b4966c34f5f0a3858d8d4cf410b4f1882 extends Twig_Template
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
        $__internal_7bef0f1f159de5dbf99a8ff92c4a2f75a2cbf03759f9b485e5d38972461579fc = $this->env->getExtension("native_profiler");
        $__internal_7bef0f1f159de5dbf99a8ff92c4a2f75a2cbf03759f9b485e5d38972461579fc->enter($__internal_7bef0f1f159de5dbf99a8ff92c4a2f75a2cbf03759f9b485e5d38972461579fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7bef0f1f159de5dbf99a8ff92c4a2f75a2cbf03759f9b485e5d38972461579fc->leave($__internal_7bef0f1f159de5dbf99a8ff92c4a2f75a2cbf03759f9b485e5d38972461579fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
