<?php
    $temperatura=$this->input->post('temperatura');
    $humedad=$this->input->post('humedad');
    $foco=$this->input->post('foco');
    $ventilador=$this->input->post('ventilador');
    $this->NodeModelo->enviar_Datos($temperatura,$humedad,$foco,$ventilador);
?>