<main class="flex h-screen w-full items-center">
	<section class="hidden h-full w-full flex-[3] items-center justify-center bg-color-primary-100 lg:flex">
		<div class="relative w-60">
			<img src="{{ asset('images/illustration1.png') }}" alt="Illustration" class="w-full">
			<div class="absolute -left-24 -top-16 max-w-xs rounded-lg rounded-br-none bg-white p-4">
				<p class="text-sm font-medium">Bantu isi survei ini ya??</p>
			</div>
			<div class="absolute -right-8 -top-16 max-w-xs rounded-lg rounded-bl-none bg-color-primary-500 p-4 text-white">
				<p class="text-sm font-bold">Boleh-boleh aja</p>
			</div>
		</div>
	</section>
	<section class="flex h-full w-full flex-[4] items-center justify-center bg-white px-6">
		<div class="flex w-full max-w-md flex-col gap-y-2">
			<p class="text-sm text-slate-500">Selamat Datang Kembali👋</p>
			<h1 class="text-2xl font-bold">Masuk Ke Akun Kamu</h1>
			<form action="" wire:submit.prevent="handleLogin" x-data="{ showPassword: false }">
				@csrf
				<div class="mt-2 flex flex-col gap-y-2">
					<label for="credential" class="text-sm">Kredensial</label>
					<input type="text" name="credential" wire:model="credential" class="rounded-md bg-neutral-100 p-4 text-sm text-slate-600 border border-gray-300 focus:outline-color-primary-500">
				</div>
				<div class="mt-2 flex flex-col gap-y-2">
					<label for="password" class="text-sm">Password</label>
					<input :type="showPassword ? 'text' : 'password'" name="password" wire:model="password" class="rounded-md bg-neutral-100 p-4 text-sm text-slate-600 border border-gray-300 focus:outline-color-primary-500">
				</div>
				<div class="mt-6 flex px-2">
					<input type="checkbox" id="show_pass" x-model="showPassword" class="mr-2 leading-tight">
					<label for="show_pass" class="text-sm">Tampil Password</label>
				</div>
				<div class="mt-4">
					<x-button color="primary" class="w-full" size="lg" type="submit">
						Login
					</x-button>
				</div>
				<div class="mt-4">
					<x-button color="primary" outlined="true" class="w-full" size="lg" onclick="window.location.href='{{ route('home') }}'">
						Beranda
					</x-button>
				</div>
			</form>
		</div>
	</section>
</main>
