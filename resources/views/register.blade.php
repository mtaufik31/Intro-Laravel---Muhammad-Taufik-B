<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>
</head>
<body>
    <div>
        <h1>Sign Up Form</h1>
        <form action="/welcome" method="POST">
            @csrf
            <label for="nama_depan">Nama Depan: </label>
            <input type="text" name="nama_depan" id="nama_depan" required>
            <br>

            <label for="nama_belakang">Nama Belakang: </label>
            <input type="text" name="nama_belakang" id="nama_belakang" required>
            <br>

            <p>Gender :</p>
            <input type="radio" name="gender" id="Male" value="Laki-laki" required /><label for="Male">Laki-laki</label>
            <br>
            <input type="radio" name="gender" id="Female" value="Perempuan" required /><label for="Female">Perempuan</label>
            <br>
            <input type="radio" name="gender" id="Other" value="Other" required /><label for="Other">Emang ada gender lain?</label>
            <br>

            <p>Nationality :</p>
            <select name="nationality" id="Nationality" required>
                <option value="Indonesia">Indonesia</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Singapore">Singapore</option>
                <option value="Philippines">Philipina</option>
            </select>
            <br>

            <p>Language Spoken:</p>
            <input type="checkbox" name="language[]" value="Indonesia"><label for="Bahasa">Indonesia</label><br>
            <input type="checkbox" name="language[]" value="Inggris"><label for="Inggris">Inggris</label><br>
            <input type="checkbox" name="language[]" value="Melayu"><label for="Melayu">Melayu</label><br>

            <p>Bio :</p>
            <textarea name="bio" rows="10" cols="30"></textarea><br>

            <input type="submit" value="Sign Up">
        </form>
    </div>
</body>
</html>
