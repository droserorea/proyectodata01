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

/* themes/custom/drupalup_barrio/templates/views/views-view-unformatted.html.twig */
class __TwigTemplate_d769ba20240f5acfacba24c5f557a6a484425c82fc78151ac5735f6a60718665 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
<div id=\"carouselExampleControls\" class=\"carousel slide\" data-bs-ride=\"carousel\">
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img src=\"https://pm1.narvii.com/6523/65c5f0267adc129e0132216fd25aa5d95eb690b9_hq.jpg\" class=\"d-block w-100\" alt=\"...\">
      <div class=\"carousel-caption d-none d-md-block\">
        <h5>Users Content Type</h5>
        <p>User Random Data.</p>
      </div>
    </div>
";
        // line 31
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 32
            echo "      ";
            $context["row_classes"] = [0 => ((            // line 33
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 35
            echo "      ";
            // line 36
            echo "      ";
            // line 37
            echo "      ";
            // line 38
            echo "      <div class=\"carousel-item\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 38), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 38), 38, $this->source), "html", null, true);
            echo " style=\"background-color: #979797\">
";
            // line 40
            echo "        <div class=\"carousel-caption d-none d-md-block\">
";
            // line 42
            echo "          <p>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</p>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    ";
        // line 47
        echo "    ";
        // line 48
        echo "    ";
        // line 49
        echo "  </div>
  <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Previous</span>
  </button>
  <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Next</span>
  </button>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/drupalup_barrio/templates/views/views-view-unformatted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 49,  89 => 48,  87 => 47,  85 => 46,  74 => 42,  71 => 40,  66 => 38,  64 => 37,  62 => 36,  60 => 35,  58 => 33,  56 => 32,  51 => 31,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 */
#}

<div id=\"carouselExampleControls\" class=\"carousel slide\" data-bs-ride=\"carousel\">
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img src=\"https://pm1.narvii.com/6523/65c5f0267adc129e0132216fd25aa5d95eb690b9_hq.jpg\" class=\"d-block w-100\" alt=\"...\">
      <div class=\"carousel-caption d-none d-md-block\">
        <h5>Users Content Type</h5>
        <p>User Random Data.</p>
      </div>
    </div>
{#    {% if title %}#}
{#      <h3 style=\"background-color: red\">{{ title }}</h3>#}
{#    {% endif %}#}
    {% for row in rows %}
      {% set row_classes = [
        default_row_class ? 'views-row',
      ] %}
      {#      <div{{ row.attributes.addClass(row_classes) }} style=\"background-color: #979797\"> #}
      {#        {{ row.content }} #}
      {#      </div> #}
      <div class=\"carousel-item\" {{ row.attributes.addClass(row_classes) }} style=\"background-color: #979797\">
{#        <img src=\"...\" class=\"d-block w-100\" alt=\"...\">#}
        <div class=\"carousel-caption d-none d-md-block\">
{#          <h5>{{ row.content.title }}</h5>#}
          <p>{{ row.content }}</p>
        </div>
      </div>
    {% endfor %}
    {#    <div class=\"carousel-item\"> #}
    {#      <img src=\"...\" class=\"d-block w-100\" alt=\"...\"> #}
    {#    </div> #}
  </div>
  <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Previous</span>
  </button>
  <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Next</span>
  </button>
</div>
", "themes/custom/drupalup_barrio/templates/views/views-view-unformatted.html.twig", "/app/web/themes/custom/drupalup_barrio/templates/views/views-view-unformatted.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 31, "set" => 32);
        static $filters = array("escape" => 38);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
