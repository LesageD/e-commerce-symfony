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

/* home/index.html.twig */
class __TwigTemplate_cebde2d4296e070891abf6a2ebd62609bf28542f211382d91ec620de8292b1b8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t<a class=\"navbar-brand\" href=\"/\">E-Commerce Symfony</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t<li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\">Produits
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t\t<div class=\"nav-item d-flex\">
\t\t\t<a class=\"nav-link btn btn-primary\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        echo "\">
\t\t\t\t<i class=\"fas fa-shopping-cart mr-1\"></i>
\t\t\t\tPanier
\t\t\t\t<span style=\"font-size:1.2em;height:30px; width:30px;display: inline-block; background: red; border-radius: 50%; color:white; text-align:center; font-weight: bold; padding: 2px;\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</span>
\t\t\t</a>
\t\t</div>
\t</div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  62 => 15,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t<a class=\"navbar-brand\" href=\"/\">E-Commerce Symfony</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t<li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"{{ path('product_index') }}\">Produits
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t\t<div class=\"nav-item d-flex\">
\t\t\t<a class=\"nav-link btn btn-primary\" href=\"{{ path('cart_index') }}\">
\t\t\t\t<i class=\"fas fa-shopping-cart mr-1\"></i>
\t\t\t\tPanier
\t\t\t\t<span style=\"font-size:1.2em;height:30px; width:30px;display: inline-block; background: red; border-radius: 50%; color:white; text-align:center; font-weight: bold; padding: 2px;\">{{ totalItems }}</span>
\t\t\t</a>
\t\t</div>
\t</div>
</nav>
", "home/index.html.twig", "/var/www/html/e-commerce-symfony/templates/home/index.html.twig");
    }
}
