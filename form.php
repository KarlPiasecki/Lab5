<!-- 
Lab 5
Karl Piasecki 0575787
PHP code to display the inputs from the payment form
-->
<!DOCTYPE html>
<html>
<head>
    <title>Lab 5</title>
    <link rel="stylesheet" href="payment-form.css">
</head>
<body>
<!--
The user contact, shipping, billing, and payment information have been
put into their own forms to give an excellent styling effect in the presentation of 
the page.
-->
<form>
<h1>User contact information</h1>
User title: <?php $title= $_POST["title"]; 
echo $title; ?><br>
User name: <?php echo $_POST["name"]; ?><br>
User phone number: <?php echo $_POST["phone"]; ?><br>
User email: <?php echo $_POST["email"]; ?><br>
</form>

<form>
<h1>User shipping information</h1>
Province: <?php echo $_POST["shipProvince"]; ?><br>
Shipping street address: <?php echo $_POST["shipAddress"]; ?><br>
Type: <?php echo $_POST["shipType"]; ?><br>
Postal code: <?php echo $_POST["shipPostal"]; ?><br>
</form>

<form>
<h1>User Billing information</h1>
Province: <?php echo $_POST["billProvince"]; ?><br>
Billing street address: <?php echo $_POST["billAddress"]; ?><br>
Type: <?php echo $_POST["billType"]; ?><br>
Postal code: <?php echo $_POST["billPostal"]; ?><br>
</form>

<form>
<h1>User payment information</h1>
Card type: <?php echo $_POST["card"]; ?><br>
Card number: <?php echo $_POST["cardNum"]; ?><br>
Card expiration: <?php echo $_POST["expiration"]; ?><br>
</form>

</body>
</html> 