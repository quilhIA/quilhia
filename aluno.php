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
$query = "SELECT nome, serie,data FROM alunos where id = ".$_GET['id']; 
$result_query = mysqli_query($link, $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() ); 
$row = mysqli_fetch_array( $result_query )

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
                    <img src="quilha.jpeg">
                </a>
           </div>
            <div class="col-sm-9" style="margin-top: 15px;">
                <h1>QuilhIA</h1>
                <h5>Educação e segurança juntas na direção certa</h5>
           </div>           
       </div>
    </header>    
    <body>
      
        <div class="row">
            <div class="col-sm-4">      
                <div class="row">
                    <div style="border-radius: 25px; background: rgb(10, 186, 181); margin-left: 10px;" class="col-sm-11">
                        <b>Informações do Aluno</b>
                    </div>
                </div>
                <br clear="all"/>
                <div class="row">
                    <div class="col-sm-4">
                        <img src="OIP.jpg" width="150">
                    </div>
                    <div class="col-sm-6" style="margin-left: 20px;">
                        <?php 
                            # Exibe os registros na tela 
                            echo $row['nome']."<br/>".$row['serie']."<br/>Escola XPTO"; 
                 
                        ?> 
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div style="border-radius: 25px; background: rgb(10, 186, 181)" class="col-sm-11">                    
                        <b>Última rota</b>
                    </div>
                </div>
                <br clear="all"/>                
                <div class="row">
                    <img src="imagem.png" width="250" height="250" style="vertical-align:middle;margin:0px 50px">
                </div>                
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div style="border-radius: 25px; background: rgb(10, 186, 181)" class="col-sm-11">                      
                        <b>Informações última rota</b>
                    </div>
                </div>
                <br clear="all"/>                
                <div class="row">
                    Horário de Checkin na Escola:                 
                    <?php 
                       echo $row['data']; 
                    ?>
                </div>   
                <div class="row">
                    <div style="border-radius: 25px; background: #FA8072; color: white;" class="col-sm-6">
                    <?php 
                       if ($_GET['id'] == 1) {
                           echo "Atrasado";
                       } 
                    ?>
                    </div>
                </div>  
            </div>             
        </div> 
        <br clear="all"/>
        <br clear="all"/>
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div style="border-radius: 25px; background: rgb(10, 186, 181); margin-left: 10px;" class="col-sm-11">
                        <b>Últimos horários</b>
                    </div>
                </div>
                <br clear="all"/>   
                <div class="row">
                    <div style="border-radius: 25px; background: #FA8072; color: white; margin-left:30px;" class="col-sm-3">
                        Atrasado
                    </div>
                    <div style="border-radius: 25px; background: #98FB98; color: white; margin-left:10px;" class="col-sm-3">
                        No horário
                    </div>
                    <div style="border-radius: 25px; background: #F4A460; color: white; margin-left:10px;" class="col-sm-3">
                        Falta
                    </div>                    
                </div>                
                <div class="container">    
                    <table class="bordered striped" >
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Checkin</th>
                                <th>Checkout</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>15/12/2023</th>
                                <th>07:12:29</th>
                                <th></th>
                                <th>                    
                                    <div style="border-radius: 25px; background: #FA8072; color: #FA8072;" class="col-sm-6">
                                        1
                                    </div>
                                </th>
                            </tr>                            
                            <tr>
                                <th>14/12/2023</th>
                                <th></th>
                                <th></th>
                                <th>                    
                                    <div style="border-radius: 25px; background: #F4A460; color: #F4A460;" class="col-sm-6">
                                        1
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th>13/12/2023</th>
                                <th>06:59:34</th>
                                <th>12:59:34</th>
                                <th>                    
                                    <div style="border-radius: 25px; background: #98FB98; color: #98FB98;" class="col-sm-6">
                                        1
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th>12/12/2023</th>
                                <th>07:59:34</th>
                                <th>12:30:34</th>
                                <th>                    
                                    <div style="border-radius: 25px; background: #FA8072; color: #FA8072;" class="col-sm-6">
                                        1
                                    </div>
                                </th>
                            </tr>     
                            <tr>
                                <th>11/12/2023</th>
                                <th>07:27:34</th>
                                <th>12:10:34</th>
                                <th>                    
                                    <div style="border-radius: 25px; background: #FA8072; color: #FA8072;" class="col-sm-6">
                                        1
                                    </div>
                                </th>
                            </tr>                             
                        </tbody>
                    </table>
                </div>                
            </div> 
            <div class="col-sm-6">
                <div class="row">
                    <div style="border-radius: 25px; background: rgb(10, 186, 181); margin-left: 10px;" class="col-sm-11">
                        <b>Informações do QuilhIA (Últimos 5 dias)</b>
                    </div>
                </div>
                <br clear="all"/> 
                <div class="row">
                    <div class="col-sm-4">
                        <div class="col-sm-12 card">
                            <div class="card-body">
                                <h6 class="card-text">Dias de Atraso</h6>
                                <p class="card-text">3</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="col-sm-12 card">
                            <div class="card-body">
                                <h6 class="card-text">Dias no Horário</h6>
                                <p class="card-text">1</p>
                            </div>
                        </div>
                    </div>  
                    <div class="col-sm-4">
                        <div class="col-sm-12 card">
                            <div class="card-body">
                                <h6 class="card-text">Dias de Falta</h6>
                                <p class="card-text">1</p>
                            </div>
                        </div>
                    </div>                      
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="col-sm-12 card">
                            <div class="card-body">
                                <h6 class="card-text">Média Horário Checkin</h6>
                                <p class="card-text">07:20:01</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="col-sm-12 card">
                            <div class="card-body">
                                <h6 class="card-text">Média Horário Checkout</h6>
                                <p class="card-text">12:30:34</p>
                            </div>
                        </div>
                    </div>  
                </div>                
            </div>

        </div>
        
    </body>            
</html>