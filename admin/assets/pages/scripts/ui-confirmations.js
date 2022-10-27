var UIConfirmations = function () {

    var handleSample = function () {
        
        $('#bs_confirmation_demo_1').on('confirmed.bs.confirmation', function () {
            alert('You confirmed action #1');
        });

        $('#bs_confirmation_demo_1').on('canceled.bs.confirmation', function () {
            alert('You canceled action #1');
        });
    }
    return {
        //main function to initiate the module
        init: function () {
           handleSample();
        }
    };
}();
jQuery(document).ready(function() {    
   UIConfirmations.init();
});