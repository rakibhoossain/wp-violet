/*
 * vcpm js for tooltip
 *========================================
 */
jQuery(document).ready(function($){
$( ".vcpm-table" ).tooltip({ position: {
    my: "center bottom-10",
        at: "center top",
        using: function( position, feedback ) {
          $( this ).css( position );
          $( "<div>" )
            .addClass( "arrow" )
            .addClass( feedback.vertical )
            .addClass( feedback.horizontal )
            .appendTo( this );
        } } });
});