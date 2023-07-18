<!-- Sidebar -->
<ul class="sidebar fixed-top navbar-nav ">
	<li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
		<a class="nav-link" href="<?php echo base_url('admin/overview') ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Overview</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('admin/SuratOnlineAdmin') ?>">
			<i class="fas fa-envelope"></i>
			<span>Surat</span></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('admin/pengaduan') ?>">
			<i class="fas fa-info-circle"></i>
			<span>Pengaduan</span></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('admin/agenda') ?>">
			<i class="fa fa-calendar" aria-hidden="true"></i>
			<span>Agenda</span></a>
	</li>
	<li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active' : '' ?>">
		<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-users"></i>
			<span>Pendataan</span>
		</a>
		<div class="dropdown-menu" aria-labelledby="pagesDropdown">
			<a class="dropdown-item" href="<?php echo site_url('admin/alamat') ?>">Alamat</a>
			<a class="dropdown-item" href="<?php echo site_url('admin/Pendataan') ?>">Penduduk</a>
		</div>
	</li>
	<li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active' : '' ?>">
		<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-building"></i>
			<span>Goverment</span>
		</a>
		<div class="dropdown-menu" aria-labelledby="pagesDropdown">
			<a class="dropdown-item" href="<?php echo site_url('admin/Visi') ?>">Visi & Misi</a>
			<a class="dropdown-item" href="<?php echo site_url('admin/struktur') ?>">Struktur Organisasi</a>
		</div>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('admin/Artikel') ?>">
		<i class="fas fa-newspaper"></i>
			<span>Artikel</span></a>
	</li>
</ul>
