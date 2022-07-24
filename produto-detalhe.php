<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$id = $_GET['id'];

?>
<div class = "container">
<div class = "col d-flex justify-content-around mt-5">
<div class="w-50">
             <h1 class ="text-white"><?php echo $produtos[$id]['nome'];?></h1>
             <h2 class ="text-white"><?php echo $produtos [$id]['descricao'];?></h2>
             <h3 class ="text-white"><?php echo $produtos [$id]['preco'];?></h3>
             <p class="text-white"><b>Categoria: </b><?php echo $produtos[$id]['categoria'];?></p>
             <a href="index.php"class="">Voltar</a>
             <a href="cartao.php">Cartão</a>
</div>
<div class="w-50">
             <img src ="./content/<?php echo $produtos[$id]['imagem']?>">
   </div>
   </div> 

</div>
<?php
// include do footer
include_once './includes/_footer.php';
?>