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

/* components/header.html.twig */
class __TwigTemplate_854618de2be189b2fd86912cce38b68a6357e24c34eddba6abbb6835c1285ccd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/header.html.twig"));

        // line 1
        echo "<header>
            <h2>
                <span class=\"blueRedspher\">";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["greeting"]) || array_key_exists("greeting", $context) ? $context["greeting"] : (function () { throw new RuntimeError('Variable "greeting" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "</span>
                <span class=\"redRedspher\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["rMaj"]) || array_key_exists("rMaj", $context) ? $context["rMaj"] : (function () { throw new RuntimeError('Variable "rMaj" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</span><span class=\"greenRedspher\">";
        echo twig_escape_filter($this->env, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</span><span class=\"orangeRedspher\">";
        echo twig_escape_filter($this->env, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</span><span class=\"skyblueRedspher\">";
        echo twig_escape_filter($this->env, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</span><span class=\"redRedspher\">";
        echo twig_escape_filter($this->env, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</span><span class=\"greenRedspher\">";
        echo twig_escape_filter($this->env, (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</span><span class=\"orangeRedspher\">";
        echo twig_escape_filter($this->env, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</span><span class=\"skyblueRedspher\">";
        echo twig_escape_filter($this->env, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</span>
                
            </h2>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
            <h2>
                <span class=\"blueRedspher\">{{ greeting }}</span>
                <span class=\"redRedspher\">{{ rMaj }}</span><span class=\"greenRedspher\">{{ e }}</span><span class=\"orangeRedspher\">{{ d }}</span><span class=\"skyblueRedspher\">{{ s }}</span><span class=\"redRedspher\">{{ p }}</span><span class=\"greenRedspher\">{{ h }}</span><span class=\"orangeRedspher\">{{ e }}</span><span class=\"skyblueRedspher\">{{ r }}</span>
                
            </h2>
</header>", "components/header.html.twig", "/var/www/html/symfony_project/test/templates/components/header.html.twig");
    }
}
