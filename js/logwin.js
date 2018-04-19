$(document).ready(function() {
    $('#overlay').css({opacity: 0.5}); // Делаем затемняющий фон кроссбраузерным
    positionCenter($('#logwin')); // Позиционируем всплывающее окно по центру
	
    $('#show_logwin').click(function() { // При клике по ссылке, показываем всплывающее окно
        $('#logwin, #overlay').fadeIn(1000);
    });
	
    $('#close_logwin').click(function() { // Скрываем всплывающее окно при клике по кнопке закрыть
		$('#logwin, #overlay').fadeOut(500);
    });
	
	$('#send_logwin').click(function() { // Скрываем всплывающее окно при клике по кнопке закрыть
		$('#logwin, #overlay').fadeOut(500);
    });
	
    function positionCenter(elem) { // Функция, которая позиционирует всплывающее окно по центру
        elem.css({
            marginTop: '-' + elem.height() / 2 + 'px',
			marginLeft: '-' + elem.width() / 2 + 'px'
        });
    }
});