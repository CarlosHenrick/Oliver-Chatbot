<!DOCTYPE html>
<html>
	<head>
		<title>Oliver Chatbot</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid h-100">
			<div class="row justify-content-center h-100">
				<div class="col-md-8 col-xl-6 chat">
					<div class="card">
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="images/chatbot.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span>Oliver Chatbot</span>
									<p>Seu bot para linguagens de programação!</p>
								</div>
							</div>
						</div>
						<div class="card-body msg_card_body">
							<div class="d-flex justify-content-start mb-4">
								<div class="msg_cotainer">
									Olá! <br>
									Qual linguagem deseja conhecer hoje? <br>
									1 - C <br>
									2 - Java <br>
									3 - JavaScript <br>
									4 - PHP <br>
									5 - PL/SQL <br>
									6 - Python <br>
								</div>
							</div>
							<div class="body" id="chatbody">
                				<div class="scroller"></div>
            				</div>
						</div>
						<div class="card-footer">
						<form class="chat" method="post" autocomplete="off">
							<div class="input-group">
								<textarea name="chat" type="text" id=chat class="form-control type_msg" placeholder="Fale com o Oliver..."></textarea>
								<div class="input-group-append">
									<span class="input-group-text send_btn" type="submit" value="Enviar" id="btn"><i class="fas fa-location-arrow"></i></span>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="app.js"></script>
	</body>
</html>
