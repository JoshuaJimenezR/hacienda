<?php
/*
 * Copyright (C) 2017-2019 CRLibre <https://crlibre.org>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

# Declare it as global, but never use it as global
global $config;

#####################################################################################
#
# Database
#
#####################################################################################
# Database name
$config['db']['name'] = "hacienda";
# Database password
$config['db']['pwd'] = 'sp9T[Xywy]:9$Rv*';
# Database user name
$config['db']['user'] = "londoneye";
# Database host
$config['db']['host'] = "localhost";
##############################################################################
#
# Crypto Keys
#
##############################################################################
$config['crypto']['key'] = "XTOfoKvxr9ERZtvMfaylrNtwOWOBORFQvA1Pq2Ed1K4";
##############################################################################
#
# print alerts
# false or true
#
##############################################################################
$config['boot']['alert'] = "false";
##############################################################################
##
## Log errors
## false or true
##
###############################################################################
$config['debug']['print_all']    = true;
$config['debug']['print_absurd'] = true;
$config['debug']['print_debug']  = true;
$config['debug']['print_error']  = true;
##############################################################################
#
# Emails
#
##############################################################################
# Options: "mail" or "smtp".
$config['mail']['type']         = "mail";
# Used in "mail" or "smtp"
$config['mail']['address']      = "";       // for example: info@crlibre.org
$config['mail']['noreply']      = "";       // Optional - for example: no-reply@crlibre.org
# If "smtp" option is actived.
$config['mail']['host']         = "";
$config['mail']['username']     = "";
$config['mail']['password']     = "";
$config['mail']['secure']       = "tls";    // Use tls or ssl
$config['mail']['port']         = 587;

##############################################################################
#
# Core and Modules
#
##############################################################################

# Paths USE TRAILING SLASHES!!!
# By default I will assume that core modules and contrib are located in the
# same directory as the Api, but they can be placed anywhere else

# The core installation: This is probably the only one you need to touch
# IMPORTANTE: La ruta debe finalizar en "/".
$config['modules']['coreInstall'] = "../api/";

# Name of your site, Not in use really
$config['core']['siteName'] = 'ZotaCard';

# The host name for your site
$config['core']['host'] = "http://zotacard.com/";
$config['core']['compannyIMG'] = "";

# Time in seconds for the lifetime of a session, after this time, the user must
# log back in, if you dont want to use the session life set the value in -1, li this
#  $config['users']['sessionLifetime'] = -1;

$config['users']['sessionLifetime'] = 1000;

/*******************************************************************************
 * You should not need to touch anything beyond this point
 */



# List of core modules
$config['modules']['core']     = array('cala','db', 'users', 'files', 'geoloc', 'wirez', 'crypto');
# List of core modules to load always, you can overide this list
$config['modules']['coreLoad'] = array('cala', 'db', 'users', 'crypto');

# Core modules location
$config['modules']['corePath']    = $config['modules']['coreInstall'] . "modules/";
# Contributed modules
$config['modules']['contribPath'] = $config['modules']['coreInstall'] . "contrib/";
# Resources such as 404 not found images and such
$config['core']['resourcesPath'] = $config['modules']['coreInstall'] . 'resources/';

# Location to upload files, USE TRAILING SLASH!!
# Each user will have its own directory within this path
$config['files']['basePath'] = $config['modules']['coreInstall'] . 'files/';
