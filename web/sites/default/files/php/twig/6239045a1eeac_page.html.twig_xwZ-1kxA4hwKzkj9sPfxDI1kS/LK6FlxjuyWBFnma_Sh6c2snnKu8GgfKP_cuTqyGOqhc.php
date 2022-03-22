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

/* themes/custom/drupalup_barrio/templates/page.html.twig */
class __TwigTemplate_7d97f86d82172fd9efbc8b3b22430e0ddbe2ddcdd6a88d574f329e65f0637bb3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "
<div class=\"container marketing\">

  <header class=\"blog-header py-3\">
    <div class=\"row flex-nowrap justify-content-between align-items-center\">
      <div class=\"col-4 text-center\">
        <a class=\"blog-header-logo text-dark\" href=\"";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\"></a>
      </div>
      <div class=\"col-4 d-flex justify-content-end align-items-center\">
        <a class=\"link-secondary\" href=\"#\" aria-label=\"Search\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"mx-3\" role=\"img\" viewBox=\"0 0 24 24\"><title>Search</title><circle cx=\"10.5\" cy=\"10.5\" r=\"7.5\"/><path d=\"M21 21l-5.2-5.2\"/></svg>
        </a>
        <a class=\"btn btn-sm btn-outline-secondary\" href=\"https://proyectodata01.lndo.site/user/login\">";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sign up"));
        echo "</a>
      </div>
    </div>
  </header>
  <div class=\"card text-center\">
    <div class=\"card-header\">
      <h3>Emulate Random User Generator</h3>
    </div>
  </div>
  <div class=\"nav-scroller py-1 mb-2\">
    <nav class=\"nav d-flex justify-content-between\">
      <a class=\"p-2 link-secondary\" href=\"https://proyectodata01.lndo.site/drupaldata/form\">Form Data</a>
      <a class=\"p-2 link-secondary\" href=\"https://proyectodata01.lndo.site/userdatav1\">Users Data</a>
      <a class=\"p-2 link-secondary\" href=\"https://proyectodata01.lndo.site/drupaldata/view\">View Data</a>
    </nav>
  </div>
  ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 98)) {
            // line 99
            echo "    <div class=\"highlighted\">
      <aside class=\"";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 100, $this->source), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
        ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "
      </aside>
    </div>
  ";
        }
        // line 105
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 105)) {
            // line 106
            echo "    ";
            $this->displayBlock('featured', $context, $blocks);
            // line 113
            echo "  ";
        }
        // line 114
        echo "  <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
    ";
        // line 115
        $this->displayBlock('content', $context, $blocks);
        // line 142
        echo "  </div>
  ";
        // line 143
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 143) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 143)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 143))) {
            // line 144
            echo "    <div class=\"featured-bottom\">
      <aside class=\"";
            // line 145
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 145, $this->source), "html", null, true);
            echo " clearfix\" role=\"complementary\">
        ";
            // line 146
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
            echo "
        ";
            // line 147
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
            echo "
        ";
            // line 148
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
            echo "
      </aside>
    </div>
  ";
        }
        // line 152
        echo "  <footer class=\"site-footer\">
    ";
        // line 153
        $this->displayBlock('footer', $context, $blocks);
        // line 170
        echo "  </footer>

</div>
";
    }

    // line 106
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section ";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 108, $this->source), "html", null, true);
        echo " clearfix\" role=\"complementary\">
          ";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        echo "
        </aside>
      </div>
    ";
    }

    // line 115
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "      <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 116, $this->source), "html", null, true);
        echo "\">
        ";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
        echo "
        <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
          <main";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 119, $this->source), "html", null, true);
        echo ">
            <section class=\"section\">
              <a id=\"main-content\" tabindex=\"-1\"></a>
              ";
        // line 122
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
        echo "
            </section>
          </main>
          ";
        // line 125
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 125)) {
            // line 126
            echo "            <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 126, $this->source), "html", null, true);
            echo ">
              <aside class=\"section\" role=\"complementary\">
                ";
            // line 128
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
            echo "
              </aside>
            </div>
          ";
        }
        // line 132
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 132)) {
            // line 133
            echo "            <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 133, $this->source), "html", null, true);
            echo ">
              <aside class=\"section\" role=\"complementary\">
                ";
            // line 135
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
            echo "
              </aside>
            </div>
          ";
        }
        // line 139
        echo "        </div>
      </div>
    ";
    }

    // line 153
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 154
        echo "      <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 154, $this->source), "html", null, true);
        echo "\">
        ";
        // line 155
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 155) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 155)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 155)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 155))) {
            // line 156
            echo "          <div class=\"site-footer__top clearfix\">
            ";
            // line 157
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
            echo "
            ";
            // line 158
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
            echo "
            ";
            // line 159
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
            echo "
            ";
            // line 160
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 163
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 163)) {
            // line 164
            echo "          <div class=\"site-footer__bottom\">
            ";
            // line 165
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 168
        echo "      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/drupalup_barrio/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 168,  267 => 165,  264 => 164,  261 => 163,  255 => 160,  251 => 159,  247 => 158,  243 => 157,  240 => 156,  238 => 155,  233 => 154,  229 => 153,  223 => 139,  216 => 135,  210 => 133,  207 => 132,  200 => 128,  194 => 126,  192 => 125,  186 => 122,  180 => 119,  175 => 117,  170 => 116,  166 => 115,  158 => 109,  154 => 108,  151 => 107,  147 => 106,  140 => 170,  138 => 153,  135 => 152,  128 => 148,  124 => 147,  120 => 146,  116 => 145,  113 => 144,  111 => 143,  108 => 142,  106 => 115,  103 => 114,  100 => 113,  97 => 106,  94 => 105,  87 => 101,  83 => 100,  80 => 99,  78 => 98,  59 => 82,  50 => 76,  42 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bootstrap Barrio's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.

 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.top_header: Items for the top header region.
 * - page.top_header_form: Items for the top header form region.
 * - page.header: Items for the header region.
 * - page.header_form: Items for the header form region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.featured_top: Items for the featured top region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.featured_bottom_third: Items for the third featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * Theme variables:
 * - navbar_top_attributes: Items for the header region.
 * - navbar_attributes: Items for the header region.
 * - content_attributes: Items for the header region.
 * - sidebar_first_attributes: Items for the highlighted region.
 * - sidebar_second_attributes: Items for the primary menu region.
 * - sidebar_collapse: If the sidebar_first will collapse.
 *
 * @see template_preprocess_page()
 * @see bootstrap_barrio_preprocess_page()
 * @see html.html.twig
 */
#}

<div class=\"container marketing\">

  <header class=\"blog-header py-3\">
    <div class=\"row flex-nowrap justify-content-between align-items-center\">
      <div class=\"col-4 text-center\">
        <a class=\"blog-header-logo text-dark\" href=\"{{ path(\"<front>\") }}\"></a>
      </div>
      <div class=\"col-4 d-flex justify-content-end align-items-center\">
        <a class=\"link-secondary\" href=\"#\" aria-label=\"Search\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"mx-3\" role=\"img\" viewBox=\"0 0 24 24\"><title>Search</title><circle cx=\"10.5\" cy=\"10.5\" r=\"7.5\"/><path d=\"M21 21l-5.2-5.2\"/></svg>
        </a>
        <a class=\"btn btn-sm btn-outline-secondary\" href=\"https://proyectodata01.lndo.site/user/login\">{{ \"Sign up\"|t }}</a>
      </div>
    </div>
  </header>
  <div class=\"card text-center\">
    <div class=\"card-header\">
      <h3>Emulate Random User Generator</h3>
    </div>
  </div>
  <div class=\"nav-scroller py-1 mb-2\">
    <nav class=\"nav d-flex justify-content-between\">
      <a class=\"p-2 link-secondary\" href=\"https://proyectodata01.lndo.site/drupaldata/form\">Form Data</a>
      <a class=\"p-2 link-secondary\" href=\"https://proyectodata01.lndo.site/userdatav1\">Users Data</a>
      <a class=\"p-2 link-secondary\" href=\"https://proyectodata01.lndo.site/drupaldata/view\">View Data</a>
    </nav>
  </div>
  {% if page.highlighted %}
    <div class=\"highlighted\">
      <aside class=\"{{ container }} section clearfix\" role=\"complementary\">
        {{ page.highlighted }}
      </aside>
    </div>
  {% endif %}
  {% if page.featured_top %}
    {% block featured %}
      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section {{ container }} clearfix\" role=\"complementary\">
          {{ page.featured_top }}
        </aside>
      </div>
    {% endblock %}
  {% endif %}
  <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
    {% block content %}
      <div id=\"main\" class=\"{{ container }}\">
        {{ page.breadcrumb }}
        <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
          <main{{ content_attributes }}>
            <section class=\"section\">
              <a id=\"main-content\" tabindex=\"-1\"></a>
              {{ page.content }}
            </section>
          </main>
          {% if page.sidebar_first %}
            <div{{ sidebar_first_attributes }}>
              <aside class=\"section\" role=\"complementary\">
                {{ page.sidebar_first }}
              </aside>
            </div>
          {% endif %}
          {% if page.sidebar_second %}
            <div{{ sidebar_second_attributes }}>
              <aside class=\"section\" role=\"complementary\">
                {{ page.sidebar_second }}
              </aside>
            </div>
          {% endif %}
        </div>
      </div>
    {% endblock %}
  </div>
  {% if page.featured_bottom_first or page.featured_bottom_second or page.featured_bottom_third %}
    <div class=\"featured-bottom\">
      <aside class=\"{{ container }} clearfix\" role=\"complementary\">
        {{ page.featured_bottom_first }}
        {{ page.featured_bottom_second }}
        {{ page.featured_bottom_third }}
      </aside>
    </div>
  {% endif %}
  <footer class=\"site-footer\">
    {% block footer %}
      <div class=\"{{ container }}\">
        {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
          <div class=\"site-footer__top clearfix\">
            {{ page.footer_first }}
            {{ page.footer_second }}
            {{ page.footer_third }}
            {{ page.footer_fourth }}
          </div>
        {% endif %}
        {% if page.footer_fifth %}
          <div class=\"site-footer__bottom\">
            {{ page.footer_fifth }}
          </div>
        {% endif %}
      </div>
    {% endblock %}
  </footer>

</div>
", "themes/custom/drupalup_barrio/templates/page.html.twig", "/app/web/themes/custom/drupalup_barrio/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 98, "block" => 106);
        static $filters = array("t" => 82, "escape" => 100);
        static $functions = array("path" => 76);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['t', 'escape'],
                ['path']
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
