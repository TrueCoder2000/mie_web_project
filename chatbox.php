<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
</head>

<body>
    
<div class="div-chatbox">
				<div class="box-chat">

						<div class="head-chatbox">
							<div class="icon-image-chatbox">
								<img src="image/icon-image-chatbox.png">
								<h3>CARLOS de MIE</h3>
							</div>
						</div>


						<div class="box-message-chatbox">
								<img src="image/icon-image-chatbox.png">
								<h6>Gracias por escribirnos, le atiende Carlos, <br>¿con quién tengo el gusto?</h6>
						</div>


						<div class="box-writter-chatbox">
							<textarea cols="5" rows="5"></textarea>
							<div class="btn-send-chatbox">
								<a href="https://api.whatsapp.com/send?phone=+525633120174&text=Hola Bienvenidos a Mexico Internet Exchange. Soy su servidor Carlos. Como le puedo ayudar?&20heber"><i class='fa fa-send'></i></a>
							</div>
						</div>

				</div>	

				<div class="icon-action-comment-close">
					<div class="icon-comment-chatbox"><i class="fa fa-comments-o"></i></div>
					<div class="icon-close-chatbox"><i class="fa fa-close"></i></div>
				</div>
		</div>
</body>

<script type="">
	let chatBox=document.querySelector(".box-chat");
	let iconComment=document.querySelector(".icon-comment-chatbox");
	let iconClose=document.querySelector(".icon-close-chatbox");


	iconComment.onclick=function(){
	chatBox.style="opacity:1;transition:0.9s";
	iconComment.style="z-index:0";
	iconClose.style="zIndex:1";
}


iconClose.onclick=function(){
	chatBox.style="opacity:0;transition:0.9s";
	iconComment.style="z-index:1";
	iconClose.style="z-index0";
}
</script>

</html>