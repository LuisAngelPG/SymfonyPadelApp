<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3dfaff96422263a3e4ad34d5b63f88c24710a3fc06075e7587dc7f0e62851c3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16a20d640f16eb1a05c9aadd695c8e0686ec73fbfec4707ce57f5142340bc582 = $this->env->getExtension("native_profiler");
        $__internal_16a20d640f16eb1a05c9aadd695c8e0686ec73fbfec4707ce57f5142340bc582->enter($__internal_16a20d640f16eb1a05c9aadd695c8e0686ec73fbfec4707ce57f5142340bc582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16a20d640f16eb1a05c9aadd695c8e0686ec73fbfec4707ce57f5142340bc582->leave($__internal_16a20d640f16eb1a05c9aadd695c8e0686ec73fbfec4707ce57f5142340bc582_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3480b26b2c0abe98cbaa0d50b4f178e67e3d197f719ddfcafcab724918e56501 = $this->env->getExtension("native_profiler");
        $__internal_3480b26b2c0abe98cbaa0d50b4f178e67e3d197f719ddfcafcab724918e56501->enter($__internal_3480b26b2c0abe98cbaa0d50b4f178e67e3d197f719ddfcafcab724918e56501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3480b26b2c0abe98cbaa0d50b4f178e67e3d197f719ddfcafcab724918e56501->leave($__internal_3480b26b2c0abe98cbaa0d50b4f178e67e3d197f719ddfcafcab724918e56501_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b33180e5771be62401ed8e69ab56a60f7735d46b67e593717bde2b87d9da53b4 = $this->env->getExtension("native_profiler");
        $__internal_b33180e5771be62401ed8e69ab56a60f7735d46b67e593717bde2b87d9da53b4->enter($__internal_b33180e5771be62401ed8e69ab56a60f7735d46b67e593717bde2b87d9da53b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b33180e5771be62401ed8e69ab56a60f7735d46b67e593717bde2b87d9da53b4->leave($__internal_b33180e5771be62401ed8e69ab56a60f7735d46b67e593717bde2b87d9da53b4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef3f0ccb6dd566b31c7f59339cfd66df399b96c2daa19bcf3d1cf389e7ac0849 = $this->env->getExtension("native_profiler");
        $__internal_ef3f0ccb6dd566b31c7f59339cfd66df399b96c2daa19bcf3d1cf389e7ac0849->enter($__internal_ef3f0ccb6dd566b31c7f59339cfd66df399b96c2daa19bcf3d1cf389e7ac0849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ef3f0ccb6dd566b31c7f59339cfd66df399b96c2daa19bcf3d1cf389e7ac0849->leave($__internal_ef3f0ccb6dd566b31c7f59339cfd66df399b96c2daa19bcf3d1cf389e7ac0849_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
