<?php

/* base/base.html.twig */
class __TwigTemplate_5cccc30155efec49af88926ad13e3cd06f9695a1207ef2ca37421a6bad452425 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d90c42a9950c7483c4b03d559534d31ffd568173e172f5df8a4c2ecd468d5f56 = $this->env->getExtension("native_profiler");
        $__internal_d90c42a9950c7483c4b03d559534d31ffd568173e172f5df8a4c2ecd468d5f56->enter($__internal_d90c42a9950c7483c4b03d559534d31ffd568173e172f5df8a4c2ecd468d5f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body class=\"bg\">
    ";
        // line 13
        $this->displayBlock('navbar', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        echo "     
    </body>
    ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "</html>";
        
        $__internal_d90c42a9950c7483c4b03d559534d31ffd568173e172f5df8a4c2ecd468d5f56->leave($__internal_d90c42a9950c7483c4b03d559534d31ffd568173e172f5df8a4c2ecd468d5f56_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb91e6d10b4165c3dcada27fd3eb25a232b78f959f335cb42d62ccdeb6ea817d = $this->env->getExtension("native_profiler");
        $__internal_fb91e6d10b4165c3dcada27fd3eb25a232b78f959f335cb42d62ccdeb6ea817d->enter($__internal_fb91e6d10b4165c3dcada27fd3eb25a232b78f959f335cb42d62ccdeb6ea817d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PadelApp";
        
        $__internal_fb91e6d10b4165c3dcada27fd3eb25a232b78f959f335cb42d62ccdeb6ea817d->leave($__internal_fb91e6d10b4165c3dcada27fd3eb25a232b78f959f335cb42d62ccdeb6ea817d_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_74a44f20b209337c4045dd116850c11ccfe217253fdd58c1721e384b22e33052 = $this->env->getExtension("native_profiler");
        $__internal_74a44f20b209337c4045dd116850c11ccfe217253fdd58c1721e384b22e33052->enter($__internal_74a44f20b209337c4045dd116850c11ccfe217253fdd58c1721e384b22e33052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />   
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />  
        ";
        
        $__internal_74a44f20b209337c4045dd116850c11ccfe217253fdd58c1721e384b22e33052->leave($__internal_74a44f20b209337c4045dd116850c11ccfe217253fdd58c1721e384b22e33052_prof);

    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_314b38c9f42753c149b64f76a5b87945f214df72310d653c2684f02c1783f708 = $this->env->getExtension("native_profiler");
        $__internal_314b38c9f42753c149b64f76a5b87945f214df72310d653c2684f02c1783f708->enter($__internal_314b38c9f42753c149b64f76a5b87945f214df72310d653c2684f02c1783f708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo " 
        ";
        // line 14
        $context["active"] = (isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"));
        // line 15
        echo "        ";
        $this->loadTemplate("base/navbar.html.twig", "base/base.html.twig", 15)->display($context);
        // line 16
        echo "    ";
        
        $__internal_314b38c9f42753c149b64f76a5b87945f214df72310d653c2684f02c1783f708->leave($__internal_314b38c9f42753c149b64f76a5b87945f214df72310d653c2684f02c1783f708_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_902a0d204212f2cb2143db47c7e9aaaf1a1eaf2aa2c32565d95ed4b25b1a17e7 = $this->env->getExtension("native_profiler");
        $__internal_902a0d204212f2cb2143db47c7e9aaaf1a1eaf2aa2c32565d95ed4b25b1a17e7->enter($__internal_902a0d204212f2cb2143db47c7e9aaaf1a1eaf2aa2c32565d95ed4b25b1a17e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_902a0d204212f2cb2143db47c7e9aaaf1a1eaf2aa2c32565d95ed4b25b1a17e7->leave($__internal_902a0d204212f2cb2143db47c7e9aaaf1a1eaf2aa2c32565d95ed4b25b1a17e7_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19fc52c2e4a0d8f19f950e5e30097781ee274a03fe2782fa52ff92808fd69f7d = $this->env->getExtension("native_profiler");
        $__internal_19fc52c2e4a0d8f19f950e5e30097781ee274a03fe2782fa52ff92808fd69f7d->enter($__internal_19fc52c2e4a0d8f19f950e5e30097781ee274a03fe2782fa52ff92808fd69f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/libs/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_19fc52c2e4a0d8f19f950e5e30097781ee274a03fe2782fa52ff92808fd69f7d->leave($__internal_19fc52c2e4a0d8f19f950e5e30097781ee274a03fe2782fa52ff92808fd69f7d_prof);

    }

    public function getTemplateName()
    {
        return "base/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 21,  133 => 20,  127 => 19,  116 => 17,  109 => 16,  106 => 15,  104 => 14,  96 => 13,  87 => 9,  82 => 8,  76 => 7,  64 => 6,  57 => 23,  55 => 19,  49 => 17,  47 => 13,  43 => 11,  41 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <title>{% block title %}PadelApp{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href="{{ asset('bundles/web/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />   */
/*             <link href="{{ asset('bundles/web/css/base.css') }}" rel="stylesheet" />  */
/*         {% endblock %}*/
/*     </head>*/
/*     <body class="bg">*/
/*     {% block navbar %} */
/*         {% set active = active %}*/
/*         {% include 'base/navbar.html.twig' %}*/
/*     {% endblock %}*/
/*     {% block body %}{% endblock %}     */
/*     </body>*/
/*     {% block javascripts %}*/
/*         <script src="{{ asset('bundles/web/js/libs/jquery-3.1.0.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/web/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*     {% endblock %}*/
/* </html>*/
