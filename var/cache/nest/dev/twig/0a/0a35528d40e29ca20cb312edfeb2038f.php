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

/* library/update.html.twig */
class __TwigTemplate_f5c32c4a42bc9d95e7a26dbd7f43ba6c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "library/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "library/update.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "library/update.html.twig", 1);
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
                <!-- Modal to add new record -->
                <div class=\"modal modal-slide-in fade\" id=\"modals-slide-in\">
                    <div class=\"modal-dialog sidebar-sm\">
                        <div class=\"add-new-record modal-content pt-0\">
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">×
                            </button>
                            <div class=\"modal-header mb-1\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">New Resource</h5>
                            </div>
                            <div class=\"modal-body flex-grow-1\">
                                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["libraryForm"]) || array_key_exists("libraryForm", $context) ? $context["libraryForm"] : (function () { throw new RuntimeError('Variable "libraryForm" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_library_update")], "id" => twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]);
        echo "
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["libraryForm"]) || array_key_exists("libraryForm", $context) ? $context["libraryForm"] : (function () { throw new RuntimeError('Variable "libraryForm" does not exist.', 28, $this->source); })()), 'widget');
        echo "
                                <input type=\"submit\" style=\"display: inline!important;\"
                                       class=\"btn btn-primary data-submit me-1\">
                                ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["libraryForm"]) || array_key_exists("libraryForm", $context) ? $context["libraryForm"] : (function () { throw new RuntimeError('Variable "libraryForm" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
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
        // line 45
        echo twig_include($this->env, $context, "partials/_footer.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "library/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 45,  127 => 31,  121 => 28,  117 => 27,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                <!-- Modal to add new record -->
                <div class=\"modal modal-slide-in fade\" id=\"modals-slide-in\">
                    <div class=\"modal-dialog sidebar-sm\">
                        <div class=\"add-new-record modal-content pt-0\">
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">×
                            </button>
                            <div class=\"modal-header mb-1\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">New Resource</h5>
                            </div>
                            <div class=\"modal-body flex-grow-1\">
                                {{ form_start(libraryForm,{'attr':{'action':path('app_library_update')},'id':resource.id}) }}
                                {{ form_widget(libraryForm) }}
                                <input type=\"submit\" style=\"display: inline!important;\"
                                       class=\"btn btn-primary data-submit me-1\">
                                {{ form_end(libraryForm) }}
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
", "library/update.html.twig", "C:\\IT\\Intern Projects\\NEST\\templates\\library\\update.html.twig");
    }
}
