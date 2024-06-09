# Notes & Development Documentation

## Export Excel
-Laravel Excel: https://docs.laravel-excel.com/3.1/getting-started/installation.html

### Export Usage
- Reference: https://docs.laravel-excel.com/3.1/exports/
- You may do this by using the `make:export` command.
```bash
php artisan make:export UsersExport --model=User
```

- The file can be found in `app/Exports`:
```
.
├── app
│   ├── Exports
│   │   ├── UsersExport.php
│ 
└── composer.json
```

- If you prefer to create the export manually, you can create the following in `app/Exports`:
```php
<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    public function collection()
    {
        return User::all();
    }
}
```

- In your controller you can call this export now:
```php
<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller 
{
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
```

- And finally add a route to be able to access the export:
```php
Route::get('users/export/', [UsersController::class, 'export']);
```
- Find your `users.xlsx` in your downloads folder!

## Alert
- Sweetalert: https://sweetalert2.github.io/#download
    - Example usage
    ```javascript
    Swal.fire({
        title: "Berhasil",
        text: "Pasien berhasil dihapus.",
        icon: "success",
        allowOutsideClick: false,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            location.reload();
        }
    });
    ```

## UI
- Bootstrap: https://getbootstrap.com/docs/5.3/getting-started/introduction/

## Icons
- Font Awesome: https://fontawesome.com/search?o=r&m=free&f=classic

## Language Configuration
- Laravel References: https://laravel.com/docs/11.x/localization#publishing-the-language-files
- Medium References: https://syofyanzuhad.medium.com/laravel-indonesian-validation-language-ad172d3936bd
