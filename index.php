<?php
$nilai_siswa = [
    "Siswa 1" => [
        "Matematika" => 85,
        "Bahasa Inggris" => 90,
        "IPA" => 88
    ],
    "Siswa 2" => [
        "Matematika" => 78,
        "Bahasa Inggris" => 85,
        "IPA" => 84
    ],
    "Siswa 3" => [
        "Matematika" => 92,
        "Bahasa Inggris" => 88,
        "IPA" => 91
    ],
    "Siswa 4" => [
        "Matematika" => 80,
        "Bahasa Inggris" => 82,
        "IPA" => 79
    ]
];
$total_bahasa_inggris = 0;
$jumlah_siswa = count($nilai_siswa);
foreach ($nilai_siswa as $siswa => $nilai) {
    $total_bahasa_inggris += $nilai["Bahasa Inggris"];
}
$rata_rata_bahasa_inggris = $total_bahasa_inggris / $jumlah_siswa;

echo "<h3>Rata-rata nilai Bahasa Inggris: " . $rata_rata_bahasa_inggris . "</h3>";

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>Nama Siswa</th>
        <th>Matematika</th>
        <th>Bahasa Inggris</th>
        <th>IPA</th>
      </tr>";

foreach ($nilai_siswa as $siswa => $nilai) {
    echo "<tr>";
    echo "<td>" . $siswa . "</td>";
    echo "<td>" . $nilai['Matematika'] . "</td>";
    echo "<td>" . $nilai['Bahasa Inggris'] . "</td>";
    echo "<td>" . $nilai['IPA'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
