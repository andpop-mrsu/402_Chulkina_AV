<?php
    namespace arever\cold_hot\Controller;
    use function arever\cold_hot\View\showGame;

    function startGame(){
        echo "Game started".PHP_EOL;
        showGame();
    }
?>