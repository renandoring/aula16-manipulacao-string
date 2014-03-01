<?php
	// Cria uma variável e armazena uma conteúdo para ser preenchido
	$minhaString = 'Conteudo';
	// Cria uma variável para armazenar a string que irá preencher a string criada
	$preencher = '%';
	// Preenche a string com 20 caracteres, ou seja, 12 vezes o %, começando pelo lado direito
	echo str_pad($minhaString,20,$preencher).'<br>';
	// Preenche a string com 20 caracteres, ou seja, 12 vezes o %, começando pelo lado esquerdo
	echo str_pad($minhaString,20,$preencher,STR_PAD_LEFT).'<br>';
	// Preenche a string com 20 caracteres, ou seja, 12 vezes o %, de ambos os lados
	echo str_pad($minhaString,20,$preencher,STR_PAD_BOTH).'<br>';
?>