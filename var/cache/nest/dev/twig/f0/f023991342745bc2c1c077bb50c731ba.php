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

/* meetings/index.html.twig */
class __TwigTemplate_d736c5ab3a07dc02d9440d2c394e21a2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meetings/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meetings/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "meetings/index.html.twig", 1);
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

        echo "Announcement!";
        
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
        echo "
<body class=\"vertical-layout vertical-menu-modern  navbar-floating footer-static  \" data-open=\"click\"
      data-menu=\"vertical-menu-modern\" data-col=\"\">

";
        // line 10
        echo twig_include($this->env, $context, "partials/_navbar.html.twig");
        echo "
";
        // line 11
        echo twig_include($this->env, $context, "partials/_sidebar.html.twig");
        echo "
<div class=\"app-content content \"
        ";
        // line 13
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, "reload-content", ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_library", ["ajax" => 1])]);
        // line 15
        echo "
     data-action=\"delete-item:deleted->reload-content#refreshContent modal-form:success->reload-content#refreshContent\"
>
    <div class=\"content-wrapper container-xxl p-0\">
        <div class=\"content-body\">
            <!-- Advanced Search -->
            <section id=\"advanced-search-datatable\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header border-bottom\">
                                <h4 class=\"card-title\">Advanced Search</h4>
                                <div ";
        // line 27
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, "modal-form");
        echo "
                                        data-action=\"hidden.bs.modal->modal-form#modalHidden\">
                                    <button class=\"btn btn-outline-primary\" data-action=\"modal-form#openModal\">Add
                                        Meeting
                                    </button>
                                </div>
                            </div>
                            <!--Search Form -->
                            <div class=\"card-body mt-2\">
                                <form class=\"dt_adv_search\" method=\"POST\">
                                    <div class=\"row g-1 mb-md-1\">
                                        <div class=\"col-md-4\">
                                            <label class=\"form-label\">Name:</label>
                                            <input type=\"text\" class=\"form-control dt-input dt-full-name\"
                                                   data-column=\"1\"
                                                   placeholder=\"Alaric Beslier\" data-column-index=\"0\"/>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <label class=\"form-label\">Email:</label>
                                            <input type=\"text\" class=\"form-control dt-input\" data-column=\"2\"
                                                   placeholder=\"demo@example.com\" data-column-index=\"1\"/>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <label class=\"form-label\">Post:</label>
                                            <input type=\"text\" class=\"form-control dt-input\" data-column=\"3\"
                                                   placeholder=\"Web designer\" data-column-index=\"2\"/>
                                        </div>
                                    </div>
                                    <div class=\"row g-1\">
                                        <div class=\"col-md-4\">
                                            <label class=\"form-label\">City:</label>
                                            <input type=\"text\" class=\"form-control dt-input\" data-column=\"4\"
                                                   placeholder=\"Balky\"
                                                   data-column-index=\"3\"/>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <label class=\"form-label\">Date:</label>
                                            <div class=\"mb-0\">
                                                <input type=\"text\" class=\"form-control dt-date flatpickr-range dt-input\"
                                                       data-column=\"5\" placeholder=\"StartDate to EndDate\"
                                                       data-column-index=\"4\"
                                                       name=\"dt_date\"/>
                                                <input type=\"hidden\" class=\"form-control dt-date start_date dt-input\"
                                                       data-column=\"5\" data-column-index=\"4\"
                                                       name=\"value_from_start_date\"/>
                                                <input type=\"hidden\" class=\"form-control dt-date end_date dt-input\"
                                                       name=\"value_from_end_date\" data-column=\"5\"
                                                       data-column-index=\"4\"/>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <label class=\"form-label\">Salary:</label>
                                            <input type=\"text\" class=\"form-control dt-input\" data-column=\"6\"
                                                   placeholder=\"10000\"
                                                   data-column-index=\"5\"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <hr class=\"my-0\"/>
                            <div class=\"card-datatable\" data-reload-content-target=\"content\">
                                <table class=\"dt-advanced-search table\">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Meeting</th>
                                        <th>Type</th>
                                        <th>Place</th>
                                        <th>Target</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td>PHP</td>
                                        <td>Type</td>
                                        <td>ISB</td>
                                        <td>IT</td>
                                        <td>22/2/2023</td>
                                        <td>
                                            <div class=\"dropdown\">
                                                <button type=\"button\"
                                                        class=\"btn btn-sm dropdown-toggle hide-arrow py-0\"
                                                        data-bs-toggle=\"dropdown\">
                                                    <i class=\"fa-solid fa-ellipsis-vertical\"></i>
                                                </button>
                                                <div class=\"dropdown-menu dropdown-menu-end\">
                                                    <a class=\"dropdown-item\"
                                                       data-action=\"click->edit-item#openEditModal\"
                                                    >
                                                        <i class=\"fa-solid fa-pen\"></i>
                                                        <span>Update</span>
                                                    </a>
                                                    <a class=\"dropdown-item\"
                                                       data-action=\"click->delete-item#deleteItem\">
                                                        <i class=\"fa-solid fa-trash\"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>Meeting</th>
                                        <th>Type</th>
                                        <th>Place</th>
                                        <th>Target</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tfoot>
                                </table>
                                <div id=\"test\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Advanced Search -->
        </div>
    </div>
</div>

<div class=\"sidenav-overlay\"></div>
<div class=\"drag-target\"></div>
";
        // line 155
        echo twig_include($this->env, $context, "partials/_footer.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "meetings/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 155,  119 => 27,  105 => 15,  103 => 13,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Announcement!{% endblock %}

{% block body %}

<body class=\"vertical-layout vertical-menu-modern  navbar-floating footer-static  \" data-open=\"click\"
      data-menu=\"vertical-menu-modern\" data-col=\"\">

{{ include('partials/_navbar.html.twig') }}
{{ include('partials/_sidebar.html.twig') }}
<div class=\"app-content content \"
        {{ stimulus_controller('reload-content',{
            url: path('app_library', { ajax: 1 }),
        }) }}
     data-action=\"delete-item:deleted->reload-content#refreshContent modal-form:success->reload-content#refreshContent\"
>
    <div class=\"content-wrapper container-xxl p-0\">
        <div class=\"content-body\">
            <!-- Advanced Search -->
            <section id=\"advanced-search-datatable\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header border-bottom\">
                                <h4 class=\"card-title\">Advanced Search</h4>
                                <div {{ stimulus_controller('modal-form') }}
                                        data-action=\"hidden.bs.modal->modal-form#modalHidden\">
                                    <button class=\"btn btn-outline-primary\" data-action=\"modal-form#openModal\">Add
                                        Meeting
                                    </button>
                                </div>
                            </div>
                            <!--Search Form -->
                            <div class=\"card-body mt-2\">
                                <form class=\"dt_adv_search\" method=\"POST\">
                                    <div class=\"row g-1 mb-md-1\">
                                        <div class=\"col-md-4\">
                                            <label class=\"form-label\">Name:</label>
                                            <input type=\"text\" class=\"form-control dt-input dt-full-name\"
                                                   data-column=\"1\"
                                                   placeholder=\"Alaric Beslier\" data-column-index=\"0\"/>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <label class=\"form-label\">Email:</label>
                                            <input type=\"text\" class=\"form-control dt-input\" data-column=\"2\"
                                                   placeholder=\"demo@example.com\" data-column-index=\"1\"/>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <label class=\"form-label\">Post:</label>
                                            <input type=\"text\" class=\"form-control dt-input\" data-column=\"3\"
                                                   placeholder=\"Web designer\" data-column-index=\"2\"/>
                                        </div>
                                    </div>
                                    <div class=\"row g-1\">
                                        <div class=\"col-md-4\">
                                            <label class=\"form-label\">City:</label>
                                            <input type=\"text\" class=\"form-control dt-input\" data-column=\"4\"
                                                   placeholder=\"Balky\"
                                                   data-column-index=\"3\"/>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <label class=\"form-label\">Date:</label>
                                            <div class=\"mb-0\">
                                                <input type=\"text\" class=\"form-control dt-date flatpickr-range dt-input\"
                                                       data-column=\"5\" placeholder=\"StartDate to EndDate\"
                                                       data-column-index=\"4\"
                                                       name=\"dt_date\"/>
                                                <input type=\"hidden\" class=\"form-control dt-date start_date dt-input\"
                                                       data-column=\"5\" data-column-index=\"4\"
                                                       name=\"value_from_start_date\"/>
                                                <input type=\"hidden\" class=\"form-control dt-date end_date dt-input\"
                                                       name=\"value_from_end_date\" data-column=\"5\"
                                                       data-column-index=\"4\"/>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <label class=\"form-label\">Salary:</label>
                                            <input type=\"text\" class=\"form-control dt-input\" data-column=\"6\"
                                                   placeholder=\"10000\"
                                                   data-column-index=\"5\"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <hr class=\"my-0\"/>
                            <div class=\"card-datatable\" data-reload-content-target=\"content\">
                                <table class=\"dt-advanced-search table\">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Meeting</th>
                                        <th>Type</th>
                                        <th>Place</th>
                                        <th>Target</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td>PHP</td>
                                        <td>Type</td>
                                        <td>ISB</td>
                                        <td>IT</td>
                                        <td>22/2/2023</td>
                                        <td>
                                            <div class=\"dropdown\">
                                                <button type=\"button\"
                                                        class=\"btn btn-sm dropdown-toggle hide-arrow py-0\"
                                                        data-bs-toggle=\"dropdown\">
                                                    <i class=\"fa-solid fa-ellipsis-vertical\"></i>
                                                </button>
                                                <div class=\"dropdown-menu dropdown-menu-end\">
                                                    <a class=\"dropdown-item\"
                                                       data-action=\"click->edit-item#openEditModal\"
                                                    >
                                                        <i class=\"fa-solid fa-pen\"></i>
                                                        <span>Update</span>
                                                    </a>
                                                    <a class=\"dropdown-item\"
                                                       data-action=\"click->delete-item#deleteItem\">
                                                        <i class=\"fa-solid fa-trash\"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>Meeting</th>
                                        <th>Type</th>
                                        <th>Place</th>
                                        <th>Target</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tfoot>
                                </table>
                                <div id=\"test\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Advanced Search -->
        </div>
    </div>
</div>

<div class=\"sidenav-overlay\"></div>
<div class=\"drag-target\"></div>
{{ include('partials/_footer.html.twig') }}
{% endblock %}
", "meetings/index.html.twig", "C:\\IT\\Intern Projects\\NEST\\templates\\meetings\\index.html.twig");
    }
}
