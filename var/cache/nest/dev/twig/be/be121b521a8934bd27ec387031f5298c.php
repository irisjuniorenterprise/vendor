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

/* partials/_sidebar.html.twig */
class __TwigTemplate_33c5140e65e636b9ab9df20e33c5929e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_sidebar.html.twig"));

        // line 1
        echo "<!-- BEGIN: Main Menu-->
<div class=\"main-menu menu-fixed menu-light menu-accordion menu-shadow\" data-scroll-to-active=\"true\">
    <div class=\"navbar-header\">
        <ul class=\"nav navbar-nav flex-row\">
            <li class=\"nav-item me-auto\"><a class=\"navbar-brand\" href=\"../../../html/ltr/vertical-menu-template/index.html\"><span class=\"brand-logo\">
                            <svg viewbox=\"0 0 139 95\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" height=\"24\">
                                <defs>
                                    <lineargradient id=\"linearGradient-1\" x1=\"100%\" y1=\"10.5120544%\" x2=\"50%\" y2=\"89.4879456%\">
                                        <stop stop-color=\"#000000\" offset=\"0%\"></stop>
                                        <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                                    </lineargradient>
                                    <lineargradient id=\"linearGradient-2\" x1=\"64.0437835%\" y1=\"46.3276743%\" x2=\"37.373316%\" y2=\"100%\">
                                        <stop stop-color=\"#EEEEEE\" stop-opacity=\"0\" offset=\"0%\"></stop>
                                        <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                                    </lineargradient>
                                </defs>
                                <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                    <g id=\"Artboard\" transform=\"translate(-400.000000, -178.000000)\">
                                        <g id=\"Group\" transform=\"translate(400.000000, 178.000000)\">
                                            <path class=\"text-primary\" id=\"Path\" d=\"M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z\" style=\"fill:currentColor\"></path>
                                            <path id=\"Path1\" d=\"M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z\" fill=\"url(#linearGradient-1)\" opacity=\"0.2\"></path>
                                            <polygon id=\"Path-2\" fill=\"#000000\" opacity=\"0.049999997\" points=\"69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325\"></polygon>
                                            <polygon id=\"Path-21\" fill=\"#000000\" opacity=\"0.099999994\" points=\"69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338\"></polygon>
                                            <polygon id=\"Path-3\" fill=\"url(#linearGradient-2)\" opacity=\"0.099999994\" points=\"101.428699 0 83.0667527 94.1480575 130.378721 47.0740288\"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                    <h2 class=\"brand-text\">Vuexy</h2>
                </a></li>
            <li class=\"nav-item nav-toggle\"><a class=\"nav-link modern-nav-toggle pe-0\" data-bs-toggle=\"collapse\"><i class=\"d-block d-xl-none text-primary toggle-icon font-medium-4\" data-feather=\"x\"></i><i class=\"d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary\" data-feather=\"disc\" data-ticon=\"disc\"></i></a></li>
        </ul>
    </div>
    <div class=\"shadow-bottom\"></div>
    <div class=\"main-menu-content\">
        <ul class=\"navigation navigation-main\" id=\"main-menu-navigation\" data-menu=\"menu-navigation\">
            <li class=\" navigation-header\"><span data-i18n=\"Apps &amp; Pages\">Apps &amp; Pages</span><i data-feather=\"more-horizontal\"></i>
            </li>
            <li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eagles");
        echo "\"><i data-feather=\"mail\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Email\">Eagles</span></a>
            </li>
            <li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_library");
        echo "\"><i data-feather=\"mail\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Email\">Library</span></a>
            </li>
            <li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blame");
        echo "\"><i data-feather=\"mail\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Email\">Blames</span></a>
            </li>
            <li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"#\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">Posts</span></a>
                <ul class=\"menu-content\">
                    <li><a class=\"d-flex align-items-center\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_workshop");
        echo "\"><i data-feather=\"circle\"></i><span class=\"menu-item text-truncate\" data-i18n=\"Analytics\">Workshops</span></a>
                    </li>
                    <li><a class=\"d-flex align-items-center\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meeting");
        echo "\"><i data-feather=\"circle\"></i><span class=\"menu-item text-truncate\" data-i18n=\"eCommerce\">Meetings</span></a>
                    </li>
                    <li><a class=\"d-flex align-items-center\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poll");
        echo "\"><i data-feather=\"circle\"></i><span class=\"menu-item text-truncate\" data-i18n=\"eCommerce\">Polls</span></a>
                    </li>
                    <li><a class=\"d-flex align-items-center\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_announcement");
        echo "\"><i data-feather=\"circle\"></i><span class=\"menu-item text-truncate\" data-i18n=\"eCommerce\">Announcements</span></a>
                    </li>
                    <li><a class=\"d-flex align-items-center\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_training");
        echo "\"><i data-feather=\"circle\"></i><span class=\"menu-item text-truncate\" data-i18n=\"eCommerce\">Trainings</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 55,  115 => 53,  110 => 51,  105 => 49,  100 => 47,  93 => 43,  88 => 41,  83 => 39,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- BEGIN: Main Menu-->
<div class=\"main-menu menu-fixed menu-light menu-accordion menu-shadow\" data-scroll-to-active=\"true\">
    <div class=\"navbar-header\">
        <ul class=\"nav navbar-nav flex-row\">
            <li class=\"nav-item me-auto\"><a class=\"navbar-brand\" href=\"../../../html/ltr/vertical-menu-template/index.html\"><span class=\"brand-logo\">
                            <svg viewbox=\"0 0 139 95\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" height=\"24\">
                                <defs>
                                    <lineargradient id=\"linearGradient-1\" x1=\"100%\" y1=\"10.5120544%\" x2=\"50%\" y2=\"89.4879456%\">
                                        <stop stop-color=\"#000000\" offset=\"0%\"></stop>
                                        <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                                    </lineargradient>
                                    <lineargradient id=\"linearGradient-2\" x1=\"64.0437835%\" y1=\"46.3276743%\" x2=\"37.373316%\" y2=\"100%\">
                                        <stop stop-color=\"#EEEEEE\" stop-opacity=\"0\" offset=\"0%\"></stop>
                                        <stop stop-color=\"#FFFFFF\" offset=\"100%\"></stop>
                                    </lineargradient>
                                </defs>
                                <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                    <g id=\"Artboard\" transform=\"translate(-400.000000, -178.000000)\">
                                        <g id=\"Group\" transform=\"translate(400.000000, 178.000000)\">
                                            <path class=\"text-primary\" id=\"Path\" d=\"M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z\" style=\"fill:currentColor\"></path>
                                            <path id=\"Path1\" d=\"M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z\" fill=\"url(#linearGradient-1)\" opacity=\"0.2\"></path>
                                            <polygon id=\"Path-2\" fill=\"#000000\" opacity=\"0.049999997\" points=\"69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325\"></polygon>
                                            <polygon id=\"Path-21\" fill=\"#000000\" opacity=\"0.099999994\" points=\"69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338\"></polygon>
                                            <polygon id=\"Path-3\" fill=\"url(#linearGradient-2)\" opacity=\"0.099999994\" points=\"101.428699 0 83.0667527 94.1480575 130.378721 47.0740288\"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                    <h2 class=\"brand-text\">Vuexy</h2>
                </a></li>
            <li class=\"nav-item nav-toggle\"><a class=\"nav-link modern-nav-toggle pe-0\" data-bs-toggle=\"collapse\"><i class=\"d-block d-xl-none text-primary toggle-icon font-medium-4\" data-feather=\"x\"></i><i class=\"d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary\" data-feather=\"disc\" data-ticon=\"disc\"></i></a></li>
        </ul>
    </div>
    <div class=\"shadow-bottom\"></div>
    <div class=\"main-menu-content\">
        <ul class=\"navigation navigation-main\" id=\"main-menu-navigation\" data-menu=\"menu-navigation\">
            <li class=\" navigation-header\"><span data-i18n=\"Apps &amp; Pages\">Apps &amp; Pages</span><i data-feather=\"more-horizontal\"></i>
            </li>
            <li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"{{ path('app_eagles') }}\"><i data-feather=\"mail\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Email\">Eagles</span></a>
            </li>
            <li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"{{ path('app_library') }}\"><i data-feather=\"mail\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Email\">Library</span></a>
            </li>
            <li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"{{ path('app_blame') }}\"><i data-feather=\"mail\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Email\">Blames</span></a>
            </li>
            <li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"#\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">Posts</span></a>
                <ul class=\"menu-content\">
                    <li><a class=\"d-flex align-items-center\" href=\"{{ path('app_workshop') }}\"><i data-feather=\"circle\"></i><span class=\"menu-item text-truncate\" data-i18n=\"Analytics\">Workshops</span></a>
                    </li>
                    <li><a class=\"d-flex align-items-center\" href=\"{{ path('app_meeting') }}\"><i data-feather=\"circle\"></i><span class=\"menu-item text-truncate\" data-i18n=\"eCommerce\">Meetings</span></a>
                    </li>
                    <li><a class=\"d-flex align-items-center\" href=\"{{ path('app_poll') }}\"><i data-feather=\"circle\"></i><span class=\"menu-item text-truncate\" data-i18n=\"eCommerce\">Polls</span></a>
                    </li>
                    <li><a class=\"d-flex align-items-center\" href=\"{{ path('app_announcement') }}\"><i data-feather=\"circle\"></i><span class=\"menu-item text-truncate\" data-i18n=\"eCommerce\">Announcements</span></a>
                    </li>
                    <li><a class=\"d-flex align-items-center\" href=\"{{ path('app_training') }}\"><i data-feather=\"circle\"></i><span class=\"menu-item text-truncate\" data-i18n=\"eCommerce\">Trainings</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->", "partials/_sidebar.html.twig", "C:\\IT\\Intern Projects\\NEST\\templates\\partials\\_sidebar.html.twig");
    }
}
