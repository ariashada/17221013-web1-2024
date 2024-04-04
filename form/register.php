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
        <form action="" method="post">
            <tr>
                <td>
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama">
                </td>
            </tr>

            <tr>
                <td>
                    <label>Jenis Kelamin</label>
                    <input type="radio" name="gender"> Laki-laki
                    <input type="radio" name="gender"> Perempuan
                </td>
            </tr>

            <tr>
                <td>
                    <label>Kota</label>
                    <select name="kota">
                        <option value="BDG"> Kota Bandung
                        <option value="KB"> Kabupaten Bandung
                        <option value="KBB"> Kabupaten Bandung Barat
                        <option value="KC"> Kota Cimahi
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
                    <input type="button" value="kirim">
                </td>
            </tr>
        </form>
    </table>
</body>

</html>