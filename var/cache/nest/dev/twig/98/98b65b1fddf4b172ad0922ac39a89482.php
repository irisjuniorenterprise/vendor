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

/* _footer.html.twig */
class __TwigTemplate_dc7126d343d067a2a3c84f5227b7eab5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        // line 1
        echo "<!-- BEGIN: Footer-->
<footer class=\"footer footer-static footer-light\">
    <p class=\"clearfix mb-0\"><span class=\"float-md-start d-block d-md-inline-block mt-25\">COPYRIGHT &copy; 2021<a class=\"ms-25\" href=\"https://1.envato.market/pixinvent_portfolio\" target=\"_blank\">Pixinvent</a><span class=\"d-none d-sm-inline-block\">, All rights Reserved</span></span><span class=\"float-md-end d-none d-md-block\">Hand-crafted & Made with<i data-feather=\"heart\"></i></span></p>
</footer>
<button class=\"btn btn-primary btn-icon scroll-top\" type=\"button\"><i data-feather=\"arrow-up\"></i></button>
<!-- END: Footer-->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- BEGIN: Footer-->
<footer class=\"footer footer-static footer-light\">
    <p class=\"clearfix mb-0\"><span class=\"float-md-start d-block d-md-inline-block mt-25\">COPYRIGHT &copy; 2021<a class=\"ms-25\" href=\"https://1.envato.market/pixinvent_portfolio\" target=\"_blank\">Pixinvent</a><span class=\"d-none d-sm-inline-block\">, All rights Reserved</span></span><span class=\"float-md-end d-none d-md-block\">Hand-crafted & Made with<i data-feather=\"heart\"></i></span></p>
</footer>
<button class=\"btn btn-primary btn-icon scroll-top\" type=\"button\"><i data-feather=\"arrow-up\"></i></button>
<!-- END: Footer-->", "_footer.html.twig", "C:\\IT\\Intern Projects\\NEST\\templates\\_footer.html.twig");
    }
}
