<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CivilProduct;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $position = CivilProduct::max('position');
        CivilProduct::create([
            'position' => ++$position,
            'title_ru' => 'Радиолокационная станция «ШТОРМ»',
            'title_en' => 'Radar station “STORM”',
            'short_title_ru' => 'РЛС «ШТОРМ»',
            'short_title_en' => 'Radar “STORM”',
            'description_ru' => '<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Радиолокационная станция &laquo;ШТОРМ&raquo; предназначена для морских судов, в том числе с водоизмещением свыше 10 000 тон. Может устанавливаться для замены устаревших РЛС в качестве отдельного рабочего места или быть встроена в интегрированную мостиковую систему современных кораблей, как на этапе проектирования и строительства, так и во время эксплуатации.&nbsp;Также возможна установка на скоростные корабли.</div>
<div>&nbsp;</div>
<div>Модульная конструкция РЛС обеспечивает простой и быстрый монтаж.&nbsp;Техобслуживание фактически не требуется на всём сроке эксплуатации.&nbsp;Возможна оперативная замена любого электронного узла, без пайки и&nbsp;специального инструмента в течении 2х часов. Имеется возможность&nbsp;установки запретных зон.</div>
<div>&nbsp;</div>
<div>Может применяться в том числе для мониторинга ледовых полей.&nbsp;Допускается применение в качестве стационарной береговой РЛС, в том&nbsp;числе в условиях Арктики.</div>
<div>&nbsp;</div>
<div>Комплект поставки включает в себя РЛС, построенную на антеннах&nbsp;различной длины (4, 6 или 8 футов), индикатор, пульт управления и блок&nbsp;обработки.</div>
<div>&nbsp;</div>
<div>Применение РЛС &laquo;ШТОРМ&raquo; позволит обеспечить технологический&nbsp;суверенитет и уменьшить количество импортного оборудования в&nbsp;отечественном судостроении.</div>
</div>',
            'description_en' => '<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Radar station &ldquo;STORM&rdquo; is intended for sea vessels, including with displacement&nbsp;over 10 000 tons. It may be installed in replacement of obsolete radars as a&nbsp;separate workplace or may be embedded into the integrated bridge system of&nbsp;modern vessels as on the stage of design and construction, as well as on the stage&nbsp;of operation. It also may be installed on high-speed vessels.</div>
<div>&nbsp;</div>
<div>Modular structure of radar provides easy and fast mounting. Technical service&nbsp;practically is not required during the whole service life. Operative replacement of&nbsp;any electronic unit is possible, without soldering and special instruments in the&nbsp;period of 2 hours. There is a possibility to set the restricted areas.</div>
<div>&nbsp;</div>
<div>The radar could be implemented for monitoring the ice fields. It is possible to&nbsp;use it as a stationary coastal radar, including the usage in Arctic region.</div>
<div>&nbsp;</div>
<div>The set of supply comprises of the radar, built on various length antennas (4, 6&nbsp;or 8 feet), the indicator, control console and processing unit.</div>
</div>',
            'characteristics_ru' => '<table style="border-collapse: collapse; width: 100%; height: 268.8px;" border="1"><colgroup><col style="width: 50%;"><col style="width: 50%;"></colgroup>
<tbody>
<tr style="height: 22.4px;">
<td style="height: 22.4px;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Наименование</div>
</div>
</td>
<td style="height: 22.4px; text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>РЛС ШТОРМ</div>
</div>
</td>
</tr>
<tr style="height: 22.4px;">
<td style="height: 22.4px;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Размер антенны (ft)</div>
</div>
</td>
<td style="height: 22.4px; text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>4/6</div>
</div>
</td>
</tr>
<tr style="height: 22.4px;">
<td style="height: 22.4px;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Скорость вращения(Об/мин)</div>
</div>
</td>
<td style="height: 22.4px; text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>24/48</div>
</div>
</td>
</tr>
<tr style="height: 22.4px;">
<td style="height: 22.4px;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Мощность передатчика (Вт)</div>
</div>
</td>
<td style="height: 22.4px; text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>300</div>
</div>
</td>
</tr>
<tr style="height: 22.4px;">
<td style="height: 22.4px;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Разрешающая способность по&nbsp;дальности (м)</div>
</div>
</td>
<td style="height: 22.4px; text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>7.5</div>
</div>
</td>
</tr>
<tr style="height: 22.4px;">
<td style="height: 22.4px;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Разрешающая способность по углу&nbsp;(град.)</div>
</div>
</td>
<td style="height: 22.4px; text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>1.8/1.2</div>
</div>
</td>
</tr>
<tr style="height: 22.4px;">
<td style="height: 22.4px;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Комплект поставки</div>
</div>
</td>
<td style="height: 22.4px; text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>РЛС + индикатор + пульт управления</div>
<div>+ блок обработки</div>
</div>
</td>
</tr>
<tr style="height: 22.4px;">
<td style="height: 22.4px;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Минимальная дальность&nbsp;обнаружения морских целей,&nbsp;(м)</div>
</div>
</td>
<td style="height: 22.4px; text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Согласно таблице 5.7.5 правил по&nbsp;оборудованию морских судов РМРС,&nbsp;15</div>
</div>
</td>
</tr>
<tr style="height: 22.4px;">
<td style="height: 22.4px;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Питание (В)</div>
</div>
</td>
<td style="height: 22.4px; text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>220 AC / 24 DC</div>
</div>
</td>
</tr>
<tr style="height: 22.4px;">
<td style="height: 22.4px;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Видеоданные</div>
</div>
</td>
<td style="height: 22.4px; text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Asterix 240</div>
</div>
</td>
</tr>
<tr style="height: 22.4px;">
<td style="height: 22.4px;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Взаимодействие с системами судна,&nbsp;согласно требованиям РМРС</div>
</div>
</td>
<td style="height: 22.4px; text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>да</div>
</div>
</td>
</tr>
<tr style="height: 22.4px;">
<td style="height: 22.4px;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Навигационное ПО</div>
</div>
</td>
<td style="height: 22.4px; text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>да</div>
</div>
</td>
</tr>
</tbody>
</table>',
            'characteristics_en' => '<table style="border-collapse: collapse; width: 100%;" border="1"><colgroup><col style="width: 50%;"><col style="width: 50%;"></colgroup>
<tbody>
<tr>
<td>
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Designation</div>
</div>
</td>
<td style="text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div style="text-align: center;">Radar STORM</div>
</div>
</td>
</tr>
<tr>
<td>
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Dimensions of antenna (ft)</div>
</div>
</td>
<td style="text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>4/6</div>
</div>
</td>
</tr>
<tr>
<td>
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Rotation speed (rpm)</div>
</div>
</td>
<td style="text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>24/48</div>
</div>
</td>
</tr>
<tr>
<td>
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Power of transmitter (W)</div>
</div>
</td>
<td style="text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>300</div>
</div>
</td>
</tr>
<tr>
<td>
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Resolution on distance (m)</div>
</div>
</td>
<td style="text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>7.5</div>
</div>
</td>
</tr>
<tr>
<td>
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Resolution on angle (deg)</div>
</div>
</td>
<td style="text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>1.8/1.2</div>
</div>
</td>
</tr>
<tr>
<td>
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Set of supply</div>
</div>
</td>
<td style="text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Radar + display + control console +</div>
<div>processing unit</div>
</div>
</td>
</tr>
<tr>
<td>
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Minimum distance for marine targets</div>
<div>detection, (m)</div>
</div>
</td>
<td style="text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>In accordance with table 5.7.5 of the Rules</div>
<div>for equipping of marine vessels of Russian</div>
<div>Maritime Register of shipping,</div>
<div>15</div>
</div>
</td>
</tr>
<tr>
<td>
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Power supply (V)</div>
</div>
</td>
<td style="text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>220 AC / 24 DC</div>
</div>
</td>
</tr>
<tr>
<td>
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Video data</div>
</div>
</td>
<td style="text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Asterix 240</div>
</div>
</td>
</tr>
<tr>
<td>
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Interfacing with ship systems, as per</div>
<div>requirements of the Russian Maritime</div>
<div>Register of shipping</div>
</div>
</div>
</div>
</td>
<td style="text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Yes</div>
</div>
</td>
</tr>
<tr>
<td>
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Navigational software</div>
</div>
</div>
</div>
</div>
</div>
</td>
<td style="text-align: center;">
<div class="glass_k7icd9BmH9aFeHLwMLjF">
<div>Yes</div>
</div>
</td>
</tr>
</tbody>
</table>',
        ]);
    }
}
