<script type="x/template" id="modal-failure">
    <div class="modal-mask" v-show="show" transition="modal">
        <div class="modal-wrapper">
            <div class="modal-container">

                <div class="modal-header">
                    <slot name="header">
                        Failure
                    </slot>
                </div>

                <div class="modal-body">
                    <slot name="body">
                        Your data has not been submitted due to a server error.
                    </slot>
                </div>

                <div class="modal-footer">
                    <slot name="footer">
                        <button class="modal-default-button"
                        @click="show = false">
                        OK
                        </button>
                    </slot>
                </div>
            </div>
        </div>
    </div>
</script>