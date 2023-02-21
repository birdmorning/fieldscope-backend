<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(AdminTableSeeder::class);
        $this->call(AdminGroupTableSeeder::class);
        $this->call(AdminGroupRelationTableSeeder::class);
        $this->call(ApiUserTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(CmsApicustomTableSeeder::class);
        $this->call(CmsApikeyTableSeeder::class);
        $this->call(CmsContentTableSeeder::class);
        $this->call(CmsDashboardTableSeeder::class);
        $this->call(CmsEmailQueuesTableSeeder::class);
        $this->call(CmsEmailTemplatesTableSeeder::class);
        $this->call(CmsLogsTableSeeder::class);
        $this->call(CmsMenusTableSeeder::class);
        $this->call(CmsMenusPrivilegesTableSeeder::class);
        $this->call(CmsModulsTableSeeder::class);
        $this->call(CmsNotificationsTableSeeder::class);
        $this->call(CmsPrivilegesTableSeeder::class);
        $this->call(CmsPrivilegesRolesTableSeeder::class);
        $this->call(CmsSettingsTableSeeder::class);
        $this->call(CmsStatisticComponentsTableSeeder::class);
        $this->call(CmsStatisticsTableSeeder::class);
        $this->call(CmsUsersTableSeeder::class);
        $this->call(CompanyTableSeeder::class);
        $this->call(CompanyGroupTableSeeder::class);
        $this->call(CompanyGroupCategoryTableSeeder::class);
        $this->call(CompanySubscriptionRelationTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CrmTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(MailTemplateTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(MediaTagTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(ModuleTableSeeder::class);
        $this->call(NotificationTableSeeder::class);
        $this->call(NotificationIdentifierTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(ProjectMediaTableSeeder::class);
        $this->call(ProjectMediaTagTableSeeder::class);
        $this->call(ProjectQueryTableSeeder::class);
        $this->call(QueryTableSeeder::class);
        $this->call(QueryTagTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(SubscriptionTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(TemplateFieldsTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(TypeTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(UserCommissionTableSeeder::class);
        $this->call(UserGroupTableSeeder::class);
        $this->call(UserSettingTableSeeder::class);
        $this->call(UserStripeCardTableSeeder::class);
        $this->call(UserTrainingScriptTableSeeder::class);
        $this->call(RequestCalendarTableSeeder::class);
    }
}
