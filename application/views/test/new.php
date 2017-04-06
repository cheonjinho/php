<h2>새 제품 만들기</h2>

<form id="new_user" action="/index.php/test/new" accept-charset="UTF-8" method="post">

	<input name="utf8" type="hidden" value="✓">
	  <div class="form-inputs">
	    <label>이름</label>
	    <input autofocus="autofocus" type="text" value="" name="product[title]" id="title">
	  </div>
	  <br>
	  <div class="form-inputs">
	    <label>설명</label>
	    <input autofocus="autofocus" type="text" value="" name="product[description]" id="description">
	  </div>
	  <br>
	  <div class="form-inputs">
	    <label>카테고리1</label>
	    <input autofocus="autofocus" type="text" value="" name="product[type_a]" id="type_a">
	  </div>
	  <br>
	  <div class="form-inputs">
	    <label>카테고리2</label>
	    <input autofocus="autofocus" type="text" value="" name="product[type_b]" id="type_b">
	  </div>
	  <br>
	  <div class="form-inputs">
	    <label>가격</label>
	    <input autofocus="autofocus" type="text" value="" name="product[price]" id="price">
	  </div>
	  <br>
	  <div class="form-actions">
	    <input type="submit" value="완료" data-disable-with="완료">
	  </div>
</form>