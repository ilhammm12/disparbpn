@extends('front.template')

@section('main')
	<section id="dispar-login">
		<img src="{{ asset('img/gradient.png') }}" alt="">
		<div class="columns is-centered">
			<div class="column is-3">
				<div class="card pb-2 px-3" style="border-radius: 17px">
					<div class="card-header pt-5">
						<div class="has-text-centered is-block" style="width: 100%">
							<p class="is-size-4 has-text-weight-semibold has-text-dark">Masuk Akun</p>
							<p class="is-size-6 has-text-grey">Masukkan data dengan benar</p>
						</div>
					</div>
					<div class="card-content">
						<div class="content">
							<form action="">
								<div class="field mb-3">
								  <div class="control">
								    <input class="input" type="email" placeholder="Alamat Email">
								  </div>
								</div>
								<div class="field mb-4">
									<div class="control">
										<input type="password" class="input" placeholder="Kata Sandi">
									</div>
								</div>
								<div class="field">
									<div class="control">
										<button class="button is-fullwidth is-link">Masuk</button>
									</div>
								</div>
							</form>
							<div class="has-text-centered mt-4">
								<a href="/" class="is-size-7 has-text-centered has-text-grey-light">Dinas Pariwisata Kota Balikpapan</a>
							</div>
						</div>
					</div>
						
				</div>
			</div>
		</div>
	</section>
@endsection