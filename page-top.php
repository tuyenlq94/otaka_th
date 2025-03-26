<?php
/* Template Name: トップページ */
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php get_template_part( 'head2' ); ?>
	<!-- local css -->
	<link rel="stylesheet" type="text/css" href="css/app.min.css">
	<link rel="stylesheet" type="text/css" href="css/shared.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">

	<script src="js/jquery-3.6.3.min.js"></script>

	<title><?php the_title() ?></title>
	<meta name="description"
		content="買取専門店のおたからや。最短5分で査定、出張費無料です。金・プラチナ・貴金属・ダイヤモンド・ブランド品・時計・バッグ・切手・古銭・着物・鉄道模型など、他社圧倒の高額買取金額で幅広く買取させていただきます。">
	<link rel="canonical" href="https://www.otakaraya.jp/">
	<meta property="og:locale" content="ja_JP">
	<meta property="og:type" content="website">
	<meta property="og:title" content="買取専門店のおたからや - 最短5分で査定、出張費無料">
	<meta property="og:description"
		content="買取専門店のおたからや。最短5分で査定、出張費無料です。金・プラチナ・貴金属・ダイヤモンド・ブランド品・時計・バッグ・切手・古銭・着物・鉄道模型など、他社圧倒の高額買取金額で幅広く買取させていただきます。">
	<meta property="og:url" content="https://www.otakaraya.jp/">
	<meta property="og:site_name" content="金・貴金属ブランド買取のおたからや">

</head>


<?php wp_head(); ?>

<body id="mock_app">

	<?php get_header( 'common' ); ?>



	<div class="fv_img_wrap">
		<img class="is-pc" src="images/index/OTAKARAYA_top_PC_EN.webp" alt="สินค้าราคาสูงที่โอตาคารายะ">
		<img class="is-sp" src="images/index/OTAKARAYA_top_SP_EN.webp" alt="สินค้าราคาสูงที่โอตาคารายะ">
	</div>

	<?php get_template_part( 'template-parts/license' ); ?>
	<?php get_template_part( 'template-parts/shop-info' ); ?>

	<main class="contents">
		<article class="contents__left">
			<section class="products_area handling_products_section">
				<div class="titleMain titleMain--wrapper">
					<h2 class="titleMain--main">
					สินค้าที่โอทาคาระยะรับซื้อ
					</h2>
					<h3 class="titleMain--lead">
						<p>โอทาคาระยะของเรารับซื้อสินค้าหลากหลายประเภท</p>
					</h3>
				</div>

				<div class="products_area_content_wrap products_area_top_content_wrap">
					<a href="/gold/">
						<div class="products_area_top_content_img_wrap">
							<img src="images/index/products_img1@2x.webp" alt="รับซื้อทองคำแท่งและทองคำรูปพรรณ">
						</div>
						<p class="products_area_text">รับซื้อทองคำแท่งและทองคำรูปพรรณ</p>
					</a>
					<a href="/jewelry/">
						<div class="products_area_top_content_img_wrap">
							<img src="images/index/products_img3@2x.webp" alt="รับซื้อเพชรและอัญมณี">
						</div>
						<p class="products_area_text">รับซื้อเพชรและอัญมณี</p>
					</a>
					<a href="/brand/">
						<div class="products_area_top_content_img_wrap">
							<img src="images/index/products_img4@2x.webp" alt="รับซื้อกระเป๋าและสินค้าแบรนด์เนม">
						</div>
						<p class="products_area_text">รับซื้อกระเป๋าและสินค้าแบรนด์เนม</p>
					</a>
					<a href="/watch/">
						<div class="products_area_top_content_img_wrap">
							<img src="images/index/products_img5@2x.webp" alt="รับซื้อนาฬิกา">
						</div>
						<p class="products_area_text">รับซื้อนาฬิกา</p>
					</a>
			</section>
			<!-- おたからやの取り扱い商品 -->

			<!-- おたからやの取扱ブランド -->

			<section class="products_area handling_brand_section">
				<div class="titleMain titleMain--wrapper">
					<h2 class="titleMain--main">
					แบรนด์ที่โอทาคาระยะรับซื้อ
					</h2>
					<h3 class="titleMain--lead">
						<p>โอทาคาระยะรับซื้อสินค้าจากแบรนด์ต่างๆ มากมาย อ่านรายละเอียดแบรนด์ที่รับซื้อได้ที่นี่</p>
					</h3>
				</div>

				<div class="products_area_content_wrap products_area_bottom_content_wrap">
					<a href="/brand-tokei/rolex/">
						<div class="products_area_img_wrap">
							<img src="images/index/handling_brand_img1@4x.webp" alt="ซื้อโรเล็กซ์">
						</div>
						<p class="products_area_text">ซื้อโรเล็กซ์</p>
					</a>
					<a href="/brand-tokei/patekphilippe/">
						<div class="products_area_img_wrap">
							<img src="images/index/handling_brand_img2@4x.webp" alt="รับซื้อปาเต็ก ฟิลิปป์">
						</div>
						<p class="products_area_text">รับซื้อปาเต็ก ฟิลิปป์</p>
					</a>
					<a href="/brand-tokei/audemarspiguet/">
						<div class="products_area_img_wrap">
							<img src="images/index/handling_brand_img3@4x.webp" alt="ซื้อโอเดอมาร์ ปิเกต์">
						</div>
						<p class="products_area_text">ซื้อโอเดอมาร์ ปิเกต์</p>
					</a>
					<a href="/brand-tokei/vacheronconstantin/">
						<div class="products_area_img_wrap">
							<img src="images/index/handling_brand_img4@4x.webp" alt="ซื้อ วาเชอรอน คอนสแตนติน">
						</div>
						<p class="products_area_text">ซื้อ วาเชอรอน คอนสแตนติน</p>
					</a>
					<a href="/brand-tokei/lange-soehne/">
						<div class="products_area_img_wrap">
							<img src="images/index/handling_brand_img5@4x.webp" alt="การซื้อ Lange & Söhne">
						</div>
						<p class="products_area_text">การซื้อ Lange & Söhne</p>
					</a>
					<a href="/brand-tokei/omega/">
						<div class="products_area_img_wrap">
							<img src="images/index/handling_brand_img6@4x.webp" alt="รับซื้อโอเมก้า">
						</div>
						<p class="products_area_text">รับซื้อโอเมก้า</p>
					</a>
					<a href="/brand-tokei/iwc/">
						<div class="products_area_img_wrap">
							<img src="images/index/handling_brand_img7@4x.webp" alt="การจัดซื้อไอดับเบิลยูซี">
						</div>
						<p class="products_area_text">การจัดซื้อไอดับเบิลยูซี</p>
					</a>
					<a href="/brand/cartier/">
						<div class="products_area_img_wrap">
							<img src="images/index/handling_brand_img8@4x.webp" alt="คาร์เทียร์ซื้อ">
						</div>
						<p class="products_area_text">คาร์เทียร์ซื้อ</p>
					</a>
					<a href="/brand/louis-vuitton/">
						<div class="products_area_img_wrap">
							<img src="images/index/handling_brand_img9@4x.webp" alt=" รับซื้อ Louis Vuitton">
						</div>
						<p class="products_area_text"> รับซื้อ Louis Vuitton</p>
					</a>
					<a href="/brand/hermes/">
						<div class="products_area_img_wrap">
							<img src="images/index/handling_brand_img10@4x.webp" alt="รับซื้อ Hermès">
						</div>
						<p class="products_area_text">รับซื้อ Hermès</p>
					</a>
					<a href="/brand/chanel/">
						<div class="products_area_img_wrap">
							<img src="images/index/handling_brand_img11@4x.webp" alt="รับซื้อ Chanel">
						</div>
						<p class="products_area_text">รับซื้อ Chanel</p>
					</a>
					<a href="/brand/dior/">
						<div class="products_area_img_wrap">
							<img src="images/index/handling_brand_img12@4x.webp" alt="Christian Dior Purchase">
						</div>
						<p class="products_area_text">Christian Dior Purchase</p>
					</a>
					<a href="/brand/celine/">
						<div class="products_area_img_wrap">
							<img src="images/index/handling_brand_img13@4x.webp" alt="Celine Purchase">
						</div>
						<p class="products_area_text">Celine Purchase</p>
					</a>
					<a href="/brand/fendi/">
						<div class="products_area_img_wrap">
							<img src="images/index/handling_brand_img14@4x.webp" alt="Fendi Purchase">
						</div>
						<p class="products_area_text">Fendi Purchase</p>
					</a>
					<a href="/brand/gucci/">
						<div class="products_area_img_wrap">
							<img src="images/index/handling_brand_img15@4x.webp" alt="รับซื้อ Gucci">
						</div>
						<p class="products_area_text">รับซื้อ Gucci</p>
					</a>
				</div>
			</section>
			<!-- おたからやの取り扱いブランド -->

			<!-- ctaセクション -->
			<div class="cta_band_img_area">
				<img class="is-pc" style="width: 100%;" src="images/index/Now_is_the_time_to_sell_if_you're_unsure_PC.webp" alt="ตอนนี้เป็นเวลาที่จะขาย">
				<img class="is-sp" style="width: 100%;" src="images/index/Now_is_the_time_to_sell_if_you're_unsure_SP.webp" alt="ตอนนี้เป็นเวลาที่จะขาย">
			</div>
			<!-- ctaセクション -->

			<!--     ▼▼▼おたからやが選ばれる理由▼▼▼     -->
			<section class="reason_section">
				<?php get_template_part( 'template-parts/otakaraya_sel' ); ?>
			</section>
			<!--     ▲▲▲おたからやが選ばれる理由▲▲▲     -->

			<!-- ctaセクション -->
			<div class="cta_band_img_area">
				<img class="is-pc" style="width: 100%;" src="images/index/Now_is_the_time_to_sell_if_you're_unsure_PC.webp" alt="ตอนนี้เป็นเวลาที่จะขาย">
				<img class="is-sp" style="width: 100%;" src="images/index/Now_is_the_time_to_sell_if_you're_unsure_SP.webp" alt="ตอนนี้เป็นเวลาที่จะขาย">
			</div>
			<!-- ctaセクション -->

			<!--     ▼▼▼ 地域・社会活動への取り組み ▼▼▼     -->
			<section class="csr_section">
				<div class="titleMain titleMain--wrapper">
					<h2 class="titleMain--main">
						กิจกรรมที่ทำร่วมกับชุมชนและสังคม					</h2>
				</div>
				<div class="csr_section_content">
					<img class="is-pc head_img" src="images/index/E-fran_Children's_Cafeteria_PC.webp">
					<img class="is-sp head_img" src="images/index/2024_おたからやトップ_英語版1129.webp">

					<div class="dining_room_area">
						<div class="dining_room_area_ttl">
							<p>สนับสนุนอาหารผ่านโรงอาหารเด็กอีฟราน</p>
						</div>
						<div class="dining_room_area_read">
							<p>โรงอาหารเด็กอีฟรานนั้นจะทำการแจกจ่ายอาหารและข้าวกล่องที่มีประโยชน์ให้กับเด็กๆ ในประเทศญี่ปุ่นสัปดาห์ละ 2 ครั้ง (กว่า 150 มื้อในทุกสัปดาห์)
 รวมถึงแจกจ่ายให้เด็กๆ ในประเทศฟิลิปปินส์สัปดาห์ละ 1 ครั้ง (100 มื้อ)</p>
						</div>

						<div class="dining_room_img_area">
							<div class="dining_room_img_area_wrap dining_room_img_area_wrap1">
								<img src="images/index/top_page_link_menu4.webp" alt="กิจกรรมการแจกจ่ายอาหารในฟิลิปปินส์">
								<p class="dining_room_img_area_ttl">กิจกรรมการแจกจ่ายอาหารในฟิลิปปินส์</p>
								<p class="dining_room_img_area_text">
								ในฟิลิปปินส์ เด็กส่วนใหญ่ที่เกิดในครอบครัวยากจน จะต้องอยู่อย่างยากจนแบบนั้นไปตลอดชีวิตอย่างเลี่ยงไม่ได้.
								เด็กๆ จะถูกฝากไว้กับสถานรับเลี้ยงเด็กกำพร้า หรืออาจต้องกลายเป็นเด็กเร่ร่อน
 เพื่อช่วยครอบครัวหาเลี้ยงชีพไปวันๆ ขึ้นอยู่กับสถานการณ์ของแต่ละครอบครัว
 เราแจกจ่ายอาหารโฮมเมดที่มีประโยชน์ต่อทั้งร่างกายและจิตใจให้กับเหล่าเด็กยากจนราว 100 คน
 ที่อาศัยอยู่ในเกาะเซบู ประเทศฟิลิปปินส์ สัปดาห์ละ 1 ครั้ง
								</p>
							</div>
							<div class="dining_room_img_area_wrap dining_room_img_area_wrap2">
								<img src="images/index/top_page_link_menu5.webp" alt="กิจกรรมการแจกจ่ายอาหารในญี่ปุ่น">
								<p class="dining_room_img_area_ttl">กิจกรรมการแจกจ่ายอาหารในญี่ปุ่น</p>
								<p class="dining_room_img_area_text">เราแจกจ่ายอาหารที่มีประโยชน์ให้กับเด็กๆ โดยมีพื้นที่หลัก 5 แห่งในเมืองโยโกฮาม่า จังหวัดคานากาวะ
 เช่น "โรงอาหารบาคาอุมะ ย่านการค้าโยโกฮามาบาชิโดริ", "พื้นที่รังสรรค์ชีวิต นิชิ (Guts Beat Nishi)",
 "วัดโซโตะเซน อาโอกิยามะ ฮงคาคุจิ", "เดย์เซอร์วิสหลังเลิกเรียน / ฟุเรย์ไอพลาซ่า"
 และ "ดาคาชิยะ ร้านคาเฟ่ท้องถิ่นของเด็กๆ" รวมทั้งสิ้น 8 ครั้งต่อเดือน</p>
							</div>
							<div class="dining_room_img_area_wrap dining_room_img_area_wrap3">
								<img src="images/index/top_page_link_menu2.webp" alt="กิจกรรมการช่วยเหลือในกรณีฉุกเฉิน">
								<p class="dining_room_img_area_ttl">กิจกรรมการช่วยเหลือในกรณีฉุกเฉิน</p>
								<p class="dining_room_img_area_text">พายุไต้ฝุ่นที่เกิดขึ้นในปีพ.ศ.2564
 และเหตุเพลิงไหม้ครั้งใหญ่ในปี พ.ศ. 2566
 ทำให้ฟิลิปปินส์เกิดความเสียหายอย่างมาก
 ในขณะที่ผู้คนจำนวนมากตกทุกข์ได้ยาก
 เราได้ดำเนินการแจกจ่ายอาหารที่รวบรวมได้ในขณะนั้นให้กับเหล่าผู้ประสบภัย
 ปัญหาในขณะนั้นคือสิ่งของที่จำเป็นในการดำรงชีพ
 มีไม่เพียงพอสำหรับทุกคน
 ทางอีฟรานจึงได้ช่วยเหลืออย่างสุดความสามารถ
 เพื่อส่งมอบสิ่งของที่จำเป็นในการดำรงชีพให้ได้มากที่สุด</p>
							</div>
							<div class="dining_room_img_area_wrap dining_room_img_area_wrap4">
								<img src="images/index/top_page_link_menu3.webp" alt="กิจกรรมการกุศลในชุมชน">
								<p class="dining_room_img_area_ttl">กิจกรรมการกุศลในชุมชน</p>
								<p class="dining_room_img_area_text">กิจกรรมการกุศลในชุมชนที่เริ่มต้นตามคำร้องขอของ
								คณะกรรมการสวัสดิการสังคมและเยาวชนเขตนิชิ
								เราเห็นโอกาสที่จะทำให้ผู้คนจำนวนมากรู้จัก "โรงอาหารเด็กอีฟราน" มากขึ้น
 จึงได้มีปฏิสัมพันธ์กับผู้คนในชุมชน เพื่อทำให้บริษัท อีฟราน จำกัดได้มีโอกาส
 ช่วยเหลือชุมชนมากขึ้นแม้เพียงสักเล็กน้อยก็ยังดี
 เรามุ่งมั่นจะเป็นบริษัทที่มีรากฐานร่วมกับชุมชน
 และอยากอุทิศตนเพื่อให้ผู้คนในชุมชนมีชีวิตอยู่อย่างอุดมสมบูรณ์</p>
							</div>
						</div>

						<div class="btn__wrap btn__red">
							<a href="https://e-fran.jp/contributions/ef-cafe.php">คลิกที่นี่เพื่อดูรายละเอียด</a>
						</div>
					</div>
				</div>
				<div class="colBox">
					<div class="col">
						<a href="https://e-fran.jp/contributions/animal.php" class="img__link">
							<div class="img">
								<img src="images/index/Official_Supporter_of_AniDone.webp" alt="การบริจาคให้กับองค์กรสวัสดิภาพสัตว์">
							</div>
							<p class="csr_section_ttl">การบริจาคให้กับองค์กรสวัสดิภาพสัตว์</p>
							<p class="csr_section_text">เราได้นำกำไรบางส่วนบริจาคให้กับ "สมาคมเพื่อสาธารณประโยชน์ แอนิมอลโดเนชั่น"
 เพื่อช่วยเหลือสังคมในด้านสวัสดิภาพสัตว์</p>
						</a>
					</div>
					<div class="col">
						<a href="https://e-fran.jp/contributions/backpack.php" class="img__link">
							<div class="img" style="border: 1px solid #eac588;">
								<img src="images/index/Memories_of_Schoolbags_Gift_Program.webp" alt="สนับสนุนการเชื่อมั่นในตนเอง
 ผ่านกิจกรรมโครงการของขวัญกระเป๋านักเรียนแห่งความทรงจำ">
							</div>
							<p class="csr_section_ttl">สนับสนุนการเชื่อมั่นในตนเอง
 ผ่านกิจกรรมโครงการของขวัญกระเป๋านักเรียนแห่งความทรงจำ</p>
							<p class="csr_section_text">บริษัท อีฟราน จำกัดมีส่วนช่วยเหลือสังคมโดยการนำกระเป๋านักเรียนที่ไม่ใช้แล้ว ไปบริจาคให้กับเด็กๆ ในอัฟกานิสถาน</p>
						</a>
					</div>
					<div class="col">
						<a href="https://e-fran.jp/contributions/food_drive.php" class="img__link">
							<div class="img">
								<img src="images/index/Food_Drive_Drop-off_Box.webp" alt="งานติดตั้งกล่องเคาน์เตอร์ฟู้ดไดรฟ์">
							</div>
							<p class="csr_section_ttl">งานติดตั้งกล่องเคาน์เตอร์ฟู้ดไดรฟ์</p>
							<p class="csr_section_text">บริษัท อิฟราน จำกัด ได้จัดตั้งเคาน์เตอร์จำหน่ายอาหารแบบไดรฟ์ภายในบริษัท ซึ่งเป็นส่วนหนึ่งของโครงการริเริ่ม SDGs ที่มุ่งแก้ไขปัญหาสังคม เช่น การลดการสูญเสียอาหาร</p>
						</a>
					</div>
				</div>
			</section>
			<!--     ▲▲▲ 地域・社会活動への取り組み ▲▲▲     -->
		</article>
	</main>

	<?php get_footer( 'common' ); ?>

	<script src="js/common.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/shared.js"></script>
	<script src="js/breadlist.js"></script>
	<script type="text/javascript" src="js/index_1.js" id="swv-js"></script>
	<script>
		document.querySelectorAll('.accordion-toggle').forEach(function(button) {
			button.addEventListener('click', function() {
				this.parentElement.classList.add('active');
				this.classList.add('hide');
			});
		});
		/*メインビジュアルユニット1*/
		$("#slide01").slick({
			asNavFor: "#thumbs01",
			prevArrow: '<img src="/app/wp-content/themes/otakaraya/assets/img/common/slide_prev_white01.png" class="slide-arrow prev-arrow">',
			nextArrow: '<img src="/app/wp-content/themes/otakaraya/assets/img/common/slide_next_white01.png" class="slide-arrow next-arrow">',
			autoplay: true,
			autoplaySpeed: 5000,
			responsive: [{
				breakpoint: 768, // 399px以下のサイズに適用
				settings: {
					arrows: false,
				},
			}, ],
		})
		$("#thumbs01").slick({
			//ここにオプション
			asNavFor: "#slide01",
			slidesToShow: 4,
		});
		$("#thumbs01 .slick-slide").on("click", function() {
			let index = $(this).attr("data-slick-index")
			$("#slide01").slick("slickGoTo", index)
		})
		/* parts-flex */

		/* スライダー(PC,SP両方) */
		let sliders = ["flex-slider1", "flex-slider2", "flex-slider3", "flex-slider4", "flex-slider5"];
		sliders.forEach((slider) => {
			let elem = document.getElementById(slider);
			var slideCount = $(elem).children('.content__item').length;
			let slidesToShow = Math.min(slideCount, 4);
			if (slideCount < 5) {
				if (elem) {
					$(elem).slick({
						arrows: true, // 矢印あり
						dots: true, // ドットあり
						appendArrows: $("." + slider + '--arrow'),
						appendDots: $("." + slider + '--dot'),
						centerMode: false,
						responsive: [{
							breakpoint: 9999,
							settings: {
								slidesToShow: slidesToShow,
								slidesToScroll: slidesToShow,
								variableWidth: true,
							}
						}, {
							breakpoint: 768,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1,
								centerMode: true,
								variableWidth: true,
							}
						}]
					});
				}
			} else {
				if (elem) {
					$(elem).slick({
						arrows: true, // 矢印あり
						dots: true, // ドットあり
						appendArrows: $("." + slider + '--arrow'),
						appendDots: $("." + slider + '--dot'),
						autoplay: true,
						autoplaySpeed: 5000,
						centerMode: false,
						responsive: [{
							breakpoint: 9999,
							settings: {
								slidesToShow: 4,
								slidesToScroll: 4,
								variableWidth: true,
							}
						}, {
							breakpoint: 768,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1,
								centerMode: true,
								variableWidth: true,
							}
						}]
					});
				}
			}
		});

		/* スライダー(SPのみ) */
		function checkBreakPoint() {
			let slidersScOnly = ["numbox-slider-sp1", "flex-slider-sp1", "flex-slider-sp2"];
			let windowW = document.body.clientWidth;

			slidersScOnly.forEach((slider) => {
				let elem = document.getElementById(slider);
				if (elem) {
					if (windowW <= 767) {
						if (!elem.classList.contains("slick-initialized")) {
							$(elem).not('.slick-initialized').slick({
								arrows: true, // 矢印あり
								dots: true, // ドットあり
								appendArrows: $("." + slider + '--arrow'),
								appendDots: $("." + slider + '--dot'),
								autoplay: true,
								autoplaySpeed: 5000,
								slidesToShow: 1,
								slidesToScroll: 1,
								centerMode: true,
								variableWidth: true,
							})
						}
					} else {
						if (elem.classList.contains("slick-initialized")) {
							$(elem).slick('unslick');
						}
					}
				}
			});
		}

		jQuery(window).on('resize load', function() {
			checkBreakPoint();
		});

		checkBreakPoint();

		function checkBreakPoint2() {
			let slidersScOnly = ["columnbox01"];
			let windowW = document.body.clientWidth;

			slidersScOnly.forEach((slider) => {
				let elem = document.getElementById(slider);
				if (elem) {
					if (windowW <= 767) {
						if (!elem.classList.contains("slick-initialized")) {
							$(elem).not('.slick-initialized').slick({
								arrows: true, // 矢印あり
								dots: true, // ドットあり
								appendArrows: $("." + slider + '--arrow'),
								appendDots: $("." + slider + '--dot'),
								autoplay: true,
								autoplaySpeed: 5000,
								// speed: 1000,
								slidesToShow: 1,
								slidesToScroll: 1,
								centerMode: true,
								variableWidth: true,
							})
						}
					} else {
						if (elem.classList.contains("slick-initialized")) {
							$(elem).slick('unslick');
						}
					}
				}
			});
		}

		jQuery(window).on('resize load', function() {
			checkBreakPoint2();
		});

		checkBreakPoint2();

		// ドキュメントが準備完了時に以下のコードを実行
		$(function() {
			// HTML内のクラスが'dateString'である要素の内容を取得し、変数gold_Containerに格納
			var gold_Container = $('.gold_Container').html();

			// クラスが'gold_Container2'である要素に変数gold_Containerの内容を挿入
			$('.gold_Container2').html(gold_Container);
		});

		function checkBreakPoint2() {
			let slidersScOnly = ["columnbox_slid"];
			let windowW = document.body.clientWidth;

			slidersScOnly.forEach((slider) => {
				let elem = document.getElementById(slider);
				if (elem) {
					if (windowW <= 1024) {
						if (!elem.classList.contains("slick-initialized")) {
							$(elem).not('.slick-initialized').slick({
								arrows: false,
								dots: true,
								appendArrows: $("." + slider + '--arrow'),
								appendDots: $("." + slider + '--dot'),
								autoplay: true,
								autoplaySpeed: 5000,
								slidesToShow: 1,
								slidesToScroll: 1,
								centerMode: true,
								variableWidth: true,
							})
						}
					} else {
						if (elem.classList.contains("slick-initialized")) {
							$(elem).slick('unslick');
						}
					}
				}
			});
		}

		jQuery(window).on('resize load', function() {
			checkBreakPoint2();
		});

		checkBreakPoint2();
	</script>
</body>

</html>