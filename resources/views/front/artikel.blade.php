@extends('front.template')

@section('main')
	<section>
		<div class="container">
			<nav class="breadcrumb" aria-label="breadcrumbs">
			  <ul>
			    <li><a href="/">Beranda</a></li>
			    <li class="is-active"><a href="/artikel" aria-current="page">Artikel</a></li>
			  </ul>
			</nav>
		</div>
	</section>

	<div class="container">
		<section id="dispar-artikel" class="my-6">
			<form class="columns has-spaced-between mb-5">
				<div class="column is-2">
					<div class="field-body">
	      				<div class="field">
						  	<div class="control">
						    	<div class="select is-fullwidth">
							      	<select>
								    	<option selected>Terbaru</option>
								    	<option>Terlama</option>
							      	</select>
						    	</div>
						  	</div>
						</div>
      				</div>
				</div>
				<div class="column is-3 has-text-right">
					<div class="field has-addons">
					  <div class="control">
					    <input class="input" type="text" placeholder="Cari Artikel">
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