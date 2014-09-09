function getSelectedData(selectedData) {
    $.getJSON(selectedData, function(data) {
            $("#flavor_1").agile_carousel({
            carousel_data: data,
            carousel_outer_height: 520,
            carousel_height: 468,
            slide_height: 468,
            carousel_outer_width: 800,
            slide_width: 782,
            transition_time: 300,
            timer: 4000,
            continuous_scrolling: true,
            control_set_1: "numbered_buttons",
            no_control_set: "hover_previous_button,hover_next_button",
        });
    });
}