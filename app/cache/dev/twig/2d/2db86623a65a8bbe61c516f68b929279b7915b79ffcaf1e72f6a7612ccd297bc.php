<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2df1ef00771c34e18b91f8f1997f0eefd0a1510a033596a5812b7def0c55e2e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_660cf4d90cbac344161d3d1c9f75aef3a002bf5c737dfff013fd5943b886536a = $this->env->getExtension("native_profiler");
        $__internal_660cf4d90cbac344161d3d1c9f75aef3a002bf5c737dfff013fd5943b886536a->enter($__internal_660cf4d90cbac344161d3d1c9f75aef3a002bf5c737dfff013fd5943b886536a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_660cf4d90cbac344161d3d1c9f75aef3a002bf5c737dfff013fd5943b886536a->leave($__internal_660cf4d90cbac344161d3d1c9f75aef3a002bf5c737dfff013fd5943b886536a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5308974d8cd8bee393f43395e6a3451b0cf861b94c1593f251772a8761bede35 = $this->env->getExtension("native_profiler");
        $__internal_5308974d8cd8bee393f43395e6a3451b0cf861b94c1593f251772a8761bede35->enter($__internal_5308974d8cd8bee393f43395e6a3451b0cf861b94c1593f251772a8761bede35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5308974d8cd8bee393f43395e6a3451b0cf861b94c1593f251772a8761bede35->leave($__internal_5308974d8cd8bee393f43395e6a3451b0cf861b94c1593f251772a8761bede35_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfb08d3f5abddab176adad2604bd67e02081309d9f30f544618ff41855da1614 = $this->env->getExtension("native_profiler");
        $__internal_bfb08d3f5abddab176adad2604bd67e02081309d9f30f544618ff41855da1614->enter($__internal_bfb08d3f5abddab176adad2604bd67e02081309d9f30f544618ff41855da1614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bfb08d3f5abddab176adad2604bd67e02081309d9f30f544618ff41855da1614->leave($__internal_bfb08d3f5abddab176adad2604bd67e02081309d9f30f544618ff41855da1614_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac4a4c276d9d56f34606eb7b4c8ffe2f7aeef602ae6af0b695e2d694e01a587e = $this->env->getExtension("native_profiler");
        $__internal_ac4a4c276d9d56f34606eb7b4c8ffe2f7aeef602ae6af0b695e2d694e01a587e->enter($__internal_ac4a4c276d9d56f34606eb7b4c8ffe2f7aeef602ae6af0b695e2d694e01a587e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ac4a4c276d9d56f34606eb7b4c8ffe2f7aeef602ae6af0b695e2d694e01a587e->leave($__internal_ac4a4c276d9d56f34606eb7b4c8ffe2f7aeef602ae6af0b695e2d694e01a587e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
