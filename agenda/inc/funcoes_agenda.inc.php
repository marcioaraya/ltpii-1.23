<?php 

function grava_agenda($ag) {

	$arq = fopen('agenda.txt', 'w');

	foreach($ag as $c) {
	
		$linha = json_encode($c).chr(10);
		$size = fwrite($arq, $linha);
		
	}
	
	fclose($arq);


}


function le_agenda(){
	$arq = fopen('agenda.txt', 'r');

	while ($linha=fgets($arq)) {

		$c = json_decode($linha, true);

		$ag[] = $c;
		
	}
	
	fclose($arq);

	return $ag;

}


function cria_contato($n, $t) {
    
$ag = le_agenda();

// buscar o maior id e acrescentar 1 para inserir
// $i = (maior id) + 1;
$i = max_id($ag) + 1;
$ag[] = array("id"=>$i, "nome"=>$n, "fone"=>$t);

grava_agenda($ag);

}

function max_id($ag) {
    $id = 0;
    foreach ($ag as $c) {
        if ($c["id"]>$id) {
            $id = $c["id"];
        }
    }
    return $id;
}





function exclui_contato($id) {
    
	$ag = le_agenda();

	// localizar o contato que tem id igual ao parametro informado
	//
	// $p irá conter a posição do vetor $ag
	// $c irá conter os dados do contato em um vetor 
	//        com formato array("id"=>1, "nome"=>"marcio", "fone"=>"99991-1234")
	//        obs: os valores são apenas para exemplificar
	//
	foreach($ag as $p=>$c) {
		if ($c["id"] == $id) {
			unset($ag[$p]); // exclui linha do vetor $ag
		}
		
	}

	grava_agenda($ag);

}


function recupera_contato($id) {
    
	$ag = le_agenda();

	// localizar o contato que tem id igual ao parametro informado
	//
	// $p irá conter a posição do vetor $ag
	// $c irá conter os dados do contato em um vetor 
	//        com formato array("id"=>1, "nome"=>"marcio", "fone"=>"99991-1234")
	//        obs: os valores são apenas para exemplificar
	//
	foreach($ag as $p=>$c) {
		if ($c["id"] == $id) {
			return $c; // devolve vetor com dados do contato localizado
		/// ou return $ag[$p];
		}
		
	}
}

function altera_contato($id, $n, $t) {
    
	$ag = le_agenda();

	foreach($ag as $p=>$c) {
		if ($c["id"] == $id) {
			// altera nome e telefone do contato localizado
			$ag[$p]["nome"] = $n;
			$ag[$p]["fone"] = $t;
			// $ag[$p]=array("id"=>$id, "nome"=> $n, "fone"=>$t);
		}
		
	}
	
	grava_agenda($ag);
}














