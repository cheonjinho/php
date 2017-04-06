<h1>This is Product List</h1>

<a href="/index.php/test/new"><input type='button' value="새 제품 생성"></a>

<div>
	<?php echo "총 " . $total_count . "개의 제품이 있습니다."; ?>
</div>

<?php foreach ($list as $item) { ?>
<div style="border: solid 1px gray; margin: 2px; padding: 2px;">
	<span><?php echo $item['title'] ?></span>
	<span><?php echo $item['type_a'] ?></span>
	<span><?php echo $item['type_b'] ?></span>
	<span><?php echo $item['price'] ?></span>
</div>
<?php } ?>

<?php if (0 < $page-1) { ?>
<span>
	<span onclick="foo(<?php echo $page-1; ?>);">prev</span>
</span>
<?php } ?>

<?php for ($i=1; $i<=$max_page; $i++) { ?>
	<?php if ($page == $i) { ?>
		<span style="color: red;">
	<?php } ?>
	<span onclick="foo(<?php echo $i; ?>);"><?php echo $i; ?></span>
	<?php if ($page == $i) { ?>
		</span>
	<?php } ?>
<?php } ?>

<?php if ($page < $max_page) { ?>
<span>
	<span onclick="foo(<?php echo $page+1; ?>);">next</span>
</span>
<?php } ?>