@extends('front.template')

@section('main')
	
	<section id="dispar-kontak-map">
		<div class="container">
			<nav class="breadcrumb" aria-label="breadcrumbs">
			  <ul>
			    <li><a href="/">Beranda</a></li>
			    <li class="is-active"><a href="#" aria-current="page">Kontak</a></li>
			  </ul>
			</nav>
		</div>
		<div class="columns is-gapless">
			<div class="column is-10">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8384468945037!2d116.87341601425456!3d-1.2698573990737951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df146963aafe5f1%3A0x6c2f292a791828a5!2sDISPORAPAR!5e0!3m2!1sid!2sid!4v1624099996814!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
			<div class="column has-background-grey-dark">
				<div class="has-text-centered pt-4 px-4">
					<p class="has-text-light">
						Pemerintah Kota Balikpapan, Kalimantan Timur Indonesia
					</p>
				</div>
			</div>
		</div>
	</section>			

	<div class="container mt-6">
		<section id="dispar-kontak">
			<div class="columns is-centered">
				<div class="column is-4">
					<p class="title is-size-4">Hubungi Kami</p>
					<p class="subtitle is-size-6 has-text-grey">Jangan sungkan untuk bertanya kepada kami terkait parawisata di kota samarinad melalui kontak person berikut.</p>
					<div class="has-text-left mb-2">
						<span class="icon-text">
							<span class="icon has-text-primary">
								<i class="fas fa-phone"></i>
							</span>
							<span>Telp 0541-7783-34</span>
						</span>
					</div>
					<div class="has-text-left mb-2">
						<span class="icon-text">
							<span class="icon has-text-primary">
								<i class="fas fa-globe"></i>
							</span>
							<span>dispar.com</span>
						</span>
					</div>
					<div class="has-text-left mb-2">
						<span class="icon-text">
							<span class="icon has-text-primary">
								<i class="fas fa-envelope"></i>
							</span>
							<span>dispar@balikpapan.com</span>
						</span>
					</div>
				</div>
				<div class="column is-6">
					<p class="title is-size-4">Formulir Pertanyaan</p>
					<p class="subtitle is-size-6 has-text-grey">Kirimi Kami Pertanyaan, Kritik dan Saran</p>

					<form action="../function/tambah_user.php" method="POST" enctype="multipart/form-data">
						<div class="field">
							<div class="control">
								<input class="input" type="text" placeholder="Nama Anda" required name="nama">
							</div>
						</div>

						<div class="field-body mb-3">
							<div class="field">
								<div class="control is-expanded">
									<input class="input" type="text" placeholder="Nomor Telepon" required name="notelp">
								</div>
							</div>
							<div class="field">
								<div class="control is-expanded">
									<input class="input" type="email" placeholder="Alamat Email" required name="email">
								</div>
							</div>
						</div>

						<div class="field">
					    	<div class="control">
					        	<textarea class="textarea" placeholder="Isi Pesan"></textarea>
					    	</div>
					    </div>

					    <div class="field">
							<div class="control">
								<input class="input" type="text" placeholder="Masukkan Kode Disini" required name="kode">
							</div>
						</div>

						<div class="field">
							<p class="control">
								<button type="submit" class="button is-link">Kirim Pesan</button>
							</p>
						</div>
					</form>
				</div>
			</div>
		</section>		
	</div>
@endsection