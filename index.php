<?php 
    //Q1:
    $txt1 = "hello php this is my first task";
    echo strtoupper($txt1)."<br>";
    echo strtolower($txt1)."<br>";
    echo ucfirst($txt1)."<br>";
    echo ucwords($txt1)."<br><hr>";

    //-----------------------------------------------------------
    //Q2: Sample string : '082307'=> Expected Output : 08:23:07
    $txt2= '082307'; 
    echo substr(chunk_split($txt2, 2, ':'), 0, -1)."<br><hr>";

    //------------------------------------------------------------
    //Q3 : 
    $txt3 = 'The quick brown fox jumps over the lazy dog.';
    if (strpos($txt3, 'jumps') !== false) {
        echo "True, jumps contains the string"."<br><hr>";
    }

    //-------------------------------------------------------------
    //Q4 :Sample String : 'www.example.com/public_html/index.php' => Expected Output : 'index.php'
    $filePath = "www.example.com/public_html/index.php";
    echo substr(strrchr($filePath, "/"), 1)."<br><hr>";

    //--------------------------------------------------------------
    //Q5 : Sample String : 'Orange@example.com' => Expected Output : 'Orange'
    $emailID = "Orange@example.com";
    echo strstr($emailID, '@', true)."<br><hr>";

    //---------------------------------------------------------------
    //Q6 : Sample String : 'Orange@example.com' => Expected Output : 'com'
    echo substr($emailID, -3)."<br><hr>";

    //----------------------------------------------------------------
    //Q7: Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz' => Expected OutPut: 254ABCc
    $passwordChars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
    function genetatePassword($passLen) {
        return substr(str_shuffle($GLOBALS['passwordChars']), 0, $passLen);
    }
    echo "Password Length 6".genetatePassword(6)."<br>";
    echo "Password Length 7".genetatePassword(7)."<br>";
    echo "Password Length 8".genetatePassword(8)."<br><hr>";

    //----------------------------------------------------------------
    //Q8: Sample date : 'the quick brown fox jumps over the lazy dog.' => Expected Result : That quick brown fox jumps over the lazy dog.
    echo preg_replace('/The/', 'That', $txt3, 1)."<br><hr>";

    //----------------------------------------------------------------
    //Q9: String1 : 'football', String2 : 'footboll' => Expected Result : First difference between two strings at position 5: "a" vs "o"
    $str1 = "football"; 
    $str2 = "footboll";
    $pos  = strspn($str1 ^ $str2, "\0");
    printf('First difference between two strings at position %d: %s vs %s ', $pos, $str1[$pos], $str2[$pos]);
    echo "<br><hr>";

    //----------------------------------------------------------------
    // Q10: Sample strings : "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
    $txt4 = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
    $arrText = explode("\n", $txt4);
    var_dump($arrText);
    echo "<br><hr>";

    //----------------------------------------------------------------
    // Q11: Sample character : 'a' => Expected Output : 'b', Sample character : 'z' =>  Expected Output : 'a'
    function getNextChar($x) {
        $_char = $x;
        $nextChar = ++$_char;
        if(strlen($nextChar) > 1) {
            $nextChar = $nextChar[0];
        }
        echo $nextChar."<br>";
    }
    getNextChar('a');
    getNextChar('z');
    echo "<hr>";

    //----------------------------------------------------------------
    // Q12:Sample string : 'orange@example.com' => Expected Output : 'example.com'
    $subEmail = 'Orange@';
    if(substr($emailID, 0, strlen($subEmail)) == $subEmail) {
        $email_Domain = substr($emailID, strlen($subEmail));
    }
    echo  $email_Domain."<br><hr>";

    //----------------------------------------------------------------
    // Q13: Original String : 'The brown fox', Insert 'quick' between 'The' and 'brown'.=> Expected Output : 'The quick brown fox
    $OriginalString = 'The brown fox';
    $InsertString = 'quick';
    echo substr_replace($OriginalString, $InsertString.' ', 4, 0)."<br>"; //1
    echo substr_replace('The brown fox', 'quick ', 4, 0)."<br><hr>";//2

    //----------------------------------------------------------------
    // Q14:Original String : 'The quick brown fox' => Expected Output : 'The'
    $textArr = explode(' ', trim('The quick brown fox'));
    echo $textArr[0]."<br><hr>";

    //----------------------------------------------------------------
    // Q15: Original String : '000547023.24' => Expected Output : '547023.24'
    echo ltrim('000547023.24', '0')."<br><hr>";

    //----------------------------------------------------------------
    // Q16: Original String : 'The quick brown fox jumps over the lazy dog',Remove 'fox' from the above string. => Expected Output : 'The quick brown jumps over the lazy dog'
    $originalStr = 'The quick brown fox jumps over the lazy dog';
    echo str_replace('fox', ' ', $originalStr)."<br><hr>";

    //----------------------------------------------------------------
    // Q17: Original String : 'The quick brown fox jumps over the lazy dog///' => Expected Output : 'The quick brown fox jumps over the lazy dog'
    echo rtrim('The quick brown fox jumps over the lazy dog///', '/')."<br><hr>";

    //----------------------------------------------------------------
    // Q18: Sample URL : 'http://www.example.com/5478631' => Expected Output : '5478631'
    $Sample_URL = 'http://www.example.com/5478631';
    echo substr($Sample_URL, strrpos($Sample_URL, '/') + 1)."<br><hr>";

    //----------------------------------------------------------------
    // Q19:Sample String : '\"\1+2/3*2:2-3/4*3' => Expected Output : '1 2 3 2 2 3 4 3'
    $sample_Str = '\"\1+2/3*2:2-3/4*3';
    echo str_replace(str_split('\"+*/:-'), ' ', $sample_Str)."<br><hr>";

    //----------------------------------------------------------------
    // Q20:Sample String : 'The quick brown fox jumps over the lazy dog' => Expected Output : 'The quick brown fox jumps'
    $SampleString = 'The quick brown fox jumps over the lazy dog';
    echo implode(' ', array_slice(explode(' ', $SampleString), 0, 5))."<br><hr>";

    //----------------------------------------------------------------
    // Q21: Sample String : '2,543.12' => Expected Output : 2543.12
    echo str_replace(',', '', '2,543.12')."<br><hr>";

    //----------------------------------------------------------------
    // Q22: print letters from 'a' to 'z'.
    $firstIndex = ord('a');
    $lastIndex = ord('z');
    for($i = $firstIndex; $i <= $lastIndex; $i++) {
        echo chr($i)."\t";
    }
?>