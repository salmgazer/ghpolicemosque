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

/* /Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/pages/home.htm */
class __TwigTemplate_248bf8179f6e2a7f676183501b493502e9c96d03af377b33b572d6fcc2981790 extends \Twig\Template
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
        echo "<section id=\"main-slider\">
    ";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slides"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "</section><!--/#main-slider-->

<!--
<section id=\"cta2\">
    <div class=\"container\">
        <div class=\"text-center\">
            ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cta2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "        </div>
    </div>
</section>
-->

<section id=\"services\">
    ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("features"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "</section><!--/#features-->

<!-- The pillars -->
<section id=\"work-process\">
    <div class=\"container\">
        ";
        // line 22
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("kalma.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 23
        echo "    </div>
</section><!--/#work-process-->

<section id=\"azan\">
    ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("azan"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "</section><!--/#pricing-->

<section id=\"cta\" class=\"wow fadeIn\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 33
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("cta.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 34
        echo "        </div>
    </div>
</section><!--/#cta-->

<section id=\"testimonial\">
    ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("feedback"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "</section><!--/#testimonial-->

<!--
<section id=\"animated-number\">
    ";
        // line 44
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("facts.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 45
        echo "</section>
-->

<section id=\"blog\">
    ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blogs"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "</section><!--/#blog-->

<div class=\"divider\"></div>

<section id=\"get-in-touch\">
    <div class=\"container\">
        <div class=\"section-header\">
            ";
        // line 57
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("precontact.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 58
        echo "        </div>
    </div>
</section><!--/#get-in-touch-->
<?
    use Rainlab\\Blog\\Models\\Post;

    function onStart()
    {
        \$this['posts'] = Post::get();
    }
?>";
    }

    public function getTemplateName()
    {
        return "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 58,  138 => 57,  129 => 50,  125 => 49,  119 => 45,  115 => 44,  109 => 40,  105 => 39,  98 => 34,  94 => 33,  87 => 28,  83 => 27,  77 => 23,  73 => 22,  66 => 17,  62 => 16,  54 => 10,  50 => 9,  42 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"main-slider\">
    {% partial \"slides\" %}
</section><!--/#main-slider-->

<!--
<section id=\"cta2\">
    <div class=\"container\">
        <div class=\"text-center\">
            {% partial \"cta2\" %}
        </div>
    </div>
</section>
-->

<section id=\"services\">
    {% partial \"features\" %}
</section><!--/#features-->

<!-- The pillars -->
<section id=\"work-process\">
    <div class=\"container\">
        {% content 'kalma.htm' %}
    </div>
</section><!--/#work-process-->

<section id=\"azan\">
    {% partial \"azan\" %}
</section><!--/#pricing-->

<section id=\"cta\" class=\"wow fadeIn\">
    <div class=\"container\">
        <div class=\"row\">
            {% content 'cta.htm' %}
        </div>
    </div>
</section><!--/#cta-->

<section id=\"testimonial\">
    {% partial \"feedback\" %}
</section><!--/#testimonial-->

<!--
<section id=\"animated-number\">
    {% content 'facts.htm' %}
</section>
-->

<section id=\"blog\">
    {% partial \"blogs\" %}
</section><!--/#blog-->

<div class=\"divider\"></div>

<section id=\"get-in-touch\">
    <div class=\"container\">
        <div class=\"section-header\">
            {% content 'precontact.htm' %}
        </div>
    </div>
</section><!--/#get-in-touch-->
<?
    use Rainlab\\Blog\\Models\\Post;

    function onStart()
    {
        \$this['posts'] = Post::get();
    }
?>", "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/pages/home.htm", "");
    }
}
