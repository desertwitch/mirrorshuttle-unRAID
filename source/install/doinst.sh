#!/bin/bash
#
# Copyright Derek Macias (parts of code from NUT package)
# Copyright macester (parts of code from NUT package)
# Copyright gfjardim (parts of code from NUT package)
# Copyright SimonF (parts of code from NUT package)
# Copyright Lime Technology (any and all other parts of Unraid)
#
# Copyright desertwitch (as author and maintainer of this file)
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License 2
# as published by the Free Software Foundation.
#
# The above copyright notice and this permission notice shall be
# included in all copies or substantial portions of the Software.
#
BOOT="/boot/config/plugins/mirsht"
DOCROOT="/usr/local/emhttp/plugins/mirsht"

# Update file permissions of scripts
chmod 755 $DOCROOT/event/*
chmod 755 $DOCROOT/scripts/*

cp -n $DOCROOT/default.cfg $BOOT/mirsht.cfg
cp -n $DOCROOT/defaults/default.yaml $BOOT/config.yaml
