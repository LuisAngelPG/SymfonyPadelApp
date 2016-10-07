<?php

/* /player/templates/editDummyPlayer.html.twig */
class __TwigTemplate_e8183e1e58d1bf0320f4e4b2df6b4617a35288af59ef2a3501c352a184955ad0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61b1c4a53b49043f5ba4701d14ef4752fb1d0848161ae6479410e9133b1ceac3 = $this->env->getExtension("native_profiler");
        $__internal_61b1c4a53b49043f5ba4701d14ef4752fb1d0848161ae6479410e9133b1ceac3->enter($__internal_61b1c4a53b49043f5ba4701d14ef4752fb1d0848161ae6479410e9133b1ceac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/player/templates/editDummyPlayer.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("ajaxEditDummyPlayer", array("dummyId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))))));
        echo "
\t<div class=\"row form-group input-group-md\">
\t\t<div class=\"col-md-offset-4 col-md-4\">
\t\t\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget');
        echo "
\t\t</div>\t\t
\t\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "oldPathImage", array()), 'widget');
        echo "
\t</div>
\t<div class=\"row form-group input-group-md\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        // line 11
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row form-group input-group-md\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 18
        echo $this->env->getExtension('translator')->getTranslator()->trans("Gender", array(), "messages");
        // line 19
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row form-group input-group-md\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("Level", array(), "messages");
        // line 27
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row form-group input-group-md\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("Equipment", array(), "messages");
        // line 35
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipment", array()), 'widget');
        echo "
\t\t</div>
\t</div>
<div class=\"row user-info\">
\t<div class=\"col-md-3 col-md-offset-5\">
\t\t<div class=\"btn-group btn-block\">
\t\t\t<button type=\"submit\" onClick=\"fillInAddress();\" class=\"btn btn-success\">";
        // line 43
        echo $this->env->getExtension('translator')->getTranslator()->trans("Save", array(), "messages");
        echo "</button>
\t\t\t<button id=\"cancel_button\" type=\"button\" class=\"btn btn-danger\">";
        // line 44
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cancel", array(), "messages");
        echo "</button>
\t\t</div>
\t</div>
</div>
";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_61b1c4a53b49043f5ba4701d14ef4752fb1d0848161ae6479410e9133b1ceac3->leave($__internal_61b1c4a53b49043f5ba4701d14ef4752fb1d0848161ae6479410e9133b1ceac3_prof);

    }

    public function getTemplateName()
    {
        return "/player/templates/editDummyPlayer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 48,  101 => 44,  97 => 43,  88 => 37,  84 => 35,  82 => 34,  74 => 29,  70 => 27,  68 => 26,  60 => 21,  56 => 19,  54 => 18,  46 => 13,  42 => 11,  40 => 10,  33 => 6,  28 => 4,  22 => 1,);
    }
}
/* {{ form_start(form, {'action': path('ajaxEditDummyPlayer', {'dummyId': id})}) }}*/
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
/* 			<button id="cancel_button" type="button" class="btn btn-danger">{% trans %}Cancel{% endtrans %}</button>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {{form_end(form)}}*/
