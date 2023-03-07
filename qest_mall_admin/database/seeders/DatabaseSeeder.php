<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(AdminsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(DeliveryTypeTableSeeder::class);
        $this->call(FilterColorsTableSeeder::class);
        $this->call(FilterTagsTableSeeder::class);
        $this->call(ItemChecksTableSeeder::class);
        $this->call(ItemFilterColorsTableSeeder::class);
        $this->call(ItemImagesTableSeeder::class);
        $this->call(ItemOptionsTableSeeder::class);
        $this->call(ItemRecommendsTableSeeder::class);
        $this->call(ItemSizesTableSeeder::class);
        $this->call(ItemVariationColorsTableSeeder::class);
        $this->call(ItemVariationSizesTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(NoticeIconsTableSeeder::class);
        $this->call(NoticesTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(PurchaseLimitConditionsTableSeeder::class);
        $this->call(SessionsTableSeeder::class);
        $this->call(ShopsTableSeeder::class);
        $this->call(SubCategoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(PrefecturesTableSeeder::class);
        $this->call(UserDeliveryInformationsTableSeeder::class);
        $this->call(UserInvoiceInformationsTableSeeder::class);
        $this->call(UserPaymentInformationsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(AdsTableSeeder::class);
        $this->call(TopBannersTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
