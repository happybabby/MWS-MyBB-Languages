<?php
/**
 * MyBB 1.6 English Language Pack
 * Copyright 2010 MyBB Group, All Rights Reserved
 * 
 * $Id: tools_backupdb.lang.php 5297 2010-12-28 22:01:14Z Tomm $
 */


$l['database_backups'] = "データベースバックアップ";
$l['database_backups_desc'] = "ここではWebサーバ上のMyBBバックアップディレクトリに保存されているバックアップを一覧表示します。";
$l['new_database_backup'] = "データベースバックアップ";
$l['new_backup'] = "新しいバックアップ";
$l['new_backup_desc'] = "ここではデータベースのバックアップを作成できます。";
$l['backups'] = "バックアップ";
$l['existing_database_backups'] = "既存のデータベースバックアップ";
$l['backup_saved_to'] = "バックアップ保存先:";
$l['download'] = "ダウンロード";
$l['table_selection'] = "テーブル選択";
$l['backup_options'] = "バックアップオプション";
$l['table_select_desc'] = "アクションを適用するデータベーステーブルを選択できます。複数選択時にはCTRLキーを使ってください。";
$l['select_all'] = "すべて選択";
$l['deselect_all'] = "すべて選択解除";
$l['select_forum_tables'] = "フォーラムテーブルを選択";
$l['file_type'] = "ファイルタイプ";
$l['file_type_desc'] = "データベースバックアップを保存するファイルタイプを選択してください。";
$l['gzip_compressed'] = "GZIP圧縮";
$l['plain_text'] = "テキスト形式";
$l['save_method'] = "保存方法";
$l['save_method_desc'] = "バックアップを保存する方法を選択してください。";
$l['backup_directory'] = "バックアップディレクトリ";
$l['backup_contents'] = "バックアップ内容";
$l['backup_contents_desc'] = "バックアップに含めたい情報を選択してください。";
$l['structure_and_data'] = "データベース構造とデータ";
$l['structure_only'] = "データベース構造のみ";
$l['data_only'] = "データのみ";
$l['analyze_and_optimize'] = "選択したテーブルを解析&amp;最適化";
$l['analyze_and_optimize_desc'] = "選択したテーブルをバックアップ中に解析して最適化しますか？";
$l['perform_backup'] = "バックアップを実行";
$l['backup_filename'] = "バックアップファイル名";
$l['file_size'] = "ファイルサイズ";
$l['creation_date'] = "作成日";
$l['no_backups'] = "現在、作成されたバックアップはありません。";
$l['error_file_not_specified'] = "ダウンロードするデータベースバックアップが指定されていません。";
$l['error_invalid_backup'] = "指定されたバックアップファイルが間違っています。または存在しません。";
$l['error_backup_doesnt_exist'] = "指定されたバックアップは存在しません。";
$l['error_backup_not_deleted'] = "バックアップは削除されていません。";
$l['error_tables_not_selected'] = "バックアップするテーブルが選択されていません。";
$l['error_no_zlib'] = "PHPのzlibライブラリが有効になっていないため、GZIP圧縮したバックアップファイルは作成できません。";
$l['alert_not_writable'] = "バックアップファイルディレクトリ（管理者CPで設定）に書き込めません。サーバ上にバックアップファイルが保存できません。";
$l['confirm_backup_deletion'] = "本当にこのバックアップファイルを削除しますか？";
$l['success_backup_deleted'] = "バックアップを削除しました。";
$l['success_backup_created'] = "バックアップを作成しました。";
?>