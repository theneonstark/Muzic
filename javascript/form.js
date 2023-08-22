$(document).ready(function(){
    $('#submit').click(function(event){
        event.preventDefault();
        console.log('hello');
        var	name = $('#fname').val();
        var	lname = $('#lname').val();
        var	mail = $('#mail').val();
        var	password = $('#pass').val();
        var	cpassword = $('#confirm_pass').val();
        $.ajax({
            type: "POST",
            url: "upload.php",
            data: { fname:name, lname:lname, mail:mail, password:password, cpassword:cpassword},		    
            dataType: "json",
            success: function(result){
                
            }
        });
    });
});