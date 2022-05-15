<!DOCTYPE html>
<?php

include 'connexionbase.php';

?>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h2>Bordered Table</h2>
<p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
<table class="table table-bordered">
<thead>
<tr>
<th>Codigo</th>
<th>Nome</th>
<th>Raça</th>
<th>Cor</th>
<th>Altura</th>
<th>Peso</th>
<th>Ação</th>
</tr>
</thead>
<tbody>
<?php

$sql = "SELECT * FROM ANIMAIS";
$resultado = mysqli_query($conexao,$sql);
while ($linhas = mysqli_fetch_array($resultado)){
?>
<tr>
<td><?php echo $linhas[0];?></td>
<td><?php echo $linhas[1];?></td>
<td><?php echo $linhas[2];?></td>
<td><?php echo $linhas[3];?></td>
<td><?php echo $linhas[4];?></td>
<td><?php echo $linhas[5];?></td>
<td><a href="#myModal" class="btn btn-info" role="button" data-toggle="modal">Link Button</a></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>


<!-- The Modal -->
<div class="modal" id="myModal">
<div class="modal-dialog">
<div class="modal-content">

<!-- Modal Header -->
<div class="modal-header">
<h4 class="modal-title">Modal Heading</h4>
<?php $nome = $_POST['nome'];?>
<button type="button" class="close" data-dismiss="modal">×</button>
</div>

<!-- Modal body -->
<div class="modal-body">
Modal body..
</div>

<!-- Modal footer -->
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>
</body>
</html>
