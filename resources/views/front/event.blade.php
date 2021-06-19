@extends('front.template')

@section('main')
	<section>
		<div class="container">
			<nav class="breadcrumb" aria-label="breadcrumbs">
			  <ul>
			    <li><a href="/">Beranda</a></li>
			    <li><a>Destinasi</a></li>
			    <li class="is-active"><a href="#" aria-current="page">Event</a></li>
			  </ul>
			</nav>
		</div>
		<figure class="event-slide slide-page">
			<img src="{{ asset('img/fest3.jpg') }}" alt="" width="100%">
			<img src="{{ asset('img/fest2.jpg') }}" alt="" width="100%">
		</figure>
	</section>

	<div class="container">
		<section id="dispar-event" class="mb-6 mt-5">
			<form class="columns has-spaced-between mb-5">
				<div class="column is-2">
					<div class="field-body">
						<div class="field">
							<!-- <label>Kota</label> -->
						  	<div class="control">
						    	<div class="select is-fullwidth">
							      	<select>
								    	<option selected>Kategori</option>
								    	<option>Kompetisi</option>
								    	<option>Festival</option>
								    	<option>Lainnya</option>
							      	</select>
						    	</div>
						  	</div>
						</div>
      				</div>
				</div>
				<div class="column is-3 has-text-right">
					<div class="field has-addons">
					  <div class="control">
					    <input class="input" type="text" placeholder="Cari Event">
					  </div>
					  <div class="control">
					    <a class="button is-link">
					      Cari
					    </a>
					  </div>
					</div>
				</div>
			</form>
			<div class="columns is-multiline">
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
			<div class="columns is-centered">
				<div class="column is-6">
					<nav class="pagination is-centered mt-6" role="navigation" aria-label="pagination">
					  <a class="pagination-previous">Previous</a>
					  <a class="pagination-next">Next page</a>
					  <ul class="pagination-list">
					    <li><a class="pagination-link" aria-label="Goto page 1">1</a></li>
					    <li><span class="pagination-ellipsis">&hellip;</span></li>
					    <li><a class="pagination-link" aria-label="Goto page 45">45</a></li>
					    <li><a class="pagination-link is-current" aria-label="Page 46" aria-current="page">46</a></li>
					    <li><a class="pagination-link" aria-label="Goto page 47">47</a></li>
					    <li><span class="pagination-ellipsis">&hellip;</span></li>
					    <li><a class="pagination-link" aria-label="Goto page 86">86</a></li>
					  </ul>
					</nav>
				</div>
			</div>
		</section>
	</div>

@endsection