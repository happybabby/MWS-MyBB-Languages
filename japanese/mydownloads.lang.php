<?php
/***************************************************************************
 *
 *   Mods & Downloads plugin (/inc/languages/english/mydownloads.php)
 *	 Author: Diogo Parrinha
 *   Copyright: © 2009-2010 Diogo Parrinha
 *
 *   Website: http://www.mybb-plugins.com
 *
 *   Mods & Downloads adds a downloads system to MyBB.
 *
 ***************************************************************************/

/****************************************************************************
* You are NOT authorized to share/re-distribute this plugin with ANYONE without my express permission.
* You MUST NOT give credits to anyone besides me, Diogo Parrinha.
* You MUST NOT remove the license file or any conditions/rules that you may find in the included PHP files.
* The author is NOT responsible for any damaged caused by this plugin.
*
* By downloading/installing this module you agree with the conditions stated above.
****************************************************************************/
$l['myalerts_setting_mydownloads_new_comment'] = 'あなたのダウンロードにコメントが付けられた際、アラートを受け取りますか？';
$l['mydownloads'] = 'Mods & Downloads';
$l['mydownloads_active'] = '公開';
$l['mydownloads_add'] = '追加';
$l['mydownloads_add_previews'] = '画像の追加';
$l['mydownloads_add_previews_desc'] = '下に画像をドラッグ＆ドロップすることで画像のアップロードを開始します。';
$l['mydownloads_all_categories'] = '全てのカテゴリー';
$l['mydownloads_already_rated'] = "あなたは既にこのダウンロードを評価しています。";
$l['mydownloads_asc'] = 'asc';
$l['mydownloads_being_updated'] = 'Updating';
$l['mydownloads_being_updated2'] = "(Updating)";
$l['mydownloads_being_updated_error'] = 'An update for this download is waiting to be accepted. You cannot modify it until it has been accepted or rejected.';
$l['mydownloads_being_updated_notice'] = 'An update for this download is waiting to be accepted. In the mean time, you can download the old files.';
$l['mydownloads_non_secure_banner'] = 'You entered a banner that is not supplied via HTTPS. Our site is set to only use HTTPS. Please enter a banner that uses HTTPS.';
$l['mydownloads_by_user'] = '';
$l['mydownloads_by_username'] = 'by <a href="{1}/{2}">{3}</a>';
$l['mydownloads_cancel'] = 'キャンセル';
$l['mydownloads_cancel_upload'] = 'アップロードのキャンセル';
$l['mydownloads_cannot_rate_own'] = '自分のダウンロードは評価できません。';
$l['mydownloads_cant_edit_comment'] = '編集期間を過ぎているため、このコメントを編集することが出来ません。';
$l['mydownloads_categories'] = "カテゴリー";
$l['mydownloads_categories_main'] = 'メインページ';
$l['mydownloads_category'] = 'カテゴリー';
$l['mydownloads_closed'] = "ダウンロードページは一時的に閉鎖されています。";
$l['mydownloads_collaborating'] = 'My Collaborations';
$l['mydownloads_collaborators'] = 'コラボレーター';
$l['mydownloads_collaborators_updated'] = '正常にコラボレーターを更新しました。';
$l['mydownloads_collaborator_username'] = 'ユーザー名';
$l['mydownloads_comment'] = "コメントを残す";
$l['mydownloads_comment_banned'] = "BANされている間はコメントすることが出来ません。";
$l['mydownloads_confirm_delete'] = 'Confirm that you want to delete the selected comment.<br /><form action="{1}/mydownloads/comment_download.php" method="post" "><input type="hidden" name="my_post_key" value="{2}" /><input type="hidden" name="cid" value="{3}" /><input type="hidden" name="action" value="delete_comment" /><input type="submit" value="Delete" class="button" /></form>';
$l['mydownloads_cover'] = 'カバー';
$l['mydownloads_cover_updated'] = '正常にカバーを更新しました。';
$l['mydownloads_date'] = 'Date';
$l['mydownloads_default_license'] = "製作者はこのダウンロードに対してライセンスを指定していません。";
$l['mydownloads_delete'] = '削除';
$l['mydownloads_delete_confirm'] = "本当にこのコメントを削除しますか？";
$l['mydownloads_delete_download'] = 'Delete Download Submission';
$l['mydownloads_delete_download_breadcrumb'] = 'Deleting download';
$l['mydownloads_delete_download_confirm'] = 'Are you sure you want to delete download "{1}"?';
$l['mydownloads_delete_previews'] = '画像の削除';
$l['mydownloads_delete_preview_confirm'] = '本当に選択した画像を削除しますか？';
$l['mydownloads_desc'] = 'desc';
$l['mydownloads_download'] = "ダウンロード";
$l['mydownloads_downloaded'] = "<strong>Downloads:</strong> {1}";
$l['mydownloads_downloads'] = 'ダウンロード';
$l['mydownloads_downloads_number'] = "{1} ダウンロード";
$l['mydownloads_download_category'] = 'カテゴリー';
$l['mydownloads_download_changelog'] = '更新履歴';
$l['mydownloads_download_collaborator'] = 'コラボレーター';
$l['mydownloads_download_commented'] = "You have successfully commented this download.";
$l['mydownloads_download_commented_title'] = "Download commented";
$l['mydownloads_download_comments'] = "コメント";
$l['mydownloads_download_comment_deleted'] = "コメントを正常に削除しました。";
$l['mydownloads_download_comment_deleted_title'] = "コメントを削除しました";
$l['mydownloads_download_comment_edited'] = 'Comment edited successfully.';
$l['mydownloads_download_deleted'] = '選択されたダウンロードを正常に削除しました。';
$l['mydownloads_download_deleted_title'] = 'ダウンロードを削除しました';
$l['mydownloads_download_delete_comment'] = "削除";
$l['mydownloads_download_description'] = "説明";
$l['mydownloads_download_edit_comment'] = "編集";
$l['mydownloads_download_image'] = "画像をダウンロード";
$l['mydownloads_download_invited'] = 'Invited';
$l['mydownloads_download_is_suspended'] = "This download has been suspended and is only visible to its author and the site staff.<br/>This download is either suspended temporarily for investigation or permanently due to violating the <a style=\"text-decoration:underline;\" href=\"https://modworkshop.net/showthread.php?tid=6567\">rules</a>.<br/>Should you wish to contact the staff about it or if your download has been updated to follow the rules you can send an \"Unsuspend Application\" <a style=\"text-decoration:underline;\"  href=\"https://modworkshop.net/forumdisplay.php?fid=66\">here</a>.";
$l['mydownloads_download_name'] = "名前";
$l['mydownloads_download_points'] = "ポイント";
$l['mydownloads_download_preview'] = "画像";
$l['mydownloads_download_price'] = "価格";
$l['mydownloads_download_purchased'] = "ダウンロードを正常に購入しました。";
$l['mydownloads_download_purchased_title'] = "ダウンロードを購入しました";
$l['mydownloads_download_rate'] = "Rating";
$l['mydownloads_download_rated'] = "You have successfully rated this download.";
$l['mydownloads_download_rated_title'] = "Download rated";
$l['mydownloads_download_submitter'] = 'Submitter';
$l['mydownloads_download_successfully_added'] = "You have successfully submitted a new download which is now waiting to be accepted.";
$l['mydownloads_download_successfully_added_auto'] = "You have successfully submitted a new download which has been automatically accepted.";
$l['mydownloads_download_successfully_added_title'] = 'Download submitted';
$l['mydownloads_download_successfully_added_title_auto'] = 'Download submitted and accepted';
$l['mydownloads_download_successfully_edited'] = "You have successfully edited a download which is now waiting to be accepted.";
$l['mydownloads_download_successfully_edited_auto'] = "You have successfully edited a download which has been automatically accepted.";
$l['mydownloads_download_successfully_edited_title'] = 'Download Edited';
$l['mydownloads_download_successfully_edited_title_auto'] = 'Download edited and accepted';
$l['mydownloads_download_url'] = 'ダウンロードリンクを見る';
$l['mydownloads_download_views'] = "閲覧回数";
$l['mydownloads_edit'] = '編集';
$l['mydownloads_editing_collaborators'] = 'Editing collaborators of {1}';
$l['mydownloads_editing_download'] = 'Editing Download {1}';
$l['mydownloads_editing_invited'] = 'Editing invited users of {1}';
$l['mydownloads_edit_collaborators'] = 'コラボレーターを編集';
$l['mydownloads_edit_comment'] = "コメントを編集";
$l['mydownloads_edit_download'] = 'ダウンロードを編集';
$l['mydownloads_edit_download_download_desc'] = 'アップロードするダウンロードファイルを選択して下さい。 (何も選択しない場合は、何も変更されません。)';
$l['mydownloads_edit_download_preview_desc'] = 'アップロードするカバー画像を選択して下さい。 (何も選択しない場合は、何も変更されません。)';
$l['mydownloads_edit_download_short_description_desc'] = 'Maximum 150 letters. Enter a short description for this download. Will be shown when browsing and hovering over a download.';
$l['mydownloads_edit_invited'] = 'Edit Invited Users';
$l['mydownloads_empty_reason'] = 'You must specify a reason for reporting the selected download.';
$l['mydownloads_enter_a_comment'] = 'コメントを入力して下さい。';
$l['mydownloads_error'] = 'エラー';
$l['mydownloads_error_attachsize'] = "The file you attached is too large. The maximum size for that type of file is {1} kilobytes.";
$l['mydownloads_error_attachtype'] = "The type of file that you attached is not allowed. Please remove the attachment or choose a different type.";
$l['mydownloads_error_invalidrating'] = "You have selected an invalid rating for this download.";
$l['mydownloads_error_uploadfailed'] = "The file upload failed. Please choose a valid file and try again. ";
$l['mydownloads_error_uploadfailed_detail'] = "エラー詳細: ";
$l['mydownloads_error_uploadfailed_lost'] = "The attachment could not be found on the server.";
$l['mydownloads_error_uploadfailed_movefailed'] = "There was a problem moving the uploaded file to its destination.";
$l['mydownloads_error_uploadfailed_nothingtomove'] = "An invalid file was specified, so the uploaded file could not be moved to its destination.";
$l['mydownloads_error_uploadfailed_php1'] = "PHP returned: Uploaded file exceeded upload_max_filesize directive in php.ini.  Please contact your forum administrator with this error.";
$l['mydownloads_error_uploadfailed_php2'] = "The uploaded file exceeded the maximum file size specified.";
$l['mydownloads_error_uploadfailed_php3'] = "The uploaded file was only partially uploaded.";
$l['mydownloads_error_uploadfailed_php4'] = "No file was uploaded.";
$l['mydownloads_error_uploadfailed_php6'] = "PHP returned: Missing a temporary folder.  Please contact your forum administrator with this error.";
$l['mydownloads_error_uploadfailed_php7'] = "PHP returned: Failed to write the file to disk.  Please contact your forum administrator with this error.";
$l['mydownloads_error_uploadfailed_phpx'] = "PHP returned error code: {1}.  Please contact your forum administrator with this error.";
$l['mydownloads_error_uploadsize'] = "The size of the uploaded file is too large.";
$l['mydownloads_exceeded'] = 'PHP upload limit exceeded. Maximum is {1}.';
$l['mydownloads_filetype'] = "ファイルタイプ:";
$l['mydownloads_filter_by_tags'] = 'Filter results by tags:';
$l['mydownloads_flood_check'] = "You are trying to post a comment too quickly after posting a previous comment. Please wait {1} more second(s)."; // copied from MyBB :P
$l['mydownloads_forum'] = 'フォーラム';
$l['mydownloads_go_to_all_downloads'] = '全てのダウンロードを見る';
$l['mydownloads_guidelines'] = "By pressing submit you confirm that your upload follows these rules.[list=1][*]Do not upload someone else's work. If you do not have permission from the original author to upload their mod, then it will be removed. Seek to request permission from the original author before posting.[*]Do not upload or distribute content not safe for all ages, such as pornographic content.[*]Do not upload cheats.[*]Do not upload mods that grant users DLC or locked content. Piracy is not allowed.[*]Do not upload mods that alter the experience of other players against their will.[*]Do not \"bump\" your mods without making any changes. If you make changes, please document them in the changelog.[*]Do not upload mods that intentionally impact other mods in malicious way.[*]Do not upload malicious mods.[*]Do not upload spam.[/list]The full rules can be found [url=https://modworkshop.net/showthread.php?tid=6567]here[/url].";
$l['mydownloads_guidelines2'] = "[b]Not allowed[/b][list=1][*]Music that has been created for a movie soundtrack is not allowed (with some exceptions).[*]Music that has been created for a series soundtrack is not allowed (with some exceptions).[*]Studio/Big Budget Songs are not allowed.[*]Nintendo Music is not allowed.[/list][b]Allowed[/b][list=1][*]Music that has been created for a game soundtrack is allowed (with some exceptions).[*]Music that has been created for an anime soundtrack is allowed (with some exceptions).[*]Public Domain Music is allowed.[*]Creative Commons Music is allowed.[*]Music that is not copyright protected is allowed.[*]Any music is allowed if the mod author has acquired the necessary license.[/list]Submitted music will be checked by a staff member before appearing publically.";
$l['mydownloads_guidelines_header'] = 'Upload Rules';
$l['mydownloads_guidelines_header2'] = 'Music Rules';
$l['mydownloads_header_reports'] = 'There are {1} unread download reports.';
$l['mydownloads_hidden'] = 'Hidden';
$l['mydownloads_hidden2'] = '<strong>(Hidden)</strong>';
$l['mydownloads_history'] = 'Download History';
$l['mydownloads_history_visible'] = 'Download History Visible';
$l['mydownloads_history_visible_desc'] = 'Untick the checkbox to disable your download history.';
$l['mydownloads_in'] = 'in';
$l['mydownloads_invalid_banner'] = 'You entered an invalid banner. Accepted extensions: bmp, gif, png, jpeg. If your file is jpg but not recognized then please convert to png.';
$l['mydownloads_invalid_extension'] = 'The image file can only have one the following extensions: jpeg, png or gif.';
$l['mydownloads_invalid_points'] = 'You selected an invalid amount of points.';
$l['mydownloads_invalid_receiver_email'] = 'You have entered an invalid email.';
$l['mydownloads_invalid_url'] = 'The following URL is invalid: ';
$l['mydownloads_invalid_user'] = 'You selected an invalid user.';
$l['mydownloads_invited'] = 'User Access';
$l['mydownloads_invited_updated'] = 'Invited users updated successfully.';
$l['mydownloads_invited_username'] = 'ユーザー名';
$l['mydownloads_invite_only'] = "Invite Only";
$l['mydownloads_invite_only2'] = "<strong>(Invite Only)</strong>";
$l['mydownloads_last_updated'] = '最終更新';
$l['mydownloads_latest_hot_submissions'] = 'Popular New Submissions';
<<<<<<< HEAD
$l['mydownloads_latest_submissions'] = 'New & Updated Submissions';
$l['mydownloads_license'] = 'License';
$l['mydownloads_log_in_register'] = "To leave a comment you must log in.";
$l['mydownloads_manage_previews'] = 'Manage Images';
=======
$l['mydownloads_latest_submissions'] = 'New Submissions';
$l['mydownloads_license'] = 'ライセンス';
$l['mydownloads_log_in_register'] = "コメントを残すには、ログインが必要です。";
$l['mydownloads_manage_previews'] = '画像を管理';
>>>>>>> 301ea9104e2e07f069dd44f175f7b321f82bc319
$l['mydownloads_max_height'] = 'Your image\'s height is bigger than {1}px.';
$l['mydownloads_max_previews'] = 'You can upload a maximum of {1} images to each download.';
$l['mydownloads_max_previews_error'] = 'You cannot upload anymore images because you have already reached your limit for this download item.';
$l['mydownloads_max_res'] = 'Your images are limited to {1}px of width and {2}px of height.';
$l['mydownloads_max_width'] = 'Your images\'s width is bigger than {1}px.';
$l['mydownloads_md5'] = 'MD5';
$l['mydownloads_message'] = "メッセージ";
$l['mydownloads_most_downloaded'] = '最もダウンロードされた';
$l['mydownloads_most_rated'] = '最も評価された';
$l['mydownloads_most_viewed'] = '最も閲覧された';
$l['mydownloads_myprofile'] = "My Profile";
$l['mydownloads_mysubmissions'] = 'My Submissions';
$l['mydownloads_my_submissions'] = 'My Submissions <span class="smalltext">(only accepted submissions are shown)</span>';
$l['mydownloads_my_submissions_collab'] = 'My Download Collaborations <span class="smalltext">(only accepted collaborations are shown)</span>';
$l['mydownloads_my_submissions_profile'] = 'サブミッションをダウンロード:';
$l['mydownloads_na'] = "N/A";
$l['mydownloads_new_comment'] = '{1} があなたのダウンロードにコメントしました。';
$l['mydownloads_not_enough_money'] = "このダウンロードを購入するのに十分なポイントを持っていません。";
$l['mydownloads_not_invited'] = "The submission \"{1}\" is set to invite only.<br/>You need to be invited to access it. To request access contact \"{2}\".";
$l['mydownloads_no_categories'] = "カテゴリーは見つかりませんでした。";
$l['mydownloads_no_cid'] = "The category you have selected is not valid.";
$l['mydownloads_no_collaborations'] = 'No download collaborations found.';
$l['mydownloads_no_comid'] = "The comment you have selected is not valid.";
$l['mydownloads_no_description'] = "You haven't entered a description.";
$l['mydownloads_no_did'] = "The download you have selected is not valid.";
$l['mydownloads_no_dl_name'] = "You haven't entered a name for the download.";
$l['mydownloads_no_dl_visibility'] = 'You selected an invalid visibility value.';
$l['mydownloads_no_downloads'] = "ダウンロードは見つかりませんでした。";
$l['mydownloads_no_download_file'] = "You haven't selected the download file to be uploaded.";
$l['mydownloads_no_hidden'] = "You haven't entered a setting for 'hidden'.";
$l['mydownloads_no_money'] = "お金なし";
$l['mydownloads_no_permissions'] = "このサブミッションを見るのに必要な権限を持っていません。";
$l['mydownloads_no_points_set'] = "ポイントはありません。";
$l['mydownloads_no_previews'] = '画像はありません。';
$l['mydownloads_no_price_set'] = "価格なし";
$l['mydownloads_no_submissions'] = 'ダウンロードサブミッションは見つかりませんでした。';
$l['mydownloads_no_sub_categories'] = "サブカテゴリーは見つかりませんでした。";
$l['mydownloads_no_version_set'] = 'バージョンが指定されていません。';
$l['mydownloads_number_downloads'] = "ダウンロード";
$l['mydownloads_options'] = 'オプション';
$l['mydownloads_previews'] = '画像';
$l['mydownloads_preview_deleted'] = '画像を正常に削除しました。';
$l['mydownloads_preview_empty'] = '画像フィールドが空です。';
$l['mydownloads_preview_submitted'] = '画像を正常に提出しました。';
$l['mydownloads_processing'] = '処理中...';
$l['mydownloads_public'] = "公開";
$l['mydownloads_purchase'] = "ダウンロードを {1} で購入する。";
$l['mydownloads_purchase_image'] = "画像を {1} で購入する。";
$l['mydownloads_purchase_url'] = 'ダウンロードリンクを {1} で購入する。';
$l['mydownloads_rate_banned'] = "BANされている間は評価することが出来ません。";
$l['mydownloads_ratings_update_error'] = 'ダウンロードの評価中にエラーが発生しました:';
$l['mydownloads_rating_too_fast'] = '{1} 秒に 1回づつ評価することが出来ます。 {2} 秒待ったあと、もう一度お試しください。';
$l['mydownloads_remove'] = 'Remove';
$l['mydownloads_remove_collaborator_confirm'] = 'Are you sure you want to remove the selected collaborator?';
$l['mydownloads_remove_invited_confirm'] = 'Are you sure you want to remove the selected invited user?';
$l['mydownloads_reported_message'] = '選択したダウンロードを正常に報告しました。';
$l['mydownloads_reported_title'] = 'ダウンロードを報告しました';
$l['mydownloads_report_already_suspended'] = "This submission has already been suspended and does not need to be reported anymore.";
$l['mydownloads_report_breacrumb'] = 'Reporting download ';
$l['mydownloads_report_download'] = 'Report Download';
$l['mydownloads_report_download_reason'] = '理由';
$l['mydownloads_report_download_reason_desc'] = 'このダウンロードを報告する理由を入力して下さい。';
$l['mydownloads_require_preview'] = 'A cover image is required.';
$l['mydownloads_return'] = "Return";
$l['mydownloads_search'] = 'Download Search';
$l['mydownloads_search_results'] = 'Search Results: ';
$l['mydownloads_select_category'] = 'Select a Category';
$l['mydownloads_set_banner'] = 'Set Banner';
$l['mydownloads_set_cover'] = 'Set Cover';
$l['mydownloads_sortby'] = 'Sort by:';
$l['mydownloads_start'] = 'Start';
$l['mydownloads_start_upload'] = 'Start Upload';
$l['mydownloads_stats'] = 'Statistics';
$l['mydownloads_stats_of'] = 'Statistics of category {1}';
$l['mydownloads_status'] = '状態';
$l['mydownloads_status_type'] = "<strong>状態:</strong>";
$l['mydownloads_submissions'] = 'サブミッション';
$l['mydownloads_submit'] = 'Submit';
$l['mydownloads_submitter_desc'] = 'The user that has submitted this download.';
$l['mydownloads_submit_comment'] = "Submit";
$l['mydownloads_submit_date'] = 'Submit Date';
$l['mydownloads_submit_download'] = 'Submit Download';
$l['mydownloads_submit_download_bannerurl'] = 'Banner URL';
$l['mydownloads_submit_download_bannerurl_desc'] = 'You can specify a banner URL for your download. For best results use 1500x300 resolution as minimum or same aspect ratio. Accepted extensions: bmp, gif, png, jpeg.';
$l['mydownloads_submit_download_changelog'] = 'Changelog';
$l['mydownloads_submit_download_changelog_desc'] = 'Enter your changelog for this download.';
$l['mydownloads_submit_download_description'] = 'Description';
$l['mydownloads_submit_download_description_desc'] = 'Enter a description for this download.';
$l['mydownloads_submit_download_download'] = 'Download file';
$l['mydownloads_submit_download_download_desc'] = 'Select the download file to upload.';
$l['mydownloads_submit_download_email'] = 'PayPal Email';
$l['mydownloads_submit_download_email_desc'] = 'Enter your PayPal email for which payments will be sent. Leave blank if you want the payments to be sent to the Administrator. If you fill in this field but leave the price 0, the donate button will appear instead.';
$l['mydownloads_submit_download_in_category'] = 'Submitting download in category "{1}"';
$l['mydownloads_submit_download_license'] = 'ライセンス';
$l['mydownloads_submit_download_license_desc'] = 'Enter a license for this download. Leave blank if you do not want to show a license.';
$l['mydownloads_submit_download_name'] = '名前';
$l['mydownloads_submit_download_name_desc'] = 'The name of the download.';
$l['mydownloads_submit_download_points'] = 'ポイント';
$l['mydownloads_submit_download_points_desc'] = 'Enter the cost of this download in points. This is the amount of points users must pay to download the uploaded file. Everytime this download is purchased, you get the amount of points you enter here multiplied by the percentage the administrator has set in settings.';
$l['mydownloads_submit_download_points_desc_mp_not_installed'] = '<span style="color: #FF0000;"><strong>NewPoints feature is disabled. Leave blank.</strong></span>';
$l['mydownloads_submit_download_preview'] = 'Cover image';
$l['mydownloads_submit_download_preview_desc'] = 'Select the cover image to upload. The cover image is displayed when browsing downloads.';
$l['mydownloads_submit_download_price'] = '価格';
$l['mydownloads_submit_download_price_desc'] = 'Enter how much money users must pay to download this file - via PayPal';
$l['mydownloads_submit_download_price_desc_paypal_deactivated'] = '<span style="color: #FF0000;"><strong>PayPal feature is disabled. Leave blank.</strong></span>';
$l['mydownloads_submit_download_short_description'] = '簡単な説明';
$l['mydownloads_submit_download_short_description_desc'] = 'Maximum 150 letters. Enter a short description for this download. Will be shown when browsing and hovering over a download.';
$l['mydownloads_submit_download_tags'] = 'タグ';
$l['mydownloads_submit_download_tags_desc'] = 'Select the tags associated with your download.';
$l['mydownloads_submit_download_urls'] = 'ダウンロードURL';
$l['mydownloads_submit_download_urls_desc'] = 'This is an optional field. You can enter download URLs rather than uploading a file. If this is not empty, the selected file will not be uploaded.';
$l['mydownloads_submit_download_version'] = 'バージョン';
$l['mydownloads_submit_download_version_desc'] = 'Enter the version of the download. Leave blank if there is no version.';
$l['mydownloads_submit_download_visibility'] = 'Visibility';
$l['mydownloads_submit_preview'] = 'Submit Image';
$l['mydownloads_sub_categories'] = 'サブカテゴリー';
$l['mydownloads_sub_categories2'] = '{1} つのサブカテゴリーと {2} つのダウンロード';
$l['mydownloads_sub_categories_in_cat'] = 'Categories whose parent category is "{1}"';
$l['mydownloads_success'] = '成功';
$l['mydownloads_suspended'] = "<font color=\"red\">Suspended</font>";
$l['mydownloads_suspended2'] = "<strong style=\"color:red;\">(Suspended)</strong>";
$l['mydownloads_suspended_error'] = "This submission is suspended and can currently not be accessed.";
$l['mydownloads_suspend_it'] = 'Suspend';
$l['mydownloads_switch_dragdrop'] = 'ドラッグ＆ドロップに切り替える';
$l['mydownloads_switch_legacy'] = '古いバージョンに切り替える';
$l['mydownloads_tags'] = 'タグ';
$l['mydownloads_total_rate'] = "Average rating";
$l['mydownloads_unlisted'] = "Unlisted";
$l['mydownloads_unlisted2'] = "<strong>(Unlisted)</strong>";
$l['mydownloads_unsuspend_it'] = 'Unsuspend';
$l['mydownloads_upload_problem_dl_already_exists'] = "既に同じ名前のダウンロードファイルがアップロードされています";
$l['mydownloads_upload_problem_downloadfile'] = "次の問題がダウンロードファイルのアップロード中に発生しました: ";
$l['mydownloads_upload_problem_previewfile'] = "次の問題が画像のアップロード中に発生しました: ";
$l['mydownloads_upload_problem_pr_already_exists'] = "既に同じ名前の画像ファイルがアップロードされています";
$l['mydownloads_url_download'] = "このダウンロードの製作者はファイルの代わりにダウンロードリンクをアップロードしました。<br />ダウンロードリンク:<br />{1}";
$l['mydownloads_url_download_title'] = "ファイルをダウンロード";
$l['mydownloads_user_history'] = '{1} のダウンロード履歴';
$l['mydownloads_user_mysubmissions'] = '{1} のサブミッション';
$l['mydownloads_user_submissions'] = '{1} のサブミッション <span class="smalltext">(承認されたサブミッションのみが表示されています)</span>';
$l['mydownloads_use_legacy'] = '古いバージョンを使って下さい。';
$l['mydownloads_version'] = 'バージョン';
$l['mydownloads_viewed'] = "<br /><strong>閲覧回数:</strong> {1}";
$l['mydownloads_view_history'] = 'ダウンロード履歴';
$l['mydownloads_view_submissions'] = 'サブミッションを見る';
$l['mydownloads_warn'] = 'Warn';
$l['mydownloads_your_money'] = "You have";
$l['mydownloads_your_rate'] = "Your rating";
?>
