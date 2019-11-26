<?php
  // inclui definicao da funcao conecta()
  require('./conexao.php');
  // executa a funcao conecta retornando uma conexao
  $mysqli = conecta();

?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>Introdução ao HTML / Projeto Programando Sonhos</title>
        <meta name="author" content="Nome do Autor">
        <meta name="description" content="Introdução ao HTML">
        <meta name="keywords" content="HTML,CSS,Projeto Programando Sonhos,PBH">        
        
    	<link href="css/estilos.css" rel="stylesheet" type="text/css">

      <!--
      <script src="https://cdnjs.com/libraries/jquery.mask"></script>
      <script>
        $(document).ready(function(){
          alert('pagina carregada!');
          $('#cpf').mask('000.000.000-00', {reverse: true});
        });
      </script>
      -->
    </head>
    
<body>  
    
    <header>
    
         <h1>Projeto Programando Sonhos</h1>

         <h2>Introdução ao HTML</h2>

    </header>
    
    <section id="exemplo">
    
         <h2>Formulário de Inscrição</h2>

        <?php
            $nome         = $_POST['nome']       ?? '';
            $nascimento   = $_POST['nascimento'] ?? '';
            $cpf          = $_POST['cpf']        ?? '';
            $estado_civil = $_POST['estado']     ?? '';

            // só insere se houve postagem
            if($_POST) {
              // cria query de inserção no banco
              $query = "INSERT INTO dados_pessoais(nome, nascimento, cpf, estado_civil)
                        VALUES('$nome', '$nascimento', $cpf, '$estado_civil')";
              // executa query de inserção no banco
              mysqli_query($mysqli, $query);
              // verfica se houve erro
              if(mysqli_errno($mysqli)) {
                echo "<b style='color:red'>".mysqli_error($mysqli)."</b><br>";
              } else {
                echo "<b style='color:green'>Registro inserido com sucesso!</b><br>";
              }
            }

        ?>
             
         <form name="inscricao" method="post" action="">
         <p><small>Os campos marcados com <span style="color:red; font-weight:bold; font-size:18px">*</span> são de preenchimento obrigatório.</small></p>

        <!-- -->
        <fieldset>
          <legend>Dados Pessoais</legend>
          <p>
            <label for="nome">Nome <span class="asterisco">*</span></label>
            <input name="nome" type="text" id="nome" size="50" maxlength="50" required>
            <label for="nascimento">Data de nascimento</label>
            <input name="nascimento"  type="date" id="nascimento" size="12" maxlength="10" placeholder="__/__/____">
          </p>
          <p>
            <label for="cpf">CPF <span class="asterisco">*</span></label>
            <input name="cpf" type="text" id="cpf" size="12" maxlength="11" required placeholder="Apenas números">
          </p>
          <p>
            <label>Estado Civil</label>
            <label><input type="radio" name="estado" value="solteiro" id="estado-civil_1">Solteiro </label>
            <label><input type="radio" name="estado" value="casado"   id="estado-civil_2">Casado </label>
            </label>
            <br>
          </p>
        </fieldset>
        
        <!-- 
        <fieldset>
          <legend>Endereço</legend>
          <p>
            <label for="cep">CEP <span class="asterisco">*</span></label>
            <input name="cep" type="text" id="cep" size="12" maxlength="9" required>
          </p>
          <p>
            <label for="tipo-endereco">Tipo</label>
            <select name="tipo-endereco" id="tipo-endereco">
              <option>selecione...</option>
              <option>Rua</option>
              <option>Alameda</option>
              <option>Avenida</option>
            </select>
          <br>    
          <label for="logradouro">Logradouro</label>
          <input name="logradouro" type="text" id="logradouro" size="50" maxlength="50">
          <label for="numero">Número
          <input name="numero" type="text" id="numero" size="7" maxlength="5"></label>
          <label for="complemento">Complemento</label>
          <input name="complemento" type="text" id="complemento" size="7" maxlength="5">
          </p>
        </fieldset>
        
        
        <fieldset>
          <legend>Formação Acadêmica </legend>
          <p>
            <label for="escolaridade">Escolaridade <span class="asterisco">*</span></label>
            <input name="escolaridade" type="text" id="escolaridade" size="55" maxlength="70" required>
          </p>
          <p>
            <label>Outros conhecimentos:</label>
            <label><input type="checkbox" name="outroscursos1" value="checkbox1" id="outroscursos1">Inglês básico</label>
            <label><input type="checkbox" name="outroscursos1" value="checkbox2" id="outroscursos2">Informática básica</label>
          </p>
          <p>
            <label for="info">Mais informações:</label>
            <br>
            <textarea maxlength="250" id="info"></textarea>
          </p>
        </fieldset>
        
        -->                 
         <input type="submit" name="acessar" id="acessar" value="ENVIAR INSCRIÇÂO">&nbsp;&nbsp;<input type="reset" name="cancelar" id="cancelar" value="CANCELAR">         

      </form>

      <hr>
      
         <h2>Relação de Inscritos</h2>
    
      <table class="inscritos">
        <tr>
          <th width="50%" scope="col">Nome</th>
          <th width="5%" scope="col">Idade</th>
          <th width="35%" scope="col">Escolaridade</th>
          <th width="5%" scope="col">Inglês </th>
          <th width="5%" scope="col">Informática</th>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>S/N</td>
          <td>S/N</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
      
      <ul class="paginacao"> <li><<</li> <li class="atual">1</li> <li>2</li> <li>3</li> <li>4</li> <li>5</li> <li>>></li> </ul>
      
    <h4>Total de inscritos:&nbsp;</h4>    

    </section>
    
    <footer>   
    
         <div>
                
           <div class="logo-prodabel">
                <img src="img/logo-prodabel.png" alt="palavra prodabel na cor verde" title="Empresa de Informática e Informação de Belo Horizonte">
           </div>
                    
           <div class="logo-pbh">
				<img src="https://prefeitura.pbh.gov.br/sites/default/files/estrutura-de-governo/comunicacao/2019/PBH75_7.png" alt="brasão da prefeitura de belo horizonte" title="Prefeitura de Belo Horizonte">
           </div>
                    
         </div>            

   </footer>
            
<!-- ======================================================================= -->
</body>
</html>
