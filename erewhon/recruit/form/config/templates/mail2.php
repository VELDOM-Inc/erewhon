下記内容の応募がありました。

<?php if ($__serial) : ?>
[応募番号] <?php echo $__serial ?> 
<?php endif; ?>

[希望職種] <?php echo $class ?> 

[お名前] <?php echo $name ?>（<?php echo $kana ?>） 様

[ご住所] 
〒<?php echo $zip ?> 
<?php echo $address ?> 

[メールアドレス] <?php echo $email ?> 

[電話番号] <?php echo $tel ?> 

[希望勤務地] 
<?php echo implode(', ', $subject) ?> 

[お問い合わせ内容詳細]
<?php echo $comment ?>　　

