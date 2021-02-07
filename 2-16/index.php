<?php
    
    $testFile = "test.txt";
    $contents = "こんにちは！";
    
    if (is_writable($testFile)) {
    
        echo "writable!!";
    
    } 
    else {
  
        echo "not writable!";
        exit;

    }
?>

<br>
<?php
    $test_file = "test2.txt";
    
    if (is_readable($test_file)) {
      
        $fp = fopen($test_file, "r");
        
        while ($line = fgets($fp)) {
            
            echo $line.'<br>';
        }

        fclose($fp);
    } 
    else {
    
        echo "not readable!";
        exit;
    }
?>