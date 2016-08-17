<?php

/* default/todos.html.twig */
class __TwigTemplate_7c8f63408145307963e1cc2c73023a28c5422bf187b8e4b02407ca879daf224c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/todos.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f55d44284da95b6b0a20c87e433c5435b3b55cdd0595d4a0f9058b3a07e1fda = $this->env->getExtension("native_profiler");
        $__internal_2f55d44284da95b6b0a20c87e433c5435b3b55cdd0595d4a0f9058b3a07e1fda->enter($__internal_2f55d44284da95b6b0a20c87e433c5435b3b55cdd0595d4a0f9058b3a07e1fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/todos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f55d44284da95b6b0a20c87e433c5435b3b55cdd0595d4a0f9058b3a07e1fda->leave($__internal_2f55d44284da95b6b0a20c87e433c5435b3b55cdd0595d4a0f9058b3a07e1fda_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43c29e567b3513cadda89c464a1dd8d8659ed86112b004f6936486c5cc3ce9bb = $this->env->getExtension("native_profiler");
        $__internal_43c29e567b3513cadda89c464a1dd8d8659ed86112b004f6936486c5cc3ce9bb->enter($__internal_43c29e567b3513cadda89c464a1dd8d8659ed86112b004f6936486c5cc3ce9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1>Your Todos</h1>
            </div>

            <div id=\"status\">
                ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todos"]) ? $context["todos"] : $this->getContext($context, "todos")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 15
            echo "                    <br>
                    <div>  
                        <input class=\"checkbox\" type=\"checkbox\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            echo (($this->getAttribute($context["value"], 1, array(), "array")) ? ("checked") : (""));
            echo ">
                        <p class=\"toggle todo\" style=\"text-decoration: ";
            // line 18
            echo (($this->getAttribute($context["value"], 1, array(), "array")) ? ("line-through") : ("none"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], 0, array(), "array"), "html", null, true);
            echo "</p>
                        <input class=\"edit hidden\" data-index=\"";
            // line 19
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], 0, array(), "array"), "html", null, true);
            echo "\">
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete", array("id" => $context["key"])), "html", null, true);
            echo "\">X</a>
                    </div> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "  
            </div>
                            <h5>double click item to edit</h5>

        </div>
    </div>
";
        
        $__internal_43c29e567b3513cadda89c464a1dd8d8659ed86112b004f6936486c5cc3ce9bb->leave($__internal_43c29e567b3513cadda89c464a1dd8d8659ed86112b004f6936486c5cc3ce9bb_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c1bd705f673bbd8a0481a224b1a92d092e2de2686229a50a4468f4baac62ed8 = $this->env->getExtension("native_profiler");
        $__internal_3c1bd705f673bbd8a0481a224b1a92d092e2de2686229a50a4468f4baac62ed8->enter($__internal_3c1bd705f673bbd8a0481a224b1a92d092e2de2686229a50a4468f4baac62ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 31
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    p.todo { display: inline; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }
    .hidden { display: none}
    .required {display: none}


    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: inline; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_3c1bd705f673bbd8a0481a224b1a92d092e2de2686229a50a4468f4baac62ed8->leave($__internal_3c1bd705f673bbd8a0481a224b1a92d092e2de2686229a50a4468f4baac62ed8_prof);

    }

    public function getTemplateName()
    {
        return "default/todos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 31,  110 => 30,  97 => 22,  88 => 20,  82 => 19,  76 => 18,  70 => 17,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <div id="welcome">*/
/*                 <h1>Your Todos</h1>*/
/*             </div>*/
/* */
/*             <div id="status">*/
/*                 {{ form_start(form) }}*/
/*                 {{ form_widget(form) }}*/
/*                 {{ form_end(form) }}*/
/*                 {% for key, value in todos %}*/
/*                     <br>*/
/*                     <div>  */
/*                         <input class="checkbox" type="checkbox" value="{{key}}" {{value[1] ? 'checked'}}>*/
/*                         <p class="toggle todo" style="text-decoration: {{ value[1] ? 'line-through' : 'none' }}">{{value[0]}}</p>*/
/*                         <input class="edit hidden" data-index="{{key}}" value="{{value[0]}}">*/
/*                         <a href="{{ path('delete', {'id': key }) }}">X</a>*/
/*                     </div> */
/*                 {% endfor %}  */
/*             </div>*/
/*                             <h5>double click item to edit</h5>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     body { background: #F5F5F5; font: 18px/1.5 sans-serif; }*/
/*     h1, h2 { line-height: 1.2; margin: 0 0 .5em; }*/
/*     h1 { font-size: 36px; }*/
/*     h2 { font-size: 21px; margin-bottom: 1em; }*/
/*     p { margin: 0 0 1em 0; }*/
/*     p.todo { display: inline; }*/
/*     a { color: #0000F0; }*/
/*     a:hover { text-decoration: none; }*/
/*     code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }*/
/*     #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }*/
/*     #container { padding: 2em; }*/
/*     #welcome, #status { margin-bottom: 2em; }*/
/*     #welcome h1 span { display: block; font-size: 75%; }*/
/*     #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }*/
/*     #icon-book { display: none; }*/
/*     .hidden { display: none}*/
/*     .required {display: none}*/
/* */
/* */
/*     @media (min-width: 768px) {*/
/*         #wrapper { width: 80%; margin: 2em auto; }*/
/*         #icon-book { display: inline-block; }*/
/*         #status a, #next a { display: inline; }*/
/* */
/*         @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* */
