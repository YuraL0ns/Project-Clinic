<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Doctor::factory(25)->create();
        \App\Models\Category::factory()->create([
            'cat_title' => 'Новости клиники',
            'cat_alias' => 'clinic-news'
        ]);
        \App\Models\Category::factory()->create([
            'cat_title' => 'Новости здравохранения',
            'cat_alias' => 'news-medical'
        ]);

        \App\Models\Post::factory(20)->create();

        \App\Models\Razdel::factory()->create([
           'razdel_title' => 'Взрослое отделение',
           'razdel_alias' => 'adult',
           'razdel_images' => 'images.jpg',
        ]);
        \App\Models\Razdel::factory()->create([
           'razdel_title' => 'Детское отделение',
           'razdel_alias' => 'children',
           'razdel_images' => 'images.jpg',
        ]);
        \App\Models\Razdel::factory()->create([
           'razdel_title' => 'Лаборатория',
           'razdel_alias' => 'laboratoria',
           'razdel_images' => 'images.jpg',
        ]);
        \App\Models\Razdel::factory()->create([
           'razdel_title' => 'Дневной стационар',
           'razdel_alias' => 'days-clinic',
           'razdel_images' => 'days-images.jpg',
        ]);

        \App\Models\Service::factory()->create([
            'service_title' => 'Анастезия',
            'service_alias' => 'anesthesia',
            'service_title_description' => 'Анестезия (обезболивание) – это обязательный этап при хирургических вмешательствах и болезненных процедурах. Современные методики обезболивания позволяют подобрать нужную глубину анестезии. Врач может погрузить пациента в медикаментозный сон или оставить в сознании. Метод и дозировку оптимальных препаратов подбирает хирург и анестезиолог.',
            'service_description' => 'Предоперационная подготовка',
            'service_many_description' => 'Пациент должен проживать не далее чем в часе езды от медицинского центра.
При отсутствии такой возможности, целесообразно наблюдение в условиях центра до следующего дня',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Гастроэнтерология',
            'service_alias' => 'gastroenterology',
            'service_title_description' => 'Употребляете нездоровую пищу? Чувствуете дискомфорт в животе? Беспокоят нарушения стула? Не проходят кожные высыпания? Заметили ослабление иммунитета? Обратитесь к гастроэнтерологу в Первую многопрофильную клинику.
Своевременно начатое лечение позволяет полностью избавиться от заболевания на ранних этапах, облегчить состояние при неблагоприятном течении хронических заболеваний пищеварительной системы.',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Герниопластика',
            'service_alias' => 'hernioplasty',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Гинекология',
            'service_alias' => 'gynecology',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Кардиология',
            'service_alias' => 'kardiology',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Колопроктология',
            'service_alias' => 'koloproktology',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Нефрология',
            'service_alias' => 'nefrologi',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Общая хирургия',
            'service_alias' => 'mani-herurgiy',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Психология',
            'service_alias' => 'psyhologyia',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Рентген',
            'service_alias' => 'rentgen',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Рефлексотерапия',
            'service_alias' => 'refleksoterapy',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Терапия',
            'service_alias' => 'terapi',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Рентген',
            'service_alias' => 'rentgen',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Рефлексотерапия',
            'service_alias' => 'refleksoterapy',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Терапия',
            'service_alias' => 'terapi',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Травматология - ортопедия',
            'service_alias' => 'travmatologi-ortopedia',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Урология',
            'service_alias' => 'urologia',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Физеотерапия',
            'service_alias' => 'fizeoterapy',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Эндокринология',
            'service_alias' => 'enokrinology',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Эндоскопия',
            'service_alias' => 'endoskopya',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Дневной стационар',
            'service_alias' => 'days-static',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '1',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Педиатрия',
            'service_alias' => 'pediatrya',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '2',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Общая хирургия',
            'service_alias' => 'ch-herurgiy',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '2',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Детская герниопластика',
            'service_alias' => 'ch-hernioplasty',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '2',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Стомотология',
            'service_alias' => 'stomotology',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '3',
        ]);

        \App\Models\Service::factory()->create([
            'service_title' => 'Узи урология',
            'service_alias' => 'uzi-urologiya',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '4',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Узи поверхностных органов',
            'service_alias' => 'uzi-poverhnostnuh-organov',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '4',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Узи суставов',
            'service_alias' => 'uzi-sustavov',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '4',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Узи внутренних органов',
            'service_alias' => 'uzi-vnutrenih-organov',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '4',
        ]);
        \App\Models\Service::factory()->create([
            'service_title' => 'Узи сердца и сосудов',
            'service_alias' => 'uzi-serdca-i-sosudov',
            'service_title_description' => '',
            'service_description' => '',
            'service_many_description' => '',
            'razdel_id' => '4',
        ]);
    }
}
