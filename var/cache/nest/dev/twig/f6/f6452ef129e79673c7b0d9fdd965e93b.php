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

/* main/index.html.twig */
class __TwigTemplate_bc309ec8d843562ab95b93cefae6c2f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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
    <body class=\"vertical-layout vertical-menu-modern  navbar-floating footer-static  \" data-open=\"click\" data-menu=\"vertical-menu-modern\" data-col=\"\">

    ";
        // line 9
        echo twig_include($this->env, $context, "partials/_navbar.html.twig");
        echo "
    ";
        // line 10
        echo twig_include($this->env, $context, "partials/_sidebar.html.twig");
        echo "

    <!-- BEGIN: Content-->
    <div class=\"app-content content \" >
        <div class=\"content-overlay\"></div>
        <div class=\"header-navbar-shadow\"></div>
        <div class=\"content-wrapper container-xxl p-0\">
            <div class=\"content-header row\">
                <div class=\"content-header-left col-md-9 col-12 mb-2\">
                    <div class=\"row breadcrumbs-top\">
                        <div class=\"col-12\">
                            <h2 class=\"content-header-title float-start mb-0\">Knowledge Base</h2>
                            <div class=\"breadcrumb-wrapper\">
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a>
                                    </li>
                                    <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a>
                                    </li>
                                    <li class=\"breadcrumb-item active\">Knowledge Base
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"content-header-right text-md-end col-md-3 col-12 d-md-block d-none\">
                    <div class=\"mb-1 breadcrumb-right\">
                        <div class=\"dropdown\">
                            <button class=\"btn-icon btn btn-primary btn-round btn-sm dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i data-feather=\"grid\"></i></button>
                            <div class=\"dropdown-menu dropdown-menu-end\"><a class=\"dropdown-item\" href=\"app-todo.html\"><i class=\"me-1\" data-feather=\"check-square\"></i><span class=\"align-middle\">Todo</span></a><a class=\"dropdown-item\" href=\"app-chat.html\"><i class=\"me-1\" data-feather=\"message-square\"></i><span class=\"align-middle\">Chat</span></a><a class=\"dropdown-item\" href=\"app-email.html\"><i class=\"me-1\" data-feather=\"mail\"></i><span class=\"align-middle\">Email</span></a><a class=\"dropdown-item\" href=\"app-calendar.html\"><i class=\"me-1\" data-feather=\"calendar\"></i><span class=\"align-middle\">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"content-body\">
                <!-- Knowledge base Jumbotron -->
                <section id=\"knowledge-base-search\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card knowledge-base-bg text-center\" style=\"background-image: url('";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/banner/banner.06ea9907.png"), "html", null, true);
        echo "')\">
                                <div class=\"card-body\">
                                    <h2 class=\"text-primary\">Dedicated Source Used on Website</h2>
                                    <p class=\"card-text mb-2\">
                                        <span>Popular searches: </span><span class=\"fw-bolder\">Sales automation, Email marketing</span>
                                    </p>
                                    <form class=\"kb-search-input\">
                                        <div class=\"input-group input-group-merge\">
                                            <span class=\"input-group-text\"><i data-feather=\"search\"></i></span>
                                            <input type=\"text\" class=\"form-control\" id=\"searchbar\" placeholder=\"Ask a question...\" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Knowledge base Jumbotron -->

                <!-- Knowledge base -->
                <section id=\"knowledge-base-content\">
                    <div class=\"row kb-search-content-info match-height\">
                        <!-- sales card -->
                        <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
                            <div class=\"card\">
                                <a href=\"page-kb-category.html\">
                                    <img src=\"../../../app-assets/images/illustration/sales.svg\" class=\"card-img-top\" alt=\"knowledge-base-image\" />

                                    <div class=\"card-body text-center\">
                                        <h4>Sales Automation</h4>
                                        <p class=\"text-body mt-1 mb-0\">
                                            There is perhaps no better demonstration of the folly of image of our tiny world.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- marketing -->
                        <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
                            <div class=\"card\">
                                <a href=\"page-kb-category.html\">
                                    <img src=\"../../../app-assets/images/illustration/marketing.svg\" class=\"card-img-top\" alt=\"knowledge-base-image\" />
                                    <div class=\"card-body text-center\">
                                        <h4>Marketing Automation</h4>
                                        <p class=\"text-body mt-1 mb-0\">
                                            Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- api -->
                        <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
                            <div class=\"card\">
                                <a href=\"page-kb-category.html\">
                                    <img src=\"../../../app-assets/images/illustration/api.svg\" class=\"card-img-top\" alt=\"knowledge-base-image\" />
                                    <div class=\"card-body text-center\">
                                        <h4>API Questions</h4>
                                        <p class=\"text-body mt-1 mb-0\">every hero and coward, every creator and destroyer of civilization.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- personalization -->
                        <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
                            <div class=\"card\">
                                <a href=\"page-kb-category.html\">
                                    <img src=\"../../../app-assets/images/illustration/personalization.svg\" class=\"card-img-top\" alt=\"knowledge-base-image\" />
                                    <div class=\"card-body text-center\">
                                        <h4>Personalization</h4>
                                        <p class=\"text-body mt-1 mb-0\">It has been said that astronomy is a humbling and character experience.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- email -->
                        <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
                            <div class=\"card\">
                                <a href=\"page-kb-category.html\">
                                    <img src=\"../../../app-assets/images/illustration/email.svg\" class=\"card-img-top\" alt=\"knowledge-base-image\" />
                                    <div class=\"card-body text-center\">
                                        <h4>Email Marketing</h4>
                                        <p class=\"text-body mt-1 mb-0\">There is perhaps no better demonstration of the folly of human conceits.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- demand -->
                        <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
                            <div class=\"card\">
                                <a href=\"page-kb-category.html\">
                                    <img src=\"../../../app-assets/images/illustration/demand.svg\" class=\"card-img-top\" alt=\"knowledge-base-image\" />
                                    <div class=\"card-body text-center\">
                                        <h4>Demand Generation</h4>
                                        <p class=\"text-body mt-1 mb-0\">Competent means we will never take anything for granted.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- no result -->
                        <div class=\"col-12 text-center no-result no-items\">
                            <h4 class=\"mt-4\">Search result not found!!</h4>
                        </div>
                    </div>
                </section>
                <!-- Knowledge base ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class=\"sidenav-overlay\"></div>
    <div class=\"drag-target\"></div>

    ";
        // line 170
        echo twig_include($this->env, $context, "partials/_footer.html.twig");
        echo "

    </body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 170,  138 => 49,  96 => 10,  92 => 9,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}

    <body class=\"vertical-layout vertical-menu-modern  navbar-floating footer-static  \" data-open=\"click\" data-menu=\"vertical-menu-modern\" data-col=\"\">

    {{ include('partials/_navbar.html.twig') }}
    {{ include('partials/_sidebar.html.twig') }}

    <!-- BEGIN: Content-->
    <div class=\"app-content content \" >
        <div class=\"content-overlay\"></div>
        <div class=\"header-navbar-shadow\"></div>
        <div class=\"content-wrapper container-xxl p-0\">
            <div class=\"content-header row\">
                <div class=\"content-header-left col-md-9 col-12 mb-2\">
                    <div class=\"row breadcrumbs-top\">
                        <div class=\"col-12\">
                            <h2 class=\"content-header-title float-start mb-0\">Knowledge Base</h2>
                            <div class=\"breadcrumb-wrapper\">
                                <ol class=\"breadcrumb\">
                                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a>
                                    </li>
                                    <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a>
                                    </li>
                                    <li class=\"breadcrumb-item active\">Knowledge Base
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"content-header-right text-md-end col-md-3 col-12 d-md-block d-none\">
                    <div class=\"mb-1 breadcrumb-right\">
                        <div class=\"dropdown\">
                            <button class=\"btn-icon btn btn-primary btn-round btn-sm dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i data-feather=\"grid\"></i></button>
                            <div class=\"dropdown-menu dropdown-menu-end\"><a class=\"dropdown-item\" href=\"app-todo.html\"><i class=\"me-1\" data-feather=\"check-square\"></i><span class=\"align-middle\">Todo</span></a><a class=\"dropdown-item\" href=\"app-chat.html\"><i class=\"me-1\" data-feather=\"message-square\"></i><span class=\"align-middle\">Chat</span></a><a class=\"dropdown-item\" href=\"app-email.html\"><i class=\"me-1\" data-feather=\"mail\"></i><span class=\"align-middle\">Email</span></a><a class=\"dropdown-item\" href=\"app-calendar.html\"><i class=\"me-1\" data-feather=\"calendar\"></i><span class=\"align-middle\">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"content-body\">
                <!-- Knowledge base Jumbotron -->
                <section id=\"knowledge-base-search\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card knowledge-base-bg text-center\" style=\"background-image: url('{{ asset('build/images/banner/banner.06ea9907.png') }}')\">
                                <div class=\"card-body\">
                                    <h2 class=\"text-primary\">Dedicated Source Used on Website</h2>
                                    <p class=\"card-text mb-2\">
                                        <span>Popular searches: </span><span class=\"fw-bolder\">Sales automation, Email marketing</span>
                                    </p>
                                    <form class=\"kb-search-input\">
                                        <div class=\"input-group input-group-merge\">
                                            <span class=\"input-group-text\"><i data-feather=\"search\"></i></span>
                                            <input type=\"text\" class=\"form-control\" id=\"searchbar\" placeholder=\"Ask a question...\" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Knowledge base Jumbotron -->

                <!-- Knowledge base -->
                <section id=\"knowledge-base-content\">
                    <div class=\"row kb-search-content-info match-height\">
                        <!-- sales card -->
                        <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
                            <div class=\"card\">
                                <a href=\"page-kb-category.html\">
                                    <img src=\"../../../app-assets/images/illustration/sales.svg\" class=\"card-img-top\" alt=\"knowledge-base-image\" />

                                    <div class=\"card-body text-center\">
                                        <h4>Sales Automation</h4>
                                        <p class=\"text-body mt-1 mb-0\">
                                            There is perhaps no better demonstration of the folly of image of our tiny world.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- marketing -->
                        <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
                            <div class=\"card\">
                                <a href=\"page-kb-category.html\">
                                    <img src=\"../../../app-assets/images/illustration/marketing.svg\" class=\"card-img-top\" alt=\"knowledge-base-image\" />
                                    <div class=\"card-body text-center\">
                                        <h4>Marketing Automation</h4>
                                        <p class=\"text-body mt-1 mb-0\">
                                            Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- api -->
                        <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
                            <div class=\"card\">
                                <a href=\"page-kb-category.html\">
                                    <img src=\"../../../app-assets/images/illustration/api.svg\" class=\"card-img-top\" alt=\"knowledge-base-image\" />
                                    <div class=\"card-body text-center\">
                                        <h4>API Questions</h4>
                                        <p class=\"text-body mt-1 mb-0\">every hero and coward, every creator and destroyer of civilization.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- personalization -->
                        <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
                            <div class=\"card\">
                                <a href=\"page-kb-category.html\">
                                    <img src=\"../../../app-assets/images/illustration/personalization.svg\" class=\"card-img-top\" alt=\"knowledge-base-image\" />
                                    <div class=\"card-body text-center\">
                                        <h4>Personalization</h4>
                                        <p class=\"text-body mt-1 mb-0\">It has been said that astronomy is a humbling and character experience.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- email -->
                        <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
                            <div class=\"card\">
                                <a href=\"page-kb-category.html\">
                                    <img src=\"../../../app-assets/images/illustration/email.svg\" class=\"card-img-top\" alt=\"knowledge-base-image\" />
                                    <div class=\"card-body text-center\">
                                        <h4>Email Marketing</h4>
                                        <p class=\"text-body mt-1 mb-0\">There is perhaps no better demonstration of the folly of human conceits.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- demand -->
                        <div class=\"col-md-4 col-sm-6 col-12 kb-search-content\">
                            <div class=\"card\">
                                <a href=\"page-kb-category.html\">
                                    <img src=\"../../../app-assets/images/illustration/demand.svg\" class=\"card-img-top\" alt=\"knowledge-base-image\" />
                                    <div class=\"card-body text-center\">
                                        <h4>Demand Generation</h4>
                                        <p class=\"text-body mt-1 mb-0\">Competent means we will never take anything for granted.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- no result -->
                        <div class=\"col-12 text-center no-result no-items\">
                            <h4 class=\"mt-4\">Search result not found!!</h4>
                        </div>
                    </div>
                </section>
                <!-- Knowledge base ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class=\"sidenav-overlay\"></div>
    <div class=\"drag-target\"></div>

    {{ include('partials/_footer.html.twig') }}

    </body>

{% endblock %}
", "main/index.html.twig", "C:\\IT\\Intern Projects\\NEST\\templates\\main\\index.html.twig");
    }
}
