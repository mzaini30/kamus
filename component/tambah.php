<template id="tambah">
	<div>
		<form @submit.prevent='tambahkan()'>
			<div class="form-group">
				<label>Istilah bahasa Indonesia</label>
				<input type="text" class="form-control" v-model='indonesia' required="" name="">
			</div>
			<div class="form-group">
				<label>Istilah bahasa Inggris</label>
				<input type="text" class="form-control" v-model='inggris' required="" name="">
			</div>
			<div class="form-group">
				<input type="submit" value="Tambahkan" class="btn btn-success" name="">
			</div>
		</form>
	</div>
</template>
<script type="text/javascript">
	tambah = {
		template: '#tambah',
		data(){
			return {
				indonesia: '',
				inggris: ''
			}
		},
		methods: {
			tambahkan(){
				body = new FormData
				body.append('indonesia', this.indonesia)
				body.append('inggris', this.inggris)
				fetch('/api.php/tambah', {
					method: 'post',
					body
				}).then(() => {
					alert('Entri baru sudah dimasukkan')
					this.indonesia = ''
					this.inggris = ''
				})
			}
		}
	}
</script>