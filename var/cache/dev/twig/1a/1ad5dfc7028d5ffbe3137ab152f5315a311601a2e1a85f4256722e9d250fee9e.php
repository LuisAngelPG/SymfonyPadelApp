<?php

/* :user:resetPassword.html.twig */
class __TwigTemplate_75266db2cff2807fbe2f6f37e2cb22c1554b5d4767f2b5dff64a5cb537caaa9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", ":user:resetPassword.html.twig", 1);
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
        $__internal_b863711ba7158cd389b1e80e57b4597b3f4875e855f73ce22d581a73df4abda4 = $this->env->getExtension("native_profiler");
        $__internal_b863711ba7158cd389b1e80e57b4597b3f4875e855f73ce22d581a73df4abda4->enter($__internal_b863711ba7158cd389b1e80e57b4597b3f4875e855f73ce22d581a73df4abda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:resetPassword.html.twig"));

        // line 2
        $context["active"] = 5;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b863711ba7158cd389b1e80e57b4597b3f4875e855f73ce22d581a73df4abda4->leave($__internal_b863711ba7158cd389b1e80e57b4597b3f4875e855f73ce22d581a73df4abda4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d99080a3f82bc56050747c03aefb6dd8af87a00fb9a6b60fe68ffd019c23395 = $this->env->getExtension("native_profiler");
        $__internal_8d99080a3f82bc56050747c03aefb6dd8af87a00fb9a6b60fe68ffd019c23395->enter($__internal_8d99080a3f82bc56050747c03aefb6dd8af87a00fb9a6b60fe68ffd019c23395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container rounded-box\">
\t\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("sendPasswordResetLink");
        echo "\">Reset your password</a>
\t</div>
";
        
        $__internal_8d99080a3f82bc56050747c03aefb6dd8af87a00fb9a6b60fe68ffd019c23395->leave($__internal_8d99080a3f82bc56050747c03aefb6dd8af87a00fb9a6b60fe68ffd019c23395_prof);

    }

    public function getTemplateName()
    {
        return ":user:resetPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = 5 %}*/
/* {% block body %}*/
/* 	<div class="container rounded-box">*/
/* 		<a href="{{path('sendPasswordResetLink')}}">Reset your password</a>*/
/* 	</div>*/
/* {% endblock %}*/
