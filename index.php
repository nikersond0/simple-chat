<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Чат</title>
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
  <h2>Chat</h2>
  <div id="chat" class="chat" name="chat">
  </div>
  <br>
  <table>
    <tr>
      <td>Nikname:</td>
      <td><input type="text" name="name" id="name" placeholder="Enter a nikname"></td>
    </tr>
    <tr>
      <td>Message:</td>
      <td><input name="message" id="message" placeholder="Type a message"></td>
    </tr>
    <tr>
      <td colspan="2">
        <input type="button" value="Отправить" onclick="addMessage();">
      </td>
    </tr>
  </table>
</div>
</body>
</html>
