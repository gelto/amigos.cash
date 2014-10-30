$(document).ready(function(){

   $('#recuperarButton').click(function(){
   	$('#loginForm').attr('action', '/recuperarback');
   	$('#loginForm').submit();
   });

}); 