<?php
/* Template Name: 金トップページ */
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php get_template_part( 'head2' ); ?>
	<!-- local css -->
	<link rel="stylesheet" type="text/css" href="../css/app.min.css">
	<link rel="stylesheet" type="text/css" href="../css/gold.min.css">
	<link rel="stylesheet" type="text/css" href="../css/result_child.min.css">
	<link rel="stylesheet" type="text/css" href="../css/gold_souba_10years.min.css">
	<link rel="stylesheet" href="../css/renew202404.css">
	<link rel="stylesheet" type="text/css" href="../css/shared.css">
	<link rel="stylesheet" type="text/css" href="../css/gold.css">
	<script src="../js/jquery-3.6.3.min.js"></script>
	<title>金・貴金属の高価買取 | 金・貴金属買取専門店のおたからや</title>

	<style>
		.flex__content .content__item {
			margin-bottom: 2em;
		}

		.flex__content .content__item .content--name {
			margin-top: 0.5em;
		}
	</style>

</head>

<?php wp_head(); ?>

<body id="gold">
	<?php get_header( 'common' ); ?>
	<div id="topic__path" class="topic__path">
		<ol class="topic__path--list">
			<li class="topic__path--item" itemprop="itemListElement" itemscope=""
				itemtype="https://schema.org/ListItem">
				<a itemprop="item" href="../">
					<span itemprop="name">ซื้อคืนร้านเฉพาะ Otakaraya TOP</span>
				</a>
				<meta itemprop="position" content="1">
			</li>
			<li class="topic__path--item"><span>การซื้อทองคำ</span></li>
		</ol>
	</div>

	<div class="fv_img_wrap">
		<img class="is-pc" src="../images/gold/gold_TOP_PC.webp" alt="">
		<img class="is-sp" src="../images/gold/gold_TOP_SP.webp" alt="">
		<?php include __DIR__ . '/template-parts/fv_obi.php'; ?>
	</div>


	<?php get_template_part( 'template-parts/license' ); ?>
	<?php get_template_part( 'template-parts/shop-info' ); ?>

	<div class="renew_2024_fv_salespoint is-sp">
		<!--     ▼▼▼ top_h2_text▼▼▼     -->
		<h2 class="titleHeading top_h2_text">
			หากต้องการซื้อและประเมินทองคำ ให้ไปที่ Otakaraya บริษัทจัดซื้อที่มีมูลค่าสูง
		</h2>
		<!--     ▲▲▲ top_h2_text▲▲▲     -->
	</div>
	<!-- フッター固定ボタン -->
	<div class="renew_2024_fv_lead is-sp">
		หากต้องการซื้อและประเมินทองคำ ให้ไปที่ Otakaraya บริษัทจัดซื้อที่มีมูลค่าสูง<br>
		Otakaraya มีร้านค้ามากกว่า 1,200 แห่งทั่วประเทศ และที่ร้านค้าเหล่านี้ ผู้ประเมินราคามืออาชีพที่มีประสบการณ์จะเสนอราคาซื้อที่คุณสามารถยอมรับได้
	</div>
	<main class="contents">
		<article class="contents__left">
			<!--     ▼▼▼おたからやセールスポイント▼▼▼     -->
			<section>
				<!--     ▼▼▼ top_h2_text▼▼▼     -->
				<div class="is-pc">
					<h2 class="titleHeading top_h2_text">
						หากคุณต้องการซื้อและประเมินทองคำ ให้ไปที่ Otakara-ya สถานที่ที่คุณสามารถซื้อทองคำได้ในราคาสูง!
					</h2>
				</div>
				<!--     ▲▲▲ top_h2_text▲▲▲     -->

				<div class="titleMain--lead is-pc">
					<p style="text-align: center; margin: 1rem;">
						หากต้องการซื้อและประเมินทองคำ ให้ไปที่ Otakaraya บริษัทจัดซื้อที่มีมูลค่าสูง<br>
						Otakaraya มีร้านค้ามากกว่า 1,200 แห่งทั่วประเทศ และที่ร้านค้าเหล่านี้ ผู้ประเมินราคามืออาชีพที่มีประสบการณ์จะเสนอราคาซื้อที่คุณสามารถยอมรับได้
					</p>
				</div>
			</section>
			<!--     ▲▲▲おたからやがセールスポイント▲▲▲     -->
			<p></p>
			<!-- バナー付CTA -->
			<section class="simple_cta_top">
				<?php get_template_part( 'template-parts/assessment_cta' ); ?>
				<!-- ビデオ通話査定CTA -->
			</section>

			<?php get_template_part( 'template-parts/purchase_market_reference' ); ?>
			<?php get_template_part( 'template-parts/calculation_tool' ); ?>
			<section></section>
			<?php /* get_template_part('template-parts/purchase_market_graph'); */ ?>
			<section class="rateSection">
				<div class="is-sp">
					<h3 class="renew_202404_calctool_title">
						กราฟแนวโน้มราคาซื้อทองคำ
						<img class="renew_2024_market_update_title graph_title_image"
							src="../images/gold/graph_title_image.png">
					</h3>
					<div class="renew_202404_graph_title_lead">
						หน้านี้จะแสดงกราฟราคาตลาดทองคำ (ต่อ 1 กรัม) ในแต่ละช่วงเวลา<br>
						นอกจากราคาตลาดในปัจจุบันแล้ว โปรดดูความเคลื่อนไหวในช่วง 6 เดือนหรือ 1 ปีด้วย
					</div>
				</div>
				<div class="shop__detail--rateGraph">
					<h3 class="titleSub is-pc">กราฟแนวโน้มราคาซื้อทองคำ</h3>
					<p class="is-pc">
						หน้านี้จะแสดงกราฟราคาตลาดทองคำ (ต่อ 1 กรัม) ในแต่ละช่วงเวลา<br>
						นอกจากราคาตลาดในปัจจุบันแล้ว โปรดดูความเคลื่อนไหวในช่วง 6 เดือนหรือ 1 ปีด้วย
					</p>
					<div class="rateGraph__wrap">
						<div class="rateGraph__inner--select form__wrap">
							<div class="price-chart-header form__liner">
								<select id="graph-select" class="form-control my-5">
									<option value="">เลือกประเภท</option>
									<optgroup label="gold">
										<option value="k24_ingot" selected="selected">ทองคำแท่ง</option>
										<option value="k24">K24</option>
										<option value="k23">K23</option>
										<option value="k22">K22</option>
										<option value="k21.6">K21.6</option>
										<option value="k20">K20</option>
										<option value="k18">K18</option>
										<option value="k14">K14</option>
										<option value="k12">K12</option>
										<option value="k10">K10</option>
										<option value="k9">K9</option>
										<option value="k8">K8</option>
										<option value="k5">K5</option>
									</optgroup>
									<optgroup label="platinum">
										<option value="pt_ingot">Ingots（platinum）</option>
										<option value="pt1000">Pt1000</option>
										<option value="pt950">Pt950</option>
										<option value="pt900">Pt900</option>
										<option value="pt850">Pt850</option>
										<option value="pt650">Pt650</option>
										<option value="pt500">Pt500</option>
										<option value="pt100">Pt100</option>
									</optgroup>
									<optgroup label="silver">
										<option value="sv_ingot">Ingots（silver）</option>
										<option value="sv1000">Sv1000</option>
										<option value="sv925">Sv925</option>
									</optgroup>
									<optgroup label="palladium">
										<option value="pd_ingot">Ingots（palladium）</option>
									</optgroup>
								</select>
							</div>
							<p id="price-chart-legend" class="chart-legend">ทองคำแท่ง (S$/g)</p>
						</div>
						<div class="flex flex--hasItem6">
							<ul class="flex__tab">
								<li class="tab__item active"><a>1 เดือน</a></li>
								<li class="tab__item "><a>3 เดือน</a></li>
								<li class="tab__item "><a>6 เดือน</a></li>
								<li class="tab__item "><a>1 ปี</a></li>
								<li class="tab__item "><a>3 ปี</a></li>
								<li class="tab__item "><a>10 ปี</a></li>
								<li class="tab__item "><a>20 ปี</a></li>
								<li class="tab__item "><a>30 ปี</a></li>
								<li class="tab__item "><a>ระยะเวลาทั้งหมด</a></li>
							</ul>
							<div class="flex__tabContents no_slider">
								<div class="flex__content active">
									<div class="">
										<canvas id="myChart1" class="price-chart-canvas"></canvas>
									</div>
								</div>
								<div class="flex__content ">
									<div class="">
										<canvas id="myChart2" class="price-chart-canvas"></canvas>
									</div>
								</div>
								<div class="flex__content ">
									<div class="">
										<canvas id="myChart3" class="price-chart-canvas"></canvas>
									</div>
								</div>
								<div class="flex__content ">
									<div class="">
										<canvas id="myChart4" class="price-chart-canvas"></canvas>
									</div>
								</div>
								<div class="flex__content ">
									<div class="">
										<canvas id="myChart5" class="price-chart-canvas"></canvas>
									</div>
								</div>
								<div class="flex__content ">
									<div class="">
										<canvas id="myChart6" class="price-chart-canvas"></canvas>
									</div>
								</div>
								<div class="flex__content ">
									<div class="">
										<canvas id="myChart7" class="price-chart-canvas"></canvas>
									</div>
								</div>
								<div class="flex__content ">
									<div class="">
										<canvas id="myChart8" class="price-chart-canvas"></canvas>
									</div>
								</div>
								<div class="flex__content ">
									<div class="">
										<canvas id="myChart9" class="price-chart-canvas"></canvas>
									</div>
								</div>
							</div>
						</div>
						<script defer="" src="../js/Chart.min.js"></script>
						<script defer="" src="../js/moment.min.js"></script>
						<script>
							let inittype = 'k24_ingot';
							var purity = "k24_ingot";
							var _pagetmpl = 'page-top.php';
						</script>


						<?php

						// REST APIエンドポイントのURL
						$api_url = 'https://www.otakaraya.jp/gold/wp-json/wp/v2/pages/21255/';

						// APIリクエストを実行
						$response = wp_remote_get( $api_url );

						// エラーチェック
						if ( is_wp_error( $response ) ) {
							$error_message = $response->get_error_message();
							echo "Something went wrong: $error_message";
							return;
						}

						$body = wp_remote_retrieve_body( $response );

						$data = json_decode( $body, true );

						?>

						<?php
						$price_gold_yd = (int) $data[ 'acf' ][ 'price_gold_yd' ];
						$price_pt_yd   = (int) $data[ 'acf' ][ 'price_pt_yd' ];
						$price_pd_yd   = (int) $data[ 'acf' ][ 'price_pd_yd' ];
						$price_sv_yd   = (int) $data[ 'acf' ][ 'price_sv_yd' ];
						$price_gold    = (int) $data[ 'acf' ][ 'price_gold' ];
						$price_pt      = (int) $data[ 'acf' ][ 'price_pt' ];
						$price_pd      = (int) $data[ 'acf' ][ 'price_pd' ];
						$price_sv      = (int) $data[ 'acf' ][ 'price_sv' ];
						$price_update  = $data[ 'acf' ][ 'price_update' ];
						$price_update  = DateTime::createFromFormat( 'Ymd', $price_update );
						$price_update  = $price_update->format( 'Y年n月j日' );

						// APIのURL
						$rate_api_url = "https://api.exchangerate-api.com/v4/latest/JPY";

						// APIから為替レートを取得
						$rate_response = file_get_contents( $rate_api_url );
						$rate_data     = json_decode( $rate_response, true );

						// JPYからHKDのレートを取得
						$exchange_rate_src = $rate_data[ 'rates' ][ 'SGD' ];
						$exchange_rate     = $exchange_rate_src * 0.919;
						$pt_exchange_rate  = $exchange_rate_src * 0.976;
						$gold_commission   = 40 * $exchange_rate_src;
						$pt1000_commission = 70 * $exchange_rate_src;
						$pt_commission     = 80 * $exchange_rate_src;
						$sv_commission     = 5 * $exchange_rate_src;

						// 各価格を香港ドルに変換
						$price_gold = (int) ( $price_gold * $exchange_rate );
						$price_pt   = (int) ( $price_pt * $pt_exchange_rate );
						$price_pd   = (int) ( $price_pd * $exchange_rate_src );
						$price_sv   = (int) ( $price_sv * $exchange_rate_src );
						?>
						<!-- <script defer="" src="../js/loadgraph_v4.js"> -->
						<script>
							( function ( $ ) {
								var canvases = document.getElementsByClassName( 'price-chart-canvas' );
								var the_canvas = canvases[ canvases.length - 1 ];
								var goldChart = myChart1 = myChart2 = myChart3 = myChart4 = myChart5 = myChart6 = myChart7 = myChart8 = myChart9 = null;

								$( function () {
									const calendarDraw2 = ( c ) => { // 過去の年度別の金買取相場(/souba/10years/)
										let _targetjson = "";
										switch ( c ) {
											case "k24_ingot":
												_targetjson = jsonret.data.k24_ingot.prices;
												break;
											case "pt_ingot":
												_targetjson = jsonret.data.pt_ingot.prices;
												break;
											case "sv_ingot":
												_targetjson = jsonret.data.sv_ingot.prices;
												break;
											case "pd_ingot":
												_targetjson = jsonret.data.pd_ingot.prices;
												break;
										}

										let yearArray = [];
										let _y = moment().format( "YYYY" );

										for ( let i = 0; i < 11; i++ ) {
											let _checkYear = _y - i;
											let _tmp = [];
											$.each( _targetjson, function ( index, value ) {
												let _pDate = moment( value.date );
												let _pPrice = value.price;
												if ( moment( _pDate ).isSame( _checkYear + "-01-01", "year" ) ) {
													_tmp.push( _pPrice );
												}
											} );
											yearArray[ _y - i ] = _tmp;
										}

										let _table = "";
										for ( let i = 0; i < 11; i++ ) {
											let _max = Math.max.apply( null, yearArray[ _y - i ] );
											let _min = Math.min.apply( null, yearArray[ _y - i ] );
											let sum = 0;

											yearArray[ _y - i ].forEach( function ( v ) {
												sum += Number( v );
											} );
											let _average = sum / yearArray[ _y - i ].length;
											_table += '<tr>';
											_table += '<th><span>' + ( _y - i ) + '<span>年</span></span></th>';
											_table += '<td><span>' + Number( _max ).toLocaleString() + '<span>S$</span></span></td>';
											_table += '<td><span>' + Number( _min ).toLocaleString() + '<span>S$</span></span></td>';
											_table += '<td><span>' + Number( Math.round( _average ) ).toLocaleString() + '<span>S$</span></span></td>';
											_table += '</tr>';
										}
										$( "#yearpriceload" ).html( _table );
									}const drawChart = ( pricesData, metal_type, exchange_rate_src ) => {
										var maxTicksLimitNum = 10;
										if ( $( ".rateGraph__inner--graph" ).width() < 640 ) {
											maxTicksLimitNum = 10;
										}
										var timestamp = ( new Date() ).getTime();
										var id = metal_type + timestamp;
										$( '#price-chart-last-update' ).text( moment( pricesData.header.last_modified.date ).format( "Y年M月D日 9:30" ) + '更新' );
										var limit = 10800;
										var labels = [],
											labels2 = [],
											labels3 = [],
											labels4 = [],
											labels5 = [],
											labels6 = [],
											labels7 = [],
											labels8 = [],
											labels9 = [];
										var prices = [],
											prices2 = [],
											prices3 = [],
											prices4 = [],
											prices5 = [],
											prices6 = [],
											prices7 = [],
											prices8 = [],
											prices9 = [];
										var metal = pricesData.data[ metal_type ];

										if ( metal_type.match( "k" ) ) {
											var bace_metal = pricesData.data[ 'k24_ingot' ];

										}
										if ( metal_type.match( "pt" ) ) {
											var bace_metal = pricesData.data[ 'pt_ingot' ];
										}
										if ( metal_type.match( "sv" ) ) {
											var bace_metal = pricesData.data[ 'sv_ingot' ];
										}
										if ( metal_type.match( "pd" ) ) {
											var bace_metal = pricesData.data[ 'pd_ingot' ];
										}
										if ( metal_type.match( "k" ) ) {
											var text = metal_type.replace( 'k', 'K' );
										}
										if ( metal_type.match( "pt" ) ) {
											var text = metal_type.replace( 'pt', 'Pt' );
										}
										if ( metal_type.match( "sv" ) ) {
											var text = metal_type.replace( 'sv', 'Sv' );
										}
										if ( metal_type.match( "sv" ) ) {
											var text = metal_type.replace( 'sv', 'Sv' );
										}
										if ( metal_type.match( "pt_ingot" ) ) {
											var text = "Ingots（platinum）";
										}
										if ( metal_type.match( "k24_ingot" ) ) {
											var text = "Ingots（gold）";
										}
										if ( metal_type.match( "sv_ingot" ) ) {
											var text = "Ingots （silver）";
										}
										if ( metal_type.match( "pd_ingot" ) ) {
											var text = "Ingots（palladium）";
										}

										$( '#price-chart-legend' ).text( text + " (S$/g)" );
										$( the_canvas ).siblings( '.price-chart-header .todays-price-subtitle' ).text( text + " 買取価格相場 推移グラフ" );

										function ChartDatePrice() {
											exchange_rate = exchange_rate_src * 0.919;
											pt_exchange_rate = exchange_rate_src * 0.976;
											gold_commission = 40 * exchange_rate_src;
											pt1000_commission = 70 * exchange_rate_src;
											pt_commission = 80 * exchange_rate_src;
											sv_commission = 5 * exchange_rate_src;
											bace_price = bace_metal[ i ].price;
											bace_price = Number( bace_price );
											var bace_metal_pd_ingot = pricesData.data.pd_ingot.prices[ i ].price;
											var plus_pt950 = bace_metal_pd_ingot * 0.02;
											var plus_pt900 = bace_metal_pd_ingot * 0.05;
											var plus_pt850 = bace_metal_pd_ingot * 0.08;
											if ( metal_type == "k24_ingot" ) {
												bace_price = Math.round( ( bace_price * exchange_rate ) * 100 ) / 100;
											}
											if ( metal_type == "k24" ) {
												bace_price = Math.round( ( bace_price * exchange_rate * 0.99 - gold_commission ) * 100 ) / 100;
											}
											if ( metal_type == "k23" ) {
												bace_price = Math.round( ( bace_price * exchange_rate * 0.94 - gold_commission ) * 100 ) / 100;
											}
											if ( metal_type == "k22" ) {
												bace_price = Math.round( ( bace_price * exchange_rate * 0.91 - gold_commission ) * 100 ) / 100;
											}
											if ( metal_type == "k21.6" ) {
												bace_price = Math.round( ( bace_price * exchange_rate * 0.89 - gold_commission ) * 100 ) / 100;
											}
											if ( metal_type == "k20" ) {
												bace_price = Math.round( ( bace_price * exchange_rate * 0.82 - gold_commission ) * 100 ) / 100;
											}
											if ( metal_type == "k18" ) {
												bace_price = Math.round( ( bace_price * exchange_rate * 0.75 ) * 100 ) / 100;
											}
											if ( metal_type == "k17" ) {
												bace_price = Math.round( ( bace_price * exchange_rate * 0.66 - gold_commission ) * 100 ) / 100;
											}
											if ( metal_type == "k14" ) {
												bace_price = Math.round( ( bace_price * exchange_rate * 0.57 - gold_commission ) * 100 ) / 100;
											}
											if ( metal_type == "k12" ) {
												bace_price = Math.round( ( bace_price * exchange_rate * 0.48 - gold_commission ) * 100 ) / 100;
											}
											if ( metal_type == "k10" ) {
												bace_price = Math.round( ( bace_price * exchange_rate * 0.40 - gold_commission ) * 100 ) / 100;
											}
											if ( metal_type == "k9" ) {
												bace_price = Math.round( ( bace_price * exchange_rate * 0.36 - gold_commission ) * 100 ) / 100;
											}
											if ( metal_type == "k8" ) {
												bace_price = Math.round( ( bace_price * exchange_rate * 0.30 - gold_commission ) * 100 ) / 100;
											}
											if ( metal_type == "k7" ) {
												bace_price = Math.round( ( bace_price * exchange_rate * 0.25 - gold_commission ) * 100 ) / 100;
											}
											if ( metal_type == "k5" ) {
												bace_price = Math.round( ( bace_price * exchange_rate * 0.15 - gold_commission ) * 100 ) / 100;
											}

											if ( metal_type == "pt_ingot" ) {
												bace_price = Math.round( ( bace_price * pt_exchange_rate ) * 100 ) / 100;
											}
											if ( metal_type == "pt1000" ) {
												bace_price = Math.round( ( bace_price * pt_exchange_rate * 0.999 - pt1000_commission ) * 100 ) / 100;
											}
											if ( metal_type == "pt950" ) {
												bace_price = Math.round( ( bace_price * pt_exchange_rate * 0.94 - pt_commission + plus_pt950 ) * 100 ) / 100;
											}
											if ( metal_type == "pt900" ) {
												bace_price = Math.round( ( bace_price * pt_exchange_rate * 0.895 - pt_commission + plus_pt900 ) * 100 ) / 100;
											}
											if ( metal_type == "pt850" ) {
												bace_price = Math.round( ( bace_price * pt_exchange_rate * 0.84 - pt_commission + plus_pt850 ) * 100 ) / 100;
											}
											if ( metal_type == "pt650" ) {
												bace_price = Math.round( ( bace_price * pt_exchange_rate * 0.64 - pt_commission ) * 100 ) / 100;
											}
											if ( metal_type == "pt500" ) {
												bace_price = Math.round( ( bace_price * pt_exchange_rate * 0.49 - pt_commission ) * 100 ) / 100;
											}
											if ( metal_type == "pt100" ) {
												bace_price = Math.round( ( bace_price * pt_exchange_rate * 0.08 - pt_commission ) * 100 ) / 100;
											}

											if ( metal_type == "sv_ingot" ) {
												bace_price = Math.round( ( bace_price * exchange_rate ) * 100 ) / 100;
											}
											if ( metal_type == "sv1000" ) {
												bace_price = Math.round( ( bace_price * exchange_rate * 0.99 - sv_commission ) * 100 ) / 100;
											}
											if ( metal_type == "sv925" ) {
												bace_price = Math.round( ( bace_price * exchange_rate * 0.91 - sv_commission ) * 100 ) / 100;
											}
											if ( metal_type == "pd_ingot" ) {
												bace_price = Math.round( ( bace_price * exchange_rate_src ) * 100 ) / 100;
											}
										}
										prices_bace = bace_metal.prices;
										prices_concat = prices_bace.concat();

										for ( i_date = 1; i_date < 10; i_date++ ) {

											if ( i_date == 1 ) { // 1ヶ月
												bace_metal = prices_concat.slice( 0, 22 ); // 30
												for ( i = 0; i < bace_metal.length; i++ ) {
													if ( !bace_metal[ i ] )
														continue;
													labels.push( moment( bace_metal[ i ].date ).format( "M/D" ) );

													ChartDatePrice()prices.push( bace_price );
													if ( i === limit ) {
														break;
													}
												};
											}
											if ( i_date == 2 ) { // 3ヶ月
												bace_metal = prices_concat.slice( 0, 62 ); // 90
												for ( i = 0; i < bace_metal.length; i++ ) {
													if ( !bace_metal[ i ] )
														continue;
													labels2.push( moment( bace_metal[ i ].date ).format( "M/D" ) );

													ChartDatePrice()prices2.push( bace_price );
													if ( i === limit ) {
														break;
													}
												};
											}
											if ( i_date == 3 ) { // 6ヶ月
												bace_metal = prices_concat.slice( 0, 125 ); // 180
												for ( i = 0; i < bace_metal.length; i++ ) {
													if ( !bace_metal[ i ] )
														continue;
													labels3.push( moment( bace_metal[ i ].date ).format( "M/D" ) );

													ChartDatePrice()prices3.push( bace_price );
													if ( i === limit ) {
														break;
													}
												};
											}
											if ( i_date == 4 ) { // 1年
												bace_metal = prices_concat.slice( 0, 241 ); // 360
												for ( i = 0; i < bace_metal.length; i++ ) {
													if ( !bace_metal[ i ] )
														continue;
													labels4.push( moment( bace_metal[ i ].date ).format( "YYYY/M/D" ) );

													ChartDatePrice()prices4.push( bace_price );
													if ( i === limit ) {
														break;
													}
												};
											}
											if ( i_date == 5 ) { // 3年
												bace_metal = prices_concat.slice( 0, 712 ); // 1080
												for ( i = 0; i < bace_metal.length; i++ ) {
													if ( !bace_metal[ i ] )
														continue;
													labels5.push( moment( bace_metal[ i ].date ).format( "YYYY/M/D" ) );

													ChartDatePrice()prices5.push( bace_price );
													if ( i === limit ) {
														break;
													}
												};
											}
											if ( i_date == 6 ) { // 10年
												bace_metal = prices_concat.slice( 0, 2650 ); // 3600
												for ( i = 0; i < bace_metal.length; i++ ) {
													// i = i + 5 ;

													if ( !bace_metal[ i ] )
														continue;

													var _fmt = ( _pagetmpl == 'page-souba_10years.php' ) ? 'YYYY/M' : 'YYYY'; // 10年相場ページは日付フォーマットが異なる
													labels6.push( moment( bace_metal[ i ].date ).format( "YYYY/M/D" ) );

													ChartDatePrice()prices6.push( bace_price );
													if ( i === limit ) {
														break;
													}
												};
											}

											if ( i_date == 7 ) { // 20年
												bace_metal = prices_concat.slice( 0, 5100 ); // 7200
												for ( i = 0; i < bace_metal.length; i++ ) {
													// 5件ごとスキップ
													// i = i + 5 ;
													if ( !bace_metal[ i ] )
														continue;
													labels7.push( moment( bace_metal[ i ].date ).format( "YYYY/M/D" ) );

													ChartDatePrice()prices7.push( bace_price );
													if ( i === limit ) {
														break;
													}
												};
											}
											if ( i_date == 8 ) { // 30年
												bace_metal = prices_concat.slice( 0, 7400 ); // 10800
												for ( i = 0; i < bace_metal.length; i++ ) {
													// 5件ごとスキップ
													// i = i + 5 ;

													if ( !bace_metal[ i ] )
														continue;
													labels8.push( moment( bace_metal[ i ].date ).format( "YYYY/M/D" ) );

													ChartDatePrice()prices8.push( bace_price );
													if ( i === limit ) {
														break;
													}
												};
											}
											if ( i_date == 9 ) { // 全期間
												bace_metal = prices_concat;
												for ( i = 0; i < bace_metal.length; i++ ) {
													// 5件ごとスキップ
													// i = i + 5 ;

													if ( !bace_metal[ i ] )
														continue;
													labels9.push( moment( bace_metal[ i ].date ).format( "YYYY/M/D" ) );

													ChartDatePrice()prices9.push( bace_price );
													if ( i === limit ) {
														break;
													}
												};
											}

										};

										labels6 = labels6.filter( ( _, index ) => index % 10 === 0 );
										prices6 = prices6.filter( ( _, index ) => index % 10 === 0 );
										labels7 = labels7.filter( ( _, index ) => index % 20 === 0 );
										prices7 = prices7.filter( ( _, index ) => index % 20 === 0 );
										labels8 = labels8.filter( ( _, index ) => index % 30 === 0 );
										prices8 = prices8.filter( ( _, index ) => index % 30 === 0 );
										labels9 = labels9.filter( ( _, index ) => index % 40 === 0 );
										prices9 = prices9.filter( ( _, index ) => index % 40 === 0 );
										only_once = 1;
										if ( only_once == 1 ) {
											labels = labels.reverse();
											prices = prices.reverse();
											labels2 = labels2.reverse();
											prices2 = prices2.reverse();
											labels3 = labels3.reverse();
											prices3 = prices3.reverse();
											labels4 = labels4.reverse();
											prices4 = prices4.reverse();
											labels5 = labels5.reverse();
											prices5 = prices5.reverse();

											labels6 = labels6.reverse();
											prices6 = prices6.reverse();
											labels7 = labels7.reverse();
											prices7 = prices7.reverse();
											labels8 = labels8.reverse();
											prices8 = prices8.reverse();
											labels9 = labels9.reverse();
											prices9 = prices9.reverse();
											only_once == 0;
										}
										var maxPrice = Math.max.apply( null, prices );
										var minPrice = Math.min.apply( null, prices );
										var diff = maxPrice * 0.01; // 1%の差分を取得
										var suggestedMax = Math.round( maxPrice + diff ); // maxPriceに1%の差分を追加して四捨五入
										var ctx = document.getElementById( id );
										if ( goldChart != null ) {
											goldChart.destroy()};
										if (myChart1 != null) {
											myChart1.destroy();
										}
										if (myChart2 != null) {
											myChart2.destroy();
										}
										if (myChart3 != null) {
											myChart3.destroy();
										}
										if (myChart4 != null) {
											myChart4.destroy();
										}
										if (myChart5 != null) {
											myChart5.destroy();
										}
										if (myChart6 != null) {
											myChart6.destroy();
										}
										if (myChart7 != null) {
											myChart7.destroy();
										}
										if (myChart8 != null) {
											myChart8.destroy();
										}
										if (myChart9 != null) {
											myChart9.destroy();
										}
										if ($("#simulation").width() < 640) {
											maxTicksLimitNum = 10;
										}

										myChart1 = new Chart("myChart1", { // 1ヶ月
											type: "line",
											data: {
												labels: labels,
												datasets: [{
													label: "",
													data: prices,
													fill: false,
													backgroundColor: "#98883a",
													borderColor: "#98883a",
													lineTension: 0.1,
													borderWidth: 1,
													radius: 3,
													hitRadius: 3
												}],
											},
											options: {
												legend: {
													display: false,
												},
												tooltips: {
													callbacks: {
														label: function(tooltipItem, data) {
															var label = data.datasets[tooltipItem.datasetIndex].label || '';
															label = tooltipItem.yLabel.toLocaleString();
															return "S$" + label;
														}
													}
												},
												scales: {
													xAxes: [{
														gridLines: {
															color: "#f0f0f0",
														},
														ticks: {
															maxTicksLimit: 7,
															maxRotation: 45,
															autoSkip: true,
															maxTicksLimit: maxTicksLimitNum,
															fontSize: 12,
															fontColor: '#333'
														},
													}],
													yAxes: [{
														gridLines: {
															color: "#f6f6f6",
														},
														ticks: {
															// max: suggestedMax,
															callback: function(label, index, labels) {
																if (label == suggestedMax) {
																	return '';
																}
																return "S$ " + label.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
															},
															fontSize: 12,
															fontColor: '#333'
														},
													}]
												}
											}
										});
										myChart2 = new Chart("myChart2", { // 3ヶ月
											type: "line",
											data: {
												labels: labels2,
												datasets: [{
													label: "",
													data: prices2,
													fill: false,
													backgroundColor: "#98883a",
													borderColor: "#98883a",
													lineTension: 0.1,
													borderWidth: 1,
													radius: 2,
													hitRadius: 2
												}],
											},
											options: {
												legend: {
													display: false,
												},
												tooltips: {
													callbacks: {
														label: function(tooltipItem, data) {
															var label = data.datasets[tooltipItem.datasetIndex].label || '';
															label = tooltipItem.yLabel.toLocaleString();
															return "S$" + label;
														}
													}
												},
												scales: {
													xAxes: [{
														gridLines: {
															color: "#f0f0f0",
														},
														ticks: {
															maxRotation: 45,
															autoSkip: true,
															maxTicksLimit: 7,
															autoSkipPadding: 20,
															fontSize: 12,
															fontColor: '#333'
														},
													}],
													yAxes: [{
														gridLines: {
															color: "#f6f6f6",
														},
														ticks: {
															// max: suggestedMax,
															callback: function(label, index, labels) {
																if (label == suggestedMax) {
																	return '';
																}
																return "S$ " + label.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
															},
															fontSize: 12,
															fontColor: '#333',
														},
													}]
												}
											}
										});
										myChart3 = new Chart("myChart3", { // 6ヶ月
											type: "line",
											data: {
												labels: labels3,
												datasets: [{
													label: "",
													data: prices3,
													fill: false,
													backgroundColor: "#98883a",
													borderColor: "#98883a",
													lineTension: 0.1,
													borderWidth: 1,
													radius: 1,
													hitRadius: 1
												}],
											},
											options: {
												legend: {
													display: false,
												},
												tooltips: {
													callbacks: {
														label: function(tooltipItem, data) {
															var label = data.datasets[tooltipItem.datasetIndex].label || '';
															label = tooltipItem.yLabel.toLocaleString();
															return "S$" + label;
														}
													}
												},
												scales: {
													xAxes: [{
														gridLines: {
															color: "#f0f0f0",
														},
														ticks: {
															maxRotation: 45,
															autoSkip: true,
															maxTicksLimit: 7,
															autoSkipPadding: 20,
															fontSize: 12,
															fontColor: '#333'
														},
													}],
													yAxes: [{
														gridLines: {
															color: "#f6f6f6",
														},
														ticks: {
															// max: suggestedMax,
															callback: function(label, index, labels) {
																if (label == suggestedMax) {
																	return '';
																}
																return "S$ " + label.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
															},
															fontSize: 12,
															fontColor: '#333'
														},
													}]
												}
											}
										});
										myChart4 = new Chart("myChart4", { // 1年
											type: "line",
											data: {
												labels: labels4,
												datasets: [{
													label: "",
													data: prices4,
													fill: false,
													backgroundColor: "#98883a",
													borderColor: "#98883a",
													lineTension: 0.1,
													borderWidth: 1,
													radius: 1,
													hitRadius: 1
												}],
											},
											options: {
												legend: {
													display: false,
												},
												tooltips: {
													callbacks: {
														label: function(tooltipItem, data) {
															var label = data.datasets[tooltipItem.datasetIndex].label || '';
															label = tooltipItem.yLabel.toLocaleString();
															return "S$" + label;
														}
													}
												},
												scales: {
													xAxes: [{
														gridLines: {
															color: "#f0f0f0",
														},
														ticks: {
															maxRotation: 45,
															autoSkip: true,
															maxTicksLimit: 7,
															autoSkipPadding: 20,
															fontSize: 12,
															fontColor: '#333'
														},
													}],
													yAxes: [{
														gridLines: {
															color: "#f6f6f6",
														},
														ticks: {
															// max: suggestedMax,
															callback: function(label, index, labels) {
																if (label == suggestedMax) {
																	return '';
																}
																return "S$ " + label.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
															},
															fontSize: 12,
															fontColor: '#333'
														},
													}]
												}
											}
										});
										myChart5 = new Chart("myChart5", { // 3年
											type: "line",
											data: {
												labels: labels5,
												datasets: [{
													label: "",
													data: prices5,
													fill: false,
													backgroundColor: "#98883a",
													borderColor: "#98883a",
													lineTension: 0.1,
													borderWidth: 1,
													radius: 1,
													hitRadius: 1,
												}],
											},
											options: {
												legend: {
													display: false,
												},
												tooltips: {
													callbacks: {
														label: function(tooltipItem, data) {
															var label = data.datasets[tooltipItem.datasetIndex].label || '';
															label = tooltipItem.yLabel.toLocaleString();
															return "S$" + label;
														}
													}
												},
												scales: {
													xAxes: [{
														gridLines: {
															color: "#f0f0f0",
														},
														ticks: {
															maxRotation: 45,
															autoSkip: true,
															maxTicksLimit: 7,
															fontSize: 12,
															fontColor: '#333'
														},
													}],
													yAxes: [{
														yAlign: 'center',
														gridLines: {
															color: "#f6f6f6",
														},
														ticks: {
															// max: suggestedMax,
															callback: function(label, index, labels) {
																if (label == suggestedMax) {
																	return '';
																}
																return "S$ " + label.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
															},
															fontSize: 12,
															fontColor: '#333'
														},
													}]
												}
											}
										});
										myChart6 = new Chart("myChart6", { // 10年
											type: "line",
											data: {
												labels: labels6,
												datasets: [{
													label: "",
													data: prices6,
													fill: false,
													backgroundColor: "#98883a",
													borderColor: "#98883a",
													lineTension: 0.1,
													borderWidth: 1,
													radius: 1,
													hitRadius: 1
												}],
											},
											options: {

												legend: {
													display: false,
												},
												tooltips: {
													callbacks: {
														label: function(tooltipItem, data) {
															var label = data.datasets[tooltipItem.datasetIndex].label || '';
															label = tooltipItem.yLabel.toLocaleString();
															return "S$" + label;
														}
													}
												},
												scales: {
													xAxes: [{
														gridLines: {
															color: "#f0f0f0",
														},
														ticks: {
															maxRotation: 45,
															autoSkip: true,
															maxTicksLimit: 7,
															fontSize: 12,
															fontColor: '#333'
														},
													}],
													yAxes: [{
														gridLines: {
															color: "#f6f6f6",
														},
														ticks: {
															// max: suggestedMax,
															callback: function(label, index, labels) {
																if (label == suggestedMax) {
																	return '';
																}
																return "S$ " + label.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
															},
															fontSize: 12,
															fontColor: '#333'
														},

													}]
												}
											}
										});

										myChart7 = new Chart("myChart7", { // 20年
											type: "line",
											data: {
												labels: labels7,
												datasets: [{
													label: "",
													data: prices7,
													fill: false,
													backgroundColor: "#98883a",
													borderColor: "#98883a",
													lineTension: 0.1,
													borderWidth: 1,
													radius: 1,
													hitRadius: 1
												}],
											},
											options: {
												legend: {
													display: false,
												},
												tooltips: {
													callbacks: {
														label: function(tooltipItem, data) {
															var label = data.datasets[tooltipItem.datasetIndex].label || '';
															label = tooltipItem.yLabel.toLocaleString();
															return "S$" + label;
														}
													}
												},
												scales: {
													xAxes: [{
														gridLines: {
															color: "#f0f0f0",
														},
														ticks: {
															maxRotation: 45,
															autoSkip: true,
															maxTicksLimit: 7,
															fontSize: 12,
															fontColor: '#333'
														},
													}],
													yAxes: [{
														gridLines: {
															color: "#f6f6f6",
														},
														ticks: {
															// max: suggestedMax,
															callback: function(label, index, labels) {
																if (label == suggestedMax) {
																	return '';
																}
																return "S$ " + label.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
															},
															fontSize: 12,
															fontColor: '#333'
														},
													}]
												}
											}
										});
										myChart8 = new Chart("myChart8", { // 30年
											type: "line",
											data: {
												labels: labels8,
												datasets: [{
													label: "",
													data: prices8,
													fill: false,
													backgroundColor: "#98883a",
													borderColor: "#98883a",
													lineTension: 0.1,
													borderWidth: 1,
													radius: 1,
													hitRadius: 1
												}],
											},
											options: {
												legend: {
													display: false,
												},
												tooltips: {
													callbacks: {
														label: function(tooltipItem, data) {
															var label = data.datasets[tooltipItem.datasetIndex].label || '';
															label = tooltipItem.yLabel.toLocaleString();
															return "S$" + label;
														}
													}
												},
												scales: {
													xAxes: [{
														gridLines: {
															color: "#f0f0f0",
														},
														ticks: {
															maxRotation: 45,
															autoSkip: true,
															maxTicksLimit: 7,
															fontSize: 12,
															fontColor: '#333'
														},
													}],
													yAxes: [{
														gridLines: {
															color: "#f6f6f6",
														},
														ticks: {
															// max: suggestedMax,
															callback: function(label, index, labels) {
																if (label == suggestedMax) {
																	return '';
																}
																return "S$ " + label.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
															},
															fontSize: 12,
															fontColor: '#333'
														},
													}]
												}
											}
										});
										myChart9 = new Chart("myChart9", { // 全期間
											type: "line",
											data: {
												labels: labels9,
												datasets: [{
													label: "",
													data: prices9,
													fill: false,
													backgroundColor: "#98883a",
													borderColor: "#98883a",
													lineTension: 0.1,
													borderWidth: 1,
													radius: 1,
													hitRadius: 1
												}],
											},
											options: {
												legend: {
													display: false,
												},
												tooltips: {
													callbacks: {
														label: function(tooltipItem, data) {
															var label = data.datasets[tooltipItem.datasetIndex].label || '';
															label = tooltipItem.yLabel.toLocaleString();
															return "S$" + label;
														}
													}
												},
												scales: {
													xAxes: [{
														gridLines: {
															color: "#f0f0f0",
														},
														ticks: {
															maxRotation: 45,
															autoSkip: true,
															maxTicksLimit: 7,
															fontSize: 12,
															fontColor: '#333'
														},
													}],
													yAxes: [{
														gridLines: {
															color: "#f6f6f6",
														},
														ticks: {
															// max: suggestedMax,
															callback: function(label, index, labels) {
																if (label == suggestedMax) {
																	return '';
																}
																return "S$ " + label.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
															},
															fontSize: 12,
															fontColor: '#333'
														},
													}]
												}
											}
										});
									}

									if (!!window.metalPricesData) {
										if ($("#simulation").width() < 640) {
											maxTicksLimitNum = 10;
										}
										drawChartSet(window.metalPricesData, inittype);

									} else {
										var time = moment().format('YYYYMMDDHHmm');
										$.ajax({
											method: 'get',
											url: '/rate_files_v2/crossdomain.php?url=https://www.otakaraya.jp/rate_files_v2/graph/graph-prices-full.json?time=' + time,
											contentType: 'application/json',
											dataType: 'json',
											success: function(ret) {
												window.metalPricesData = ret;
												drawChartSet(inittype);
												$('#graph-select').val(inittype);
												$('#graph-select').on('change', function() {
													var type = $(this).val();
													drawChartSet(type);
												});

												// 過去の年度別の金買取相場(/souba/10years/)
												setym = "2022-10";
												settype = "k24_ingot";
												jsonret = ret;
												window.metalPricesData = ret;
												calendarDraw2(settype);

											}
										});
									}

									const drawChartSet = (type) => {
										drawChart(window.metalPricesData, type, <?php echo $exchange_rate_src; ?>);
									}
								});
							})(jQuery);
						</script>
					</div>
				</div>
			</section>
			<!-- MOD_20240417 -->

			<?php get_template_part( 'template-parts/assessment_cta' ); ?>
			<!-- ビデオ通話査定CTA -->

			<!-- MOD_20240417 -->

			<?php get_template_part( 'template-parts/gold_reference_purchase_prices' ); ?>

			<div class="is-pc">
				<section class="brandinfo_section gold_top_brandinfo_section">
					<div class="titleMain titleMain--wrapper" style="margin-bottom: 4rem;">
						<h2 class="titleMain--main">
							<span>ทำไมตอนนี้ถึงถึงเวลาขายทองคำ?</span>
						</h2>
					</div>
					<div class="fshoplist-target__list brand_about_repeat_parent_wrap is-pc">
						<div class="fshoplist-target--ttl">
							<h3 class="titleSub">สามประเด็นสำคัญในการซื้อทองคำ</h3>
						</div>
						<div class="fshoplist-target--item">
							<div class="horizonlist horizonnumblist">
								<div class="horizonlist--link">
									<div class="horizonlist--text">
										<h4 class="titleH4 title--left">ตลาดรับซื้อทองคำ</h4>
										<p>ราคาทองคำเปลี่ยนแปลงทุกวัน ราคาสามารถผันผวนได้มากกว่าหลายร้อยเยนต่อกรัมในวันเดียว และยิ่งคุณขายทองคำได้มาก (หนักมาก) ความผันผวนของราคาก็จะยิ่งได้รับผลกระทบจากความผันผวนของราคามากขึ้นเท่านั้น
										</p>
									</div>
								</div>
								<div class="horizonlist--link">
									<div class="horizonlist--text">
										<h4 class="titleH4 title--left">ความบริสุทธิ์ของทองคำ</h4>
										<p>ทองคำสลักด้วยเกรดต่างๆ เช่น 24k, 22k, 18k ฯลฯ ขึ้นอยู่กับความบริสุทธิ์ (เนื้อหา) ยิ่งตัวเลขในการแกะสลักมากเท่าไรก็ยิ่งหายากและมีมูลค่าเป็นทองคำมากขึ้นเท่านั้น
										</p>
									</div>
								</div>
								<div class="horizonlist--link">
									<div class="horizonlist--text">
										<h4 class="titleH4 title--left">น้ำหนักทองคำ</h4>
										<p>
											ราคาซื้ออ้างอิงจะกำหนดไว้สำหรับทองคำแต่ละกรัม ดังนั้นราคาประเมินจะเพิ่มขึ้นตามสัดส่วนน้ำหนัก ในการประเมินของ Otakaraya เราจะวัดน้ำหนักให้ใกล้เคียงที่สุด 0.1 กรัม และคำนวณมูลค่าทองคำได้อย่างแม่นยำ
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="fshoplist-target__list brand_about_repeat_parent_wrap is-sp">
						<div class="fshoplist-target--ttl">
							<h3 class="titleSub">K24 買取の<br class="is-sp">
								重要な３つのポイント</h3>
						</div>
						<div class="fshoplist-target--item">
							<div class="horizonlist horizonnumblist">
								<div class="horizonlist--link">
									<div class="sp_text_wrap">
										<h4 class="titleH4 title--left">ตลาดรับซื้อทองคำ</h4>
									</div>
									<div class="horizonlist--text">
										<p>
											ราคาทองคำเปลี่ยนแปลงทุกวันราคาสามารถผันผวนได้มากกว่าหลายร้อยเยนต่อกรัมในวันเดียว และยิ่งคุณขายทองคำได้มาก (หนักมาก) ความผันผวนของราคาก็จะยิ่งได้รับผลกระทบจากความผันผวนของราคามากขึ้นเท่านั้น
										</p>
									</div>
								</div>
								<div class="horizonlist--link">
									<div class="sp_text_wrap">
										<h4 class="titleH4 title--left">ความบริสุทธิ์ของทองคำ</h4>
									</div>
									<div class="horizonlist--text">
										<p>ทองคำสลักด้วยเกรดต่างๆ เช่น 24k, 22k, 18k ฯลฯ ขึ้นอยู่กับความบริสุทธิ์ (เนื้อหา) ยิ่งตัวเลขในการแกะสลักมากเท่าไรก็ยิ่งหายากและมีมูลค่าเป็นทองคำมากขึ้นเท่านั้น
										</p>
									</div>
								</div>
								<div class="horizonlist--link">
									<div class="sp_text_wrap">
										<h4 class="titleH4 title--left">น้ำหนักทองคำ</h4>
									</div>
									<div class="horizonlist--text">
										<p>
											ราคาซื้ออ้างอิงจะกำหนดไว้สำหรับทองคำแต่ละกรัม ดังนั้นราคาประเมินจะเพิ่มขึ้นตามสัดส่วนน้ำหนัก ในการประเมินของ Otakaraya เราจะวัดน้ำหนักให้ใกล้เคียงที่สุด 0.1 กรัม และคำนวณมูลค่าทองคำได้อย่างแม่นยำ
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="brandinfo brandinfo_red_repeat">

						<div class="brandinfo__main fshoplist-target__list">
							<div class="brandinfo__header fshoplist-target--ttl">
								<h3 class="brandinfo__header__title">เคล็ดลับการขายทองคำให้ราคาสูง</h3>
							</div>
							<div class="fshoplist-target--item brandinfo__body no--image">
								<div class="brandinfo__body__text brandinfo__body__text--top">
									<br>
									เคล็ดลับในการขายทองคำในราคาที่สูงคือ ``ขายเมื่อราคาทองคำสูง'' และ ``ขายให้กับร้านค้าเฉพาะทางที่จะรับซื้อในราคาที่สูง''
ขณะนี้ราคาทองคำกำลังพุ่งสูงขึ้น ดังนั้นจึงเป็นเวลาที่ดีที่สุดในการขาย<br />
									<br />
									สิ่งที่สำคัญที่นี่คือการเลือกร้านค้าที่เชี่ยวชาญในการรับซื้อทองคำอย่างไร อย่างไรก็ตาม เมื่อพูดถึงการซื้อทองคำ ราคาซื้อทองคำสูงคุณสามารถฝากให้ Otakaraya ดูแลได้ ด้วยร้านค้ากว่า 1,300 แห่งทั่วโลกพร้อมผู้เชี่ยวชาญด้านการประเมินมูลค่าทองคำ เราจะนำเสนอราคาที่คุณพอใจ
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="is-sp">
				<div class="renew_202404_sellreason_titlebox">
					<h2 class="renew_202404_sellreason_title_h2">ทำไมตอนนี้ถึงถึงเวลาขายทองคำ?</h2>
					<h3 class="renew_202404_sellreason_title_h3">สามประเด็นสำคัญในการซื้อทองคำ</h3>
					<img class="renew_2024_sellreason_title_image" src="../images/gold/point_stars.png">
				</div>
				<section class="renew_202404_sellreason_section">
					<div class="renew_202404_sellreason_item"> <img class="renew_202404_sellreason_item_icon" src="../images/gold/point_1.webp"> <img class="renew_202404_sellreason_item_img" src="../images/gold/point_image01.jpg">
						<h2 class="renew_202404_sellreason_item_title">ตลาดรับซื้อทองคำ</h2>
						<div class="renew_202404_sellreason_item_story">
							ราคาทองคำเปลี่ยนแปลงทุกวัน ราคาสามารถผันผวนได้มากกว่าหลายร้อยเยนต่อกรัมในวันเดียว และยิ่งคุณขายทองคำได้มาก (หนักมาก) ความผันผวนของราคาก็จะยิ่งได้รับผลกระทบจากความผันผวนของราคามากขึ้นเท่านั้น
						</div>
					</div>
					<!-- renew_202404_sellreason_item -->

					<div class="renew_202404_sellreason_item"> <img class="renew_202404_sellreason_item_icon" src="../images/gold/point_2.webp"> <img class="renew_202404_sellreason_item_img" src="../images/gold/point_image02.jpg">
						<h2 class="renew_202404_sellreason_item_title">ความบริสุทธิ์ของทองคำ</h2>
						<div class="renew_202404_sellreason_item_story">
							ทองคำสลักด้วยเกรดต่างๆ เช่น 24k, 22k, 18k ฯลฯ ขึ้นอยู่กับความบริสุทธิ์ (เนื้อหา) ยิ่งตัวเลขในการแกะสลักมากเท่าไรก็ยิ่งหายากและมีมูลค่าเป็นทองคำมากขึ้นเท่านั้น
						</div>
					</div>
					<!-- renew_202404_sellreason_item -->

					<div class="renew_202404_sellreason_item"> <img class="renew_202404_sellreason_item_icon" src="../images/gold/point_3.webp"> <img class="renew_202404_sellreason_item_img" src="../images/gold/point_image03.jpg">
						<h2 class="renew_202404_sellreason_item_title">น้ำหนักทองคำ</h2>
						<div class="renew_202404_sellreason_item_story">
							ราคาซื้ออ้างอิงจะกำหนดไว้สำหรับทองคำแต่ละกรัม ดังนั้นราคาประเมินจะเพิ่มขึ้นตามสัดส่วนน้ำหนัก ในการประเมินของ Otakaraya เราจะวัดน้ำหนักให้ใกล้เคียงที่สุด 0.1 กรัม และคำนวณมูลค่าทองคำได้อย่างแม่นยำ
						</div>
					</div>
					<!-- renew_202404_sellreason_item -->

					<h3 class="renew_202404_sellreason_shutter_title">
						เคล็ดลับการขายทองคำให้ราคาสูง
						<div class="renew_202404_sellreason_shutter_circle">
							<div class="renew_202404_sellreason_shutter_arrow"></div>
						</div>
					</h3>
					<div class="renew_202404_sellreason_shutter_story">
						<p>
							<span>เคล็ดลับในการขายทองคำในราคาที่สูงคือ ``ขายเมื่อราคาทองคำสูง'' และ ``ขายให้กับร้านค้าเฉพาะทางที่จะรับซื้อในราคาที่สูง''
							ขณะนี้ราคาทองคำกำลังพุ่งสูงขึ้น ดังนั้นจึงเป็นเวลาที่ดีที่สุดในการขาย
						</p>
						<p>
						สิ่งที่สำคัญที่นี่คือการเลือกร้านค้าที่เชี่ยวชาญในการรับซื้อทองคำอย่างไร อย่างไรก็ตาม เมื่อพูดถึงการซื้อทองคำ ราคาซื้อทองคำสูงคุณสามารถฝากให้ Otakaraya ดูแลได้ ด้วยร้านค้ากว่า 1,300 แห่งทั่วโลกพร้อมผู้เชี่ยวชาญด้านการประเมินมูลค่าทองคำ เราจะนำเสนอราคาที่คุณพอใจ
						</p>
					</div>
				</section>
			</div>
			<!-- MOD_20240417 -->
			<?php get_template_part( 'template-parts/assessment_cta' ); ?>

			<!-- MOD_20240417 -->

			<section class="reason_section">
				<?php get_template_part( 'template-parts/otakaraya_sel' ); ?>
			</section>

			<!-- MOD_20240417 -->
			<section class="renew_2024_unknownok_section is-sp">
				<div class="renew_2024_unknownok_titlebox">
					<h2 class="renew_2024_unknownok_title">
						ไม่ต้องกังวลกับการซื้อผลิตภัณฑ์ทองคำที่ไม่ทราบความบริสุทธิ์
					</h2>
					<img class="renew_2024_unknownok_title_image"
						src="../images/gold/ok_photo_202404.png">
				</div>
				<div class="renew_2024_unknownok_item_titlebox first">
					เกี่ยวกับคุณภาพของทองคำ
					<div class="renew_2024_unknownok_item_title_circle">
						<div class="renew_2024_unknownok_item_title_arrow"></div>
					</div>
				</div>
				<div class="renew_2024_unknownok_item_storybox">
					<p>
					เกรดทองคำจะแสดงออกมาในลักษณะเฉพาะตัว เช่น ทองคำ 24 กะรัต หรือทองคำ 18 กะรัต. นอกเหนือจากการแกะสลักที่เกี่ยวข้องกับเศษส่วนที่ 24 แล้ว บางกรณียังรวมถึงตราสัญลักษณ์ซึ่งเป็นตราสัญลักษณ์ของโรงกษาปณ์ด้วย.
					Hallmarks ไม่ได้เพิ่มมูลค่าของทองคำโดยตรง แต่เนื่องจากมีทองคำหลายประเภทหมุนเวียนในโลก จึงมีความสำคัญสำหรับการทำธุรกรรมที่ปลอดภัย.
					</p>
					<p>
					โดยเฉพาะอย่างยิ่งกับสินค้าจากต่างประเทศ ไม่สามารถกำหนดคุณภาพของทองคำได้จากการแกะสลัก ทำให้ยากต่อการตัดสินในบางกรณี.
					นอกจากนี้เรายังสามารถซื้อสินค้าที่ไม่มีเครื่องหมายได้ ดังนั้นโปรดติดต่อเรา.
					</p>
				</div>
				<div class="renew_2024_unknownok_item_titlebox">
					วัดความบริสุทธิ์ที่ไม่รู้จักของโลหะมีค่าได้อย่างแม่นยำ
					<div class="renew_2024_unknownok_item_title_circle">
						<div class="renew_2024_unknownok_item_title_arrow"></div>
					</div>
				</div>
				<div class="renew_2024_unknownok_item_storybox">
					<p>
					ไม่ต้องกังวลหากคุณไม่ทราบความบริสุทธิ์หรือไม่มีตราประทับ.<br />
					แม้แต่ทองคำและโลหะผสมที่มีความบริสุทธิ์ต่ำที่ทำจากโลหะหลายชนิดก็สามารถวัดได้อย่างแม่นยำในระยะเวลาอันสั้น และซื้อได้ทันทีด้วยเงินสด.<br />
					โปรดติดต่อเราเกี่ยวกับสินค้าที่ถูกปฏิเสธจากร้านค้าอื่น.
					</p>
				</div>
				<div class="renew_2024_unknownok_item_titlebox">
				เราจะประเมินเครื่องประดับและการออกแบบอุปกรณ์เสริมด้วย
					<div class="renew_2024_unknownok_item_title_circle">
						<div class="renew_2024_unknownok_item_title_arrow"></div>
					</div>
				</div>
				<div class="renew_2024_unknownok_item_storybox">
					<p>
					เมื่อซื้อผลิตภัณฑ์ทองคำที่ Otakaraya เราไม่เพียงแต่ประเมินมูลค่าของทองคำเท่านั้น แต่ยังรวมถึงมูลค่าและการออกแบบเครื่องประดับในเครื่องประดับด้วย.<br />
					เนื่องจากเราเป็นร้านค้าเฉพาะทางที่รับซื้อโลหะมีค่าหลายประเภท เราจึงสามารถให้การประเมินมูลค่าสูงแก่คุณได้.
					</p>
				</div>
			</section>
			<section class="brandinfo_section gold_top_brandinfo_section is-pc">
				<div class="titleMain titleMain--wrapper" style="margin-bottom: 4rem;">
					<h2 class="titleMain--main">
						<span>ไม่ต้องกังวลกับการซื้อผลิตภัณฑ์ทองคำที่ไม่ทราบความบริสุทธิ์</span>
					</h2>
				</div>
				<div class="brandinfo brandinfo_red_repeat">
					<div class="brandinfo__main fshoplist-target__list">
						<div class="brandinfo__header fshoplist-target--ttl">
							<h3 class="brandinfo__header__title">เกี่ยวกับคุณภาพของทองคำ</h3>
						</div>
						<div class="fshoplist-target--item brandinfo__body no--image">
							<div class="brandinfo__body__text brandinfo__body__text--top">
								<p> เกรดทองคำจะแสดงออกมาในลักษณะเฉพาะตัว เช่น ทองคำ 24 กะรัต หรือทองคำ 18 กะรัต. นอกเหนือจากการแกะสลักที่เกี่ยวข้องกับเศษส่วนที่ 24 แล้ว บางกรณียังรวมถึงตราสัญลักษณ์ซึ่งเป็นตราสัญลักษณ์ของโรงกษาปณ์ด้วย.
								Hallmarks ไม่ได้เพิ่มมูลค่าของทองคำโดยตรง แต่เนื่องจากมีทองคำหลายประเภทหมุนเวียนในโลก จึงมีความสำคัญสำหรับการทำธุรกรรมที่ปลอดภัย.<br />
									<br />
									โดยเฉพาะอย่างยิ่งกับสินค้าจากต่างประเทศ ไม่สามารถกำหนดคุณภาพของทองคำได้จากการแกะสลัก ทำให้ยากต่อการตัดสินในบางกรณี. นอกจากนี้เรายังสามารถซื้อสินค้าที่ไม่มีเครื่องหมายได้ ดังนั้นโปรดติดต่อเรา
								</p>
							</div>
						</div>
					</div>
					<div class="brandinfo__main fshoplist-target__list">
						<div class="brandinfo__header fshoplist-target--ttl">
							<h3 class="brandinfo__header__title">
							วัดความบริสุทธิ์ที่ไม่รู้จักของโลหะมีค่าได้อย่างแม่นยำ </h3>
						</div>
						<div class="fshoplist-target--item brandinfo__body no--image">
							<div class="brandinfo__body__text brandinfo__body__text--top">
								<p>
								ไม่ต้องกังวลหากคุณไม่ทราบความบริสุทธิ์หรือไม่มีตราประทับ. แม้แต่ทองคำและโลหะผสมที่มีความบริสุทธิ์ต่ำที่ทำจากโลหะหลายชนิดก็สามารถวัดได้อย่างแม่นยำในระยะเวลาอันสั้น และซื้อได้ทันทีด้วยเงินสด.
								โปรดติดต่อเราเกี่ยวกับสินค้าที่ถูกปฏิเสธจากร้านค้าอื่น.</p>
							</div>
						</div>
						<div class="brandinfo__main fshoplist-target__list">
							<div class="brandinfo__header fshoplist-target--ttl">
								<h3 class="brandinfo__header__title">
								เราจะประเมินเครื่องประดับและการออกแบบอุปกรณ์เสริมด้วย
								</h3>
							</div>
							<div class="fshoplist-target--item brandinfo__body no--image">
								<div class="brandinfo__body__text brandinfo__body__text--top">
									<p>
									เมื่อซื้อผลิตภัณฑ์ทองคำที่ Otakaraya เราไม่เพียงแต่ประเมินมูลค่าของทองคำเท่านั้น แต่ยังรวมถึงมูลค่าและการออกแบบเครื่องประดับในเครื่องประดับด้วย. เนื่องจากเราเป็นร้านค้าเฉพาะทางที่รับซื้อโลหะมีค่าหลายประเภท เราจึงสามารถให้การประเมินมูลค่าสูงแก่คุณได้.
									</p>
								</div>
							</div>
						</div>
					</div>
			</section>
			<section class="renew_2024_top_gg_section is-sp" style="margin-top:0px !important;">
				<img class="renew_2024_top_gg_photo" src="../images/gold/photo_ito_sp.webp" alt="แนะนำผู้ประเมินของเรา">
				<div class="renew_2024_top_gg_profile_superbox">
					<div class="renew_2024_top_gg_profile_flex">
						<div class="renew_2024_top_gg_profile_left"> 名前 </div>
						<div class="renew_2024_top_gg_profile_right"> Ito </div>
					</div>
					<div class="renew_2024_top_gg_profile_flex">
						<div class="renew_2024_top_gg_profile_left">งานอดิเรก </div>
						<div class="renew_2024_top_gg_profile_right">ขัดรองเท้า</div>
					</div>
					<div class="renew_2024_top_gg_profile_flex">
						<div class="renew_2024_top_gg_profile_left">คำที่ชอบ</div>
						<div class="renew_2024_top_gg_profile_right">เดินเดินและพูดพูด.</div>
					</div>
					<div class="renew_2024_top_gg_profile_flex">
						<div class="renew_2024_top_gg_profile_left">ยี่ห้อที่ชอบ</div>
						<div class="renew_2024_top_gg_profile_right"> Harry Winston</div>
					</div>
					<div class="renew_2024_top_gg_profile_flex">
						<div class="renew_2024_top_gg_profile_left">ตัวอย่างการซื้อที่ผ่านมา</div>
						<div class="renew_2024_top_gg_profile_right">โอริน, แท่ง</div>
					</div>
					<div class="renew_2024_top_gg_storybox">
					เมื่อซื้อทองคำที่ Otakara-ya เราจะประเมินการออกแบบและแง่มุมอื่น ๆ ของทองคำตามราคาซื้อทองคำ 1g ในปัจจุบันและซื้อในราคาที่สูง.
					ที่ผ่านมาเราประเมินสินค้าไปแล้วกว่า 10,000 รายการ และลูกค้าหลายท่านก็พึงพอใจที่ได้รับมากกว่าที่คาดไว้.
					นอกจากนี้ Otakaraya ยังมีไฮโดรมิเตอร์ติดตั้งอยู่ในร้านค้าทุกแห่ง ซึ่งช่วยให้เราสามารถวัดปริมาณทองคำได้อย่างแม่นยำ.
					</div>
					<div class="renew_2024_top_gg_storybox">
					นอกจากราคาแล้ว เรายังมุ่งมั่นที่จะให้บริการลูกค้าอย่างดีที่สุดอีกด้วย.
					เราให้คำอธิบายโดยละเอียดไม่เพียงแต่เกี่ยวกับผลิตภัณฑ์เท่านั้น แต่ยังรวมถึงความปรารถนาของลูกค้าแต่ละรายด้วยเพื่อให้พวกเขาพึงพอใจ.
					เราจะพยายามอย่างดีที่สุดเพื่อให้บริการคุณและหวังว่าจะได้ใช้ Otakaraya.
					</div>
				</div>
			</section>
			<section class="is-pc">
				<div class="titleMain titleMain--wrapper">
					<h2 class="titleMain--main">
						<span>การแนะนำผู้ประเมินราคา</span>
					</h2>
				</div>
				<div class="content-inner">
					<section id="shop-leader02">
						<div class="shop-leader_container bordersitecolor">
							<div class="shop-leader_inner bordersitecolor">
								<div class="shop-leader_profile relative">
									<div class="shop-leader_head absolute">
										<h2 class="is-pc bgsitecolor bordersitecolor relative">
											<span class="noto thin" style="font-size: 26px; font-family: serif;">
												ผู้ประเมิน
											</span>
										</h2>
										<h2 class="is-sp bgsitecolor bordersitecolor relative">
											<span class="noto thin" style="margin:-1rem 0 0 0; font-size: 26px; font-family: serif;">
												ผู้ประเมิน
											</span>
										</h2>
									</div>
									<div class="shop-leader_head_shadow absolute">
										<div class="relative"></div>
									</div>
									<div class="imgbox absolute"><img
											src="../images/gold/estimator_ito.webp" alt=""></div>
									<ul class="floatlist">
										<li class="shop-leader_name sitetextcolor" style="font-family: serif;">
											<span class="noto ja" style="font-weight: bold;">Ito</span>
										</li>
										<li class="shop-leader_info">
											<table>
												<tbody>
													<tr>
														<th class="sitetextcolor">
															<span class="noto">งานอดิเรก </span>
														</th>
														<td><span class="noto">ขัดรองเท้า</span></td>
													</tr>
													<tr>
														<th class="sitetextcolor">
															<span class="noto">คำที่ชอบ</span>
														</th>
														<td><span class="noto">เดินเดินและพูดพูด.</span></td>
													</tr>
													<tr>
														<th class="sitetextcolor">
															<span class="noto">ยี่ห้อที่ชอบ</span>
														</th>
														<td><span class="noto">Harry Winston</span></td>
													</tr>
													<tr>
														<th class="sitetextcolor">
															<span class="noto">ตัวอย่างการซื้อที่ผ่านมา</span>
														</th>
														<td>
															<span class="noto">โอริน, แท่ง</span>
														</td>
													</tr>
												</tbody>
											</table>
										</li>
									</ul>
								</div>
								<p class="shop-leader_text">
									<span class="noto">
									เมื่อซื้อทองคำที่ Otakara-ya เราจะประเมินการออกแบบและแง่มุมอื่น ๆ ของทองคำตามราคาซื้อทองคำ 1g ในปัจจุบันและซื้อในราคาที่สูง.
									ที่ผ่านมาเราประเมินสินค้าไปแล้วกว่า 10,000 รายการ และลูกค้าหลายท่านก็พึงพอใจที่ได้รับมากกว่าที่คาดไว้.
									นอกจากนี้ Otakaraya ยังมีไฮโดรมิเตอร์ติดตั้งอยู่ในร้านค้าทุกแห่ง ซึ่งช่วยให้เราสามารถวัดปริมาณทองคำได้อย่างแม่นยำ
										<br /><br />
										นอกจากราคาแล้ว เรายังมุ่งมั่นที่จะให้บริการลูกค้าอย่างดีที่สุดอีกด้วย. เราให้คำอธิบายโดยละเอียดไม่เพียงแต่เกี่ยวกับผลิตภัณฑ์เท่านั้น แต่ยังรวมถึงความปรารถนาของลูกค้าแต่ละรายด้วยเพื่อให้พวกเขาพึงพอใจ.
										เราจะพยายามอย่างดีที่สุดเพื่อให้บริการคุณและหวังว่าจะได้ใช้ Otakaraya.
									</span>
								</p>
								<div class="shop-detail_button clearfix"> </div>
							</div>
						</div>
					</section>
				</div>
			</section>

			<!-- MOD_20240417 -->
			<div class="is-pc">
				<section>
					<div class="titleMain titleMain--wrapper">
						<h2 class="titleMain--main">
						เราจะรับซื้อทองคำทุกเงื่อนไข
						</h2>
						<div class="titleMain--lead">
							<p>นอกจากนี้เรายังยินดีที่จะซื้อทองคำและอุปกรณ์เสริมที่แตกหักจำนวนเล็กน้อย
							</p>
						</div>
					</div>
					<div class="colBox colBox__col04 sp__col03">
						<div class="col">
							<div class="img">
								<p class="is-pc"><img src="../images/gold/04-1.webp" alt="ทองคำบิดหรือฉีกขาด"></p>
								<p class="is-sp"><img src="../images/gold/04-1.webp" alt="ทองคำบิดหรือฉีกขาด"></p>
							</div>
							<p class="text text--center">ทองคำบิดหรือฉีกขาด</p>
						</div>
						<div class="col">
							<div class="img">
								<p class="is-pc"><img src="../images/gold/07-1.webp" alt="ทองคำโดยไม่ต้องแกะสลัก"></p>
								<p class="is-sp"><img src="../images/gold/07-1.webp" alt="ทองคำโดยไม่ต้องแกะสลัก"></p>
							</div>
							<p class="text text--center">ทองคำโดยไม่ต้องแกะสลัก</p>
						</div>
						<div class="col">
							<div class="img">
								<p class="is-pc"><img src="../images/gold/02-1.webp" alt="ทองคำจำนวนเล็กน้อย เช่น ต่างหูหนึ่งอัน"></p>
								<p class="is-sp"><img src="../images/gold/02-1.webp" alt="ทองคำจำนวนเล็กน้อย เช่น ต่างหูหนึ่งอัน"></p>
							</div>
							<p class="text text--center">ทองคำจำนวนเล็กน้อย เช่น ต่างหูหนึ่งอัน</p>
						</div>
						<div class="col">
							<div class="img">
								<p class="is-pc"><img src="../images/gold/03-1.webp" alt="อุปกรณ์โลหะของเข็มขัด"></p>
								<p class="is-sp"><img src="../images/gold/03-1.webp" alt="อุปกรณ์โลหะของเข็มขัด"></p>
							</div>
							<p class="text text--center">อุปกรณ์โลหะของเข็มขัด</p>
						</div>
						<div class="col">
							<div class="img">
								<p class="is-pc"><img src="../images/gold/06-1.webp" alt="ทองคำอุตสาหกรรม"></p>
								<p class="is-sp"><img src="../images/gold/06-1.webp" alt="ทองคำอุตสาหกรรม"></p>
							</div>
							<p class="text text--center">ทองคำอุตสาหกรรม</p>
						</div>
						<div class="col">
							<div class="img">
								<p class="is-pc"><img src="../images/gold/08-1-1.webp" alt="คำนึงถึงคุณค่าของศิลปะด้วย"></p>
								<p class="is-sp"><img src="../images/gold/08-1-1.webp" alt="คำนึงถึงคุณค่าของศิลปะด้วย"></p>
							</div>
							<p class="text text--center">คำนึงถึงคุณค่าของศิลปะด้วย</p>
						</div>
						<div class="col">
							<div class="img">
								<p class="is-pc"><img src="../images/gold/01-1.webp" alt="คำนึงถึงคุณค่าของโบราณ"></p>
								<p class="is-sp"><img src="../images/gold/01-1.webp" alt="คำนึงถึงคุณค่าของโบราณ"></p>
							</div>
							<p class="text text--center">คำนึงถึงคุณค่าของโบราณ</p>
						</div>
						<div class="col">
							<div class="img">
								<p class="is-pc"><img src="../images/gold/05-1-1.webp" alt="ฟันทองคำ ฟันปลอมสีทองคำ"></p>
								<p class="is-sp"><img src="../images/gold/05-1-1.webp" alt="ฟันทองคำ ฟันปลอมสีทองคำ"></p>
							</div>
							<p class="text text--center">ฟันทองคำ ฟันปลอมสีทองคำ</p>
						</div>
						<div class="col">
							<div class="img">
								<p class="is-pc">
									<img src="../images/gold/7f88058f04264c8f8733783d51428759.webp"
										alt="แหวนที่มีหินหายไป">
								</p>
								<p class="is-sp">
									<img src="../images/gold/7f88058f04264c8f8733783d51428759.webp"
										alt="แหวนที่มีหินหายไป">
								</p>
							</div>
							<p class="text text--center">แหวนที่มีหินหายไป</p>
						</div>
						<div class="col">
							<div class="img">
								<p class="is-pc">
									<img src="../images/gold/ec85d0541b60c1f7ba605bfca95b13d0.webp"
										alt="อุปกรณ์เสริมสีเข้ม">
								</p>
								<p class="is-sp">
									<img src="../images/gold/ec85d0541b60c1f7ba605bfca95b13d0.webp"
										alt="อุปกรณ์เสริมสีเข้ม">
								</p>
							</div>
							<p class="text text--center">อุปกรณ์เสริมสีเข้ม</p>
						</div>
						<div class="col">
							<div class="img">
								<p class="is-pc"><img src="../images/gold/38480b4ef7005b09bd7ed1a3e9dc1e52.webp"
										alt="จี้ด้านบนเท่านั้น"></p>
								<p class="is-sp"><img src="../images/gold/38480b4ef7005b09bd7ed1a3e9dc1e52.webp"
										alt="จี้ด้านบนเท่านั้น"></p>
							</div>
							<p class="text text--center">จี้ด้านบนเท่านั้น</p>
						</div>
						<div class="col">
							<div class="img">
								<p class="is-pc"><img src="../images/gold/f540432c0d452207e8eb30d72179e8ea.webp"
										alt="อุปกรณ์โลหะเช่นเข็มกลัด"></p>
								<p class="is-sp"><img src="../images/gold/f540432c0d452207e8eb30d72179e8ea.webp"
										alt="อุปกรณ์โลหะเช่นเข็มกลัด"></p>
							</div>
							<p class="text text--center">อุปกรณ์โลหะเช่นเข็มกลัด</p>
						</div>
					</div>
				</section>
			</div>
			<div class="is-sp">
				<div class="renew_202404_statebad_titlebox">
					<h2 class="renew_202404_statebad_title_h2">
					เราจะรับซื้อทองคำทุกเงื่อนไข
					</h2>
					<div class="renew_202404_statebad_title_lead">
					นอกจากนี้เรายังยินดีที่จะซื้อทองคำและอุปกรณ์เสริมที่แตกหักจำนวนเล็กน้อย
					</div>
				</div>
				<section class="renew_202404_statebad_section">
					<div class="renew_202404_statebad_itembox long">
						<div class="renew_202404_statebad_image">
							<img src="../images/gold/04-1.webp" alt="ทองคำบิดหรือฉีกขาด">
						</div>
						ทองคำบิดหรือฉีกขาด
					</div>
					<div class="renew_202404_statebad_itembox">
						<div class="renew_202404_statebad_image">
							<img src="../images/gold/07-1.webp" alt="ทองคำโดยไม่ต้องแกะสลัก">
						</div>
						ทองคำโดยไม่ต้องแกะสลัก
					</div>
					<div class="renew_202404_statebad_itembox">
						<div class="renew_202404_statebad_image">
							<img src="../images/gold/02-1.webp" alt="ทองคำจำนวนเล็กน้อย เช่น ต่างหูหนึ่งอัน">
						</div>
						ทองคำจำนวนเล็กน้อย เช่น ต่างหูหนึ่งอัน
					</div>
					<div class="renew_202404_statebad_itembox">
						<div class="renew_202404_statebad_image">
							<img src="../images/gold/03-1.webp" alt="อุปกรณ์โลหะของเข็มขัด">
						</div>
						อุปกรณ์โลหะของเข็มขัด
					</div>
					<div class="renew_202404_statebad_itembox">
						<div class="renew_202404_statebad_image">
							<img src="../images/gold/06-1.webp" alt="ทองคำอุตสาหกรรม">
						</div>
						ทองคำอุตสาหกรรม
					</div>
					<div class="renew_202404_statebad_itembox long">
						<div class="renew_202404_statebad_image">
							<img src="../images/gold/08-1-1.webp" alt="คำนึงถึงคุณค่าของศิลปะด้วย">
						</div>
						คำนึงถึงคุณค่าของศิลปะด้วย
					</div>
					<div class="renew_202404_statebad_itembox">
						<div class="renew_202404_statebad_image">
							<img src="../images/gold/01-1.webp" alt="คำนึงถึงคุณค่าของโบราณ">
						</div>
						คำนึงถึงคุณค่าของโบราณ
					</div>
					<div class="renew_202404_statebad_itembox">
						<div class="renew_202404_statebad_image">
							<img src="../images/gold/05-1-1.webp" alt="ฟันทองคำ ฟันปลอมสีทองคำ">
						</div>
						ฟันทองคำ ฟันปลอมสีทองคำ
					</div>
					<div class="renew_202404_statebad_itembox">
						<div class="renew_202404_statebad_image">
							<img src="../images/gold/7f88058f04264c8f8733783d51428759.webp" alt="แหวนที่มีหินหายไป">
						</div>
						แหวนที่มีหินหายไป
					</div>
					<div class="renew_202404_statebad_itembox">
						<div class="renew_202404_statebad_image">
							<img src="../images/gold/ec85d0541b60c1f7ba605bfca95b13d0.webp" alt="อุปกรณ์เสริมสีเข้ม">
						</div>
						อุปกรณ์เสริมสีเข้ม
					</div>
					<div class="renew_202404_statebad_itembox long">
						<div class="renew_202404_statebad_image">
							<img
								src="../images/gold/38480b4ef7005b09bd7ed1a3e9dc1e52.webp" alt="จี้ด้านบนเท่านั้น">
						</div>
						จี้ด้านบนเท่านั้น
					</div>
					<div class="renew_202404_statebad_itembox">
						<div class="renew_202404_statebad_image">
							<img
								src="../images/gold/f540432c0d452207e8eb30d72179e8ea.webp" alt="อุปกรณ์โลหะเช่นเข็มกลัด">
						</div>
						อุปกรณ์โลหะเช่นเข็มกลัด
					</div>
				</section>
				<!-- renew_202404_statebad_section -->
			</div>

			<!-- MOD_20240417 -->
			<h2 class="renew_2024_titlesub follow is-sp">
				<div class="renew_2024_titlesub_topbar">
					<div class="renew_2024_titlesub_topbar_center"></div>
					<div class="renew_2024_titlesub_topbar_left"></div>
					<div class="renew_2024_titlesub_topbar_right"></div>
				</div>
				คำถามที่พบบ่อย
			</h2>
			<section class="faq_section renew_2024">
				<div class="titleMain titleMain--wrapper is-pc">
					<h2 class="titleMain--main">
						คำถามที่พบบ่อย
					</h2>
				</div>
				<div class="qa__wrap js__more--3th">
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">
								สินค้าทองคำมีตราสินค้าจะประเมินอย่างไร?
							</dt>
							<dd class="qa__list__a">
							เมื่อพูดถึงแหวนและสร้อยคอที่มีแบรนด์ เราจะประเมินทั้งราคาทองคำและมูลค่าของแบรนด์
							ในบางกรณีมูลค่าของแบรนด์จะสูงกว่าราคาทองคำมาก
							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">
							คุณสามารถซื้อผลิตภัณฑ์ที่มีความบริสุทธิ์ต่ำ เช่น K10 ได้หรือไม่
							</dt>
							<dd class="qa__list__a">
							แน่นอนว่ามีวางจำหน่ายแล้ว ตัวอย่างเช่น แม้ว่าจะไม่มีแสตมป์ แต่ถ้าเราสามารถยืนยันได้ว่ามีทองคำอยู่จำนวนเล็กน้อย เราก็จะซื้อมัน
							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">
							ฉันมีอุปกรณ์เสริม แต่ฉันไม่แน่ใจเกี่ยวกับวัสดุ
							</dt>
							<dd class="qa__list__a">
							หากคุณนำติดตัวไปด้วยเราจะตรวจสอบวัสดุทันที โปรดอย่าลังเลที่จะติดต่อเรา
							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">
							คุณสามารถซื้อมันได้แม้ว่ามันจะเป็นเงินจำนวนเล็กน้อยหรือไม่?
							</dt>
							<dd class="qa__list__a">
							เรายินดีที่จะประเมินและซื้อปริมาณเท่าใดก็ได้
							แม้จะไม่แน่ใจว่าเป็นทองคำหรือไม่ โปรดติดต่อเราได้เลย เพราะเราประเมินราคาให้ฟรี
							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">
							เป็นไปได้ไหมที่จะซื้อโดยไม่มีอุปกรณ์เสริม?
							</dt>
							<dd class="qa__list__a">
							ตามหลักการแล้ว สินค้าจะมาพร้อมกับอุปกรณ์เสริม ถ้ามี แต่เรายินดีที่จะประเมินและซื้อสินค้าแม้ว่าจะไม่มีอุปกรณ์เสริมก็ตาม
							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">
							เหตุใดฉันจึงต้องมีบัตรประจำตัว?
							</dt>
							<dd class="qa__list__a">
							เราจะบันทึกการระบุตัวตนของบุคคลที่ขายสินค้าตามที่กฎหมายธุรกิจสินค้ามือสองกำหนดไว้
							จะไม่ใช้เพื่อวัตถุประสงค์อื่นใด
							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">
							การประเมินทองคำ/โลหะมีค่าเพียงอย่างเดียวสามารถทำได้หรือไม่?
							</dt>
							<dd class="qa__list__a">
							ใช่ แน่นอนว่าเรายินดีที่จะยอมรับเพียงการประเมินเท่านั้น
เราเชื่อว่าสิ่งของที่คุณนำมานั้นเต็มไปด้วยความทรงจำมากมาย สิ่งที่ฉันซื้อด้วยโบนัสครั้งแรก
สิ่งที่พ่อแม่ของคุณซื้อให้คุณเป็นของขวัญที่กำลังเติบโต สิ่งที่คุณยายให้คุณเป็นของขวัญแต่งงาน ฯลฯ
แต่ละรายการที่เราเก็บไว้มีเรื่องราว
ฉันแน่ใจว่าทุกคนเคยสงสัยอย่างน้อยครั้งหนึ่งว่า ``แม้ว่าจะมีของวางอยู่ในลิ้นชัก ถ้าฉันขายมันจริงๆ จะราคาเท่าไหร่?''
Otakaraya เป็นสถานที่ที่สะดวกในการตอบคำถามดังกล่าว เรามีวิธีการประเมินที่หลากหลายเพื่อให้เหมาะกับร้านค้า การเดินทางเพื่อธุรกิจ และความต้องการของลูกค้า
โปรดใช้มันและหารือเกี่ยวกับผลการประเมินกับครอบครัวของคุณ
							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">
							คุณสามารถซื้อมันได้ด้วยเงินที่หักหรือเปล่า?
							</dt>
							<dd class="qa__list__a">
							เรายินดีที่จะประเมินและซื้อมัน
							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">
							มีความเป็นไปได้ไหมที่จะมีค่าธรรมเนียมการประเมิน (ค่าประเมิน) ทองคำ/โลหะมีค่า?
							</dt>
							<dd class="qa__list__a">
							เราไม่เรียกเก็บค่าธรรมเนียมการประเมินทองคำ โลหะมีค่า หรือสิ่งของอื่นๆ
							โปรดวางใจได้ว่าการประเมินทั้งหมดไม่มีค่าใช้จ่าย
							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">
							ราคาซื้อจะแตกต่างกันหรือไม่ขึ้นอยู่กับว่าแท่งโลหะนั้น ``ประทับตรา'' หรือ ``ไม่มีการประทับตรา'' หรือไม่?
							</dt>
							<dd class="qa__list__a">
							การแกะสลักเป็นข้อพิสูจน์ที่สำคัญถึงตราสินค้าและความน่าเชื่อถือของแท่งโลหะ
แท่งโลหะยังถูกแกะสลักด้วยตัวเลข ดังนั้นผู้ที่ซื้อมันก่อนจึงสามารถระบุได้
ขออภัย ในบางกรณี เราอาจปฏิเสธที่จะซื้อสินค้าที่ไม่มีสินค้าเหล่านี้
เหตุผลก็คือในช่วงไม่กี่ปีที่ผ่านมา มีหลายกรณีที่มีการลักลอบนำแท่งโลหะจากต่างประเทศเข้าสู่ญี่ปุ่น และเพื่อให้ระบุแหล่งที่มาของการซื้อได้ยาก
เนื่องจากมีอาชญากรจำนวนมากที่ละลายและขายมัน
ด้วยวิธีนี้แม้ว่าจะมีบางกรณีที่เราปฏิเสธแม้ว่าจะไม่มีตราประทับก็ตามก็มีหลักฐานการซื้อและสถานที่ซื้อและหากเรื่องราวสอดคล้องกัน
คุณสามารถซื้อแท่งโลหะได้ในราคาเดียวกับแท่งปกติ โปรดอย่าลังเลที่จะติดต่อเรา
							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">
							ราคาซื้อเครื่องประดับทองคำและแท่งโลหะแตกต่างกันหรือไม่?
							</dt>
							<dd class="qa__list__a">
							ราคาซื้ออุปกรณ์เสริมและแท่งโลหะมีความแตกต่างกัน
ประการแรก โดยทั่วไปแล้วแท่งโลหะนั้นทำมาจากทองคำบริสุทธิ์ (K24) แท่งมีหลากหลายยี่ห้อ
มีเพียงบริษัทที่ได้รับการยอมรับทั่วโลกเท่านั้นจึงจะสามารถประทับตราดังกล่าวได้ ในบรรดาแท่งโลหะของแบรนด์ที่น่าเชื่อถือที่สุด
มีการซื้อขายในราคาที่สูงในตลาด
นอกจากนี้ แท่งยังถูกแปรรูปเป็นแท่งทองคำ (ทองคำแท่ง) ด้วยกระบวนการต่างๆ ที่โรงงานถลุง
การรวมค่าธรรมเนียมสำหรับกระบวนการกลั่นก็เป็นสาเหตุหนึ่งที่ทำให้ราคาซื้อแตกต่างกัน
							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">
							คุณสามารถซื้อสร้อยคอที่มีโซ่หักได้ไหม?
							</dt>
							<dd class="qa__list__a">
							สร้อยคอที่หักส่วนใหญ่สามารถซ่อมแซมได้ง่ายหากคุณฝากไว้กับเรา
กรุณามั่นใจ.
หากคุณจัดการมันด้วยคีมแล้วหัก คุณจะสูญเสียคุณค่าดั้งเดิมของมัน ฉันจะขอบคุณมากหากคุณสามารถปรึกษาฉันเกี่ยวกับสถานการณ์ปัจจุบันได้
							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">
							รอยขีดข่วนและสิ่งสกปรกจะส่งผลต่อราคาซื้อหรือไม่?
							</dt>
							<dd class="qa__list__a">
							เป็นการดีกว่าที่จะรักษารอยขีดข่วนและสิ่งสกปรกให้สะอาด แต่ถ้าคุณพยายามบังคับตัวเองให้ทำความสะอาดสิ่งสกปรก
ในกรณีที่เลวร้ายที่สุดอาจทำให้แผลกว้างขึ้นได้
ส่วนคราบสกปรกการใช้สารเคมีอาจทำให้สินค้าเสียสีเดิมและคุณภาพเสื่อมลงได้
โดยพื้นฐานแล้ว คุณสามารถทิ้งไว้กับเราได้โดยไม่ต้องทำการเปลี่ยนแปลงใดๆ
หากคุณกังวลเกี่ยวกับสิ่งสกปรก คุณสามารถเช็ดด้วยผ้าแห้งนุ่มๆ หรือใช้ผงซักฟอกที่เป็นกลางเจือจางเพื่อทำความสะอาด
อย่างไรก็ตาม การดูแลทองคำและโลหะมีค่าต้องอาศัยความรู้เฉพาะทาง และสำคัญที่จะไม่ส่งผลกระทบต่อสภาพของผลิตภัณฑ์ ดังนั้น โปรดใช้ความระมัดระวัง
หากคุณไม่แน่ใจว่าต้องทำอย่างไร โปรดติดต่อร้านค้าหรือเคาน์เตอร์ในพื้นที่ของคุณ
							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">
							คุณสามารถประเมินทองคำ/โลหะมีค่าโดยไม่ต้องประทับตราได้หรือไม่?
							</dt>
							<dd class="qa__list__a">
							ใช่คุณสามารถซื้อได้
เกี่ยวกับการแกะสลักทองคำ ผลิตภัณฑ์ส่วนใหญ่ของเราในปัจจุบันมีการแกะสลัก
จริงๆ แล้ว มีหลายกรณีที่สินค้าที่ผลิตในสมัยก่อนหรือสินค้าจากต่างประเทศไม่มีการแกะสลัก
ร้านค้าบางแห่งอาจไม่สามารถซื้อสินค้าโดยไม่มีตราประทับได้ แต่ Otakaraya มีเครื่องวิเคราะห์เอ็กซ์เรย์ฟลูออเรสเซนต์ติดตั้งไว้
ดังนั้นจึงเป็นไปได้ที่จะวัดปริมาณทองคำและโลหะมีค่าทางวิทยาศาสตร์ ซึ่งไม่สามารถระบุด้วยอุปกรณ์ทั่วไปได้
							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">
							คุณสามารถซื้อเหรียญใหญ่/เล็ก, เหรียญทองคำต่างประเทศ, เหรียญเก่า ฯลฯ ได้หรือไม่?
							</dt>
							<dd class="qa__list__a">
							เราสามารถซื้อได้ไม่เพียงแค่เหรียญขนาดใหญ่และขนาดเล็กที่ออกในสมัยเอโดะเท่านั้น แต่ยังสามารถซื้อเงินที่ใช้ในอดีต (ธนบัตรและเหรียญกษาปณ์) หรือที่เรียกว่าเหรียญเก่าอีกด้วย
มีซีรีส์ยอดนิยมมากเมื่อพูดถึงเหรียญทองคำจากต่างประเทศ ตัวอย่างเช่น "เหรียญทองคำแพนด้า" ที่ออกในประเทศจีน
"เหรียญทองคำอินทรี" ของอเมริกา และ "เหรียญทองคำใบเมเปิ้ล" ของแคนาดา เป็นที่รู้จักไปทั่วโลก
บริษัทอื่นอาจซื้อเหรียญทองคำพรีเมียมเหล่านี้ได้โดยพิจารณาจากคุณภาพและน้ำหนักของทองคำเท่านั้น
ที่ Otakaraya จุดแข็งของเราคือการประเมินสินค้ารวมทั้งมูลค่าโดยรวมและซื้อในราคาที่สูง
แน่นอนว่าเราไม่สามารถซื้อได้เฉพาะเหรียญทองคำเท่านั้น แต่ยังสามารถซื้อเหรียญเงิน แพลเลเดียม เหรียญแพลทินัม เหรียญที่ระลึก และเหรียญรางวัลได้อีกด้วย
							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">
							การประเมินทองคำ/โลหะมีค่าใช้เวลานานเท่าใด?
							</dt>
							<dd class="qa__list__a">
							การประเมินสามารถทำได้ภายในเวลาประมาณ 5 ถึง 15 นาที ขึ้นอยู่กับปริมาณ
นอกจากนี้หากคุณไม่มีเวลาไปเยี่ยมชมร้านค้าหรือไม่มีร้านค้าใกล้เคียง ก็สามารถซื้อสินค้าได้ที่ร้านเช่นกัน
คุณสามารถเลือกวิธีประเมินที่เหมาะกับไลฟ์สไตล์ของคุณได้ เรายังรับคำปรึกษาทางโทรศัพท์หรืออีเมลด้วย
ไม่ว่าคุณจะใช้วิธีการประเมินแบบใด จำนวนราคาประเมินที่คุณนำเสนอจะยังคงเท่าเดิม
ไม่ต้องกังวล ค่าประเมินทั้งหมดฟรี
							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">
							เวลาที่ดีที่สุดในการขายทองคำและโลหะมีค่าคือเมื่อใด? จริงหรือไม่ที่ราคาซื้อแตกต่างกันไปขึ้นอยู่กับวัน?
							</dt>
							<dd class="qa__list__a">
							ราคาตลาดอัพเดททุกวัน ดังนั้นราคาซื้อจะแตกต่างกันไปขึ้นอยู่กับวัน
เวลาที่ดีที่สุดในการขายคือเมื่อราคาทองคำสูงขึ้นหรือเมื่ออัตราแลกเปลี่ยนมีแนวโน้มไปทางค่าเงินเยนที่อ่อนค่าลง
นอกจากนี้ เมื่อสถานการณ์โลกไม่มั่นคง ความเชื่อมั่นในธนบัตรมีแนวโน้มลดลง ความเชื่อมั่นในทองคำจึงเพิ่มขึ้น และราคาตลาดก็สูงขึ้นอย่างหลีกเลี่ยงไม่ได้
ในช่วงไม่กี่ปีที่ผ่านมา ราคาทองคำและโลหะมีค่ายังคงเพิ่มขึ้นอย่างต่อเนื่องในระยะยาว และคุณสามารถคาดหวังที่จะซื้อทองคำและโลหะมีค่าได้ในราคาที่สูง
							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">
							"ราคาซื้อทองคำและโลหะมีค่า" ถูกกำหนดอย่างไร?
							</dt>
							<dd class="qa__list__a">
							นอกเหนือจากการประเมินราคาตลาดโลกสามครั้งที่อัปเดตทุกวัน น้ำหนักของสินค้า และคุณภาพของสินค้า (K24, K18 ฯลฯ)
สุดท้ายนี้ เราจะเสนอราคาซื้อตามการประเมินการออกแบบและแบรนด์โดยรวมของเรา
เรามุ่งมั่นที่จะซื้อในราคาที่สูงกว่าบริษัทอื่นๆ เสมอ
							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">
							เวลาที่ดีที่สุดในการขายโลหะมีค่าคือเมื่อใด?
							</dt>
							<dd class="qa__list__a">
							เวลาในการขายโลหะมีค่าอาจมาเร็วหรือมูลค่าอาจเพิ่มขึ้นหากคุณรอเป็นเวลานาน ดังนั้นจึงเป็นการยากที่จะบอกว่าเวลาใดดีที่สุดในการขาย
หากต้องการเก็บไว้นานๆแล้วขายได้ก็ต้องรักษาให้อยู่ในสภาพดี
เราแนะนำให้จัดเก็บอย่างเหมาะสมและบำรุงรักษาตามปกติ
							</dd>
						</dl>
					</div>
				</div>
				<div class="btn__wrap btn__more js__more--btn3 gtm-more-qa">
					<span>ดูเพิ่มเติม</span>
				</div>
			</section>
			<div class="wd_spacer is-pc"></div>

			<?php get_template_part( 'template-parts/assessment_cta' ); ?>
		</article>
		<?php get_template_part( 'template-parts/side-menu' ); ?>
	</main>


	<?php get_footer( 'common' ); ?>
	<script src="../js/common.js"></script>
	<script src="../js/slick.min.js"></script>
	<script src="../js/shared.js"></script>
	<script src="../js/breadlist.js"></script>
	<script src="../js/renew202404.js"></script>
	<script src="../js/vue.min.js"></script>
	<script src="../js/axios.min.js"></script>
	<script src="../js/japanese-holidays.min.js"></script>
	<script src="../js/price_load_ex_v2.js"></script>
	<script>
		//crossdomainのphpファイルのアップ先URL
		const crossdomain_file = "https://www.otakaraya.jp/rate_files_v2/crossdomain.php";
		//データを反映したいDOM要素のID
		const dom_id = ["#price", "#simulation", "#todayprice", "#gram_market_price"];
		Vue.use(PriceLoad, {
			_file: crossdomain_file,
			_dom: dom_id
		});
	</script>
	<script>
		$(window).on('load', function() {
			const moreNum31 = 3;
			$('.js__more--item31:nth-child(n + ' + (moreNum31 + 1) + ')').addClass('is-hidden').hide();
			$('.js__more--btn31').on('click', function() {
				const hiddenItems1 = $(this).prev('.js__more--31th').children('.js__more--item31.is-hidden');
				hiddenItems1.slice(0, moreNum31).removeClass('is-hidden').fadeIn(600); // フェードインしながら展開
				if (hiddenItems1.length <= moreNum31) $(this).fadeOut(); // すべて表示されたら非表示
			});
		});

		$(window).on('load', function() {
			const moreNum30 = 3;
			$('.js__more--item30:nth-child(n + ' + (moreNum30 + 1) + ')').addClass('is-hidden').hide();
			$('.js__more--btn30').on('click', function() {
				const hiddenItems2 = $(this).prev('.js__more--30th').children('.js__more--item30.is-hidden');
				hiddenItems2.slice(0, moreNum30).removeClass('is-hidden').fadeIn(600); // フェードインしながら展開
				if (hiddenItems2.length <= moreNum30) $(this).fadeOut(); // すべて表示されたら非表示
			});
		});

		$(function() {
			appear();
		})
		$(window).scroll(function() {
			appear();
		})

		function appear() {
			$(".renew_2024_market_countup").each(
				function() {
					var now_screen_h = $(window).height();
					var now_screen_w = $(window).width();
					var ap_position = $(this).offset().top;
					var gap = 0;
					if ($(this).hasClass("wd_appear2")) {
						gap += 80;
					} else if ($(this).hasClass("wd_appear3")) {
						gap += 160;
					}
					if ($(window).scrollTop() > ap_position - now_screen_h + gap) {

						if ($(this).hasClass("done") == false) {

							var price_text = $(this).text();
							var price_num = parseInt(price_text.replace(",", ""));
							//countupper( $(this) , price_num , 1000 ) ;
							$(this).text(Math.abs(price_num));

							$(this).addClass("done");

						}

					}
				}
			);
		}

		function countupper(obj, last, time) {
			if (last < 0) {
				last = last * -1;
			}
			$({
				countup: 0
			}).stop().animate({
				countup: last
			}, {
				progress: function() {
					obj.text(Math.floor(this.countup).toLocaleString());
				},
				duration: time
			});
		}

		jQuery(function() {
			jQuery(document).on('click', '.w_tab', function() {
				$('.w_tab, .w_unit').removeClass('active');
				$('#answer, .weight').val('');

				if ($(this).hasClass('w_gram')) {
					$('.w_gram').addClass('active');

				} else if ($(this).hasClass('w_oz')) {
					$('.w_oz').addClass('active');
					$('.w_oz .weight').prop('selectedIndex', 0);

				}
			});
		});



		function priceset() {
			// 読み込み時にselect二種類追加
			var k18val = jQuery('#k18val').text();
			k18val = k18val.replace(/,/g, '');

			var pt900 = jQuery('#pt900').text();
			var pt850 = jQuery('#pt850').text();
			pt900 = pt900.replace(/,/g, '');
			pt850 = pt850.replace(/,/g, '');
			pt900 = Math.round(pt900 / 2 + k18val / 2);
			pt850 = Math.round(pt850 / 2 + k18val / 2);

			var tool_bace_price = jQuery('#tool_bace_price').text();
			var pt_tool_bace_price = jQuery('#pt_tool_bace_price').text();
			var pd_tool_bace_price = jQuery('#pd_tool_bace_price').text();
			tool_bace_price = Number(tool_bace_price.replace(/,/g, ''));
			pt_tool_bace_price = Number(pt_tool_bace_price.replace(/,/g, ''));
			pd_tool_bace_price = Number(pd_tool_bace_price.replace(/,/g, ''));

			plus_pt950 = pd_tool_bace_price * 0.02;
			plus_pt900 = pd_tool_bace_price * 0.05;
			plus_pt850 = pd_tool_bace_price * 0.08;

			k24_price = Math.round(tool_bace_price * 0.99 - 40);
			k23_price = Math.round(tool_bace_price * 0.94 - 40);
			k22_price = Math.round(tool_bace_price * 0.91 - 40);
			k21_price = Math.round(tool_bace_price * 0.89 - 40);
			k20_price = Math.round(tool_bace_price * 0.82 - 40);
			k18_price = Math.round(tool_bace_price * 0.75);
			k14_price = Math.round(tool_bace_price * 0.57 - 40);
			k12_price = Math.round(tool_bace_price * 0.48 - 40);
			k10_price = Math.round(tool_bace_price * 0.40 - 40);
			k9_price = Math.round(tool_bace_price * 0.36 - 40);
			k8_price = Math.round(tool_bace_price * 0.30 - 40);
			k5_price = Math.round(tool_bace_price * 0.15 - 40);
			k7_price = Math.round(tool_bace_price * 0.25 - 40);
			k17_price = Math.round(tool_bace_price * 0.66 - 40);

			pt1000_price = Math.round(pt_tool_bace_price * 0.999 - 70);
			pt950_price = Math.round(pt_tool_bace_price * 0.94 - 80 + plus_pt950);
			pt900_price = Math.round(pt_tool_bace_price * 0.895 - 80 + plus_pt900);
			pt850_price = Math.round(pt_tool_bace_price * 0.84 - 80 + plus_pt850);
			pt650_price = Math.round(pt_tool_bace_price * 0.64 - 80);
			pt500_price = Math.round(pt_tool_bace_price * 0.49 - 80);
			pt100_price = Math.round(pt_tool_bace_price * 0.08 - 80);

			k18_half = k18_price / 2;
			pt900_half = pt900_price / 2;
			pt850_half = pt850_price / 2;
			k18_pt900_half = k18_half + pt900_half;
			k18_pt850_half = k18_half + pt850_half;

			var purity = 'gold-top';
		}


		jQuery(window).on("load", function() {
			setTimeout(() => {
				priceset();
			}, 2000);
		});

		//window.onload = priceset;
		document.addEventListener('DOMContentLoaded', function() {
			var select_state = document.getElementById("rateSimulation--select");
			jQuery(document).on('change', '#rateSimulation--select', function() {
				var text = jQuery('option:selected').val();
				multi();
			});

			jQuery(document).on('blur change', '.weight', function() {
				var text = jQuery(this).val() || jQuery('option:selected', '.weight').val();
				multi();
			});

			function multi() {
				var text = jQuery('#rateSimulation--select option:selected').val();
				var removed = text.replace(/,/g, '');
				var num = parseInt(removed, 10);
				var weight = jQuery(".weight").val() || jQuery('option:selected', '.weight').val();
				if (num) {
					if (weight) {
						var answer = num * weight;
						answer = Math.round(answer);
						answer = answer.toLocaleString();
						jQuery('#answer').val(answer);
					}
				}
				console.log(weight)
			}

			jQuery(function() {
				jQuery(document).on('mouseup keyup change', '.weight', function(e) {
					var month = parseInt(jQuery(this).val());
					var monthMax = parseInt(jQuery(this).attr('max'));
					var monthMin = parseInt(jQuery(this).attr('min'));
					if (month > monthMax) {
						jQuery(this).val(monthMax);
					}
					if (month < monthMin) {
						jQuery(this).val(monthMin);
					}
				});
			});
		});
		let cnt = document.getElementById('cat_list').childElementCount;
		if (cnt === 5) {
			let elements = document.querySelectorAll('.tab__item');
			let lastElement = elements[elements.length - 1];
			lastElement.classList.add('tab__item_others');
		}

		document.addEventListener('DOMContentLoaded', function() {
			const items = document.querySelectorAll('.latest_results_item');
			const loadMoreButton = document.querySelector('.js__more--btn10');
			let itemsToShow = 8;

			// 初期状態で8個表示
			function showItems() {
				items.forEach((item, index) => {
					if (index < itemsToShow) {
						item.style.display = 'block';
					} else {
						item.style.display = 'none';
					}
				});
			}

			// 最新結果が8個以下の場合、ボタンを非表示にする
			if (items.length <= 8) {
				loadMoreButton.style.display = 'none';
			} else {
				// ボタンクリック時にさらに8個表示
				loadMoreButton.addEventListener('click', function() {
					itemsToShow += 8;
					showItems();

					// すべて表示された場合、ボタンを非表示に
					if (itemsToShow >= items.length) {
						loadMoreButton.style.display = 'none';
					}
				});
			}

			// 初期表示を呼び出す
			showItems();
		});
		var itemCount = $('.latest_results_item').length;

		console.log(itemCount);

		// 要素の数が10個未満の場合に実行する処理
		if (itemCount < 11) {
			// ここに処理を記述
			console.log('latest_results_item のクラスが10個未満です');

			// 例えば、特定の要素にメッセージを追加する場合
			$('#message').text('There are less than 10 items.');
		}

		document.addEventListener('DOMContentLoaded', function() {
			const headers = document.querySelectorAll('.accordion-header');

			headers.forEach(header => {
				header.addEventListener('click', function() {
					const content = this.nextElementSibling;
					const icon = this.querySelector('.accordion-icon');

					if (content.classList.contains('open')) {
						// 閉じる
						content.style.maxHeight = null;
						content.classList.remove('open');
						icon.textContent = '＋'; // アイコンを「+」に
					} else {
						// 開く
						content.style.maxHeight = content.scrollHeight + 'px';
						content.classList.add('open');
						icon.textContent = '－'; // アイコンを「-」に
					}
				});
			});
		});
	</script>
</body>

</html>