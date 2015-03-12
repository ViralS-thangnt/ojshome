<?php

return [
	"hostedJournals" => 	"Hosted Journals",
	"settings.journalRedirect"=>"Journal redirect",
	"settings.security"=>"Security",
	"settings.security.plugins"=>"Prevent journal managers from installing, updating or deleting plugins.",
	"settings.options"=>"Options",
	"settings.useAlphalist"=>"For sites with many journals, show an alphalist on the homepage allowing for quick alphabetical navigation between journals.",
	"settings.usePaging"=>"For sites with many journals, break the list of journals up into several pages.",
	"settings.journalRedirectInstructions"=>"Requests to the main site will be redirected to this journal. This may be useful if the site is hosting only a single journal, for example.",
	"settings.noJournalRedirect"=>"Do not redirect",
	"settings.journalsList"=>"Journal elements",
	"settings.journalsList.description"=>"Please choose the journal elements that will be displayed for each journal at the site page.",
	"settings.journalsList.showThumbnail"=>"Journal thumbnail",
	"settings.journalsList.showTitle"=>"Journal title",
	"settings.journalsList.showDescription"=>"Journal description",
	"settings.defaultMetricDescription"=>"
		Your OJS installation is configured to record more than one usage metric. Usage statistics will be displayed in severeral contexts.
		There are cases where a single usage statistic must be used, e.g. to display an ordered list of most-used articles or to rank
		search results. Please select one of the configured metrics as a default.
	",
	"languages.primaryLocaleInstructions"=>"This will be the default language for the site and any hosted journals.",
	"languages.supportedLocalesInstructions"=>"Select all locales to support on the site. The selected locales will be available for use by all journals hosted on the site, and also appear in a language select menu to appear on each site page (which can be overridden on journal-specific pages). If multiple locales are not selected, the language toggle menu will not appear and extended language settings will not be available to journals.",
	"locale.maybeIncomplete"=>"Marked locales may be incomplete.",
	"languages.confirmUninstall"=>"Are you sure you want to uninstall this locale? This may affect any hosted journals currently using the locale.",
	"languages.installNewLocalesInstructions"=>"Select any additional locales to install support for in this system. Locales must be installed before they can be used by hosted journals. See the OJS documentation for information on adding support for new languages.",
	"languages.downloadLocales"=>"Download Locales",
	"languages.downloadFailed"=>"The locale download failed. The error message(s) below describe the failure.",
	"languages.localeInstalled"=>"The \"{:locale}\" locale has been installed.",
	"languages.download"=>"Download Locale",
	"languages.reloadDefaultEmailTemplates"=>"Reload Default Email Templates",
	"languages.download.cannotOpen"=>"Cannot open language descriptor from PKP web site.",
	"languages.download.cannotModifyRegistry"=>"Cannot add the new locale to the locale registry file, typically 'registry/locales.xml'.",
	"auth.ojs"=>"OJS User Database",
	"auth.enableSyncProfiles"=>"Enable user profile synchronization (if supported by this authentication plug-in). User profile information will be automatically updated from the remote source when a user logs in, and profile changes (including password changes) made within OJS will be automatically updated on the remote source. If this option is not enabled OJS profile information will be kept separate from remote source profile information.",
	"auth.enableSyncPasswords"=>"Enable user password modification (if supported by this authentication plug-in). Enabling this option allows users to modify their password from within OJS and to use the OJS \"lost password\" feature to reset a forgotten password. These functions will be unavailable to users with this authentication source if this option is not enabled.",
	"auth.enableCreateUsers"=>"Enable user creation (if supported by this authentication plug-in). Users created within OJS with this authentication source will be automatically added to the remote authentication source if they do not already exist. Additionally, if this source is the default authentication source, OJS accounts created through user registration will also be added to the remote authentication source.",
	"systemVersion"=>"OJS Version",
	"systemConfiguration"=>"OJS Configuration",
	"systemConfigurationDescription"=> "<![CDATA[OJS configuration settings from <tt>config.inc.php</tt>.]]>",
	"journals.journalSettings"=>"Journal Settings",
	"journals.noneCreated"=>"No journals have been created.",
	"journals.confirmDelete"=>"Are you sure you want to permanently delete this journal and all of its contents?",
	"journals.create"=>"Create Journal",
	"journals.createInstructions"=>"You will automatically be enrolled as the manager of this journal. After creating a new journal, enter it as a manager to continue with its setup and user enrollment.",
	"journals.urlWillBe"=>"This should be a single short word or acronym that identifies the journal. The journal's URL will be {:sampleUrl}",
	"journals.form.titleRequired"=>"A title is required.",
	"journals.form.pathRequired"=>"A path is required.",
	"journals.form.pathAlphaNumeric"=>"The path can contain only alphanumeric characters, underscores, and hyphens, and must begin and end with an alphanumeric character.",
	"journals.form.pathExists"=>"The selected path is already in use by another journal.",
	"journals.enableJournalInstructions"=>"Enable this journal to appear publicly on the site",
	"journals.journalDescription"=>"Journal description",
	"journal.pathImportInstructions"=>"Existing journal path or path to create (e.g., \"ojs\").",
	"journals.importSubscriptions"=>"Import subscriptions",
	"journals.transcode"=>"Transcode article metadata from ISO8859-1",
	"journals.redirect"=>"Generate code to map OJS 1 URLs to OJS 2 URLs",
	"journals.form.importPathRequired"=>"The import path is required.",
	"journals.importErrors"=>"Importing failed to complete successfully",
	"mergeUsers"=>"Merge Users",
	"mergeUsers.mergeUser"=>"Merge User",
	"mergeUsers.into.description"=>"Select a user to whom to attribute the previous user's authorships, editing assignments, etc.",
	"mergeUsers.from.description"=>"Select a user (or several) to merge into another user account (e.g., when someone has two user accounts). The account(s) selected first will be deleted and any submissions, assignments, etc. will be attributed to the second account.",
	"mergeUsers.allUsers"=>"All Enrolled Users",
	"mergeUsers.confirm"=>"Are you sure you wish to merge the selected { :oldAccountCount} account(s) into the account with the username \"{:newUsername}\"? The selected { :oldAccountCount} accounts will not exist afterwards. This action is not reversible.",
	"mergerUsers.noneEnrolled"=>"No enrolled users.",


	// new OJS system
	'title_page_admin'=>"DRAFT",
	'manuscript_info'=>"Manuscript infomation",
	// 'validation.numeric'		=> 'Field data must is numeric',
	// 'validation.required'		=> 'Field data is require',


	
	'manuscript_in_review.title_page_admin'=>"Manuscript",
	"manuscript_in_review.title"=>"Thông tin các bản thảo đang bình duyệt",

	//manuscript
	'manuscript.create'			=>	'Create New Manuscript',
	'manuscript.unsubmit' 		=>	'Unsubmitted Manuscript',
	'manuscript.inScreening' 	=>	'In Screening Manuscript',
	'manuscript.inReview' 		=>	'In Review Manuscript',
	'manuscript.inEditing' 		=>	'In Editing Manuscript',
	'manuscript.rejected' 		=>	'Rejected Manuscript',
	'manuscript.withdrawn' 		=>	'Withdrawn Manuscript',
	'manuscript.published' 		=>	'Published Manuscript',
	//review
	'manuscript.unReview'       =>  'Manuscript Waiting For Review',
    'manuscript.reviewed'       =>  'Manuscript Reviewed',
    'manuscript.rejectedReview' =>  'Manuscript Rejected Review',

    'manuscript.lastModified'	=>  'Last Modified',
    'manuscript.name'			=>	'Name',
    'manuscript.author' 		=>	'Author',

    //common
    'edit'						=>	'Edit',
    'delete'					=>	'Delete',
    'emptyData'					=>	'No match record found',

    //message
    'FailedLoginMessage'		=>	'These credentials do not match our records.',

	//user
	'user.create'				=>	'Create New User',
	'user.index'				=>	'List Users'
];
