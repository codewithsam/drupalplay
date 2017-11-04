<?php

/* themes/custom/drupalplay/block--views-block--services-row-block-1.html.twig */
class __TwigTemplate_a536c1a75efa27f73786b30c9bba3450dea20ec105e82995bcc98d19ba7a73f8 extends Twig_Template
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
        $__internal_ccca29d49f164d5bf49abfb3072e9e97498434a01b0669e1fe4f7143987a4b66 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccca29d49f164d5bf49abfb3072e9e97498434a01b0669e1fe4f7143987a4b66->enter($__internal_ccca29d49f164d5bf49abfb3072e9e97498434a01b0669e1fe4f7143987a4b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/drupalplay/block--views-block--services-row-block-1.html.twig"));

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
<div class=\"ax-row-services\">
";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "\t
</div>
";
        
        $__internal_ccca29d49f164d5bf49abfb3072e9e97498434a01b0669e1fe4f7143987a4b66->leave($__internal_ccca29d49f164d5bf49abfb3072e9e97498434a01b0669e1fe4f7143987a4b66_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/drupalplay/block--views-block--services-row-block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 1,);
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
<div class=\"ax-row-services\">
{{content}}\t
</div>
", "themes/custom/drupalplay/block--views-block--services-row-block-1.html.twig", "/var/www/html/drupal/8.4/themes/custom/drupalplay/block--views-block--services-row-block-1.html.twig");
    }
}
