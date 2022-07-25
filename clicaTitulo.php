<?php

include_once("header.php");

if(isset($_GET["id"])){
    $urlDoId = $_GET["id"];
    $pegarIndice;

    foreach($posts as $indice){
        if($indice["id"] == $urlDoId){
            $pegarIndice = $indice;
        }
    }

}

?>

<main>

    <div id="organizando">
        <h1><?= $pegarIndice["title"] ?></h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque commodi ab odio! Commodi eum excepturi, dolorum officiis facilis officia harum, voluptate fuga recusandae quae doloribus quia et, asperiores molestiae sint.
        Saepe corrupti, dicta voluptatibus et odit nihil aliquam ipsam, similique corporis molestiae tenetur vel suscipit officia ab vero beatae minima ipsa. Quisquam, praesentium unde possimus nulla dignissimos placeat aperiam natus.
        Nesciunt, porro laborum quisquam excepturi mollitia animi labore quidem, vero similique nemo nam repellendus. Consequatur fuga, consectetur in molestias, aut optio voluptates debitis ab sapiente iusto commodi amet possimus. Nisi!
        Quia nobis distinctio iusto modi vero porro quasi saepe! In quibusdam eveniet nihil provident earum nam ex quia quaerat modi dolorem exercitationem unde saepe, maxime aliquid, tenetur eum, amet nostrum.
        Suscipit cumque fugiat molestiae magnam maxime! Eaque, at labore! Illo, culpa sunt quisquam veritatis sit porro magnam laudantium ducimus omnis dolorum magni quae, blanditiis modi similique cum vel neque! Quis.
    </p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque commodi ab odio! Commodi eum excepturi, dolorum officiis facilis officia harum, voluptate fuga recusandae quae doloribus quia et, asperiores molestiae sint.
        Saepe corrupti, dicta voluptatibus et odit nihil aliquam ipsam, similique corporis molestiae tenetur vel suscipit officia ab vero beatae minima ipsa. Quisquam, praesentium unde possimus nulla dignissimos placeat aperiam natus.
        Nesciunt, porro laborum quisquam excepturi mollitia animi labore quidem, vero similique nemo nam repellendus. Consequatur fuga, consectetur in molestias, aut optio voluptates debitis ab sapiente iusto commodi amet possimus. Nisi!
        Quia nobis distinctio iusto modi vero porro quasi saepe! In quibusdam eveniet nihil provident earum nam ex quia quaerat modi dolorem exercitationem unde saepe, maxime aliquid, tenetur eum, amet nostrum.
        Suscipit cumque fugiat molestiae magnam maxime! Eaque, at labore! Illo, culpa sunt quisquam veritatis sit porro magnam laudantium ducimus omnis dolorum magni quae, blanditiis modi similique cum vel neque! Quis.
        
    </p>
    <aside>
        <div class="nav-aside">
            <h3 class="cor-tags">Tags</h3>
                <ul>
                <?php foreach($pegarIndice["tags"] as $tags):  ?>
                    <a href="#"><?= $tags ?></a>
                <?php endforeach; ?>
                </ul>
                <h3 class="cor-tags">Categorias</h3>
                <ul>
                <?php foreach($categorias as $category):  ?>
                    <a href="#"><?= $category ?></a>
                <?php endforeach; ?>
                </ul>
        </div>
    </aside>
    </div>
    
</main>