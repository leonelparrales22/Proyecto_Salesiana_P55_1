<?php
    $temperatura=$this->input->post('temperatura');
    $humedad=$this->input->post('humedad');
    $this->NodeModelo->enviar_Datos($temperatura,$humedad);
?>
