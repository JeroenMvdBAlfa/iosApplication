<!DOCTPE html>
<html>
<head>
    <title>View Student Records</title>
</head>
<body>
<table border = "1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>email</td>
        <td>Email verfied at</td>
        <td>password</td>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->email_verified_at }}</td>
        <td>{{ $user->password }}</td>
    </tr>
    @endforeach
</table>
</body>
</html>
