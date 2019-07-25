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

/* /Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/feedback.htm */
class __TwigTemplate_18a01233e106bcaf1f31e6e3155853ccdea4a0e16cd3bdcd749dc894841afc45 extends \Twig\Template
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
        <h2 class=\"section-title text-center wow fadeInDown\"
            style=\"color: white;\"
        >Our volunteers</h2>
    </div>
    <div class=\"row\">

        <div class=\"col-sm-8 col-sm-offset-2\">

            <div id=\"carousel-testimonial\" class=\"carousel slide text-center\" data-ride=\"carousel\">
                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"item active\">
                        <p><img class=\"img-circle img-thumbnail\" style=\"width: 100px; height: 100px;\" src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial/sal.jpg");
        echo "\" alt=\"\"></p>
                        <h4>Salifu Mutaru</h4>
                        <small>Software Engineer | <a href=\"https://worldreader.org\" class=\"success\">Worldreader</a></small>
                        <p>I am very glad for the opportunity I had to contribute to the mosque. I built this particular website towards my Ahira.</p>
                    </div>
                    <div class=\"item\">
                        <p><img class=\"img-circle img-thumbnail\" style=\"width: 100px; height: 100px;\" src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial/girl.jpg");
        echo "\" alt=\"\"></p>
                        <h4>Fatima Bintu</h4>
                        <small>Arabic Studies</small>
                        <p>I teach Arabic language to students of the mosque in the evenings of Thursday and Friday, after Maghrib.</p>
                    </div>
                </div>

                <!-- Controls -->
                <div class=\"btns\">
                    <a class=\"btn btn-success btn-sm\" href=\"#carousel-testimonial\" role=\"button\" data-slide=\"prev\">
                        <span class=\"fa fa-angle-left\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"btn btn-success btn-sm\" href=\"#carousel-testimonial\" role=\"button\" data-slide=\"next\">
                        <span class=\"fa fa-angle-right\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/feedback.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  51 => 15,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"section-header\">
        <h2 class=\"section-title text-center wow fadeInDown\"
            style=\"color: white;\"
        >Our volunteers</h2>
    </div>
    <div class=\"row\">

        <div class=\"col-sm-8 col-sm-offset-2\">

            <div id=\"carousel-testimonial\" class=\"carousel slide text-center\" data-ride=\"carousel\">
                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"item active\">
                        <p><img class=\"img-circle img-thumbnail\" style=\"width: 100px; height: 100px;\" src=\"{{ 'assets/images/testimonial/sal.jpg'|theme }}\" alt=\"\"></p>
                        <h4>Salifu Mutaru</h4>
                        <small>Software Engineer | <a href=\"https://worldreader.org\" class=\"success\">Worldreader</a></small>
                        <p>I am very glad for the opportunity I had to contribute to the mosque. I built this particular website towards my Ahira.</p>
                    </div>
                    <div class=\"item\">
                        <p><img class=\"img-circle img-thumbnail\" style=\"width: 100px; height: 100px;\" src=\"{{ 'assets/images/testimonial/girl.jpg'|theme }}\" alt=\"\"></p>
                        <h4>Fatima Bintu</h4>
                        <small>Arabic Studies</small>
                        <p>I teach Arabic language to students of the mosque in the evenings of Thursday and Friday, after Maghrib.</p>
                    </div>
                </div>

                <!-- Controls -->
                <div class=\"btns\">
                    <a class=\"btn btn-success btn-sm\" href=\"#carousel-testimonial\" role=\"button\" data-slide=\"prev\">
                        <span class=\"fa fa-angle-left\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"btn btn-success btn-sm\" href=\"#carousel-testimonial\" role=\"button\" data-slide=\"next\">
                        <span class=\"fa fa-angle-right\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>", "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/feedback.htm", "");
    }
}
