<!DOCTYPE html>
<html lang="en">
<?php 
 $con = new PDO("mysql:host=database-epgal.cinrt0cz5hud.us-east-1.rds.amazonaws.com;dbname=parcial", "admin", "epgalcrede17") or die("Failed to connect to MySQL: " . mysqli_connect_error());
?>
  <?php

$rs = $con->query("SELECT * FROM afazeres");
while($row = $rs->fetch(PDO::FETCH_OBJ)){

    echo '
    <tr>
    <th class="w-1/4 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Nome</th>
    <th class="w-1/4 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Descrição</th>
    <th class="w-1/4 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Status</th>
    <th class="w-1/4 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Data da Criação</th>
</tr>
    ';
}

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
                    <tr class="border-b">
                        <td class="py-2 px-4 text-sm text-gray-700">Estudar Matemática</td>
                        <td class="py-2 px-4 text-sm text-gray-700">Revisar álgebra linear</td>
                        <td class="py-2 px-4 text-sm text-gray-700">Pendente</td>
                        <td class="py-2 px-4 text-sm text-gray-700">22/05/2024</td>
                    </tr>
                    <tr class="border-b bg-gray-50">
                        <td class="py-2 px-4 text-sm text-gray-700">Fazer Compras</td>
                        <td class="py-2 px-4 text-sm text-gray-700">Comprar frutas e verduras</td>
                        <td class="py-2 px-4 text-sm text-gray-700">Concluído</td>
                        <td class="py-2 px-4 text-sm text-gray-700">21/05/2024</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4 text-sm text-gray-700">Limpar a Casa</td>
                        <td class="py-2 px-4 text-sm text-gray-700">Aspirar e passar pano</td>
                        <td class="py-2 px-4 text-sm text-gray-700">Em Progresso</td>
                        <td class="py-2 px-4 text-sm text-gray-700">20/05/2024</td>
                    </tr>
                    <!-- Adicione mais linhas conforme necessário -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
