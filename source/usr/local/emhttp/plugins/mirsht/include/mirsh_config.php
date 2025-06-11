<?
/* Copyright Derek Macias (parts of code from NUT package)
 * Copyright macester (parts of code from NUT package)
 * Copyright gfjardim (parts of code from NUT package)
 * Copyright SimonF (parts of code from NUT package)
 * Copyright Dan Landon (parts of code from Web GUI)
 * Copyright Bergware International (parts of code from Web GUI)
 * Copyright Lime Technology (any and all other parts of Unraid)
 *
 * Copyright desertwitch (as author and maintainer of this file)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License 2
 * as published by the Free Software Foundation.
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 */

$mirsh_cfg = file_exists("/boot/config/plugins/mirsh/mirsh.cfg") ? parse_ini_file("/boot/config/plugins/mirsh/mirsh.cfg") : [];

$mirsh_cron = trim(isset($mirsh_cfg['CRON']) ? htmlspecialchars($mirsh_cfg['CRON']) : 'disable');
$mirsh_cronhour = trim(isset($mirsh_cfg['CRONHOUR']) ? htmlspecialchars($mirsh_cfg['CRONHOUR']) : '1');
$mirsh_crondow = trim(isset($mirsh_cfg['CRONDOW']) ? htmlspecialchars($mirsh_cfg['CRONDOW']) : '0');
$mirsh_crondom = trim(isset($mirsh_cfg['CRONDOM']) ? htmlspecialchars($mirsh_cfg['CRONDOM']) : '1');

$mirsh_startnotify = trim(isset($mirsh_cfg['STARTNOTIFY']) ? htmlspecialchars($mirsh_cfg['STARTNOTIFY']) : 'disable');
$mirsh_finishnotify = trim(isset($mirsh_cfg['FINISHNOTIFY']) ? htmlspecialchars($mirsh_cfg['FINISHNOTIFY']) : 'enable');
$mirsh_errornotify = trim(isset($mirsh_cfg['ERRORNOTIFY']) ? htmlspecialchars($mirsh_cfg['ERRORNOTIFY']) : 'enable');

$mirsh_backend = htmlspecialchars(trim(shell_exec("find /var/log/packages/ -type f -iname 'mirrorshuttle-*' -printf '%f\n' 2> /dev/null") ?? "n/a"));
$mirsh_running = !empty(shell_exec("pgrep -x mirrorshuttle 2>/dev/null"));
?>
