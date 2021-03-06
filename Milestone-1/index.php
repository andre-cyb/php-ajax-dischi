<?php
$songs = [
    [
        "poster" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg", 
        "title" => "New Jersey", 
        "author" => "Bon Jovi", 
        "genre" => "Rock", 
        "year" => "1988" 
    ], 
    [
        "poster" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg", 
        "title" => "Live at Wembley 86", 
        "author" => "Queen", 
        "genre" => "Pop", 
        "year" => "1992" 
    ], 
    [
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg", 
        "title" => "Ten's Summoner's Tales", 
        "author" => "Sting", 
        "genre" => "Pop", 
        "year" => "1993" 
    ], 
    [
        "poster" => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg", 
        "title" => "Steve Gadd Band", 
        "author" => "Steve Gadd Band", 
        "genre" => "Jazz", 
        "year" => "2018" 
    ], 
    [
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg", 
        "title" => "Brave new World", 
        "author" => "Iron Maiden", 
        "genre" => "Metal", 
        "year" => "2000" 
    ], 
    [
        "poster" => "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg", 
        "title" => "One more car, one more raider", 
        "author" => "Eric Clapton", 
        "genre" => "Rock", 
        "year" => "2002" 
    ], 
    [
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg", 
        "title" => "Made in Japan", 
        "author" => "Deep Purple", 
        "genre" => "Rock", 
        "year" => "1972" 
    ], 
    [
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg", 
        "title" => "And Justice for All", 
        "author" => "Metallica", 
        "genre" => "Metal", 
        "year" => "1988" 
    ], 
    [
        "poster" => "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg", 
        "title" => "Hard Wired", 
        "author" => "Dave Weckl", 
        "genre" => "Jazz", 
        "year" => "1994" 
    ], 
    [
        "poster" => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg", 
        "title" => "Bad", 
        "author" => "Michael Jacjson", 
        "genre" => "Pop", 
        "year" => "1987" 
    ] 
    
]; 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ajax dischi</title>
</head>
<body>

    <header>
        <div class="header">
        <img class="ps-2" src="./assets/logo-small.svg" width="50px" alt="" />
        </div>
    </header>
    <main>
    <div class="main">
        <div class="my_container">
            <div class="row justify-content-center">
                <!-- song card -->
                <?php
                    foreach ($songs as $song) {
                        $img= $song["poster"];
                        $title= $song["title"];
                        $author= $song["author"];
                        $year= $song["year"];
                        
                ?>

                <div class="col-2 text-center my_card">
                    <img src="<?php echo $img ?>" alt="" />
                    <h4 class="text-white m-0 pt-4 pb-4"><?php echo $title ?></h4>
                    <span><?php echo $author ?></span>
                    <small><?php echo $year ?></small>
                </div>

                <?php
                }
                ?>
                <!-- song card -->
            </div>
        </div>
    </div>
    </main>
    <footer></footer>
    
</body>
</html>