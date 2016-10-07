<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_46903c1c6360f76c67bf39a235a0cf841c363645b07662e496bfbd030a5ea3ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_2042e6d55fd4de04cfb82a1dce2d4064a19f76f5a907efd636214e4cdc42d642 = $this->env->getExtension("native_profiler");
        $__internal_2042e6d55fd4de04cfb82a1dce2d4064a19f76f5a907efd636214e4cdc42d642->enter($__internal_2042e6d55fd4de04cfb82a1dce2d4064a19f76f5a907efd636214e4cdc42d642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2042e6d55fd4de04cfb82a1dce2d4064a19f76f5a907efd636214e4cdc42d642->leave($__internal_2042e6d55fd4de04cfb82a1dce2d4064a19f76f5a907efd636214e4cdc42d642_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad6933bd1b6fac072389397f055428fab271394a083925bffc77ed4df7c20bf2 = $this->env->getExtension("native_profiler");
        $__internal_ad6933bd1b6fac072389397f055428fab271394a083925bffc77ed4df7c20bf2->enter($__internal_ad6933bd1b6fac072389397f055428fab271394a083925bffc77ed4df7c20bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ad6933bd1b6fac072389397f055428fab271394a083925bffc77ed4df7c20bf2->leave($__internal_ad6933bd1b6fac072389397f055428fab271394a083925bffc77ed4df7c20bf2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_29ff081b264fbdb426df8a32e065c49e98e59be1d792b352c512227a71356b46 = $this->env->getExtension("native_profiler");
        $__internal_29ff081b264fbdb426df8a32e065c49e98e59be1d792b352c512227a71356b46->enter($__internal_29ff081b264fbdb426df8a32e065c49e98e59be1d792b352c512227a71356b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_29ff081b264fbdb426df8a32e065c49e98e59be1d792b352c512227a71356b46->leave($__internal_29ff081b264fbdb426df8a32e065c49e98e59be1d792b352c512227a71356b46_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
