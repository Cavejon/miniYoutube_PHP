<h1>Meu videos</h1>
<?php foreach($videos as $video): ?>
    <div class="video">
        <a href="<?php echo BASE_URL; ?>/video/ver/<?php echo $video['url']; ?>"><strong><?php echo $video['titulo'];?></strong></a>
    </div>
    
<?php endforeach;  ?>