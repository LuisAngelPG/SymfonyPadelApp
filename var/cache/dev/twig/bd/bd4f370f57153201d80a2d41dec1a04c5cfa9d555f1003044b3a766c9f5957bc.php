<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_93631de77b40c9251c97296c3aa235a530c7bf8eee0d9d503759199ed1066b37 extends Twig_Template
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
        $__internal_dc5ba258409ce762f07928e1b7072784eada8565c06bdfc56e6084f6884fd119 = $this->env->getExtension("native_profiler");
        $__internal_dc5ba258409ce762f07928e1b7072784eada8565c06bdfc56e6084f6884fd119->enter($__internal_dc5ba258409ce762f07928e1b7072784eada8565c06bdfc56e6084f6884fd119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_dc5ba258409ce762f07928e1b7072784eada8565c06bdfc56e6084f6884fd119->leave($__internal_dc5ba258409ce762f07928e1b7072784eada8565c06bdfc56e6084f6884fd119_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
