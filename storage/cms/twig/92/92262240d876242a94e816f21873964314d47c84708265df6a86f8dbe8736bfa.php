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

/* /Users/salm/Documents/Ahira/oct/plugins/rainlab/forum/components/topic/default.htm */
class __TwigTemplate_bf5c995240066d7cc157b1e50af237c609e008dd09f8516b9ca5433dd7444a93 extends \Twig\Template
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
        echo "<div class=\"rainlab-forum\">

    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 3
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 4
                echo "        <div class=\"alert alert-";
                (((($context["type"] ?? null) == "error")) ? (print ("danger")) : (print (twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true))));
                echo "\">
            ";
                // line 5
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        </div>
    ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 9
        echo "
    ";
        // line 10
        if (($context["returnUrl"] ?? null)) {
            // line 11
            echo "        <p>&larr; <a href=\"";
            echo twig_escape_filter($this->env, ($context["returnUrl"] ?? null), "html", null, true);
            echo "\">Back to ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "title", [], "any", false, false, false, 11), "html", null, true);
            echo "</a></p>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (($context["topic"] ?? null)) {
            // line 15
            echo "
        <h4>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "subject", [], "any", false, false, false, 16), "html", null, true);
            echo "</h4>

        <div class=\"row\">
            <div class=\"col-md-3 col-md-push-9\">

                <div id=\"topicControlPanel\">
                    ";
            // line 22
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@controlpanel"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 23
            echo "                </div>

            </div>
            <div class=\"col-md-9 col-md-pull-3\">

                ";
            // line 28
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@posts"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 29
            echo "
                ";
            // line 30
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@pagination"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 31
            echo "
                <h4>Reply to this discussion</h4>
                ";
            // line 33
            if ( !twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "canPost", [], "any", false, false, false, 33)) {
                // line 34
                echo "                    <p>
                        You cannot edit posts or make replies:
                        ";
                // line 36
                if ( !($context["member"] ?? null)) {
                    echo "You should be logged in before you can post.";
                }
                // line 37
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "is_banned", [], "any", false, false, false, 37)) {
                    echo "Your account is banned.";
                }
                // line 38
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "is_locked", [], "any", false, false, false, 38)) {
                    echo "This topic is locked.";
                }
                // line 39
                echo "                    </p>
                ";
            } else {
                // line 41
                echo "                    ";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@postform"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 42
                echo "                ";
            }
            // line 43
            echo "
            </div>
        </div>

    ";
        } elseif (        // line 47
($context["channel"] ?? null)) {
            // line 48
            echo "
        <h4>Create a new discussion topic</h4>
        ";
            // line 50
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@createform"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 51
            echo "
    ";
        } else {
            // line 53
            echo "
        <p>Topic not found</p>

    ";
        }
        // line 57
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/salm/Documents/Ahira/oct/plugins/rainlab/forum/components/topic/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 57,  163 => 53,  159 => 51,  155 => 50,  151 => 48,  149 => 47,  143 => 43,  140 => 42,  135 => 41,  131 => 39,  126 => 38,  121 => 37,  117 => 36,  113 => 34,  111 => 33,  107 => 31,  103 => 30,  100 => 29,  96 => 28,  89 => 23,  85 => 22,  76 => 16,  73 => 15,  71 => 14,  68 => 13,  60 => 11,  58 => 10,  55 => 9,  47 => 5,  42 => 4,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"rainlab-forum\">

    {% flash %}
        <div class=\"alert alert-{{ type == 'error' ? 'danger' : type }}\">
            {{ message }}
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        </div>
    {% endflash %}

    {% if returnUrl %}
        <p>&larr; <a href=\"{{ returnUrl }}\">Back to {{ channel.title }}</a></p>
    {% endif %}

    {% if topic %}

        <h4>{{ topic.subject }}</h4>

        <div class=\"row\">
            <div class=\"col-md-3 col-md-push-9\">

                <div id=\"topicControlPanel\">
                    {% partial \"@controlpanel\" %}
                </div>

            </div>
            <div class=\"col-md-9 col-md-pull-3\">

                {% partial \"@posts\" %}

                {% partial \"@pagination\" %}

                <h4>Reply to this discussion</h4>
                {% if not topic.canPost %}
                    <p>
                        You cannot edit posts or make replies:
                        {% if not member %}You should be logged in before you can post.{% endif %}
                        {% if member.is_banned %}Your account is banned.{% endif %}
                        {% if topic.is_locked %}This topic is locked.{% endif %}
                    </p>
                {% else %}
                    {% partial \"@postform\" %}
                {% endif %}

            </div>
        </div>

    {% elseif channel %}

        <h4>Create a new discussion topic</h4>
        {% partial \"@createform\" %}

    {% else %}

        <p>Topic not found</p>

    {% endif %}
</div>", "/Users/salm/Documents/Ahira/oct/plugins/rainlab/forum/components/topic/default.htm", "");
    }
}
