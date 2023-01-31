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

/* blames/index.html.twig */
class __TwigTemplate_1c3093758c2bda98a2dda4b13e8117b7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blames/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blames/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blames/index.html.twig", 1);
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

        echo "Hello BlameController!";
        
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
<div class=\"app-content content \">
    <div class=\"content-wrapper container-xxl p-0\">
        <div class=\"content-body\">
            <!-- Advanced Search -->
            <section id=\"advanced-search-datatable\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header border-bottom\">
                                <h4 class=\"card-title\">Advanced Search</h4>
                                <button class=\"btn btn-outline-primary\" data-bs-toggle=\"modal\"
                                        data-bs-target=\"#modals-slide-in\">Add Blame</button>
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
                            <div class=\"card-datatable\">
                                <table class=\"dt-advanced-search table\">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Department</th>
                                        <th>Reason</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td>Alaric Beslier</td>
                                        <td>test@test.com</td>
                                        <td>IT</td>
                                        <td>ANJ</td>
                                        <td>2019-01-01</td>
                                        <td>
                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\"
                                                        data-bs-toggle=\"dropdown\">
                                                    <i data-feather=\"more-vertical\"></i>
                                                </button>
                                                <div class=\"dropdown-menu dropdown-menu-end\">
                                                    <a class=\"dropdown-item\" href=\"#\">
                                                        <i data-feather=\"trash\" class=\"me-50\"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Department</th>
                                        <th>Reason</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal to add new record -->
                <div class=\"modal modal-slide-in fade\" id=\"modals-slide-in\">
                    <div class=\"modal-dialog sidebar-sm\">
                        <form class=\"add-new-record modal-content pt-0\">
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">×
                            </button>
                            <div class=\"modal-header mb-1\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">New Record</h5>
                            </div>
                            <div class=\"modal-body flex-grow-1\">
                                <div class=\"mb-1\">
                                    <label class=\"form-label\" for=\"basic-icon-default-fullname\">Full Name</label>
                                    <input type=\"text\" class=\"form-control dt-full-name\"
                                           id=\"basic-icon-default-fullname\" placeholder=\"John Doe\"
                                           aria-label=\"John Doe\"/>
                                </div>
                                <div class=\"mb-1\">
                                    <label class=\"form-label\" for=\"basic-icon-default-post\">Post</label>
                                    <input type=\"text\" id=\"basic-icon-default-post\" class=\"form-control dt-post\"
                                           placeholder=\"Web Developer\" aria-label=\"Web Developer\"/>
                                </div>
                                <div class=\"mb-1\">
                                    <label class=\"form-label\" for=\"basic-icon-default-email\">Email</label>
                                    <input type=\"text\" id=\"basic-icon-default-email\" class=\"form-control dt-email\"
                                           placeholder=\"john.doe@example.com\" aria-label=\"john.doe@example.com\"/>
                                    <small class=\"form-text\"> You can use letters, numbers & periods </small>
                                </div>
                                <div class=\"mb-1\">
                                    <label class=\"form-label\" for=\"basic-icon-default-date\">Joining Date</label>
                                    <input type=\"text\" class=\"form-control dt-date\" id=\"basic-icon-default-date\"
                                           placeholder=\"MM/DD/YYYY\" aria-label=\"MM/DD/YYYY\"/>
                                </div>
                                <div class=\"mb-4\">
                                    <label class=\"form-label\" for=\"basic-icon-default-salary\">Salary</label>
                                    <input type=\"text\" id=\"basic-icon-default-salary\" class=\"form-control dt-salary\"
                                           placeholder=\"\$12000\" aria-label=\"\$12000\"/>
                                </div>
                                <button type=\"button\" class=\"btn btn-primary data-submit me-1\">Submit</button>
                                <button type=\"reset\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Cancel
                                </button>
                            </div>
                        </form>
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
        // line 183
        echo twig_include($this->env, $context, "partials/_footer.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "blames/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 183,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello BlameController!{% endblock %}

{% block body %}

<body class=\"vertical-layout vertical-menu-modern  navbar-floating footer-static  \" data-open=\"click\"
      data-menu=\"vertical-menu-modern\" data-col=\"\">

{{ include('partials/_navbar.html.twig') }}
{{ include('partials/_sidebar.html.twig') }}
<div class=\"app-content content \">
    <div class=\"content-wrapper container-xxl p-0\">
        <div class=\"content-body\">
            <!-- Advanced Search -->
            <section id=\"advanced-search-datatable\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header border-bottom\">
                                <h4 class=\"card-title\">Advanced Search</h4>
                                <button class=\"btn btn-outline-primary\" data-bs-toggle=\"modal\"
                                        data-bs-target=\"#modals-slide-in\">Add Blame</button>
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
                            <div class=\"card-datatable\">
                                <table class=\"dt-advanced-search table\">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Department</th>
                                        <th>Reason</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td>Alaric Beslier</td>
                                        <td>test@test.com</td>
                                        <td>IT</td>
                                        <td>ANJ</td>
                                        <td>2019-01-01</td>
                                        <td>
                                            <div class=\"dropdown\">
                                                <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0\"
                                                        data-bs-toggle=\"dropdown\">
                                                    <i data-feather=\"more-vertical\"></i>
                                                </button>
                                                <div class=\"dropdown-menu dropdown-menu-end\">
                                                    <a class=\"dropdown-item\" href=\"#\">
                                                        <i data-feather=\"trash\" class=\"me-50\"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Department</th>
                                        <th>Reason</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal to add new record -->
                <div class=\"modal modal-slide-in fade\" id=\"modals-slide-in\">
                    <div class=\"modal-dialog sidebar-sm\">
                        <form class=\"add-new-record modal-content pt-0\">
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">×
                            </button>
                            <div class=\"modal-header mb-1\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">New Record</h5>
                            </div>
                            <div class=\"modal-body flex-grow-1\">
                                <div class=\"mb-1\">
                                    <label class=\"form-label\" for=\"basic-icon-default-fullname\">Full Name</label>
                                    <input type=\"text\" class=\"form-control dt-full-name\"
                                           id=\"basic-icon-default-fullname\" placeholder=\"John Doe\"
                                           aria-label=\"John Doe\"/>
                                </div>
                                <div class=\"mb-1\">
                                    <label class=\"form-label\" for=\"basic-icon-default-post\">Post</label>
                                    <input type=\"text\" id=\"basic-icon-default-post\" class=\"form-control dt-post\"
                                           placeholder=\"Web Developer\" aria-label=\"Web Developer\"/>
                                </div>
                                <div class=\"mb-1\">
                                    <label class=\"form-label\" for=\"basic-icon-default-email\">Email</label>
                                    <input type=\"text\" id=\"basic-icon-default-email\" class=\"form-control dt-email\"
                                           placeholder=\"john.doe@example.com\" aria-label=\"john.doe@example.com\"/>
                                    <small class=\"form-text\"> You can use letters, numbers & periods </small>
                                </div>
                                <div class=\"mb-1\">
                                    <label class=\"form-label\" for=\"basic-icon-default-date\">Joining Date</label>
                                    <input type=\"text\" class=\"form-control dt-date\" id=\"basic-icon-default-date\"
                                           placeholder=\"MM/DD/YYYY\" aria-label=\"MM/DD/YYYY\"/>
                                </div>
                                <div class=\"mb-4\">
                                    <label class=\"form-label\" for=\"basic-icon-default-salary\">Salary</label>
                                    <input type=\"text\" id=\"basic-icon-default-salary\" class=\"form-control dt-salary\"
                                           placeholder=\"\$12000\" aria-label=\"\$12000\"/>
                                </div>
                                <button type=\"button\" class=\"btn btn-primary data-submit me-1\">Submit</button>
                                <button type=\"reset\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Cancel
                                </button>
                            </div>
                        </form>
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
", "blames/index.html.twig", "C:\\IT\\Intern Projects\\NEST\\templates\\blames\\index.html.twig");
    }
}
