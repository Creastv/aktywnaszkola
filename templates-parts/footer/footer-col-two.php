<div class="col">
    <?php if (is_active_sidebar('footer-2')) : ?>
    <?php dynamic_sidebar('footer-2'); ?>
    <?php else : ?>
    <div class="f_event">
        <div class="logos">
            <img src="http://localhost/aktywnaszkola/wp-content/uploads/2024/03/orlik-logo.png" alt="Orły Sportu">
            <img src="http://localhost/aktywnaszkola/wp-content/uploads/2024/03/ministerstwo.png"
                alt="Ministerswo Sportu i turystyki">
        </div>
        <p>
            Dofinansowano ze środków budżetu państwa,<br>
            których dysponentem jest Minister Sportu i Turystyki.
        </p>
    </div>
    <?php endif; ?>
</div>