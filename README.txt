[[[INFORMAL DOCUMENTATION]]]

By: Lanz Alexander Malto
For: Laravel Training Project
Created: 2/1/2024
Last Updated: 2/6/2024

>>> Created a new Laravel app.
>>> Installed dependencies.
>>> Set .env file.

>>> Created database "laraapplication".
>>> Edited "users" migration file/table.
>>> Created "posts" migration.
>>> Edited "posts" migration file/table.
>>> ran "php artisan migrate" && "php artisan migrate:refresh" and confirmed proper modifications in HeidiSQL.
>>> Created "Post" model.
>>> Created "Post" controller.

>>> Installed laravel/breeze.
>>> Installed "Blade/Alpine" Breeze stack w/ dark mode support and PHPUnit testing framework.
>>> Successfully installed Breeze scaffolding.
>>> Migrated databases and successfully installed dependencies.
>>> Edited Models\User.php.
>>> Edited the arrays inside the functions in Http\Controllers\Auth\RegisteredUserController.php.

>>> Made folder->directory for the app.

{{ Committed app into AppCon-Repository. }}

>>> Created landing page.
>>> Added to "web.php" route.
>>> Edited "Post" migration: changed user_id configuration.

>>> Edited Register Form.
>>> Tested Register Form [passed]->dashboard.

>>> Attempted to edit Login Form.
>>> Edited Http\Auth\ConfirmablePasswordController.php
>>> Tested Login Form [failed].
>>> Edited LoginRequest.php.
>>> Tested Login Form [passed]->dashboard.

>>> Attempted ot edit Update Profile Form.
>>> Tested Update Profile Form [failed].
>>> Edited ProfileUpdateRequest.php.
>>> Tested Profile Update Form [passed]->dashboard.

{{ Committed version 2 into AppCon-Repository. }}

[UPDATED UI]
>>> Created LookLayout.php
>>> Edited look-layout.blade.php
>>> Created Partials folder.
>>> Created navbar.blade.php
>>> Added random question marks to navigation.blade.php
>>> Finished navbar.blade.php, learnt implementation.

{{ Committed version 3 into AppCon-Repository. }}

>>> Created PostsController.
>>> Created resources\views\post.
>>> Created get method route for post & edited index.blade.php & edited postscontroller.php.
>>> Created get methoud route for create post, edited create.blade.php & edited postscontroller.php.
< ... >
>>> Disabled editing on username/firstname/lastname for users thru 'disabled' tag on post/create.blade.php and post/edit.blade.php files.
>>> Deleted unnecessary file & folder.

{{ Committed version 4 into AppCon-Repository. }}

[BRIDGING]

>>> Bridged "Create Post" button to auth dashboard.
>>> Fixed error messages and bugs related to on fields for values already given. 
>>> Added time created/edited for posts.

{{ Committed version 5 into AppCon-Repository. }}

>>> Edited web.php, welcome.blade.php, navigation.blade.php (views\layouts\...) to fix routes and directories.

>>> Imported Card format for tailwind and inserted it inside dashboard.blade.php

>>> Improved UI, removed all page UI-breaking bugs.
>>> Added fields to cards on Account Page.
>>> Created redirect from Create Post page to Dashboard instead of to Homepage.

{{ Committed version 6 into AppCon-Repository. }}

>>> Made changes to the create_posts_table migration.
>>> Made changes to the Post Controller.
>>> Edited dashboard.blade.php and welcome.blade.php to only show posts made by authenticated user.
>>> [BUG] Posts on landing page don't show username/firstname/lastname of the maker of the post. 
>>> Made minor UI changes.

{{ Committed version 7 into AppCon-Repository. }}