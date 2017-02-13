$(function(){
	$('#submit').click(function () {

        //Get the data from all the fields
        var author = $('input[name=author]');
        var phone = $('input[name=phone]');
        var company = $('input[name=company]');
        var message = $('textarea[name=message]');

        var comment_post_ID = $('input[name=comment_post_ID]');
		var comment_parent = $('input[name=comment_parent]');
        var returnError = false;

        //Simple validation to make sure user entered something
        //Add your own error checking here with JS, but also do some error checking with PHP.
        //If error found, add hightlight class to the text field
        if (author.val()=='') {
            author.addClass('error');
            alert('请填写您的姓名');
            returnError = true;
        } else author.removeClass('error');

        if (phone.val()=='') {
            phone.addClass('error');
            alert('请填写您的联系电话');
            returnError = true;
        } else phone.removeClass('error');

        if (company.val()=='') {
            company.addClass('error');
            alert('请填写您的公司信息');
            returnError = true;
        } else company.removeClass('error');

        // Highlight all error fields, then quit.
        if(returnError == true) {
            return false;	
        }

        //organize the data
        var data = 'author=' + author.val() + '&phone=' + phone.val() + '&comment='  + encodeURIComponent(phone.val() + '\n' + company.val() + '\n' + message.val());
        	data += '&comment_post_ID=' + comment_post_ID.val() + '&comment_parent=' + comment_parent.val();
        //disabled all the text fields
        // $('.text').attr('disabled','true');

        //show the loading sign
        $('.loading').show();
        //start the ajax
        $.ajax({
            //this is the php file that processes the data and sends email
            // url: "inc/process.php",	
            url: template_url + '/comments-ajax.php',
            //GET method is used
            type: "POST",
            //pass the data	
            data: data,	
            //Do not cache the page
            cache: false,
            //success
            success: function (html) {
                alert('您的信息我们已经收到，请等待我们的回复');
                author.val('');
				phone.val('');
                company.val('');
				message.val('');
            }	
        });
        return false;
	});
});