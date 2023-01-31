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

/* partials/_modal.html.twig */
class __TwigTemplate_af5cfefc313ce93c907e99265b14ea20 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_modal.html.twig"));

        // line 1
        echo "<div

        class=\"modal modal-slide-in fade\" id=\"modals-slide-in\">
    <div class=\"modal-dialog sidebar-sm\">
        <div class=\"add-new-record modal-content pt-0\">

            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">×
            </button>
            <div class=\"modal-header mb-1\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["modalTitle"]) || array_key_exists("modalTitle", $context) ? $context["modalTitle"] : (function () { throw new RuntimeError('Variable "modalTitle" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"modal-body flex-grow-1\" ";
        // line 12
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, "modal-form");
        echo " data-modal-form-target=\"modalBody\">
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new RuntimeError('Variable "routeName" does not exist.', 13, $this->source); })()))]]);
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'widget');
        echo "
                <button style=\"display: inline!important;\" type=\"submit\" class=\"btn btn-primary data-submit me-1\" data-action=\"modal-form#submitForm\">Save</button>
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_end');
        echo "


            </div>
        </div>
    </div>

</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  67 => 14,  63 => 13,  59 => 12,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div

        class=\"modal modal-slide-in fade\" id=\"modals-slide-in\">
    <div class=\"modal-dialog sidebar-sm\">
        <div class=\"add-new-record modal-content pt-0\">

            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">×
            </button>
            <div class=\"modal-header mb-1\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">{{ modalTitle }}</h5>
            </div>
            <div class=\"modal-body flex-grow-1\" {{ stimulus_controller('modal-form') }} data-modal-form-target=\"modalBody\">
                {{ form_start(form,{'attr':{'action':path(routeName)}}) }}
                {{ form_widget(form) }}
                <button style=\"display: inline!important;\" type=\"submit\" class=\"btn btn-primary data-submit me-1\" data-action=\"modal-form#submitForm\">Save</button>
                {{ form_end(form) }}


            </div>
        </div>
    </div>

</div>", "partials/_modal.html.twig", "C:\\IT\\Intern Projects\\NEST\\templates\\partials\\_modal.html.twig");
    }
}
