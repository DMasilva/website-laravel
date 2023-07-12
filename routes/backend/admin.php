<?php

use Tabuna\Breadcrumbs\Trail;
use App\Http\Livewire\BankTier;
use App\Http\Livewire\CreateQuiz;
use App\Http\Livewire\UpdateBank;
use App\Http\Livewire\ActivityLog;
use App\Http\Livewire\AddBankData;
use App\Http\Livewire\CreateQuestion;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CreateQuizTopic;
use App\Http\Livewire\CreateRankSystem;
use App\Http\Livewire\ShowSupportIssue;
use App\Http\Livewire\CreateQuizSubTopic;
use App\Http\Livewire\SelectQuizQuestions;
use App\Http\Livewire\CreateSocialShareContent;
use App\Http\Controllers\Backend\DashboardController;

/*
// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);

// This route is used to get the DashboardController index view.
// It is named as 'dashboard' and has a breadcrumb entry for the Home page.
Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });

// This route group is used to access the 'bank' route and is protected by the permission middleware.
// The permission middleware ensures that only users with the required permissions can access the route.
// The route is used to update the bank and the breadcrumbs are set to display the parent route 'admin.dashboard' and the current route 'admin.bank'.
Route::group([
    'middleware' => 'permission:admin.bank|admin.bank.view|admin.bank.edit|admin.bank.create',
], function () {
    Route::get('bank', UpdateBank::class)
        ->name('bank')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')->push(__('Bank'), route('admin.bank'));
        });
});

// This route is used to create a group of middleware for the bank tiers page.
// The middleware will include permissions for viewing, editing, and creating bank tiers.
// The route will also include a breadcrumb for the parent page, admin dashboard, and the bank tiers page.
Route::group([
    'middleware' => 'permission:admin.bank.tier|admin.bank.tier.view|admin.bank.tier.edit|admin.bank.tier.create',
], function () {
    Route::get('bank-tiers', BankTier::class)
        ->name('bank_tiers')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')->push(__('Bank Tiers'), route('admin.bank_tiers'));
        });
});

// This group of routes is used to view support issues in the admin panel.
// It is protected by the permission middleware, so only users with the admin.support or admin.support.view permission can access it. The route is named 'support-issues' and the breadcrumb is set to the parent route 'admin.dashboard' with a push of 'Support Issues' and the route 'admin.support-issues'.
Route::group([
    'middleware' => 'permission:admin.support|admin.support.view',
], function () {
    Route::get('support-issues', ShowSupportIssue::class)
        ->name('support-issues')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')->push(__('Support Issues'), route('admin.support-issues'));
        });
});

//  This group of routes is used to access the 'rankings' page in the admin panel.
//  It requires permission to view, create, and edit the rank matrix in the rank system.

Route::group([
    'middleware' => 'permission:admin.rank_system|admin.rank_system.rank_matrix|admin.rank_system.rank_matrix.view|admin.rank_system.rank_matrix.create|admin.rank_system.rank_matrix.edit',
], function () {
    Route::get('rankings', CreateRankSystem::class)
        ->name('rankings')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')->push(__('Rank System'), route('admin.rankings'));
        });
});

// This route group is used to access the Bank Data page in the admin panel with permissions to view, create and edit the bank data.
Route::group([
    'middleware' => 'permission:admin.rank_system|admin.rank_system.bank_data|admin.rank_system.bank_data.view|admin.rank_system.bank_data.create|admin.rank_system.bank_data.edit',
], function () {
    Route::get('bank-data', AddBankData::class)
        ->name('bank_data')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')->push(__('Bank Data'), route('admin.bank_data'));
        });
});

// This route group provides access to the Admin Rank System Social Content page.
// It is protected by middleware which checks the user's permissions to view, create or edit the content.
// The breadcrumbs are set for the page, with the parent page being the Admin Dashboard.
Route::group([
    'middleware' => 'permission:admin.rank_system|admin.rank_system.social_content|admin.rank_system.social_content.view|admin.rank_system.social_content.create|admin.rank_system.social_content.edit',
], function () {
    Route::get('social-content', CreateSocialShareContent::class)
        ->name('social-content')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')->push(__('Social Content'), route('admin.social-content'));
        });
});

// This group of routes is protected by the 'permission' middleware, which requires the user to have any of the following permissions: admin.quiz_system, admin.quiz_system.question, admin.quiz_system.question.view, admin.quiz_system.question.create, admin.quiz_system.question.edit.
// It will allow access to the route 'quiz-questions', which is linked to the CreateQuestion class and has a breadcrumb parent of 'admin.dashboard' with the title 'Quiz Questions'.
Route::group([
    'middleware' => 'permission:admin.quiz_system|admin.quiz_system.question|admin.quiz_system.question.view|admin.quiz_system.question.create|admin.quiz_system.question.edit',
], function () {
    Route::get('quiz-questions', CreateQuestion::class)
        ->name('quiz-questions')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')->push(__('Quiz Questions'), route('admin.quiz-questions'));
        });
});

// This route group is used to allow access to the Quiz page for users with the permission of 'admin.quiz_system|admin.quiz_system.quiz|admin.quiz_system.quiz.view|admin.quiz_system.quiz.create|admin.quiz_system.quiz.edit'.
// It sets up a route for the Quiz page and adds a breadcrumb for the parent page 'admin.dashboard'.
Route::group([
    'middleware' => 'permission:admin.quiz_system|admin.quiz_system.quiz|admin.quiz_system.quiz.view|admin.quiz_system.quiz.create|admin.quiz_system.quiz.edit',
], function () {
    Route::get('quiz', CreateQuiz::class)
        ->name('quiz')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')->push(__('Quiz'), route('admin.quiz'));
        });
});

// This route group is used to update questions for the quiz with the given id.
// It is accessed with the permission of 'admin.quiz_system|admin.quiz_system.quiz|admin.quiz_system.quiz.edit'.
// It is accessed with the route name 'add-quiz-questions' and is a child of the 'admin.dashboard' route.
Route::group([
    'middleware' => 'permission:admin.quiz_system|admin.quiz_system.quiz|admin.quiz_system.quiz.edit',
], function () {
    Route::get('update-questions/{id}', SelectQuizQuestions::class)
        ->name('add-quiz-questions')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')->push(__('Select Quiz Questions'));
        });
});

// This route is for admin users with permission to view, create, and edit quiz topics.
// It is protected by middleware to ensure only authorized users can access it.
// The route is linked to the CreateQuizTopic controller and the breadcrumbs are set to the parent dashboard.
Route::group([
    'middleware' => 'permission:admin.quiz_system|admin.quiz_system.question_topic|admin.quiz_system.question_topic.view|admin.quiz_system.question_topic.create|admin.quiz_system.question_topic.edit',
], function () {
    Route::get('topics', CreateQuizTopic::class)
        ->name('topics')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')->push(__('Question Topics'), route('admin.topics'));
        });
});

// This group of routes is used to create and manage the quiz sub topics in the admin panel.
//  It is protected by the permission middleware, which means that only users with the specified permissions can access them. The routes include view, create, and edit sub topics. The breadcrumbs for these routes are also defined, which will help the user navigate back to the admin dashboard.
Route::group([
    'middleware' => 'permission:admin.quiz_system|admin.quiz_system.question_sub_topic|admin.quiz_system.question_sub_topic.view|admin.quiz_system.question_sub_topic.create|admin.quiz_system.question_sub_topic.edit',
], function () {
    Route::get('sub-topics', CreateQuizSubTopic::class)
        ->name('sub_topics')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')->push(__('Question Sub Topics'), route('admin.sub_topics'));
        });
});

Route::get('activity-logs', ActivityLog::class)->name('activity_logs')->breadcrumbs(function (Trail $trail) {
    $trail->parent('admin.dashboard')->push(__('Activity Logs'), route('admin.dashboard'));
})->middleware('permission:admin.access.logs_settings|admin.access.view_system_logs|admin.access.view_activity_logs');
 */
