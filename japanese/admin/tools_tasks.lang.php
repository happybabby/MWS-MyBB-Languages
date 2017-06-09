<?php
/**
 * MyBB 1.6 English Language Pack
 * Copyright 2010 MyBB Group, All Rights Reserved
 *
 * $Id$
 */

$l['task_manager'] = "タスクマネージャ";
$l['add_new_task'] = "新しいタスクを追加";
$l['add_new_task_desc'] = "ここでは掲示板で自動実行するためのタスクをスケジュールできます。";
$l['edit_task'] = "タスクを編集";
$l['edit_task_desc'] = "スケジュールされたタスクの様々な設定を編集できます。";
$l['task_logs'] = "タスクログ";
$l['view_task_logs'] = "タスクログを見る";
$l['view_task_logs_desc'] = "タスクが実行されると、ログが有効に設定されている場合には実行結果やエラー内容がログとして記録され、下に表示されます。30日以上経過したログは自動的に削除されます。";
$l['scheduled_tasks'] = "スケジュールされたタスク";
$l['scheduled_tasks_desc'] = "ここでは掲示板で自動的に実行するタスクを管理できます。今すぐタスクを実行するには、タスクの右側にあるアイコンをクリックしてください。";
$l['title'] = "タイトル";
$l['short_description'] = "説明";
$l['task_file'] = "タスクファイル";
$l['task_file_desc'] = "タスクとして実行するファイルを選択してください。";
$l['time_minutes'] = "スケジュール日時: 分";
$l['time_minutes_desc'] = "タスクを実行させたい時刻の「分」の部分(0～59)をカンマ区切りで指定してください。「*」を入力すると、毎分実行されます。";
$l['time_hours'] = "スケジュール日時: 時間";
$l['time_hours_desc'] = "タスクを実行させたい時刻の「時間」の部分(0～23)をカンマ区切りで指定してください。「*」を入力すると、毎時間実行されます。";
$l['time_days_of_month'] = "スケジュール日時: 日";
$l['time_days_of_month_desc'] = "タスクを実行させたい日時の「日」の部分(0～31)をカンマ区切りで指定してください。「*」を入力すると、毎日実行されます。";
$l['every_weekday'] = "平日（月曜～金曜）";
$l['sunday'] = "日曜日";
$l['monday'] = "月曜日";
$l['tuesday'] = "火曜日";
$l['wednesday'] = "水曜日";
$l['thursday'] = "木曜日";
$l['friday'] = "金曜日";
$l['saturday'] = "土曜日";
$l['time_weekdays'] = "スケジュール日時: 曜日";
$l['time_weekdays_desc'] = "このタスクを実行する曜日を選択してください。複数選択する場合には、CTRLを押しながら選択してください。月曜日から金曜日にかけて実行したい場合には「平日」を選択してください。";
$l['every_month'] = "毎月";
$l['time_months'] = "スケジュール日時: 月";
$l['time_months_desc'] = "このタスクを実行する月を選択してください。複数選択する場合には、CTRLを押しながら選択してください。毎月実行したい場合には「平日」を選択してください。";
$l['enabled'] = "タスクを有効にする";
$l['enable_logging'] = "ログに残す";
$l['save_task'] = "タスクを保存";
$l['task'] = "タスク";
$l['date'] = "日付";
$l['data'] = "データ";
$l['no_task_logs'] = "現在、タスクのスケジュールに関するログはありません。";
$l['next_run'] = "次回の実行予定";
$l['run_task_now'] = "今すぐ実行";
$l['run_task'] = "タスクを実行";
$l['disable_task'] = "タスクを無効化";
$l['enable_task'] = "タスクを有効化";
$l['delete_task'] = "タスクを削除";
$l['alt_enabled'] = "有効";
$l['alt_disabled'] = "無効";
$l['error_invalid_task'] = "指定されたタスクは存在しません。";
$l['error_missing_title'] = "スケジュールするタスクのタイトルが入力されていません。";
$l['error_missing_description'] = "スケジュールするタスクの説明が入力されていません。";
$l['error_invalid_task_file'] = "指定されたタスクファイルが存在しません。";
$l['error_invalid_minute'] = "入力された分が間違っています。";
$l['error_invalid_hour'] = "入力された時間が間違っています。";
$l['error_invalid_day'] = "入力された日が間違っています。";
$l['error_invalid_weekday'] = "入力された曜日が間違っています。";
$l['error_invalid_month'] = "入力された月が間違っています。";
$l['success_task_created'] = "タスクを作成しました。";
$l['success_task_updated'] = "選択されたタスクを更新しました。";
$l['success_task_deleted'] = "選択されたタスクを削除しました。";
$l['success_task_enabled'] = "選択されたタスクを有効にしました。";
$l['success_task_disabled'] = "選択されたタスクを無効にしました。";
$l['success_task_run'] = "選択されたタスクを実行しました。";
$l['confirm_task_deletion'] = "本当にこのタスクのスケジュールを削除しますか？";
$l['confirm_task_enable'] = "<strong>警告:</strong> cron経由でしか実行できないタスクを有効化しようとしています。(cronについて詳しくは<a href=\"http://docs.mybb.com/Help-Task_System.html\" target=\"_blank\">MyBB Docs</a> をご覧ください。) 続けますか？";
$l['no_tasks'] = "現在、この掲示板にはタスクがありません。";
?>
