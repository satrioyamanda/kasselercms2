<?php
/**********************************************/
/* Kasseler CMS: Content Management System    */
/**********************************************/
/*                                            */
/* Copyright (c)2007-2010 by Igor Ognichenko  */
/* http://www.kasseler-cms.net/               */
/*                                            */
/**********************************************/

if (!defined('FUNC_FILE')) die('Access is limited');

$patterns = array(
    'message_registration'     => "Здравствуйте {USER}.\r\n\r\nСайт {SITE} благодарит Вас за регистрацию! Мы рады, что Вы присоединились к нам, и надеемся, что Вам тут понравится.\r\n\r\nНапоминаем что:\r\nВаш логин: {USER}\r\nВаш пароль: {PASSWORD}\r\n\r\nЕще раз спасибо, с наилучшими пожеланиями, сайт {SITE}.",
    'activation_user'          => "Здравствуйте {USER}.\r\n\r\nВы зарегистрировались на сайте {SITE} и в качестве своего E-mail адреса указал {EMAIL}. Для подтверждения указанного E-mail адреса перейдите по ссылке\r\n{CODE}.\r\n\r\nЕсли вы не регистрировались на {SITE}, просто проигнорируйте данное сообщение.\r\n\r\nЕще раз спасибо, с наилучшими пожеланиями, сайт {SITE}.",
    'post_report'              => "Здравствуйте {USER}.\r\n\r\nНа сайте {SITE} в теме {TOPIC} поступила жалоба от пользователя {USER} на сообщение {POST}.\r\n--------------------------------\r\nС уважением, администрация сайта {SITE}",
    'new_pm'                   => "Здравствуйте {USER}.\r\n\r\nУ Вас новое личное сообщение\r\nОт: {SENDER}\r\nТема: {SUBJECT}\r\n{URL}\r\nЧто бы отписаться от рассылок, войдите в панель управления и снимите галочку \"Уведомить меня при получении ЛС\"\r\n--------------------------------\r\nС уважением, администрация сайта {SITE}",
    'new_password'             => "Здравствуйте {USER}.\r\nЭто письмо отправлено с сайта: {SITE}.\r\n\r\nВозможно вами или кем-то другим на сайте {SITE} был подан запрос на восстановление пароля. \r\n\r\nЕсли Вы не запрашивали восстановление пароля на нашем сайте, просто проигнорируйте данное сообщение. Если хотите продолжить, следуйте дальнейшим инструкциям!\r\n\r\n------------------------------------------------\r\nИнструкция по активации!\r\n------------------------------------------------\r\nМы требуем подтверждения при восстановлении пароля, что бы удостовериться в Ваших действиях а так же защититься от спаммерских рассылок и нежелательных намерениях.\r\n\r\nДля продолжения восстановления пароля пройдите по ссылке ниже:\r\n\r\n{CODE}\r\n\r\n--------------------------------\r\nС уважением, администрация сайта {SITE}",
    'save_newpassword'         => "Это письмо отправлено с сайта: {SITE}.\r\n\r\nУведомляем вас что вы изменили пароль на\r\nПароль: {PASSWORD}",
    'your_new_pm_message'      => "Уважаемый(-ая) {USER},\r\nу вас одно или несколько не прочтенных сообщений.\r\nДля того, чтобы прочесть новые сообщения, перейдите по {B_LINK_READ}этой ссылке{E_LINK_READ}.\r\nЧтобы игнорировать это сообщение и больше не показывать окно, перейдите по {B_LINK_CLOSE}этой ссылке{E_LINK_CLOSE}.\r\n\r\n--------------------------------\r\n{B_SMALL_STYLE}Чтобы отключить уведомление о получении ЛС перейдите в {B_LINK_ACCOUNT}личный кабинет{E_LINK_ACCOUNT} и снимите флажок с \"Уведомить меня при получении ЛС\"{E_SMALL_STYLE}",
    'new_post_forum'           => "Здравствуйте.\r\n\r\nПо интересующей вас теме на форуме написано новое сообщение\r\nОт: {SENDER}\r\nТема: {SUBJECT}\r\n{URL}\r\n--------------------------------\r\nС уважением, администрация сайта {SITE}"
);
?>