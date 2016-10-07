<?php

/* :security:forgotPassword.html.twig */
class __TwigTemplate_f844abda5ea43d1ce5fb8038209430a11f8b72292611623c98a115eb8426b04c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("/base/base.html.twig", ":security:forgotPassword.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fecd90759d2bdaf959ca189a8edf5ea76700cbd621d9084ee6ab0de7acbc752e = $this->env->getExtension("native_profiler");
        $__internal_fecd90759d2bdaf959ca189a8edf5ea76700cbd621d9084ee6ab0de7acbc752e->enter($__internal_fecd90759d2bdaf959ca189a8edf5ea76700cbd621d9084ee6ab0de7acbc752e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:forgotPassword.html.twig"));

        // line 2
        $context["active"] =  -1;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fecd90759d2bdaf959ca189a8edf5ea76700cbd621d9084ee6ab0de7acbc752e->leave($__internal_fecd90759d2bdaf959ca189a8edf5ea76700cbd621d9084ee6ab0de7acbc752e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0f27bdc3fe4c1eabf4f52140e31d5d2ea41217ef8bed64f5c1fb782a3a3de80 = $this->env->getExtension("native_profiler");
        $__internal_a0f27bdc3fe4c1eabf4f52140e31d5d2ea41217ef8bed64f5c1fb782a3a3de80->enter($__internal_a0f27bdc3fe4c1eabf4f52140e31d5d2ea41217ef8bed64f5c1fb782a3a3de80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container rounded-box\">
\t\t";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\tUsername or Email ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hint", array()), 'widget');
        echo " <br />
\t\t<button type=\"submit\">Reset Password</button>
\t\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
";
        
        $__internal_a0f27bdc3fe4c1eabf4f52140e31d5d2ea41217ef8bed64f5c1fb782a3a3de80->leave($__internal_a0f27bdc3fe4c1eabf4f52140e31d5d2ea41217ef8bed64f5c1fb782a3a3de80_prof);

    }

    public function getTemplateName()
    {
        return ":security:forgotPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  50 => 6,  46 => 5,  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends '/base/base.html.twig' %}*/
/* {% set active = -1 %}*/
/* {% block body %}*/
/* 	<div class="container rounded-box">*/
/* 		{{form_start(form)}}*/
/* 		Username or Email {{form_widget(form.hint)}} <br />*/
/* 		<button type="submit">Reset Password</button>*/
/* 		{{form_end(form)}}*/
/* 	</div>*/
/* {% endblock %}*/
