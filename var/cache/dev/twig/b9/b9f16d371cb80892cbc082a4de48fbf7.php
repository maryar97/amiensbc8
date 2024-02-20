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

/* commande/recap.html.twig */
class __TwigTemplate_f7f22dded1c784479d8a892ef391ba74 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/recap.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/recap.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/recap.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Vérifier la commande";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container position-relative zindex-2 pt-5 pb-lg-5 pb-md-4 pb-2\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6\">
                <h1 class=\"h2 pb-2\"> Vérifier la commande</h1>
            
                <h3 class=\"fs-base fw-normal text-body text-uppercase pb-2 pb-sm-3\">1.<span class=\"text-decoration-underline ms-1\">Adresse de facturation</span></h3>
                
                    <hr />
                    ";
        // line 16
        echo "                    <h2 class=\"pb-2 pt-md-2 my-4 mt-lg-5\">Récapitulatif de la commande
                        <span class='fs-base fw-normal text-muted'>(";
        // line 17
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["recapCart"]) || array_key_exists("recapCart", $context) ? $context["recapCart"] : (function () { throw new RuntimeError('Variable "recapCart" does not exist.', 17, $this->source); })())), "html", null, true);
        echo " formedeboxe)
                        </span>
                    </h2>
                    ";
        // line 20
        $context["total"] = null;
        // line 21
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recapCart"]) || array_key_exists("recapCart", $context) ? $context["recapCart"] : (function () { throw new RuntimeError('Variable "recapCart" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formedeboxe"]) {
            // line 22
            echo "                    ";
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 22, $this->source); })()) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "formedeboxe", [], "any", false, false, false, 22), "prix", [], "any", false, false, false, 22));
            // line 23
            echo "                    
                        <div class=\"d-sm-flex align-items-center border-top-4\">
                            <a class=\"d-inline-block flex-shrink-0  rounded-1 p-sm-2 p-xl-3 mb-2 mb-sm-0\"></a>
                                <img src=\"/images/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "formedeboxe", [], "any", false, false, false, 26), "photo", [], "any", false, false, false, 26), "html", null, true);
            echo "\" width=\"150\" height=\"150\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "formedeboxe", [], "any", false, false, false, 26), "photo", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
                                <div class=\"w-100 pt-1 ps-sm-4\">
                                    <div class=\"d-block\">
                                        <div class=\"me-3\" style=\"position; top: 15px;\">
                                            <h3 class=\"h5 mb-2\">
                                                    ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "formedeboxe", [], "any", false, false, false, 31), "nom", [], "any", false, false, false, 31), "html", null, true);
            echo "</a>
                                            </h3>
                                            <p>
                                                ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "formedeboxe", [], "any", false, false, false, 34), "description", [], "any", false, false, false, 34), "html", null, true);
            echo "
                                            </p>
                                        </div>
                                    </div>
                                    <div class=\"nav justify-content-end mt-n4\">
                                        <a class=\"nav-link fs-xl p-2\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "formedeboxe", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" title=\"Remove\">
                                            <i class=\"ai-trash\"</i>
                                        </a>
                                    </div>
                                </div>
                        </div>
                            
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formedeboxe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
                        <ul class=\"list-unstyled py-3 mb-0\">
                            <li class=\"d-flex justify-content-between mb-2\"> Sous-Total: <span 
                                        class=\"fw-semibold ms-2\">";
        // line 50
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 50, $this->source); })()), 2, ",", "."), "html", null, true);
        echo " € </span></li>
                            
                        </ul>
                        <div class=\"mt-4 text-center\">

                            ";
        // line 55
        if (((isset($context["methode"]) || array_key_exists("methode", $context) ? $context["methode"] : (function () { throw new RuntimeError('Variable "methode" does not exist.', 55, $this->source); })()) == "stripe")) {
            // line 56
            echo "
                                <form methode=\"POST\" action=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment_stripe", ["reference" => (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 57, $this->source); })())]), "html", null, true);
            echo "\">
                                    <button class=\"btn btn-lg btn-primary\" type=\"submit\"
                                            style=\"border-radius: 6px; position: relative; top: 20px;\">Payer en stripe | ";
            // line 59
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 59, $this->source); })()), 2, ",", "."), "html", null, true);
            echo "€
                                    </button>
                                </form>
                            ";
        }
        // line 63
        echo "                        </div>
                </div>\t\t
\t\t\t</div>
\t\t</div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "commande/recap.html.twig";
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
        return array (  190 => 63,  183 => 59,  178 => 57,  175 => 56,  173 => 55,  165 => 50,  160 => 47,  146 => 39,  138 => 34,  132 => 31,  122 => 26,  117 => 23,  114 => 22,  109 => 21,  107 => 20,  101 => 17,  98 => 16,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Vérifier la commande{% endblock %}

{% block body %}
    <div class=\"container position-relative zindex-2 pt-5 pb-lg-5 pb-md-4 pb-2\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6\">
                <h1 class=\"h2 pb-2\"> Vérifier la commande</h1>
            
                <h3 class=\"fs-base fw-normal text-body text-uppercase pb-2 pb-sm-3\">1.<span class=\"text-decoration-underline ms-1\">Adresse de facturation</span></h3>
                
                    <hr />
                    {# {{dump(recapCart) }} #}
                    <h2 class=\"pb-2 pt-md-2 my-4 mt-lg-5\">Récapitulatif de la commande
                        <span class='fs-base fw-normal text-muted'>({{ recapCart|length }} formedeboxe)
                        </span>
                    </h2>
                    {% set total = null %}
                    {% for formedeboxe in recapCart %}
                    {% set total = total + (formedeboxe.formedeboxe.prix) %}
                    
                        <div class=\"d-sm-flex align-items-center border-top-4\">
                            <a class=\"d-inline-block flex-shrink-0  rounded-1 p-sm-2 p-xl-3 mb-2 mb-sm-0\"></a>
                                <img src=\"/images/{{ formedeboxe.formedeboxe.photo }}\" width=\"150\" height=\"150\" alt=\"{{ formedeboxe.formedeboxe.photo}}\">
                                <div class=\"w-100 pt-1 ps-sm-4\">
                                    <div class=\"d-block\">
                                        <div class=\"me-3\" style=\"position; top: 15px;\">
                                            <h3 class=\"h5 mb-2\">
                                                    {{formedeboxe.formedeboxe.nom}}</a>
                                            </h3>
                                            <p>
                                                {{formedeboxe.formedeboxe.description}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class=\"nav justify-content-end mt-n4\">
                                        <a class=\"nav-link fs-xl p-2\" href=\"{{ path('cart_remove', {id: formedeboxe.formedeboxe.id}) }}\" data-bs-toggle=\"tooltip\" title=\"Remove\">
                                            <i class=\"ai-trash\"</i>
                                        </a>
                                    </div>
                                </div>
                        </div>
                            
                        {% endfor %}

                        <ul class=\"list-unstyled py-3 mb-0\">
                            <li class=\"d-flex justify-content-between mb-2\"> Sous-Total: <span 
                                        class=\"fw-semibold ms-2\">{{ (total)|number_format(2, ',', '.') }} € </span></li>
                            
                        </ul>
                        <div class=\"mt-4 text-center\">

                            {% if methode =='stripe' %}

                                <form methode=\"POST\" action=\"{{ path('payment_stripe', {reference: reference}) }}\">
                                    <button class=\"btn btn-lg btn-primary\" type=\"submit\"
                                            style=\"border-radius: 6px; position: relative; top: 20px;\">Payer en stripe | {{ (total)|number_format(2, ',', '.') }}€
                                    </button>
                                </form>
                            {% endif %}
                        </div>
                </div>\t\t
\t\t\t</div>
\t\t</div>
    </div>
{% endblock %}", "commande/recap.html.twig", "/home/mary/Documents/dossier boxe/amiensbc8/templates/commande/recap.html.twig");
    }
}
