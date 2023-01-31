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

/* _form.html.twig */
class __TwigTemplate_d54cceeb96e6cb113a422bb1f3223995 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_form.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-12 grid-margin stretch-card\">
        <div class=\"card\">

            <div class=\"card-body\">


                ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["sponsorForm"]) || array_key_exists("sponsorForm", $context) ? $context["sponsorForm"] : (function () { throw new RuntimeError('Variable "sponsorForm" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["sponsorForm"]) || array_key_exists("sponsorForm", $context) ? $context["sponsorForm"] : (function () { throw new RuntimeError('Variable "sponsorForm" does not exist.', 9, $this->source); })()), 'widget');
        echo "

                <div class=\"mt-3 d-flex justify-content-center\">
                    <button type=\"submit\"
                            class=\"btn btn-primary btn-sm font-weight-medium auth-form-btn\">
                        Publier
                    </button>
                </div>
                ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["sponsorForm"]) || array_key_exists("sponsorForm", $context) ? $context["sponsorForm"] : (function () { throw new RuntimeError('Variable "sponsorForm" does not exist.', 17, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
</div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-md-12 grid-margin stretch-card\">
        <div class=\"card\">

            <div class=\"card-body\">


                {{ form_start(sponsorForm) }}
                {{ form_widget(sponsorForm) }}

                <div class=\"mt-3 d-flex justify-content-center\">
                    <button type=\"submit\"
                            class=\"btn btn-primary btn-sm font-weight-medium auth-form-btn\">
                        Publier
                    </button>
                </div>
                {{ form_end(sponsorForm) }}
            </div>
        </div>
    </div>
</div>
</div>", "_form.html.twig", "C:\\IT\\Intern Projects\\NEST\\templates\\_form.html.twig");
    }
}
