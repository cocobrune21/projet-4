<?php

require_once('model/FrontModel.php');

function frontView()
{
    $frontModel = new FrontModel();
    $req = $frontModel-> getChapters();
    $comments = $frontModel-> getCommentsAutor();
    $postsVisitors = $frontModel-> getPostsVisitors();

    require 'view/frontend/indexView.php';
}

