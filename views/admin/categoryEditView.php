
 <center>
<form action="/admin/category/?method=update" method="POST" enctype="multipart/form-data">


	<input type="hidden" name="form[id]" value="<?=$data['category']['id']?>">

	<input type="text" name="form[title]" value="
	<?=$data['category']['title']?>">
   <br/>
   <br/>
	Avatar: <input type="file" name="avatar" ><br/><br/>
	<br/>

	<button type="submit">Змінити</button>
</form>
</center> 