<?php
/**
 * MyBB 1.6 English Language Pack
 * Copyright 2010 MyBB Group, All Rights Reserved
 * 
 * $Id: user_banning.lang.php 5297 2010-12-28 22:01:14Z Tomm $
 */

// Tabs
$l['banning'] = "追放 / 禁止";
$l['banned_accounts'] = "追放アカウント";
$l['banned_accounts_desc'] = "ここではこの掲示板へのアクセスを禁止するユーザアカウントの管理ができます。";
$l['ban_a_user'] = "ユーザを追放";
$l['ban_a_user_desc'] = "ここではユーザを追放することができます。";
$l['edit_ban'] = "追放を編集";
$l['edit_ban_desc'] = "ここでは現在追放中のユーザの追放理由と期間を編集できます。";
$l['banned_ips'] = "追放IP";
$l['disallowed_usernames'] = "禁止ユーザ名";
$l['disallowed_email_addresses'] = "禁止メールアドレス";
// Errors
$l['error_invalid_ban'] = "選択した追放対象は無効です。";
$l['error_invalid_username'] = "入力されたユーザ名は無効です。または存在しません。";
$l['error_no_perm_to_ban'] = "このユーザを追放する権限がありません。";
$l['error_already_banned'] = "このユーザはすでに追放されているため、再度追放することはできません。";
$l['error_ban_self'] = "自分自身を追放することはできません。";
$l['error_no_reason'] = "追放理由を入力してください。";
// Success
$l['success_ban_lifted'] = "選択したユーザの追放は解除されました。";
$l['success_banned'] = "選択したユーザは追放されました。";
$l['success_ban_updated'] = "選択した追放の情報が更新されました。";
$l['success_pruned'] = "選択したユーザの記事とスレッドは削除されました。";
// Confirm
$l['confirm_lift_ban'] = "本当にこの追放を解除しますか？";
$l['confirm_prune'] = "本当にこのユーザの作成したすべてのスレッドと記事を削除しますか？";
//== Pages
//= Add / Edit
$l['ban_username'] = "ユーザ名 <em>*</em>";
$l['autocomplete_enabled'] = "この項目では自動補完が有効です。";
$l['ban_reason'] = "追放理由";
$l['ban_group'] = "追放グループ <em>*</em>";
$l['ban_group_desc'] = "ユーザを追放するには、追放グループに移動する必要があります。";
$l['ban_time'] = "追放期間 <em>*</em>";
//= Index
$l['user'] = "ユーザ";
$l['moderation'] = "モデレート";
$l['ban_lifts_on'] = "追放の解除日";
$l['time_left'] = "残り時間";
$l['permenantly'] = "永久に";
$l['na'] = "なし";
$l['for'] = "for";
$l['bannedby_x_on_x'] = "<strong>{1}</strong><br /><small>追放した管理者: {2} 追放日時: {3} {4}</small>";
$l['lift'] = "解除";
$l['no_banned_users'] = "現在、追放中のユーザはいません。";
$l['prune_threads_and_posts'] = "スレッド &amp; 記事を削除";
// Buttons
$l['ban_user'] = "ユーザを追放";
$l['update_ban'] = "追放を更新";
?>