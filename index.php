<!DOCTYPE html>
<html lang="en">
<?php 
 $con = new PDO("mysql:host=database-epgal.cinrt0cz5hud.us-east-1.rds.amazonaws.com;dbname=parcial", "admin", "epgalcrede17") or die("Failed to connect to MySQL: " . mysqli_connect_error());
?>
 
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Afazeres</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Lista de Afazeres</h1>
        <div class="bg-white shadow-md rounded my-6 overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="w-1/4 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Nome</th>
                        <th class="w-1/4 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Descrição</th>
                        <th class="w-1/4 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Status</th>
                        <th class="w-1/4 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Data da Criação</th>
                    </tr>
                </thead>
                <tbody>
                <?php

$rs = $con->query("SELECT * FROM afazeres");
while($row = $rs->fetch(PDO::FETCH_OBJ)){

    echo '
    <tr>
    <th class="w-1/4 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">'.$row->titulo.' </th>
    <th class="w-1/4 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">'.$row->descricao.'</th>
    <th class="w-1/4 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">'.$row->status.'</th>
    <th class="w-1/4 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">'.$row->data.'</th>
</tr>
    ';
}

?>          
                    <!-- Adicione mais linhas conforme necessário -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
