<?php

/* @WebProfiler/Profiler/search.html.twig */
class __TwigTemplate_49d933726920a359391e8fc7b397387c459cac72e23ad4a8499ccff83f8c497c extends Twig_Template
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
        $__internal_d4181e603aba3f2725faaaa364dbd69c4c17e73a5d6af53e321993a8768c081a = $this->env->getExtension("native_profiler");
        $__internal_d4181e603aba3f2725faaaa364dbd69c4c17e73a5d6af53e321993a8768c081a->enter($__internal_d4181e603aba3f2725faaaa364dbd69c4c17e73a5d6af53e321993a8768c081a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/search.html.twig"));

        // line 1
        echo "<div id=\"sidebar-search\">
    <form action=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("_profiler_search");
        echo "\" method=\"get\">
        <div class=\"form-group\">
            <label for=\"ip\">IP</label>
            <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"method\">Method</label>
            <select name=\"method\" id=\"method\">
                <option value=\"\">Any</option>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "DELETE", 1 => "GET", 2 => "HEAD", 3 => "PATCH", 4 => "POST", 5 => "PUT"));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "                    <option ";
            echo ((($context["m"] == (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["m"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </select>
        </div>

        <div class=\"form-group\">
            <label for=\"status_code\">Status</label>
            <input type=\"number\" name=\"status_code\" id=\"status_code\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"url\">URL</label>
            <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"token\">Token</label>
            <input type=\"text\" name=\"token\" id=\"token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"start\">From</label>
            <input type=\"date\" name=\"start\" id=\"start\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start")), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"end\">Until</label>
            <input type=\"date\" name=\"end\" id=\"end\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["end"]) ? $context["end"] : $this->getContext($context, "end")), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"limit\">Results</label>
            <select name=\"limit\" id=\"limit\">
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 10, 1 => 50, 2 => 100));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 47
            echo "                    <option ";
            echo ((($context["l"] == (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["l"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </select>
        </div>

        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-sm\">Search</button>
        </div>
    </form>
</div>
";
        
        $__internal_d4181e603aba3f2725faaaa364dbd69c4c17e73a5d6af53e321993a8768c081a->leave($__internal_d4181e603aba3f2725faaaa364dbd69c4c17e73a5d6af53e321993a8768c081a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 49,  108 => 47,  104 => 46,  95 => 40,  87 => 35,  79 => 30,  71 => 25,  63 => 20,  56 => 15,  45 => 13,  41 => 12,  31 => 5,  25 => 2,  22 => 1,);
    }
}
/* <div id="sidebar-search">*/
/*     <form action="{{ path('_profiler_search') }}" method="get">*/
/*         <div class="form-group">*/
/*             <label for="ip">IP</label>*/
/*             <input type="text" name="ip" id="ip" value="{{ ip }}">*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="method">Method</label>*/
/*             <select name="method" id="method">*/
/*                 <option value="">Any</option>*/
/*                 {% for m in ['DELETE', 'GET', 'HEAD', 'PATCH', 'POST', 'PUT'] %}*/
/*                     <option {{ m == method ? 'selected="selected"' }}>{{ m }}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="status_code">Status</label>*/
/*             <input type="number" name="status_code" id="status_code" value="{{ status_code }}">*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="url">URL</label>*/
/*             <input type="text" name="url" id="url" value="{{ url }}">*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="token">Token</label>*/
/*             <input type="text" name="token" id="token" value="{{ token }}">*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="start">From</label>*/
/*             <input type="date" name="start" id="start" value="{{ start }}">*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="end">Until</label>*/
/*             <input type="date" name="end" id="end" value="{{ end }}">*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="limit">Results</label>*/
/*             <select name="limit" id="limit">*/
/*                 {% for l in [10, 50, 100] %}*/
/*                     <option {{ l == limit ? 'selected="selected"' }}>{{ l }}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <button type="submit" class="btn btn-sm">Search</button>*/
/*         </div>*/
/*     </form>*/
/* </div>*/
/* */
