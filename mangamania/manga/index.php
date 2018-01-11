<?php 
    $sitepath="http://people.oregonstate.edu/~guzmannt/mangamania/manga/index.php";
    $pagetitle="Manga";
    include '../header.html'; 
?>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for mangas...">

<!-- https://www.w3schools.com/howto/howto_js_filter_lists.asp -->
<ul id="myUL">
  <li><a href="http://www.mangareader.net/air" target="_blank">AIR</a></li>
  <li><a href="http://www.mangareader.net/berserk" target="_blank">BERSERK</a></li>
  <li><a href="http://www.mangareader.net/blood-a" target="_blank">BLOOD+ A</a></li>
  <li><a href="http://www.mangareader.net/cold-moon-chronicles" target="_blank">COLD MOON CHRONICLES</a></li>
  <li><a href="http://www.mangareader.net/shinigami-alice" target="_blank">SHINIGAMI ALICE</a></li>
  <li><a href="http://www.mangareader.net/fuuko-no-iru-mise" target="_blank">FUUKO NO IRU MISE</a></li>
  <li><a href="http://www.mangareader.net/kamisama-dolls" target="_blank">KAMISAMA DOLLS</a></li>
  <li><a href="http://www.mangareader.net/magi" target="_blank">MAGI</a></li>
  <li><a href="http://www.mangareader.net/naruto" target="_blank">NARUTO</a></li>
  <li><a href="http://www.mangareader.net/bleach" target="_blank">BLEACH</a></li>
  <li><a href="http://www.mangareader.net/fairy-tail" target="_blank">FAIRY TAIL</a></li>
  <li><a href="http://www.mangareader.net/one-piece" target="_blank">ONE PIECE</a></li>
  <li><a href="http://www.mangareader.net/dengeki-daisy" target="_blank">DENGEKI DAISY</a></li>
  <li><a href="http://www.mangareader.net/shingeki-no-kyojin" target="_blank">SHINGEKI NO KYOJIN</a></li>
</ul>

<?php include '../footer.html'; ?>