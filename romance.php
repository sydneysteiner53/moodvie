<?php

$content = file_get_contents("http://www.imdb.com/search/title?genres=romance&title_type=feature&sort=moviemeter,asc");

preg_match_all("/img src=\"(.*)\" height=\"74\" width=\"54\" alt=\"(.*)\" title/", $content, $m);

//echo "<pre>";
//print_r($m);

$len = count($m[0]);

?>
<!doctype html>
<html>
<head>
    <title>Moodvie.com</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<h1>In the mood for a movie?</h1>
<a class="btn" href = "index.php"> Home </a>
<a class="btn" href = "comedy.php"> Giggly </a>
<a class="btn" href = "sport.php"> Lazy </a>
<a class="btn" href = "action.php"> Adventurous </a>
<a class="btn" style="color: #999;" href = "romance.php"> Lonely </a>
<br><br>
<img src = "images/logo.png" height=100 width=100 />

<h1>Romance</h1>
<div class="thick2"><hr></div>
<br>

<?php

    for($i=0; $i<$len; $i++){
        echo "
        <img class=\"poster\" src=\"imageloader.php?u=".urlencode($m[1][$i])."\"/>
        <p class=\"title\">".$m[2][$i]."</p>
        <div class=\"thin\"><hr></div>
        <br><br>
        ";
    }

?>

<br />
<img src = "images/logo.png" height=100 width=100/>
</body>
</html>