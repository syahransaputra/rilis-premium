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

$__ = 'printf'; $_ = 'Loading donjo-app/controllers/Analisis_indikator.php';

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