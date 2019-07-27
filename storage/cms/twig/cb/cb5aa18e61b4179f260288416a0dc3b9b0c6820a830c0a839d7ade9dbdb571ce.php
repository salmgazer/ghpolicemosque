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

/* /Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/gallery.htm */
class __TwigTemplate_5922cdf304554772fbd6e3ccc94b47aee43c2906bad16a661e236e4f4bd1c1c0 extends \Twig\Template
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
        <h2 class=\"section-title text-center wow fadeInDown\">Gallery</h2>
        <p class=\"text-center wow fadeInDown\">Relive some of the amazing moments shared at the masjid</p>
    </div>
    <h3 class=\"text-center wow fadeInDown\" style=\"margin-bottom: 50px\">
        <a href=\"https://www.facebook.com/pg/ghpolicemosque/photos\"  target=\"_blank\">View more on facebook</a>
    </h3>

    <div class=\"text-center\">
        <ul class=\"portfolio-filter\">
            <li><a class=\"active\" href=\"#\" data-filter=\"*\">All</a></li>
            <li><a href=\"#\" data-filter=\".creative\">Masjid Photos</a></li>
            <li><a href=\"#\" data-filter=\".corporate\">Iftar</a></li>
            <li><a href=\"#\" data-filter=\".portfolio\">Nikkah</a></li>
        </ul><!--/#portfolio-filter-->
    </div>

    <div class=\"portfolio-items\">
        <div class=\"portfolio-item creative\">
            <div class=\"portfolio-item-inner\">
                <img class=\"img-responsive\" src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/01.jpg");
        echo "\" alt=\"\">
                <div class=\"portfolio-info\">
                    <h3>Portfolio Item 1</h3>
                    Lorem Ipsum Dolor Sit
                    <a class=\"preview\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class=\"portfolio-item corporate portfolio\">
            <div class=\"portfolio-item-inner\">
                <img class=\"img-responsive\" src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/02.jpg");
        echo "\" alt=\"\">
                <div class=\"portfolio-info\">
                    <h3>Portfolio Item 2</h3>
                    Lorem Ipsum Dolor Sit
                    <a class=\"preview\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class=\"portfolio-item creative\">
            <div class=\"portfolio-item-inner\">
                <img class=\"img-responsive\" src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/03.jpg");
        echo "\" alt=\"\">
                <div class=\"portfolio-info\">
                    <h3>Portfolio Item 3</h3>
                    Lorem Ipsum Dolor Sit
                    <a class=\"preview\" href=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class=\"portfolio-item corporate\">
            <div class=\"portfolio-item-inner\">
                <img class=\"img-responsive\" src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/04.jpg");
        echo "\" alt=\"\">
                <div class=\"portfolio-info\">
                    <h3>Portfolio Item 4</h3>
                    Lorem Ipsum Dolor Sit
                    <a class=\"preview\" href=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class=\"portfolio-item creative portfolio\">
            <div class=\"portfolio-item-inner\">
                <img class=\"img-responsive\" src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/05.jpg");
        echo "\" alt=\"\">
                <div class=\"portfolio-info\">
                    <h3>Portfolio Item 5</h3>
                    Lorem Ipsum Dolor Sit
                    <a class=\"preview\" href=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class=\"portfolio-item corporate\">
            <div class=\"portfolio-item-inner\">
                <img class=\"img-responsive\" src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/06.jpg");
        echo "\" alt=\"\">
                <div class=\"portfolio-info\">
                    <h3>Portfolio Item 5</h3>
                    Lorem Ipsum Dolor Sit
                    <a class=\"preview\" href=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class=\"portfolio-item creative portfolio\">
            <div class=\"portfolio-item-inner\">
                <img class=\"img-responsive\" src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/07.jpg");
        echo "\" alt=\"\">
                <div class=\"portfolio-info\">
                    <h3>Portfolio Item 7</h3>
                    Lorem Ipsum Dolor Sit
                    <a class=\"preview\" href=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class=\"portfolio-item corporate\">
            <div class=\"portfolio-item-inner\">
                <img class=\"img-responsive\" src=\"";
        // line 99
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/08.jpg");
        echo "\" alt=\"\">
                <div class=\"portfolio-info\">
                    <h3>Portfolio Item 8</h3>
                    Lorem Ipsum Dolor Sit
                    <a class=\"preview\" href=\"";
        // line 103
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                </div>
            </div>
        </div><!--/.portfolio-item-->
    </div>
</div><!--/.container-->";
    }

    public function getTemplateName()
    {
        return "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/gallery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 103,  177 => 99,  167 => 92,  160 => 88,  150 => 81,  143 => 77,  133 => 70,  126 => 66,  116 => 59,  109 => 55,  99 => 48,  92 => 44,  82 => 37,  75 => 33,  65 => 26,  58 => 22,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"section-header\">
        <h2 class=\"section-title text-center wow fadeInDown\">Gallery</h2>
        <p class=\"text-center wow fadeInDown\">Relive some of the amazing moments shared at the masjid</p>
    </div>
    <h3 class=\"text-center wow fadeInDown\" style=\"margin-bottom: 50px\">
        <a href=\"https://www.facebook.com/pg/ghpolicemosque/photos\"  target=\"_blank\">View more on facebook</a>
    </h3>

    <div class=\"text-center\">
        <ul class=\"portfolio-filter\">
            <li><a class=\"active\" href=\"#\" data-filter=\"*\">All</a></li>
            <li><a href=\"#\" data-filter=\".creative\">Masjid Photos</a></li>
            <li><a href=\"#\" data-filter=\".corporate\">Iftar</a></li>
            <li><a href=\"#\" data-filter=\".portfolio\">Nikkah</a></li>
        </ul><!--/#portfolio-filter-->
    </div>

    <div class=\"portfolio-items\">
        <div class=\"portfolio-item creative\">
            <div class=\"portfolio-item-inner\">
                <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/01.jpg'|theme }}\" alt=\"\">
                <div class=\"portfolio-info\">
                    <h3>Portfolio Item 1</h3>
                    Lorem Ipsum Dolor Sit
                    <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class=\"portfolio-item corporate portfolio\">
            <div class=\"portfolio-item-inner\">
                <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/02.jpg'|theme }}\" alt=\"\">
                <div class=\"portfolio-info\">
                    <h3>Portfolio Item 2</h3>
                    Lorem Ipsum Dolor Sit
                    <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class=\"portfolio-item creative\">
            <div class=\"portfolio-item-inner\">
                <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/03.jpg'|theme }}\" alt=\"\">
                <div class=\"portfolio-info\">
                    <h3>Portfolio Item 3</h3>
                    Lorem Ipsum Dolor Sit
                    <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class=\"portfolio-item corporate\">
            <div class=\"portfolio-item-inner\">
                <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/04.jpg'|theme }}\" alt=\"\">
                <div class=\"portfolio-info\">
                    <h3>Portfolio Item 4</h3>
                    Lorem Ipsum Dolor Sit
                    <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class=\"portfolio-item creative portfolio\">
            <div class=\"portfolio-item-inner\">
                <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/05.jpg'|theme }}\" alt=\"\">
                <div class=\"portfolio-info\">
                    <h3>Portfolio Item 5</h3>
                    Lorem Ipsum Dolor Sit
                    <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class=\"portfolio-item corporate\">
            <div class=\"portfolio-item-inner\">
                <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/06.jpg'|theme }}\" alt=\"\">
                <div class=\"portfolio-info\">
                    <h3>Portfolio Item 5</h3>
                    Lorem Ipsum Dolor Sit
                    <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class=\"portfolio-item creative portfolio\">
            <div class=\"portfolio-item-inner\">
                <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/07.jpg'|theme }}\" alt=\"\">
                <div class=\"portfolio-info\">
                    <h3>Portfolio Item 7</h3>
                    Lorem Ipsum Dolor Sit
                    <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class=\"portfolio-item corporate\">
            <div class=\"portfolio-item-inner\">
                <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/08.jpg'|theme }}\" alt=\"\">
                <div class=\"portfolio-info\">
                    <h3>Portfolio Item 8</h3>
                    Lorem Ipsum Dolor Sit
                    <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                </div>
            </div>
        </div><!--/.portfolio-item-->
    </div>
</div><!--/.container-->", "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/gallery.htm", "");
    }
}
