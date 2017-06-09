<?php
/**
 * MyBB 1.6 English Language Pack
 * Copyright 2010 MyBB Group, All Rights Reserved
 * 
 * $Id: config_warning.lang.php 5833 2012-05-24 08:39:00Z Tomm $
 */
 
$l['warning_system'] = "警告システム";
$l['warning_types'] = "警告タイプ";
$l['warning_types_desc'] = "ここではスタッフがユーザに警告を出すときのタイプを管理できます。";
$l['add_warning_type'] = "新しい警告タイプの追加";
$l['add_warning_type_desc'] = "ここでは新しい警告タイプを作成できます。警告により追加するポイント数や警告が切れるまでの期間を警告タイプごとに設定し、ユーザは作成された警告タイプの中から選択して警告することができます。";
$l['edit_warning_type'] = "警告タイプを編集";
$l['edit_warning_type_desc'] = "ここでは警告タイプの編集ができます。警告により追加するポイント数や警告が切れるまでの期間を警告タイプごとに設定し、ユーザは作成された警告タイプの中から選択して警告することができます。";
$l['warning_levels'] = "警告レベル";
$l['warning_levels_desc'] = "警告レベル（警告ポイントの上限に対する割合）に応じて、ユーザにどのように対処するのかを定義します。ユーザを追放したり、権限を一時保留にしたりできます。";
$l['add_warning_level'] = "新しい警告レベルの追加";
$l['add_warning_level_desc'] = "新しい警告レベルを作成できます。警告レベルは、警告ポイントの上昇（最大値に対する%で指定）に応じて警告されたユーザにどのように対処するかを定義するものです。";
$l['edit_warning_level'] = "警告レベルを編集";
$l['edit_warning_level_desc'] = "警告レベルは、警告ポイントの上昇（最大値に対する%で指定）に応じて警告されたユーザにどのように対処するかを定義するものです。";
$l['percentage'] = "%";
$l['action_to_take'] = "警告されたユーザへの対応方法";
$l['move_banned_group'] = "追放グループ({3})に{1}{2}追放";
$l['move_banned_group_permanent'] = "追放グループ({1})に永久に追放";
$l['suspend_posting'] = "投稿権限を{1}{2}保留";
$l['suspend_posting_permanent'] = "投稿権限を永久に保留";
$l['moderate_new_posts'] = "新規投稿を{1}{2}モデレート";
$l['moderate_new_posts_permanent'] = "永久に新規投稿をモデレート";
$l['no_warning_levels'] = "現在、定義されている警告レベルはありません。";
$l['warning_type'] = "警告タイプ";
$l['points'] = "ポイント";
$l['expires_after'] = "期限";
$l['no_warning_types'] = "現在、定義されている警告タイプがありません。";
$l['warning_points_percentage'] = "警告ポイントの上限に対する割合(%)";
$l['warning_points_percentage_desc'] = "1から100までの間の整数を入力してください。";
$l['action_to_be_taken'] = "警告されたユーザへの対応方法";
$l['action_to_be_taken_desc'] = "警告されたユーザの警告ポイントが指定を上回ったときにどのように対応するか選択してください。";
$l['ban_user'] = "ユーザを追放";
$l['banned_group'] = "追放グループ:";
$l['ban_length'] = "追放期間:";
$l['suspend_posting_privileges'] = "投稿権限を保留";
$l['suspension_length'] = "保留期間:";
$l['moderate_posts'] = "記事をモデレート";
$l['moderation_length'] = "要モデレート期間:";
$l['save_warning_level'] = "警告レベルを保存";
$l['title'] = "タイトル";
$l['points_to_add'] = "追加するポイント";
$l['points_to_add_desc'] = "警告レベルに追加するポイント数";
$l['warning_expiry'] = "警告の有効期間";
$l['warning_expiry_desc'] = "この警告の有効期間を入力してください。";
$l['save_warning_type'] = "警告タイプを保存";
$l['expiration_hours'] = "時間";
$l['expiration_days'] = "日間";
$l['expiration_weeks'] = "週間";
$l['expiration_months'] = "か月";
$l['expiration_never'] = "無期限";
$l['expiration_permanent'] = "永久";
$l['error_invalid_warning_level'] = "指定された警告レベルは存在しません。";
$l['error_invalid_warning_percentage'] = "警告レベルに指定するパーセント値が間違っています。1から100の間の整数で指定してください。";
$l['error_invalid_warning_type'] = "指定された警告タイプは存在しません。";
$l['error_missing_type_title'] = "警告タイプのタイトルが入力されていません。";
$l['error_missing_type_points'] = "警告する際に追加するポイント数が間違っています。0以上{1}以下の整数で指定してください。";
$l['success_warning_level_created'] = "警告レベルを作成しました。";
$l['success_warning_level_updated'] = "警告レベルを更新しました。";
$l['success_warning_level_deleted'] = "選択された警告レベルを削除しました。";
$l['success_warning_type_created'] = "警告タイプを作成しました。";
$l['success_warning_type_updated'] = "警告タイプを更新しました。";
$l['success_warning_type_deleted'] = "選択された警告タイプを削除しました。";
$l['confirm_warning_level_deletion'] = "本当にこの警告レベルを削除しますか？";
$l['confirm_warning_type_deletion'] = "本当にこの警告タイプを削除しますか？";
?>