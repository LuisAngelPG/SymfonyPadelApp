<?php

/* emails/activationLink.html.twig */
class __TwigTemplate_5beeb828900673f3b2ff19b2a107fffdc45907cca4ce7ac9073b54edfd088cfd extends Twig_Template
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
        $__internal_d53b3b7999e02ab1c9d71a903f7653dbe2db2f6dfc3ce9d48632f520f9330be2 = $this->env->getExtension("native_profiler");
        $__internal_d53b3b7999e02ab1c9d71a903f7653dbe2db2f6dfc3ce9d48632f520f9330be2->enter($__internal_d53b3b7999e02ab1c9d71a903f7653dbe2db2f6dfc3ce9d48632f520f9330be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/activationLink.html.twig"));

        // line 1
        echo "Click on this <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
        echo "\">link</a> to activate your account.";
        
        $__internal_d53b3b7999e02ab1c9d71a903f7653dbe2db2f6dfc3ce9d48632f520f9330be2->leave($__internal_d53b3b7999e02ab1c9d71a903f7653dbe2db2f6dfc3ce9d48632f520f9330be2_prof);

    }

    public function getTemplateName()
    {
        return "emails/activationLink.html.twig";
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
/* Click on this <a href="{{link}}">link</a> to activate your account.*/
