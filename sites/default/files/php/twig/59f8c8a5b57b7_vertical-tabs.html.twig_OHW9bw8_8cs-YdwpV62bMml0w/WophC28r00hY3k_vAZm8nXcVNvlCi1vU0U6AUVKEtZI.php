<?php

/* core/themes/classy/templates/navigation/vertical-tabs.html.twig */
class __TwigTemplate_17de58add493bea9451c19385f1af79c69db195237759f08516bdba08ca7bd5a extends Twig_Template
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
        $__internal_4b7f52a6ab6b1bfa75be634c2b6c64642e3c6b3b9744a03ce83fe468a2f431a3 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7f52a6ab6b1bfa75be634c2b6c64642e3c6b3b9744a03ce83fe468a2f431a3->enter($__internal_4b7f52a6ab6b1bfa75be634c2b6c64642e3c6b3b9744a03ce83fe468a2f431a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/navigation/vertical-tabs.html.twig"));

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

        // line 13
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "setAttribute", array(0 => "data-vertical-tabs-panes", 1 => true), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "</div>
";
        
        $__internal_4b7f52a6ab6b1bfa75be634c2b6c64642e3c6b3b9744a03ce83fe468a2f431a3->leave($__internal_4b7f52a6ab6b1bfa75be634c2b6c64642e3c6b3b9744a03ce83fe468a2f431a3_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/vertical-tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,);
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
 * Theme override for vertical tabs.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the wrapper element.
 * - children: The rendered tabs.
 *
 * @see template_preprocess_vertical_tabs()
 */
#}
<div{{ attributes.setAttribute('data-vertical-tabs-panes', TRUE) }}>{{ children }}</div>
", "core/themes/classy/templates/navigation/vertical-tabs.html.twig", "/var/www/html/drupal/8.4/core/themes/classy/templates/navigation/vertical-tabs.html.twig");
    }
}
