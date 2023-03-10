<?php
//buat data mahasiswa dan simpan ke dalam array assosiatif
$ns1 =['id'=>1,'nim'=>"01101",'uts'=>90,'uas'=>90,'tugas'=>95];
$ns2 =['id'=>2,'nim'=>"02202",'uts'=>85,'uas'=>93,'tugas'=>80];
$ns3 =['id'=>3,'nim'=>"03303",'uts'=>87,'uas'=>95,'tugas'=>85];

//simpan variable data array assosiatif ke dalam array indexing
$ar_nilai = [$ns1, $ns2, $ns3];
?>
<!-- buat table dengan element html -->
<h3 style="text-align:center;">Daftar Nilai Mahasiswa</h3>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>TUGAS</th>
            <th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach($ar_nilai as $nilai){
            echo '<tr><td>' .$nomor. '</td>';
            echo '<td>' .$nilai['nim'].'</td>';
            echo '<td>' .$nilai['uts'].'</td>';
            echo '<td>' .$nilai['uas'].'</td>';
            echo '<td>' .$nilai['tugas'].'</td>';
            // tuliskan perhitungan nilai akhir dai sini
            $akhir = ($nilai['uts'] + $nilai['uas'] + $nilai['tugas'])/3;
            $nilaiakhir = number_format($akhir);
            echo "<td>$nilaiakhir</td>";
            echo '</tr>';
            $nomor++;
        }
        ?>
    </tbody>
</table>