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

/* /Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/layouts/default.htm */
class __TwigTemplate_6ef7aa94577279682732385d89d74fcd5f0b046f83d383ee9ad5f93104ca09aa extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "

<body id=\"home\" class=\"homepage\">

<header id=\"header\">
    <link href=\"https://fonts.googleapis.com/css?family=Lato&display=swap\" rel=\"stylesheet\">
    ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "</header><!--/header-->

<section id=\"layout-content\">
    ";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 15
        echo "</section>

<section id=\"contact\">
    ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("contact"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "</section><!--/#contact-->

<footer id=\"footer\">
    ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "</footer><!--/#footer-->

    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/mousescroll.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/smoothscroll.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.prettyPhoto.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.isotope.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.inview.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
    async defer>
    </script>
    <script>
        // only on home page
        if (document.getElementById('date-area') && document.getElementById('year-area')) {
            const date = new Date();
            const monthName = date.toLocaleString('default', { month: 'long' });
            const month = date.getMonth();
            const day = date.getDate();
            const year = date.getFullYear();
            document.getElementById('date-area').innerHTML = `\${monthName} \${day}`;
            document.getElementById('year-area').innerHTML = year;
            
            const request = new XMLHttpRequest();

            // Open a new connection, using the GET request on the URL endpoint
            request.open('GET', `http://api.aladhan.com/v1/calendarByAddress?address=Cantonment%20Police%20Mosque,%20Accra&method=2&month=\${month}&year=\${year}`, true);        
            
            request.onload = function () {
                if (request.status >= 200 && request.status < 400) {
                    const data = JSON.parse(this.response);
                    const timings = data.data[0].timings;
                    
                    pmORam(timings.Fajr);
                    
                    document.getElementById('fajr').innerHTML = pmORam(timings.Fajr);
                    document.getElementById('dhuhr').innerHTML = pmORam(timings.Dhuhr);
                    document.getElementById('asr').innerHTML = pmORam(timings.Asr);
                    document.getElementById('maghrib').innerHTML = pmORam(timings.Maghrib);
                    document.getElementById('isha').innerHTML = pmORam(timings.Isha);
                    document.getElementById('sunrise').innerHTML = pmORam(timings.Sunrise);
                    document.getElementById('sunset').innerHTML = pmORam(timings.Sunset);
                } else {
                    console.log(\"FAILED\")
                }
            
            }
            
            // Send request
            request.send();

            const pmORam = function(time) {
                const brokenTime = time.split(\":\");
                let timeHour = parseInt(brokenTime[0]);
                const timeMinutes = parseInt(brokenTime[1].split(\" \")[0]);
                let amPm = \"AM\";
                if (timeHour >= 12 && timeHour < 24 && timeHour !== 0) {
                    timeHour = timeHour - 12;
                    amPm = \"PM\";
                } 
                return timeHour + \":\" + timeMinutes + \" \" + amPm;
            }
        }
    </script>
    <script>document.getElementById('date-area').innerHTML = new Date().getFullMonth();</script>
";
        // line 91
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 92
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 93
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 93,  195 => 92,  180 => 91,  121 => 35,  117 => 34,  113 => 33,  109 => 32,  105 => 31,  101 => 30,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  80 => 23,  76 => 22,  71 => 19,  67 => 18,  62 => 15,  60 => 14,  55 => 11,  51 => 10,  43 => 4,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    {% partial \"meta\" %}


<body id=\"home\" class=\"homepage\">

<header id=\"header\">
    <link href=\"https://fonts.googleapis.com/css?family=Lato&display=swap\" rel=\"stylesheet\">
    {% partial \"nav\" %}
</header><!--/header-->

<section id=\"layout-content\">
    {% page %}
</section>

<section id=\"contact\">
    {% partial \"contact\" %}
</section><!--/#contact-->

<footer id=\"footer\">
    {% partial \"footer\" %}
</footer><!--/#footer-->

    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/owl.carousel.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/mousescroll.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/smoothscroll.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.prettyPhoto.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.isotope.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.inview.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/wow.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/main.js'|theme }}\"></script>
    async defer>
    </script>
    <script>
        // only on home page
        if (document.getElementById('date-area') && document.getElementById('year-area')) {
            const date = new Date();
            const monthName = date.toLocaleString('default', { month: 'long' });
            const month = date.getMonth();
            const day = date.getDate();
            const year = date.getFullYear();
            document.getElementById('date-area').innerHTML = `\${monthName} \${day}`;
            document.getElementById('year-area').innerHTML = year;
            
            const request = new XMLHttpRequest();

            // Open a new connection, using the GET request on the URL endpoint
            request.open('GET', `http://api.aladhan.com/v1/calendarByAddress?address=Cantonment%20Police%20Mosque,%20Accra&method=2&month=\${month}&year=\${year}`, true);        
            
            request.onload = function () {
                if (request.status >= 200 && request.status < 400) {
                    const data = JSON.parse(this.response);
                    const timings = data.data[0].timings;
                    
                    pmORam(timings.Fajr);
                    
                    document.getElementById('fajr').innerHTML = pmORam(timings.Fajr);
                    document.getElementById('dhuhr').innerHTML = pmORam(timings.Dhuhr);
                    document.getElementById('asr').innerHTML = pmORam(timings.Asr);
                    document.getElementById('maghrib').innerHTML = pmORam(timings.Maghrib);
                    document.getElementById('isha').innerHTML = pmORam(timings.Isha);
                    document.getElementById('sunrise').innerHTML = pmORam(timings.Sunrise);
                    document.getElementById('sunset').innerHTML = pmORam(timings.Sunset);
                } else {
                    console.log(\"FAILED\")
                }
            
            }
            
            // Send request
            request.send();

            const pmORam = function(time) {
                const brokenTime = time.split(\":\");
                let timeHour = parseInt(brokenTime[0]);
                const timeMinutes = parseInt(brokenTime[1].split(\" \")[0]);
                let amPm = \"AM\";
                if (timeHour >= 12 && timeHour < 24 && timeHour !== 0) {
                    timeHour = timeHour - 12;
                    amPm = \"PM\";
                } 
                return timeHour + \":\" + timeMinutes + \" \" + amPm;
            }
        }
    </script>
    <script>document.getElementById('date-area').innerHTML = new Date().getFullMonth();</script>
{% framework extras %}
{% scripts %}

</body>
</html>", "/Users/salm/Documents/Ahira/oct/themes/jtherczeg-multi/layouts/default.htm", "");
    }
}
