
<center>
	<form action="/admin/product/?method=update" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="form[id]" value="<?=$data['product']['id']?>">

		<input type="text" name="form[title]" value="<?=$data['product']['title']?>"><br/>
		<input type="text" name="form[description]" value="<?=$data['product']['description']?>"><br/>
		<input type="text" name="form[price]" value="<?=$data['product']['price']?>"><br/>
		<select  style="width:150px" name="form[category_id]" id="">
			
			<?php 

			foreach ($data['category'] as $key => $category){?>
			<option style="width=50px" value="<?=$category['id']?>"><?=$category['title']?></option>
			<?php
		}
		?>

	</select>
	<br>

	Product: <input type="file" name="product" ><br/><br/>
	<button type="submit">Update</button>
</form>
</center> 