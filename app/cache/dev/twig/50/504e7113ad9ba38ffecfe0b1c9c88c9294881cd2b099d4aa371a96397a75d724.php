<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3a0685f1a45fed6adc066ecafc0c0dfcebb5830d03841810e92a8885e486cde2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ac09662f7b58a5637bb36310b1cafac1c404461be5def1c1e78372f9756fc63 = $this->env->getExtension("native_profiler");
        $__internal_3ac09662f7b58a5637bb36310b1cafac1c404461be5def1c1e78372f9756fc63->enter($__internal_3ac09662f7b58a5637bb36310b1cafac1c404461be5def1c1e78372f9756fc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ac09662f7b58a5637bb36310b1cafac1c404461be5def1c1e78372f9756fc63->leave($__internal_3ac09662f7b58a5637bb36310b1cafac1c404461be5def1c1e78372f9756fc63_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7661c86aec5a5c13e27203e470c58fb7d01bbc4a309888c0f92cdb054a13dd38 = $this->env->getExtension("native_profiler");
        $__internal_7661c86aec5a5c13e27203e470c58fb7d01bbc4a309888c0f92cdb054a13dd38->enter($__internal_7661c86aec5a5c13e27203e470c58fb7d01bbc4a309888c0f92cdb054a13dd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7661c86aec5a5c13e27203e470c58fb7d01bbc4a309888c0f92cdb054a13dd38->leave($__internal_7661c86aec5a5c13e27203e470c58fb7d01bbc4a309888c0f92cdb054a13dd38_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff596843af27eefe53740dac7ac858cee0e6ab304f35f86823766753dfd93191 = $this->env->getExtension("native_profiler");
        $__internal_ff596843af27eefe53740dac7ac858cee0e6ab304f35f86823766753dfd93191->enter($__internal_ff596843af27eefe53740dac7ac858cee0e6ab304f35f86823766753dfd93191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ff596843af27eefe53740dac7ac858cee0e6ab304f35f86823766753dfd93191->leave($__internal_ff596843af27eefe53740dac7ac858cee0e6ab304f35f86823766753dfd93191_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f95381212b78f9e82f337d698e1ffe9263d035db960b3a437339d014377995c = $this->env->getExtension("native_profiler");
        $__internal_3f95381212b78f9e82f337d698e1ffe9263d035db960b3a437339d014377995c->enter($__internal_3f95381212b78f9e82f337d698e1ffe9263d035db960b3a437339d014377995c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3f95381212b78f9e82f337d698e1ffe9263d035db960b3a437339d014377995c->leave($__internal_3f95381212b78f9e82f337d698e1ffe9263d035db960b3a437339d014377995c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
