<?php

/* themes/custom/drupalplay/block--tasknumber.html.twig */
class __TwigTemplate_945157bdf76b46edd8e23c5e9481c4400fe8733b09d8fe0dad7f8633e95ad66a extends Twig_Template
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
        $__internal_4c29866d7a4fcd0b97c92912232e13e8a600f3f09205d910989316a2951e7362 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c29866d7a4fcd0b97c92912232e13e8a600f3f09205d910989316a2951e7362->enter($__internal_4c29866d7a4fcd0b97c92912232e13e8a600f3f09205d910989316a2951e7362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/drupalplay/block--tasknumber.html.twig"));

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
        echo "
<div class=\"ax-task-number row\">
\t<div class=\"col-sm-3\">
\t\t<h1>";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_header_1", array()), "html", null, true));
        echo "</h1>
\t\t<p>";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_span_1", array()), "html", null, true));
        echo "</p>
\t</div>
\t<div class=\"col-sm-3\">
\t\t<h1>";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_header_2", array()), "html", null, true));
        echo "</h1>
\t\t<p>";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_span_2", array()), "html", null, true));
        echo "</p>
\t</div>
\t<div class=\"col-sm-3\">
\t\t<h1>";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_header_3", array()), "html", null, true));
        echo "</h1>
\t\t<p>";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_span_3", array()), "html", null, true));
        echo "</p>
\t</div>
\t<div class=\"col-sm-3\">
\t\t<h1>";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_header_4", array()), "html", null, true));
        echo "</h1>
\t\t<p>";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_span_4", array()), "html", null, true));
        echo "</p>
\t</div>
</div>";
        
        $__internal_4c29866d7a4fcd0b97c92912232e13e8a600f3f09205d910989316a2951e7362->leave($__internal_4c29866d7a4fcd0b97c92912232e13e8a600f3f09205d910989316a2951e7362_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/drupalplay/block--tasknumber.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 17,  81 => 16,  75 => 13,  71 => 12,  65 => 9,  61 => 8,  55 => 5,  51 => 4,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"ax-task-number row\">
\t<div class=\"col-sm-3\">
\t\t<h1>{{content.field_header_1}}</h1>
\t\t<p>{{content.field_span_1}}</p>
\t</div>
\t<div class=\"col-sm-3\">
\t\t<h1>{{content.field_header_2}}</h1>
\t\t<p>{{content.field_span_2}}</p>
\t</div>
\t<div class=\"col-sm-3\">
\t\t<h1>{{content.field_header_3}}</h1>
\t\t<p>{{content.field_span_3}}</p>
\t</div>
\t<div class=\"col-sm-3\">
\t\t<h1>{{content.field_header_4}}</h1>
\t\t<p>{{content.field_span_4}}</p>
\t</div>
</div>", "themes/custom/drupalplay/block--tasknumber.html.twig", "/var/www/html/drupal/8.4/themes/custom/drupalplay/block--tasknumber.html.twig");
    }
}
