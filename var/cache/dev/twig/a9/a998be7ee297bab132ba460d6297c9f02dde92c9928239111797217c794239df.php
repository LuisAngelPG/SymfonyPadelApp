<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b91de73cb74a593103da579eae8acb55da7ce2001c70b3e164ddf8bae0455f30 extends Twig_Template
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
        $__internal_c8e4c3b1f0d88f2b706486d33a028e06747c8a758adfb7c6769e50ce34a6549f = $this->env->getExtension("native_profiler");
        $__internal_c8e4c3b1f0d88f2b706486d33a028e06747c8a758adfb7c6769e50ce34a6549f->enter($__internal_c8e4c3b1f0d88f2b706486d33a028e06747c8a758adfb7c6769e50ce34a6549f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c8e4c3b1f0d88f2b706486d33a028e06747c8a758adfb7c6769e50ce34a6549f->leave($__internal_c8e4c3b1f0d88f2b706486d33a028e06747c8a758adfb7c6769e50ce34a6549f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
