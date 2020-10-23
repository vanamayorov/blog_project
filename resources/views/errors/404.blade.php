<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>404 - WTF?!</title>

	<style>
		body {
		  background-size: cover;
		  background-repeat: no-repeat;
		  font-family: system,sytem-ui,-apple-system,BlinkMacSystemFont,\.SFNSDisplay-Regular,Roboto,Open Sans,sans-serif;
		  color: #434b51;
		}
		a {
		  color: #3fb588;
		}
		.wrapper {
		  min-width: 250px;
		  max-width: 400px;
		  width: 40%;
		  position: absolute;
		  left: 50%;
		  top: 50%;
		  -webkit-transform: translate(-50%, -50%);
		          transform: translate(-50%, -50%);
		  background-color: rgba(255,255,255,0.9);
		  border-radius: 3px;
		  padding: 40px;
		  text-align: center;
		}
		.wrapper h1 {
		  font-size: 20px;
		  font-weight: 600;
		}
		.wrapper p {
		  margin-top: 25px;
		  font-size: 14px;
		  line-height: 24px;
		}

	</style>

</head>
<body>

	<div class="wrapper">
	  <div class="info-block">
	    <h1>Страница не найдена :(</h1>
	    <p>К сожалению, такой страницы найти не удалось.<br>Однако, вы можете перейти на <a href="{{route('index')}}">главную</a> или нажимать F5 до тех пор, пока не появится нужная Вам информация.</p>
	  </div>
	</div>

</body>
</html>
