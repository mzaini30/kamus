<template id="beranda">
	<div>
		<p><strong>Pencarian kata:</strong></p>
		<form @submit.prevent='mulai_cari()'>
			<div class="form-group">
				<label>Masukkan kata dalam bahasa Inggris</label>
				<input type="text" class="form-control" v-model='cari' required="" name="">
			</div>
		</form>
		<div class="form-group">
			<router-link to='/tambah'>Tambah kosakata</router-link>
		</div>
	</div>
</template>
<script type="text/javascript">
	beranda = {
		template: '#beranda',
		data(){
			return {
				cari: ''
			}
		},
		methods: {
			mulai_cari(){
				this.$router.push(`/hasil/${this.cari}`)
			}
		}
	}
</script>