<div class="create">
<p align="center"><a href="/admin/user?method=create">Створити користувача</a></p> 
</div>

  <center>
 <table style="border-collapse: collapse;"> 
<tr style="border-collapse: collapse;">
<td style="border: solid 1px black; padding: 10px"><b>number</b></td>
<td style="border: solid 1px black; padding: 10px"><b>name</b></td>
<td style="border: solid 1px black; padding: 10px"><b>email</b></td>
<td style="border: solid 1px black; padding: 10px"><b>edit</b></td>
<td style="border: solid 1px black; padding: 10px"><b>delete</b></td>

</tr>
  
   <?php 
	global $_config, $_page;
	$i=$_page*$_config['items_on_page']; ?>
	<?php
	
	foreach ($data['user'] as $key => $user) {

		$i++;
		?>

  <tr  style="border-collapse: collapse;">
            <td style="border: solid 1px black; padding: 10px">
                <?= $i ?>
            </td>
            <td style="border: solid 1px black;  padding: 10px">
                <?= $user['name'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?= $user['email'] ?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/user?method=edit&id=<?=$user['id']?>">Редагувати</a>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/user?method=delete&id=<?=$user['id']?>">Видалити</a>
            </td>
        </tr>
    <?php } ?>

</table>  
</center>

<div class="pagination">

    <?php pagination(
        $data['pagination']['pages_count'],
        '/admin/user'
    ); ?>

</div>