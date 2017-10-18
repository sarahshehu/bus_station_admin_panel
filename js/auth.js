$(document).ready(function() {
	$('.login').click(function() {
		var username = $('.username').val();
		var password = $('.password').val();
		if (username.length == 0) {
			$('.username').css('border-bottom', '3px solid red');
			$('.username').attr('placeholder', 'Emri nuk mund te jete bosh');
		} else if(username.length != 0 && password.length == 0){
			$('.password').css('border-bottom', '3px solid red');
			$('.password').attr('placeholder', 'Fjalekalimi nuk mund te jete bosh');
		}else{
			$.post('../admin/actions/action.php', {us: username, pa: password}, function(result) {
				if (!result) {
					$('.username').css('border', '2px solid red');
					$('.username').attr('placeholder', 'Shkruani emrin serish');
					$('.username').val('');
					$('.password').css('border', '2px solid red');
					$('.password').attr('placeholder', 'Shkruani passwordin serish');
					$('.password').val('');
				}else{
					window.location = '../admin/panel/home/index.php';					
				}
			});
		}
	});
});