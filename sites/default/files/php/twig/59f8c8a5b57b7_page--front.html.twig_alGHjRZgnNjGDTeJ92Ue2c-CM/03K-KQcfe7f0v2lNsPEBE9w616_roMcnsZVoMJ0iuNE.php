<?php

/* themes/custom/drupalplay/page--front.html.twig */
class __TwigTemplate_3cd27b111e55820521aaa2f1bfb06741ab296afab64b9521085e049cfcf9ced5 extends Twig_Template
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
        $__internal_736465be837bef5a6e3a2c5a6d7bbff0d565d944701ade2d6a2265a37769d549 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_736465be837bef5a6e3a2c5a6d7bbff0d565d944701ade2d6a2265a37769d549->enter($__internal_736465be837bef5a6e3a2c5a6d7bbff0d565d944701ade2d6a2265a37769d549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/drupalplay/page--front.html.twig"));

        $tags = array("if" => 14);
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
        echo "<div class=\"layout-container\">

  <header role=\"banner\" class=\"ax-header\">
      ";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "      
  </header>

  <main role=\"main\">
    
    <div class=\"layout-content\">
      ";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
    </div>
  </main>

  ";
        // line 14
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 15
            echo "    <footer role=\"contentinfo\">
      ";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 19
        echo "
</div>";
        
        $__internal_736465be837bef5a6e3a2c5a6d7bbff0d565d944701ade2d6a2265a37769d549->leave($__internal_736465be837bef5a6e3a2c5a6d7bbff0d565d944701ade2d6a2265a37769d549_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/drupalplay/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  72 => 16,  69 => 15,  67 => 14,  60 => 10,  51 => 4,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"layout-container\">

  <header role=\"banner\" class=\"ax-header\">
      {{ page.header }}      
  </header>

  <main role=\"main\">
    
    <div class=\"layout-content\">
      {{ page.content }}
    </div>
  </main>

  {% if page.footer %}
    <footer role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endif %}

</div>", "themes/custom/drupalplay/page--front.html.twig", "/var/www/html/drupal/8.4/themes/custom/drupalplay/page--front.html.twig");
    }
}
