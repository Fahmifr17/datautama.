
<?php $page='halaman_awal'; include './template_user/header.php';
include "config/library.php";
include 'inc/librari.php';
include "config/fungsi_indotgl.php";
?>
<h3  class="text-justify">Pengertian AHP ( Analytic Hierarchy Process) </h3>
                    <p>
                        AHP  merupakan   suatu  model  pendukung   keputusan  yang  dikembangkan   oleh  Thomas  L. 
Saaty.  Model  pendukung  keputusan  ini  akan   menguraikan  masalah  multi factor   atau  multi 
kriteria  yang  kompleks   menjadi  s ua t u  hirarki,  menurut .  Saaty  (1993),  hirarki   didefinisikan 
sebagai  suatu  representasi   dari   sebuah   permasalahan  yang  kompleks  dalam  suatu  struktur 
multi level  dimana level pertama   adalah  tujuan, yang diikuti level faktor, kriteria, sub kriteria, 
dan  seterusnya  kebawah   hingga level terakhir  yaitu alternatif. Dengan  hirarki, suatu  masalah 
yang  kompleks  dapat  diuraikan   kedalam  kelompok- kelompoknya  yang  kemudian  diatur 
menjadi  suatu  bentuk   hi r a r ki   sehingga   permasalahan  akan   tampak   lebih  terstruktur  dan 
sistematis.  AHP  sering   digunakan  sebagai  metode   pemecahan  masalah  di banding  dengan  
metode yang lain karena  alasan - alasan  sebagai  berikut : <br>
1.   Struktur  yang  berhirarki,  sebagai   konsekuesi  dari   kriteria  yang  dipilih,  sampai  pada  
subkriteria yang paling dalam.   <br>
2.   Memperhitungkan  validitas  sampai   dengan   batas  toleransi   inkonsistensi  berbagai  kriteria  
dan alternatif yang dipilih  oleh  pengambil keputusan. <br>
3.   Memperhitungkan daya  tahan output analisis sensitivitas  pengambilan keputusa n.  
                    </p>
                    <p class="text-justify">
                        AHP didasarkan atas 3 prinsip dasar yaitu: <br>
                        1.   Dekomposisi <br>
  Dengan prinsip ini struktur masalah yang kompleks dibagi menjadi bagian- bagian secara 
hierarki.  Tujuan  didefinisikan  dari  yang  umum  sampai  khusus.  Dalam  bentuk  yang 
paling  sederhana  struktur  akan  terdiri  dari  tujuan,  kriteria  dan  level  alternatif.  Tiap 
him punan alternatif mungkin akan dibagi lebih jauh menjadi tingkatan yang lebih detail, 
mencakup  lebih  banyak  kriteria  yang  lain.  Level  paling  atas  dari  hirarki  merupakan 
tujuan  yang  terdiri  atas  satu  elemen.  Level  berikutnya  mungkin   mengandung  beberapa 
elemen,  di mana  elemen- elemen  tersebut  bisa  dibandingkan,  memiliki  kepentingan  yang 
hampir sama dan tidak memiliki perbedaan yang terlalu mencolok. Jika perbedaan terlalu 
besar h arus dibuatkan level yang baru. <br>
2.   Perbandingan penilaian/pertimbangan ( comparative jud gments ).  <br> 
  Dengan  prinsip  ini  akan  dibangun  perbandingan  berpasangan  dari  semua  elemen  yang 
ada  dengan  tujuan  menghasilkan  skala  kepentingan  relatif  dari  elemen.  Penilaian 
menghasilkan  skala  penilaian  yang  berupa  angka.  Perbandingan  berpasangan  dalam 
bentuk matriks jika dikombinasikan akan menghasilkan prioritas.  <br>
3.   Sintesa Prioritas <br>
  Sintesa  prioritas  dilakukan  dengan  mengalikan  prioritas  lokal  dengan  prioritas  dari 
kriteria bersangkutan di level atasnya dan menambahkannya ke tiap elemen dalam level 
yang  dip engaruhi  kriteria.  Hasilnya  berupa  gabungan  atau  dikenal  dengan  prioritas 
global  yang  kemudian  digunakan  untuk  memboboti  prioritas  lokal  dari  elemen  di  level 
terendah sesuai dengan kriterianya.  
                    </p>
 <h3>Pengertian SAW (Simple Additive Weighting) </h3>
                    <p class="text-justify">Simple Additive Weighting (SAW) merupakan metode penjumlahan terbobot. Konsep dasar Simple Additive Weighting (SAW) adalah mencari penjumlahan terbobot dari rating kinerja pada setiap alternatif pada suatu kriteria. Metode Simple Additive Weighting (SAW) membutuhkan proses normalisasi matrix keputusan (X) kesuatu skala yang dapat diperbandingkan dengan semua ranting alternatif yang ada [3]. Langkah perhitungan metode SAW sebagai berikut: 
a)  Menentukan alternatif, yaitu Ai 
b)  Menentukan kriteria yang akan dijadikan acuan dalam pengambilan keputusan Ci 
c)  Menentukan bobot prefensi atau tingkat kepentingan (W) setiap kriteria. W=[W1 W2 W3 … W4] 
d)  Membuat tabel rating kecocokan setiap alternatif pada setiap kriteria. 
e)  Memebuat matrix keputusan X yang dibentuk dari table rating kecocokan dari setiap alternatif (Ai) pada setiap kriteria (Cj) yang sudah ditentukan dimana, I = 1,2,…, m dan j = 1,2,…, n. 
f)  Melakukan normalisasi matrix keputusan X dengan cara menghitung nilai rating kinerja ternormalisasi (rij) dari alternatif (Ai) pada kinerja (Cj). berikut adalah rumus perhitungan normalisasi SAW: 
                          xij                jika j adalah atribut keuntungan (benefit) 
 Max xij    rij = 
                                   Min xij      jika j adalah atribut biaya (cost) 
                                       xij 
Keterangan: 
rij         : Rating kinerja ternormalisasi 
Maxi        : Nilai maksimum dari setiap baris dan kolom 
Mini        : Nilai minimum dari setiap baris dan kolom 
Xij         : Baris dan kolom dari matriks 

g)  Hasil dari nilai rating kinerja ternormalisasi (rij) membentuk matrix ternormalisasi (R).
</p>
<?php include './template_user/footer.php';?>