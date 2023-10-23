<?php include 'staffdb.php';?>
<?php include 'connect.php';?>
<?php include 'lvlauth.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Gestion Patient</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/><script type="text/javascript" src="js/rightde.js"></script>
<style type="text/css">
  .active a{
    background-color: #c6c6c6;
}

</style>

</head>
<body>
<link rel="stylesheet" href="css/hide.css">
<header class="nav-down ">
<?php include_once('navbar.php');?>
</header>
<br>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<h1 class="text-center "><a href="menu.php"><img width="9%" src="images/logol.png"></a> Gestion Patient</h1>
<!-- <hr />
<small style="font-size:20px">Dispensaire</small></h1></div> -->

</div>
</div>

<input id="admte" type="hidden" name="admtyp" value="<?php echo $_SESSION['admty']; ?>">
<div class="container-fluid">
<div class="row">
</div></div>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Formulaire d'Inscription</h3></div>
<br />


<div class="container">
<div class="row ">
<div class="col-md-4 col-md-offset-4 col-xs-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title text-center">Formulaire d'Inscription pour les Patients</h3>
</div>
<center>
<div class="panel-body">
<small class="text-danger">Tous les champs sont requis</small>
<div>

<table border="0" class="">
<form id="sreg" name="sreg" action="" method="post">
  <input type="hidden" name="dmun" value="<?php echo $_SESSION['sadmun']; ?>" />
  <tr>
    <td colspan="2" style="padding:5px">
    <div class="input-group col-md-12 col-xs-12"><input required pattern="[A-Za-z]{1,30}" title="Use Only Letters"  id="fname" name="fname"   type="text" class="form-control" placeholder="Prénom">
	</div>
    <div id="fner" class="text-center">
    </div>
	</td>
    </tr>

    <tr>
    <td colspan="2" style="padding:5px">
    <div class="input-group col-md-12 col-xs-12"><input required pattern="[A-Za-z]{1,30}" title="Use Only Letters" name="lname" id="lname"   type="text" class="form-control" placeholder="Nom de Famille">
	</div>
    </td>
  </tr>

  <tr>
    <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 "><input name="addr"  required="required"  type="text" class="form-control" placeholder="Adresse"></div></td>
    </tr>

  <tr>
    <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 "> <span style="border-radius:0px; width:10px" class="input-group-addon" id="basic-addon1">+260</span><input pattern="\d{9,9}"  maxlength="9" title="Envalid Mobile Number Use only Letters and chacter count must be 9" name="tel" required  type="tel" class="form-control" placeholder="Numéro de Contact" style="border-radius:0px"></div><script type="text/javascript">
document.write('<?php echo $conduperr; ?>');

</script></td>
    </tr>
  <tr>
    <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 "> <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Not Valide Email" id="eml" name="email" required=""  type="email" class="form-control" placeholder="Adresse Email" style="border-radius:0px"></div>
	<script type="text/javascript">
   document.write('<?php echo $emlduperr; ?>');
   
   </script></td>
    </tr>
  <tr>
    <td colspan="2" style="padding:5px;"><div class="input-group col-md-12 col-xs-12 "><select name="gender" required="required"  class="form-control" placeholder="sélectionnez votre genre">
    <option  value="">sélectionnez votre genre   </option>
    <option value="Masculin">Masculin</option>
    <option value="Féminin">Féminin</option>
    </select></div></td></tr>

    <tr>
     <td colspan="2"  style="padding:5px;" ><div class="input-group col-md-12 col-xs-12"><input name="smbdd" required  type="date" class="form-control" placeholder="Birthday"></div></td>
  </tr>

  <tr>
    <td colspan="2" style="padding:5px;"><div class="input-group col-md-12 col-xs-12 "><select name="typesm" required="required"  class="form-control" placeholder="Select your Staff Type">
    <option value="">Staff Type</option>
    <option value="Doctor">Doctor</option>
    <option value="Nurse">Nurse</option>  <!-- IMPORTANT  VALUE LE VALINY MIPETRAKA EO-->
    <option value="Other">Other</option>
    </select></div></td>
  </tr>
    <tr>
     <td style="padding:5px;" ><div class="input-group col-md-12 col-xs-12"><select name="workt" required="required"  class="form-control">
     <option value="">Selectionner Group Sangguin</option>
    <option value="A+">A RhD positive (A+)</option>
    <option value="A-">A RhD negative (A-)</option>
    <option value="B+">B RhD positive (B+)</option>
    <option value="B-">B RhD negative (B-)</option>
    <option value="O+">O RhD positive (O+)</option>
    <option value="O-">O RhD negative (O-)</option>
    <option value="AB+">AB RhD positive (AB+)</option>
    <option value="AB-">AB RhD negative (AB-)</option>
    </select></div>
	<script type="text/javascript">
document.write('<?php echo $gestwterr; ?>');
    </script></td>
  </tr>

  <tr>
  <td colspan="2" style="padding:5px"><div align="center"><button   name="submit" type="submit" class="btn" value="SUBMIT">SOUMETTRE</button></div></td>
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
<div class="panel-footer text-center">Appuyez sur le bouton SOUMETTRE aprés avoir terminé</div>
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
<script src="js/hidenv.js"></script>
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