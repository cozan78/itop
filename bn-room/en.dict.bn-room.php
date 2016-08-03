<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	// Dictionary entries go here
	'Class:Room' => 'Rooms',
	'Class:Room+' => 'Room or Wiring cabinet',
	'Class:Room/Attribute:name' => 'Room label',
	'Class:Room/Attribute:name+' => 'Room label',
	'Class:Room/Attribute:location_id' => 'Location',
	'Class:Room/Attribute:location_id+' => 'Room at Location',
	'Class:Room/Attribute:physicaldevice_list' => 'List of Devices',
	'Class:Room/Attribute:person_list' => 'List of Persons',
	'Class:Room/Attribute:status' => 'Status',
	'Class:Room/Attribute:status+' => 'Status',
	'Class:Room/Attribute:status/Value:active' => 'Activ',
	'Class:Room/Attribute:status/Value:active+' => 'Activ',
	'Class:Room/Attribute:status/Value:inactive' => 'Inactiv',
	'Class:Room/Attribute:status/Value:inactive+' => 'Inactiv',
//	'Class:Location/Attribute:status' => 'Status',
	'Class:Location/Attribute:room_list' => 'Rooms',
	'Class:Location/Attribute:room_list+' => 'Rooms',
	'Class:Person/Attribute:room_id' => 'Room',
	'Class:Person/Attribute:room_id+' => 'Room at Location',
	'Class:PhysicalDevice/Attribute:room_id' => 'Room',
	'Class:PhysicalDevice/Attribute:room_id+' => 'Room at Location',
	'Class:Rack/Attribute:room_id' => 'Room',
	'Class:Rack/Attribute:room_id+' => 'Room at Location',
//	'Class:Server/Attribute:room_id' => 'Room',
//	'Class:Server/Attribute:room_id+' => 'Room at Location',
//	'Class:PC/Attribute:room_id' => 'Room',
//	'Class:PC/Attribute:room_id+' => 'Room at Location',
	'Menu:NewLocation' => 'New Location',
	'Menu:SearchLocation' => 'Search Location',
	'Menu:NewRoom' => 'New Room',
	'Menu:SearchRoom' => 'Search Room',
	'Menu:Count' => 'Number of locations',
	'Menu:Location:Count' => '%1$d Locations',
));
?>
