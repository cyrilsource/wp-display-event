function getFutureEvent () {

$time = current_time("Ymd");
    // query events
    $args = (array(
        'posts_per_page'    => -1,
        'post_type'         => 'event',
        'meta_query'        => array(   
            array(
                'key'       => 'date_start',
                'compare'   => '>',
                'value'     => $time,
                'type'      => 'DATE'
            )
        ),
        'order'             => 'ASC',
        'orderby'           => 'meta_value',
        'meta_key'          => 'date_start',
        'meta_type'         => 'DATE'
    ));

    $query = new WP_Query($args); 

    return $query;
}

function getPresentEvent () {

$time = current_time("Ymd");
    // query events
    $args = (array(
            'posts_per_page'    => -1,
            'post_type'         => 'event',
            'meta_query'        => array(
                'relation'      => 'AND',
                array(
                    'key'       => 'date_start',
                    'compare'   => '<=',
                    'value'     => $time,
                    'type'      => 'DATE'
                ),
                array(
                    'key'       => 'date_end',
                    'compare'   => '>=',
                    'value'     => $time,
                    'type'      => 'DATE'
                )
            ),
            'order'             => 'ASC',
            'orderby'           => 'meta_value',
            'meta_key'          => 'date_start',
            'meta_type'         => 'DATE'
        ));

    $query = new WP_Query($args); 

    return $query;
}

function getPastEvent () {

    $time = current_time("Ymd");
    // query events
   $args = (array(
        'posts_per_page'    => -1,
        'post_type'         => 'event',
        'meta_query'        => array(   
            array(
                'key'       => 'date_end',
                'compare'   => '<',
                'value'     => $time,
                'type'      => 'DATE'
            )
        ),
        'order'             => 'ASC',
        'orderby'           => 'meta_value',
        'meta_key'          => 'date_end',
        'meta_type'         => 'DATE'
    ));


    $query = new WP_Query($args); 

    return $query;
}
