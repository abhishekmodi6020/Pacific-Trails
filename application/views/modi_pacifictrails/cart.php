
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
<title>Shopping Cart</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {color:#330000;
      background-color:#FFFFFF;
      font-family:Verdana,Arial,Helvetica;
      }
td,th {  font-family:Verdana,Arial,Helvetica;
    }
</style>
</head>
<body>
<div align="center">
<h2>Shopping Cart</h2>
<table border='0' cellspacing='0'><tr bgcolor='#CCCCCC'><th>Description</th><th>Quantity</th><th>Price</th></tr>
<tr bgcolor='#FFFFFF'><td>Hiking Guide</td><td align='center'>1</td><td>$19.95</td></tr>
<tr><td>&nbsp;</td><td bgcolor='#CCCCCC'><strong>Total</strong></td><td bgcolor='#CCCCCC'>$19.95</td></tr></table>


<?php echo form_open('PacificController/placeyourorder')?>
<input type="submit" value="Place Order" />&nbsp;<input type="button" value="Continue Shopping" onclick="javascript:history.go(-1)" />
</form>

</div>
</body>
</html>
