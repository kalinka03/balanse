<center>
	

    <form action="/admin/product/?method=insert" method="POST">

        <input type="text" placeholder="Введіть назву продукта" name="insert[title]" value=""><br/>
        <input type="text" placeholder="Характеристика продукта" name="insert[description]" value=""><br/>
        <input type="number" placeholder="Ціна продукта" name="insert[price]" value=""><br/>
        <input type="number" placeholder="id категорії" name="insert[category_id]" value=""><br/>
        <select  style="width:150px" name="form[category_id]" id="">
            
            <?php 

            foreach ($data['category'] as $key => $category){?>
            <option style="width=50px" value="<?=$category['id']?>"><?=$category['title']?></option>
            <?php
        }
        ?>

    </select>
    <br>


    
    <button type="submit">Додати продукт</button>
</form>

</center>