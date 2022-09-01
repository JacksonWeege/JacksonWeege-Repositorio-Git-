var usuarios = ['Jackson'];

var senhas = ['123'];

function login() {
	var oUsuario = document.getElementById('usuario').value;
	var oSenha   = document.getElementById('senha').value;
	
	if (oUsuario && oSenha) {
		let bExisteUsuario = false;
		for (var i=0; i < usuarios.length; i++) {
		  if (oUsuario == usuarios[i]) {
		  	bExisteUsuario = true;
		  	if (oSenha == senhas[i]) {
				window.alert('Usuário Logado!');
			} else {
				window.alert('Senha Incorreta!');
			}
		  }
		};
		if (bExisteUsuario == false) {
			window.alert('Usuário não Cadastrado!');
		}
	} else {
		window.alert('Usuário ou Senha não Informados!')
	}
}

function cadastrar() {
	var oUsuario = document.getElementById('usuario').value;
	var oSenha   = document.getElementById('senha').value;
	
	if (oUsuario && oSenha) {
		usuarios[usuarios.length+1] = oUsuario;
		senhas[senhas.length+1] = oSenha;
		window.alert('Usuário Cadastrado!')
	} else {
		window.alert('Usuário ou Senha não Informados');
	}
}

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


