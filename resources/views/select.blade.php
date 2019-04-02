
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td> Name</td>
<td>Email Name</td>
<td>password</td>
</tr>
@foreach ($users1 as $user)
<tr>
<td>{{ $user->id }}</td><!--this id is database table id-->
<td>{{ $user->name1 }}</td><!--this name is database table name-->
<td>{{ $user->email1}}</td>
<td>{{ $user->password1 }}</td>
</tr>
@endforeach
</table>
</body>
</html>