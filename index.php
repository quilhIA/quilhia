<?php 

# Substitua abaixo os dados, de acordo com o banco criado
$user = "id21671076_quilha"; 
$password = "Qu1lh4_1234"; 
$database = "id21671076_quilhathewave"; 

# O hostname deve ser sempre localhost 
$hostname = "localhost"; 

# Conecta com o servidor de banco de dados 
$link = mysqli_connect( $hostname, $user, $password, $database ) or die( ' Erro na conexão ' ); 

# Executa a query desejada 
$query = "SELECT id, nome, serie,data FROM alunos"; 
$result_query = mysqli_query($link, $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() ); 
?>


<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">  
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>          
    </head>
    <header>
        <div class="row">        
            <div class="col-sm-3">
                <a href="index.php">
                    <img src="quilha.jpeg" width="200">
                </a>
           </div>
           <div class="col-sm-9">
                <h1>QuilhIA</h1>
                <h5>Educação e segurança juntas na direção certa</h5>
           </div>           
       </div>
    </header>    
        <body>
        <div class="row">
            <div style="border-radius: 25px; background: #C0C0C0; color: white; margin-left:30px;" class="col-sm-3">
                <a href='escola.php'>Informações da Escola</a>
            </div>
        </div>             
        <div class="col-sm-8">    
            <table class="bordered striped" >
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Escola</th>
                        <th>Série</th>
                        <th>Status</th>                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        # Exibe os registros na tela 
                        while ($row = mysqli_fetch_array( $result_query )) { 
                            if ($row['id'] == 2) {
                                echo "<tr><td><a href='aluno.php?id=".$row['id']."'>".$row['nome']."</a></td><td>Escola The Wave</td><td>". $row['serie']."</td>"
                         ?>        
                                <td>
                                    <div style='border-radius: 25px; background: #FA8072; color: #FA8072;' class='col-sm-6'>
                                        <a href="#" onclick="window.open('https://quilhathewave.000webhostapp.com/alertanegativo.php', 'Titulo da Janela', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=770, HEIGHT=400');">Alerta</a>
                                    </div>
                                </td>
                                </tr> 
                        <?php 
                            } else {
                                echo "<tr><td><a href='aluno.php?id=".$row['id']."'>".$row['nome']."</a></td><td>Escola The Wave</td><td>". $row['serie']."</td><td>                                    <div style='border-radius: 25px; background: #98FB98; color: #98FB98;' class='col-sm-6'>
                                        1
                                    </div></td></tr>"; 
                            }
                            
                        }            
                    ?>
                </tbody>
            </table>
        </div>
        <br clear="all" />
        <div class="row">
            <div style="border-radius: 25px; background: #FA8072; color: white; margin-left:30px;" class="col-sm-3">
                Checkin não realizado no dia
            </div>
            <div style="border-radius: 25px; background: #98FB98; color: white; margin-left:10px;" class="col-sm-3">
                Checkin realizado no dia
            </div>
        </div>        
    </body>            
</html>