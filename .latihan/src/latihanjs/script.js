var baris, kolom;
var s = '';

var num = prompt('angka :');

for (baris = 1; baris <= num; baris++) {
    for (kolom = 1; kolom <= num; kolom++) {
        s += '*';
    }
    s += '';
}

console.log(s);
console.log(typeof num);
