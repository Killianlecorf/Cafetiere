<?php

/* -si il y a mis 0.40 e dans la machine le café ce prépare 
 -si il y a moins la machine attend qu'il y aille assez d'argent 
 - si il y a eu trop de piece , rendre la monnaie 
 - pouvoir mettre que des pieces de 0.10 , 0.20 , 0.50 , 1 e , 2 e 
 */ 


$action = null;
$piece = null;

while ( $action = readline( 'Que voulez vous ? ' . "\n" )) {
    if ( $action == 1 ) {
        echo 'Vous avez choisit un café , Le prix est de 0.40 e ' . "\n";
                while ( $action != 0.40 )
                {
                    $piece = 0 ;
                    $piece = (float)readline("insérer les pièces suffisantes \n" );
                        if ( $piece == 0.10)
                        {
                        echo 'Plus que 0.30 e pour votre café' . "\n ";
                            $piece = (float)readline("insérer les pièces suffisantes \n" );
                            if ($piece == 0.20 ) {
                                echo 'Il vous manque 0.1 e ' ; 
                                $piece = (float)readline("insérer les pièces suffisantes \n" );  
                                if ($piece == 0.10){
                                    echo ' votre café est en cours de préparation ';
                                }
                                else {
                                    echo 'commande inconnue'; 
                                }                           
                            } 
                            elseif ($piece == 0.1) 
                            {
                              echo ' Il vous manque 0.20 e'. " \n";
                              $piece = (float)readline("insérer les pièces suffisantes \n" );  
                              if ($piece == 0.2 ) {
                                  echo 'Le café est en préparation';
                              }
                              elseif ( $piece == 0.1) 
                              {
                                  echo 'Il manque 0.1 e ';
                                  $piece = (float)readline("insérer les pièces suffisantes \n" );
                                  if ($piece == 0.1){
                                      echo 'votre café est en préparation ';
                                  }

                              }

                            }
                            else 
                            {
                                echo 'commande inconnue ';
                            }
                            exit; 
                        } 
                        elseif ($piece == 0.20) 
                        {
                            echo 'il vous reste que 0.20 e' . "\n";
                            $piece = (float)readline("insérer les pièces suffisantes \n" );
                                if ($piece == 0.20 ) {
                                    echo 'Vous avez atteint les ' . $piece . ', le café est en préparation ' ;
                                } 
                                elseif ($piece == 0.1) 
                                {
                                    echo 'veuillez mettre encore 0.10' . " \n";
                                    $piece = (float)readline("insérer les pièces suffisantes \n" );
                                    if ($piece == 0.1) {
                                        echo ' votre café est en cours de préparation' . "\n";
                                    }
                                    else 
                                    {
                                        echo 'commande inconnue ' ;
                                    }                             
                                }
                                else 
                                {
                                    echo 'commande inconnue ';
                                }

                            exit;
                        } 
                        elseif ($piece >= 0.50) 
                        {
                            echo ' Votre café est en préparation , On vous rend'. ' ' . ($piece - 0.4) .' euro ' . "\n";
                            exit;
                        } 
                        else
                        {
                            echo 'cette pièce n\'existe pas' ;
                            exit;
                        }
                    exit;
                }
    } elseif ( $action == 2) 
    {
        $piece = 0;
        echo ' Vous avez choisit un capuccino , le prix est de 0.45 e' . "\n";
        $piece = (float)readline("insérer les pièces suffisantes \n" );
        if ($piece == 0.20)
        {
            echo ' il reste 0.25 e' . "\n";
            $piece = (float)readline("insérer les pièces suffisantes \n" );
            if ($piece == 0.20)
            {
                echo ' il vous manque 0.05 e' . "\n";
                $piece = (float)readline("insérer les pièces suffisantes \n" );
                if ($piece == 0.05)
                {
                    echo 'votre capuccino est en cours de préparation' . "\n";
                } 
                else 
                {
                    echo ' commande inconnue ';
                }
               
            }
            elseif ($piece == 0.10)
            {
                    echo ' il vous manque 0.15 e' . "\n";
                    $piece = (float)readline("insérer les pièces suffisantes \n" );
                    if ( $piece == 0.10)
                    {
                        echo 'veuillez insérer encore 0.05 e ' . "\n";
                        $piece = (float)readline("insérer les pièces suffisantes \n" );
                        if ($piece == 0.05 )
                        {
                            echo 'votre capuccino est en préparation' . "\n";
                        } else
                        {
                            echo ' commande inconnue ';
                        }
                    }
            }

        } 
        elseif ( $piece == 0.10) 
        {
            echo ' il vous reste 0.35 e a mettre ' . "\n";
            $piece = (float)readline("insérer les pièces suffisantes \n" );
            if ( $piece == 0.20)
            {
                echo ' il reste plus que 0.15 e ' . "\n";
                $piece = (float)readline("insérer les pièces suffisantes \n" );
                if ($piece == 0.10) 
                {
                    echo ' il reste 0.05 e ' . "\n" ;
                    $piece = (float)readline("insérer les pièces suffisantes \n" );
                    if ($piece == 0.05)
                    {
                        echo ' votre café est en préparation';
                    }
                    
                }
                               
            }
            elseif ( $piece == 0.10)
            {
                echo ' il reste plus que 0.25 e ' . "\n";
                $piece = (float)readline("insérer les pièces suffisantes \n" );
                if ($piece == 0.20)
                 {
                echo ' il vous manque 0.05 e' . "\n";
                $piece = (float)readline("insérer les pièces suffisantes \n" );
                if ($piece == 0.05)
                {
                    echo 'votre capuccino est en cours de préparation' . "\n";
                } 
                else 
                {
                    echo ' commande inconnue ';
                }
               
               }
            elseif ($piece == 0.10)
            {
                echo 'il reste plus que 0.15 e ' . "\n";
                $piece = (float)readline("insérer les pièces suffisantes \n" );
                if ($piece == 0.1)
                {
                    echo 'il reste plus que 0.05 e' . "\n";
                    $piece = (float)readline("insérer les pièces suffisantes \n" );
                    if ( $piece == 0.05)
                    {
                        echo ' votre capuccino est en préparation';
                    }
                    else 
                    {
                        echo 'commande inconnue';
                    }
                }
                else 
                    {
                        echo 'commande inconnue';
                    }
                
            }
            }         
            else 
            {
                echo 'commande inconnue';
            } 
        }
        elseif ($piece > 0.45)
            {
                echo 'Votre capuccino est en préparation , on vous rend' . " " . ($piece - 0.45) . " \n";
            } 
        exit ;
    }

          elseif ( $action == 3) {
        $piece = 0 ;
        echo 'Vous avez choisit un thé , le prix est de 0.30 e ';
        $piece = (float)readline("insérer les pièces suffisantes \n" );
        if ($piece == 0.20) {
            echo ' il vous reste 0.10 e ';
            $piece = (float)readline("insérer les pièces suffisantes \n" );
            if ( $piece == 0.10){
                echo 'votre thé est en préparation'. "\n";
            }
            else
            {
                echo 'commande inconnue';
            }
        }
        elseif ($piece == 0.10 ) {
            echo 'il vous manque 0.20 e' . "\n"; 
            $piece = (float)readline("insérer les pièces suffisantes \n" );
            if ( $piece == 0.20 ) {
                echo ' votre thé est en cours de préparation' . "\n";
            }
            elseif ($piece ==0.10)
            {
                echo 'il vous manque 0.10 e' . "\n";

                $piece = (float)readline("insérer les pièces suffisantes \n" );
                if ($piece == 0.10)
                {
                    echo ' votre thé est en préparation' . "\n";
                }
                else
                {
                    echo 'commande inconnue ' . "\n";
                }
            }
            else 
            { 
               echo 'commande inconnue';
            }
        } 

        elseif( $piece > 0.40) {
            echo 'la machine vous rend ' . ($piece - 0.40) . 'e' . "\n";
        }
        else 
        {
            echo ' commande inconnue';
        }

        exit;
    } else {
        echo 'commande inconnue';
        exit;
    }
}