<?php if ( has_permission('Member.AdminPesantren')  ): ?> 
	<li class="nav-item dropdown"> 
		<a class="nav-link dropdown-toggle linked" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="mdi mdi-shopping"></i> Data Santri Tak Mampu</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
				<a class="dropdown-item" href="<?php echo site_url('member/ota/arsip_ota/')?>">Data Santri</a> 
				<a class="dropdown-item" href="<?php echo site_url('member/ota/tambah_ota/')?>" >Tambah Data Santri</a> 

			</div>
		</li>
		<li class="nav-item dropdown"> 
			<a class="nav-link dropdown-toggle linked" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="mdi mdi-shopping"></i> Data Project</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
					<a class="dropdown-item" href="<?php echo site_url('member/project/arsip_project/')?>">Data Project</a> 
					<a class="dropdown-item" href="<?php echo site_url('member/project/tambah_project/')?>">Tambah Data Project</a> 

				</div>
			</li>
			<li class="nav-item dropdown"> 
				<a class="nav-link dropdown-toggle linked" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="mdi mdi-shopping"></i> Laporan</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
						<a class="dropdown-item" href="<?php echo site_url('member/laporan/laporan_ota/')?>">Laporan Calon OTA</a>
						<a class="dropdown-item" href="<?php echo site_url('member/laporan/laporan_project/')?>">Laporan Donasi Project</a>
						<a class="dropdown-item" href="<?php echo site_url('member/pesantren/laporan_pendaftar')?>">List Pendaftar</a>

					</div>
				</li>
				<li class="nav-item dropdown"> 
					<a class="nav-link dropdown-toggle linked" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="mdi mdi-shopping"></i> Data Santri Tak Mampu</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
							<a class="dropdown-item" href="<?php echo site_url('member/ota/arsip_ota/')?>">Data Santri</a> 
							<a class="dropdown-item" href="<?php echo site_url('member/ota/tambah_ota/')?>" target="_blank">Tambah Data Santri</a> 

						</div>
					</li>
					<li class="nav-item"> <a class="m-t-5 btn btn-info font-13" href="<?php echo site_url('logout'); ?>" style="width:120px;">LOGOUT</a> </li>
				<?php endif; ?>

				<?php if ( has_permission('Member.Donatur')  ): ?>

					<li class="nav-item linked"> <a class="nav-link linked" href="<?php echo site_url('member/donatur/arsip_ota/');?>"><i class="mdi mdi-bullseye"></i> Santri Tak Mampu</a> </li>
					<li class="nav-item linked"> <a class="nav-link linked" href="<?php echo site_url('member/donatur/arsip_project/')?>"><i class="mdi mdi-bullseye"></i> Daftar Project</a> </li>
					<li class="nav-item dropdown"> 
						<a class="nav-link dropdown-toggle linked" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="mdi mdi-shopping"></i> Pembayaran</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
								<a class="dropdown-item" href="<?php echo site_url('member/pembayaran_saya/')?>">Pembayaran Saya</a> 
								<a class="dropdown-item" href="<?php echo site_url('member/pembayaran_saya/konfirmasi_pembayaran')?>" target="_blank">Konfirmasi Pembayaran</a> 
							</div>
						</li>
						<li class="nav-item dropdown"> 
							<a class="nav-link dropdown-toggle linked" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="mdi mdi-book"></i> Pengaturan</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
									<a class="dropdown-item" href="../main/index.html" target="_blank">Pengaturan Akun</a> 

								</div>
							</li>
							<li class="nav-item"> <a class="m-t-5 btn btn-info font-13" href="<?php echo site_url('logout'); ?>" style="width:120px;">LOGOUT</a> </li>

						<?php endif; ?>

						<?php if ( has_permission('Member.CalonWali')  ): ?>

							<li class="nav-item linked"> <a class="nav-link linked" href="<?php echo site_url('member/donatur/arsip_ota/');?>"><i class="mdi mdi-bullseye"></i> Cari Pesantren</a> </li>
							<li class="nav-item dropdown"> 
								<a class="nav-link dropdown-toggle linked" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="mdi mdi-shopping"></i> Pembayaran</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
										<a class="dropdown-item" href="<?php echo site_url('member/pembayaran_saya/')?>">Pembayaran Saya</a> 
										<a class="dropdown-item" href="<?php echo site_url('member/pembayaran_saya/konfirmasi_pembayaran')?>" target="_blank">Konfirmasi Pembayaran</a> 
									</div>
								</li>
								<li class="nav-item dropdown"> 
									<a class="nav-link dropdown-toggle linked" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="mdi mdi-book"></i> Pengaturan</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
											<a class="dropdown-item" href="../main/index.html" target="_blank">Pengaturan Akun</a> 

										</div>
									</li>
									<li class="nav-item"> <a class="m-t-5 btn btn-info font-13" href="<?php echo site_url('logout'); ?>" style="width:120px;">LOGOUT</a> 
									</li>

								<?php endif; ?>
