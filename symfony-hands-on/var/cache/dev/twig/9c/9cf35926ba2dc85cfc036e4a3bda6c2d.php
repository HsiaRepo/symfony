<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* helloController/_message.html.twig */
class __TwigTemplate_1f0dbe776aeeadc6463b370e1d4c4edb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "helloController/_message.html.twig"));

        // line 1
        echo "<div style=\"color: greenyellow\">
    ";
        // line 2
        if ((twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 2, $this->source); })()), "created", [], "any", false, false, false, 2)) < twig_date_converter($this->env, "-1year"))) {
            // line 3
            echo "        Older than a year
    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 5, $this->source); })()), "created", [], "any", false, false, false, 5), "m/d/y"), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "helloController/_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  49 => 5,  45 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"color: greenyellow\">
    {% if date(message.created) < date('-1year') %}
        Older than a year
    {% else %}
        {{ message.created|date('m/d/y') }}
    {% endif %}
</div>", "helloController/_message.html.twig", "/Users/lhsia/Desktop/GitHub/symfony/symfony-hands-on/templates/helloController/_message.html.twig");
    }
}
