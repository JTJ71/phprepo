    <?php 
    echo 'nella seguente pagina si potrà vedere la stessa variabile venire convertita in più tipi e analizzata<br>';
    $testvar = 1;
    echo 'prima la analizzeremo nel suo stato originale = <br>';
    var_dump($testvar);
    echo '<br>adesso vedremo la variabile convertita come float<br>';
    $testvar = (float)$testvar;
    var_dump($testvar);
    echo '<br>sembra non essere un cambiamento incisivo no?<br>bene! ora vediamola convertita come string<br>';
    $testvar = (string)$testvar;
    var_dump($testvar);
    echo '<br>ora non solo ci ha detto il numero di caratteri ma la ha anche stampata<br>perfetto e ora tocca all array!<br>';
    $testvar = (array)$testvar;
    var_dump($testvar);
    echo '<br>hmm....<br>capisco capisco sembra che oltre al numero di carrateri e contenuto ci abbia stampato anche la posizione della variabile nell array<br>ottimo! passiamo al bool allora?<br>';
    $testvar = (bool)$testvar;
    var_dump($testvar);
    echo '<br>oooook..<br>visto che la variabile non è vuota il suo valore da bool risulta true<br>nice!<br> beh sembra che abbiamo finito che variabile flessibile che abbiamo eh? beh ciao!<br>';
    
     ?> 