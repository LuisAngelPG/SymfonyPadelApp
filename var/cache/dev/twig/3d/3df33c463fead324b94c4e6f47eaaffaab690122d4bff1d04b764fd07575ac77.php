<?php

/* :security:failActivation.html.twig */
class __TwigTemplate_82d9fa063d0f6553e86e698fcd34d0a2d6e6e4bfb11c7580722dd580903adf71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", ":security:failActivation.html.twig", 1);
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
        $__internal_02b2274fd94315ef17d4933f0ec1299f26e22ea34fd4c44ed4cd9db11fd9f2da = $this->env->getExtension("native_profiler");
        $__internal_02b2274fd94315ef17d4933f0ec1299f26e22ea34fd4c44ed4cd9db11fd9f2da->enter($__internal_02b2274fd94315ef17d4933f0ec1299f26e22ea34fd4c44ed4cd9db11fd9f2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:failActivation.html.twig"));

        // line 2
        $context["active"] =  -1;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02b2274fd94315ef17d4933f0ec1299f26e22ea34fd4c44ed4cd9db11fd9f2da->leave($__internal_02b2274fd94315ef17d4933f0ec1299f26e22ea34fd4c44ed4cd9db11fd9f2da_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd0c8bea7086294777db94734a14c44bbc720ba86beb9d865b281efb2c2814c1 = $this->env->getExtension("native_profiler");
        $__internal_fd0c8bea7086294777db94734a14c44bbc720ba86beb9d865b281efb2c2814c1->enter($__internal_fd0c8bea7086294777db94734a14c44bbc720ba86beb9d865b281efb2c2814c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "fail to activate
";
        
        $__internal_fd0c8bea7086294777db94734a14c44bbc720ba86beb9d865b281efb2c2814c1->leave($__internal_fd0c8bea7086294777db94734a14c44bbc720ba86beb9d865b281efb2c2814c1_prof);

    }

    public function getTemplateName()
    {
        return ":security:failActivation.html.twig";
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
/* fail to activate*/
/* {% endblock %}*/
