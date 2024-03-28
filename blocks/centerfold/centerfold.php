<div class="centerfold">
    <span class="bg-title">AKTYWNA SZKOŁA</span>
    <div class="centerfold_wraper">
        <svg class="centerfold-top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920.003 285.792">
            <rect id="Rectángulo_22" data-name="Rectángulo 22" width="1920" height="193" fill="#fff" />
            <path id="Trazado_62" data-name="Trazado 62"
                d="M1920,0,960.579,76.246,0,0V170.292L960.579,81.957,1920,170.292Z" transform="translate(0 115.5)"
                fill="#36a9e1" />
        </svg>

        <div class="container">
            <div class="centerfold_items">
                <div class="col tablinks aw-bg" onclick="tabs(event, 'aktywny-wekeend')">
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/blocks/centerfold/img/aw-cf.png"
                            alt="Aktywny wekeend">

                        <div class="item-content">
                            <h3 class="h2">Aktywny Weekend</h3>
                            <p>Lorem ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="col tablinks ao-bg active" onclick="tabs(event, 'aktywny-orlik')">
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/blocks/centerfold/img/ao-cf.png"
                            alt="Aktywny orlik">
                        <div class="item-content">
                            <h3 class="h2">Aktywny Orlik</h3>
                            <p>Lorem ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="col tablinks adk-bg" onclick="tabs(event, 'aktywny-do-kwadratu')">
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/blocks/centerfold/img/adk-cf.png"
                            alt="Aktywny do kwadratu">
                        <div class="item-content">
                            <h3 class="h2">Aktywny do kwadratu</h3>
                            <p>Lorem ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="aktywny-wekeend" class="tabcontent aw-bg">
                <div class="centerfold-content">
                    <div class="centerfold-content__wrap text-center">
                        <h2>Aktywny wekeekend</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the
                            industry’s standard dummy
                        </p>
                        <a href="https://www.aktywnaszkola.pl/index.php/aktywny-weekend/" class="btn-rev">Dowiedz się
                            więcej</a>
                    </div>
                </div>
            </div>
            <div id="aktywny-orlik" class="tabcontent ao-bg active">
                <div class="centerfold-content">
                    <div class="centerfold-content__wrap text-center">
                        <h2>Aktywny Orlik</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the
                            industry’s standard dummy
                        </p>
                        <a href="https://www.aktywnaszkola.pl/index.php/aktywny-orlik/" class="btn-rev">Dowiedz się
                            więcej</a>
                    </div>
                </div>
            </div>
            <div id="aktywny-do-kwadratu" class="tabcontent adk-bg">
                <div class="centerfold-content">
                    <div class="centerfold-content__wrap text-center">
                        <h2>Aktywny do kwadratu</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the
                            industry’s standard dummy
                        </p>
                        <a href="https://www.aktywnaszkola.pl/index.php/aktywny-do-kwadratu/" class="btn-rev">Dowiedz
                            się więcej</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <svg class="centerfold-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2074 168.01">
        <path id="Trazado_63" data-name="Trazado 63" d="M3268,5295.2V5415.01l1966.089-161.053Z"
            transform="translate(-3268 -5247)" fill="#36a9e1" />
        <path id="Trazado_64" data-name="Trazado 64" d="M0,710H2074V856.711L0,763Z" transform="translate(0 -710)"
            fill="#edf8fd" />
    </svg>
</div>




<script>
function tabs(evt, tabs) {
    evt.preventDefault();
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].classList.remove('active');
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabs).classList.add('active');
    evt.currentTarget.className += " active";
}
</script>