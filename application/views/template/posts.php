


<?php 
foreach ($postagens as $post) {
//    echo $post->id;
?>


<article class="entry">

    <header class="entry__header">

        <h2 class="entry__title h1">
            <a href="single.html" title="">

                <a href="<?php echo base_url().'pagina/post/'.$post->id;?>" title="">
                    <?php echo $post->titulo;?></a>
                    
        </h2>

        <div class="entry__meta">
            <ul>
                <li><?php echo $post->Data;?></li>
                <li><a href="#" title="" rel="category tag"><?php echo $post->Categoria;?></a></li>
                <li><?php echo $post->id_autor;?></li>
            </ul>
        </div>

    </header>

    <div class="entry__content">
        <p>
           <?php echo $post->previa;?>
        </p>
    </div>

</article> <!-- end entry -->


<?php
}
?>


</div> <!-- end main -->
