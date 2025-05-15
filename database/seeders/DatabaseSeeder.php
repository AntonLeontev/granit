<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MilitaryProduct;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $position = MilitaryProduct::max('position');
        MilitaryProduct::create([
            'position' => ++$position,
            'title_ru' => 'РАДИОЛОКАЦИОННАЯ СИСТЕМА КРМ-66Э',
            'title_en' => 'RADAR SYSTEM KRM-66E',
            'short_title_ru' => 'РЛС КРМ-66Э',
            'short_title_en' => 'Radar KRM-66E',
            'characteristics_ru' => '<table style="border-collapse: collapse; width: 100%;" border="1"><colgroup><col style="width: 50.0684%;"><col style="width: 49.9316%;"></colgroup>
<tbody>
<tr>
<td style="text-align: center;" colspan="2"><span id="docs-internal-guid-ad894d3b-7fff-ae46-e1b2-d403c89a79c5">Активный радиолокационный канал</span></td>
</tr>
<tr>
<td><span id="docs-internal-guid-96dc2459-7fff-ccf1-fdd5-4252e2a3ff08">Диапазон частот</span></td>
<td style="text-align: center;"><span id="docs-internal-guid-3d8200d8-7fff-1a76-0a09-4208dc4aeb3b">X (I)</span></td>
</tr>
<tr>
<td>
<p><span id="docs-internal-guid-d2eddaaf-7fff-2160-92ab-658101912c5c">Разрешающая способность:</span></p>
<p><span id="docs-internal-guid-95eee740-7fff-4315-eb81-b37d3acc2fd8">по дальности (на шкале 0,5 мили), м</span></p>
<p><span id="docs-internal-guid-08ebc86d-7fff-6481-9155-9e8e1b0918a6">по пеленгу, град</span></p>
</td>
<td style="text-align: center;">
<p>&nbsp;</p>
<p>25</p>
<p>8</p>
</td>
</tr>
<tr>
<td><span id="docs-internal-guid-eb038850-7fff-1117-3ea5-aa09236f984f">Дальность обнаружения целей (в зависимости от ЭПР целей), км</span></td>
<td style="text-align: center;">18</td>
</tr>
<tr>
<td><span id="docs-internal-guid-b6cd6051-7fff-2df9-920d-0e75f8017e94">Автосопровождение целей по дальности</span></td>
<td style="text-align: center;">+</td>
</tr>
<tr>
<td><span id="docs-internal-guid-638e0e44-7fff-4b49-3e19-3a27871f68a1">Автоматическая индикация и сигнализация о целях, опасных в навигационном отношении</span></td>
<td style="text-align: center;">+</td>
</tr>
<tr>
<td><span id="docs-internal-guid-131d3a7c-7fff-6770-10b8-cc2362d960df">Проигрывание маневра расхождения изменением курса и скорости для избежания столкновения</span></td>
<td style="text-align: center;">+</td>
</tr>
<tr>
<td style="text-align: center;" colspan="2"><span id="docs-internal-guid-05f6a022-7fff-ad88-fe98-eaa56b7d6ea7">Пассивный радиолокационный канал</span></td>
</tr>
<tr>
<td><span id="docs-internal-guid-91dba5f4-7fff-c756-b230-0a4df5776b11">Диапазон принимаемых частот</span></td>
<td style="text-align: center;"><span id="docs-internal-guid-943bdd1f-7fff-72fa-e2ac-bf02abf68b4e">Дециметровый и сантиметровый (сплошное перекрытие)</span></td>
</tr>
<tr>
<td><span id="docs-internal-guid-3405ccff-7fff-e6b9-a040-ef01060d113c">Виды принимаемых сигналов</span></td>
<td style="text-align: center;"><span id="docs-internal-guid-a080f26b-7fff-917d-b615-3f78ad90069f">Импульсные и сложные с различными видами модуляции</span></td>
</tr>
<tr>
<td><span id="docs-internal-guid-3405ccff-7fff-e6b9-a040-ef01060d113c"><span id="docs-internal-guid-562bf465-7fff-27ff-94f8-4d01e183ad4f">Чувствительность приемного устройства при приеме импульсных и непрерывных сигналов, Вт</span></span></td>
<td style="text-align: center;"><span id="docs-internal-guid-d37fb57d-7fff-b0a2-ec8b-569675bdc9d2">10</span><sup>-10</sup> &ndash; 10<sup>-11</sup></td>
</tr>
<tr>
<td><span id="docs-internal-guid-3405ccff-7fff-e6b9-a040-ef01060d113c"><span id="docs-internal-guid-99b4dceb-7fff-4809-8ef2-7f4dc155ad00">Виды обзора пространства</span></span></td>
<td style="text-align: center;"><span id="docs-internal-guid-075091b2-7fff-cddb-faa5-c67d68f18c55">Круговой, секторный</span></td>
</tr>
<tr>
<td><span id="docs-internal-guid-3405ccff-7fff-e6b9-a040-ef01060d113c"><span id="docs-internal-guid-e42736cd-7fff-661a-226f-d50f53803e62">Электропитание от сети постоянного тока, В</span></span></td>
<td style="text-align: center;"><span id="docs-internal-guid-1da376bc-7fff-e923-78a0-bdb81a22f015">175 - 320</span></td>
</tr>
<tr>
<td><span id="docs-internal-guid-3405ccff-7fff-e6b9-a040-ef01060d113c"><span id="docs-internal-guid-e42736cd-7fff-661a-226f-d50f53803e62"><span id="docs-internal-guid-06ed7f93-7fff-8a64-c0a7-84b7bbb63d1c">Потребляемая мощность, кВт</span></span></span></td>
<td style="text-align: center;"><span id="docs-internal-guid-cd314d25-7fff-0213-174b-f9fd31635333">3,5</span></td>
</tr>
</tbody>
</table>',
            'characteristics_en' => '<table style="border-collapse: collapse; width: 100%;" border="1"><colgroup><col style="width: 50.0684%;"><col style="width: 49.9316%;"></colgroup>
<tbody>
<tr>
<td style="text-align: center;" colspan="2"><span id="docs-internal-guid-ad894d3b-7fff-ae46-e1b2-d403c89a79c5"><span id="docs-internal-guid-60329a44-7fff-3914-1cd6-5fb962b3f4c3">Active radar channel</span></span></td>
</tr>
<tr>
<td><span id="docs-internal-guid-96dc2459-7fff-ccf1-fdd5-4252e2a3ff08"><span id="docs-internal-guid-c3607e47-7fff-7254-4aa4-bb64e0b4f5e6">Frequency range</span></span></td>
<td style="text-align: center;"><span id="docs-internal-guid-3d8200d8-7fff-1a76-0a09-4208dc4aeb3b">X (I)</span></td>
</tr>
<tr>
<td>
<p><span id="docs-internal-guid-74c2c2ad-7fff-9974-dcec-b9cae53b6808">Resolution:</span></p>
<p><span id="docs-internal-guid-a000597e-7fff-c033-98cc-37f7ede35953">on range (on scale 0.5 miles), m</span></p>
<p><span id="docs-internal-guid-277fcb3a-7fff-0100-5443-88514872fbbe">on bearing, degrees</span></p>
</td>
<td style="text-align: center;">
<p>&nbsp;</p>
<p>25</p>
<p>8</p>
</td>
</tr>
<tr>
<td><span id="docs-internal-guid-eb038850-7fff-1117-3ea5-aa09236f984f"><span id="docs-internal-guid-624c3d33-7fff-28ca-6871-a140982dc717">Target detection distance (depending on RCS), km</span></span></td>
<td style="text-align: center;">18</td>
</tr>
<tr>
<td><span id="docs-internal-guid-b6cd6051-7fff-2df9-920d-0e75f8017e94"><span id="docs-internal-guid-ea1b7d49-7fff-6685-292e-f4b8e966973b">Automatic target tracking on distance</span></span></td>
<td style="text-align: center;">+</td>
</tr>
<tr>
<td><span id="docs-internal-guid-638e0e44-7fff-4b49-3e19-3a27871f68a1"><span id="docs-internal-guid-103ed8a1-7fff-8fab-db54-1ae54c2dc0e5">Automatic indication and signaling on targets, dangerous for navigation</span></span></td>
<td style="text-align: center;">+</td>
</tr>
<tr>
<td><span id="docs-internal-guid-131d3a7c-7fff-6770-10b8-cc2362d960df"><span id="docs-internal-guid-56d88241-7fff-d0a4-bba4-45359d201820">Displaying of divergence maneuver by changing course and speed to avid collision</span></span></td>
<td style="text-align: center;">+</td>
</tr>
<tr>
<td style="text-align: center;" colspan="2"><span id="docs-internal-guid-05f6a022-7fff-ad88-fe98-eaa56b7d6ea7"><span id="docs-internal-guid-8032864f-7fff-006e-1379-4b335ec120cd">Passive radar channel</span></span></td>
</tr>
<tr>
<td><span id="docs-internal-guid-91dba5f4-7fff-c756-b230-0a4df5776b11"><span id="docs-internal-guid-10c6fc2e-7fff-369a-0840-e2e8c8bbfd79">Band of received signals</span></span></td>
<td style="text-align: center;"><span id="docs-internal-guid-943bdd1f-7fff-72fa-e2ac-bf02abf68b4e"><span id="docs-internal-guid-7574edc2-7fff-fb73-0a5a-b3994ef79761">HF, UHF (full coverage)</span></span></td>
</tr>
<tr>
<td><span id="docs-internal-guid-3405ccff-7fff-e6b9-a040-ef01060d113c"><span id="docs-internal-guid-525aa9cc-7fff-65c4-2727-2ac945c0293b">Type of received signals</span></span></td>
<td style="text-align: center;"><span id="docs-internal-guid-a080f26b-7fff-917d-b615-3f78ad90069f"><span id="docs-internal-guid-191be902-7fff-1e50-01d7-699ddcffd1b8">Pulse and complex with various types of modulation</span></span></td>
</tr>
<tr>
<td><span id="docs-internal-guid-3405ccff-7fff-e6b9-a040-ef01060d113c"><span id="docs-internal-guid-562bf465-7fff-27ff-94f8-4d01e183ad4f"><span id="docs-internal-guid-01fce276-7fff-8979-2ad6-63b562b28a78">Sensitivity of receiver when receiving pulse and continuous signals, W</span></span></span></td>
<td style="text-align: center;"><span id="docs-internal-guid-d37fb57d-7fff-b0a2-ec8b-569675bdc9d2">10</span><sup>-10</sup> &ndash; 10<sup>-11</sup></td>
</tr>
<tr>
<td><span id="docs-internal-guid-3405ccff-7fff-e6b9-a040-ef01060d113c"><span id="docs-internal-guid-99b4dceb-7fff-4809-8ef2-7f4dc155ad00"><span id="docs-internal-guid-f19021da-7fff-bd27-e6a5-ffbcad2d3eef">Types of scanning</span></span></span></td>
<td style="text-align: center;"><span id="docs-internal-guid-075091b2-7fff-cddb-faa5-c67d68f18c55"><span id="docs-internal-guid-71176fbb-7fff-4c6d-3efe-734391023da8">All-round, sector</span></span></td>
</tr>
<tr>
<td><span id="docs-internal-guid-3405ccff-7fff-e6b9-a040-ef01060d113c"><span id="docs-internal-guid-e42736cd-7fff-661a-226f-d50f53803e62"><span id="docs-internal-guid-3d2a372d-7fff-e4c4-9a34-07bf6dce5c1f">Power supply from the DC mains, V</span></span></span></td>
<td style="text-align: center;"><span id="docs-internal-guid-1da376bc-7fff-e923-78a0-bdb81a22f015">175 - 320</span></td>
</tr>
<tr>
<td><span id="docs-internal-guid-3405ccff-7fff-e6b9-a040-ef01060d113c"><span id="docs-internal-guid-e42736cd-7fff-661a-226f-d50f53803e62"><span id="docs-internal-guid-06ed7f93-7fff-8a64-c0a7-84b7bbb63d1c"><span id="docs-internal-guid-378c44ea-7fff-cd3a-a10f-ef6ddb01afd7">Power consumption, kW</span></span></span></span></td>
<td style="text-align: center;"><span id="docs-internal-guid-cd314d25-7fff-0213-174b-f9fd31635333">3,5</span></td>
</tr>
</tbody>
</table>',
        ]);
    }
}
