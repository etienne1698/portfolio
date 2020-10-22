<div class="modal" id="contact">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head has-background-primary">
            <p class="modal-card-title has-text-white"><?php echo Context::getContext()->translate('contact'); ?></p>

            <button class="delete" data-close="modal" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <form accept-charset="UTF-8" action="" class="container" method="POST">
                <div class="columns is-centered">
                    <div class="column is-half">
                        <div class="field">
                            <label class="label"><?php echo Context::getContext()->translate('name'); ?></label>
                            <div class="control is-expanded">
                                <input class="input is-large"
                                       name="name"
                                       id="name-input"
                                       type="text">
                            </div>
                        </div>
                    </div>
                    <div class="column is-half">
                        <div class="field">
                            <label class="label"><?php echo Context::getContext()->translate('email'); ?></label>
                            <div class="control is-expanded">
                                <input class="input is-large"
                                       name="email"
                                       id="email-input"
                                       type="email">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-centered">
                    <div class="column">
                        <div class="field">
                            <label class="label"><?php echo Context::getContext()->translate('message'); ?></label>
                            <div class="control is-expanded">
                                <textarea class="textarea is-large"
                                          name="message"
                                          id="message-input"
                                          rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="button is-primary is-outlined is-rounded"
                        id="send-message"
                        data-close="modal"
                        type="button">
                    <?php echo Context::getContext()->translate('send'); ?>
                </button>
            </form>
        </section>
    </div>


</div>

