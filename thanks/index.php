<?php
if (empty($_POST)) {
	$url = 'https://taberu.co.jp/';
	header("Location: {$url}");
	exit;
}

mb_language("Japanese");
mb_internal_encoding("UTF-8");
$to      = $_POST['email'];
$from    = 'info@taberu.co.jp';
$subject = '【タベル株式会社】お問い合わせありがとうございました。';
$message = $_POST['personal_name'] . '　様' . "\r\n";
$message .= '' . "\r\n";
$message .= 'この度はタベル株式会社へお問い合わせ頂きまして誠にありがとうございます。' . "\r\n";
$message .= '2営業日以内に担当者より折り返しご連絡をいたします。' . "\r\n";
$message .= 'お急ぎの場合は03-5539-6000までお電話ください。' . "\r\n";
$message .= '' . "\r\n";
$message .= '--お問い合わせ内容--' . "\r\n";
$message .= '氏名：' . $_POST['personal_name'] . "\r\n";
$message .= '' . "\r\n";
if ($_POST['company_name']) {
	$message .= '会社名：' . $_POST['company_name'] . "\r\n";
	$message .= '' . "\r\n";
}
$message .= '電話番号：' . $_POST['tel'] . "\r\n";
$message .= '' . "\r\n";
$message .= 'メールアドレス：' . $_POST['email'] . "\r\n";
$message .= '' . "\r\n";
$message .= 'お問い合わせ内容：' . $_POST['detail'] . "\r\n";
$message .= '' . "\r\n";
$message .= '------------------------------' . "\r\n";
$message .= '' . "\r\n";
$message .= 'タベル株式会社' . "\r\n";
$message .= 'URL：https://taberu.co.jp/' . "\r\n";
$message .= 'TEL：03-5539-6000' . "\r\n";
$message .= 'MAIL:info@taberu.co.jp' . "\r\n";
$message .= '' . "\r\n";
$message .= '------------------------------' . "\r\n";
$message .= '' . "\r\n";
$message .= '当社から送信される電子メールおよび添付ファイルに含まれる情報は、秘密情報および個人情報を含んでいる場
合がございます。当社から送信される電子メールは、送信者の指定する受信者にのみ送信されたものです。送信
者の許可なく本メールをコピー、使用、開示することは、固く禁止させて頂きます。当社から送信された電子メ
ールに心あたりがない場合は、直ちに送信者に連絡の上、本メール及び本メールの添付物を全て破棄してくださ
いますようお願い致します。許可なく本メールおよび本メールの添付物を配布、開示、コピーすること、または
使用することは厳禁であり、法的行為の対象となりうることを通知させていただきます。';
$headers = 'From: ' . $from . "\r\n";
mb_send_mail($to, $subject, $message, $headers);
mb_send_mail($from, $subject, $message, $headers);
?>
<!DOCTYPE html>
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="utf-8">
<meta lang="ja">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>お問い合わせを受け付けました。 - タベル株式会社</title>
<meta name="robots" content="noindex">
<link rel="stylesheet" href="../styles/reset.css">
<link rel="stylesheet" href="../styles/style.css">
</head>

<body class="drawer drawer--top">

	<header id="header">
		<div class="warpper-header l-structure">
			<div class="l-header-logo">
				<a href="#"><img class="m-header-logo" src="../images/taberu-logo.png" alt=""></a>
			</div>
			<ul class="l-header-menu-ul">
				<li class="m-header-menu-li pc-show"><a class="menu-btn" href="#l-mission">ミッション</a></li>
				<li class="m-header-menu-li pc-show"><a class="menu-btn" href="#l-service">サービス</a></li>
				<li class="m-header-menu-li pc-show"><a class="menu-btn" href="#l-company">会社概要</a></li>
				<li class="m-header-menu-li pc-show"><a class="menu-btn" href="#l-recruit">採用情報</a></li>
				<li class="m-header-menu-li"><a class="jumptoform primary-btn" href="#l-contact">お問い合わせ</a></li>
			</ul>
		</div>
	</header>

	<section id="l-contact" class="thanks-page">
		<h1 class="l-title"></h1>
		<p class="m-contact-desc t-18">お問い合わせを受け付けました。<br>ご記入頂いた情報が送信されました。<br>担当者より2営業日以内に返答いたします。<br>お急ぎの場合は03-5539-6000までお電話ください。<br>お問い合わせ頂き、誠にありがとうございました。</p>
		<a class="link-btn primary-btn" href="/">トップページへ戻る</a>
	</section>

	<span><a href="#"><img class="m-jumptotop" src="images/jump-to-top.png" alt=""></a></span>
	<footer><p><small>COPYRIGHT(C)2018 TABERU,INC ALLRIGHTSRESERVED.</small></p></footer>

</body>
</html>
