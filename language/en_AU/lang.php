<?php

/*
 * FileSender www.filesender.org
 * 
 * Copyright (c) 2009-2012, AARNet, Belnet, HEAnet, SURFnet, UNINETT
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 * 
 * *	Redistributions of source code must retain the above copyright
 * 	notice, this list of conditions and the following disclaimer.
 * *	Redistributions in binary form must reproduce the above copyright
 * 	notice, this list of conditions and the following disclaimer in the
 * 	documentation and/or other materials provided with the distribution.
 * *	Neither the name of AARNet, Belnet, HEAnet, SURFnet and UNINETT nor the
 * 	names of its contributors may be used to endorse or promote products
 * 	derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
 * FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
 * DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
 * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
 * OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

/* ---------------------------------
 * en_AU Language File
 * Maintained by the FileSender Core Team
 * ---------------------------------
 * 
 */

/**
 * Page names / main links
 */
$lang['upload_page'] = 'Upload';
$lang['transfers_page'] = 'Transfers';
$lang['guests_page'] = 'Guests';
$lang['admin_page'] = 'Admin';
$lang['download_page'] = 'Download';
$lang['unknown_page'] = 'Unknown page';
$lang['about'] = 'About';
$lang['help'] = 'Help';
$lang['logoff'] = 'Log-off';


/**
 * Locale settings (units, formats ...)
 */

// standard date display format
$lang['date_format'] = 'd/m/Y'; // Format for displaying date, use PHP date() format string syntax 
$lang['datetime_format'] = 'd/m/Y H:i:s'; // Format for displaying datetime, use PHP date() format string syntax 

// datepicker localization
$lang['dp_close_text'] = 'Done'; // Done
$lang['dp_prev_text'] = 'Prev'; //Prev
$lang['dp_next_text'] = 'Next'; // Next
$lang['dp_current_text'] = 'Today'; // Today
$lang['dp_month_names'] = 'January,February,March,April,May,June,July,August,September,October,November,December'; // Comma separated, w/o whitespaces
$lang['dp_month_names_short'] = 'Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dec'; // Comma separated, w/o whitespaces
$lang['dp_day_names'] = 'Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday'; // Comma separated, w/o whitespaces
$lang['dp_day_names_short'] = 'Sun,Mon,Tue,Wed,Thu,Fri,Sat'; // Comma separated, w/o whitespaces
$lang['dp_day_names_min'] = 'Su,Mo,Tu,We,Th,Fr,Sa'; // Comma separated, w/o whitespaces
$lang['dp_week_header'] = 'Wk';
$lang['dp_date_format'] = 'dd/mm/yy';
$lang['dp_first_day'] = '1';
$lang['dp_is_rtl'] = 'false'; // "true" or "false"
$lang['dp_show_month_after_year'] = 'false'; // "true" or "false"
$lang['dp_year_suffix'] = '';

// Sizes and speeds
$lang['bytes_no_multiplier'] = 'b';
$lang['bytes_with_multiplier'] = 'b';
$lang['speed_unit'] = 'o';
$lang['size_unit'] = 'o';
$lang['per_second'] = '/s';


/**
 * General terms (used in several places)
 */
$lang['expand_all'] = 'Expand all';
$lang['expires'] = 'Expires';
$lang['guests'] = 'Guests';
$lang['options'] = 'Options';
$lang['resume'] = 'Resume';
$lang['see_all'] = 'See all';
$lang['show_details'] = 'Show details';
$lang['hide_details'] = 'Hide details';
$lang['stop'] = 'Stop';
$lang['uploaded'] = 'Uploaded';
$lang['n_more'] = '{n} more';
$lang['save'] = 'Save';
$lang['actions'] = 'Actions';
$lang['done'] = 'Done';
$lang['retry'] = 'Try again';
$lang['ignore'] = 'Ignore';
$lang['never'] = 'never';
$lang['none'] = 'none';
$lang['cancel'] = 'Cancel';
$lang['close'] = 'Close';
$lang['ok'] = 'OK';
$lang['send'] = 'Send';
$lang['delete'] = 'Delete';
$lang['yes'] = 'Yes';
$lang['no'] = 'No';
$lang['clear_all'] = 'Clear all';
$lang['pause'] = 'Pause';
$lang['to'] = 'To';
$lang['from'] = 'From';
$lang['size'] = 'Size';
$lang['created'] = 'Created';
$lang['subject'] = 'Subject';
$lang['message'] = 'Message';
$lang['details'] = 'Details';
$lang['showhide'] = 'Show/Hide';
$lang['downloads'] = 'Downloads';
$lang['download'] = 'Download';
$lang['logon'] = 'Logon';
$lang['files'] = 'Files';
$lang['optional'] = 'optional';
$lang['select_file'] = 'Select your file';
$lang['select_files'] = 'Select files';
$lang['send_voucher'] = 'Send Voucher';
$lang['me'] = 'Me';
$lang['noscript'] = 'This application heavily relies on Javascript, you must enable it to be able to start.';
$lang['send_reminder'] = 'Send reminder';
$lang['confirm_dialog'] = 'Confirmation';
$lang['invalid_recipient'] = 'Invalid recipient';
$lang['error_dialog'] = 'Error';
$lang['info_dialog'] = 'Information';
$lang['success_dialog'] = 'Success';
$lang['recipient_errors'] = 'Recipient errors';
$lang['error_type'] = 'Error type';
$lang['error_date'] = 'Error date';
$lang['error_details'] = 'Error technical details';
$lang['recipient_error_bounce'] = 'email delivery failed';
$lang['forward'] = 'Forward';
$lang['enter_to_email'] = 'Enter recipient email(s)';
$lang['expiry_date'] = 'Expiry date';
$lang['email_sent'] = 'Message Sent';
$lang['email_separator_msg'] = 'Multiple email addresses separated by , or ;';
$lang['what_to_do'] = 'What to do ?';
$lang['copy_text'] = 'Copy the text bellow';
$lang['reason'] = 'Reason';
$lang['anonymous'] = 'Anonymous';
$lang['anonymous_details'] = 'Direct link provided';
$lang['guest'] = 'Guest';


/**
 * Transfer specific
 */
$lang['recipients'] = 'Recipients';
$lang['number_of_files'] = 'Number of files';
$lang['email_daily_statistics'] = 'Send me daily statistics';
$lang['email_download_complete'] = 'Notify me upon downloads';
$lang['email_me_copies'] = 'Send me copies of all notifications';
$lang['email_report_on_closing'] = 'Send me a report when expired';
$lang['email_upload_complete'] = 'Notify me when upload is done';
$lang['enable_recipient_email_download_complete'] = 'Allow recipients to receive download complete emails';
$lang['add_me_to_recipients'] = 'Include me as a recipient';
$lang['transfer_closed'] = 'Transfer closed';
$lang['transfer_deleted'] = 'Transfer deleted';
$lang['transfer_expired'] = 'Transfer expired';
$lang['get_a_link'] = 'Get a link instead of sending to recipients';


/**
 * Upload page specific
 */
$lang['average_speed'] = 'Average speed';
$lang['paused'] = 'Paused';
$lang['restart'] = 'Restart';
$lang['restart_failed_transfer'] = 'Restart failed transfer ?';
$lang['failed_transfer_found'] = 'It seems that one of your previous transfers failed to upload, do you want to restart from where it stopped (you will need to add the file again) ?';
$lang['load'] = 'Load failed transfer';
$lang['forget'] = 'Forget about it';
$lang['later'] = 'Ask me again later';
$lang['need_to_readd_files'] = 'You need to add the files bellow again so you can restart your upload';
$lang['unexpected_file'] = 'This file is not part of the restarting transfer';
$lang['missing_files_for_restart'] = 'Missing file(s), cannot restart without them';
$lang['confirm_stop_upload'] = 'Do you really want to stop the upload and remove already uploaded data ?';
$lang['click_to_delete_file'] = 'Remove file';
$lang['click_to_delete_recipient'] = 'Remove recipient';
$lang['done_uploading'] = 'Done uploading';
$lang['done_uploading_guest'] = 'Thank you for using {cfg:site_name}. If your guest is enabled for multiple uploads you may use your upload link again to send other files.';
$lang['stalled_transfer'] = 'Stalled upload';
$lang['retry_later'] = 'Save progress and try again later';
$lang['transfer_seems_to_be_stalled'] = 'Upload seems to be stalled (way slower than expected), do you want to try restarting it or stop it ?';
$lang['advanced_settings'] = 'Advanced settings';
$lang['terasender_worker_count'] = 'Worker count';
$lang['drag_and_drop'] = 'drag &amp; drop your files here';
$lang['invalid_file'] = 'Invalid File';
$lang['add_recipient'] = 'Add a recipient';
$lang['confirm_leave_upload_page'] = 'Do you really want to leave this page ?';
$lang['recipients_notifications_language'] = 'Recipients\' language';

/**
 * Guest page spacific
 */
$lang['guest_options'] = 'Guest options';
$lang['email_upload_page_access'] = 'Notify me when guests access the upload page';
$lang['email_upload_started'] = 'Notify me when upload starts';
$lang['can_only_send_to_me'] = 'Can only send to me';
$lang['valid_only_one_time'] = 'Valid for one upload only';
$lang['does_not_expire'] = 'Does not expire';
$lang['guest_transfer_options'] = 'Created transfers options';
$lang['guests_transfers'] = 'Guests transfers';
$lang['guest_vouchers_sent'] = 'Guest vouchers sent';
$lang['no_guests'] = 'No guests';
$lang['forward_guest_voucher'] = 'Forward guest voucher';
$lang['guest_deleted'] = 'Guest deleted';
$lang['guest_reminded'] = 'Guest reminded';
$lang['confirm_delete_guest'] = 'Do you really want to delete this guest (the recipient won\'t be able to upload files anymore) ?';
$lang['confirm_remind_guest'] = 'Do you really want to send a reminder to this guest ?';


/**
 * Transfer page specific
 */
$lang['no_transfers'] = 'No transfers';
$lang['with_identity'] = 'Sender email';
$lang['transfer_id'] = 'Transfer ID';
$lang['auditlog'] = 'Transfer audit';
$lang['confirm_close_transfer'] = 'Do you really want to close this transfer ? Files cannot be downloaded after transfer is closed. You cannot open a closed transfer again.';
$lang['confirm_delete_file'] = 'Are you sure you want to delete this file ? The transfer will be closed if all its files are deleted.';
$lang['confirm_delete_recipient'] = 'Are you sure you want to delete this recipient ? The transfer will be closed if all its recipients are deleted.';
$lang['recipient_deleted'] = 'The recipient has been deleted.';
$lang['file_deleted'] = 'The file has been deleted.';
$lang['no_auditlog'] = 'Not audit logs found';
$lang['recipient_added'] = 'Recipient added';
$lang['transfer_reminded'] = 'Transfer reminded to recipients';
$lang['open_auditlog'] = 'See the transfer logs';
$lang['open_recipient_auditlog'] = 'See what this recipient did';
$lang['open_file_auditlog'] = 'See what happened to this file';
$lang['filtered_transfer_log'] = 'This is a filtered view of the transfer logs.';
$lang['view_full_log'] = 'View the full log';
$lang['send_to_my_email'] = 'Send to my email';
$lang['confirm_remind_transfer'] = 'Do you really want to send a reminder to this transfer\'s recipients ?';
$lang['download_link'] = 'Here is your download link';


/**
 * Reports
 */

// Reports
$lang['date'] = 'Date';
$lang['action'] = 'Action that happened';

$lang['report_event_transfer_started'] = 'Transfer was created';
$lang['report_event_transfer_available'] = 'Transfer became available';
$lang['report_event_transfer_sent'] = 'Download link sent to recipient(s)';
$lang['report_event_transfer_expired'] = 'Transfer expired';
$lang['report_event_transfer_closed'] = 'Transfer was closed on request';
$lang['report_event_transfer_deleted'] = 'Transfer data was deleted';
$lang['report_event_upload_started'] = 'Upload started';
$lang['report_event_upload_resumed'] = 'Upload was resumed';
$lang['report_event_upload_ended'] = 'Upload ended';
$lang['report_event_file_created'] = 'File {file.name} ({size:file.size}) uploaded';
$lang['report_event_download_started'] = 'Recipient {author.email} started downloading {file.name} ({size:file.size})';
$lang['report_event_download_resumed'] = 'Recipient {author.email} resumed download of {file.name} ({size:file.size})';
$lang['report_event_download_ended'] = 'Recipient {author.email} finished downloading {file.name} ({size:file.size})';
$lang['report_event_archive_download_started'] = 'Recipient {author.email} started downloading archive of transfer';
$lang['report_event_archive_download_ended'] = 'Recipient {author.email} finished downloading archive of transfer';

$lang['report_recipient_event_download_started'] = 'Recipient started downloading {file.name} ({size:file.size})';
$lang['report_recipient_event_download_resumed'] = 'Recipient resumed download of {file.name} ({size:file.size})';
$lang['report_recipient_event_download_ended'] = 'Recipient finished downloading {file.name} ({size:file.size})';
$lang['report_recipient_event_archive_download_started'] = 'Recipient started downloading archive of transfer';
$lang['report_recipient_event_archive_download_ended'] = 'Recipient finished downloading archive of transfer';

$lang['report_guest_event_transfer_started'] = 'Transfer was created by guest {author.email}';
$lang['report_guest_event_transfer_sent'] = 'Download link sent to recipient(s)';


/**
 * Download page specific
 */
$lang['archive_download'] = 'Download as archive';
$lang['download_disclamer'] = 'Here are your files, you can download them one by one or, if there are more than one file, download them as a single archive in one go.';
$lang['download_file'] = 'Download file';
$lang['mac_archive_message'] = 'If you are running OSX you\'ll find a fitting un-archiving software by following the link below.';
$lang['select_all_for_archive_download'] = 'Select all files to download them as an archive';
$lang['select_for_archive_download'] = 'Select for archive download';
$lang['archive_message'] = 'You can download selected files as an archive.';
$lang['confirm_download_notify'] = 'Do you want to be notified by mail when download is complete ?';


/**
 * User profile specifics
 */
$lang['user_page'] = 'My profile';
$lang['user_preferences'] = 'Preferences';
$lang['user_lang'] = 'Prefered language';
$lang['user_remote_authentication'] = 'Remote authentication';
$lang['user_auth_secret'] = 'Secret';
$lang['user_additionnal'] = 'Additionnal information';
$lang['user_id'] = 'Identifiant';
$lang['user_created'] = 'First login';
$lang['get_full_user_remote_config'] = 'Get full remote configuration';
$lang['preferences_updated'] = 'User preferences updated';


/**
 * Admin page specific
 */
$lang['admin_statistics_section'] = 'Statistics';
$lang['admin_transfers_section'] = 'Transfers';
$lang['admin_guests_section'] = 'Guests';
$lang['admin_config_section'] = 'Config';
$lang['global_statistics'] = 'Global statistics';
$lang['available_transfers'] = 'Currently available transfers';
$lang['uploading_transfers'] = 'Currently uploading transfers';
$lang['closed_transfers'] = 'Closed transfers';
$lang['created_transfers'] = 'Created transfers';
$lang['count_from_date_to_date'] = '{count} from {date:start} to {date:end}';

$lang['storage_usage'] = 'Storage usage';
$lang['storage_block'] = 'Block';
$lang['storage_paths'] = 'Related paths';
$lang['storage_total'] = 'Total space';
$lang['storage_used'] = 'Used space';
$lang['storage_available'] = 'Available space';
$lang['storage_main'] = 'All';

$lang['delete_transfer_nicely'] = 'Delete transfer and notify recipients';
$lang['delete_transfer_roughly'] = 'Delete transfer without notifications';

$lang['is_default'] = 'This is the default value';
$lang['make_default'] = 'Go back to default value';
$lang['config_overriden'] = 'Configuration override saved';


/**
 * Exceptions and errors
 */
$lang['access_forbidden'] = 'You are not allowed to access this page';

$lang['encountered_exception'] = 'The application encountered an error while processing your request';
$lang['you_can_report_exception'] = 'When reporting this error please give the following code to help the support finding out details';
$lang['you_can_report_exception_by_email'] = 'You can report this error by email';
$lang['report_exception'] = 'report error';

// AuditLog related exceptions
$lang['auditlog_not_found'] = 'Audit log not found';
$lang['auditlog_not_enabled'] = 'Audit logging is not enabled';
$lang['auditlog_unknown_event'] = 'Unknown audit logging event';

// Auth related exceptions
$lang['auth_authentication_not_found'] = 'Authentification system not found';

// AuthRemoteApplication related exceptions
$lang['auth_remote_application_unknown_application'] = 'Unknow remote application';
$lang['auth_remote_application_too_late'] = 'Authentification too late';
$lang['auth_remote_application_signature_check_failed'] = 'Remote authentification signature check failed';

// AuthRemoteUser related exceptions
$lang['auth_remote_user_rejected'] = 'User does not accept remote authentication';

// AuthSP related exceptions
$lang['auth_sp_missing_delegation_class'] = 'SP authentification delegation class not found';
$lang['auth_sp_authentication_not_found'] = 'SP authentification class not found';
$lang['auth_sp_missing_attribute'] = 'SP authentification attribute not found';
$lang['auth_sp_bad_attribute'] = 'SP authentification bad attribute';

// Bad exceptions
$lang['bad_email'] = 'Invalid email format';
$lang['bad_ip_format_ipv4'] = 'Invalid IPv4 format';
$lang['bad_ip_format_ipv6'] = 'Invalid IPv6 format';
$lang['bad_ip_format'] = 'Invalid IP format';
$lang['bad_expire'] = 'Invalid expiration date';
$lang['bad_size_format'] = 'Invalid size format';
$lang['bad_lang_code'] = 'Invalid lang code';

// Config related exceptions
$lang['config_file_missing'] = 'Configuration file not found';
$lang['config_bad_parameter'] = 'Invalid configuration parameter';
$lang['config_missing_parameter'] = 'Configuration parameter not found';
$lang['config_override_disabled'] = 'Overriding configuration is disabled';
$lang['config_override_validation_failed'] = 'Overriding configuration validation failed';
$lang['config_override_not_allowed'] = 'Overriding configuration is not allowed';
$lang['config_override_cannot_save'] = 'Cannot save the new configuration';

// Core related exceptions
$lang['core_file_not_found'] = 'Core file not found';
$lang['core_class_not_found'] = 'Core class not found';

// DBI related exceptions
$lang['failed_to_connect_to_database'] = 'Fail to connect database';
$lang['dbi_missing_parameter'] = 'Missing DBI configuration parameter';
$lang['database_access_failure'] = 'Fail to access database';

// DBO related exceptions
$lang['no_such_property'] = 'Property not found';

// Download related exceptions
$lang['download_missing_token'] = 'Download token not found';
$lang['download_bad_token_format'] = 'Invalid token format';
$lang['download_missing_files_ids'] = 'Download file IDs not found';
$lang['download_bad_files_ids'] = 'Invalid download file IDs';
$lang['download_invalid_range'] = 'Invalid download range';

// File related exceptions
$lang['file_not_found'] = 'File not found';
$lang['file_extension_not_allowed'] = 'File extension not allowed';
$lang['file_bad_hash'] = 'Invalid file hash';
$lang['file_chunk_out_of_bounds'] = 'File chunk out of bounds';
$lang['file_size_does_not_match'] = 'File size does not match';
$lang['cannot_open_input_file'] = 'Cannot open input file';

// GUI related exceptions
$lang['gui_unknown_admin_section'] = 'Unknown admin section';
$lang['reader_not_supported'] = 'Your browser does not support uploading files over {size}';

// Guest related exceptions
$lang['guest_not_found'] = 'Guest not found';
$lang['bad_guest_status'] = 'Invalid guest status';
$lang['guest_too_many_recipients'] = 'Maximum number of recipients exceeded';

// Mail related exceptions
$lang['invalid_address_format'] = 'Invalid mail address format';
$lang['no_addresses_found'] = 'No mail addresses founds';

// Recipient related exceptions
$lang['recipient_not_found'] = 'Recipient not found';

// Report related exceptions
$lang['report_cannot_write_file'] = 'Cannot store report file';
$lang['report_format_not_available'] = 'Report format not available';
$lang['report_nothing_found'] = 'Found nothing to report';
$lang['report_ownership_required'] = 'You must be owner of the report target';
$lang['report_unknown_format'] = 'Unknown report format';
$lang['report_unknown_target_type'] = 'Unknown report target type';

// Rest related exceptions
$lang['rest_authentication_required'] = 'REST authentification required';
$lang['rest_admin_required'] = 'Admin rights required';
$lang['rest_ownership_required'] = 'REST resource ownership required';
$lang['rest_missing_parameter'] = 'Missing REST parameter';
$lang['rest_bad_parameter'] = 'Bad REST parameter';
$lang['rest_method_not_allowed'] = 'REST server does not accept this method';
$lang['rest_endpoint_missing'] = 'REST server could not find endpoint in URL';
$lang['rest_access_forbidden'] = 'REST server denied access';
$lang['rest_jsonp_get_only'] = 'REST server only accepts GET requests for JSONP output';
$lang['rest_updatedsince_bad_format'] = 'REST updatedSince parameter is badly formatted';
$lang['rest_endpoint_not_implemented'] = 'REST endpoint not implemented';
$lang['rest_method_not_implemented'] = 'REST method not implemented in endpoint';
$lang['rest_sanity_check_failed'] = 'REST sanity check failed';
$lang['rest_xsrf_token_did_not_match'] = 'Security token did not match';

// StatLog related exceptions
$lang['statlog_not_found'] = 'Stat log not found';
$lang['statlog_unknown_event'] = 'Unknown event';

// Storage related exceptions
$lang['storage_chunk_too_large'] = 'Storage chunk too large';
$lang['storage_not_enough_space_left'] = 'Not enough space left in storage';

// StorageFilesystem related exceptions
$lang['storage_filesystem_cannot_create_path'] = 'Cannot create path on filesystem';
$lang['storage_filesystem_file_not_found'] = 'Storage filesystem not found';
$lang['storage_filesystem_cannot_read'] = 'Cannot read on filesystem';
$lang['storage_filesystem_cannot_delete'] = 'Cannot delete on filesystem';
$lang['storage_filesystem_cannot_write'] = 'Cannot write on filesystem';
$lang['storage_filesystem_out_of_space'] = 'Storage file system out of space';
$lang['storage_filesystem_bad_resolver_target'] = 'Storage resolver error';
$lang['storage_filesystem_bad_usage_output'] = 'Storage usage error';
$lang['storage_filesystem_cannot_get_usage'] = 'Storage usage error';

// Template related exceptions
$lang['template_not_found'] = 'Template not found';

// Tracking related exceptions
$lang['tracking_event_not_found'] = 'Tracking event not found';
$lang['tracking_unknown_event'] = 'Unknown tracking event';

// Transfer related exceptions
$lang['transfer_not_found'] = 'Transfer not found';
$lang['bad_transfer_status'] = 'Invalid transfer status';
$lang['transfer_no_recipients'] = 'Transfer has no recipients';
$lang['transfer_no_files'] = 'Transfer has no files';
$lang['duplicate_recipient'] = 'A recipient already exists';
$lang['max_email_recipients_exceeded'] = 'Maximum number of recipients exceeded';
$lang['transfer_maximum_size_exceeded'] = 'Maximum transfer size exceeded';
$lang['transfer_not_availabe'] = 'Transfer not available';
$lang['transfer_too_many_files'] = 'Maximum number of files exceeded';
$lang['transfer_too_many_recipients'] = 'Maximum number of recipients exceeded';
$lang['cannot_alter_closed_transfer'] = 'Cannot alter closed transfer';
$lang['transfer_rejected'] = 'Transfer creation rejected';

// User related exceptions
$lang['user_not_found'] = 'User not found';
$lang['user_missing_uid'] = 'User UID not found';

// Utilities related exceptions
$lang['utilities_uid_generator_bad_unicity_checker'] = 'Invalid unicity check for UID generator';
$lang['utilities_uid_generator_tried_too_much'] = 'Too much use of UID generator';
