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

$__ = 'printf'; $_ = 'Loading donjo-app/controllers/Lembaga.php';

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