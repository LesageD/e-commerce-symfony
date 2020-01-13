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

/* product/index.html.twig */
class __TwigTemplate_6a7026f7c6cf83e216d94deff266576626194bdcbd681c143ad27a536599bf9d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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

        echo "Les produits
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"bg-light p-3\">
\t\t<h1>Les produits</h1>
\t</div>

\t<div class=\"row\">
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 13
            echo "\t\t\t<div class=\"col-3 mt-4\">
\t\t\t\t<div class=\"card border border-dark rounded p-2 clearfix\">
\t\t\t\t\t<img class=\"card-img-top rounded\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 15), "html", null, true);
            echo "\" alt=\"Image de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 17), "html", null, true);
            echo "</h5>
                        <p class=\"bg-light text-center p-3 border border-dark rounded\">";
            // line 18
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 18) . " €"), "html", null, true);
            echo "</p>

\t\t\t\t\t\t<p class=\"card-text\">";
            // line 20
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 20)) > 100)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 20), 0, 150) . " (...)")) : (twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 20))), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_view", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class=\"btn btn-primary btm-sm\">
\t\t\t\t\t\t\t<i class=\"fas fa-eye mr-1\"></i>
\t\t\t\t\t\t\tVoir +
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\" class=\"btn btn-success btm-sm float-right\">
\t\t\t\t\t\t\t<i class=\"fas fa-shopping-cart mr-1\"></i>
\t\t\t\t\t\t\tAjouter
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 35,  133 => 27,  126 => 23,  120 => 20,  115 => 18,  111 => 17,  104 => 15,  100 => 13,  96 => 12,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Les produits
{% endblock %}

{% block body %}
\t<div class=\"bg-light p-3\">
\t\t<h1>Les produits</h1>
\t</div>

\t<div class=\"row\">
\t\t{% for product in products %}
\t\t\t<div class=\"col-3 mt-4\">
\t\t\t\t<div class=\"card border border-dark rounded p-2 clearfix\">
\t\t\t\t\t<img class=\"card-img-top rounded\" src=\"{{ product.image }}\" alt=\"Image de {{ product.title }}\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">{{ product.title }}</h5>
                        <p class=\"bg-light text-center p-3 border border-dark rounded\">{{ product.price ~ ' €' }}</p>

\t\t\t\t\t\t<p class=\"card-text\">{{ product.description | length > 100 ? product.description | slice(0,150) ~' (...)' : product.description }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t<a href=\"{{ path('product_view', {'id': product.id }) }}\" class=\"btn btn-primary btm-sm\">
\t\t\t\t\t\t\t<i class=\"fas fa-eye mr-1\"></i>
\t\t\t\t\t\t\tVoir +
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{ path('cart_add', {'id': product.id }) }}\" class=\"btn btn-success btm-sm float-right\">
\t\t\t\t\t\t\t<i class=\"fas fa-shopping-cart mr-1\"></i>
\t\t\t\t\t\t\tAjouter
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t</div>
{% endblock %}
", "product/index.html.twig", "/var/www/html/e-commerce-symfony/templates/product/index.html.twig");
    }
}
