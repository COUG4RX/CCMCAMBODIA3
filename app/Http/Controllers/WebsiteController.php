<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function homepage(){
        return view('website.homepage');
    }
    public function AboutMeeting(){
        return view('website.about-CCC.meeting');
    }
    public function AboutIntroduction(){
        return view('website.about-CCC.introduction');
    }
    public function AboutMandate(){
        return view('website.about-CCC.mandate');
    }
    public function AboutGovernance(){
        return view('website.about-CCC.governance');
    }
    public function AboutRoleAndResponsibility(){
        return view('website.about-CCC.role-and-responsibility');
    }
    public function AboutCorePrinciple(){
        return view('website.about-CCC.core-principle');
    }
    public function AboutStructure(){
        return view('website.about-CCC.structure');
    }
    public function AboutOfficeBearers(){
        return view('website.about-CCC.office-bearers');
    }
    public function AboutSecretariat(){
        return view('website.about-CCC.secretariat');
    }
    public function AboutMembership(){
        return view('website.about-CCC.membership');
    }
    public function AboutRightOfMembers(){
        return view('website.about-CCC.right-of-members');
    }
    public function AboutResponsibilities(){
        return view('website.about-CCC.Responsibilities');
    }
    public function CommitteesMemberList(){
        return view('website.committees.member-list');
    }
    public function CommitteesReference(){
        return view('website.committees.reference');
    }
    public function DocumentOversightPlan(){
        return view('website.documents.oversight-plan');
    }
    public function DocumentManual(){
        return view('website.documents.manual');
    }
    public function DocumentOther(){
        return view('website.documents.other');
    }
    public function DocumentCccOc(){
        return view('website.documents.ccc-oc');
    }
    public function DocumentCcc(){
        return view('website.documents.ccc');
    }
    public function DocumentOversightVisit(){
        return view('website.documents.oversight-visit');
    }
    public function DocumentRetreatReport(){
        return view('website.documents.retreat-report');
    }
    public function GfatmTbHiv(){
        return view('website.gfatm-grant.tb-hiv');
    }
    public function GfatmTb(){
        return view('website.gfatm-grant.tb');
    }
    public function GfatmHiv(){
        return view('website.gfatm-grant.hiv');
    }
    public function GfatmMalaria(){
        return view('website.gfatm-grant.malaria');
    }
    public function GfatmRssh(){
        return view('website.gfatm-grant.rssh');
    }
    public function GfatmMultiCountries(){
        return view('website.gfatm-grant.multi-countries');
    }
    public function PrinciplePudr(){
        return view('website.principal-recipients.pudr');
    }
    public function PrincipleManagementLetter(){
        return view('website.principal-recipients.management-letter');
    }
    public function PrincipleAuditReport(){
        return view('website.principal-recipients.audit-report');
    }
    public function PrincipleUnopsPudr(){
        return view('website.principal-recipients.unops-pudr');
    }
    public function PrincipleUnopsManagementLetter(){
        return view('website.principal-recipients.unops-management-letter');
    }
    public function PrincipleUnopsAuditReport(){
        return view('website.principal-recipients.unops-audit-report');
    }
    public function Activity(){
        return view('website.activity.activity');
    }
    public function Career(){
        return view('website.career.career');
    }
    public function News(){
        return view('website.media.news');
    }
    public function Video(){
        return view('website.media.video');
    }
    public function Gallary(){
        return view('website.media.gallary');
    }
    public function ContactUs(){
        return view('website.contact-us.contact-us');
    }
    public function ViewDetailOne(){
        return view('website.view-details.detail-01');
    }
    public function ViewDetailTwo(){
        return view('website.view-details.detail-02');
    }

}
