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

/* library/_table.html.twig */
class __TwigTemplate_994e70ed5d6ed1ba6e97404cfff78f6f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "library/_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "library/_table.html.twig"));

        // line 1
        echo "<table class=\"dt-advanced-search table\">
    <thead>
    <tr>
        <th></th>
        <th>workshop</th>
        <th>training</th>
        <th>posted_by</th>
        <th>content</th>
        <th>files</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
            // line 15
            echo "        <tr>
            <td></td>
            <td>";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, $context["resource"], "workshop", [], "any", false, false, false, 17) != null)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["resource"], "workshop", [], "any", false, false, false, 17), "workPost", [], "any", false, false, false, 17), "engagementPost", [], "any", false, false, false, 17), "post", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
            <td>";
            // line 18
            if ((twig_get_attribute($this->env, $this->source, $context["resource"], "training", [], "any", false, false, false, 18) != null)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["resource"], "training", [], "any", false, false, false, 18), "engagementPost", [], "any", false, false, false, 18), "post", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
            <td>";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, $context["resource"], "postedBy", [], "any", false, false, false, 19) != null)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["resource"], "postedBy", [], "any", false, false, false, 19), "fName", [], "any", false, false, false, 19), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["resource"], "postedBy", [], "any", false, false, false, 19), "lName", [], "any", false, false, false, 19), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resource"], "content", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["resource"], "files", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                echo "<a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, $context["file"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["file"], "html", null, true);
                echo "</a> | ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
            // line 31
            echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, "edit-item", ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_library_update", ["id" => twig_get_attribute($this->env, $this->source,             // line 32
$context["resource"], "id", [], "any", false, false, false, 32), "ajax" => 1])]);
            // line 33
            echo "
                           data-action=\"click->edit-item#openEditModal\"
                        >
                            <i class=\"fa-solid fa-pen\"></i>
                            <span>Update</span>
                        </a>
                        <a class=\"dropdown-item\"
                                ";
            // line 40
            echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, "delete-item", ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_library_delete", ["id" => twig_get_attribute($this->env, $this->source,             // line 41
$context["resource"], "id", [], "any", false, false, false, 41)])]);
            // line 42
            echo "
                           data-action=\"click->delete-item#deleteItem\">
                            <i class=\"fa-solid fa-trash\"></i>
                            <span>Delete</span>
                        </a>
                    </div>
                </div>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    <tfoot>
    <tr>
        <th></th>
        <th>workshop</th>
        <th>training</th>
        <th>posted_by</th>
        <th>content</th>
        <th>files</th>
        <th>Actions</th>
    </tfoot>
</table>
<div id=\"test\"></div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "library/_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 52,  135 => 42,  133 => 41,  132 => 40,  123 => 33,  121 => 32,  120 => 31,  96 => 21,  92 => 20,  82 => 19,  74 => 18,  66 => 17,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"dt-advanced-search table\">
    <thead>
    <tr>
        <th></th>
        <th>workshop</th>
        <th>training</th>
        <th>posted_by</th>
        <th>content</th>
        <th>files</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    {% for resource in resources %}
        <tr>
            <td></td>
            <td>{% if resource.workshop != null %}{{ resource.workshop.workPost.engagementPost.post.name }}{% else %}-{% endif %}</td>
            <td>{% if resource.training != null %}{{ resource.training.engagementPost.post.name }}{% else %}-{% endif %}</td>
            <td>{% if resource.postedBy != null %}{{ resource.postedBy.fName }} {{ resource.postedBy.lName }}{% else %}-{% endif %}</td>
            <td>{{ resource.content }}</td>
            <td>{% for file in resource.files %}<a target=\"_blank\" href=\"{{ file }}\">{{ file }}</a> | {% endfor %}</td>
            <td>
                <div class=\"dropdown\">
                    <button type=\"button\"
                            class=\"btn btn-sm dropdown-toggle hide-arrow py-0\"
                            data-bs-toggle=\"dropdown\">
                        <i class=\"fa-solid fa-ellipsis-vertical\"></i>
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-end\">
                        <a class=\"dropdown-item\"
                                {{ stimulus_controller('edit-item',{
                                    'url': path('app_library_update', {'id': resource.id, 'ajax': 1})
                                }) }}
                           data-action=\"click->edit-item#openEditModal\"
                        >
                            <i class=\"fa-solid fa-pen\"></i>
                            <span>Update</span>
                        </a>
                        <a class=\"dropdown-item\"
                                {{ stimulus_controller('delete-item',{
                                    'url': path('app_library_delete', {'id': resource.id})
                                }) }}
                           data-action=\"click->delete-item#deleteItem\">
                            <i class=\"fa-solid fa-trash\"></i>
                            <span>Delete</span>
                        </a>
                    </div>
                </div>
            </td>
        </tr>
    {% endfor %}
    <tfoot>
    <tr>
        <th></th>
        <th>workshop</th>
        <th>training</th>
        <th>posted_by</th>
        <th>content</th>
        <th>files</th>
        <th>Actions</th>
    </tfoot>
</table>
<div id=\"test\"></div>", "library/_table.html.twig", "C:\\IT\\Intern Projects\\NEST\\templates\\library\\_table.html.twig");
    }
}
