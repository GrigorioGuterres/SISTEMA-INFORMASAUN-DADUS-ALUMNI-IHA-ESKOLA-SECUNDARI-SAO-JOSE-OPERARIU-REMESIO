<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'DASHBOARD', 
			'icon' => '<i class="material-icons ">dashboard</i>'
		),
		
		array(
			'path' => 'menu8', 
			'label' => 'MASTER INPUT', 
			'icon' => '<i class="material-icons ">input</i>','submenu' => array(
		array(
			'path' => 'tb_municipiu', 
			'label' => 'DADUS MUNICIPIU', 
			'icon' => '<i class="material-icons ">input</i>'
		),
		
		array(
			'path' => 'tb_postu', 
			'label' => 'DADUS POSTU', 
			'icon' => '<i class="material-icons ">input</i>'
		),
		
		array(
			'path' => 'tb_suku', 
			'label' => 'DADUS SUKU', 
			'icon' => '<i class="material-icons ">input</i>'
		),
		
		array(
			'path' => 'tb_aldeia', 
			'label' => 'DADUS ALDEIA', 
			'icon' => '<i class="material-icons ">input</i>'
		),
		
		array(
			'path' => 'tb_departamentu', 
			'label' => 'DADUS DEPARTAMENTU', 
			'icon' => '<i class="material-icons ">input</i>'
		)
	)
		),
		
		array(
			'path' => 'menu9', 
			'label' => 'PROSSEESU DADUS', 
			'icon' => '<i class="material-icons ">autorenew</i>','submenu' => array(
		array(
			'path' => 'tb_alunmi', 
			'label' => 'REJISTU DADUS', 
			'icon' => '<i class="material-icons ">hourglass_empty</i>'
		)
	)
		),
		
		array(
			'path' => 'menu10', 
			'label' => 'OUTPUT', 
			'icon' => '<i class="material-icons ">insert_drive_file</i>','submenu' => array(
		array(
			'path' => 'relatori_alun', 
			'label' => 'RELATORIU GERAL', 
			'icon' => '<i class="material-icons ">attach_file</i>'
		),
		
		array(
			'path' => 'relatorio_mun', 
			'label' => 'RELATORIO MUNICIPIU', 
			'icon' => '<i class="material-icons ">attach_file</i>'
		),
		
		array(
			'path' => 'relatori_postu', 
			'label' => 'RELATORIO POSTU', 
			'icon' => '<i class="material-icons ">attach_file</i>'
		),
		
		array(
			'path' => 'relatori_suku', 
			'label' => 'RELATORIO SUKU', 
			'icon' => '<i class="material-icons ">attach_file</i>'
		),
		
		array(
			'path' => 'relatori_ald', 
			'label' => 'RELATORIO ALDEIA', 
			'icon' => '<i class="material-icons ">attach_file</i>'
		)
	)
		)
	);
		
			public static $navbartopleft = array(
		array(
			'path' => 'tb_user', 
			'label' => 'ADMIN', 
			'icon' => '<i class="material-icons ">notifications_paused</i>'
		)
	);
		
	
	
			public static $sexo = array(
		array(
			"value" => "Male", 
			"label" => "Male", 
		),
		array(
			"value" => "Female", 
			"label" => "Female", 
		),);
		
			public static $account_status = array(
		array(
			"value" => "Active", 
			"label" => "Active", 
		),
		array(
			"value" => "Pending", 
			"label" => "Pending", 
		),
		array(
			"value" => "Blocked", 
			"label" => "Blocked", 
		),);
		
}