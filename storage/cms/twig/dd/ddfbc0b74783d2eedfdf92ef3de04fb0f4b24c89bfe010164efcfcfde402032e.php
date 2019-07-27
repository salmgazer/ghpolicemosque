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

/* /Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/contact.htm */
class __TwigTemplate_64afc120e776599ae7a172e2c7b95cc8142c18d029ee4ab68c6bf405e907cd78 extends \Twig\Template
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
        echo "<div class=\"row\" id=\"contact-area\">
    <div class=\"col-md-8\" id=\"google-map\" style=\"height:650px\" data-latitude=\"5.5716819\" data-longitude=\"-0.1827918\">
    </div>
    <div class=\"col-md-3\" id=\"contact-form\">
        <h3>Contact Info</h3>

        <address>
            <strong>Ghana Police Mosque</strong><br>
            Opposite Morning Star School,<br>
            Cantonments, Accra<br>
            <abbr title=\"Phone\">Phone:</abbr> +233 244 833 666 / +233 264 833 666
        </address>

        <form id=\"main-contact-form\" name=\"contact-form\" method=\"post\" action=\"#\">
            <div class=\"form-group\">
                <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Name\" required>
            </div>
            <div class=\"form-group\">
                <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required>
            </div>
            <div class=\"form-group\">
                <input type=\"text\" name=\"subject\" class=\"form-control\" placeholder=\"Subject\" required>
            </div>
            <div class=\"form-group\">
                <textarea name=\"message\" class=\"form-control\" rows=\"8\" placeholder=\"Message\" required></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Send Message</button>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\" id=\"contact-area\">
    <div class=\"col-md-8\" id=\"google-map\" style=\"height:650px\" data-latitude=\"5.5716819\" data-longitude=\"-0.1827918\">
    </div>
    <div class=\"col-md-3\" id=\"contact-form\">
        <h3>Contact Info</h3>

        <address>
            <strong>Ghana Police Mosque</strong><br>
            Opposite Morning Star School,<br>
            Cantonments, Accra<br>
            <abbr title=\"Phone\">Phone:</abbr> +233 244 833 666 / +233 264 833 666
        </address>

        <form id=\"main-contact-form\" name=\"contact-form\" method=\"post\" action=\"#\">
            <div class=\"form-group\">
                <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Name\" required>
            </div>
            <div class=\"form-group\">
                <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required>
            </div>
            <div class=\"form-group\">
                <input type=\"text\" name=\"subject\" class=\"form-control\" placeholder=\"Subject\" required>
            </div>
            <div class=\"form-group\">
                <textarea name=\"message\" class=\"form-control\" rows=\"8\" placeholder=\"Message\" required></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Send Message</button>
        </form>
    </div>
</div>", "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/partials/contact.htm", "");
    }
}
