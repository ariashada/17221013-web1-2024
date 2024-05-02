<!DOCTYPE html>
<html lang="en">

<!--Head-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtr=device-widtr, initial-scale=1.0">
    <title>Register</title>
</head>

<!--Body-->
<body>
    <!--Table Section-->
    <table>
        <!--Form Section-->
        <form action="data.php" method="post">
            <tr>
                <td>
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" value="">
                </td>
            </tr>

            <tr>
                <td>
                    <label>Jenis Kelamin</label>
                    <input type="radio" name="gender" value="Laki-laki"> Laki-laki
                    <input type="radio" name="gender" value="Perempuan"> Perempuan
                </td>
            </tr>

            <tr>
                <td>
                    <label>Kota</label>
                    <select name="kota">
                        <option value="Kota Bandung"> Kota Bandung
                        <option value="Kabupaten Bandung"> Kabupaten Bandung
                        <option value="Kabupaten Bandung Barat"> Kabupaten Bandung Barat
                        <option value="Kota CImahi"> Kota Cimahi
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Alamat</label> <br/>
                    <textarea name="alamat" rows="10" cols="30"></textarea>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="kirim">
                </td>
            </tr>
        </form>
    </table>
</body>

</html>