$(function() {
    let timetableSaturday = new Timetable();
    timetableSaturday.setScope(9, 20); // optional, only whole hours between 0 and 23
    timetableSaturday.addLocations(['A', 'B', 'C', 'D']);

    /* Add your events using addEvent(name, location, startDate, endDate[, options]) */
    // timetable.addEvent('Frankadelic', 'Nile', new Date(2015,7,17,10,45), new Date(2015,7,17,12,30));

    /* In addition, you can pass options through an object (optional) */
    // var options = {
    //     url: '#', // makes the event clickable
    //     class: 'vip', // additional css class
    //     data: { // each property will be added to the data-* attributes of the DOM node for this event
    //         id: 4,
    //         ticketType: 'VIP'
    //     },
    //     onClick: function(event, timetable, clickEvent) {} // custom click handler, which is passed the event object and full timetable as context
    // };
    // timetable.addEvent('Jam Session', 'Nile', new Date(2015,7,17,21,15), new Date(2015,7,17,23,30), options);

    let rendererSaturday = new Timetable.Renderer(timetableSaturday);
    rendererSaturday.draw('.timetable-saturday'); // any css selector

    let timetableSunday = new Timetable();
    timetableSunday.setScope(9, 20); // optional, only whole hours between 0 and 23
    timetableSunday.addLocations(['A', 'B', 'C', 'D']);

    /* Add your events using addEvent(name, location, startDate, endDate[, options]) */
    // timetable.addEvent('Frankadelic', 'Nile', new Date(2015,7,17,10,45), new Date(2015,7,17,12,30));

    /* In addition, you can pass options through an object (optional) */
    // var options = {
    //     url: '#', // makes the event clickable
    //     class: 'vip', // additional css class
    //     data: { // each property will be added to the data-* attributes of the DOM node for this event
    //         id: 4,
    //         ticketType: 'VIP'
    //     },
    //     onClick: function(event, timetable, clickEvent) {} // custom click handler, which is passed the event object and full timetable as context
    // };
    // timetable.addEvent('Jam Session', 'Nile', new Date(2015,7,17,21,15), new Date(2015,7,17,23,30), options);

    let rendererSunday = new Timetable.Renderer(timetableSunday);
    rendererSunday.draw('.timetable-sunday'); // any css selector
});