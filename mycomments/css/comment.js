var comment = {
    validate:function () {
        //获取输入的表单内容
       var nickname = $('input[name="nickname"]').val();
        var personalSite = $('input[name="personalSite"]').val();
        var urcomment = $('#comment').val();
        if(!nickname) {
            dialog.error('用户名不能为空');
        }
        var url = "../home/doAction.php";
        var data = {'nickname':nickname,'personalSite':personalSite,'comments':urcomment};

        $.post(url,data,function(result){
            if(result.status == 0) {
                return dialog.error(result.message);
            }
            if(result.status == 1) {
                return dialog.success(result.message, '/admin.php?c=index');
            }

        },'JSON');




}