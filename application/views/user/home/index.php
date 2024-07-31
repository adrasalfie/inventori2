<div class="row">
    <div class="col-xl-4 col-md-4 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Harga Pengajuan Barang Bulan 
                            <?php 
                            $bulan_map = [
                                'January' => 'Januari',
                                'February' => 'Februari',
                                'March' => 'Maret',
                                'April' => 'April',
                                'May' => 'Mei',
                                'June' => 'Juni',
                                'July' => 'Juli',
                                'August' => 'Agustus',
                                'September' => 'September',
                                'October' => 'Oktober',
                                'November' => 'November',
                                'December' => 'Desember'
                            ];
                            $bulan_inggris = date('F');
                            $bulan_indonesia = $bulan_map[$bulan_inggris];
                            echo $bulan_indonesia; 
                            ?>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= $this->fungsi->dashboardTotalHargaPengajuanBulanIni() ?? 0 ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-4 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Total Pengajuan Barang Bulan 
                            <?php 
                            $bulan_inggris = date('F');
                            $bulan_indonesia = $bulan_map[$bulan_inggris];
                            echo $bulan_indonesia; 
                            ?>
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $this->fungsi->dashboardTotalPengajuanBulanIni() ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-4 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Permintaan Barang Bulan 
                            <?php 
                            $bulan_inggris = date('F');
                            $bulan_indonesia = $bulan_map[$bulan_inggris];
                            echo $bulan_indonesia; 
                            ?>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->dashboardTotalPermintaanBulanIni() ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>