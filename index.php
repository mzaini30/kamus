<!DOCTYPE html>
<html>
<head>
	<title>Kamus Inggris Indonesia</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap.min.css">
</head>
<body>
	<div class="vue">
		<div class="container lead">
			<h1><router-link to='/'>Kamus Inggris - Indonesia</router-link></h1>
			<router-view></router-view>
		</div>
	</div>
	<?php 
		include 'component/beranda.php';
		include 'component/hasil.php';
		include 'component/tambah.php';
	?> 
	<script type="text/javascript" src="/vendor/vue.min.js"></script>
	<script type="text/javascript" src="/vendor/vue-router.min.js"></script>
	<script type="text/javascript">
		new Vue({
			el: '.vue',
			router: new VueRouter({
				mode: 'history',
				routes: [
					{
						path: '/',
						component: beranda
					}, 
					{
						path: '/hasil/:kata',
						component: hasil
					},
					{
						path: '/tambah',
						component: tambah
					}
				]
			})
		})
	</script>
</body>
</html>