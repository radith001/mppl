<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AlumniResource\Pages;
use App\Models\Alumni;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Blade;

class AlumniResource extends Resource
{
    protected static ?string $model = Alumni::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama')->required()->maxLength(255),
            Forms\Components\TextInput::make('nim')->required()->maxLength(255),
            Forms\Components\TextInput::make('prodi')->required()->maxLength(255),
            Forms\Components\TextInput::make('tahun_masuk')->required(),
            Forms\Components\TextInput::make('tahun_lulus'),
            Forms\Components\TextInput::make('IPK')->maxLength(255)->default(null),
            Forms\Components\TextInput::make('email')->email()->maxLength(255)->default(null),
            Forms\Components\TextInput::make('no_hp')->maxLength(255)->default(null),
            Forms\Components\TextInput::make('pekerjaan')->maxLength(255)->default(null),
            Forms\Components\TextInput::make('instansi')->maxLength(255)->default(null),
            Forms\Components\Textarea::make('alamat')->columnSpanFull(),
            Forms\Components\FileUpload::make('image')->image(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->searchable(),
                Tables\Columns\TextColumn::make('nim')->searchable(),
                Tables\Columns\TextColumn::make('prodi')->searchable(),
                Tables\Columns\TextColumn::make('tahun_masuk'),
                Tables\Columns\TextColumn::make('tahun_lulus'),
                Tables\Columns\TextColumn::make('IPK')->searchable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('no_hp')->searchable(),
                Tables\Columns\TextColumn::make('pekerjaan')->searchable(),
                Tables\Columns\TextColumn::make('instansi')->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),

                Tables\Actions\Action::make('pdf')
                    ->label('Unduh PDF')
                    ->color('success')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->action(function (Model $record) {
                        $fileName = 'alumni-' . $record->nim . '.pdf';

                        return response()->streamDownload(function () use ($record) {
                            echo Pdf::loadHtml(
                                Blade::render('pdf', ['record' => $record])
                            )->stream();
                        }, $fileName);
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAlumnis::route('/'),
            'create' => Pages\CreateAlumni::route('/create'),
            'edit' => Pages\EditAlumni::route('/{record}/edit'),
        ];
    }
}
