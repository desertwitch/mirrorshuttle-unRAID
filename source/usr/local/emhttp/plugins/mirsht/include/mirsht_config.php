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
$mirsht_cfg = file_exists("/boot/config/plugins/mirsht/mirsht.cfg") ? parse_ini_file("/boot/config/plugins/mirsht/mirsht.cfg") : [];

$mirsht_cron = trim(isset($mirsht_cfg['CRON']) ? htmlspecialchars($mirsht_cfg['CRON']) : 'disable');
$mirsht_cronhour = trim(isset($mirsht_cfg['CRONHOUR']) ? htmlspecialchars($mirsht_cfg['CRONHOUR']) : '1');
$mirsht_crondow = trim(isset($mirsht_cfg['CRONDOW']) ? htmlspecialchars($mirsht_cfg['CRONDOW']) : '0');
$mirsht_crondom = trim(isset($mirsht_cfg['CRONDOM']) ? htmlspecialchars($mirsht_cfg['CRONDOM']) : '1');

$mirsht_moverstart = trim(isset($mirsht_cfg['MOVERSTART']) ? htmlspecialchars($mirsht_cfg['MOVERSTART']) : 'disable');
$mirsht_paritystart = trim(isset($mirsht_cfg['PARITYSTART']) ? htmlspecialchars($mirsht_cfg['PARITYSTART']) : 'disable');
$mirsht_initafter = trim(isset($mirsht_cfg['INITAFTER']) ? htmlspecialchars($mirsht_cfg['INITAFTER']) : 'disable');

$mirsht_startnotify = trim(isset($mirsht_cfg['STARTNOTIFY']) ? htmlspecialchars($mirsht_cfg['STARTNOTIFY']) : 'disable');
$mirsht_finishnotify = trim(isset($mirsht_cfg['FINISHNOTIFY']) ? htmlspecialchars($mirsht_cfg['FINISHNOTIFY']) : 'enable');
$mirsht_errornotify = trim(isset($mirsht_cfg['ERRORNOTIFY']) ? htmlspecialchars($mirsht_cfg['ERRORNOTIFY']) : 'enable');

$mirsht_backend = htmlspecialchars(trim(shell_exec("find /var/log/packages/ -type f -iname 'mirrorshuttle-*' -printf '%f\n' 2> /dev/null") ?? "n/a"));
$mirsht_binaries = htmlspecialchars(trim(shell_exec("command -v mirrorshuttle 2> /dev/null") ?? "n/a"));
$mirsht_running = !empty(shell_exec("pgrep -x mirrorshuttle 2>/dev/null"));
?>
