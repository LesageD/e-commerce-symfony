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

/* cart/index.html.twig */
class __TwigTemplate_c7e5075883529ab5bf4bf6dafa2c3a10b0189718f50ca4e936cfc3007974f71b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Hello CartController!
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
\t\t<h1>Votre panier</h1>
\t</div>
\t<div class=\"col-md-12\">
\t\t";
        // line 11
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 11, $this->source); })())) > 0)) {
            // line 12
            echo "\t\t\t<table class=\"table table-striped border\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t<th>Produit</th>
\t\t\t\t\t\t<th class=\"text-center\">Prix unitaire HT</th>
\t\t\t\t\t\t<th class=\"text-center\">Prix unitaire TTC</th>
\t\t\t\t\t\t<th class=\"text-center\">Quantité</th>
\t\t\t\t\t\t<th class=\"text-center\">Total</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 26
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"align-middle\"><img class=\"rounded-circle\" width=\"100\" src=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 27), "image", [], "any", false, false, false, 27), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 27), "title", [], "any", false, false, false, 27), "html", null, true);
                echo " /\"></td>
\t\t\t\t\t\t\t<td class=\"align-middle\" style=\"width:40%\">
\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_view", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 30), "title", [], "any", false, false, false, 30), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t<p>";
                // line 32
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 32), "description", [], "any", false, false, false, 32)) > 100)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 32), "description", [], "any", false, false, false, 32), 0, 100) . " (...)")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 32), "description", [], "any", false, false, false, 32))), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"text-center align-middle\">
\t\t\t\t\t\t\t\t";
                // line 35
                $context["calcHt"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 35), "price", [], "any", false, false, false, 35) * (isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new RuntimeError('Variable "tva" does not exist.', 35, $this->source); })())) / 100);
                // line 36
                echo "\t\t\t\t\t\t\t\t";
                $context["priceHt"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 36), "price", [], "any", false, false, false, 36) - (isset($context["calcHt"]) || array_key_exists("calcHt", $context) ? $context["calcHt"] : (function () { throw new RuntimeError('Variable "calcHt" does not exist.', 36, $this->source); })()));
                // line 37
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (isset($context["priceHt"]) || array_key_exists("priceHt", $context) ? $context["priceHt"] : (function () { throw new RuntimeError('Variable "priceHt" does not exist.', 37, $this->source); })()), 2, ",", ".") . " €"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-center align-middle\">";
                // line 38
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 38), "price", [], "any", false, false, false, 38), 2, ",", ".") . " €"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-center align-middle\">";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-center align-middle\">";
                // line 40
                $context["priceItemTotal"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 40), "price", [], "any", false, false, false, 40) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 40));
                // line 41
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (isset($context["priceItemTotal"]) || array_key_exists("priceItemTotal", $context) ? $context["priceItemTotal"] : (function () { throw new RuntimeError('Variable "priceItemTotal" does not exist.', 41, $this->source); })()), 2, ",", ".") . " €"), "html", null, true);
                echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"text-center align-middle\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\" class=\"text-right\">TVA
\t\t\t\t\t\t\t";
            // line 52
            echo twig_escape_filter($this->env, ((isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new RuntimeError('Variable "tva" does not exist.', 52, $this->source); })()) . " %"), "html", null, true);
            echo "
\t\t\t\t\t\t\t:
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td colspan=\"2\">";
            // line 55
            echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (isset($context["totalTVA"]) || array_key_exists("totalTVA", $context) ? $context["totalTVA"] : (function () { throw new RuntimeError('Variable "totalTVA" does not exist.', 55, $this->source); })()), 2, ",", ".") . " €"), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\" class=\"text-right\">Nombre d'article dans votre panier :
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td colspan=\"2\">";
            // line 60
            echo twig_escape_filter($this->env, ((((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 60, $this->source); })()) > 1)) ? (((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 60, $this->source); })()) . " Articles")) : (((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 60, $this->source); })()) . " Article"))), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\" class=\"text-right\">Total HT :
\t\t\t\t\t</td>
\t\t\t\t\t<td colspan=\"2\">";
            // line 66
            $context["totalHT"] = ((isset($context["totalTTC"]) || array_key_exists("totalTTC", $context) ? $context["totalTTC"] : (function () { throw new RuntimeError('Variable "totalTTC" does not exist.', 66, $this->source); })()) - (isset($context["totalTVA"]) || array_key_exists("totalTVA", $context) ? $context["totalTVA"] : (function () { throw new RuntimeError('Variable "totalTVA" does not exist.', 66, $this->source); })()));
            echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (isset($context["totalHT"]) || array_key_exists("totalHT", $context) ? $context["totalHT"] : (function () { throw new RuntimeError('Variable "totalHT" does not exist.', 66, $this->source); })()), 2, ",", ".") . " €"), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\" class=\"text-right\">Total TTC :
\t\t\t\t\t</td>
\t\t\t\t\t<td colspan=\"2\">";
            // line 71
            echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (isset($context["totalTTC"]) || array_key_exists("totalTTC", $context) ? $context["totalTTC"] : (function () { throw new RuntimeError('Variable "totalTTC" does not exist.', 71, $this->source); })()), 2, ",", ".") . " €"), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t";
        } else {
            // line 76
            echo "\t\t<p>Aucun article</p>
\t";
        }
        // line 78
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 78,  223 => 76,  215 => 71,  206 => 66,  197 => 60,  189 => 55,  183 => 52,  179 => 50,  167 => 44,  160 => 41,  158 => 40,  154 => 39,  150 => 38,  145 => 37,  142 => 36,  140 => 35,  134 => 32,  127 => 30,  119 => 27,  116 => 26,  112 => 25,  97 => 12,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CartController!
{% endblock %}

{% block body %}
\t<div class=\"bg-light p-3\">
\t\t<h1>Votre panier</h1>
\t</div>
\t<div class=\"col-md-12\">
\t\t{% if items | length > 0 %}
\t\t\t<table class=\"table table-striped border\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t<th>Produit</th>
\t\t\t\t\t\t<th class=\"text-center\">Prix unitaire HT</th>
\t\t\t\t\t\t<th class=\"text-center\">Prix unitaire TTC</th>
\t\t\t\t\t\t<th class=\"text-center\">Quantité</th>
\t\t\t\t\t\t<th class=\"text-center\">Total</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for item in items %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"align-middle\"><img class=\"rounded-circle\" width=\"100\" src=\"{{ item.product.image }}\" alt=\"{{ item.product.title }} /\"></td>
\t\t\t\t\t\t\t<td class=\"align-middle\" style=\"width:40%\">
\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_view', {'id': item.product.id }) }}\">{{ item.product.title }}</a>
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t<p>{{ item.product.description | length > 100 ? item.product.description | slice(0,100) ~' (...)' : item.product.description }}</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"text-center align-middle\">
\t\t\t\t\t\t\t\t{% set calcHt = item.product.price * tva / 100 %}
\t\t\t\t\t\t\t\t{% set priceHt = item.product.price - calcHt %}
\t\t\t\t\t\t\t\t{{ priceHt | number_format(2, ',', '.') ~ ' €' }}</td>
\t\t\t\t\t\t\t<td class=\"text-center align-middle\">{{ item.product.price | number_format(2, ',', '.') ~ ' €' }}</td>
\t\t\t\t\t\t\t<td class=\"text-center align-middle\">{{ item.quantity }}</td>
\t\t\t\t\t\t\t<td class=\"text-center align-middle\">{% set priceItemTotal = item.product.price * item.quantity %}
\t\t\t\t\t\t\t\t{{ priceItemTotal | number_format(2, ',', '.')  ~ ' €' }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"text-center align-middle\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('cart_remove', {'id': item.product.id}) }}\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\" class=\"text-right\">TVA
\t\t\t\t\t\t\t{{ tva ~ ' %'}}
\t\t\t\t\t\t\t:
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td colspan=\"2\">{{ totalTVA | number_format(2, ',', '.') ~ ' €' }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\" class=\"text-right\">Nombre d'article dans votre panier :
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td colspan=\"2\">{{ totalItems > 1 ? totalItems ~ ' Articles' : totalItems ~ ' Article' }}</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\" class=\"text-right\">Total HT :
\t\t\t\t\t</td>
\t\t\t\t\t<td colspan=\"2\">{% set totalHT = totalTTC - totalTVA %}{{ totalHT | number_format(2, ',', '.') ~ ' €' }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\" class=\"text-right\">Total TTC :
\t\t\t\t\t</td>
\t\t\t\t\t<td colspan=\"2\">{{ totalTTC | number_format(2, ',', '.') ~ ' €' }}</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t{% else %}
\t\t<p>Aucun article</p>
\t{% endif %}
</div>{% endblock %}
", "cart/index.html.twig", "/var/www/html/e-commerce-symfony/templates/cart/index.html.twig");
    }
}
