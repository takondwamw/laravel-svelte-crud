<script>
	import Footer from '../components/footer.svelte';
	import Navbar from '../components/navbar.svelte';
    
</script>

<Navbar />

<div class="container-fluid">
    <slot />
</div>
<!-- <iframe src="https://audiomack.com/embed/caesars-library/album/glory-in-his-presence"
		scrolling="no" width="30%" height="100" scrollbars="no" frameborder="0" autoplay>
</iframe> -->
<Footer />
