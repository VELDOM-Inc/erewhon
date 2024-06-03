<?php

return array (
	array (
		'field' => 'class',
		'label' => '希望職種',
		'rules' => '',
		'options' => array('営業職', '技術職', '製造職', '事務職')
	),
	array (
		'field' => 'name',
		'label' => '姓名',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'kana',
		'label' => 'フリガナ',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'tel',
		'label' => '電話番号',
		'rules' => 'trim|tel'
	),
	array (
		'field' => 'email',
		'label' => 'メールアドレス',
		'rules' => 'trim|required|email'
	),
	array (
		'field' => 'zip',
		'label' => '郵便番号',
		'rules' => 'trim|max_length[7]'
	),
	array (
		'field' => 'address',
		'label' => '住所',
		'rules' => 'trim'
	),
	array (
		'field' => 'subject',
		'label' => '希望勤務地',
		'rules' => '',
		'options' => array('本社', '仙台支店', '関東支店', '名古屋支店', '大阪支店', '福岡支店', '札幌営業所', '新潟営業所', 'いわき営業所', '静岡営業所', '北陸営業所', '広島営業所', '熊本営業所', '鹿児島営業所', '本社工場', 'いわき工場')
	),
	array (
		'field' => 'comment',
		'label' => 'お問い合わせ内容詳細',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'agreement',
		'label' => '個人情報取り扱いについて同意する',
		'rules' => 'required',
		'options' => array('下記の個人情報取り扱いについて同意する')
	),
);
