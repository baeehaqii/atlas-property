<?php

namespace App\Filament\Clusters\SitesPages;

use Exception;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Filament\Notifications\Notification;
use Riodwanto\FilamentAceEditor\AceEditor;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;

class ArcadiaPage extends Page implements HasForms
{
    use InteractsWithForms, HasPageShield;

    protected static ?string $cluster = \App\Filament\Clusters\SitesPages::class;
    protected static ?string $navigationIcon = 'heroicon-o-home-modern';
    protected static ?int $navigationSort = 2;
    protected static string $view = 'filament.pages.edit-page';

    public string $fileContent = '';
    public int $formKey = 0;

    public function mount(): void
    {
        abort_unless(auth()->user()->can('page_ArcadiaPage'), 403);
        $this->loadFileContent();
    }

    protected function loadFileContent(): void
    {
        try {
            $path = $this->getMainFilePath();
            if (File::exists($path)) {
                $this->fileContent = File::get($path) ?: '';
            } else {
                $this->fileContent = $this->getDefaultContent();
                Log::warning("Arcadia page file not found: {$path}");
            }
        } catch (Exception $e) {
            Log::error('Error loading arcadia page content: ' . $e->getMessage());
            $this->fileContent = '';
            Notification::make()->title('Error loading content')->danger()->send();
        }
    }

    public function save(): void
    {
        try {
            $this->form->validate();
            $this->saveFile();
            Notification::make()->title('Content Saved Successfully')->success()->send();
            Log::info('Arcadia page content updated by user: ' . auth()->user()->email);
        } catch (Exception $e) {
            Log::error('Error saving arcadia page content: ' . $e->getMessage());
            Notification::make()->title('Save Error')->danger()->send();
        }
    }

    protected function saveFile(): void
    {
        $path = $this->getMainFilePath();
        $directory = dirname($path);

        if (!File::isDirectory($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        if (File::exists($path)) {
            File::copy($path, $path . '.backup.' . now()->format('Y-m-d_H-i-s'));
        }

        if (!File::put($path, $this->fileContent)) {
            throw new Exception('Failed to write file to disk');
        }
    }

    protected function getMainFilePath(): string
    {
        return resource_path('views/components/superduper/pages/arcadia.blade.php');
    }

    protected function getDefaultContent(): string
    {
        return <<<'HTML'
<x-superduper.main>
    <h1 class="text-4xl font-bold mb-4">Arcadia Page</h1>
    <p class="text-lg text-gray-700">Welcome to Arcadia.</p>
</x-superduper.main>
HTML;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                AceEditor::make('fileContent')
                    ->hiddenLabel()
                    ->mode('html')
                    ->height('768px')
                    ->required(),
            ])
            ->statePath('');
    }

    public function getDisplayFilePath(): string
    {
        $fullPath = $this->getMainFilePath();
        return str_replace(base_path() . '/', '', $fullPath);
    }

    public function getSubheading(): ?string
    {
        return 'Manage your website\'s arcadia page content.';
    }

    public function formatBytes(int $bytes, int $precision = 2): string
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);
        $bytes /= (1 << (10 * $pow));
        return round($bytes, $precision) . ' ' . $units[$pow];
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Main';
    }

    public static function getNavigationLabel(): string
    {
        return 'Arcadia';
    }

    public static function canAccess(): bool
    {
        return auth()->user()?->can('page_ArcadiaPage') ?? false;
    }

    public function getTitle(): string
    {
        return 'Edit Arcadia Page';
    }

    public function getHeading(): string
    {
        return 'Arcadia Page Editor';
    }
}