<?php

/* themes/custom/drupalplay/templates/field/field--text-with-summary.html.twig */
class __TwigTemplate_2e1b98523ab75bff8eff888ff40d0a377c83f9b0d2dc97f168705bfa927a71ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("field--text.html.twig", "themes/custom/drupalplay/templates/field/field--text-with-summary.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "field--text.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb35bbae714da62bef7e6c774ea78aaadd0e8edff468175bbe9e028ec7657f8a = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb35bbae714da62bef7e6c774ea78aaadd0e8edff468175bbe9e028ec7657f8a->enter($__internal_eb35bbae714da62bef7e6c774ea78aaadd0e8edff468175bbe9e028ec7657f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/drupalplay/templates/field/field--text-with-summary.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb35bbae714da62bef7e6c774ea78aaadd0e8edff468175bbe9e028ec7657f8a->leave($__internal_eb35bbae714da62bef7e6c774ea78aaadd0e8edff468175bbe9e028ec7657f8a_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/drupalplay/templates/field/field--text-with-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"field--text.html.twig\" %}
", "themes/custom/drupalplay/templates/field/field--text-with-summary.html.twig", "/var/www/html/drupal/8.4/themes/custom/drupalplay/templates/field/field--text-with-summary.html.twig");
    }
}
