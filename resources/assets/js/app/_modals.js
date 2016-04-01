/**
 * Created by greggushard on 4/1/16.
 */

/** Modal Controller **/

function createModals(modals)
{
    modals.forEach(function(id){

        Vue.component( 'modal', {
            template: '#' + id,
            props: {
                show: {
                    type: Boolean,
                    required: true,
                    twoWay: true
                }
            }
        });

        new Vue({
            el: '#' + id,
            data: {
                showModal: false
            }
        });

    });

}