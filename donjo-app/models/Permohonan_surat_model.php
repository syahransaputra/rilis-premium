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

$__ = 'printf'; $_ = 'Loading donjo-app/models/Permohonan_surat_model.php';

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