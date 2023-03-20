<form action="" method="post">
    <table>
        <tr>
            <td>Angka pertama: </td>
            <td><input type="number" name="angka1"></td>
        </tr>
        <tr>
            <td>Angka kedua: </td>
            <td><input type="number" name="angka2"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name ="proses"></td>
        </tr>
    </table>
</form>


<?php
   $angka1 = $_POST['angka1'];
   $angka2 = $_POST['angka2'];
    
   if($angka1 > $angka2){
    echo "Nilai terbesar adalah: ". $angka1;
   } else{
    echo "Nilai terbesar adalah: ". $angka2;
   }
?>