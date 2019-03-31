<?php
echo "-= KALKULATOR ZAKAT =-\n";
echo "Silahkan Pilih Zakat\n";
echo "1.Emas\n2.Uang\n3.Ternak\n4.Pertanian\n";
echo "Masukan Pilihan : ";
$pilih = trim(fgets(STDIN));
if($pilih == 1){ //jika pilihan zakat "EMAS"
	echo "Jumlah Emas (gram): ";
$emas = trim(fgets(STDIN));	
if($emas >= 85){
$kelzakat = $emas*2.5/100;
$kelzakatrp = $kelzakat*573000;
	echo "Zakat yang harus di bayar Emas Senilai : $kelzakat(gram) atau Uang Rp " . number_format($kelzakatrp,2,',','.');"";	
}else{
echo "Tidak ada zakat yang harus di bayar";
}
} //penutup zakat EMAS
//================================================================
elseif($pilih == 2){ //jika pilihan zakat "UANG"
	echo "Jumlah Uang (Rp.): ";
$uang = trim(fgets(STDIN));		
$kelzakat = $uang*2.5/100;
if($uang >= 30000){
	echo "Zakat yang harus di bayar : Rp " . number_format($kelzakat,2,',','.');"";	
}else{
	echo "Tidak ada zakat yang harus di bayar";
}
}//penutup zakat UANG
//================================================================
elseif($pilih == 3){ //jika pilihan zakat "TERNAK"
	echo "Pilih Jenis Ternak\n1.Kambing\n2.Sapi\n";
	echo "Masukan Jenis Ternak : ";
$jenis_ternak = trim(fgets(STDIN));
if($jenis_ternak == 1){ //jika pilihan jenis ternak "Kambing"
	echo "Jumlah Kambing : ";
$jum_kambing = trim(fgets(STDIN));
if($jum_kambing < 40){ //jika kambing kurang dari 40
	echo "Tidak ada zakat yang harus di keluarkan";
}elseif($jum_kambing <= 120){ // jika kambing kurang dari 120
	echo "Zakat yang harus di keluarkan sebanyak 1 ekor kambing betina";
}elseif($jum_kambing <= 200){ //jika kambing kurang dari 200
	echo "Zakat yang harus di keluarkan sebanyak 2 ekor kambing betina";
}elseif($jum_kambing <= 300) { //jika kamping kurang dari 300
	echo "Zakat yang harus di keluarkan sebanyak 3 ekor kambing betina";
}else{ //jika kambing lebih dari 300
	echo "Zakat yang harus di keluarkan setiap 100 ekor, zakatnaya 1 ekor kambing betina";
}
}//penutup jenis ternak kambing
elseif($jenis_ternak == 2){ //jika pilihan jenis ternak "Sapi"
	echo "Jumlah Sapi : ";
$jum_sapi = trim(fgets(STDIN));
if($jum_sapi <= 29){ //jika sapi kurang dari 29
echo "Tidak ada zakat yang harus di keluarkan";
}elseif($jum_sapi <= 39){ //jika sapi kurang dari 39
	echo "Zakat yang harus di keluarkan sebanyak 1 ekor sapi jantan/betina umur 1 tahun.";
}elseif($jum_sapi <= 59){ //jika sapi kurang dari 59
	echo "Zakat yang harus di keluarkan sebanyak 1 ekor sapi jantan/betina umur 2 tahun.";
}elseif($jum_kambing <= 69) { //jika sapi kurang dari 69
	echo "Zakat yang harus di keluarkan sebanyak 2 ekor sapi jantan/betina umur 1 tahun.";
}elseif($jum_kambing <= 79) { //jika sapi kurang dari 79
	echo "Zakat yang harus di keluarkan sebanyak 1 ekor sapi betina umur 1 tahun & 1 ekor sapi jantan/betina umur 2 tahun.";
}else{ //jika sapi lebih dari 79
	echo "Zakat yang harus di keluarkan setiap 40 ekor, zakatnaya 1 ekor saping betina umur 2 tahun.";
}
}//penutup jenis ternak sapi
}//penutup zakat Ternak
//================================================================
elseif($pilih == 4){ //jika pilihan zakat "Pertanian"
echo "Pertanian yang di aliri oleh\n1.Air Hujan\n2.Air Irigasi\n3.Air Hujan & Irigasi\n";
echo "Masukan Jenis Air : ";
$jenis_air = trim(fgets(STDIN));
if($jenis_air == 1){ //jika pilihan jenis air "Hujan"
echo "Hasil Panen (Kg) : ";
$hasil_panen = trim(fgets(STDIN));
$kelzakat = $hasil_panen*10/100;
if($hasil_panen < 750){ //jika hasil panen kurang dari 750kg
	echo "Tidak ada zakat yang harus di keluarkan";
}else{ //jika hasil panen lebih dari 750kg
	echo "Zakat yang harus di keluarkan sebanyak $kelzakat(Kg).";
}
} //penutup jenis air Hujan
elseif($jenis_air == 2){ //jika pilihan jenis air "Irigasi"
	echo "Hasil Panen (Kg) : ";
$hasil_panen = trim(fgets(STDIN));
$kelzakat = $hasil_panen*5/100;
if($hasil_panen < 750){ //jika hasil panen kurang dari 750kg
	echo "Tidak ada zakat yang harus di keluarkan";
}else{ //jika hasil panen lebih dari 750kg
	echo "Zakat yang harus di keluarkan sebanyak $kelzakat(Kg).";
}
} //penutup jenis air Irigasi
elseif($jenis_air == 3){ //jika pilihan jenis air "Hujan & Irigasi"
	echo "Hasil Panen (Kg) : ";
$hasil_panen = trim(fgets(STDIN));
$kelzakat = $hasil_panen*7.5/100;
if($hasil_panen < 750){ //jika hasil panen kurang dari 750kg
	echo "Tidak ada zakat yang harus di keluarkan";
}else{ //jika hasil panen lebih dari 750kg
	echo "Zakat yang harus di keluarkan sebanyak $kelzakat(Kg).";
}
} // penutup pilihan jenis air Hujan & Irigasi

}	// penutup zakat PERTANIAN
	?>
