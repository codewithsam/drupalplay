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
        $__internal_3b1ea44f80b71a2559d8d25dc6021dc9fd2d2e42e3b19b78569261055a8e8fb5 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1ea44f80b71a2559d8d25dc6021dc9fd2d2e42e3b19b78569261055a8e8fb5->enter($__internal_3b1ea44f80b71a2559d8d25dc6021dc9fd2d2e42e3b19b78569261055a8e8fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/drupalplay/block--herobanner.html.twig"));

        $tags = array("if" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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
\t\t";
        // line 3
        if ($this->getAttribute(($context["content"] ?? null), "field_hero_bg_img", array())) {
            // line 4
            echo "\t\t\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_hero_bg_img", array()), "html", null, true));
            echo "
\t\t";
        }
        // line 6
        echo "
\t\t<h2>";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_banner_header", array()), "html", null, true));
        echo "</h2>
\t\t<p>";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_banner_line_1", array()), "html", null, true));
        echo "</p>
\t\t<p>";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_banner_line_2", array()), "html", null, true));
        echo "</p>
\t\t<button class=\"btn btn-default\">Discover How</button>
\t</div>
</div>";
        
        $__internal_3b1ea44f80b71a2559d8d25dc6021dc9fd2d2e42e3b19b78569261055a8e8fb5->leave($__internal_3b1ea44f80b71a2559d8d25dc6021dc9fd2d2e42e3b19b78569261055a8e8fb5_prof);

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
        return array (  69 => 9,  65 => 8,  61 => 7,  58 => 6,  52 => 4,  50 => 3,  46 => 1,);
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
\t\t{% if content.field_hero_bg_img %}
\t\t\t{{content.field_hero_bg_img}}
\t\t{% endif %}

\t\t<h2>{{content.field_banner_header}}</h2>
\t\t<p>{{content.field_banner_line_1}}</p>
\t\t<p>{{content.field_banner_line_2}}</p>
\t\t<button class=\"btn btn-default\">Discover How</button>
\t</div>
</div>", "themes/custom/drupalplay/block--herobanner.html.twig", "/var/www/html/drupal/8.4/themes/custom/drupalplay/block--herobanner.html.twig");
    }
}
