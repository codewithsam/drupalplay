<?php

/* themes/custom/drupalplay/block--herobanner.html.twig */
class __TwigTemplate_c38f16a84881bda5fc5fbd74468808bcb8135c4703c907bca9024cf9f88136f7 extends Twig_Template
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
        $__internal_48b6239107951e268cad3f448fcba2948f2c07f0fe7fd6774d1ac144f3fc1f20 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b6239107951e268cad3f448fcba2948f2c07f0fe7fd6774d1ac144f3fc1f20->enter($__internal_48b6239107951e268cad3f448fcba2948f2c07f0fe7fd6774d1ac144f3fc1f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/drupalplay/block--herobanner.html.twig"));

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

        // line 1
        echo "<div class=\"ax-hero-banner\">
\t<div class=\"wrapper\">
\t\t<h2>";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_banner_header", array()), "html", null, true));
        echo "</h2>
\t\t<p>";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_banner_line_1", array()), "html", null, true));
        echo "</p>
\t\t<p>";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_banner_line_2", array()), "html", null, true));
        echo "</p>
\t\t<button class=\"btn btn-default\">Discover How</button>
\t</div>
</div>";
        
        $__internal_48b6239107951e268cad3f448fcba2948f2c07f0fe7fd6774d1ac144f3fc1f20->leave($__internal_48b6239107951e268cad3f448fcba2948f2c07f0fe7fd6774d1ac144f3fc1f20_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/drupalplay/block--herobanner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 5,  54 => 4,  50 => 3,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ax-hero-banner\">
\t<div class=\"wrapper\">
\t\t<h2>{{content.field_banner_header}}</h2>
\t\t<p>{{content.field_banner_line_1}}</p>
\t\t<p>{{content.field_banner_line_2}}</p>
\t\t<button class=\"btn btn-default\">Discover How</button>
\t</div>
</div>", "themes/custom/drupalplay/block--herobanner.html.twig", "/var/www/html/drupal/8.4/themes/custom/drupalplay/block--herobanner.html.twig");
    }
}
