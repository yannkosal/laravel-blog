<?php

namespace App\Filament\Resources\CommentResource\Widgets;

use App\Filament\Resources\CommentResource;
use App\Models\Comment;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestCommentWidget extends BaseWidget
{
    protected int|string|array $columnSpan = 1;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Comment::whereDate('created_at', '>=', now()->subDays(70))
            )
            ->columns([
                TextColumn::make('user.name')
                    ->label('User')
                    ->sortable(),
                TextColumn::make('post.title')
                    ->label('Post')
                    ->sortable(),
                TextColumn::make('comment')
                    ->label('Comment')
                    ->limit(50)
                    ->wrap(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                Action::make('view')
                ->url(fn (Comment $record): string => CommentResource::getUrl('edit', ['record'=>$record]))
                ->label('View')
                ->color('primary')
            ])
            ;
    }
}
