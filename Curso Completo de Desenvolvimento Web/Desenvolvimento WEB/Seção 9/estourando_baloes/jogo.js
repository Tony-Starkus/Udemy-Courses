var timerId = null; //Variável que armazena a chamada da função timeout.

function iniciaJogo(){

	var url = window.location.search;

	// usando o "replace", você encontra uma variavel e substitue ela por outra. Neste caso, estou eliminando o "?".
	var nivel_jogo = url.replace("?", "");

	var tempo_segundos = 0;

	//1 fácil -> 120 segundos
	if (nivel_jogo == 1) {
		tempo_segundos = 120; 
	}

	//2 normal -> 60 segundos
	if (nivel_jogo == 2) {
		tempo_segundos = 60;
	}

	//3 difícil -> 30 segundos
	if (nivel_jogo == 3) {
		tempo_segundos = 30;
	}

	//inserindo segundos
	document.getElementById('cronometro').innerHTML = tempo_segundos;

	//quantidade de balões
	var qtde_baloes = 80;

	//imprimir quantidade de balões inteiros
	document.getElementById('baloes_inteiros').innerHTML = qtde_baloes;

	//imprimir quantidade de balões estourados
	document.getElementById('baloes_estourados').innerHTML = 0;

	cria_baloes(qtde_baloes);

	contagem_tempo(tempo_segundos + 1);

}

function contagem_tempo(segundos){

	segundos = segundos - 1;

	if(segundos == -1){
		clearTimeout(timeId);
		game_over();
		return false;
	}

	document.getElementById('cronometro').innerHTML = segundos

	timeId = setTimeout("contagem_tempo("+segundos+")", 1000);
}

function game_over(){
	remove_eventos_baloes();
	alert('Fim do jogo, você não conseguiu estourar todos os balões a tempo')
}

function cria_baloes(qtde_baloes){

	for(var i = 1; i <= qtde_baloes; i++){
		var balao = document.createElement("img");
		balao.src = 'imagens/balao_azul_pequeno.png';
		balao.style.margin = '10px';
		balao.id = 'b'+ i;
		balao.onclick = function(){ estourar(this) }

		document.getElementById('cenario').appendChild(balao);

	}

}

function estourar(e){
	var id_balao = e.id;
	document.getElementById(id_balao).setAttribute("onclick", "");
	document.getElementById(id_balao).src = 'imagens/balao_azul_pequeno_estourado.png'

	pontuacao(-1);
}


function pontuacao(acao){
	var baloes_inteiros = document.getElementById('baloes_inteiros').innerHTML;
	var baloes_estourados = document.getElementById('baloes_estourados').innerHTML;
	baloes_inteiros = parseInt(baloes_inteiros);
	baloes_estourados = parseInt(baloes_estourados);

	baloes_inteiros = baloes_inteiros + acao;
	baloes_estourados = baloes_estourados - acao;

	document.getElementById('baloes_inteiros').innerHTML = baloes_inteiros;
	document.getElementById('baloes_estourados').innerHTML = baloes_estourados;

	situacao_jogo(baloes_inteiros);
}

function situacao_jogo(baloes_inteiros){

	if(baloes_inteiros == 0){
		alert('Parabéns, você conseguiu estourar todos os balões a tempo')
		parar_jogo();
	}

}

function parar_jogo(){
	clearTimeout(timeId);
}

function remove_eventos_baloes(){
	var i = 1 //contador para recuperar balões por id

	//percorre o elemento de acordo com o id e só irá sair do quando não houver correspondência com elemento
	while(document.getElementById('b'+ 1)){
		//retira o evento onclick do elemento
		document.getElementById('b' + 1).onclick = '';
		i++; //faz a interação da variável i
	}
}