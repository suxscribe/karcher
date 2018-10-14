/**
 * Created by ngorohov on 04.09.2018.
 */

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

  var floatlabels = new FloatLabels( 'form', {
    style: 2,
    customEvent: function(el) {
      $(el).parent().next().appendTo($(el).parent());
      if ($(el).data('cclass')) {
        $(el).parent().addClass($(el).data('cclass'));
      }
    }
  });

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


});