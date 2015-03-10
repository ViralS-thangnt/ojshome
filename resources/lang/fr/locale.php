<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE locale SYSTEM "../../lib/pkp/dtd/locale.dtd">

<!--
  * locale.xml
  *
  * Copyright (c) 2013-2014 Simon Fraser University Library
  * Copyright (c) 2003-2014 John Willinsky
  * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
  *
  * Localization strings for the fr_FR (Français) locale.
  *
  -->
 
<locale name="fr_FR" full_name="Français">
	<!--
	 * This file is organized into several major sections, separated
	 * by comments like this one. These sections are called:
	 *  COMMON - Contains frequently-used words
	 *  ENTITIES - Contains terms pertaining to the system's major
	 *  ENTITIES - Contains terms pertaining to the system's major
	 *             entities, e.g. Article, Journal, Section
	 *  INTERFACE - Contains phrases organized by the section of the
	 *              user interface they appear in.
	 *  LOG - Contains phrases related to log entries
	 *  MISC - Entries that don't belong elsewhere.
	 *  DEFAULT - Default settings for configuration items.
	-->

	<!--
	 *
	 * COMMON - This section contains the most frequently-used words
	 *
	-->

	<!-- Common Messages -->
	<message key="common.openJournalSystems">Open Journal Systems</message>

	<!-- Common Form Messages -->
	
	<!-- Common Email Messages -->

	<!-- Common Localization Terms -->

	<!-- Common Error Messages -->
		
	<!-- Navigation -->
	<message key="navigation.journalHelp">Aide</message>
	<message key="navigation.archives">Archives</message>
	<message key="navigation.current">Numéro courant</message>
	<message key="navigation.otherJournals">Autres revues</message>
	<message key="navigation.browseByIssue">Par numéro</message>
	<message key="navigation.browseByAuthor">Par auteur</message>
	<message key="navigation.infoForAuthors">Pour les auteurs</message>
	<message key="navigation.infoForLibrarians">Pour les bibliothécaires</message>
	<message key="navigation.infoForAuthors.long">Information pour les auteurs</message>
	<message key="navigation.infoForLibrarians.long">Information pour les bibliothécaires</message>
	
	<!-- Article Queues -->
	<message key="common.queue.long.submissionsUnassigned">Non assignées</message>
	<message key="common.queue.short.submissionsUnassigned">Non assignées</message>
	<message key="common.queue.long.submissionsInEditing">Soumissions en cours de révision</message>
	<message key="common.queue.short.submissionsInEditing">En révision</message>
	<message key="common.queue.long.submissionsInReview">Soumissions en cours d'évaluation</message>
	<message key="common.queue.short.submissionsInReview">En évaluation</message>
	<message key="common.queue.long.submissionsArchives">Archives</message>
	<message key="common.queue.short.submissionsArchives">Archives</message>
	<message key="common.queue.long.active">Soumissions actives</message>
	<message key="common.queue.short.active">Actives</message>
	<message key="common.queue.long.completed">Archivée(s)</message>
	<message key="common.queue.short.completed">Archivée(s)</message>
	
	<!--
	 *
	 * ENTITIES - This section contains terms pertaining to the system's
	 *            major entities, e.g. Article, Journal, Section
	 *
	-->

	<!-- Common Section Terms -->
	<message key="section.section">Rubrique</message>
	<message key="section.sections">Rubriques de la revue</message>
	<message key="section.title">Titre de rubrique</message>
	<message key="section.abbreviation">Abréviation</message>
	<message key="section.abbreviation.example">(Par exemple, Articles=ART)</message>
	<!-- Common Article Terms -->
	<message key="article.articles">Articles</message>
	<message key="article.submissionId">ID de la soumission</message>
	<message key="article.title">Titre</message>
	<message key="article.authors">Auteurs</message>
	<message key="article.indexingInformation">Information d'indexation</message>
	<message key="article.metadata">Métadonnées</message>
	<message key="article.journalSection">Rubrique de revue</message>
	<message key="article.file">Fichier</message>
	<message key="article.suppFile">Fichier supplémentaire</message>
	<message key="article.suppFiles">Fichier(s) supplémentaire(s)</message>
	<message key="article.suppFilesAbbrev">Fichiers suppl.</message>
	<message key="article.discipline">Discipline et sous-disciplines académiques</message>
	<message key="article.subjectClassification">Classification par sujets</message>
	<message key="article.subject">Mots-clés</message>
	<message key="article.coverage">Couverture</message>
	<message key="article.coverageGeo">Couverture géo-spatiale</message>
	<message key="article.coverageChron">Couverture chronologique ou historique</message>
	<message key="article.coverageSample">Caractéristiques de l'échantillon de recherche</message>
	<message key="article.type">Type, méthode ou approche</message>
	<message key="article.language">Langue</message>
	<message key="article.sectionEditor">RR</message>
	<message key="article.commentsToEditor">Commentaires de l'auteur</message>
	<message key="article.submission">Soumission</message>
	<message key="article.submissions">Soumissions</message>
	<message key="article.abstract">Résumé</message>
	<message key="article.details">Détails</message>

	<!-- Submission Tracking - Common -->
	<message key="submission.submissionEditing">Révision de la soumission</message>
	<message key="submission.changeSection">Changer pour</message>
	<message key="submission.editorDecision">Décision du rédacteur</message>
	<message key="submission.round">Cycle {$round}</message>
	<message key="submission.editorReview">Évaluation du rédacteur</message>
	<message key="submission.notifyAuthor">Aviser l'auteur</message>
	<message key="submission.notifyEditor">Aviser le rédacteur</message>
	<message key="submission.editorAuthorRecord">Registre des courriels avec les rédacteur/auteur</message>
	<message key="submission.reviewersVersion">Version du fichier annotée par l'évaluateur</message>
	<message key="submission.postReviewVersion">Version du fichier post-évaluation</message>
	<message key="submission.editorVersion">Version du rédacteur</message>
	<message key="submission.authorsRevisedVersion">Version du fichier révisée par l'auteur</message>
	<message key="submission.authorVersion">Version de l'auteur</message>
	<message key="submission.copyediting">Révision</message>
	<message key="submission.copyedit">Réviser</message>
	<message key="submission.proofreading">Correction d'épreuves</message>
	<message key="submission.scheduling">Planification du calendrier</message>
	<message key="submission.scheduledIn">Publication planifiée pour {$issueName}.</message>
	<message key="submission.scheduledIn.tba">(AC)</message>
	
	<message key="submissions.sec">Sec</message>
	<message key="submissions.step1">Étape 1</message>
	<message key="submissions.step3">Étape 3</message>
	<message key="submissions.queuedReview">En évaluation</message>
	<message key="submissions.scheduled">Planifiée</message>
	<message key="submissions.published">Publiée</message>
	<message key="submissions.initial">Initiale</message>
	<message key="submissions.proofread">Faire la correction d'épreuves</message>
	<message key="submissions.initialProof">Première correction d'épreuves</message>
	<message key="submissions.postAuthor">Après l'auteur</message>
	<message key="submissions.reviewRound">Cycle d'évaluation</message>
	<message key="submissions.proof">Épreuve</message>
	<message key="submissions.editorDecision">Décision du rédacteur</message>
	<message key="submissions.editorRuling">Décision ferme du rédacteur</message>
	<message key="submission.eventLog">Registre d'événements</message>

	<!-- Submission list search engine -->
	<message key="submissions.copyeditComplete">Révision terminée</message>
	<message key="submissions.layoutComplete">Mise en page terminée</message>
	<message key="submissions.proofreadingComplete">Correction d'épreuves terminée</message>

	<!-- Submission Notes -->
	
	<!-- Common Journal Terms -->
	<message key="journal.currentIssue">Numéro courant</message>
	<message key="journal.journals">Revues</message>
	<message key="journal.path">Chemin</message>
	<message key="journal.journal">Revue</message>

	<!-- User -->
	<message key="user.showAllJournals">Afficher mes revues</message>
	<message key="user.registerForOtherJournals">S'inscrire à d'autres revues</message>
	<message key="user.myJournals">Mes revues</message>
	
	<!-- Rôle -->
	<message key="user.role.manager">Directeur de la revue</message>
	<message key="user.role.editor">Rédacteur</message>
	<message key="user.role.sectionEditor">Rédacteur de rubrique</message>
	<message key="user.role.layoutEditor">Responsable de la mise en page</message>
	<message key="user.role.copyeditor">Réviseur</message>
	<message key="user.role.proofreader">Correcteur d'épreuves</message>
	<message key="user.role.author">Auteur</message>
	<message key="user.role.subscriptionManager">Responsable des abonnements</message>
	<message key="user.role.managers">Directeurs de revue</message>
	<message key="user.role.editors">Rédacteurs</message>
	<message key="user.role.sectionEditors">Chefs de rubrique</message>
	<message key="user.role.layoutEditors">Responsables de la mise en page</message>
	<message key="user.role.copyeditors">Réviseurs</message>
	<message key="user.role.proofreaders">Correcteurs d'épreuves</message>
	<message key="user.role.authors">Auteurs</message>
	<message key="user.role.subscriptionManagers">Responsables des abonnements</message>
	
	<!-- Common Issue Terms -->
	<message key="issue.issue">Numéro</message>
	<message key="issue.issues">Numéros</message>
	<message key="issue.title">Titre</message>
	<message key="issue.volume">Volume</message>
	<message key="issue.number">Numéro</message>
	<message key="issue.vol">Vol.</message>
	<message key="issue.no">No</message>
	<message key="issue.year">Année</message>
	<message key="issue.noIssues">Aucun numéro</message>
	<message key="issue.toc">Sommaire</message>
	<message key="issue.abstract">Résumé</message>

	<!--
	 *
	 * LOG - This section contains entries related to log entries.
	 *
	-->
	<message key="submission.event.logLevel">Niveau</message>
	<message key="submission.event.logLevel.info">Info</message>
	<message key="submission.event.logLevel.notice">Avis</message>
	<message key="submission.event.logLevel.warning">Avertissement</message>
	<message key="submission.event.logLevel.error">Erreur</message>
	
	<message key="submission.event.general.defaultEvent">Événement de soumission</message>
	<message key="submission.event.general.articleSubmitted">Article soumis</message>
	<message key="submission.event.general.issueScheduled">Soumission envoyée en attente de planification de publication</message>
	<message key="submission.event.general.issueAssigned">Soumission assignée à un numéro</message>
	<message key="submission.event.general.articlePublished">Article publié</message>

	<message key="submission.event.author.authorRevision">Révision de l'auteur soumise</message>

	<message key="submission.event.general.authorRevision">Fichier de révision de l'auteur mis à jour</message>
	
	<message key="submission.event.editor.editorAssigned">Rédacteur assigné à la soumission</message>
	<message key="submission.event.editor.editorUnassigned">Rédacteur non assigné à la soumission</message>
	<message key="submission.event.editor.editorDecision">Décision du rédacteur soumise</message>
	<message key="submission.event.editor.editorFile">Fichier du rédacteur mis à jour</message>
	<message key="submission.event.editor.submissionArchived">Soumission envoyée aux archives</message>
	<message key="submission.event.editor.submissionRestored">Soumission récupérée à partir des archives</message>
	
	
	<message key="submission.event.copyedit.copyeditorAssigned">Réviseur assigné à une soumission</message>
	<message key="submission.event.copyedit.copyeditorUnassigned">Réviseur non assigné à une soumission</message>
	<message key="submission.event.copyedit.copyeditInitiated">Révision entamée</message>
	<message key="submission.event.copyedit.copyeditRevision">Fichier de révision du réviseur mis à jour</message>
	<message key="submission.event.copyedit.copyeditInitialCompleted">Révision initiale terminée</message>
	<message key="submission.event.copyedit.copyeditFinalCompleted">Révision finale terminée</message>
	<message key="submission.event.copyedit.copyeditSetFile">Fichier de révision mis à jour</message>
	
	<message key="submission.event.proofread.proofreaderAssigned">Correcteur d'épreuves assigné à la soumission</message>
	<message key="submission.event.proofread.proofreaderUnassigned">Correcteur d'épreuves non assigné à la soumission</message>
	<message key="submission.event.proofread.proofreadInitiated">Correction d'épreuves entamée</message>
	<message key="submission.event.proofread.proofreadRevision">Fichier de révision du correcteur d'épreuves mis à jour</message>
	<message key="submission.event.proofread.proofreadCompleted">Correction d'épreuves terminée</message>
	
	<message key="submission.event.layout.layoutEditorAssigned">Responsable de la mise en page assigné à la soumission</message>
	<message key="submission.event.layout.layoutEditorUnassigned">Responsable de la mise en page non assigné à la soumission</message>
	<message key="submission.event.layout.layoutInitiated">Mise en page entamée</message>
	<message key="submission.event.layout.layoutGalleyCreated">Épreuve de la mise en page mise à jour</message>
	<message key="submission.event.layout.layoutComplete">Mise en page terminée</message>
	<!--
	 *
	 * INTERFACE - Contains phrases organized by the rubrique of the
	 *             user interface they appear in.
	 *
	-->

	<!-- Reader article view -->

	<!-- Reader Comments -->
	<message key="comments.commentsOnArticle">Commentaires sur cet article</message>
	<message key="comments.authenticated"><![CDATA[by <a href="{$publicProfileUrl}" target="_parent">{$userName}</a>]]></message>

	<!-- Site Administration -->

	<message key="admin.settings.oaiRegistrationDescription"><![CDATA[Pour indexer le contenu de toutes les revues hébergées sur ce site selon un système distribué de bases de données de recherche, <a href="http://pkp.sfu.ca/harvester/add.php" target="_blank">inscrire</a> l'adresse URL de votre site dans le <a href="http://pkp.sfu.ca/harvester/" target="_blank">collecteur</a> de métadonnées du Public Knowledge Project. Cet outil récolte les métadonnées de chaque article indexé de la revue, permettant ainsi une recherche précise et globale parmi les sites de recherche qui adhèrent au protocole de collecte de métadonnées du <a href="http://www.openarchives.org/OAI/openarchivesprotocol.htm#Introduction" target="_blank">Open Archives Initiative</a>.
<br /><br />
<a href="http://pkp.sfu.ca/harvester/add.php" target="_blank">Cliquer ici</a> et saisir <span class="highlight">{$siteUrl}</span> sous <b>Site URL</b>, et <span class="highlight">{$oaiUrl}</span> sous <b>Base URL for OAI Archive</b>.
<br /><br />
À noter que l'interface OAI peut être désactivée pour ce site en modifiant la configuration OJS. Les futures versions d'OJS permettront d'activer ou de désactiver l'interface OAI pour chacune des revues du site.]]></message>

	
	
	<!-- Languages -->

	<message key="admin.auth.defaultSourceDescription"><![CDATA[<p>Définir une source d'authentification par défaut autre que celle d'OJS a pour conséquence :
<ul>
	<li>Si un utilisateur tente de créer un nouveau compte sur ce site avec un nom d'utilisateur déjà existant dans la source d'authentification (mais pas dans la base de données OJS), la tentative d'inscription n'est permise que si le mot de passe fourni est valide pour ce compte.</li>
</ul>]]></message>

	<!-- System Information -->
	<message key="admin.overwriteConfigFileInstructions"><![CDATA[<h4>NOTE!</div>
<p>Le système n'a pu modifier automatiquement le fichier de configuration. Pour appliquer les changements à votre fichier de configuration, vous devez ouvrir <tt>config.inc.php</tt> dans un éditeur de texte approprié et remplacer son contenu par le contenu de la zone de texte ci-dessous.</p>]]></message>
	
	
	<!-- Subscription Management -->
	<message key="subscriptionManager.subscriptionManagement">Gestion des abonnements</message>

	<!-- Journal Management -->
			
	<!-- Statistics & Reports -->

	<!-- Plugin Management -->

	<!-- General plugin information -->
	<message key="plugins.categories.generic.description">Les plugiciels génériques sont utilisés pour étendre les possibilités d'Open Journal Systems de nombreuses façons qui ne sont pas prises en charge par les autres catégories de plugiciels.</message>
	<message key="plugins.categories.auth.description">Les plugiciels d'autorisation permettent au Open Journal Systems de déléguer la tâche d'authentification des utilisateurs à d'autres systèmes, comme les serveurs LDAP.</message>



	<!-- Files Browser -->

	<!-- Journal Setup -->

	<!-- Setup Step 1 -->
	<!-- Setup Step 2 -->





	
	<message key="manager.setup.lockssDescription"><![CDATA[Open Journal Systems prend en charge le système <a href="http://www.lockss.org/" target="_blank">LOCKSS</a> (Lots of Copies Keep Stuff Safe) afin d'assurer l'archivage sécuritaire et permanent pour la revue. LOCKSS est un logiciel libre développé à la bibliothèque de l'Université Stanford qui permet aux bibliothécaires de préserver des revues numériques sélectionnées en interrogant régulièrement les sites Web des revues inscrites pour du contenu récemment publié et en l'archivant. Chaque archive est continuellement validée  par rapport aux caches des autres bibliothèques, et si son contenu est corrompu ou perdu, les autres caches de la revue sont utilisés pour le restaurer.
	<br /><br />
	La configuration de la prise en charge de LOCKSS pour Open Journal Systems n'a pas à être effectuée avant que le processus de publication soit bien enclenché, en quel cas, suivre ces deux étapes :]]></message>
	
	<!-- Setup Step 3 -->
	<message key="manager.setup.registerJournalForIndexingDescription"><![CDATA[Pour que le contenu de cette revue soit indexé dans un système distribué de bases de données de recherche, veuillez lire <a href="http://www.oclc.org/oaister/contribute.en.html" target="_blank">les étapes pour devenir un fournisseur de données</a> et inscrire votre revue avec le <a href="http://www.openarchives.org/data/registerasprovider.html" target="_blank">registre Open Archives</a> officiel. Pour vous inscrire, vous aurez besoin de l'URL de base de votre dépôt : <span class="highlight">{$oaiUrl}</span>.
Par la suite, vous pouvez inscrire votre revue au <a href="http://gita.grainger.uiuc.edu/registry/" target="_blank">registre UIUC OAI</a> et <a href="http://www.oclc.org/oaister" target="_blank">OAIster</a>.
<br /><br />
Prendre note que si votre administrateur de site a déjà inscrit ce site auprès de ces services, votre revue sera indexée automatiquement et vous n'avez pas besoin d'inscrire votre revue.]]></message>

	<!-- Setup Step 4 -->
	
	<!-- Setup Step 5 -->

	<!-- Languages -->
	
	
	<!-- Section Management -->
	<!-- Import/Export -->

	<!-- Groups / Editorial Team -->



	<!-- People Management -->
	<message key="manager.people.noAdministrativeRights"><![CDATA[Malheureusement, vous ne pouvez gérer les droits de cet utilisateur. Ça peut être à cause des raisons suivantes : 
		<ul>
			<li>L'utilisateur est un administrateur de site</li>
			<li>L'utilisateur est actif dans des revues que vous ne gérez pas</li>
		</ul>
	Cette tâche doit être effectuée par un administrateur de site.]]></message>


	
	<!-- Email Management -->

	<!-- Subscription Policy Management -->

	<!-- Subscription Type Management -->

	<!-- Subscription Management -->
	<!-- Announcement Type Management -->
	
	<!-- Announcements Management -->

	<!-- Editor -->

	<!-- Editor Index Page -->

	<!-- Back Issues -->

	<!-- Create Issue / Issue Data -->

	<!-- Live Issues -->

	<!-- Navigation sidebar menu -->
	
	<!-- Used by editor in submission review / editing -->
	<message key="editor.article.selectReviewerNotes"><![CDATA[Nom des liens vers le profil de l'évaluateur.<br/>
Notation est sur 5 (Excellent).<br/>
Semaines réfèrent au temps moyen nécessaire pour compléter une évaluation.<br/>
Dernière est la date de la plus récente évaluation acceptée.<br/>
Active indique combien d'évaluations sont présentement considérées ou en cours.]]></message>
	

	

	
	<!-- Section Editor -->
	<message key="sectionEditor.activeEditorialAssignments">Travail éditorial en cours</message>
	<message key="sectionEditor.completedEditorialAssignments">Travail éditorial terminé</message>
	<message key="sectionEditor.noneAssigned">Aucune soumission assignée.</message>
	<message key="sectionEditor.copyedit.confirmRenotify">Aviser de nouveau ce réviseur redémarrera la tâche qui lui a été assignée. Êtes-vous certain de vouloir le faire?</message>
	<message key="sectionEditor.author.confirmRenotify">Aviser de nouveau cet auteur redémarrera la tâche qui lui a été assignée. Êtes-vous certain de vouloir le faire?</message>
	<message key="sectionEditor.layout.confirmRenotify">Aviser de nouveau ce responsable de la mise en page redémarrera la tâche qui lui a été assignée. Êtes-vous certain de vouloir le faire?</message>
	<message key="sectionEditor.proofreader.confirmRenotify">Aviser de nouveau ce correcteur d'épreuves redémarrera la tâche qui lui a été assignée. Êtes-vous certain de vouloir le faire?</message>

	<message key="sectionEditor.regrets.breadcrumb">Message de refus</message>
	<message key="sectionEditor.regrets.title">#{$articleId} Message de refus de l'évaluateur, annulations &amp; cycles précédents</message>
	<message key="sectionEditor.regrets">Message de refus</message>
	<message key="sectionEditor.regrets.link">Voir refus, annulations, cycles précédents</message>
	<message key="sectionEditor.regrets.reviewRound">Évaluation par les pairs, cycle {$round}</message>
	<message key="sectionEditor.regrets.decisionRound">Décision du rédacteur, cycle {$round}</message>
	<message key="sectionEditor.regrets.regretsAndCancels">Message de refus de l'évaluateur &amp; annulations</message>
	<message key="sectionEditor.regrets.regret">Message de refus</message>
	<message key="sectionEditor.regrets.result">Résultat</message>
	<message key="sectionEditor.review.createReviewer">Créer un nouvel évaluateur</message>

	<!-- Layout Editor -->
	<message key="layoutEditor.activeEditorialAssignments">Travail éditorial en cours</message>
	<message key="layoutEditor.completedEditorialAssignments">Travail éditorial terminé</message>
	<message key="layoutEditor.noActiveAssignments">Aucun travail éditorial en cours.</message>
	<message key="layoutEditor.layoutEditingAssignments">Travail éditorial de mise en page</message>
	<message key="layoutEditor.galley.uploadGalleyFormat">Télécharger l'épreuve</message>
	<message key="layoutEditor.galley.replaceGalley">Remplacer le fichier</message>
	<message key="layoutEditor.galley.uploadSuppFile">Télécharger le fichier supplémentaire</message>
	
	<!-- Reviewer -->
	<message key="reviewer.pendingReviews">Articles en attente d'évaluation</message>
	<message key="reviewer.completedReviews">Complété</message>
	<message key="reviewer.averageQuality">Notation</message>
	
	<!-- Used in submission review -->
	<message key="reviewer.article.fileToBeReviewed">Fichier à évaluer</message>
	<message key="reviewer.article.notifyTheEditor">Aviser le rédacteur</message>
	<message key="reviewer.article.canDoReview">Fera l'évaluation</message>
	<message key="reviewer.article.cannotDoReview">Ne fera pas l'évaluation</message>
	<message key="reviewer.article.submissionEditor">Rédacteur de la soumission</message>
	<message key="reviewer.article.reviewerCommentsDescription">Taper ou coller les commentaires de l'évaluation ici</message>
	<message key="reviewer.article.editorToEnter">À saisir par le rédacteur</message>
	<message key="reviewer.article.sendReminder">Envoyer un rappel</message>
	<message key="reviewer.article.automatic">(Auto)</message>
	<message key="reviewer.article.recommendation">Recommandation</message>
	<message key="reviewer.article.submitReview">Soumettre l'évaluation au rédacteur</message>
	<message key="reviewer.article.reviewerComments">Commentaires</message>
	<message key="reviewer.article.uploadedFile">Fichiers téléchargés</message>	
	<message key="reviewer.article.reviewersAnnotatedVersion">Version téléchargée par l'évaluateur</message>
	<message key="reviewer.article.reviewersAnnotatedVersionDescription">(Si vous voulez annoter le fichier, pour le rédacteur, enregistrer sur votre disque dur et utiliser Explorer/Télécharger.)</message>
        <message key="reviewer.article.schedule.request">Demande du rédacteur</message>
        <message key="reviewer.article.schedule.response">Votre réponse</message>
        <message key="reviewer.article.schedule.submitted">Évaluation soumise</message>
        <message key="reviewer.article.schedule.due">Évaluation à échéance</message>
	<message key="reviewer.article.decision.accept">Accepter la soumission</message>
	<message key="reviewer.article.decision.pendingRevisions">Révisions requises</message>
	<message key="reviewer.article.decision.resubmitHere">Soumettre à nouveau pour évaluation</message>
        <message key="reviewer.article.decision.resubmitElsewhere">Soumettre à nouveau ailleurs</message>
	<message key="reviewer.article.decision.decline">Refuser la soumission</message>
	<message key="reviewer.article.decision.seeComments">Voir les commentaires</message>
	<message key="reviewer.article.schedule">Calendrier</message>
        <message key="reviewer.article.submissionToBeReviewed">Soumission à évaluer</message>
        <message key="reviewer.article.reviewSchedule">Calendrier d'évaluation</message>
        <message key="reviewer.article.reviewSteps">Étapes d'évaluation</message>
        <message key="reviewer.article.reviewerGuidelines">Directives aux évaluateurs</message>
        <message key="reviewer.article.notifyEditorA">Aviser le rédacteur de la soumission</message>
        <message key="reviewer.article.notifyEditorB">de votre décision d'accepter ou non l'évaluation.</message>
        <message key="reviewer.article.consultGuidelines">Si vous acceptez de faire l'évaluation, consultez les Directives aux évaluateurs ci-dessous.</message>
        <message key="reviewer.article.downloadSubmission">Cliquez sur les noms de fichier pour télécharger et évaluer (à l'écran ou sur papier) les fichiers associés à cette soumission.</message>
        <message key="reviewer.article.enterReviewA">Cliquer sur l'icône pour saisir (ou coller) votre évaluation de cette soumission.</message>
        <message key="reviewer.article.uploadFile">En outre, vous pouvez télécharger les fichiers pour fins de consultation par le rédacteur et/ou l'auteur.</message>
	<message key="reviewer.article.mustSelectDecision">Aucune recommandation n'a été sélectionnée. Vous devez choisir une recommandation à soumettre.</message>
	<message key="reviewer.article.confirmDecision">Du moment que vous aurez enregistré une décision, vous ne pourrez plus modifier l'évaluation. Êtes-vous certain de vouloir continuer?</message>
	<message key="reviewer.article.ensuringBlindReview">Assurer une évaluation à l'aveugle</message>

	<!-- Used in submission editing -->
	<message key="copyeditor.article.fileToCopyedit">Fichier à réviser</message>
	<message key="copyeditor.article.copyeditorFile">Fichier du réviseur</message>
	<message key="copyeditor.article.uploadedFile">Fichier téléchargé</message>
	<message key="copyeditor.article.copyeditorFinalFile">Fichier du réviseur</message>
	
	<!-- Proofreader -->
	<message key="proofreader.noProofreadingAssignments">Aucune assignation de correction d'épreuves</message>

	<!-- Author -->
	

	<!-- Article Submission Step 1 -->
	
	
	<!-- Article Submission Step 2 -->
	
	<!-- Article Submission Step 3 -->
	<message key="author.submit.uploadInstructions"><![CDATA[<p>Pour télécharger un manuscrit pour cette revue, suivre les étapes suivantes.</p>
<ol>
<li>Sur cette page, cliquer sur Parcourir (ou Sélectionner un fichier), ce qui ouvre une fenêtre permettant de localiser le fichier sur le disque dur de votre poste de travail.</li>
<li>Localiser le fichier que vous souhaitez soumettre et sélectionnez-le.</li>
<li>Cliquez sur Ouvrir dans la fenêtre de sélection de fichier, ce qui affiche le nom de celui-ci dans cette page.</li>
<li>Cliquez sur Télécharger sur cette page, ce qui télécharge le fichier à partir du poste de travail et le transfère sur le site Web de la revue et le renomme suivant les conventions de celle-ci.</li>
<li>Quand la soumission est téléchargée, cliquez sur Enregistrer et continuer au bas de cette page.</li>
</ol>]]></message>

	<!-- Article Submission Step 4 -->
	
	<!-- Article Submission Step 4a: Supplementary Files -->
	
	<!-- Article Submission Step 5 -->

	<!-- Used in submission review / editing -->
	<message key="submission.review.mustUploadFileForReview">Le courriel de demande ne peut être envoyé avant qu'une version d'évaluation ne soit en place.</message>

	<!-- Submission Tracking - Copyedit Specific -->
	<message key="submission.copyedit.mustUploadFileForInitialCopyedit">Le courriel de demande ne peut être envoyé avant qu'un fichier ne soit sélectionné pour révision dans Décision du rédacteur, Page d'évaluation.</message>
	<message key="submission.copyedit.mustUploadFileForCopyedit">Le courriel de demande ne peut être envoyé avant que le fichier soit téléchargé pour révision.</message>
	<message key="submission.copyedit.initialCopyedit">Révision initiale</message>
	<message key="submission.copyedit.editorsCopyedit">Révision du rédacteur</message>
	<message key="submission.copyedit.editorAuthorReview">Révision de l'auteur</message>
	<message key="submission.copyedit.finalCopyedit">Révision finale</message>
	<message key="submission.copyedit.copyeditVersion">Version R</message>
	<message key="submission.copyedit.selectCopyeditor">Assigner un réviseur</message>
	<message key="submission.copyedit.useFile">Utiliser le fichier</message>
	<message key="submission.copyedit.copyeditComments">Commentaires de révision</message>
	<message key="submission.copyedit.instructions">Instructions de révision</message>
	
	<!-- Submission Tracking - Layout Specific -->
	<message key="submission.layout.assignLayoutEditor">Assigner un responsable de la mise en page</message>
	<message key="submission.layout.replaceLayoutEditor">Remplacer un responsable de la mise en page</message>
	<message key="submission.layout.layoutComments">Commentaires de mise en page</message>
	<message key="submission.layout.instructions">Instructions de mise en page</message>
	
	
	<!-- Submission Tracking - Proofread Specific -->
	<message key="submission.proofreadingComments">Commentaires de correction d'épreuves</message>
	<message key="submission.proofread.corrections">Corrections de correction d'épreuves</message>
	<message key="submission.proofread.instructions">Instructions de correction d'épreuves</message>

	<!-- Submission History -->
	
	<message key="submission.logType.article">Article</message>
	<message key="submission.logType.author">Auteur</message>
	<message key="submission.logType.editor">Rédacteur</message>
	<message key="submission.logType.review">Évaluation</message>
	<message key="submission.logType.copyedit">Révision</message>
	<message key="submission.logType.layout">Mise en page</message>
	<message key="submission.logType.proofread">Correction d'épreuves</message>
	
	<!-- Submission Event Log -->

	<!-- Submission Email Log -->
	
	<!-- Submission Comments -->
	<message key="submission.comments.editorAuthorCorrespondence">Correspondance rédacteur/auteur</message>
	<message key="submission.comments.copyeditComments">Commentaires de révision</message>
	<message key="submission.comments.viewableDescription"><![CDATA[Ces commentaires peuvent être partagés avec l'auteur.<br />
(Après l'enregistrement, d'autres commentaires peuvent être ajoutés.)]]></message>	
    <message key="submission.comments.canShareWithAuthor">Pour l'auteur et le rédacteur</message>
	<message key="submission.comments.cannotShareWithAuthor">Pour le rédacteur</message>
	<message key="submission.comments.blindCcReviewers">Suivant l'envoi, présenter une copie révisable en CCI pour l'envoyer aux évaluateurs.</message>
	<message key="submission.comments.forAuthorEditor">Pour l'auteur et le rédacteur</message>
	<message key="submission.comments.forEditor">Pour le rédacteur</message>
	<message key="submission.comments.saveAndEmailAuthor">Enregistrer et envoyer un courriel à l'auteur</message>
	<message key="submission.comments.saveAndEmailEditor">Enregistrer et envoyer un courriel au rédacteur</message>
	
	<!-- Login -->
	<message key="user.login.registerNewAccount">Pas encore un utilisateur? Vous inscrire à ce site</message>
	<message key="user.login.resetPasswordInstructions"><![CDATA[Pour des raisons de sécurité, ce système envoie par courriel un mot de passe réinitialisé aux utilisateurs inscrits, plutôt que de leur rappeler leur mot de passe actuel. <br /><br />Saisir votre courriel ci-dessous pour réinitialiser votre mot de passe. Une confirmation sera envoyée à cette adresse de courriel.]]></message>
	
	<!-- Profile -->
	
	<!-- Registration -->

	<message key="user.register.selectJournal">Sélectionner une revue pour vous y inscrire</message>
	<message key="user.register.noJournals">Il n'y a pas de revues auxquelles vous pouvez vous inscrire à ce site.</message>
	<message key="user.register.privacyStatement">Déclaration de confidentialité</message>
	<message key="user.register.alreadyRegisteredOtherJournal"><![CDATA[<a href="{$registerUrl}">Cliquer ici</a> si vous êtes déjà inscrit à une autre revue dans ce site.]]></message>
	<message key="user.register.notAlreadyRegisteredOtherJournal"><![CDATA[<a href="{$registerUrl}">Cliquer ici</a> si vous n'êtes <strong>pas</strong> déjà inscrit à une autre revue dans ce site.]]></message>
	<message key="user.register.loginToRegister">Saisir vos nom d'utilisateur et mot de passe actuels pour vous inscrire à cette revue</message>
	<message key="user.register.registrationDisabled">Cette revue n'accepte pas les inscriptions d'utilisateurs pour le moment.</message>
	<message key="user.register.form.passwordLengthTooShort">Le mot de passe que vous avez saisi n'est pas assez long.</message>
	<message key="user.register.readerDescription">Vous serez avisé par courriel lors de la publication d'un nouveau numéro de la revue.</message>
	<message key="user.register.openAccessNotificationDescription">Avisé par courriel quand un numéro devient disponible en accès libre.</message>
	<message key="user.register.authorDescription">Apte à soumettre des articles à la revue</message>
	<message key="user.register.reviewerDescriptionNoInterests">Disposé à faire des évaluations par les pairs des soumissions à la revue.</message>
	<message key="user.register.reviewerDescription">Disposé à faire des évaluations par les pairs des soumissions à la revue. Identifier les intérêts pour les évaluations (principaux sujets traités, méthodes de recherche).</message>

	<!-- Search -->
	<message key="search.browseAuthorIndex">Explorer l'Index des auteurs</message>
	<message key="search.searchFor">Rechercher des articles contenant</message>
	<message key="search.author">Auteurs</message>
	<message key="search.withinJournal">Dans</message>
	<message key="search.allJournals">Toutes les revues</message>
	<message key="search.authorIndex">Explorer l'Index des auteurs</message>
	<message key="search.authorDetails">Détails de l'auteur</message>
	<message key="search.syntaxInstructions"><![CDATA[Pistes de recherche : <ul>
<li>Les termes de recherche sont insensibles à la casse</li>
<li>Les noms communs sont ignorés</li>
<li>Par défaut, seulement les articles contenant <em>tous</em> les termes de recherche sont retournés (c.-à-d. <em>ET</em> est implicite)</li>
<li>Combiner plusieurs mots avec <em>OU</em> pour trouver l'un ou l'autre terme, c.-à-d. <em>éducation OU recherche</em></li>
<li>Utiliser des parenthèses pour faire une recherche plus complexe, c.-à-d. <em>archive ((revue OU conférence) SAUF thèses)</em></li>
<li>Rechercher une phrase exacte en la mettant entre guillemets, c.-à-d. <em>"Publication en accès libre"</em></li>
<li>Exclure un mot en le préfixant avec <strong>-</strong> ou <em>SAUF</em>, c.-à-d. <em>en ligne -politiques</em> ou <em>en ligne SAUF politiques</em></li>
<li>Utiliser <strong>*</strong> comme troncature dans un terme pour y faire correspondre toute séquence de caractères, c.-à-d. <em>soci* moralité</em> feront apparaître les documents contenant « sociologique » ou « socialisme »</li>
</ul>]]></message>

	<!-- Interstitial page for PDFs -->
	<message key="article.pdf.title">Format de document portable (PDF)</message>
	
	<!-- Interstitial page for non-PDF non-HTML galleys -->
	<message key="article.nonpdf.title">Télécharger l'article</message>
	<message key="article.nonpdf.note"><![CDATA[Le fichier que vous avez sélectionné devrait commencer à se télécharger automatiquement. S'il ne le fait pas, cliquer sur le lien ci-dessous. Noter que ce fichier peut nécessiter un logiciel de lecture particulier ou un plugiciel pour être visualisé.<br /><br />Si le fichier ne se télécharge pas automatiquement, <a href="{$url}">cliquer ici</a>.]]></message>
	
	<!-- Site index -->
	<message key="site.journalsHosted">Revues hébergées sur ce site</message>
	<message key="site.journalView">Voir la revue</message>
	<message key="site.journalRegister">S'inscrire</message>
	<message key="site.journalCurrent">Numéro courant</message>
	

	<!-- Current index -->
	<message key="current.current">Courant</message>
	<message key="current.noCurrentIssue">Aucun numéro courant</message>
	<message key="current.noCurrentIssueDesc">Cette revue n'a publié aucun numéro.</message>

	<!-- Archive index -->
	<message key="archive.archives">Archives</message>
	<message key="archive.browse">Explorer les anciens numéros</message>
	<message key="archive.issueUnavailable">Numéro non disponible</message>
	
	<!-- About The Journal -->
	<message key="about.statistics">Statistiques</message>
	<message key="about.journalContact">Contact de la revue</message>
	<message key="about.aboutTheJournal">À propos de la revue</message>
	<message key="about.editorialTeam">Comité éditorial</message>
	<message key="about.editorialTeam.biography">Biographie</message>
	<message key="about.editorialPolicies">Politiques éditoriales</message>
	<message key="about.focusAndScope">Énoncé de mission</message>
	<message key="about.sectionPolicies">Politiques de rubriques</message>
	<message key="about.submissions">Soumissions</message>
	<message key="about.sponsors">Commanditaires</message>
	<message key="about.contributors">Sources d'appui</message>
	<message key="about.onlineSubmissions">Soumissions en ligne</message>
	<message key="about.onlineSubmissions.haveAccount">Possède déjà un nom d'utilisateur/mot de passe pour {$journalTitle}?</message>
	<message key="about.onlineSubmissions.login">Ouvrir une session</message>
	<message key="about.onlineSubmissions.needAccount">Besoin d'un nom d'utilisateur/mot de passe?</message>
	<message key="about.onlineSubmissions.registration">Aller à l'Inscription</message>
	<message key="about.onlineSubmissions.registrationRequired">L'inscription et l'ouverture de session sont obligatoires pour soumettre des articles en ligne et pour vérifier l'état des soumissions courantes.</message>
	<message key="about.authorGuidelines">Directives aux auteurs</message>
	<message key="about.submissionPreparationChecklist">Liste de vérification de la soumission</message>
	<message key="about.submissionPreparationChecklist.description">En tant que partie intégrante du processus de soumission, les auteurs doivent s'assurer de la conformité de leur soumission avec tous les éléments suivants, et les soumissions peuvent être retournées aux auteurs qui ne sont conforment pas à ces directives.</message>
	<message key="about.copyrightNotice">Mention de droit d'auteur</message>
	<message key="about.privacyStatement">Déclaration de confidentialité</message>
	<message key="about.peerReviewProcess">Processus d'évaluation par les pairs</message>
	<message key="about.publicationFrequency">Périodicité</message>
	<message key="about.openAccessPolicy">Politique d'accès libre</message>
	<message key="about.delayedOpenAccess">Accès libre différé</message>
	<message key="about.delayedOpenAccessDescription1">Le contenu de cette revue sera disponible en accès libre.</message>
	<message key="about.delayedOpenAccessDescription2">mois après la publication d'un numéro.</message>
	<message key="about.authorSelfArchive">Auto-archivage par l'auteur</message>
	<message key="about.archiving">Archivage</message>
	<message key="about.subscriptions">Abonnements</message>
	<message key="about.subscriptionsContact">Contact des abonnements</message>
	<message key="about.availableSubscriptionTypes">Types d'abonnement</message>
	<message key="about.journalSponsorship">Commanditaires de la revue</message>
	<message key="about.aboutThisPublishingSystem">À propos de ce système de publication</message>
	<message key="about.aboutOJSJournal"><![CDATA[Cette revue utilise Open Journal Systems {$ojsVersion}, un logiciel de gestion et d'édition de revues à code source libre développé, pris en charge et distribué librement par le <a href="http://pkp.sfu.ca/">Public Knowledge Project</a> sous la license publique générale GNU.]]></message>
	<message key="about.aboutOJSSite"><![CDATA[Ce site utilise Open Journal Systems {$ojsVersion}, un logiciel de gestion et d'édition de revues à code source libre développé, pris en charge et distribué librement par le <a href="http://pkp.sfu.ca/">Public Knowledge Project</a> sous la license publique générale GNU.]]></message>

	<!-- Announcement -->
	
	<!-- Help -->
	<message key="help.ojsHelp">Aide d'Open Journal Systems</message>
	<message key="help.ojsHelpAbbrev">Aide d'OJS</message>	

	<!-- Installer -->
	<message key="installer.ojsInstallation">Installation d'OJS</message>
	<message key="installer.ojsUpgrade">Mise à jour d'OJS</message>
	<message key="installer.installationInstructions"><![CDATA[<h4>Version d'OJS {$version}</h4>

<p>Merci de télécharger Open Journal Systems <strong> du Public Knowledge Project</strong>. Avant de continuer, veuillez lire le fichier <a href="{$baseUrl}/docs/README">README</a> inclus avec ce logiciel. Pour en savoir plus sur Public Knowledge Project et ses projets de logiciels, veuillez visiter le <a href="http://pkp.sfu.ca/" target="_blank">site Web du PKP</a>. Si vous avez des rapports de bogues ou des demandes de soutien technique concernant Open Journal Systems, voir le <a href="http://pkp.sfu.ca/support/forum" target="_blank">forum de soutien</a> ou visiter le <a href="http://pkp.sfu.ca/bugzilla/" target="_blank">système de rapports de bogues</a>en ligne de PKP. Même si le forum de soutien is the preferred method of contact, you can also email the team at <a href="mailto:pkp.contact@gmail.com">pkp.contact@gmail.com</a>.</p>

<h4>Mise à jour</h4>

<p>Si vous faites la mise à jour d'une installation existante d'OJS 2.x, <a href="{$upgradeUrl}">cliquer ici</a> pour procéder.</p>

<h4>Configuration du système recommandée</h4>

<ul>
	<li><a href="http://www.php.net/" target="_blank">PHP</a> >= {$phpRequiredVersion} (incluant PHP 5.x); vous utilisez présentement PHP {$phpVersion}{$wrongPhpText}</li>
	<li><a href="http://www.mysql.com/" target="_blank">MySQL</a> >= 3.23.23 (incluant MySQL 4.x) ou <a href="http://www.postgresql.org/" target="_blank">PostgreSQL</a> >= 7.1 (incluant PostgreSQL 8.x)</li>
	<li><a href="http://httpd.apache.org/" target="_blank">Apache</a> >= 1.3.2x or >= 2.0.4x ou Microsoft IIS 6</li>
	<li>Système d'exploitation : Tout système d'exploitation qui supporte le logiciel ci-dessus, y compris <a href="http://www.linux.org/" target="_blank">Linux</a>, <a href="http://www.bsd.org/" target="_blank">BSD</a>, <a href="http://www.oracle.com/sun/" target="_blank">Solaris</a>, <a href="http://www.apple.com/" target="_blank">Mac OS X</a>, <a href="http://www.microsoft.com/">Windows</a></li>
</ul>

<p>Comme PKP n'a pas les ressources nécessaires lui permettant de tester toutes les combinaisons possibles de versions et de plateformes des logiciels, aucune garantie de fonctionnement ou de soutien adéquat n'est implicite.</p>

<p>Des modifications à ces paramètres peuvent être apportées après l'installation en modifiant le fichier <tt>config.inc.php</tt> dans le répertoire de base d'OJS, ou en utilisant l'interface de administration du site Web.</p>

<h4>Systèmes de base de données pris en charge</h4>

<p>Présentement, OJS a uniquement été testé sur MySQL et PostgreSQL, bien que d'autres systèmes de gestion de base de données pris en charge par <a href="http://adodb.sourceforge.net/" target="_blank">ADOdb</a> pourraient fonctionner (en tout ou en partie). Il est possible d'envoyer à l'équipe d'OJS des rapports de compatibilité ou des rustines de codes pour d'autres SGBD.</p>

<h4>Étapes précédant l'installation</h4>

<p>1. Les fichiers et répertoires suivants (et leur contenu) doivent être accessibles en écriture :</p>
<ul>
	<li><tt>config.inc.php</tt> est accessible en écriture (facultatif) : {$writable_config}</li>
	<li><tt>public/</tt> est accessible en écriture : {$writable_public}</li>
	<li><tt>cache/</tt> est accessible en écriture : {$writable_cache}</li>
	<li><tt>cache/t_cache/</tt> est accessible en écriture : {$writable_templates_cache}</li>
	<li><tt>cache/t_compile/</tt> est accessible en écriture : {$writable_templates_compile}</li>
	<li><tt>cache/_db</tt> est accessible en écriture : {$writable_db_cache}</li>
</ul>

<p>2. Un répertoire pour stocker les fichiers téléchargés doit être créé et accessible en écriture (voir "Paramètres des fichiers" ci-dessous).</p>

<h4>Installation manuelle</h4>

<p>Sélectionner l'<strong>Installation manuelle</strong>pour afficher les énoncés SQL nécessaires à la création du schéma et des données initiales de la base de données OJS qui permettront de procéder à l'installation manuelle de la base de données. Cette option est utile au moment du débogage des problèmes d'installation, particulièrement avec les plateformes qui ne sont pas prises en charge. Prendre note que cette méthode d'installation ne crée pas de bases de donnés ou de tables, bien que le fichier de configuration sera quand même généré avec les paramètres de la base de données fournis.</p>]]></message>
	<message key="installer.upgradeInstructions"><![CDATA[<h4>Version {$version} d'OJS</h4>
	
<p>Merci de télécharger <strong>Open Journal Systems</strong> du Public Knowledge Project. Avant de continuer, veuillez lire les fichiers <a href="{$baseUrl}/docs/README">README</a> et <a href="{$baseUrl}/docs/UPGRADE">UPGRADE</a> inclus avec ce logiciel. Pour en savoir plus sur le Public Knowledge Project et ses projets logiciels, veuillez visiter le site Web <a href="http://pkp.sfu.ca/" target="_blank">PKP</a>. Si vous avez des rapports de bogues ou des demandes de soutien technique concernant Open Journal Systems, voir le <a href="http://pkp.sfu.ca/support/forum" target="_blank">forum de soutien</a> ou visiter le <a href="http://pkp.sfu.ca/bugzilla/" target="_blank">système de rapports de bogues</a>en ligne de PKP. Même si le forum de soutien is the preferred method of contact, you can also email the team at <a href="mailto:pkp.contact@gmail.com">pkp.contact@gmail.com</a>.</p>
<p>Il est <strong>fortement recommandé</strong> de faire des copies de sauvegardes de vos base de données, répertoires de fichiers, et répertoire d'installation OJS avant de continuer.</p>
<p>Si votre poste de travail s'exécute en <a href="http://www.php.net/features.safe-mode" target="_blank">mode sans échec PHP</a>, veuillez vous assurer que le paramètre max_execution_time de votre fichier de configuration php.ini contient une valeur élevée. Si ce paramètre ou tout autre limite de temps (par ex., paramètre Timeout d'Apache) est atteint et que le processus de mise à jour est interrompu, une intervention manuelle sera nécessaire.</p>]]></message>
	<message key="installer.localeSettingsInstructions"><![CDATA[Pour une prise en charge complète d'Unicode (UTF-8), sélectionner UTF-8 pour tous les paramètres de jeux de caractères. Prendre note quecette prise en charge exige actuellement un serveur de base de données MySQL >= 4.1.1 ou PostgreSQL >= 7.1. Veuillez aussi noter que la prise en charge complète d'Unicode exige PHP >= 4.3.0 compilé avec le soutien pour la bibliothèque<a href="http://www.php.net/mbstring" target="_blank">mbstring</a>(activée par défaut dans les plus récentes installations PHP). Vous aurez peut-être des problèmes à utiliser les jeux de caractères étendus si votre serveur ne répond pas à ces exigences.
<br /><br />
Actuellement, votre serveur prend en charge mbstring: <strong>{$supportsMBString}</strong>]]></message>
	<message key="installer.localeInstructions">La langue principale à utiliser pour ce système. Veuillez consulter la documentation d'OJS si vous êtes intéressé à prendre en charge des langues qui ne sont pas listées ici.</message>
	<message key="installer.additionalLocalesInstructions">Sélectionner une ou plusieurs langues supplémentaires à prendre en charge dans ce système. Ces langues seront disponibles pour fins d'utilisation par les revues hébergées sur le site. Des langues supplémentaires peuvent également être installées en tout temps à partir de l'interface d'administration du site.</message>
	<message key="installer.filesDirInstructions">Saisir le nom du chemin d'accès complet à un répertoire existant où les fichiers téléchargés doivent être conservés. Ce répertoire ne doit pas être accessible directement à partir du Web. Veuillez vous assurer que ce répertoire existe et qu'il est accessible en écriture avant de procéder à l'installation. Les noms de chemin d'accès de Windows doivent utiliser des barres obliques, par ex., "C:/myJournal/files".</message>
	<message key="installer.reinstallAfterDatabaseError"><![CDATA[<strong>Avertissement :</strong> Si l'installation de la base de données échoue, vous devrez peut-être supprimer votre base de données OJS ou les tables de votre base de données avant de tenter de réinstaller la base de données.]]></message>
	<message key="installer.overwriteConfigFileInstructions"><![CDATA[<h4>IMPORTANT!</h4>
<p>L'installateur n'a pas pu écraser automatiquement le fichier de configuration. Avant de tenter d'utiliser le système, veuillez ouvrir <tt>config.inc.php</tt> dans un éditeur de texte approprié et remplacer son contenu par le contenu de la zone de texte ci-dessous.</p>]]></message>
	<message key="installer.installationComplete"><![CDATA[<p>Installation d'OJS réussie.</p>
	<p>Pour commencer à utiliser le système, <a href="{$loginUrl}">se connecter</a> avec les nom d'utilisateur et mot de passe saisis à la page précédente.</p>
	<p>Si vous voulez recevoir des nouvelles et mises à jour, vous pouvez :</p>
	<ol>
	<li><a href="http://pkp.sfu.ca/ojs/register" target="_new">Inscrire</a> votre revue, conférence, ou moissonneur et recevez des nouvelles sur les mises à jour de logiciels, rustines de sécurité, et plus.</li>
	<li>Devenir membre de notre <a href="http://pkp.sfu.ca/informed" target="_new">liste de discussion</a> pour OJS, OCS, the Harvester, Lemon8-XML, OMP, ou pour l'ensemble de ceux-ci.</li>
	<li>Vous abonner au <a href="http://pkp.sfu.ca/blog" target="_new">blog de PKP</a> <a href="http://pkp.sfu.ca/blog/feed" target="_new">flux RSS</a>.</li>
	</ol>
	<p>Si vous avez des questions ou des commentaires, veuillez visiter le <a href="http://pkp.sfu.ca/support/forum" target="_new">forum de support</a>.</p>]]></message>
	<message key="installer.upgradeComplete"><![CDATA[<p>La mise à jour d'OJS à la version {$version} s'est complétée avec succès.</p>
<p>N'oubliez pas de modifier le paramètre installed dans votre fichier de configuration "config.inc.php" pour la valeur <em>On</em>.</p>
<p>Si vous n'êtes pas déjà inscrit et voulez recevoir des nouvelles et mises à jour, <strong>veuillez vous inscrire à <a href="http://pkp.sfu.ca/ojs/register" target="_new">http://pkp.sfu.ca/ojs/register</a>. </strong>Pour toute question ou commentaire, veuillez visiter le <a href="http://pkp.sfu.ca/support/forum" target="_new">forum de support</a>.</p>]]></message>


	<!-- Article Logs -->
	<message key="log.author.submitted">{$authorName} a saisi une nouvelle soumission, ID {$submissionId}.</message>
	<message key="log.author.documentRevised">{$authorName} a révisé l'article {$articleId}. Le nouvel ID du fichier est {$fileId}.</message>
	<message key="log.review.reviewerAssigned">{$reviewerName} a été assigné à l'évaluation de la soumission {$articleId} pour le cycle d'évaluation {$round}.</message>
	<message key="log.review.reviewerUnassigned">{$reviewerName} n'a pas été assigné à l'évaluation de la soumission {$articleId} pour le cycle d'évaluation {$round}.</message>
	<message key="log.review.reviewInitiated">Le cycle {$round} d'évaluation par {$reviewerName} pour la soumission {$articleId} a été commencé.</message>
	<message key="log.review.reviewReinitiated">Le cycle {$round} d'évaluation par {$reviewerName} pour la soumission {$articleId} a été recommencé.</message>
	<message key="log.review.reviewCancelled">Le cycle {$round} d'évaluation par {$reviewerName} pour la soumission {$articleId} a été annulé.</message>
	<message key="log.review.reviewCleared">Le cycle {$round} d'évaluation par {$reviewerName} pour la soumission {$articleId} a été effacé.</message>
	<message key="log.review.reviewerRated">{$reviewerName} a été classé pour le cycle {$round} d'évaluation de la soumission {$articleId}.</message>
	<message key="log.review.reviewDueDateSet">La date d'échéance pour le cycle {$round} d'évaluation de la soumission {$articleId} par {$reviewerName} a été établie à {$dueDate}.</message>
	<message key="log.review.reviewRecommendationSet">La recommandation pour le cycle {$round} d'évaluation de la soumission {$articleId} par {$reviewerName} a été établie.</message>
	<message key="log.review.reviewRecommendationSetByProxy">La recommandation pour le cycle {$round} d'évaluation de la soumission {$articleId} a été établie pas le rédacteur, {$editorName}, au nom de l'évaluateur, {$reviewerName}.</message>
	<message key="log.review.resubmit">La soumission {$articleId} a été soumise de nouveau pour évaluation.</message>
	<message key="log.review.reviewDeclined">{$reviewerName} a refusé le cycle {$round} d'évaluation de la soumission {$articleId}.</message>
	<message key="log.review.reviewAccepted">{$reviewerName} a accepté le cycle {$round} d'évaluation de la soumission {$articleId}.</message>
	<message key="log.review.reviewAcceptedByProxy">{$userName} a accepté le cycle {$round} d'évaluation de la soumission {$articleId} au nom de {$reviewerName}.</message>
	<message key="log.review.reviewFileByProxy">Le rédacteur, {$userName}, a téléchargé le fichier d'évaluation pour le cycle {$round} de la soumission {$articleId} au nom de l'évaluateur, {$reviewerName}.</message>
	<message key="log.review.reviewerFile">Le fichier d'un évaluateur a été téléchargé.</message>


	<message key="log.copyedit.initiate">La révision de la soumission {$articleId} a été entamée par {$copyeditorName}.</message>
	<message key="log.copyedit.copyeditFileSet">Le fichier de révision par défaut a été sélectionné.</message>
	<message key="log.copyedit.initialEditComplete">{$copyeditorName} a terminé la révision initiale de la soumission {$articleId}.</message>
	<message key="log.copyedit.finalEditComplete">{$copyeditorName} a terminé la révision finale de la soumission {$articleId}.</message>
	<message key="log.copyedit.copyeditorAssigned">{$copyeditorName} a été assigné à la révision de la soumission {$articleId}.</message>
	<message key="log.copyedit.copyeditorFile">Une version révisée du fichier de la soumission a été téléchargée.</message>
	<message key="log.copyedit.authorFile">Une version révisée par l'auteur du fichier de soumission a été téléchargée.</message>

	<message key="log.layout.layoutEditorAssigned">{$editorName} a été assigné comme responsable de la mise en page pour la soumission {$articleId}.</message>
	<message key="log.layout.layoutEditorUnassigned">{$editorName} n'a pas été assigné comme responsable de la mise en page pour la soumission {$articleId}.</message>
	<message key="log.layout.layoutEditComplete">{$editorName} a terminé la modificaiton de la mise en page pour la soumission {$articleId}.</message>

	<message key="log.editor.metadataModified">Les métadonnées pour cet article ont été modifiées par {$editorName}.</message>
	<message key="log.editor.editorFile">Une version du rédacteur du fichier de la soumission a été téléchargé.</message>
	<message key="log.editor.archived">La soumission {$articleId} a été archivée.</message>
	<message key="log.editor.restored">La soumission {$articleId} a été replacé en file d'attente.</message>
	<message key="log.editor.editorAssigned">{$editorName} a été assigné comme rédacteur de la soumission {$articleId}.</message>
	<message key="log.editor.submissionExpedited">{$editorName} a accéléré le processus éditorial pour l'article {$articleId}.</message>

	<message key="log.proofread.assign">{$assignerName} a assigné {$proofreaderName} à la correction d'épreuves de la soumission {$articleId}.</message>
	<message key="log.proofread.complete">{$proofreaderName} a soumis {$articleId} pour sa planification au calendrier.</message>

	<message key="log.imported">{$userName} a importé l'article {$articleId}.</message>

	<!-- Reading Tools entries -->


	<!-- RT Settings -->
	<message key="rt.admin.settings">Options pour les outils de lecture</message>

	<message key="rt.admin.settings.description">Les outils de lecture apparaissent dans un cadre à côté des articles publiés dans les rubriques de la revue désignées pour l'indexation. Les outils de lecture comprennent un ensemble d'outils facultatifs reliés à l'article publié, listés ci-dessous, et un ensemble d'outils qui donnent accès à des articles connexes, organisés par champ et par discipline.</message>
	<message key="rt.admin.settings.enableReadingTools">Activer les outils de lecture pour les rubriques de la revue désignées.</message>
	<message key="rt.admin.settings.relatedItems">Champ</message>
	<message key="rt.admin.settings.relatedItemsLink"><![CDATA[Voir <a href="{$relatedItemsLink}" class="action">Ensembles d'éléments connexes</a> pour afficher, ajouter, corriger ou supprimer des éléments connexes pour chaque champ.]]></message>

	<message key="rt.admin.options">Outils pour les articles de la revue</message>
	<message key="rt.admin.relatedItems">Outils pour les éléments connexes</message>


	<!-- RT Versions -->

	<!-- RT Contexts -->

	<!-- RT Searches -->

	
	<!-- RT Entities -->




	<message key="rt.metadata.dublinCore.primaryAuthor">Créateur</message>

	<message key="rt.metadata.pkp.primaryAuthor">Nom de l'auteur, affiliation, pays</message>
	<message key="rt.metadata.pkp.peerReviewed">Article évalué par les pairs</message>



	<message key="rt.beNotifiedWhen">Être avisé lorsque...</message>

	<message key="rt.thisJournal">Rechercher dans la revue</message>
	

	<message key="rt.context.authorTermsDescription">Pour les articles ayant plus d'un auteur, laisser tous les noms cochés pour rechercher les ouvrages écrits par ces mêmes auteurs en collaboration, ou rechercher un auteur à la fois en cochant seulement un nom. Pour en apprendre plus sur la ressource recherchée, cliquer sur À PROPOS. Ces ressources ont été sélectionnées en raison de leur pertinence et de l'accès libre (gratuit) à une partie ou à la totalité de leur contenu.</message>
	

	<!--
	 *
	 * MISC - Entries that do not belong in the other rubriques.
	 *
	-->
	<!-- Icons: Default "alt" text -->
	
	<!-- Debug messages -->


	<!--
	 *
	 * DEFAULT - Default settings for setup items.
	 *
	-->
	<message key="common.confirmComplete">Êtes-vous certain de vouloir identifier cette tâche comme complétée? Il est possible que vous ne puissiez plus faire de modifications par la suite.</message>
	<message key="submission.sent">Envoyé</message>
	<message key="submission.layout.imageInvalid">Format d'image invalide. Les formats acceptés sont .gif, .jpg, et .png.</message>
	<message key="submission.layout.noLayoutFile">Aucun (Téléchargez la version de révision finale comme version de mise en page avant d'envoyer une demande)</message>
	<message key="installer.databaseSettingsInstructions">OJS nécessite l'accès à une base de données SQL pour stocker ses données. Voir la configuration nécessaire ci-dessus pour une liste des base de données prises en cahrge. Dans les champs ci-dessus, fournir les paramètres à utiliser pour se connecter à la base de données.</message>
	<message key="log.review.reviewDeclinedByProxy">{$userName} a refusé le cycle {$round} d'évaluation pour la soumission {$articleId} au nom de {$reviewerName}.</message>
	<message key="log.editor.decision">Une décision du rédacteur ({$decision}) pour l'article {$articleId} a été enregistré par {$editorName}.</message>
	<message key="rt.admin.settings.addComment.authenticated">Les utilisateurs doivent être inscrits et connectés pour publier, et l'anonymat n'est pas autorisé.</message>
	<message key="rt.admin.settings.addComment.anonymous">Les utilisateurs doivent être inscrits et connectés pour publier, et l'anonymat est autorisé.</message>
	<message key="rt.admin.settings.addComment.unauthenticated">Les utilisateurs n'ont pas besoin d'être inscrits pour publier, et l'anonymat est autorisé.</message>
	<message key="debug.notes.currencyListLoad">Liste des devises chargée "{$filename}" à partir d'un XML</message>
	<message key="common.payment">Paiement</message>
	<message key="common.payments">Paiements</message>
	<message key="navigation.competingInterestGuidelines">Directives pour les conflits d'intérêts</message>
	<message key="reader.subscribersOnly">Abonnés uniquement</message>
	<message key="reader.subscriptionRequiredLoginText">L'accès à cet article est réservé aux abonnés. Pour vérifier votre abonnement, vous connecter à la revue.</message>
	<message key="reader.openAccess">Accès libre</message>
	<message key="reader.subscriptionAccess">Accès sous abonnement</message>
	<message key="reader.subscriptionOrFeeAccess">Accès sous abonnement ou avec frais</message>
	<message key="plugins.categories.citationFormats.description">Les plugiciels de format de citation fournissent aux utilisateurs différents formats par lesquels ils peuvent accéder aux citations d'articles.</message>
	<message key="admin.languages.downloadUnavailable"><![CDATA[<p>Le téléchargement des modules linguistiques à partir du serveur Web du Public Knowledge Project n'est pas disponible présentement car :</p>
	<ul>
		<li>Votre serveur n'a pas ou ne permet pas l'exécution de l'utilitaire "tar" de GNU</li>
		<li>OJS n'est pas capable de modifier le fichier de registre de langues, généralement "registry/locales.xml".</li>
	</ul>
<p>Les modules linguistiques peuvent être téléchargés manuellement à partir du <a href="http://pkp.sfu.ca">site Web de PKP</a>.</p>]]></message>
	<message key="manager.setup.authorCopyrightNotice.sample"><![CDATA[<h3>Mentions de droit d'auteurs de Creative Commons proposés</h3>
<h4>1. Politique proposée pour les revues qui offrent l'accès libre</h4>
Les auteurs qui publient dans cette revue acceptent les termes suivants : 
<ol type="a">
	<li>Les auteurs conservent le droit d'auteur et accordent à la revue le droit de première publication, l'ouvrage étant alors disponible simultanément, sous la licence <a target="_new" href="http://creativecommons.org/licenses/by/3.0/">Licence d’attribution Creative Commons</a> permettant à d'autres de partager l'ouvrage tout en en reconnaissant la paternité et la publication initiale dans cette revue.</li>
	<li>Les auteurs peuvent conclure des ententes contractuelles additionnelles et séparées pour la diffusion non exclusive de la version imprimée de l'ouvrage par la revue (par ex., le dépôt institutionnel ou la publication dans un livre), accompagné d'une mention reconnaissant sa publication initiale dans cette revue.</li>
	<li>Les auteurs ont le droit et sont encouragés à publier leur ouvrage en ligne (par ex., dans un dépôt institutionnel ou sur le site Web d'une institution) avant et pendant le processus de soumission, car cela peut mener à des échanges fructueux ainsi qu'à un nombre plus important, plus rapidement, de références à l’ouvrage publié (Voir <a target="_new" href="http://opcit.eprints.org/oacitation-biblio.html">The Effect of Open Access</a>).</li>
</ol>

<h4>Politique suggérée aux revues offrant l'accès libre différé</h4>
Les auteurs publiant dans cette revue acceptent les termes suivants :
<ol type="a">
	<li>Les auteurs détiennent le droit d'auteurs et accordent à la revue
le droit de première publication, avec l’ouvrage disponible simultanément [SPÉCIFIER LA PÉRIODE DE TEMPS] après publication, sous la licence <a target="_new" href="http://creativecommons.org/licenses/by/3.0/">Licence d’attribution Creative Commons </a> qui permet à d'autres de partager l'ouvrage en en reconnaissant la paternité et la publication initiale dans cette revue.</li>
	<li>Les auteurs peuvent conclure des ententes contractuelles additionnelles et séparées pour la diffusion non exclusive de la version imprimée de l'ouvrage par la revue (par ex., le dépôt institutionnel ou la publication dans un livre), accompagné d'une mention reconnaissant sa publication initiale dans cette revue.</li>
	<li> Les auteurs ont le droit et sont encouragés à publier leur ouvrage en ligne (par ex., dans un dépôt institutionnel ou sur le site Web d'une institution) avant et pendant le processus de soumission, car cela peut mener à des échanges fructueux ainsi qu'à un nombre plus important, plus rapidement, de références à l’ouvrage publié (Consulter <a target="_new" href="http://opcit.eprints.org/oacitation-biblio.html">The Effect of Open Access</a>).</li>
</ol>]]></message>
	<message key="manager.setup.referenceLinkingDescription"><![CDATA[<p>Afin de permettre aux lecteurs de repérer les versions en ligne de l'ouvrage cité par un auteur, les options suivantes sont disponibles.</p>

<ol>
	<li><strong>Ajouter un outil de lecture</strong><p>Le directeur de la revue peut ajouter « Trouver des références » aux Outils de lecture accompagnant les articles publiés, pour permettre aux lecteurs d'insérer le titre d'une référence et de rechercher l'ouvrage cité dans des bases de données universitaires présélectionnées.</p></li>
	<li><strong>Liens incorporés dans les références</strong><p>Le responsable de la mise en page peut ajouter un lien à des références en ligne, en suivant les instructions suivantes (qui peuvent être modifiées).</p></li>
</ol>]]></message>
	<message key="sectionEditor.review.enrollReviewer">Inscrire un utilisateur existant en tant qu'évaluateur</message>
	<message key="reviewer.article.restrictedFileAccess">La soumission sera disponible quand et si un évaluateur accepte d'effectuer l'évaluation</message>
	<message key="reviewer.competingInterests">Conflits d'intérêts</message>
	<message key="submission.layout.referenceLinking">Liens de référence</message>
	<message key="about.authorFees">Droits d'auteur</message>
	<message key="about.authorFeesMessage">Cette revue prélève les droits d'auteur suivants.</message>
	<message key="about.memberships">Adhésions</message>
	<message key="donations.thankYou">Merci</message>
	<message key="donations.thankYouMessage">Merci de votre contribution. Votre geste est très apprécié.</message>
	<message key="payment.loginRequired">Vous devez être connecté pour effectuer un paiement.</message>
	<message key="payment.loginRequired.forArticle">Un abonnement ou l'achat d'articles est requis pour accéder à l'article. Pour vérifier votre abonnement ou régler les frais, ouvrez une session dans la revue.</message>
	<message key="payment.loginRequired.forDonation">Vous devez vous connecter pour effectuer un don.</message>
	<message key="payment.paid">Payé</message>
	<message key="payment.payNow">Payer maintenant</message>
	<message key="payment.waive">Déroger</message>
	<message key="payment.alreadyPaid">Déjà payé</message>
	<message key="payment.alreadyPaidMessage">Sélectionner cette case si vous avez déjà envoyé votre paiement à la revue afin de compléter le processus de soumission. La soumission ne sera évaluée que sur réception du paiement. Cliquer sur PAYER MAINTENANT ci-dessus pour consulter les directives de paiement.</message>
	<message key="payment.paymentReceived">Paiement reçu</message>
	<message key="payment.paymentSent">Le paiement a déjà été envoyé</message>
	<message key="payment.type.submission">Frais de soumission</message>
	<message key="payment.type.publication">Frais de publication</message>
	<message key="payment.type.fastTrack">Frais d'évaluation accélérée</message>
	<message key="payment.type.membership">Frais d'adhésion individuelle</message>
	<message key="payment.type.subscription">Frais d'abonnement</message>
	<message key="payment.type.donation">Dons</message>
	<message key="payment.donation.makeDonation">Faire un don</message>
	<message key="payment.submission.paySubmission">Payer les frais de soumission</message>
	<message key="payment.fastTrack.payFastTrack">Payer pour le mode accéléré</message>
	<message key="payment.fastTrack.inFastTrack">en mode accéléré</message>
	<message key="payment.publication.payPublication">Payer pour publier</message>
	<message key="payment.publication.publicationPaid">Frais de publication payés</message>
	<message key="payment.membership.buyMembership">Acheter une adhésion individuelle</message>
	<message key="payment.membership.renewMembership">Renouveler une adhésion individuelle</message>
	<message key="payment.membership.ends">Se termine</message>
	<message key="payment.subscription.renew">Renouveler l'abonnement</message>
	<message key="payment.subscription.expires">Expire</message>
	<message key="rt.admin.settings.addComment">Ajouter des commentaires (permet aux lecteurs d'afficher des commentaires, le directeur de la revue pouvant les effacer).</message>
	<message key="rt.metadata.pkp.doi">Identifiant numérique d'objet</message>
	<message key="reviewer.article.reviewFormResponse.form.responseRequired">Veuillez remplir les champs obligatoires.</message>
	<message key="common.pageHeader.altText">En-tête de la page</message>
	<message key="common.homePageHeader.altText">En-tête de la page d'accueil</message>
	<message key="common.journalHomepageImage.altText">Image de la page d'accueil de la revue</message>
	<message key="article.coverPage.altText">Image de la page couverture</message>
	<message key="article.accessLogoOpen.altText">Accès libre</message>
	<message key="article.accessLogoRestricted.altText">Accès restreint</message>
	<message key="article.comments.sectionDefault">Par défaut</message>
	<message key="article.comments.disable">Désactiver</message>
	<message key="article.comments.enable">Activer</message>
	<message key="article.fontSize">Taille de police</message>
	<message key="article.fontSize.small.altText">Petite</message>
	<message key="article.fontSize.medium.altText">Moyenne</message>
	<message key="article.fontSize.large.altText">Grande</message>
	<message key="user.noRoles.chooseJournal">Votre compte n'est présentement associé à aucune revue. Prière de choisir une revue :</message>
	<message key="user.noRoles.noRolesForJournal">Votre compte n'a présentement aucun rôle pour cette revue. Prière de choisir parmi les actions ci-dessous :</message>
	<message key="user.noRoles.submitArticle">Soumettre une proposition</message>
	<message key="user.noRoles.submitArticleRegClosed">Soumettre un article : l'inscription d'auteur est présentement désactivée.</message>
	<message key="user.noRoles.regReviewer">S'inscrire en tant que qu'évaluateur</message>
	<message key="user.noRoles.regReviewerClosed">S'inscrire en tant que qu'évaluateur : l'inscription d'évaluateur est présentement désactivée.</message>
	<message key="issue.coverPage.altText">Page couverture</message>
	<message key="plugins.categories.implicitAuth">Plugiciels d'authentification implicite</message>
	<message key="help.searchReturnResults">Retourner aux résultats de recherche</message>
	<message key="submission.reviewForm">Formulaire d'évaluation</message>
	<message key="submission.reviewFormResponse">Réponse au formulaire d'évaluation</message>
	<message key="reviewer.article.enterReviewForm">Cliquez sur l'icône pour compléter le formulaire d'évaluation.</message>
	<message key="plugins.categories.implicitAuth.description">Les plugiciels d'authentification implicite mettent en place le soutien pour l'authentification des utilisateurs basée sur les en-têtes HTTP.</message>
	<message key="submission.layout.publicGalleyId">Identifiant de l'épreuve publique</message>
	<message key="submission.layout.galleyPublicIdentificationExists">l'identifiant de l'épreuve publique existe déjà.</message>
	<message key="about.aboutThisPublishingSystem.altText">Processus éditorial et d'édition d'OJS</message>
	<message key="payment.type.purchaseArticle">Frais d'achat de l'article</message>
	<message key="journal.issn">ISSN</message>
	<message key="article.article">Article</message>
	<message key="user.manageMySubscriptions">Gérer Mes abonnements</message>
	<message key="subscriptionTypes.currency">Devise</message>
	<message key="subscriptionTypes.year">année</message>
	<message key="subscriptionTypes.years">années</message>
	<message key="subscriptionTypes.months">mois</message>
	<message key="subscriptionTypes.format">Format</message>
	<message key="subscriptionTypes.month">mois</message>
	<message key="subscriptionTypes.nonExpiring">Sans échéance</message>
	<message key="subscriptionTypes.format.online">Numérique</message>
	<message key="subscriptionTypes.format.print">Imprimé</message>
	<message key="subscriptionTypes.format.printOnline">Imprimé et numérique</message>
	<message key="subscriptions.inactive">Inactif</message>
	<message key="subscriptions.status">Statut</message>
	<message key="subscriptions.status.active">Actif</message>
	<message key="subscriptions.status.needsInformation">En attente d'information</message>
	<message key="subscriptions.status.needsApproval">En attente d'approbation</message>
	<message key="subscriptions.status.awaitingManualPayment">En attente de paiement manuel</message>
	<message key="subscriptions.status.awaitingOnlinePayment">En attente de paiment en ligne</message>
	<message key="subscriptions.status.other">Autre, Voir Notes</message>
	<message key="subscriptions.individualDescription">Les abonnements individuels demandent ude se connecter pour avoir accès au contenu auquel on est abonné.</message>
	<message key="subscriptions.institutionalDescription">Les abonnements institutionnels ne demandent pas de se connecter. Le domaine et/ou l'adresse IP de l'utilisateur est utilisé afin de fournir l'accès au contenu auquel on est abonné.</message>
	<message key="subscriptions.institutionalOnlinePaymentDescription"><![CDATA[<strong>Note :</strong> Les abonnements institutionnels souscrits en ligne demandent une approbation du domaine et des intervalles d'adresses IP avant que l'abonnement soit activé.]]></message>
	<message key="subscriptionManager.individualSubscriptions">Abonnements individuels</message>
	<message key="subscriptionManager.institutionalSubscriptions">Abonnements institutionnels</message>
	<message key="subscriptionManager.subscriptionTypes">Types d'abonnement</message>
	<message key="plugins.categories.oaiMetadataFormats">Plugiciels du format de métadonnées OAI</message>
	<message key="plugins.categories.oaiMetadataFormats.description">Ces plugiciels de format émettent les métadonnées en communications OAI.</message>
	<message key="manager.setup.reviewProcessEmailDescription">Les rédacteurs envoient aux évaluateurs la demande d'évaluation avec la soumission jointe au courriel. Les évaluateurs envoient par courriel leur acceptation (ou refus), ainsi que l'évaluation et la recommandation. Les rédacteurs inscrivent l'acceptation (ou refus) des évaluateurs, ainsi que l'évaluation et la recommandation sur la page d'évaluation de la soumission, afin de consigner le processus d'évaluation.</message>
	<message key="manager.setup.subjectClassificationDescription"><![CDATA[La revue utilisera un système de classification sujet disponible sur le Web.<br />
Titre du système de classification]]></message>
	<message key="manager.setup.citations">Permet aux auteurs de fournir séparément une liste structurée de références (citations) comme partie intégrante de leur soumission.</message>
	<message key="manager.setup.basicEditorialStepsDescription"><![CDATA[Étapes : Soumission en attente &gt; Soumission en évaluation &gt; Soumission en révision &gt; Table des matières.<br /><br />]]></message>
	<message key="manager.people.confirmDisable">Désactiver cet utilisateur? Ceci empêchera l'utilisateur de se connecter au système. Vous pouvez optionnellement fournir à l'utilisateur une raison expliquant la désactivation de son compte.</message>
	<message key="editor.submissionReview.notes"><![CDATA[<ol>
	<li>Les éléments surlignés indiquent qu'une action du rédacteur est nécessaire.</li>
	<li>"Échéance" est rempli quand un évaluateur accepte une demande d'évaluation; ça affiche le nombre de semaines qu'il reste jusqu'à la date d'échéance de l'évaluation ou (-) de semaines de retard.</li>
</ol>]]></message>
	<message key="reviewer.article.reviewGuidelinesDescription">Les directives pour l'évaluation fourniront aux évaluateurs des critères pour juger de la pertinence d'une soumission pour fins de publication dans la revue, et peuvent inclure toutes instructions spéciales nécessaires à la préparation d'une évaluation efficace et utile. En effectuant l'évaluation, les évaluateurs se font présenter deux boîtes de texte, la première "pour l'auteur et le rédacteur" et la deuxième "pour le rédacteur." Alternativement, le directeur de la revue peut créer un formulaire d'évaluation par les pairs sous Formulaires d'évaluation. Dans tous les cas, les rédacteurs auront l'option d'inclure les évaluations dans leur correspondance avec l'auteur.</message>
	<message key="reviewer.article.enterCompetingInterests"><![CDATA[Déclarer si vous êtes en conflit d'intérêts en ce qui concerne cette recherche (voir <a target="_new" class="action" href="{$competingInterestGuidelinesUrl}">Politique de CI</a>).]]></message>
	<message key="reviewer.article.selectRecommendation">Choisir une recommandation et soumettre l'évaluation pour compléter le processus. Vous devez écrire une évaluation ou télécharger un fichier avant de choisir une recommandation.</message>
	<message key="user.subscriptions.mySubscriptions">Mes abonnements</message>
	<message key="user.subscriptions.individualSubscriptions">Abonnement individuel</message>
	<message key="user.subscriptions.institutionalSubscriptions">Abonnements institutionnels</message>
	<message key="user.subscriptions.renew">Renouveler</message>
	<message key="user.subscriptions.purchase">Souscrire</message>
	<message key="user.subscriptions.purchaseNewSubscription">Souscrire à un nouvel abonnement</message>
	<message key="user.subscriptions.purchaseIndividualSubscription">Souscrire à un abonnement individuel</message>
	<message key="user.subscriptions.purchaseInstitutionalSubscription">Souscrire à un abonnement institutionnel</message>
	<message key="user.subscriptions.expires">Expire</message>
	<message key="user.subscriptions.expired">Expiré</message>
	<message key="user.subscriptions.viewSubscriptionTypes">Afficher les types d'abonnement disponibles</message>
	<message key="user.subscriptions.form.typeId">Type d'abonnement</message>
	<message key="user.subscriptions.form.membership">Adhésion</message>
	<message key="user.subscriptions.form.membershipRequired">Le type d'abonnement sélectionné nécessite des informations d'adhésion.</message>
	<message key="user.subscriptions.form.typeIdValid">Veuillez sélectionner un type d'abonnement valide.</message>
	<message key="user.subscriptions.form.subscriptionExists">Ce compte utilisateur a déjà un abonnement individuel.</message>
	<message key="user.subscriptions.form.membershipInstructions">Information d'adhésion, si obligatoire pour le type d'abonnement sélectionné.</message>
	<message key="user.subscriptions.form.institutionName">Nom de l'institution</message>
	<message key="user.subscriptions.form.institutionNameRequired">Le nom de l'institution est obligatoire.</message>
	<message key="user.subscriptions.form.institutionMailingAddress">Adresse de courriel</message>
	<message key="user.subscriptions.form.domain">Domaine</message>
	<message key="user.subscriptions.form.domainInstructions">Si un domaine est saisi ici, les intervalles d'adresses IP sont facultatifs.</message>
	<message key="user.subscriptions.form.domainIPRangeRequired">Le type d'abonnement sélectionné nécessite un domaine et/ou un intervalle d'adresses IP pour l'authentification d'abonnement.</message>
	<message key="user.subscriptions.form.domainValid">Veuillez saisir un domaine valide.</message>
	<message key="user.subscriptions.form.ipRange">Intervalles d'adresses IP</message>
	<message key="user.subscriptions.form.ipRangeItem"><![CDATA[&#8226;]]></message>
	<message key="user.subscriptions.form.ipRangeInstructions"><![CDATA[Si des intervalles d'adresses IP sont saisis ici, le domaine est facultatif.<br />Les valeurs valides incluent une adresse IP (par ex. 142.58.103.1), un intervalle d'adresses IP (par ex. 142.58.103.1 - 142.58.103.4), un intervalle d'adresses IP avec troncature '*' (par ex. 142.58.*.*), et un intervalle d'adresses IP avec CIDR (par ex. 142.58.100.0 /24).]]></message>
	<message key="user.subscriptions.form.ipRangeValid">Veuillez saisir un intervalle d'adresses IP valide.</message>
	<message key="user.subscriptions.form.deleteIpRange">Supprimer</message>
	<message key="user.subscriptions.form.addIpRange">Ajouter</message>
	<message key="about.history">Historique de la revue</message>
	<message key="about.subscriptions.individual">Abonnements individuels</message>
	<message key="about.subscriptions.institutional">Abonnements institutionnels</message>
	<message key="about.subscriptionTypes.name">Nom</message>
	<message key="about.subscriptionTypes.format">Format</message>
	<message key="about.subscriptionTypes.duration">Durée</message>
	<message key="about.subscriptionTypes.cost">Coût</message>
	<message key="payment.subscription.purchase">Souscrire à un abonnement</message>
	<message key="installer.installApplication">Installer Open Journal Systems</message>
	<message key="installer.upgradeApplication">Mettre à jour Open Journal Systems</message>
	<message key="rt.admin.validateUrls.description"><![CDATA[Des URLs de sites de recherche possiblement invalides sont affichés ci-dessous.<br/>
Vous devriez vérifier manuellement tous les URLs indentifiés comme invalides, car ce test n'est pas fiable à 100%.<br/>
La validation peut échouer sur les URL de recherche qui nécessitent des formulaires de données enregistrés.]]></message>
	<message key="notification.mailListDescription">Saisir votre adresse de courriel pour être avisé immédiatement de tout nouveau contenu important ajouté à la revue.</message>
	<message key="notification.notificationsPublicDescription"><![CDATA[Cette page montre les mises à jour importantes associées avec cette revue tel que les nouvelles parutions et les annonces. Vous pouvez vous abonner à ces avis par l'intermédiaire des flux RSS (en cliquant sur les images à droite), ou <a href="{$emailUrl}">par courriel.</a>]]></message>
	<message key="notification.type.articleSubmitted">Un nouvel article, "{$title}", a été soumis.</message>
	<message key="notification.type.copyeditComment">Un réviseur a laissé un commentaire sur "{$title}".</message>
	<message key="notification.type.editing">Événements de révision</message>
	<message key="notification.type.editorDecisionComment">Un commentaire a été laissé concernant la décision du rédacteur pour "{$title}".</message>
	<message key="notification.type.galleyModified">Une épreuve a été modifiée pour "{$title}".</message>
	<message key="notification.type.issuePublished">Un numéro a été publié.</message>
	<message key="notification.type.layoutComment">Un commentaire a été laissé à propos de la mise en page de "{$title}".</message>
	<message key="notification.type.metadataModified">Les métadonnées de "{$title}" ont été modifiées.</message>
	<message key="notification.type.newAnnouncement">Une nouvelle annonce a été créée</message>
	<message key="notification.type.proofreadComment">Un commentaire a été laissé par un correcteur d'épreuves sur "{$title}".</message>
	<message key="notification.type.reviewerComment">Un évaluateur a écrit un commentaire sur "{$title}".</message>
	<message key="notification.type.reviewerFormComment">Une évaluation de formulaire d'évaluation a été soumise pour "{$title}".</message>
	<message key="notification.type.reviewing">Événements d'évaluation</message>
	<message key="notification.type.site">Événements du site</message>
	<message key="notification.type.submissionComment">Un rédacteur a fait un commentaire sur "{$title}".</message>
	<message key="notification.type.submissions">Événements de soumission</message>
	<message key="notification.type.suppFileModified">Le (ou les) fichier(s) supplémentaire(s) de "{$title}" a (ont) été modifié(s).</message>
	<message key="notification.type.userComment">Un lecteur a fait un commentaire sur "{$title}"</message>
	<message key="debug.notes.helpMappingLoad">Fichier de mappage d'aide XML {$filename} rechargé à la recherche de {$id}.</message>
	<message key="article.pdf.pluginMissing"><![CDATA[<p>Le fichier PDF que vous avez sélectionné devrait s'afficher ici si votre navigateur Web a un plugiciel de lecture PDF d'installé (par exemple, une version récente de <a href="https://get.adobe.com/reader/">Adobe Acrobat Reader</a>).</p> <p>Sinon, vous pouvez également télécharger directement le fichier PDF sur votre poste de travail, où il peut être ouvert à l'aide d'un outil de lecture PDF. Pour télécharger le PDF, cliquer sur le lien Télécharger ci-dessous.</p> <p>Si vous désirez avoir plus d'information concernant l'impression, l'enregistrement et l'édition des fichiers PDF, Highwire Press fournit un <a href="http://highwire.stanford.edu/help/pdf-faq.dtl">FAQ (Frequently Asked Questions) à propos des PDF)</a> très utile.</p>]]></message>
	<message key="user.register.reviewerInterests">Identifier les intérêts d'évaluation (questions de fond et méthodes de recherche) :</message>
	<message key="user.subscriptions.subscriptionStatus">Statut de l'abonnement</message>
	<message key="user.subscriptions.statusInformation">Les abonnements actifs et échus sont affichés ci-dessous avec leur date d'expiration. De plus, les informations suivantes sur le statut peuvent être incluses avec chaque abonnement.</message>
	<message key="user.subscriptions.status">Statut</message>
	<message key="user.subscriptions.statusDescription">Description</message>
	<message key="user.subscriptions.status.needsInformationDescription">Des informations supplémentaires sont nécessaires avant l'activation de l'abonnement</message>
	<message key="user.subscriptions.status.needsApprovalDescription">L'abonnement doit être étudié avant d'être activé</message>
	<message key="user.subscriptions.status.awaitingManualPaymentDescription">Le paiement manuel a été initié mais n'a pas encore été reçu</message>
	<message key="user.subscriptions.status.awaitingOnlinePaymentDescription">Un paiement en ligne a été initié mais annulé ou non complété</message>
	<message key="article.pdf.download">Télécharger ce fichier PDF</message>
	<message key="payment.authorFees">Droits d'auteur</message>
	<message key="navigation.categories">Catégories</message>
	<message key="navigation.categories.browse">Naviguer</message>
	<message key="issue.fullIssue">L'ensemble du numéro</message>
	<message key="issue.nonpdf.title">Téléchargement du numéro</message>
	<message key="issue.viewIssue">Voir le numéro</message>
	<message key="issue.viewIssueDescription">Voir ou télécharger l'ensemble du numéro</message>
	<message key="plugins.categories.pubIds">Plugiciels pour identifiant public??</message>
	<message key="plugins.categories.pubIds.description">Ces plugiciels permettent la mise en place d'un identifiant public??</message>
	<message key="editor.submissionEditing.notes"><![CDATA[<ol>   <![CDATA[<ol>   <li>Les éléments surlignés indiquent qu'une action du rédacteur est requise, tel qu'indiqué :   <ul>]]></message>
	<message key="site.noJournals">Il n'y a pas de revue disponible.</message>
	<message key="gifts.buyer">De</message>
	<message key="gifts.buyerDescription">De qui est ce cadeau?</message>
	<message key="gifts.recipient">À</message>
	<message key="gifts.recipientDescription">À qui est destiné ce cadeau?</message>
	<message key="gifts.thankYou">Merci</message>
	<message key="gifts.thankYouMessage">La procédure d'achat cadeau est complétée. Vous recevrez une copie du courriel d'accompagnement envoyé au bénéficiaire après traitement de votre règlement.</message>
	<message key="gifts.purchaseGiftIndividualSubscription">Abonnement en cadeau</message>
	<message key="gifts.subscriptionFormIntroduction">Veuillez remplir le formulaire ci-dessous et fournir les coordonnées demandées. Le bénéficiaire recevra votre carte-cadeau par courriel et sera avisé de l'abonnement offert.</message>
	<message key="gifts.details">Description du cadeau</message>
	<message key="gifts.detailsDescription">Veuillez sélectionner le cadeau ci-dessous et fournir un message personnalisé qui sera envoyé par courriel au bénéficiaire (vous recevrez une copie de ce courriel).</message>
	<message key="gifts.gift">Cadeau</message>
	<message key="gifts.noteTitle">Titre</message>
	<message key="gifts.note">Carte-cadeau</message>
	<message key="gifts.noteTitleRequired">Veuillez donner un titre à votre message personnalisé.</message>
	<message key="gifts.noteRequired">Veuillez rédiger un message personnalisé.</message>
	<message key="gifts.localeRequired">Veuillez sélectionner la langue de votre message personnalisé.</message>
	<message key="gifts.myGifts">Mes cadeaux</message>
	<message key="gifts.manageMyGifts">Gérer mes cadeaux</message>
	<message key="gifts.redeemGift">Valider un cadeau</message>
	<message key="gifts.status.notRedeemed">Disponible</message>
	<message key="gifts.status.redeemed">Validé</message>
	<message key="gifts.status.redeemGift">Cadeau validé</message>
	<message key="gifts.subscriptions">Abonnements</message>
	<message key="gifts.subscriptionsDescription">La validation ici d'un abonnement en cadeau rendra caduque votre abonnement actuel (si vous en avez un). L'abonnement sera valide du jour de la validation au terme de la durée stipulée selon le type d'abonnement offert.</message>
	<message key="gifts.purchaseGiftSubscription">Offrir un abonnement en cadeau</message>
	<message key="gifts.giftSubscriptionsAvailable">Il est aussi possible d'offrir un abonnement en cadeau, que le bénéficiaire sera libre de valider en tout temps. Voilà un excellent moyen de soutenir cette revue!</message>
	<message key="gifts.noSubscriptions">Pas d'abonnement en cadeau</message>
	<message key="gifts.giftRedeemed">Le cadeau a été validé avec succès.</message>
	<message key="gifts.noGiftToRedeem">Ce cadeau ne peut être validé</message>
	<message key="gifts.giftAlreadyRedeemed">Ce cadeau a déjà été validé.</message>
	<message key="gifts.giftNotValid">Ce cadeau n'est pas valide et ne peut être validé.</message>
	<message key="gifts.subscriptionTypeNotValid">La formule cadeau sélectionnée ne permet pas ce type d'abonnement. Veuillez contacter le responsable des abonnements.</message>
	<message key="gifts.subscriptionNonExpiring">Le cadeau n'a pu être validé en raison de votre abonnement illimité à cette revue.</message>
	<message key="payment.loginRequired.forIssue">Vous devez être abonné ou acheter le numéro correspondant pour accéder à cet article. Pour consulter les modalités de votre abonnement, votre dernier achat ou acheter un numéro, connectez-vous au site de la revue.</message>
	<message key="payment.type.purchaseIssue">Tarif au numéro</message>
	<message key="payment.type.gift">Cadeau</message>
	<message key="payment.type.gift.subscription">Abonnement</message>
	<message key="installer.maxFileUploadSize"><![CDATA[Votre serveur permet actuellement le téléchargement de fichiers : <strong>{$maxFileUploadSize}</strong>]]></message>
	<message key="site.upgradeAvailable.admin"><![CDATA[Une nouvelle version d'OJS est maintenant disponible! Vous utilisez actuellement OJS {$currentVersion}. La dernière version est OJS {$latestVersion}. Allez à <a href="http://pkp.sfu.ca/ojs_download" target="_new">this page</a> pour télécharger la dernière version d'OJS et voir les instructions concernant la mise à jour.]]></message>
	<message key="site.upgradeAvailable.manager"><![CDATA[Une nouvelle version d'OJS est maintenant disponible! Vous utilisez actuellement OJS {$currentVersion}. La dernière version est OJS {$latestVersion}. Contactez votre administrateur de site ({$siteAdminName}, <a href="mailto:{$siteAdminEmail}">{$siteAdminEmail}</a>) afin de les aviser de cette nouvelle version. Pour plus d'information, cliquez <a href="http://pkp.sfu.ca/ojs_download" target="_new">ici</a>.]]></message>
	<message key="installer.allowFileUploads"><![CDATA[Votre serveur permet actuellement le téléchargement de fichiers : <strong>{$allowFileUploads}</strong>]]></message>
	<message key="user.authorization.copyeditorAssignmentMissing">Accès refusé! Vous n'avez pas été nommé rédacteur/éditeur de cet article.</message>
	<message key="user.authorization.noJournal">Pas de revue en contexte!</message>
	<message key="user.authorization.sectionAssignment">Vous tentez d'accéder à un article qui ne fait pas partie de votre section.</message>
	<message key="user.authorization.invalidCopyditorSubmission">Dépôt du rédacteur non valide ou non requis!</message>
	<message key="user.authorization.invalidSectionEditorSubmission">Dépôt du chef de rubrique non valide ou non requis!</message>
	<message key="common.journal">Revue</message>
	<message key="user.profile.profileImage">Image du profil</message>
	<message key="submission.permissions">Droits d'accès</message>
	<message key="submission.license">Licence</message>
	<message key="submission.copyright">Droit d'auteur</message>
	<message key="submission.copyrightHolder">Détenteur des droits d'auteur</message>
	<message key="submission.copyrightYear">Année du droit d'auteur</message>
	<message key="submission.copyrightStatement">Droit d'auteur (c) {$copyrightYear}, {$copyrightHolder}</message>
	<message key="submission.licenseURLValid">Veuillez fournir une adresse URL distante valide (inclure http://).</message>
	<message key="submission.licenseURL">Adresse URL de la licence</message>
	<message key="submission.license.cc.by-nc-nd4">Creative Commons Attribution - Pas d'Utilisation Commerciale - Pas de Modification 4.0</message>
	<message key="submission.license.cc.by-nc4">Creative Commons Attribution - Pas d’Utilisation Commerciale 4.0</message>
	<message key="submission.license.cc.by-nc-sa4">Creative Commons Attribution - Pas d’Utilisation Commerciale - Partage dans les Mêmes Conditions 4.0</message>
	<message key="submission.license.cc.by-nd4">Creative Commons Attribution - Pas de Modification 4.0</message>
	<message key="submission.license.cc.by4">Creative Commons Attribution 4.0</message>
	<message key="submission.license.cc.by-sa4">Creative Commons Attribution - Partage dans les Mêmes Conditions 4.0</message>
	<message key="submission.license.cc.by-nc-nd4.footer"><![CDATA[<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Licence Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a><br />Ce(tte) œuvre est mise à disposition selon les termes de la <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Licence Creative Commons Attribution - Pas d&#39;Utilisation Commerciale - Pas de Modification 4.0 International</a>.]]></message>
	<message key="submission.license.cc.by-nc4.footer"><![CDATA[<a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Licence Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br />Ce(tte) œuvre est mise à disposition selon les termes de la <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Licence Creative Commons Attribution - Pas d’Utilisation Commerciale 4.0 International</a>.]]></message>
	<message key="submission.license.cc.by-nc-sa4.footer"><![CDATA[<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Licence Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br />Ce(tte) œuvre est mise à disposition selon les termes de la <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Licence Creative Commons Attribution - Pas d’Utilisation Commerciale - Partage dans les Mêmes Conditions 4.0 International</a>.]]></message>
	<message key="submission.license.cc.by-nd4.footer"><![CDATA[<a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/"><img alt="Licence Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nd/4.0/88x31.png" /></a><br />Ce(tte) œuvre est mise à disposition selon les termes de la <a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/">Licence Creative Commons Attribution - Pas de Modification 4.0 International</a>.]]></message>
	<message key="submission.license.cc.by4.footer"><![CDATA[<a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Licence Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br />Ce(tte) œuvre est mise à disposition selon les termes de la <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Licence Creative Commons Attribution 4.0 International</a>.]]></message>
	<message key="submission.license.cc.by-sa4.footer"><![CDATA[<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Licence Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br />Ce(tte) œuvre est mise à disposition selon les termes de la <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Licence Creative Commons Attribution -  Partage dans les Mêmes Conditions 4.0 International</a>.]]></message>
	<message key="user.orcid">Identifiant ORCID</message>
	<message key="user.profile.form.orcidInvalid">L'identifiant ORCID que vous avez fourni n'est pas valide.</message>
	<message key="user.orcid.description"><![CDATA[Les identifiants ORCID doivent être assignés par le <a href="http://orcid.org/" target="_blank">registre d'ORCID</a>. Vous devez vous conformer à leur normes pour le format des indentifiants ORCID; vous devez également inclure l'identifiant uniforme de ressource (URI) au complet (par exemple, <em>http://orcid.org/0000-0002-1825-0097</em>).]]></message>
</locale>
