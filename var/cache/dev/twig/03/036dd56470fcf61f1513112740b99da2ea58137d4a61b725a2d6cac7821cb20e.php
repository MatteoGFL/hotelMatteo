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

/* receptionniste/receptionniste.html.twig */
class __TwigTemplate_7e2f54e9d056bdb1fee0b65cf1cc8fc7b3a16095fb22767e2ad6e9542f6db179 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "receptionniste/receptionniste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "receptionniste/receptionniste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "receptionniste/receptionniste.html.twig", 1);
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

        echo "Hôtel | Réceptionniste";
        
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
        echo "    <div class=\"alert alert-primary\" role=\"alert\">
        <center>
            En tant que <b>réceptionniste</b> vous pouvez :
            <br>
            - Voir les chambres occupées et donner l'ordre du nettoyage de ces chambres.
            <br>
            - Voir les chambres libres et les réserver.
        </center>
    </div>
    <br>
    <div class=\"alert alert-warning\" role=\"alert\">
        <center>Voici les chambres occupées :</center>
    </div>
    <div class=\"container-fluid\">
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th scope=\"col\"></th>
                <th scope=\"col\">Numéro</th>
                <th scope=\"col\">Étage</th>
                <th scope=\"col\">À nettoyer</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chambresANettoyer"]) || array_key_exists("chambresANettoyer", $context) ? $context["chambresANettoyer"] : (function () { throw new RuntimeError('Variable "chambresANettoyer" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
            // line 31
            echo "                <tr>
                    <th scope=\"row\"><b>
                            <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-shop\" fill=\"currentColor\"
                                 xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\"
                                      d=\"M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z\"/>
                            </svg>
                        </b></th>
                    <td><b>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "numero", [], "any", false, false, false, 39), "html", null, true);
            echo "</b></td>
                    <td><b>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "etage", [], "any", false, false, false, 40), "html", null, true);
            echo "</b></td>
                    <td><a href=\"a_nettoyer/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "numero", [], "any", false, false, false, 41), "html", null, true);
            echo "\">
                            <button type=\"button\" class=\"btn btn-success\">À nettoyer</button>
                        </a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chambre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </tbody>
        </table>
    </div>
    <hr><br>
    <div class=\"alert alert-warning\" role=\"alert\">
        <center>Voici les chambres libres :</center>
    </div>
    <div class=\"container-fluid\">
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th scope=\"col\"></th>
                <th scope=\"col\">Numéro</th>
                <th scope=\"col\">Étage</th>
                <th scope=\"col\">Réserver</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chambresLibres"]) || array_key_exists("chambresLibres", $context) ? $context["chambresLibres"] : (function () { throw new RuntimeError('Variable "chambresLibres" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
            // line 65
            echo "                <tr>
                    <th scope=\"row\"><b>
                            <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-shop\" fill=\"currentColor\"
                                 xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\"
                                      d=\"M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z\"/>
                            </svg>
                        </b></th>
                    <td><b>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "numero", [], "any", false, false, false, 73), "html", null, true);
            echo "</b></td>
                    <td><b>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "etage", [], "any", false, false, false, 74), "html", null, true);
            echo "</b></td>
                    <td><a href=\"reserve/";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "numero", [], "any", false, false, false, 75), "html", null, true);
            echo "\">
                            <button type=\"button\" class=\"btn btn-warning\">Réserver</button>
                        </a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chambre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "receptionniste/receptionniste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 80,  189 => 75,  185 => 74,  181 => 73,  171 => 65,  167 => 64,  147 => 46,  136 => 41,  132 => 40,  128 => 39,  118 => 31,  114 => 30,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Hôtel | Réceptionniste{% endblock %}

{% block body %}
    <div class=\"alert alert-primary\" role=\"alert\">
        <center>
            En tant que <b>réceptionniste</b> vous pouvez :
            <br>
            - Voir les chambres occupées et donner l'ordre du nettoyage de ces chambres.
            <br>
            - Voir les chambres libres et les réserver.
        </center>
    </div>
    <br>
    <div class=\"alert alert-warning\" role=\"alert\">
        <center>Voici les chambres occupées :</center>
    </div>
    <div class=\"container-fluid\">
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th scope=\"col\"></th>
                <th scope=\"col\">Numéro</th>
                <th scope=\"col\">Étage</th>
                <th scope=\"col\">À nettoyer</th>
            </tr>
            </thead>
            <tbody>
            {% for chambre in chambresANettoyer %}
                <tr>
                    <th scope=\"row\"><b>
                            <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-shop\" fill=\"currentColor\"
                                 xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\"
                                      d=\"M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z\"/>
                            </svg>
                        </b></th>
                    <td><b>{{ chambre.numero }}</b></td>
                    <td><b>{{ chambre.etage }}</b></td>
                    <td><a href=\"a_nettoyer/{{ chambre.numero }}\">
                            <button type=\"button\" class=\"btn btn-success\">À nettoyer</button>
                        </a></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <hr><br>
    <div class=\"alert alert-warning\" role=\"alert\">
        <center>Voici les chambres libres :</center>
    </div>
    <div class=\"container-fluid\">
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th scope=\"col\"></th>
                <th scope=\"col\">Numéro</th>
                <th scope=\"col\">Étage</th>
                <th scope=\"col\">Réserver</th>
            </tr>
            </thead>
            <tbody>
            {% for chambre in chambresLibres %}
                <tr>
                    <th scope=\"row\"><b>
                            <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-shop\" fill=\"currentColor\"
                                 xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\"
                                      d=\"M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z\"/>
                            </svg>
                        </b></th>
                    <td><b>{{ chambre.numero }}</b></td>
                    <td><b>{{ chambre.etage }}</b></td>
                    <td><a href=\"reserve/{{ chambre.numero }}\">
                            <button type=\"button\" class=\"btn btn-warning\">Réserver</button>
                        </a></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "receptionniste/receptionniste.html.twig", "/var/www/html/matteoHotel/templates/receptionniste/receptionniste.html.twig");
    }
}
