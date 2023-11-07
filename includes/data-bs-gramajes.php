<?php
    $gramajes = get_sub_field('peso_del_producto')['gramaje'];
    if ($gramajes):
        $jsonEncodedGramajes = array_map(
            function($gramaje) {
                return htmlspecialchars(json_encode($gramaje), ENT_NOQUOTES, 'UTF-8');
            },
            $gramajes
        );

        echo "<span>" . implode('</span><span>', $jsonEncodedGramajes) . "</span>";
    endif;
?>