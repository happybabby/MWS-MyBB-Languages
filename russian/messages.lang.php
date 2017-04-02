<?php
/**
 * MyBB 1.8 English Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

$l['click_no_wait'] = 'Нажмите здесь, если Вы не хотите больше ждать.';
$l['redirect_return_forum'] = '<br /><br />Альтернативно, <a href="{1}">вернуться в форум</a>.';
$l['redirect_emailsent'] = 'Ваше электронное письмо было отправлено.';
$l['redirect_loggedin'] = 'Вы успешно зашли.<br />Сейчас Вы будете перемещены на предыдущую страницу.';

$l['error_invalidpworusername'] = 'Вы ввели неверное имя пользователя или пароль. <br /><br />Если Вы забыли свой пароль, пожалуйста, <a href="member.php?action=lostpw">востановите его</a>.';
$l['error_invalidpworusername1'] = 'Вы ввели неверное сочетание E-Mail/пароль. <br /><br />Если Вы забыли свой пароль, пожалуйста, <a href="member.php?action=lostpw">востановите его</a>.';
$l['error_invalidpworusername2'] = 'Вы ввели неверное сочетание имени пользователя/пароль или E-Mail/пароль. <br /><br />Если Вы забыли свой пароль, пожалуйста, <a href="member.php?action=lostpw">востановите его</a>.';
$l['error_incompletefields'] = 'Возможно, Вы не заполнили одно или более необходимых для заполнения полей. Пожалуйста, вернитесь и заполните необходимые поля.';
$l['error_alreadyuploaded'] = 'Вы уже загрузили этот файл в сообщение (судя по имени файла и размеру). Пожалуйста, выберите другой файл для прикрепления.';
$l['error_alreadyuploaded_perm'] = 'Это сообщение уже содержит вложение с таким именем. Пожалуйста, либо удалите существующий файл, либо переименуйте новый файл и загрузите его заново.';
$l['error_nomessage'] = 'Вы не ввели текст сообщения.';
$l['error_invalidemail'] = 'Вы не ввели правильный адрес электронной почты.';
$l['error_nomember'] = 'Выбранный пользователь не существует.';
$l['error_maxposts'] = 'Извините, но Ваш суточный лимит сообщений истек.  Пожалуйста, дождитесь следующего дня или свяжитесь с администрацией.<br /><br />Максимальное количество сообщений в день - {1}';
$l['error_nohostname'] = 'Для данного IP-адреса не найдено адреса сервера.';
$l['error_invalidthread'] = 'Выбранная тема не существует.';
$l['error_invalidpost'] = 'Выбранное сообщение не существует.';
$l['error_invalidannouncement'] = 'Указанное объявление не существует.';
$l['error_invalidattachment'] = 'Указанное вложение не существует.';
$l['error_invalidforum'] = 'Неверный форум';
$l['error_closedinvalidforum'] = 'Вы не можете создавать сообщения в этом форуме потому, что он закрыт, либо это категория.';
$l['error_attachtype'] = 'Тип вложенного Вами файла не поддерживается. Пожалуйста, удалите вложение или измените тип файла.';
$l['error_attachsize'] = 'Размер вложенного Вами файла слишком большой. Максимальный размер файла этого типа {1} килобайт.';
$l['error_uploadempty'] = 'Выбранный файл пуст';
$l['error_uploadsize'] = 'Размер загруженного файла слишком большой.';
$l['error_uploadfailed'] = 'Загрузка файла прервана. Пожалуйста, выберите корректный файл и повторите снова. ';
$l['error_uploadfailed_detail'] = 'Детали ошибки: ';
$l['error_uploadfailed_php1'] = 'PHP: Размер файла больше, чем указанная величина upload_max_filesize в php.ini.  Пожалуйста, свяжитесь с администрацией форума по поводу этой ошибки.';
$l['error_uploadfailed_php2'] = 'Загружаемый файл имеет больший размер, чем установленный лимит.';
$l['error_uploadfailed_php3'] = 'Загружаемый файл был загружен только частично.';
$l['error_uploadfailed_php4'] = 'Нет файла для загрузки.';
$l['error_uploadfailed_php6'] = 'PHP: Отсутствует временная директория.  Пожалуйста, свяжитесь с администрацией форума по поводу этой ошибки.';
$l['error_uploadfailed_php7'] = 'PHP: Ошибка записи файла на диск.  Пожалуйста, свяжитесь с администрацией форума по поводу этой ошибки.';
$l['error_uploadfailed_phpx'] = 'PHP: код ошибки {1}.  Пожалуйста, свяжитесь с администрацией форума по поводу этой ошибки.';
$l['error_uploadfailed_nothingtomove'] = 'Выбран некорректный файл, загружаемый файл не может быть перемещен по назначению.';
$l['error_uploadfailed_movefailed'] = 'Проблема перемещения загружаемого файла по назначению.';
$l['error_uploadfailed_lost'] = 'прикрепление не может быть найдено на сервере.';
$l['error_emailmismatch'] = 'Введенные адреса электронной почты не совпадают';
$l['error_nopassword'] = 'Введенный пароль не верен.';
$l['error_usernametaken'] = 'Выбранное имя уже зарегистрирован.';
$l['error_nousername'] = 'Вы не ввели имя.';
$l['error_invalidusername'] = 'Вы ввели неверное имя.';
$l['error_invalidpassword'] = 'Введенный пароль не верен. Если Вы забыли свой пароль, нажмите <a href="member.php?action=lostpw">здесь</a>.';
$l['error_postflooding'] = 'Извините, но Ваше сообщение не может быть отправлено. Администрацией установлен лимит отправки сообщений раз в {1} секунд(у).';
$l['error_nopermission_guest_1'] = 'Вы не вошли или не имеете прав доступа для просмотра этой страницы. Возможно это произошло по одной из следующих причин:';
$l['error_nopermission_guest_2'] = 'Вы не вошли или не зарегистрированы.';
$l['error_nopermission_guest_3'] = 'У вас нет прав доступа для просмотра этой страницы. Вы пытаетесь использовать средства управления форумом. Прочитайте правила форума и выясните, можете ли Вы делать это.';
$l['error_nopermission_guest_4'] = 'Ваша учетная запись отключена администрацией, или ожидает активации.';
$l['error_nopermission_guest_5'] = 'Вы зашли на эту страницу напрямую, а не с помощью соответствующих форм и ссылок.';
$l['login'] = 'Вход';
$l['need_reg'] = 'Регистрация';
$l['forgot_password'] = 'Забыли пароль?';
$l['error_nopermission_user_1'] = 'Вы не вошли или не имеете прав доступа для просмотра этой страницы. Возможно, это произошло по одной из следующих причин:';
$l['error_nopermission_user_ajax'] = 'У вас нет прав доступа к этой странице.';
$l['error_nopermission_user_2'] = 'Ваш аккаунт удален или забанен.';
$l['error_nopermission_user_3'] = 'Вы не вошли или не имеете прав доступа для просмотра этой страницы. Вы пытаетесь использовать средства управления форумом. Прочитайте правила форума и выясните можете ли Вы делать это.';
$l['error_nopermission_user_4'] = 'Ваша учетная запись ожидает активации или модерирования.';
$l['error_nopermission_user_5'] = 'Вы получили  доступ к этой странице напрямую вместо использования соответствующий формы или ссылки.';
$l['error_nopermission_user_resendactivation'] = 'Отправить заново активационный код';
$l['error_nopermission_user_username'] = 'You are currently logged in with the username: \'{1}\'';
$l['logged_in_user'] = 'Вы вошли как:';
$l['error_too_many_images'] = 'Слишком много изображений.';
$l['error_too_many_images2'] = 'Ваше сообщение не может быть отправлено, так как содержит слишком много изображений. Удалите несколько изображений.';
$l['error_too_many_images3'] = '<b>Заметка:</b> Максимально количество изображений в сообщении:';
$l['error_attach_file'] = 'Ошибка вложения файла';
$l['please_correct_errors'] = 'Пожалуйста, исправьте ошибки:';
$l['error_reachedattachquota'] = 'Невозможно вложить этот файл, поскольку Вы достигли лимита вложений (<b>{1}</b>)';
$l['error_maxattachpost'] = 'Извините, но Вы не можете вложить этот файл потому, что Вы достигли макимального числа вложений в одном сообщении {1}';
$l['error_invaliduser'] = 'Выбранный пользователь не существует.';
$l['error_invalidaction'] = 'Неверное действие';
$l['error_messagelength'] = 'Ваше сообщение слишком длинное и поэтому не может быть отправлено.';
$l['error_message_too_short'] = 'Ваше сообщение слишком короткое и не может быть отправлено.';
$l['failed_login_wait'] = 'Вы превысили лимит попыток входа. Вы должны подождать {1}ч {2}м {3}с, перед тем как Вы сможете войти снова.';
$l['failed_login_again'] = '<br/>Осталось попыток входа: <strong>{1}</strong>.';
$l['error_max_emails_day'] = 'Вы не можете использовать данную функцию, поскольку Вы уже исчерпали свой лимит из {1} сообщений за сутки.';
$l['attachments_disabled'] = 'Вы не можете использовать систему вложений, так как это запрещено администратором.';

$l['emailsubject_lostpw'] = 'Сброс пароля на {1}';
$l['emailsubject_passwordreset'] = 'Новый пароль на {1}';
$l['emailsubject_subscription'] = 'Новый ответ в {1}';
$l['emailsubject_randompassword'] = 'Ваш пароль на {1}';
$l['emailsubject_activateaccount'] = 'Активация учетной записи на {1}';
$l['emailsubject_forumsubscription'] = 'Новая тема в {1}';
$l['emailsubject_reportpost'] = 'Жалоба на сообщение в {1}';
$l['emailsubject_reachedpmquota'] = 'Достигнут лимит личных сообщений на {1}';
$l['emailsubject_changeemail'] = 'Изменение адреса электронной почты на {1}';
$l['emailsubject_newpm'] = 'Новое личное сообщение на {1} - {2}';
$l['emailsubject_newjoinrequest'] = 'Новый запрос на присоединение {1}';
$l['emailsubject_sendtofriend'] = 'Интересный сайт - {1}';
$l['emailsubject_changepassword'] = 'Изменение пароля {1}';
$l['emailbit_viewthread'] = '... (просмотрите тему, чтобы прочитать далее..)';

$l['email_lostpw'] = '{1},

Для смены Вашего пароля на {2}, Вы должны пройти по следующей ссылке в вашем браузере:

{3}/member.php?action=resetpassword&uid={4}&code={5}

Если ссылка, указанная выше, не работает, используйте данную ссылку:

{3}/member.php?action=resetpassword

Вы должны будете ввести:
Имя: {1}
Активационный код: {5}

Спасибо,
Администрация {2} ';

$l['email_lostpw1'] = '{1},

Для смены Вашего пароля на {2}, Вы должны пройти по следующей ссылке в вашем браузере:

{3}/member.php?action=resetpassword&uid={4}&code={5}

Если ссылка, указанная выше, не работает, используйте данную ссылку:

{3}/member.php?action=resetpassword

Вы должны будете ввести:
Ваш адрес E-Mail
Активационный код: {5}

Спасибо,
Администрация {2} ';

$l['email_lostpw2'] = '{1}, 

Для смены Вашего пароля на {2}, Вы должны пройти по следующей ссылке в вашем браузере:

{3}/member.php?action=resetpassword&uid={4}&code={5}

Если ссылка, указанная выше, не работает, используйте данную ссылку:

{3}/member.php?action=resetpassword

Вы должны будете ввести:
Имя: {1} (или Ваш адрес E-Mail)
Активационный код: {5}

Спасибо,
Администрация {2} ';

$l['email_reportpost'] = '{1} на {2} отправил жалобу на данное сообщение:

{3}
{4}/{5}

Причина того, что пользователь отправил отчет:
{7}

Этот отчет был отправлен всем модераторам этого форума, или всем администраторам и супермодераторам, если этот форум не имеет модераторов.

Пожалуйста, проверьте это сообщение как можно скорее.';

$l['email_passwordreset'] = '{1},

Ваш пароль на {2} был изменен.

Ваш новый пароль: {3}

Вам необходимо использовать новый пароль, чтобы войти на форум. Вы можете изменить его в вашем профиле.

Спасибо,
Администрация {2} ';

$l['email_randompassword'] = '{1},

Спасибо за регистрацию на {2}. Ниже Вы можете увидеть Ваше имя и случайным образом сгенерированный пароль. Для входа в {2}, Вам потребуются эти детали.

Имя: {3}
Пароль: {4}

Рекомендуем Вам изменить пароль сразу после входа. Вы можете сделать это перейдя в ваш профильи затем кликнуть Смена Пароля в меню слева.

Спасибо,
Администрация {2} ';

$l['email_randompassword1'] = '{1},

Спасибо за регистрацию на {2}. Ниже Вы можете увидеть Ваше имя и случайным образом сгенерированный пароль. Чтобы зайти на {2}, Вам нужны будут данные ниже:

Ваш адрес E-Mail
Пароль: {4}

Рекомендуем Вам изменить пароль после входа. Для этого зайдите в свой профиль и выберите изменить пароль.

Спасибо,
Администрация {2} ';

$l['email_randompassword2'] = '{1},

Спасибо за регистрацию на {2}. Ниже Вы можете увидеть Ваше имя и случайным образом сгенерированный пароль. Чтобы зайти на {2}, Вам нужны будут данные ниже:

Имя: {3} (или Ваш адрес E-Mail)
Пароль: {4}

Рекомендуем Вам изменить пароль после входа. Для этого зайдите в свой профиль и выберите изменить пароль.

Спасибо,
Администрация {2} ';

$l['email_sendtofriend'] = 'Здравствуйте,

{1} на {2} считает, что вам было бы интересно прочитать это:

{3}

{1} включил следующее сообщение:
------------------------------------------
{4}
------------------------------------------

Спасибо,
Администрация {2} ';
$l['email_forumsubscription'] = '{1}, 

{2} создал новую тему в форуме {3}. У вас есть подписка на этот форум на {4}.

Название это темы: {5}

Вот часть первого сообщения:
--
{6}
--

Для того чтобы прочитать всё сообщение, пройдите по ссылке:
{7}/{8}

Возможно, со времени отправки уведомления появились другие темы или сообщения, но Вы не получите больше уведомлений, пока не посетите форум.

Спасибо,
Администрация {2}

------------------------------------------
Информация для отказа от подписки:

Если Вы больше не хотите получать уведомления о новых темах в данном форуме, пройдите по следующей ссылке:
{7}/usercp2.php?action=removesubscription&type=forum&fid={9}&my_post_key={10}

------------------------------------------';

$l['email_activateaccount'] = '{1}, 

Для завершения регистрации на {2}, необходимо пройти по следующей ссылке.

{3}/member.php?action=activate&uid={4}&code={5}

Если ссылка не работает, то пройдите по ссылке:

{3}/member.php?action=activate

Вам нужно ввести:
Имя: {1}
Активационный код: {5}

Спасибо,
Администрация {2}';

$l['email_activateaccount1'] = '{1}, 

Для завершения регистрации на {2}, необходимо пройти по следующей ссылке.

{3}/member.php?action=activate&uid={4}&code={5}

Если ссылка не работает, то пройдите по ссылке:

{3}/member.php?action=activate

Вам нужно ввести cktle.:
Ваш адрес E-Mail
Активационный код: {5}

Спасибо,
Администрация {2} ';

$l['email_activateaccount2'] = '{1}, 

Для завершения регистрации на {2}, необходимо пройти по следующей ссылке.

{3}/member.php?action=activate&uid={4}&code={5}

Если ссылка не работает, то пройдите по ссылке:

{3}/member.php?action=activate

Вам нужно ввести:
Имя: {1} (или Ваш адрес E-Mail)
Активационный код: {5}

Спасибо,
Администрация {2} ';

$l['email_subscription'] = '{1}, 

{2} ответил в теме, на которую Вы подписались на {3}. Название темы: {4}.

Начало сообщения:
------------------------------------------
{5}
------------------------------------------

Для того чтобы прочитать всё сообщение, пройдите по ссылке:
{6}/{7}

Возможно, со времени отправки уведомления появились другие сообщения в этой теме, но Вы не получите больше уведомлений, пока не посетите форум.

Спасибо,
Администрация {3}

------------------------------------------
Информация для отказа от подписки:

Если Вы больше не хотите получать уведомления о новых ответах в данной теме, пройдите по следующей ссылке:
{6}/usercp2.php?action=removesubscription&tid={8}&key={9}&my_post_key={10}

------------------------------------------';

$l['email_reachedpmquota'] = '{1}, 

Сообщение от {2}, у вас превышен лимит личных сообщений.

Один или несколько пользователей пытались отправить Вам личное сообщение, и не смогли сделать это по этой причине.

Пожалуйста, удалите некоторые хранящиеся у вас личные сообщения, помня так же, что их следует удалить и из \'Корзины\'.

Спасибо,
Администрация {2}
{3}';

$l['email_changeemail'] = '{1}, 

Мы получили запрос на {2} о изменении Вашего адреса электронной почты (смотрите информацию ниже).

Старый адрес электронной почты: {3}
Новый адрес электронной почты: {4}

Если эти изменения правильны, пожалуйста, завершите процесс проверки на {2} пройдя по ссылке.

{5}/member.php?action=activate&uid={8}&code={6}

Если ссылка выше не работает, пройдите по ссылке:

{5}/member.php?action=activate

Вы должны ввести:
Имя: {7}
Активационный код: {6}

Если Вы не произведете проверку нового адреса электронной почты, то адрес, хранящийся в вашем профиле, не будет изменен.

Спасибо,
Администрация {2}
{5}';

$l['email_changeemail_noactivation'] = '{1},

Мы получили запрос на {2} о изменении Вашего адреса электронной почты (смотрите информацию ниже).

Старый адрес электронной почты: {3}
Новый адрес электронной почты: {4}

Это изменение будет выполнено автоматически. Если Вы не запрашивали это изменение свяжитесь с администратором.

Спасибо,
Администрация {2}
{5}';

$l['email_changepassword'] = '{1},

Вы получили это сообщение потому, что Вы или кто-то с  вашим паролем пытается изменить Ваш пароль.

Имя пользователя: {1}
Адрес E-Mail: {2}

If you did not request this change, please get in touch with an Administrator.

Спасибо,
Администрация {3}
{4}';

$l['email_newpm'] = '{1},

Вы получили новое личное сообщение в {3} от {2}:

------------------------------------------
{5}
------------------------------------------

Для просмотра, ответа или пересылки этого сообщения, Вы можете перейти по ссылке:

{4}/private.php

Пожалуста отметьте, что Вы не будите получать уведомления о новых сообщениях пока не посетите {3}.

Вы можете запретить уведомления о новых сообщениях в опций  на вашей персональной странице :

{4}/usercp.php?action=options

Спасибо,
Администрация {3}
{4}';

$l['email_emailuser'] = '{1}, 

Пользователь {2} с форума {3} отправил вам следующее сообщение:
------------------------------------------
{5}
------------------------------------------

Спасибо,
Администрация {3}
{4}

------------------------------------------
Не хотите получать электронные письма от других участников форума?

Если Вы не желаете получать сообщения от других участников форума, скройте свой e-mail адрес здесь: 
{4}/usercp.php?action=options

------------------------------------------';

$l['email_groupleader_joinrequest'] = '{1},

{2} имеет запрос на присоединение {3} on {4} (смотри ниже).

Причина: {5}

Для того чтобы принять или отклонить запорос , перейдите

{6}/managegroup.php?gid={7}

Спасибо,
Администрация{4}';
$l['email_contact_subject'] = 'Контакт: {1}';
$l['email_contact'] = 'E-Mail: {1}
Профиль форума: {2}
IP адрес: {3}
Сообщение:
{4}';

$l['pmsubject_subscription'] = 'новый ответ {1}';
$l['pm_subscription'] = '{1},

{2} ответил на тему на которую Вы подписаны. Эта тема под названием {3}.

Здесь выдержка из сообщения:
------------------------------------------
{4}
------------------------------------------

Для просмотра темы, Вы можете перейти по следующему адресу:
[url]{5}/{6}[/url]

Там могут быть и другие ответы на эту тему, но Вы не получите больше уведомлений, пока Вы не посетите тему снова.

------------------------------------------
Информация об отписке:

Если Вы не желаете получать оповещения о ответах на вашу тему, посетите следующую ссылку в вашем браузере:
[url]{5}/usercp2.php?action=removesubscription&tid={7}&key={8}&my_post_key={9}[/url]

------------------------------------------';
