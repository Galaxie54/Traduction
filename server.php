<?php

return [
    'index' => [
        'title' => 'Vision du serveur :name',
        'header' => 'Console du serveur',
        'header_sub' => 'Contrôlez votre serveur en temps réel',
    ],
    'schedule' => [
        'header' => 'Gestionnaire des tâches',
        'header_sub' => 'Gérez toutes vos tâches journalières',
        'current' => 'Tâche actuelle',
        'new' => [
            'header' => 'Créer une nouvelle tâche',
            'header_sub' => 'Créer une tâche pour effectuer des actions à votre place automatiquement',
            'submit' => 'Créer',
        ],
        'manage' => [
            'header' => 'Gerer le programme',
            'submit' => 'Mettre à jour le programme',
            'delete' => 'Supprimer le programme',
        ],
        'task' => [
            'time' => 'Après',
            'action' => 'Effectuer une action',
            'payload' => 'Avec charges utiles',
            'add_more' => 'Ajouter une nouvelle tâche',
        ],
        'actions' => [
            'command' => 'Envoyer une commande',
            'power' => 'Actions d\'alimentation',
        ],
        'toggle' => 'Basculer le status',
        'run_now' => 'Déclencher le programme',
        'schedule_created' => 'Un programme a correctement été créé pour ce serveur.',
        'schedule_updated' => 'Le programme à été mis à jour.',
        'unnamed' => 'Programme sans nom',
        'setup' => 'Installation du programme',
        'day_of_week' => 'Jour de la semaine',
        'day_of_month' => 'Jour du mois',
        'hour' => 'Heure',
        'minute' => 'Minute',
        'time_help' => 'Le système de planification prend en charge l\'utilisation de la syntaxe Cronjob lors de la définition du moment ou les tâches doivent commencer à s\'executer. Utilisez les champs ci-dessus pour spécifier quand ces tâches doivent commencer à s\'executer ou sélectionnez des options dans les multiples menus de sélection.',
        'task_help' => ' Le temps pour les tâches est relatif à l\'ancienne tâche définie. Chaque programmes ne doivent pas avoir plus de 5 tâches assignés pour ça et les tâches ne peuvent pas être programmés pour plus de 15 minutes.',
    ],
    'tasks' => [
        'task_created' => 'Une nouvelle tâche à été ajoutée avec succès sur le panneau.',
        'task_updated' => 'La tâche à été modifié avec succès. Toutes les actions de tâche actuellement en attente seront annulées et réexécutées à la prochaine heure définie.',
        'header' => 'Tâches programmés',
        'header_sub' => 'Automatisez votre serveur.',
        'current' => 'Tâches actuellement programmés',
        'actions' => [
            'command' => 'Envoyer la commande.',
            'power' => 'Envoyer l\'option d\'alimentation',
        ],
        'new_task' => 'Ajouter une nouvelle tâche',
        'toggle' => 'Basculer le status',
        'new' => [
            'header' => 'Nouvelle tâche',
            'header_sub' => 'Créer une nouvelle tâche programmée pour ce serveur.',
            'task_name' => 'Nom de la tâche',
            'day_of_week' => 'Jour de la semaine',
            'custom' => 'Valeur personnalisée',
            'day_of_month' => 'Jour du mois',
            'hour' => 'Heure',
            'minute' => 'Minute',
            'sun' => 'Dimanche',
            'mon' => 'Lundi',
            'tues' => 'Mardi',
            'wed' => 'Mercredi',
            'thurs' => 'Jeudi',
            'fri' => 'Vendredi',
            'sat' => 'Samedi',
            'submit' => 'Créer la tâche',
            'type' => 'Type de tâche',
            'chain_then' => 'alors, après',
            'chain_do' => 'Faire',
            'chain_arguments' => 'Avec Arguments',
            'payload' => 'Charges utiles de la tâche',
            'payload_help' => 'Par exemple, si vous sélectionnez <code>Envoyer commande</code> entrez la commande ici. Si vous sélectionnez <code>Envoyer une option d\'alimentation</code> mettre l\'action  d\'alimentation ici (ex. <code>Redémarrer</code>).',
        ],
        'edit' => [
            'header' => 'Gerer la tâche',
            'submit' => 'Mettre à jour la tâche',
        ],
    ],
    'users' => [
        'header' => 'Gerer les utilisateurs',
        'header_sub' => 'Controler qui à accès a votre serveur.',
        'configure' => 'Configurer les permissions',
        'list' => 'Comptes avec accès',
        'add' => 'Ajouter un sous-utilisateur',
        'update' => 'Mettre à jour le sous-utilisateur',
        'user_assigned' => 'Le nouveau sous-utilisateur à été assigné avec succès.',
        'user_updated' => 'Permissions mises à jour!.',
        'edit' => [
            'header' => 'Modifier un sous-utilisateur',
            'header_sub' => 'Modify user\'s access to server.',
        ],
        'new' => [
            'header' => 'Ajouter un nouvel utilisateur',
            'header_sub' => 'Ajouter un nouvel utilisateur avec des permissions à ce serveur.',
            'email' => 'Adresse Email',
            'email_help' => 'Entrez l\'email de l\'utilistaeur dont vous souhaitez invité à gérer le serveur.',
            'power_header' => 'Power Management',
            'file_header' => 'Gerer les fichier',
            'subuser_header' => 'Gérer un sous-utilisateur',
            'server_header' => 'Gérer un Serveur',
            'task_header' => 'Schedule Management',
            'database_header' => 'Gérer la base de donnés',
            'power_start' => [
                'title' => 'Allumer le serveur',
                'description' => 'Autoriser à allumer le serveur.',
            ],
            'power_stop' => [
                'title' => 'Arreter le serveur',
                'description' => 'Autoriser à stopper le serveur.',
            ],
            'power_restart' => [
                'title' => 'Redémmarer le Serveur',
                'description' => 'Autoriser à Redémmarer.',
            ],
            'power_kill' => [
                'title' => 'Kill le serveur',
                'description' => 'Autoriser à kill le serveur.',
            ],
            'send_command' => [
                'title' => 'Envoyer une commande',
                'description' => 'Autoriser à envoyer une commande. Si l\'utilisateur n\'a pas la permission de redémmarer ou arreter, ils ne pourront pas envoyer de commande du type "stop".',
            ],
            'access_sftp' => [
                'title' => 'Autoriser à utiliser le SFTP',
                'description' => 'Allows user to connect to the SFTP server provided by the daemon.',
            ],
            'list_files' => [
                'title' => 'List Files',
                'description' => 'Allows user to list all files and folders on the server but not view file contents.',
            ],
            'edit_files' => [
                'title' => 'Edit Files',
                'description' => 'Allows user to open a file for viewing only. SFTP is not effected by this permission.',
            ],
            'save_files' => [
                'title' => 'Save Files',
                'description' => 'Allows user to save modified file contents. SFTP is not effected by this permission.',
            ],
            'move_files' => [
                'title' => 'Rename & Move Files',
                'description' => 'Allows user to move and rename files and folders on the filesystem.',
            ],
            'copy_files' => [
                'title' => 'Copy Files',
                'description' => 'Allows user to copy files and folders on the filesystem.',
            ],
            'compress_files' => [
                'title' => 'Compress Files',
                'description' => 'Allows user to make archives of files and folders on the system.',
            ],
            'decompress_files' => [
                'title' => 'Decompress Files',
                'description' => 'Allows user to decompress .zip and .tar(.gz) archives.',
            ],
            'create_files' => [
                'title' => 'Create Files',
                'description' => 'Allows user to create a new file within the panel.',
            ],
            'upload_files' => [
                'title' => 'Upload Files',
                'description' => 'Allows user to upload files through the file manager.',
            ],
            'delete_files' => [
                'title' => 'Delete Files',
                'description' => 'Allows user to delete files from the system.',
            ],
            'download_files' => [
                'title' => 'Download Files',
                'description' => 'Allows user to download files. If a user is given this permission they can download and view file contents even if that permission is not assigned on the panel.',
            ],
            'list_subusers' => [
                'title' => 'List Subusers',
                'description' => 'Allows user to view a listing of all subusers assigned to the server.',
            ],
            'view_subuser' => [
                'title' => 'View Subuser',
                'description' => 'Allows user to view permissions assigned to subusers.',
            ],
            'edit_subuser' => [
                'title' => 'Edit Subuser',
                'description' => 'Allows a user to edit permissions assigned to other subusers.',
            ],
            'create_subuser' => [
                'title' => 'Create Subuser',
                'description' => 'Allows user to create additional subusers on the server.',
            ],
            'delete_subuser' => [
                'title' => 'Delete Subuser',
                'description' => 'Allows a user to delete other subusers on the server.',
            ],
            'view_allocations' => [
                'title' => 'View Allocations',
                'description' => 'Allows user to view all of the IPs and ports assigned to a server.',
            ],
            'edit_allocation' => [
                'title' => 'Edit Default Connection',
                'description' => 'Allows user to change the default connection allocation to use for a server.',
            ],
            'view_startup' => [
                'title' => 'View Startup Command',
                'description' => 'Allows user to view the startup command and associated variables for a server.',
            ],
            'edit_startup' => [
                'title' => 'Edit Startup Command',
                'description' => 'Allows a user to modify startup variables for a server.',
            ],
            'list_schedules' => [
                'title' => 'List Schedules',
                'description' => 'Allows a user to list all schedules (enabled and disabled)  for this server.',
            ],
            'view_schedule' => [
                'title' => 'View Schedule',
                'description' => 'Allows a user to view a specific schedule\'s details including all of the assigned tasks.',
            ],
            'toggle_schedule' => [
                'title' => 'Toggle Schedule',
                'description' => 'Allows a user to toggle a schedule to be active or inactive.',
            ],
            'queue_schedule' => [
                'title' => 'Queue Schedule',
                'description' => 'Allows a user to queue a schedule to run it\'s tasks on the next process cycle.',
            ],
            'edit_schedule' => [
                'title' => 'Edit Schedule',
                'description' => 'Allows a user to edit a schedule including all of the schedule\'s tasks. This will allow the user to remove individual tasks, but not delete the schedule itself.',
            ],
            'create_schedule' => [
                'title' => 'Create Schedule',
                'description' => 'Allows a user to create a new schedule.',
            ],
            'delete_schedule' => [
                'title' => 'Delete Schedule',
                'description' => 'Allows a user to delete a schedule from the server.',
            ],
            'view_databases' => [
                'title' => 'View Database Details',
                'description' => 'Allows user to view all databases associated with this server including the usernames and passwords for the databases.',
            ],
            'reset_db_password' => [
                'title' => 'Reset Database Password',
                'description' => 'Allows a user to reset passwords for databases.',
            ],
            'delete_database' => [
                'title' => 'Delete Databases',
                'description' => 'Allows a user to delete databases for this server from the Panel.',
            ],
            'create_database' => [
                'title' => 'Create Database',
                'description' => 'Allows a user to create additional databases for this server.',
            ],
        ],
    ],
    'allocations' => [
        'mass_actions' => 'Mass Actions',
        'delete' => 'Delete Allocations',
    ],
    'files' => [
        'exceptions' => [
            'invalid_mime' => 'This type of file cannot be edited via the Panel\'s built-in editor.',
            'max_size' => 'This file is too large to edit via the Panel\'s built-in editor.',
        ],
        'header' => 'File Manager',
        'header_sub' => 'Manage all of your files directly from the web.',
        'loading' => 'Loading initial file structure, this could take a few seconds.',
        'path' => 'When configuring any file paths in your server plugins or settings you should use :path as your base path. The maximum size for web-based file uploads to this node is :size.',
        'seconds_ago' => 'seconds ago',
        'file_name' => 'File Name',
        'size' => 'Size',
        'last_modified' => 'Last Modified',
        'add_new' => 'Add New File',
        'add_folder' => 'Add New Folder',
        'mass_actions' => 'Mass Actions',
        'delete' => 'Delete Files',
        'edit' => [
            'header' => 'Edit File',
            'header_sub' => 'Make modifications to a file from the web.',
            'save' => 'Save File',
            'return' => 'Return to File Manager',
        ],
        'add' => [
            'header' => 'New File',
            'header_sub' => 'Create a new file on your server.',
            'name' => 'File Name',
            'create' => 'Create File',
        ],
    ],
    'config' => [
        'name' => [
            'header' => 'Server Name',
            'header_sub' => 'Change this server\'s name.',
            'details' => 'The server name is only a reference to this server on the panel, and will not affect any server specific configurations that may display to users in games.',
        ],
        'startup' => [
            'header' => 'Start Configuration',
            'header_sub' => 'Control server startup arguments.',
            'command' => 'Startup Command',
            'edit_params' => 'Edit Parameters',
            'update' => 'Update Startup Parameters',
            'startup_regex' => 'Input Rules',
            'edited' => 'Startup variables have been successfully edited. They will take effect the next time this server is started.',
        ],
        'sftp' => [
            'header' => 'SFTP Configuration',
            'header_sub' => 'Account details for SFTP connections.',
            'details' => 'SFTP Details',
            'conn_addr' => 'Connection Address',
            'warning' => 'The SFTP password is your account password. Ensure that your client is set to use SFTP and not FTP or FTPS for connections, there is a difference between the protocols.',
        ],
        'database' => [
            'header' => 'Databases',
            'header_sub' => 'All databases available for this server.',
            'your_dbs' => 'Configured Databases',
            'host' => 'MySQL Host',
            'reset_password' => 'Reset Password',
            'no_dbs' => 'There are no databases listed for this server.',
            'add_db' => 'Add a new database.',
        ],
        'allocation' => [
            'header' => 'Server Allocations',
            'header_sub' => 'Control the IPs and ports available on this server.',
            'available' => 'Available Allocations',
            'help' => 'Allocation Help',
            'help_text' => 'The list to the left includes all available IPs and ports that are open for your server to use for incoming connections.',
        ],
    ],
];
