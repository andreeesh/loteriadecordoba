<?php $this->title = 'Lotería de Córdoba' ?>
<div class="site-index">
<ul>
<?php 
foreach($juegos as $row):
echo '<li><a href="index.php?r=site/juego&id='.$row["IDJUEGO"].'&sorteo=0">'.$row["NOMBRE"].'</a></li>';
endforeach; 
?>
</ul>
</div>
