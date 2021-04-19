function dynamicStateForm(naija_states_tagID, foreign_state_tagID, country_list_tag, selected_state_tagID, input_state_tagID){
    $(foreign_state_tagID).hide();
    var selected_country = $(country_list_tag).val();
    
    if(selected_country != 'Nigeria'){
        $(naija_states_tagID).hide(); 
        $(foreign_state_tagID).show();
        $(input_state_tagID).prop('disabled', false);
        $(selected_state_tagID).prop('disabled', true);
    }
    else{
        $(naija_states_tagID).show();
        $(foreign_state_tagID).hide(); 
        $(input_state_tagID).prop('disabled', true);
        $(selected_state_tagID).prop('disabled', false);
    }

    $(country_list_tag).change(function(){
        var selected_country = $(this).val();
        if(selected_country != 'Nigeria'){
            $(naija_states_tagID).hide();
            $(foreign_state_tagID).show();
            $(input_state_tagID).prop('disabled', false);
        }
        else{
            $(naija_states_tagID).show();
            $(foreign_state_tagID).hide(); 
            $(input_state_tagID).prop('disabled', true);
        }
    });
}
