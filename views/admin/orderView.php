<div class="create">
<p align="center"><a href="/admin/order?method=create">Створити замовлення</a></p> 
</div>



<center>
 <table style="border-collapse: collapse;"> 
<tr style="border-collapse: collapse;">
<td style="border: solid 1px black; padding: 10px"><b>number</b></td>
<td style="border: solid 1px black; padding: 10px"><b>user_id</b></td>
<td style="border: solid 1px black; padding: 10px"><b>user_name</b></td>
<td style="border: solid 1px black; padding: 10px"><b>product_id</b></td>
<td style="border: solid 1px black; padding: 10px"><b>product_name</b></td>
<td style="border: solid 1px black; padding: 10px"><b>status</b></td>
<td style="border: solid 1px black; padding: 10px"><b>total_price</b></td>
<td style="border: solid 1px black; padding: 10px"><b>name</b></td>
<td style="border: solid 1px black; padding: 10px"><b>surname</b></td>
<td style="border: solid 1px black; padding: 10px"><b>adress</b></td>
<td style="border: solid 1px black; padding: 10px"><b>telefone</b></td>
<td style="border: solid 1px black; padding: 10px"><b>edit</b></td>
<td style="border: solid 1px black; padding: 10px"><b>delete</b></td>

</tr>

  
    <?php 
     $k=0;
     foreach( $data as $key=> $order) { ?>
    
      <?php $k++; ?> 

  <tr  style="border-collapse: collapse;">
            <td style="border: solid 1px black; padding: 10px">
                <?= $k ?>
            </td>
            <td style="border: solid 1px black;  padding: 10px">
                <?= $order['user_id'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
          <?=$order['user_name'] ?>
        </td>
            <td style="border: solid 1px black; padding: 10px">
                <?= $order['product_id'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
          <?=$order['product_titles'] ?>
        </td>
              <td style="border: solid 1px black; padding: 10px">
                <?= $order['status'] ?>
            </td>

              <td style="border: solid 1px black; padding: 10px">
                <?= $order['total_price'] ?>
            </td>
               <td style="border: solid 1px black; padding: 10px">
                <?= $order['name'] ?>
            </td>
               <td style="border: solid 1px black; padding: 10px">
                <?= $order['surname'] ?>
            </td>
               <td style="border: solid 1px black; padding: 10px">
                <?= $order['adress'] ?>
            </td>
               <td style="border: solid 1px black; padding: 10px">
                <?= $order['telefone'] ?>
            </td>

            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/order?method=edit&id=<?=$order['id']?>">Редагувати</a>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/order?method=delete&id=<?=$order['id']?>">Видалити</a>
            </td>
        </tr>
    <?php } ?>

</table>  
</center>