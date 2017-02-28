<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
		<h6>i=8547, ça passe</h6>
		<h6>i=8548, ça ne passe plus</h6>
		<a href="?i=0">Hello en php 0 fois</a><br>
		<a href="?i=5">Hello en php 5 fois</a><br>
		<a href="?i=10">Hello en php 10 fois</a><br>
		<a href="?i=50">Hello en php 50 fois</a><br>
		<a href="?i=100">Hello en php 100 fois</a><br>
        <a href="?i=500">Hello en php 500 fois</a><br>
		<a href="?i=10000">Hello en php 10000 fois (Attention:problème d'affichage)</a><br>
		
		<form>
			<label for="i">Vous pouvez saisir $i</label>
			<input type="number" max="10000" name="i" id="i">
		</form>
        <?php
			$i=0;
			$max=0;
			if(isset($_GET["i"]))
				$max=min(10000,$_GET["i"]);
			while($i<$max){
				echo "<span style='font-size:{$i}pt'>Hello en PHP !</span>","- $i<br>";
				$i+=1;
			}
        ?>
    </body>
</html>