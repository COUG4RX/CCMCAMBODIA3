<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [WebsiteController::class, 'homepage'])->name('homepage');
Route::get('/about-us/page/meeting', [WebsiteController::class, 'AboutMeeting'])->name('meeting');
Route::get('/about-us/page/introduction', [WebsiteController::class, 'AboutIntroduction'])->name('introduction');
Route::get('/about-us/page/mandate', [WebsiteController::class, 'AboutMandate'])->name('mandate');
Route::get('/about-us/page/governance', [WebsiteController::class, 'AboutGovernance'])->name('governance');
Route::get('/about-us/page/role-and-responsibility', [WebsiteController::class, 'AboutRoleAndResponsibility'])->name('role-and-responsi');
Route::get('/about-us/page/core-principle', [WebsiteController::class, 'AboutCorePrinciple'])->name('core-principle');
Route::get('/about-us/page/structure', [WebsiteController::class, 'AboutStructure'])->name('structure');
Route::get('/about-us/page/office-bearers', [WebsiteController::class, 'AboutOfficeBearers'])->name('office-bearers');
Route::get('/about-us/page/secretariat', [WebsiteController::class, 'AboutSecretariat'])->name('secretariat');
Route::get('/about-us/page/membership', [WebsiteController::class, 'AboutMembership'])->name('membership');
Route::get('/about-us/page/right-of-members', [WebsiteController::class, 'AboutRightOfMembers'])->name('right-of-members');
Route::get('/about-us/page/responsibilities', [WebsiteController::class, 'AboutResponsibilities'])->name('responsibilities');
Route::get('/committee/page/member-list', [WebsiteController::class, 'CommitteesMemberList'])->name('member-list');
Route::get('/committee/page/term-of-reference', [WebsiteController::class, 'CommitteesReference'])->name('reference');
Route::get('/document/page/ccc-oversight-plan', [WebsiteController::class, 'DocumentOversightPlan'])->name('oversight-plan');
Route::get('/document/page/ccc-governance-manual-25072019vh-9aug2019', [WebsiteController::class, 'DocumentManual'])->name('manual');
Route::get('/document/page/ccc-other', [WebsiteController::class, 'DocumentOther'])->name('other');
Route::get('/document/page/ccc-oc', [WebsiteController::class, 'DocumentCccOc'])->name('ccc-oc');
Route::get('/document/page/ccc', [WebsiteController::class, 'DocumentCcc'])->name('ccc');
Route::get('/document/page/oversight-visit', [WebsiteController::class, 'DocumentOversightVisit'])->name('oversight-visit');
Route::get('/document/page/retreat-report', [WebsiteController::class, 'DocumentRetreatReport'])->name('retreat-report');
Route::get('/gfatm-grant/page/tbhiv', [WebsiteController::class, 'GfatmTbHiv'])->name('tb-hiv');
Route::get('/gfatm-grant/page/tb', [WebsiteController::class, 'GfatmTb'])->name('tb');
Route::get('/gfatm-grant/page/hiv', [WebsiteController::class, 'GfatmHiv'])->name('hiv');
Route::get('/gfatm-grant/page/malaria', [WebsiteController::class, 'GfatmMalaria'])->name('malaria');
Route::get('/gfatm-grant/page/rssh', [WebsiteController::class, 'GfatmRssh'])->name('rssh');
Route::get('/gfatm-grant/page/multi-countries-tb-migrant', [WebsiteController::class, 'GfatmMultiCountries'])->name('multi-countries');
Route::get('/principal/page/principal-recipient-mefmoh-lit/pudr', [WebsiteController::class, 'PrinciplePudr'])->name('pudr');
Route::get('/principal/page/principal-recipient-mefmoh-lit/management-letter', [WebsiteController::class, 'PrincipleManagementLetter'])->name('management-letter');
Route::get('/principal/page/principal-recipient-mefmoh-lit/audit-report', [WebsiteController::class, 'PrincipleAuditReport'])->name('audit-report');
Route::get('/principal/page/principal-recipient-mefmoh-lit/unops-pudr', [WebsiteController::class, 'PrincipleUnopsPudr'])->name('unops-pudr');
Route::get('/principal/page/principal-recipient-mefmoh-lit/unops-management-letter', [WebsiteController::class, 'PrincipleUnopsManagementLetter'])->name('unops-management-letter');
Route::get('/principal/page/principal-recipient-mefmoh-lit/unops-audit-report', [WebsiteController::class, 'PrincipleUnopsAuditReport'])->name('unops-audit-report');
Route::get('/page/activity', [WebsiteController::class, 'Activity'])->name ('activity');
Route::get('/page/career', [WebsiteController::class, 'Career'])->name ('career');
Route::get('/page/media/news', [WebsiteController::class, 'News'])->name ('news');
Route::get('/page/media/video', [WebsiteController::class, 'Video'])->name ('video');
Route::get('/page/media/gallry', [WebsiteController::class, 'Gallary'])->name ('gallary');
Route::get('/page/contact-us', [WebsiteController::class, 'ContactUs'])->name ('contact-us');