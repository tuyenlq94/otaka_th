<?php
/* Template Name: 宝石トップページ */
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php wp_head(); ?>
	<?php get_template_part( 'head2' ); ?>


	<!-- local css -->


	<link rel="stylesheet" type="text/css" href="../css/jewelry.min.css">
	<link rel="stylesheet" href="../css/renew202404_2.css">
	<link rel="stylesheet" href="../css/vertical-m.css">
	<link rel="stylesheet" type="text/css" href="../css/shared.css">
	<link rel="stylesheet" type="text/css" href="../css/daiya.css">
	<title><?php echo get_the_title(); ?></title>

	<style>
		#jewelry .jewelrySoubaBox__table table .table__items .table__item.price::after {
			content: none;
		}

		#jewelry .jewelrySoubaBox__table table .table__items .table__item.price::before {
			font-size: 68.75%;
			font-weight: normal;
			content: "HK$";
		}

		#jewelry .jewelrySoubaBox__form .form__answer .price .value {
			font-size: inherit;
			font-weight: unset;
		}
	</style>
</head>


<body id="jewelry">
	<?php get_header( 'common' ); ?>

	<div id="topic__path" class="topic__path">
		<ol class="topic__path--list">
			<li class="topic__path--item" itemprop="itemListElement" itemscope=""
				itemtype="https://schema.org/ListItem">
				<a itemprop="item" href="/">
					<span itemprop="name">ซื้อคืนร้านเฉพาะ Otakaraya TOP</span>
				</a>
				<meta itemprop="position" content="1">
			</li>
			<li class="topic__path--item" itemprop="itemListElement" itemscope=""
				itemtype="https://schema.org/ListItem">
				<span itemprop="name">รับซื้อเพชรและอัญมณี</span>
				<meta itemprop="position" content="2">
			</li>
		</ol>
	</div>

	<div class="fv_img_wrap">
		<img class="is-pc" src="../images/daiya/2024_diamondhouseki_TOP_PC.webp" alt="">
		<img class="is-sp" src="../images/daiya/2024_diamondhouseki_TOP_SP.webp" alt="">
		<?php include __DIR__ . '/template-parts/fv_obi.php'; ?>
	</div>

	<?php get_template_part( 'template-parts/license' ); ?>
	<?php get_template_part( 'template-parts/shop-info' ); ?>

	<main class="contents">
		<article class="contents__left">
			<section>
				<!--     ▼▼▼ top_h2_text▼▼▼     -->
				<h2 class="titleHeading top_h2_text">
				ประเมินและรับซื้อเพชรในราคาสูง ต้องที่โอทาคาระยะ
				</h2> <!--     ▲▲▲ top_h2_text▲▲▲     -->
				<div class="head_text">
				เพชรเป็นแร่ตามธรรมชาติที่แข็งที่สุดในโลก ก่อตัวขึ้นใต้พื้นโลกภายใต้ความร้อนและความดันสูง การประเมินมูลค่าของเพชรจะพิจารณาจากหลัก 4C ได้แก่ กะรัต (Carat) สี (Color) ความสะอาด (Clarity) และการเจียระไน (Cut) โดยเฉพาะเพชรที่มีสีใสบริสุทธิ์และได้รับการเจียระไนที่ดีจะมีมูลค่าสูงเป็นพิเศษ

ที่โอทาคาระยะ เรารับซื้อเครื่องประดับเพชรหลากหลายประเภท ไม่ว่าจะเป็นแหวนเพชรหรือสร้อยเพชรในราคาสูง  โดยผู้เชี่ยวชาญของเราจะทำการประเมินคุณภาพอย่างแม่นยำ พร้อมทั้งเสนอราคาที่คุณพึงพอใจ
				</div>
			</section>
			<section class="simple_cta_top">
				<div class="kv_area">
					<p class="is-pc"><img src="../images/daiya/diamond_banner_PC.webp" alt="眠っているダイアモンド　今、売らないと損するかも！？">
					</p>
					<p class="is-sp"><img src="../images/daiya/diamond_banner_SP.webp" alt="眠っているダイアモンド　今、売らないと損するかも！？">
					</p>
				</div>
			</section>

			<?php get_template_part( 'template-parts/assessment_cta' ); ?>



			<?php
			// モジュール化すると変数をスクリプトに渡せないため
			//  get_template_part('template-parts/daiya_parts');
			?>
			<?php if ( isset( $_GET[ 'mode' ] ) && $_GET[ 'mode' ] === 'test' ) { ?>

				<!-- MOD_20240417 -->
				<div class="renew_2024_dia_titlebox is-sp">
					<h2 class="renew_2024_dia_title_h2">
						<img class="renew_2024_dia_title_l" src="../images/daiya/dia_image01_202404.png">
						<img class="renew_2024_dia_title_r" src="../images/daiya/dia_image02_202404.png">
						<p>

						</p>
					</h2>
					<div class="renew_2024_dia_title_lead">
						<p>

						</p>
					</div>
				</div>
				<!-- MOD_20240417 -->

				<!-- ▼▼▼為替計算▼▼▼ -->
				<?php

				// REST APIからデータを取得する関数
				function fetch_wp_api_data( $url ) {
					$response = wp_remote_get( $url );

					// エラーチェック
					if ( is_wp_error( $response ) ) {
						echo "Something went wrong: " . $response->get_error_message();
						return null;
					}

					return json_decode( wp_remote_retrieve_body( $response ), true );
				}


				// APIエンドポイントのURL
				$daiya_api_url       = 'https://www.otakaraya.jp/daiya/wp-json/wp/v2/pages/24486/';
				$kawase_rate_api_url = 'https://www.otakaraya.jp/daiya/wp-json/wp/v2/pages/23897/';

				// APIリクエストを実行
				$daiya_data             = fetch_wp_api_data( $daiya_api_url );
				$kawase_rate_daiya_data = fetch_wp_api_data( $kawase_rate_api_url );

				// データが取得できたかチェック
				if ( ! $daiya_data || ! $kawase_rate_daiya_data ) {
					return; // エラーが出た場合は処理を中断
				}

				// 為替レート取得
				$exchangeRate = $kawase_rate_daiya_data[ 'acf' ][ 'kawase_rate' ];
				;

				if ( ! is_numeric( $exchangeRate ) ) {
					$exchangeRate = 140;
				}


				// ダイヤモンド買取相場価格表のhtmlソースを管理画面から取得
				$price_all   = get_page_by_path( 'price_all' );
				$price_all   = $price_all->ID;
				$table       = $daiya_data[ 'acf' ][ 'souba_price_all' ];
				$carat_num   = [
					[ "value" => "0.1", "label" => "01ct" ],
					[ "value" => "0.2", "label" => "02ct" ],
					[ "value" => "0.3", "label" => "03ct" ],
					[ "value" => "0.4", "label" => "04ct" ],
					[ "value" => "0.5", "label" => "05ct" ],
					[ "value" => "0.6", "label" => "06ct" ],
					[ "value" => "0.7", "label" => "07ct" ],
					[ "value" => "0.8", "label" => "08ct" ],
					[ "value" => "0.9", "label" => "09ct" ],
					[ "value" => "1.0", "label" => "1ct" ],
					[ "value" => "2.0", "label" => "2ct" ],
					[ "value" => "3.0", "label" => "3ct" ],
					[ "value" => "4.0", "label" => "4ct" ],
					[ "value" => "5.0", "label" => "5ct" ],
					[ "value" => "6.0", "label" => "6ct" ],
					[ "value" => "7.0", "label" => "7ct" ],
					[ "value" => "8.0", "label" => "8ct" ],
					[ "value" => "9.0", "label" => "9ct" ],
					[ "value" => "10.0", "label" => "10ct" ],
				];
				$carat_value = array_column( $carat_num, 'value' );
				$carat_label = array_column( $carat_num, 'label' );



				$daiya_cut     = $daiya_data[ 'acf' ][ 'daiya_cut' ];
				$daiya_clarity = $daiya_data[ 'acf' ][ 'daiya_clarity' ];
				$daiya_color   = $daiya_data[ 'acf' ][ 'daiya_color' ];


				// 相場価格(金額)を一覧取得する
				$souba_num = preg_match_all( '/\<td class\=\"table__item price\"\>([\d.]+)\<\/td\>/', $table, $m );

				// APIのURL
				$rate_api_url = "https://api.exchangerate-api.com/v4/latest/JPY";

				// APIから為替レートを取得
				$rate_response = file_get_contents( $rate_api_url );

				// エラーチェック
				if ( $rate_response === false ) {
					echo "Failed to fetch exchange rate.";
					return;
				}

				$rate_data = json_decode( $rate_response, true );

				// JPYからHKDのレートを取得
				$exchange_rate_src = $rate_data[ 'rates' ][ 'HKD' ];

				$kawase_price = [];
				$cnt          = 0;
				// 相場価格に対しカラット数をかける
				foreach ( $m[ 0 ] as $index => $value ) {
					$interval    = 660; // $interval の初期値を設定(各カラットの要素数が660)
					$carat_index = floor( ( $cnt ) / $interval ); // カラットのインデックスを計算

					// インデックスが carat_value の範囲内にあるかどうかを確認し、それに応じて $ct_num を設定
					if ( $carat_index >= 0 && $carat_index < count( $carat_value ) ) {
						$ct_num = $carat_value[ $carat_index ];
					} else {
						$ct_num = $carat_value[ 0 ];
					}
					// 相場価格に対し為替レートをかける
					preg_match( '/\d+(\.\d+)?/', $value, $matches );
					$num    = $matches[ 0 ];
					$result = $num * $exchangeRate;
					// 10のくらいで繰り上げ
					$price = ceil( $result / 100 ) * 100;

					$price = $price * $ct_num;
					$price = number_format( floor( $price * $exchange_rate_src ) );
					array_push( $kawase_price, $price );

					$cnt++;
				}

				?>

				<section>
					<h2 class="renew_2024_titlesub follow is-sp">
						<div class="renew_2024_titlesub_topbar">
							<div class="renew_2024_titlesub_topbar_center"></div>
							<div class="renew_2024_titlesub_topbar_left"></div>
							<div class="renew_2024_titlesub_topbar_right"></div>
						</div>
					</h2>
					<section>
						<div class="titleMain titleMain--wrapper is-pc">
							<h2 class="titleMain--main">

							</h2>
							<div class="titleMain--lead">
								<p>

								</p>
							</div>
						</div>
						<div class="carat_select">select carat</div>
						<div class="scroll-box">
							<div class="f_area">
								<div class="tabbox">0.1</div>
								<div class="tabbox">0.2</div>
								<div class="tabbox">0.3</div>
								<div class="tabbox">0.4</div>
								<div class="tabbox">0.5</div>
								<div class="tabbox">0.6</div>
								<div class="tabbox">0.7</div>
								<div class="tabbox">0.8</div>
								<div class="tabbox">0.9</div>
								<div class="tabbox active">1.0</div>
								<div class="tabbox">2.0</div>
								<div class="tabbox">3.0</div>
								<div class="tabbox">4.0</div>
								<div class="tabbox">5.0</div>
								<div class="tabbox">6.0</div>
								<div class="tabbox">7.0</div>
								<div class="tabbox">8.0</div>
								<div class="tabbox">9.0</div>
								<div class="tabbox">10.0</div>
							</div>
						</div>
						<div class="jewelrySoubaBox">
							<div class="jewelrySoubaBox__title">
								<h3>ตารางราคากลางในการรับซื้อเพชร</h3>
							</div>
							<div class="jewelrySoubaBox__body">
								<div class="jewelrySoubaBox__table">
									<!-- <div class="jewelry__category__time text--center">最終更新日：2024/01/16/</div> -->
									<div class="jewelry__category__time text--center">最後更新日期：2024/12/19</div>
									<div class="jewelrySoubaBox__table__scroll">
										<div id="pricelistframe" class="inner">
											<?php
											// カラットページの処理。一致するカラットに対応するコンテンツを表示
											echo $table;
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<section class="jewelrySoubaBox__table__attend">
							<dl class="attendList">
								<dt class="attendList__title">注意事項</dt>
								<dd class="attendList__item">價格已包含稅。</dd>
								<dd class="attendList__item">鑽石的等級可能會因簽發證書的認證機構不同而有所差異。</dd>
								<dd class="attendList__item">此為圓形明亮式切割鑽石的價格。</dd>
								<dd class="attendList__item">價格表僅供參考，並不保證收購價格。</dd>
								<dd class="attendList__item">淨度為FL的鑽石一般不會在二手市場流通，因此不會在價格表中列出。</dd>
								<dd class="attendList__item">顏色等級在N級以上的鑽石將被視為彩色鑽石，價格會根據個別情況處理。</dd>
							</dl>
						</section>
						<section>
							<div class="titleMain titleMain--wrapper is-pc">
								<h2 class="titleMain--main">
									參考收購價格表的使用方法
								</h2>
							</div>
							<h2 class="renew_2024_titlesub is-sp">
								<div class="renew_2024_titlesub_topbar">
									<div class="renew_2024_titlesub_topbar_center"></div>
									<div class="renew_2024_titlesub_topbar_left"></div>
									<div class="renew_2024_titlesub_topbar_right"></div>
								</div>
								參考收購價格表的使用方法
							</h2>
							<div class="wd_carattable_superbox">
								<div class="wd_carattable_flex">
									<div class="wd_carattable_flex_arrowtext">
										大
									</div>
									<div class="wd_carattable_flex_arrowbox">
										<img src="../images/daiya/arrow_carathigh_l.png">
									</div>
									<div class="wd_carattable_flex_arrowbar">
										<div class="wd_carattable_flex_kind">
											克拉
										</div>
									</div>
									<div class="wd_carattable_flex_arrowbox">
										<img src="../images/daiya/arrow_carathigh_r.png">
									</div>
									<div class="wd_carattable_flex_arrowtext">
										小
									</div>
								</div>
								<div class="wd_carattable_flex">
									<div class="wd_carattable_caratitem">10</div>
									<div class="wd_carattable_caratitem">5</div>
									<div class="wd_carattable_caratitem">3</div>
									<div class="wd_carattable_caratitem">1</div>
									<div class="wd_carattable_caratitem">0.9</div>
									<div class="wd_carattable_caratitem">0.8</div>
									<div class="wd_carattable_caratitem">0.7</div>
									<div class="wd_carattable_caratitem">0.6</div>
									<div class="wd_carattable_caratitem">0.5</div>
									<div class="wd_carattable_caratitem">0.4</div>
									<div class="wd_carattable_caratitem">0.3</div>
									<div class="wd_carattable_caratitem">0.2</div>
									<div class="wd_carattable_caratitem">0.1</div>
								</div>
							</div> <!-- wd_carattable_superbox -->
							<div class="wd_carattable_superbox">
								<div class="wd_carattable_flex">
									<div class="wd_carattable_flex_arrowtext_s">
										淨度高
									</div>
									<div class="wd_carattable_flex_arrowbox">
										<img src="../images/daiya/arrow_carathigh_l.png">
									</div>
									<div class="wd_carattable_flex_arrowbar">
										<div class="wd_carattable_flex_kind">
											顏色
										</div>
									</div>
									<div class="wd_carattable_flex_arrowbox">
										<img src="../images/daiya/arrow_carathigh_r.png">
									</div>
									<div class="wd_carattable_flex_arrowtext_s">
										Low transparency
									</div>
								</div>
								<div class="wd_carattable_flex">
									<div class="wd_carattable_coloritem">D</div>
									<div class="wd_carattable_coloritem">E</div>
									<div class="wd_carattable_coloritem">F</div>
									<div class="wd_carattable_coloritem">G</div>
									<div class="wd_carattable_coloritem">H</div>
									<div class="wd_carattable_coloritem">I</div>
									<div class="wd_carattable_coloritem">J</div>
									<div class="wd_carattable_coloritem">K</div>
									<div class="wd_carattable_coloritem">L</div>
									<div class="wd_carattable_coloritem">M</div>
								</div>
							</div> <!-- wd_carattable_superbox -->
							<div class="wd_carattable_superbox">
								<div class="wd_carattable_flex">
									<div class="wd_carattable_flex_arrowtext">
										High
									</div>
									<div class="wd_carattable_flex_arrowbox">
										<img src="../images/daiya/arrow_carathigh_l.png">
									</div>
									<div class="wd_carattable_flex_arrowbar">
										<div class="wd_carattable_flex_kind">
											Cut
										</div>
									</div>
									<div class="wd_carattable_flex_arrowbox">
										<img src="../images/daiya/arrow_carathigh_r.png">
									</div>
									<div class="wd_carattable_flex_arrowtext">
										Low
									</div>
								</div>
								<div class="wd_carattable_flex">
									<div class="wd_carattable_cutitem">3EX</div>
									<div class="wd_carattable_cutitem">EXELLENT</div>
									<div class="wd_carattable_cutitem">VERY <br class="is-sp">GOOD</div>
									<div class="wd_carattable_cutitem">GOOD</div>
									<div class="wd_carattable_cutitem">FAIR</div>
									<div class="wd_carattable_cutitem">POOR</div>
								</div>
							</div> <!-- wd_carattable_superbox -->


							<div class="wd_carattable_superbox">
								<div class="wd_carattable_flex">
									<div class="wd_carattable_flex_arrowtext">
										High
									</div>
									<div class="wd_carattable_flex_arrowbox">
										<img src="../images/daiya/arrow_carathigh_l.png">
									</div>
									<div class="wd_carattable_flex_arrowbar">
										<div class="wd_carattable_flex_kind">
											Clarity
										</div>
									</div>
									<div class="wd_carattable_flex_arrowbox">
										<img src="../images/daiya/arrow_carathigh_r.png">
									</div>
									<div class="wd_carattable_flex_arrowtext">
										Low
									</div>
								</div>
								<div class="wd_carattable_flex">
									<div class="wd_carattable_clarityitem">IF</div>
									<div class="wd_carattable_clarityitem">VVS1</div>
									<div class="wd_carattable_clarityitem">VVS2</div>
									<div class="wd_carattable_clarityitem">VS1</div>
									<div class="wd_carattable_clarityitem">VS2</div>
									<div class="wd_carattable_clarityitem">SI1</div>
									<div class="wd_carattable_clarityitem">SI2</div>
									<div class="wd_carattable_clarityitem">I1</div>
									<div class="wd_carattable_clarityitem">I2</div>
									<div class="wd_carattable_clarityitem">I3</div>
								</div>
							</div> <!-- wd_carattable_superbox -->
						</section>
					</section>
					<h3 class="renew_2024_titlesub is-sp">
						<div class="renew_2024_titlesub_topbar">
							<div class="renew_2024_titlesub_topbar_center"></div>
							<div class="renew_2024_titlesub_topbar_left"></div>
							<div class="renew_2024_titlesub_topbar_right"></div>
						</div>
						模擬持有鑑定書時的鑽石收購
					</h3>
					<section>
						<section>
							<div class="jewelrySoubaBox">
								<!-- MOD_20240417 -->
								<h3 class="titleSub is-pc">
									模擬持有鑑定書時的鑽石收購
								</h3>

								<!-- tab -->
								<ul class="jewelrySoubaBox__header flex__tab">
									<li class="tab__item active"><a class="price_table_contents_nav1">只有寶石的狀態</a></li>
									<li class="tab__item"><a class="price_table_contents_nav2">附有金飾品的鑽石</a></li>
								</ul>
								<!-- contact -->
								<div class="flex__tabContents kantei">
									<!-- tab1 鑑定書-->
									<div id="searchbox" class="tab1 searchbox jewelrySoubaBox__body flex__content active">
										<div class="jewelrySoubaBox__form">
											<p class="form__lead text--center">請查看鑑定書上記載的4C，並從下面表格確認收購參考金額。<br>
												即使沒有鑑定書，我們也會進行收購，歡迎隨時聯繫我們。</p>
											<dl>
												<dt><label for="carat">Carat</label></dt>
												<dd>
													<div class="form__liner">
														<select name="carat" id="jewelrySoubaBox__carat--select">
															<option value="">請選擇克拉</option>
															<option value="01ct">0.1ct</option>
															<option value="02ct">0.2ct</option>
															<option value="03ct">0.3ct</option>
															<option value="04ct">0.4ct</option>
															<option value="05ct">0.5ct</option>
															<option value="06ct">0.6ct</option>
															<option value="07ct">0.7ct</option>
															<option value="08ct">0.8ct</option>
															<option value="09ct">0.9ct</option>
															<option value="1ct">1.0ct</option>
															<option value="2ct">2.0ct</option>
															<option value="3ct">3.0ct</option>
															<option value="4ct">4.0ct</option>
															<option value="5ct">5.0ct</option>
															<option value="6ct">6.0ct</option>
															<option value="7ct">7.0ct</option>
															<option value="8ct">8.0ct</option>
															<option value="9ct">9.0ct</option>
															<option value="10ct">10.0ct</option>
															<!-- <option value="03ct">0.3ct</option> -->
														</select>
													</div>
												</dd>
												<dt><label for="color">Colour</label></dt>
												<dd>
													<div class="form__liner">
														<select name="color" id="jewelrySoubaBox__color--select">
															<option value="">請選擇顏色</option>
															<option value="D">D</option>
															<option value="E">E</option>
															<option value="F">F</option>
															<option value="G">G</option>
															<option value="H">H</option>
															<option value="I">I</option>
															<option value="J">J</option>
															<option value="K">K</option>
															<option value="L">L</option>
															<option value="M">M</option>
														</select>
													</div>
												</dd>
												<dt><label for="clarity">Quolity</label></dt>
												<dd>
													<div class="form__liner">
														<select name="clarity" id="jewelrySoubaBox__clarity--select">
															<option value="">請選擇淨度</option>
															<option value="if">IF</option>
															<option value="vvs1">VVS1</option>
															<option value="vvs2">VVS2</option>
															<option value="vs1">VS1</option>
															<option value="vs2">VS2</option>
															<option value="si1">SI1</option>
															<option value="si2">SI2</option>
															<option value="i1">I1</option>
															<option value="i1-">I1-</option>
															<option value="i2">I2</option>
															<option value="i3">I3</option>
															<!-- <option value="vvs1">VVS1</option> -->
														</select>
													</div>
												</dd>
												<dt><label for="cut">Cut</label></dt>
												<dd>
													<div class="form__liner">
														<select name="cut" id="jewelrySoubaBox__cut--select">
															<option value="">請選擇切工</option>
															<option value="3ex">3EX</option>
															<option value="excellent">Excellent</option>
															<option value="verygood">Verygood</option>
															<option value="good">Good</option>
															<option value="fair">Fair</option>
															<option value="poor">Poor</option>
															<!-- <option value="excellent">Excellent</option> -->
														</select>
													</div>
												</dd>
											</dl>
											<div class="btn__wrap btn__red">
												<button id="price-search" class="tab1 souba gtm-simu-daiya1"
													type="button">查詢此內容的收購參考金額</button>
											</div>

											<div class="form__answer">
												<div id="diamond_price_table_display_inner" class="form__answer--inner">
													<div class="sumTitle">您的物品收購參考金額：</div>
													<div id="price_table_calc" class="tab1 price"><span
															class="value">HK$</span>0</div>
												</div>
											</div>
										</div>
									</div>
									<!-- tab2 鑑定書-->
									<div id="diamond_price_table_display_2" class="jewelrySoubaBox__body flex__content">
										<div id="price" class="jewelrySoubaBox__form">
											<p class="form__lead text--center">請查看鑑定書上記載的4C，並從下面表格確認收購參考金額。<br>
												即使沒有鑑定書，我們也會進行收購，歡迎隨時聯繫我們。</p>
											<dl>
												<dt><label for="carat">金飾品</label></dt>
												<dd>
													<div class="form__wrap">
														<div class="form__liner">
															<select name="carat" id="simulation_select">
																<option value="" selected="selected">金の品位</option>
																<option v-bind:value="au_ingod_price">インゴット（金）</option>
																<option v-bind:value="au_scrap[0].price">K24</option>
																<option v-bind:value="au_scrap[1].price">K22</option>
																<option v-bind:value="au_scrap[2].price">K21.6</option>
																<option v-bind:value="au_scrap[3].price">K20</option>
																<option v-bind:value="au_scrap[4].price">K18</option>
																<option v-bind:value="au_scrap[5].price">K14</option>
																<option v-bind:value="au_scrap[6].price">K10</option>
																<option v-bind:value="au_scrap[7].price">K9</option>
																<option v-bind:value="au_scrap[8].price">K18WG</option>
																<option v-bind:value="au_scrap[9].price">K14WG</option>
																<option v-bind:value="pt_ingod_price">インゴット（プラチナ）</option>
																<option v-bind:value="pt_scrap[0].price">Pt1000</option>
																<option v-bind:value="pt_scrap[1].price">Pt950</option>
																<option v-bind:value="pt_scrap[2].price">Pt900</option>
																<option v-bind:value="pt_scrap[3].price">Pt850</option>
															</select>
														</div>
														<span class="form--symbol">x</span>
														<div class="form__liner form__liner--weight">
															<input type="number" id="weight" min="0" max="100000"
																placeholder="0">
														</div>
													</div>
												</dd>
												<dd class="border"></dd>
											</dl>
											<section id="tablelistbox">
												<div id="" class="tab2 searchbox">
													<dl>
														<dt><label for="carat">Carat</label></dt>
														<dd>
															<div class="form__liner">
																<select name="carat" id="jewelrySoubaBox__carat--select">
																	<option value="">請選擇克拉</option>
																	<option value="01ct">0.1ct</option>
																	<option value="02ct">0.2ct</option>
																	<option value="03ct">0.3ct</option>
																	<option value="04ct">0.4ct</option>
																	<option value="05ct">0.5ct</option>
																	<option value="06ct">0.6ct</option>
																	<option value="07ct">0.7ct</option>
																	<option value="08ct">0.8ct</option>
																	<option value="09ct">0.9ct</option>
																	<option value="1ct">1.0ct</option>
																	<option value="2ct">2.0ct</option>
																	<option value="3ct">3.0ct</option>
																	<option value="4ct">4.0ct</option>
																	<option value="5ct">5.0ct</option>
																	<option value="6ct">6.0ct</option>
																	<option value="7ct">7.0ct</option>
																	<option value="8ct">8.0ct</option>
																	<option value="9ct">9.0ct</option>
																	<option value="10ct">10.0ct</option>
																	<!-- <option value="03ct">0.3ct</option> -->
																</select>
															</div>
														</dd>
														<dt><label for="color">Colour</label></dt>
														<dd>
															<div class="form__liner">
																<select name="color" id="jewelrySoubaBox__color--select">
																	<option value="">請選擇顏色</option>
																	<option value="D">D</option>
																	<option value="E">E</option>
																	<option value="F">F</option>
																	<option value="G">G</option>
																	<option value="H">H</option>
																	<option value="I">I</option>
																	<option value="J">J</option>
																	<option value="K">K</option>
																	<option value="L">L</option>
																	<option value="M">M</option>
																</select>
															</div>
														</dd>
														<dt><label for="clarity">Quolity</label></dt>
														<dd>
															<div class="form__liner">
																<select name="clarity"
																	id="jewelrySoubaBox__clarity--select">
																	<option value="">請選擇淨度</option>
																	<option value="if">IF</option>
																	<option value="vvs1">VVS1</option>
																	<option value="vvs2">VVS2</option>
																	<option value="vs1">VS1</option>
																	<option value="vs2">VS2</option>
																	<option value="si1">SI1</option>
																	<option value="si2">SI2</option>
																	<option value="i1">I1</option>
																	<option value="i1-">I1-</option>
																	<option value="i2">I2</option>
																	<option value="i3">I3</option>
																	<!-- <option value="vvs1">VVS1</option> -->
																</select>
															</div>
														</dd>
														<dt><label for="cut">Cut</label></dt>
														<dd>
															<div class="form__liner">
																<select name="cut" id="jewelrySoubaBox__cut--select">
																	<option value="">請選擇切工</option>
																	<option value="3ex">3EX</option>
																	<option value="excellent">Excellent</option>
																	<option value="verygood">Verygood</option>
																	<option value="good">Good</option>
																	<option value="fair">Fair</option>
																	<option value="poor">Poor</option>
																	<!-- <option value="excellent">Excellent</option> -->
																</select>
															</div>
														</dd>
													</dl>
													<div class="btn__wrap btn__red">
														<button id="" class="tab2 souba gtm-simu-daiya1"
															type="button">查詢此內容的收購參考金額</button>
													</div>
												</div>
											</section>
											<div class="form__answer">

												<div class="form__answer--inner">
													<div class="sumTitle">金的參考價格</div>
													<div class="price">
														<input readonly="readonly" class="gold_price_table_calc_num"
															type="text" id="answer" value="0">
													</div>
												</div>

												<div class="form__answer--inner hasBorder">
													<div class="sumTitle">鑽石的參考價格</div>
													<div id="" class="tab2 price"><span class="value">HK$</span>0</div>
												</div>

												<div class="form__answer--inner">
													<div class="sumTitle">您的物品收購參考金額：</div>
													<div id="daiya_gold_calc" class="price"><span class="value">HK$</span>0
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</section>
					<h3 class="renew_2024_titlesub is-sp">
						<div class="renew_2024_titlesub_topbar">
							<div class="renew_2024_titlesub_topbar_center"></div>
							<div class="renew_2024_titlesub_topbar_left"></div>
							<div class="renew_2024_titlesub_topbar_right"></div>
						</div>
						模擬只知鑽石的克拉的鑽石收購
					</h3>
					<section>
						<div id="price_table_contents1" class="jewelrySoubaBox">
							<!-- MOD_20240417 -->
							<h3 class="titleSub is-pc">
								模擬只知鑽石的克拉的鑽石收購
							</h3>

							<!-- tab -->
							<ul class="jewelrySoubaBox__header flex__tab">
								<li class="tab__item active"><a>只有寶石的狀態</a></li>
								<li class="tab__item"><a>附有金飾品的鑽石</a></li>
							</ul>
							<!-- contact -->
							<div class="flex__tabContents">
								<!-- tab1 -->
								<div class="jewelrySoubaBox__body flex__content active">
									<div class="jewelrySoubaBox__form">
										<dl>
											<dt><label for="carat_only">カラット数</label></dt>
											<dd>
												<div id="carat_only_price_area" class="form__liner">
													<select name="carat_only" id="jewelrySoubaBox__carat--select">
														<option value="">カラット数を選択してください</option>
														<option value="01ct">0.1ct</option>
														<option value="02ct">0.2ct</option>
														<option value="03ct">0.3ct</option>
														<option value="04ct">0.4ct</option>
														<option value="05ct">0.5ct</option>
														<option value="06ct">0.6ct</option>
														<option value="07ct">0.7ct</option>
														<option value="08ct">0.8ct</option>
														<option value="09ct">0.9ct</option>
														<option value="1ct">1.0ct</option>
														<option value="2ct">2.0ct</option>
														<option value="3ct">3.0ct</option>
														<option value="4ct">4.0ct</option>
														<option value="5ct">5.0ct</option>
														<option value="6ct">6.0ct</option>
														<option value="7ct">7.0ct</option>
														<option value="8ct">8.0ct</option>
														<option value="9ct">9.0ct</option>
														<option value="10ct">10.0ct</option>
													</select>
												</div>
											</dd>
										</dl>
										<div class="btn__wrap btn__red">
											<button id="carat_only_btn1" class="souba gtm-simu-daiya2"
												type="button">查詢此內容的收購參考金額</button>
										</div>

										<div class="form__answer">

											<div class="form__answer--inner">
												<div class="sumTitle">您的物品收購參考金額：</div>
												<div id="carat_only_price" class="price"><span class="value">HK$</span>0
												</div>
											</div>
										</div>
										<p class="caution">注意事項<br>
											※模擬是假設顏色為「D」，淨度為「IF」，切工為「3EX」。</p>
									</div>
								</div>
								<!-- tab2 -->
								<div id="simulation" class="carat_and_gold_price jewelrySoubaBox__body flex__content">
									<div class="jewelrySoubaBox__form">
										<dl>
											<dt><label for="carat">金飾品</label></dt>
											<dd>
												<div class="form__wrap">
													<div class="form__liner">
														<select name="carat" id="simulation_select2">
															<option value="" selected="selected">金の品位</option>
															<option v-bind:value="au_ingod_price">インゴット（金）</option>
															<option v-bind:value="au_scrap[0].price">K24</option>
															<option v-bind:value="au_scrap[1].price">K22</option>
															<option v-bind:value="au_scrap[2].price">K21.6</option>
															<option v-bind:value="au_scrap[3].price">K20</option>
															<option v-bind:value="au_scrap[4].price">K18</option>
															<option v-bind:value="au_scrap[5].price">K14</option>
															<option v-bind:value="au_scrap[6].price">K10</option>
															<option v-bind:value="au_scrap[7].price">K9</option>
															<option v-bind:value="au_scrap[8].price">K18WG</option>
															<option v-bind:value="au_scrap[9].price">K14WG</option>
															<option v-bind:value="pt_ingod_price">インゴット（プラチナ）</option>
															<option v-bind:value="pt_scrap[0].price">Pt1000</option>
															<option v-bind:value="pt_scrap[1].price">Pt950</option>
															<option v-bind:value="pt_scrap[2].price">Pt900</option>
															<option v-bind:value="pt_scrap[3].price">Pt850</option>
														</select>
													</div>
													<span class="form--symbol">x</span>
													<div class="form__liner form__liner--weight">
														<input type="number" id="weight2" min="0" max="100000"
															placeholder="0">
													</div>
												</div>
											</dd>
											<dd class="border"></dd>
											<dt><label for="carat">Carat</label></dt>
											<dd>
												<div id="carat_only_price_area2" class="form__liner">
													<select name="carat">
														<option value="">請選擇克拉</option>
														<option value="01ct">0.1ct</option>
														<option value="02ct">0.2ct</option>
														<option value="03ct">0.3ct</option>
														<option value="04ct">0.4ct</option>
														<option value="05ct">0.5ct</option>
														<option value="06ct">0.6ct</option>
														<option value="07ct">0.7ct</option>
														<option value="08ct">0.8ct</option>
														<option value="09ct">0.9ct</option>
														<option value="1ct">1.0ct</option>
														<option value="2ct">2.0ct</option>
														<option value="3ct">3.0ct</option>
														<option value="4ct">4.0ct</option>
														<option value="5ct">5.0ct</option>
														<option value="6ct">6.0ct</option>
														<option value="7ct">7.0ct</option>
														<option value="8ct">8.0ct</option>
														<option value="9ct">9.0ct</option>
														<option value="10ct">10.0ct</option>
													</select>
												</div>
											</dd>
										</dl>
										<div class="btn__wrap btn__red">
											<button id="carat_only_btn2" class="souba gtm-simu-daiya2"
												type="button">查詢此內容的收購參考金額</button>
										</div>

										<div class="form__answer">

											<div class="form__answer--inner">
												<div class="sumTitle">金的參考價格</div>
												<div class="price"><input class="gold_price_table_calc_num" type="text"
														id="answer2" readonly="readonly" value="0"><span
														class="value">&yen;</span></div>
											</div>

											<div class="form__answer--inner hasBorder">
												<div class="sumTitle">鑽石的參考價格</div>
												<div class="price" id="carat_only_price2"><span class="value">HK$</span>0
												</div>
											</div>

											<div class="form__answer--inner">
												<div class="sumTitle">您的物品收購參考金額：</div>
												<div id="daiya_gold_calc2" class="price"><span class="value">HK$</span>0
												</div>
											</div>
										</div>
										<p class="caution">注意事項<br>
											※模擬是假設顏色為「D」，淨度為「IF」，切工為「3EX」。</p>
									</div>
								</div>
							</div>
						</div>
						<!-- end カラット -->
					</section>
				</section>



				<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
				<script>
					$( document ).ready( function () {
						jQuery( document ).ready( function ( $ ) {
							var $listWrap = $( "#tablelistbox" ); //鑑定書あり部分のID
							var $priceWrap = $( "#pricelistframe" ); //価格相場のID
							var $searchWrap = $( "#searchbox" ); //select部分のID
							var $selects = $searchWrap.find( "select" );
							var $submit = $( "#price-search" ); //検索ボタンのID
							var theCls = "the-price"; //使っていない
							var hdnCls = "hidden";
							//searchboxとprice-searchが重要
							//

							//var hdnLoadingCls = "hidden-loading";
							//$listWrap.find("." + hdnLoadingCls).removeClass(hdnLoadingCls);


							var reachScorllIfSp = function () {
								if ( $searchWrap.hasClass( 'sp-searchbox' ) ) {
									var parentScrollTo = $searchWrap.offset().top;
									var currentScroll = $( window ).scrollTop();
									if ( currentScroll < parentScrollTo ) {
										$( "html,body" ).animate( {
											scrollTop: parentScrollTo,
										}, {
											duration: 400,
										} );
									}
								}
							};

							var reachScroll = function ( reach, cell ) {
								var timer;
								var itvlNum = 0;
								$( cell ).addClass( theCls );
								$priceWrap.stop().animate( {
									scrollTop: reach,
								}, {
									duration: 500,
									complete: function () {
										timer = setInterval( function () {
											itvlNum++;
											if ( itvlNum >= 5 && $( cell ).hasClass( theCls ) ) {
												clearInterval( timer );
												return;
											}
											$( cell ).toggleClass( theCls );
										}, 300 );
									}
								} );
							};



							//鑑定書をお持ちお持ちの方はこちら
							function updateElementsAndEvents( tab ) {
								$( '.kantei .' + tab + '.searchbox' ).attr( 'id', null );
								$( '.kantei .' + tab + ' button' ).attr( 'id', null );
								$( '.kantei .' + tab + '.price' ).attr( 'id', null );


								var otherTab = ( tab === 'tab1' ) ? 'tab2' : 'tab1';
								$( '.kantei .' + otherTab + '.searchbox' ).attr( 'id', 'searchbox' );
								$( '.kantei .' + otherTab + ' button' ).attr( 'id', 'price-search' );
								$( '.kantei .' + otherTab + '.price' ).attr( 'id', 'price_table_calc' );


								var $searchWrap = $( "#searchbox" );
								var $selects = $searchWrap.find( "select" );
								var $submit = $( "#price-search" );

								// Attach event handler to $submit
								//鑑定書をお持ちお持ちの方はこちら
								$submit.on( 'click', function () {
									$priceWrap.find( 'td' ).removeClass( theCls );

									var vals = {};
									var errors = "";
									$.each( $selects, function ( k, ele ) {
										var sidx = $( ele ).prop( 'selectedIndex' );

										var name = $( ele ).attr( "name" );
										var $cOpt = $( $( ele ).find( 'option' ).get( sidx ) );
										var v = ( "conditions" === name && $cOpt.length ) ? $cOpt.html() : $( ele ).val();
										var isEmpty = ( 0 === sidx && ( "--" === v || "" === v ) );
										if ( isEmpty ) {
											var label = $( ele ).parent().parent().prev( 'dt' ).find( 'label' ).html();
											errors += label + "を選択してください\n";
										}
										vals[ name ] = v;

									} );

									if ( errors ) {
										alert( errors );
										return;
									}

									var $reachWrap = {};
									var point = {
										x: {
											s: 'thead th:not(.none)',
											f: function ( idx ) {
												return ( $( this ).html() === condition_val ) ? idx : null;
											},
										},
										y: {
											s: 'tbody th',
											f: function ( idx ) {
												return ( $( this ).html() === color_val ) ? idx : null},
																			},
																		};
																		var reachAdjust = 8;

																		var applyCellReach = true;


																		var ct_id = "#ct-" + vals.carat; //変更

																		var clarity = vals.clarity;
																		var cut = vals.cut;
																		var color = vals.color;
																		var reach_id = ct_id + "-" + clarity;
																		$reachWrap = $(reach_id);

																		point.x.s = 'thead th';
																		point.x.f = function(idx) {
																			return ($(this).hasClass(cut)) ? idx : null;
																		};
																		point.y.s = 'tbody td[class*="color"]';
																		point.y.f = function(idx) {
																			return ($(this).html() === color) ? idx : null;
																		};

																		reachAdjust = 5;

																		applyCellReach = false;


																		if (!$reachWrap.length) return;

																		var $table = $('table');
																		var x = $table.find(point.x.s).map(point.x.f).get(0);
																		var y = $table.find(point.y.s).map(point.y.f).get(0);
																		var cell = $reachWrap.find("tr").eq(y).find("td").eq(x);
																		reachScorllIfSp();

																		applyCellReach = (y > 0 && applyCellReach) || false;

																		var reach = (applyCellReach) ? $(cell).position().top : $reachWrap.position().top;
																		reach = reach - $priceWrap.position().top;
																		reach = $priceWrap.scrollTop() + reach - reachAdjust;

																		// スクロール
																		// reachScroll(reach, cell);
																		$("#diamond_price_table_display_inner #price_table_calc").html(cell.text() +
																			'<span class="value">HK$</span>');
																		$("#diamond_price_table_display_2 #price_table_calc").html(cell.text() +
																			'<span class="value">HK$</span>');

																		daiya_calc = cell.text();
																		daiya_calc = daiya_calc.replace(/en/g, '');
																		daiya_calc = daiya_calc.replace(/,/g, '');
																		daiya_calc = Number(daiya_calc);
																		simulation_select_val = $("#simulation_select").val();
																		simulation_select_val = simulation_select_val.replace(/,/g, '');
																		simulation_select_val = Number(simulation_select_val);
																		weight_val = $("#weight").val();
																		weight_val = Number(weight_val);
																		simulation_select_val = simulation_select_val * weight_val;
																		gold_daiya_calc = simulation_select_val + daiya_calc;
																		gold_daiya_calc = String(gold_daiya_calc).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
																		$("#daiya_gold_calc").html(gold_daiya_calc + '<span class="value">HK$</span>');

																	});
																}

																// Initial setup
																updateElementsAndEvents('tab2');

																// Event handlers
																$(".price_table_contents_nav2").on('click', function() {
																	updateElementsAndEvents('tab1');
																});

																$(".price_table_contents_nav1").on('click', function() {
																	updateElementsAndEvents('tab2');
																});


																// new
																// ページロード時に価格データを取得
																var carat_num = <?php echo wp_json_encode( $carat_num ) ?>;
																var prices = {};
																for (var i = 0; i < carat_num.length; i++) {
																	var label = carat_num[i]['label'];
																	var id = "#ct-" + label + "-if";
																	var price = $(id + " > tr:nth-child(1) > td:nth-child(2)").text();
																	prices[label] = price;
																}

																function updatePrice(carat, target) {
																	var price = prices[carat];
																	if (price) {
																		$(target).html(price + '<span class="value">HK$</span>');
																	}
																}

																$("#carat_only_btn1").on('click', function() {
																	var carat_only_price_area = $("#carat_only_price_area select").val();
																	updatePrice(carat_only_price_area, "#carat_only_price");
																});

																$(document).on('click', '#carat_only_btn2', function() {
																	var carat_only_price_area2 = $("#carat_only_price_area2 select").val();
																	console.log("Selected carat: ", carat_only_price_area2);
																	updatePrice(carat_only_price_area2, "#carat_only_price2");

																	var caratPrice = parseInt($("#carat_only_price2").text().replace(/[HK$,]/g, ''), 10);
																	var answer2 = parseInt($("#answer2").val().replace(/,/g, ''), 10);
																	var goldPriceVal = parseInt($("#simulation_select2").val().replace(/,/g, ''), 10);
																	var weight = parseFloat($("#weight2").val().replace(/,/g, ''));

																	var goldCalcPrice = goldPriceVal * weight;
																	if (isNaN(goldCalcPrice)) {
																		goldCalcPrice = 0;
																	}
																	// var total = caratPrice + answer2 + goldCalcPrice;
																	var total = caratPrice + answer2;

																	$("#daiya_gold_calc2").html(total.toLocaleString() + '<span class="value">HK$</span>');
																});


																$(".price_table_contents_nav").on('click', function() {
																	$("#price_table_contents1 #price_table_calc").text("0");
																	$("#price_table_contents2 #price_table_calc").text("0");
																});

																// タブ処理
																$("a[href='#price_table_contents2']").on('click', function() {
																	$(".arrow_bottom_daiya_default").css("display", "block");
																	$(".arrow_bottom_gold_default").css("display", "none");
																	$(".arrow_bottom_gold").css("display", "block");
																	$(".arrow_bottom_daiya").css("display", "none");
																	$("#diamond_price_table_display_inner .price_table_calc_area").css("display", "none");
																	$(".prompt_text_daiya").css("display", "none");
																	$(".prompt_text_gold").css("display", "block");
																});
																$("a[href='#price_table_contents1']").on('click', function() {
																	$(".arrow_bottom_daiya_default").css("display", "none");
																	$(".arrow_bottom_daiya").css("display", "block");
																	$("#diamond_price_table_display_inner .price_table_calc_area").css("display", "flex");
																	$(".prompt_text_gold").css("display", "none");
																	$(".prompt_text_daiya").css("display", "block");
																});
																let clone1 = $(".calc_area").clone();
																$(".cloned_gold_calc").append(clone1);


															});
															const ua = navigator.userAgent;
															if (ua.indexOf('iPhone') > -1 || (ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1)) {

																// タブ処理
																$("a[href='#price_table_contents2']").on('click', function() {
																	$("#tablelistbox h2").css("margin-top", "680px");
																	$("a[href='#price_table_contents2'] .arrow_bottom_gold").css("display", "none")
																	$("a[href='#price_table_contents2'] .arrow_bottom").css("display", "block")
																});
																$("a[href='#price_table_contents1']").on('click', function() {
																	$("#tablelistbox h2").css("margin-top", "160%");
																});

															} else {
																// pc


																jQuery(document).ready(function($) {
																	input_width = $(".otkr-plicelist #searchbox p input").width();
																	text_width = 130
																	arrow_width = 15;
																	margin_width = 10;
																	arrow_text_width = text_width + arrow_width + margin_width;
																	arrow_text_width_calc = input_width - arrow_text_width;
																	arrow_text_width_calc = arrow_text_width_calc / 2;
																	arrow_text_width_calc = arrow_text_width_calc + 22;
																	$(".otkr-plicelist #searchbox p input").css("padding-right", arrow_text_width_calc);
																});


																// タブ処理
																$("a[href='#price_table_contents2']").on('click', function() {
																	var windowWidth = $(window).width();

																	if (windowWidth >= 1361) {
																		$("#tablelistbox > h2").css("margin-top", "650px");
																	} else {
																		$("#tablelistbox > h2").css("margin-top", "650px");
																	}

																});
																$("a[href='#price_table_contents1']").on('click', function() {
																	$("#tablelistbox > h2").css("margin-top", "400px");

																});
															}

														});
													</script>

													<script>
														document.addEventListener('DOMContentLoaded', function() {

															function multi(selectId, weightId, answerId, answerCpId) {
																var text = jQuery('#' + selectId + ' option:selected').val();
																if (text === undefined) {
																	console.error('No selected option found for #' + selectId);
																	return;
																}

																var removed = text.replace(/,/g, '');
																var num = parseInt(removed, 10);
																var weight = jQuery("#" + weightId).val();

																if (num) {
																	if (weight) {
																		var _up = 0;

																		var answer_cp = num * weight + _up * weight;
																		answer_cp = Math.round(answer_cp).toLocaleString();
																		jQuery('#' + answerCpId).text(answer_cp);

																		var answer = num * weight;
																		answer = Math.round(answer).toLocaleString();

																		// ここで値を確認
																		console.log("Calculated Answer:", answer);

																		// 1. `val()` で `input` の値を設定
																		jQuery('#' + answerId).val("HK$ " + answer);

																		// 2. `setAttribute` も試してみる
																		document.getElementById(answerId).setAttribute("value", "HK$ " + answer);

																		// 値が正しくセットされたか確認
																		console.log("Updated Input Value:", jQuery('#' + answerId).val());
																	}
																}
															}



															jQuery(document).on('change', '#simulation_select', function() {
																multi('simulation_select', 'weight', 'answer', 'answer_cp');
															});

															jQuery(document).on('change', '#weight', function() {
																multi('simulation_select', 'weight', 'answer', 'answer_cp');
															});

															jQuery(document).on('change', '#simulation_select2', function() {
																multi('simulation_select2', 'weight2', 'answer2', 'answer_cp2');
															});

															jQuery(document).on('change', '#weight2', function() {
																multi('simulation_select2', 'weight2', 'answer2', 'answer_cp2');
															});

															jQuery(function() {
																jQuery(document).on('mouseup keyup', '#weight, #weight2', function(e) {
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
													</script>

													<script src="https://www.otakaraya.jp/js/vue.min.js"></script>
													<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
													<script src="/rate_files_v2/japanese-holidays.min.js"></script>
													<script src="/rate_files_v2/price_load_ex.js"></script>
													<script>
														//crossdomainのphpファイルのアップ先URL
														const crossdomain_file = "https://www.otakaraya.jp/rate_files_v2/crossdomain.php";
														//データを反映したいDOM要素のID
														const dom_id = ["#price", "#simulation", "#todayprice"];
														Vue.use(PriceLoad, {
															_file: crossdomain_file,
															_dom: dom_id
														});
													</script>

			<?php } ?>



			<!-- MOD_20240417 -->
			<!-- MOD_20240417 -->
			<div class="renew_2024_dia_titlebox is-sp">
				<h2 class="renew_2024_dia_title_h2">
					<img class="renew_2024_dia_title_l_leaf"
						src="../images/daiya/dialeaf_l_202404.png">
					<img class="renew_2024_dia_title_r_leaf"
						src="../images/daiya/dialeaf_r_202404.png">
					<p>
					ราคากลางในการรับซื้อเพชร
					</p>
				</h2>
				<div class="renew_2024_dia_title_lead">
					<p>
					ราคารับซื้อกลางสำหรับทองคำอาจผันผวนไปตามช่วงเวลาและตลาด โปรดติดต่อสอบถามหากมีข้อสงสัย
					</p>
				</div>
			</div>
			<!-- MOD_20240417 -->

			<!-- MOD_20240417 ===================================================================== -->
			<div class="renew_2024_top_result_superbox is-sp">
				<div class="renew_2024_tab_superbox">
					<div class="renew_2024_tabbox wd_active"><img class="renew_2024_tab_arrow renew_2024_tab_arrow_wh"
							src="../images/daiya/arrow_b_wh.png"><img
							class="renew_2024_tab_arrow renew_2024_tab_arrow_br"
							src="../images/daiya/arrow_b_br.png">แหวน</div>
					<div class="renew_2024_tabbox"><img class="renew_2024_tab_arrow renew_2024_tab_arrow_wh"
							src="../images/daiya/arrow_b_wh.png"><img
							class="renew_2024_tab_arrow renew_2024_tab_arrow_br"
							src="../images/daiya/arrow_b_br.png">Necklaces</div>
					<div class="renew_2024_tabbox"><img class="renew_2024_tab_arrow renew_2024_tab_arrow_wh"
							src="../images/daiya/arrow_b_wh.png"><img
							class="renew_2024_tab_arrow renew_2024_tab_arrow_br"
							src="../images/daiya/arrow_b_br.png">Bracelets</div>
					<div class="renew_2024_tabbox"><img class="renew_2024_tab_arrow renew_2024_tab_arrow_wh"
							src="../images/daiya/arrow_b_wh.png"><img
							class="renew_2024_tab_arrow renew_2024_tab_arrow_br"
							src="../images/daiya/arrow_b_br.png">brooch</div>
					<div class="renew_2024_result_contentsbox" style="display: block;">
						<div class="renew_2024_result_contentsbox_flex">
							<div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-2carat/25167/">
									<div class="renew_2024_result_itembox">
										<div class="renew_2024_result_item_image"><img width="300" height="300"
												src="../images/daiya/27b0e8037216bcbeecb235ed5c88282a-300x300.webp"
												class="attachment-thumbnail size-thumbnail" alt="K18 diamond ring 2.027 ct"
												decoding="async" loading="lazy" sizes="100vw"></div>
										<div class="renew_2024_result_item_name">K18 diamond ring 2.027 ct</div>
										<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
										<div class="renew_2024_result_item_price">1,067,000<span class="unit">&yen;</span></div>
										<div class="renew_2024_result_item_arrow">
											<div></div>
										</div>
									</div>
								</a></div>
							<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25157/">
									<div class="renew_2024_result_itembox">
										<div class="renew_2024_result_item_image"><img width="300" height="300"
												src="../images/daiya/9e2d4f73e1d5b51f77554fd10544a2c5-300x300.webp"
												class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.038 ct"
												decoding="async" loading="lazy" sizes="100vw"></div>
										<div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 2.038 ct</div>
										<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
										<div class="renew_2024_result_item_price">2,722,000<span class="unit">&yen;</span></div>
										<div class="renew_2024_result_item_arrow">
											<div></div>
										</div>
									</div>
								</a></div>
							<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25198/">
									<div class="renew_2024_result_itembox">
										<div class="renew_2024_result_item_image"><img width="300" height="300"
												src="../images/daiya/e067b3f2e82b77781fff1280b851e264-300x300.webp"
												class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.081 ct"
												decoding="async" loading="lazy" sizes="100vw"></div>
										<div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 2.081 ct</div>
										<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
										<div class="renew_2024_result_item_price">902,000<span class="unit">&yen;</span></div>
										<div class="renew_2024_result_item_arrow">
											<div></div>
										</div>
									</div>
								</a></div>
							<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25202/">
									<div class="renew_2024_result_itembox">
										<div class="renew_2024_result_item_image"><img width="300" height="300"
												src="../images/daiya/4e6c6fbaed6c2eae401cc2bf9780c06a-1-300x300.webp"
												class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.381 ct"
												decoding="async" loading="lazy" sizes="100vw"></div>
										<div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 2.381 ct</div>
										<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
										<div class="renew_2024_result_item_price">797,000<span class="unit">&yen;</span></div>
										<div class="renew_2024_result_item_arrow">
											<div></div>
										</div>
									</div>
								</a></div>
							<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25165/">
									<div class="renew_2024_result_itembox">
										<div class="renew_2024_result_item_image"><img width="300" height="300"
												src="../images/daiya/e5873ef7b27116ff2147fac0a8855aa4-300x300.webp"
												class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.014 ct"
												decoding="async" loading="lazy" sizes="100vw"></div>
										<div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 3.014 ct</div>
										<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
										<div class="renew_2024_result_item_price">1,133,000<span class="unit">&yen;</span></div>
										<div class="renew_2024_result_item_arrow">
											<div></div>
										</div>
									</div>
								</a></div>
							<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25191/">
									<div class="renew_2024_result_itembox">
										<div class="renew_2024_result_item_image"><img width="300" height="300"
												src="../images/daiya/fc1b88445fdfed2b273060b1abb8a780-300x300.webp"
												class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.02 ct"
												decoding="async" loading="lazy" sizes="100vw"></div>
										<div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 3.02 ct</div>
										<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
										<div class="renew_2024_result_item_price">1,039,000<span class="unit">&yen;</span></div>
										<div class="renew_2024_result_item_arrow">
											<div></div>
										</div>
									</div>
								</a></div>
							<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25155/">
									<div class="renew_2024_result_itembox">
										<div class="renew_2024_result_item_image"><img width="300" height="300"
												src="../images/daiya/78601aaaf41f819c9d8541725dcc8bdc-300x300.webp"
												class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.041 ct"
												decoding="async" loading="lazy" sizes="100vw"></div>
										<div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 3.041 ct</div>
										<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
										<div class="renew_2024_result_item_price">3,085,000<span class="unit">&yen;</span></div>
										<div class="renew_2024_result_item_arrow">
											<div></div>
										</div>
									</div>
								</a></div>
							<div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-3carat/25163/">
									<div class="renew_2024_result_itembox">
										<div class="renew_2024_result_item_image"><img width="300" height="300"
												src="../images/daiya/35c50eeca24f55237026670b96a89506-300x300.webp"
												class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.587 ct"
												decoding="async" loading="lazy" sizes="100vw"></div>
										<div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 3.587 ct</div>
										<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
										<div class="renew_2024_result_item_price">1,138,000<span class="unit">&yen;</span></div>
										<div class="renew_2024_result_item_arrow">
											<div></div>
										</div>
									</div>
								</a></div>
							<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-5carat/25159/">
									<div class="renew_2024_result_itembox">
										<div class="renew_2024_result_item_image"><img width="300" height="300"
												src="../images/daiya/60fdf5d0f8ff8a5f1c109347692934f7-300x300.webp"
												class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 5.227 ct"
												decoding="async" loading="lazy" sizes="100vw"></div>
										<div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 5.227 ct</div>
										<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
										<div class="renew_2024_result_item_price">1,787,000<span class="unit">&yen;</span></div>
										<div class="renew_2024_result_item_arrow">
											<div></div>
										</div>
									</div>
								</a></div>
							<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25193/">
									<div class="renew_2024_result_itembox">
										<div class="renew_2024_result_item_image"><img width="300" height="300"
												src="../images/daiya/ba3ba147e1e10201825cbf7ed29a2027-300x300.webp"
												class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.378 ct"
												decoding="async" loading="lazy" sizes="100vw"></div>
										<div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 2.378 ct</div>
										<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
										<div class="renew_2024_result_item_price">1,006,000<span class="unit">&yen;</span></div>
										<div class="renew_2024_result_item_arrow">
											<div></div>
										</div>
									</div>
								</a></div>
							<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25161/">
									<div class="renew_2024_result_itembox">
										<div class="renew_2024_result_item_image"><img width="300" height="300"
												src="../images/daiya/da8fa4b2753b149e5662d9dda72976bb-300x300.webp"
												class="attachment-thumbnail size-thumbnail" alt="K18 diamond ring 2.636 ct"
												decoding="async" loading="lazy" sizes="100vw"></div>
										<div class="renew_2024_result_item_name">K18 diamond ring 2.636 ct</div>
										<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
										<div class="renew_2024_result_item_price">1,490,000<span class="unit">&yen;</span></div>
										<div class="renew_2024_result_item_arrow">
											<div></div>
										</div>
									</div>
								</a></div>
							<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25196/">
									<div class="renew_2024_result_itembox">
										<div class="renew_2024_result_item_image"><img width="300" height="300"
												src="../images/daiya/171943538be9b67a3e95bc711cc8486e-300x300.webp"
												class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.109 ct"
												decoding="async" loading="lazy"
												sizes="100vw"></div>
										<div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 3.109 ct</div>
										<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
										<div class="renew_2024_result_item_price">968,000<span class="unit">&yen;</span></div>
										<div class="renew_2024_result_item_arrow">
											<div></div>
										</div>
									</div>
								</a></div>
						</div>
						<div class="flex_annitation">
							*รูปภาพใช้เพื่อเป็นภาพประกอบเท่านั้น<br>
							*ราคานี้เป็นราคาซื้ออ้างอิงสำหรับสินค้าที่มาพร้อมการรับประกันและอุปกรณ์เสริม.
						</div>

						<!-- <div class="btn__wrap btn__red"><a href="../daiya/result.html" class="gtm-list-result">查看鑽石參考收購價格表請點此</a> -->
					</div>
				</div>
				<div class="renew_2024_result_contentsbox">
					<div class="renew_2024_result_contentsbox_flex">
						<div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-10carat/25181/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/8e8561b5e8f90315505686d38c99fb16-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="Pt850・Pt900 diamond necklace 15 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">Pt850・Pt900 diamond necklace 15 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">1,177,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25223/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/905423510ed336395bc889700fa304c4-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 3.22 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">Pt･Pm900 diamond necklace 3.22 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">962,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-10carat/25227/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/1bffa42f3c50b684bda418a2524eba53-1-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K14WG diamond necklace 12.89 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K14WG diamond necklace 12.89 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">886,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-9carat/25232/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/9bb0dd2b83e15a6821b8c8b039e07836-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18 diamond necklace 9.77 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18 diamond necklace 9.77 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">869,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-10carat/25236/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/b8c211efa76fc22dc3cc0f32a8ff6bf9-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="diamond necklace 10.5 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">diamond necklace 10.5 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">858,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-10carat/25234/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/042b8aef3c42fa8d689152c8e540b6ee-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="Pt･Pm850 diamond necklace 10 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">Pt･Pm850 diamond necklace 10 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">891,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-10carat/25230/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/749521b6c40a5dc258267feda0bd17cd-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18 diamond necklace 50.554 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18 diamond necklace 50.554 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">3,448,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-2carat/25057/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/4cedb8d9fb64e09f1efb16e549c7bd74-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 2.016 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">Pt･Pm900 diamond necklace 2.016 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">2,101,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-1carat/25225/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/3d04d3d616ad869772fa4a41f5b33ab5-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="Pt･Pm950 diamond necklace 1.15 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">Pt･Pm950 diamond necklace 1.15 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">1,237,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-1carat/25061/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/4167e23364eb7df4a8f8b88a9b5fe4e0-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 1.57 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">Pt･Pm900 diamond necklace 1.57 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">1,655,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25195/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/b0502e2e155fdc41573e71404d3185af-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 2.259 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">Pt･Pm900 diamond necklace 2.259 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">1,056,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-04carat/26200/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/b8f9a66b7c1c0eaf3a43bd5dbb20d788-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="diamond necklace Pt・Pm850 0.449ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">diamond necklace Pt・Pm850 0.449ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">29,700<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-1carat/26203/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/c4e08d8f36be3877e44fc641d6a7648d-300x300.jpg"
											class="attachment-thumbnail size-thumbnail" alt="diamond necklace 1carat pt850"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">diamond necklace 1carat pt850</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">49,500<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-1carat/26205/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/ae65a7f7eb26d47380d54fa69f44687e-300x300.jpg"
											class="attachment-thumbnail size-thumbnail" alt="diamond necklace 1carat Pt850・Pt900 combi"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">diamond necklace 1carat Pt850・Pt900 combi</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">47,300<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-1carat/26178/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/99856989f40e8b5ee2e353374eafeee8-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="diamondnecklace 1.2carat"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">diamondnecklace 1.2carat</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">93,500<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-10carat/25204/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/28830920d24c470a67e4e8e9e169e075-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 11.56 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">Pt･Pm900 diamond necklace 11.56 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">996,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
					</div>
					<div class="flex_annitation">
						*รูปภาพใช้เพื่อเป็นภาพประกอบเท่านั้น<br>
						*ราคานี้เป็นราคาซื้ออ้างอิงสำหรับสินค้าที่มาพร้อมการรับประกันและอุปกรณ์เสริม.
					</div>

					<!-- <div class="btn__wrap btn__red"><a href="../daiya/result.html" class="gtm-list-result">查看鑽石參考收購價格表請點此</a>
					</div> -->
				</div>
				<div class="renew_2024_result_contentsbox">
					<div class="renew_2024_result_contentsbox_flex">
						<div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/bracelet/25119/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/5a0fa1c0cff0f36c526083ff2533fe7b-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="18KT diamond Bracelet"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">18KT diamond Bracelet</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">331,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/bracelet/25123/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/67db17377b3f5a80d5f285853711b688-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet" decoding="async"
											loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18 diamond Bracelet</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">325,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25121/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/8b866539057e26196caf7e304f67fee3-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 2.05 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18 diamond Bracelet 2.05 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">326,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-5carat/25090/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/29da05cd0e7a127f2e8c2566286295d0-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 5.29 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18 diamond Bracelet 5.29 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">470,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25088/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/ac2fa71c8317fa80b6c33f35d0ac1683-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 3.134 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18 diamond Bracelet 3.134 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">543,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-4carat/25148/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/ba044445792b4001d0473643075c8c7c-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 4.48 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18 diamond Bracelet 4.48 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">258,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-5carat/25114/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/f1517cbda0710f7320acec8c0498d1fb-1-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="Pt850 K18 diamond Bracelet 5 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">Pt850 K18 diamond Bracelet 5 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">363,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-08carat/25133/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/1f0316c4c9d73ab899709dde55b81aab-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18WG diamond Bracelet 0.85 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18WG diamond Bracelet 0.85 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">313,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/bracelet/25104/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/ddc9da983dc27b73737e8886f3d12ebd-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="Pt･Pm850 diamond Bracelet"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">Pt･Pm850 diamond Bracelet</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">441,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-5carat/25135/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/a5f4a4a3014e58b0c2decd5ed20c4de7-300x300.webp"
											class="attachment-thumbnail size-thumbnail"
											alt="Pt･Pm850 diamond Bracelet bangle 5.00 ct" decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">Pt･Pm850 diamond Bracelet bangle 5.00 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">286,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-10carat/25049/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/c2c4b281193055a9c2dc5e997b440362-1-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18WG diamond Bracelet 10.52 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18WG diamond Bracelet 10.52 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">671,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/bracelet/25117/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/672cac14d58a952c1ba49df15dd222c1-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet" decoding="async"
											loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18 diamond Bracelet</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">353,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
					</div>
					<div class="flex_annitation">
						*รูปภาพใช้เพื่อเป็นภาพประกอบเท่านั้น<br>
						*ราคานี้เป็นราคาซื้ออ้างอิงสำหรับสินค้าที่มาพร้อมการรับประกันและอุปกรณ์เสริม.
					</div>

					<!-- <div class="btn__wrap btn__red"><a href="../daiya/result.html" class="gtm-list-result">查看鑽石參考收購價格表請點此</a>
					</div> -->
				</div>
				<div class="renew_2024_result_contentsbox">
					<div class="renew_2024_result_contentsbox_flex">
						<div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-2carat/25039/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/fd818dd6f22b09f248ca991dd98e1f8f-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 2.18 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18 diamond brooch 2.18 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">209,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25031/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/b41350ace8209492b075c4cf7b72d914-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 2.05 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18 diamond brooch 2.05 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">265,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-brooch/25043/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/94102e05583b4c1d77d4d41b55bcafe2-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch" decoding="async"
											loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18 diamond brooch</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">196,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-brooch/25047/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/4fd501583effa092f8c496f7f84ca0cd-1-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch" decoding="async"
											loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18WG diamond brooch</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">183,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25045/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/df4c68c6e996ce36c5bb65a08112cf11-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch 3 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18WG diamond brooch 3 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">191,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25041/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/aa21bc1a6b34b677709687329b008c94-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="Pt900 K14WG diamond brooch 3 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">Pt900 K14WG diamond brooch 3 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">199,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-01carat/25023/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/85646796326ff0e1bf5466e1e457c20a-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18 K18WG diamond brooch 0.171 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18 K18WG diamond brooch 0.171 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">278,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-1carat/25029/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/c39bed3f70e373cc41ba4cc9425b3b50-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 1.33 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18 diamond brooch 1.33 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">206,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-1carat/25025/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/443950510d383275461a64262c74a98c-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch 1.708 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18WG diamond brooch 1.708 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">270,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-4carat/25018/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/d8b27c064d525351330b2972bb04d351-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch 4.99 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18WG diamond brooch 4.99 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">404,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25027/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/1321e1b44c713db4a8fe84d90d997001-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond brooch 2.98 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">Pt･Pm900 diamond brooch 2.98 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">232,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a></div>
						<div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-5carat/25021/">
								<div class="renew_2024_result_itembox">
									<div class="renew_2024_result_item_image"><img width="300" height="300"
											src="../images/daiya/0286d9de92e1490064443403958c7cc3-300x300.webp"
											class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 5.4 ct"
											decoding="async" loading="lazy" sizes="100vw"></div>
									<div class="renew_2024_result_item_name">K18 diamond brooch 5.4 ct</div>
									<div class="renew_2024_result_item_kaitori">ราคาซื้ออ้างอิง</div>
									<div class="renew_2024_result_item_price">374,000<span class="unit">&yen;</span></div>
									<div class="renew_2024_result_item_arrow">
										<div></div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="flex_annitation">
						*รูปภาพใช้เพื่อเป็นภาพประกอบเท่านั้น<br>
						*ราคานี้เป็นราคาซื้ออ้างอิงสำหรับสินค้าที่มาพร้อมการรับประกันและอุปกรณ์เสริม.
					</div>
					<!-- <div class="btn__wrap btn__red"><a href="../daiya/result.html" class="gtm-list-result">查看鑽石參考收購價格表請點此</a></div> -->
				</div>
			</div>


			</div>
			<section>
				<div class="titleMain titleMain--wrapper is-pc">
					<h2 class="titleMain--main">
					ราคากลางในการรับซื้อเพชร
					</h2>
					<div class="titleMain--lead">
						<p>
						ราคารับซื้อกลางสำหรับทองคำอาจผันผวนไปตามช่วงเวลาและตลาด โปรดติดต่อสอบถามหากมีข้อสงสัย
						</p>
					</div>
				</div>
				<div class="flex flex--hasItem4">
					<!-- タブメニュー -->
					<ul class="flex__tab is-pc">
						<!-- タブ部分 -->
						<li class="tab__item active"><a>แหวนเพชร</a></li>
						<li class="tab__item "><a>สร้อยเพชร</a></li>
						<li class="tab__item "><a>กำไลข้อมือเพชร</a></li>
						<li class="tab__item "><a>ต่างหูเพชร</a></li>
					</ul>
					<!-- スライダー部分 -->
					<div class="flex__tabContents no_slider is-pc">
						<div class="flex__content active " style="align-items: stretch">
							<div id="flex-slider" class="content__list flex--slide">
								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-3carat/25196/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/171943538be9b67a3e95bc711cc8486e-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.109 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm900 diamond ring 3.109 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">968,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-2carat/25202/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/4e6c6fbaed6c2eae401cc2bf9780c06a-1-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.381 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm900 diamond ring 2.381 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">797,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-2carat/25198/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/e067b3f2e82b77781fff1280b851e264-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.081 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm900 diamond ring 2.081 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">902,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-2carat/25193/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/ba3ba147e1e10201825cbf7ed29a2027-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.378 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm900 diamond ring 2.378 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">1,006,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-3carat/25191/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/fc1b88445fdfed2b273060b1abb8a780-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.02 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm900 diamond ring 3.02 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">1,039,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-2carat/25167/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/27b0e8037216bcbeecb235ed5c88282a-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18 diamond ring 2.027 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18 diamond ring 2.027 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">1,067,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-3carat/25165/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/e5873ef7b27116ff2147fac0a8855aa4-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.014 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm900 diamond ring 3.014 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">1,133,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-3carat/25163/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/35c50eeca24f55237026670b96a89506-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.587 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm900 diamond ring 3.587 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">1,138,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-2carat/25161/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/da8fa4b2753b149e5662d9dda72976bb-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18 diamond ring 2.636 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18 diamond ring 2.636 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">1,490,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-5carat/25159/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/60fdf5d0f8ff8a5f1c109347692934f7-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 5.227 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm900 diamond ring 5.227 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">1,787,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-2carat/25157/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/9e2d4f73e1d5b51f77554fd10544a2c5-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.038 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm900 diamond ring 2.038 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">2,722,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-3carat/25155/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/78601aaaf41f819c9d8541725dcc8bdc-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.041 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm900 diamond ring 3.041 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">3,085,000<span>&yen;</span></p>
									</div>
								</li>

							</div>
							<div class="flex_annitation">
								*รูปภาพใช้เพื่อเป็นภาพประกอบเท่านั้น<br>
								*ราคานี้เป็นราคาซื้ออ้างอิงสำหรับสินค้าที่มาพร้อมการรับประกันและอุปกรณ์เสริม.
							</div>
						</div>
						<div class="flex__content  " style="align-items: stretch">
							<div id="flex-slider" class="content__list flex--slide">
								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-1carat/26205/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/ae65a7f7eb26d47380d54fa69f44687e-300x300.jpg"
													class="attachment-thumbnail size-thumbnail" alt="diamond necklace 1carat Pt850・Pt900 combi"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">diamond necklace 1carat Pt850・Pt900 combi</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">47,300<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-1carat/26203/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/c4e08d8f36be3877e44fc641d6a7648d-300x300.jpg"
													class="attachment-thumbnail size-thumbnail" alt="diamond necklace 1carat pt850"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">diamond necklace 1carat pt850</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">49,500<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-04carat/26200/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/b8f9a66b7c1c0eaf3a43bd5dbb20d788-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="diamond necklace Pt・Pm850 0.449ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">diamond necklace Pt・Pm850 0.449ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">29,700<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-1carat/26178/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/99856989f40e8b5ee2e353374eafeee8-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="diamondnecklace 1.2carat"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">diamondnecklace 1.2carat</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">93,500<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-10carat/25236/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/b8c211efa76fc22dc3cc0f32a8ff6bf9-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="diamond necklace 10.5 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">diamond necklace 10.5 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">858,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-10carat/25234/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/042b8aef3c42fa8d689152c8e540b6ee-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt･Pm850 diamond necklace 10 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm850 diamond necklace 10 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">891,000<span>&yen;</span></p>
									</div>
								</li>
								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-9carat/25232/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/9bb0dd2b83e15a6821b8c8b039e07836-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18 diamond necklace 9.77 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18 diamond necklace 9.77 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">869,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-10carat/25230/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/749521b6c40a5dc258267feda0bd17cd-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18 diamond necklace 50.554 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18 diamond necklace 50.554 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">3,448,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-10carat/25227/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/1bffa42f3c50b684bda418a2524eba53-1-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K14WG diamond necklace 12.89 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K14WG diamond necklace 12.89 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">886,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-1carat/25225/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/3d04d3d616ad869772fa4a41f5b33ab5-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt･Pm950 diamond necklace 1.15 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm950 diamond necklace 1.15 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">1,237,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-3carat/25223/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/905423510ed336395bc889700fa304c4-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 3.22 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm900 diamond necklace 3.22 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">962,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-10carat/25204/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/28830920d24c470a67e4e8e9e169e075-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 11.56 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm900 diamond necklace 11.56 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">996,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-2carat/25195/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/b0502e2e155fdc41573e71404d3185af-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 2.259 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm900 diamond necklace 2.259 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">1,056,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-10carat/25181/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/8e8561b5e8f90315505686d38c99fb16-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt850・Pt900 diamond necklace 15 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt850・Pt900 diamond necklace 15 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">1,177,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-1carat/25061/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/4167e23364eb7df4a8f8b88a9b5fe4e0-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 1.57 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm900 diamond necklace 1.57 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">1,655,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-2carat/25057/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/4cedb8d9fb64e09f1efb16e549c7bd74-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 2.016 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm900 diamond necklace 2.016 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">2,101,000<span>&yen;</span></p>
									</div>
								</li>

							</div>
							<div class="flex_annitation">
								*รูปภาพใช้เพื่อเป็นภาพประกอบเท่านั้น<br>
								*ราคานี้เป็นราคาซื้ออ้างอิงสำหรับสินค้าที่มาพร้อมการรับประกันและอุปกรณ์เสริม.
							</div>
						</div>
						<div class="flex__content  " style="align-items: stretch">
							<div id="flex-slider" class="content__list flex--slide">
								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-4carat/25148/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/ba044445792b4001d0473643075c8c7c-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 4.48 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18 diamond Bracelet 4.48 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">258,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-5carat/25135/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/a5f4a4a3014e58b0c2decd5ed20c4de7-300x300.webp"
													class="attachment-thumbnail size-thumbnail"
													alt="Pt･Pm850 diamond Bracelet bangle 5.00 ct" decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm850 diamond Bracelet bangle 5.00 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">286,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-08carat/25133/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/1f0316c4c9d73ab899709dde55b81aab-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18WG diamond Bracelet 0.85 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18WG diamond Bracelet 0.85 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">313,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/bracelet/25123/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/67db17377b3f5a80d5f285853711b688-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet" decoding="async"
													loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18 diamond Bracelet</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">325,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-2carat/25121/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/8b866539057e26196caf7e304f67fee3-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 2.05 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18 diamond Bracelet 2.05 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">326,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/bracelet/25119/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/5a0fa1c0cff0f36c526083ff2533fe7b-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="18KT diamond Bracelet"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">18KT diamond Bracelet</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">331,000<span>&yen;</span></p>
									</div>
								</li>
								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/bracelet/25117/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/672cac14d58a952c1ba49df15dd222c1-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet" decoding="async"
													loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18 diamond Bracelet</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">353,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-5carat/25114/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/f1517cbda0710f7320acec8c0498d1fb-1-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt850 K18 diamond Bracelet 5 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt850 K18 diamond Bracelet 5 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">363,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/bracelet/25104/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/ddc9da983dc27b73737e8886f3d12ebd-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt･Pm850 diamond Bracelet"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm850 diamond Bracelet</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">441,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-5carat/25090/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/29da05cd0e7a127f2e8c2566286295d0-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 5.29 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18 diamond Bracelet 5.29 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">470,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-3carat/25088/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/ac2fa71c8317fa80b6c33f35d0ac1683-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 3.134 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18 diamond Bracelet 3.134 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">543,000<span>&yen;</span></p>
									</div>
								</li>
								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-10carat/25049/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/c2c4b281193055a9c2dc5e997b440362-1-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18WG diamond Bracelet 10.52 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18WG diamond Bracelet 10.52 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">671,000<span>&yen;</span></p>
									</div>
								</li>

							</div>
							<div class="flex_annitation">
								*รูปภาพใช้เพื่อเป็นภาพประกอบเท่านั้น<br>
								*ราคานี้เป็นราคาซื้ออ้างอิงสำหรับสินค้าที่มาพร้อมการรับประกันและอุปกรณ์เสริม.
							</div>
						</div>
						<div class="flex__content  " style="align-items: stretch">
							<div id="flex-slider" class="content__list flex--slide">
								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-3carat/25045/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/df4c68c6e996ce36c5bb65a08112cf11-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch 3 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18WG diamond brooch 3 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">191,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-brooch/25047/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/4fd501583effa092f8c496f7f84ca0cd-1-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch" decoding="async"
													loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18WG diamond brooch</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">183,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-brooch/25043/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/94102e05583b4c1d77d4d41b55bcafe2-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch" decoding="async"
													loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18 diamond brooch</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">196,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-3carat/25041/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/aa21bc1a6b34b677709687329b008c94-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt900 K14WG diamond brooch 3 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt900 K14WG diamond brooch 3 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">199,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-2carat/25039/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/fd818dd6f22b09f248ca991dd98e1f8f-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 2.18 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18 diamond brooch 2.18 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">209,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-2carat/25031/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/b41350ace8209492b075c4cf7b72d914-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 2.05 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18 diamond brooch 2.05 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">265,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-1carat/25029/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/c39bed3f70e373cc41ba4cc9425b3b50-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 1.33 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18 diamond brooch 1.33 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">206,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-2carat/25027/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/1321e1b44c713db4a8fe84d90d997001-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond brooch 2.98 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">Pt･Pm900 diamond brooch 2.98 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">232,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-1carat/25025/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/443950510d383275461a64262c74a98c-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch 1.708 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18WG diamond brooch 1.708 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">270,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-01carat/25023/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/85646796326ff0e1bf5466e1e457c20a-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18 K18WG diamond brooch 0.171 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18 K18WG diamond brooch 0.171 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">278,000<span>&yen;</span></p>
									</div>
								</li>

								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-5carat/25021/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/0286d9de92e1490064443403958c7cc3-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 5.4 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18 diamond brooch 5.4 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">374,000<span>&yen;</span></p>
									</div>
								</li>
								<li class="content__item content_item_wrap align_items_stretch_parent">
									<a href="/daiya/result/daiya/daiya-4carat/25018/" class="img__link">
										<div class="content_image_wrap">
											<p class="content__image img">
											</p>
											<p class="content__image img"><img width="300" height="300"
													src="../images/daiya/d8b27c064d525351330b2972bb04d351-300x300.webp"
													class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch 4.99 ct"
													decoding="async" loading="lazy" sizes="100vw"></p>
											<p></p>
											<p class="content--name">K18WG diamond brooch 4.99 ct</p>
										</div>

									</a>
									<div class="content__text">
										<p class="content--title">ราคาซื้ออ้างอิง</p>
										<p class="content--price">404,000<span>&yen;</span></p>
									</div>
								</li>
							</div>
							<div class="flex_annitation">
								*รูปภาพใช้เพื่อเป็นภาพประกอบเท่านั้น<br>
								*ราคานี้เป็นราคาซื้ออ้างอิงสำหรับสินค้าที่มาพร้อมการรับประกันและอุปกรณ์เสริม.
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- MOD_20240417 -->

			<?php get_template_part( 'template-parts/assessment_cta' ); ?>
			<!-- MOD_20240417 -->
			<!--     ▼▼▼評価について2▼▼▼     -->

			<!-- MOD_20240417 -->
			<div class="is-pc">
				<section class="brandinfo_section">
					<div class="titleMain titleMain--wrapper">
						<h2 class="titleMain--main">
						จุดสำคัญที่ทำให้รับซื้อและประเมินเพชรในราคาสูงได้
						</h2>
						<div class="titleMain--lead">
							<p>
							หลายท่านอาจทราบว่า มูลค่าของเพชรนั้นขึ้นอยู่กับ "กะรัต" แต่ยังมีปัจจัยอื่นๆ เช่น การเจียระไน, ความสะอาดและสีอยู่ด้วย
							สิ่งเหล่านี้รวมกันเป็นมาตรฐานกำหนดมูลค่าของเพชรที่เรียกว่า 4C
								<br><br>
								นอกจากนี้ แบรนด์, การออกแบบ, สภาพของเพชร และการมีหรือไม่มีอุปกรณ์เสริม
ก็เป็นปัจจัยที่ส่งผลต่อการเปลี่ยนแปลงราคาเช่นกัน ที่ร้านของเราไม่เพียงแต่ประเมิน 4C เท่านั้น
แต่ยังประเมินมูลค่าเพิ่มเติมเหล่านี้อย่างครบถ้วน เพื่อให้ได้ราคาซื้อที่สูงที่สุดอีกด้วย
							</p>
						</div>
					</div>

					<div class="brandinfo brandinfo_red_repeat is-pc">
						<div class="fshoplist-target__list brand_about_repeat_parent_wrap open is_table">
							<div class="fshoplist-target--ttl">
								<h3 class="titleSub">
									เกี่ยวกับองค์ประกอบในการประเมินมูลค่าเพชร
								</h3>
							</div>
							<div class="fshoplist-target--item ">
								<div class="horizonlist horizonnumblist">
									<div class="horizonlist--link">
										<div class="horizonlist--text">
											<h4 class="titleH4 title--left">Carat</h4>
											<div class="points_content_text">
												<p>กะรัต (Carat) คือหน่วยวัดน้ำหนักของอัญมณี โดย 1 กะรัต (ct) เท่ากับ 0.2 กรัม โดยเฉพาะในกรณีของเพชร
สถาบันการประเมินและการตรวจสอบในประเทศญี่ปุ่นจะระบุอย่างละเอียดจนถึงระดับทศนิยม 3 ตำแหน่งในใบรับรองการประเมิน
ในขณะที่การค้าขายทั่วไป มักจะแสดงในรูปแบบทศนิยมเพียง 2 ตำแหน่งเท่านั้น<br>

เมื่อค่ากะรัตเพิ่มขึ้น ความล้ำค่าของอัญมณีก็จะสูงขึ้น ส่งผลให้ราคาสูงขึ้นอย่างรวดเร็ว
แม้ว่าเพชรจะมีคุณภาพเท่ากัน แต่หากคารัตเพิ่มขึ้นเป็น 2 เท่า ราคาก็ไม่จำเป็นต้องเพิ่มขึ้นเป็น 2 เท่าเสมอไป
โดยเฉพาะอย่างยิ่ง เมื่อขนาดของเพชรถึงจุดที่เป็นขนาดยอดนิยม เช่น 0.5ct หรือ 1.0ct ราคาก็มักจะเพิ่มขึ้นอย่างมาก<br>

กรณีที่เป็นการเจียระไนในอุดมคติอย่างเพชรทรงกลม (Round Brilliant Cut)
เมื่อดูความสัมพันธ์ระหว่างกะรัตและขนาดแล้วจะพบว่า
เพชรขนาด 0.1ct มีเส้นผ่านศูนย์กลางราว 3.0mm, เพชรขนาด 0.5ct มีเส้นผ่านศูนย์กลางราว 5.2mm และเพชรขนาด 1.0ct มีเส้นผ่านศูนย์กลางประมาณ 6.5mm</p>
												<div class="horizonlist--captionImg">
													<img src="../images/daiya/2024_diamond_carat_translation.webp" alt="Carat">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="fshoplist-target--item ">
								<div class="horizonlist horizonnumblist">
									<div class="horizonlist--link">
										<div class="horizonlist--text">
											<h4 class="titleH4 title--left">Cut</h4>
											<div class="points_content_text">
												<p>การเจียระไน (Cut) เป็นปัจจัยสำคัญในการดึงเอาความเปล่งประกายของเพชรออกมาให้มากที่สุด
เพชรที่ได้รับการเจียระไนที่ยอดเยี่ยมจะสะท้อนแสงได้อย่างดีและเปล่งประกายความงดงามออกมา
เมื่อประเมินการเจียระไนจะวัดผลได้ 5 ระดับ ตั้งแต่ "ยอดเยี่ยม" (Excellent) ไปจนถึง "คุณภาพต่ำ" (Poor)<br>

การประเมินจะถูกแบ่งเป็นสองส่วน ได้แก่ "สัดส่วน" (Proportion) และ "การเก็บงาน" (Finish)
โดยสัดส่วนจะประเมินขนาดและอัตราส่วนของแต่ละด้าน รวมถึงมุมของการเจียระไนแบบ Round Brilliant Cut
รวมถึงมี "รูปร่างในอุดมคติ" ที่จะดึงความเปล่งประกายออกมาได้มากที่สุด
และเพชรจะถูกจัดใน 5 ระดับตามความใกล้เคียงกับรูปร่างในอุดมคตินี้<br>

ส่วนของการเก็บงานจะถูกแยกย่อยเป็น "การขัดเกลา" (Polish) และ "ความสมมาตร" (Symmetry) ในส่วนการขัดเกลาจะประเมินคุณภาพการขัดเงา
ขณะที่ความสมมาตรจะประเมินการจัดเรียงและความสมมาตรของแต่ละด้าน โดยประเมินทั้งสองอย่างนี้ใน 5 ระดับ<br>

ดังนั้น การประเมินการเจียระไนจะพิจารณาจาก "สัดส่วน" (Proportion), "การขัดเกลา" (Polish) และ "ความสมมาตร" (Symmetry)
โดยเพชรที่ได้รับการประเมินสูงสุดในทุกด้านในระดับ "ยอดเยี่ยม" (Excellent) จะได้รับการเรียกว่า "3EX" (Triple Excellent)
นอกจากนี้ เพชรบางเม็ดที่มีลักษณะพิเศษอาจปรากฏลวดลายรูปหัวใจและลูกธนู "Heart & Cupid（H&C）" ซึ่งเป็นสัญลักษณ์ของการเจียระไนที่สมบูรณ์แบบตามเงื่อนไขพิเศษ<br>

เพชรที่ได้รับการเจียระไนระดับ "3EX" หรือ "Heart & Cupid" จะสามารถมองเห็นความเปล่งประกายได้ด้วยตาเปล่าและได้รับการยกย่องว่าเป็นการเจียระไนที่ดีที่สุด</p>
												<div class="horizonlist--captionImg">
													<!-- <span>02</span> -->
													<img src="../images/daiya/2024_diamond_cut.webp" alt="Cut">
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="fshoplist-target--item ">
								<div class="horizonlist horizonnumblist">
									<div class="horizonlist--link">

										<div class="horizonlist--text">
											<h4 class="titleH4 title--left">Clarity</h4>
											<div class="points_content_text">
												<p>โดยทั่วไปแล้วเพชรมักมีสิ่งเจือปนขนาดเล็กภายใน (Inclusion) หรือตำหนิบนพื้นผิว(Blemish)
ในส่วนของ"ความสะอาด" (Clarity) จะทำการประเมินระดับของสิ่งเจือปนและตำหนิเหล่านี้
โดยนักประเมินที่มีความเชี่ยวชาญจะใช้แว่นขยายกำลังขยาย 10 เท่าในการตรวจสอบ และจัดอันดับเป็น 11 ระดับ<br><br>

													ระดับความสะอาดของเพชร (Clarity) จะถูกจัดอันดับตั้งแต่ระดับที่ใสสะอาดที่สุด "FL (Flawless)" ไปจนถึงระดับที่มีสิ่งเจือปนมากที่สุด "I3"
โดยมีหลักเกณฑ์การประเมินดังนี้:<br><br>

													FL (Flawless): แม้จะส่องโดยใช้แว่นขยาย 10 เท่าก็ไม่พบสิ่งเจือปน (Inclusion) หรือตำหนิบนพื้นผิว (Blemish)<br>
													IF (Internally Flawless): แม้จะส่องโดยใช้แว่นขยาย 10 เท่าก็ไม่พบสิ่งเจือปน (Inclusion) แต่มีตำหนิบนพื้นผิว (Blemish) เพียงเล็กน้อย .<br>
													VVS1/VVS2 (Very Very Slightly Included):สิ่งเจือปน (Inclusion) มีขนาดเล็กมากจนแทบมองไม่เห็น แม้ส่องโดยใช้แว่นขยาย 10 เท่า<br>
													VS1/VS2 (Very Slightly Included): สามารถมองเห็นสิ่งเจือปน (Inclusion) ขนาดเล็กได้เมื่อใช้แว่นขยาย 10 เท่า<br>
													SI1/SI2 (Slightly Included): สามารถมองเห็นสิ่งเจือปน (Inclusion)ได้อย่างชัดเจนเมื่อใช้แว่นขยาย 10 เท่า<br>
													I1/I2/I3 (Included): สามารถมองเห็นสิ่งเจือปน (Inclusion)ได้ชัดเจนทั้งผ่านแว่นขยาย 10 เท่าและบางครั้งก็เห็นได้ด้วยตาเปล่า ซึ่งส่งผลต่อความบริสุทธิ์ของเพชรอย่างมาก<br><br>

													การประเมินระดับความสะอาด มิได้พิจารณาเพียงขนาดของสิ่งเจือปน (Inclusion) เท่านั้น แต่ยังรวมถึงจำนวน, ตำแหน่ง, ชนิด, การมองเห็น และสีของสิ่งเจือปนอีกด้วย</p>
												<div class="horizonlist--captionImg">
													<!-- <span>03</span> -->
													<img src="../images/daiya/2024_diamond_clarity.webp"
														alt="Clarity">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="fshoplist-target--item ">
								<div class="horizonlist horizonnumblist">
									<div class="horizonlist--link">
										<div class="horizonlist--text">
											<h4 class="titleH4 title--left">Color</h4>
											<div class="points_content_text">
												<p>สี (Color) ของเพชรจะถูกจัดอันดับตั้งแต่ระดับ D ถึง Z โดยเริ่มจาก D-color ซึ่งเป็นสีที่ใสบริสุทธิ์ที่สุด และยิ่งมีสีชัดขึ้นเท่าใด อักษรในระดับการจัดอันดับก็จะเพิ่มขึ้นไปจนถึง Z-color ยิ่งเป็นเพชรที่ใกล้เคียงกับ D-color มูลค่าก็จะยิ่งสูงขึ้น แต่ยิ่งเพชรมีสีชัดเจนก็จะยิ่งมีมูลค่าลดลง

การประเมินสีตามมาตรฐาน 4C จะใช้กับเพชรโทนสีเหลืองถึงน้ำตาลเป็นหลัก หากเพชรมีสีอื่นๆ เช่นชมพูหรือฟ้า เพชรเหล่านั้นจะถูกจัดเป็นเพชรสีแฟนซี (Fancy Color Diamond) และจะใช้เกณฑ์การประเมินที่แตกต่างจาก 4C
นอกจากนี้ หากสีของเพชรมีความเข้มกว่าระดับ Z ก็จะถูกจัดเป็นเพชรสีแฟนซีเช่นกัน

โดยทั่วไปแล้ว เพชรที่มีสีเหลืองหรือน้ำตาลอ่อนมักถูกมองว่ามีมูลค่าต่ำกว่าเพชรใสไร้สี แต่หากมีสีเข้มชัดจนถึงระดับเพชรสีแฟนซีแล้ว เพชรเหล่านี้จะล้ำค่าและได้รับการประเมินราคาสูงกว่าได้ ตัวอย่างเช่น เพชรสีเหลืองที่มีระดับสีเกิน Z อาจมีราคาสูงกว่าเพชรสีใสอย่าง D-color

นอกจากนี้ หลายท่านอาจเคยได้ยินว่าคุณสมบัติการเรืองแสงของเพชร มีผลต่อการประเมินสีของเพชร ซึ่งในความเป็นจริงแล้ว แทบไม่มีผลกระทบต่อการประเมินเลย
การเรืองแสงหมายถึงการที่เพชรปล่อยแสงสีฟ้าออกมาเมื่อถูกแสงอัลตราไวโอเลต (UV)
และเนื่องจากการประเมินสีแบบ 4C จะมุ่งเน้นไปที่เพชรโทนสีเหลือง ทำให้แม้ว่าแสงเรืองนี้อาจส่งผลให้เพชรดูเปลี่ยนไปเล็กน้อย
แต่โดยทั่วไปจะไม่กระทบต่อการจัดอันดับสี เว้นเสียแต่ว่าเพชรนั้นจะมีการเรืองแสงในระดับที่สูงมากเท่านั้น</p>
												<div class="horizonlist--captionImg">
													<!-- <span>04</span> -->
													<img src="../images/daiya/2024_diamond_color.webp" alt="Color">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="fshoplist-target__list brand_about_repeat_parent_wrap open">
							<div class="fshoplist-target--ttl">
								<h3 class="titleSub">เกณฑ์การประเมินเพชรเป็นอย่างไร ?</h3>
								<div class="high_price_purchase_points_content_lead"></div>
							</div>
							<div class="fshoplist-target--item
								existence_img">
								<div class="horizonlist horizonnumblist">
									<div class="horizonlist--link">

										<div class="horizonlist--text">
											<h4 class="titleH4 title--left">
												เกี่ยวกับการประเมินคุณภาพเพชร
											</h4>
											<p class="points_content_text">
												เพชรมีเกณฑ์การประเมินมูลค่า โดยพิจารณาคุณภาพจาก 4 ปัจจัย ได้แก่ กะรัต (น้ำหนัก), การเจียระไน (เทคนิคการขัดเงา), ความสะอาด (Clarity), และสี (Color)
ในบรรดานี้ "การเจียระไน" เป็นเพียงปัจจัยเดียวที่มนุษย์ควบคุมได้ ซึ่งมีความสำคัญอย่างยิ่ง เพราะทักษะในการเจียระไนส่งผลโดยตรงต่อความเปล่งประกายของเพชร
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="fshoplist-target--item existence_img">
								<div class="horizonlist horizonnumblist">
									<div class="horizonlist--link">

										<div class="horizonlist--text">
											<h4 class="titleH4 title--left">
												เกี่ยวกับการปรับแต่งและแปรรูปเพชร
											</h4>
											<p class="points_content_text">
											โดยทั่วไปแล้ว เพชรจะไม่มีการปรับแต่งใด ๆ นอกจากการเจียระไนและขัดเงา
แต่อย่างไรก็ตาม ในบางกรณีอาจมีการปรับแต่งเพื่อปรับปรุงระดับความใส (Clarity) หรือสี (Color) ของเพชร
ที่โอทาคาระยะ เรามุ่งมั่นประเมินมูลค่าสินค้าของลูกค้าให้มีมูลค่าสูงที่สุด ดังนั้นหากมีข้อสงสัยหรือลังเลใจ ก็สามารถนำมาให้เราตรวจสอบได้ทุกเมื่อ
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="fshoplist-target--item existence_img">
								<div class="horizonlist horizonnumblist">
									<div class="horizonlist--link">
										<div class="horizonlist--text">
											<h4 class="titleH4 title--left">
												เกี่ยวกับแหล่งผลิตเพชร
											</h4>
											<p class="points_content_text">
											แหล่งขุดค้นเพชรมีอยู่ในหลายประเทศทั่วโลก โดยประเทศที่เป็นแหล่งสำคัญ ได้แก่ รัสเซีย บอตสวานา และแคนาดา
โดยแหล่งกำเนิดของเพชรไม่ได้ส่งผลต่อมูลค่าหรือคุณภาพของเพชรโดยตรง แต่ว่ากันว่าเพชรจากเหมืองจวาเนง (Jwaneng) ในบอตสวานานั้นเป็นเพชรที่มีคุณภาพดีที่สุด

ทั้งนี้ในปี 2023 มีบริษัทที่ทำเหมืองเพชรอยู่เพียง 10 แห่งทั่วโลกเท่านั้น
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="fshoplist-target__list brand_about_repeat_parent_wrap open">
							<div class="fshoplist-target--ttl">
								<h3 class="titleSub">
									เกี่ยวกับสีของเพชรที่ได้รับการประเมินมูลค่าสูงในการรับซื้อ
								</h3>
								<div class="high_price_purchase_points_content_lead"></div>
							</div>
							<div class="fshoplist-target--item">
								<div class="horizonlist horizonnumblist">
									<div class="horizonlist--link">
										<div class="horizonlist--img">
											<span>01</span>
											<img src="../images/daiya/0179640947107c8ce4ea929f8fabf164.webp"
												alt="เพชรไร้สี (Colorless Diamond)">
										</div>
										<div class="horizonlist--text">
											<h4 class="titleH4 title--left">เพชรไร้สี (Colorless Diamond)</h4>
											<p class="points_content_text">คุณภาพของเพชรจะถูกประเมินตามหลัก 4C ยิ่งเพชรมีขนาดใหญ่และโปร่งใสมากเท่าใด มูลค่าก็จะยิ่งสูงขึ้น</p>
										</div>
									</div>
								</div>
							</div>
							<div class="fshoplist-target--item">
								<div class="horizonlist horizonnumblist">
									<div class="horizonlist--link">
										<div class="horizonlist--img">
											<span>02</span>
											<img src="../images/daiya/765829cc287d1ac17677d3b4bead81e6.webp"
												alt="เพชรสีแดง (Red Diamond)">
										</div>
										<div class="horizonlist--text">
											<h4 class="titleH4 title--left">เพชรสีแดง (Red Diamond)</h4>
											<p class="points_content_text">เพชรสีแดงนั้นหายากที่สุดและมีมูลค่าสูงที่สุดในบรรดาเพชรมีสีทั้งหมด
โดยระดับของสีแบ่งออกเป็นลำดับตามมูลค่าดังนี้ 1.Fancy Red (แดงบริสุทธิ์) 2.Fancy Purplish Red (แดงอมม่วง) 3.Fancy Orangy Red (แดงอมส้ม)</p>
										</div>
									</div>
								</div>
							</div>
							<div class="fshoplist-target--item">
								<div class="horizonlist horizonnumblist">
									<div class="horizonlist--link">
										<div class="horizonlist--img">
											<span>03</span>
											<img src="../images/daiya/cccd2bc758949f98d64a7d337d76ec6a.webp"
												alt="เพชรสีน้ำเงิน (Blue Diamond)">
										</div>
										<div class="horizonlist--text">
											<h4 class="titleH4 title--left">เพชรสีน้ำเงิน (Blue Diamond)</h4>
											<p class="points_content_text">
											เพชรสีน้ำเงินเป็นเพชรที่ได้รับการประเมินมูลค่าสูงรองจากเพชรสีแดง (Red Diamond) และพบได้น้อยมาก บางครั้งสามารถขุดพบได้จากเหมืองพรีเมียร์ในแอฟริกาใต้ โดยเพชรสีน้ำเงินที่มีมูลค่าสูงควรมีสีเข้มไม่ซีดจาง และไม่มีเฉดสีเทาปน</p>
										</div>
									</div>
								</div>
							</div>
							<div class="fshoplist-target--item">
								<div class="horizonlist horizonnumblist">
									<div class="horizonlist--link">
										<div class="horizonlist--img">
											<span>04</span>
											<img src="../images/daiya/a1d4aefe9a3a9eb13922078d8726347b.webp"
												alt="เพชรสีเขียว (Green Diamond)">
										</div>
										<div class="horizonlist--text">
											<h4 class="titleH4 title--left">เพชรสีเขียว (Green Diamond)</h4>
											<p class="points_content_text">เพชรสีเขียวเป็นหนึ่งในเพชรที่หายากและมีมูลค่าสูงมาก
											โดยเฉพาะเพชรที่มีความอิ่มตัวของสีสูงอย่าง Fancy Intense Green และ Fancy Vivid Green จะยิ่งมีมูลค่าที่สูง</p>
										</div>
									</div>
								</div>
							</div>
							<div class="fshoplist-target--item">
								<div class="horizonlist horizonnumblist">
									<div class="horizonlist--link">
										<div class="horizonlist--img">
											<span>05</span>
											<img src="../images/daiya/dfd4f792d6329e44ef3f282e136cc0fa.webp"
												alt="เพชรสีม่วง (Purple Diamond)">
										</div>
										<div class="horizonlist--text">
											<h4 class="titleH4 title--left">เพชรสีม่วง (Purple Diamond)</h4>
											<p class="points_content_text">
											เป็นเพชรสีม่วง ซึ่งมีตั้งแต่เฉดสีหม่นจนถึงสีเข้มหลากหลายระดับ ยิ่งมีสีเข้มและชัดเจนมากเท่าใด ก็ยิ่งมีมูลค่าสูงขึ้น</p>
										</div>
									</div>
								</div>
							</div>
							<div class="fshoplist-target--item">
								<div class="horizonlist horizonnumblist">
									<div class="horizonlist--link">
										<div class="horizonlist--img">
											<span>06</span>
											<img src="../images/daiya/58a97c8b6893da89264e714f7a43b3ea.webp"
												alt="เพชรสีชมพู (Pink Diamond)">
										</div>
										<div class="horizonlist--text">
											<h4 class="titleH4 title--left">เพชรสีชมพู (Pink Diamond)</h4>
											<p class="points_content_text">เพชรสีชมพูเป็นหนึ่งในเพชรมีสีที่ได้รับการประเมินว่าเป็นอัญมณีที่หายากและมีค่าอย่างยิ่ง เนื่องจากปริมาณในตลาดมีน้อยมาก</p>
										</div>
									</div>
								</div>
							</div>
							<div class="fshoplist-target--item">
								<div class="horizonlist horizonnumblist">
									<div class="horizonlist--link">
										<div class="horizonlist--img">
											<span>07</span>
											<img src="../images/daiya/857520b29ac66eab447eba193215d84e.webp"
												alt="เพชรสีส้ม (Orange diamond)">
										</div>
										<div class="horizonlist--text">
											<h4 class="titleH4 title--left">เพชรสีส้ม (Orange diamond)</h4>
											<p class="points_content_text">เพชรสีส้มเป็นเพชรที่มีมูลค่าสูงและหายาก โดยได้รับการประเมินค่าสูงกว่าเพชรสีทั่วไป</p>
										</div>
									</div>
								</div>
							</div>
							<div class="fshoplist-target--item">
								<div class="horizonlist horizonnumblist">
									<div class="horizonlist--link">
										<div class="horizonlist--img">
											<span>08</span>
											<img src="../images/daiya/bddb718ade6b729a59cc1c6244e39317.webp"
												alt="เพชรสีเหลือง (Yellow Diamond)">
										</div>
										<div class="horizonlist--text">
											<h4 class="titleH4 title--left">เพชรสีเหลือง (Yellow Diamond)</h4>
											<p class="points_content_text">เมื่อเทียบกันแล้วเพชรสีเหลืองเป็นเพชรสีที่พบได้ค่อนข้างมาก แต่ถ้าหากว่าไม่มีสีส้มเจือปน และมีสีใกล้เคียงกับสีนกคิรีบูนหรือสีเหลืองเลม่อนก็จะมีมูลค่าที่สูงกว่า</p>
										</div>
									</div>
								</div>
							</div>
							<div class="fshoplist-target--item">
								<div class="horizonlist horizonnumblist">
									<div class="horizonlist--link">
										<div class="horizonlist--img">
											<span>09</span>
											<img src="../images/daiya/c5c61e747e7ee3d7e6559b96051f425f.webp"
												alt="เพชรสีน้ำตาล (Brown Diamond)">
										</div>
										<div class="horizonlist--text">
											<h4 class="titleH4 title--left">เพชรสีน้ำตาล (Brown Diamond)</h4>
											<p class="points_content_text">
											มีเฉดสีและความเข้มที่หลากหลาย เช่น โทนน้ำตาลแดงหรือน้ำตาลเหลือง เนื่องจากพบได้มาก จึงนิยมนำไปใช้ในเครื่องประดับหลากหลายประเภท
											โดยราคาประเมินรับซื้ออาจแตกต่างกันไปขึ้นอยู่กับการออกแบบของเครื่องประดับนั้นๆ
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="fshoplist-target--item">
								<div class="horizonlist horizonnumblist">
									<div class="horizonlist--link">
										<div class="horizonlist--img">
											<span>10</span>
											<img src="../images/daiya/532ae322efb836b3bb2878eec8606009.webp"
												alt="เพชรสีดำ (Black Diamond)">
										</div>
										<div class="horizonlist--text">
											<h4 class="titleH4 title--left">เพชรสีดำ (Black Diamond)</h4>
											<p class="points_content_text">เป็นเพชรที่มีแร่เหล็กหรือแกรไฟต์กระจายตัวอยู่ภายในทั่วทั้งเม็ด โดยเพชรสีดำที่เกิดขึ้นตามธรรมชาตินั้นหายากเป็นพิเศษ และยิ่งมีสีดำสนิทล้ำลึกมากเท่าใด มูลค่าก็จะยิ่งสูงขึ้น</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="is-sp">
				<div class="renew_2024_top_pont_superbox">
					<img class="renew_2024_top_pont_title_icon"
						src="../images/daiya/point_image_202404.png">
					<div class="renew_2024_top_pont_titlebox">
						<h2 class="renew_2024_top_pont_title">
							Points for<br><span>High-Value Diamond Purchase and Appraisal</span>
						</h2>
						<div class="renew_2024_top_pont_story">
						หลายท่านอาจทราบว่า มูลค่าของเพชรนั้นขึ้นอยู่กับ "กะรัต" แต่ยังมีปัจจัยอื่นๆ เช่น การเจียระไน, ความสะอาดและสีอยู่ด้วย
						สิ่งเหล่านี้รวมกันเป็นมาตรฐานกำหนดมูลค่าของเพชรที่เรียกว่า 4C
						</div>
					</div>
					<div class="renew_2024_top_pont_item_titlebox">
						<h3>เกี่ยวกับองค์ประกอบในการประเมินมูลค่าเพชร</h3>
						<div class="renew_2024_top_pont_item_title_circle">
							<div></div>
						</div>
					</div>
					<div class="renew_2024_top_pont_item_content is-sp">
						<h4 class="renew_2024_top_point_item_h4"><span>01</span>Carat</h4>
						<div class="renew_2024_top_point_item_story">
						กะรัต (Carat) คือหน่วยวัดน้ำหนักของอัญมณี โดย 1 กะรัต (ct) เท่ากับ 0.2 กรัม โดยเฉพาะในกรณีของเพชร
สถาบันการประเมินและการตรวจสอบในประเทศญี่ปุ่นจะระบุอย่างละเอียดจนถึงระดับทศนิยม 3 ตำแหน่งในใบรับรองการประเมิน
ในขณะที่การค้าขายทั่วไป มักจะแสดงในรูปแบบทศนิยมเพียง 2 ตำแหน่งเท่านั้น

เมื่อค่ากะรัตเพิ่มขึ้น ความล้ำค่าของอัญมณีก็จะสูงขึ้น ส่งผลให้ราคาสูงขึ้นอย่างรวดเร็ว
แม้ว่าเพชรจะมีคุณภาพเท่ากัน แต่หากคารัตเพิ่มขึ้นเป็น 2 เท่า ราคาก็ไม่จำเป็นต้องเพิ่มขึ้นเป็น 2 เท่าเสมอไป
โดยเฉพาะอย่างยิ่ง เมื่อขนาดของเพชรถึงจุดที่เป็นขนาดยอดนิยม เช่น 0.5ct หรือ 1.0ct ราคาก็มักจะเพิ่มขึ้นอย่างมาก

กรณีที่เป็นการเจียระไนในอุดมคติอย่างเพชรทรงกลม (Round Brilliant Cut)
เมื่อดูความสัมพันธ์ระหว่างกะรัตและขนาดแล้วจะพบว่า
เพชรขนาด 0.1ct มีเส้นผ่านศูนย์กลางราว 3.0mm, เพชรขนาด 0.5ct มีเส้นผ่านศูนย์กลางราว 5.2mm และเพชรขนาด 1.0ct มีเส้นผ่านศูนย์กลางประมาณ 6.5mm
							<div class="point_item_captionImg"><img class="renew_2024_top_point_item_h4_image"
									src="../images/daiya/2024_diamond_carat_translation.webp" alt=""></div>
						</div>
						<div class="renew_2024_top_point_item_bar"></div>
						<h4 class="renew_2024_top_point_item_h4"><span>02</span>Cut</h4>
						<div class="renew_2024_top_point_item_story">
						การเจียระไน (Cut) เป็นปัจจัยสำคัญในการดึงเอาความเปล่งประกายของเพชรออกมาให้มากที่สุด
เพชรที่ได้รับการเจียระไนที่ยอดเยี่ยมจะสะท้อนแสงได้อย่างดีและเปล่งประกายความงดงามออกมา
เมื่อประเมินการเจียระไนจะวัดผลได้ 5 ระดับ ตั้งแต่ "ยอดเยี่ยม" (Excellent) ไปจนถึง "คุณภาพต่ำ" (Poor)

การประเมินจะถูกแบ่งเป็นสองส่วน ได้แก่ "สัดส่วน" (Proportion) และ "การเก็บงาน" (Finish)
โดยสัดส่วนจะประเมินขนาดและอัตราส่วนของแต่ละด้าน รวมถึงมุมของการเจียระไนแบบ Round Brilliant Cut
รวมถึงมี "รูปร่างในอุดมคติ" ที่จะดึงความเปล่งประกายออกมาได้มากที่สุด
และเพชรจะถูกจัดใน 5 ระดับตามความใกล้เคียงกับรูปร่างในอุดมคตินี้

ส่วนของการเก็บงานจะถูกแยกย่อยเป็น "การขัดเกลา" (Polish) และ "ความสมมาตร" (Symmetry) ในส่วนการขัดเกลาจะประเมินคุณภาพการขัดเงา
ขณะที่ความสมมาตรจะประเมินการจัดเรียงและความสมมาตรของแต่ละด้าน โดยประเมินทั้งสองอย่างนี้ใน 5 ระดับ

ดังนั้น การประเมินการเจียระไนจะพิจารณาจาก "สัดส่วน" (Proportion), "การขัดเกลา" (Polish) และ "ความสมมาตร" (Symmetry)
โดยเพชรที่ได้รับการประเมินสูงสุดในทุกด้านในระดับ "ยอดเยี่ยม" (Excellent) จะได้รับการเรียกว่า "3EX" (Triple Excellent)
นอกจากนี้ เพชรบางเม็ดที่มีลักษณะพิเศษอาจปรากฏลวดลายรูปหัวใจและลูกธนู "Heart & Cupid（H&C）" ซึ่งเป็นสัญลักษณ์ของการเจียระไนที่สมบูรณ์แบบตามเงื่อนไขพิเศษ

เพชรที่ได้รับการเจียระไนระดับ "3EX" หรือ "Heart & Cupid" จะสามารถมองเห็นความเปล่งประกายได้ด้วยตาเปล่าและได้รับการยกย่องว่าเป็นการเจียระไนที่ดีที่สุด
							<div class="point_item_captionImg"><img
									class="renew_2024_top_point_item_h4_image"
									src="../images/daiya/2024_diamond_cut.webp" alt=""></div>
						</div>
						<div class="renew_2024_top_point_item_bar"></div>
						<h4 class="renew_2024_top_point_item_h4"><span>03</span>Clarity</h4>
						<div class="renew_2024_top_point_item_story">
							โดยทั่วไปแล้วเพชรมักมีสิ่งเจือปนขนาดเล็กภายใน (Inclusion) หรือตำหนิบนพื้นผิว(Blemish)
ในส่วนของ"ความสะอาด" (Clarity) จะทำการประเมินระดับของสิ่งเจือปนและตำหนิเหล่านี้
โดยนักประเมินที่มีความเชี่ยวชาญจะใช้แว่นขยายกำลังขยาย 10 เท่าในการตรวจสอบ และจัดอันดับเป็น 11 ระดับ<br><br>

							ระดับความสะอาดของเพชร (Clarity) จะถูกจัดอันดับตั้งแต่ระดับที่ใสสะอาดที่สุด "FL (Flawless)" ไปจนถึงระดับที่มีสิ่งเจือปนมากที่สุด "I3"
โดยมีหลักเกณฑ์การประเมินดังนี้:<br><br>

							FL (Flawless): แม้จะส่องโดยใช้แว่นขยาย 10 เท่าก็ไม่พบสิ่งเจือปน (Inclusion) หรือตำหนิบนพื้นผิว (Blemish)<br>
							IF (Internally Flawless): แม้จะส่องโดยใช้แว่นขยาย 10 เท่าก็ไม่พบสิ่งเจือปน (Inclusion) แต่มีตำหนิบนพื้นผิว (Blemish) เพียงเล็กน้อย .<br>
							VVS1/VVS2 (Very Very Slightly Included):สิ่งเจือปน (Inclusion) มีขนาดเล็กมากจนแทบมองไม่เห็น แม้ส่องโดยใช้แว่นขยาย 10 เท่า<br>
							VS1/VS2 (Very Slightly Included): สามารถมองเห็นสิ่งเจือปน (Inclusion) ขนาดเล็กได้เมื่อใช้แว่นขยาย 10 เท่า<br>
							SI1/SI2 (Slightly Included): สามารถมองเห็นสิ่งเจือปน (Inclusion)ได้อย่างชัดเจนเมื่อใช้แว่นขยาย 10 เท่า<br>
							I1/I2/I3 (Included): สามารถมองเห็นสิ่งเจือปน (Inclusion)ได้ชัดเจนทั้งผ่านแว่นขยาย 10 เท่าและบางครั้งก็เห็นได้ด้วยตาเปล่า ซึ่งส่งผลต่อความบริสุทธิ์ของเพชรอย่างมาก<br><br>

							การประเมินระดับความสะอาด มิได้พิจารณาเพียงขนาดของสิ่งเจือปน (Inclusion) เท่านั้น แต่ยังรวมถึงจำนวน, ตำแหน่ง, ชนิด, การมองเห็น และสีของสิ่งเจือปนอีกด้วย
							<div class="point_item_captionImg"><img class="renew_2024_top_point_item_h4_image"
									src="../images/daiya/2024_diamond_clarity.webp" alt=""></div>
						</div>
						<div class="renew_2024_top_point_item_bar"></div>
						<h4 class="renew_2024_top_point_item_h4"><span>04</span>Color</h4>
						<div class="renew_2024_top_point_item_story">
						สี (Color) ของเพชรจะถูกจัดอันดับตั้งแต่ระดับ D ถึง Z โดยเริ่มจาก D-color ซึ่งเป็นสีที่ใสบริสุทธิ์ที่สุด และยิ่งมีสีชัดขึ้นเท่าใด อักษรในระดับการจัดอันดับก็จะเพิ่มขึ้นไปจนถึง Z-color ยิ่งเป็นเพชรที่ใกล้เคียงกับ D-color มูลค่าก็จะยิ่งสูงขึ้น แต่ยิ่งเพชรมีสีชัดเจนก็จะยิ่งมีมูลค่าลดลง

การประเมินสีตามมาตรฐาน 4C จะใช้กับเพชรโทนสีเหลืองถึงน้ำตาลเป็นหลัก หากเพชรมีสีอื่นๆ เช่นชมพูหรือฟ้า เพชรเหล่านั้นจะถูกจัดเป็นเพชรสีแฟนซี (Fancy Color Diamond) และจะใช้เกณฑ์การประเมินที่แตกต่างจาก 4C
นอกจากนี้ หากสีของเพชรมีความเข้มกว่าระดับ Z ก็จะถูกจัดเป็นเพชรสีแฟนซีเช่นกัน

โดยทั่วไปแล้ว เพชรที่มีสีเหลืองหรือน้ำตาลอ่อนมักถูกมองว่ามีมูลค่าต่ำกว่าเพชรใสไร้สี แต่หากมีสีเข้มชัดจนถึงระดับเพชรสีแฟนซีแล้ว เพชรเหล่านี้จะล้ำค่าและได้รับการประเมินราคาสูงกว่าได้ ตัวอย่างเช่น เพชรสีเหลืองที่มีระดับสีเกิน Z อาจมีราคาสูงกว่าเพชรสีใสอย่าง D-color

นอกจากนี้ หลายท่านอาจเคยได้ยินว่าคุณสมบัติการเรืองแสงของเพชร มีผลต่อการประเมินสีของเพชร ซึ่งในความเป็นจริงแล้ว แทบไม่มีผลกระทบต่อการประเมินเลย
การเรืองแสงหมายถึงการที่เพชรปล่อยแสงสีฟ้าออกมาเมื่อถูกแสงอัลตราไวโอเลต (UV)
และเนื่องจากการประเมินสีแบบ 4C จะมุ่งเน้นไปที่เพชรโทนสีเหลือง ทำให้แม้ว่าแสงเรืองนี้อาจส่งผลให้เพชรดูเปลี่ยนไปเล็กน้อย
แต่โดยทั่วไปจะไม่กระทบต่อการจัดอันดับสี เว้นเสียแต่ว่าเพชรนั้นจะมีการเรืองแสงในระดับที่สูงมากเท่านั้น
							<div class="point_item_captionImg"><img class="renew_2024_top_point_item_h4_image"
									src="../images/daiya/2024_diamond_color.webp" alt=""></div>
						</div>
					</div>
					<div class="renew_2024_top_pont_item_titlebox">
						<h3>เกณฑ์การประเมินเพชรเป็นอย่างไร ?</h3>
						<div class="renew_2024_top_pont_item_title_circle">
							<div></div>
						</div>
					</div>
					<div class="renew_2024_top_pont_item_content is-sp">
						<h4 class="renew_2024_top_point_item_h4">เกี่ยวกับการประเมินคุณภาพเพชร</h4>
						<div class="renew_2024_top_point_item_story">
						เพชรมีเกณฑ์การประเมินมูลค่า โดยพิจารณาคุณภาพจาก 4 ปัจจัย ได้แก่ กะรัต (น้ำหนัก), การเจียระไน (เทคนิคการขัดเงา), ความสะอาด (Clarity), และสี (Color)
						ในบรรดานี้ "การเจียระไน" เป็นเพียงปัจจัยเดียวที่มนุษย์ควบคุมได้ ซึ่งมีความสำคัญอย่างยิ่ง เพราะทักษะในการเจียระไนส่งผลโดยตรงต่อความเปล่งประกายของเพชร
						</div>
						<div class="renew_2024_top_point_item_bar"></div>
						<h4 class="renew_2024_top_point_item_h4">เกี่ยวกับการปรับแต่งและแปรรูปเพชร</h4>
						<div class="renew_2024_top_point_item_story">โดยทั่วไปแล้ว เพชรจะไม่มีการปรับแต่งใด ๆ นอกจากการเจียระไนและขัดเงา
แต่อย่างไรก็ตาม ในบางกรณีอาจมีการปรับแต่งเพื่อปรับปรุงระดับความใส (Clarity) หรือสี (Color) ของเพชร
ที่โอทาคาระยะ เรามุ่งมั่นประเมินมูลค่าสินค้าของลูกค้าให้มีมูลค่าสูงที่สุด ดังนั้นหากมีข้อสงสัยหรือลังเลใจ ก็สามารถนำมาให้เราตรวจสอบได้ทุกเมื่อ.
						</div>
						<div class="renew_2024_top_point_item_bar"></div>
						<h4 class="renew_2024_top_point_item_h4">เกี่ยวกับแหล่งผลิตเพชร</h4>
						<div class="renew_2024_top_point_item_story">
						แหล่งขุดค้นเพชรมีอยู่ในหลายประเทศทั่วโลก โดยประเทศที่เป็นแหล่งสำคัญ ได้แก่ รัสเซีย บอตสวานา และแคนาดา
โดยแหล่งกำเนิดของเพชรไม่ได้ส่งผลต่อมูลค่าหรือคุณภาพของเพชรโดยตรง แต่ว่ากันว่าเพชรจากเหมืองจวาเนง (Jwaneng) ในบอตสวานานั้นเป็นเพชรที่มีคุณภาพดีที่สุด

ทั้งนี้ในปี 2023 มีบริษัทที่ทำเหมืองเพชรอยู่เพียง 10 แห่งทั่วโลกเท่านั้น</div>
					</div>
					<div class="renew_2024_top_pont_item_titlebox">
						<h3>เกี่ยวกับสีของเพชรที่ได้รับการประเมินมูลค่าสูงในการรับซื้อ</h3>
						<div class="renew_2024_top_pont_item_title_circle">
							<div></div>
						</div>
					</div>
					<div class="renew_2024_top_pont_item_content is-sp"><img class="renew_2024_top_point_item_h4_image"
							src="../images/daiya/0179640947107c8ce4ea929f8fabf164.webp" alt="">
						<h4 class="renew_2024_top_point_item_h4"><span>01</span>เพชรไร้สี (Colorless Diamond)</h4>
						<div class="renew_2024_top_point_item_story">คุณภาพของเพชรจะถูกประเมินตามหลัก 4C ยิ่งเพชรมีขนาดใหญ่และโปร่งใสมากเท่าใด มูลค่าก็จะยิ่งสูงขึ้น</div>
						<div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
							src="../images/daiya/765829cc287d1ac17677d3b4bead81e6.webp" alt="">
						<h4 class="renew_2024_top_point_item_h4"><span>02</span>เพชรสีแดง (Red Diamond)</h4>
						<div class="renew_2024_top_point_item_story">เพชรสีแดงนั้นหายากที่สุดและมีมูลค่าสูงที่สุดในบรรดาเพชรมีสีทั้งหมด
						โดยระดับของสีแบ่งออกเป็นลำดับตามมูลค่าดังนี้ 1.Fancy Red (แดงบริสุทธิ์) 2.Fancy Purplish Red (แดงอมม่วง) 3.Fancy Orangy Red (แดงอมส้ม)</div>
						<div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
							src="../images/daiya/cccd2bc758949f98d64a7d337d76ec6a.webp" alt="">
						<h4 class="renew_2024_top_point_item_h4"><span>03</span>เพชรสีน้ำเงิน (Blue Diamond)</h4>
						<div class="renew_2024_top_point_item_story">เพชรสีน้ำเงินเป็นเพชรที่ได้รับการประเมินมูลค่าสูงรองจากเพชรสีแดง (Red Diamond) และพบได้น้อยมาก บางครั้งสามารถขุดพบได้จากเหมืองพรีเมียร์ในแอฟริกาใต้ โดยเพชรสีน้ำเงินที่มีมูลค่าสูงควรมีสีเข้มไม่ซีดจาง และไม่มีเฉดสีเทาปน</div>
						<div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
							src="../images/daiya/a1d4aefe9a3a9eb13922078d8726347b.webp" alt="">
						<h4 class="renew_2024_top_point_item_h4"><span>04</span>เพชรสีเขียว (Green Diamond)</h4>
						<div class="renew_2024_top_point_item_story">เพชรสีเขียวเป็นหนึ่งในเพชรที่หายากและมีมูลค่าสูงมาก
						โดยเฉพาะเพชรที่มีความอิ่มตัวของสีสูงอย่าง Fancy Intense Green และ Fancy Vivid Green จะยิ่งมีมูลค่าที่สูง</div>
						<div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
							src="../images/daiya/dfd4f792d6329e44ef3f282e136cc0fa.webp" alt="">
						<h4 class="renew_2024_top_point_item_h4"><span>05</span>เพชรสีม่วง (Purple Diamond)</h4>
						<div class="renew_2024_top_point_item_story">เป็นเพชรสีม่วง ซึ่งมีตั้งแต่เฉดสีหม่นจนถึงสีเข้มหลากหลายระดับ ยิ่งมีสีเข้มและชัดเจนมากเท่าใด ก็ยิ่งมีมูลค่าสูงขึ้น
						</div>
						<div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
							src="../images/daiya/58a97c8b6893da89264e714f7a43b3ea.webp" alt="">
						<h4 class="renew_2024_top_point_item_h4"><span>06</span>เพชรสีชมพู (Pink Diamond)</h4>
						<div class="renew_2024_top_point_item_story">เพชรสีชมพูเป็นหนึ่งในเพชรมีสีที่ได้รับการประเมินว่าเป็นอัญมณีที่หายากและมีค่าอย่างยิ่ง เนื่องจากปริมาณในตลาดมีน้อยมาก</div>
						<div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
							src="../images/daiya/857520b29ac66eab447eba193215d84e.webp" alt="">
						<h4 class="renew_2024_top_point_item_h4"><span>07</span>เพชรสีส้ม (Orange diamond)</h4>
						<div class="renew_2024_top_point_item_story">เพชรสีส้มเป็นเพชรที่มีมูลค่าสูงและหายาก โดยได้รับการประเมินค่าสูงกว่าเพชรสีทั่วไป</div>
						<div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
							src="../images/daiya/bddb718ade6b729a59cc1c6244e39317.webp" alt="">
						<h4 class="renew_2024_top_point_item_h4"><span>08</span>เพชรสีเหลือง (Yellow Diamond)</h4>
						<div class="renew_2024_top_point_item_story">เมื่อเทียบกันแล้วเพชรสีเหลืองเป็นเพชรสีที่พบได้ค่อนข้างมาก แต่ถ้าหากว่าไม่มีสีส้มเจือปน และมีสีใกล้เคียงกับสีนกคิรีบูนหรือสีเหลืองเลม่อนก็จะมีมูลค่าที่สูงกว่า</div>
						<div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
							src="../images/daiya/c5c61e747e7ee3d7e6559b96051f425f.webp" alt="">
						<h4 class="renew_2024_top_point_item_h4"><span>09</span>เพชรสีน้ำตาล (Brown Diamond)</h4>
						<div class="renew_2024_top_point_item_story">
						มีเฉดสีและความเข้มที่หลากหลาย เช่น โทนน้ำตาลแดงหรือน้ำตาลเหลือง เนื่องจากพบได้มาก จึงนิยมนำไปใช้ในเครื่องประดับหลากหลายประเภท
						โดยราคาประเมินรับซื้ออาจแตกต่างกันไปขึ้นอยู่กับการออกแบบของเครื่องประดับนั้นๆ</div>
						<div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
							src="../images/daiya/532ae322efb836b3bb2878eec8606009.webp" alt="">
						<h4 class="renew_2024_top_point_item_h4"><span>10</span>เพชรสีดำ (Black Diamond)</h4>
						<div class="renew_2024_top_point_item_story">
						เป็นเพชรที่มีแร่เหล็กหรือแกรไฟต์กระจายตัวอยู่ภายในทั่วทั้งเม็ด โดยเพชรสีดำที่เกิดขึ้นตามธรรมชาตินั้นหายากเป็นพิเศษ และยิ่งมีสีดำสนิทล้ำลึกมากเท่าใด มูลค่าก็จะยิ่งสูงขึ้น</div>
					</div>
				</div> <!-- renew_2024_top_pont_superbox -->
			</div>
			<!-- ▼▼▼変形ダイヤ説明▼▼▼ -->
			<section></section>
			<section class="transformation_description_section">
				<div class="titleMain--wrapper">
					<h2 class="titleMain--main">
					เพชรรูปทรงพิเศษคืออะไร?
					</h2>
					<div class="titleMain--lead">
						<p>เพชรรูปทรงพิเศษ คือหมวดหมู่ของเพชรที่ผ่านการเจียระไนให้มีรูปร่างแตกต่างจากทรงกลมสมบูรณ์ (Round Shape) หรือที่เรียกกันว่า Round Brilliant Cut

แม้ว่าเพชรทรงกลมแบบ Round Brilliant Cut จะเป็นรูปทรงที่ได้รับความนิยมมากที่สุด แต่ก็ยังมีเพชรที่ถูกปรับแต่งให้มีรูปร่างแตกต่างออกไปที่เรียกว่า เพชรรูปทรงแฟนซี (Fancy Shape) อยู่มากมาย และเราจะขอแนะนำบางส่วนให้คุณได้รู้จัก</p>
					</div>
				</div>
				<div class="transformation_description_content_wrap">
					<div class="transformation_description_content">
						<div class="circle_btn_accordion_area">
							<div class="circle_btn_accordion_include circle_btn_accordion_control">
								<button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
									<p class="transformation_description_content_ttl" style="position: relative;">
										<!-- <span style="position: absolute; left: -1em;">1</span> -->
										<span class="transformation_description_content_text">เอเมอรัลด์คัต (Emerald Cut)</span>
									</p>
									<img class="is-pc" src="../images/daiya/transformation_description_img1@4x.webp" alt="">
								</button>
								<div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
									<img class="is-sp" src="../images/daiya/transformation_description_img1@4x.webp" alt="">
									<p>
									เมื่อมองจากด้านบนจะมีรูปร่างเป็นสี่เหลี่ยม และเมื่อมองจากด้านข้างจะเห็นลักษณะเป็นขั้นบันได จุดเด่นของเพชรรูปทรงนี้คือสามารถเผยให้เห็นถึงความใสบริสุทธิ์และความแวววาวของเพชรได้อย่างดี
									ด้วยจำนวนเหลี่ยมเจียระไนที่น้อยและหน้าตัดที่กว้าง จึงช่วยขับเน้นความใสสะอาดของเพชรและให้ความรู้สึกหรูหรายิ่งขึ้น									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="transformation_description_content">
						<div class="circle_btn_accordion_area">
							<div class="circle_btn_accordion_include circle_btn_accordion_control">
								<button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
									<p class="transformation_description_content_ttl" style="position: relative;">
										<!-- <span style="position: absolute; left: -1em;">2</span> -->
										<span class="transformation_description_content_text">โอวัลคัต (Oval Cut)</span>
									</p>
									<img class="is-pc" src="../images/daiya/transformation_description_img2@4x.webp" alt="">
								</button>
								<div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
									<img class="is-sp" src="../images/daiya/transformation_description_img2@4x.webp" alt="">
									<p>
									เป็นเพชรที่ผ่านการเจียระไนให้มีรูปทรงวงรี โดยมีจำนวนเหลี่ยมเจียระไนประมาณ 57-58 เหลี่ยม ซึ่งใกล้เคียงกับเพชรทรงกลม และได้รับความนิยมในการนำไปใช้กับแหวนและเครื่องประดับประเภทต่าง ๆ
									โดยจุดเด่นของรูปทรงวงรีนี้ คือสามารถทำให้เกิดความรู้สึกที่แตกต่างกันไปตามความยาวและความกว้างของเพชร อีกทั้งยังให้ความรู้สึกสง่างามและมีมิติใกล้เคียงกับเพชรทรงกลมอีกด้วย									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="transformation_description_content">
						<div class="circle_btn_accordion_area">
							<div class="circle_btn_accordion_include circle_btn_accordion_control">
								<button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
									<p class="transformation_description_content_ttl" style="position: relative;">
										<!-- <span style="position: absolute; left: -1em;">3</span> -->
										<span class="transformation_description_content_text">ทริเลียนคัต (Trilliant Cut)</span>
									</p>
									<img class="is-pc" src="../images/daiya/transformation_description_img3@4x.webp" alt="">
								</button>
								<div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
									<img class="is-sp" src="../images/daiya/transformation_description_img3@4x.webp" alt="">
									<p>
									เป็นเพชรที่ผ่านการเจียระไนให้มีรูปทรงสามเหลี่ยม (Trilliant) ซึ่งแตกต่างจากเพชรทรงกลมหรือสี่เหลี่ยมแบบทั่วไป โดยมีจำนวนเหลี่ยมเจียระไนมาตรฐานอยู่ที่ 43 เหลี่ยม ทำให้เกิดประกายที่เป็นเอกลักษณ์เฉพาะตัวต่างจากทรงกลมและสี่เหลี่ยม
									ทั้งยังมีหลายรูปแบบ ตั้งแต่สามเหลี่ยมที่มุมคมชัด ไปจนถึงแบบที่มีมุมโค้งมนเล็กน้อย ทำให้มีความแวววาวที่สะท้อนออกมาในรูปทรงเรขาคณิตอย่างงดงาม									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="transformation_description_content">
						<div class="circle_btn_accordion_area">
							<div class="circle_btn_accordion_include circle_btn_accordion_control">
								<button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
									<p class="transformation_description_content_ttl" style="position: relative;">
										<!-- <span style="position: absolute; left: -1em;">4</span> -->
										<span class="transformation_description_content_text">เพชรทรงหัวใจ (Heart Shape)</span>
									</p>
									<img class="is-pc" src="../images/daiya/transformation_description_img4@4x.webp" alt="">
								</button>
								<div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
									<img class="is-sp" src="../images/daiya/transformation_description_img4@4x.webp" alt="">
									<p>
									เป็นเพชรที่ผ่านการเจียระไนให้มีรูปร่างคล้ายสัญลักษณ์รูปหัวใจ ซึ่งเป็นหนึ่งในรูปทรงดัดแปลงของ Round Brilliant Cut
 เพชรทรงหัวใจที่ดีจะสามารถวางอยู่ในกรอบสี่เหลี่ยมจัตุรัสได้พอดี หากมีความกว้างมากเกินไปหรือมีลักษณะยาวเป็นพิเศษ อาจถูกจัดเป็นรูปทรงพิเศษแทน
รูปทรงของเพชรทรงหัวใจจะถูกขัดเกลาด้วยมือของช่างทีละเล็กทีละน้อย ดังนั้นทักษะของช่างจึงส่งผลอย่างมากต่อความงดงามของเพชร									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="transformation_description_content">
						<div class="circle_btn_accordion_area">
							<div class="circle_btn_accordion_include circle_btn_accordion_control">
								<button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
									<p class="transformation_description_content_ttl" style="position: relative;">
										<!-- <span style="position: absolute; left: -1em;">5</span> -->
										<span class="transformation_description_content_text">ปริ๊นเซสคัต (Princess Cut)</span>
									</p>
									<img class="is-pc" src="../images/daiya/transformation_description_img5@4x.webp" alt="">
								</button>
								<div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
									<img class="is-sp" src="../images/daiya/transformation_description_img5@4x.webp" alt="">
									<p>
									เป็นการเจียระไนแบบมิกซ์คัต (Mix Cut) ที่ผสมผสานระหว่าง Brilliant Cut และ Step Cut ทำให้เกิดประกายแวววาวในรูปทรงสี่เหลี่ยมจัตุรัส
									เพชรทรงนี้มีหน้าตัดที่กว้าง และมีอัตราการสูญเสียเนื้อเพชรระหว่างการเจียระไนต่ำกว่า Round Brilliant Cut จึงทำให้ได้ขนาดที่ใหญ่กว่า แต่อย่างไรก็ตาม เนื่องจากมุมแหลมของเพชรทรงนี้บิ่นหรือแตกได้ง่าย จึงต้องระมัดระวังในการใช้งาน									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="transformation_description_content">
						<div class="circle_btn_accordion_area">
							<div class="circle_btn_accordion_include circle_btn_accordion_control">
								<button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
									<p class="transformation_description_content_ttl" style="position: relative;">
										<!-- <span style="position: absolute; left: -1em;">6</span> -->
										<span class="transformation_description_content_text">เพชรรูปทรงหยดน้ำ (Pear Shape Cut)</span>
									</p>
									<img class="is-pc" src="../images/daiya/transformation_description_img6@4x.webp" alt="">
								</button>
								<div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
									<img class="is-sp" src="../images/daiya/transformation_description_img6@4x.webp" alt="">
									<p>
									"Pear" หมายถึงลูกแพร์ตามชื่อภาษาอังกฤษ รูปทรงของเพชรจึงมีลักษณะคล้ายลูกแพร์
เป็นหนึ่งในรูปทรงดัดแปลงของ Round Brilliant Cut เช่นเดียวกับ Heart Shape Cut โดยมีเหลี่ยมเจียระไนทั้งหมด 58 เหลี่ยม
เนื่องจากมีลักษณะคล้ายหยดน้ำตา เพชรทรงนี้จึงถูกเรียกว่า Teardrop อีกด้วย									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="transformation_description_content">
						<div class="circle_btn_accordion_area">
							<div class="circle_btn_accordion_include circle_btn_accordion_control">
								<button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
									<p class="transformation_description_content_ttl" style="position: relative;">
										<!-- <span style="position: absolute; left: -1em;">7</span> -->
										<span class="transformation_description_content_text">เรเดียนท์คัต (Radiant Cut)</span>
									</p>
									<img class="is-pc" src="../images/daiya/transformation_description_img7@4x.webp" alt="">
								</button>
								<div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
									<img class="is-sp" src="../images/daiya/transformation_description_img7@4x.webp" alt="">
									<p>
									เป็นการเจียระไนที่มีรูปทรงเป็นสี่เหลี่ยมจัตุรัสหรือสี่เหลี่ยมผืนผ้า ซึ่งผสมผสานระหว่าง Brilliant Cut และ Emerald Cut
ถูกพัฒนาขึ้นในปี 1977 โดย Henry Grossbard แม้ว่าจะมีบางส่วนที่คล้ายกับ Princess Cut แต่ลักษณะของเหลี่ยมเจียระไน (Facet) นั้นแตกต่างกัน
นอกจากนี้ วิธีการเจียระไนแบบนี้ยังนิยมใช้กับอัญมณีประเภทอื่น ๆ อีกด้วย									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="transformation_description_content">
						<div class="circle_btn_accordion_area">
							<div class="circle_btn_accordion_include circle_btn_accordion_control">
								<button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
									<p class="transformation_description_content_ttl" style="position: relative;">
										<!-- <span style="position: absolute; left: -1em;">8</span> -->
										<span class="transformation_description_content_text">มาร์คีส์คัต (Marquise Cut)</span>
									</p>
									<img class="is-pc" src="../images/daiya/transformation_description_img8@4x.webp" alt="">
								</button>
								<div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
									<img class="is-sp" src="../images/daiya/transformation_description_img8@4x.webp" alt="">
									<p>
									เป็นการเจียระไนที่มีลักษณะเป็น รูปทรงยาวรีโดยมีปลายทั้งสองข้างเรียวแหลม คล้ายทรงเรือ
จัดอยู่ในกลุ่มของ Brilliant Cut โดยทั่วไปจะมี 58 เหลี่ยม แต่ในบางกรณีอาจถูกเจียระไนให้มี 18 เหลี่ยมได้เช่นกัน
คำว่า "Marquise" มาจากภาษาฝรั่งเศสที่แปลว่า "ขุนนางชั้นมาร์ควิส" โดยเพชรรูปทรงนี้เกิดขึ้นในสมัยที่ มาดามปอมปาดูร์ (สนมเอกของพระเจ้าหลุยส์ที่ 15 แห่งฝรั่งเศส) ได้รับบรรดาศักดิ์เป็นมาร์คีส์ ซึ่งเป็นที่มาของชื่อเพชรทรงนี้									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section></section><!-- MOD_20240417 -->
			<section class="certificate is-pc">
				<div class="titleMain titleMain--wrapper titleMain--mtPc128 titleMain--mtSp32">
					<h2 class="titleMain--main">
					อยากขายเพชรต้องที่โอทาคาระยะ
					</h2>
				</div>
				<section>
					<h3 class="titleSub">เรามีผู้เชี่ยวชาญที่ได้รับใบรับรอง GG</h3>
					<p style="text-align: center;">
					ใบรับรอง GG (Graduate Gemologist) เป็นคุณวุฒิด้านอัญมณีศาสตร์ที่ได้รับการรับรองจาก GIA (Gemological Institute of America) ซึ่งเป็นสถาบันที่มีชื่อเสียงระดับโลกด้านการวิเคราะห์และประเมินคุณภาพอัญมณี ผู้ที่ได้รับใบรับรองนี้จะถูกขนานนามว่าเป็น "ผู้เชี่ยวชาญด้านอัญมณีศาสตร์"

ที่โอทาคาระยะ นอกจากจะมีผู้เชี่ยวชาญที่ได้รับใบรับรอง GG ประจำอยู่แล้ว เรายังมีระบบฝึกอบรมภายใน เพื่อให้ความรู้และพัฒนาทักษะของนักประเมินอัญมณีอย่างต่อเนื่อง

ด้วยเหตุนี้ เราจึงสามารถให้บริการประเมินอัญมณีทุกประเภทได้อย่างถูกต้อง แม่นยำในระดับมืออาชีพ</p>

					<div class="colBox colBox__col01">
						<div class="col" style="display: flex; justify-content: space-between;">
							<div class="img gg_holder_profile">
								<img src="../images/daiya/568433d3328efc80e6346b56a8db47df.webp" alt="岩松利香のプロフィール">
							</div>
							<div class="gg_profile">
								<h4 class="titleSub" style="color:black;">ริกะ อิวะมะทสึ (Rika Iwamatsu)</h4>
								<div class="profile">
									<nobr>
										<p class="profile1">ประวัติโดยย่อ</p>
									</nobr>
									<p class="profile2">：<span>เข้าทำงานในสถาบันตรวจวิเคราะห์อัญมณี และมีประสบการณ์ทำงานด้านการจัดระดับคุณภาพเพชรและตรวจวิเคราะห์อัญมณีมาเกือบ 30 ปี</span></p>
								</div>
								<p><span>ใบรับรอง</span>：<span>GG (ได้รับเมื่อเดือนพฤษภาคม ค.ศ.1994)</span>
								</p>
								<p><span>บ้านเกิด</span>: โตเกียว</p>
								<p><span>งานอดิเรก </span>: ท่องเที่ยว</p>
							</div>
						</div>
					</div>
					<div class="colBox colBox__col01">
						<div class="col">
							<div class="img">
								<img class="custom-popup-img"
									src="../images/daiya/e3eeb8346efbe5cff2b0ba7d1f7c1987.webp" alt=GGの証明書>
							</div>
						</div>
					</div>

				</section>


				<!-- appraisal_equips -->
				<section class="appraisal_equips">
					<h3 class="titleSub">อุปกรณ์ตรวจสอบใหม่ล่าสุดของโอทาคาระยะ</h3>
					<div class="equip">
						<div class="equip_img"><img src="../images/daiya/8429090fa4171a8ce59873218128502a.webp"
								alt="เครื่องสเปกโตรโฟโตมิเตอร์แบบ UV-Vis-NIR (Ultraviolet-Visible-Near Infrared Spectrophotometer)"></div>
						<div class="equip_meta">
							<p class="equip_title">เครื่องสเปกโตรโฟโตมิเตอร์แบบ UV-Vis-NIR (Ultraviolet-Visible-Near Infrared Spectrophotometer)</p>
							<p class="equip_explain">
							เมื่อแสงที่ตามนุษย์มองเห็นได้ (Visible Light) ผ่านเข้าสู่ตัววัตถุ ส่วนหนึ่งของแสงจะถูกดูดซับโดยวัตถุนั้น และเครื่องมือที่สามารถวิเคราะห์ความยาวคลื่นของแสงที่ถูกดูดซับได้ยอดเยี่ยมนั้น คือเครื่องสเปกโตรโฟโตมิเตอร์ UV-Vis-NIR นั่นเอง
							ที่ "โอทาคาระยะ" เราใช้เครื่องมือนี้เพื่อตรวจสอบกระบวนการปรับแต่งคุณภาพของเพชรและไข่มุกสีทอง ทำให้สามารถประเมินมูลค่าของอัญมณีได้อย่างแม่นยำ							</p>
						</div>
					</div>
					<div class="equip">
						<div class="equip_img"><img src="../images/daiya/3b83232250cb59ab1761d1e66521fde9.webp"
								alt="เครื่องสเปกโตรโฟโตมิเตอร์อินฟราเรดแบบฟูเรียร์ทรานส์ฟอร์ม"></div>
						<div class="equip_meta">
							<p class="equip_title">เครื่องสเปกโตรโฟโตมิเตอร์อินฟราเรดแบบฟูเรียร์ทรานส์ฟอร์ม</p>
							<p class="equip_explain">
							FTIR เป็นเครื่องมือวิเคราะห์ที่ทำงานโดยการฉายแสงอินฟราเรดไปยังตัววัตถุและวัดแสงที่ผ่านทะลุหรือสะท้อนกลับมา เพื่อนำมาวิเคราะห์องค์ประกอบของวัตถุนั้น
							ที่ "โอทาคาระยะ" เราใช้เครื่องมือนี้ในการตรวจสอบ การเติมเรซินในหยกและ การตรวจสอบเฉพาะของเพชร รวมถึงใช้ตรวจสอบสิ่งอื่น ๆ อย่างครอบคลุม							</p>
						</div>
					</div>
					<div class="equip">
						<div class="equip_img"><img src="../images/daiya/0609b87cd0ef7ac42d7e05f14aa2451f.webp"
								alt="เครื่องตรวจแยกประเภท I และ II"></div>
						<div class="equip_meta">
							<p class="equip_title">เครื่องตรวจแยกประเภท I และ II</p>
							<p class="equip_explain">
							เครื่องมือนี้จะใช้แสงอัลตราไวโอเลตส่องไปยังวัตถุตัวอย่างเพื่อวิเคราะห์อัตราการส่งผ่านแสง รวมถึงแยกประเภทของเพชรออกเป็น ประเภท I (เพชรธรรมชาติ) และ ประเภท II (เพชรที่ผ่านกระบวนการ HPHT หรือเพชรสังเคราะห์) ในเวลาเพียง 1 วินาที
							ไม่เพียงแต่เพชรเปล่าๆ เท่านั้น เครื่องนี้ยังสามารถตรวจสอบเพชรที่ติดอยู่บนเครื่องประดับได้โดยไม่ต้องถอดออก ทำให้สามารถประเมินมูลค่าได้อย่างรวดเร็ว แม่นยำ และไม่ทำให้ตัวสินค้าเสียหาย</p>
						</div>
					</div>
					<div class="equip">
						<div class="equip_img"><img src="../images/daiya/5592cdbaa593d89e3ab7da0e4768e03f.webp"
								alt="เครื่องตรวจจับเพชรโมอิส (Moissanite Determiner)"></div>
						<div class="equip_meta">
							<p class="equip_title">เครื่องตรวจจับเพชรโมอิส (Moissanite Determiner)</p>
							<p class="equip_explain">หลังจากทำความสะอาดพื้นผิวของอัญมณีแล้ว ตัววัดจะถูกแตะลงบนวัตถุตัวอย่างเพื่อวัดค่าการนำไฟฟ้าซึ่งช่วยแยกแยะระหว่าง เพชร และเพชรโมอิสออกจากกัน

เช่นเดียวกับ เครื่องตรวจแยกประเภท I และ II อุปกรณ์นี้สามารถให้ผลลัพธ์ได้อย่างรวดเร็ว ทำให้ประเมินมูลค่าได้อย่างแม่นยำ</p>
						</div>
					</div>
				</section>
				<!-- appraisal_equips -->


				<section>
					<h3 class="titleSub">ประเมินมูลค่าจากดีไซน์และแบรนด์</h3>
					<p style="text-align: center;">
					ที่โอทาคาระยะ นอกจากการประเมินมูลค่าของตัวอัญมณีเองแล้ว เรายังพิจารณามูลค่าของแบรนด์ และการออกแบบ เพื่อนำมาคำนวณในการเสนอราคาประเมินอีกด้วย
เราตรวจสอบรายทุกรายละเอียดแม้แต่อัญมณีชิ้นเล็ก ๆ ก็จะไม่มองข้าม
ทั้งยังรับซื้อได้ แม้ว่าจะมีอุปกรณ์เสริมและกล่องหรือไม่ก็ตาม</p>
				</section>
				<section>
					<h3 class="titleSub">เรารับซื้อโดยไม่มีค่าใช้จ่ายเพิ่มเติม</h3>
					<p style="text-align: center;">
					ที่โอทาคาระยะ เราให้บริการรับซื้อโดยไม่มีค่าธรรมเนียมใด ๆ ไม่ว่าจะเป็น ค่าประเมินราคา, ค่าบริการนอกสถานที่ หรือค่าใช้จ่ายอื่น ๆ ทำให้ทุกท่านไม่จำเป็นต้องแบกรับภาระค่าใช้จ่ายเพิ่มเติม
					เรามีช่องทางรับซื้อที่หลากหลาย ทั้งบริการนอกสถานที่, ที่ร้านสาขา และการประเมินผ่านเว็บไซต์ เพื่ออำนวยความสะดวกสูงสุดให้กับทุกท่าน
					</p>
				</section>
				<section>
					<h3 class="titleSub">เครือข่ายร้านกว่า 1,300 สาขาทั่วประเทศ</h3>
					<p style="text-align: center;">
					โอทาคาระยะมีสาขามากกว่า 1,300 แห่งทั่วประเทศญี่ปุ่น ซึ่งถือเป็นหนึ่งในเครือข่ายร้านรับซื้อที่ใหญ่ที่สุด เมื่อนำสินค้ามาประเมินราคาที่สาขาใกล้บ้าน ท่านสามารถรับเงินสดได้ทันทีภายในวันเดียว

นอกจากนี้ เรายังมีเครือข่ายธุรกิจใน 44 ประเทศทั่วโลก รองรับการซื้อขายทั้งในระดับ บุคคลธรรมดา องค์กร และผู้ค้าในวงการอัญมณี

เราไม่ได้รับซื้อเฉพาะเพชรเท่านั้น แต่ยังรับซื้อ ทับทิม ไพลิน และอัญมณีอื่น ๆ อีกมากมาย
					</p>
				</section>
			</section>
			<section class="renew_2024_top_gg_profile_section is-sp" style="margin-top:0px !important;">
				<!-- MOD_20240417 -->
				<div class="renew_2024_dia_titlebox">
					<h2 class="renew_2024_dia_title_h2">
						<img class="renew_2024_dia_title_l_leaf"
							src="../images/daiya/dialeaf_l_202404.png">
						<img class="renew_2024_dia_title_r_leaf"
							src="../images/daiya/dialeaf_r_202404.png">
						<p>
						อยากขายเพชรต้องที่โอทาคาระยะ
						</p>
					</h2>
					<h3 class="renew_2024_dia_title_subtitle_h3">
					เรามีผู้เชี่ยวชาญที่ได้รับใบรับรอง GG
					</h3>
				</div>
				<!-- MOD_20240417 -->
				<div class="renew_2024_top_gg_desc">
				ใบรับรอง GG (Graduate Gemologist) เป็นคุณวุฒิด้านอัญมณีศาสตร์ที่ได้รับการรับรองจาก GIA (Gemological Institute of America) ซึ่งเป็นสถาบันที่มีชื่อเสียงระดับโลกด้านการวิเคราะห์และประเมินคุณภาพอัญมณี ผู้ที่ได้รับใบรับรองนี้จะถูกขนานนามว่าเป็น "ผู้เชี่ยวชาญด้านอัญมณีศาสตร์"

ที่โอทาคาระยะ นอกจากจะมีผู้เชี่ยวชาญที่ได้รับใบรับรอง GG ประจำอยู่แล้ว เรายังมีระบบฝึกอบรมภายใน เพื่อให้ความรู้และพัฒนาทักษะของนักประเมินอัญมณีอย่างต่อเนื่อง

ด้วยเหตุนี้ เราจึงสามารถให้บริการประเมินอัญมณีทุกประเภทได้อย่างถูกต้อง แม่นยำในระดับมืออาชีพ				</div>
				<img class="renew_2024_top_gg_photo" src="../images/daiya/photo_iwamatsu_202404_en.webp" alt="岩松 ">
				<div class="renew_2024_top_gg_profile_superbox">
					<div class="renew_2024_top_gg_profile_flex">
						<div class="renew_2024_top_gg_profile_left">
						ประวัติโดยย่อ
						</div>
						<div class="renew_2024_top_gg_profile_right">
						เข้าทำงานในสถาบันตรวจวิเคราะห์อัญมณี และมีประสบการณ์ทำงานด้านการจัดระดับคุณภาพเพชรและตรวจวิเคราะห์อัญมณีมาเกือบ 30 ปี
						</div>
					</div>
					<div class="renew_2024_top_gg_profile_flex">
						<div class="renew_2024_top_gg_profile_left">
						ใบรับรอง
						</div>
						<div class="renew_2024_top_gg_profile_right">
						GG (ได้รับเมื่อเดือนพฤษภาคม ค.ศ.1994)
						</div>
					</div>
					<div class="renew_2024_top_gg_profile_flex">
						<div class="renew_2024_top_gg_profile_left">
						บ้านเกิด
						</div>
						<div class="renew_2024_top_gg_profile_right">
						โตเกียว
						</div>
					</div>
					<div class="renew_2024_top_gg_profile_flex">
						<div class="renew_2024_top_gg_profile_left">
							งานอดิเรก
						</div>
						<div class="renew_2024_top_gg_profile_right">
						ท่องเที่ยว
						</div>
					</div>
					<div class="renew_2024_top_gg_profile_itembox">
						<img class="renew_2024_top_gg_profile_gg_certificate_img"
							src="../images/daiya/e3eeb8346efbe5cff2b0ba7d1f7c1987.webp" alt="GGの証明書">
					</div>
					<div class="renew_2024_top_gg_profile_itembox">
						<!-- appraisal_equips -->
						<section class="appraisal_equips">
							<h3 class="renew_2024_top_point_item_h4">
							อุปกรณ์ตรวจสอบใหม่ล่าสุดของโอทาคาระยะ </h3>
							<div class="equip">
								<div class="equip_img"><img
										src="../images/daiya/8429090fa4171a8ce59873218128502a.webp"
										alt="เครื่องสเปกโตรโฟโตมิเตอร์แบบ UV-Vis-NIR (Ultraviolet-Visible-Near Infrared Spectrophotometer)"></div>
								<div class="equip_meta">
									<p class="equip_title">เครื่องสเปกโตรโฟโตมิเตอร์แบบ UV-Vis-NIR (Ultraviolet-Visible-Near Infrared Spectrophotometer)</p>
									<p class="equip_explain">
									เมื่อแสงที่ตามนุษย์มองเห็นได้ (Visible Light) ผ่านเข้าสู่ตัววัตถุ ส่วนหนึ่งของแสงจะถูกดูดซับโดยวัตถุนั้น และเครื่องมือที่สามารถวิเคราะห์ความยาวคลื่นของแสงที่ถูกดูดซับได้ยอดเยี่ยมนั้น คือเครื่องสเปกโตรโฟโตมิเตอร์ UV-Vis-NIR นั่นเอง
									ที่ "โอทาคาระยะ" เราใช้เครื่องมือนี้เพื่อตรวจสอบกระบวนการปรับแต่งคุณภาพของเพชรและไข่มุกสีทอง ทำให้สามารถประเมินมูลค่าของอัญมณีได้อย่างแม่นยำ									</p>
								</div>
							</div>
							<div class="equip">
								<div class="equip_img"><img
										src="../images/daiya/3b83232250cb59ab1761d1e66521fde9.webp"
										alt="เครื่องสเปกโตรโฟโตมิเตอร์อินฟราเรดแบบฟูเรียร์ทรานส์ฟอร์ม (FTIR – Fourier Transform Infrared Spectrophotometer)"></div>
								<div class="equip_meta">
									<p class="equip_title">เครื่องสเปกโตรโฟโตมิเตอร์อินฟราเรดแบบฟูเรียร์ทรานส์ฟอร์ม (FTIR – Fourier Transform Infrared Spectrophotometer)</p>
									<p class="equip_explain">
									FTIR เป็นเครื่องมือวิเคราะห์ที่ทำงานโดยการฉายแสงอินฟราเรดไปยังตัววัตถุและวัดแสงที่ผ่านทะลุหรือสะท้อนกลับมา เพื่อนำมาวิเคราะห์องค์ประกอบของวัตถุนั้น
									ที่ "โอทาคาระยะ" เราใช้เครื่องมือนี้ในการตรวจสอบ การเติมเรซินในหยกและ การตรวจสอบเฉพาะของเพชร รวมถึงใช้ตรวจสอบสิ่งอื่น ๆ อย่างครอบคลุม									</p>
								</div>
							</div>
							<div class="equip">
								<div class="equip_img"><img
										src="../images/daiya/0609b87cd0ef7ac42d7e05f14aa2451f.webp"
										alt="เครื่องตรวจแยกประเภท I และ II"></div>
								<div class="equip_meta">
									<p class="equip_title">เครื่องตรวจแยกประเภท I และ II</p>
									<p class="equip_explain">
									เครื่องมือนี้จะใช้แสงอัลตราไวโอเลตส่องไปยังวัตถุตัวอย่างเพื่อวิเคราะห์อัตราการส่งผ่านแสง รวมถึงแยกประเภทของเพชรออกเป็น ประเภท I (เพชรธรรมชาติ) และ ประเภท II (เพชรที่ผ่านกระบวนการ HPHT หรือเพชรสังเคราะห์) ในเวลาเพียง 1 วินาที
									ไม่เพียงแต่เพชรเปล่าๆ เท่านั้น เครื่องนี้ยังสามารถตรวจสอบเพชรที่ติดอยู่บนเครื่องประดับได้โดยไม่ต้องถอดออก ทำให้สามารถประเมินมูลค่าได้อย่างรวดเร็ว แม่นยำ และไม่ทำให้ตัวสินค้าเสียหาย</p>
								</div>
							</div>
							<div class="equip">
								<div class="equip_img"><img
										src="../images/daiya/5592cdbaa593d89e3ab7da0e4768e03f.webp"
										alt="เครื่องตรวจจับเพชรโมอิส (Moissanite Determiner)"></div>
								<div class="equip_meta">
									<p class="equip_title">เครื่องตรวจจับเพชรโมอิส (Moissanite Determiner)</p>
									<p class="equip_explain">หลังจากทำความสะอาดพื้นผิวของอัญมณีแล้ว ตัววัดจะถูกแตะลงบนวัตถุตัวอย่างเพื่อวัดค่าการนำไฟฟ้าซึ่งช่วยแยกแยะระหว่าง เพชร และเพชรโมอิสออกจากกัน

เช่นเดียวกับ เครื่องตรวจแยกประเภท I และ II อุปกรณ์นี้สามารถให้ผลลัพธ์ได้อย่างรวดเร็ว ทำให้ประเมินมูลค่าได้อย่างแม่นยำ</p>
								</div>
							</div>
						</section>
						<!-- appraisal_equips -->
					</div>
					<div class="renew_2024_top_gg_profile_itembox">

						<h3 class="renew_2024_top_point_item_h4">
							ประเมินมูลค่าจากดีไซน์และแบรนด์
						</h3>
						<div class="renew_2024_top_point_item_story">
						ที่โอทาคาระยะ นอกจากการประเมินมูลค่าของตัวอัญมณีเองแล้ว เรายังพิจารณามูลค่าของแบรนด์ และการออกแบบ เพื่อนำมาคำนวณในการเสนอราคาประเมินอีกด้วย
เราตรวจสอบรายทุกรายละเอียดแม้แต่อัญมณีชิ้นเล็ก ๆ ก็จะไม่มองข้าม
ทั้งยังรับซื้อได้ แม้ว่าจะมีอุปกรณ์เสริมและกล่องหรือไม่ก็ตาม
						</div>
						<div class="renew_2024_top_point_item_bar"></div>

						<h3 class="renew_2024_top_point_item_h4">
						เรารับซื้อโดยไม่มีค่าใช้จ่ายเพิ่มเติม
						</h3>
						<div class="renew_2024_top_point_item_story">
						ที่โอทาคาระยะ เราให้บริการรับซื้อโดยไม่มีค่าธรรมเนียมใด ๆ ไม่ว่าจะเป็น ค่าประเมินราคา, ค่าบริการนอกสถานที่ หรือค่าใช้จ่ายอื่น ๆ ทำให้ทุกท่านไม่จำเป็นต้องแบกรับภาระค่าใช้จ่ายเพิ่มเติม
						เรามีช่องทางรับซื้อที่หลากหลาย ทั้งบริการนอกสถานที่, ที่ร้านสาขา และการประเมินผ่านเว็บไซต์ เพื่ออำนวยความสะดวกสูงสุดให้กับทุกท่าน
						</div>
						<div class="renew_2024_top_point_item_bar"></div>

						<h3 class="renew_2024_top_point_item_h4">
						เครือข่ายร้านกว่า 1,300 สาขาทั่วประเทศ
						</h3>
						<div class="renew_2024_top_point_item_story">
						โอทาคาระยะมีสาขามากกว่า 1,300 แห่งทั่วประเทศญี่ปุ่น ซึ่งถือเป็นหนึ่งในเครือข่ายร้านรับซื้อที่ใหญ่ที่สุด เมื่อนำสินค้ามาประเมินราคาที่สาขาใกล้บ้าน ท่านสามารถรับเงินสดได้ทันทีภายในวันเดียว

นอกจากนี้ เรายังมีเครือข่ายธุรกิจใน 44 ประเทศทั่วโลก รองรับการซื้อขายทั้งในระดับ บุคคลธรรมดา องค์กร และผู้ค้าในวงการอัญมณี

เราไม่ได้รับซื้อเฉพาะเพชรเท่านั้น แต่ยังรับซื้อ ทับทิม ไพลิน และอัญมณีอื่น ๆ อีกมากมาย
						</div>
					</div>
				</div>
			</section>
			<!-- renew_2024_top_gg_profile_section -->

			<section></section><!-- MOD_20240417 -->
			<div class="is-pc">
				<div class="wd_spacer is-pc"></div><!-- MOD_20240417 -->
				<section class="certificate">
					<div class="titleMain titleMain--wrapper titleMain--mtPc128 titleMain--mtSp32">
						<h2 class="titleMain--main">
						เกี่ยวกับใบรับรองการประเมินเพชร
						</h2>
					</div>
					<section>
						<h3 class="titleSub">ใบรับรองการประเมินและใบรับรองประเภทอัญมณีคืออะไร ?</h3>
						<p style="text-align: center;">
						เมื่อเราซื้อเพชร ก็มักจะมีใบรับรองอัญมณีที่ระบุแหล่งกำเนิดและประเภทของเพชรแนบมาด้วย
						หากมีใบรับรองดังกล่าว กรุณานำมาพร้อมกับเพชรในกรณีที่ต้องการขาย
						</p>
					</section>
					<section>
						<div class="colBox colBox__col01">
							<div class="col">
								<div class="img">
									<img class="custom-popup-img" src="../images/daiya/kantei_org.webp"
										alt="鑑定書について">
								</div>
							</div>
						</div>
					</section>
					<section>
						<h3 class="titleSub">GIA (สถาบันอัญมณีศาสตร์แห่งสหรัฐอเมริกา)</h3>
						<div class="colBox colBox__col01">
							<div class="col">
								<div class="img">
									<img class="custom-popup-img"
										src="../images/daiya/diamond_GIA.webp"
										alt="GIA (สถาบันอัญมณีศาสตร์แห่งสหรัฐอเมริกา)">
								</div>
							</div>
						</div>
					</section>
					<section>
						<h3 class="titleSub">วิธีอ่านใบรับรองการประเมินเพชร</h3>
						<ol class="num-content__lists">
							<li class="num-content__list">
								<dl>
									<dt>การเจียระไนและรูปทรง</dt>
									<dd>
										<p>ระบุลักษณะภายนอกและรูปแบบการเจียระไนของเพชร</p>
									</dd>
								</dl>
							</li>
							<li class="num-content__list">
								<dl>
									<dt>น้ำหนัก (กะรัต)</dt>
									<dd>
										<p>ประเมินน้ำหนักโดยใช้หน่วย 1 กะรัต = 0.2 กรัม (200 มิลลิกรัม).</p>
									</dd>
								</dl>
							</li>
							<li class="num-content__list">
								<dl>
									<dt>ระดับสี (Color Grade)</dt>
									<dd>
										<p>ใช้ GIA มาสเตอร์สโตน (ที่ได้รับการรับรองจาก JJA/AGL) ในการประเมินระดับความเข้มของสีเพชร โดยแบ่งเป็นเกรดตั้งแต่ D ถึง Z</p>
									</dd>
								</dl>
							</li>
							<li class="num-content__list">
								<dl>
									<dt>ระดับความสะอาด (Clarity Grade)</dt>
									<dd>
										<p>ประเมินจำนวน ขนาด สี และตำแหน่งของตำหนิภายในเพชร โดยแบ่งเป็นระดับ FL, IF, VVS1-VVS2, VS1-VS2, SI1-SI2, I1-I3</p>
									</dd>
								</dl>
							</li>
							<li class="num-content__list">
								<dl>
									<dt>ระดับการเจียระไน (Cut Grade)</dt>
									<dd>
										<p>ประเมินโดยใช้ฐานข้อมูล GIA Facetware Cut Estimator ร่วมกับการตรวจสอบด้วยสายตา โดยแบ่งเป็นระดับ Excellent, Very Good, Good, Fair, Poor</p>
									</dd>
								</dl>
							</li>
							<li class="num-content__list">
								<dl>
									<dt>การเรืองแสง (Fluorescence)</dt>
									<dd>
										<p>ประเมินสีและความเข้มของการเรืองแสงโดยใช้ Fluorescence Master Stone แบ่งเป็นระดับ None, Faint, Medium, Strong, Very Strong</p>
									</dd>
								</dl>
							</li>
						</ol>
					</section>
					<section>
						<h3 class="titleSub">ใบรับรองการประเมินสามารถออกใหม่ได้</h3>
						<p style="text-align: center;">
							ใบรับรองอัญมณีสามารถขอออกใหม่ได้จากสถาบันตรวจสอบอัญมณี, ผู้เชี่ยวชาญด้านอัญมณีที่มีใบรับรอง หรือร้านเครื่องประดับรวมถึงร้านรับซื้ออัญมณีที่มีนักประเมินอัญมณีประจำอยู่
							<br><br>
							การขอออกใบรับรองใหม่มีค่าธรรมเนียม ซึ่งจะแตกต่างกันขึ้นอยู่กับขนาดและจำนวนของอัญมณี รวมถึงสถานที่ที่ดำเนินการออกให้ใหม่
นอกจากนี้ ค่าธรรมเนียมยังขึ้นอยู่กับจำนวนรายการที่ต้องระบุในใบรับรอง โดยทั่วไปมีช่วงราคาอยู่ที่ประมาณ 1,000–15,000 เยน
						</p>
					</section>
					<section>
						<section>
							<h3 class="titleSub">สำหรับท่านใดที่ไม่มีใบรับรองการประเมิน</h3>
							<p style="text-align: center;">
								ที่โอทาคาระยะ เราสามารถประเมินและรับซื้อได้แม้ไม่มีใบรับรองการประเมินหรือใบรับรองประเภทอัญมณี
เนื่องจากร้านของเรามีนักประเมินอัญมณีที่มีคุณวุฒิ GG ประจำอยู่ จึงสามารถทำการประเมินอัญมณีและเสนอราคาประเมินที่เหมาะสมได้ทันที
							</p>

						</section>
					</section>
					<section>
						<div class="titleMain titleMain--wrapper">
							<h2 class="titleMain--main">
							แม้สินค้ามีตำหนิเราก็รับซื้อ
							</h2>
							<div class="titleMain--lead">
								<p style="text-align: center;">
								ที่โอทาคาระยะ เรารับประเมินและรับซื้อสินค้าที่มีตำหนิ เช่น ดีไซน์ล้าสมัย มีสนิม หม่นหมอง โค้งงอ สกปรก หรือไม่มีใบรับรองและใบรับประกัน
									<br><br>
									ผู้เชี่ยวชาญด้านการประเมินของเราจะใช้เครื่องมือเฉพาะทางในการตรวจสอบอย่างละเอียด เพื่อให้สามารถคืนมูลค่าสูงสุดให้กับลูกค้าในรูปแบบของราคาประเมินรับซื้อได้
								</p>
							</div>
						</div>
					</section>
				</section>
			</div>
			<section class="renew_2024_top_gg_profile_section is-sp" style="margin-top:0px !important;">
				<div class="renew_2024_titlesub_topbar follow">
					<div class="renew_2024_titlesub_topbar_center"></div>
					<div class="renew_2024_titlesub_topbar_left"></div>
					<div class="renew_2024_titlesub_topbar_right"></div>
				</div>
				<div class="renew_2024_auth_titlebox">
					<h2 class="renew_2024_auth_title_h2">
					เกี่ยวกับใบรับรองการประเมินเพชร
					</h2>
					<h3 class="renew_2024_auth_title_about">
					ใบรับรองการประเมินและใบรับรองประเภทอัญมณีคืออะไร ?
					</h3>
					<img class="renew_2024_auth_title_image"
						src="../images/daiya/report_titleimage_202404.png">
				</div>
				<div class="renew_2024_top_gg_desc">
				เมื่อเราซื้อเพชร ก็มักจะมีใบรับรองอัญมณีที่ระบุแหล่งกำเนิดและประเภทของเพชรแนบมาด้วย
				หากมีใบรับรองดังกล่าว กรุณานำมาพร้อมกับเพชรในกรณีที่ต้องการขาย
				</div>
				<div class="renew_2024_auth_item_superbox">
					<img class="renew_2024_auth_item_innerimage custom-popup-img" src="../images/daiya/kantei_org.webp" alt="鑑定書について">
					<h3 class="renew_2024_auth_title_about">
						GIA (สถาบันอัญมณีศาสตร์แห่งสหรัฐอเมริกา)
					</h3>
					<img class="renew_2024_auth_item_innerimage custom-popup-img"
						src="../images/daiya/diamond_GIA.webp"
						alt="GIA (สถาบันอัญมณีศาสตร์แห่งสหรัฐอเมริกา)">
					<h3 class="renew_2024_auth_title_about">
						ダイヤモンド鑑定書の見方
					</h3>
					<div class="renew_2024_auth_howtoread_itembox">
						<div class="renew_2024_auth_howtoread_titlebox">
							<div class="renew_2024_auth_howtoread_num">01</div>
							<div class="renew_2024_auth_howtoread_title">การเจียระไนและรูปทรง</div>
						</div>
						<div class="renew_2024_auth_howtoread_story">ระบุลักษณะภายนอกและรูปแบบการเจียระไนของเพชร</div>
					</div>
					<div class="renew_2024_auth_howtoread_bar"></div>
					<div class="renew_2024_auth_howtoread_itembox">
						<div class="renew_2024_auth_howtoread_titlebox">
							<div class="renew_2024_auth_howtoread_num">02</div>
							<div class="renew_2024_auth_howtoread_title">น้ำหนัก (กะรัต)</div>
						</div>
						<div class="renew_2024_auth_howtoread_story">ประเมินน้ำหนักโดยใช้หน่วย 1 กะรัต = 0.2 กรัม (200 มิลลิกรัม).</div>
					</div>
					<div class="renew_2024_auth_howtoread_bar"></div>
					<div class="renew_2024_auth_howtoread_itembox">
						<div class="renew_2024_auth_howtoread_titlebox">
							<div class="renew_2024_auth_howtoread_num">03</div>
							<div class="renew_2024_auth_howtoread_title">ระดับสี (Color Grade)</div>
						</div>
						<div class="renew_2024_auth_howtoread_story">ใช้ GIA มาสเตอร์สโตน (ที่ได้รับการรับรองจาก JJA/AGL) ในการประเมินระดับความเข้มของสีเพชร โดยแบ่งเป็นเกรดตั้งแต่ D ถึง Z</div>
					</div>
					<div class="renew_2024_auth_howtoread_bar"></div>
					<div class="renew_2024_auth_howtoread_itembox">
						<div class="renew_2024_auth_howtoread_titlebox">
							<div class="renew_2024_auth_howtoread_num">04</div>
							<div class="renew_2024_auth_howtoread_title">ระดับความสะอาด (Clarity Grade)</div>
						</div>
						<div class="renew_2024_auth_howtoread_story">
							ประเมินจำนวน ขนาด สี และตำแหน่งของตำหนิภายในเพชร โดยแบ่งเป็นระดับ FL, IF, VVS1-VVS2, VS1-VS2, SI1-SI2, I1-I3</div>
					</div>
					<div class="renew_2024_auth_howtoread_bar"></div>
					<div class="renew_2024_auth_howtoread_itembox">
						<div class="renew_2024_auth_howtoread_titlebox">
							<div class="renew_2024_auth_howtoread_num">05</div>
							<div class="renew_2024_auth_howtoread_title">ระดับการเจียระไน (Cut Grade)</div>
						</div>
						<div class="renew_2024_auth_howtoread_story">ประเมินโดยใช้ฐานข้อมูล GIA Facetware Cut Estimator ร่วมกับการตรวจสอบด้วยสายตา โดยแบ่งเป็นระดับ Excellent, Very Good, Good, Fair, Poor</div>
					</div>
					<div class="renew_2024_auth_howtoread_bar"></div>
					<div class="renew_2024_auth_howtoread_itembox">
						<div class="renew_2024_auth_howtoread_titlebox">
							<div class="renew_2024_auth_howtoread_num">06</div>
							<div class="renew_2024_auth_howtoread_title">การเรืองแสง (Fluorescence)</div>
						</div>
						<div class="renew_2024_auth_howtoread_story">ประเมินสีและความเข้มของการเรืองแสงโดยใช้ Fluorescence Master Stone แบ่งเป็นระดับ None, Faint, Medium, Strong, Very Strong</div>
					</div>
				</div>
				<div class="renew_2024_auth_additional_superbox">
					<h3 class="renew_2024_auth_additional_tilte">
						<img class="renew_2024_auth_item_image"
							src="../images/daiya/auth_item_check.png">
						ใบรับรองการประเมินสามารถออกใหม่ได้
					</h3>
					<div class="renew_2024_auth_additional_story">
						ใบรับรองอัญมณีสามารถขอออกใหม่ได้จากสถาบันตรวจสอบอัญมณี, ผู้เชี่ยวชาญด้านอัญมณีที่มีใบรับรอง หรือร้านเครื่องประดับรวมถึงร้านรับซื้ออัญมณีที่มีนักประเมินอัญมณีประจำอยู่
						<br><br>
						การขอออกใบรับรองใหม่มีค่าธรรมเนียม ซึ่งจะแตกต่างกันขึ้นอยู่กับขนาดและจำนวนของอัญมณี รวมถึงสถานที่ที่ดำเนินการออกให้ใหม่
นอกจากนี้ ค่าธรรมเนียมยังขึ้นอยู่กับจำนวนรายการที่ต้องระบุในใบรับรอง โดยทั่วไปมีช่วงราคาอยู่ที่ประมาณ 1,000–15,000 เยน
					</div>
					<div class="renew_2024_auth_additional_bar"></div>
					<h3 class="renew_2024_auth_additional_tilte">
						<img class="renew_2024_auth_item_image"
							src="../images/daiya/auth_item_check.png">
						สำหรับท่านใดที่ไม่มีใบรับรองการประเมิน
					</h3>
					<div class="renew_2024_auth_additional_story">
					ที่โอทาคาระยะ เราสามารถประเมินและรับซื้อได้แม้ไม่มีใบรับรองการประเมินหรือใบรับรองประเภทอัญมณี
					เนื่องจากร้านของเรามีนักประเมินอัญมณีที่มีคุณวุฒิ GG ประจำอยู่ จึงสามารถทำการประเมินอัญมณีและเสนอราคาประเมินที่เหมาะสมได้ทันที
					</div>
				</div>
				<!-- renew_2024_auth_additional_superbox -->
				<div class="renew_2024_auth_oldok_superbox">
					<h2 class="renew_2024_auth_oldok_title">
						<img class="renew_2024_auth_oldok_photo"
							src="../images/daiya/ok_photo_202404.png">
						<p>
							ไม่ต้องกังวลกับการซื้อผลิตภัณฑ์ทองคำที่ไม่ทราบความบริสุทธิ์
						</p>
					</h2>
					<div class="renew_2024_auth_oldok_story">
					ที่โอทาคาระยะ เรารับประเมินและรับซื้อสินค้าที่มีตำหนิ เช่น ดีไซน์ล้าสมัย มีสนิม หม่นหมอง โค้งงอ สกปรก หรือไม่มีใบรับรองและใบรับประกัน

						<br><br>
						ผู้เชี่ยวชาญด้านการประเมินของเราจะใช้เครื่องมือเฉพาะทางในการตรวจสอบอย่างละเอียด เพื่อให้สามารถคืนมูลค่าสูงสุดให้กับลูกค้าในรูปแบบของราคาประเมินรับซื้อได้
					</div>
				</div>
				<!-- renew_2024_auth_oldok_superbox -->
			</section>
			<!--     ▲▲▲評価について▲▲▲     -->

			<section></section>
			<!--     ▲▲▲carat別買取▲▲▲     --><!-- MOD_20240417 -->
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
									<h2 class="is-pc bgsitecolor bordersitecolor relative"><span class="noto thin"
											style="font-size: 26px; font-family: serif;">ผู้ประเมิน</span></h2>
									<h2 class="is-sp bgsitecolor bordersitecolor relative"><span class="noto thin"
											style="margin:-1rem 0 0 0; font-size: 26px; font-family: serif;">ผู้ประเมิน</span></h2>
								</div>
								<div class="shop-leader_head_shadow absolute">
									<div class="relative"></div>
								</div>
								<div class="imgbox absolute">
									<img src=../images/daiya/568433d3328efc80e6346b56a8db47df.webp alt="">
								</div>
								<ul class="floatlist">
									<li class="shop-leader_name sitetextcolor" style="font-family: serif;">
										<span class="noto ja" style="font-weight: bold;"> Iwamatsu</span>
									</li>
									<li class="shop-leader_info">
										<table>
											<tbody>
												<tr>
													<th class="sitetextcolor">
														<span class="noto">งานอดิเรก </span>
													</th>
													<td>
														<span class="noto">ท่องเที่ยว</span>
													</td>
												</tr>
												<tr>
													<th class="sitetextcolor">
														<span class="noto">คำพูดที่ชอบ</span>
													</th>
													<td>
														<span class="noto">'พูดจริงทำจริง'</span>
													</td>
												</tr>
												<tr>
													<th class="sitetextcolor">
														<span class="noto">แบรนด์ที่ชอบ</span>
													</th>
													<td>
														<span class="noto">เพชรและอัญมณี</span>
													</td>
												</tr>
												<tr>
													<th class="sitetextcolor">
														<span class="noto">ตัวอย่างการรับซื้อในอดีต</span>
													</th>
													<td>
														<span class="noto">เพชร 10 กะรัต</span>
													</td>
												</tr>
											</tbody>
										</table>
									</li>
								</ul>
							</div>
							<p class="shop-leader_text">
								<span class="noto">ที่ร้านโอทาคาระยะ เราทำการประเมินอัญมณีวันละหลายร้อยรายการ ตั้งแต่ขนาดเล็กไปจนถึงขนาดใหญ่
ราคาประเมินจะเปลี่ยนแปลงตามปัจจัยต่างๆ เช่น หลัก 4C ของเพชร สี รูปร่าง น้ำหนัก และการเรืองแสง
นอกจากนี้ ร้านของเรายังมีระบบประมูลภายในบริษัท ทำให้สามารถตอบสนองต่ออุปสงค์ได้อย่างรวดเร็ว

ในการประเมินและตรวจสอบ เรามีทีมงานมืออาชีพพร้อมเครื่องมือตรวจสอบเฉพาะทาง เช่น เครื่องทดสอบเพชร เพื่อให้สามารถประเมินราคาได้อย่างแม่นยำในทุกสาขาทั่วประเทศญี่ปุ่น
หากมีอัญมณีที่ต้องการขาย โปรดใช้บริการที่ร้านโอทาคาระยะ</span>
							</p>
							<div class="shop-detail_button clearfix">
							</div>
						</div>
					</div>
				</section>
			</div>

			<?php get_template_part( 'template-parts/assessment_cta' ); ?>
			<!-- MOD_20240417 -->

			<section class="reason_section">
				<?php get_template_part( 'template-parts/otakaraya_sel' ); ?>
			</section>

			<!-- MOD_20240417 -->
			<h2 class="renew_2024_titlesub follow is-sp">
				<div class="renew_2024_titlesub_topbar">
					<div class="renew_2024_titlesub_topbar_center"></div>
					<div class="renew_2024_titlesub_topbar_left"></div>
					<div class="renew_2024_titlesub_topbar_right"></div>
				</div>
				คำถามที่พบบ่อยเกี่ยวกับการซื้อเพชร
			</h2>
			<section class="renew2024">
				<div class="titleMain titleMain--wrapper is-pc">
					<h2 class="titleMain--main">
						คำถามที่พบบ่อยเกี่ยวกับการซื้อเพชร
					</h2>
					<div class="titleMain--lead">
						<p></p>
					</div>
				</div>
				<div class="qa__wrap js__more--3th">
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">ควรขายเพชรเมื่อไหร่ดี ?</dt>
							<dd class="qa__list__a">
							สำหรับเพชรแล้ว บางครั้งช่วงเวลาที่เหมาะสมในการขายอาจมาถึงอย่างรวดเร็ว ในขณะที่บางครั้งการรอคอยระยะยาวอาจทำให้มูลค่าเพิ่มขึ้นได้
ดังนั้น จึงไม่สามารถระบุได้อย่างชัดเจนว่าช่วงเวลาใดเหมาะสมที่สุด
หากต้องการเก็บรักษาไว้ระยะยาวก่อนที่จะขาย ขอแนะนำให้เก็บรักษาอย่างดีและสะอาดที่สุด โดยใช้วิธีการเก็บรักษาที่เหมาะสม
รวมถึงดูแลและบำรุงรักษาอย่างสม่ำเสมอเพื่อรักษาคุณภาพของสินค้าไว้							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">ถ้าไม่มีใบรับรองจะรับซื้อไหม ?</dt>
							<dd class="qa__list__a">ได้เลย เรารับซื้อได้แน่นอน นักประเมินของเราจะทำการตรวจสอบเพชรตามหลัก 4C (กะรัต, สี, ความสะอาด, การเจียระไน) และเสนอราคาประเมินให้กับคุณ</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">ราคารับซื้อจะเปลี่ยนไปตามดีไซน์หรือไม่ ?</dt>
							<dd class="qa__list__a">ในกรณีการรับซื้ออัญมณี เราจำเป็นต้องจัดระดับของตัวเพชรเอง
							ดังนั้นแม้จะมีดีไซน์ที่ตกยุค โอทาคาระยะก็ยินดีรับซื้อในราคาสูง ขอให้ท่านโปรดวางใจ</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">ราคาประเมินเพชรจะเปลี่ยนแปลงตามรูปทรงหรือไม่?</dt>
							<dd class="qa__list__a">
							ราคาประเมินจะแตกต่างกันไปตามรูปทรงของเพชร โดยทั่วไปแล้ว "เพชรทรงกลม" (Round Brilliant Cut) จะเป็นรูปทรงที่ได้รับการประเมินค่าสูงที่สุด
							นอกจากนี้เกรดของเพชรก็ส่งผลต่อราคาด้วย ดังนั้นจึงอยากแนะนำให้ใช้บริการประเมินราคาฟรีกับทางร้านโอทาคาระยะก่อนการขาย
								</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">ร้านรับซื้ออัญมณีโดยเฉพาะจะให้ราคาที่สูงกว่าหรือไม่?</dt>
							<dd class="qa__list__a">
							ที่โอทาคาระยะ เราไม่ได้รับซื้อเฉพาะเพชร อัญมณี และเครื่องประดับเท่านั้น แต่ยังรับซื้อทองคำ โลหะมีค่า สินค้าแบรนด์เนม และนาฬิกาอีกด้วย
							ทำให้เรามีช่องทางการขายที่หลากหลาย และไม่ต้องกังวลเรื่องการเก็บสต็อกสินค้า จึงสามารถเสนอราคาสูงสุดให้กับลูกค้าได้							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">รับซื้อเมเล่ไดมอนด์ (pavé diamonds) หรือไม่?</dt>
							<dd class="qa__list__a">เราสามารถรับซื้อได้ และเครื่องประดับที่มีเมเล่ไดมอนด์ (pavé diamonds) อาจได้รับราคาประเมินที่สูงขึ้น
							อย่างไรก็ตาม หากเป็นลูสสโตน (เพชรเม็ดเดี่ยว) อาจไม่สามารถรับซื้อได้ในบางกรณี</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">มีเพชรที่ได้รับราคาสูงเป็นพิเศษหรือไม่?</dt>
							<dd class="qa__list__a">
							โดยทั่วไป เพชรที่มีน้ำหนักตั้งแต่ 1 กะรัตขึ้นไป, เพชรที่มีเกรด VS ขึ้นไป, เครื่องประดับเพชรจากแบรนด์ดัง และเพชรสีหายาก มักจะได้รับราคาประเมินที่สูง
							นอกจากเพชรไร้สีแล้ว เพชรสีธรรมชาติ เช่น เพชรสีชมพู, เพชรสีน้ำเงิน และเพชรสีเหลือง ก็มักจะได้ราคาสูงเช่นกัน							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">ควรนำสิ่งใดมาด้วยในช่วงการประเมินราคา ?</dt>

							<dd class="qa__list__a">หากท่านมีใบรับรองการประเมิน โปรดนำมาด้วยในช่วงการประเมินราคา
 เนื่องจากใบรับรองนี้เป็นเอกสารที่ยืนยันมูลค่าของเพชร เช่น เกรด 4C
ทำให้การนำใบรับรองมาพร้อมกับเพชรจะช่วยเพิ่มโอกาสในการได้รับราคาประเมินที่ดีขึ้น</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">สินค้าแบบใดบ้างที่สามารถรับซื้อได้ในราคาสูง?</dt>
							<dd class="qa__list__a">
							ในการรับซื้อเพชร สินค้าที่ยิ่งมีเกรด 4C สูง ก็ยิ่งได้รับราคาที่สูง
อีกทั้ง ไม่เพียงแต่เพชรเม็ดหลักเท่านั้น คุณภาพของเพชรที่ประดับอยู่รอบๆ ก็เป็นปัจจัยสำคัญในการประเมินราคาเช่นกัน
ท่านสามารถติดต่อมาปรึกษากับเราได้ทุกเมื่อ
							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">สามารถขายเพชรที่ซื้อมานานแล้วได้หรือไม่?</dt>
							<dd class="qa__list__a btn--more">
							ได้แน่นอน เรารับซื้อเพชรที่ซื้อมานานแล้ว โดยจะทำการประเมินตามเกณฑ์มาตรฐานปัจจุบัน
							หากมีใบรับรองการประเมิน ราคาประเมินอาจแตกต่างกันขึ้นอยู่กับ สถาบันที่ออกใบรับรองและช่วงเวลาที่ได้รับ</dd>
							<div class="qa__list__button gtm-more-qa"><button>ดูเพิ่มเติม</button></div>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">รับซื้อเพชรที่หลุดออกมาหรือเพชรดิบหรือไม่?
							</dt>
							<dd class="qa__list__a">
							ได้แน่นอน เรารับซื้อทั้งเพชรที่หลุดออกมาและเพชรดิบ</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">ขนาดของอัญมณีมีผลต่อราคาประเมินหรือไม่?</dt>
							<dd class="qa__list__a">
							ใช่ ขนาดของอัญมณีมีผลต่อราคาประเมิน หากเป็นเพชรที่มีเกรดเดียวกัน เม็ดที่มีขนาดใหญ่กว่าจะหายากกว่า และมีโอกาสได้รับราคาประเมินที่สูงขึ้น							</dd>
						</dl>
					</div>
					<div class="qa__list js__more--item3">
						<dl class="qa__list__inner">
							<dt class="qa__list__q">ปัจจัยที่มีผลต่อราคาประเมินเพชรมีอะไรบ้าง?</dt>
							<dd class="qa__list__a">
							ราคาประเมินของเพชรได้รับอิทธิพลจากปัจจัยหลัก ได้แก่ คุณภาพของเพชรตามหลัก 4C และขนาดของเพชร							</dd>
						</dl>
					</div>
				</div>
				<div class="btn__wrap btn__more js__more--btn3 gtm-more-qa">
					<span>ดูเพิ่มเติม</span>
				</div>
			</section>

			<?php get_template_part( 'template-parts/assessment_cta' ); ?>
		</article>
		<?php get_template_part( 'template-parts/side-menu' ); ?>
	</main>


	<script src="../js/jquery-3.6.3.min.js"></script>
	<script src="../js/renew202404_2.js"></script>
	<script src="../js/common_daiya.js"></script>
	<script src="../js/slick.min.js"></script>
	<script src="../js/shared.js"></script>
	<script src="../js/breadlist.js"></script>


	<?php get_footer( 'common' ); ?>


	<script>
		var carat_page = "";
		var carat_label = ["01ct", "02ct", "03ct", "04ct", "05ct", "06ct", "07ct", "08ct", "09ct", "1ct", "2ct", "3ct", "4ct", "5ct", "6ct", "7ct", "8ct", "9ct", "10ct"];

		// ページ表示時の選択されたタブの位置を中央に配置
		if (carat_page === '') {
			// caratページでなければ1caratをデフォルトに設定
			var startSlideIndex = 9;
			if (navigator.userAgent.match(/(iPhone|iPod|Android.*Mobile)/i)) {
				// ❶スマホのみに適用
				if ((startSlideIndex - 1) % 3 === 0) {
					startSlideIndex = startSlideIndex - 1;
				}
			} else {
				startSlideIndex = startSlideIndex - 3;
			}
		} else {
			carat_page = carat_page + 'ct';
			if (navigator.userAgent.match(/(iPhone|iPod|Android.*Mobile)/i)) {
				// ❶スマホのみに適用
				var startSlideIndex = Math.min(carat_label.indexOf(carat_page), 20);
				console.log(startSlideIndex);
				if ((startSlideIndex - 1) % 3 === 0) {
					startSlideIndex = startSlideIndex - 1;
				}
			} else {
				// ❷その他PC・タブレットに適用
				var startSlideIndex = Math.min(carat_label.indexOf(carat_page), 16);
				startSlideIndex = startSlideIndex - 3;
			}
		}

		$(function() {
			var slickOptions = {
				slide: '.tabbox',
				infinite: false,
				slidesToShow: 7,
				slidesToScroll: 3,
				responsive: [{
					breakpoint: 782,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
					}
				}, ]
			};
			$('.f_area').slick(slickOptions);
			$('.f_area').slick('slickGoTo', startSlideIndex);

			// caratタブクリック時の処理
			$(".tabbox").click(
				function() {
					if ($(this).hasClass("active") == false) {
						var list_i = $(".tabbox").index(this);
						$(".tabbox").removeClass("active");
						$(".tablelist").removeClass("active").hide();
						$(".tab_selectbox").removeClass("active").hide();
						$(".selectbox-5").removeClass("active").hide();
						$(".tabbox").eq(list_i).addClass("active");
						$(".ct-if").eq(list_i).addClass("active").stop().fadeIn(200);
						$(".tab_selectbox").eq(list_i).addClass("active").stop().fadeIn(200);
						$(".selectbox-5").eq(list_i).addClass("active").stop().fadeIn(200);
					}
					// 現状tablelistが全てのtbodyに設定されているので、caratごとに1つ設定するよう修正
					// 同一caratにはct-01ctなどのクラスが設定されているので、セレクトボックスを選択したときはこのクラスでテーブルを切り替える。
				}
			);

			// クラリティセレクトボックス変化時の処理
			$(".tab_selectbox").change(function() {
				var selectedIndex = $(this).prop('selectedIndex');
				var selectedId = $(this).attr('id');
				$("." + selectedId).removeClass("active").hide();
				$("." + selectedId).eq(selectedIndex).addClass("active").stop().fadeIn(200);
			});
		});
		/* // 為替の計算結果を反映する
		var kawase_price = <?php echo wp_json_encode( $kawase_price ) ?>;
		var priceElements = document.querySelectorAll('.jewelrySoubaBox__table__scroll .table__items .price');
		if (kawase_price.length === priceElements.length) {
			priceElements.forEach(function(priceCell, index) {
				priceCell.textContent = kawase_price[index];
			});
		} else {
			// 要素数12540が正
			console.log('kawase_price' + kawase_price.length);
			console.log('priceElements' + priceElements.length);
			console.log("kawase_priceとpriceElementsの要素数が一致しません");
		} */

		$(document).ready(function() {
			jQuery(document).ready(function($) {
				var $listWrap = $("#tablelistbox"); //鑑定書あり部分のID
				var $priceWrap = $("#pricelistframe"); //価格相場のID
				var $searchWrap = $("#searchbox"); //select部分のID
				var $selects = $searchWrap.find("select");
				var $submit = $("#price-search"); //検索ボタンのID
				var theCls = "the-price"; //使っていない
				var hdnCls = "hidden";
				//searchboxとprice-searchが重要
				//

				//var hdnLoadingCls = "hidden-loading";
				//$listWrap.find("." + hdnLoadingCls).removeClass(hdnLoadingCls);


				var reachScorllIfSp = function() {
					if ($searchWrap.hasClass('sp-searchbox')) {
						var parentScrollTo = $searchWrap.offset().top;
						var currentScroll = $(window).scrollTop();
						if (currentScroll < parentScrollTo) {
							$("html,body").animate({
								scrollTop: parentScrollTo,
							}, {
								duration: 400,
							});
						}
					}
				};

				var reachScroll = function(reach, cell) {
					var timer;
					var itvlNum = 0;
					$(cell).addClass(theCls);
					$priceWrap.stop().animate({
						scrollTop: reach,
					}, {
						duration: 500,
						complete: function() {
							timer = setInterval(function() {
								itvlNum++;
								if (itvlNum >= 5 && $(cell).hasClass(theCls)) {
									clearInterval(timer);
									return;
								}
								$(cell).toggleClass(theCls);
							}, 300);
						}
					});
				};



				//鑑定書をお持ちお持ちの方はこちら
				function updateElementsAndEvents(tab) {
					$('.kantei .' + tab + '.searchbox').attr('id', null);
					$('.kantei .' + tab + ' button').attr('id', null);
					$('.kantei .' + tab + '.price').attr('id', null);


					var otherTab = (tab === 'tab1') ? 'tab2' : 'tab1';
					$('.kantei .' + otherTab + '.searchbox').attr('id', 'searchbox');
					$('.kantei .' + otherTab + ' button').attr('id', 'price-search');
					$('.kantei .' + otherTab + '.price').attr('id', 'price_table_calc');


					var $searchWrap = $("#searchbox");
					var $selects = $searchWrap.find("select");
					var $submit = $("#price-search");

					// Attach event handler to $submit
					//鑑定書をお持ちお持ちの方はこちら
					$submit.on('click', function() {
						$priceWrap.find('td').removeClass(theCls);

						var vals = {};
						var errors = "";
						$.each($selects, function(k, ele) {
							var sidx = $(ele).prop('selectedIndex');

							var name = $(ele).attr("name");
							var $cOpt = $($(ele).find('option').get(sidx));
							var v = ("conditions" === name && $cOpt.length) ? $cOpt.html() : $(ele).val();
							var isEmpty = (0 === sidx && ("--" === v || "" === v));
							if (isEmpty) {
								var label = $(ele).parent().parent().prev('dt').find('label').html();
								errors += label + "を選択してください\n";
							}
							vals[name] = v;

						});

						if (errors) {
							alert(errors);
							return;
						}

						var $reachWrap = {};
						var point = {
							x: {
								s: 'thead th:not(.none)',
								f: function(idx) {
									return ($(this).html() === condition_val) ? idx : null;
								},
							},
							y: {
								s: 'tbody th',
								f: function(idx) {
									return ($(this).html() === color_val) ? idx : null
								},
							},
						};
						var reachAdjust = 8;

						var applyCellReach = true;


						var ct_id = "#ct-" + vals.carat; //変更

						var clarity = vals.clarity;
						var cut = vals.cut;
						var color = vals.color;
						var reach_id = ct_id + "-" + clarity;
						$reachWrap = $(reach_id);

						point.x.s = 'thead th';
						point.x.f = function(idx) {
							return ($(this).hasClass(cut)) ? idx : null;
						};
						point.y.s = 'tbody td[class*="color"]';
						point.y.f = function(idx) {
							return ($(this).html() === color) ? idx : null;
						};

						reachAdjust = 5;

						applyCellReach = false;


						if (!$reachWrap.length) return;

						var $table = $('table');
						var x = $table.find(point.x.s).map(point.x.f).get(0);
						var y = $table.find(point.y.s).map(point.y.f).get(0);
						var cell = $reachWrap.find("tr").eq(y).find("td").eq(x);
						reachScorllIfSp();

						applyCellReach = (y > 0 && applyCellReach) || false;

						var reach = (applyCellReach) ? $(cell).position().top : $reachWrap.position().top;
						reach = reach - $priceWrap.position().top;
						reach = $priceWrap.scrollTop() + reach - reachAdjust;

						// スクロール
						// reachScroll(reach, cell);
						$("#diamond_price_table_display_inner #price_table_calc").html(
							'<span class="value">HK$</span>' + cell.text()
						);

						$("#diamond_price_table_display_2 #price_table_calc").html(
							'<span class="value">HK$</span>' + cell.text()
						);

						daiya_calc = cell.text();
						daiya_calc = daiya_calc.replace(/en/g, '');
						daiya_calc = daiya_calc.replace(/,/g, '');
						daiya_calc = Number(daiya_calc);
						simulation_select_val = $("#simulation_select").val();
						simulation_select_val = simulation_select_val.replace(/,/g, '');
						simulation_select_val = Number(simulation_select_val);
						weight_val = $("#weight").val();
						weight_val = Number(weight_val);
						simulation_select_val = simulation_select_val * weight_val;
						gold_daiya_calc = simulation_select_val + daiya_calc;
						gold_daiya_calc = String(gold_daiya_calc).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
						$("#daiya_gold_calc").html('<span class="value">HK$</span>' + gold_daiya_calc);

					});
				}

				// Initial setup
				updateElementsAndEvents('tab2');

				// Event handlers
				$(".price_table_contents_nav2").on('click', function() {
					updateElementsAndEvents('tab1');
				});

				$(".price_table_contents_nav1").on('click', function() {
					updateElementsAndEvents('tab2');
				});


				// new
				// ページロード時に価格データを取得
				var carat_num = [{
					"value": "0.1",
					"label": "01ct"
				}, {
					"value": "0.2",
					"label": "02ct"
				}, {
					"value": "0.3",
					"label": "03ct"
				}, {
					"value": "0.4",
					"label": "04ct"
				}, {
					"value": "0.5",
					"label": "05ct"
				}, {
					"value": "0.6",
					"label": "06ct"
				}, {
					"value": "0.7",
					"label": "07ct"
				}, {
					"value": "0.8",
					"label": "08ct"
				}, {
					"value": "0.9",
					"label": "09ct"
				}, {
					"value": "1.0",
					"label": "1ct"
				}, {
					"value": "2.0",
					"label": "2ct"
				}, {
					"value": "3.0",
					"label": "3ct"
				}, {
					"value": "4.0",
					"label": "4ct"
				}, {
					"value": "5.0",
					"label": "5ct"
				}, {
					"value": "6.0",
					"label": "6ct"
				}, {
					"value": "7.0",
					"label": "7ct"
				}, {
					"value": "8.0",
					"label": "8ct"
				}, {
					"value": "9.0",
					"label": "9ct"
				}, {
					"value": "10.0",
					"label": "10ct"
				}];
				var prices = {};
				for (var i = 0; i < carat_num.length; i++) {
					var label = carat_num[i]['label'];
					var id = "#ct-" + label + "-if";
					var price = $(id + " > tr:nth-child(1) > td:nth-child(2)").text();
					prices[label] = price;
				}

				function updatePrice(carat, target) {
					var price = prices[carat];
					if (price) {
						$(target).html(price + '<span class="value">&yen;</span>');
					}
				}

				$("#carat_only_btn1").on('click', function() {
					var carat_only_price_area = $("#carat_only_price_area select").val();
					updatePrice(carat_only_price_area, "#carat_only_price");
				});

				$(document).on('click', '#carat_only_btn2', function() {
					var carat_only_price_area2 = $("#carat_only_price_area2 select").val();
					console.log("Selected carat: ", carat_only_price_area2);
					updatePrice(carat_only_price_area2, "#carat_only_price2");

					var caratPrice = parseInt($("#carat_only_price2").text().replace(/[HK$,]/g, ''), 10);
					var answer2 = parseInt($("#answer2").val().replace(/,/g, ''), 10);
					var goldPriceVal = parseInt($("#simulation_select2").val().replace(/,/g, ''), 10);
					var weight = parseFloat($("#weight2").val().replace(/,/g, ''));

					var goldCalcPrice = goldPriceVal * weight;
					if (isNaN(goldCalcPrice)) {
						goldCalcPrice = 0;
					}
					// var total = caratPrice + answer2 + goldCalcPrice;
					var total = caratPrice + answer2;

					$("#daiya_gold_calc2").html(total.toLocaleString() + '<span class="value">&yen;</span>');
				});


				$(".price_table_contents_nav").on('click', function() {
					$("#price_table_contents1 #price_table_calc").text("0");
					$("#price_table_contents2 #price_table_calc").text("0");
				});

				// タブ処理
				$("a[href='#price_table_contents2']").on('click', function() {
					$(".arrow_bottom_daiya_default").css("display", "block");
					$(".arrow_bottom_gold_default").css("display", "none");
					$(".arrow_bottom_gold").css("display", "block");
					$(".arrow_bottom_daiya").css("display", "none");
					$("#diamond_price_table_display_inner .price_table_calc_area").css("display", "none");
					$(".prompt_text_daiya").css("display", "none");
					$(".prompt_text_gold").css("display", "block");
				});
				$("a[href='#price_table_contents1']").on('click', function() {
					$(".arrow_bottom_daiya_default").css("display", "none");
					$(".arrow_bottom_daiya").css("display", "block");
					$("#diamond_price_table_display_inner .price_table_calc_area").css("display", "flex");
					$(".prompt_text_gold").css("display", "none");
					$(".prompt_text_daiya").css("display", "block");
				});
				let clone1 = $(".calc_area").clone();
				$(".cloned_gold_calc").append(clone1);


			});
			const ua = navigator.userAgent;
			if (ua.indexOf('iPhone') > -1 || (ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1)) {

				// タブ処理
				$("a[href='#price_table_contents2']").on('click', function() {
					$("#tablelistbox h2").css("margin-top", "680px");
					$("a[href='#price_table_contents2'] .arrow_bottom_gold").css("display", "none")
					$("a[href='#price_table_contents2'] .arrow_bottom").css("display", "block")
				});
				$("a[href='#price_table_contents1']").on('click', function() {
					$("#tablelistbox h2").css("margin-top", "160%");
				});

			} else {
				// pc


				jQuery(document).ready(function($) {
					input_width = $(".otkr-plicelist #searchbox p input").width();
					text_width = 130
					arrow_width = 15;
					margin_width = 10;
					arrow_text_width = text_width + arrow_width + margin_width;
					arrow_text_width_calc = input_width - arrow_text_width;
					arrow_text_width_calc = arrow_text_width_calc / 2;
					arrow_text_width_calc = arrow_text_width_calc + 22;
					$(".otkr-plicelist #searchbox p input").css("padding-right", arrow_text_width_calc);
				});


				// タブ処理
				$("a[href='#price_table_contents2']").on('click', function() {
					var windowWidth = $(window).width();

					if (windowWidth >= 1361) {
						$("#tablelistbox > h2").css("margin-top", "650px");
					} else {
						$("#tablelistbox > h2").css("margin-top", "650px");
					}

				});
				$("a[href='#price_table_contents1']").on('click', function() {
					$("#tablelistbox > h2").css("margin-top", "400px");

				});
			}

		});

		function priceset() {
			// 読み込み時にselect二種類追加
			var k18val = jQuery('#k18val').text();
			k18val = k18val.replace(/,/g, '');

			var pt900 = jQuery('#pt900').text();
			var pt850 = jQuery('#pt850').text();
			//pt900 = pt900.replace(/,/g, '');
			//pt850 = pt850.replace(/,/g, '');
			//pt900 = pt900 / 2 + k18val / 2;
			//pt850 = pt850 / 2 + k18val / 2;
			//jQuery('#simulation_select').append(jQuery('<option>').html('Pt900/K18 半々').val(pt900));
			//jQuery('#simulation_select').append(jQuery('<option>').html('Pt850/K18 半々').val(pt850));
		}
		window.onload = priceset;
		document.addEventListener('DOMContentLoaded', function() {

			function multi(selectId, weightId, answerId, answerCpId) {
				var text = jQuery('#' + selectId + ' option:selected').val();
				if (text === undefined) {
					console.error('No selected option found for #' + selectId);
					return;
				}
				var removed = text.replace(/,/g, '');
				var num = parseInt(removed, 10);
				var weight = jQuery("#" + weightId).val();
				if (num) {
					if (weight) {
						var _up = 0;

						var answer_cp = num * weight + _up * weight;
						answer_cp = Math.round(answer_cp);
						answer_cp = answer_cp.toLocaleString();

						jQuery('#' + answerCpId).text(answer_cp);

						var answer = num * weight;
						answer = Math.round(answer);
						answer = answer.toLocaleString();

						jQuery('#' + answerId).val(answer);

					}
				}
			}


			// 謎
			// jQuery(document).on('change', '#simulation_select', function() {
			//     multi('simulation_select', 'weight', 'answer', 'answer_cp');
			// });

			// jQuery(document).on('change', '#weight', function() {
			//     multi('simulation_select', 'weight', 'answer', 'answer_cp');
			// });

			jQuery(document).on('change', '#simulation_select2', function() {
				multi('simulation_select2', 'weight2', 'answer2', 'answer_cp2');
			});

			jQuery(document).on('change', '#weight2', function() {
				multi('simulation_select2', 'weight2', 'answer2', 'answer_cp2');
			});

			jQuery(function() {
				jQuery(document).on('mouseup keyup', '#weight, #weight2', function(e) {
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
		// latest_results_item のクラスを持つ要素の数を取得
		var itemCount = $('.latest_results_item').length;

		console.log(itemCount);

		// 要素の数が10個未満の場合に実行する処理
		if (itemCount < 11) {
			// ここに処理を記述
			console.log('latest_results_item のクラスが10個未満です');

			// 例えば、特定の要素にメッセージを追加する場合
			$('#message').text('There are less than 10 items.');
		}

		// HK$矢印アコーディオン
		const circle_btnSlideDown = function(el) {
			el.style.height = 'auto';
			let h = el.offsetHeight;
			el.style.height = '0px';
			el.offsetHeight;
			if (window.innerWidth <= 767) {
				el.style.transition = 'height 0.3s';
			} else {
				el.style.transition = 'height 0.0s';
			}

			el.style.height = h + 'px';
			el.setAttribute('aria-hidden', 'false');
		};

		circle_btnSlideUp = function(el) {
			let h = el.offsetHeight;
			el.style.height = h + 'px';
			el.offsetHeight;
			if (window.innerWidth <= 767) {
				el.style.transition = 'height 0.3s';
			} else {
				el.style.transition = 'height 0.0s';
			}

			el.style.height = '0px';
			el.setAttribute('aria-hidden', 'true');
		};

		const circle_btnAccordions = document.querySelectorAll('.circle_btn_accordion_include');
		circle_btnAccordions.forEach(function(accordion) {
			const circleAccordionBtns = accordion.querySelectorAll('.circle_btn_accordion');
			circleAccordionBtns.forEach(function(circle_AccordionBtn, index) {
				circle_AccordionBtn.addEventListener('click', function(e) {
					const circle_btn_content = e.currentTarget.nextElementSibling;
					const circle_btn_isActive = e.currentTarget.parentNode.classList.contains('active');

					// SPのみ
					if (window.innerWidth < 767) {
						if (circle_btn_isActive) {
							e.currentTarget.parentNode.classList.remove('active');
							e.currentTarget.setAttribute('circle_btn_accordion_expanded', 'false');
							circle_btnSlideUp(circle_btn_content);
							return;
						}
					}

					// クリックされたアコーディオンが閉じていた場合のみ開く
					if (!circle_btn_isActive) {
						e.currentTarget.parentNode.classList.add('active');
						e.currentTarget.setAttribute('circle_btn_accordion_expanded', 'true');
						circle_btnSlideDown(circle_btn_content);
						console.log("test");
					}

					// スクロール制御のために上位階層のクラス名を変える
					let container = accordion.closest('.circle_btn_accordion_control');
					if (container !== null) {
						if (e.currentTarget.parentNode.classList.contains('active')) {
							container.classList.add('active');
						} else {
							container.classList.remove('active');
						}
					}
				});
			});
		});

		// HK$矢印アコーディオン
		document.addEventListener("DOMContentLoaded", function() {
			const listItems = document.querySelectorAll('.transformation_description_content_ttl');
			const isMobile = window.matchMedia("(max-width: 768px)").matches;

			listItems.forEach((item, index) => {
				let number = index + 1;

				if (isMobile && number < 10) {
					number = "0" + number;
				}

				item.style.position = "relative";
				const span = document.createElement('span');
				span.style.position = "absolute";
				span.style.left = "-1em";
				span.textContent = number;
				item.prepend(span);
			});
		});

		document.addEventListener('DOMContentLoaded', function() {
			const searchInput = document.getElementById('search_brand');
			const searchButton = document.getElementById('search_button');
			const activeTitle = document.getElementById('active_title');
			const brandItems = document.querySelectorAll('.list_katakana_brand_item_wrap');
			const noResults = document.querySelectorAll('.list_katakana_brand_none');

			// ひらがなをカタカナに変換する関数
			function hiraganaToKatakana(str) {
				return str.replace(/[\u3041-\u3096]/g, function(match) {
					return String.fromCharCode(match.charCodeAt(0) + 0x60);
				});
			}

			function performSearch() {
				let searchQuery = searchInput.value.trim().toLowerCase(); // 検索キーワードを小文字に変換

				// 検索が空白の場合は全て非表示にし、何も表示しない
				if (searchQuery === "") {
					brandItems.forEach(item => item.style.display = 'none');
					noResults.forEach(el => el.style.display = 'none');
					activeTitle.textContent = '検索結果：';
					return;
				}

				searchQuery = hiraganaToKatakana(searchQuery); // ひらがなをカタカナに変換

				// 検索結果に基づいてフィルタring
				let hasResults = false;
				brandItems.forEach(item => {
					const brandKana = hiraganaToKatakana(item.querySelector('.list_katakana_brand_kana').textContent); // カタカナ名を取得してひらがなからカタカナに変換

					if (brandKana.includes(searchQuery)) {
						item.style.display = 'block'; // 該当する場合表示
						hasResults = true;
					} else {
						item.style.display = 'none'; // 該当しない場合非表示
					}
				});

				// 検索結果がない場合の表示処理
				if (hasResults) {
					noResults.forEach(el => el.style.display = 'none');
				} else {
					noResults.forEach(el => el.style.display = 'block');
				}

				// 検索キーワードをタイトルに反映
				activeTitle.textContent = searchQuery ? `検索結果：${searchInput.value}` : '検索結果';
			}

			// 検索ボタンクリックイベント
			searchButton.addEventListener('click', performSearch);

			// Enterキーで検索をトリガー
			searchInput.addEventListener('keydown', function(event) {
				if (event.key === 'Enter') {
					event.preventDefault();
					performSearch();
				}
			});
		});
		$(function() {
			// カタカナ行の定義
			const kanaGroups = {
				"ア": ["ア", "イ", "ウ", "エ", "オ"],
				"カ": ["カ", "キ", "ク", "ケ", "コ", "ガ", "ギ", "グ", "ゲ", "ゴ"],
				"サ": ["サ", "シ", "ス", "セ", "ソ", "サ", "ジ", "ズ", "ゼ", "ゾ"],
				"タ": ["タ", "チ", "ツ", "テ", "ト", "ダ", "ヂ", "ヅ", "デ", "ド"],
				"ナ": ["ナ", "ニ", "ヌ", "ネ", "ノ"],
				"ハ": ["ハ", "ヒ", "フ", "ヘ", "ホ", "バ", "ビ", "ブ", "ベ", "ボ"],
				"マ": ["マ", "ミ", "ム", "メ", "モ"],
				"ヤ": ["ヤ", "ユ", "ヨ"],
				"ラ": ["ラ", "リ", "ル", "レ", "ロ"],
				"ワ": ["ワ", "ヲ", "ン"]
			};

			// 初期表示でア行を表示
			showBrandsByGroup("ア");

			// タブクリックイベント
			$("#brand_tabs .list_katakana_brand_tabbox").click(function() {
				const group = $(this).data("group");

				// タブの選択状態を更新
				$("#brand_tabs .list_katakana_brand_tabbox").removeClass("wd_active");
				$(this).addClass("wd_active");

				// タイトルの更新
				// $("#active_title").text(`${group}行`);
				$("#active_title").text(``);

				// 選択されたグループのブランドを表示
				showBrandsByGroup(group);
			});

			// グループに基づいてブランドを表示
			function showBrandsByGroup(group) {
				// 全てのブランドアイテムを非表示
				$(".list_katakana_brand_item_wrap").hide();

				// 該当するグループの文字リストを取得
				const validChars = kanaGroups[group] || [];

				// 有効な文字で始まるブランドを表示
				$(".list_katakana_brand_item_wrap").each(function() {
					const brandGroup = $(this).data("group");
					if (validChars.includes(brandGroup)) {
						$(this).show(); // 一致するブランドを表示
					}
				});

				// ブランドがない場合の表示処理
				if ($(".list_katakana_brand_item_wrap:visible").length === 0) {
					$(".list_katakana_brand_none").show(); // ブランドがない場合のメッセージ
				} else {
					$(".list_katakana_brand_none").hide(); // ブランドがある場合
				}
			}
		});
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


		$(function() {

			window.onload = function() {
				$('.modal-container').css('display', 'block');
			};



			var open = $('.modal-open'),
				close = $('.modal-close'),
				container = $('.modal-container');

			open.on('click', function() {
				container.addClass('active');
				return false;
			});
			close.on('click', function() {
				container.removeClass('active');
			});

			$(document).on('click', function(e) {
				if (!$(e.target).closest('.modal-body').length) {
					container.removeClass('active');
				}
			});
		});


		$('.cm1').on("click", function() {
			$("#player3").removeClass('active');
			$("#player2").addClass('active');
			$(".player3_wrap").removeClass('active');
			$(".player2_wrap").addClass('active');
			$(".video_play2").addClass('play_active');
			$(".video_play3").removeClass('play_active');
			$('#player3').get(0).pause();
		})
		$('.cm2').on("click", function() {
			$("#player2").removeClass('active');
			$(".player3_wrap").addClass('active');
			$(".player2_wrap").removeClass('active');
			$("#player3").addClass('active');
			$(".video_play3").addClass('play_active');
			$(".video_play2").removeClass('play_active');
			$('#player2').get(0).pause();
		})

		$(function() {

			$('.modal-container').on('click', function() {
				setTimeout(function() {
					if ($('.modal-container').hasClass('active')) {

					} else {
						$('#player2').get(0).pause();
						$('#player3').get(0).pause();
					}
				}, 100);
			});


			$('.video_play2').on('click', function() {
				if ($(this).hasClass('playActive')) {
					$('#player2').get(0).pause();
				} else {
					$('#player2').get(0).play();
				}
			});

			$('.video_play3').on('click', function() {
				if ($(this).hasClass('playActive')) {
					$('#player3').get(0).pause();
				} else {
					$('#player3').get(0).play();
				}
			});



			$('#player2').on('playing', function() {
				$('.video_play').addClass('playActive');
			});

			$("#player2").on('pause', function() {
				$('.video_play').removeClass('playActive');
			});

			$('#player3').on('playing', function() {
				$('.video_play').addClass('playActive');
			});

			$("#player3").on('pause', function() {
				$('.video_play').removeClass('playActive');
			});

		});

		document.addEventListener("DOMContentLoaded", function() {
			var lazyVideos = [].slice.call(document.querySelectorAll("video.lazy"));

			if ("IntersectionObserver" in window) {
				var lazyVideoObserver = new IntersectionObserver(function(entries, observer) {
					entries.forEach(function(video) {
						if (video.isIntersecting) {
							for (var source in video.target.children) {
								var videoSource = video.target.children[source];
								if (typeof videoSource.tagName === "string" && videoSource.tagName === "SOURCE") {
									videoSource.src = videoSource.dataset.src;
								}
							}

							video.target.load();
							video.target.classList.remove("lazy");
							lazyVideoObserver.unobserve(video.target);
						}
					});
				});

				lazyVideos.forEach(function(lazyVideo) {
					lazyVideoObserver.observe(lazyVideo);
				});
			}
		});


		document.addEventListener("DOMContentLoaded", function() {

			function addNumberingToItemsInSection(parentSelector, childSelector, position = "relative", offset = 0, positionLeft = "0", text = "", spanClass = "numbering") {
				const parentElements = document.querySelectorAll(parentSelector);

				parentElements.forEach(parent => {
					const listItems = parent.querySelectorAll(childSelector);

					listItems.forEach((item, index) => {
						let number = index + 1 + offset;

						if (number < 10) {
							number = "0" + number;
						}

						item.style.position = "relative";
						const span = document.createElement('span');
						span.style.position = position;
						span.style.left = positionLeft;
						span.textContent = number + text;

						if (spanClass) {
							span.classList.add(spanClass);
						}

						item.prepend(span);
					});
				});
			}

			addNumberingToItemsInSection('.cta_section', '.cta_section_content_ttl', undefined, 0, undefined, '.');
			addNumberingToItemsInSection('.reason_section', '.reason_area_img_wrap', "absolute", 0, undefined, undefined, 'reason_numbering');

		});
	</script>
</body>

</html>