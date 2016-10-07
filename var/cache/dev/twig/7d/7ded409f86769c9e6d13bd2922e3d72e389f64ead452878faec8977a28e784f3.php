<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_54d75957e163747017db9c7b480f8de3c15fe59082f27773081e32d138657608 extends Twig_Template
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
        $__internal_d0e50839c655b9ebf094d176abe2eb325aa2b10746c9364b34b1f6657d22cbd7 = $this->env->getExtension("native_profiler");
        $__internal_d0e50839c655b9ebf094d176abe2eb325aa2b10746c9364b34b1f6657d22cbd7->enter($__internal_d0e50839c655b9ebf094d176abe2eb325aa2b10746c9364b34b1f6657d22cbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d0e50839c655b9ebf094d176abe2eb325aa2b10746c9364b34b1f6657d22cbd7->leave($__internal_d0e50839c655b9ebf094d176abe2eb325aa2b10746c9364b34b1f6657d22cbd7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
