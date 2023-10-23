<?php include 'connectt.php';?>
<?php include 'pat.php';?>
<?php include 'lvlauth.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/hide.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Gestion de Patient</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/>
<link rel="stylesheet">
<style type="text/css">
  .active a{
    background-color: #c6c6c6;
}

</style>

</head>
<script type="text/javascript" src="js/rightde.js"></script>
<body>

<header class="nav-down ">
<?php include_once('navbar.php');?>
</header>

<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">
<br>
<h1 class="text-center ">Gestion de Patient<br /><small style="font-size:20px">Système de gestion hospitalière</small></h1></div>

</div>
</div>
<br><br><br>

<input id="admte" type="hidden" name="admtyp" value="<?php echo $_SESSION['admty']; ?>">
<div class="container-fluid">
<div class="row">
<ul class="nav nav-justified" style="background-color:#FFF;">
<li class="active" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="patin.php"><strong>Inscription des patients</strong></a></li>
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="patiinfo.php"><strong>Renseignements pour les patients</strong></a></li>
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="petsearch.php"><strong>Recherche de patients</strong></a></li>
<li id="lock" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="supadm.php"><strong>Informations sur les patients Modifier et supprimer</strong></a></li>
</ul>
</div></div>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Patient Registration</h3></div>
<br />
<div class="container">
<div class="row">
<div class="col-md-4 col-md-push-4 col-xs-12 alert alert-success text-center">Les patientes inscrites sur ce forum sont directement connectées au service ambulatoire de l’hôpital et des médecins.</div>
</div>
</div>

<div class="container">
<div class="row ">
<div class="col-md-4 col-md-offset-4 col-xs-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title text-center">Formulaire d’inscription des patients</h3>
</div>
<center>
<div class="panel-body">
<small class="text-danger">Tous les champs sont obligatoires</small>
<div>

<table border="0" class="">
<form id="sreg" name="sreg" action="" method="post">
  <tr>
    <td colspan="2" style="padding:5px">
    <div class="input-group col-md-12 col-xs-12"><input pattern="[A-Za-z]{1,30}" title="Use Only Letters" required  id="fname" name="fname"   type="text" class="form-control" placeholder="First Name">
	</div>
    <div id="fner" class="text-center">
    </div>
	</td>
    </tr>

    <tr>
    <td colspan="2" style="padding:5px">
    <div class="input-group col-md-12 col-xs-12"><input pattern="[A-Za-z]{1,30}" title="Use Only Letters" required name="lname" id="lname"   type="text" class="form-control" placeholder="Last Name">
	</div>
    </td>
  </tr>
<tr>
<td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12">Selectionner le docteur
<select required="required" title="Use Only Letters" name="dnames"  class="form-control selectpicker" data-live-search="true">
<option value="">dr vonjy</option>
<option value="">dr mamy</option>
<?php
$count = 1;
$sel_query="SELECT `staffID`,`smfname`, `smlname` FROM `staff` WHERE `smtype` = 'Doctor'"; 
//selcet deoctor member id, deoctor first name and deoctor lastanme from staff table  
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  <option data-tokens="" value="<?php echo $row["staffID"]; ?>"><?php echo $row["smfname"]; ?> <?php echo $row["smlname"]; ?></option>
<?php $count++; } ?>
</select>

</div>
</td>
</tr>
  <tr>
    <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 "><input  name="addr"  required="required"  type="text" class="form-control" placeholder="Address"></div></td>
    </tr>

  <tr>
    <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 "> <span style="border-radius:0px; width:10px" class="input-group-addon" id="basic-addon1">+261</span><input  pattern="\d{7,7}"  maxlength="7" title="nombre max 9" name="tel" required  type="text" class="form-control" placeholder="Contact Number" style="border-radius:0px"></div><script type="text/javascript">
document.write('<?php echo $conduperr; ?>');

</script></td>
    </tr>
  <tr>
    <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 "> <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Not Valide Email" id="eml" name="email" required  type="email" class="form-control" placeholder="Email Address" style="border-radius:0px"></div>
	<script type="text/javascript">
   document.write
('<?php echo $emlduperr; ?>');</script></td>
    </tr>
  <tr>
    <td colspan="2" style="padding:5px;"><div class="input-group col-md-12 col-xs-12 "><select name="gender" required="required" title ="Select Your Gender"  class="form-control" placeholder="Select your Gendere">
    <option   value="">Selectionner le genre  </option>
    <option value="Male">homme</option>
    <option value="Female">Femme</option>
    </select></div></td></tr>

    <tr>
     <td colspan="2"  style="padding:5px;" >date de naissance<div class="input-group col-md-12 col-xs-12"><input name="smbdd" required  type="date" class="form-control" placeholder="Birthday"></div></td>
  </tr>

  <tr>
    <td colspan="2" style="padding:5px;"><div class="input-group col-md-12 col-xs-12 "><select name="bg" required="required" title="Select Your Blood Group"  class="form-control" placeholder="Select your Staff Type">
    <option value="">Selectionner Groupe sanguin</option>
    <option value="A+">A RhD positive (A+)</option>
    <option value="A-">A RhD negative (A-)</option>
    <option value="B+">B RhD positive (B+)</option>
    <option value="B-">B RhD negative (B-)</option>
    <option value="O+">O RhD positive (O+)</option>
    <option value="O-">O RhD negative (O-)</option>
    <option value="AB+">AB RhD positive (AB+)</option>
    <option value="AB-">AB RhD negative (AB-)</option>
    </select></div></td></tr>
    <tr><input type="hidden" name="sadmun" value="<?php echo $_SESSION['sadmun']; ?>" />
  <td colspan="2" style="padding:5px"><script type="text/javascript">
document.write('<?php echo $gestwterr; ?>');
    </script></td></tr>

  <tr>
  <td colspan="2" style="padding:5px"><div align="center"><button onclick="valie();"   name="submit" type="submit" class="btn" value="SUBMIT">ENVOYER</button></div></td>
    </tr>
<tr><td colspan="2" style="padding:5px">
<script type="text/javascript">
document.write('<?php echo $success; ?>');
    </script>
</td>
  </tr>
   </form>
</table>
</div>
</div>
</center>
<div class="panel-footer text-center">Appuyez sur le bouton Soumettre après avoir terminé</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/petrej.js"></script>
<script src="js/hidenv.js"></script>
<script src="js/admty.js"></script>
<script type="text/javascript">
  var x = "Basic Administartion"; 
  var y = "Super Administartion";

if(document.getElementById("admte").value == x)
{
 document.getElementById("lock").style.display = 'none';
}else{
  document.getElementById("lock").style.display;
}

</script>
</body>
<footer>
	<?php include 'footer.php';?>
</footer>
</html>
