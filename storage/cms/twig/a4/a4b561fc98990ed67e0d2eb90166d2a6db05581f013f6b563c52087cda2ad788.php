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

/* /Users/salm/Documents/Ahira/oct/plugins/rainlab/forum/components/partials/pagination-list.htm */
class __TwigTemplate_aefe2428db0e4e8b09bc77ab5756e760073545775d903a99499b5631cc71dcd5 extends \Twig\Template
{
    private $source;

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
        // line 1
        $context["paginationEnabled"] = (((twig_get_attribute($this->env, $this->source,         // line 2
($context["records"] ?? null), "currentPage", [], "any", false, false, false, 2) > 1) || (twig_get_attribute($this->env, $this->source,         // line 3
($context["records"] ?? null), "lastPage", [], "any", false, false, false, 3) > 1)) || (twig_get_attribute($this->env, $this->source,         // line 4
($context["records"] ?? null), "lastPage", [], "any", false, false, false, 4) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 4)));
        // line 6
        echo "
";
        // line 7
        if (($context["paginationEnabled"] ?? null)) {
            // line 8
            echo "    ";
            // line 9
            echo "    ";
            $context["n"] = 2;
            // line 10
            echo "
    ";
            // line 11
            $context["currentPageZeroBased"] = (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 11) - 1);
            // line 12
            echo "
    ";
            // line 13
            $context["pageLinks"] = [];
            // line 14
            echo "    ";
            $context["pageSet"] = [];
            // line 15
            echo "
    ";
            // line 16
            $context["startOffset"] = max((($context["currentPageZeroBased"] ?? null) - ($context["n"] ?? null)), 0);
            // line 17
            echo "    ";
            if ((((($context["startOffset"] ?? null) + (2 * ($context["n"] ?? null))) + 1) > (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 17) - 1))) {
                // line 18
                echo "        ";
                $context["startOffset"] = max(((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 18) - (2 * ($context["n"] ?? null))) - 1), 0);
                // line 19
                echo "    ";
            }
            // line 20
            echo "
    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 21)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 22
                echo "        ";
                $context["pageLinks"] = twig_array_merge(($context["pageLinks"] ?? null), [0 => $context["page"]]);
                // line 23
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
    ";
            // line 25
            $context["activeBlock"] = twig_slice($this->env, ($context["pageLinks"] ?? null), ($context["startOffset"] ?? null), ((2 * ($context["n"] ?? null)) + 1));
            // line 26
            echo "
    ";
            // line 27
            if ((($context["startOffset"] ?? null) > 0)) {
                // line 28
                echo "        ";
                $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), [0 => 1]);
                // line 29
                echo "
        ";
                // line 30
                if ((($context["startOffset"] ?? null) > 1)) {
                    // line 31
                    echo "            ";
                    $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), [0 => "..."]);
                    // line 32
                    echo "        ";
                }
                // line 33
                echo "    ";
            }
            // line 34
            echo "
    ";
            // line 35
            $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), ($context["activeBlock"] ?? null));
            // line 36
            echo "
    ";
            // line 37
            $context["diffToEnd"] = (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 37) - 1) - ((($context["startOffset"] ?? null) + (2 * ($context["n"] ?? null))) + 1)) + 1);
            // line 38
            echo "
    ";
            // line 39
            if ((($context["diffToEnd"] ?? null) > 0)) {
                // line 40
                echo "        ";
                if ((($context["diffToEnd"] ?? null) > 1)) {
                    // line 41
                    echo "            ";
                    $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), [0 => "..."]);
                    // line 42
                    echo "        ";
                }
                // line 43
                echo "
        ";
                // line 44
                $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 44)]);
                // line 45
                echo "    ";
            }
            // line 46
            echo "
    <ul class=\"pagination\">
        ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 48) > 1)) {
                // line 49
                echo "            <li>
                <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, (($context["paginationUrl"] ?? null) . (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 50) - 1)), "html", null, true);
                echo "\">
                    &larr; Previous
                </a>
            </li>
        ";
            } else {
                // line 55
                echo "            <li class=\"disabled\">
                <span>
                    &larr; Previous
                </span>
            </li>
        ";
            }
            // line 61
            echo "
        ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageSet"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 63
                echo "            ";
                if (($context["page"] == "...")) {
                    // line 64
                    echo "                <li class=\"interval\">
                    ";
                    // line 65
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "
                </li>
            ";
                } else {
                    // line 68
                    echo "                <li class=\"";
                    echo ((($context["page"] == twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 68))) ? ("active") : (""));
                    echo "\">
                    <a href=\"";
                    // line 69
                    echo twig_escape_filter($this->env, (($context["paginationUrl"] ?? null) . $context["page"]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                }
                // line 72
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "
        ";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 74) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 74))) {
                // line 75
                echo "            <li>
                <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, (($context["paginationUrl"] ?? null) . (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 76) + 1)), "html", null, true);
                echo "\">
                    Next &rarr;
                </a>
            </li>
        ";
            } else {
                // line 81
                echo "            <li class=\"disabled\">
                <span>
                    Next &rarr;
                </span>
            </li>
        ";
            }
            // line 87
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/salm/Documents/Ahira/oct/plugins/rainlab/forum/components/partials/pagination-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 87,  231 => 81,  223 => 76,  220 => 75,  218 => 74,  215 => 73,  209 => 72,  201 => 69,  196 => 68,  190 => 65,  187 => 64,  184 => 63,  180 => 62,  177 => 61,  169 => 55,  161 => 50,  158 => 49,  156 => 48,  152 => 46,  149 => 45,  147 => 44,  144 => 43,  141 => 42,  138 => 41,  135 => 40,  133 => 39,  130 => 38,  128 => 37,  125 => 36,  123 => 35,  120 => 34,  117 => 33,  114 => 32,  111 => 31,  109 => 30,  106 => 29,  103 => 28,  101 => 27,  98 => 26,  96 => 25,  93 => 24,  87 => 23,  84 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  66 => 16,  63 => 15,  60 => 14,  58 => 13,  55 => 12,  53 => 11,  50 => 10,  47 => 9,  45 => 8,  43 => 7,  40 => 6,  38 => 4,  37 => 3,  36 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set paginationEnabled =
    records.currentPage > 1 or
    records.lastPage > 1 or
    records.lastPage > records.currentPage
%}

{% if paginationEnabled %}
    {# How many pages to display around the current page #}
    {% set n = 2 %}

    {% set currentPageZeroBased = records.currentPage-1 %}

    {% set pageLinks = [] %}
    {% set pageSet = [] %}

    {% set startOffset = max(currentPageZeroBased - n, 0) %}
    {% if (startOffset + 2*n+1) > (records.lastPage-1) %}
        {% set startOffset = max(records.lastPage - 2*n - 1, 0) %}
    {% endif %}

    {% for page in 1..records.lastPage %}
        {% set pageLinks = pageLinks|merge([page]) %}
    {% endfor %}

    {% set activeBlock = pageLinks|slice(startOffset, 2*n + 1) %}

    {% if startOffset > 0 %}
        {% set pageSet = pageSet|merge([1]) %}

        {% if startOffset > 1 %}
            {% set pageSet = pageSet|merge(['...']) %}
        {% endif %}
    {% endif %}

    {% set pageSet = pageSet|merge(activeBlock) %}

    {% set diffToEnd = (records.lastPage-1) - (startOffset + 2*n+1) + 1 %}

    {% if diffToEnd > 0 %}
        {% if diffToEnd > 1 %}
            {% set pageSet = pageSet|merge(['...']) %}
        {% endif %}

        {% set pageSet = pageSet|merge([records.lastPage]) %}
    {% endif %}

    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li>
                <a href=\"{{ paginationUrl ~ (records.currentPage - 1) }}\">
                    &larr; Previous
                </a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <span>
                    &larr; Previous
                </span>
            </li>
        {% endif %}

        {% for page in pageSet %}
            {% if page == '...' %}
                <li class=\"interval\">
                    {{ page }}
                </li>
            {% else %}
                <li class=\"{{ page == records.currentPage ? 'active' }}\">
                    <a href=\"{{ paginationUrl ~ page }}\">{{ page }}</a>
                </li>
            {% endif %}
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li>
                <a href=\"{{ paginationUrl ~ (records.currentPage + 1) }}\">
                    Next &rarr;
                </a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <span>
                    Next &rarr;
                </span>
            </li>
        {% endif %}
    </ul>
{% endif %}", "/Users/salm/Documents/Ahira/oct/plugins/rainlab/forum/components/partials/pagination-list.htm", "");
    }
}
