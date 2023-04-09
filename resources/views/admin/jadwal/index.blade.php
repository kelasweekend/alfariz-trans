@extends('layouts.backend.master')
@section('title')
    Jadwal Armada
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>@yield('title')</h4>
                </div>
                <div class="card-body">
                    <!-- Table with outer spacing -->
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.1/index.global.min.js"
        integrity="sha256-C5Zde5lN8u7gnU38EzAicSy0gSTinSSFRZppISbcPLM=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.9.1/lang-all.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"
        integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'id',
                timeZone: 'Asia/Jakarta',
                themeSystem: "bootstrap",
                dayMaxEvents: true,
                headerToolbar: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'dayGridMonth,listMonth'
                },
                events: {!! $jadwal !!},
                eventColor: '#378006',
                eventRender: function(event, element) {
                    element.attr('href', 'javascript:void(0);');
                    element.click(function() {
                        bootbox.alert({
                            message: 'Description : ' + event.description,
                            title: event.title,
                        });
                    });
                }
            });

            calendar.render();
        });
    </script>
@endsection
