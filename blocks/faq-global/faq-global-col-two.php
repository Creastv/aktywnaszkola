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
        <div class="faq__wraper--col">
            <?php if ($faqs) { ?>
                <?php
                $counter = 0;
                foreach ($faqs as $faq) {
                    if ($counter % 2 === 0) {
                        echo '<div class="col">';
                    }
                ?>
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
                <?php
                    if ($counter % 2 === 1) {
                        echo '</div>'; // Close the column div
                    }
                    $counter++;
                    $num++;
                }
                // Close the column div if the number of FAQs is odd
                if ($counter % 2 === 1) {
                    echo '</div>';
                }
                ?>
            <?php } ?>
        </div>
    </div>
</div>