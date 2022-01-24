
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('template/topo'); ?> 
<?php $this->load->view('template/menu'); ?> 

  <div class="s-content">

    <div class="row">

        <div id="main" class="s-content__main large-8 column">
            <article class="entry">

                <header class="entry__header">

                    <h2 class="entry__title h1">
                        <a href="<?php echo base_url();?>cadastro/post" title="">Cadastre seu Post aqui</a>
                    </h2>

                    <div class="entry__meta">
                        <ul>
                           
                        </ul>
                    </div>

                </header>

                <div class="entry__content">
                    <p></p>
                </div> 

            </article> <!-- end entry -->




          
                    </div> <!-- end sidebar -->

                
 <?php $this->load->view('template/coluna-direita'); ?>  

            <?php $this->load->view('template/rodape'); ?> 
