    <script type="x/template" id="modal-form">

        <div class="modal-mask" v-show="show" transition="modal">
            <div class="modal-wrapper">
                <div class="modal-container">

                    <div class="modal-header">
                        <slot name="header">
                            Action Required
                        </slot>
                    </div>

                    <div class="modal-body">
                        <slot name="body">
                            An action is required.
                        </slot>
                    </div>

                    <div class="modal-footer">
                        <slot name="footer">
                            <button class="modal-default-button"
                            @click="show = false">
                            CANCEL
                            </button>
                            <button class="modal-default-button">
                            OK
                            </button>
                        </slot>
                    </div>

                </div>
            </div>
        </div>

    </script>