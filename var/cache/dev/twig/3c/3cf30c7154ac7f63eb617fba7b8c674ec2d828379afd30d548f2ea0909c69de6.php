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
        $__internal_23ff66f458477c2815b8684dfff9d7558bcdbaf7f4c8fd255e88e57c4ec0ca50 = $this->env->getExtension("native_profiler");
        $__internal_23ff66f458477c2815b8684dfff9d7558bcdbaf7f4c8fd255e88e57c4ec0ca50->enter($__internal_23ff66f458477c2815b8684dfff9d7558bcdbaf7f4c8fd255e88e57c4ec0ca50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TravelsMain/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23ff66f458477c2815b8684dfff9d7558bcdbaf7f4c8fd255e88e57c4ec0ca50->leave($__internal_23ff66f458477c2815b8684dfff9d7558bcdbaf7f4c8fd255e88e57c4ec0ca50_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_443217075492664141d27a190b5d5909c6a423d50604172a10ba4fb20ce9255d = $this->env->getExtension("native_profiler");
        $__internal_443217075492664141d27a190b5d5909c6a423d50604172a10ba4fb20ce9255d->enter($__internal_443217075492664141d27a190b5d5909c6a423d50604172a10ba4fb20ce9255d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_443217075492664141d27a190b5d5909c6a423d50604172a10ba4fb20ce9255d->leave($__internal_443217075492664141d27a190b5d5909c6a423d50604172a10ba4fb20ce9255d_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_836cd65de10e160c29e916570f06684f79b0f7475e9d2dbe3dafae8001552ea5 = $this->env->getExtension("native_profiler");
        $__internal_836cd65de10e160c29e916570f06684f79b0f7475e9d2dbe3dafae8001552ea5->enter($__internal_836cd65de10e160c29e916570f06684f79b0f7475e9d2dbe3dafae8001552ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_836cd65de10e160c29e916570f06684f79b0f7475e9d2dbe3dafae8001552ea5->leave($__internal_836cd65de10e160c29e916570f06684f79b0f7475e9d2dbe3dafae8001552ea5_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_80008a279ba73cbe5f334bcb1bef6a5b7cfdeabd1a953640b67ec4f99d984ef0 = $this->env->getExtension("native_profiler");
        $__internal_80008a279ba73cbe5f334bcb1bef6a5b7cfdeabd1a953640b67ec4f99d984ef0->enter($__internal_80008a279ba73cbe5f334bcb1bef6a5b7cfdeabd1a953640b67ec4f99d984ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/js/lib/require.js"), "html", null, true);
        echo "\" async=\"\" data-main=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/js/init"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_80008a279ba73cbe5f334bcb1bef6a5b7cfdeabd1a953640b67ec4f99d984ef0->leave($__internal_80008a279ba73cbe5f334bcb1bef6a5b7cfdeabd1a953640b67ec4f99d984ef0_prof);

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
