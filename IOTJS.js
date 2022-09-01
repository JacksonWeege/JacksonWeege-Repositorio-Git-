var contaCor = 0;

function mudarCor() {
    let aCores = ['green', 'red', 'black', 'purple', 'gray', 'blue'];
    let oMenu = document.getElementById('menu');
    oMenu.style.backgroundColor = aCores[contaCor];
    contaCor = contaCor + 1;
    if (contaCor > 5) {
        contaCor = 0;
    }
}