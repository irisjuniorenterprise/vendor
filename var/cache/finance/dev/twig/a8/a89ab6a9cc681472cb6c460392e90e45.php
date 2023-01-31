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

/* admin/sponsor.html.twig */
class __TwigTemplate_a0c91225ffb5324fdd8e15d0e9945d51 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sponsor.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sponsor.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/sponsor.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Sponsor | Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <body>
    <div class=\"container-scroller\">
        <!-- partial:partials/_navbar.html -->
        ";
        // line 9
        $this->loadTemplate("_navbar.html.twig", "admin/sponsor.html.twig", 9)->display($context);
        // line 10
        echo "        <!-- partial -->
        <div class=\"container-fluid page-body-wrapper\">
            <!-- partial:partials/_sidebar.html -->
            ";
        // line 13
        $this->loadTemplate("_sidebar.html.twig", "admin/sponsor.html.twig", 13)->display($context);
        // line 14
        echo "            <!-- partial -->
            <div style=\"width: 82.5%; float: right;margin-top: 100px;\" class=\"main-panel\">
                <div class=\"content-wrapper\">
                    <div ";
        // line 17
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, "modal-form", ["formUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor")]);
        // line 19
        echo "

                    >
                        <button
                                class=\"btn btn-primary btn-sm\"
                                data-action=\"modal-form#openModal\"
                                >Add Sponsor</button>
                        ";
        // line 26
        echo twig_include($this->env, $context, "_modal.html.twig", ["modalTitle" => "Add a new Sponsor"]);
        // line 28
        echo "
                    </div>

                </div>
               ";
        // line 33
        echo "                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                        <tr>
                            <th>Sponsors</th>
                            <th>Note</th>
                            <th>Social Media</th>
                            <th>Emails</th>
                            <th>Phones</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
            // line 47
            echo "                        <tr>
                            <td>
                                <span class=\"fw-bold\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsor"], "name", [], "any", false, false, false, 49), "html", null, true);
            echo "</span>
                            </td>
                            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsor"], "note", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                            <td>
                                <div class=\"avatar-group\">
                                    <div data-bs-toggle=\"tooltip\" data-popup=\"tooltip-custom\" data-bs-placement=\"top\" class=\"avatar pull-up my-0\" title=\"\" data-bs-original-title=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsor"], "name", [], "any", false, false, false, 54), "html", null, true);
            echo "\">
                                        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsor"], "facebook", [], "any", false, false, false, 55), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/social/facebook.a2af96dd.png"), "html", null, true);
            echo "\" alt=\"Avatar\" height=\"26\" width=\"26\"></a>
                                    </div>

                                    <div data-bs-toggle=\"tooltip\" data-popup=\"tooltip-custom\" data-bs-placement=\"top\" class=\"avatar pull-up my-0\" title=\"\" data-bs-original-title=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsor"], "name", [], "any", false, false, false, 58), "html", null, true);
            echo "\">
                                        <img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/icons/social/linkedin.png"), "html", null, true);
            echo "\" alt=\"Avatar\" height=\"26\" width=\"26\">
                                    </div>
                                </div>
                            </td>
                            <td>
                                ";
            // line 64
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["sponsor"], "emails", [], "any", false, false, false, 64), "|"), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 67
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["sponsor"], "phones", [], "any", false, false, false, 67), "|"), "html", null, true);
            echo "
                            </td>
                            <td>
                                <div class=\"dropdown\">
                                    <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light\" data-bs-toggle=\"dropdown\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"></circle><circle cx=\"12\" cy=\"5\" r=\"1\"></circle><circle cx=\"12\" cy=\"19\" r=\"1\"></circle></svg>
                                    </button>
                                    <div class=\"dropdown-menu dropdown-menu-end\">
                                        <a class=\"dropdown-item\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_sponsor", ["id" => twig_get_attribute($this->env, $this->source, $context["sponsor"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit-2 me-50\"><path d=\"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z\"></path></svg>
                                            <span>Edit</span>
                                        </a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_sponsor", ["id" => twig_get_attribute($this->env, $this->source, $context["sponsor"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-trash me-50\"><polyline points=\"3 6 5 6 21 6\"></polyline><path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path></svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sponsor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                        </tbody>
                    </table>
                </div>

               ";
        // line 93
        echo "                ";
        $this->loadTemplate("_footer.html.twig", "admin/sponsor.html.twig", 93)->display($context);
        // line 94
        echo "            </div>
        </div>
    </div>
    </body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/sponsor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 94,  229 => 93,  223 => 88,  208 => 79,  201 => 75,  190 => 67,  184 => 64,  176 => 59,  172 => 58,  164 => 55,  160 => 54,  154 => 51,  149 => 49,  145 => 47,  141 => 46,  126 => 33,  120 => 28,  118 => 26,  109 => 19,  107 => 17,  102 => 14,  100 => 13,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sponsor | Admin{% endblock %}

{% block body %}
    <body>
    <div class=\"container-scroller\">
        <!-- partial:partials/_navbar.html -->
        {% include '_navbar.html.twig' %}
        <!-- partial -->
        <div class=\"container-fluid page-body-wrapper\">
            <!-- partial:partials/_sidebar.html -->
            {% include '_sidebar.html.twig' %}
            <!-- partial -->
            <div style=\"width: 82.5%; float: right;margin-top: 100px;\" class=\"main-panel\">
                <div class=\"content-wrapper\">
                    <div {{ stimulus_controller('modal-form', {
                        formUrl: path('app_sponsor')
                    }) }}

                    >
                        <button
                                class=\"btn btn-primary btn-sm\"
                                data-action=\"modal-form#openModal\"
                                >Add Sponsor</button>
                        {{ include('_modal.html.twig', {
                            modalTitle: 'Add a new Sponsor',
                        }) }}
                    </div>

                </div>
               {# begin sponsor table#}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                        <tr>
                            <th>Sponsors</th>
                            <th>Note</th>
                            <th>Social Media</th>
                            <th>Emails</th>
                            <th>Phones</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for sponsor in sponsors %}
                        <tr>
                            <td>
                                <span class=\"fw-bold\">{{ sponsor.name }}</span>
                            </td>
                            <td>{{ sponsor.note }}</td>
                            <td>
                                <div class=\"avatar-group\">
                                    <div data-bs-toggle=\"tooltip\" data-popup=\"tooltip-custom\" data-bs-placement=\"top\" class=\"avatar pull-up my-0\" title=\"\" data-bs-original-title=\"{{ sponsor.name }}\">
                                        <a href=\"{{ sponsor.facebook }}\"><img src=\"{{ asset('build/images/icons/social/facebook.a2af96dd.png')}}\" alt=\"Avatar\" height=\"26\" width=\"26\"></a>
                                    </div>

                                    <div data-bs-toggle=\"tooltip\" data-popup=\"tooltip-custom\" data-bs-placement=\"top\" class=\"avatar pull-up my-0\" title=\"\" data-bs-original-title=\"{{ sponsor.name }}\">
                                        <img src=\"{{ asset('build/images/icons/social/linkedin.png')}}\" alt=\"Avatar\" height=\"26\" width=\"26\">
                                    </div>
                                </div>
                            </td>
                            <td>
                                {{ sponsor.emails|join('|')  }}
                            </td>
                            <td>
                                {{ sponsor.phones|join('|')  }}
                            </td>
                            <td>
                                <div class=\"dropdown\">
                                    <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light\" data-bs-toggle=\"dropdown\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"></circle><circle cx=\"12\" cy=\"5\" r=\"1\"></circle><circle cx=\"12\" cy=\"19\" r=\"1\"></circle></svg>
                                    </button>
                                    <div class=\"dropdown-menu dropdown-menu-end\">
                                        <a class=\"dropdown-item\" href=\"{{ path('app_edit_sponsor',{id:sponsor.id}) }}\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit-2 me-50\"><path d=\"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z\"></path></svg>
                                            <span>Edit</span>
                                        </a>
                                        <a class=\"dropdown-item\" href=\"{{ path('app_delete_sponsor',{id:sponsor.id}) }}\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-trash me-50\"><polyline points=\"3 6 5 6 21 6\"></polyline><path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path></svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>

               {# end sponsor table#}
                {% include '_footer.html.twig' %}
            </div>
        </div>
    </div>
    </body>

{% endblock %}

", "admin/sponsor.html.twig", "C:\\IT\\Intern Projects\\IRISAPP\\IRISAPP\\templates\\admin\\sponsor.html.twig");
    }
}
