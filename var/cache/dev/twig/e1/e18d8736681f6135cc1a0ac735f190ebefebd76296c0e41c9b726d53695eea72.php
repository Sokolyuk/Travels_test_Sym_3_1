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
        $__internal_6d40ca9b163e8632f8dd2f3eb4607e308560e37791d4033bc61423e9d361c0a1 = $this->env->getExtension("native_profiler");
        $__internal_6d40ca9b163e8632f8dd2f3eb4607e308560e37791d4033bc61423e9d361c0a1->enter($__internal_6d40ca9b163e8632f8dd2f3eb4607e308560e37791d4033bc61423e9d361c0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TravelsMainBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d40ca9b163e8632f8dd2f3eb4607e308560e37791d4033bc61423e9d361c0a1->leave($__internal_6d40ca9b163e8632f8dd2f3eb4607e308560e37791d4033bc61423e9d361c0a1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb022611dd905dede0fe99666b6b52c27f1047e8a0548b506c9e43b49c657309 = $this->env->getExtension("native_profiler");
        $__internal_cb022611dd905dede0fe99666b6b52c27f1047e8a0548b506c9e43b49c657309->enter($__internal_cb022611dd905dede0fe99666b6b52c27f1047e8a0548b506c9e43b49c657309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cb022611dd905dede0fe99666b6b52c27f1047e8a0548b506c9e43b49c657309->leave($__internal_cb022611dd905dede0fe99666b6b52c27f1047e8a0548b506c9e43b49c657309_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_0e4f9a6511d8dc1416623848552228a62a0b8c9080ff2ee6f8ee09f64c5d883c = $this->env->getExtension("native_profiler");
        $__internal_0e4f9a6511d8dc1416623848552228a62a0b8c9080ff2ee6f8ee09f64c5d883c->enter($__internal_0e4f9a6511d8dc1416623848552228a62a0b8c9080ff2ee6f8ee09f64c5d883c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"content-container\">
\t<div id=\"content_bg_img_container\" class=\"content-bg-img-container\">
\t\t<div id=\"content_bg_img_1\" class=\"content-bg-img\"></div>
\t\t<div id=\"content_bg_img_2\" class=\"content-bg-img\"></div>
\t\t<div id=\"content_bg_img_3\" class=\"content-bg-img\"></div>
\t</div>
\t<div id=\"content_bg_pall\" class=\"content-bg-pall\">
\t\t<div class=\"flightsManager-content-wraper\">
\t\t\t<div class=\"flightsManager-content-h\">
\t\t\t\t<div class=\"flightsManager-content\">
\t\t\t\t\t<div class=\"flightsManager-content-header\">
";
        // line 39
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flightsManager-row\">
\t\t\t\t\t\t<div class=\"flightsManager-cell\">
\t\t\t\t\t\t\t<div class=\"airportselector-input-wrapper\">
\t\t\t\t\t\t\t\t<input id=\"departure_airportselector_input\" class=\"airportselector-input\" type=\"text\" value=\"\" placeholder=\"Abreiseort\" autocomplete=\"off\" spellcheck=\"false\" tabindex=\"1\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"airportselector_dialog\" class=\"airportselector-dialog\">
\t\t\t\t\t\t\t\t<div class=\"airportselector\">
\t\t\t\t\t\t\t\t\t<ul id=\"airportselector_items\" class=\"airportselector-items\">
";
        // line 92
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"airportselector-bottom\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"closeBtn\">Schließen</button>
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
        
        $__internal_0e4f9a6511d8dc1416623848552228a62a0b8c9080ff2ee6f8ee09f64c5d883c->leave($__internal_0e4f9a6511d8dc1416623848552228a62a0b8c9080ff2ee6f8ee09f64c5d883c_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8348c1a36c375a269a172b6ff569f86837ab52e4aa9a3cc2b367304297829d0 = $this->env->getExtension("native_profiler");
        $__internal_d8348c1a36c375a269a172b6ff569f86837ab52e4aa9a3cc2b367304297829d0->enter($__internal_d8348c1a36c375a269a172b6ff569f86837ab52e4aa9a3cc2b367304297829d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/js/lib/require.js"), "html", null, true);
        echo "\" async=\"\" data-main=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/js/init"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d8348c1a36c375a269a172b6ff569f86837ab52e4aa9a3cc2b367304297829d0->leave($__internal_d8348c1a36c375a269a172b6ff569f86837ab52e4aa9a3cc2b367304297829d0_prof);

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
        return array (  111 => 116,  105 => 115,  78 => 92,  67 => 39,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TravelsMainBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Welcome!{% endblock title %}*/
/* */
/* {% block content %}*/
/* <div class="content-container">*/
/* 	<div id="content_bg_img_container" class="content-bg-img-container">*/
/* 		<div id="content_bg_img_1" class="content-bg-img"></div>*/
/* 		<div id="content_bg_img_2" class="content-bg-img"></div>*/
/* 		<div id="content_bg_img_3" class="content-bg-img"></div>*/
/* 	</div>*/
/* 	<div id="content_bg_pall" class="content-bg-pall">*/
/* 		<div class="flightsManager-content-wraper">*/
/* 			<div class="flightsManager-content-h">*/
/* 				<div class="flightsManager-content">*/
/* 					<div class="flightsManager-content-header">*/
/* {#*/
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
/* #}*/
/* 					</div>*/
/* 					<div class="flightsManager-row">*/
/* 						<div class="flightsManager-cell">*/
/* 							<div class="airportselector-input-wrapper">*/
/* 								<input id="departure_airportselector_input" class="airportselector-input" type="text" value="" placeholder="Abreiseort" autocomplete="off" spellcheck="false" tabindex="1">*/
/* 							</div>*/
/* 							<div id="airportselector_dialog" class="airportselector-dialog">*/
/* 								<div class="airportselector">*/
/* 									<ul id="airportselector_items" class="airportselector-items">*/
/* {#*/
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
/* #}*/
/* 									</ul>*/
/* 									<div class="airportselector-bottom">*/
/* 										<button type="button" class="closeBtn">Schließen</button>*/
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
