<div class="wrapper">
    <!--start sidebar -->
    <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h4 class="logo-text">Snacked</h4>
            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{route('home')}}">
                    <div class="parent-icon"><i class="bi bi-house-fill"></i>
                    </div>
                    <div class="menu-title">Beranda</div>
                </a>
            </li>
            <li>
                <a href="{{route('programkerja')}}">
                    <div class="parent-icon"><i class="bi bi-clipboard-check"></i>
                    </div>
                    <div class="menu-title">Program Kerja</div>
                </a>
            </li>
            <li>
                <a href="{{route('roadmap')}}">
                    <div class="parent-icon"><i class="bi bi-sign-merge-left"></i>
                    </div>
                    <div class="menu-title">RoadMap</div>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bi bi-file-earmark-ppt"></i>
                    </div>
                    <div class="menu-title">Penelitian</div>
                </a>
                <ul>
                    <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>Laporan Penelitian</a>
                        <ul>
                            <li> <a href="{{route('lpdosen')}}"><i class="bi bi-circle"></i>Dosen</a></li>
                            <li> <a href="{{route('lpmahasiswa')}}"><i class="bi bi-circle"></i>Mahasiswa</a></li>
                            <li> <a href="{{route('lpkolaborasi')}}"><i class="bi bi-circle"></i>Kolaborasi</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>Luaran Dosen</a>
                        <ul>
                            <li> <a href="{{route('jurnalpd')}}"><i class="bi bi-circle"></i>Jurnal</a></li>
                            <li> <a href="{{route('hkipd')}}"><i class="bi bi-circle"></i>Hak Cipta</a></li>
                            <li> <a href="{{route('bukupd')}}"><i class="bi bi-circle"></i>Buku</a></li>
                            <li> <a href="{{route('prosidingpd')}}"><i class="bi bi-circle"></i>Prosiding</a></li>
                            <li> <a href="{{route('forumpd')}}"><i class="bi bi-circle"></i>Forum Ilmiah</a></li>
                            <li> <a href="{{route('integrasipd')}}"><i class="bi bi-circle"></i>Integrasi Pendidikan</a></li>
                            <li> <a href="{{route('outcomepd')}}"><i class="bi bi-circle"></i>Outcome Pembelajaran</a></li>
                            <li> <a href="{{route('produkpd')}}"><i class="bi bi-circle"></i>Produk Dimanfaatkan Masyarakat</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>Luaran Mahasiswa</a>
                        <ul>
                            <li> <a href="{{route('jurnalpm')}}"><i class="bi bi-circle"></i>Jurnal</a></li>
                            <li> <a href="{{route('hkipm')}}"><i class="bi bi-circle"></i>Hak Cipta</a></li>
                            <li> <a href="{{route('bukupm')}}"><i class="bi bi-circle"></i>Buku</a></li>
                            <li> <a href="{{route('prosidingpm')}}"><i class="bi bi-circle"></i>Prosiding</a></li>
                            <li> <a href="{{route('forumpm')}}"><i class="bi bi-circle"></i>Forum Ilmiah</a></li>
                            <li> <a href="{{route('integrasipm')}}"><i class="bi bi-circle"></i>Integrasi Pendidikan</a></li>
                            <li> <a href="{{route('outcomepm')}}"><i class="bi bi-circle"></i>Outcome Pembelajaran</a></li>
                            <li> <a href="{{route('produkpm')}}"><i class="bi bi-circle"></i>Produk Dimanfaatkan Masyarakat</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>Luaran Kolaborasi</a>
                        <ul>
                            <li> <a href="{{route('jurnalpk')}}"><i class="bi bi-circle"></i>Jurnal</a></li>
                            <li> <a href="{{route('hkipk')}}"><i class="bi bi-circle"></i>Hak Cipta</a></li>
                            <li> <a href="{{route('bukupk')}}"><i class="bi bi-circle"></i>Buku</a></li>
                            <li> <a href="{{route('prosidingpk')}}"><i class="bi bi-circle"></i>Prosiding</a></li>
                            <li> <a href="{{route('forumpk')}}"><i class="bi bi-circle"></i>Forum Ilmiah</a></li>
                            <li> <a href="{{route('integrasipk')}}"><i class="bi bi-circle"></i>Integrasi Pendidikan</a></li>
                            <li> <a href="{{route('outcomepk')}}"><i class="bi bi-circle"></i>Outcome Pembelajaran</a></li>
                            <li> <a href="{{route('produkpk')}}"><i class="bi bi-circle"></i>Produk Dimanfaatkan Masyarakat</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bi bi-file-earmark-ppt"></i>
                    </div>
                    <div class="menu-title">Pengabdian</div>
                </a>
                <ul>
                    <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>Laporan Pengabdian</a>
                        <ul>
                            <li> <a href="{{route('dosenb')}}"><i class="bi bi-circle"></i>Dosen</a></li>
                            <li> <a href="{{route('mahasiswab')}}"><i class="bi bi-circle"></i>Mahasiswa</a></li>
                            <li> <a href="{{route('kolaborasib')}}"><i class="bi bi-circle"></i>Kolaborasi</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>Luaran Dosen</a>
                        <ul>
                            <li> <a href="{{route('jurnalbd')}}"><i class="bi bi-circle"></i>Jurnal</a></li>
                            <li> <a href="{{route('hkibd')}}"><i class="bi bi-circle"></i>Hak Cipta</a></li>
                            <li> <a href="{{route('bukubd')}}"><i class="bi bi-circle"></i>Buku</a></li>
                            <li> <a href="{{route('prosidingbd')}}"><i class="bi bi-circle"></i>Prosiding</a></li>
                            <li> <a href="{{route('forumbd')}}"><i class="bi bi-circle"></i>Forum Ilmiah</a></li>
                            <li> <a href="{{route('integrasibd')}}"><i class="bi bi-circle"></i>Integrasi Pendidikan</a></li>
                            <li> <a href="{{route('outcomebd')}}"><i class="bi bi-circle"></i>Outcome Pembelajaran</a></li>
                            <li> <a href="{{route('produkbd')}}"><i class="bi bi-circle"></i>Produk Dimanfaatkan Masyarakat</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>Luaran Mahasiswa</a>
                        <ul>
                            <li> <a href="{{route('jurnalbm')}}"><i class="bi bi-circle"></i>Jurnal</a></li>
                            <li> <a href="{{route('hkibm')}}"><i class="bi bi-circle"></i>Hak Cipta</a></li>
                            <li> <a href="{{route('bukubm')}}"><i class="bi bi-circle"></i>Buku</a></li>
                            <li> <a href="{{route('prosidingbm')}}"><i class="bi bi-circle"></i>Prosiding</a></li>
                            <li> <a href="{{route('forumbm')}}"><i class="bi bi-circle"></i>Forum Ilmiah</a></li>
                            <li> <a href="{{route('integrasibm')}}"><i class="bi bi-circle"></i>Integrasi Pendidikan</a></li>
                            <li> <a href="{{route('outcomebm')}}"><i class="bi bi-circle"></i>Outcome Pembelajaran</a></li>
                            <li> <a href="{{route('produkbm')}}"><i class="bi bi-circle"></i>Produk Dimanfaatkan Masyarakat</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>Luaran Kolaborasi</a>
                        <ul>
                            <li> <a href="{{route('jurnalbk')}}"><i class="bi bi-circle"></i>Jurnal</a></li>
                            <li> <a href="{{route('hkibk')}}"><i class="bi bi-circle"></i>Hak Cipta</a></li>
                            <li> <a href="{{route('bukubk')}}"><i class="bi bi-circle"></i>Buku</a></li>
                            <li> <a href="{{route('prosidingbk')}}"><i class="bi bi-circle"></i>Prosiding</a></li>
                            <li> <a href="{{route('forumbk')}}"><i class="bi bi-circle"></i>Forum Ilmiah</a></li>
                            <li> <a href="{{route('integrasibk')}}"><i class="bi bi-circle"></i>Integrasi Pendidikan</a></li>
                            <li> <a href="{{route('outcomebk')}}"><i class="bi bi-circle"></i>Outcome Pembelajaran</a></li>
                            <li> <a href="{{route('produkbk')}}"><i class="bi bi-circle"></i>Produk Dimanfaatkan Masyarakat</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bi bi-coin"></i>
                    </div>
                    <div class="menu-title">Kerja Sama</div>
                </a>
                <ul>
                    <li> <a href="{{route('kerjasamapenelitian')}}"><i class="bi bi-circle"></i>Kerja Sama Penelitian</a>
                    </li>
                    <li> <a href="{{route('kerjasamapengabdian')}}"><i class="bi bi-circle"></i>Kerja Sama Pengabdian</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bi bi-file-earmark-bar-graph"></i>
                    </div>
                    <div class="menu-title">Data Tendik</div>
                </a>
                <ul>
                    <li> <a href="{{route('tahunakademik')}}"><i class="bi bi-circle"></i>Tahun Akademik</a>
                    </li>
                    <li> <a href="{{route('fakultas')}}"><i class="bi bi-circle"></i>Fakultas</a>
                    </li>
                    <li> <a href="{{route('prodidt')}}"><i class="bi bi-circle"></i>Prodi</a>
                    </li>
                    <li> <a href="{{route('dosendt')}}"><i class="bi bi-circle"></i>Dosen</a>
                    </li>
                    <li> <a href="{{route('mahasiswadt')}}"><i class="bi bi-circle"></i>Mahasiswa</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bi bi-hourglass"></i>
                    </div>
                    <div class="menu-title">KKN</div>
                </a>
                <ul>
                    <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>KKN OBE</a>
                        <ul>
                            <li> <a href="{{route('plotingko')}}"><i class="bi bi-circle"></i>Ploting</a></li>
                            <li> <a href="{{route('hasilplotingko')}}"><i class="bi bi-circle"></i>Hasil Ploting</a></li>
                            <li> <a href="{{route('loogbookko')}}"><i class="bi bi-circle"></i>LoogBook</a></li>
                            <li> <a href="{{route('datarekapproposalkknko')}}"><i class="bi bi-circle"></i>Data Rekap Proposal KKN</a></li>
                            <li> <a href="{{route('datarekapkemajuanko')}}"><i class="bi bi-circle"></i>Data Rekap Kemajuan KKN</a></li>
                            <li> <a href="{{route('datarekapakhirko')}}"><i class="bi bi-circle"></i>Data Rekap Akhir KKN</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>KKN MBKM Santri</a>
                        <ul>
                            <li> <a href="{{route('plotingkms')}}"><i class="bi bi-circle"></i>Ploting</a></li>
                            <li> <a href="{{route('hasilplotingkms')}}"><i class="bi bi-circle"></i>Hasil Ploting</a></li>
                            <li> <a href="{{route('rekapproposaldanakhirkms')}}"><i class="bi bi-circle"></i>Rekap Proposal & Akhir </a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>KKN Tematik</a>
                        <ul>
                            <li> <a href="{{route('plotingkt')}}"><i class="bi bi-circle"></i>Ploting</a></li>
                            <li> <a href="{{route('hasilplotingkt')}}"><i class="bi bi-circle"></i>Hasil Ploting</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>KKN Nusantara</a>
                        <ul>
                            <li> <a href="{{route('plotingkn')}}"><i class="bi bi-circle"></i>Ploting</a></li>
                            <li> <a href="{{route('hasilplotingkn')}}"><i class="bi bi-circle"></i>Hasil Ploting</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li> <a href="{{route('bukuajar')}}"><i class="bi bi-circle"></i>KKN Buku Ajar</a>
                </ul>
                <ul>
                    <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>Monitoring KKN</a>
                        <ul>
                            <li> <a href="{{route('nilaimahasiswa')}}"><i class="bi bi-circle"></i>Nilai Mahasiswa</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li> <a href="javascript:;" class="has-arrow"><i class="bi bi-circle"></i>Seting KKN</a>
                        <ul>
                            <li> <a href="{{route('tema')}}"><i class="bi bi-circle"></i> Tema</a></li>
                            <li> <a href="{{route('reviewer')}}"><i class="bi bi-circle"></i> Reviewer</a></li>
                            <li> <a href="{{route('plotingreviewer')}}"><i class="bi bi-circle"></i> Ploting Reviewer</a></li>
                            <li> <a href="{{route('hasilplotingreviewer')}}"><i class="bi bi-circle"></i> Hasil Ploting Reviewer</a></li>
                            <li> <a href="{{route('luaranwajib')}}"><i class="bi bi-circle"></i> Luaran Wajib</a></li>
                            <li> <a href="{{route('setingdeadline')}}"><i class="bi bi-circle"></i> Setting Deadline</a></li>
                            <li> <a href="{{route('plotingexel')}}"><i class="bi bi-circle"></i> Ploting by Exel</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <div class="parent-icon"><i class="bi bi-power"></i>
                    </div>
                    <div class="menu-title">LogOut</div>
                </a>
            </li>
        </ul>
        <!--end navigation-->
    </aside>
    <!-- end sidebar -->
</div>