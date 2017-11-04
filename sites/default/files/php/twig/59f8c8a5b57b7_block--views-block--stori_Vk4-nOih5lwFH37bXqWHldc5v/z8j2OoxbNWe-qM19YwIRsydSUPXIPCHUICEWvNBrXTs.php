<?php

/* themes/custom/drupalplay/block--views-block--stories-block-1.html.twig */
class __TwigTemplate_1ac295f26303105f3f278b9d336a5b4737e89e3b7b82b1e64d4194dc453fc8f6 extends Twig_Template
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
        $__internal_cb378e860797f29fc93b7c079c24d27f948163ff4a0de949e7e976a6ecaad641 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb378e860797f29fc93b7c079c24d27f948163ff4a0de949e7e976a6ecaad641->enter($__internal_cb378e860797f29fc93b7c079c24d27f948163ff4a0de949e7e976a6ecaad641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/drupalplay/block--views-block--stories-block-1.html.twig"));

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
        echo "<div class=\"ax-row-stories\">
\t";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
</div>
<div class=\"stories-footer\">
\t<h1>We don't compete with you, we collaborate.</h1>
\t<div class=\"stories-footer-back\">
\t\t<img src=\"./themes/custom/drupalplay/images/collab.png\" alt=\"Collaborate\">
\t</div>
</div>
";
        
        $__internal_cb378e860797f29fc93b7c079c24d27f948163ff4a0de949e7e976a6ecaad641->leave($__internal_cb378e860797f29fc93b7c079c24d27f948163ff4a0de949e7e976a6ecaad641_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/drupalplay/block--views-block--stories-block-1.html.twig";
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
        return new Twig_Source("<div class=\"ax-row-stories\">
\t{{content}}
</div>
<div class=\"stories-footer\">
\t<h1>We don't compete with you, we collaborate.</h1>
\t<div class=\"stories-footer-back\">
\t\t<img src=\"./themes/custom/drupalplay/images/collab.png\" alt=\"Collaborate\">
\t</div>
</div>
", "themes/custom/drupalplay/block--views-block--stories-block-1.html.twig", "/var/www/html/drupal/8.4/themes/custom/drupalplay/block--views-block--stories-block-1.html.twig");
    }
}
