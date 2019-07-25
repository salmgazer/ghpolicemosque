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

/* /Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/about.htm */
class __TwigTemplate_0637b6a16e502e72fee87c058651cda76f3b8905c5a0d5989afd66c84b6a7195 extends \Twig\Template
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
        echo "<div class=\"container\">

    <div class=\"section-header\">
        <h2 class=\"section-title text-center wow fadeInDown\" style=\"font-family: 'Lato', sans-serif;\">Our History</h2>
        <p class=\"text-center wow fadeInDown\">From very humble beginnings</p>
    </div>

    <div class=\"row\">
        <div class=\"wow\">
            ";
        // line 10
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("about/history.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 11
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  46 => 10,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">

    <div class=\"section-header\">
        <h2 class=\"section-title text-center wow fadeInDown\" style=\"font-family: 'Lato', sans-serif;\">Our History</h2>
        <p class=\"text-center wow fadeInDown\">From very humble beginnings</p>
    </div>

    <div class=\"row\">
        <div class=\"wow\">
            {% content 'about/history.htm' %}
        </div>
    </div>
</div>", "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/about.htm", "");
    }
}
