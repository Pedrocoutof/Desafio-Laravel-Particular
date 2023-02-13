document.addEventListener('DOMContentLoaded',function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'pt-br',
        initialView: 'dayGridMonth',
        initialDate: '2023-02-07',
        navLinks: true,
        eventLimit: true,
        selectable: true,
        eventClick: function(){ return alert('Event Click')},
        eventDrop: function(){ return alert('Event Drop')},
        select: function(){ return alert('Event select')},

        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: '/treino/json'
    });

    calendar.render();
});
