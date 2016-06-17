<?php

/* @TravelsMain/index.html.twig */
class __TwigTemplate_f4e8da3419dbc5e64b8da142cf6c8fcc9d0a6f85a34e7c77dc6de65a4e69b755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TravelsMainBundle::layout.html.twig", "@TravelsMain/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_994b27dd3eabddf7d9e60d1ad70802074c40f1478dfb92a593e79aceeb55d688 = $this->env->getExtension("native_profiler");
        $__internal_994b27dd3eabddf7d9e60d1ad70802074c40f1478dfb92a593e79aceeb55d688->enter($__internal_994b27dd3eabddf7d9e60d1ad70802074c40f1478dfb92a593e79aceeb55d688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TravelsMain/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_994b27dd3eabddf7d9e60d1ad70802074c40f1478dfb92a593e79aceeb55d688->leave($__internal_994b27dd3eabddf7d9e60d1ad70802074c40f1478dfb92a593e79aceeb55d688_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45d4f5c2dd8adf117223af87babdf067717cdb5bf864a6d891c534ece02fa27b = $this->env->getExtension("native_profiler");
        $__internal_45d4f5c2dd8adf117223af87babdf067717cdb5bf864a6d891c534ece02fa27b->enter($__internal_45d4f5c2dd8adf117223af87babdf067717cdb5bf864a6d891c534ece02fa27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_45d4f5c2dd8adf117223af87babdf067717cdb5bf864a6d891c534ece02fa27b->leave($__internal_45d4f5c2dd8adf117223af87babdf067717cdb5bf864a6d891c534ece02fa27b_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_96774a960bebe554ffe7c248ccada5d4a03d46bfd3767f168e0e702f46cbc63d = $this->env->getExtension("native_profiler");
        $__internal_96774a960bebe554ffe7c248ccada5d4a03d46bfd3767f168e0e702f46cbc63d->enter($__internal_96774a960bebe554ffe7c248ccada5d4a03d46bfd3767f168e0e702f46cbc63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"content-container\">
\t<div class=\"content-bg\">
\t\t<div class=\"flightsManager-content-wraper\">
\t\t\t<div class=\"flightsManager-content-h\">
\t\t\t\t<div class=\"flightsManager-content\">
\t\t\t\t\t<div class=\"flightsManager-content-header\">
\t\t\t\t\t\t<!-- <div class=\"flightsManager-service\">
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
\t\t\t\t\t\t</div> -->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flightsManager-row\">
\t\t\t\t\t\t<div class=\"flightsManager-cell\">
\t\t\t\t\t\t\t<div class=\"airportselector-input-wrapper\">
\t\t\t\t\t\t\t\t<input id=\"departure_airportselector_input\" class=\"airportselector-input\" type=\"text\" value=\"\" placeholder=\"Abreiseort\" autocomplete=\"off\" spellcheck=\"false\" tabindex=\"1\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"airportselector-dialog\">
\t\t\t\t\t\t\t\t<div class=\"airportselector\">
\t\t\t\t\t\t\t\t\t<ul class=\"airportselector-items\">
\t\t\t\t\t\t\t\t\t\t<li class=\"airportselector-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"airportselector-item-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>¿</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"airportselector-item-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"airportselector-item-text-match\">Dus</span>seldorf&nbsp;-&nbsp;<span class=\"airportselector-item-text-italic\">Alle Flughäfen</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"airportselector-item-region\">Deutschland</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"airportselector-item-iata-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"airportselector-item-iata\">DUS</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"airportselector-subitems\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"airportselector-subitem-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"airportselector-subitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"airportselector-item-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span> ( </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"airportselector-item-text\">Schiphol<span class=\"airportselector-item-text-rel\">&nbsp;-&nbsp;Amsterdam</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"airportselector-item-region\">109 km bis Eindhoven</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"airportselector-item-iata-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"airportselector-item-iata\">AMS</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"airportselector-subitem-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"airportselector-subitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"airportselector-item-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span> ( </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"airportselector-item-text\">Schiphol<span class=\"airportselector-item-text-rel\">&nbsp;-&nbsp;Amsterdam</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"airportselector-item-region\">109 km bis Eindhoven</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"airportselector-item-iata-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"airportselector-item-iata\">AMS</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
<!-- Next\t\t\t\t\t\t\t\t\t\t<li class=\"airportselector-item\">
\t\t\t\t\t\t\t\t\t\t</li> -->
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"airportselector-bottom\">
\t\t\t\t\t\t\t\t\t\t<button id=\"flightsManager_close_button\" type=\"button\" class=\"closeBtn\">Schließen</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flightsManager-cell\">
\t\t\t\t\t\t\t<div class=\"airportselector-input-wrapper\">
\t\t\t\t\t\t\t\t<input style=\"\" class=\"airportselector-input\" type=\"text\" value=\"\" placeholder=\"Nach\" autocomplete=\"off\" spellcheck=\"false\" tabindex=\"2\" disabled>
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
        
        $__internal_96774a960bebe554ffe7c248ccada5d4a03d46bfd3767f168e0e702f46cbc63d->leave($__internal_96774a960bebe554ffe7c248ccada5d4a03d46bfd3767f168e0e702f46cbc63d_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd8e60db78d3e01865744232bd2da8bade990f4d6f3ae7e2f1723c052c219835 = $this->env->getExtension("native_profiler");
        $__internal_cd8e60db78d3e01865744232bd2da8bade990f4d6f3ae7e2f1723c052c219835->enter($__internal_cd8e60db78d3e01865744232bd2da8bade990f4d6f3ae7e2f1723c052c219835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 109
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
        
        $__internal_cd8e60db78d3e01865744232bd2da8bade990f4d6f3ae7e2f1723c052c219835->leave($__internal_cd8e60db78d3e01865744232bd2da8bade990f4d6f3ae7e2f1723c052c219835_prof);

    }

    public function getTemplateName()
    {
        return "@TravelsMain/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 109,  160 => 108,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TravelsMainBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Welcome!{% endblock title %}*/
/* */
/* {% block content %}*/
/* <div class="content-container">*/
/* 	<div class="content-bg">*/
/* 		<div class="flightsManager-content-wraper">*/
/* 			<div class="flightsManager-content-h">*/
/* 				<div class="flightsManager-content">*/
/* 					<div class="flightsManager-content-header">*/
/* 						<!-- <div class="flightsManager-service">*/
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
/* 						</div> -->*/
/* 					</div>*/
/* 					<div class="flightsManager-row">*/
/* 						<div class="flightsManager-cell">*/
/* 							<div class="airportselector-input-wrapper">*/
/* 								<input id="departure_airportselector_input" class="airportselector-input" type="text" value="" placeholder="Abreiseort" autocomplete="off" spellcheck="false" tabindex="1">*/
/* 							</div>*/
/* 							<div class="airportselector-dialog">*/
/* 								<div class="airportselector">*/
/* 									<ul class="airportselector-items">*/
/* 										<li class="airportselector-item">*/
/* 											<div class="airportselector-item-icon">*/
/* 												<span>¿</span>*/
/* 											</div>*/
/* 											<div class="airportselector-item-text">*/
/* 												<span class="airportselector-item-text-match">Dus</span>seldorf&nbsp;-&nbsp;<span class="airportselector-item-text-italic">Alle Flughäfen</span>*/
/* 												<div class="airportselector-item-region">Deutschland</div>*/
/* 											</div>*/
/* 											<div class="airportselector-item-iata-wrapper">*/
/* 												<span class="airportselector-item-iata">DUS</span>*/
/* 											</div>*/
/* 										</li>*/
/* 										<li class="airportselector-subitems">*/
/* 											<ul>*/
/* 												<li class="airportselector-subitem-wrapper">*/
/* 													<div class="airportselector-subitem">*/
/* 														<div class="airportselector-item-icon">*/
/* 															<span> ( </span>*/
/* 														</div>*/
/* 														<div class="airportselector-item-text">Schiphol<span class="airportselector-item-text-rel">&nbsp;-&nbsp;Amsterdam</span>*/
/* 															<div class="airportselector-item-region">109 km bis Eindhoven</div>*/
/* 														</div>*/
/* 														<div class="airportselector-item-iata-wrapper">*/
/* 															<span class="airportselector-item-iata">AMS</span>*/
/* 														</div>*/
/* 													</div>*/
/* 												</li>*/
/* 												<li class="airportselector-subitem-wrapper">*/
/* 													<div class="airportselector-subitem">*/
/* 														<div class="airportselector-item-icon">*/
/* 															<span> ( </span>*/
/* 														</div>*/
/* 														<div class="airportselector-item-text">Schiphol<span class="airportselector-item-text-rel">&nbsp;-&nbsp;Amsterdam</span>*/
/* 															<div class="airportselector-item-region">109 km bis Eindhoven</div>*/
/* 														</div>*/
/* 														<div class="airportselector-item-iata-wrapper">*/
/* 															<span class="airportselector-item-iata">AMS</span>*/
/* 														</div>*/
/* 													</div>*/
/* 												</li>*/
/* 											</ul>*/
/* 										</li>*/
/* <!-- Next										<li class="airportselector-item">*/
/* 										</li> -->*/
/* 									</ul>*/
/* 									<div class="airportselector-bottom">*/
/* 										<button id="flightsManager_close_button" type="button" class="closeBtn">Schließen</button>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="flightsManager-cell">*/
/* 							<div class="airportselector-input-wrapper">*/
/* 								<input style="" class="airportselector-input" type="text" value="" placeholder="Nach" autocomplete="off" spellcheck="false" tabindex="2" disabled>*/
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
