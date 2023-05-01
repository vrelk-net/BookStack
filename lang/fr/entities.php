<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Créé récemment',
    'recently_created_pages' => 'Pages créées récemment',
    'recently_updated_pages' => 'Pages mises à jour récemment',
    'recently_created_chapters' => 'Chapitres créés récemment',
    'recently_created_books' => 'Livres créés récemment',
    'recently_created_shelves' => 'Étagères créés récemment',
    'recently_update' => 'Mis à jour récemment',
    'recently_viewed' => 'Vus récemment',
    'recent_activity' => 'Activité récente',
    'create_now' => 'En créer une maintenant',
    'revisions' => 'Révisions',
    'meta_revision' => 'Révision #:revisionCount',
    'meta_created' => 'Créé :timeLength',
    'meta_created_name' => 'Créé :timeLength par :user',
    'meta_updated' => 'Mis à jour :timeLength',
    'meta_updated_name' => 'Mis à jour :timeLength par :user',
    'meta_owned_name' => 'Appartient à :user',
    'meta_reference_page_count' => 'Référencé sur :count page|Référencé sur :count pages',
    'entity_select' => 'Sélectionner l\'entité',
    'entity_select_lack_permission' => 'Vous n\'avez pas les permissions requises pour sélectionner cet élément',
    'images' => 'Images',
    'my_recent_drafts' => 'Mes brouillons récents',
    'my_recently_viewed' => 'Vus récemment',
    'my_most_viewed_favourites' => 'Mes favoris les plus vus',
    'my_favourites' => 'Mes favoris',
    'no_pages_viewed' => 'Vous n\'avez rien visité récemment',
    'no_pages_recently_created' => 'Aucune page créée récemment',
    'no_pages_recently_updated' => 'Aucune page mise à jour récemment',
    'export' => 'Exporter',
    'export_html' => 'Fichiers web',
    'export_pdf' => 'Fichier PDF',
    'export_text' => 'Document texte',
    'export_md' => 'Fichiers Markdown',

    // Permissions and restrictions
    'permissions' => 'Autorisations',
    'permissions_desc' => 'Définissez ici les permissions pour remplacer les permissions par défaut fournies par les rôles d\'utilisateur.',
    'permissions_book_cascade' => 'Les permissions définies sur les livres seront automatiquement mises en cascade dans les chapitres enfants et les pages, à moins qu\'elles aient leurs propres permissions définies.',
    'permissions_chapter_cascade' => 'Les permissions définies sur les chapitres seront automatiquement mises en cascade sur les pages enfants, à moins qu\'elles aient leurs propres permissions définies.',
    'permissions_save' => 'Enregistrer les permissions',
    'permissions_owner' => 'Propriétaire',
    'permissions_role_everyone_else' => 'Tous les autres',
    'permissions_role_everyone_else_desc' => 'Définir les permissions pour tous les rôles qui ne sont pas spécifiquement remplacés.',
    'permissions_role_override' => 'Remplacer les permissions pour le rôle',
    'permissions_inherit_defaults' => 'Hériter les valeurs par défaut',

    // Search
    'search_results' => 'Résultats de recherche',
    'search_total_results_found' => ':count résultats trouvés|:count résultats trouvés au total',
    'search_clear' => 'Réinitialiser la recherche',
    'search_no_pages' => 'Aucune page correspondant à cette recherche',
    'search_for_term' => 'recherche pour :term',
    'search_more' => 'Plus de résultats',
    'search_advanced' => 'Recherche avancée',
    'search_terms' => 'Mot-clé',
    'search_content_type' => 'Type de contenu',
    'search_exact_matches' => 'Correspondances exactes',
    'search_tags' => 'Recherche par mots-clés',
    'search_options' => 'Options',
    'search_viewed_by_me' => 'Vu par moi',
    'search_not_viewed_by_me' => 'Non vu par moi',
    'search_permissions_set' => 'Ensemble d\'autorisations',
    'search_created_by_me' => 'Créé par moi',
    'search_updated_by_me' => 'Mis à jour par moi',
    'search_owned_by_me' => 'Créés par moi',
    'search_date_options' => 'Recherche par date',
    'search_updated_before' => 'Mis à jour avant',
    'search_updated_after' => 'Mis à jour après',
    'search_created_before' => 'Créé avant',
    'search_created_after' => 'Créé après',
    'search_set_date' => 'Choisir la date',
    'search_update' => 'Actualiser la recherche',

    // Shelves
    'shelf' => 'Étagère',
    'shelves' => 'Étagères',
    'x_shelves' => ':count Étagère|:count Étagères',
    'shelves_empty' => 'Aucune étagère n\'a été créée',
    'shelves_create' => 'Créer une nouvelle étagère',
    'shelves_popular' => 'Étagères populaires',
    'shelves_new' => 'Nouvelles étagères',
    'shelves_new_action' => 'Nouvelle étagère',
    'shelves_popular_empty' => 'Les étagères les plus populaires apparaîtront ici.',
    'shelves_new_empty' => 'Les étagères les plus récentes apparaitront ici.',
    'shelves_save' => 'Enregistrer l\'étagère',
    'shelves_books' => 'Livres sur cette étagère',
    'shelves_add_books' => 'Ajouter des livres sur cette étagère',
    'shelves_drag_books' => 'Déposez des livres ici pour les ajouter a cette étagère',
    'shelves_empty_contents' => 'Aucun livre n\'a été assigné à cette étagère',
    'shelves_edit_and_assign' => 'Modifier cette étagère pour y ajouter des livres',
    'shelves_edit_named' => 'Modifier l\'étagère :name',
    'shelves_edit' => 'Modifier l\'étagère',
    'shelves_delete' => 'Supprimer l\'étagère',
    'shelves_delete_named' => 'Supprimer l\'étagère :name',
    'shelves_delete_explain' => "Ceci va supprimer l'étagère nommée ':name'. Les livres contenus dans cette étagère ne seront pas supprimés.",
    'shelves_delete_confirmation' => 'Êtes-vous sûr(e) de vouloir supprimer cette étagère ?',
    'shelves_permissions' => 'Enregistrer les permissions',
    'shelves_permissions_updated' => 'Permissions de l\'étagère mises à jour',
    'shelves_permissions_active' => 'Permissions de l\'étagère activées',
    'shelves_permissions_cascade_warning' => 'Les permissions sur les étagères ne sont pas automatiquement recopiées aux livres qu\'elles contiennent, car un livre peut exister dans plusieurs étagères. Les permissions peuvent cependant être recopiées vers les livres contenus en utilisant l\'option ci-dessous.',
    'shelves_copy_permissions_to_books' => 'Copier les permissions vers les livres',
    'shelves_copy_permissions' => 'Copier les permissions',
    'shelves_copy_permissions_explain' => 'Ceci va appliquer les permissions actuelles de cette étagère à tous les livres qu\'elle contient. Avant de continuer, assurez-vous que toutes les permissions de cette étagère ont été sauvegardées.',
    'shelves_copy_permission_success' => 'Permissions de l\'étagère transférées à :count livres',

    // Books
    'book' => 'Livre',
    'books' => 'Livres',
    'x_books' => ':count livre|:count livres',
    'books_empty' => 'Aucun livre n\'a été créé',
    'books_popular' => 'Livres populaires',
    'books_recent' => 'Livres récents',
    'books_new' => 'Nouveaux livres',
    'books_new_action' => 'Nouveau livre',
    'books_popular_empty' => 'Les livres les plus populaires apparaîtront ici.',
    'books_new_empty' => 'Les livres les plus récents apparaitront ici.',
    'books_create' => 'Créer un nouveau livre',
    'books_delete' => 'Supprimer un livre',
    'books_delete_named' => 'Supprimer le livre :bookName',
    'books_delete_explain' => 'Ceci va supprimer le livre nommé \':bookName\', tous les chapitres et pages seront supprimés.',
    'books_delete_confirmation' => 'Êtes-vous sûr(e) de vouloir supprimer ce livre ?',
    'books_edit' => 'Modifier le livre',
    'books_edit_named' => 'Modifier le livre :bookName',
    'books_form_book_name' => 'Nom du livre',
    'books_save' => 'Enregistrer le livre',
    'books_permissions' => 'Permissions du livre',
    'books_permissions_updated' => 'Permissions du livre mises à jour',
    'books_empty_contents' => 'Aucune page ou chapitre n\'a été ajouté à ce livre.',
    'books_empty_create_page' => 'Créer une nouvelle page',
    'books_empty_sort_current_book' => 'Trier les pages du livre',
    'books_empty_add_chapter' => 'Ajouter un chapitre',
    'books_permissions_active' => 'Permissions personnalisées activées',
    'books_search_this' => 'Rechercher dans ce livre',
    'books_navigation' => 'Navigation dans le livre',
    'books_sort' => 'Trier les contenus du livre',
    'books_sort_desc' => 'Déplacez les chapitres et les pages d\'un livre pour réorganiser son contenu. D\'autres livres peuvent être ajoutés qui permettent de déplacer facilement les chapitres et les pages entre les livres.',
    'books_sort_named' => 'Trier le livre :bookName',
    'books_sort_name' => 'Trier par le nom',
    'books_sort_created' => 'Trier par la date de création',
    'books_sort_updated' => 'Trier par la date de mise à jour',
    'books_sort_chapters_first' => 'Les chapitres en premier',
    'books_sort_chapters_last' => 'Les chapitres en dernier',
    'books_sort_show_other' => 'Afficher d\'autres livres',
    'books_sort_save' => 'Enregistrer l\'ordre',
    'books_sort_show_other_desc' => 'Ajoutez ici d\'autres livres pour les inclure dans l\'opération de tri, et permettez une réorganisation des livres croisés.',
    'books_sort_move_up' => 'Remonter',
    'books_sort_move_down' => 'Descendre',
    'books_sort_move_prev_book' => 'Déplacer vers le livre précédent',
    'books_sort_move_next_book' => 'Déplacer vers le livre suivant',
    'books_sort_move_prev_chapter' => 'Déplacer vers le chapitre précédent',
    'books_sort_move_next_chapter' => 'Déplacer au chapitre suivant',
    'books_sort_move_book_start' => 'Déplacer au début du livre',
    'books_sort_move_book_end' => 'Déplacer vers la fin du livre',
    'books_sort_move_before_chapter' => 'Déplacer vers Avant le chapitre',
    'books_sort_move_after_chapter' => 'Déplacer vers Après le chapitre',
    'books_copy' => 'Copier le livre',
    'books_copy_success' => 'Livre copié avec succès',

    // Chapters
    'chapter' => 'Chapitre',
    'chapters' => 'Chapitres',
    'x_chapters' => ':count chapitre|:count chapitres',
    'chapters_popular' => 'Chapitres populaires',
    'chapters_new' => 'Nouveau chapitre',
    'chapters_create' => 'Créer un nouveau chapitre',
    'chapters_delete' => 'Supprimer le chapitre',
    'chapters_delete_named' => 'Supprimer le chapitre :chapterName',
    'chapters_delete_explain' => 'Ceci supprimera le chapitre portant le nom \':chapterName\'. Toutes les pages qui existent dans ce chapitre seront également supprimées.',
    'chapters_delete_confirm' => 'Êtes-vous sûr(e) de vouloir supprimer ce chapitre ?',
    'chapters_edit' => 'Modifier le chapitre',
    'chapters_edit_named' => 'Modifier le chapitre :chapterName',
    'chapters_save' => 'Enregistrer le chapitre',
    'chapters_move' => 'Déplacer le chapitre',
    'chapters_move_named' => 'Déplacer le chapitre :chapterName',
    'chapter_move_success' => 'Chapitre déplacé dans :bookName',
    'chapters_copy' => 'Copier le chapitre',
    'chapters_copy_success' => 'Chapitre copié avec succès',
    'chapters_permissions' => 'Permissions du chapitre',
    'chapters_empty' => 'Il n\'y a pas de page dans ce chapitre actuellement.',
    'chapters_permissions_active' => 'Permissions du chapitre activées',
    'chapters_permissions_success' => 'Permissions du chapitre mises à jour',
    'chapters_search_this' => 'Rechercher dans ce chapitre',
    'chapter_sort_book' => 'Trier le livre',

    // Pages
    'page' => 'Page',
    'pages' => 'Pages',
    'x_pages' => ':count Page|:count pages',
    'pages_popular' => 'Pages populaires',
    'pages_new' => 'Nouvelle page',
    'pages_attachments' => 'Fichiers joints',
    'pages_navigation' => 'Navigation dans la page',
    'pages_delete' => 'Supprimer la page',
    'pages_delete_named' => 'Supprimer la page :pageName',
    'pages_delete_draft_named' => 'supprimer le brouillon de la page :pageName',
    'pages_delete_draft' => 'Supprimer le brouillon',
    'pages_delete_success' => 'Page supprimée',
    'pages_delete_draft_success' => 'Brouillon supprimé',
    'pages_delete_confirm' => 'Êtes-vous sûr(e) de vouloir supprimer cette page ?',
    'pages_delete_draft_confirm' => 'Êtes-vous sûr(e) de vouloir supprimer ce brouillon ?',
    'pages_editing_named' => 'Modification de la page :pageName',
    'pages_edit_draft_options' => 'Options du brouillon',
    'pages_edit_save_draft' => 'Enregistrer le brouillon',
    'pages_edit_draft' => 'Modifier le brouillon',
    'pages_editing_draft' => 'Modification du brouillon',
    'pages_editing_page' => 'Modification de la page',
    'pages_edit_draft_save_at' => 'Brouillon enregistré le ',
    'pages_edit_delete_draft' => 'Supprimer le brouillon',
    'pages_edit_discard_draft' => 'Jeter le brouillon',
    'pages_edit_switch_to_markdown' => 'Basculer vers l\'éditeur Markdown',
    'pages_edit_switch_to_markdown_clean' => '(Contenu nettoyé)',
    'pages_edit_switch_to_markdown_stable' => '(Contenu stable)',
    'pages_edit_switch_to_wysiwyg' => 'Basculer vers l\'éditeur WYSIWYG',
    'pages_edit_set_changelog' => 'Remplir le journal des changements',
    'pages_edit_enter_changelog_desc' => 'Entrez une brève description des changements effectués',
    'pages_edit_enter_changelog' => 'Ouvrir le journal des changements',
    'pages_editor_switch_title' => 'Changer d\'éditeur',
    'pages_editor_switch_are_you_sure' => 'Êtes-vous sûr de vouloir modifier l\'éditeur de cette page ?',
    'pages_editor_switch_consider_following' => 'Considérez ce qui suit lors du changement d\'éditeur :',
    'pages_editor_switch_consideration_a' => 'Une fois enregistrée, le nouvel éditeur sera utilisé par tous les futurs éditeurs, y compris ceux qui ne seront pas en mesure de modifier le type de l\'éditeur eux-mêmes.',
    'pages_editor_switch_consideration_b' => 'Cela peut entraîner une perte de détail et de syntaxe dans certaines circonstances.',
    'pages_editor_switch_consideration_c' => 'Les modifications apportées depuis la dernière sauvegarde, les balises ou le journal des modifications ne persisteront pas à travers cette modification.',
    'pages_save' => 'Enregistrer la page',
    'pages_title' => 'Titre de la page',
    'pages_name' => 'Nom de la page',
    'pages_md_editor' => 'Éditeur',
    'pages_md_preview' => 'Prévisualisation',
    'pages_md_insert_image' => 'Insérer une image',
    'pages_md_insert_link' => 'Insérer un lien',
    'pages_md_insert_drawing' => 'Insérer un dessin',
    'pages_md_show_preview' => 'Prévisualisation',
    'pages_md_sync_scroll' => 'Défilement prévisualisation',
    'pages_not_in_chapter' => 'La page n\'est pas dans un chapitre',
    'pages_move' => 'Déplacer la page',
    'pages_move_success' => 'Page déplacée à ":parentName"',
    'pages_copy' => 'Copier la page',
    'pages_copy_desination' => 'Destination de la copie',
    'pages_copy_success' => 'Page copiée avec succès',
    'pages_permissions' => 'Permissions de la page',
    'pages_permissions_success' => 'Permissions de la page mises à jour',
    'pages_revision' => 'Révision',
    'pages_revisions' => 'Révisions de la page',
    'pages_revisions_desc' => 'Vous trouverez sur la page ci-dessous toutes les anciennes révisions. Vous pouvez regarder, comparer et restaurer les anciennes versions de page si les autorisations le permettent. L’historique complet de la page peut ne pas être entièrement affiché ici, car selon la configuration du système, les anciennes révisions peuvent être supprimées automatiquement.',
    'pages_revisions_named' => 'Révisions pour :pageName',
    'pages_revision_named' => 'Révision pour :pageName',
    'pages_revision_restored_from' => 'Restauré à partir de #:id; :summary',
    'pages_revisions_created_by' => 'Créé par',
    'pages_revisions_date' => 'Date de révision',
    'pages_revisions_number' => '#',
    'pages_revisions_sort_number' => 'Numéro de révision',
    'pages_revisions_numbered' => 'Révision #:id',
    'pages_revisions_numbered_changes' => 'Modification #:id',
    'pages_revisions_editor' => 'Type d\'éditeur',
    'pages_revisions_changelog' => 'Journal des changements',
    'pages_revisions_changes' => 'Changements',
    'pages_revisions_current' => 'Version actuelle',
    'pages_revisions_preview' => 'Prévisualisation',
    'pages_revisions_restore' => 'Restaurer',
    'pages_revisions_none' => 'Cette page n\'a aucune révision',
    'pages_copy_link' => 'Copier le lien',
    'pages_edit_content_link' => 'Modifier le contenu',
    'pages_permissions_active' => 'Permissions de page actives',
    'pages_initial_revision' => 'Publication initiale',
    'pages_references_update_revision' => 'Mise à jour automatique des liens internes',
    'pages_initial_name' => 'Nouvelle page',
    'pages_editing_draft_notification' => 'Vous éditez actuellement un brouillon qui a été enregistré :timeDiff.',
    'pages_draft_edited_notification' => 'La page a été mise à jour depuis votre dernière visite. Vous devriez jeter ce brouillon.',
    'pages_draft_page_changed_since_creation' => 'Cette page a été mise à jour depuis que ce brouillon a été créé. Il est recommandé de supprimer ce brouillon ou de veiller à ne pas écraser toute modification de page.',
    'pages_draft_edit_active' => [
        'start_a' => ':count utilisateurs ont commencé à éditer cette page',
        'start_b' => ':userName a commencé à éditer cette page',
        'time_a' => 'depuis la dernière sauvegarde',
        'time_b' => 'dans les :minCount dernières minutes',
        'message' => ':start :time. Attention à ne pas écraser les mises à jour de quelqu\'un d\'autre !',
    ],
    'pages_draft_discarded' => 'Brouillon écarté, la page est dans sa version actuelle.',
    'pages_specific' => 'Page spécifique',
    'pages_is_template' => 'Modèle de page',

    // Editor Sidebar
    'page_tags' => 'Mots-clés de la page',
    'chapter_tags' => 'Mots-clés du chapitre',
    'book_tags' => 'Mots-clés du livre',
    'shelf_tags' => 'Mots-clés de l\'étagère',
    'tag' => 'Mot-clé',
    'tags' =>  'Mots-clés',
    'tags_index_desc' => 'Les tags peuvent être appliqués au contenu du système pour appliquer une forme flexible de catégorisation. Les tags peuvent avoir à la fois une clé et une valeur, la valeur étant facultative. Une fois appliqué, le contenu peut ensuite être interrogé à l’aide du nom et de la valeur du tag.',
    'tag_name' =>  'Nom du mot-clé',
    'tag_value' => 'Valeur du mot-clé (optionnel)',
    'tags_explain' => "Ajouter des mots-clés pour catégoriser votre contenu.",
    'tags_add' => 'Ajouter un autre mot-clé',
    'tags_remove' => 'Supprimer le mot-clé',
    'tags_usages' => 'Total des utilisations des mots-clés',
    'tags_assigned_pages' => 'Attribuer aux pages',
    'tags_assigned_chapters' => 'Attribuer aux chapitres',
    'tags_assigned_books' => 'Attribuer aux livres',
    'tags_assigned_shelves' => 'Attribuer aux étagères',
    'tags_x_unique_values' => ':count valeurs uniques',
    'tags_all_values' => 'Toutes les valeurs',
    'tags_view_tags' => 'Voir les mots-clés',
    'tags_view_existing_tags' => 'Voir les mots-clés existants',
    'tags_list_empty_hint' => 'Les mots-clés peuvent être assignés via la barre latérale de l\'éditeur de page ou lors de l\'édition des détails d\'un livre, d\'un chapitre ou d\'une étagère.',
    'attachments' => 'Fichiers joints',
    'attachments_explain' => 'Ajouter des fichiers ou des liens pour les afficher sur votre page. Ils seront affichés dans la barre latérale',
    'attachments_explain_instant_save' => 'Ces changements sont enregistrés immédiatement.',
    'attachments_upload' => 'Uploader un fichier',
    'attachments_link' => 'Attacher un lien',
    'attachments_upload_drop' => 'Alternatively you can drag and drop a file here to upload it as an attachment.',
    'attachments_set_link' => 'Définir un lien',
    'attachments_delete' => 'Êtes-vous sûr de vouloir supprimer la pièce jointe ?',
    'attachments_dropzone' => 'Drop files here to upload',
    'attachments_no_files' => 'Aucun fichier ajouté',
    'attachments_explain_link' => 'Vous pouvez ajouter un lien si vous ne souhaitez pas uploader un fichier.',
    'attachments_link_name' => 'Nom du lien',
    'attachment_link' => 'Lien de l\'attachement',
    'attachments_link_url' => 'Lien sur un fichier',
    'attachments_link_url_hint' => 'URL du site ou du fichier',
    'attach' => 'Ajouter',
    'attachments_insert_link' => 'Ajouter un lien à la page',
    'attachments_edit_file' => 'Modifier le fichier',
    'attachments_edit_file_name' => 'Nom du fichier',
    'attachments_edit_drop_upload' => 'Glissez un fichier ou cliquer pour mettre à jour le fichier',
    'attachments_order_updated' => 'Ordre des fichiers joints mis à jour',
    'attachments_updated_success' => 'Détails des fichiers joints mis à jour',
    'attachments_deleted' => 'Fichier joint supprimé',
    'attachments_file_uploaded' => 'Fichier ajouté avec succès',
    'attachments_file_updated' => 'Fichier mis à jour avec succès',
    'attachments_link_attached' => 'Lien attaché à la page avec succès',
    'templates' => 'Modèles',
    'templates_set_as_template' => 'La page est un modèle',
    'templates_explain_set_as_template' => 'Vous pouvez définir cette page comme modèle pour que son contenu soit utilisé lors de la création d\'autres pages. Les autres utilisateurs pourront utiliser ce modèle s\'ils ont les permissions pour cette page.',
    'templates_replace_content' => 'Remplacer le contenu de la page',
    'templates_append_content' => 'Ajouter après le contenu de la page',
    'templates_prepend_content' => 'Ajouter avant le contenu de la page',

    // Profile View
    'profile_user_for_x' => 'Utilisateur depuis :time',
    'profile_created_content' => 'Contenu créé',
    'profile_not_created_pages' => ':userName n\'a pas créé de page',
    'profile_not_created_chapters' => ':userName n\'a pas créé de chapitre',
    'profile_not_created_books' => ':userName n\'a pas créé de livre',
    'profile_not_created_shelves' => ':userName n\'a pas créé d\'étagère',

    // Comments
    'comment' => 'Commentaire',
    'comments' => 'Commentaires',
    'comment_add' => 'Ajouter un commentaire',
    'comment_placeholder' => 'Entrez vos commentaires ici',
    'comment_count' => '{0} Pas de commentaires|{1} Un commentaire|[2,*] :count commentaires',
    'comment_save' => 'Enregistrer le commentaire',
    'comment_saving' => 'Enregistrement du commentaire…',
    'comment_deleting' => 'Suppression du commentaire…',
    'comment_new' => 'Nouveau commentaire',
    'comment_created' => 'commenté :createDiff',
    'comment_updated' => 'Mis à jour :updateDiff par :username',
    'comment_deleted_success' => 'Commentaire supprimé',
    'comment_created_success' => 'Commentaire ajouté',
    'comment_updated_success' => 'Commentaire mis à jour',
    'comment_delete_confirm' => 'Êtes-vous sûr de vouloir supprimer ce commentaire ?',
    'comment_in_reply_to' => 'En réponse à :commentId',

    // Revision
    'revision_delete_confirm' => 'Êtes-vous sûr de vouloir supprimer cette révision ?',
    'revision_restore_confirm' => 'Êtes-vous sûr de vouloir restaurer cette révision ? Le contenu courant de la page va être remplacé.',
    'revision_delete_success' => 'Révision supprimée',
    'revision_cannot_delete_latest' => 'Impossible de supprimer la dernière révision.',

    // Copy view
    'copy_consider' => 'Veuillez prendre en compte ce qui suit lors de la copie du contenu.',
    'copy_consider_permissions' => 'Les paramètres de permission personnalisés ne seront pas copiés.',
    'copy_consider_owner' => 'Vous deviendrez le propriétaire de tout le contenu copié.',
    'copy_consider_images' => 'Les fichiers image de la page ne seront pas dupliqués et les images originales conserveront leur relation avec la page vers laquelle elles ont été initialement téléchargées.',
    'copy_consider_attachments' => 'Les pièces jointes de la page ne seront pas copiées.',
    'copy_consider_access' => 'Un changement d\'emplacement, de propriétaire ou d\'autorisation peut rendre ce contenu accessible à ceux précédemment sans accès.',

    // Conversions
    'convert_to_shelf' => 'Convertir en étagère',
    'convert_to_shelf_contents_desc' => 'Vous pouvez convertir ce livre en une nouvelle étagère avec le même contenu. Les chapitres contenus dans ce livre seront convertis en nouveaux livres. Si ce livre contient des pages, qui ne sont pas dans un chapitre, ce livre sera renommé et contiendra ces pages, et ce livre fera partie de la nouvelle étagère.',
    'convert_to_shelf_permissions_desc' => 'Toutes les autorisations définies sur ce livre seront copiées sur la nouvelle étagère et sur tous les nouveaux livres enfants qui n\'ont pas leurs propres permissions appliquées. Notez que les permissions sur les étagères ne font pas automatiquement cascade au contenu intérieur, comme elles le font pour les livres.',
    'convert_book' => 'Convertir le livre',
    'convert_book_confirm' => 'Êtes-vous sûr(e) de vouloir convertir ce livre ?',
    'convert_undo_warning' => 'Cela ne peut pas être facilement annulé.',
    'convert_to_book' => 'Convertir en livre',
    'convert_to_book_desc' => 'Vous pouvez convertir ce chapitre en un nouveau livre avec le même contenu. Toutes les permissions définies dans ce chapitre seront copiées dans le nouveau livre mais toutes les permissions héritées du livre parent ne seront pas copiés, ce qui pourrait conduire à un changement de contrôle d\'accès.',
    'convert_chapter' => 'Convertir le chapitre',
    'convert_chapter_confirm' => 'Êtes-vous sûr(e) de vouloir convertir ce chapitre ?',

    // References
    'references' => 'Références',
    'references_none' => 'Il n\'y a pas de références suivies à cet élément.',
    'references_to_desc' => 'Vous trouverez ci-dessous toutes les pages connues du système qui ont un lien vers cet élément.',
];
