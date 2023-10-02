<script>
	import Footer from '../components/footer.svelte';
	import Navbar from '../components/navbar.svelte';
    
</script>

<Navbar />

<div class="container-fluid">
    <slot />
</div>

<Footer />
