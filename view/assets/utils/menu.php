<div class="w3-row">
    <div class="w3-col m3 w3-padding-16 w3-center" >
        <a href="index.php">
            <img src="view/assets/newsPhoto/journalism.png" style="width: 30px"> <span style="color: #14224a">MGLSI News</span></a>
    </div>
    <div class="w3-col m9 menu">
        <ul>
            <li><a href="index.php">Tout</a></li>
            <?php foreach ($categorieList as $categorie): ?>
                <li><a href="index.php?action=category&id=<?= $categorie['id'] ?>"><?= $categorie['libelle'] ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>
</div>

<style>
    .menu li{
        list-style-type: none;
        font-size: 15px;
        display: inline;
        padding: 7px;
    }
</style>