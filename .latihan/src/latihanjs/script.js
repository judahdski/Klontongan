let data = [10, 9, 8, 7, 6, 5, 2, 1, 4, 3];

console.log(data);
console.log('Penghapusan node: ');
data.shift();
console.log(data);
console.log('Leaf akan menempati root: ');

let dataTerakhir = data.pop();
console.log(dataTerakhir);
data.unshift(dataTerakhir);
console.log(data);

let i = data.indexOf(dataTerakhir);
let anakKiri = 2 * i + 1;
let anakKanan = 2 * i + 2;
let siblingKiri = i - 1;
let siblingKanan = i + 1;
let parents = (i - 1) / 2;
console.log(data[anakKiri]);
console.log(data[anakKanan]);

let temp = data.shift();
data.unshift(temp);

while (data[i] < data[anakKiri]) {
    let j = data.indexOf(dataTerakhir);
    if (data[anakKiri] < data[anakKanan]) {
        data[i] = data[anakKanan];
        data[anakKanan] = dataTerakhir;
    } else {
        data[i] = data[anakKiri];
        data[anakKiri] = dataTerakhir;
    }
}

console.log(data);
console.log(i);
