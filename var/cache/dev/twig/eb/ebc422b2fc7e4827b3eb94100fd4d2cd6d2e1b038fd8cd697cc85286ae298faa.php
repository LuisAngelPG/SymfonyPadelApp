<?php

/* :security:activateAccount.html.twig */
class __TwigTemplate_693177425ff7befd0ecb9499128a28d6ef1f1738abbe0708369bb47852a97b1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", ":security:activateAccount.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e298517b92293f7bdaaaa1a68058bdfc780713ca8ae04b0c35748c9c96b1e613 = $this->env->getExtension("native_profiler");
        $__internal_e298517b92293f7bdaaaa1a68058bdfc780713ca8ae04b0c35748c9c96b1e613->enter($__internal_e298517b92293f7bdaaaa1a68058bdfc780713ca8ae04b0c35748c9c96b1e613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:activateAccount.html.twig"));

        // line 2
        $context["active"] =  -1;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e298517b92293f7bdaaaa1a68058bdfc780713ca8ae04b0c35748c9c96b1e613->leave($__internal_e298517b92293f7bdaaaa1a68058bdfc780713ca8ae04b0c35748c9c96b1e613_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c00620cbc81cad96570d32d24dfd4222699b8dfe2acb80fae677f79565ed4797 = $this->env->getExtension("native_profiler");
        $__internal_c00620cbc81cad96570d32d24dfd4222699b8dfe2acb80fae677f79565ed4797->enter($__internal_c00620cbc81cad96570d32d24dfd4222699b8dfe2acb80fae677f79565ed4797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "activated
";
        
        $__internal_c00620cbc81cad96570d32d24dfd4222699b8dfe2acb80fae677f79565ed4797->leave($__internal_c00620cbc81cad96570d32d24dfd4222699b8dfe2acb80fae677f79565ed4797_prof);

    }

    public function getTemplateName()
    {
        return ":security:activateAccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = -1 %}*/
/* {% block body %}*/
/* activated*/
/* {% endblock %}*/
