<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Morpion</title>
</head>
<body>
            <!--    Done ! Deux joueurs : X et O
                
                    Done ! Pour jouer, il faut cliquer sur une case
                        
                    Done ! Il y a 9 cases : 3 * 3
                        
                    Done ! On ne peut pas cliquer sur une case déjà remplie
                        
                    Done ! On joue l'un après l'autre (à tour de rôle), alternance des symboles des joueurs à chaque coup (quand c'était à O de jouer, c'est donc à X, et inversement).
                        
                    On ne joue qu'un seul coup à la fois
                        
                    Pour gagner :
                        
                    
                            
                    Aligner trois symboles IDENTIQUES horizontalement (3 lignes)
                            
                    Aligner trois symboles IDENTIQUES verticalement (3 colonnes)
                            
                    Aligner trois symboles IDENTIQUES en diagonale (2 diagonales)
                        
                        
                        
                    On ne peut plus jouer une fois que quelqu'un a gagné
                        
                    Quand quelqu'un a gagné : on propose de refaire une partie en cliquant sur un bouton
                        
                    EGALITE : quand le tableau est plein ET que personne ne gagne sur le dernier coup
                        
                    En cas d'égalité : on propose de refaire une partie en cliquant sur un bouton 
            -->
    <div id="board"></div>


    <script>
        let player1 = window.prompt('Player 1, Type your fighter! :', 'X')
        let player2 = window.prompt('Player 2, Type your fighter! :', 'O')
        let turn = 1
        const box = document.createElement('div')
        box.classList.add('box')

        const board = document.querySelector('#board')

        for (let i = 0; i < 9; i++) {            
            let newBox = box.cloneNode()
            board.appendChild(newBox)            
            newBox.addEventListener('click', function(){
                if(newBox.innerText == ""){
                    if(turn % 2 == 0){
                        newBox.innerText = player2
                    } else {
                        newBox.innerText = player1
                    } 
                }                
                turn++                
            })
        }
        let win = document.getElementById('board').childNodes
        win[0] == win[1] == win[2] ? alert('You Win!!!') : ""
        
    

    </script>
</body>

</html>