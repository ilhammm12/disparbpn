@extends('front.template')

@section('main')
	

<div class="container">
	<section id="dispar-header" class="mt-5 mb-5">
		<figure id="wrap-header">
			<img src="{{ asset('img/header-homepage.jpg') }}" alt="" >
			<figcaption>
				<div class="columns is-centered item-header">
					<div class="column is-narrow">
						<div class="has-text-centered">
							<p class="title is-size-1 has-text-light">Balikpapan</p>
							<p class="subtitle is-size-4 has-text-light">Temukan Destinasi Wisata Lokal</p>
						</div>
						<br>
						<form action="">
							<div class="field has-addons has-addons-centered">
							  <p class="control">
							    <input class="input is-medium is-rounded" type="text" placeholder="Apa yang sedang kamu cari ?">
							  </p>
							  <p class="control">
							    <span class="select is-medium">
							      <select>
							        <option selected disabled>Kategori</option>
							        <option>Event</option>
							        <option>Kuliner</option>
							        <option>Wisata</option>
							        <option>Penginapan</option>
							      </select>
							    </span>
							  </p>
							  <p class="control">
							    <a class="button is-link is-medium is-rounded">
							      Mulai Cari
							    </a>
							  </p>
							</div>
						</form>
					</div>
				</div>
			</figcaption>
		</figure>
		<div class="columns is-centered widget-header">
			<a href="/wisata" class="column is-1 has-background-light has-text-centered">
				<span class="icon is-medium has-text-link">
					<i class="fas fa-archway fa-lg"></i>
				</span>
				<p class="is-size-7 has-text-grey-dark has-text-weight-semibold">Wisata</p>
			</a>
			<a href="/kuliner" class="column is-1 has-background-light has-text-centered">
				<span class="icon is-medium has-text-info">
					<i class="fas fa-utensils fa-lg"></i>
				</span>
				<p class="is-size-7 has-text-grey-dark has-text-weight-semibold">Kuliner</p>
			</a>
			<a href="/penginapan" class="column is-1 has-background-light has-text-centered">
				<span class="icon is-medium has-text-primary">
					<i class="fas fa-bed fa-lg"></i>
				</span>
				<p class="is-size-7 has-text-grey-dark has-text-weight-semibold">Penginapan</p>
			</a>
			<a href="/event" class="column is-1 has-background-light has-text-centered">
				<span class="icon is-medium has-text-success">
					<i class="fas fa-calendar fa-lg"></i>
				</span>
				<p class="is-size-7 has-text-grey-dark has-text-weight-semibold">Event</p>
			</a>
		</div>
	</section>
</div>
	<br>
	<br>
	<section id="dispar-map" class="my-6">
		<div class="has-text-centered mb-5">
			<p class="title is-size-3 has-text-weight-bold">Peta Wilayah Kota Balikpapan</p>
			<p class="subtitle is-size-5 has-text-grey">Beberapa Objek-Objek Destinasi</p>
		</div>
		<div id="map-canvas">
		</div>
	</section>

<div class="container">
	<section id="dispar-event" class="my-6 py-6">
		<div class="has-text-centered mb-5">
			<p class="title is-size-4">Event Terbaru</p>
			<p class="subtitle is-size-5 has-text-grey">Bermacam Kegiatan yang akan di adakan kota balikpapan</p>
		</div>
		<div class="columns mt-4 mb-5">
			<a href="/eventDetail" class="column is-3 item-event">
				<figure>
					<img src="{{ asset('img/fest1.jpeg') }}" alt="" >
					<figcaption>
						<span class="tag is-link mb-3 is-medium">Festival</span>
						<p class="has-text-weight-bold mb-2 is-size-5">Balikpapan Festival 2020 : bpngo 123</p>
						<p class="has-text-light is-size-6">
							<span class="icon has-text-link">
								<i class="fas fa-map-marker-alt"></i>
							</span>
							Lapangan Tennis Indoor
						</p>
					</figcaption>
				</figure>
			</a>
			<a href="/eventDetail" class="column is-3 item-event">
				<figure>
					<img src="{{ asset('img/fest2.jpg') }}" alt="" >
					<figcaption>
						<span class="tag is-link mb-3 is-medium">Kompetisi</span>
						<p class="has-text-weight-bold mb-2 is-size-5">Pemilihan Duta Wisata Manuntung Balikpapan 2021</p>
						<p class="has-text-light is-size-6">
							<span class="icon has-text-link">
								<i class="fas fa-map-marker-alt"></i>
							</span>Dome</p>
					</figcaption>
				</figure>
			</a>
			<a href="/eventDetail" class="column is-3 item-event">
				<figure>
					<img src="{{ asset('img/fest3.jpg') }}" alt="" >
					<figcaption>
						<span class="tag is-link mb-3 is-medium">Hiburan</span>
						<p class="has-text-weight-bold mb-2 is-size-5">Study Tour SMA/SMK Balikpapan</p>
						<p class="has-text-light is-size-6">
							<span class="icon has-text-link">
								<i class="fas fa-map-marker-alt"></i>
							</span>Balikpapan</p>
					</figcaption>
				</figure>
			</a>
			<a href="/eventDetail" class="column is-3 item-event">
				<figure>
					<img src="{{ asset('img/fest4.jpg') }}" alt="" >
					<figcaption>
						<span class="tag is-link mb-3 is-medium">Kompetisi</span>
						<p class="has-text-weight-bold mb-2 is-size-5">Piala Wali Kota Balikpapan 2021</p>
						<p class="has-text-light is-size-6">
							<span class="icon has-text-link">
								<i class="fas fa-map-marker-alt"></i>
							</span>Lapangan Merdeka</p>
					</figcaption>
				</figure>
			</a>
		</div>
		<div class="has-text-centered">
			<a href="/event" class="button is-link is-light">Lihat lebih banyak</a>
		</div>
	</section>

	<section id="dispar-kuliner" class="my-6 py-6">
		<div class="columns">
			<div class="column">
				<p class="title is-size-4">Kuliner Populer</p>
				<p class="subtitle is-size-5 has-text-grey">Nikmati jajanan kuliner kota balikpapan</p>
			</div>
			<div class="column is-narrow" style="align-self: flex-end;">
				<a href="/kuliner" class="button is-link is-light">Lihat lebih banyak</a>
			</div>
		</div>
		<div class="columns">
			<a href="/kulinerDetail" class="column is-3 item-kuliner">
				<figure>
					<img src="{{ asset('img/kuliner1.jpg') }}" alt="" >
					<figcaption>
						<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Warung Makan Ibu Andin</p>
						<div class="mb-2">
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-grey-light">
								<i class="fas fa-star"></i>
							</span>
							<span class="has-text-grey ml-1">
								 (51) 
							</span>
						</div>
						<p class="has-text-grey">
							<span class="icon is-small mr-1 has-text-link">
								<i class="fas fa-map-marker-alt"></i>
							</span>
							Jalan MT Haryono, No.42
						</p>
						<p class="is-size-7 has-text-grey">
							1KM dari posisimu
						</p>
					</figcaption>
				</figure>
			</a>
			<a href="/kulinerDetail" class="column is-3 item-kuliner">
				<figure>
					<img src="{{ asset('img/kuliner2.jpg') }}" alt="" >
					<figcaption>
						<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Soto Lamongan Cak</p>
						<div class="mb-2">
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-grey-light">
								<i class="fas fa-star"></i>
							</span>
							<span class="has-text-grey ml-1">
								 (42) 
							</span>
						</div>
						<p class="has-text-grey">
							<span class="icon is-small mr-1 has-text-link">
								<i class="fas fa-map-marker-alt"></i>
							</span>
							Jalan Imam Bondjol, No.34
						</p>
						<p class="is-size-7 has-text-grey">
							3KM dari posisimu
						</p>
					</figcaption>
				</figure>
			</a>
			<a href="/kulinerDetail" class="column is-3 item-kuliner">
				<figure>
					<img src="{{ asset('img/kuliner3.jpg') }}" alt="" >
					<figcaption>
						<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Rumah makan Torani</p>
						<div class="mb-2">
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-grey-light">
								<i class="fas fa-star"></i>
							</span>
							<span class="has-text-grey ml-1">
								 (38) 
							</span>
						</div>
						<p class="has-text-grey">
							<span class="icon is-small mr-1 has-text-link">
								<i class="fas fa-map-marker-alt"></i>
							</span>
							Jalan Sei Wain, No.27
						</p>
						<p class="is-size-7 has-text-grey">
							0.3KM dari posisimu
						</p>
					</figcaption>
				</figure>
			</a>
			<a href="/kulinerDetail" class="column is-3 item-kuliner">
				<figure>
					<img src="{{ asset('img/kuliner4.jpg') }}" alt="" >
					<figcaption>
						<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Warung Padang Upik</p>
						<div class="mb-2">
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-grey-light">
								<i class="fas fa-star"></i>
							</span>
							<span class="has-text-grey ml-1">
								 (35) 
							</span>
						</div>
						<p class="has-text-grey">
							<span class="icon is-small mr-1 has-text-link">
								<i class="fas fa-map-marker-alt"></i>
							</span>
							Jalan MT Haryono, No.21
						</p>
						<p class="is-size-7 has-text-grey">
							7KM dari posisimu
						</p>
					</figcaption>
				</figure>
			</a>
		</div>
	</section>

	<section id="dispar-wisata" class="my-6 py-6">
		<div class="columns">
			<div class="column">
				<p class="title is-size-4">Wisata Unggulan</p>
				<p class="subtitle is-size-5 has-text-grey">Jelajahi tempat wisata kota balikpapan</p>
			</div>
			<div class="column is-narrow" style="align-self: flex-end;">
				<a href="/wisata" class="button is-link is-light">Lihat lebih banyak</a>
			</div>
		</div>
		<div class="columns">
			<a href="/wisataDetail" class="column is-3 item-wisata">
				<figure>
					<img src="{{ asset('img/wisata1.jpeg') }}" alt="" >
					<figcaption>
						<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Bukit Bangkirai</p>
						<div class="mb-2">
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-grey-light">
								<i class="fas fa-star"></i>
							</span>
							<span class="has-text-grey ml-1">
								 (51) 
							</span>
						</div>
						<p class="has-text-grey">
							<span class="icon is-small mr-1 has-text-link">
								<i class="fas fa-map-marker-alt"></i>
							</span>
							Jalan MT Haryono, No.42
						</p>
						<p class="is-size-7 has-text-grey">
							1KM dari posisimu
						</p>
					</figcaption>
				</figure>
			</a>
			<a href="/wisataDetail" class="column is-3 item-wisata">
				<figure>
					<img src="{{ asset('img/wisata2.jpg') }}" alt="" >
					<figcaption>
						<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Danau Cermin</p>
						<div class="mb-2">
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-grey-light">
								<i class="fas fa-star"></i>
							</span>
							<span class="has-text-grey ml-1">
								 (51) 
							</span>
						</div>
						<p class="has-text-grey">
							<span class="icon is-small mr-1 has-text-link">
								<i class="fas fa-map-marker-alt"></i>
							</span>
							Jalan MT Haryono, No.42
						</p>
						<p class="is-size-7 has-text-grey">
							1KM dari posisimu
						</p>
					</figcaption>
				</figure>
			</a>
			<a href="/wisataDetail" class="column is-3 item-wisata">
				<figure>
					<img src="{{ asset('img/wisata3.jpg') }}" alt="" >
					<figcaption>
						<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Pantai Kilang</p>
						<div class="mb-2">
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-grey-light">
								<i class="fas fa-star"></i>
							</span>
							<span class="has-text-grey ml-1">
								 (51) 
							</span>
						</div>
						<p class="has-text-grey">
							<span class="icon is-small mr-1 has-text-link">
								<i class="fas fa-map-marker-alt"></i>
							</span>
							Jalan MT Haryono, No.42
						</p>
						<p class="is-size-7 has-text-grey">
							1KM dari posisimu
						</p>
					</figcaption>
				</figure>
			</a>
			<a href="/wisataDetail" class="column is-3 item-wisata">
				<figure>
					<img src="{{ asset('img/wisata4.jpg') }}" alt="" >
					<figcaption>
						<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Beruang Madu</p>
						<div class="mb-2">
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-grey-light">
								<i class="fas fa-star"></i>
							</span>
							<span class="has-text-grey ml-1">
								 (51) 
							</span>
						</div>
						<p class="has-text-grey">
							<span class="icon is-small mr-1 has-text-link">
								<i class="fas fa-map-marker-alt"></i>
							</span>
							Jalan MT Haryono, No.42
						</p>
						<p class="is-size-7 has-text-grey">
							1KM dari posisimu
						</p>
					</figcaption>
				</figure>
			</a>
		</div>
	</section>

	<section id="dispar-penginapan" class="my-6 py-6">
		<div class="columns">
			<div class="column">
				<p class="title is-size-4">Penginapan Terdekat</p>
				<p class="subtitle is-size-5 has-text-grey">Temukan tempat penginapan wilayah balikpapan</p>
			</div>
			<div class="column is-narrow" style="align-self: flex-end;">
				<a href="/penginapan" class="button is-link is-light">Lihat lebih banyak</a>
			</div>
		</div>
		<div class="columns">
			<a href="/penginapanDetail" class="column is-3 item-penginapan">
				<figure>
					<img src="{{ asset('img/penginapan1.jpg') }}" alt="" >
					<figcaption>
						<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Grand Jatra</p>
						<div class="mb-2">
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-grey-light">
								<i class="fas fa-star"></i>
							</span>
							<span class="has-text-grey ml-1">
								 (31) 
							</span>
						</div>
						<p class="has-text-grey">
							<span class="icon is-small mr-1 has-text-link">
								<i class="fas fa-map-marker-alt"></i>
							</span>
							Jalan Indramayu
						</p>
						<p class="is-size-7 has-text-grey">
							3KM dari posisimu
						</p>
					</figcaption>
				</figure>
			</a>
			<a href="/penginapanDetail" class="column is-3 item-penginapan">
				<figure>
					<img src="{{ asset('img/penginapan2.jpg') }}" alt="" >
					<figcaption>
						<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Golden Tulip Balikpapan</p>
						<div class="mb-2">
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-grey-light">
								<i class="fas fa-star"></i>
							</span>
							<span class="has-text-grey ml-1">
								 (21) 
							</span>
						</div>
						<p class="has-text-grey">
							<span class="icon is-small mr-1 has-text-link">
								<i class="fas fa-map-marker-alt"></i>
							</span>
							Jalan MT Haryono, No.98
						</p>
						<p class="is-size-7 has-text-grey">
							5KM dari posisimu
						</p>
					</figcaption>
				</figure>
			</a>
			<a href="/penginapanDetail" class="column is-3 item-penginapan">
				<figure>
					<img src="{{ asset('img/penginapan3.jpg') }}" alt="" >
					<figcaption>
						<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Le Grandeur</p>
						<div class="mb-2">
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-grey-light">
								<i class="fas fa-star"></i>
							</span>
							<span class="has-text-grey ml-1">
								 (34) 
							</span>
						</div>
						<p class="has-text-grey">
							<span class="icon is-small mr-1 has-text-link">
								<i class="fas fa-map-marker-alt"></i>
							</span>
							Jalan Sakura, no.44
						</p>
						<p class="is-size-7 has-text-grey">
							1.2KM dari posisimu
						</p>
					</figcaption>
				</figure>
			</a>
			<a href="/penginapanDetail" class="column is-3 item-penginapan">
				<figure>
					<img src="{{ asset('img/penginapan4.jpg') }}" alt="" >
					<figcaption>
						<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Grand Tiga Mustika</p>
						<div class="mb-2">
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-warning">
								<i class="fas fa-star checked"></i>
							</span>
							<span class="icon is-small has-text-grey-light">
								<i class="fas fa-star"></i>
							</span>
							<span class="has-text-grey ml-1">
								 (53) 
							</span>
						</div>
						<p class="has-text-grey">
							<span class="icon is-small mr-1 has-text-link">
								<i class="fas fa-map-marker-alt"></i>
							</span>
							Jalan MT Haryono, No.22
						</p>
						<p class="is-size-7 has-text-grey">
							6KM dari posisimu
						</p>
					</figcaption>
				</figure>
			</a>
		</div>
	</section>

	<section id="dispar-artikel" class="my-6 py-6">
		<div class="columns">
			<div class="column">
				<p class="title is-size-4">Artikel Terbaru</p>
				<p class="subtitle is-size-5 has-text-grey">Informasi terbaru terkait wilayah balikpapan</p>
			</div>
			<div class="column is-narrow" style="align-self: flex-end;">
				<a href="/artikel" class="button is-link is-light">Lihat lebih banyak</a>
			</div>
		</div>
		<div class="columns">
			<a href="/artikelDetail" class="column is-4 item-artikel">
				<figure>
					<img src="{{ asset('img/artikel1.jpg') }}" alt="" >
					<figcaption>
						<!-- <span class="tag is-link">Wisata</span> -->
						<p class="has-text-weight-bold is-size-4 has-text-grey-dark">Ini alasan mengapa kamu harus mengunjungi pantai lamaru</p>
						<p class="has-text-link has-text-weight-semibold mb-2 mt-1">
							<span class="icon">
								<i class="far fa-clock"></i>
							</span>
							1 Hari Lalu
						</p>
						<p class="has-text-grey">Masyarakat kota balikpakan pasti sudah tidak asing dengan yang namanya wisata pantai lamaru, terlepas dari populernya wisata pantai lamaru memang pantas dan wajib untuk kamu kunjungi sebagai tamu kota balikpapan</p>
					</figcaption>
				</figure>
			</a>
			<a href="/artikelDetail" class="column is-4 item-artikel">
				<figure>
					<img src="{{ asset('img/artikel2.jpg') }}" alt="" >
					<figcaption>
						<!-- <span class="tag is-link">Wisata</span> -->
						<p class="has-text-weight-bold is-size-4 has-text-grey-dark">Beberapa spot wisata yang instagramable </p>
						<p class="has-text-link has-text-weight-semibold mb-2 mt-1">
							<span class="icon">
								<i class="far fa-clock"></i>
							</span>
							3 Hari Lalu
						</p>
						<p class="has-text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem libero voluptas ea cum nesciunt aperiam esse maxime necessitatibus quis sit, corporis, voluptate dolore incidunt. Natus ducimus voluptatem laudantium ipsum assumenda.</p>
					</figcaption>
				</figure>
			</a>
			<a href="/artikelDetail" class="column is-4 item-artikel">
				<figure>
					<img src="{{ asset('img/artikel3.jpg') }}" alt="" >
					<figcaption>
						<!-- <span class="tag is-link">Wisata</span> -->
						<p class="has-text-weight-bold is-size-4 has-text-grey-dark">Waterboom menjadi langganan masyarakat kala liburan</p>
						<p class="has-text-link has-text-weight-semibold mb-2 mt-1">
							<span class="icon">
								<i class="far fa-clock"></i>
							</span>
							1 Hari Lalu
						</p>
						<p class="has-text-grey">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam corrupti harum excepturi accusamus eos inventore ipsa ut sint, impedit nemo, maiores mollitia laboriosam fuga quasi provident necessitatibus molestiae itaque ex.</p>
					</figcaption>
				</figure>
			</a>
		</div>
	</section>
</div>

@endsection