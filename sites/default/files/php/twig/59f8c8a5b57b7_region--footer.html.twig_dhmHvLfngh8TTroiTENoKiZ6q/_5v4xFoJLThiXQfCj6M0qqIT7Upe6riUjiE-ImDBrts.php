<?php

/* themes/custom/drupalplay/region--footer.html.twig */
class __TwigTemplate_dc1567b3c5c43cea60801654c271a5b81d3c2701dc6045aa8abc5f4cf131adfc extends Twig_Template
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
        $__internal_ed659c18da132ee1c4ece0358c0a307e6af1b04fde62f792e0fa24696a757b29 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed659c18da132ee1c4ece0358c0a307e6af1b04fde62f792e0fa24696a757b29->enter($__internal_ed659c18da132ee1c4ece0358c0a307e6af1b04fde62f792e0fa24696a757b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/drupalplay/region--footer.html.twig"));

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
        echo "<div class=\"footer-top\">
\t<p>We've helped agencies keep their promises to clients since 2005.</p>
</div>

<div class=\"footer-bottom-wrapper\">

\t<div class=\"left-box\">
\t\t";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
\t</div>
\t<div class=\"right-box\">
\t\t<form action=\"#\" method=\"POST\">
\t\t\t<h2>Message Axelerant</h2>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"qs\">Let's connect today.*</label>
\t\t\t\t<textarea class=\"form-control\" name=\"qs\" id=\"qs\" placeholder=\"Ask us a question. We're here for help\" width=\"100%\"></textarea>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"fn\">First Name*</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"fn\" id=\"fn\" placeholder=\"E.g. Sanyam\">
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"em\">Email*</label>
\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"em\" id=\"em\" placeholder=\"E.g. codewithsam@gmail.com\">
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"ph\">Phone Number</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"ph\" id=\"ph\" placeholder=\"E.g. +91 98880-06022\">
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Submit</button>
\t\t</form>
\t</div>

</div>";
        
        $__internal_ed659c18da132ee1c4ece0358c0a307e6af1b04fde62f792e0fa24696a757b29->leave($__internal_ed659c18da132ee1c4ece0358c0a307e6af1b04fde62f792e0fa24696a757b29_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/drupalplay/region--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer-top\">
\t<p>We've helped agencies keep their promises to clients since 2005.</p>
</div>

<div class=\"footer-bottom-wrapper\">

\t<div class=\"left-box\">
\t\t{{content}}
\t</div>
\t<div class=\"right-box\">
\t\t<form action=\"#\" method=\"POST\">
\t\t\t<h2>Message Axelerant</h2>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"qs\">Let's connect today.*</label>
\t\t\t\t<textarea class=\"form-control\" name=\"qs\" id=\"qs\" placeholder=\"Ask us a question. We're here for help\" width=\"100%\"></textarea>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"fn\">First Name*</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"fn\" id=\"fn\" placeholder=\"E.g. Sanyam\">
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"em\">Email*</label>
\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"em\" id=\"em\" placeholder=\"E.g. codewithsam@gmail.com\">
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"ph\">Phone Number</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"ph\" id=\"ph\" placeholder=\"E.g. +91 98880-06022\">
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Submit</button>
\t\t</form>
\t</div>

</div>", "themes/custom/drupalplay/region--footer.html.twig", "/var/www/html/drupal/8.4/themes/custom/drupalplay/region--footer.html.twig");
    }
}
