<?php

/**
 * Block Name: FAQ Global
 *
 * This is the template that displays the FAQ Global block.
 */
$program = get_field('faq');
if ($program == 1) :
    $faqs = get_field('faq_aw', 'options');
elseif ($program == 2) :
    $faqs = get_field('faq_ao', 'options');
elseif ($program == 3) :
    $faqs = get_field('faq_adp', 'options');
endif;

$num = '1';
?>
<div id="faq-global">
    <div class="faq-global js">
        <div class="faq__wraper">
            <?php if ($faqs) { ?>
                <div class="col">
                    <?php foreach ($faqs as $faq) { ?>
                        <div class="accordion js">
                            <h3 class="question h5">
                                <span><?php echo $num; ?>. <?php echo $faq['pytanie']; ?></span>
                            </h3>
                            <div class="answer">
                                <div>
                                    <?php echo $faq['odpowiedz']; ?>
                                </div>
                            </div>
                        </div>
                    <?php $num++;
                    } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>