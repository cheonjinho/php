<h2>새 제품 만들기</h2>

<form id="new_user" action="/index.php/test/new" accept-charset="UTF-8" method="post">
	
<input type="hidden" name="utf8" value="v">
	<div class="form-inputs">
		<label>이름</label>
		<input type="text" name="product[title]" id="title" autofocus="autofocus">
	</div>
	<br>
	<div class="form-inputs">
		<label>설명</label>
		<input type="text" name="product[description]" id="description" autofocus="autofocus">
	</div>
	<br>
	<div class="form-inputs">
		<label>타입A</label>
		<input type="text" name="product[type_a]" id="type_a" autofocus="autofocus">
	</div>
	<br>
	<div class="form-inputs">
		<label>타입B</label>
		<input type="text" name="product[type_b]" id="type_b" autofocus="autofocus">
	</div>
	<br>
	<div class="form-inputs">
		<label>가격</label>
		<input type="text" name="product[price]" id="price" autofocus="autofocus">
	</div>
	<br>
	<div class="form-actions">
		<input type="submit" value="완료" data-disable-with="완료">
	</div>

</form>