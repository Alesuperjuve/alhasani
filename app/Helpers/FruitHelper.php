<?php

namespace App\Helpers;

class FruitHelper
{
    public static function getRandomFruit()
    {
        $fruits = [
            'Kesadaran adalah matahari, kesabaran adalah bumi, keberanian menjadi cakrawala, dan perjuangan adalah pelaksanaan kata kata ...', 
            'Jika kata tak lagi bermakna, lebih baik diam saja', 
            'Kucoba berkaca pada jejak yang ada, ternyata aku sudah tertinggal, bahkan jauh tertinggal', 
            'Jalan masih teramat jauh, mustahil berlabuh bila dayung tak terkayuh', 
            'Dalam hari selalu ada kemungkinan, dalam hari pasti ada kesempatan', 
            'Matinya seorang penyaksi bukan matinya kesaksian', 
            'Ingatlah Allah yang menciptakan, Allah tempatku berpegang dan bertawakal, Allah Maha Tinggi dan Maha Esa, Allah Maha Lembut', 
            'Kota adalah hutan belantara akal kuat dan berakar, menjurai di depan mata, siap menjerat leher kita.', 
            'Ternyata banyak hal yang tak selesai hanya dengan amarah', 
            'Jangan kau paksakan untuk tetap terus berlari, bila luka di kaki belum terobati',
            'Pertemuan dan perpisahan, di mana awal akhirnya? Di mana bedanya?', 
            'Ada kamu yang mengatur ini semua tapi rasanya percuma, ada juga yang janjikan indahnya surga tapi neraka terasa.', 
            'Satu luka perasaan, maki puji dan hinaan, tidak merubah sang jagoan menjadi makhluk picisan.', 
            'Jaman berubah perilaku tak berubah, orang berubah tingkah laku tak berubah', 
            'Harta dunia jadi penggoda, membuat miskin jiwa kita', 
            'Berdoalah sambil berusaha, agar hidup jadi tak sia-sia', 
            'Waktu terus bergulir, kita akan pergi dan ditinggal pergi', 
            'Jalani hidup, tenang tenang tenanglah seperti karang', 
            'Aku mau jujur jujur saja, bicara apa adanya, aku tak mau mengingkari hati nurani', 
            'Jangan kita berpangku tangan, teruskan hasil perjuangan dengan jalan apa saja yang pasti kita temukan',
            'Dia berdiri malas melangkahkan kaki. Diraihnya mimpi, digenggam. Tak dilepaskan lagi...',
            'Aku ingat mimpiku. Aku ingat harapan yang semakin hari semakin panjang tak berujung',
            'Bosan kadang singgah di jiwa yang lelah. Kadang ada jemu sekejap berlalu',
            'Pada tanah yang sama. Kita berdiri. Pada air yang sama. Kita berjanji',
            'Dalam gelap ku berjalan. Membelah belantara akal. Pada terang ku merenung. Mencari kesejatian',
            'Berapa dalam seorang lelaki. Selami lautan demi tepati janji. Berapa keras seorang lelaki. Pecahkan cadas di atas kaki sendiri',
            'Kau reguk habis semua doa-doa. Dari surau depan rumah yang kau sewa. Tak terasa, surya duduk di kepala. Azan Subuh masih di telinga',
            'Berhentilah jangan salah gunakan, kehebatan ilmu pengetahuan untuk menghancurkan',
            'Hei jangan ragu dan jangan malu, tunjukkan pada dunia bahwa sebenarnya kita mampu',
            ' Riak gelombang suatu rintangan, ingat itu pasti kan datang, karang tajam sepintas seram, usah gentar bersatu terjang.',
            'Jangan goyah percayalah teman. Perang itu melawan diri sendiri. Selamat datang kemerdekaan, kalau kita mampu menahan diri',
            'Hangatkan tubuh di cerah pagi pada matahari, keringkan hati yang penuh tangis walau hanya sesaat.',
            'Satu luka perasaan, maki puji dan hinaan, tidak mengubah sang jagoan menjadi makhluk picisan',
            'Oh Tuhan tolonglah, lindungi kami dari kekhilafan, oh ya Tuhan tolonglah, Ramadan mengetuk hati orang orang yang gila perang',
            'Air mata darah telah tumpah. Demi ambisi membangun negeri. Kalaulah ini pengorbanan. Tentu bukan milik segelintir orang',
            'Sama sekali ku tak anti teknologi. Tapi aku lebih percaya pada hati. Aku tahu listrik penting buat industri. Tapi industri jangan ancam masa depan',
            'Gelapnya malam hanya persinggahan. Terangnya siang, kita semai harapan.',
            'Cukup lama aku jalan sendiri. Tanpa teman yang sanggup mengerti. Hingga saat kita jumpa hari ini. Tajamnya matamu tikam jiwaku. Kau tampar bangkitkan aku, sobat...',
        ];
        return $fruits[array_rand($fruits)];

    }
}
