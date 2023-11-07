<?php
    $gramajes = get_sub_field('peso_del_producto')['gramaje'];
    if ($gramajes):
        $jsonEncodedGramajes = array_map(
            function($gramaje) {
                return htmlspecialchars($gramaje, ENT_QUOTES, 'UTF-8');
            },
            $gramajes
        );

        echo implode('', array_map(function($encodedGramaje) {
            return '<span>' . $encodedGramaje . '</span>';
        }, $jsonEncodedGramajes));
    endif;
?>