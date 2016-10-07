<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_674b99b1a57e72a1e70f446b1e54aac5ba1ef426a552ff7ea12d6c5b45cbfbba extends Twig_Template
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
        $__internal_990a533f256f38caad241d0ba3d0153317798f4cff1ef91cac8a4c455550c02f = $this->env->getExtension("native_profiler");
        $__internal_990a533f256f38caad241d0ba3d0153317798f4cff1ef91cac8a4c455550c02f->enter($__internal_990a533f256f38caad241d0ba3d0153317798f4cff1ef91cac8a4c455550c02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_990a533f256f38caad241d0ba3d0153317798f4cff1ef91cac8a4c455550c02f->leave($__internal_990a533f256f38caad241d0ba3d0153317798f4cff1ef91cac8a4c455550c02f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
