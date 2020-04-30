
/*
 Template Name: Admiry - Bootstrap 4 Admin Dashboard
 Author: Themesdesign
 Website: www.themesdesign.in
File: Calendar init js (Demo only-minify)
 */

!function(e){"use strict";var t=function(){};t.prototype.init=function(){if(e.isFunction(e.fn.fullCalendar)){e("#external-events .fc-event").each(function(){var t={title:e.trim(e(this).text())};e(this).data("eventObject",t),e(this).draggable({zIndex:999,revert:!0,revertDuration:0})});var t=new Date,a=t.getDate(),n=t.getMonth(),r=t.getFullYear();e("#calendar").fullCalendar({header:{left:"prev,next today",center:"title",right:"month,basicWeek,basicDay"},editable:!0,eventLimit:!0,droppable:!0,drop:function(t,a){var n=e(this).data("eventObject"),r=e.extend({},n);r.start=t,r.allDay=a,e("#calendar").fullCalendar("renderEvent",r,!0),e("#drop-remove").is(":checked")&&e(this).remove()},events:[{title:"All Day Event",start:new Date(r,n,1)},{title:"Long Event",start:new Date(r,n,a-5),end:new Date(r,n,a-2)},{id:999,title:"Repeating Event",start:new Date(r,n,a-3,16,0),allDay:!1},{id:999,title:"Repeating Event",start:new Date(r,n,a+4,16,0),allDay:!1},{title:"Meeting",start:new Date(r,n,a,10,30),allDay:!1},{title:"Lunch",start:new Date(r,n,a,12,0),end:new Date(r,n,a,14,0),allDay:!1},{title:"Birthday Party",start:new Date(r,n,a+1,19,0),end:new Date(r,n,a+1,22,30),allDay:!1},{title:"Click for Google",start:new Date(r,n,28),end:new Date(r,n,29),url:"http://google.com/"}]}),e("#add_event_form").on("submit",function(t){t.preventDefault();var a=e(this).find(".new-event-form"),n=a.val();if(n.length>=3){var r="new"+Math.random().toString(36).substring(7);e("#external-events").append('<div id="'+r+'" class="fc-event">'+n+"</div>");var i={title:e.trim(e("#"+r).text())};e("#"+r).data("eventObject",i),e("#"+r).draggable({revert:!0,revertDuration:0,zIndex:999}),a.val("").focus()}else a.focus()})}else alert("Calendar plugin is not installed")},e.CalendarPage=new t,e.CalendarPage.Constructor=t}(window.jQuery),function(e){"use strict";e.CalendarPage.init()}(window.jQuery);


