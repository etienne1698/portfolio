<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-menu is-active">
            <div class="navbar-start">

            </div>

            <div class="navbar-end is-mobile">
                <div class="navbar-item is-mobile">
                    <div class="buttons">
                        <a href="./?lang=<?php echo Context::getContext()->getLanguage() === 'fr' ? 'en' : 'fr' ?>"
                           class="button"
                           style="max-width: 50px">
                            <?php if (Context::getContext()->getLanguage() === 'fr'): ?>
                                <img src="./assets/img/fr.png"
                                     alt="fr"
                                     title="fr"
                                     data-sal="zoom-in"
                                     data-sal-delay="50"/>
                            <?php else: ?>
                                <img src="./assets/img/en.png"
                                     alt="en"
                                     title="en"
                                     data-sal="zoom-in"
                                     data-sal-delay="50"/>
                            <?php endif; ?>
                        </a>
                        <a target="_blank"
                           href="./assets/cv_etienne_robert.pdf"
                           class="button is-white is-rounded"
                           data-sal="zoom-in"
                           data-sal-delay="50"
                           download>
                            <?php echo Context::getContext()->translate('downloadCv'); ?>
                        </a>
                        <button data-modal="contact"
                                class="button is-primary is-outlined is-rounded"
                                data-sal="zoom-in"
                                data-sal-delay="50">
                            <?php echo Context::getContext()->translate('contactMe'); ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>