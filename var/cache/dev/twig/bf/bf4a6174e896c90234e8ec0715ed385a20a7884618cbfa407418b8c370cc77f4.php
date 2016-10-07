<?php

/* base/navbar.html.twig */
class __TwigTemplate_a4f04fe4978e799f526f9a4f4f13e3e97177202d6d12e97add67ae177b8512e4 extends Twig_Template
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
        $__internal_e7021b7d35282332ccc0685ba334f658c0e78b1742b02d3808d5b7f2fecb7972 = $this->env->getExtension("native_profiler");
        $__internal_e7021b7d35282332ccc0685ba334f658c0e78b1742b02d3808d5b7f2fecb7972->enter($__internal_e7021b7d35282332ccc0685ba334f658c0e78b1742b02d3808d5b7f2fecb7972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base/navbar.html.twig"));

        // line 1
        $context["profile"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method");
        // line 2
        echo "
<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <!-- Boton al ocultar la barra-->
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <i class=\"glyphicon glyphicon-menu-hamburger\"></i>
            </button>
            <!-- --> 
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Padel APP</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"";
        // line 15
        if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == 0)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Home", array(), "messages");
        echo "</a></li>
                ";
        // line 16
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 17
            echo "                    <li class=\"";
            if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == 1)) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("matches");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Matches", array(), "messages");
            echo "</a></li>
                    <li class=\"";
            // line 18
            if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == 2)) {
                echo "active";
            }
            echo " dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Tournament", array(), "messages");
            echo "</a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("newTournament");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("New Tournament", array(), "messages");
            echo "</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("searchTournament");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("View Tournament", array(), "messages");
            echo "</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"";
            // line 28
            if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == 3)) {
                echo "active";
            }
            echo " dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Clubs", array(), "messages");
            echo "</a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("registerClub");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Add Club", array(), "messages");
            echo "</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("searchClub");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("View Clubs", array(), "messages");
            echo "</a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"";
            // line 39
            if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == 4)) {
                echo "active";
            }
            echo " dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Players", array(), "messages");
            echo "</a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("searchPlayer");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("View Players", array(), "messages");
            echo "</a>
                                <a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("addDummyPlayer");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Add Dummy Player", array(), "messages");
            echo "</a>
                            </li>
                        </ul>
                    </li>
                ";
        }
        // line 48
        echo "            </ul>
                ";
        // line 49
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 50
            echo "                    <form class=\"navbar-form navbar-right\" method=\"post\" action=\"";
            echo $this->env->getExtension('routing')->getPath("search");
            echo "\">
                        <div class=\"form-group\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"";
            // line 52
            echo $this->env->getExtension('translator')->getTranslator()->trans("Search...", array(), "messages");
            echo "\" name =\"search\">
                        </div>
                        <button type=\"submit\" value=\"search\" class=\"btn btn-default hidden\"></button>
                    </form>
                ";
        }
        // line 57
        echo "            <ul class=\"nav navbar-nav navbar-right\">                         
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 59
        echo $this->env->getExtension('translator')->getTranslator()->trans("Language", array(), "messages");
        echo "</a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "es"))), "html", null, true);
        echo "\"><img class=\"flag-icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/icons/spain.svg"), "html", null, true);
        echo "\"> Español </a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
        echo "\"><img class=\"flag-icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/icons/united-kingdom.svg"), "html", null, true);
        echo "\"> English</a></li>
                    </ul>
                </li>
                ";
        // line 66
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 67
            echo "                    <li class=\"dropdown ";
            if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == 5)) {
                echo "active";
            }
            echo "\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> ";
            // line 68
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
            echo "</a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("account");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Settings", array(), "messages");
            echo "</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("resetPasswordPage");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Reset Password", array(), "messages");
            echo "</a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Exit", array(), "messages");
            echo "</a>
                            </li>
                        </ul>
                    </li>
                ";
        }
        // line 83
        echo "            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_e7021b7d35282332ccc0685ba334f658c0e78b1742b02d3808d5b7f2fecb7972->leave($__internal_e7021b7d35282332ccc0685ba334f658c0e78b1742b02d3808d5b7f2fecb7972_prof);

    }

    public function getTemplateName()
    {
        return "base/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 83,  221 => 78,  212 => 74,  204 => 71,  198 => 68,  191 => 67,  189 => 66,  181 => 63,  174 => 61,  169 => 59,  165 => 57,  157 => 52,  151 => 50,  149 => 49,  146 => 48,  136 => 43,  130 => 42,  120 => 39,  110 => 34,  102 => 31,  92 => 28,  83 => 24,  75 => 21,  65 => 18,  54 => 17,  52 => 16,  42 => 15,  35 => 11,  24 => 2,  22 => 1,);
    }
}
/* {% set profile = app.session.get('profile') %}*/
/* */
/* <nav class="navbar navbar-default navbar-fixed-top">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <!-- Boton al ocultar la barra-->*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <i class="glyphicon glyphicon-menu-hamburger"></i>*/
/*             </button>*/
/*             <!-- --> */
/*             <a class="navbar-brand" href="{{ path('home') }}">Padel APP</a>*/
/*         </div>*/
/*         <div id="navbar" class="navbar-collapse collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li class="{% if active == 0 %}active{% endif %}"><a href="{{ path('home') }}">{% trans %}Home{% endtrans %}</a></li>*/
/*                 {% if app.user %}*/
/*                     <li class="{% if active == 1 %}active{% endif %}"><a href="{{ path('matches') }}">{% trans %}Matches{% endtrans %}</a></li>*/
/*                     <li class="{% if active == 2 %}active{% endif %} dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">{% trans %}Tournament{% endtrans %}</a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li>*/
/*                                 <a href="{{ path('newTournament') }}">{% trans %}New Tournament{% endtrans %}</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('searchTournament') }}">{% trans %}View Tournament{% endtrans %}</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="{% if active == 3 %}active{% endif %} dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">{% trans %}Clubs{% endtrans %}</a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li>*/
/*                                 <a href="{{ path('registerClub') }}">{% trans %}Add Club{% endtrans %}</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('searchClub') }}">{% trans %}View Clubs{% endtrans %}</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/* */
/*                     <li class="{% if active == 4 %}active{% endif %} dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">{% trans %}Players{% endtrans %}</a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li>*/
/*                                 <a href="{{ path('searchPlayer') }}">{% trans %} View Players {% endtrans %}</a>*/
/*                                 <a href="{{ path('addDummyPlayer') }}">{% trans %}Add Dummy Player{% endtrans %}</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 {% endif %}*/
/*             </ul>*/
/*                 {% if app.user %}*/
/*                     <form class="navbar-form navbar-right" method="post" action="{{ path('search') }}">*/
/*                         <div class="form-group">*/
/*                             <input class="form-control" type="text" placeholder="{% trans %}Search...{% endtrans %}" name ="search">*/
/*                         </div>*/
/*                         <button type="submit" value="search" class="btn btn-default hidden"></button>*/
/*                     </form>*/
/*                 {% endif %}*/
/*             <ul class="nav navbar-nav navbar-right">                         */
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">{% trans %}Language{% endtrans %}</a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'es'})) }}"><img class="flag-icon" src="{{ asset('bundles/web/icons/spain.svg') }}"> Español </a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li><a href="{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'})) }}"><img class="flag-icon" src="{{ asset('bundles/web/icons/united-kingdom.svg') }}"> English</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 {% if app.user %}*/
/*                     <li class="dropdown {% if active == 5 %}active{% endif %}">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> {{ app.user.username|capitalize }}</a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li>*/
/*                                 <a href="{{ path('account') }}">{% trans %}Settings{% endtrans %}</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('resetPasswordPage') }}">{% trans %}Reset Password{% endtrans %}</a>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li>*/
/*                                 <a href="{{ path('logout') }}">{% trans %}Exit{% endtrans %}</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 {% endif %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
