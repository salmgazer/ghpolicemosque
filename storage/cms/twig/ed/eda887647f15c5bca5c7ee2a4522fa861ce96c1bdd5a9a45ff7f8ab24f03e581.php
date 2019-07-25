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

/* /Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/team.htm */
class __TwigTemplate_534673da52d1ccd1ded8223c23a307667bf95045df94ec2b0817ecf89c1159f5 extends \Twig\Template
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
                <h2 class=\"section-title text-center wow fadeInDown\">Meet The Team</h2>
                <p class=\"text-center wow fadeInDown\">This is the amazing family that keeps the mosque running by the help of Allah.</p>
            </div>

            <div class=\"section-header\">
                <h3 class=\"text-left wow fadeInDown\">Administrative Staff</h3>
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/imam2.jpg");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Superintendent of Police Husein Abdur-Rahim Husein</h3>
                                <span>Imam</span>
                            </div>
                            <!--<p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>-->
                            <!--
                            <ul class=\"social-icons\">
                                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            </ul>
                            -->
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/ilham1.jpg");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Ilham Antwiwaa Agyemang</h3>
                                <span>Secretary / Event Organizer</span>
                            </div>
                            <br/>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/asp_yakubu.jpg");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>ASP Yakubu Ibrahim</h3>
                                <span>Supporting Staff</span>
                            </div>
                            <br><br>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"300ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/inspector_hamidu.jpg");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>C/Inspector Hamidu Musah</h3>
                                <span>Supporting staff</span>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"divider\"></div>

            <div class=\"section-header\">
                <h3 class=\"text-left wow fadeInDown\">Imams</h3>
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/imam2.jpg");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Superintendent of Police Husein Abdur-Rahim Husein</h3>
                                <span>Imam</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/deputy_imam.png");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Imam Abas Abdul Karim</h3>
                                <span>Deputy Imam</span>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                
                <div class=\"divider\"></div>
                
                <h3 class=\"text-left wow fadeInDown\">Visiting Imams</h3>
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/sheikh_armiyawu_shaibu.png");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Sheikh Armiyawu Shaibu</h3>
                                <span>Visiting Imam</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/ishaak_ibrahim _nuamah_2.png");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Sheikh Ishak Nuamah</h3>
                                <span>Visiting Imam</span>
                            </div>
                            <br/>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 129
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/imam_muktar.png");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Imam Sa-id Mukhtar Abubakar</h3>
                                <span>Visiting Imam</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"divider\"></div>

            <div class=\"section-header\">
                <h3 class=\"text-left wow fadeInDown\">Da'awah Committee</h3>
                <div class=\"row\">
                    
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 149
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/imam2.jpg");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Superintendent of Police Husein Abdur-Rahim Husein</h3>
                                <span>Imam</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 160
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/deputy_imam.png");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Imam Abas Abdul Karim</h3>
                                <span>Deputy Imam</span>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 172
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Mr. Salim Kalmoni</h3>
                                <span>Member</span>
                            </div>
                            <br/><br/>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"300ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 184
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Mr. Bassam El-Huseini</h3>
                                <span>Member</span>
                            </div>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"divider\"></div>

            <div class=\"section-header\">
                <h3 class=\"text-left wow fadeInDown\">Finance Committee</h3>
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" style=\"opacity: 0.0\" src=\"";
        // line 204
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Mr. Salim Kalmoni</h3>
                                <span>Member</span>
                            </div>
                            <br/>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" style=\"opacity: 0.0\" src=\"";
        // line 216
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Mr. Asad Nazir</h3>
                                <span>Member</span>
                            </div>
                            <br />
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 228
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Hajia Azarah Abubakari Haroun</h3>
                                <span>Member</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"300ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 239
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Lawyer Daniyal Abdul-Karim</h3>
                                <span>Member</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\" style=\"margin-top: 50px;\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 252
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/inspector_hamidu.jpg");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>C/Inspector Hamidu Musah</h3>
                                <span>Member</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 263
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/asp_yakubu.jpg");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>ASP Yakubu Ibrahim</h3>
                                <span>Member</span>
                            </div>
                            <br/>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"300ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 275
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/.jpg");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Mr. Musah Mohammed</h3>
                                <span>Member</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"divider\"></div>

            <div class=\"section-header\">
                <h3 class=\"text-left wow fadeInDown\">Facility Committee</h3>
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 294
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/asp_yakubu.jpg");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>ASP Yakubu Ibrahim</h3>
                                <span>Member</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 306
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Hajia May Kalmoni</h3>
                                <span>Chairperson</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 318
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Hajia Safura Andani</h3>
                                <span>Member</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"divider\"></div>

            <div class=\"section-header\">
                <h3 class=\"text-left wow fadeInDown\">Security Personnel</h3>
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 337
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/moro.jpg");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Inspector Moro Abdulai Sanda</h3>
                                <span>Member</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"";
        // line 348
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/awudu.jpg");
        echo "\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Inspector Abubakari Awudu</h3>
                                <span>Member</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>";
    }

    public function getTemplateName()
    {
        return "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/team.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 348,  442 => 337,  420 => 318,  405 => 306,  390 => 294,  368 => 275,  353 => 263,  339 => 252,  323 => 239,  309 => 228,  294 => 216,  279 => 204,  256 => 184,  241 => 172,  226 => 160,  212 => 149,  189 => 129,  174 => 117,  160 => 106,  139 => 88,  125 => 77,  102 => 57,  87 => 45,  72 => 33,  49 => 13,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Meet The Team</h2>
                <p class=\"text-center wow fadeInDown\">This is the amazing family that keeps the mosque running by the help of Allah.</p>
            </div>

            <div class=\"section-header\">
                <h3 class=\"text-left wow fadeInDown\">Administrative Staff</h3>
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/imam2.jpg'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Superintendent of Police Husein Abdur-Rahim Husein</h3>
                                <span>Imam</span>
                            </div>
                            <!--<p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>-->
                            <!--
                            <ul class=\"social-icons\">
                                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            </ul>
                            -->
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/ilham1.jpg'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Ilham Antwiwaa Agyemang</h3>
                                <span>Secretary / Event Organizer</span>
                            </div>
                            <br/>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/asp_yakubu.jpg'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>ASP Yakubu Ibrahim</h3>
                                <span>Supporting Staff</span>
                            </div>
                            <br><br>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"300ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/inspector_hamidu.jpg'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>C/Inspector Hamidu Musah</h3>
                                <span>Supporting staff</span>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"divider\"></div>

            <div class=\"section-header\">
                <h3 class=\"text-left wow fadeInDown\">Imams</h3>
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/imam2.jpg'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Superintendent of Police Husein Abdur-Rahim Husein</h3>
                                <span>Imam</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/deputy_imam.png'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Imam Abas Abdul Karim</h3>
                                <span>Deputy Imam</span>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                
                <div class=\"divider\"></div>
                
                <h3 class=\"text-left wow fadeInDown\">Visiting Imams</h3>
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/sheikh_armiyawu_shaibu.png'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Sheikh Armiyawu Shaibu</h3>
                                <span>Visiting Imam</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/ishaak_ibrahim _nuamah_2.png'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Sheikh Ishak Nuamah</h3>
                                <span>Visiting Imam</span>
                            </div>
                            <br/>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/imam_muktar.png'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Imam Sa-id Mukhtar Abubakar</h3>
                                <span>Visiting Imam</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"divider\"></div>

            <div class=\"section-header\">
                <h3 class=\"text-left wow fadeInDown\">Da'awah Committee</h3>
                <div class=\"row\">
                    
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/imam2.jpg'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Superintendent of Police Husein Abdur-Rahim Husein</h3>
                                <span>Imam</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/deputy_imam.png'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Imam Abas Abdul Karim</h3>
                                <span>Deputy Imam</span>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Mr. Salim Kalmoni</h3>
                                <span>Member</span>
                            </div>
                            <br/><br/>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"300ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Mr. Bassam El-Huseini</h3>
                                <span>Member</span>
                            </div>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"divider\"></div>

            <div class=\"section-header\">
                <h3 class=\"text-left wow fadeInDown\">Finance Committee</h3>
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" style=\"opacity: 0.0\" src=\"{{ 'assets/images/team/'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Mr. Salim Kalmoni</h3>
                                <span>Member</span>
                            </div>
                            <br/>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" style=\"opacity: 0.0\" src=\"{{ 'assets/images/team/'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Mr. Asad Nazir</h3>
                                <span>Member</span>
                            </div>
                            <br />
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Hajia Azarah Abubakari Haroun</h3>
                                <span>Member</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"300ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Lawyer Daniyal Abdul-Karim</h3>
                                <span>Member</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\" style=\"margin-top: 50px;\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/inspector_hamidu.jpg'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>C/Inspector Hamidu Musah</h3>
                                <span>Member</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/asp_yakubu.jpg'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>ASP Yakubu Ibrahim</h3>
                                <span>Member</span>
                            </div>
                            <br/>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"300ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/.jpg'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Mr. Musah Mohammed</h3>
                                <span>Member</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"divider\"></div>

            <div class=\"section-header\">
                <h3 class=\"text-left wow fadeInDown\">Facility Committee</h3>
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/asp_yakubu.jpg'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>ASP Yakubu Ibrahim</h3>
                                <span>Member</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Hajia May Kalmoni</h3>
                                <span>Chairperson</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Hajia Safura Andani</h3>
                                <span>Member</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"divider\"></div>

            <div class=\"section-header\">
                <h3 class=\"text-left wow fadeInDown\">Security Personnel</h3>
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/moro.jpg'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Inspector Moro Abdulai Sanda</h3>
                                <span>Member</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                            <div class=\"team-img\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/team/awudu.jpg'|theme }}\" alt=\"\">
                            </div>
                            <div class=\"team-info\">
                                <h3>Inspector Abubakari Awudu</h3>
                                <span>Member</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>", "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/team.htm", "");
    }
}
