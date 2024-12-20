<x-app-layout>
    
 <div class="row">
 	<div class="col-lg-8">
 		<img src="/assets/img/skincare-04.jpg" class="w-60">
 	</div>
 	
 	<div class="col-lg-4">
 		<p id="content"></p>
 		
 	</div>
 	
 </div>

</x-app-layout>


<script>
    const content = `
Radiant Glow Serum – Vitamin C & Hyaluronic Acid
Serum wajah ringan yang membantu mencerahkan kulit kusam, menghidrasi, dan menyamarkan noda hitam.

Manfaat Utama
   - Mencerahkan kulit dan meratakan warna kulit.
   - Menyamarkan bekas jerawat dan noda hitam.
   - Memberikan kelembapan intensif tanpa membuat kulit berminyak.

Kandungan Utama
   - **Vitamin C 10%**: Mencerahkan kulit dan meningkatkan produksi kolagen.
   - **Hyaluronic Acid**: Menghidrasi kulit secara mendalam.
   - **Niacinamide 5%**: Menyamarkan noda hitam.

Cocok untuk Jenis Kulit
   Semua jenis kulit, termasuk kulit sensitif.

Cara Pemakaian
   1. Bersihkan wajah terlebih dahulu.
   2. Teteskan 2-3 tetes serum pada telapak tangan.
   3. Usapkan serum ke wajah sambil dipijat lembut.
   4. Gunakan setiap pagi dan malam.

Tekstur dan Aroma
   - **Tekstur**: Cair, cepat meresap.
   - **Aroma**: Segar alami dari Vitamin C.

Ukuran dan Harga
   - **30 ml** – Rp 149.000

`;
    const ctaButton = '<a href="#" class="cta">BELI SEKARANG</a>';

    const element = document.getElementById('content');
    let index = 0;

    function typeText() {
        if (index < content.length) {
            element.innerHTML += content[index];
            index++;
            setTimeout(typeText, 10); // Kecepatan mengetik dalam ms
        } else {
            // Tambahkan tombol CTA setelah teks selesai
            element.innerHTML += ctaButton;
        }
    }

    typeText();
</script>