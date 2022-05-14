<?php



cerca('Tor','Torino') === true; 
cerca('Tor','Tortona') === true; 
cerca('Tor  ','Tortona') === true; 
cerca('Tor','Torino') === true; 
cerca('tor','Torino') === true; 
cerca('no','Avellino') === false; 


cerca_cap('10100'.'10100') === true;
