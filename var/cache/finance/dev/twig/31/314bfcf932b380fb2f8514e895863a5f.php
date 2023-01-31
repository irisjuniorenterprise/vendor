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

/* _modal.html.twig */
class __TwigTemplate_274e6ca9ee88127fd6a204696085784f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_modal.html.twig"));

        // line 1
        echo "
<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\" data-modal-form-target=\"modal\" >
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["modalTitle"]) || array_key_exists("modalTitle", $context) ? $context["modalTitle"] : (function () { throw new RuntimeError('Variable "modalTitle" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h5>
                <button data-action=\"modal-form#modalHidden\" type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times</span>
                </button>
            </div>
            <div class=\"modal-body\" data-modal-form-target=\"modalBody\" data-action=\"submit->modal-form#submitForm\">
                ";
        // line 13
        echo twig_escape_filter($this->env, ((array_key_exists("modalContent", $context)) ? (_twig_default_filter((isset($context["modalContent"]) || array_key_exists("modalContent", $context) ? $context["modalContent"] : (function () { throw new RuntimeError('Variable "modalContent" does not exist.', 13, $this->source); })()), "Loading...")) : ("Loading...")), "html", null, true);
        echo "
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\"   data-action=\"modal-form#modalHidden\">Close</button>
                <button type=\"button\" class=\"btn btn-primary\" data-action=\"modal-form#submitForm\">Save changes</button>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\" data-modal-form-target=\"modal\" >
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">{{ modalTitle }}</h5>
                <button data-action=\"modal-form#modalHidden\" type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times</span>
                </button>
            </div>
            <div class=\"modal-body\" data-modal-form-target=\"modalBody\" data-action=\"submit->modal-form#submitForm\">
                {{ modalContent|default('Loading...') }}
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\"   data-action=\"modal-form#modalHidden\">Close</button>
                <button type=\"button\" class=\"btn btn-primary\" data-action=\"modal-form#submitForm\">Save changes</button>
            </div>
        </div>
    </div>
</div>", "_modal.html.twig", "C:\\IT\\Intern Projects\\IRISAPP\\IRISAPP\\templates\\_modal.html.twig");
    }
}
