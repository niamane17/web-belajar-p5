<?php
function formatRupiah($angka) {
  return "Rp " . number_format($angka, 0, ',', '.');
}
echo formatRupiah(12500); // Rp 12.500
?>
