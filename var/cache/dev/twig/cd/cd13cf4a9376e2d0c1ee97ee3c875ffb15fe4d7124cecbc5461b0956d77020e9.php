<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_baa189e8621c5fe7ddc4343995e95182b2dc7d6748caa4989552a9d916a259b0 extends Twig_Template
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
        $__internal_9bbb13c40d2f6569a5fb635d9ed3316371f65296de8ad15daa6ff7890be12d96 = $this->env->getExtension("native_profiler");
        $__internal_9bbb13c40d2f6569a5fb635d9ed3316371f65296de8ad15daa6ff7890be12d96->enter($__internal_9bbb13c40d2f6569a5fb635d9ed3316371f65296de8ad15daa6ff7890be12d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9bbb13c40d2f6569a5fb635d9ed3316371f65296de8ad15daa6ff7890be12d96->leave($__internal_9bbb13c40d2f6569a5fb635d9ed3316371f65296de8ad15daa6ff7890be12d96_prof);

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
