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

$__ = 'printf'; $_ = 'Loading donjo-app/controllers/Permohonan_surat_admin.php';

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