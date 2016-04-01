<script type="x/template" id="modal-success">
    <div class="modal-mask" v-show="show" transition="modal">
        <div class="modal-wrapper">
            <div class="modal-container">

                <div class="modal-header">
                    <slot name="header">
                        Success
                    </slot>
                </div>

                <div class="modal-body">
                    <slot name="body">
                        Your data has been submitted
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