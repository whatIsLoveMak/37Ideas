<div class="modal micromodal-slide" id="modal-form" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <button class="modal__close" aria-label="Close modal" data-micromodal-close>
                <img src="<?= get_template_directory_uri() ?>/src/image/close.png" alt="">
            </button>
            <h5 class="form-title modal__title" id="modal-1-title">Заполните <span class="font">форму</span></h5>
            <main class="modal__content" id="modal-1-content">
                <div class="form-wrapper">
                    <form id="modalForm"></form>
                    <label class="input-field input-root">
                        
                        <input type="text"
                               placeholder="Ваше имя"
                               name="input_1"
                               form="modalForm"
                               required
                               data-input-id="1"
                        >
                        <span class="error-message"></span>
                    </label>

                    <label class="input-field input-root">
                        
                        <input type="tel"
                               placeholder="Номер телефона"
                               name="input_3"
                               form="modalForm"
                               required
                               class="phone-mask"
                               data-input-id="3"
                        >
                        <span class="error-message"></span>
                    </label>

                    <label class="checkbox-field input-root">
                        <input type="text"
                               name="input_4"
                               form="modalForm"
                               placeholder="Опишите кратко суть вашей идеи / проекта"
                               data-input-id="4"
                        >
                        <span class="checkbox-wrapper">
                            <!-- <span class="checkbox-replacer">
                                <svg>
                                    <use xlink:href="#small_check"></use>
                                </svg>
                            </span> -->
                            <span class="input-label">
                            </span>
                        </span>
                        <span class="error-message"></span>
                    </label>
                    <div class="modal-attention">
                        Нажимая на кнопку «Отправить», вы принимаете условия передачи данных и <a href="#"> политику конфеденциальности</a>
                    </div>
                    <button
                            class="button"
                            form="modalForm"
                            type="submit"
                            
                    >
                        <!-- <span class="spinner">
                            <svg>
                              <use xlink:href="#loader"></use>
                          </svg>
                        </span> -->
                        <span class="btn_text">Отправить</span>
                    </button>
                </div>
            </main>
        </div>
    </div>
</div>
<!-- <div class="modal micromodal-slide" id="confirm2" aria-hidden="true">
    
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal-background">
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-2-title">
                <div class="modal__container-row">
                    <div class="confirm-title"><h4>Благодарим за заявку!</h4></div>
                   
                        <svg >
                            <use xlink:href="#confirmed"></use>
                        </svg>
                   
                    
                    <div class="confirm-decription">
                        <p>Наш менеджер свяжется с Вами</p>
                        <p>в ближайшее время</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div> -->