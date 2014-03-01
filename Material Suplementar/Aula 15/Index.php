<?php
	// Cria uma variável para armazenar o caminho do arquivo a ser copiado
	$arquivo = 'D:/copiarEmJava.txt';
	// Cria uma variável para armazenar o caminho no qual o arquivo deve ser copiado
	$destino = 'C:/Users/Anderson/Desktop/copiarEmJavaCopy.txt';
	// Verifica se o arquivo informado existe
	if(file_exists($arquivo)){
		// Se o arquivo existir copia o arquivo
		if(copy($arquivo,$destino)){
			// Exibe uma mensagem de sucesso
			echo 'Arquivo copiado com sucesso';
		}else{
			// Caso ocorra um erro, exibe uma mensagem de erro
			echo 'Erro ao copiar';
		}
	}else{
		// Caso o arquivo não exista, exibe uma mensagem de erro
		echo "O arquivo não existe";
	}
?>