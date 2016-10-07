<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c0a681028b455db51edfe30547a3c545eb6252500bf4a40c463448afcf06c6a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbd1f2148b2afe0b142cba43f94e1a1c4c2f92c6ffcc733a449ab08873e2ae84 = $this->env->getExtension("native_profiler");
        $__internal_dbd1f2148b2afe0b142cba43f94e1a1c4c2f92c6ffcc733a449ab08873e2ae84->enter($__internal_dbd1f2148b2afe0b142cba43f94e1a1c4c2f92c6ffcc733a449ab08873e2ae84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbd1f2148b2afe0b142cba43f94e1a1c4c2f92c6ffcc733a449ab08873e2ae84->leave($__internal_dbd1f2148b2afe0b142cba43f94e1a1c4c2f92c6ffcc733a449ab08873e2ae84_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_860e9a8f4fe7f7591c4665b2473620577fdfeefefda40ca6c376cd6fcb888548 = $this->env->getExtension("native_profiler");
        $__internal_860e9a8f4fe7f7591c4665b2473620577fdfeefefda40ca6c376cd6fcb888548->enter($__internal_860e9a8f4fe7f7591c4665b2473620577fdfeefefda40ca6c376cd6fcb888548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_860e9a8f4fe7f7591c4665b2473620577fdfeefefda40ca6c376cd6fcb888548->leave($__internal_860e9a8f4fe7f7591c4665b2473620577fdfeefefda40ca6c376cd6fcb888548_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8798b2de68589518741519128bffb39787f0a92377a7075a17d1bbcd57d1e2de = $this->env->getExtension("native_profiler");
        $__internal_8798b2de68589518741519128bffb39787f0a92377a7075a17d1bbcd57d1e2de->enter($__internal_8798b2de68589518741519128bffb39787f0a92377a7075a17d1bbcd57d1e2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8798b2de68589518741519128bffb39787f0a92377a7075a17d1bbcd57d1e2de->leave($__internal_8798b2de68589518741519128bffb39787f0a92377a7075a17d1bbcd57d1e2de_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1953aaf4e7b4d4b7df914e5e5cc5a6ba58b2bcc2487bf92feacbb03c8e216ea5 = $this->env->getExtension("native_profiler");
        $__internal_1953aaf4e7b4d4b7df914e5e5cc5a6ba58b2bcc2487bf92feacbb03c8e216ea5->enter($__internal_1953aaf4e7b4d4b7df914e5e5cc5a6ba58b2bcc2487bf92feacbb03c8e216ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1953aaf4e7b4d4b7df914e5e5cc5a6ba58b2bcc2487bf92feacbb03c8e216ea5->leave($__internal_1953aaf4e7b4d4b7df914e5e5cc5a6ba58b2bcc2487bf92feacbb03c8e216ea5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
