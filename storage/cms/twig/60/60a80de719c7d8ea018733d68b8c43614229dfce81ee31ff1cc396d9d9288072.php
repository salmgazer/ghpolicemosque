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

/* /Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/slides.htm */
class __TwigTemplate_a63a11365229cd551bba8e2914c5c0ce61a33dbed7d9e9827c122abc0f07feac extends \Twig\Template
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
        echo "<div class=\"owl-carousel\">
            <div class=\"item\" style=\"background-image: url(";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/quran.jpg");
        echo ");\">
                <div class=\"slider-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h2><span class=\"green-text\">Ramadan</span> kareem</h2>
                                    <h3 style=\"color:white\">In this month, you may find a night greater than all of the life you have lived. </h3>
                                    <!--<a class=\"btn btn-primary btn-lg\" href=\"#\">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class=\"item\" style=\"background-image: url(";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/kaaba.jpg");
        echo ");\">
                <div class=\"slider-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h2><span class=\"green-text\">Hajj</span> is approaching.</h2>
                                    <h3 style=\"color:white\">Upcoming pilgrims should start preparing mentally and spiritually. </h3>
                                    <a class=\"btn btn-primary btn-lg\" href=\"/#contact\">Reach Imam</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->";
    }

    public function getTemplateName()
    {
        return "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/slides.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"owl-carousel\">
            <div class=\"item\" style=\"background-image: url({{ 'assets/images/slider/quran.jpg'|theme }});\">
                <div class=\"slider-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h2><span class=\"green-text\">Ramadan</span> kareem</h2>
                                    <h3 style=\"color:white\">In this month, you may find a night greater than all of the life you have lived. </h3>
                                    <!--<a class=\"btn btn-primary btn-lg\" href=\"#\">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class=\"item\" style=\"background-image: url({{ 'assets/images/slider/kaaba.jpg'|theme }});\">
                <div class=\"slider-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h2><span class=\"green-text\">Hajj</span> is approaching.</h2>
                                    <h3 style=\"color:white\">Upcoming pilgrims should start preparing mentally and spiritually. </h3>
                                    <a class=\"btn btn-primary btn-lg\" href=\"/#contact\">Reach Imam</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->", "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/slides.htm", "");
    }
}
