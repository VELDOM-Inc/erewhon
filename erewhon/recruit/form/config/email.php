<?php

return array(
	
	array(

		// 顧客向けメールのfrom名前
		'name' => 'エレホン・化成工業株式会社',

		// 送信元メールアドレス
		'from' => 'info@veldom02.xsrv.jp',

		// 送信先メールアドレス
		'to' => '', // input['name="email"'] に送信する場合は空

		// CCメールアドレス
		'cc' => '',

		// BCCメールアドレス
		'bcc' => '',

		// 顧客向けメールの件名
		'subject' => '【エレホン・化成工業株式会社】ご応募ありがとうございます',

		// メール本文テンプレートファイル名
		'template' => 'templates/mail1.php',

		// メールアドレスフィールド
		'field' => 'email', // email 以外の場合に指定

		// ファイルを添付する場合 true 添付しない場合 false
		'attachment' => false
		
	),
	
	array(

		// 管理者向けメールのfrom名前
		'name' => 'エレホン・化成工業株式会社',

		// 送信元メールアドレス
		'from' => 'info@veldom02.xsrv.jp',

		// 送信先メールアドレス
		// class（区分）の選択によって送信先を変更する例
		'to' => 'info@erewwhon.co.jp',

		// CCメールアドレス
		'cc' => '',

		// BCCメールアドレス
		'bcc' => '',

		// 管理者向けメールの件名
		'subject' => '【応募フォーム】HPより応募がありました',

		// メール本文テンプレートファイル名
		'template' => 'templates/mail2.php',

		// ファイルを添付する場合 true 添付しない場合 false
		'attachment' => false,

		// 項目の値によって送信先を変更したい場合に指定
		// この場合、class（区分）の項目によって to が変わる
		// 不要な場合はコメントアウト
		'to_key' => 'class'
	),

);
