<?php
/* Bet Calculator System Bet Post Type */
add_action( 'init', 'bet_calculator_sytem_create_bet_post_type' );
function bet_calculator_sytem_create_bet_post_type() {
  register_post_type( 'bet',
    array(
      'labels' => array(
        'name' => __( 'Bets' ),
        'singular_name' => __( 'Bet' )
      ),
      'public' => true,
      'has_archive' => false,
      'exclude_from_search' => true,
      'supports' => array( 'title', 'author', 'custom-fields' )
    )
  );
  flush_rewrite_rules();
}
/* Bet Calculator System Bet Post Type */
