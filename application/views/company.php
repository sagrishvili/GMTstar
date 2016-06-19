<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
</head>
<body>


<?php

echo validation_errors()



 ?>


<div>
<form action="<?php echo base_url('index.php/main/registrcompa'); ?>" method="post">
	<p><input type="text" name="cname" placeholder="კომპამიის სახელწოდება" /></p>
	<p><input type="email" name="mail" placeholder="ელექტრონული ფოსტა"></p>
	<p><input type="password" name="passw" placeholder="აირჩიე პაროლი" /></p>
	<p><input type="password" name="confpassw" placeholder="აირჩიე პაროლი" /></p>
	<p><textarea name="new" placeholder="შეიყვანეთ რას გეგმავთ ახლო მომავალში"></textarea></p>
	<p><button type="submit">Submit</button></p>
</form>
</div>




<div>
	<form action="<?php echo base_url('index.php/main/companylogin'); ?>" method="post">
	<p><input type="email" name="maili" placeholder="ელექტრონული ფოსტა"></p>
	<p><input type="password" name="passwr" placeholder="აირჩიე პაროლი" /></p>
	<p><button type="submit">Submit</button></p>
</form>
</div>


</body>
</html>