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

/* /Users/salm/Documents/Ahira/oct/plugins/rainlab/forum/components/partials/timestamp.htm */
class __TwigTemplate_1dc44c08616c13bfcdd763b8aeb646261976a362fb1ef569c5e4300d0179d64c extends \Twig\Template
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
        echo "<time title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["date"] ?? null), "toDayDateTimeString", [], "any", false, false, false, 1), "html", null, true);
        echo "\"
    datetime=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["date"] ?? null), "c"), "html", null, true);
        echo "\">
    ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["date"] ?? null), "diffForHumans", [], "any", false, false, false, 3), "html", null, true);
        echo "
</time>
";
    }

    public function getTemplateName()
    {
        return "/Users/salm/Documents/Ahira/oct/plugins/rainlab/forum/components/partials/timestamp.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  40 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<time title=\"{{ date.toDayDateTimeString }}\"
    datetime=\"{{ date|date('c') }}\">
    {{ date.diffForHumans }}
</time>
", "/Users/salm/Documents/Ahira/oct/plugins/rainlab/forum/components/partials/timestamp.htm", "");
    }
}
