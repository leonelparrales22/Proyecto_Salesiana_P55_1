<?php
    $temperatura=$this->input->post('temperatura');
    $humedad=$this->input->post('humedad');
    
    //$temperatura = $_POST ['temperatura'];
    //$humedad = $_POST ['humedad'];
    
    $this->NodeModelo->enviar_Datos($temperatura,$humedad);
    echo 'leo';
?>
