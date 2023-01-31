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
class __TwigTemplate_80e44a37414bf1e83ec382b98aad510a extends Template
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
        echo "<!-- add new card modal  -->
<div
        class=\"modal fade\" id=\"modal\"
        data-target=\"modal\"
        tabindex=\"-1\" aria-labelledby=\"addNewCardTitle\"
        aria-hidden=\"true\"
        data-modal-form-target=\"modal\"
>
    <div data-target=\"modal\" class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-transparent\">
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body px-sm-5 mx-50 pb-5\">
                <h1 data-action=\"click->modal-form#hideModal\" class=\"text-center mb-1\"
                    id=\"addNewCardTitle\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["modalTitle"]) || array_key_exists("modalTitle", $context) ? $context["modalTitle"] : (function () { throw new RuntimeError('Variable "modalTitle" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</h1>
                <p class=\"text-center\">Add card for future billing</p>

                <!-- form -->
                <div id=\"addNewCardValidation\" class=\"row gy-1 gx-2 mt-75\" ";
        // line 20
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, "modal-form");
        echo "
                     data-modal-form-target=\"modalBody\">
                    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new RuntimeError('Variable "routeName" does not exist.', 22, $this->source); })()))]]);
        echo "
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'widget');
        echo "
                    ";
        // line 24
        if (((isset($context["modalTitle"]) || array_key_exists("modalTitle", $context) ? $context["modalTitle"] : (function () { throw new RuntimeError('Variable "modalTitle" does not exist.', 24, $this->source); })()) == "New Resource")) {
            // line 25
            echo "                        <div>
                            <div class=\"form-group\" id=\"formGroupTemplate\">
                                <label>Links</label>
                                <input type=\"text\" class=\"form-control\" name=\"links[]\">
                            </div>
                        </div>
                        <div class=\"col-12 text-center\">
                            <button type=\"button\" class=\"btn btn-primary mt-2\" id=\"addItemButton\">Add Item</button>
                            <button type=\"button\" class=\"btn btn-danger mt-2\" id=\"removeItemButton\">Delete Item</button>
                        </div>
                    ";
        }
        // line 36
        echo "                    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        echo "

                    <div class=\"col-12 text-center\">
                        <input type=\"submit\" class=\"btn btn-primary me-1 mt-1\" data-action=\"modal-form#submitForm\">
                        <button type=\"reset\" class=\"btn btn-outline-secondary mt-1\" data-bs-dismiss=\"modal\"
                                aria-label=\"Close\">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ add new card modal  -->";
        
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
        return array (  95 => 36,  82 => 25,  80 => 24,  76 => 23,  72 => 22,  67 => 20,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- add new card modal  -->
<div
        class=\"modal fade\" id=\"modal\"
        data-target=\"modal\"
        tabindex=\"-1\" aria-labelledby=\"addNewCardTitle\"
        aria-hidden=\"true\"
        data-modal-form-target=\"modal\"
>
    <div data-target=\"modal\" class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-transparent\">
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body px-sm-5 mx-50 pb-5\">
                <h1 data-action=\"click->modal-form#hideModal\" class=\"text-center mb-1\"
                    id=\"addNewCardTitle\">{{ modalTitle }}</h1>
                <p class=\"text-center\">Add card for future billing</p>

                <!-- form -->
                <div id=\"addNewCardValidation\" class=\"row gy-1 gx-2 mt-75\" {{ stimulus_controller('modal-form') }}
                     data-modal-form-target=\"modalBody\">
                    {{ form_start(form,{'attr':{'action':path(routeName)}}) }}
                    {{ form_widget(form) }}
                    {% if modalTitle == 'New Resource' %}
                        <div>
                            <div class=\"form-group\" id=\"formGroupTemplate\">
                                <label>Links</label>
                                <input type=\"text\" class=\"form-control\" name=\"links[]\">
                            </div>
                        </div>
                        <div class=\"col-12 text-center\">
                            <button type=\"button\" class=\"btn btn-primary mt-2\" id=\"addItemButton\">Add Item</button>
                            <button type=\"button\" class=\"btn btn-danger mt-2\" id=\"removeItemButton\">Delete Item</button>
                        </div>
                    {% endif %}
                    {{ form_end(form) }}

                    <div class=\"col-12 text-center\">
                        <input type=\"submit\" class=\"btn btn-primary me-1 mt-1\" data-action=\"modal-form#submitForm\">
                        <button type=\"reset\" class=\"btn btn-outline-secondary mt-1\" data-bs-dismiss=\"modal\"
                                aria-label=\"Close\">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ add new card modal  -->", "_modal.html.twig", "C:\\IT\\Intern Projects\\NEST\\templates\\_modal.html.twig");
    }
}
