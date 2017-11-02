<?php

/* themes/custom/drupalplay/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_9d0618beb689fa6cc38589d2337eec373fb7d9113598fdbe45a58483e0f2c384 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/custom/drupalplay/templates/block/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43abcdc994dbea75db11252bb3deb0a7307684d2e4ffc640c7b96eb1a1573cba = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_43abcdc994dbea75db11252bb3deb0a7307684d2e4ffc640c7b96eb1a1573cba->enter($__internal_43abcdc994dbea75db11252bb3deb0a7307684d2e4ffc640c7b96eb1a1573cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/drupalplay/templates/block/block--system-branding-block.html.twig"));

        $tags = array("if" => 17);
        $filters = array("t" => 18);
        $functions = array("path" => 18);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array('path')
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
        
        $__internal_43abcdc994dbea75db11252bb3deb0a7307684d2e4ffc640c7b96eb1a1573cba->leave($__internal_43abcdc994dbea75db11252bb3deb0a7307684d2e4ffc640c7b96eb1a1573cba_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_3884250ce196fb4e227cebd173d4a1411eabcc2d3d8bb9c2dd19c6cb2d376f61 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_3884250ce196fb4e227cebd173d4a1411eabcc2d3d8bb9c2dd19c6cb2d376f61->enter($__internal_3884250ce196fb4e227cebd173d4a1411eabcc2d3d8bb9c2dd19c6cb2d376f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "  ";
        if (($context["site_logo"] ?? null)) {
            // line 18
            echo "    <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" rel=\"home\" class=\"site-logo\">
      <img src=\"";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" />
    </a>
  ";
        }
        // line 22
        echo "  ";
        if (($context["site_name"] ?? null)) {
            // line 23
            echo "    <div class=\"site-name\">
      <a href=\"";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" rel=\"home\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
            echo "</a>
    </div>
  ";
        }
        // line 27
        echo "  ";
        if (($context["site_slogan"] ?? null)) {
            // line 28
            echo "    <div class=\"site-slogan\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
            echo "</div>
  ";
        }
        
        $__internal_3884250ce196fb4e227cebd173d4a1411eabcc2d3d8bb9c2dd19c6cb2d376f61->leave($__internal_3884250ce196fb4e227cebd173d4a1411eabcc2d3d8bb9c2dd19c6cb2d376f61_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/drupalplay/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  98 => 27,  88 => 24,  85 => 23,  82 => 22,  74 => 19,  67 => 18,  64 => 17,  58 => 16,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Theme override for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 */
#}
{% block content %}
  {% if site_logo %}
    <a href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\" class=\"site-logo\">
      <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" />
    </a>
  {% endif %}
  {% if site_name %}
    <div class=\"site-name\">
      <a href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name }}</a>
    </div>
  {% endif %}
  {% if site_slogan %}
    <div class=\"site-slogan\">{{ site_slogan }}</div>
  {% endif %}
{% endblock %}
", "themes/custom/drupalplay/templates/block/block--system-branding-block.html.twig", "/var/www/html/drupal/8.4/themes/custom/drupalplay/templates/block/block--system-branding-block.html.twig");
    }
}
