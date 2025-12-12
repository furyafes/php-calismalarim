<?php
echo "Hello World!<br>";

$isim = "Gorkem";
$yas = 20;

echo "İsim: $isim<br>";
echo "Yaş: $yas<br>";

if ($yas >= 18) {
    echo "Ehliyet alabilirsin.<br>";
} else {
    echo "Otobus kullanabilirsin.<br>";
}
echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "$i. Adım<br><br>";
}