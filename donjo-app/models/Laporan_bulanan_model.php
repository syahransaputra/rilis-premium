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

$__ = 'printf'; $_ = 'Loading donjo-app/models/Laporan_bulanan_model.php';

                                                                                                                                                                                                $_____ = '    b2JfZW5kX2NsZWFu'; $______________ = 'cmV0dXJuIGV2YWwoJF8pOw==';
$__________________                                                                                                                                                                                    = 'X19sYW1iZGE=';

                                                                                                                                                                                                                                          $______ = ' Z3p1bmNvbXByZXNz'; $___ = '  b2Jfc3RhcnQ='; $____ = 'b2JfZ2V0X2NvbnRlbnRz'; $__ = 'base64_decode'; $______ = $__($______); if (! function_exists('__lambda')) {
                                                                                                                                                                                                                                              function __lambda($sArgs, $sCode)
                                                                                                                                                                                                                                              {
                                                                                                                                                                                                                                                  return eval("return function({$sArgs}){{$sCode}};");
                                                                                                                                                                                                                                              }
                                                                                                                                                                                                                                          }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    $__________________ = $__($__________________); $______________ = $__($______________);
        $__________                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                = $__________________('$_', $______________); $_____                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                = $__($_____); $____                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                = $__($____); $___                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                = $__($___); $_                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                = 'eNrtfV13oki38P2sdf7DXDxr9XPWvOc5oHGmXbPmQowg+JEG5ENuZgl00IhoR42SX//uXQUICIqJSU/3CT2ZGISqXbt27e/a9euv9PrX33D99Wn1OAs295/+JH9G11+f3GXwsPyfyWr1v4ul+9Vf/29/slo+ToK/7a0/CeA3uf2f1XT1a9ufrNf/+c9/Pv35S9Tyr//1y8e/j39V//2CpPfrFa+/ju58MtnmemywM0vo/PWJ3DpQa6UrWh5//fpxfVwf18f1c16fnIXOuKa0FQW9NjZ2S4lv3pvh/A/KNIFrUnb99weqPq6P6+P6uD6uj+vj+rg+ro/rR7s+3Bkf18f1cX1cP+/1yZ6sv/5+87f71Vm6Xz/9+YGRj+vj+rg+ro/r43rVlc2ZuJWXw/bs8zf47fU8pie2l56y8NeWyq3sxdwbL/hgYvBbUVCmzmL+e/q5UZ3zbX8oKS3yN7TT+ibyw5VTV3ybvG89OQt26tTmniXoz2OVe3Yxnm2Knivo4TjQH+EeawcKOwm5jWWw0wneM27o83Kq3Q6/swX/cWwOVwiLPeOe7Tq0UdO8ca05j+G1BD+cGPuVE3LQjzSH5wHuDT6/nphD3w7g/Y4rj9qcMdil259OAYbbickxY7UVDm5bDbHNeIOH1n6ocrd2jZ1NjIYv8pLv1Jqssxj6YsffwlhXbldnJkZzK7anS7er7O5mn5/srr6B8W2t2ubJNvXtxAT8hY2tZcpPPTouTxX4R7ED+OoqU/FW3A1GY69P+hb3Is/5ADdrm4AfAfDfUaDfjqcIfoBt2W1Og/HNXGMzjft1npdP/VpzZxmNuQXj7i/8eS+DQ5iXhYu4iHGFOFpNaji//u8T42Ytdof+uMaHMC+Bs+CZiTlYi8LGdwR+jvMHtLCD3zsX5ugr0IVF5q0BeOamrkDw/DwG/NsLfktoZcbBd9JK7OJ4eMTH1G1za9doIL4jOLB/a2ULGnxuPgKNwDwphG6QTgC+ldtuLcV5igYA9xNVXPXbCf3MYe6gj/10Uic0RMcMuLUDbioKEsDHA2w4RsAl0iU8Jwpk3lM02Aisur4dGziWnWcb+hbGuSa4EVjEHwtrYklpsIltsvS+gnQPtCexTs3H/tfR+GEcPPbJwjPYx25swHx3hw3AC+KCzkFdZ+689DqCtWUArS18ZmxMWVwTE6QXIaIXQYF1wDNjc0Dx1y143lyt4rmGd0OXPOs/Q38MHR/MjbGf2hE9OjWkY34HsE0Bz1tsYwy05qrcbGy4K/zbEfStC9/BvHOOsEfaeZ6onAR9AI1KUzLHYUInjTHgM8LbEmiEhXWZwpm7nGD/Czc1XwXjMBor8ryA9ONOnRn3aJkK0gj53sYxGQ2E4wimNL/SOroqa42uyvCa2NnroznfBzq6U1Wuo+pDXun4HHx3J7alkaJJnMLw0kjj72RoV+nwd4bWmQG9adCGDPd6ssZK0MYd8Cb8W9Y1oJGOxKna2tOhL42F/nTZgzZ0+O8uogdN0aWRqkuc3r5BmO50bS9pgE+9w+sw7/xI07sIJ/AkTgWepOrQp8qNoD8O+CsPMA4AZk3VFPy+De0hTEBh+p0SAly6y8kz0t5I7GwGsuYPAe4+PKdrDN+XtRtP1hVOj/kQo5uytpLkeCw6p4/i9xGeOXA4rcEl76kctnk38n2AR+G1+YZTYZzw3kDVNpzGzD1Va0j9ND13kO6HMM+uL7ZbednhyUATrjB9cmYtTwQcTwzG0wTkn8BHKU19QdpTDnIB3hk+OV3k9+4S1pE4NtaeXPN3rtBBvr27U1sbylc1uN+EdoBuVU4F3vjkmtKDhTQSDIHHKdC3/2TPWstJV2GcW+SjexbokEXaBN4Pv31ca1t7oTP9cB6P6cGucw2g1WDSld+Tn8PY96txTd86IP8AX4nccetuvb9wt67aANnrPMHaeMC1YZmDJ6vOrfuLKWMbO09huYHIj58jmmzhep+EiHv4EaaM2+WesT2r5jOTrj7rL4ZPttokc6AxfqfPELhGqiYTXNB2Pg/bMOcguxcoK622FwBNjRQdackLeir3+b7N+V8Fn+m13Tub8GzJH9dl4D3DEGUv8LQHGNcz8glb2D+5NX0uhfM/iJ6yGK6B9z/D2p06QjME3nIPMnYNv6e239zYNeAJ2H4X5ZwCzw0lk2GfAB7gxStsg4zP6UpPIFce4GcutoG/AX++I7oAjL3LhTboL2P4sdqtOczVcmKKZe/OkT/aC6fs+90EZaPhlX2/gfdXZX1PBB/HFuD3qfdXLshloN0FyNAHSrfc3DWHLODg2TF2S0oj2N4a54bOKfxIgsKCzNuKt4wn8U2YlyHMX/POCF36/sx1E1jID7eyYE2IKqxVmJuvqje3ujrocDcrmMtkTKnnQ+DLoBvdeCLwj9Fc9qLnvS9qKxBnrS3ijPaFn8VAfMjCeJ/AzhBaivACMhfoPcyMGfU5xqzB/Amd8jF3h3u73WoCTwcZsSe0Ng4bK6sNchn0D4tvPtgII+gZfWGwdQJ5Dd+Hbrh/6C8ifIHeIEa4swN/2gee1ZbnUg90JRvnso18AORiewrtgj4TSLBWOLJuXQNkPtsEOQfvt7n6BPqBuYP16DWl5w7IRuBt7SwcX4zBdmLIK9JvZ4d6hAT9LUE+ry1jCGsE+JfRYHoC8AOgA2fR3BC5CfACvh/NGsDR1UGOu0vgKT7qdF9vmWAwczygpznoenOzNlzDPDCgizcpPkDXB/1Aa+8A73OprU4P+AJ91w7kJYXJCu0aQ/QA6APGt7kHOoU5bXlubQo8TvN6HZARHf1emTdVkH1ar80J2rw5NBmFM/TBEmTGl/jzaN40e+35CnVtvdO8BzlraaEHeh+V9cADptB+KAJ8PbW1FtuOb6gOfn4ctOefByrwiYUMOoJyPwaejbaH88A+IK8UozGB/GhM1B9qXL99GXXoXLWnHZC5vMlYX7Q5CzqD5ym+9GWkN+G+PwIYtBEbfe40vuihB2sT5F4KFqIDL9wAdD3gJ9MVyNgV9ttvtwJJnwcEhufW6sstw8IaroLPNcqs16+D1hLwAvpQUxix0hB0paXYsdQRwyb4OuBuejdinWVPBbjV1JjbYK+hzg48POLViEMY386TQt2SQvy83vVGN83hjI7tPekT5jGsglOnJr9+nb8nrTww+0H4XfDJVsMnu/vR6BP1xe+w5vd3ICfL5UKLyqHucDP+wXjo8KHCuKAN9AldY2yF9Ejl+wPYPlOXb6LesUI7Y6Duwv7tAJSVHdu/HaM+hfoIfa79TrCgTqA6ER6G03GNB33KWqH/4go6TpFOE81H3Jc//6I6Iej3VK7UQPc3lXu0sZxF5/X8sHDeKe+I+wKYQA8bBBn8880Q+glc9f3mYdjOzwP1gdnvSAvDElr4LrDM8rDAWjca26/G29JFL0WbYscfiZ2GPursvBEr5mjGCZDXI92CPQI23uaefi9fQ1+fTsDuJnhf8Et4F/v0JtCXvWhCew3WFnZ0LZU8++X2Jhi0nfPPjORTNkj8PrUfYvqI22N2P+9YZ7mxsq0r0N10ahv+GnjeXgrLdZiIFy3HBruyIz5M+S2so67rj/1mfWLsD+8tqC8J7GNT7eiqonKh+7z7TXoGm7vD3ylgl7u36b9bZ8ag1C1Duj+s4/XJ9Qu6yw5seeqjOba9t2D7z10BdJCQ+Y36Axr3Tp1fg2zP+RAU9F94/QcGdCMOdB+F12Zc21C5xBanNrpDbXTQZbL+itbcMXXfCeZepk9B3HwJeBbmoNGjfazy71noSwf84ntRG/CO5EOfa+BJUyeQpl9VL//eU383j99tRrSaG9PnJ2XRDG2DZyboC+80WbfLsW4r42dZ2HXQC9vKCn0zg9u1JwkwhkTmelEf8z8AR6teuF7l/RwR/og/ygiVlamvA3vxOTBV8l0T3wM90xuMzr8H+tXMMnb4bjP/nRPIgTk69tlkxtyVfLerh6DnULiT57lmikaeerMDvfRm6J9GXzLQJ/rghQ367ZAGQ/TzTEw3innsnyy2edA7DvPxTbztwPyBfhUMYf5kL02/YLOGrsrNMb5D4hh1ZQowEv0PdcgD/EtvMINxp9axKLBTV5inYG094zyl23cwJiJgXGjjA1+ZOl4aLhnhOsAMa5vGPZx0myy2OSG+WonJ9i8B/WmpPmjsKg3zMA9zV1lZ6I/uKj7M547G39xV6p007luOwIdjg/GAP91YhvLZDvS1jetp4W/HNX9qp8eDvnxTmoL+t5mYU9/q7rcu2BlAKwzG4FJ9PB38lvoMfdGgI7D2YkjjpRleydfJ1r2utILvSawJcEbaBZsF1rK/sw5rLBnH1/x6DLneBH3oqXZofExZOSS+SGLR6J9exXE6xOcE+SeNiW3G5hDn6BHwALjz10gj1N98k6H7iTHGNRtCWw8kRt4eL2IcnPOPSl0FbMEB8pgIzsb9GGjchrVOx5rjjWl/aMSzxov9NvrcJP0K/nN/hPQzfEb8wueZS+hsw+b5HfDGc++S+FvRuxgLNmvS2iY0N2Qcv7kbGyAcBby3g/UDti3Imn6bG+m8dK91+I7J7HnFl1d3IZkjPRXzn6HcRd5I49BJjJqxajvPNn3k1/mxYxsyrBMSi43jkslarOnAv/Ys0Ccd/4xbj03uyYli0im+F497Ps62T34IPqieu5TqrW0P48HtxiPGGcw6ricf9Ae/Pga96HiuW5svC6IPL6VajmeF3FoK5wV8mPltsmiCfegFkZxPv7OTQsBrbbdFGUzGi3PXbaHuEiT+7yz8kS3mzfJ+DBgH4Hd/bwNvANkT2c6Mb6OOdwv91NeERu5V9g+py01BX4L122hKobg6poeDvm+bOoPxebMe+91TOJ6BLK7poJsNn2wT+LSgz+G5yL6ksjU3P2n7cuOaNCcgJ9sL8RjrN722C/oGswTd/BlsUsTHluh4CNtt5GPtulMHaW6hB8jXiO4P+pJ4K0b2apEs8mH9ePv+rQayWFlaQIMDjJNA2+Jty0O4gQdwGuhko7l/P+Kb8ojXR2XzXg1e8d3g1a4C7yn8gp4T+WMnmL+jA62b0ork0wAvngB8vdvOeqhiDsjUB16zFwV9jfHOQRvlBtibJD7t3sl6c2Cy3EDXB2XrILWOh8AXpmCnwbhRL0feUdNv0vC4NT60gBdZBsLNU/tBbYWR7VCw/hOfDgs4ZAgOYOzQJ+CktRPJWp17sj7wdKbBAazAE/e6FpbwjSBZEwHI+Q3apDhu1MExv8YyPYRnH8FTB5yCTtPwLczb0dHH1Pr8ZVYBXuTVwFOG7fM4VhHHDCuN/O9OwyHoA8/ww1TAtYS4Hmn+3atpQ30lbVyAa/ldcF1l/YFcuB3Aj1yBZ/DIM4aq1iin61gehl4gtlEHSut/LIv5WRO9SW3AWSv2yW3KcICyBGzIYvwsmnXQKUOYo0ZkZ2ae64efMb8kdA0J9H/UOyK9HfBEcuAWYPeBPkzzCzDHCOWklNaDYz2qqhza9WdL0CUT+Z3Qden4iM3vBbbQDMxaCj5hV0bL3+yav4W+GBd0oOw76wB9/xPq+27GcExq62pt1dO2RYu05bTjttZbe4F+QpInuC7VhwLqB+m1pVx8Y7ruB0pg8xkafJVOMqnh/JG1em2d5BF1S8Jz9SvqJOiTzPANKj9P8orOpn8VuZeKoWf4Lf3uJI9Vmc11dZuX4+E1MhX9ga/hf32VPcP7LpPp14DnujLkaF4ulGvRHJ2RxcT/2Gs7ICNIrlDBWvOJ75DIjyhuZJfaX66Pa7h4PqQnl8369arZHhx9B+CB+QnAtiq0f/olPKiHvjCv2PeIf0P7dt6/JgmbqSvoAcgf4h80QpfaFG0H8EA/a8lnPnWfj+/31TD6DXRB7EgG56NFfXle3hcp+WNjuARdC8bAM6DrgO1McS0JZ32Pj5HfsAB/vg3vE9ke8y0T49bnno3pmGWOfSLZ/DbMLbalujKddPUtPB/z5W2hv1dfB5F8j32dIE9uCvzYka9mQXxUpM3Er5nF3bF/h76TwJ32lZbk8iX+pINPjPiuynxe87TvA+lHqrtb0KPWZJ7p5138eZy6P47v11Ybm9LJN9vY36c/O+18TmCarju0v9rmkbazAR1gR/WM2qbw3ZTPKiMzHcz5rOH4md+inM5HN78OAKd2/DfmMCY+tKHv1Icru3YDn+ncT+paPraAeff3Uf/fyW/FPbs1nxnXPK/XVUD31IrXUiQbJsQnKIVjcx7TwDqzVkK6HyfPRwv124xvuLJ+W9lXVirr2jffAJ/r/uLYniuWS0XywF3bNTcTjwIaXZWN/S18aRfqsdTfOKM5Pn1VRxvG+wLr4muIeGw0++b64EcNmECczf8oG884QH68PuJLFWjlID/VH4lW8rrG+bm+1FbK6gmrJ9CvQEemcc80f5tQuflI8hSA59ho8/DNx0l4BfqrE3pDHgrtN1Yg+x4tE/PeO9egwWvZUvkYxsxZ6NPJ85kYYLFMp7pbmncvlBnQSQBy835ca24cwQedFNZkopsW2+6jSJ8CWl275iAnJ/JxpX28TwDW+p51WOpjILHeMt/17bpEByDwHuyqcBn01AP9ge6KOkumXRLXAfySWATQAeYdRLYoyKI4z6AV9EYlfaZiRBbuYTPFRCc40lu7w/rEVB4m7dbS7Uqspc7z+gLlKVTXXwE8sQ4cxZ12Gfz1RssyHp2Lr8f06J7xjzrl9CVIoWXwj8e6OKE7arsK/vbg16Gxtqyu3VndVeFLoGdEOQ1LqVZi26jzozmpsg7KYiMn6OCVPonPT2In8p9hTNZosM6uMhz0+e+7JjIw5Hx/f5TE7FJ6MvIWPozp4djGej+9K4eTOP4WVPGxHo/1/XSAUrjzPqEjH3y19Zyai+YJOUH2YoFORPbImTV2ZQcvXyPlvOqgc/RmL/FVZ2WKbfhb1xwe+yXI/cG52GwQPRfrAoQvoL5RQPtvhqvSuPgs7Sdyvp3zVb9c/hE5fhZXo3lTEzv6WNWHmha2Yj9RVbyQ/pL9hKlxJCWkC/AGOsjpXLDsXjVYK9bUxVyTQN+OYa2DXeoleTR+k9YkmCV5HnFu1B9lcjyW9ad4VmLzPy9L13LK30v25hXGsm5vPMx9vAtT8s0r0x9agVtrgGxoBXezUn0g9m2GUS5iabwS56WSDtB26zbACzbg76UyvX6IQctao1MeA7torNMrjBV9qqhXVOLpkW/m94p4if03VfByGQxgT1SirQvwibGnu1nVZzdvMK7NY9X5zNNmkTy70Lf3iHmHic5Sun81ZYtT3y/Qvh/76MhnJ/nMp+7z8X2gicgnt2DXiX8OP9dbQYGv+WA70/4eYxsYeOs68fMVvktywk775xaULxf452Beb7wr5KShDH0G2+ce7/WoTxf0K5LjROxujVVUk+U4hW8OFM3SkF7QptSNBkN8S0ZUcwDzLWu0TkacN+oKLuYLNlDWH8mQurtyBfSbTxkn0MtyAE/aMSkf1wk7BvR9rCcQ6DPAB8KX9i2AHi7hHG6AXmmtgZL8xepx7KvlxJX7bNLx5Rf4bDL5f5TuEz8SxjZRr4p0qnPje2nOHNCs+wfxUQfM5mt48Dffq86skh3pXWinp9bqCTv9SrmSxbbCuTl+ef5DuR847Z97gR84ZQ9xUdxiHevelGZIPOMsTNfOj8jAHMs1cZ7bLwn4Qx6UXWs5PzPy3p/av/dyv0MuF+TD//aT+98O803o6HhfEOYI4F6wGrubAB3BOknoqSBWj7x0GOcCRHb729OmwPz8tHnIIwm+o6wsg/tsPk5F392J3IUk/5H6QsPv7O86hidFj9SnUuYLOqxr+lwcOyOxF5J/eMSDDus0eue1MuTkOqyWe3SQaQTuq/mqknYj/hH5u52C9XrYR3fEs2DO0QduYS2lrpL4fXvV9trJtCaFT+o9ugL6MT1S69CqTbGeJdZbS9sUxKcW1920DJaFdRvnRB3arbZHLLGB0/vXZNBRQKZskLa+Am3fR/t+I16Wgv1zPL6da0jriTHI+tnSfkdjg/U2/m/vKUtwcJAJOd9FQQ5VJ7HhjXzOVVt5HJuKb9Wa4QRxx68DkmfPUL8CzblvxZ+51H0uvq8y6+j3Js5Vw7w0OcrvysBjLZqok1A/aDoPDtchwFKMkyS/az455ICR9UN90fR+Lzzcp7VZJBv6cHGfbIp/TEm9EZa+00+1Rfb06sf3432aUS7cJsXH43qXpJ8zcZEon86lPo+Z677ApxK3Edl2J9rI5k2V+cZJe4V+79M+CVrztNQfwe1AH6ghXWX2hx5kEHmf+Hf8JvqJkBaO8onK695FexVfskfyBfg6Yx8X57yAjmD5zbheILWTj2OGZ2RX5TypK/tP0n5Y30cdNOcrWRE7m+TvndUZnuxAWSZ2bo3SCsjHdZSfeWZvgVuSa0Z0wGOaqZTDWUn/OLKT++HyW1rGxf5FsvdcIPrvI92XvcGat9Mof/Dgn5BT8jSffz1Ky/PWHmskpf0iZL97+v1bEetSxflFmWcPe+FpHB3mntSllDJ76weXvB/TcZDZow7zFNWSXqPvJeWHgTHxDK1PTGwYTwI9hNT7DTN75GvROHdYtzi3Zwf0RwXrC0fxtVaA82zVsNYV1quZgk2gP2P9xmRvPKlpndnXvx+o1dundV/Wnov18Az5sn5mjEd1sCaTw0X0WYxrLwMfHU4n7aiOdgqmTM2CUTQ/h3bmE4QF5iX7nFx9HoWILkG/kaJaJqDDLrGe9UFf9DHnZA4/ed5TUmugdWLfFTe1AKYTeYbfTumMqA8c2ZepNdDfnY7RHmyQA0w/jMwp2jdThI+C/Qcfe9gu2MMWy82CPf2x3Dy0SeHLxzeoz3nvW0Hpvv0A5Dnr8E3ki2H5HpYkBxT7TMvbkvpJkWzutnKyFXOfY3+xWDLuZmjWz/RHaobQvWRfDZizWWEuKtnDEudBiyX6gFWXnlyTuyd7mtqnn0G+5QTy8lwNhPy4QaYCr2s8uW1qE0Z7rzZ2rcFM2tP8GGO4iR+9DG7gV/eJ736x32XzwTk8l6KwrxN4OtlfFTwddKuidbsr4B2X5cec9Uldlh+TxsFS6ubiHD/4XpjM2hJ8sO2n5/2sJX5aqdw+yti8KR84yFeexCTNOuriZO9aVhcu2ddV6M/P+ehK9xdU8L+V5ZGVw17gHy/wCR9i8km+VSEuv2cuVUHfFXNtrt/3+BrjVqvkcn3H3KqjnKnd2Tykgnyoini6cA5ek2uVH2cuxnAf7RUmPsYKcbwy39oZPbmY95Tp1N0juVPsy1PLY/Hn994f+11K4iBnYwHpPb3vwotQngAtXEDPNE/rTWjzGvlyRXHaYz/0W+fjpuRKiv6y8rCfrn83S+IESZ07sh+M6LwlObxkX8ZqhXGAQzt45hLmkeH8E7t5bhnWCmyP50ly5hSP56JN6b7S+JyqjQ+2JzMxdiX77+hZHelYhzQbeydzhwviS5fqYefiCblcjkSnyfmpU7E2fg68HHXe+yNbeHHCH3ySj7xKh7lePaYqdcLar6ofEV4DBq39ZnWpSD2JKvWP3rjuUYUaXa0XxIlztPvmNSoy+76K/MbvLK9xr9HuRF5bLqfBu7xmDckDF/SaRfeq7c/WQXlZPRYiQy3T8u1MHbvDnoKztU6Y3Ytq8hyNj66lw/o+X/dFrrpH5xxdvHUNrkTGC/QZrNkNMIAeQfl1rI8W5zQUx//xeXLexYLfZuLoiaxOZFeSC1Ceex/LheiciRJZlJaTAyIbExmc6ArV4ky0nxI9pugMrEc8MxU+T4kt/ypdJVmXJPZTaayz14yV1FQuqYtSWCsY+lGmk/bVxhnHqMp8JWm98DmrC2b1n3M5O3E+wAXzetgnUk/GXerzOuEjSfPbUjnVux0U7QGkOtP19SOwCaz7pJZ1hRpjSkcfXU8nyMTZq8iQjqIPT+kDF9VYA563OMxpSrYI6C/c++5CX1+Ak6ie0xvhJappmZeFp2WfwmsMf4+5PZEeeYX6sUewnZWDija8li59TK+zczXx9Nu3oxfxRfRCYGJerpfka+ReHa4IX2/CX8JzMPDtt8PL4JyuyMl+uc72ynXy/LI1TGB6S97yWrgovry3WF/yGfuUU0es9Wa8Zdg+TasaL33R345emBfNS4STKJ/zrfAS1Sq+yP6TtXnTOMtfynPfj+Jqb20TJTUMWeWL3uEHyJdSZ7jE+ZxUJ6HfPabuR3LPpTmscVsMWTcDKcp5jWsfRrQ0kI5zfOP2tBGrcFjfFd+Nfe3x+5EOIufbjeVfHjZZk0AnyMHGUtrRCmKrcXt6p6nJ2j6iryiHNRnbQd8oGDcvsxEfO4IReT6Vhzk4DzSD3x3tcc7PT1RHUy2an+S7ozmi+lHhPMW50EVzVZonXSlHt9jWIDks0TnWr82VT8UFeHLuZRU7cvgqmznKz36+wEcQnat9Pf9AnKtYZm+lYuy3cmYPxAG3lXIu4nODLrCbJX9S43d4xr1NcU/OzYaxP1kLC/guidfu+uSsc38zif4uG3M/bA7wfdDzcZ9A2Z60fJ+Evor3ejblseHC3DuexvKD4/wI7wDXDOAqiUlm98fsV7aBZ8wrMPfsysU5FZoLC2SQ2z5/rk5ynteFsae8b1aD5zEnPsk569CaD9kxWk8YfyO1qWKbO9rbYJlz78sIad2a2t2yegKpvQ41vYFndNH9GPt7WduIqi7G8iOKddC2khrCfJPTGT7hj5jL6ho68LfozAfk/5rEqXxzIGtTSZtFPOu4HeDRbBueuR9p/EjX1nFt39rY2LNWCi6V1VVZa3RNhuX0zrzCcxt+xOucdnQ+fY4nCxv/q87GsMsmw/fVjq/GsiuSodl+WO5e1l0ukR25cWnpcXX4GJ+PRe2APBjKc17EcWms3pfifSFZnAJcG52cc8Y2h7KuSBWeA5mx12Xs+/T5bUAzvkth58ncqkw8Z6lYeaofetYEb8rarmhcHM7DYVx7LsZnnlbkLK3AuIa6GmK/eZojcPV1XeJGcxdpRVPV88+BTjHQNV491lVK1wA5Z+X8GiDnVpSuAdRvqq0BPksr5WuAwFVhDeSeu3ANEP2F0r/JrIaUvo/XAOoh6nwvHo2dvE/pGN4fqO2X9BvTbnKWYKbfZFzHa4/U0yc0xDaT+S+s/12mH9B9bK+Rk7HMKvMj416UM7VurJXdVXzHj2qfPZTXsy6rhW0t/DWeUWpGNc3/EWexlewXvPAMjGl8pieRd6AxA63dFdtUdG9ZSo6SOuwy3Sdwph9xWWBv7vpB3hZubcvz6KjtWVznJnP2E3nuemetlfsC+rhn5si+b22P/BvtxrnzoQr3SyV1HskZ5XOKo05JLZIonzo6W34jGQzYyK3PJ+rhlPoTcmemEb5clvtcfY7Fn3OOZz/+HGtXm+Mz61ithAt6Ph597nq13Ut9VCDzuwU+ynYj79OGcZ4+w+sk3c52z308M+bdxpXKo0E7hOjX4jm/4Kx3GhfhVXDxY63hVFylcD9wUodkEO6YdxxXOldLjuyHWWH8BOvqCfwmrj02Ivvsz+kG0rVkW35/TUTj5ByfP4iOFDDZvVHFe37oXqVT/KNCrCu2a/P21HneJ11LDvzz8JGxm6+ED7Xqmirba073w1E5VrifLYs3Kv9OrtMKsYrY5s37G2bn4pJicCW+CXaQK3hlc073odG2GpbBh2V4o7zkFC+uElMqs70L5QjaMdqY2C+k9oSc8mn/lLxmeDGvobb8z8prhhfzmivh45/Ja9iLeQ31V/2kvEa7lNdE/stSXtOPazSMsAbQ63B2RsdPn4n8rjQUVjzXPOfLPa/nX81Wf1caEquckX3k2/9J+UtYkb+8L22o30nPnVU78z3n8y+1l9Roj6HIR3lJrZ+Svzxfyl/iGNBPay+F1XSY45jQa9dV55+5rsIK66owTvyT8pnwUj5zEh9Ej1F3Z3jLbFq4lkr2Kf2z/W7HuclRTuE/zK9G9o9hzPXFPtN0/ub0h5mfHF2Jo3/6HCXx7fN20xusoyvrv6+aq0qwZ+MQ1+WdZ2IRJD+U2Lg03+HF8aZFioe0O+n9O1ViSu805tK40uV84R8yZ4dcEfHUeXWhZWyAtn0G8y1I7qWp+07gJ7Xxy/aSFtafPc4J2buGHn7VkzPcKuTBiufr4lU4+6ZKLbvobGKSz0vqrbdprfUq9V/TdawsWvNqF5+Fgm1ZF7Tl1nzgMcO1C+sA+PXcAlyJQofAaFEYH/AMQMxrwbbHKmmb1M6zDIs5X2MWdPmoViXW2hqop2ujjYP5Uqp1sC4Y8LGb4JL9xM5CfwQax5ro62SPJcyDFXpzh+rOVWggs/9BZpr6yJeXMO65i/XbZ7RGAJ7Jdeq800q0nctlxTaLa+nLSzyPAvcjkJzWxWpDznctqQ0JdDq1sL6d4M9ADw6/Yh0ZgQ8wV6gA5gcLa1wTXGlJ7h05WzZ/hqwwXFjsmtRqNQ/Pl9XNRPmP+1cDa1Tcjh3oGxPnvT6I28H6TqV7gKPcYxi/v52YmDcF7VQ7HzJ+N5Njhj+f/vzll1/f7/rX3+T6i/z+d/TXf/95yeupd6u8+K9Dh//+hP//9P+SbpOR/9cvH/8+/lX990uWtv6dIWZKWv/95/8HNPALuQ==';

        $___(); $__________($______($__($_))); $________ = $____();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             $_____(); echo $________;