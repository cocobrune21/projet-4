<?php ob_start(); ?>

<div class="adminAutor">
    <h4>Bonjour Jean !</h4>
    <p>
        <img src=".\public\images\Typewriter.jpg" class="imgTyp">
    </p>
    <div class="navAutor">
        <ul>
            <li><a href="#write">Ecrire un nouveau chapitre </a></li>
            <li><a href="index.php?action=viewEditChapter&id=13">Modifier un chapitre </a></li>
            <li><a href="index.php?action=getAllComment">Accéder aux commentaires </a></li>
            <li><a href="index.php?action=chapterView&id=13&page=1">Retourner sur le site </a></li>
        </ul>
    </div>
    <h5>Ecrire un nouveau chapitre</h5>
</div>

<div id="write">
    <div class="input-group">
        <form class="backEnd" action="index.php?action=addChapter" method="post">
            <input type="text" class="form-control titleName" id="title" name="title"
                placeholder="Titre du chapitre ...">
            <input type="number" class="form-control" id="numChapter" name="numChapter"
                placeholder="Numéro du chapitre ...">
            <textarea id="script" name="content"></textarea>
            <span class="input-group-btn">
                <input type="submit" class="btn btn-primary" id="btn-chat" value="Enregistrer">
            </span>
        </form>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require 'view/layout.php'; ?>