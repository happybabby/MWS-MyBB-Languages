<?php
/**
 * MyBB 1.6 English Language Pack
 * Copyright 2010 MyBB Group, All Rights Reserved
 * 
 * $Id: user_admin_permissions.lang.php 5297 2010-12-28 22:01:14Z Tomm $
 */

$l['admin_permissions'] = "管理者アクセス権";
$l['user_permissions'] = "ユーザのアクセス権";
$l['user_permissions_desc'] = "ここではユーザごとの管理者アクセス権を管理できます。管理者ごとに管理者CPの特定のエリアへのアクセスを制限したい場合などに利用できます。";
$l['group_permissions'] = "グループのアクセス権";
$l['group_permissions_desc'] = "管理者アクセス権は、管理者CPへのアクセスを許可されているユーザグループにも適用できます。同様に、管理者グループ全体にアクセス制限をかけることもできます。";
$l['default_permissions'] = "デフォルトのアクセス権";
$l['default_permissions_desc'] = "デフォルトの管理者アクセス権が適用されるのは、カスタム管理者アクセス権を設定されていないユーザ、およびグループ管理者アクセス権を継承していないユーザです。";
$l['admin_permissions_updated'] = "管理者アクセス権を更新しました。";
$l['revoke_permissions'] = "アクセス権をもとに戻す";
$l['edit_permissions'] = "アクセス権を編集";
$l['set_permissions'] = "アクセス権を設定";
$l['edit_permissions_desc'] = "ここではタブごと、またはページごとのアクセス制限を設定できます。「ホーム」タブはすべての管理者がアクセス可能です。";
$l['update_permissions'] = "アクセス権を更新";
$l['view_log'] = "ログを見る";
$l['permissions_type_group'] = "グループのアクセス権タイプ";
$l['permissions_type_user'] = "ユーザのアクセス権タイプ";
$l['no_group_perms'] = "現在、グループアクセス権の設定はありません。";
$l['no_user_perms'] = "現在、ユーザアクセス権の設定はありません。";
$l['edit_user'] = "ユーザプロフィールを編集";
$l['using_individual_perms'] = "個別のアクセス権を使用";
$l['using_custom_perms'] = "カスタムアクセス権を使用";
$l['using_group_perms'] = "グループアクセス権を使用";
$l['using_default_perms'] = "デフォルトアクセス権を使用";
$l['last_active'] = "最終訪問";
$l['user'] = "ユーザ";
$l['edit_group'] = "グループを編集";
$l['default'] = "デフォルト";
$l['group'] = "グループ";
$l['error_delete_super_admin'] = "指定されたユーザがスーパー管理者のため、このアクションは実行できません。<br /><br />このアクションを実行するには、ご自分のユーザIDをinc/config.phpのスーパー管理者リストに追加してください。";
$l['error_delete_no_uid'] = "入力された管理者ユーザ/管理者グループのアクセス権IDが入力されていません。";
$l['error_delete_invalid_uid'] = "入力された管理者ユーザ/管理者グループのアクセス権IDが間違っています。";
$l['success_perms_deleted'] = "管理者ユーザ/管理者グループのアクセス権をもとに戻しました。";
$l['confirm_perms_deletion'] = "本当にこの管理者ユーザ/管理者グループのアクセス権をもとに戻しますか？";
$l['confirm_perms_deletion2'] = "本当にこのユーザのアクセス権をもとに戻しますか？";
?>