

<input type="button" value= "Üllata end" onclick="return spin();" style="float:left;">
<canvas id="canvas" width="500" height="500"></canvas>
<script type="text/javascript"  src="rulett.js"></script>
<a href="?mode=rulett" ></a>

<?php if(!empty($rand)):?>
<a href="?mode=jook&id=<?php echo $rand['id']; ?>">
    <h3><?php echo $rand['name'];?></h3>
</a>

<?php endif; ?>
