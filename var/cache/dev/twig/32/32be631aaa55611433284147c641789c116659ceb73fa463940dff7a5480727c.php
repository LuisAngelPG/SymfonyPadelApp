<?php

/* public/login.html.twig */
class __TwigTemplate_0090b04223db69afc21e86ff1617b7f40578f469eeaa66b5245d1ce40ade723f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "public/login.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c09109ae63b33f74942d0ba18d73c81f51a3e6a0d76cc155bbb9906d1fc92607 = $this->env->getExtension("native_profiler");
        $__internal_c09109ae63b33f74942d0ba18d73c81f51a3e6a0d76cc155bbb9906d1fc92607->enter($__internal_c09109ae63b33f74942d0ba18d73c81f51a3e6a0d76cc155bbb9906d1fc92607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "public/login.html.twig"));

        // line 2
        $context["active"] =  -1;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c09109ae63b33f74942d0ba18d73c81f51a3e6a0d76cc155bbb9906d1fc92607->leave($__internal_c09109ae63b33f74942d0ba18d73c81f51a3e6a0d76cc155bbb9906d1fc92607_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_8f83a93a6587f5124b2d9ddcb465e0b8ad8a9f6e3134f82358abc62fa898065e = $this->env->getExtension("native_profiler");
        $__internal_8f83a93a6587f5124b2d9ddcb465e0b8ad8a9f6e3134f82358abc62fa898065e->enter($__internal_8f83a93a6587f5124b2d9ddcb465e0b8ad8a9f6e3134f82358abc62fa898065e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo " 
    ";
        // line 4
        $this->loadTemplate("base/navbar.html.twig", "public/login.html.twig", 4)->display($context);
        
        $__internal_8f83a93a6587f5124b2d9ddcb465e0b8ad8a9f6e3134f82358abc62fa898065e->leave($__internal_8f83a93a6587f5124b2d9ddcb465e0b8ad8a9f6e3134f82358abc62fa898065e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa4f0cea936e6496df2f5e28f4c3292b38a216c9cd607fd619490dba90c7b674 = $this->env->getExtension("native_profiler");
        $__internal_fa4f0cea936e6496df2f5e28f4c3292b38a216c9cd607fd619490dba90c7b674->enter($__internal_fa4f0cea936e6496df2f5e28f4c3292b38a216c9cd607fd619490dba90c7b674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    <div class=\"container fill-height\">
        <div class=\"row valign\">
            <div class=\"col-xs-12 col-md-4 col-md-offset-4\">
                <form name=\"login\" method='post' action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\"\" class=\"login-register-form jumbotron\" id=\"jumbo\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                            <input type=\"text\" id=\"inputName\" name='_username' class=\"form-control\" placeholder=\"";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("Username", array(), "messages");
        echo "\" autofocus data-validation=\"required alphanumeric\" > 
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                            <input type=\"password\" id=\"inputPassword\" name=\"_password\" class=\"form-control\" placeholder=\"";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("Password", array(), "messages");
        echo "\" data-validation=\"required\" >
                        </div>
                    </div>

                    <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("forgotPassword");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Forgot your password?", array(), "messages");
        echo "</a>

                    <div class=\"btn-group btn-block\">
                        <button class=\"btn btn-50 btn-lg btn-primary\" type=\"submit\">";
        // line 28
        echo $this->env->getExtension('translator')->getTranslator()->trans("Login", array(), "messages");
        echo "</button>
                        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("registerUser");
        echo "\" class=\"btn btn-50 btn-lg btn-info\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Register", array(), "messages");
        echo "</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_fa4f0cea936e6496df2f5e28f4c3292b38a216c9cd607fd619490dba90c7b674->leave($__internal_fa4f0cea936e6496df2f5e28f4c3292b38a216c9cd607fd619490dba90c7b674_prof);

    }

    public function getTemplateName()
    {
        return "public/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  96 => 28,  88 => 25,  81 => 21,  71 => 14,  64 => 10,  53 => 6,  46 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = -1 %}*/
/* {% block navbar %} */
/*     {% include 'base/navbar.html.twig' %}*/
/* {% endblock %}*/
/* {% block body %} */
/*     <div class="container fill-height">*/
/*         <div class="row valign">*/
/*             <div class="col-xs-12 col-md-4 col-md-offset-4">*/
/*                 <form name="login" method='post' action="{{ path('login_check') }}"" class="login-register-form jumbotron" id="jumbo">*/
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>*/
/*                             <input type="text" id="inputName" name='_username' class="form-control" placeholder="{% trans %}Username{% endtrans %}" autofocus data-validation="required alphanumeric" > */
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>*/
/*                             <input type="password" id="inputPassword" name="_password" class="form-control" placeholder="{% trans %}Password{% endtrans %}" data-validation="required" >*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <a href="{{ path('forgotPassword') }}">{% trans %}Forgot your password?{% endtrans %}</a>*/
/* */
/*                     <div class="btn-group btn-block">*/
/*                         <button class="btn btn-50 btn-lg btn-primary" type="submit">{% trans %}Login{% endtrans %}</button>*/
/*                         <a href="{{path('registerUser')}}" class="btn btn-50 btn-lg btn-info">{% trans %}Register{% endtrans %}</a>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
