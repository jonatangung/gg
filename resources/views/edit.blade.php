
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EDIT</title>
</head>
<body>

<h2>EDIT</h2>

<form method="POST" action="/edit/{{ $user->id_user }}">
    @csrf
    @method('PUT')

    <label for="username">Username:</label>
    <input type="text" name="username" value="<?= $user->username ?>" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ $user->email }}" required><br>

    <label for="password">Password Baru:</label>
    <input type="password" name="password" required><br>

    <button type="submit">Save</button>
</form>

</body>
</html>
