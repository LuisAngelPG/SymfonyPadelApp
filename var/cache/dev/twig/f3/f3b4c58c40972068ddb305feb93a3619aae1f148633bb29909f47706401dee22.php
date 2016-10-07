<?php

/* public/registerUser.html.twig */
class __TwigTemplate_8216e467c016dcae7cb0b327405cb664ee41176ed2c842f221da92c39bccc3e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "public/registerUser.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58d7c82e06812924b92301fdbc1c26b1da1be512acff1203257c1bed44c8ccee = $this->env->getExtension("native_profiler");
        $__internal_58d7c82e06812924b92301fdbc1c26b1da1be512acff1203257c1bed44c8ccee->enter($__internal_58d7c82e06812924b92301fdbc1c26b1da1be512acff1203257c1bed44c8ccee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/registerUser.html.twig"));

        // line 2
        $context["active"] =  -1;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58d7c82e06812924b92301fdbc1c26b1da1be512acff1203257c1bed44c8ccee->leave($__internal_58d7c82e06812924b92301fdbc1c26b1da1be512acff1203257c1bed44c8ccee_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_8f912f3427ae00106a602ba8729e17bd91de96dfc490af9da53a9691d5743143 = $this->env->getExtension("native_profiler");
        $__internal_8f912f3427ae00106a602ba8729e17bd91de96dfc490af9da53a9691d5743143->enter($__internal_8f912f3427ae00106a602ba8729e17bd91de96dfc490af9da53a9691d5743143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo " 
    ";
        // line 4
        $this->loadTemplate("base/navbar.html.twig", "public/registerUser.html.twig", 4)->display($context);
        
        $__internal_8f912f3427ae00106a602ba8729e17bd91de96dfc490af9da53a9691d5743143->leave($__internal_8f912f3427ae00106a602ba8729e17bd91de96dfc490af9da53a9691d5743143_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5fa3477f8f192b0af9bbce7f66f024fe5329b7f82952d4081427b0aea26df843 = $this->env->getExtension("native_profiler");
        $__internal_5fa3477f8f192b0af9bbce7f66f024fe5329b7f82952d4081427b0aea26df843->enter($__internal_5fa3477f8f192b0af9bbce7f66f024fe5329b7f82952d4081427b0aea26df843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/libs/formValidator/form-validator/jquery.form-validator.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$.validate({
            lang: '";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "',
        \tmodules : 'security'
        });
    </script>
";
        
        $__internal_5fa3477f8f192b0af9bbce7f66f024fe5329b7f82952d4081427b0aea26df843->leave($__internal_5fa3477f8f192b0af9bbce7f66f024fe5329b7f82952d4081427b0aea26df843_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2615e317cf7ff1e3d8ad27f2c7f8f3efe9eb03d188bf85d8817d6cbb1c37b5c = $this->env->getExtension("native_profiler");
        $__internal_c2615e317cf7ff1e3d8ad27f2c7f8f3efe9eb03d188bf85d8817d6cbb1c37b5c->enter($__internal_c2615e317cf7ff1e3d8ad27f2c7f8f3efe9eb03d188bf85d8817d6cbb1c37b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "\t<div class=\"container fill-height\">
\t\t<div class=\"row valign\">
\t        <div class=\"col-md-4 col-md-offset-4\">
\t\t\t   \t";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "login-register-form jumbotron", "id" => "jumbo")));
        echo "
\t\t            <div class=\"form-group\">
\t\t            \t<div class=\"input-group\">
\t\t            \t    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "username", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("Enter your username"), "data-validation" => "required alphanumeric")));
        echo "    
\t\t\t\t\t\t</div>            
\t\t\t\t\t</div>
\t\t\t\t    
\t\t            <div class=\"form-group\">
\t\t            \t<div class=\"input-group\">
\t\t               \t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-envelope\"></i></span>
\t\t\t\t    \t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "email", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Enter your e-mail", "data-validation" => "required email")));
        echo "
\t\t\t\t    \t</div>
\t\t            </div>

\t\t\t\t    <div class=\"form-group\">
\t\t\t\t    \t<div class=\"input-group\">
\t\t                \t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
\t\t\t\t   \t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "password", array()), "first", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("Enter your password"), "data-validation" => "required", "name" => "password")));
        echo "
\t\t\t\t   \t\t</div>
\t\t            </div>

\t\t\t\t    <div class=\"form-group\">
\t\t\t\t    \t<div class=\"input-group\">
\t\t                \t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
\t\t\t\t    \t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), "password", array()), "second", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("Repeat your password"), "data-validation" => "required confirmation", "data-validation-confirm" => "trainer[user][password][first]")));
        echo "
\t\t\t\t    \t</div>
\t\t            </div>
\t\t            <!--
\t\t\t\t   \t<div class=\"form-group checkbox input-group\">
\t\t\t\t    \t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isTrainer", array()), 'widget', array("attr" => array("class" => "login-checkbox")));
        echo "
\t\t\t\t    \t";
        // line 51
        echo $this->env->getExtension('translator')->getTranslator()->trans("Are you a trainer?", array(), "messages");
        // line 52
        echo "\t\t            </div>
\t\t            -->
\t\t            <div class=\"btn-group btn-block\">
\t\t\t\t\t   \t<button class=\"btn btn-50 btn-lg btn-primary\" type=\"submit\">";
        // line 55
        echo $this->env->getExtension('translator')->getTranslator()->trans("Register", array(), "messages");
        echo "</button>
\t\t            \t<a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"btn btn-50 btn-lg btn-info\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Login", array(), "messages");
        echo "</a>
\t\t            </div>

\t            ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_c2615e317cf7ff1e3d8ad27f2c7f8f3efe9eb03d188bf85d8817d6cbb1c37b5c->leave($__internal_c2615e317cf7ff1e3d8ad27f2c7f8f3efe9eb03d188bf85d8817d6cbb1c37b5c_prof);

    }

    public function getTemplateName()
    {
        return "public/registerUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 59,  154 => 56,  150 => 55,  145 => 52,  143 => 51,  139 => 50,  131 => 45,  121 => 38,  111 => 31,  101 => 24,  94 => 20,  89 => 17,  83 => 16,  71 => 11,  65 => 8,  60 => 7,  54 => 6,  47 => 4,  39 => 3,  32 => 1,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = -1 %}*/
/* {% block navbar %} */
/*     {% include 'base/navbar.html.twig' %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('bundles/web/js/libs/formValidator/form-validator/jquery.form-validator.min.js') }}"></script>*/
/*     <script>*/
/*         $.validate({*/
/*             lang: '{{ app.request.locale }}',*/
/*         	modules : 'security'*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div class="container fill-height">*/
/* 		<div class="row valign">*/
/* 	        <div class="col-md-4 col-md-offset-4">*/
/* 			   	{{ form_start(form, { 'attr': {'class': 'login-register-form jumbotron', 'id': 'jumbo' } }) }}*/
/* 		            <div class="form-group">*/
/* 		            	<div class="input-group">*/
/* 		            	    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>*/
/* 							{{ form_row(form.user.username, { 'attr': {'class': 'form-control', 'placeholder': 'Enter your username'|trans, 'data-validation': 'required alphanumeric'}}) }}    */
/* 						</div>            */
/* 					</div>*/
/* 				    */
/* 		            <div class="form-group">*/
/* 		            	<div class="input-group">*/
/* 		               	<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>*/
/* 				    		{{ form_row(form.user.email, { 'attr': {'class': 'form-control', 'placeholder': 'Enter your e-mail', 'data-validation': 'required email'}}) }}*/
/* 				    	</div>*/
/* 		            </div>*/
/* */
/* 				    <div class="form-group">*/
/* 				    	<div class="input-group">*/
/* 		                	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>*/
/* 				   			{{ form_row(form.user.password.first, { 'attr': {'class': 'form-control', 'placeholder': 'Enter your password'|trans, 'data-validation': 'required', 'name': 'password'}}) }}*/
/* 				   		</div>*/
/* 		            </div>*/
/* */
/* 				    <div class="form-group">*/
/* 				    	<div class="input-group">*/
/* 		                	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>*/
/* 				    		{{ form_row(form.user.password.second, { 'attr': {'class': 'form-control', 'placeholder': 'Repeat your password'|trans, 'data-validation': 'required confirmation', 'data-validation-confirm': 'trainer[user][password][first]'}}) }}*/
/* 				    	</div>*/
/* 		            </div>*/
/* 		            <!--*/
/* 				   	<div class="form-group checkbox input-group">*/
/* 				    	{{ form_widget(form.isTrainer, { 'attr': {'class': 'login-checkbox' }}) }}*/
/* 				    	{% trans %}Are you a trainer?{% endtrans %}*/
/* 		            </div>*/
/* 		            -->*/
/* 		            <div class="btn-group btn-block">*/
/* 					   	<button class="btn btn-50 btn-lg btn-primary" type="submit">{% trans %}Register{% endtrans %}</button>*/
/* 		            	<a href="{{path('login')}}" class="btn btn-50 btn-lg btn-info">{% trans %}Login{% endtrans %}</a>*/
/* 		            </div>*/
/* */
/* 	            {{ form_end(form) }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
