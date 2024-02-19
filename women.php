<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women</title>
    <link rel="stylesheet" href="sub.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="border"></div>
    <div class="womentop">
        <div class="Lwindow">
            <p>hii</p>
        </div>
        <h2>What's trending?</h2>
        <h1>WOMEN SECTION </h1>
        <div class="subnavlogo">
            <img src="logowhite.jpg" ></img>
        </div>
    </div>
    <div class="searchcontainer">
        <div class="formcontainer">
            <form>
                <input type="text" id="searchinput" placeholder="Search for Articles">
                <button type="button" id="sb" onclick="search()"><i class="fas fa-search"></i></button>
            </form>     
      <ul id="searchsug"></ul> 
    </div>
    </div>
    <div class="Rwindow"></div>
    <div>   
    </div>
    <div class="artcon">
        <div class="design" id="wom1">
            <img id="coat1" class="artimg" src="images/2.1.jpg"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom1')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art1')">Article 1</a></p>
            <div id="art1" class="dropcon">
                <p class="itemspecs">specs for the item</p>
                <p>Content for art 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, illum culpa iure nobis iste ipsa magnam molestiae ad impedit itaque distinctio nihil molestias. Mollitia harum natus odio? Iusto, nobis totam?</p>
            </div>
        </div>
        <div class="design" id="wom2">
            <img id="artimg2" class="artimg" src="images/1.1.jpg">
            <button type="button" class="saveart" onclick="saveDiv('wom2')"><img src="heart-solid.svg" alt=""></button>
            </img>
            <p><a href="javascript:void(0);" onclick="dropart('art2')">Article 2</a></p>
            <p id="art2" class="dropcon">Content for art 2</p>
        </div>
        <div class="design" id="wom3">
            <img id="artimg3" class="artimg" src="images/1.2.jpg"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom3')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art3')">Article 3</a></p>
            <p id="art3" class="dropcon">Content for art 3</p>
        </div>
        <div class="design" id="wom4">
            <img id="artimg4" class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom4')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art4')">Article 4</a></p>
            <p id="art4" class="dropcon">Content for art 4</p>
        </div>
        <div class="design" id="wom5">
            <img id="artimg5" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom5')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art5')">Article 5</a></p>
            <p id="art5" class="dropcon">Content for art 5</p>
        </div>
        <div class="design" id="wom6">
            <img id="artimg6" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom6')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art6')">Article 6</a></p>
            <p id="art6" class="dropcon">Content for art 6</p>
        </div>
        <div class="design" id="wom7">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom7')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art7')">Article 7</a></p>
            <p id="art7" class="dropcon">Content for art 7</p>
        </div>
        <div class="design" id="wom8">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom8')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art8')">Article 8</a></p>
            <p id="art8" class="dropcon">Content for art 8</p>
        </div>
        <div class="design" id="wom9">
            <img class="artimg" src="images."></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom9')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art9')">Article 9</a></p>
            <p id="art9" class="dropcon">Content for art 9</p>
        </div>
        <div class="design" id="wom1">
            <img id="coat1" class="artimg" src="images/2.1.jpg"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom1')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art1')">Article 1</a></p>
            <div id="art1" class="dropcon">
                <p class="itemspecs">specs for the item</p>
                <p>Content for art 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, illum culpa iure nobis iste ipsa magnam molestiae ad impedit itaque distinctio nihil molestias. Mollitia harum natus odio? Iusto, nobis totam?</p>
            </div>
        </div>
        <div class="design" id="wom2">
            <img id="artimg2" class="artimg" src="images/1.1.jpg">
            <button type="button" class="saveart" onclick="saveDiv('wom2')"><img src="heart-solid.svg" alt=""></button>
            </img>
            <p><a href="javascript:void(0);" onclick="dropart('art2')">Article 2</a></p>
            <p id="art2" class="dropcon">Content for art 2</p>
        </div>
        <div class="design" id="wom3">
            <img id="artimg3" class="artimg" src="images/1.2.jpg"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom3')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art3')">Article 3</a></p>
            <p id="art3" class="dropcon">Content for art 3</p>
        </div>
        <div class="design" id="wom4">
            <img id="artimg4" class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom4')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art4')">Article 4</a></p>
            <p id="art4" class="dropcon">Content for art 4</p>
        </div>
        <div class="design" id="wom5">
            <img id="artimg5" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom5')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art5')">Article 5</a></p>
            <p id="art5" class="dropcon">Content for art 5</p>
        </div>
        <div class="design" id="wom6">
            <img id="artimg6" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom6')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art6')">Article 6</a></p>
            <p id="art6" class="dropcon">Content for art 6</p>
        </div>
        <div class="design" id="wom7">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom7')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art7')">Article 7</a></p>
            <p id="art7" class="dropcon">Content for art 7</p>
        </div>
        <div class="design" id="wom8">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom8')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art8')">Article 8</a></p>
            <p id="art8" class="dropcon">Content for art 8</p>
        </div>
        <div class="design" id="wom9">
            <img class="artimg" src="images."></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom9')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art9')">Article 9</a></p>
            <p id="art9" class="dropcon">Content for art 9</p>
        </div>
        <div class="design" id="wom10">
            <img id="coat1" class="artimg" src="images/2.1.jpg"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom10')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art10')">Article 1</a></p>
            <div id="art10" class="dropcon">
                <p class="itemspecs">specs for the item</p>
                <p>Content for art 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, illum culpa iure nobis iste ipsa magnam molestiae ad impedit itaque distinctio nihil molestias. Mollitia harum natus odio? Iusto, nobis totam?</p>
            </div>
        </div>
        <div class="design" id="wom11">
            <img id="artimg2" class="artimg" src="images/1.1.jpg">
            <button type="button" class="saveart" onclick="saveDiv('wom11')"><img src="heart-solid.svg" alt=""></button>
            </img>
            <p><a href="javascript:void(0);" onclick="dropart('art11')">Article 2</a></p>
            <p id="art11" class="dropcon">Content for art 2</p>
        </div>
        <div class="design" id="wom12">
            <img id="artimg3" class="artimg" src="images/1.2.jpg"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom12')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art12')">Article 3</a></p>
            <p id="art12" class="dropcon">Content for art 3</p>
        </div>
        <div class="design" id="wom13">
            <img id="artimg4" class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom13')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art13')">Article 4</a></p>
            <p id="art13" class="dropcon">Content for art 4</p>
        </div>
        <div class="design" id="wom514">
            <img id="artimg5" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom5')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art5')">Article 5</a></p>
            <p id="art5" class="dropcon">Content for art 5</p>
        </div>
        <div class="design" id="wom6">
            <img id="artimg6" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom6')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art6')">Article 6</a></p>
            <p id="art6" class="dropcon">Content for art 6</p>
        </div>
        <div class="design" id="wom7">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom7')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art7')">Article 7</a></p>
            <p id="art7" class="dropcon">Content for art 7</p>
        </div>
        <div class="design" id="wom8">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom8')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art8')">Article 8</a></p>
            <p id="art8" class="dropcon">Content for art 8</p>
        </div>
        <div class="design" id="wom9">
            <img class="artimg" src="images."></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom9')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art9')">Article 9</a></p>
            <p id="art9" class="dropcon">Content for art 9</p>
        </div>
        <div class="design" id="wom1">
            <img id="coat1" class="artimg" src="images/2.1.jpg"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom1')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art1')">Article 1</a></p>
            <div id="art1" class="dropcon">
                <p class="itemspecs">specs for the item</p>
                <p>Content for art 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, illum culpa iure nobis iste ipsa magnam molestiae ad impedit itaque distinctio nihil molestias. Mollitia harum natus odio? Iusto, nobis totam?</p>
            </div>
        </div>
        <div class="design" id="wom2">
            <img id="artimg2" class="artimg" src="images/1.1.jpg">
            <button type="button" class="saveart" onclick="saveDiv('wom2')"><img src="heart-solid.svg" alt=""></button>
            </img>
            <p><a href="javascript:void(0);" onclick="dropart('art2')">Article 2</a></p>
            <p id="art2" class="dropcon">Content for art 2</p>
        </div>
        <div class="design" id="wom3">
            <img id="artimg3" class="artimg" src="images/1.2.jpg"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom3')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art3')">Article 3</a></p>
            <p id="art3" class="dropcon">Content for art 3</p>
        </div>
        <div class="design" id="wom4">
            <img id="artimg4" class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom4')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art4')">Article 4</a></p>
            <p id="art4" class="dropcon">Content for art 4</p>
        </div>
        <div class="design" id="wom5">
            <img id="artimg5" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom5')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art5')">Article 5</a></p>
            <p id="art5" class="dropcon">Content for art 5</p>
        </div>
        <div class="design" id="wom6">
            <img id="artimg6" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom6')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art6')">Article 6</a></p>
            <p id="art6" class="dropcon">Content for art 6</p>
        </div>
        <div class="design" id="wom7">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom7')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art7')">Article 7</a></p>
            <p id="art7" class="dropcon">Content for art 7</p>
        </div>
        <div class="design" id="wom8">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom8')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art8')">Article 8</a></p>
            <p id="art8" class="dropcon">Content for art 8</p>
        </div>
        <div class="design" id="wom9">
            <img class="artimg" src="images."></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom9')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art9')">Article 9</a></p>
            <p id="art9" class="dropcon">Content for art 9</p>
        </div>
        <div class="design" id="wom1">
            <img id="coat1" class="artimg" src="images/2.1.jpg"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom1')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art1')">Article 1</a></p>
            <div id="art1" class="dropcon">
                <p class="itemspecs">specs for the item</p>
                <p>Content for art 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, illum culpa iure nobis iste ipsa magnam molestiae ad impedit itaque distinctio nihil molestias. Mollitia harum natus odio? Iusto, nobis totam?</p>
            </div>
        </div>
        <div class="design" id="wom2">
            <img id="artimg2" class="artimg" src="images/1.1.jpg">
            <button type="button" class="saveart" onclick="saveDiv('wom2')"><img src="heart-solid.svg" alt=""></button>
            </img>
            <p><a href="javascript:void(0);" onclick="dropart('art2')">Article 2</a></p>
            <p id="art2" class="dropcon">Content for art 2</p>
        </div>
        <div class="design" id="wom3">
            <img id="artimg3" class="artimg" src="images/1.2.jpg"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom3')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art3')">Article 3</a></p>
            <p id="art3" class="dropcon">Content for art 3</p>
        </div>
        <div class="design" id="wom4">
            <img id="artimg4" class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom4')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art4')">Article 4</a></p>
            <p id="art4" class="dropcon">Content for art 4</p>
        </div>
        <div class="design" id="wom5">
            <img id="artimg5" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom5')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art5')">Article 5</a></p>
            <p id="art5" class="dropcon">Content for art 5</p>
        </div>
        <div class="design" id="wom6">
            <img id="artimg6" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom6')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art6')">Article 6</a></p>
            <p id="art6" class="dropcon">Content for art 6</p>
        </div>
        <div class="design" id="wom7">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom7')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art7')">Article 7</a></p>
            <p id="art7" class="dropcon">Content for art 7</p>
        </div>
        <div class="design" id="wom8">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom8')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art8')">Article 8</a></p>
            <p id="art8" class="dropcon">Content for art 8</p>
        </div>
        <div class="design" id="wom9">
            <img class="artimg" src="images."></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom9')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art9')">Article 9</a></p>
            <p id="art9" class="dropcon">Content for art 9</p>
        </div>
        <div class="design" id="wom1">
            <img id="coat1" class="artimg" src="images/2.1.jpg"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom1')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art1')">Article 1</a></p>
            <div id="art1" class="dropcon">
                <p class="itemspecs">specs for the item</p>
                <p>Content for art 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, illum culpa iure nobis iste ipsa magnam molestiae ad impedit itaque distinctio nihil molestias. Mollitia harum natus odio? Iusto, nobis totam?</p>
            </div>
        </div>
        <div class="design" id="wom2">
            <img id="artimg2" class="artimg" src="images/1.1.jpg">
            <button type="button" class="saveart" onclick="saveDiv('wom2')"><img src="heart-solid.svg" alt=""></button>
            </img>
            <p><a href="javascript:void(0);" onclick="dropart('art2')">Article 2</a></p>
            <p id="art2" class="dropcon">Content for art 2</p>
        </div>
        <div class="design" id="wom3">
            <img id="artimg3" class="artimg" src="images/1.2.jpg"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom3')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art3')">Article 3</a></p>
            <p id="art3" class="dropcon">Content for art 3</p>
        </div>
        <div class="design" id="wom4">
            <img id="artimg4" class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom4')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art4')">Article 4</a></p>
            <p id="art4" class="dropcon">Content for art 4</p>
        </div>
        <div class="design" id="wom5">
            <img id="artimg5" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom5')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art5')">Article 5</a></p>
            <p id="art5" class="dropcon">Content for art 5</p>
        </div>
        <div class="design" id="wom6">
            <img id="artimg6" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom6')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art6')">Article 6</a></p>
            <p id="art6" class="dropcon">Content for art 6</p>
        </div>
        <div class="design" id="wom7">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom7')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art7')">Article 7</a></p>
            <p id="art7" class="dropcon">Content for art 7</p>
        </div>
        <div class="design" id="wom8">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom8')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art8')">Article 8</a></p>
            <p id="art8" class="dropcon">Content for art 8</p>
        </div>
        <div class="design" id="wom9">
            <img class="artimg" src="images."></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom9')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art9')">Article 9</a></p>
            <p id="art9" class="dropcon">Content for art 9</p>
        </div>   
        <div class="design" id="wom1">
            <img id="coat1" class="artimg" src="images/2.1.jpg"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom1')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art1')">Article 1</a></p>
            <div id="art1" class="dropcon">
                <p class="itemspecs">specs for the item</p>
                <p>Content for art 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, illum culpa iure nobis iste ipsa magnam molestiae ad impedit itaque distinctio nihil molestias. Mollitia harum natus odio? Iusto, nobis totam?</p>
            </div>
        </div>
        <div class="design" id="wom2">
            <img id="artimg2" class="artimg" src="images/1.1.jpg">
            <button type="button" class="saveart" onclick="saveDiv('wom2')"><img src="heart-solid.svg" alt=""></button>
            </img>
            <p><a href="javascript:void(0);" onclick="dropart('art2')">Article 2</a></p>
            <p id="art2" class="dropcon">Content for art 2</p>
        </div>
        <div class="design" id="wom3">
            <img id="artimg3" class="artimg" src="images/1.2.jpg"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom3')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art3')">Article 3</a></p>
            <p id="art3" class="dropcon">Content for art 3</p>
        </div>
        <div class="design" id="wom4">
            <img id="artimg4" class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom4')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art4')">Article 4</a></p>
            <p id="art4" class="dropcon">Content for art 4</p>
        </div>
        <div class="design" id="wom5">
            <img id="artimg5" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom5')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art5')">Article 5</a></p>
            <p id="art5" class="dropcon">Content for art 5</p>
        </div>
        <div class="design" id="wom6">
            <img id="artimg6" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom6')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art6')">Article 6</a></p>
            <p id="art6" class="dropcon">Content for art 6</p>
        </div>
        <div class="design" id="wom7">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom7')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art7')">Article 7</a></p>
            <p id="art7" class="dropcon">Content for art 7</p>
        </div>
        <div class="design" id="wom8">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom8')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art8')">Article 8</a></p>
            <p id="art8" class="dropcon">Content for art 8</p>
        </div>
        <div class="design" id="wom9">
            <img class="artimg" src="images."></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom9')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art9')">Article 9</a></p>
            <p id="art9" class="dropcon">Content for art 9</p>
        </div>
        <div class="design" id="wom1">
            <img id="coat1" class="artimg" src="images/2.1.jpg"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom1')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art1')">Article 1</a></p>
            <div id="art1" class="dropcon">
                <p class="itemspecs">specs for the item</p>
                <p>Content for art 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, illum culpa iure nobis iste ipsa magnam molestiae ad impedit itaque distinctio nihil molestias. Mollitia harum natus odio? Iusto, nobis totam?</p>
            </div>
        </div>
        <div class="design" id="wom2">
            <img id="artimg2" class="artimg" src="images/1.1.jpg">
            <button type="button" class="saveart" onclick="saveDiv('wom2')"><img src="heart-solid.svg" alt=""></button>
            </img>
            <p><a href="javascript:void(0);" onclick="dropart('art2')">Article 2</a></p>
            <p id="art2" class="dropcon">Content for art 2</p>
        </div>
        <div class="design" id="wom3">
            <img id="artimg3" class="artimg" src="images/1.2.jpg"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom3')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art3')">Article 3</a></p>
            <p id="art3" class="dropcon">Content for art 3</p>
        </div>
        <div class="design" id="wom4">
            <img id="artimg4" class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom4')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art4')">Article 4</a></p>
            <p id="art4" class="dropcon">Content for art 4</p>
        </div>
        <div class="design" id="wom5">
            <img id="artimg5" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom5')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art5')">Article 5</a></p>
            <p id="art5" class="dropcon">Content for art 5</p>
        </div>
        <div class="design" id="wom6">
            <img id="artimg6" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom6')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art6')">Article 6</a></p>
            <p id="art6" class="dropcon">Content for art 6</p>
        </div>
        <div class="design" id="wom7">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom7')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art7')">Article 7</a></p>
            <p id="art7" class="dropcon">Content for art 7</p>
        </div>
        <div class="design" id="wom8">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom8')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art8')">Article 8</a></p>
            <p id="art8" class="dropcon">Content for art 8</p>
        </div>
        <div class="design" id="wom9">
            <img class="artimg" src="images."></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom9')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art9')">Article 9</a></p>
            <p id="art9" class="dropcon">Content for art 9</p>
        </div>
        <div class="design" id="wom1">
            <img id="coat1" class="artimg" src="images/2.1.jpg"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom1')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art1')">Article 1</a></p>
            <div id="art1" class="dropcon">
                <p class="itemspecs">specs for the item</p>
                <p>Content for art 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, illum culpa iure nobis iste ipsa magnam molestiae ad impedit itaque distinctio nihil molestias. Mollitia harum natus odio? Iusto, nobis totam?</p>
            </div>
        </div>
        <div class="design" id="wom2">
            <img id="artimg2" class="artimg" src="images/1.1.jpg">
            <button type="button" class="saveart" onclick="saveDiv('wom2')"><img src="heart-solid.svg" alt=""></button>
            </img>
            <p><a href="javascript:void(0);" onclick="dropart('art2')">Article 2</a></p>
            <p id="art2" class="dropcon">Content for art 2</p>
        </div>
        <div class="design" id="wom3">
            <img id="artimg3" class="artimg" src="images/1.2.jpg"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom3')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art3')">Article 3</a></p>
            <p id="art3" class="dropcon">Content for art 3</p>
        </div>
        <div class="design" id="wom4">
            <img id="artimg4" class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom4')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art4')">Article 4</a></p>
            <p id="art4" class="dropcon">Content for art 4</p>
        </div>
        <div class="design" id="wom5">
            <img id="artimg5" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom5')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art5')">Article 5</a></p>
            <p id="art5" class="dropcon">Content for art 5</p>
        </div>
        <div class="design" id="wom6">
            <img id="artimg6" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom6')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art6')">Article 6</a></p>
            <p id="art6" class="dropcon">Content for art 6</p>
        </div>
        <div class="design" id="wom7">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom7')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art7')">Article 7</a></p>
            <p id="art7" class="dropcon">Content for art 7</p>
        </div>
        <div class="design" id="wom8">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom8')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art8')">Article 8</a></p>
            <p id="art8" class="dropcon">Content for art 8</p>
        </div>
        <div class="design" id="wom9">
            <img class="artimg" src="images."></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom9')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art9')">Article 9</a></p>
            <p id="art9" class="dropcon">Content for art 9</p>
        </div>
        <div class="design" id="wom1">
            <img id="coat1" class="artimg" src="images/2.1.jpg"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom1')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art1')">Article 1</a></p>
            <div id="art1" class="dropcon">
                <p class="itemspecs">specs for the item</p>
                <p>Content for art 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, illum culpa iure nobis iste ipsa magnam molestiae ad impedit itaque distinctio nihil molestias. Mollitia harum natus odio? Iusto, nobis totam?</p>
            </div>
        </div>
        <div class="design" id="wom2">
            <img id="artimg2" class="artimg" src="images/1.1.jpg">
            <button type="button" class="saveart" onclick="saveDiv('wom2')"><img src="heart-solid.svg" alt=""></button>
            </img>
            <p><a href="javascript:void(0);" onclick="dropart('art2')">Article 2</a></p>
            <p id="art2" class="dropcon">Content for art 2</p>
        </div>
        <div class="design" id="wom3">
            <img id="artimg3" class="artimg" src="images/1.2.jpg"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom3')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art3')">Article 3</a></p>
            <p id="art3" class="dropcon">Content for art 3</p>
        </div>
        <div class="design" id="wom4">
            <img id="artimg4" class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom4')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art4')">Article 4</a></p>
            <p id="art4" class="dropcon">Content for art 4</p>
        </div>
        <div class="design" id="wom5">
            <img id="artimg5" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom5')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art5')">Article 5</a></p>
            <p id="art5" class="dropcon">Content for art 5</p>
        </div>
        <div class="design" id="wom6">
            <img id="artimg6" class="artimg" src="testimgb.png"></img>
            <button type="button" class="saveart" onclick="saveDiv('wom6')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art6')">Article 6</a></p>
            <p id="art6" class="dropcon">Content for art 6</p>
        </div>
        <div class="design" id="wom7">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom7')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art7')">Article 7</a></p>
            <p id="art7" class="dropcon">Content for art 7</p>
        </div>
        <div class="design" id="wom8">
            <img class="artimg" src="testimgb.png"></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom8')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art8')">Article 8</a></p>
            <p id="art8" class="dropcon">Content for art 8</p>
        </div>
        <div class="design" id="wom9">
            <img class="artimg" src="images."></img> 
            <button type="button" class="saveart" onclick="saveDiv('wom9')"><img src="heart-solid.svg" alt=""></button>
            <p><a href="javascript:void(0);" onclick="dropart('art9')">Article 9</a></p>
            <p id="art9" class="dropcon">Content for art 9</p>
        </div>

    </div>
    <div class="navigation">
        <ul>
            <li class="list">
                <a href="home.html">
                    <span class="icon">
                        <i class="fa-solid fa-house"></i>
                    </span>
                    <span class="text">Home</span>
                    <span class="circle"></span>
                </a>
            </li>
            <li class="list">
                <a href="men.html">
                    <span class="icon">
                        <i class="fa-solid fa-mars"></i>
                    </span>
                    <span class="text">Men</span>
                    <span class="circle"></span>
                </a>
            </li>
            <li class="list active">
                <a href="#">
                    <span class="icon">
                        <i class="fa-solid fa-venus"></i>
                    </span>
                    <span class="text">Women</span>
                    <span class="circle"></span>
                </a>
            </li>
            <li class="list">
                <a href="kids.php">
                    <span class="icon">
                        <i class="fa-solid fa-child-reaching"></i>
                    </span>
                    <span class="text">Kids</span>
                    <span class="circle"></span>
                </a>
            </li>
            <li class="list">
                <a href="accessories.html">
                    <span class="icon">
                        <i class="fa-solid fa-hat-cowboy"></i>
                    </span>
                    <span class="text">Accesories</span>
                    <span class="circle"></span>
                </a>
            </li>
            <li class="list">
                <a href="userinfo.html">
                    <span class="icon">
                        <i class="fa-solid fa-user"></i>
                    </span>
                    <span class="text">User</span>
                    <span class="circle"></span>
                </a>
            </li>
            <div class="indicator"></div>
        </ul>
    </div>
    <br>
    <br>
    <br>
    <br>
    <footer><p>You have reached the end.</p></footer>
    <br>
    <br>
    <br>
    <br>
    <script src="home.js" defer></script>
    <script src="new.js" defer></script>
</body>
</html>