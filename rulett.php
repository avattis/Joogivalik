<h3>Tänaseks joogiks on <?php if(!empty($rand)):?>
      <a href="?mode=jook&id=<?php echo $rand['id']; ?>" class="random" ><?php echo $rand['name'];?>
            </a><?php endif; ?></h3>

<input type="button" class="button" value= "Üllata end" onclick="return spin();" style="float:left;">

<canvas id="canvas" width="500" height="500"></canvas>
<script type="text/javascript"  src="rulett.js"></script>
<a href="?mode=rulett"></a>


