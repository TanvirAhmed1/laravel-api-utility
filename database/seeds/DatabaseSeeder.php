<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            AddressTableSeeder::class,
            BioTableSeeder::class,
            ChildrenTableSeeder::class,
            ContactTableSeeder::class,
            CountryTableSeeder::class,
            DegreeTableSeeder::class,
            DistrictTableSeeder::class,
            SubdistrictTableSeeder::class,
            UnioncouncilTableSeeder::class,
            WardTableSeeder::class,
            VillageTableSeeder::class,
            CitycorporationTableSeeder::class,
            EducationTableSeeder::class,
            ExperienceTableSeeder::class,
            InstitueTableSeeder::class,
            OccupationTableSeeder::class,
            OrganizationTableSeeder::class,
            RefereeTableSeeder::class,
            RoleTableSeeder::class,
            SiblingTableSeeder::class,
            SkillTableSeeder::class,
            CatDomainTableSeeder::class,
            CatKingdomTableSeeder::class,
            CatClassTableSeeder::class,
            CatOrderTableSeeder::class,
            CatSuborderTableSeeder::class,
            CatFamilyTableSeeder::class,
            CatGenusTableSeeder::class,
            ExperienceTableSeeder::class,
            EducationTableSeeder::class,
            ProductFeatureTableSeeder::class,
            BioTableSeeder::class,
            SiblingTableSeeder::class,
            RefereeTableSeeder::class,
            RefereeTableSeeder::class,
            DegreeTableSeeder::class,
            InstitueTableSeeder::class,
            OccupationTableSeeder::class,
            LeadProductTableSeeder::class,
            AdvisorProductTableSeeder::class,
            StageCncTableSeeder::class,
            CommCallTableSeeder::class,
            StageMnmTableSeeder::class,
            CommMeetingTableSeeder::class,
            MeetingNoteTableSeeder::class,
            StageProjectVisitTableSeeder::class,
            VisitDetailTableSeeder::class,
            VisitTokenTableSeeder::class,
            StageNegotitationTableSeeder::class,
            StagePaymentTableSeeder::class,
            StageDoaTableSeeder::class,
            StageFinancialTableSeeder::class,
            LeadPaymentTableSeeder::class,
            LeadInterestEnqTableSeeder::class,
            LeadEnquiryDetailTableSeeder::class,
            ProductTableSeeder::class,
            CitycorporationTableSeeder::class,
            DistrictTableSeeder::class,
            DivisionTableSeeder::class,
            MunicipalityTableSeeder::class,
            LeadTableSeeder::class
          ]);
    }
}
