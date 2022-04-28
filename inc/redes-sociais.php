<?php $contato = get_page_by_title('contato'); ?>

    <ul>
        <?php if(have_rows('redes-social', $contato)): while(have_rows('redes-social', $contato)) : the_row(); ?>
        <li><a href="<?php the_sub_field('link_social') ?>" target="_blank"><img src="<?php the_sub_field('imagem_social') ?>" alt="<?php the_sub_field('nome_social') ?>"></a></li>
        <?php endwhile; else : endif; ?>
    </ul>