$(document).ready(function() {
    $('#add_card_types_6').parent().addClass('d-none');
    $('#add_card_types_7').parent().addClass('d-none');
    $('#add_card_types_8').parent().addClass('d-none');
    $('#add_card_types_9').parent().addClass('d-none');
    $('#add_card_types_10').parent().addClass('d-none');
    $('#add_card_types_11').parent().addClass('d-none');
    $('#add_card_types_12').parent().addClass('d-none');
    $('#add_card_types_13').parent().addClass('d-none');
    $('#add_card_types_14').parent().addClass('d-none');
    $('#add_card_types_15').parent().addClass('d-none');
    
    // Joueur
    $('#add_card_types_1').click(function() {
        if($(this).is(':checked')) {
            $('#add_card_types_2').parent().addClass('d-none');
            $('#add_card_types_3').parent().addClass('d-none');
            $('#add_card_types_4').parent().addClass('d-none');
            $('#add_card_types_5').parent().addClass('d-none');
            $('#add_card_types_2').prop('checked', false);
            $('#add_card_types_3').prop('checked', false);
            $('#add_card_types_4').prop('checked', false);
            $('#add_card_types_5').prop('checked', false);
            $('#add_card_types_6').parent().removeClass('d-none');
        } else if($(this).not(':checked')) {
            $('#add_card_types_2').parent().removeClass('d-none');
            $('#add_card_types_3').parent().removeClass('d-none');
            $('#add_card_types_4').parent().removeClass('d-none');
            $('#add_card_types_5').parent().removeClass('d-none');
            $('#add_card_types_6').parent().addClass('d-none');
            $('#add_card_types_6').prop('checked', false);
        }
    });
    
    // Monstre
    $('#add_card_types_2').click(function() {
        if($(this).is(':checked')) {
            $('#add_card_types_1').parent().addClass('d-none');
            $('#add_card_types_3').parent().addClass('d-none');
            $('#add_card_types_4').parent().addClass('d-none');
            $('#add_card_types_5').parent().addClass('d-none');
            $('#add_card_types_1').prop('checked', false);
            $('#add_card_types_3').prop('checked', false);
            $('#add_card_types_4').prop('checked', false);
            $('#add_card_types_5').prop('checked', false);
            $('#add_card_types_7').parent().removeClass('d-none');
            $('#add_card_types_8').parent().removeClass('d-none');
            $('#add_card_types_9').parent().removeClass('d-none');
            $('#add_card_types_10').parent().removeClass('d-none');
        } else if($(this).not(':checked')) {
            $('#add_card_types_1').parent().removeClass('d-none');
            $('#add_card_types_3').parent().removeClass('d-none');
            $('#add_card_types_4').parent().removeClass('d-none');
            $('#add_card_types_5').parent().removeClass('d-none');
            $('#add_card_types_7').parent().addClass('d-none');
            $('#add_card_types_8').parent().addClass('d-none');
            $('#add_card_types_9').parent().addClass('d-none');
            $('#add_card_types_10').parent().addClass('d-none');
            $('#add_card_types_7').prop('checked', false);
            $('#add_card_types_8').prop('checked', false);
            $('#add_card_types_9').prop('checked', false);
            $('#add_card_types_10').prop('checked', false);
        }
    });
    
    // Trésor
    $('#add_card_types_3').click(function() {
        if($(this).is(':checked')) {
            $('#add_card_types_1').parent().addClass('d-none');
            $('#add_card_types_2').parent().addClass('d-none');
            $('#add_card_types_4').parent().addClass('d-none');
            $('#add_card_types_5').parent().addClass('d-none');
            $('#add_card_types_1').prop('checked', false);
            $('#add_card_types_2').prop('checked', false);
            $('#add_card_types_4').prop('checked', false);
            $('#add_card_types_5').prop('checked', false);
            $('#add_card_types_6').parent().removeClass('d-none');
            $('#add_card_types_11').parent().removeClass('d-none');
            $('#add_card_types_12').parent().removeClass('d-none');
            $('#add_card_types_13').parent().removeClass('d-none');
        } else if($(this).not(':checked')) {
            $('#add_card_types_1').parent().removeClass('d-none');
            $('#add_card_types_2').parent().removeClass('d-none');
            $('#add_card_types_4').parent().removeClass('d-none');
            $('#add_card_types_5').parent().removeClass('d-none');
            $('#add_card_types_6').parent().addClass('d-none');
            $('#add_card_types_11').parent().addClass('d-none');
            $('#add_card_types_12').parent().addClass('d-none');
            $('#add_card_types_13').parent().addClass('d-none');
            $('#add_card_types_6').prop('checked', false);
            $('#add_card_types_11').prop('checked', false);
            $('#add_card_types_12').prop('checked', false);
            $('#add_card_types_13').prop('checked', false);
        }
    });
    
    // Butin
    $('#add_card_types_4').click(function() {
        if($(this).is(':checked')) {
            $('#add_card_types_1').parent().addClass('d-none');
            $('#add_card_types_2').parent().addClass('d-none');
            $('#add_card_types_3').parent().addClass('d-none');
            $('#add_card_types_5').parent().addClass('d-none');
            $('#add_card_types_7').parent().removeClass('d-none');
            $('#add_card_types_14').parent().removeClass('d-none');
            $('#add_card_types_15').parent().removeClass('d-none');
        } else if($(this).not(':checked')) {
            $('#add_card_types_1').parent().removeClass('d-none');
            $('#add_card_types_2').parent().removeClass('d-none');
            $('#add_card_types_3').parent().removeClass('d-none');
            $('#add_card_types_5').parent().removeClass('d-none');
            $('#add_card_types_7').parent().addClass('d-none');
            $('#add_card_types_14').parent().addClass('d-none');
            $('#add_card_types_15').parent().addClass('d-none');
        }
    });
    
    // Âme
    $('#add_card_types_5').click(function() {
        if($(this).is(':checked')) {
            $('#add_card_types_1').parent().addClass('d-none');
            $('#add_card_types_2').parent().addClass('d-none');
            $('#add_card_types_3').parent().addClass('d-none');
            $('#add_card_types_4').parent().addClass('d-none');
            $('#add_card_types_16').parent().addClass('d-none');
            $('#add_card_types_1').prop('checked', false);
            $('#add_card_types_2').prop('checked', false);
            $('#add_card_types_3').prop('checked', false);
            $('#add_card_types_4').prop('checked', false);
            $('#add_card_types_16').prop('checked', false);
        } else if($(this).not(':checked')) {
            $('#add_card_types_1').parent().removeClass('d-none');
            $('#add_card_types_2').parent().removeClass('d-none');
            $('#add_card_types_3').parent().removeClass('d-none');
            $('#add_card_types_4').parent().removeClass('d-none');
            $('#add_card_types_16').parent().removeClass('d-none');
        }
    });
    
    // Basique
    $('#add_card_types_7').click(function() {
        if($(this).is(':checked') && $('#add_card_types_2').is(':checked')) {
            $('#add_card_types_8').parent().addClass('d-none');
            $('#add_card_types_9').parent().addClass('d-none');
            $('#add_card_types_10').parent().addClass('d-none');
            $('#add_card_types_8').prop('checked', false);
            $('#add_card_types_9').prop('checked', false);
            $('#add_card_types_10').prop('checked', false);
        } else if($(this).not(':checked') && $('#add_card_types_2').is(':checked')) {
            $('#add_card_types_8').parent().removeClass('d-none');
            $('#add_card_types_9').parent().removeClass('d-none');
            $('#add_card_types_10').parent().removeClass('d-none');
        } else if($(this).is(':checked') && $('#add_card_types_4').is(':checked')) {
            $('#add_card_types_14').parent().addClass('d-none');
            $('#add_card_types_15').parent().addClass('d-none');
            $('#add_card_types_14').prop('checked', false);
            $('#add_card_types_15').prop('checked', false);
        } else if($(this).not(':checked') && $('#add_card_types_4').is(':checked')) {
            $('#add_card_types_14').parent().removeClass('d-none');
            $('#add_card_types_15').parent().removeClass('d-none');
        }
    });
    
    // Boss
    $('#add_card_types_8').click(function() {
        if($(this).is(':checked')) {
            $('#add_card_types_7').parent().addClass('d-none');
            $('#add_card_types_9').parent().addClass('d-none');
            $('#add_card_types_10').parent().addClass('d-none');
            $('#add_card_types_7').prop('checked', false);
            $('#add_card_types_9').prop('checked', false);
            $('#add_card_types_10').prop('checked', false);
        } else if($(this).not(':checked')) {
            $('#add_card_types_7').parent().removeClass('d-none');
            $('#add_card_types_9').parent().removeClass('d-none');
            $('#add_card_types_10').parent().removeClass('d-none');
        }
    });
    
    // Bonus
    $('#add_card_types_9').click(function() {
        if($(this).is(':checked')) {
            $('#add_card_types_7').parent().addClass('d-none');
            $('#add_card_types_8').parent().addClass('d-none');
            $('#add_card_types_10').parent().addClass('d-none');
            $('#add_card_types_7').prop('checked', false);
            $('#add_card_types_8').prop('checked', false);
            $('#add_card_types_10').prop('checked', false);
        } else if($(this).not(':checked')) {
            $('#add_card_types_7').parent().removeClass('d-none');
            $('#add_card_types_8').parent().removeClass('d-none');
            $('#add_card_types_10').parent().removeClass('d-none');
        }
    });
    
    // Malédiction
    $('#add_card_types_10').click(function() {
        if($(this).is(':checked')) {
            $('#add_card_types_7').parent().addClass('d-none');
            $('#add_card_types_8').parent().addClass('d-none');
            $('#add_card_types_9').parent().addClass('d-none');
            $('#add_card_types_7').prop('checked', false);
            $('#add_card_types_8').prop('checked', false);
            $('#add_card_types_9').prop('checked', false);
        } else if($(this).not(':checked')) {
            $('#add_card_types_7').parent().removeClass('d-none');
            $('#add_card_types_8').parent().removeClass('d-none');
            $('#add_card_types_9').parent().removeClass('d-none');
        }
    });
    
    // Colifichet
    $('#add_card_types_14').click(function() {
        if($(this).is(':checked')) {
            $('#add_card_types_7').parent().addClass('d-none');
            $('#add_card_types_15').parent().addClass('d-none');
            $('#add_card_types_7').prop('checked', false);
            $('#add_card_types_15').prop('checked', false);
        } else if($(this).not(':checked')) {
            $('#add_card_types_7').parent().removeClass('d-none');
            $('#add_card_types_15').parent().removeClass('d-none');
        }
    });
    
    $('#add_card_types_15').click(function() {
        if($(this).is(':checked')) {
            $('#add_card_types_7').parent().addClass('d-none');
            $('#add_card_types_14').parent().addClass('d-none');
            $('#add_card_types_7').prop('checked', false);
            $('#add_card_types_14').prop('checked', false);
        } else if($(this).not(':checked')) {
            $('#add_card_types_7').parent().removeClass('d-none');
            $('#add_card_types_14').parent().removeClass('d-none');
        }
    });
});