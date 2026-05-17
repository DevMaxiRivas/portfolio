<?php

use App\Livewire\HomePage;
use App\Livewire\Projects\Page as ProductPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');
Route::get('/{slug}', ProductPage::class)->name('projects.page');
