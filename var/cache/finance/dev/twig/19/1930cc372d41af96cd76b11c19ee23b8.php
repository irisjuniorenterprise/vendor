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

/* _imageForm.html.twig */
class __TwigTemplate_22e0c48dc4cd7ced611c38f6689a7ba7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_imageForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_imageForm.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"  text-center\">Product Add</h4>
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "                    <div class=\"flash-notice alert-danger p-2\">
                        ";
            // line 8
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["imageForm"]) || array_key_exists("imageForm", $context) ? $context["imageForm"] : (function () { throw new RuntimeError('Variable "imageForm" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["imageForm"]) || array_key_exists("imageForm", $context) ? $context["imageForm"] : (function () { throw new RuntimeError('Variable "imageForm" does not exist.', 12, $this->source); })()), 'widget');
        echo "



                <div class=\"mt-3 d-flex justify-content-center\">
                    <button type=\"submit\"
                            class=\"btn btn-primary btn-sm font-weight-medium auth-form-btn\">
                        Publish
                    </button>
                </div>
                ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["imageForm"]) || array_key_exists("imageForm", $context) ? $context["imageForm"] : (function () { throw new RuntimeError('Variable "imageForm" does not exist.', 22, $this->source); })()), 'form_end');
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
        return "_imageForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  71 => 12,  66 => 11,  57 => 8,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-md-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"  text-center\">Product Add</h4>
                {% for message in app.flashes('danger') %}
                    <div class=\"flash-notice alert-danger p-2\">
                        {{ message }}
                    </div>
                {% endfor %}
                {{ form_start(imageForm,{'attr':{'enctype':'multipart/form-data'}})}}
                {{ form_widget(imageForm) }}



                <div class=\"mt-3 d-flex justify-content-center\">
                    <button type=\"submit\"
                            class=\"btn btn-primary btn-sm font-weight-medium auth-form-btn\">
                        Publish
                    </button>
                </div>
                {{ form_end(imageForm) }}
            </div>
        </div>
    </div>
</div>", "_imageForm.html.twig", "C:\\IT\\Intern Projects\\IRISAPP\\IRISAPP\\templates\\_imageForm.html.twig");
    }
}
