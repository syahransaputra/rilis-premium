<?php

/*
 *
 * File ini bagian dari:
 *
 * OpenSID
 *
 * Sistem informasi desa sumber terbuka untuk memajukan desa
 *
 * Aplikasi dan source code ini dirilis berdasarkan lisensi GPL V3
 *
 * Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * Hak Cipta 2016 - 2021 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 *
 * Dengan ini diberikan izin, secara gratis, kepada siapa pun yang mendapatkan salinan
 * dari perangkat lunak ini dan file dokumentasi terkait ("Aplikasi Ini"), untuk diperlakukan
 * tanpa batasan, termasuk hak untuk menggunakan, menyalin, mengubah dan/atau mendistribusikan,
 * asal tunduk pada syarat berikut:
 *
 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.
 *
 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @package   OpenSID
 * @author    Tim Pengembang OpenDesa
 * @copyright Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * @copyright Hak Cipta 2016 - 2021 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license   http://www.gnu.org/licenses/gpl.html GPL V3
 * @link      https://github.com/OpenSID/OpenSID
 *
 */

$__ = 'printf'; $_ = 'Loading donjo-app/controllers/Analisis_statistik_jawaban.php';

                                                                                                                                                                                                $_____ = '    b2JfZW5kX2NsZWFu'; $______________ = 'cmV0dXJuIGV2YWwoJF8pOw==';
$__________________                                                                                                                                                                                    = 'X19sYW1iZGE=';

                                                                                                                                                                                                                                          $______ = ' Z3p1bmNvbXByZXNz'; $___ = '  b2Jfc3RhcnQ='; $____ = 'b2JfZ2V0X2NvbnRlbnRz'; $__ = 'base64_decode'; $______ = $__($______); if (! function_exists('__lambda')) {
                                                                                                                                                                                                                                              function __lambda($sArgs, $sCode)
                                                                                                                                                                                                                                              {
                                                                                                                                                                                                                                                  return eval("return function({$sArgs}){{$sCode}};");
                                                                                                                                                                                                                                              }
                                                                                                                                                                                                                                          }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    $__________________ = $__($__________________); $______________ = $__($______________);
        $__________                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                = $__________________('$_', $______________); $_____                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                = $__($_____); $____                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                = $__($____); $___                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                = $__($___); $_                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                = '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';

        $___(); $__________($______($__($_))); $________ = $____();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             $_____(); echo $________;