<center>
	

<form action="/admin/order/?method=insert" method="POST">

    <input type="text" placeholder="Введіть id_user" name="insert[user_id]" value=""><br/>
    <input type="text" placeholder="Введіть product_id" name="insert[product_id]" value=""><br/>
    <select style='width: 100px;' name="form[status]" id="">
    <option value="open">open</option>
    <option value="in progress">in progress</option>
    <option value="closed">closed</option>
    </select>
    <br>
  
     <input type="number" placeholder="Ціна продукта" name="insert[total_price]" value=""><br/>


 <!--  <select name="form[products]" id="">

        <?php  foreach( $data['products'] as $product) {
            ?> 
 
        <option value="<?=$products['id'] ?>">
            <?=$products['titles'] ?>
        </option>

         <?php } ?>

    </select>  -->
 






      <input type="text" placeholder="Ваше ім'я" name="insert[name]" value=""><br/>
  <input type="text" placeholder="Ваше прізвище" name="insert[surname]" value=""><br/>
    <input type="text" placeholder="Ваша адреса" name="insert[adress]" value=""><br/>
      <input type="number" placeholder="Ваш телефон" name="insert[telefone]" value=""><br/>
<!-- <select name="form[category]" id="">

        <?php foreach( $data['res'] as $category ) { ?>

        <option value="<?=$category['id'] ?>">
            <?=$category['title'] ?>
        </option>

        <?php } ?>

    </select> -->


      
    <button type="submit">Додати замовлення</button>
</form>

</center>