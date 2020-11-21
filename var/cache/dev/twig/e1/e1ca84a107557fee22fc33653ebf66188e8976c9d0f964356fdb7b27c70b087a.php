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

/* employe/employe.html.twig */
class __TwigTemplate_f913c9da5d0947923f72b797659d4d8f1de7cb2be491dfa46ed52f8eeaf6813d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/employe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/employe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employe/employe.html.twig", 1);
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

        echo "Hôtel | Employé";
        
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
            En tant qu'<b>employé</b> vous serez alerté des chambres à nettoyer.<br>Vous pourrez déclarer la chambre
            comme libre après votre travail.
        </center>
    </div>
    ";
        // line 12
        if ((0 === twig_compare((isset($context["countChambre"]) || array_key_exists("countChambre", $context) ? $context["countChambre"] : (function () { throw new RuntimeError('Variable "countChambre" does not exist.', 12, $this->source); })()), 0))) {
            // line 13
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
            <center>Aucune chambre n'est à nettoyer !</center>
        </div>
    ";
        } else {
            // line 17
            echo "        <div class=\"alert alert-success\" role=\"alert\">
            <center>Voici les chambres que vous devez nettoyer :</center>
        </div>
        <div class=\"container-fluid\">
            <table class=\"table table-striped table-hover\">
                <thead>
                <tr>
                    <th scope=\"col\"></th>
                    <th scope=\"col\">Numéro</th>
                    <th scope=\"col\">Étage</th>
                    <th scope=\"col\">Terminé</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["chambresAFaire"]) || array_key_exists("chambresAFaire", $context) ? $context["chambresAFaire"] : (function () { throw new RuntimeError('Variable "chambresAFaire" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["chambre"]) {
                // line 32
                echo "                    <tr>
                        <th scope=\"row\"><b>
                                <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-shop\" fill=\"currentColor\"
                                     xmlns=\"http://www.w3.org/2000/svg\">
                                    <path fill-rule=\"evenodd\"
                                          d=\"M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z\"/>
                                </svg>
                            </b></th>
                        <td><b>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "numero", [], "any", false, false, false, 40), "html", null, true);
                echo "</b></td>
                        <td><b>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "etage", [], "any", false, false, false, 41), "html", null, true);
                echo "</b></td>
                        <td><a href=\"terminer/";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chambre"], "numero", [], "any", false, false, false, 42), "html", null, true);
                echo "\">
                                <button type=\"button\" class=\"btn btn-success\">Terminé</button>
                            </a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chambre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                </tbody>
            </table>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "employe/employe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 47,  142 => 42,  138 => 41,  134 => 40,  124 => 32,  120 => 31,  104 => 17,  98 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Hôtel | Employé{% endblock %}

{% block body %}
    <div class=\"alert alert-primary\" role=\"alert\">
        <center>
            En tant qu'<b>employé</b> vous serez alerté des chambres à nettoyer.<br>Vous pourrez déclarer la chambre
            comme libre après votre travail.
        </center>
    </div>
    {% if countChambre == 0 %}
        <div class=\"alert alert-danger\" role=\"alert\">
            <center>Aucune chambre n'est à nettoyer !</center>
        </div>
    {% else %}
        <div class=\"alert alert-success\" role=\"alert\">
            <center>Voici les chambres que vous devez nettoyer :</center>
        </div>
        <div class=\"container-fluid\">
            <table class=\"table table-striped table-hover\">
                <thead>
                <tr>
                    <th scope=\"col\"></th>
                    <th scope=\"col\">Numéro</th>
                    <th scope=\"col\">Étage</th>
                    <th scope=\"col\">Terminé</th>
                </tr>
                </thead>
                <tbody>
                {% for chambre in chambresAFaire %}
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
                        <td><a href=\"terminer/{{ chambre.numero }}\">
                                <button type=\"button\" class=\"btn btn-success\">Terminé</button>
                            </a></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    {% endif %}
{% endblock %}
", "employe/employe.html.twig", "/var/www/html/matteoHotel/templates/employe/employe.html.twig");
    }
}
