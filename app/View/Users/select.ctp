<div>
<?php if(count($shop_data) > 0) :?>
今日の<?php if($mode == 1) echo '昼食'; else echo '夕食';?>はここだ！<br />
<img src="<?php echo $shop_data['logo_image']?>" />
<table>
	<tr>
		<th nowrap>店名</th>
		<td><?php echo $shop_data['name']?><br />
		⇒<a href="<?php echo $shop_data['url'];?>">店舗サイトへ</a>
		</td>
	</tr>
	<tr>
		<th>住所</th>
		<td><?php echo $shop_data['address']?><br />
		⇒<a href="http://maps.google.co.jp/maps?hl=ja&ie=UTF8&q=<?php echo $shop_data['address'];?>">住所を確認</a>
		</td>
	</tr>
	<tr>
		<th>営業時間</th>
		<td><?php echo $shop_data['open']?></td>
	</tr>
	<tr>
		<th>定休日</th>
		<td><?php echo $shop_data['close']?></td>
	</tr>
	<?php if($shop_data['coupon']):?>
	<tr>
		<th>クーポン</th>
		<td>あり<br />
		⇒<a href="<?php echo $shop_data['coupon_url']?>">クーポンを見る</a></td>
	</tr>
	<?php endif; ?>
</table>
<form action="/users/select" method="post" onSubmit="javascript:locationCheck(<?php echo $mode;?>);"> 
	<input type="submit" value="いや違う、もう一回！" />
</form>
<?php else:?>
ごめんなさい(>_<)GPSがうまく取得できなかったため、お店を表示することが出来ませんでした。もう一度やり直してください。
<?php endif;?>
</div>