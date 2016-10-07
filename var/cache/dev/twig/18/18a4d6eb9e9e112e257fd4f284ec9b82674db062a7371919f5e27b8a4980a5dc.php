<?php

/* /user/templates/editUserInfo.html.twig */
class __TwigTemplate_43ed0b8afc24ff04d94095840543e58d1d5b4c9af282b9cb8e41dbdaa10abf01 extends Twig_Template
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
        $__internal_81cfe9b7b822961f099441caa0780d639d15c5efd758a3a0976702e8dea721a2 = $this->env->getExtension("native_profiler");
        $__internal_81cfe9b7b822961f099441caa0780d639d15c5efd758a3a0976702e8dea721a2->enter($__internal_81cfe9b7b822961f099441caa0780d639d15c5efd758a3a0976702e8dea721a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/user/templates/editUserInfo.html.twig"));

        // line 1
        $context["profile"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method");
        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("ajaxEdit")));
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-4\">
\t\t\t<div class=\"form-group input-group-md\">
\t\t\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("Username", array(), "messages");
        // line 15
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "username", array()), 'widget');
        echo "
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        // line 24
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 32
        echo $this->env->getExtension('translator')->getTranslator()->trans("Email", array(), "messages");
        // line 33
        echo "\t\t</div>
\t\t<div class=\"col-md-3  form-group input-group-md\">
\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "email", array()), 'widget');
        echo "
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 41
        echo $this->env->getExtension('translator')->getTranslator()->trans("Phone", array(), "messages");
        // line 42
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumber", array()), 'widget');
        echo "
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 50
        echo $this->env->getExtension('translator')->getTranslator()->trans("Age", array(), "messages");
        // line 51
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget');
        echo "
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 59
        echo $this->env->getExtension('translator')->getTranslator()->trans("Country", array(), "messages");
        // line 60
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nationality", array()), 'widget');
        echo "
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 68
        echo $this->env->getExtension('translator')->getTranslator()->trans("Equipment", array(), "messages");
        // line 69
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipment", array()), 'widget');
        echo "
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 77
        echo $this->env->getExtension('translator')->getTranslator()->trans("Gender", array(), "messages");
        // line 78
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget');
        echo "
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 86
        echo $this->env->getExtension('translator')->getTranslator()->trans("Level", array(), "messages");
        // line 87
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level", array()), 'widget');
        echo "
\t\t</div>
\t</div>

\t<div class=\"row user-info\">
\t\t<div class=\"col-md-3 col-md-offset-5\">
\t\t\t<div class=\"btn-group btn-block\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">";
        // line 96
        echo $this->env->getExtension('translator')->getTranslator()->trans("Save", array(), "messages");
        echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-danger\" id=\"cancel_button\">";
        // line 97
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cancel", array(), "messages");
        echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
";
        // line 101
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_81cfe9b7b822961f099441caa0780d639d15c5efd758a3a0976702e8dea721a2->leave($__internal_81cfe9b7b822961f099441caa0780d639d15c5efd758a3a0976702e8dea721a2_prof);

    }

    public function getTemplateName()
    {
        return "/user/templates/editUserInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 101,  184 => 97,  180 => 96,  170 => 89,  166 => 87,  164 => 86,  155 => 80,  151 => 78,  149 => 77,  140 => 71,  136 => 69,  134 => 68,  125 => 62,  121 => 60,  119 => 59,  110 => 53,  106 => 51,  104 => 50,  95 => 44,  91 => 42,  89 => 41,  80 => 35,  76 => 33,  74 => 32,  65 => 26,  61 => 24,  59 => 23,  50 => 17,  46 => 15,  44 => 14,  34 => 7,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% set profile = app.session.get('profile') %}*/
/* */
/* {{form_start(form, {'action': path('ajaxEdit')})}}*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-4">*/
/* 			<div class="form-group input-group-md">*/
/* 				{{form_widget(form.image)}}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Username{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.user.username)}}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Name{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.name)}}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Email{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3  form-group input-group-md">*/
/* 			{{ form_widget(form.user.email) }}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Phone{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.phoneNumber)}}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Age{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.age)}}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Country{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.nationality)}}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Equipment{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.equipment)}}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Gender{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.gender)}}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Level{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.level)}}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row user-info">*/
/* 		<div class="col-md-3 col-md-offset-5">*/
/* 			<div class="btn-group btn-block">*/
/* 				<button type="submit" class="btn btn-success">{% trans %}Save{% endtrans %}</button>*/
/* 				<button type="button" class="btn btn-danger" id="cancel_button">{% trans %}Cancel{% endtrans %}</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {{form_end(form)}}*/
