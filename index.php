<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Чат</title>
	<!-- Если вы ахуетьмегастилист, то знайте - стили не мои и вообще это опен соурс, делайте че хотите))) -->
	<style>
	body {
		padding: 5px;
	}
	.main {
		margin: 0 auto;
		width: 500px;
	}
	h2 {
		text-align: center;
	}
	#chat, table {
		margin: 0 auto;
	}
	#chat {
		border: 3px solid black;
		height: 350px;
		margin: 0 auto;
		overflow-x: none;
		overflow-y: auto;
		width: 300px;
	}
	p {
		margin: 0;
	}
	img {
		width: 250px;
	}
	</style>
	<script src="script_chat.js">
	</script>
</head>
<body onload="chat();">
	<div class="main">
		<h2>Чат</h2>
		<div id="chat" class="chat" name="chat"></div>
		<br>
		<table>
			<tr>
				<td>Имя:</td>
				<td><input type="text" name="name" id="name" placeholder=""></td> <!-- плейсхолдер в обоих инпутах можно переделать, но мне лень) -->
			</tr>
			<tr>
				<td>Сообщение:</td>
				<td><input name="message" id="message" placeholder=""></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="button" value="Send!" onclick="addMessage();"> <!-- НИ В КОЕМ СЛУЧАЕ НЕ ДЕЛАЙТЕ textarea!
						А то мамкин граматей, когда будет чатиться, нахуярит дохуилиард пробелов и чату придёт пизда... -->
				</td>
			</tr>
		</table>
	</div>
</body>
</html>
