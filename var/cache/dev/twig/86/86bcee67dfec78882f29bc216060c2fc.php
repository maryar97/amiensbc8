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
class __TwigTemplate_f9a042f7adea3ce87aebde3a4c0ecaf6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <main class=\"container\">
        ";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 5, $this->source); })())) > 0)) {
            // line 6
            echo "            <aside class=\"col-12 border border-light bg-dark p-2\">
                ";
            // line 8
            echo "                    <div class=\"card-header\">
                        <h1>
                            Mon panier
                        </h1>
                    </div>
                    <div class=\"card-body\">
                    

                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Forme de boxe</th>
                                    <th>Description</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 25
            $context["formdedeboxe"] = null;
            // line 26
            echo "                                ";
            $context["description"] = null;
            // line 27
            echo "                                ";
            $context["total"] = null;
            // line 28
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 29
                echo "                                    ";
                $context["formedeboxe"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "formedeboxe", [], "any", false, false, false, 29), "nom", [], "any", false, false, false, 29);
                // line 30
                echo "                                    ";
                $context["description"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "formedeboxe", [], "any", false, false, false, 30), "description", [], "any", false, false, false, 30);
                // line 31
                echo "                                    ";
                $context["total"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "formedeboxe", [], "any", false, false, false, 31), "prix", [], "any", false, false, false, 31);
                // line 32
                echo "
                                    <tr> 
                                        <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "formedeboxe", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                                        <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "formedeboxe", [], "any", false, false, false, 35), "description", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                                        <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "formedeboxe", [], "any", false, false, false, 36), "prix", [], "any", false, false, false, 36), "html", null, true);
                echo "€</td>
                                    </tr>   
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
                                </tbody>
                        </table>
                        <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_create");
            echo "\" class=\"btn btn-dark\">Valider le Panier</a>
                        <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_removeAll");
            echo "\" class=\"btn btn-dark\">
                            Supprimer tout mon panier
                        </a>

                    </div>
                </article>
            </aside>
        </main>
    ";
        } else {
            // line 52
            echo "        <div class=\"container\">
            <div class=\"col-12 border border-light bg-dark p-2\">
                ";
            // line 55
            echo "                    <div class=\"card-header\">
                        <h1>
                            Votre panier est vide</h1>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 63
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  173 => 63,  163 => 55,  159 => 52,  147 => 43,  143 => 42,  138 => 39,  129 => 36,  125 => 35,  121 => 34,  117 => 32,  114 => 31,  111 => 30,  108 => 29,  103 => 28,  100 => 27,  97 => 26,  95 => 25,  76 => 8,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <main class=\"container\">
        {% if cart|length > 0 %}
            <aside class=\"col-12 border border-light bg-dark p-2\">
                {# <article class=\"card mb-3\"> #}
                    <div class=\"card-header\">
                        <h1>
                            Mon panier
                        </h1>
                    </div>
                    <div class=\"card-body\">
                    

                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Forme de boxe</th>
                                    <th>Description</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% set formdedeboxe = null %}
                                {% set description = null %}
                                {% set total = null %}
                                {% for element in cart %}
                                    {% set formedeboxe = (element.formedeboxe.nom ) %}
                                    {% set description = (element.formedeboxe.description) %}
                                    {% set total = (element.formedeboxe.prix ) %}

                                    <tr> 
                                        <td>{{element.formedeboxe.nom}}</td>
                                        <td>{{element.formedeboxe.description}}</td>
                                        <td>{{ element.formedeboxe.prix }}€</td>
                                    </tr>   
                                {% endfor %}

                                </tbody>
                        </table>
                        <a href=\"{{path('order_create') }}\" class=\"btn btn-dark\">Valider le Panier</a>
                        <a href=\"{{path('cart_removeAll')}}\" class=\"btn btn-dark\">
                            Supprimer tout mon panier
                        </a>

                    </div>
                </article>
            </aside>
        </main>
    {% else %}
        <div class=\"container\">
            <div class=\"col-12 border border-light bg-dark p-2\">
                {# <div class=\"card mb-3\"> #}
                    <div class=\"card-header\">
                        <h1>
                            Votre panier est vide</h1>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}


{% endblock %}", "cart/index.html.twig", "/home/mary/Documents/dossier boxe/amiensbc8/templates/cart/index.html.twig");
    }
}
