<template id="hasil">
	<div>
		<span v-if='ketemu' v-for='x in hasil'>
			<p>Bahasa Indonesia dari <em>{{ x.inggris }}</em> adalah: <strong>{{ x.indonesia }}</strong></p>
		</span>
		<span v-if='!ketemu'>
			<p>Tidak ada padanan kata bahasa Indonesia untuk <strong>{{ $route.params.kata }}</strong></p>
		</span>
	</div>
</template>
<script type="text/javascript">
	hasil = {
		template: '#hasil',
		data(){
			return {
				ketemu: false,
				hasil: []
			}
		},
		mounted(){
			fetch(`/api.php/cek/${this.$route.params.kata}`).then(x => x.json()).then(data => {
				this.hasil = data
				if (data.length > 0){
					this.ketemu = true
				}
			})
		}
	}
</script>