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

/* admin/product.html.twig */
class __TwigTemplate_8e8bb36fa8babaaf81873305739a8214 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/product.html.twig", 1);
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

        echo "Product | Admin";
        
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
        echo "    <body>
<div class=\"container-scroller\">
    <!-- partial:partials/_navbar.html -->
     ";
        // line 9
        $this->loadTemplate("_navbar.html.twig", "admin/product.html.twig", 9)->display($context);
        // line 10
        echo "    <!-- partial -->
    <div class=\"container-fluid page-body-wrapper\" >
        <!-- partial:partials/_sidebar.html -->
         ";
        // line 13
        $this->loadTemplate("_sidebar.html.twig", "admin/product.html.twig", 13)->display($context);
        // line 14
        echo "        <!-- partial -->
        <div class=\"main-panel\" style=\"width: 82.5%; float: right;margin-top: 100px;\">
            <div class=\"content-wrapper\">
                <div ";
        // line 17
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, "modal-form", ["formUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product")]);
        // line 19
        echo "

                >
                    <button
                            class=\"btn btn-primary btn-sm\"
                            data-action=\"modal-form#openModal\"
                    >Add Product</button>
                    ";
        // line 26
        echo twig_include($this->env, $context, "_modal.html.twig", ["modalTitle" => "Add a new Product"]);
        // line 28
        echo "
                </div>

              ";
        // line 32
        echo "            </div>

            ";
        // line 35
        echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>Products</th>
                        <th>Images</th>
                        <th>Description</th>
                        <th>CreatedAt</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 48
            echo "                        <tr>
                            <td>
                                <span class=\"fw-bold\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50), "html", null, true);
            echo "</span>
                            </td>
                            <td>
                                ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "images", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 54
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . twig_get_attribute($this->env, $this->source, $context["image"], "imageName", [], "any", false, false, false, 54))), "html", null, true);
                echo "\"
                                    alt=\"";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "imageName", [], "any", false, false, false, 55), "html", null, true);
                echo "\" width=\"100px\" height=\"auto\">
                                    <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_product_image", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\"><i style=\"position: absolute;margin-top: 30px;\" class=\"fa fa-trash\"></i></a>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                            </td>
                            <td>
                                ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 60), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "createdAt", [], "any", false, false, false, 63), "html", null, true);
            echo "
                            </td>
                            <td>
                                <div class=\"dropdown\">
                                    <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light\" data-bs-toggle=\"dropdown\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"></circle><circle cx=\"12\" cy=\"5\" r=\"1\"></circle><circle cx=\"12\" cy=\"19\" r=\"1\"></circle></svg>
                                    </button>
                                    <div class=\"dropdown-menu dropdown-menu-end\">
                                        <a class=\"dropdown-item\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit-2 me-50\"><path d=\"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z\"></path></svg>
                                            <span>Edit</span>
                                        </a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-trash me-50\"><polyline points=\"3 6 5 6 21 6\"></polyline><path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path></svg>
                                            <span>Delete</span>
                                        </a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_images", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-trash me-50\"><polyline points=\"3 6 5 6 21 6\"></polyline><path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path></svg>
                                        <span>Add Images</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                    </tbody>
                </table>
            </div>

            ";
        // line 93
        echo "        </div>
    </div>
</div>
    </div>
    </body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 93,  228 => 88,  213 => 79,  206 => 75,  199 => 71,  188 => 63,  182 => 60,  178 => 58,  170 => 56,  166 => 55,  161 => 54,  157 => 53,  151 => 50,  147 => 48,  143 => 47,  129 => 35,  125 => 32,  120 => 28,  118 => 26,  109 => 19,  107 => 17,  102 => 14,  100 => 13,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Product | Admin{% endblock %}

{% block body %}
    <body>
<div class=\"container-scroller\">
    <!-- partial:partials/_navbar.html -->
     {% include '_navbar.html.twig' %}
    <!-- partial -->
    <div class=\"container-fluid page-body-wrapper\" >
        <!-- partial:partials/_sidebar.html -->
         {% include '_sidebar.html.twig' %}
        <!-- partial -->
        <div class=\"main-panel\" style=\"width: 82.5%; float: right;margin-top: 100px;\">
            <div class=\"content-wrapper\">
                <div {{ stimulus_controller('modal-form', {
                    formUrl: path('app_product')
                }) }}

                >
                    <button
                            class=\"btn btn-primary btn-sm\"
                            data-action=\"modal-form#openModal\"
                    >Add Product</button>
                    {{ include('_modal.html.twig', {
                        modalTitle: 'Add a new Product',
                    }) }}
                </div>

              {# form#}
            </div>

            {# begin product table#}
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>Products</th>
                        <th>Images</th>
                        <th>Description</th>
                        <th>CreatedAt</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for product in products %}
                        <tr>
                            <td>
                                <span class=\"fw-bold\">{{ product.name }}</span>
                            </td>
                            <td>
                                {% for image in product.images %}
                                    <img src=\"{{ asset('uploads/products/' ~ image.imageName) }}\"
                                    alt=\"{{ image.imageName }}\" width=\"100px\" height=\"auto\">
                                    <a href=\"{{ path('app_delete_product_image',{id:image.id}) }}\"><i style=\"position: absolute;margin-top: 30px;\" class=\"fa fa-trash\"></i></a>
                                {% endfor %}
                            </td>
                            <td>
                                {{ product.description }}
                            </td>
                            <td>
                                {{ product.createdAt }}
                            </td>
                            <td>
                                <div class=\"dropdown\">
                                    <button type=\"button\" class=\"btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light\" data-bs-toggle=\"dropdown\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"></circle><circle cx=\"12\" cy=\"5\" r=\"1\"></circle><circle cx=\"12\" cy=\"19\" r=\"1\"></circle></svg>
                                    </button>
                                    <div class=\"dropdown-menu dropdown-menu-end\">
                                        <a class=\"dropdown-item\" href=\"{{ path('app_edit_product',{id:product.id}) }}\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-edit-2 me-50\"><path d=\"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z\"></path></svg>
                                            <span>Edit</span>
                                        </a>
                                        <a class=\"dropdown-item\" href=\"{{ path('app_delete_product',{id:product.id}) }}\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-trash me-50\"><polyline points=\"3 6 5 6 21 6\"></polyline><path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path></svg>
                                            <span>Delete</span>
                                        </a>
                                        <a class=\"dropdown-item\" href=\"{{ path('app_add_images',{id:product.id}) }}\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-trash me-50\"><polyline points=\"3 6 5 6 21 6\"></polyline><path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path></svg>
                                        <span>Add Images</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>

            {#end sponsor table#}
        </div>
    </div>
</div>
    </div>
    </body>

{% endblock %}", "admin/product.html.twig", "C:\\IT\\Intern Projects\\IRISAPP\\IRISAPP\\templates\\admin\\product.html.twig");
    }
}
