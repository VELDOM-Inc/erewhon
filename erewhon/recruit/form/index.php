<?php
require_once("./src/bootstrap.php");
?>
<!doctype html>
<html prefix="og: http://ogp.me/ns#" lang="ja">
	<head>
		<!--============================================== html_head_above -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/erewhon/common/inc/html_head_above.html'; ?>
		<!--============================================== /html_head_above -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title>応募フォーム｜採用情報｜エレホン・化成工業株式会社</title>
		<meta name="description" content="応募フォームのページです。エレホンは創業以来、コンクリート構造物の補修や性能の向上、耐用年数の延長につながる工法や製品の開発、製造、販売を行っています。">
		<meta name="keywords" content="">
		<meta property="og:title" content="応募フォーム｜採用情報｜エレホン・化成工業株式会社">
		<meta property="og:description" content="応募フォームのページです。エレホンは創業以来、コンクリート構造物の補修や性能の向上、耐用年数の延長につながる工法や製品の開発、製造、販売を行っています。">
		<meta property="og:type" content="article">
		<meta property="og:url" content="https://www.erewhon.co.jp/recruit/form/">
		<meta property="og:image" content="https://www.erewhon.co.jp/common/img/common/og_image.png">
		<meta property="og:image:alt" content="エレホン・化成工業株式会社">
		<!--============================================== html_head -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/erewhon/common/inc/html_head.html'; ?>
		<!--============================================== /html_head -->
	</head>

	<body>
		<!--============================================== body_head -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/erewhon/common/inc/body_head.html'; ?>
		<!--============================================== /body_head -->

		<div class="wrapper">
			<!--============================================== header -->
			<?php include($_SERVER['DOCUMENT_ROOT']).'/erewhon/common/inc/header.html'; ?>
			<!--============================================== /header -->
			
			<div class="contents _form_">
			
				<div class="h1 _form_">
					<div class="h1__inner">
						<h1 class="h1__ttl">
							<span class="__jp">応募フォーム</span>
						</h1>
					</div>
				</div>
				
				<form method="post" enctype="multipart/form-data" autocomplete="off" action="#form" class="h-adr">
					<input type="hidden" class="p-country-name" value="Japan">
					
					<!-- .contact-form -->
					<div id="form" class="contact-form">
						<div class="contact-form__inner">
							<div class="box__inner mb80 mb0_sp">
								<h2 class="h4" data-aos="fade-bottom" data-aos-once="true">会社のこと、<br class="sp_view">採用に関することなど、<br>どうぞお気軽に<br class="sp_view">お問い合わせください。</h2>
								<div data-aos="fade-bottom" data-aos-once="true" data-aos-delay="500">
									<p class="txt_center txt_mplus">3営業日以内にご回答させていただきます。<br>
									フォームでのお問い合わせには、<br class="sp_view">時間を要する場合がございます。<br class="sp_view">お急ぎの方は、<a href="tel:097-552-2251">お電話</a>にてお問い合わせ下さい。</p>
								</div>
							</div>

							<div class="contents-inner" id="js-scrollspy">
								<div class="contents-main" data-aos="fade-bottom" data-aos-once="true" data-aos-delay="800">

									<?php if ($form->is_error()) : ?>
										<div class="box _error_ mb70 mb35_sp">
											<p class="text18 mb10 txt_mplus"><span class="icon-error" aria-hidden="true"></span>入力内容にエラーがあります。</p>
											<div class="txt_mplus"><?php echo $form->errors() ?></div>
										</div>
									<?php endif; ?>

									<table class="table _no-border_ _sp-col1_ mb45">
										<tbody class="table__body">
											<tr>
												<th class="">
													<div class="_flex_ txt_mplus">
														<span class="_black_ text16">希望職種</span>
													</div>
												</th>
												<td class="<?php if ($form->is_error('class')) : ?>error<?php endif; ?>">
													<div class="al-fl txt_mplus">
														<?php foreach($form->get_options('class') as $class) : ?>
														<label class="form-radio mr40 mr0_sp mb10">
															<input type="radio" name="class" value="<?php echo $class ?>" class="__elem" <?php echo $form->checked('class', $class) ?>>
															<span class="__txt"><?php echo $class ?></span>
														</label>
														<?php endforeach; ?>
													</div>
													<?php echo $form->error('class', '<div class="alert txt_mplus">', '</div>'); ?>
												</td>
											</tr>
											<tr>
												<th>
													<div class="_flex_">
														<span class="_black_ text16 txt_mplus">お名前</span>
														<span class="label _red_ txt_mplus">必須</span>
													</div>
												</th>
												<td class="">
													<ul class="contact-form-flex">
														<li class="contact-form-flex__item txt_mplus">
															<span class="__txt">姓名</span>
															<input type="text" name="name" class="form-text _w-m_" value="<?php echo e($form->get('name')); ?>" placeholder="例）山田太郎">
														</li>
														<li class="contact-form-flex__item txt_mplus">
															<span class="__txt">フリガナ</span>
															<input type="text" name="kana" class="form-text _w-m_" value="<?php echo e($form->get('kana')); ?>" placeholder="例）ヤマダタロウ">
														</li>
													</ul>
													<?php echo $form->error('name', '<div class="alert txt_mplus">', '</div>'); ?>
													<?php echo $form->error('kana', '<div class="alert txt_mplus">', '</div>'); ?>
												</td>
											</tr>
											<tr>
												<th class="txt_mplus">
													<div class="_flex_">
														<span class="_black_ text16">ご住所</span>
													</div>
												</th>
												<td class="">
													<ul class="contact-form-flex">
														<li class="contact-form-flex__item txt_mplus">
															<span class="text16 txt_bold __txt">〒</span> 
															<input type="text" name="zip" class="form-text _w-m_ p-postal-code" value="<?php echo e($form->get('zip')); ?>" placeholder="例）0000000">
														</li>
														<li class="contact-form-flex__item txt_mplus">
															<textarea placeholder="例）大分県大分市三川新町1丁目2番23号" name="address" cols="50" rows="4" class="address-text form-textarea form-text p-region p-locality p-street-address p-extended-address"><?php echo e($form->get('address')); ?></textarea>
														</li>
													</ul>
													<?php echo $form->error('zip', '<div class="alert txt_mplus">', '</div>'); ?>
													<?php echo $form->error('address', '<div class="alert txt_mplus">', '</div>'); ?>
												</td>
											</tr>
											<tr>
												<th>
													<div class="_flex_">
														<span class="_black_ text16 txt_mplus">メールアドレス</span>
														<span class="label _red_ txt_mplus">必須</span>
													</div>
												</th>
												<td class="<?php if ($form->is_error('email')) : ?>error<?php endif; ?>">
													<input type="text" name="email" class="form-text txt_mplus" value="<?php echo e($form->get('email')); ?>" placeholder="例）info＠erewhon.jp">
													<?php echo $form->error('email', '<div class="alert txt_mplus">', '</div>'); ?>
												</td>
											</tr>
											<tr>
												<th class="">
													<div class="_flex_ txt_mplus">
														<span class="_black_ text16">電話番号</span>
													</div>
												</th>
												<td class="<?php if ($form->is_error('tel')) : ?>error<?php endif; ?>">
													<input type="text" name="tel" class="form-text txt_mplus" value="<?php echo e($form->get('tel')); ?>" placeholder="例）0000000000">
													<?php echo $form->error('tel', '<div class="alert txt_mplus">', '</div>'); ?>
												</td>
											</tr>
											<tr>
												<th>
													<div class="_flex_ txt_mplus">
														<span class="_black_ text16">希望勤務地<br class="pc_view"><span class="text12 textNormal">（複数選択可）</span></span>
													</div>
												</th>
												<td class="<?php if ($form->is_error('subject')) : ?>error<?php endif; ?>">
													<ul class="contact-form-area">
														<?php foreach($form->get_options('subject') as $subject) : ?>
															<li class="contact-form-area__item">
																<label class="form-check">
																	<input type="checkbox" name="subject[]" value="<?php echo $subject ?>" class="__elem" <?php echo $form->checked('subject', $subject) ?>>
																	<span class="__txt txt_mplus"><?php echo $subject ?></span>
																</label>
															</li>
														<?php endforeach; ?>
													</ul>
													<?php echo $form->error('subject', '<div class="alert txt_mplus">', '</div>'); ?>
												</td>
											</tr>
											<tr>
												<th colspan="2" class="pb0 pb20_sp">
													<div class="_flex_">
														<span class="_black_ text16 txt_mplus">お問い合わせ内容詳細</span>
														<span class="label _red_ txt_mplus">必須</span>
													</div>
												</th>
											</tr>
											<tr>
												<td colspan="2" class="pb0">
													<textarea name="comment" cols="50" rows="4" class="form-textarea txt_mplus"><?php echo e($form->get('comment')); ?></textarea>
													<?php echo $form->error('comment', '<div class="alert txt_mplus">', '</div>'); ?>												
												</td>
											</tr>
										</tbody>
									</table>
									
									<?php foreach($form->get_options('agreement') as $agreement) : ?>
									<label class="form-check txt_mplus">
										<input type="checkbox" name="agreement" id="agreement" class="__elem" value="<?php echo $agreement ?>"<?php echo $form->checked('agreement', $agreement) ?>>
										<span class="__txt txt_bold text14 text15_sp"><?php echo $agreement ?></span>
									</label>			
									<?php endforeach; ?>
									<?php if($form->error('agreement')) : ?><div class="alert txt_mplus">※個人情報取り扱いについてご同意いただけない場合は、ご利用いただけません。</div><?php endif; ?>
									
									<div class="box _outline_ text12 text13_sp mt25 mt20_sp">
										<p class="mb5 txt_mplus">このフォームでお預かりする個人情報の取扱いについて</p>
										<ol class="list-number txt_mplus">
											<li class="list-number__item mb5">事業者の名称 エレホン・化成工業株式会社</li>
											<li class="list-number__item mb5">個人情報の管理 連絡先：<br class="sp_view">TEL.<a href="tel:097-552-2251">097-552-2251</a> <br class="sp_view">FAX.097-552-2213</li>
											<li class="list-number__item mb5">個人情報の利用目的 お問い合わせ対応<br class="sp_view">（本人への連絡を含む）のため</li>
											<li class="list-number__item">
												個人情報の開示等の請求 ご本人様は、当社に対してご自身の個人情報の開示等（利用目的の通知、開示、内容の訂正・追加・削除、利用の停止または 消去、第三者への提供の停止）に関して、下記の当社問合わせ窓口に申し出ることができます。その際、当社はお客様ご本人を確認させていただいたうえで、合理的な期間内に対応いたします。
												<div class="mt30 mb30 mt15_sp mb15_sp">
													<p>【お問い合せ窓口】 <br class="sp_view">〒870-0141 大分県大分市三川新町1丁目2番23号<br>
														エレホン・化成工業株式会社 個人情報お問い合わせ窓口<br>
														<a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#105;&#110;&#102;&#111;&#64;&#101;&#114;&#101;&#119;&#104;&#111;&#110;&#46;&#99;&#111;&#46;&#106;&#112;"><span class="__txt">&#105;&#110;&#102;&#111;&#64;&#101;&#114;&#101;&#119;&#104;&#111;&#110;&#46;&#99;&#111;&#46;&#106;&#112;</span></a><br>
														TEL.<a href="tel:097-552-2251">097-552-2251</a><br class="sp_view">（受付時間 9:00～17:00※）<br>
														※土・日曜日、祝日、年末年始、ゴールデンウィーク期間は翌営業日以降の対応とさせていただきます。</p>
												</div>
											</li>
											<li class="list-number__item">個人情報を提供されることの任意性について ご本人様が当社に個人情報を提供されるかどうかは任意によるものです。ただし、必要な項目をいただけない場合、適切な対応ができない場合があります。</li>
										</ol>
									</div>
								</div>

								<!-- .contents-side -->
								<aside class="contents-side _form_" data-aos="fade-bottom" data-aos-once="true" data-aos-delay="800">
									<nav class="snav">
										<ul class="snav__list">
											<li class="snav__item">
												<span class="snav__link active">
													<span class="__txt txt_mplus">お問い合わせ内容の入力</span>
												</span>
											</li>
											<li class="snav__item">
												<span class="snav__link">
													<span class="__txt txt_mplus">入力内容の確認</span>
												</span>
											</li>
											<li class="snav__item">
												<span class="snav__link">
													<span class="__txt txt_mplus">送信完了</span>
												</span>
											</li>
										</ul>
									</nav>
								</aside>
								<!-- .contents-side -->
							</div>

							<div class="box__inner mt80 mt40_sp" data-aos="fade-bottom" data-aos-once="true">
								<div class="al-fc">
									<button class="btn-arrow _blue_ _w-l_">
										<span class="__txt txt_mplus">確認画面へ</span>
										<span class="__ico icon-txt_link_arrow" aria-hidden="true"></span>
									</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /.contact-form -->
				</form>
				
			</div>
			<!-- /.contents -->
							
			<!--============================================== footer -->
			<?php include($_SERVER['DOCUMENT_ROOT']).'/erewhon/common/inc/footer.html'; ?>
			<!--============================================== /footer -->
		</div>

		<!--============================================== html_foot -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/erewhon/common/inc/html_foot.html'; ?>
		<!--============================================== /html_foot -->
		<!--<script src="/erewhon/common/js/vanillajs-scrollspy.min.js"></script>
    <script>
      const menu = document.querySelector('.snav__list');
      const scrollspy = VanillaScrollspy({ menu, speed: 5000 })
      scrollspy.init();
    </script>-->
		<script src="//yubinbango.github.io/yubinbango/yubinbango.js"></script>
	</body>
</html>