<?php

/* player/addDummy.html.twig */
class __TwigTemplate_cc971a5af0cd9e128551144ce8054130725c427ea73ab2858811f071ed0a3460 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("/base/base.html.twig", "player/addDummy.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35067b49fc6d01bc519228e4f9dd0e41d391592105043e721038d8082ccf7b55 = $this->env->getExtension("native_profiler");
        $__internal_35067b49fc6d01bc519228e4f9dd0e41d391592105043e721038d8082ccf7b55->enter($__internal_35067b49fc6d01bc519228e4f9dd0e41d391592105043e721038d8082ccf7b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "player/addDummy.html.twig"));

        // line 2
        $context["active"] = 4;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35067b49fc6d01bc519228e4f9dd0e41d391592105043e721038d8082ccf7b55->leave($__internal_35067b49fc6d01bc519228e4f9dd0e41d391592105043e721038d8082ccf7b55_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_22e3651c19a856a913b8c64b0409f829e7ca6594bc434f446e9e2519669da2ef = $this->env->getExtension("native_profiler");
        $__internal_22e3651c19a856a913b8c64b0409f829e7ca6594bc434f446e9e2519669da2ef->enter($__internal_22e3651c19a856a913b8c64b0409f829e7ca6594bc434f446e9e2519669da2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/ajax.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script>
\t\t\$(\"#dummy_player_image\").change(function(evt) {
\t\t\tchangeImage(evt, \"dummy_avatar\");\t\t\t
\t\t});

\t\t\$(document).ready(function() {
\t\t\tdocument.getElementById(\"dummy_player_oldPathImage\").value = document.getElementById(\"dummy_avatar\").src;
\t\t});
\t</script>

";
        
        $__internal_22e3651c19a856a913b8c64b0409f829e7ca6594bc434f446e9e2519669da2ef->leave($__internal_22e3651c19a856a913b8c64b0409f829e7ca6594bc434f446e9e2519669da2ef_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_66f3954f8e554dd9636f557056ad1bb3b26cd462722f9e9d5517a9c96760e309 = $this->env->getExtension("native_profiler");
        $__internal_66f3954f8e554dd9636f557056ad1bb3b26cd462722f9e9d5517a9c96760e309->enter($__internal_66f3954f8e554dd9636f557056ad1bb3b26cd462722f9e9d5517a9c96760e309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "\t<div class=\"container rounded-box\">
\t\t<div class=\"col-md-4 col-md-offset-4 user-photo\">
\t\t\t<img id=\"dummy_avatar\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/img/dummy/default.jpg"), "html", null, true);
        echo "\"/><br />\t\t\t
\t\t</div>
\t\t";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t<div class=\"row form-group input-group-md\">
\t\t<div class=\"col-md-offset-4 col-md-4\">
\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget');
        echo "
\t\t</div>\t\t
\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "oldPathImage", array()), 'widget');
        echo "
\t</div>
\t<div class=\"row form-group input-group-md\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 31
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        // line 32
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row form-group input-group-md\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 39
        echo $this->env->getExtension('translator')->getTranslator()->trans("Gender", array(), "messages");
        // line 40
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row form-group input-group-md\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 47
        echo $this->env->getExtension('translator')->getTranslator()->trans("Level", array(), "messages");
        // line 48
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row form-group input-group-md\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 55
        echo $this->env->getExtension('translator')->getTranslator()->trans("Equipment", array(), "messages");
        // line 56
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipment", array()), 'widget');
        echo "
\t\t</div>
\t</div>
<div class=\"row user-info\">
\t<div class=\"col-md-3 col-md-offset-5\">
\t\t<div class=\"btn-group btn-block\">
\t\t\t<button type=\"submit\" onClick=\"fillInAddress();\" class=\"btn btn-success\">";
        // line 64
        echo $this->env->getExtension('translator')->getTranslator()->trans("Save", array(), "messages");
        echo "</button>
\t\t</div>
\t</div>
</div>
";
        // line 68
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t</div>
";
        
        $__internal_66f3954f8e554dd9636f557056ad1bb3b26cd462722f9e9d5517a9c96760e309->leave($__internal_66f3954f8e554dd9636f557056ad1bb3b26cd462722f9e9d5517a9c96760e309_prof);

    }

    public function getTemplateName()
    {
        return "player/addDummy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 68,  158 => 64,  149 => 58,  145 => 56,  143 => 55,  135 => 50,  131 => 48,  129 => 47,  121 => 42,  117 => 40,  115 => 39,  107 => 34,  103 => 32,  101 => 31,  94 => 27,  89 => 25,  83 => 22,  78 => 20,  74 => 18,  68 => 17,  49 => 5,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends '/base/base.html.twig' %}*/
/* {% set active = 4%}*/
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script src="{{ asset('bundles/web/js/ajax.js') }}" type="text/javascript"></script>*/
/* 	<script>*/
/* 		$("#dummy_player_image").change(function(evt) {*/
/* 			changeImage(evt, "dummy_avatar");			*/
/* 		});*/
/* */
/* 		$(document).ready(function() {*/
/* 			document.getElementById("dummy_player_oldPathImage").value = document.getElementById("dummy_avatar").src;*/
/* 		});*/
/* 	</script>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div class="container rounded-box">*/
/* 		<div class="col-md-4 col-md-offset-4 user-photo">*/
/* 			<img id="dummy_avatar" src="{{ asset('bundles/web/img/dummy/default.jpg') }}"/><br />			*/
/* 		</div>*/
/* 		{{ form_start(form) }}*/
/* 	<div class="row form-group input-group-md">*/
/* 		<div class="col-md-offset-4 col-md-4">*/
/* 			{{form_widget(form.image)}}*/
/* 		</div>		*/
/* 		{{form_widget(form.oldPathImage)}}*/
/* 	</div>*/
/* 	<div class="row form-group input-group-md">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Name{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			{{form_widget(form.name)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row form-group input-group-md">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Gender{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			{{form_widget(form.gender)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row form-group input-group-md">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Level{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			{{form_widget(form.level)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row form-group input-group-md">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Equipment{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			{{form_widget(form.equipment)}}*/
/* 		</div>*/
/* 	</div>*/
/* <div class="row user-info">*/
/* 	<div class="col-md-3 col-md-offset-5">*/
/* 		<div class="btn-group btn-block">*/
/* 			<button type="submit" onClick="fillInAddress();" class="btn btn-success">{% trans %}Save{% endtrans %}</button>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {{form_end(form)}}*/
/* */
/* 	</div>*/
/* {% endblock %}*/
