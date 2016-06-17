<?php

/* TravelsMainBundle::index.html.twig */
class __TwigTemplate_8479298cbc07dea22625aefe85d3a583f8f4794c0506d84acee1d04a29d077a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TravelsMainBundle::layout.html.twig", "TravelsMainBundle::index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TravelsMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"content-container\">
\t<div class=\"content-bg\">
\t\t<div class=\"flightsManager-content-wraper\">
\t\t\t<div class=\"flightsManager-content-h\">
\t\t\t\t<div class=\"flightsManager-content\">
\t\t\t\t\t<div class=\"flightsManager-content-header\">
\t\t\t\t\t\t<div class=\"flightsManager-service\">
\t\t\t\t\t\t\t<span class=\"flightsManager-services-icon\">ç</span>
\t\t\t\t\t\t\tFlüge
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flightsManager-service\">
\t\t\t\t\t\t\t<span class=\"flightsManager-services-icon\">é</span>
\t\t\t\t\t\t\tFlug + Hotel
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flightsManager-service\">
\t\t\t\t\t\t\t<span class=\"flightsManager-services-icon\">i</span>
\t\t\t\t\t\t\tPauschalreisen 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flightsManager-service\">
\t\t\t\t\t\t\t<span class=\"flightsManager-services-icon\">V</span>
\t\t\t\t\t\t\tMietwagen
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flightsManager-service\">
\t\t\t\t\t\t\t<span class=\"flightsManager-services-icon\">è</span>
\t\t\t\t\t\t\tHotels
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flightsManager-row\">
\t\t\t\t\t\t<div class=\"flightsManager-cell\">
\t\t\t\t\t\t\t<div class=\"airportselector-input-wrapper\">
\t\t\t\t\t\t\t\t<input id=\"departure_airportselector_input\" class=\"airportselector-input\" type=\"text\" value=\"\" placeholder=\"Abreiseort\" autocomplete=\"off\" spellcheck=\"false\" tabindex=\"1\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"departure-airportselector-dialog\">
\t\t\t\t\t\t\t\t123
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t123
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t123
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t123
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flightsManager-cell\">
\t\t\t\t\t\t\t<div class=\"airportselector-input-wrapper\">
\t\t\t\t\t\t\t\t<input class=\"airportselector-input\" type=\"text\" value=\"\" placeholder=\"Nach\" autocomplete=\"off\" spellcheck=\"false\" tabindex=\"2\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flightsManager-content-footer\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        // line 64
        echo "
<script>
\tfunction aa_onReady()
\t{
\t    var aaElem = \$('#mycorousel');
        aaElem.Aa({
\t\t\turlimgs: ['123']
\t\t});
\t}
\t\$(document).ready( aa_onReady );
</script>

";
    }

    public function getTemplateName()
    {
        return "TravelsMainBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 64,  92 => 63,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'TravelsMainBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/* <div class="content-container">*/
/* 	<div class="content-bg">*/
/* 		<div class="flightsManager-content-wraper">*/
/* 			<div class="flightsManager-content-h">*/
/* 				<div class="flightsManager-content">*/
/* 					<div class="flightsManager-content-header">*/
/* 						<div class="flightsManager-service">*/
/* 							<span class="flightsManager-services-icon">ç</span>*/
/* 							Flüge*/
/* 						</div>*/
/* 						<div class="flightsManager-service">*/
/* 							<span class="flightsManager-services-icon">é</span>*/
/* 							Flug + Hotel*/
/* 						</div>*/
/* 						<div class="flightsManager-service">*/
/* 							<span class="flightsManager-services-icon">i</span>*/
/* 							Pauschalreisen */
/* 						</div>*/
/* 						<div class="flightsManager-service">*/
/* 							<span class="flightsManager-services-icon">V</span>*/
/* 							Mietwagen*/
/* 						</div>*/
/* 						<div class="flightsManager-service">*/
/* 							<span class="flightsManager-services-icon">è</span>*/
/* 							Hotels*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="flightsManager-row">*/
/* 						<div class="flightsManager-cell">*/
/* 							<div class="airportselector-input-wrapper">*/
/* 								<input id="departure_airportselector_input" class="airportselector-input" type="text" value="" placeholder="Abreiseort" autocomplete="off" spellcheck="false" tabindex="1">*/
/* 							</div>*/
/* 							<div class="departure-airportselector-dialog">*/
/* 								123*/
/* 								</br>*/
/* 								123*/
/* 								</br>*/
/* 								123*/
/* 								</br>*/
/* 								123*/
/* 								</br>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="flightsManager-cell">*/
/* 							<div class="airportselector-input-wrapper">*/
/* 								<input class="airportselector-input" type="text" value="" placeholder="Nach" autocomplete="off" spellcheck="false" tabindex="2">*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="flightsManager-content-footer">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock content %}*/
/* */
/* */
/* {% block javascripts %}*/
/* */
/* <script>*/
/* 	function aa_onReady()*/
/* 	{*/
/* 	    var aaElem = $('#mycorousel');*/
/*         aaElem.Aa({*/
/* 			urlimgs: ['123']*/
/* 		});*/
/* 	}*/
/* 	$(document).ready( aa_onReady );*/
/* </script>*/
/* */
/* {% endblock javascripts %}*/
