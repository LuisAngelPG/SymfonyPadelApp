<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2752cbe965ecb6000d3fd6eaa02ca1ae1cc2c0c6cd2d6e0ddc05466f25392685 extends Twig_Template
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
        $__internal_b82e899b72f07c56717226b104a29383e0f5b710672beddf0200f2b17c37fa1f = $this->env->getExtension("native_profiler");
        $__internal_b82e899b72f07c56717226b104a29383e0f5b710672beddf0200f2b17c37fa1f->enter($__internal_b82e899b72f07c56717226b104a29383e0f5b710672beddf0200f2b17c37fa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b82e899b72f07c56717226b104a29383e0f5b710672beddf0200f2b17c37fa1f->leave($__internal_b82e899b72f07c56717226b104a29383e0f5b710672beddf0200f2b17c37fa1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
