<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('template/topo'); ?> 
<?php $this->load->view('template/menu'); ?> 

<div class="s-content">

    <div class="row">

        <div id="main" class="s-content__main large-8 column">
            <?php $this->load->view('template/posts'); ?> 



            <?php $this->load->view('template/coluna-direita'); ?>  

            <?php $this->load->view('template/rodape');?> 

