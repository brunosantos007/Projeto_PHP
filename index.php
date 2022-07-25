<?php
include_once("header.php");
include_once("url.php");
include_once("data/categorias.php");
include_once("data/posts.php");
?>



<main>
    <h1 class="titles">Bem-vindo ao site do Bruno</h1>
    <p class="titles">O seu Blog de Programação</p>
    <div class="container-conteudos">
        <?php foreach($posts as $indice): ?>
            <div class="container-caixa">
                <img src="<?= $url ?>imgs/<?= $indice["img"] ?>" alt="<?= $indice["title"] ?>"> 
                <h2 class="container-title">
                    <a href="<?= $url ?>clicaTitulo.php?id=<?= $indice["id"] ?>"><?= $indice["title"] ?></a>
                </h2>
                <p><?= $indice["description"] ?></p>
                <div class="tags-container">
                    <?php  foreach($indice["tags"]as $tags) :?>
                        <a href="#"><?=  $tags ?></a>
                    <?php endforeach;  ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


</main>