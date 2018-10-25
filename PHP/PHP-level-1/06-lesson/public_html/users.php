<?php

/**
 * начальная страница сайта
 */

// поключаем конфигурации приложения
require '../config/main.php';
require '../engine/core.php';

// вывод шаблона

if(isset($_GET['add']))
{
   if(isset($_POST['user_login']))
   {
      //add dataase

      header("Location: /users.php");
   }

   echo render('users/add');
}
else
{
   if(isset($_GET['user_id']))
   {
   // Защита GET запросов
   $id = $_GET['user_id'];
   $id = strip_tags($id);
   $id = htmlspecialchars($id);
   //$id = (int)$id;
   $id = intval($id);

   echo render('users/view', [
      'id' => $id,
   ]);
   }
   else
   {
      echo render('users/list');
   }
}
