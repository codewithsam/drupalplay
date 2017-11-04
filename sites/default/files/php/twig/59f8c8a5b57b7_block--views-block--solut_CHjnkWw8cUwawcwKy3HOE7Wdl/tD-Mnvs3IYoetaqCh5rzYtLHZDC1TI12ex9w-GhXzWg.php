<?php

/* themes/custom/drupalplay/block--views-block--solutions-row-block-1.html.twig */
class __TwigTemplate_9862d346ee026cdf77a5d7e5a1854e24a8a6e68d0f73c5cd126d09113fcf54c6 extends Twig_Template
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
        $__internal_76a94393ab45db828b909e1139fca5594a05ccc1ab2d9fc22a68b35165b41e33 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a94393ab45db828b909e1139fca5594a05ccc1ab2d9fc22a68b35165b41e33->enter($__internal_76a94393ab45db828b909e1139fca5594a05ccc1ab2d9fc22a68b35165b41e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/drupalplay/block--views-block--solutions-row-block-1.html.twig"));

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
        echo "<div class=\"ax-solutions-row\">
";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "\t
</div>\t\t
";
        
        $__internal_76a94393ab45db828b909e1139fca5594a05ccc1ab2d9fc22a68b35165b41e33->leave($__internal_76a94393ab45db828b909e1139fca5594a05ccc1ab2d9fc22a68b35165b41e33_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/drupalplay/block--views-block--solutions-row-block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 2,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ax-solutions-row\">
{{content}}\t
</div>\t\t
", "themes/custom/drupalplay/block--views-block--solutions-row-block-1.html.twig", "/var/www/html/drupal/8.4/themes/custom/drupalplay/block--views-block--solutions-row-block-1.html.twig");
    }
}
