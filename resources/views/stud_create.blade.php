<!DOCTYPE html>
<html>
<head>
<title>Student Management | Add</title>
</head>
<body>
<form action = "/create" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>First Name</td>
<td><input type='text' name='name1' /></td>
<tr>
<!--
<td>Last Name</td>
<td><input type="text" name='email1'/></td>
</tr>

<tr>
<td>password</td>
<td><input type="text" name='password1'/></td>
</tr>
</tr>
<tr>
-->
<td colspan = '2'>
<input type = 'submit' value = "Add student"/>
</td>
</tr>
</table>
</form>
</body>
</html>
