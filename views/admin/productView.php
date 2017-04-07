<div class="create">
<p align="center"><a href="/admin/product?method=create">Створити продукт</a></p> 
</div>

 <center>
 <table style="border-collapse: collapse;"> 
<tr style="border-collapse: collapse;">
<td style="border: solid 1px black; padding: 10px"><b>number</b></td>
<td style="border: solid 1px black; padding: 10px"><b>title</b></td>
<td style="border: solid 1px black; padding: 10px"><b>description</b></td>
<td style="border: solid 1px black; padding: 10px"><b>name catogorie</b></td>
<td style="border: solid 1px black; padding: 10px"><b>price</b></td>

<td style="border: solid 1px black; padding: 10px"><b>edit</b></td>
<td style="border: solid 1px black; padding: 10px"><b>delete</b></td>

</tr>
  
  <?php 
    global $_config, $_page;
    $i=$_page*$_config['items_on_page']; ?>
    <?php
    foreach ($data as $key => $product) {
        $i++;
        ?>
        <tr style="border-collapse: collapse;">
        <td style="border: solid 1px black; padding: 10px">
        <?=$i ?></td>
        <td style="border: solid 1px black; padding: 10px">
        <?=$product['category_name']?>
        </td>
        <td style="border: solid 1px black; padding: 10px">
        <?=$product['title'] ?>
        </td>
        <td style="border: solid 1px black; padding: 10px">
        <?=$product['description'] ?>
        </td>
        <td style="border: solid 1px black; padding: 10px">
        <?=$product['price'] ?>
        </td>
        <td style="border: solid 1px black; padding: 10px">
        <a href="/admin/product?method=edit&id=<?=$product['id']?>">Редагувати</a></td>
        <td style="border: solid 1px black; padding: 10px">
        <a href="/admin/product?method=delete&id=<?=$product['id']?>">Видалити</a></td>
        </tr>
        
        <?php } ?>

</table>  
</center>