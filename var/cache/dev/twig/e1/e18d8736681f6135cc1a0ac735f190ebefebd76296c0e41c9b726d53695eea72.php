<?php

/* TravelsMainBundle::index.html.twig */
class __TwigTemplate_26f40ba1a333715e77beec7ab294d7b22a964e13a138785ae881ef724b96a6cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TravelsMainBundle::layout.html.twig", "TravelsMainBundle::index.html.twig", 1);
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
        $__internal_99cb922e2654f8d64149640709879788a7936154dace10eb0812904727b2df73 = $this->env->getExtension("native_profiler");
        $__internal_99cb922e2654f8d64149640709879788a7936154dace10eb0812904727b2df73->enter($__internal_99cb922e2654f8d64149640709879788a7936154dace10eb0812904727b2df73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TravelsMainBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99cb922e2654f8d64149640709879788a7936154dace10eb0812904727b2df73->leave($__internal_99cb922e2654f8d64149640709879788a7936154dace10eb0812904727b2df73_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ffca26d5fc60b10513954b33221df90ea2332e47db0e708bfb0b4a1a0d562a6 = $this->env->getExtension("native_profiler");
        $__internal_0ffca26d5fc60b10513954b33221df90ea2332e47db0e708bfb0b4a1a0d562a6->enter($__internal_0ffca26d5fc60b10513954b33221df90ea2332e47db0e708bfb0b4a1a0d562a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0ffca26d5fc60b10513954b33221df90ea2332e47db0e708bfb0b4a1a0d562a6->leave($__internal_0ffca26d5fc60b10513954b33221df90ea2332e47db0e708bfb0b4a1a0d562a6_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_bcf92c41bd430d5939e95c569bc7995c44b90f6bfbfcbd037dffdadcabe2c59a = $this->env->getExtension("native_profiler");
        $__internal_bcf92c41bd430d5939e95c569bc7995c44b90f6bfbfcbd037dffdadcabe2c59a->enter($__internal_bcf92c41bd430d5939e95c569bc7995c44b90f6bfbfcbd037dffdadcabe2c59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"content-container\">
\t<div id=\"content_bg\" class=\"content-bg\">
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
        
        $__internal_bcf92c41bd430d5939e95c569bc7995c44b90f6bfbfcbd037dffdadcabe2c59a->leave($__internal_bcf92c41bd430d5939e95c569bc7995c44b90f6bfbfcbd037dffdadcabe2c59a_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d37a9f749746d4c0efd30edbc53d2c68b8947bd83a943f1d7d499ff0584ecb0 = $this->env->getExtension("native_profiler");
        $__internal_4d37a9f749746d4c0efd30edbc53d2c68b8947bd83a943f1d7d499ff0584ecb0->enter($__internal_4d37a9f749746d4c0efd30edbc53d2c68b8947bd83a943f1d7d499ff0584ecb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 109
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/js/lib/require.js"), "html", null, true);
        echo "\" async=\"\" data-main=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/js/init"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_4d37a9f749746d4c0efd30edbc53d2c68b8947bd83a943f1d7d499ff0584ecb0->leave($__internal_4d37a9f749746d4c0efd30edbc53d2c68b8947bd83a943f1d7d499ff0584ecb0_prof);

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
        return array (  166 => 109,  160 => 108,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TravelsMainBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Welcome!{% endblock title %}*/
/* */
/* {% block content %}*/
/* <div class="content-container">*/
/* 	<div id="content_bg" class="content-bg">*/
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
/* <script src="{{ asset('bundles/travelsmain/js/lib/require.js') }}" async="" data-main="{{ asset('bundles/travelsmain/js/init') }}"></script>*/
/* {% endblock javascripts %}*/