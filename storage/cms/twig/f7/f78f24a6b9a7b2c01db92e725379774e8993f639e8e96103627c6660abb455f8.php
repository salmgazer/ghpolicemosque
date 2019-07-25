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

/* /Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/nav.htm */
class __TwigTemplate_8ce930869da90fe765cae16651dab7e9b854e5e5530072c9345637958f80e323 extends \Twig\Template
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
        echo "<nav id=\"main-menu\" class=\"navbar navbar-default navbar-fixed-top\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/\"><img class=\"logo\" src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/moon.png");
        echo "\" alt=\"logo\"></a>
                </div>

                <div class=\"collapse navbar-collapse navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"scroll\"><a href=\"/\" class=\"nav-link\">Home</a></li>
                        <li class=\"scroll\"><a href=\"/#services\" class=\"nav-link\">Services</a></li>
                        <li class=\"scroll\"><a href=\"/about\" class=\"nav-link\">About</a></li>
                        <li class=\"scroll\">
                            <a href=\"/#azan\" class=\"nav-link\" style=\"background-color: mediumseagreen; background-size: inherit; color: white\">
                                Adhan
                            </a>
                        </li>
                        <li class=\"scroll\"><a href=\"/gallery\" class=\"nav-link\">Gallery</a></li>
                        <li class=\"scroll\"><a href=\"/blog\" class=\"nav-link\">News & Articles</a></li>
                        <li class=\"scroll\"><a href=\"/#get-in-touch\" class=\"nav-link\">Contact</a></li>
                        ";
        // line 26
        if (($context["user"] ?? null)) {
            // line 27
            echo "                        <li><a href=\"#\" data-request=\"onLogout\" class=\"nav-link\" style=\"color: indianred\">Logout</a></li>
                        ";
        } else {
            // line 29
            echo "                        <li><a href=\"/account\" class=\"nav-link\" style=\"color: mediumseagreen\">Login / Join</a></li>
                        ";
        }
        // line 31
        echo "                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->";
    }

    public function getTemplateName()
    {
        return "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 31,  71 => 29,  67 => 27,  65 => 26,  46 => 10,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"main-menu\" class=\"navbar navbar-default navbar-fixed-top\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/\"><img class=\"logo\" src=\"{{ 'assets/images/moon.png'|theme }}\" alt=\"logo\"></a>
                </div>

                <div class=\"collapse navbar-collapse navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"scroll\"><a href=\"/\" class=\"nav-link\">Home</a></li>
                        <li class=\"scroll\"><a href=\"/#services\" class=\"nav-link\">Services</a></li>
                        <li class=\"scroll\"><a href=\"/about\" class=\"nav-link\">About</a></li>
                        <li class=\"scroll\">
                            <a href=\"/#azan\" class=\"nav-link\" style=\"background-color: mediumseagreen; background-size: inherit; color: white\">
                                Adhan
                            </a>
                        </li>
                        <li class=\"scroll\"><a href=\"/gallery\" class=\"nav-link\">Gallery</a></li>
                        <li class=\"scroll\"><a href=\"/blog\" class=\"nav-link\">News & Articles</a></li>
                        <li class=\"scroll\"><a href=\"/#get-in-touch\" class=\"nav-link\">Contact</a></li>
                        {% if user %}
                        <li><a href=\"#\" data-request=\"onLogout\" class=\"nav-link\" style=\"color: indianred\">Logout</a></li>
                        {% else %}
                        <li><a href=\"/account\" class=\"nav-link\" style=\"color: mediumseagreen\">Login / Join</a></li>
                        {% endif %}
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->", "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/nav.htm", "");
    }
}
