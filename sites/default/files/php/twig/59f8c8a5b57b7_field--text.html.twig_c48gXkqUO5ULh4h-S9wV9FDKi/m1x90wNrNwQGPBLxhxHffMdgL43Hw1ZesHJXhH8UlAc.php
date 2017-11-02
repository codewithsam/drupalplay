<?php

/* themes/custom/drupalplay/templates/field/field--text.html.twig */
class __TwigTemplate_88c5c27e652d8a68cd9345e2396ad5294a5f24d354670e816e3d77f9b3ed4cdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("field.html.twig", "themes/custom/drupalplay/templates/field/field--text.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb0ad881ee463f08e1c96d2bd62fe04011347f0895d9e1b022d449eff0db0bd5 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0ad881ee463f08e1c96d2bd62fe04011347f0895d9e1b022d449eff0db0bd5->enter($__internal_bb0ad881ee463f08e1c96d2bd62fe04011347f0895d9e1b022d449eff0db0bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/drupalplay/templates/field/field--text.html.twig"));

        $tags = array("set" => 28);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
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

        // line 28
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "clearfix", 1 => "text-formatted"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb0ad881ee463f08e1c96d2bd62fe04011347f0895d9e1b022d449eff0db0bd5->leave($__internal_bb0ad881ee463f08e1c96d2bd62fe04011347f0895d9e1b022d449eff0db0bd5_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/drupalplay/templates/field/field--text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 1,  51 => 28,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"field.html.twig\" %}
{#
/**
 * @file
 * Default theme implementation for a text field.
 *
 * A 'clearfix' class is added, because 'text' fields have a 'format' property
 * that allows a Text Format to be associated with the entered text, which then
 * applies filtering on output. A common use case is to align images to the left
 * or right, and without this 'clearfix' class, such aligned images may be
 * rendered outside of the 'text' field formatter's boundaries, and hence
 * overlap with other fields. By setting the 'clearfix' class on all 'text'
 * fields, we prevent that.
 *
 * @see https://www.drupal.org/node/2358529
 *
 * A 'text-formatted' class is added to assist with default styling of base
 * elements such as paragraphs and lists that may not have classes assigned to
 * them. This allows user entered content to have default styling without
 * interfering with the styles of other UI components such as system generated
 * lists or other dynamic content.
 *
 * @see https://www.drupal.org/node/2539860
 *
 * @ingroup themeable
 */
#}
{% set attributes = attributes.addClass('clearfix', 'text-formatted') %}
", "themes/custom/drupalplay/templates/field/field--text.html.twig", "/var/www/html/drupal/8.4/themes/custom/drupalplay/templates/field/field--text.html.twig");
    }
}
