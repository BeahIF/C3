<?php
$arrCombo = array(
    "seg" => "Segunda",
    "ter"  => "Terça",
    "qua" => "Quarta",
    "qui" => "Quinta",
    "sex" =>"Sexta",
    "sab" =>"Sábado",
    "dom" => "Domingo"
);
?>
<?php
$arr = array(
  "Lab SW I" => "Lab SW I",
  "Lab SW II" => "Lab SW II",
  "Lab SW III" => "Lab SW III",
  "Lab SW IV"=>"Lab SW IV",
  "Lab GEN I"=>"Lab GEN I",
  "Lab PAV2-2106"=>"Lab PAV2-2106",
  "Lab PAV2-2104"=>"Lab PAV2-2104",
  "Lab PAV2-2111"=>"Lab PAV2-2111");
?>
<!DOCTYPE html>

<html lang="en">
<head>
	

	
</head>
<body>

<div id="container">
	<h1>Formulario</h1>

	<div id="body">
		

<form action="salva.php" method="post">
            <p>
              Lab :<br>
   <select name="lab">
                    <option> <?php foreach ($arr as $key => $value): ?>
                        <?php echo "<option value=\"$key\" >$value</option>"; ?>
                    <?php endforeach; ?></option>
                   
                </select>
                 <br>Dia :<br>
       <select name="dias">
                    <option> <?php foreach ($arrCombo as $key => $value): ?>
                        <?php echo "<option value=\"$key\" >$value</option>"; ?>
                    <?php endforeach; ?></option>
                   
                </select>
                <input type="submit" value="Salva!" />
            </p>
        </form>

