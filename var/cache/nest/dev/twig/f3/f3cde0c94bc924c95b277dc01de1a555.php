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

/* partials/_table.html.twig */
class __TwigTemplate_b0859b9b8e378bcfa747217480e9a07a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_table.html.twig"));

        // line 1
        echo "<table class=\"dt-advanced-search table\">
    <thead>
    <tr>
        <th></th>
        <th>eagle</th>
        <th>reason</th>
        <th>date</th>
        <th>actions</th>

    </tr>
    </thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blames"]) || array_key_exists("blames", $context) ? $context["blames"] : (function () { throw new RuntimeError('Variable "blames" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["blame"]) {
            // line 14
            echo "        <tr>
            <td></td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["blame"], "eagle", [], "any", false, false, false, 16), "fname", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blame"], "reason", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blame"], "date", [], "any", false, false, false, 18), "j F Y"), "html", null, true);
            echo "</td>
            <td>
                <div class=\"dropdown\">
                    <button type=\"button\"
                            class=\"btn btn-sm dropdown-toggle hide-arrow py-0\"
                            data-bs-toggle=\"dropdown\">
                        <i class=\"fa-solid fa-ellipsis-vertical\"></i>
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-end\">
                        <a class=\"dropdown-item\"
                                ";
            // line 28
            echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, "delete-item", ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blame_delete", ["id" => twig_get_attribute($this->env, $this->source,             // line 29
$context["blame"], "id", [], "any", false, false, false, 29)])]);
            // line 30
            echo "
                           data-action=\"click->delete-item#deleteItem\"
                        >
                            <i class=\"fa-solid fa-trash\"></i>
                            <span>Delete</span>
                        </a>
                        <a class=\"dropdown-item\"
                                ";
            // line 37
            echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, "edit-item", ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blame_update", ["id" => twig_get_attribute($this->env, $this->source,             // line 38
$context["blame"], "id", [], "any", false, false, false, 38), "ajax" => 1])]);
            // line 39
            echo "
                           data-action=\"click->edit-item#openEditModal\"
                        >
                            <i class=\"fa-solid fa-pen\"></i>
                            <span>Update</span>
                        </a>
                    </div>
                </div>
            </td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blame'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </tbody>
    <tfoot>
    <tr>
        <th></th>
        <th>eagle</th>
        <th>reason</th>
        <th>date</th>
        <th>actions</th>
    </tr>
    </tfoot>
</table>
<div id=\"test\"></div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 51,  101 => 39,  99 => 38,  98 => 37,  89 => 30,  87 => 29,  86 => 28,  73 => 18,  69 => 17,  65 => 16,  61 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"dt-advanced-search table\">
    <thead>
    <tr>
        <th></th>
        <th>eagle</th>
        <th>reason</th>
        <th>date</th>
        <th>actions</th>

    </tr>
    </thead>
    <tbody>
    {% for blame in blames %}
        <tr>
            <td></td>
            <td>{{ blame.eagle.fname }}</td>
            <td>{{ blame.reason }}</td>
            <td>{{ blame.date | date(\"j F Y\") }}</td>
            <td>
                <div class=\"dropdown\">
                    <button type=\"button\"
                            class=\"btn btn-sm dropdown-toggle hide-arrow py-0\"
                            data-bs-toggle=\"dropdown\">
                        <i class=\"fa-solid fa-ellipsis-vertical\"></i>
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-end\">
                        <a class=\"dropdown-item\"
                                {{ stimulus_controller('delete-item',{
                                    'url': path('app_blame_delete', {'id': blame.id})
                                }) }}
                           data-action=\"click->delete-item#deleteItem\"
                        >
                            <i class=\"fa-solid fa-trash\"></i>
                            <span>Delete</span>
                        </a>
                        <a class=\"dropdown-item\"
                                {{ stimulus_controller('edit-item',{
                                    'url': path('app_blame_update', {'id': blame.id, 'ajax': 1})
                                }) }}
                           data-action=\"click->edit-item#openEditModal\"
                        >
                            <i class=\"fa-solid fa-pen\"></i>
                            <span>Update</span>
                        </a>
                    </div>
                </div>
            </td>
        </tr>

    {% endfor %}
    </tbody>
    <tfoot>
    <tr>
        <th></th>
        <th>eagle</th>
        <th>reason</th>
        <th>date</th>
        <th>actions</th>
    </tr>
    </tfoot>
</table>
<div id=\"test\"></div>", "partials/_table.html.twig", "C:\\IT\\Intern Projects\\NEST\\templates\\partials\\_table.html.twig");
    }
}
