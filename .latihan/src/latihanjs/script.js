alert('halo selamat datang');
var test = true;

while (test == true) {
    var name = prompt('Siapa namamu?');
    alert(name);
    test = confirm('mau coba lagi gaa?');
    // karna confirm itu balikin nilai boolean
}

alert('terimakasih');
