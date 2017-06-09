<?php
/**
 * MyBB 1.6 English Language Pack
 * Copyright 2010 MyBB Group, All Rights Reserved
 *
 * $Id: forum_attachments.lang.php 5297 2010-12-28 22:01:14Z Tomm $
 */

// Tabs
$l['attachments'] = "添付ファイル";
$l['stats'] = "統計";
$l['find_attachments'] = "添付ファイルを検索";
$l['find_attachments_desc'] = "添付ファイル検索システムを使って、ユーザが投稿した特定の添付ファイルを探し出すことができます。下の検索条件を入力してください。すべてのフィールドは任意項目で、フィールドに値を入れない限りは検索条件としません。";
$l['find_orphans'] = "親のいない添付ファイルを検索";
$l['find_orphans_desc'] = "親のない添付ファイルとは、何らかの事情によりデータベースまたはファイルシステム上から失われているファイルです。このツールを使えば、そうしたファイルを探し出して削除することができます。";
$l['attachment_stats'] = "添付ファイル統計";
$l['attachment_stats_desc'] = "以下は掲示板全体での添付ファイルの統計情報です。";
// Errors
$l['error_nothing_selected'] = "削除する添付ファイルを選択してください。";
$l['error_no_attachments'] = "添付ファイルがまだ存在しません。添付ファイルが投稿されるまで、このセクションにはアクセスできません。";
$l['error_not_all_removed'] = "親のない添付ファイルの一部だけ削除しました。残りの一部はアップロードディレクトリから削除することができませんでした。";
$l['error_invalid_username'] = "入力されたユーザ名が間違っています。";
$l['error_invalid_forums'] = "選択されたフォーラムに正しくないものがあります。";
$l['error_no_results'] = "検索条件に該当する添付ファイルが見つかりませんでした。";
$l['error_not_found'] = "アップロードディレクトリに添付ファイルが見つかりませんでした。";
$l['error_not_attached'] = "添付ファイルがアップロードされて24時間以上が経過しましたが、記事に添付されていません。";
$l['error_does_not_exist'] = "このファイルが添付されたスレッドまたは記事は存在しません。";
// Success
$l['success_deleted'] = "選択された添付ファイルを削除しました。";
$l['success_orphan_deleted'] = "選択された親のない添付ファイルを削除しました。";
$l['success_no_orphans'] = "親のない添付ファイルは存在しません。";
// Confirm
$l['confirm_delete'] = "本当に選択した添付ファイルを削除しますか？";
// == Pages
// = Stats
$l['general_stats'] = "全体の統計";
$l['stats_attachment_stats'] = "添付ファイル - 添付ファイルの統計";
$l['num_uploaded'] = "<strong>添付ファイル数</strong>";
$l['space_used'] = "<strong>添付ファイルによるディスク使用量</strong>";
$l['bandwidth_used'] = "<strong>使用した帯域の見積もり</strong>";
$l['average_size'] = "<strong>添付ファイルの平均サイズ</strong>";
$l['size'] = "サイズ";
$l['posted_by'] = "投稿者";
$l['thread'] = "スレッド";
$l['downloads'] = "ダウンロード数";
$l['date_uploaded'] = "アップロード日";
$l['popular_attachments'] = "人気の添付ファイル TOP5";
$l['largest_attachments'] = "添付ファイルサイズ TOP5";
$l['users_diskspace'] = "ディスク消費量 TOP5";
$l['username'] = "ユーザ名";
$l['total_size'] = "合計サイズ";
// = Orphans
$l['orphan_results'] = "親のない添付ファイルの検索 - 結果";
$l['orphan_attachments_search'] = "親のない添付ファイルの検索";
$l['reason_orphaned'] = "親がいない理由";
$l['reason_not_in_table'] = "添付ファイルテーブルにない";
$l['reason_file_missing'] = "添付ファイルが存在しない";
$l['reason_thread_deleted'] = "スレッドが削除された";
$l['reason_post_never_made'] = "記事が投稿されなかった";
$l['unknown'] = "不明";
$l['results'] = "結果";
$l['step1'] = "ステップ1";
$l['step2'] = "ステップ2";
$l['step1of2'] = "ステップ1/2 - ファイルシステムをスキャン";
$l['step2of2'] = "ステップ2/2 - データベースをスキャン";
$l['step1of2_line1'] = "ファイルシステム上の親のない添付ファイルを検索中です。しばらくお待ちください。";
$l['step2of2_line1'] = "データベース上の親のない添付ファイルを検索中です。しばらくお待ちください。";
$l['step_line2'] = "この処理が完了すれば、自動的に次のステップに進みます。";
$l['scanning'] = "検索中..";
// = Attachments / Index
$l['index_find_attachments'] = "添付ファイル - 添付ファイルを検索";
$l['find_where'] = "添付ファイル検索条件";
$l['name_contains'] = "ファイル名で絞り込み";
$l['name_contains_desc'] = "部分一致指定。ワイルドカードを使って検索する場合には、*.[ファイル拡張子] のように入力してください。例: *.zip";
$l['type_contains'] = "ファイルタイプで絞り込み";
$l['forum_is'] = "投稿されたフォーラムで絞り込み";
$l['username_is'] = "投稿者で絞り込み";
$l['more_than'] = "＞";
$l['greater_than'] = "＞";
$l['is_exactly'] = "＝";
$l['less_than'] = "＜";
$l['date_posted_is'] = "投稿日の範囲で絞り込み";
$l['days_ago'] = "日前";
$l['file_size_is'] = "ファイルサイズで絞り込み";
$l['kb'] = "KB";
$l['download_count_is'] = "ダウンロード回数で絞り込み";
$l['display_options'] = "検索結果の表示方法";
$l['filename'] = "ファイル名";
$l['filesize'] = "ファイルサイズ";
$l['download_count'] = "ダウンロード回数";
$l['post_username'] = "投稿ユーザ名";
$l['asc'] = "昇順";
$l['desc'] = "降順";
$l['sort_results_by'] = "検索結果のソート";
$l['results_per_page'] = "ページ当たりの検索結果数";
$l['in'] = "を";
// Buttons
$l['button_delete_orphans'] = "選択された親のないファイルを削除";
$l['button_delete_attachments'] = "選択された添付ファイルを削除";
$l['button_find_attachments'] = "添付ファイルを検索";
?>
