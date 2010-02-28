<?php
       
        $wlpe_lang = array();
       
        //WebLoginPE Class language strings.
        $wlpe_lang['required_blank'] = 'Certains champs requis sont manquants.';
        $wlpe_lang['long_username'] = 'Votre nom d\'utilisateur est trop long. Maximum 20 caract�res.';
        $wlpe_lang['mismatched_fields'] = 'Les mots de passe sont diff�rents. Veuillez les r��crire.';
        $wlpe_lang['short_password'] = 'Votre mot de passe est trop court. Veuillez utiliser au minimum 6 lettres ou chiffres.';
        $wlpe_lang['illegal_password'] = 'Votre mot de passe contient de caract�res non valide. Veuillez n\'utiliser que des lettres[a-z][A-Z] et chiffres[0-9].';
        $wlpe_lang['blank_fields'] = 'Certains champs requis sont manquants.';
        $wlpe_lang['bad_code'] = 'Le code du formulaire est incorrect. Veuillez entrer le code affich� sur l\'image.';
        $wlpe_lang['username_used'] = 'D�sol�, ce nom d\'utilisateur est d�j� utilis�. Veuillez en choisir un autre.';
        $wlpe_lang['email_used'] = 'D�sol�, cette adresse de courriel est d�j� utilis�. Vous ne pouvez pas l\'utiliser � nouveau.';
        $wlpe_lang['register_error'] = 'Une erreur est survenue lors de votre inscription.';
        $wlpe_lang['save_error'] = 'Une erreur est survenue lors de l\'enregistrement de votre profil.';
        $wlpe_lang['groups_error'] = 'Une erreur est survenue lors du changement de groupe Web.';
        $wlpe_lang['email_error'] = 'Une erreur est survenue lors de l\'envoie du courriel. Veuillez contacter l\'administrateur du site.';
        $wlpe_lang['delete_error'] = 'Un probl�me est survenue lors de la suppression de votre compte.';
        $wlpe_lang['no_account'] = 'Il n\'y a pas de compte actif avec cette adresse de courriel';
        $wlpe_lang['error_loading'] = 'Une erreur est survenue lors du chargement des utilisateurs. Veuillez contacter l\'administrateur du site.';
        $wlpe_lang['invalid_activation'] = 'Le mot de passe ou la cl� d\'activation n\'est pas valide. Votre compte n\'est PAS activ�.';
        $wlpe_lang['activation_error'] = 'Une erreur est survenue lors de l\'activation du mot de passe. D�sol�.';
        $wlpe_lang['bad_password'] = 'Le mot de passe est incorrect. R�essayer.';
        $wlpe_lang['blocked'] = 'Vous avez �chou� trop de fois. Vous avez �t� bloqu�. Vous pouvez r�essayer dans [+000+] minutes.';
        $wlpe_lang['failed_count'] = '<p>Votre mot de passe est incorrect.</p><p>Vous avez �chou� [+000+] fois. Vous serez bloqu� pour [+111+] minutes apr�s [+222+] tentatives �chou�es.</p><p>Veuillez r�essayer.</p><p>Avez-vous <a href="[~[*id*]~]&service=forgot">oubli�</a> votre mot de passe?</p>';
        $wlpe_lang['bad_username'] = 'Ce nom d\'utilisateur n\'existe pas.';
        $wlpe_lang['too_many_failed'] = 'Vous avez �chou� trop de fois. Vous avez �t� bloqu�!';
        $wlpe_lang['blocked_by_admin'] = 'Vous �tes bloqu� et ne pouvez pas vous connecter!';
        $wlpe_lang['blocked_until'] = 'Vous ne pouvez pas vous connecter pour l\'instant. Vous �tes bloqu� pour encore [+000+] minutes.';
        $wlpe_lang['bad_location'] = 'Vous n\'�tes pas autoris� � vous connecter de cet endroit.';
        $wlpe_lang['bad_time'] = 'Vous n\'�tes pas autoris� � vous connecter pour le moment. R�essayer plus tard.';
        $wlpe_lang['bad_date_format'] = 'Le format de votre date de naissance n\'est pas valide. Veuillez utilis� le format suivant: MM-JJ-AAAA';
        $wlpe_lang['big_photo'] = 'Votre photo est trop grosse. Son poid doit �tre inf�rieur � 100ko';
        $wlpe_lang['failed_image_upload'] = 'Impossible de transf�rer votre photo. Veuillez contacter un administrateur � propos des permissions du dossier d\'envoi.';
        $wlpe_lang['photo_type'] = 'Vous devez choisir une image de type "image/jpeg", "image/gif", or "image/png".';
        $wlpe_lang['bad_chunk'] = 'Le chunk n\'existe pas ou ne contient aucune donn�es. Veuillez v�rifier l\'orthographe. Le mod�le par d�faut sera utilis�.';
        $wlpe_lang['illegal username'] = 'Votre nom d\'utilisateur contient des caract�res non valides. Veuillez utilis� seulement des lettres[a-z][A-Z] et des chiffres[0-9].';
        $wlpe_lang['unknown'] = 'Inconnu.';
        $wlpe_lang['TOS'] = 'Vous devez accepter les termes d\'utilisation.';
        $wlpe_lang['pruned_subject'] = 'An non-activated user has been deleted';
        $wlpe_lang['pruned_message'] = 'The user "[+000+]" has been deleted. "[+000+]" Registered on [+111+] and did not activate the account by logging in.';
        $wlpe_lang['message_sent'] = 'Your message has been sent to ';
        $wlpe_lang['private'] = 'Private';
        $wlpe_lang['country'] = 'Country';
        $wlpe_lang['gender'] = 'Gender';
        $wlpe_lang['online'] = 'Online';
        $wlpe_lang['offline'] = 'Offline';
       
        //Snippet Strings
        $wlpe_lang['check_email_new_account'] = 'V�rifier votre bo�te de courriel pour avoir les d�tails sur votre compte. Si vous ne recevez pas de courriel, contactez l\'administrateur du site ';
        $wlpe_lang['profile_updated'] = 'Votre profil a �t� mis � jour.';
        $wlpe_lang['profile_deleted'] = 'Votre profil a �t� effac�.';
        $wlpe_lang['check_email_new_password'] = 'V�rifier votre boite de courriel pour avoir les instructions de changement de mot de passe.';
        $wlpe_lang['new_password_activated'] = 'Votre nouveau mot de passe a �t� mis � jour.';
        $wlpe_lang['bad_langfile'] = 'Le fichier de langue sp�cifi� n\'existe pas. Le fichier anglais sera utilis� � la place.';
?>

