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

/* /Users/salm/Documents/Ahira/oct/plugins/rainlab/forum/components/topic/posts.htm */
class __TwigTemplate_a7edb163666b2dceb3ee28135eeccb727ebee468b29ec7c625e164a39ca2fe85 extends \Twig\Template
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
        echo "<div class=\"forum-posts\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 3
            echo "        ";
            $context["isGuarded"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "channel", [], "any", false, false, false, 3), "is_guarded", [], "any", false, false, false, 3) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "member", [], "any", false, false, false, 3), "is_approved", [], "any", false, false, false, 3));
            // line 4
            echo "        ";
            if (( !($context["member"] ?? null) && ($context["isGuarded"] ?? null))) {
                // line 5
                echo "            ";
                // line 6
                echo "        ";
            } else {
                // line 7
                echo "            <div class=\"forum-post ";
                echo ((($context["isGuarded"] ?? null)) ? ("is-guarded") : (""));
                echo "\" data-post-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 7), "html", null, true);
                echo "\" id=\"post-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 7), "html", null, true);
                echo "\">
                ";
                // line 8
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['post'] = $context["post"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::post")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 9
                echo "            </div>
        ";
            }
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/Users/salm/Documents/Ahira/oct/plugins/rainlab/forum/components/topic/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 12,  71 => 11,  67 => 9,  62 => 8,  53 => 7,  50 => 6,  48 => 5,  45 => 4,  42 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"forum-posts\">
    {% for post in posts %}
        {% set isGuarded = topic.channel.is_guarded and not post.member.is_approved %}
        {% if not member and isGuarded %}
            {# Post has been hidden #}
        {% else %}
            <div class=\"forum-post {{ isGuarded ? 'is-guarded' }}\" data-post-id=\"{{ post.id }}\" id=\"post-{{ post.id }}\">
                {% partial __SELF__ ~ \"::post\" post=post %}
            </div>
        {% endif %}
    {% endfor %}
</div>
", "/Users/salm/Documents/Ahira/oct/plugins/rainlab/forum/components/topic/posts.htm", "");
    }
}
