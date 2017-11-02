<?php

/* themes/custom/drupalplay/templates/misc/rdf-metadata.html.twig */
class __TwigTemplate_0cff0968f834ba039d83d2c22d4ea0ccd3cee642d9cce18ca35941d9a48371f1 extends Twig_Template
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
        $__internal_b78829215f633a6ec6045e22e121a2c31c21504f4f3c95e0e1965c8564798d27 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78829215f633a6ec6045e22e121a2c31c21504f4f3c95e0e1965c8564798d27->enter($__internal_b78829215f633a6ec6045e22e121a2c31c21504f4f3c95e0e1965c8564798d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/drupalplay/templates/misc/rdf-metadata.html.twig"));

        $tags = array("for" => 18);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["metadata"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
            // line 19
            echo "  <span";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["attributes"], "addClass", array(0 => "rdf-meta", 1 => "hidden"), "method"), "html", null, true));
            echo "></span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b78829215f633a6ec6045e22e121a2c31c21504f4f3c95e0e1965c8564798d27->leave($__internal_b78829215f633a6ec6045e22e121a2c31c21504f4f3c95e0e1965c8564798d27_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/drupalplay/templates/misc/rdf-metadata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 19,  46 => 18,);
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
 * Theme override for empty spans with RDF attributes.
 *
 * The XHTML+RDFa doctype allows either <span></span> or <span /> syntax to
 * be used, but for maximum browser compatibility, W3C recommends the
 * former when serving pages using the text/html media type, see
 * http://www.w3.org/TR/xhtml1/#C_3.
 *
 * Available variables:
 * - metadata: Each item within corresponds to its own set of attributes,
 *   and therefore, needs its own 'attributes' element.
 *
 * @see template_preprocess_rdf_metadata()
 */
#}
{% for attributes in metadata %}
  <span{{ attributes.addClass('rdf-meta', 'hidden') }}></span>
{% endfor %}
", "themes/custom/drupalplay/templates/misc/rdf-metadata.html.twig", "/var/www/html/drupal/8.4/themes/custom/drupalplay/templates/misc/rdf-metadata.html.twig");
    }
}
