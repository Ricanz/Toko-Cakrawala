<?php

namespace App\Providers;

use App\Models\Kategori;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        config(['app.locale' => 'id']);
        Carbon::setLocale('id');
        date_default_timezone_set('Asia/Jakarta');
        View::share('Kategori', Kategori::all());
        Blade::directive('money', function ($money) {
            return "<?php echo number_format($money, 2); ?>";
        });
    }
}
