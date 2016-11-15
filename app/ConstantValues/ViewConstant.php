<?php
/**
 * @project pip.
 * @since 8/23/2016 1:28 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace app\ConstantValues;


interface ViewConstant
{

    /*INDEX CONTROL*/
    const CONTROL_INDEX_PAGE            = 'page';
    const CONTROL_INDEX_NEW             = 'new';
    const CONTROL_INDEX_EDIT            = 'edit';
    const CONTROL_INDEX_LIST            = 'list';


    /*Dashboard*/
    const DASHBOARD_PAGE_HEADING        = "Dashboard";
    const DASHBOARD_PAGE_SUBTITLE       = "Application Dashboard";

    /*MASTER-KECAMATAN*/
    const MASTER_KECAMATAN_PAGE_HEADING        = "Kecamatan";
    const MASTER_KECAMATAN_PAGE_SUBTITLE       = "Master Kecamatan";
    const MASTER_KECAMATAN_INDEX_PAGE          = 'pages.master.kecamatan.index';
    const MASTER_KECAMATAN_NEW_EDIT_PAGE       = 'pages.master.kecamatan.new-edit';
    const MASTER_KECAMATAN_LIST_PAGE           = 'pages.master.kecamatan.list';

    /*MASTER-BENEFIT*/
    const MASTER_BENEFIT_PAGE_HEADING        = "Province";
    const MASTER_BENEFIT_PAGE_SUBTITLE       = "Master Province";
    const MASTER_BENEFIT_INDEX_PAGE          = 'pages.master.benefit.index';
    const MASTER_BENEFIT_NEW_PAGE            = 'pages.master.benefit.new';
    const MASTER_BENEFIT_EDIT_PAGE           = 'pages.master.benefit.edit';
    const MASTER_BENEFIT_LIST_PAGE           = 'pages.master.benefit.list';

    /*MASTER-CITY*/
    const MASTER_CITY_PAGE_HEADING        = "City";
    const MASTER_CITY_PAGE_SUBTITLE       = "Master City";
    const MASTER_CITY_INDEX_PAGE          = 'pages.master.city.index';
    const MASTER_CITY_NEW_PAGE            = 'pages.master.city.new';
    const MASTER_CITY_EDIT_PAGE           = 'pages.master.city.edit';
    const MASTER_CITY_LIST_PAGE           = 'pages.master.city.list';

    /*MASTER-DISTRICT*/
    const MASTER_DISTRICT_PAGE_HEADING        = "District";
    const MASTER_DISTRICT_PAGE_SUBTITLE       = "Master District";
    const MASTER_DISTRICT_INDEX_PAGE          = 'pages.master.district.index';
    const MASTER_DISTRICT_NEW_PAGE            = 'pages.master.district.new';
    const MASTER_DISTRICT_EDIT_PAGE           = 'pages.master.district.edit';
    const MASTER_DISTRICT_LIST_PAGE           = 'pages.master.district.list';

    /*MASTER-PROVINSI*/
    const MASTER_PROVINSI_PAGE_HEADING        = "Province";
    const MASTER_PROVINSI_PAGE_SUBTITLE       = "Master Province";
    const MASTER_PROVINSI_INDEX_PAGE          = 'pages.master.province.index';
    const MASTER_PROVINSI_NEW_PAGE            = 'pages.master.province.new';
    const MASTER_PROVINSI_EDIT_PAGE           = 'pages.master.province.edit';
    const MASTER_PROVINSI_LIST_PAGE           = 'pages.master.province.list';

    /*MASTER-EDUCATION*/
    const MASTER_EDUCATION_PAGE_HEADING        = "Education";
    const MASTER_EDUCATION_PAGE_SUBTITLE       = "Master Education";
    const MASTER_EDUCATION_INDEX_PAGE          = 'pages.master.education.index';
    const MASTER_EDUCATION_NEW_PAGE            = 'pages.master.education.new';
    const MASTER_EDUCATION_EDIT_PAGE           = 'pages.master.education.edit';
    const MASTER_EDUCATION_LIST_PAGE           = 'pages.master.education.list';

    /*MASTER-JOB*/
    const MASTER_JOB_PAGE_HEADING        = "Job";
    const MASTER_JOB_PAGE_SUBTITLE       = "Master Job";
    const MASTER_JOB_INDEX_PAGE          = 'pages.master.job.index';
    const MASTER_JOB_NEW_PAGE            = 'pages.master.job.new';
    const MASTER_JOB_EDIT_PAGE           = 'pages.master.job.edit';
    const MASTER_JOB_LIST_PAGE           = 'pages.master.job.list';

    /*MASTER-VILLAGE*/
    const MASTER_VILLAGE_PAGE_HEADING        = "Village";
    const MASTER_VILLAGE_PAGE_SUBTITLE       = "Master Village";
    const MASTER_VILLAGE_INDEX_PAGE          = 'pages.master.village.index';
    const MASTER_VILLAGE_NEW_PAGE            = 'pages.master.village.new';
    const MASTER_VILLAGE_EDIT_PAGE           = 'pages.master.village.edit';
    const MASTER_VILLAGE_LIST_PAGE           = 'pages.master.village.list';
    
    /*MASTER-PROVINSI*/
    const REGISTRASI_LEMBAGA_PAGE_HEADING        = "Lembaga";
    const REGISTRASI_LEMBAGA_PAGE_SUBTITLE       = "Registrasi Lembaga";
    const REGISTRASI_LEMBAGA_INDEX_PAGE           = 'pages.lembaga.registrasi.index';
    const REGISTRASI_LEMBAGA_LIST_PAGE           = 'pages.lembaga.registrasi.list';
    const REGISTRASI_LEMBAGA_NEW_PAGE           = 'pages.lembaga.registrasi.new';
    
    const APPROVAL_REGISTRASI_LEMBAGA_PAGE_HEADING        = "Lembaga";
    const APPROVAL_REGISTRASI_LEMBAGA_PAGE_SUBTITLE       = "Approval Registrasi Lembaga";
    const APPROVAL_REGISTRASI_LEMBAGA_INDEX_PAGE           = 'pages.lembaga.registrasi.approval.index';
    const APPROVAL_REGISTRASI_LEMBAGA_LIST_PAGE           = 'pages.lembaga.registrasi.approval.list';
    const APPROVAL_REGISTRASI_LEMBAGA_NEW_PAGE           = 'pages.lembaga.registrasi.new';
    
    const CHANGE_LEMBAGA_PAGE_HEADING        = "Lembaga";
    const CHANGE_LEMBAGA_PAGE_SUBTITLE       = "Perubahan Data Lembaga";
    const CHANGE_LEMBAGA_INDEX_PAGE           = 'pages.lembaga.change.index';
    const CHANGE_LEMBAGA_LIST_PAGE           = 'pages.lembaga.change.list';
    const CHANGE_LEMBAGA_NEW_PAGE           = 'pages.lembaga.change.new';


    /*SECURITY-USER*/
    const SECURITY_USER_PAGE_HEADING        = "Security User";
    const SECURITY_USER_PAGE_SUBTITLE       = "Security User";
    const SECURITY_USER_INDEX_PAGE          = 'pages.security.user.index';
    const SECURITY_USER_NEW_PAGE            = 'pages.security.user.new';
    const SECURITY_USER_EDIT_PAGE           = 'pages.security.user.edit';
    const SECURITY_USER_LIST_PAGE           = 'pages.security.user.list';

    /*SECURITY-GROUP*/
    const SECURITY_GROUP_PAGE_HEADING        = "Security Group";
    const SECURITY_GROUP_PAGE_SUBTITLE       = "Security Group";
    const SECURITY_GROUP_INDEX_PAGE          = 'pages.security.group.index';
    const SECURITY_GROUP_NEW_PAGE            = 'pages.security.group.new';
    const SECURITY_GROUP_EDIT_PAGE           = 'pages.security.group.edit';
    const SECURITY_GROUP_LIST_PAGE           = 'pages.security.group.list';
}