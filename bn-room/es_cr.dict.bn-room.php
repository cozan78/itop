<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2015 Federico Lazcano
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
'Class:Room' => 'Oficina',
	'Class:Room+' => 'Oficina',
	'Class:Room/Attribute:name' => 'Identificacion Oficina',
	'Class:Room/Attribute:name+' => 'Identificacion Oficina',
	'Class:Room/Attribute:location_id' => 'Localidad',
	'Class:Room/Attribute:location_id+' => 'Localidad de la Oficina',
	'Class:Room/Attribute:physicaldevice_list' => 'Lista de dispositivos',
	'Class:Room/Attribute:person_list' => 'Lista de Contactos',
	'Class:Room/Attribute:status' => 'Estado',
	'Class:Room/Attribute:status+' => 'Estado',
	'Class:Room/Attribute:status/Value:active' => 'Habilitada',
	'Class:Room/Attribute:status/Value:active+' => 'Habilitada',
	'Class:Room/Attribute:status/Value:inactive' => 'No habilitada',
	'Class:Room/Attribute:status/Value:inactive+' => 'No habilitada',
//	'Class:Location/Attribute:status' => 'Status',
	'Class:Location/Attribute:room_list' => 'Oficinas',
	'Class:Location/Attribute:room_list+' => 'Oficinas',
	'Class:Person/Attribute:room_id' => 'Oficina',
	'Class:Person/Attribute:room_id+' => 'Oficina',
	'Class:PhysicalDevice/Attribute:room_id' => 'Oficina',
	'Class:PhysicalDevice/Attribute:room_id+' => 'Oficina',
	'Class:Rack/Attribute:room_id' => 'Oficina',
	'Class:Rack/Attribute:room_id+' => 'Oficina',
//	'Class:Server/Attribute:room_id' => 'Room',
//	'Class:Server/Attribute:room_id+' => 'Room at Location',
//	'Class:PC/Attribute:room_id' => 'Room',
//	'Class:PC/Attribute:room_id+' => 'Room at Location',
	'Menu:NewLocation' => 'Nueva Localidad',
	'Menu:SearchLocation' => 'Buscar Localidad',
	'Menu:NewRoom' => 'Nueva oficina',
	'Menu:SearchRoom' => 'Buscar oficina',
	'Menu:Count' => 'Numero de Oficina',
	'Menu:Location:Count' => '%1$d Localidades',));
?>
