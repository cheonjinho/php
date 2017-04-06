<h1>Php Test</h1>


<a href="/index.php/test/new">
	<input type="button" value="새 제품 생성">
</a>

<div>
	<?php echo "총 " . count($list) . "개의 제품이 있습니다."; ?>
</div>


<?php foreach ($list as $item) { ?>

<div style="border: 1px solid gray; margin: 2px; padding: 2px;">
	<span><?php echo $item['title'] ?></span>
	<span><?php echo $item['description'] ?></span>
	<span><?php echo $item['type_a'] ?></span>
	<span><?php echo $item['type_b'] ?></span>
	<span><?php echo $item['price'] ?></span>
</div>

<?php } ?>