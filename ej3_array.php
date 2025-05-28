<?php
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
segundos, del $fun[mday]/$fun[mon]/$fun[year]";
?>
<p>El codigo retorna la hora, minutos y segundos en que se accedio a la pagina, asi como el dia, mes y año</p>