<?php
/**
 * MyBB 1.6 English Language Pack
 * Copyright 2010 MyBB Group, All Rights Reserved
 *
 * $Id$
 */

$l['system_health'] = "システム状態";
$l['system_health_desc'] = "ここではシステム状態に関する情報を見ることができます。";
$l['utf8_conversion'] = "UTF-8変換";
$l['utf8_conversion_desc'] = "現在、データベーステーブルをUTF-8フォーマットに変換中です。掲示板の規模とテーブルサイズによっては数時間かかることもあります。処理が終わればUTF-8変換のメインページに戻ります。";
$l['utf8_conversion_desc2'] = "このツールはデータベーステーブルがUTF-8形式かどうかを確認し、UTF-8形式でない場合には変換することができます。";
$l['convert_all'] = "すべて変換";
$l['converting_to_utf8'] = "現在、MyBBは「{1}」テーブルのエンコーディングを{1}からUTF-8に変換中です。";
$l['convert_to_utf8'] = "「{1}」テーブルのエンコーディングを{1}からUTF-8に変換しようとしています。";
$l['convert_all_to_utf'] = "すべてのテーブルのエンコーディングを{1}からUTF-8に変換しようとしています。";
$l['convert_all_to_utf8mb4'] = "すべてのテーブルのエンコーディングを{1}から4バイト対応UTF-8に変換しようとしています。";
$l['converting_to_utf8mb4'] = "現在、MyBBは「{1}」テーブルのエンコーディングを{1}から4倍と対応UTF-8に変換中です。";
$l['please_wait'] = "お待ちください...";
$l['converting_table'] = "変換中のテーブル:";
$l['convert_table'] = "テーブルを変換";
$l['convert_tables'] = "すべてのテーブルを変換";
$l['convert_database_table'] = "データベーステーブルを変換";
$l['convert_database_tables'] = "すべてのデータベーステーブルを変換";
$l['table'] = "テーブル";
$l['status_utf8'] = "UTF-8状態";
$l['status_utf8mb4'] = "4バイト対応UTF-8サポート<br />(要MySQL 5.5.3以上)";
$l['not_available'] = "なし";
$l['all_tables'] = "すべてのテーブル";
$l['convert_now'] = "変換する";
$l['totals'] = "合計";
$l['attachments'] = "添付ファイル";
$l['total_database_size'] = "データベースサイズ合計";
$l['attachment_space_used'] = "添付ファイルのディスク使用量";
$l['total_cache_size'] = "キャッシュサイズ合計";
$l['estimated_attachment_bandwidth_usage'] = "添付ファイル転送に使用した帯域見積もり";
$l['max_upload_post_size'] = "最大アップロード / POSTサイズ";
$l['average_attachment_size'] = "添付ファイルサイズ平均";
$l['stats'] = "統計";
$l['task'] = "タスク";
$l['run_time'] = "実行予定";
$l['next_3_tasks'] = "次の3タスク";
$l['no_tasks'] = "現在実行中のタスクはありません。";
$l['backup_time'] = "バックアップ日時";
$l['no_backups'] = "現在、まだバックアップは作成されていません。";
$l['existing_db_backups'] = "既存のデータベースバックアップ";
$l['writable'] = "書き込み可";
$l['not_writable'] = "書き込み不可";
$l['please_chmod_777'] = "CHMODで777に設定してください。";
$l['chmod_info'] = "下に指定されているとおりにCHMODで設定を変更してください。CHMODについての詳細は次を参照してください。";
$l['file'] = "ファイル";
$l['location'] = "場所";
$l['settings_file'] = "環境設定ファイル";
$l['config_file'] = "設定ファイル";
$l['file_upload_dir'] = "ファイルアップロードディレクトリ";
$l['avatar_upload_dir'] = "アバターアップロードディレクトリ";
$l['language_files'] = "言語ファイル";
$l['backup_dir'] = "バックアップディレクトリ";
$l['cache_dir'] = "キャッシュディレクトリ";
$l['themes_dir'] = "テーマディレクトリ";
$l['chmod_files_and_dirs'] = "ファイルとディレクトリをCHMOD";
$l['notice_process_long_time'] = "フォーラムの規模とテーブルサイズによっては、この処理には数時間かかることもあります。<strong>実行する前にデータベースのバックアップを作成しておくことを強くお勧めします。この処理はもとに戻すことができません。</strong>";
$l['notice_mb4_warning'] = "4バイト対応UTF-8のサポートにはMySQL 5.5.3以上が必要です。それ以外のバージョンのMySQLサーバにはデータベースをインポートできません。";
$l['check_templates'] = "テンプレートの確認";
$l['check_templates_desc'] = "インストールされているテンプレートにセキュリティ上の既知の問題がないか確認します。";
$l['check_templates_title'] = "テンプレートのセキュリティを確認";
$l['check_templates_info'] = "この処理はテンプレートを確認し、フォーラムやサーバに影響のあるセキュリティ上の問題がないか調べます。<br /><br />処理を開始するには、「続行」ボタンをクリックしてください。";
$l['check_templates_info_desc'] = "下のテンプレートにはセキュリティ上の問題が見つかりました。内容をよく確認してください。";
$l['full_edit'] = "フル編集";
$l['error_chmod'] = "個のファイルまたはディレクトリに正しくCHMODが設定されていません。";
$l['error_invalid_table'] = "指定されたテーブルは存在しません。";
$l['error_db_encoding_not_set'] = "現在の設定では、MyBBはこのツールを使えません。設定方法について詳しくは<a href=\"http://docs.mybb.com/Utf8_setup.html\">MyBB  Docs</a>を参照してください。";
$l['error_not_supported'] = "現在のデータベースエンジンはUTF-8変換ツールがサポートしていません。";
$l['error_invalid_input'] = "テンプレートの確認中に問題が発生しました。時間をおいて再度お試しください。またはMyBBグループにサポートを依頼してください。";
$l['error_master_templates_altered'] = "マスターテンプレートが改竄されました。MyBBグループに改竄に関するサポートを依頼してください。";
$l['error_utf8mb4_version'] = "このバージョンのMySQLは4バイト対応UTF-8エンコーディングをサポートしていません。";
$l['warning_multiple_encodings'] = "データベースではエンコーディングを統一することをお勧めします。異なるエンコーディングが混在すると、予期せぬエラーを引き起こす可能性があります。";
$l['warning_utf8mb4_config'] = "4バイト対応UTF-8をフルサポートするには、inc/config.phpの中の<i>\$config['database']['encoding'] = 'utf8';</i>を<i>\$config['database']['encoding'] = 'utf8mb4';</i>に書き換えてください。";
$l['success_templates_checked'] = "テンプレートの確認を終了しました。セキュリティの問題は見つかりませんでした。";
$l['success_all_tables_already_converted'] = "すべてのテーブルはすでに変換済みであるか、UTF-8形式になっています。";
$l['success_table_converted'] = "選択されたテーブル「{1}」をUTF-8に変換しました。";
$l['success_chmod'] = "すべてのファイルとディレクトリは適切にCHMODが設定されています。";
?>