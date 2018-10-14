
 $(document).ready(function(){

  var forms = document.getElementsByClassName('kform');

  var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });

  var checkedRubrics = {};
  $('.filter-form #rubric').on('focus', function() {
    if ($(this).hasClass('dropdowned')) {
      return;
    }
    var select = $(this).parents('form').find('select[name="rubric"]'),
    options = select.find('option');

    var dropDown = $('<div />', {'class': 'dd-rubric'});

    options.each(function(index, element) {

      checkedRubrics[element.value] = checkedRubrics[element.value] || false;

      var ddOption = $('<div />', {'class': 'form-check'})
      .append($('<input />', {
        'class': 'form-check-input',
        'type': 'checkbox',
        'value': '',
        'checked': checkedRubrics[element.value],
        'id': 'rubric-' + element.value
      }))
      .append($('<label />', {
        'class': 'form-check-label',
        'for': 'rubric-' + element.value
      }).html(element.innerText));

      ddOption.appendTo(dropDown);
    });
    select.after(dropDown);
    $(this).addClass('dropdowned').parent().addClass('dd-open');
  });

  $(document).on('click', function(e) {
    var el = $(e.target);

    if (el.attr('id') == 'rubric') {
      e.preventDefault();
      $('#rubric').focus();
    } else if (el.hasClass('dd-rubric') || el.parents('.dd-rubric').length > 0) {

      if (el.attr('type') == 'checkbox') {
        var checked = $('.dd-rubric').find('input:checked').length;
        var id = el.attr('id').replace('rubric-', '');
        checkedRubrics[id] = el.prop('checked');

        if (checked > 0) {
          $('#rubric').val('Выбрано рубрик: ' + checked).parent().addClass('fl-is-active');
        } else {
          $('#rubric').val('').parent().removeClass('fl-is-active');
        }
      }
    } else {
      $('.dd-rubric').remove();
      $('#rubric').removeClass('dropdowned').blur();
      $('#rubric').parent().removeClass('dd-open')
    }
  });

/**/
var checkedmultisels = {};
$('.filter-form #multisel').on('focus', function() {
  if ($(this).hasClass('dropdowned')) {
    return;
  }
  var select = $(this).parents('form').find('select[name="multisel"]'),
  options = select.find('option');

  var dropDown = $('<div />', {'class': 'dd-multisel'});

  options.each(function(index, element) {

    checkedmultisels[element.value] = checkedmultisels[element.value] || false;

    var ddOption = $('<div />', {'class': 'form-check'})
    .append($('<input />', {
      'class': 'form-check-input',
      'type': 'checkbox',
      'value': '',
      'checked': checkedmultisels[element.value],
      'id': 'multisel-' + element.value
    }))
    .append($('<label />', {
      'class': 'form-check-label',
      'for': 'multisel-' + element.value
    }).html(element.innerText));

    ddOption.appendTo(dropDown);
  });
  select.after(dropDown);
  $(this).addClass('dropdowned').parent().addClass('dd-open');
});

$(document).on('click', function(e) {
  var el = $(e.target);

  if (el.attr('id') == 'multisel') {
    e.preventDefault();
    $('#multisel').focus();
  } else if (el.hasClass('dd-multisel') || el.parents('.dd-multisel').length > 0) {

    if (el.attr('type') == 'checkbox') {
      var checked = $('.dd-multisel').find('input:checked').length;
      var id = el.attr('id').replace('multisel-', '');
      checkedmultisels[id] = el.prop('checked');

      if (checked > 0) {
        $('#multisel').val('Выбрано: ' + checked).parent().addClass('fl-is-active');
      } else {
        $('#multisel').val('').parent().removeClass('fl-is-active');
      }
    }
  } else {
    $('.dd-multisel').remove();
    $('#multisel').removeClass('dropdowned').blur();
    $('#multisel').parent().removeClass('dd-open')
  }
});

  $('.dd-rubric').on('click', function(e) {
    // e.preventDefault();
    // e.stopPropagation();

    console.log('ddd');
  });



  $('.menu-btn, .menu-close').click(function() {
    $('body').toggleClass('menu-opened');
  });

  $('.filter-btn, .filter-close').click(function() {
    $('body').toggleClass('filter-opened');
  });

  var floatlabels = new FloatLabels( '.kform', {
    style: 2,
    customEvent: function(el) {
      $(el).parent().next().appendTo($(el).parent());
      if ($(el).data('cclass')) {
        $(el).parent().addClass($(el).data('cclass'));
      }
    }
  }); //form float labels

  $('.kform #phone').mask('+7 999-999-99-99', {
    placeholder: 'X'
  });

  $('.more-news').click(function(){
    $.get('/news.html', function(data) {
      if (data) {
        $('#news-block').append(data);
      }
    });
  });
  var headerFilled = false;
  $(window).on('scroll', function(e) {
    var header = $('#header:not(.main-header)'),
    scrolled = window.pageYOffset || document.documentElement.scrollTop;


    if (scrolled > header.height()) {
      var filler = $('<div />', {'class': 'filler'}).css('height', header.height());
      if (!headerFilled) {
        $('body').prepend(filler);
        headerFilled = true;
      }
      header.addClass('fixed-header');
    } else {
      header.removeClass('fixed-header');
      headerFilled = false;
      $('.filler').remove();
    }
  });




  /*sidebar*/

  var collapseWidth = 1024;

  if ($('body').innerWidth() < collapseWidth) {
    $('#sidebar').addClass('active');
    $('#content').addClass('active');

  };

 /* $("#sidebar").mCustomScrollbar({
     theme: "minimal"
   });*/

   //jQuery('.sidebar-wrap').scrollbar();


    // 1 desktop collapse click 
    // 2 desktop menu click when collapsed
    // 3 mobile collapse click
    // 4 mobile menu click
    // 5 collapse click when overlay

    //hide submenu on mobile
    var width = $('body').innerWidth();
    if (width < collapseWidth) {
      $('#sidebar ul ul').removeClass('show');
      $('#sidebar > ul > li > a').attr({
        'aria-expanded': 'false'
      });
      $('#sidebar').addClass('active');
      $('#content').addClass('active');

    }
    if (width >= collapseWidth) {
        // $('#sidebar').removeClass('active');
      }


      $('#sidebarCollapse').on('click', function (e) {

        if (!$('#sidebar').hasClass('active')){
          $('#sidebar ul ul').removeClass('show');
          $('#sidebar > ul > li > a').attr({
            'aria-expanded': 'false'
          });
        }

        if ($('body').innerWidth() >= collapseWidth) {


          $('#sidebar').toggleClass('active');
          $('#content').toggleClass('active');
          $('.collapse.in').toggleClass('in');
          $('#sidebar a[aria-expanded=true]').attr('aria-expanded', 'false');

        } else {
          $('#sidebar ul ul').removeClass('show');
          $('#sidebar > ul > li > a').attr({
            'aria-expanded': 'false'
          });

          $('#sidebar').toggleClass('sidebar-overlay');
          $('.overlay').toggleClass('active');

        }


        // open or close navbar
        // $('#sidebar').toggleClass('active');
        // close dropdowns
        e.preventDefault();
      });


      /*$('#sidebar.active').not('.sidebar-overlay').find('a.dropdown-toggle').on('click',function(e) {
        if ($(this).attr('aria-expanded', 'false')) {
          $('#sidebar a[aria-expanded=true]').attr('aria-expanded', 'false');
          $('#sidebar ul ul').removeClass('show');
          //$('#sidebar a').removeAttr('data-toggle');
          console.log('click');
        }
        
      })*/




      $('#dismiss, .overlay').on('click', function () {
        // hide sidebar
        $('#sidebar').removeClass('sidebar-overlay');
        // hide overlay
        $('.overlay').removeClass('active');
        $('#sidebar ul ul').removeClass('show');
        $('#sidebar > ul > li > a').attr({
          'aria-expanded': 'false'
        });
      });

    //collapse sidebar and hide submenus on shrinkin
    $(window).resize(function () { 
      var width = $('body').innerWidth();
      if (width < collapseWidth) {
        $('#sidebar').addClass('active');
        $('#content').addClass('active');
        $('#sidebar ul ul').removeClass('show');
        $('#sidebar > ul > li > a').attr({
          'aria-expanded': 'false'
        });
      }
      if (width >= collapseWidth) {
          // $('#sidebar').removeClass('active');
        }

      });

    // expand menu when clicking on an icon of collapsed menu. if needed
  /*    $('#sidebar.active .sidebar-menu a').on('click', function(event) {
      event.preventDefault();
      $('#sidebar').addClass('sidebar-overlay');
      $('.overlay').addClass('active');
    });
    */

  // Sortable rows
  /*$('.table-sortable').sortable({
    containerSelector: 'table',
    itemPath: '> tbody',
    itemSelector: 'tr',
    placeholder: '<tr class="placeholder"/>',
    handle: '.handle'
  });*/

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })


  $('.form-datetimepicker').datetimepicker({
    icons: {
        time: "icon-dots-hor",
        date: "icon-ic_event_24px",
        up: "icon-chevron",
        down: "icon-chevron-form"
    },
    locale: 'ru',
    allowInputToggle: true
  });

  $('.form-datetimepicker').addClass('datetimepicker-input'); //fix to close datepicker on click outside
  $('.form-datetimepicker').on('click', function(event) {
    //event.preventDefault();
    $(this).parent().addClass("fl-is-active fl-has-focus");
    
    /* Act on the event */
  });

  jQuery('.scrollbar-inner').scrollbar({
    
  });
  /*$(".scrollbar-inner").mCustomScrollbar({
     theme: "minimal"
   });
*/
  autosize($('textarea'));


  //var d = $('.scrollbar-inner');
  //d.scrollTop(d.prop("scrollHeight")); //scroll chat to bottom on load

});

// input validation styling
function validate(obj)
{
  if(!obj.checkValidity())
  {
    obj.parentElement.classList.add('invalid');
  } else {
    obj.parentElement.classList.remove('invalid');
  }
};