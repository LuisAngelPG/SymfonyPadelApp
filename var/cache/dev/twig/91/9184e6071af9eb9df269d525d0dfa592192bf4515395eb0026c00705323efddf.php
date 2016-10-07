<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_6653ea7d404ef64804615c46882c0a33ebf4780b7371bf81820a4878893cb92b extends Twig_Template
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
        $__internal_c3e4ed98285fd0e804c9a28d7d36ec3a692f109180d3e8f1a74388ba773e8489 = $this->env->getExtension("native_profiler");
        $__internal_c3e4ed98285fd0e804c9a28d7d36ec3a692f109180d3e8f1a74388ba773e8489->enter($__internal_c3e4ed98285fd0e804c9a28d7d36ec3a692f109180d3e8f1a74388ba773e8489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c3e4ed98285fd0e804c9a28d7d36ec3a692f109180d3e8f1a74388ba773e8489->leave($__internal_c3e4ed98285fd0e804c9a28d7d36ec3a692f109180d3e8f1a74388ba773e8489_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
