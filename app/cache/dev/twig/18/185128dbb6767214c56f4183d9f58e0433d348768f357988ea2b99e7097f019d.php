<?php

/* base.html.twig */
class __TwigTemplate_c3d074fb40976819c6f78719eccb87dad1cb0f1c7d8529055185cf814f231fc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89eafd60dc593643a047510b3e8bca319a3592fe8c71be5aeecc72fab5f688ad = $this->env->getExtension("native_profiler");
        $__internal_89eafd60dc593643a047510b3e8bca319a3592fe8c71be5aeecc72fab5f688ad->enter($__internal_89eafd60dc593643a047510b3e8bca319a3592fe8c71be5aeecc72fab5f688ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-2.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/js/script.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_89eafd60dc593643a047510b3e8bca319a3592fe8c71be5aeecc72fab5f688ad->leave($__internal_89eafd60dc593643a047510b3e8bca319a3592fe8c71be5aeecc72fab5f688ad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_96210e3ea25a3c07a4792b848e73a18524191fc2f6bcb598174c4d7e3882e5b6 = $this->env->getExtension("native_profiler");
        $__internal_96210e3ea25a3c07a4792b848e73a18524191fc2f6bcb598174c4d7e3882e5b6->enter($__internal_96210e3ea25a3c07a4792b848e73a18524191fc2f6bcb598174c4d7e3882e5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_96210e3ea25a3c07a4792b848e73a18524191fc2f6bcb598174c4d7e3882e5b6->leave($__internal_96210e3ea25a3c07a4792b848e73a18524191fc2f6bcb598174c4d7e3882e5b6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ea07842c6e0bba198cae5d01a5e4db0b38bcccebdd6a69fe36c69896851014d = $this->env->getExtension("native_profiler");
        $__internal_9ea07842c6e0bba198cae5d01a5e4db0b38bcccebdd6a69fe36c69896851014d->enter($__internal_9ea07842c6e0bba198cae5d01a5e4db0b38bcccebdd6a69fe36c69896851014d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9ea07842c6e0bba198cae5d01a5e4db0b38bcccebdd6a69fe36c69896851014d->leave($__internal_9ea07842c6e0bba198cae5d01a5e4db0b38bcccebdd6a69fe36c69896851014d_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_daac84211626f60ddcaa48736f97a76193dcafc862089194cbb9ee15a65ca9b8 = $this->env->getExtension("native_profiler");
        $__internal_daac84211626f60ddcaa48736f97a76193dcafc862089194cbb9ee15a65ca9b8->enter($__internal_daac84211626f60ddcaa48736f97a76193dcafc862089194cbb9ee15a65ca9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_daac84211626f60ddcaa48736f97a76193dcafc862089194cbb9ee15a65ca9b8->leave($__internal_daac84211626f60ddcaa48736f97a76193dcafc862089194cbb9ee15a65ca9b8_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f1c17e6d79d9a2e8060c719e3b1f5459dfb3ec18c1cadd005db97c6c291678d = $this->env->getExtension("native_profiler");
        $__internal_5f1c17e6d79d9a2e8060c719e3b1f5459dfb3ec18c1cadd005db97c6c291678d->enter($__internal_5f1c17e6d79d9a2e8060c719e3b1f5459dfb3ec18c1cadd005db97c6c291678d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5f1c17e6d79d9a2e8060c719e3b1f5459dfb3ec18c1cadd005db97c6c291678d->leave($__internal_5f1c17e6d79d9a2e8060c719e3b1f5459dfb3ec18c1cadd005db97c6c291678d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 13,  87 => 12,  76 => 6,  64 => 5,  55 => 14,  52 => 13,  50 => 12,  44 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <script type="text/javascript" src="http://code.jquery.com/jquery-2.2.1.min.js"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/framework/js/script.js') }}"></script>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
