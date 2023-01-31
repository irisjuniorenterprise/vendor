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

/* admin/login.html.twig */
class __TwigTemplate_3dbefd1b27aff2692c8f163e6b5fcd83 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <!-- BEGIN: Content-->
<body class=\"vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  \" data-open=\"click\" data-menu=\"vertical-menu-modern\" data-col=\"blank-page\">
<div class=\"app-content content \">
        <div class=\"content-overlay\"></div>
        <div class=\"header-navbar-shadow\"></div>
        <div class=\"content-wrapper\">
            <div class=\"content-header row\">
            </div>
            <div class=\"content-body\">
                <div class=\"auth-wrapper auth-basic px-2\">
                    <div class=\"auth-inner my-2\">
                        <!-- Login basic -->
                        <div class=\"card mb-0\">
                            <div class=\"card-body\">
                                <a href=\"#\" class=\"brand-logo\">
                                    <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/iris/iris-logo-blue.f33531e0.png"), "html", null, true);
        echo "\" alt=\"logo\" height=\"auto\" width=\"100%\">
                                </a>

                                <h4 class=\"card-title mb-1 text-center\">Welcome Treasurer</h4>
                                ";
        // line 22
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "                                    <div class=\"alert alert-danger p-2\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })()), "messageKey", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })()), "messageData", [], "any", false, false, false, 23), "security"), "html", null, true);
            echo " </div>
                                ";
        }
        // line 25
        echo "                                <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"auth-login-form mt-2\" method=\"POST\">
                                    <div class=\"mb-1\">
                                        <label for=\"login-email\" class=\"form-label\">Email</label>
                                        <input type=\"text\" class=\"form-control\" id=\"login-email\" name=\"_username\" placeholder=\"john@example.com\" aria-describedby=\"login-email\" tabindex=\"1\" autofocus  value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\"/>
                                    </div>

                                    <div class=\"mb-1\">
                                        <div class=\"d-flex justify-content-between\">
                                            <label class=\"form-label\" for=\"login-password\">Password</label>
                                            <a href=\"auth-forgot-password-basic.html\">
                                                <small>Forgot Password?</small>
                                            </a>
                                        </div>
                                        <div class=\"input-group input-group-merge form-password-toggle\">
                                            <input type=\"password\" class=\"form-control form-control-merge\" id=\"login-password\" name=\"_password\" tabindex=\"2\" placeholder=\"&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;\" aria-describedby=\"login-password\" />
                                            <span class=\"input-group-text cursor-pointer\"><i data-feather=\"eye\"></i></span>
                                        </div>
                                    </div>
                                    <div class=\"mb-1\">
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"remember-me\" tabindex=\"3\" name=\"_remember_me\" checked/>
                                            <label class=\"form-check-label\" for=\"remember-me\"> Remember Me </label>
                                        </div>
                                    </div>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                    <button type=\"submit\" class=\"btn  w-100\" style=\"background-color: #1A3969; color: white\" tabindex=\"4\">Sign in</button>
                                </form>
                            </div>
                        </div>
                        <!-- /Login basic -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
    <!-- END: Content-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 49,  107 => 28,  100 => 25,  94 => 23,  92 => 22,  85 => 18,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <!-- BEGIN: Content-->
<body class=\"vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  \" data-open=\"click\" data-menu=\"vertical-menu-modern\" data-col=\"blank-page\">
<div class=\"app-content content \">
        <div class=\"content-overlay\"></div>
        <div class=\"header-navbar-shadow\"></div>
        <div class=\"content-wrapper\">
            <div class=\"content-header row\">
            </div>
            <div class=\"content-body\">
                <div class=\"auth-wrapper auth-basic px-2\">
                    <div class=\"auth-inner my-2\">
                        <!-- Login basic -->
                        <div class=\"card mb-0\">
                            <div class=\"card-body\">
                                <a href=\"#\" class=\"brand-logo\">
                                    <img src=\"{{ asset('build/images/iris/iris-logo-blue.f33531e0.png') }}\" alt=\"logo\" height=\"auto\" width=\"100%\">
                                </a>

                                <h4 class=\"card-title mb-1 text-center\">Welcome Treasurer</h4>
                                {% if error %}
                                    <div class=\"alert alert-danger p-2\">{{ error.messageKey|trans(error.messageData, 'security') }} </div>
                                {% endif %}
                                <form action=\"{{ path('app_login') }}\" class=\"auth-login-form mt-2\" method=\"POST\">
                                    <div class=\"mb-1\">
                                        <label for=\"login-email\" class=\"form-label\">Email</label>
                                        <input type=\"text\" class=\"form-control\" id=\"login-email\" name=\"_username\" placeholder=\"john@example.com\" aria-describedby=\"login-email\" tabindex=\"1\" autofocus  value=\"{{ last_username }}\"/>
                                    </div>

                                    <div class=\"mb-1\">
                                        <div class=\"d-flex justify-content-between\">
                                            <label class=\"form-label\" for=\"login-password\">Password</label>
                                            <a href=\"auth-forgot-password-basic.html\">
                                                <small>Forgot Password?</small>
                                            </a>
                                        </div>
                                        <div class=\"input-group input-group-merge form-password-toggle\">
                                            <input type=\"password\" class=\"form-control form-control-merge\" id=\"login-password\" name=\"_password\" tabindex=\"2\" placeholder=\"&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;\" aria-describedby=\"login-password\" />
                                            <span class=\"input-group-text cursor-pointer\"><i data-feather=\"eye\"></i></span>
                                        </div>
                                    </div>
                                    <div class=\"mb-1\">
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"remember-me\" tabindex=\"3\" name=\"_remember_me\" checked/>
                                            <label class=\"form-check-label\" for=\"remember-me\"> Remember Me </label>
                                        </div>
                                    </div>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                                    <button type=\"submit\" class=\"btn  w-100\" style=\"background-color: #1A3969; color: white\" tabindex=\"4\">Sign in</button>
                                </form>
                            </div>
                        </div>
                        <!-- /Login basic -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
    <!-- END: Content-->
{% endblock %}
", "admin/login.html.twig", "C:\\IT\\Intern Projects\\NEST\\templates\\admin\\login.html.twig");
    }
}
