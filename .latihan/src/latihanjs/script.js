alert('halo selamat datang');
var jumlahAngkot = 10;

for (var noAngkot = 1; noAngkot <= jumlahAngkot; noAngkot++) {
    var pernyataan = 'Angkot No. ' + noAngkot;
    if (noAngkot <= 6 && noAngkot !== 5) {
        console.log(pernyataan + ' beroperasi dengan baik');
    } else if (noAngkot === 8 || noAngkot === 10 || noAngkot === 5) {
        console.log(pernyataan + ' sedang lembur.');
    } else {
        console.log(pernyataan + ' tidak beroperasi dengan baik.');
    }
}

var angka = prompt('Masukan angka yang anda suka :');

if (angka % 2 === 0) {
    console.log(angka + ' merupakan bilangan genap');
} else if (angka % 2 === 1) {
    console.log(angka + ' merupakan bilangan ganjil');
} else {
    console.log('Input anda bukan merupakan sebuah angka!');
}

alert('terimakasih');
