<?php

use App\Models\Banner\Content;
use App\Models\Blog\Post;
use App\Livewire\SuperDuper\BlogList;
use Illuminate\Support\Facades\Route;
use App\Livewire\SuperDuper\BlogDetails;
use App\Livewire\SuperDuper\Pages\ContactUs;
use Lab404\Impersonate\Services\ImpersonateManager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $posts = Post::published()->latest()->take(8)->get();
    $banners = Content::active()->orderBy('sort')->get();
    return view('components.superduper.pages.home', compact('posts', 'banners'));
})->name('home');
Route::get('/home-preview', function () {
    return view('components.superduper.pages.home');
})->name('home.preview');

Route::get('/blog', BlogList::class)->name('blog');

Route::get('/blog/{slug}', BlogDetails::class)->name('blog.show');

Route::get('/contact-us', ContactUs::class)->name('contact-us');

Route::get('/tentang-kami', function () {
    return view('components.superduper.pages.about');
});
Route::get('/about-preview', function () {
    return view('components.superduper.pages.about');
})->name('about.preview');

Route::get('/arcadia', function () {
    return view('components.superduper.pages.arcadia');
})->name('arcadia');

Route::get('/arcadia-preview', function () {
    return view('components.superduper.pages.arcadia');
})->name('arcadia.preview');

Route::get('/privacy-policy', function () {
    return view('components.superduper.pages.coming-soon', ['page_type' => 'privacy']);
})->name('privacy-policy');

Route::get('/terms-conditions', function () {
    return view('components.superduper.pages.coming-soon', ['page_type' => 'privacy']);
})->name('terms-conditions');

Route::get('/coming-soon', function () {
    return view('components.superduper.pages.coming-soon', ['page_type' => 'generic']);
})->name('coming-soon');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'submit'])
    ->name('contact.submit');

// TODO: Create actual blog preview component
Route::post('/blog-preview', function () {
    // Implementation pending
})->name('blog.preview');

Route::get('impersonate/leave', function () {
    if (!app(ImpersonateManager::class)->isImpersonating()) {
        return redirect('/');
    }

    app(ImpersonateManager::class)->leave();

    return redirect(
        session()->pull('impersonate.back_to')
    );
})->name('impersonate.leave')->middleware('web');

