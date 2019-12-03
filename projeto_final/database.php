<?php

/**
 * Definicao da funcao conecta: 
 * essa funcao realiza conexao de acordo com os parametros passados
 * @param string $servidor
 * @param string $usuario
 * @param string $senha
 * @param string $banco
 * @return conexao com BD
 * @author Cecilia Barbosa
 */
function conecta($servidor, $usuario, $senha, $banco)
{
    // conexao com o banco
    $mysqli = mysqli_connect($servidor, $usuario, $senha, $banco);
    if(mysqli_connect_errno()) {
        echo '<b style="color:red">ERRO: '.mysqli_connect_error()."</b>";
    }

    return $mysqli;
}

function insereDados($mysqli, 
                     $nome='', 
                     $cpf='', 
                     $data_nasc='', 
                     $estado_civil='')
{

    $cpf = str_replace('.', '', $cpf);
    $cpf = str_replace('-', '', $cpf);
    if(!is_numeric($cpf)) {
        echo 'cpf inválido!';
        return false;
    }
    $cpf = intval($cpf);

    // constroi a query de insercao de dados de uma pessoa
    $query = "INSERT INTO 
    dados_pessoais(nome, data_nasc, cpf, estado_civil)
    VALUES('$nome', '$data_nasc', '$cpf', '$estado_civil')";

    // executa a query de insercao
    mysqli_query($mysqli, $query);
    if(mysqli_errno($mysqli)) {
        echo mysqli_error($mysqli);
    }
}

function getPessoas($mysqli, $paginaCorrente=1, $qtdPorPagina=5)
{
    $listaPessoa = [];
    $offset = ($paginaCorrente - 1) * $qtdPorPagina;
    $query = "SELECT nome, data_nasc 
              FROM dados_pessoais
              ORDER BY nome ASC
              LIMIT $qtdPorPagina
              OFFSET $offset";
    $resultado = mysqli_query($mysqli, $query);
    if(mysqli_errno($mysqli)) {
      echo mysqli_error($mysqli);
    } else {
      while($linha = mysqli_fetch_assoc($resultado)) {
        array_push($listaPessoa, $linha);
      }
    }

    return $listaPessoa;
}

function getPessoa($mysqli, $id)
{
    $pessoa = null;
    $query = "SELECT *
              FROM dados_pessoais
              WHERE id = $id";
    $resultado = mysqli_query($mysqli, $query);
    if(mysqli_errno($mysqli)) {
      echo mysqli_error($mysqli);
    } else {
      $pessoa = mysqli_fetch_assoc($resultado);
    }
    return $pessoa;
}

function getQtdTotalPessoas($mysqli)
{
  $query = 'SELECT count(*) as qtd FROM dados_pessoais';
  $resultado = mysqli_query($mysqli, $query);
  if(mysqli_errno($mysqli)) {
    echo mysqli_error($mysqli);
    return false;
  }
  $qtd = mysqli_fetch_assoc($resultado);
  return $qtd['qtd'];
}

function deletePessoa($mysqli, $id)
{
  $query = "DELETE FROM dados_pessoais WHERE id = $id";
  $resultado = mysqli_query($mysqli, $query);
  if(mysqli_errno($mysqli)) {
    echo mysqli_error($mysqli);
    return false;
  }
  return true;
}
