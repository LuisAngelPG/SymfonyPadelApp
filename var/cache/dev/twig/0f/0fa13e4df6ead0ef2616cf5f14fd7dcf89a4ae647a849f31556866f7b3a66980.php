<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c86074e9d76de08f4446524d21cc5913c115915811456ec27ff65849db255817 extends Twig_Template
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
        $__internal_5888781a8b3d8c1125dd728df3f82da0081dbeb8cb934f27856746686bca276a = $this->env->getExtension("native_profiler");
        $__internal_5888781a8b3d8c1125dd728df3f82da0081dbeb8cb934f27856746686bca276a->enter($__internal_5888781a8b3d8c1125dd728df3f82da0081dbeb8cb934f27856746686bca276a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5888781a8b3d8c1125dd728df3f82da0081dbeb8cb934f27856746686bca276a->leave($__internal_5888781a8b3d8c1125dd728df3f82da0081dbeb8cb934f27856746686bca276a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
