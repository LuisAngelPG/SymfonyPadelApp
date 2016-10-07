<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ca8d0242bdc936bf4304c45375123376940e477f7aafee955fcc2cdc3a483e8f extends Twig_Template
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
        $__internal_3ef8ecdfa4143161dcba63885657a383467428d6675b420f03cbed0c4d2bc95f = $this->env->getExtension("native_profiler");
        $__internal_3ef8ecdfa4143161dcba63885657a383467428d6675b420f03cbed0c4d2bc95f->enter($__internal_3ef8ecdfa4143161dcba63885657a383467428d6675b420f03cbed0c4d2bc95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3ef8ecdfa4143161dcba63885657a383467428d6675b420f03cbed0c4d2bc95f->leave($__internal_3ef8ecdfa4143161dcba63885657a383467428d6675b420f03cbed0c4d2bc95f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
