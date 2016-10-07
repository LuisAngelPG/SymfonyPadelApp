<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_718d322988ee8fb44fdc0559447e97325e7bd2a1eb9142126e3dfe2c84bad02d extends Twig_Template
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
        $__internal_0c1396852f4a911fa22795772f088ef79571f94be16dbabde64bb17c20126c0b = $this->env->getExtension("native_profiler");
        $__internal_0c1396852f4a911fa22795772f088ef79571f94be16dbabde64bb17c20126c0b->enter($__internal_0c1396852f4a911fa22795772f088ef79571f94be16dbabde64bb17c20126c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0c1396852f4a911fa22795772f088ef79571f94be16dbabde64bb17c20126c0b->leave($__internal_0c1396852f4a911fa22795772f088ef79571f94be16dbabde64bb17c20126c0b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
