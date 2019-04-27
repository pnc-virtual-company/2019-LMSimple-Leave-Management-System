@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fullcarlendar</title>
    <link href="{{asset('css/fullcalendar.min.css')}}" rel='stylesheet' />
    <link href="{{asset('css/fullcalendar.print.min.css')}}" rel='stylesheet' media='print' />
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}" ></script>
    <script src="{{asset('js/fullcalendar.min.js')}}"></script>
</head> 
<body>
    <div id="calendar"></div>
</body>
    <script>
        $(document).ready(function(){
            $('#calendar').fullCalendar({
                defaultView: 'agendaWeek',
                weekends:false,
                minTime: '07:00:00',
                maxTime:'19:00:00',
                header:{
                    left: 'prev,next today',
                    center:'title',
                    right:'month,agendaWeek,agendaDay',
                },
                navLinks:true,
                selectable:true,
                selectHelper:true,
                select: function(start,end){
                    var title= prompt('Event title','Put your event');
                    var eventDate;
                    var rendomColor="#";
                    var rand=['0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f'];
                    for(var i=0;i<6;i++){
                        rendomColor+=rand[Math.ceil(Math.random()*15)];
                    }
                    if(title){
                        eventDate={
                            title: title,
                            start:start,
                            end:end,
                            color:rendomColor,
                        };
                        $('#calendar').fullCalendar('renderEvent',eventDate,true);
                    };
                    $('#calendar').fullCalendar('unselect');
                },
                defaultDate: '2019-04-26',
                editable:true,
                eventLimit: true,
                events:[
                    {
                        title: 'myBirthday',
                        start: '2019-04-26T19:00:00',
                        end:'2019-04-26T21:00:00',
                        // durationEditable:true,
                    },
                    {
                        title: 'mylove',
                        start: '2019-04-26T13:00:00',
                        end:'2019-04-27T15:00:00', 
                    }
                ]
            });
        });
    </script>
</html>
@endsection