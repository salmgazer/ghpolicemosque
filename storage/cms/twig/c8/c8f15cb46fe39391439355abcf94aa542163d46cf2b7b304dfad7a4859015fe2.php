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

/* /Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/blogs.htm */
class __TwigTemplate_467aaf17e7a38176ade8003eb0b1489e514ccd5e5b4f26f2ba7715af7138b8b1 extends \Twig\Template
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
                <h2 class=\"section-title text-center wow fadeInDown\">Latest News & Articles</h2>
                <p class=\"text-center wow fadeInDown\">Get up to date on Islamic matters</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"blog-post blog-large wow fadeInLeft\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\">
                        <article>
                            <header class=\"entry-header\">
                                <div class=\"entry-thumbnail\">
                                    <img class=\"img-responsive\" src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/meet.jpg");
        echo "\" alt=\"\">
                                    <!--<span class=\"post-format post-format-video\"><i class=\"fa fa-film\"></i></span>-->
                                </div>
                                <div class=\"entry-date\">25 June 2019</div>
                                <h2 class=\"entry-title\"><a href=\"#\">Husein Abdur-Rahim Husein meets Imam ...</a></h2>
                            </header>

                            <div class=\"entry-content\">
                                <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the mate the long iron rod remaining, bade him hold it upright, without its touching off the steel head of the lance, and then handing to the mate the long iron rod remaining. without its touching off the steel without its touching off the steel</P>
                                <a class=\"btn btn-primary\" href=\"#\">Read More</a>
                            </div>

                            <footer class=\"entry-meta\">
                                <span class=\"entry-author\"><i class=\"fa fa-pencil\"></i> <a href=\"#\">Ilham</a></span>
                                <span class=\"entry-category\"><i class=\"fa fa-folder-o\"></i> <a href=\"#\">News</a></span>
                                <span class=\"entry-comments\"><i class=\"fa fa-comments-o\"></i> <a href=\"#\">2</a></span>
                            </footer>
                        </article>
                    </div>
                </div> <!--/.col-sm-6-->
                <div class=\"col-sm-6\">
                    <div class=\"blog-post blog-media wow fadeInRight\" data-wow-duration=\"300ms\" data-wow-delay=\"100ms\">
                        <article class=\"media clearfix\">
                            <div class=\"entry-thumbnail pull-left\">
                                <img class=\"img-responsive\" style=\"width: 200px\" src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/explains.jpg");
        echo "\" alt=\"\">
                                <!--<span class=\"post-format post-format-gallery\"><i class=\"fa fa-image\"></i></span>-->
                            </div>
                            <div class=\"media-body\">
                                <header class=\"entry-header\">
                                    <div class=\"entry-date\">01 July 2019</div>
                                    <h2 class=\"entry-title\"><a href=\"#\">Imam discusses the state of the ummah</a></h2>
                                </header>

                                <div class=\"entry-content\">
                                    <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the steel</P>
                                    <a class=\"btn btn-primary\" href=\"#\">Read More</a>
                                </div>

                                <footer class=\"entry-meta\">
                                    <span class=\"entry-author\"><i class=\"fa fa-pencil\"></i> <a href=\"#\">Ilham</a></span>
                                    <span class=\"entry-category\"><i class=\"fa fa-folder-o\"></i> <a href=\"#\">Lecture</a></span>
                                    <span class=\"entry-comments\"><i class=\"fa fa-comments-o\"></i> <a href=\"#\">45</a></span>
                                </footer>
                            </div>
                        </article>
                    </div>
                    <div class=\"blog-post blog-media wow fadeInRight\" data-wow-duration=\"300ms\" data-wow-delay=\"200ms\">
                        <article class=\"media clearfix\">
                            <div class=\"entry-thumbnail pull-left\">
                                <img class=\"img-responsive\" style=\"width:200px\" src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/lessons.jpg");
        echo "\" alt=\"\">
                                <!--<span class=\"post-format post-format-audio\"><i class=\"fa fa-music\"></i></span>-->
                            </div>
                            <div class=\"media-body\">
                                <header class=\"entry-header\">
                                    <div class=\"entry-date\">03 November 2014</div>
                                    <h2 class=\"entry-title\"><a href=\"#\">Life lessons from our father</a></h2>
                                </header>

                                <div class=\"entry-content\">
                                    <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the steel</P>
                                    <a class=\"btn btn-primary\" href=\"#\">Read More</a>
                                </div>

                                <footer class=\"entry-meta\">
                                    <span class=\"entry-author\"><i class=\"fa fa-pencil\"></i> <a href=\"#\">Ilham</a></span>
                                    <span class=\"entry-category\"><i class=\"fa fa-folder-o\"></i> <a href=\"#\">Lessons</a></span>
                                    <span class=\"entry-comments\"><i class=\"fa fa-comments-o\"></i> <a href=\"#\">105</a></span>
                                </footer>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </div>";
    }

    public function getTemplateName()
    {
        return "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/blogs.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 62,  76 => 37,  49 => 13,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Latest News & Articles</h2>
                <p class=\"text-center wow fadeInDown\">Get up to date on Islamic matters</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"blog-post blog-large wow fadeInLeft\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\">
                        <article>
                            <header class=\"entry-header\">
                                <div class=\"entry-thumbnail\">
                                    <img class=\"img-responsive\" src=\"{{ 'assets/images/team/meet.jpg'|theme }}\" alt=\"\">
                                    <!--<span class=\"post-format post-format-video\"><i class=\"fa fa-film\"></i></span>-->
                                </div>
                                <div class=\"entry-date\">25 June 2019</div>
                                <h2 class=\"entry-title\"><a href=\"#\">Husein Abdur-Rahim Husein meets Imam ...</a></h2>
                            </header>

                            <div class=\"entry-content\">
                                <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the mate the long iron rod remaining, bade him hold it upright, without its touching off the steel head of the lance, and then handing to the mate the long iron rod remaining. without its touching off the steel without its touching off the steel</P>
                                <a class=\"btn btn-primary\" href=\"#\">Read More</a>
                            </div>

                            <footer class=\"entry-meta\">
                                <span class=\"entry-author\"><i class=\"fa fa-pencil\"></i> <a href=\"#\">Ilham</a></span>
                                <span class=\"entry-category\"><i class=\"fa fa-folder-o\"></i> <a href=\"#\">News</a></span>
                                <span class=\"entry-comments\"><i class=\"fa fa-comments-o\"></i> <a href=\"#\">2</a></span>
                            </footer>
                        </article>
                    </div>
                </div> <!--/.col-sm-6-->
                <div class=\"col-sm-6\">
                    <div class=\"blog-post blog-media wow fadeInRight\" data-wow-duration=\"300ms\" data-wow-delay=\"100ms\">
                        <article class=\"media clearfix\">
                            <div class=\"entry-thumbnail pull-left\">
                                <img class=\"img-responsive\" style=\"width: 200px\" src=\"{{ 'assets/images/team/explains.jpg'|theme }}\" alt=\"\">
                                <!--<span class=\"post-format post-format-gallery\"><i class=\"fa fa-image\"></i></span>-->
                            </div>
                            <div class=\"media-body\">
                                <header class=\"entry-header\">
                                    <div class=\"entry-date\">01 July 2019</div>
                                    <h2 class=\"entry-title\"><a href=\"#\">Imam discusses the state of the ummah</a></h2>
                                </header>

                                <div class=\"entry-content\">
                                    <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the steel</P>
                                    <a class=\"btn btn-primary\" href=\"#\">Read More</a>
                                </div>

                                <footer class=\"entry-meta\">
                                    <span class=\"entry-author\"><i class=\"fa fa-pencil\"></i> <a href=\"#\">Ilham</a></span>
                                    <span class=\"entry-category\"><i class=\"fa fa-folder-o\"></i> <a href=\"#\">Lecture</a></span>
                                    <span class=\"entry-comments\"><i class=\"fa fa-comments-o\"></i> <a href=\"#\">45</a></span>
                                </footer>
                            </div>
                        </article>
                    </div>
                    <div class=\"blog-post blog-media wow fadeInRight\" data-wow-duration=\"300ms\" data-wow-delay=\"200ms\">
                        <article class=\"media clearfix\">
                            <div class=\"entry-thumbnail pull-left\">
                                <img class=\"img-responsive\" style=\"width:200px\" src=\"{{ 'assets/images/team/lessons.jpg'|theme }}\" alt=\"\">
                                <!--<span class=\"post-format post-format-audio\"><i class=\"fa fa-music\"></i></span>-->
                            </div>
                            <div class=\"media-body\">
                                <header class=\"entry-header\">
                                    <div class=\"entry-date\">03 November 2014</div>
                                    <h2 class=\"entry-title\"><a href=\"#\">Life lessons from our father</a></h2>
                                </header>

                                <div class=\"entry-content\">
                                    <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the steel</P>
                                    <a class=\"btn btn-primary\" href=\"#\">Read More</a>
                                </div>

                                <footer class=\"entry-meta\">
                                    <span class=\"entry-author\"><i class=\"fa fa-pencil\"></i> <a href=\"#\">Ilham</a></span>
                                    <span class=\"entry-category\"><i class=\"fa fa-folder-o\"></i> <a href=\"#\">Lessons</a></span>
                                    <span class=\"entry-comments\"><i class=\"fa fa-comments-o\"></i> <a href=\"#\">105</a></span>
                                </footer>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </div>", "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/blogs.htm", "");
    }
}
