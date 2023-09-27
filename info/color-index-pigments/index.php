<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Color index / Pigments");
$APPLICATION->SetTitle("Color index / Pigments");
?><section class="page-section club-intro" style="padding: 0 0 30px 0; border-bottom: 1px solid #e5e5e5;">
<div class="container">
	<div class="section-inner">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"artists_club_menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"COMPONENT_TEMPLATE" => "artists_club_menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top_submenu",
		"USE_EXT" => "N"
	)
);?>
	</div>
</div>
 </section> <section class="page-section">
<div class="container">
	<div class="section-inner">
		<div class="section-title about-title">
			<h1><?=$APPLICATION->ShowTitle(false);?></h1>
		</div>
		<div class="about-text respond">
			<div>
				 Color Index is a designation of the pigment composition of artistic paints according to the international standardized system of chemical classes of pigments (Colour Index International). Includes the common name of the pigment group and the color index number.
			</div>
 <br>
			<div>
				 Example,&nbsp;<b>P.Y.43 77492</b>:&nbsp;
			</div>
 <br>
			<table>
			<tbody>
			<tr>
				<td>
 <b>&nbsp;P</b>
				</td>
				<td>
					 Pigment
				</td>
				<td rowspan="3" style="vertical-align: top;">
 <b>77492</b>&nbsp; &nbsp; The chemical composition of the pigment &nbsp;- natural iron oxide (Natural Iron Oxide) &nbsp;- inorganic&nbsp;pigment
				</td>
			</tr>
			<tr>
				<td colspan="1">
 <b>&nbsp;Y</b>
				</td>
				<td colspan="1">
					 Yellow
				</td>
			</tr>
			<tr>
				<td colspan="1">
 <b>43&nbsp; &nbsp; &nbsp; &nbsp;</b>
				</td>
				<td colspan="1">
					 Position of pigment 43 in the list of yellow pigments
				</td>
			</tr>
			</tbody>
			</table>
 <br>
			<p>
			</p>
			<p>
			</p>
		</div>
		 <style>.pad td {
  padding-left: 20px;
  padding-right: 20px;
}</style>
		<table class="pad" border="1px" cellspacing="0" cellpadding="5px" style="width: 100%;">
		<tbody>
		<tr>
			<td style="background: #ccc;" align="center">
				 &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
			</td>
			<td style="background: #ccc;" align="center">
 <b>COLOR INDEX </b>
			</td>
			<td style="background: #ccc;" align="center">
 <b>
				PIGMENT NAME&nbsp; </b>
			</td>
			<td style="background: #ccc;" align="center">
 <b>ORGANIC </b>
			</td>
			<td style="background: #ccc;" align="center">
 <b>INORGANIC </b>
			</td>
			<td style="background: #ccc;" align="center">
 <b>
				CONSTITUTION NUMBER, C.I.</b>
			</td>
		</tr>
		<tr>
			<td rowspan="2">
 <b>WHITE<br>
 </b><b>PIGMENTS</b>
			</td>
			<td>
 <b>P.W.4</b>
			</td>
			<td>
				 Zinc Oxide
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 71947
			</td>
		</tr>
		<tr>
			<td>
 <b>P.W.6</b>
			</td>
			<td>
				 Titanium dioxide
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77801
			</td>
		</tr>
		<tr>
			<td rowspan="14">
 <b>YELLOW<br>
 </b><b>PIGMENTS</b>
			</td>
			<td>
 <b>P.Y.1</b>
			</td>
			<td>
				 Arylamide Yellow
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 11680
			</td>
		</tr>
		<tr>
			<td>
 <b>P.Y.2</b>
			</td>
			<td>
				 Arylamide Yellow
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 11730
			</td>
		</tr>
		<tr>
			<td>
 <b>P.Y.3</b>
			</td>
			<td>
				 Hansa Yellow 10G
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 11710
			</td>
		</tr>
		<tr>
			<td>
 <b>P.Y.32</b>
			</td>
			<td>
				 Strontium Chromate
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77839
			</td>
		</tr>
		<tr>
			<td>
 <b>P.Y.35</b>
			</td>
			<td>
				 Cadmium zink sulphide
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77205
			</td>
		</tr>
		<tr>
			<td>
 <b>P.Y.37</b>
			</td>
			<td>
				 Cadmium sulphide
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 7199
			</td>
		</tr>
		<tr>
			<td>
 <b>P.Y.42</b>
			</td>
			<td>
				 Sinthetic iron oxide
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77492
			</td>
		</tr>
		<tr>
			<td>
 <b>P.Y.43</b>
			</td>
			<td>
				 Natural Iron Oxide
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77492
			</td>
		</tr>
		<tr>
			<td>
 <b>P.Y.83</b>
			</td>
			<td>
				 Diarylide Yellow
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp; &nbsp; &nbsp;
			</td>
			<td>
				 -
			</td>
		</tr>
		<tr>
			<td>
 <b>P.Y.129</b>
			</td>
			<td>
				 Azomethine copper complex
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 48042
			</td>
		</tr>
		<tr>
			<td>
 <b>P.Y.150</b>
			</td>
			<td>
				 Nickel Azo
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 12764
			</td>
		</tr>
		<tr>
			<td>
 <b>P.Y.151</b>
			</td>
			<td>
				 Benzimidazolone
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 13980
			</td>
		</tr>
		<tr>
			<td>
 <b>P.Y.154</b>
			</td>
			<td>
				 Benzimidazolone
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 11781
			</td>
		</tr>
		<tr>
			<td>
 <b>P.Y.216</b>
			</td>
			<td>
				 Solaplex Yellow
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 -
			</td>
		</tr>
		<tr>
			<td rowspan="7">
 <b>ORANGE<br>
 </b><b>PIGMENTS</b>
			</td>
			<td>
 <b>P.O.13</b>
			</td>
			<td>
				 Disazopyrazolone
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 2110
			</td>
		</tr>
		<tr>
			<td>
 <b>P.O.17</b>
			</td>
			<td>
				 Monoazo
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 15510
			</td>
		</tr>
		<tr>
			<td>
 <b>P.O.20</b>
			</td>
			<td>
				 Cadmium sulpho-selenide
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 77202
			</td>
		</tr>
		<tr>
			<td>
 <b>P.O.36</b>
			</td>
			<td>
				 Benzimidazolone
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 11780
			</td>
		</tr>
		<tr>
			<td>
 <b>P.O.62</b>
			</td>
			<td>
				 Benzimidazolone
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 11775
			</td>
		</tr>
		<tr>
			<td>
 <b>P.O.62</b>
			</td>
			<td>
				 Benzimidazolone
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 12760
			</td>
		</tr>
		<tr>
			<td>
 <b>P.O.73</b>
			</td>
			<td>
				 Pyrrol
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 561170
			</td>
		</tr>
		<tr>
			<td rowspan="25">
 <b>RED<br>
 </b><b>PIGMENTS</b>
			</td>
			<td>
 <b>P.R.2</b>
			</td>
			<td>
				 Naphthol Red
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 12310
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.4</b>
			</td>
			<td>
				 Clorinatide para red
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 12085
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.12</b>
			</td>
			<td>
				 Arylide Maroon
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 12385
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.19</b>
			</td>
			<td>
				 Arylide Maroon
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 -
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.63:1</b>
			</td>
			<td>
				 Lithol Bordeaux
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 15880:1
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.81:1</b>
			</td>
			<td>
				 Rhodamine red
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 451603
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.81</b>
			</td>
			<td>
				 Rhodamine red
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 4516031
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.101</b>
			</td>
			<td>
				 Synthetic Iron Oxide
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77491
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.101tr</b>
			</td>
			<td>
				 Synthetic Iron Oxide tr.
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77491
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.102</b>
			</td>
			<td>
				 Natural Iron Oxide
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77491
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.108</b>
			</td>
			<td>
				 Cadmium sulpho-selenide
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77202
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.112</b>
			</td>
			<td>
				 Naphthol AS-D
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 12370
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.122</b>
			</td>
			<td>
				 Quinacridone Magenta
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 73015
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.122</b> <b>fluor.</b>
			</td>
			<td>
				 Quinacridone Magenta fluor.
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 7015
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.46</b>
			</td>
			<td>
				 Naphthol Red AS
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 12485
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.170</b>
			</td>
			<td>
				 Naphthol Red
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 12475
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.170:1</b>
			</td>
			<td>
				 Naphthol Red
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 ......
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.179</b>
			</td>
			<td>
				 Perylene
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 71130
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.187</b>
			</td>
			<td>
				 Naphthol Red
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 12486
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.188</b>
			</td>
			<td>
				 BON Arylamide (Naphthol AS)
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 12467
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.207</b>
			</td>
			<td>
				 Quinacridone
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 73906
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.208</b>
			</td>
			<td>
				 Benzimidazolone
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 12514
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.242</b>
			</td>
			<td>
				 Disazo Condensation Scarlet
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 20067
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.259</b>
			</td>
			<td>
				 Polysulfide of sodium, potassium,<br>
				 lithium, or silver and aluminosilicate
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77007
			</td>
		</tr>
		<tr>
			<td>
 <b>P.R.264</b>
			</td>
			<td>
				 Pyrrole
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 561300
			</td>
		</tr>
		<tr>
			<td rowspan="9">
 <b>VIOLET<br>
 </b><b>PIGMENTS</b>
			</td>
			<td>
 <b>P.V.2</b>
			</td>
			<td>
				 PTMA toner
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 45175:
			</td>
		</tr>
		<tr>
			<td>
 <b>P.V3</b>
			</td>
			<td>
				 Triarylcarbonium
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 42535:2
			</td>
		</tr>
		<tr>
			<td>
 <b>P.V.14</b>
			</td>
			<td>
				 Cobalt phosphate
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77360
			</td>
		</tr>
		<tr>
			<td>
 <b>P.V.15</b>
			</td>
			<td>
				 Ultramarine Violet
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 77007
			</td>
		</tr>
		<tr>
			<td>
 <b>P.V.19</b>
			</td>
			<td>
				 Quinacridone
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 73900
			</td>
		</tr>
		<tr>
			<td>
 <b>P.V.16</b>
			</td>
			<td>
				 Manganese ammonium pyrophosphate
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77742
			</td>
		</tr>
		<tr>
			<td>
 <b>P.V.23</b>
			</td>
			<td>
				 Dioxazine Violet
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 51319
			</td>
		</tr>
		<tr>
			<td>
 <b>P.V.29</b>
			</td>
			<td>
				 Perylene Violet
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 7129
			</td>
		</tr>
		<tr>
			<td>
 <b>P.V.55</b>
			</td>
			<td>
				 Quinacridone Purple
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 -
			</td>
		</tr>
		<tr>
			<td rowspan="13">
 <b>BLUE<br>
 </b><b>PIGMENTS</b>
			</td>
			<td>
 <b>P.B.1</b>
			</td>
			<td>
				 PTMA toner
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 42595:2
			</td>
		</tr>
		<tr>
			<td>
 <b>P.B.1</b>
			</td>
			<td>
				 Copper phthalocyanine
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 74160
			</td>
		</tr>
		<tr>
			<td>
 <b>P.B.15</b>
			</td>
			<td>
				 Copper phthalocyanine
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 74160
			</td>
		</tr>
		<tr>
			<td>
 <b>P.B.15:1</b>
			</td>
			<td>
				 Copper phthalocyanine
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 74160
			</td>
		</tr>
		<tr>
			<td>
 <b>P.B.15:3</b>
			</td>
			<td>
				 Copper phthalocyanine
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 74160
			</td>
		</tr>
		<tr>
			<td>
 <b>P.B.15:6</b>
			</td>
			<td>
				 Epsilon Copper Phthalocyanine
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 74160
			</td>
		</tr>
		<tr>
			<td>
 <b>P.B.27</b>
			</td>
			<td>
				 Alkali ferriferrocyanide
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77510
			</td>
		</tr>
		<tr>
			<td>
 <b>P.B.28</b>
			</td>
			<td>
				 Cobalt aluminate
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77346
			</td>
		</tr>
		<tr>
			<td>
 <b>P.B.29</b>
			</td>
			<td>
				 ComRISA Seelam gumine-siicate
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77007
			</td>
		</tr>
		<tr>
			<td>
 <b>P.B.29</b>
			</td>
			<td>
				 Cobalt stannate
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77368
			</td>
		</tr>
		<tr>
			<td>
 <b>P.B.36</b>
			</td>
			<td>
				 Cobalt Chromite
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77343
			</td>
		</tr>
		<tr>
			<td>
 <b>P.B.60</b>
			</td>
			<td>
				 Indanthrone
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 69800
			</td>
		</tr>
		<tr>
			<td>
 <b>P.B.74</b>
			</td>
			<td>
				 Cobalt Zinc Silicate Blue
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77366
			</td>
		</tr>
		<tr>
			<td rowspan="7" colspan="1">
 <b>GREEN<br>
 </b><b>PIGMENTS</b>
			</td>
			<td rowspan="1">
 <b>P.G.7</b>
			</td>
			<td>
				 Chlorinated copper phthalocyanine
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 74260
			</td>
		</tr>
		<tr>
			<td>
 <b>P.G.8</b>
			</td>
			<td>
				 Naphthol Green
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 10006
			</td>
		</tr>
		<tr>
			<td>
 <b>P.G.17</b>
			</td>
			<td>
				 Chrome Oxide
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77288
			</td>
		</tr>
		<tr>
			<td>
 <b>P.G.19</b>
			</td>
			<td>
				 Cobalt Green Pale
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 77335
			</td>
		</tr>
		<tr>
			<td>
 <b>P.G.23</b>
			</td>
			<td>
				 Natural Earth
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77009
			</td>
		</tr>
		<tr>
			<td>
 <b>P.G.36</b>
			</td>
			<td>
				 Brominated copper phthalocyanine
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 74265
			</td>
		</tr>
		<tr>
			<td>
 <b>P.G.50</b>
			</td>
			<td>
				 Cobalt Titanate
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77377
			</td>
		</tr>
		<tr>
			<td rowspan="3">
 <b>BROWN<br>
 </b><b>PIGMENTS</b>
			</td>
			<td>
 <b>P.Br.6</b>
			</td>
			<td>
				 lron Oxide Hydroxide
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77491
			</td>
		</tr>
		<tr>
			<td>
 <b>P.Br.6tr.</b>
			</td>
			<td>
				 Iron Oxide Hydroxide tr.
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 774
			</td>
		</tr>
		<tr>
			<td>
 <b>P.Br.7</b>
			</td>
			<td>
				 Natural iron oxide
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 7741
			</td>
		</tr>
		<tr>
			<td rowspan="4">
 <b>BLACK<br>
 </b><b>PIGMENTS</b>
			</td>
			<td>
 <b>P.Bk.1</b>
			</td>
			<td>
				 Aniline Black
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 50440
			</td>
		</tr>
		<tr>
			<td>
 <b>P.Bk.7</b>
			</td>
			<td>
				 Lamp black
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 74160
			</td>
		</tr>
		<tr>
			<td>
 <b>P.Bk.8</b>
			</td>
			<td>
				 Carbon Black
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 77268
			</td>
		</tr>
		<tr>
			<td>
 <b>P.Bk.11</b>
			</td>
			<td>
				 Black Iron Oxide
			</td>
			<td>
				 &nbsp;
			</td>
			<td align="center">
				 <b>x</b>
			</td>
			<td>
				 77489
			</td>
		</tr>
		<tr>
			<td rowspan="7">
 <b>METALLIC<br>
 </b><b>PIGMENTS</b>
			</td>
			<td>
				 -
			</td>
			<td>
				 Mica coated iron oxide
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 -
			</td>
		</tr>
		<tr>
			<td>
				 -
			</td>
			<td>
				 Mica coated iron oxide
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 77400
			</td>
		</tr>
		<tr>
			<td>
				 -
			</td>
			<td>
				 Mica coated iron oxide
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 77480
			</td>
		</tr>
		<tr>
			<td>
				 -
			</td>
			<td>
				 Mica coated titanium dioxide/iron oxide
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 77480
			</td>
		</tr>
		<tr>
			<td>
				 -
			</td>
			<td>
				 Mica coated iron oxide
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 77400
			</td>
		</tr>
		<tr>
			<td>
				 -
			</td>
			<td>
				 Mica coated titanium dioxide
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 -
			</td>
		</tr>
		<tr>
			<td>
				 -
			</td>
			<td>
				 Mica coated titanium dioxide
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 &nbsp;
			</td>
			<td>
				 -
			</td>
		</tr>
		</tbody>
		</table>
	</div>
</div>
 </section><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>