<?php
//mamifero
$resposta = (string) readline("É mamífero? (sim/nao): ");
if($resposta === "sim"){
    //perguntas mamiferos
    
    $resposta = (string) readline("É quadrúpede? (sim/nao): ");

    

    if ($resposta === "sim") {

        $resposta = (string) readline("É carnívoro? (sim/nao): ");

        if ($resposta === "sim") {

            echo "Então o animal escolhido foi leão.\n";

        } elseif ($resposta === "nao") {

            $resposta = (string) readline("É herbívoro? (sim/nao): ");

            if ($resposta === "sim") {

                echo "Então o animal escolhido foi cavalo.\n";

            } else {

                echo "Animal não identificado.\n";

            }

        } else {

            echo "Animal não identificado.\n";

        }

        
    } elseif ($resposta === "nao") {

        $resposta = (string) readline("É bípede? (sim/nao): ");

        if ($resposta === "sim") {

            $resposta = (string) readline("É onívoro? (sim/nao): ");

            if ($resposta === "sim") {

                echo "Então o animal escolhido foi homem.\n";

            } elseif ($resposta === "nao") {

                $resposta = (string) readline("É frutívoro? (sim/nao): ");

                if ($resposta === "sim") {

                    echo "Então o animal escolhido foi macaco.\n";

                } else {

                    echo "Animal não identificado.\n";

                }

            } else {

                echo "Animal não identificado.\n";

            }

        } elseif ($resposta === "nao") {

            $resposta = (string) readline("É voador? (sim/nao): ");

            if ($resposta === "sim") {

                echo "Então o animal escolhido foi morcego.\n";

            } elseif ($resposta === "nao") {

                $resposta = (string) readline("É aquático? (sim/nao): ");

                if ($resposta === "sim") {

                    echo "Então o animal escolhido foi baleia.\n";

                } else {

                    echo "Animal não identificado.\n";

                }

            } else {

                echo "Animal não identificado.\n";

            }

        }

    }
}elseif($resposta === "nao"){
    
    $resposta = (string) readline("É avé? (sim/nao): ");
    
    if($resposta === "sim"){
    //perguntas ave
     $resposta = (string) readline("É não voadora? (sim/nao): ");

        if ($resposta === "sim") {

            $resposta = (string) readline("É tropical? (sim/nao): ");

            if ($resposta === "sim") {

                echo "Então o animal escolhido foi avestruz.\n";

            } elseif ($resposta === "nao") {

                $resposta = (string) readline("É polar? (sim/nao): ");

                if ($resposta === "sim") {

                    echo "Então o animal escolhido foi pinguim.\n";

                } else {

                    echo "Animal não identificado.\n";

                }

            } else {

                echo "Animal não identificado.\n";

            }
            
        } elseif ($resposta === "nao") {

            $resposta = (string) readline("É nadadora? (sim/nao): ");

            if ($resposta === "sim") {

                echo "Então o animal escolhido foi pato.\n";

            } elseif ($resposta === "nao") {

                $resposta = (string) readline("É de rapina? (sim/nao): ");

                if ($resposta === "sim") {

                    echo "Então o animal escolhido foi águia.\n";

                } else {

                    echo "Animal não identificado.\n";

                }

            } else {

                echo "Animal não identificado.\n";

            }

        }
    

    }elseif($resposta === "nao"){
    //pergunta dos repiteis

    $resposta = (string) readline("É réptil? (sim/nao): ");

        if ($resposta === "sim") {

            $resposta = (string) readline("É com casco? (sim/nao): ");

            if ($resposta === "sim") {

                echo "Então o animal escolhido foi tartaruga.\n";

            } elseif ($resposta === "nao") {

                $resposta = (string) readline("É carnívoro? (sim/nao): ");

                if ($resposta === "sim") {

                    echo "Então o animal escolhido foi crocodilo.\n";

                } elseif ($resposta === "nao") {

                    $resposta = (string) readline("É sem patas? (sim/nao): ");

                    if ($resposta === "sim") {

                        echo "Então o animal escolhido foi cobra.\n";

                    } else {

                        echo "Animal não identificado.\n";

                    }

                } else {

                    echo "Animal não identificado.\n";

                }

            } else {

                echo "Animal não identificado.\n";

            }

        } else {

            echo "Animal não identificado.\n";

        }
    }else{
        echo "animal não identificado";
    }
}else{
     echo "animal não identificado";

}