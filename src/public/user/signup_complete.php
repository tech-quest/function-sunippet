<?php
require_once(__DIR__ . '/../../app/Lib/session.php');
require_once(__DIR__ . '/../../app/Lib/findUserByMail.php');
require_once(__DIR__ . '/../../app/Lib/createUser.php');
require_once(__DIR__ . '/../../app/Lib/redirect.php');

session_start();
$mail = filter_input(INPUT_POST, 'mail');
$userName = filter_input(INPUT_POST, 'userName');
$password = filter_input(INPUT_POST, 'password');
$confirmPassword = filter_input(INPUT_POST, 'confirmPassword');

if (empty($password) || empty($confirmPassword)) appendError("パスワードを入力してください");
if ($password !== $confirmPassword) appendError("パスワードが一致しません");
if (!empty($_SESSION['errors'])) {
  $_SESSION['formInputs']['mail'] = $mail;
  $_SESSION['formInputs']['userName'] = $userName;
  redirect('signup.php');
}

// メールアドレスに一致するユーザーの取得
$user = findUserByMail($mail);
if (!is_null($user)) appendError("すでに登録済みのメールアドレスです");
if (!empty($_SESSION['errors'])) redirect('signup.php');

// ユーザーの保存
createUser($userName, $mail, $password);
$_SESSION['registed'] = "登録できました。";
redirect('signup.php');
