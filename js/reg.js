$(document).ready(function() {
    $('#overlay').css({opacity: 0.5}); // Делаем затемняющий фон кроссбраузерным
    positionCenter($('#reg')); // Позиционируем всплывающее окно по центру
    
    $('#show_reg').click(function() { // При клике по ссылке, показываем всплывающее окно
        $('#reg, #overlay').fadeIn(1000);
    });
    
    $('#close_reg').click(function() { // Скрываем всплывающее окно при клике по кнопке закрыть
        $('#reg, #overlay').fadeOut(500);
    });
    
    $('#send_reg').click(function() { // Скрываем всплывающее окно при клике по кнопке закрыть
        $('#reg, #overlay').fadeOut(500);
    });
    
    function positionCenter(elem) { // Функция, которая позиционирует всплывающее окно по центру
        elem.css({
            marginTop: '-' + elem.height() / 4 + 'px',
            marginLeft: '-' + elem.width() / 2 + 'px'
        });
    }
});