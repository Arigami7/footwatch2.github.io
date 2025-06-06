<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>FootWatch</title>
    <link rel="stylesheet" type="text/css" href="screen.css" media="screen">
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
    <link rel="stylesheet" type="text/css" href="handheld.css" media="handheld">
</head>

<body>
    <nav>
        <a href="#" onclick="loadSection('home')">Главная</a>
        <a href="#" onclick="loadSection('championship')">Таблица</a>
        <a href="#" onclick="loadSection('contact')">Контакты</a>
    </nav>
    
    <h1>Добро пожаловать на FootWatch!</h1>

    <section id="content"/>

    <script>
        function loadSection(section) 
	{
            let xhr = new XMLHttpRequest();
            xhr.open('GET', section + '.html', true);
            xhr.onload = function () 
	    {
                if (xhr.status === 200) 
		{
                    document.getElementById('content').innerHTML = xhr.responseText;
                } 
		else 
		{
                    document.getElementById('content').innerHTML = '<p>Ошибка загрузки данных.</p>';
                }
            };
            xhr.send();
        }

        window.onload = function () 
	{
            loadSection('home');
        };
    </script>

</body>
</html>
