<?php
/* ----------------------------------------------------- */
/* Post Types */
/* ----------------------------------------------------- */
/* Criando um Post Type Personalizado
add_action('init', 'produtos_register');
function produtos_register() {
	 $labels = array(
			'name' => 'Produtos',
			'singular_name' => 'Post',
			'all_items' => 'Todos Produtos',
			'add_new' => 'Adicionar Produto',
			'add_new_item' => 'Adicionar Produto',
			'edit_item' => 'Editar Produto',
			'new_item' => 'Novo Produto',
			'view_item' => 'Ver Produto',
			'search_items' => 'Procurar Produto',
			'not_found' =>  'Nada encontrado',
			'not_found_in_trash' => 'Nada encontrado no lixo',
			'parent_item_colon' => '',
			'menu_icon'   => 'teste',
	);
	$args = array(
 			'menu_icon' => 'dashicons-portfolio',
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'capability_type' => 'post',
			'hierarchical' => true,
			'has_archive' => true,
			'taxonomy' => array('categoria-produto'),
			'menu_position' => 6,
			'supports' => array('title','editor','comments','thumbnail','category','gallery','page-attributes'),
			'rewrite' => array('slug' => 'produto')
	  );
	register_post_type('produto',$args);
}


/* ----------------------------------------------------- */
/* Taxonomias */
/* -----------------------------------------------------
/* Criando uma Taxonomia Personalizada
register_taxonomy("categoria-Produto", array("produto"),
	array(
		"hierarchical" => true,
		"label" => "categoria",
		"singular_label" => "categoria Produto",
		'rewrite' => array( 'slug' => 'categoria-produto' )
	)
);

/*******************************************************/
