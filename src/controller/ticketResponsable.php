<?php

require_once '../classes/TicketResponsable.php';


//testing la verifier Capaciter
$TicketResponsable = new TicketResponsable('admin_name', 'admin@example.com', 'admin_password', 'Ticket Responsable');

$resultCapacity = $TicketResponsable->verifierCapaciter(1);
print_r($resultCapacity) ;




?>