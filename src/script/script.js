function ve(email){var filter=/^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;if(filter.test(email)){return true;}else{return false;}}
$(document).ready(function(){
	$("input[name='name']").focus();
	$(".submit").click(function(){

		var name=$("input[name='name']").val();
		if($.trim(name).length<=3){
			$("label#name_error").fadeIn('slow').css('display','block');
			$("input[name='name']").focus();
			return false;
		}else{
			$("label#name_error").css('display','none');
		}
		
		var email=$("input[name='email']").val();
		if(!ve(email)){
			$("label#email_error").fadeIn('slow').css('display','block');
			$("input[name='email']").focus();
			return false;
		}else{
			$("label#email_error").css('display','none');
		}
		
		var message=$("textarea[name='message']").val();
		if($.trim(message).length<=3){
			$("label#message_error").fadeIn('slow').css('display','block');
			$("textarea[name='message']").focus();
			return false;
		}else{
			$("label#message_error").css('display','none');
		}
		
		var ip=$("input[name='ip']").val();
		var ds='name='+name+'&email='+email+'&message='+message+'&ip='+ip;
			
		var d=new Date();
        var date = d.getDate()+"-"+(d.getMonth()+1)+"-"+d.getFullYear()+" @ "+d.getHours()+":"+d.getMinutes();
		
		$('.submit').hide();
		
		$.ajax({
			type: "POST",
			url: "post.php",
			data: ds,
			success:function(){
				$('form').html("<h2>Odesláno!</h2>")
//				.append("<span>Message sent on "+date+"</span>")
//				.append("<p>\"Your message has been sent\" - Thank you message.</p>")
//				.append("<p>The following data will be submitted:</p>")
//				.append("<p class='code'>Name: "+name+"<br/>Email: "+email+"<br/>Message: "+message+"<br/>IP: "+ip+"</p>")
				.hide()
				.fadeIn(750);
			}
		});
		return false;
	});
});
