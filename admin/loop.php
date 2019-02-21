<?php
$column = 3; //tentukan banyaknya kolom yang diinginkan

mysql_connect ("localhost","root","");
mysql_select_db ("bu_tesonline");

$query = "Select * from soal1";
$query = mysql_query($query);

echo "<table border=1><tr>";
$no = 0;
while ($data = mysql_fetch_assoc($query))
{
    if ($no >= $column)
    {
    echo "</tr><tr>";
    $no = 0;
    }
    //menampilkan data selama variabel $no >= $column
    else
    {
    echo "<td>'".$data['id']."'</td>";
    echo "<td>'".$data['soal']."'</td>";
    echo "<td>'".$data['kunci_jawaban']."'</td>";
    }
    $no++;
}
echo "</tr></table>";
?>