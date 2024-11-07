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
            'Ingatlah Allah yang menciptakan, Allah tempatku berpegang dan bertawakal, Allah maha tinggi dan maha esa, Allah maha lembut', 
            'Kota adalah hutan belantara akal kuat dan berakar, menjurai di depan mata siap menjerat leher kita.', 
            'Ternyata banyak hal yang tak selesai hanya dengan amarah', 
            'Jangan kau paksakan untuk tetap terus berlari, bila luka di kaki belum terobati',
            'Pertemuan dan perpisahan, dimana awal akhirnya? Dimana bedanya?', 
            'Ada kamu yang mengatur ini semua tapi rasanya percuma, ada juga yang janjikan indahnya surga tapi neraka terasa.', 
            'Satu luka perasaan, maki puji dan hinaan, tidak merubah sang jagoan menjadi makhluk picisan.', 
            'Jaman berubah perilaku tak berubah, orang berubah tingkah laku tak berubah', 
            'Harta dunia jadi penggoda, membuat miskin jiwa kita', 
            'Berdoalah sambil berusaha, agar hidup jadi tak sia-sia', 
            'Waktu terus bergulir, kita akan pergi dan ditinggal pergi', 
            'Jalani hidup, tenang tenang tenanglah seperti karang', 
            'Aku mau jujur jujur saja, bicara apa adanya, aku tak mau mengingkari hati nurani', 
            'Jangan kita berpangku tangan, teruskan hasil perjuangan dengan jalan apa saja yang pasti kita temukan'
        ];
        return $fruits[array_rand($fruits)];
    }
}
