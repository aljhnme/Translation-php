<?php

if (ltrim(rtrim($_POST['text_v'])) == 'hello') 
{
	echo str_replace($_POST['text_v'],'Здравствуйте', $_POST['text_v']);

}
if (ltrim(rtrim($_POST['text_v'])) == 'no')
{
	echo str_replace($_POST['text_v'],'НЕТ', $_POST['text_v']);

}
if (ltrim(rtrim($_POST['text_v'])) == 'you are')
{
	echo str_replace($_POST['text_v'],'ты', $_POST['text_v']);

}

if (ltrim(rtrim($_POST['text_v'])) == 'strong')
{
	echo str_replace($_POST['text_v'],'сильный', $_POST['text_v']);

}

if (ltrim(rtrim($_POST['text_v'])) == 'slow')
{
	echo str_replace($_POST['text_v'],'медленный', $_POST['text_v']);

}

if (ltrim(rtrim($_POST['text_v'])) == 'name')
{
   	echo str_replace($_POST['text_v'],'имя', $_POST['text_v']);

}
if (ltrim(rtrim($_POST['text_v'])) == 'programmer')
{
   	echo str_replace($_POST['text_v'],'программист', $_POST['text_v']);

}

if (ltrim(rtrim($_POST['text_v'])) == 'good morning')
{
   	echo str_replace($_POST['text_v'],'доброе утро', $_POST['text_v']);

}

if (ltrim(rtrim($_POST['text_v'])) == 'What is that')
{
   	echo str_replace($_POST['text_v'],'Это что', $_POST['text_v']);

}
if (ltrim(rtrim($_POST['text_v'])) == 'what')
{
   	echo str_replace($_POST['text_v'],'что', $_POST['text_v']);

}
if (ltrim(rtrim($_POST['text_v'])) == 'nice')
{
   	echo str_replace($_POST['text_v'],'красивый', $_POST['text_v']);

}

if (ltrim(rtrim($_POST['text_v'])) == 'Beautiful')
{
   	echo str_replace($_POST['text_v'],'Прекрасный', $_POST['text_v']);

}
if (ltrim(rtrim($_POST['text_v'])) == 'Oh really')
{
   	echo str_replace($_POST['text_v'],'Да неужели', $_POST['text_v']);

}
if (ltrim(rtrim($_POST['text_v'])) == 'Can')
{
   	echo str_replace($_POST['text_v'],'Мочь', $_POST['text_v']);

}
if (ltrim(rtrim($_POST['text_v'])) == 'Not possible')
{
   	echo str_replace($_POST['text_v'],'Невозможно', $_POST['text_v']);

}
if (ltrim(rtrim($_POST['text_v'])) == 'Important')
{
   	echo str_replace($_POST['text_v'],'Важный', $_POST['text_v']);

}

if (ltrim(rtrim($_POST['text_v'])) == 'Profession')
{
   	echo str_replace($_POST['text_v'],'профессия', $_POST['text_v']);

}
if (ltrim(rtrim($_POST['text_v'])) == 'OK')
{
   	echo str_replace($_POST['text_v'],'Ok', $_POST['text_v']);

}

if (ltrim(rtrim($_POST['text_v'])) == 'book')
{
   	echo str_replace($_POST['text_v'],'книга', $_POST['text_v']);

}
if (ltrim(rtrim($_POST['text_v'])) == 'Computer')
{
   	echo str_replace($_POST['text_v'],'компьютер', $_POST['text_v']);

}

if (ltrim(rtrim($_POST['text_v'])) == 'old')
{
   	echo str_replace($_POST['text_v'],'старый', $_POST['text_v']);

}
if (ltrim(rtrim($_POST['text_v'])) == 'car')
{
   	echo str_replace($_POST['text_v'],'машина', $_POST['text_v']);

}

if (ltrim(rtrim($_POST['text_v'])) == 'Journey')
{
   	echo str_replace($_POST['text_v'],'Поездка', $_POST['text_v']);

}
if (ltrim(rtrim($_POST['text_v'])) == 'pencil')
{
   	echo str_replace($_POST['text_v'],'карандаш', $_POST['text_v']);
}
if (ltrim(rtrim($_POST['text_v'])) == 'bus')
{
	echo str_replace($_POST['text_v'],'автобус', $_POST['text_v']);
}

if (ltrim(rtrim($_POST['text_v'])) == 'home')
{
   	echo str_replace($_POST['text_v'],'дом', $_POST['text_v']);
}
if (ltrim(rtrim($_POST['text_v'])) == 'Job')
{
   	echo str_replace($_POST['text_v'],'работа', $_POST['text_v']);
}
if (ltrim(rtrim($_POST['text_v'])) == 'text')
{
   	echo str_replace($_POST['text_v'],'текст', $_POST['text_v']);
}
if (ltrim(rtrim($_POST['text_v'])) == 'play')
{
   	echo str_replace($_POST['text_v'],'играть в', $_POST['text_v']);
}

  $arr=array('hello','can','strong','no','you are','slow','name','programmer','good morning','What is that','what','nice','Beautiful','Oh really','Not possible','Important','Profession','OK','book','Computer','old','Journey','pencil','bus','home','','Job','text','play',);
 
  if (in_array(trim($_POST['text_v']), $arr))
  {
  	
  }else{
  	echo "There is no such word in the php codes";
  }

?>