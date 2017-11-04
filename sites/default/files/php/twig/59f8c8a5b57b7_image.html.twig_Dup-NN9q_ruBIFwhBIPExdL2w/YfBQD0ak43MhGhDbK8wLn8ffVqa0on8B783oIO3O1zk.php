<?php

/* themes/custom/drupalplay/templates/field/image.html.twig */
class __TwigTemplate_52d88052794c18b7286c1027becb37221515a4fe4d64c0393a3adf75667a2c62 extends Twig_Template
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
        $__internal_74dd95579435c1dc575ba7c9d702bada355e56166aae975c3d92bcf836c19d60 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_74dd95579435c1dc575ba7c9d702bada355e56166aae975c3d92bcf836c19d60->enter($__internal_74dd95579435c1dc575ba7c9d702bada355e56166aae975c3d92bcf836c19d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/drupalplay/templates/field/image.html.twig"));

        $tags = array("set" => 14);
        $filters = array("clean_class" => 15);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array('clean_class'),
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

        // line 14
        $context["classes"] = array(0 => ((        // line 15
($context["style_name"] ?? null)) ? (("image-style-" . \Drupal\Component\Utility\Html::getClass(($context["style_name"] ?? null)))) : ("")));
        // line 18
        echo "<img";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo " />
";
        
        $__internal_74dd95579435c1dc575ba7c9d702bada355e56166aae975c3d92bcf836c19d60->leave($__internal_74dd95579435c1dc575ba7c9d702bada355e56166aae975c3d92bcf836c19d60_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/drupalplay/templates/field/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 18,  47 => 15,  46 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Theme override of an image.
 *
 * Available variables:
 * - attributes: HTML attributes for the img tag.
 * - style_name: (optional) The name of the image style applied.
 *
 * @see template_preprocess_image()
 */
#}
{%
set classes = [
  style_name ? 'image-style-' ~ style_name|clean_class,
]
%}
<img{{ attributes.addClass(classes) }} />
", "themes/custom/drupalplay/templates/field/image.html.twig", "/var/www/html/drupal/8.4/themes/custom/drupalplay/templates/field/image.html.twig");
    }
}
