<?php
/**
 * MyBB 1.6 English Language Pack
 * Copyright 2010 MyBB Group, All Rights Reserved
 * 
 * $Id: tools_cache.lang.php 5297 2010-12-28 22:01:14Z Tomm $
 */

$l['cache'] = "キャッシュ:";
$l['cache_manager'] = "キャッシュマネージャ";
$l['cache_manager_description'] = "ここではMyBBを最適化するために使用されるキャッシュを管理できます。キャッシュ再構築には、キャッシュの作成や再同期で必要とするすべてのファイルが使われます。キャッシュを再読み込みすると、選択したキャッシュハンドラ（ディスク、eaccelerator、memcacheなど）に読み込ませます。キャッシュの再読み込みは、データベースやファイルシステムのキャッシュハンドラを変更するときに便利です。";
$l['rebuild_cache'] = "キャッシュを再構築";
$l['reload_cache'] = "キャッシュを再読み込み";
$l['error_cannot_rebuild'] = "このキャッシュは再構築できません。";
$l['error_empty_cache'] = "キャッシュが空です。";
$l['error_incorrect_cache'] = "指定されたキャッシュが間違っています。";
$l['error_no_cache_specified'] = "表示するキャッシュが指定されていません。";
$l['success_cache_rebuilt'] = "キャッシュを再構築しました。";
$l['success_cache_reloaded'] = "キャッシュを再読み込みしました。";
?>