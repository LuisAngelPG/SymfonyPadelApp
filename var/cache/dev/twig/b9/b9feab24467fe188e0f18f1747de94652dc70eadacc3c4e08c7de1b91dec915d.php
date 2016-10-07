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
        $__internal_2f04eb04d75bc7f335d8a7d23eae92192680ec614120ae4f0a9945c9b6a2bef8 = $this->env->getExtension("native_profiler");
        $__internal_2f04eb04d75bc7f335d8a7d23eae92192680ec614120ae4f0a9945c9b6a2bef8->enter($__internal_2f04eb04d75bc7f335d8a7d23eae92192680ec614120ae4f0a9945c9b6a2bef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "player/addDummy.html.twig"));

        // line 2
        $context["active"] = 4;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f04eb04d75bc7f335d8a7d23eae92192680ec614120ae4f0a9945c9b6a2bef8->leave($__internal_2f04eb04d75bc7f335d8a7d23eae92192680ec614120ae4f0a9945c9b6a2bef8_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec10f667d18ed563ef00c5c15442a91316f47e71bd65e8a12268b271ee7087a9 = $this->env->getExtension("native_profiler");
        $__internal_ec10f667d18ed563ef00c5c15442a91316f47e71bd65e8a12268b271ee7087a9->enter($__internal_ec10f667d18ed563ef00c5c15442a91316f47e71bd65e8a12268b271ee7087a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cccbafd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cccbafd_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/main_part_1_AppBundle_1.js");
            // line 6
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/ajax.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t";
        } else {
            // asset "cccbafd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cccbafd") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/main.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/ajax.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 8
        echo "\t<script>
\t\t\$(\"#dummy_player_image\").change(function(evt) {
\t\t\tchangeImage(evt, \"dummy_avatar\");\t\t\t
\t\t});

\t\t\$(document).ready(function() {
\t\t\tdocument.getElementById(\"dummy_player_oldPathImage\").value = document.getElementById(\"dummy_avatar\").src;
\t\t});
\t</script>

";
        
        $__internal_ec10f667d18ed563ef00c5c15442a91316f47e71bd65e8a12268b271ee7087a9->leave($__internal_ec10f667d18ed563ef00c5c15442a91316f47e71bd65e8a12268b271ee7087a9_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_7195c0a7b4f813954344c2bd9e16acdf99b0f13b58094a5299f8415a8b3ed85b = $this->env->getExtension("native_profiler");
        $__internal_7195c0a7b4f813954344c2bd9e16acdf99b0f13b58094a5299f8415a8b3ed85b->enter($__internal_7195c0a7b4f813954344c2bd9e16acdf99b0f13b58094a5299f8415a8b3ed85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "\t<div class=\"container rounded-box\">
\t\t<div class=\"col-md-4 col-md-offset-4 user-photo\">
\t\t\t<img id=\"dummy_avatar\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/img/dummy/default.jpg"), "html", null, true);
        echo "\"/><br />\t\t\t
\t\t</div>
\t\t";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t<div class=\"row form-group input-group-md\">
\t\t<div class=\"col-md-offset-4 col-md-4\">
\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget');
        echo "
\t\t</div>\t\t
\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "oldPathImage", array()), 'widget');
        echo "
\t</div>
\t<div class=\"row form-group input-group-md\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 33
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        // line 34
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row form-group input-group-md\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 41
        echo $this->env->getExtension('translator')->getTranslator()->trans("Gender", array(), "messages");
        // line 42
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row form-group input-group-md\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 49
        echo $this->env->getExtension('translator')->getTranslator()->trans("Level", array(), "messages");
        // line 50
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row form-group input-group-md\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 57
        echo $this->env->getExtension('translator')->getTranslator()->trans("Equipment", array(), "messages");
        // line 58
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipment", array()), 'widget');
        echo "
\t\t</div>
\t</div>
<div class=\"row user-info\">
\t<div class=\"col-md-3 col-md-offset-5\">
\t\t<div class=\"btn-group btn-block\">
\t\t\t<button type=\"submit\" onClick=\"fillInAddress();\" class=\"btn btn-success\">";
        // line 66
        echo $this->env->getExtension('translator')->getTranslator()->trans("Save", array(), "messages");
        echo "</button>
\t\t</div>
\t</div>
</div>
";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t</div>
";
        
        $__internal_7195c0a7b4f813954344c2bd9e16acdf99b0f13b58094a5299f8415a8b3ed85b->leave($__internal_7195c0a7b4f813954344c2bd9e16acdf99b0f13b58094a5299f8415a8b3ed85b_prof);

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
        return array (  181 => 70,  174 => 66,  165 => 60,  161 => 58,  159 => 57,  151 => 52,  147 => 50,  145 => 49,  137 => 44,  133 => 42,  131 => 41,  123 => 36,  119 => 34,  117 => 33,  110 => 29,  105 => 27,  99 => 24,  94 => 22,  90 => 20,  84 => 19,  67 => 8,  53 => 6,  49 => 5,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends '/base/base.html.twig' %}*/
/* {% set active = 4%}*/
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	{% javascripts '@AppBundle/*' output='js/compiled/main.js' %}*/
/* 		<script src="{{ asset('bundles/web/js/ajax.js') }}" type="text/javascript"></script>*/
/* 	{% endjavascripts %}*/
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
