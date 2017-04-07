<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<center>
		<form  method='post' action="/account">
			<h2>  Доброго дня  <?=$_SESSION['user_name']?> </h2>
			<br>

			<h1>ВАШ БАЛАНС: <?=$data['balanse'] ?></h1>


			<h2>ВАШІ РАХУНКИ</h2>	


			<table>				 
				<tr style="border-collapse: collapse;">
					<td align="center" style="border: solid 1px black;  padding: 10px"><b>КІЛЬКІСТЬ</b></td>
					<td align="center" style="border: solid 1px black; padding: 10px"><b>НОМЕР РАХУНКУ</b></td>
					<td align="center" style="border: solid 1px black; padding: 10px"><b>ОПИС РАХУНКУ</b></td>
				</tr>
				<?php 
				$i=0;
				foreach( $data['accounts'] as $key=> $accounts){
					$i++;
		// var_dump($accounts)
					?>
					<tr  style="border-collapse: collapse;">
						<td style="border: solid 1px black; padding: 10px">
							<?= $i ?>
						</td>
						<td style="border: solid 1px black;  padding: 10px">
							<?=$accounts['uniq_id'] ?>
						</td>
						<td style="border: solid 1px black;  padding: 10px">
							<?=$accounts['description'] ?>
						</td>
					</tr>
					<?php }?>
				</table>

			</form>


			<center>
				<div style="border: 1px solid red; width: 700px">
					<p> TRANZACTIONS </p>

					<table style="border-collapse: collapse;"> 
						<tr style="border-collapse: collapse;">
							<td style="border: solid 1px black; padding: 10px"><b>NUMBER</b></td>
							<td style="border: solid 1px black; padding: 10px"><b>NAME</b></td>
							<td style="border: solid 1px black; padding: 10px"><b>ACCOUNT</b></td>
							<td style="border: solid 1px black; padding: 10px"><b>CATEGORY</b></td>
							<td style="border: solid 1px black; padding: 10px"><b>PRICE</b></td>
							<td style="border: solid 1px black; padding: 10px"><b>TIME</b></td>
						</tr>


						<?php 
						$i=0;
						foreach( $data['description'] as $key=> $description){
							$i++;
							
							?>


							<tr  style="border-collapse: collapse;">
								<td style="border: solid 1px black; padding: 10px">
									<?= $i ?>
								</td>
								<td style="border: solid 1px black;  padding: 10px">
									<?=$description['description'] ?>
								</td>
								<td style="border: solid 1px black; padding: 10px">
									<?=$description['uniq_id'] ?>
								</td>
								<td style="border: solid 1px black; padding: 10px">
									<?=$description['description'] ?>
								</td>

								<?php
								if ($description['price'] > 0) { ?>
								<td style="border: solid 1px black; padding: 10px">
									<?="+". $description['price']?>
									<?php
								}
								else {  ?>
								<td style="border: solid 1px black; padding: 10px">
									<?="-". $description['price']?>
									<?php
								}
								?> 
							</td>
							<td style="border: solid 1px black; padding: 10px">
								<?=$description['created_at'] ?>
							</td>
						</tr>
						<?php } ?> 

					</table>


				</div>
			</center>

			<br>
		</br>
		<center>
			<form  method="POST" style="border: solid 1px black; width: 700px; padding: 10px" >	
				<p style="font-size: 20px;"> Створити новий рахунок </p>
				<div class="form-group">
					<input style="width: 300px" name='description' type="text" class="form-control"  placeholder="Опис рахунку"> 

					<br>
					<div class="form-group">
						<button  type="submit" class="btn btn-default btn-lg  ">Створити рахунок</button>
					</div>
				</div>
			</form>
		</center>
		<center>
			<form  method="POST" style="border: solid 1px black; width: 700px; padding: 10px" >	
				<p style="font-size: 20px"> Створення нової транзакції </p>
				<div class="form-group">
					<input style="width: 300px" name='description' type="text" class="form-control"  placeholder="Назва транзакції"> 

					<br>

					<p> Виберіть рахунок </p>

					<select  style="width:250px" name="form[accounts]" id="">

						<?php 

						foreach( $data['accounts'] as $key=> $accounts){
							
							?>
							
							<option style="width=150px"><?=$accounts['uniq_id'] , $accounts['description']?> </option>
							
							<?php
						}
						?>
					</select>
					<br>
				</br>

				<p> Виберіть категорію </p>

				<select  style="width:250px" name="form[accounts]" id="">

					<?php 

					foreach( $data['Category'] as $key=> $Category){
						
						?>
						
						<option style="width=150px"><?=$Category['name']?> </option>
						
						<?php
					}
					?>
				</select>

				<br>
			</br>

			<input style="width: 300px" name='price' type="number" class="form-control"  placeholder="Cумма"> 
			<div class="form-group">
				<button  type="submit" class="btn btn-default btn-lg  ">Створити транзакцію</button>
			</div>
		</div>
	</form>
</center>
</center>

</body>
</html>

