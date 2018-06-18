Laravel framework integrated with tcg/voyager admin tool



when transferring laravel voyager project to another mashine, if public/storage is not linked with the storage directory outside the public folder(created by voyager)
1)delete storage folder from public directory							    
2) run "php artisan storage:link" command
