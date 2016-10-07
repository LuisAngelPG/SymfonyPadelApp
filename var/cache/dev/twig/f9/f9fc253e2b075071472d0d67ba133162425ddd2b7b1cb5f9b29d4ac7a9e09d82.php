<?php

/* :emails:resetPasswordLink.html.twig */
class __TwigTemplate_315388a5ce9925a03e8beee2d5eca551c0ef23f55217dd8e18aaac53d34d9547 extends Twig_Template
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
        $__internal_0ed4355cf1f414d923efd1cb21198b497d3efb8ff1e759383d4fa3387a50374e = $this->env->getExtension("native_profiler");
        $__internal_0ed4355cf1f414d923efd1cb21198b497d3efb8ff1e759383d4fa3387a50374e->enter($__internal_0ed4355cf1f414d923efd1cb21198b497d3efb8ff1e759383d4fa3387a50374e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":emails:resetPasswordLink.html.twig"));

        // line 1
        echo "Click on this <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
        echo "\">link</a> to reset your password.";
        
        $__internal_0ed4355cf1f414d923efd1cb21198b497d3efb8ff1e759383d4fa3387a50374e->leave($__internal_0ed4355cf1f414d923efd1cb21198b497d3efb8ff1e759383d4fa3387a50374e_prof);

    }

    public function getTemplateName()
    {
        return ":emails:resetPasswordLink.html.twig";
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
/* Click on this <a href="{{link}}">link</a> to reset your password.*/
