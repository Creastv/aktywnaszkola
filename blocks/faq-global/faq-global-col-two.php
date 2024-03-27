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


$chunks = array_chunk($faqs, ceil(count($faqs) / 2));
$colOne = $chunks[0];
$colTwo = $chunks[1];
$num = 1;
$num2 = count($colOne) + 1;

?>

<div id="faq-global">
    <div class="faq-global js">

        <div class="faq__wraper--col">
            <?php if ($colOne) { ?>
            <div class="col">
                <?php foreach ($colOne as $acc) { ?>
                <div class="accordion js">
                    <h3 class="question ">
                        <span><?php echo $num; ?>. <?php echo $acc['pytanie']; ?></span>
                    </h3>
                    <div class="answer">
                        <div>
                            <?php echo $acc['odpowiedz']; ?>
                        </div>
                    </div>
                </div>
                <?php $num++;
                    } ?>
            </div>
            <?php } ?>
            <?php if ($colTwo) { ?>
            <div class="col">
                <?php foreach ($colTwo as $acc) { ?>
                <div class="accordion js">
                    <h3 class="question ">
                        <span><?php echo $num2; ?>. <?php echo $acc['pytanie']; ?></span>
                    </h3>
                    <div class="answer">
                        <div>
                            <?php echo $acc['odpowiedz']; ?>
                        </div>
                    </div>
                </div>
                <?php $num2++;
                    } ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>