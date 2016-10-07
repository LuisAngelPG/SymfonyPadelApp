<?php

/* :security:resetPassword.html.twig */
class __TwigTemplate_9c72d27d527cc8dc9a4d8dc55f3d7df08a76024bd81b40de8cad554b6890dc95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", ":security:resetPassword.html.twig", 1);
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
        $__internal_c087dc8dc62c7e60f0342ec3939c13946b5ab73526787a364a676e5857ee11cd = $this->env->getExtension("native_profiler");
        $__internal_c087dc8dc62c7e60f0342ec3939c13946b5ab73526787a364a676e5857ee11cd->enter($__internal_c087dc8dc62c7e60f0342ec3939c13946b5ab73526787a364a676e5857ee11cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:resetPassword.html.twig"));

        // line 2
        $context["active"] = 5;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c087dc8dc62c7e60f0342ec3939c13946b5ab73526787a364a676e5857ee11cd->leave($__internal_c087dc8dc62c7e60f0342ec3939c13946b5ab73526787a364a676e5857ee11cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d07cd2609f25c54b85f8136e9967040805275882168a173bf775f99ccb2d2a5f = $this->env->getExtension("native_profiler");
        $__internal_d07cd2609f25c54b85f8136e9967040805275882168a173bf775f99ccb2d2a5f->enter($__internal_d07cd2609f25c54b85f8136e9967040805275882168a173bf775f99ccb2d2a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container rounded-box\">
\t\t";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\tNew Password: ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'widget');
        echo "<br />
\t\tRepeat New Password: ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'widget');
        echo "<br />
\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
\t\t<button type='submit'>Change Password</button>
\t\t";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
\t</div>
";
        
        $__internal_d07cd2609f25c54b85f8136e9967040805275882168a173bf775f99ccb2d2a5f->leave($__internal_d07cd2609f25c54b85f8136e9967040805275882168a173bf775f99ccb2d2a5f_prof);

    }

    public function getTemplateName()
    {
        return ":security:resetPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = 5 %}*/
/* {% block body %}*/
/* 	<div class="container rounded-box">*/
/* 		{{ form_start(form) }}*/
/* 		New Password: {{ form_widget(form.password.first) }}<br />*/
/* 		Repeat New Password: {{ form_widget(form.password.second) }}<br />*/
/* 		{{ form_widget(form._token)}}*/
/* 		<button type='submit'>Change Password</button>*/
/* 		{{ form_end(form, {'render_rest': false}) }}*/
/* 	</div>*/
/* {% endblock %}*/
