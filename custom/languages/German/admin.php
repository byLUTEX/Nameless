<?php 
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-dev
 *
 *  License: MIT
 *
 *  German Language - Admin
 */

$language = array(
	/*
	 *  Admin Control Panel
	 */
	// Login
	're-authenticate' => 'Bitte melde dich erneut an!',
	
	// Sidebar
	'admin_cp' => 'AdminCP',
	'administration' => 'Administration',
	'overview' => 'Übersicht',
	'core' => 'Core',
	'minecraft' => 'Minecraft',
	'modules' => 'Module',
	'security' => 'Sicherheit',
	'styles' => 'Styles',
	'users_and_groups' => 'Benutzer und Gruppen',
	
	// Overview
	'running_nameless_version' => 'Forum läuft auf der Version <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => 'PHP läuft auf der Version <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => 'Statistiken',
	
	// Core
	'settings' => 'Einstellungen',
	'general_settings' => 'Allgemeine Einstellungen',
	'sitename' => 'Name des Forum',
	'default_language' => 'Standart Sprache',
	'default_language_help' => 'Benutzer können aus einer Liste ihre eigene Sprache auswählen.',
	'installed_languages' => 'Es wurden alle neuen Sprachen erfolgreich installiert.',
	'default_timezone' => 'Standart Zeitzone',
	'registration' => 'Registrierung',
	'enable_registration' => 'Registrierung aktivieren?',
	'verify_with_mcassoc' => 'Sollen sich Nutzer mit MCAssoc verifizieren?',
	'email_verification' => 'Email Verifikation aktivieren?',
	'homepage_type' => 'Seiten Typ',
	'post_formatting_type' => 'Post Format Typ',
	'portal' => 'Portal',
	'missing_sitename' => 'Der Seiten-Name muss zwischen 2 und 64 Zeichen lang sein.',
	'use_friendly_urls' => 'Benutzerfreundliche URLs nutzen?',
	'use_friendly_urls_help' => 'Wichtig: Du musst das Apache2 Rewrite_Module aktiviert haben!',
	'config_not_writable' => 'Deine <strong>core/config.php</strong> Config ist nicht beschreibbar. Bitte überprüfe die Berechtigungen.',
	'social_media' => 'Soziale Medien',
	'youtube_url' => 'Youtube URL',
	'twitter_url' => 'Twitter URL',
	'twitter_dark_theme' => 'Benutze dunkles Twitter Theme?',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'successfully_updated' => 'Erfolgreich geupdatet.',
	
	// Reactions
	'icon' => 'Symbol',
	'type' => 'Typ',
	'positive' => 'Positiv',
	'neutral' => 'Neutral',
	'negative' => 'Negativ',
	'editing_reaction' => 'Reaktion bearbeiten',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Neue Reaktion',
	'creating_reaction' => 'Erstelle Reaktion',
	
	// Custom profile fields
	'custom_fields' => 'Benutzerdefinirte Profilfelder',
	'new_field' => '<i class="fa fa-plus-circle"></i> Neues Feld',
	'required' => 'Benötigt',
	'public' => 'Öffentlich',
	'text' => 'Text',
	'textarea' => 'Text Feld',
	'date' => 'Datum',
	'creating_profile_field' => 'Erstelle Profilefeld',
	'editing_profile_field' => 'Bearbeite Profilefeld',
	'field_name' => 'Feld Name',
	'profile_field_required_help' => 'Benötigte Felder müssen von dem User bei der Registrierung eingetragen werden.',
	'profile_field_public_help' => 'Öffentliche Felder können von allen Benutzern einsehen werden, falls deaktiviert, nur von Moderatoren.',
	'profile_field_error' => 'Bitte gebe ein Name zwischen 2 und 16 Zeichen an.',
	'description' => 'Beschreibung',
	'display_field_on_forum' => 'Zeige Profilfeld im Forum an?',
	'profile_field_forum_help' => 'Falls aktiviert, wird das Profilfeld neben dem Post des Benutzers angezeigt.',
	
	// Minecraft
	'enable_minecraft_integration' => 'Aktiviere Minecraft Integration?',
	
	// Modules
	'modules_installed_successfully' => 'Alle neuen Module wurden erfolgreich installiert.',
	'enabled' => 'Aktiviert',
	'disabled' => 'Deaktiviert',
	'module_enabled' => 'Modul aktiviert.',
	'module_disabled' => 'Modul deaktiviert.',
	
	// Styles
	'templates' => 'Templates',
	'template_outdated' => 'Das Template ist nicht für diese NamelessMC Version',
	'active' => 'Aktivi',
	'deactivate' => 'Deaktivieren',
	'activate' => 'Aktivieren',
	'warning_editing_default_template' => 'Warnung! Editiere nicht das Standart Template.',
	'images' => 'Bilder',
	'upload_new_image' => 'Lade ein neues Bild hoch.',
	'reset_background' => 'Hintergrund zurücksetzen.',
	'install' => '<i class="fa fa-plus-circle"></i> Installieren',
	'template_updated' => 'Template erfolgreich geupdatet.',
	'default' => 'Standart',
	'make_default' => 'Als Standart setzen.',
	'default_template_set' => 'Das Template {x} wurde als Standart gesetzt.', // Don't replace {x}
	'template_deactivated' => 'Template wurde deaktiviert.',
	'template_activated' => 'Template wurde aktiviert.',
	
	// Users & groups
	'users' => 'Benutzer',
	'groups' => 'Gruppen',
	'group' => 'Gruppe',
	'new_user' => '<i class="fa fa-plus-circle"></i> Neuer Bentzer',
	'creating_new_user' => 'Erstelle neuen Benutzer',
	'registered' => 'Registriert',
	'user_created' => 'Benutzer wurde erstellt.',
	'cant_delete_root_user' => 'Root Nutzer darf nicht gelöscht werden!',
	'cant_modify_root_user' => 'Root Nutzer darf nicht editiert werden!',
	'user_deleted' => 'Benutzer wurde erfolgreich gelöscht.',
	'confirm_user_deletion' => 'Willst du den Benutzer <strong>{x}</strong> wirklich löschen?', // Don't replace {x}
	'validate_user' => 'Benutzer bestätigen.',
	'update_uuid' => 'UUID Updaten',
	'update_mc_name' => 'Minecraft Benutzername updaten',
	'reset_password' => 'Passwort zurücksetzen',
	'punish_user' => 'Benutzer Bannen',
	'delete_user' => 'User Löschen',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'Andere Aktionen',
	'disable_avatar' => 'Avatar deaktivieren',
	'select_user_group' => 'Du musst eine Benutzergruppe auswählen.',
	'uuid_max_32' => 'UUID muss zwischen 2 und 32 Zeichen lang sein.',
	'title_max_64' => 'Der Benutzertitel muss zwischen 2 und 32 Zeichen lang sein..',
	'minecraft_uuid' => 'Minecraft UUID',
	'group_id' => 'Gruppen ID',
	'name' => 'Name',
	'title' => 'Benutzer Titel',
	'new_group' => '<i class="fa fa-plus-circle"></i> Neue Gruppe',
	'group_name_required' => 'Gib bitte einen Gruppen Namen an.',
    'group_name_minimum' => 'Der Name muss mindestens 2 Zeichen lang sein.',
    'group_name_maximum' => 'Der Name darf maximal 20 Zeichen lang sein.',
	'creating_group' => 'Neue Gruppe erstellen',
	'group_html_maximum' => 'HTML Tag darf nicht länger als 1024 Zeichen sein.',
	'group_html' => 'Gruppen HTML',
	'group_html_lg' => 'Gruppen HTML (Groß)',
	'group_username_colour' => 'Benutzernamenfarbe der Gruppe',
	'group_staff' => 'Ist diese Gruppe eine Teamgruppe?',
	'group_modcp' => 'Kann diese Gruppe auf das ModCP zugreifen?',
	'group_admincp' => 'Kann diese Gruppe auf das AdminCP zugreifen?',
	'delete_group' => 'Gruppe Löschen',
	'confirm_group_deletion' => 'Möchtest du die Gruppe {x} wirklich löschen?', // Don't replace {x}
	'group_not_exist' => 'Diese Gruppe existiert nicht.',
	
	// General Admin language
	'task_successful' => 'Aufgabe erfolgreich .',
	'invalid_action' => 'Ungültige Aktion.',
	'enable_night_mode' => 'Nacht Modus aktivieren',
	'disable_night_mode' => 'Nacht Modus deaktivieren',
	'view_site' => 'Seite ansehen',
	'signed_in_as_x' => 'Eingeloggt als {x}', // Don't replace {x}
	
	// Security
	'acp_logins' => 'AdminCP Logins',
	'please_select_logs' => 'Bitte wähle die Logs aus.',
	'ip_address' => 'IP Addresse',
	'template_changes' => 'Template Editierungen',
	'file_changed' => 'Datei geändert',
	
	// Updates
	'update' => 'Update',
	'current_version_x' => 'Aktuelle Version: <strong>{x}</strong>', // Don't replaec {x}
	'new_version_x' => 'Neue Version: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => 'Es ist eine neue Version verfügbar!',
	'up_to_date' => 'Deine NamelessMC Installation ist auf dem neusten Stand!',
	'urgent' => 'Dies ist ein dringendes Update!',
	'changelog' => 'Changelog',
	'update_check_error' => 'Beim Überprüfen auf ein Update ist ein Fehler aufgetreten:',
	'instructions' => 'Anleitung',
	'download' => 'Download',
	'install' => 'Installieren',
	'install_confirm' => 'Bitte stellen Sie sicher, dass Sie das Paket heruntergeladen und die enthaltenen Dateien zuerst hochgeladen haben!',
	
	// File uploads
	'drag_files_here' => 'Ziehe ein Bild hierhin.',
	'invalid_file_type' => 'Ungültiges Dateiformat!',
	'file_too_big' => 'Datei zu groß! Die Datei hat eine größe von {{filesize}}, das Limit ist {{maxFilesize}}' // Don't replace {{filesize}} or {{maxFilesize}}
);
