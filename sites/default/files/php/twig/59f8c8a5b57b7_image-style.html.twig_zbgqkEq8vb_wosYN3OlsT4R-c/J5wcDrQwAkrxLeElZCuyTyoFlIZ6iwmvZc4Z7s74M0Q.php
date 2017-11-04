<?php

/* themes/custom/drupalplay/templates/field/image-style.html.twig */
class __TwigTemplate_73e3a548c53e4511dfeb10fd1bb2877a93a1f91ece45144b324b6a469bb67ce6 extends Twig_Template
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
        $__internal_798fc9482657ad0b91d1cb3e2b98d1a6a911cd93d8ffe7b082bc0eb9dfd4a1ec = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_798fc9482657ad0b91d1cb3e2b98d1a6a911cd93d8ffe7b082bc0eb9dfd4a1ec->enter($__internal_798fc9482657ad0b91d1cb3e2b98d1a6a911cd93d8ffe7b082bc0eb9dfd4a1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/drupalplay/templates/field/image-style.html.twig"));

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

        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["image"] ?? null), "html", null, true));
        echo "
";
        
        $__internal_798fc9482657ad0b91d1cb3e2b98d1a6a911cd93d8ffe7b082bc0eb9dfd4a1ec->leave($__internal_798fc9482657ad0b91d1cb3e2b98d1a6a911cd93d8ffe7b082bc0eb9dfd4a1ec_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/drupalplay/templates/field/image-style.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 18,);
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
 * Theme override for an image using a specific image style.
 *
 * Available variables:
 * - attributes: HTML attributes for the image, including the following:
 *   - src: Full URL or relative path to the image file.
 *   - class: One or more classes to be applied to the image.
 *   - width: The width of the image (if known).
 *   - height: The height of the image (if known).
 *   - title: The title of the image.
 *   - alt: The alternative text for the image.
 *
 * @see template_preprocess_image_style()
 */
#}
{{ image }}
", "themes/custom/drupalplay/templates/field/image-style.html.twig", "/var/www/html/drupal/8.4/themes/custom/drupalplay/templates/field/image-style.html.twig");
    }
}
