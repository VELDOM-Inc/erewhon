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
		<title>送信内容確認画面：応募フォーム｜採用情報｜エレホン・化成工業株式会社</title>
		<meta name="description" content="応募フォームのページです。エレホンは創業以来、コンクリート構造物の補修や性能の向上、耐用年数の延長につながる工法や製品の開発、製造、販売を行っています。">
		<meta name="keywords" content="">
		<meta property="og:title" content="送信内容確認画面：応募フォーム｜採用情報｜エレホン・化成工業株式会社">
		<meta property="og:description" content="応募フォームのページです。エレホンは創業以来、コンクリート構造物の補修や性能の向上、耐用年数の延長につながる工法や製品の開発、製造、販売を行っています。">
		<meta property="og:type" content="article">
		<meta property="og:url" content="https://www.erewhon.co.jp/recruit/form/">
		<meta property="og:image" content="https://www.erewhon.co.jp/common/img/common/og_image.png">
		<meta property="og:image:alt" content="エレホン・化成工業株式会社">
		<!--============================================== html_head -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/erewhon/common/inc/html_head.html'; ?>
		<!--============================================== /html_head -->
	</head>

	<body class="contact-confirm">
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
								
				<!-- .contact-form -->
				<div id="form" class="contact-form">
					<div class="contact-form__inner">
						<div class="box__inner mb60 mb0_sp">
							<p class="txt_center txt_mplus">ご入力内容を確認いただき、よろしければ「入力内容を送信する」ボタンを、<br class="pc_view">修正する場合は「修正する」ボタンをクリックしてください。</p>
						</div>

						<form method="post">
							<div class="contents-inner" id="js-scrollspy">
								<div class="contents-main">
									<table class="table _no-border_ _sp-col1_ mb45 mb0_sp">
										<tbody class="table__body">
											<tr>
												<th class="_black_ text16"><p class="txt_mplus">希望職種</p></th>
												<td><p class="txt_mplus"><?php echo e($form->get('class')); ?></p></td>
											</tr>
											<tr>
												<th class="_black_ text16"><p class="txt_mplus">お名前</p></th>
												<td><p class="txt_mplus"><?php echo e($form->get('name')); ?>（<?php echo e($form->get('kana')); ?>）</p></td>
											</tr>
											<tr>
												<th class="_black_ text16"><p class="txt_mplus">ご住所</p></th>
												<td>
													<p class="txt_mplus"><span class="txt_bold text16">〒</span> <?php echo e($form->get('zip')); ?></p>
													<p class="txt_mplus"><?php echo e($form->get('address')); ?></p>
												</td>
											</tr>
											<tr>
												<th class="_black_ text16"><p class="txt_mplus">メールアドレス</p></th>
												<td><p class="txt_mplus"><?php echo e($form->get('email')); ?></p></td>
											</tr>
											<tr>
												<th class="_black_ text16"><p class="txt_mplus">電話番号</p></th>
												<td><p class="txt_mplus"><?php echo e($form->get('tel')); ?></p></td>
											</tr>
											<tr>
												<th class="_black_ text16"><p class="txt_mplus">希望勤務地</p></th>
												<td><p class="txt_mplus"><?php echo e($form->get('subject', ', ')); ?></p></td>
											</tr>
											<tr>
												<th class="_black_ text16"><p class="txt_mplus">お問い合わせ内容詳細</p></th>
												<td><p class="txt_mplus"><?php echo nl2br(e($form->get('comment'))); ?></p></td>
											</tr>
										</tbody>
									</table>
								</div>

								<!-- .contents-side -->
								<aside class="contents-side _form_">
									<nav class="snav">
										<ul class="snav__list">
											<li class="snav__item">
												<span class="snav__link">
													<span class="__txt txt_mplus">お問い合わせ内容の入力</span>
												</span>
											</li>
											<li class="snav__item">
												<span class="snav__link active">
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

							<div class="al-fc box__inner">
								<button type="button" class="btn-arrow _gray_ _order2_ _w-l_ _cancel_" onclick="window.location='./#form';">
									<span class="__ico icon-txt_link_arrow_left" aria-hidden="true"></span>
									<span class="__txt txt_mplus">修正する</span>
								</button>
								<button type="submit" class="btn-arrow _blue_ _order1_ mb15_sp _w-l_">
									<span class="__txt txt_mplus">入力内容を送信する</span>
									<span class="__ico icon-txt_link_arrow" aria-hidden="true"></span>
								</button>
							</div>
						</form>
					</div>
					
				</div>
			</div>
			<!-- /.contact-form -->

		</div>
		<!-- /.contents -->

		<!--============================================== footer -->
		<?php include($_SERVER['DOCUMENT_ROOT']).'/erewhon/common/inc/footer.html'; ?>
		<!--============================================== /footer -->
	</div>

	<!--============================================== html_foot -->
	<?php include($_SERVER['DOCUMENT_ROOT']).'/erewhon/common/inc/html_foot.html'; ?>
	<!--============================================== /html_foot -->
</body>
</html>