<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 39,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 40,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 41,
                'title' => 'user_alert_edit',
            ],
            [
                'id'    => 42,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 43,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 44,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 45,
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 46,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 47,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 48,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 49,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 50,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 51,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 52,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 53,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 54,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 55,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 56,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 57,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 58,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 59,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 60,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 61,
                'title' => 'asset_create',
            ],
            [
                'id'    => 62,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 63,
                'title' => 'asset_show',
            ],
            [
                'id'    => 64,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 65,
                'title' => 'asset_access',
            ],
            [
                'id'    => 66,
                'title' => 'assets_history_create',
            ],
            [
                'id'    => 67,
                'title' => 'assets_history_edit',
            ],
            [
                'id'    => 68,
                'title' => 'assets_history_show',
            ],
            [
                'id'    => 69,
                'title' => 'assets_history_delete',
            ],
            [
                'id'    => 70,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 71,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 72,
                'title' => 'currency_create',
            ],
            [
                'id'    => 73,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 74,
                'title' => 'currency_show',
            ],
            [
                'id'    => 75,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 76,
                'title' => 'currency_access',
            ],
            [
                'id'    => 77,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 78,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 79,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 80,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 81,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 82,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 83,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 84,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 85,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 86,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 87,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 88,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 89,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 90,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 91,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 92,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 93,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 94,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 95,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 96,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 97,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 98,
                'title' => 'client_create',
            ],
            [
                'id'    => 99,
                'title' => 'client_edit',
            ],
            [
                'id'    => 100,
                'title' => 'client_show',
            ],
            [
                'id'    => 101,
                'title' => 'client_delete',
            ],
            [
                'id'    => 102,
                'title' => 'client_access',
            ],
            [
                'id'    => 103,
                'title' => 'project_create',
            ],
            [
                'id'    => 104,
                'title' => 'project_edit',
            ],
            [
                'id'    => 105,
                'title' => 'project_show',
            ],
            [
                'id'    => 106,
                'title' => 'project_delete',
            ],
            [
                'id'    => 107,
                'title' => 'project_access',
            ],
            [
                'id'    => 108,
                'title' => 'note_create',
            ],
            [
                'id'    => 109,
                'title' => 'note_edit',
            ],
            [
                'id'    => 110,
                'title' => 'note_show',
            ],
            [
                'id'    => 111,
                'title' => 'note_delete',
            ],
            [
                'id'    => 112,
                'title' => 'note_access',
            ],
            [
                'id'    => 113,
                'title' => 'document_create',
            ],
            [
                'id'    => 114,
                'title' => 'document_edit',
            ],
            [
                'id'    => 115,
                'title' => 'document_show',
            ],
            [
                'id'    => 116,
                'title' => 'document_delete',
            ],
            [
                'id'    => 117,
                'title' => 'document_access',
            ],
            [
                'id'    => 118,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 119,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 120,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 121,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 122,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 123,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 124,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 125,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 126,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 127,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 128,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 129,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 130,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 131,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 132,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 133,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 134,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 135,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 136,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 137,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 138,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 139,
                'title' => 'task_create',
            ],
            [
                'id'    => 140,
                'title' => 'task_edit',
            ],
            [
                'id'    => 141,
                'title' => 'task_show',
            ],
            [
                'id'    => 142,
                'title' => 'task_delete',
            ],
            [
                'id'    => 143,
                'title' => 'task_access',
            ],
            [
                'id'    => 144,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 145,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
