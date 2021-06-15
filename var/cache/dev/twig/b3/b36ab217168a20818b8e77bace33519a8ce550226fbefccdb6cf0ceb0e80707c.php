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

/* calculatrice/index.html.twig */
class __TwigTemplate_604f73da1d96d668ac0fb54c6648db67495a442563b48e2fd288cab0257f2075 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts2' => [$this, 'block_javascripts2'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calculatrice/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calculatrice/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "calculatrice/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello CalculatriceController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
        <div class=\"container\">
            ";
        // line 8
        $this->loadTemplate("./components/header.html.twig", "calculatrice/index.html.twig", 8)->display($context);
        // line 9
        echo "        <div style=\"padding-top: 90px;\">
        <div style=\"margin: auto; width:426px; border-radius: 5px; border: 1px solid silver; padding-top: 4px; ; padding-bottom: 4px;\">
        <!--<legend>
            <h3 class=\"blueRedspher\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["title3"]) || array_key_exists("title3", $context) ? $context["title3"] : (function () { throw new RuntimeError('Variable "title3" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</h3>
        </legend>-->

        <div id=\"blocRes\">
                <div style=\"width:410px; height:30px;\" id=\"operation\"></div>
                <div><input id=\"res\" value=\"0\" type=\"text\" disabled></div>
        </div>
        <div style=\"margin-top:10px\">
            <button value=\"7\" class=\"btn chiffre\">7</button>
            <button value=\"8\" class=\"btn chiffre\">8</button>
            <button value=\"9\" class=\"btn chiffre\">9</button>
            <button value=\"/\" class=\"btn operator\">/</button>
        </div>
        <div style=\"margin-top:10px\">
            <button value=\"4\" class=\"btn chiffre\">4</button>
            <button value=\"5\" class=\"btn chiffre\">5</button>
            <button value=\"6\" class=\"btn chiffre\">6</button>
            <button value=\"*\" class=\"btn operator\">*</button>
        </div>
        <div style=\"margin-top:10px\">
            <button value=\"1\" class=\"btn chiffre\">1</button>
            <button value=\"2\" class=\"btn chiffre\">2</button>
            <button value=\"3\" class=\"btn chiffre\">3</button>
            <button value=\"-\" class=\"btn operator\">-</button>
        </div>
        <div style=\"margin-top:10px\">
            <button value=\"0\" class=\"btn chiffre\">0</button>
            <button value=\".\" class=\"btn chiffre\">.</button>
            <button value=\"ac\" class=\"btn operator clear\">AC</button>
            <button value=\"+\" class=\"btn operator\">+</button>
        </div>
        <div style=\"margin-top:10px\">
            <button value=\"=\" class=\"btn egal\">=</button>
        </div>
        </div>
        </div>
            ";
        // line 48
        $this->loadTemplate("./components/footer.html.twig", "calculatrice/index.html.twig", 48)->display($context);
        // line 49
        echo "        </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_javascripts2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts2"));

        // line 53
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "calculatrice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 53,  153 => 52,  141 => 49,  139 => 48,  100 => 12,  95 => 9,  93 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CalculatriceController!{% endblock %}

{% block body %}

        <div class=\"container\">
            {% include './components/header.html.twig' %}
        <div style=\"padding-top: 90px;\">
        <div style=\"margin: auto; width:426px; border-radius: 5px; border: 1px solid silver; padding-top: 4px; ; padding-bottom: 4px;\">
        <!--<legend>
            <h3 class=\"blueRedspher\">{{ title3 }}</h3>
        </legend>-->

        <div id=\"blocRes\">
                <div style=\"width:410px; height:30px;\" id=\"operation\"></div>
                <div><input id=\"res\" value=\"0\" type=\"text\" disabled></div>
        </div>
        <div style=\"margin-top:10px\">
            <button value=\"7\" class=\"btn chiffre\">7</button>
            <button value=\"8\" class=\"btn chiffre\">8</button>
            <button value=\"9\" class=\"btn chiffre\">9</button>
            <button value=\"/\" class=\"btn operator\">/</button>
        </div>
        <div style=\"margin-top:10px\">
            <button value=\"4\" class=\"btn chiffre\">4</button>
            <button value=\"5\" class=\"btn chiffre\">5</button>
            <button value=\"6\" class=\"btn chiffre\">6</button>
            <button value=\"*\" class=\"btn operator\">*</button>
        </div>
        <div style=\"margin-top:10px\">
            <button value=\"1\" class=\"btn chiffre\">1</button>
            <button value=\"2\" class=\"btn chiffre\">2</button>
            <button value=\"3\" class=\"btn chiffre\">3</button>
            <button value=\"-\" class=\"btn operator\">-</button>
        </div>
        <div style=\"margin-top:10px\">
            <button value=\"0\" class=\"btn chiffre\">0</button>
            <button value=\".\" class=\"btn chiffre\">.</button>
            <button value=\"ac\" class=\"btn operator clear\">AC</button>
            <button value=\"+\" class=\"btn operator\">+</button>
        </div>
        <div style=\"margin-top:10px\">
            <button value=\"=\" class=\"btn egal\">=</button>
        </div>
        </div>
        </div>
            {% include './components/footer.html.twig' %}
        </div>

{% endblock %}
{% block javascripts2 %}
    <script src=\"{{ asset('js/script.js') }}\"></script>
{% endblock %}", "calculatrice/index.html.twig", "/var/www/html/symfony_project/test/templates/calculatrice/index.html.twig");
    }
}
